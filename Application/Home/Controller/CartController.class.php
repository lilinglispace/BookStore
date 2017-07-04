<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class CartController extends PublicController
{
	//减少数目
	public function desr()
	{
		//获取商品货号，用户编号
		$goods_id=I('id');
		$userid=cookie('userid');
		/*
		$tool=\Home\Tool\AddTool::getIns();
		$tool->decr($userid,$goods_id);
		*/
		//更新cart表
		$cart=D('cart');
		$info=$cart->where('userid=%s and goods_id=%s',array($userid,$goods_id))->find();
		if($info)
		{
			$data['num']=$info['num']-1;
			//若数量减少为0则直接删除
			if($data['num']<=0)
			{
				$cart->where('userid=%s and goods_id=%s',array($userid,$goods_id))->delete();
			}
			else
			{
				$cart->where('userid=%s and goods_id=%s',array($userid,$goods_id))->save($data);
			}
		}
		$this->redirect('home/cart/lst');
		//$this->display();
	}
	//增添数目
	public function add()
	{
		$cart=D('cart');
		$goods_id=I('id');
		$userid=cookie('userid');
		$goods=D('goods');
		//查询该商品的库存量
		$info=$goods->where('id='.$goods_id)->find();
		$tool=\Home\Tool\AddTool::getIns();
		$tool->addnum($userid,$goods_id,$info['reserve']);
		//var_dump($tool);
		//$tool->clear($userid);
		$info=$cart->where('userid=%s and goods_id=%s',array($userid,$goods_id))->find();
		$bookinfo=$goods->where('id='.$goods_id)->find();
		if($info['num']>=$bookinfo['reserve'])
		{
			$data['num']=$bookinfo['reserve'];
		}
		else
		{
			$data['num']=$info['num']+1;
		}
		//exit;
		$cart->where('userid=%s and goods_id=%s',array($userid,$goods_id))->save($data);
		//echo $tool->item[$userid][$goods_id]['num'];
		/*exit;
		//修改用户数据表中的信息
		$cart=D('cart');
		echo $data['num']=$tool->item[$goods_id]['num'];
		exit;
		$status=0;
		$cart->where('userid=%s and goods_id=%s and status=%d',array($userid,$goods_id,$status))->save($data);
		*/
		$this->redirect('home/cart/lst');
		//$this->display();
	}
	//显示购物车中的信息
	public function lst()
	{
		//显示该用户的购物车中的信息
		$userid=cookie('userid');
		$tool=\Home\Tool\AddTool::getIns();
		//$cart=session('cart');
		//var_dump($tool->items($userid));
		//exit;
		//$this->assign('cart',$tool->items($userid));
		//$this->assign('cart',$cart->where('userid='.$userid)->select());
		$this->assign('totalmoney',$tool->calcMoney($userid));

		$cart=D('cart');
		$this->assign('cart',$cart->where('userid='.$userid)->select());
		$this->display();
	}


	//删除购物车中的数据信息
	public function del()
	{

		$id=I('id');
		//$tool->clear($userid);
		//var_dump($tool);
		//exit;
		//从购物车表中删除
		$cart=D('cart');
		$cart->where('id='.$id)->delete();
		$this->redirect('home/cart/lst');
	}

	public function order_success()
	{
		$this->display();
	}

	//提交订单
	public function addorder()
	{
		if(IS_POST)
		{
			$id=I('id');
			$order=D('admin/order');
			$cart=D('cart');
			$userid=cookie('userid');
			$tool=\Home\Tool\AddTool::getIns();
			$ord_sn=$data['order_id']= date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
			$data['user_id']=cookie('userid');
			//支付状态设置为0
			$data['pay_status']=1;
			//发货状态
			$data['post_status']=0;
			//订单状态设置为未完成
			$data['order_status']=0;
			$data['pay_method']=$_POST['pay_method'];
			$data['total_price']=$_POST['total_price'];
			$data['post_method']=$_POST['post_method'];
			$data['area']=$_POST['area'];
			$data['desc_area']=$_POST['desc_area'];
			$data['name']=$_POST['name'];
			$data['tel']=$_POST['tel'];
			if($order->add($data))
			{
				//将订单中的商品添加至商品表
				$ordgoods=D('ordgoods');
				$orddata=null;
				foreach($cart->where(array('id'=>array('in',$id)))->select() as $k=>$v)
				{
					$row = array();
					$row['ord_id'] = $ord_sn;
					$row['userid']=cookie('userid');
					$row['goods_id'] = $v['goods_id'];
					$row['goods_name'] = $v['goods_name'];
					$row['shop_price'] = $v['price_hot'];
					$row['goods_num'] = $v['num'];
					$row['goods_img']=$v['goods_img'];
					$row['pay_status']=1;
					$row['post_status']=0;
					$row['order_status']=0;
					$row['area']=$_POST['area'].$_POST['desc_area'].$_POST['name'].$_POST['tel'];
					$orddata[] = $row;

					//修改该商品的库存
					$goods=D('admin/goods');
					$goodsinfo=$goods->where('id='.$v['goods_id'])->find();
					$re['reserve']=$goodsinfo['reserve']-$v['num'];
					$goods->where('id='.$v['goods_id'])->save($re);
				}
				if(!$ordgoods->addAll($orddata))
				{
					//下单失败
					//从order表中删除数据
					$order->where('ord_sn='.$ord_sn)->delete();
					//ordgoods表中删除
					$ordgoods->where('ord_id='.$ord_sn)->delete();
					echo "下单失败！";
					exit;
				}
				//订购成功，清空购物车
				$tool->clear($userid);
				//清空购物车表
				$cart=D('cart');
				$cart->where(array('id'=>array('in',$id)))->delete();
				$this->redirect('home/cart/order_success','',1,'下单成功！');

			}
			else
			{
				$this->error('提交订单失败！');
			}
		}
		else
		{
			$this->error('请选择！');
		}
		
		$this->display();
	}
}