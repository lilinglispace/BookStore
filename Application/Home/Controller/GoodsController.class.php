<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class GoodsController extends PublicController
{

	public function book()
	{
		$cate_id=I('id');
		$data['cate|p_id']=$cate_id;
		$count=M('goods')->where($data)->count();
	    $Page=new \Think\Page($count,8);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $book =$Page->show();
       
        $res=M('goods')->where($data)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('book',$res);
		//$goods=D('goods');
		$this->assign('page',$book);
		//$this->assign('count',$goods->where('cate='.$cate_id)->count());
		$cate=D('admin/cate');
		$this->assign('bookcate',$cate->where('id='.$cate_id)->find());
		//子分类
		$this->assign('sonbook',$cate->where('p_id='.$cate_id)->select());
		$this->display();
	}
	//详细的书籍页面
	public function detail()
	{
		//接受传入的图书编号
		$goods=D('admin/goods');
		$id=I('id');
		//exit;
		$isbn=I('isbn');
		//exit;
		$this->assign('desc',$goods->where('id='.$id)->find());
		$pic=D('admin/pic');
		$this->assign('pic',$pic->where('isbn='.$isbn)->select());
		$desc=D('admin/desc');
		$this->assign('des',$desc->where('isbn='.$isbn)->select());
		//显示该书籍的评论
		$comm=D('comment');
		$this->assign('comment',$comm->where('goods_id='.$id)->select());
		$this->display();
	}

	public function search()
	{
		$this->display();
	}


	//将该商品添加至购物车
	public function addcart()
	{
		$tool=\Home\Tool\AddTool::getIns();
		$goods_id=I('get.id');
		$num=I('num');
		//exit;
		$goods=D('goods');
		//查询该物品的其它信息
		$goodsinfo=$goods->where('id='.$goods_id)->find();
		$userid=cookie('userid');
		$cart=D('cart');
		$info=$cart->where('userid=%s and goods_id=%s',array($userid,$goods_id))->find();
		//如果购物车中不存在
		if(!$info)
		{
			$data['userid']=$userid;
			$data['goods_id']=$goods_id;
			$data['goods_name']=$goodsinfo['name'];
			$data['price_hot']=$goodsinfo['price_hot'];
			$data['num']=$num;
			$data['goods_img']=$goodsinfo['img'];
			$data['total']=$num*$goodsinfo['price_hot'];
			//当前购物车状态为0，购物车中的数据并没有提交，若提交则状态变为1
			//$data['status']=0;
			$cart->add($data);
		}
		else
		{
			$data['num']=$info['num']+$num;
			$cart->where('id='.$info['id'])->save($data);
		}
		$this->redirect('home/cart/lst');

		//$this->display();
	}
}