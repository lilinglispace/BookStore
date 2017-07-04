<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class PersonController extends PublicController
{
	//修改用户密码
	public function cpwd()
	{
		//$person=D('person');
		$user=D('user');
		$id=cookie('userid');
		$use=$user->where('id='.$id)->find();
		$salt=$use['salt'];
		//exit;
		if(IS_POST)
		{
			//将输入的原始密码与数据库密码进行比较
			$pwd=I('npwd');
			if(md5($pwd.$salt)==$use['pwd'])
			{
				//确保输入的新密码两次是相同的
				if($user->create($_POST))
				{
					//在数据库中修改密码
					$newpwd=I('newpwd');
					$str="sg!728$^%^&*^^$%)(@";
		            $s=substr(str_shuffle($str),0,8);
					//echo $data['salt']=salt();
					//exit;
					$data['pwd']=md5($newpwd.$s);
					$data['salt']=$s;
					//exit;
					if($user->where('id='.$id)->save($data))
					{
						$this->redirect('home/person/cpwd','',1,'密码修改成功！');
					}
				}
				else
				{
					$this->error('再次输入的密码不正确!');
				}
			}
			else
			{
				$this->error('原始密码不正确!');
			}
		}
		$this->display();
	}
	//修改个人信息
	public function editmine()
	{
		$user=M('user');
		$id=cookie('userid');
		$this->assign('user',$user->where('id='.$id)->find());
		//var_dump($user->where('id='.$id)->find());
		//exit;
		if(IS_POST)
		{
			//如果上传文件不为空
			if($_FILES['img']['name']!=null)
			{
				$upload=new \Think\Upload();
				$upload->maxSize=3784625874;
				$upload->exts=array('jpeg','gif','png','jpg');
				$upload->rootPath="Public/Upload/Admin/User/";
				$upload->savePath='';
				$info=$upload->upload();
				if(!$info)
				{
					$this->error($upload->getError());
					$this->redirect('home/person/editmine','',1,'上传头像失败！');
				}
				else
				{
					$data['img']=$info['img']['savepath'].$info['img']['savename'];
					$data['tel']=I('tel');
					$data['email']=I('email');
					if($user->where('id='.$id)->save($data))
					{
						$this->redirect('home/person/editmine','',1,'修改个人信息成功');
					}
					else
					{
						$this->redirect('home/person/editmine','',1,'修改个人信息失败');
					}
				}
			}
		}
		$this->display();
	}
	//显示个人信息
	public function information()
	{
		$user=D('user');
		$id=cookie('userid');
		$this->assign('user',$user->where('id='.$id)->find());
		$this->display();
	}
	public function left()
	{
		$this->display();
	}

	//查询所有的订单
	public function order()
	{
		$ordgoods=D('ordgoods');
		$userid=cookie('userid');
		$this->assign('order',$ordgoods->where('userid='.$userid)->select());
		$status=0;
		$this->assign('order_status',$ordgoods->where('userid=%s and order_status=%d',array($userid,$status))->count());
		$status1=0;
		$this->assign('pay_status',$ordgoods->where('userid=%s and pay_status=%d',array($userid,$status1))->count());
		$this->assign('post_status',$ordgoods->where('userid=%s and post_status=%d',array($userid,$status))->count());
		$status2=2;
		$this->assign('order_status2',$ordgoods->where('userid=%s and order_status=%d',array($userid,$status2))->count());
		$this->display();
		/*
		$order=D('order');
		$userid=cookie('userid');
		$this->assign('order',$order->where('user_id='.$userid)->select());
		$this->display();
		*/
	}


	//退货
	public function tuihuo()
	{
		//退货单号
		$ord_id=I('ord_id');
		//商品号
		$goods_id=I('goods_id');
		//修改该订单的状态将该订单的order_status设置为
		$ordgoods=D('ordgoods');
		$userid=cookie('userid');
		$data['order_status']=3;
		if($ordgoods->where('userid=%s and goods_id=%d and ord_id=%s ',array($userid,$goods_id,$ord_id))->save($data))
		{
			$this->success('退货成功！');
		}
		//$this->display();
		$status0=0;
	}


	//确认收货
	public function acc()
	{
		$goods_id=I('goods_id');
		$ord_id=I('ord_id');
		$ordgoods=D('ordgoods');
		$userid=cookie('userid');
		$data['order_status']=2;
		if($ordgoods->where('userid=%s and goods_id=%d and ord_id=%s ',array($userid,$goods_id,$ord_id))->save($data))
		{
			$order=D('order');
			if($order->where('user_id=%s and goods_id=%d and ord_id=%s ',array($userid,$goods_id,$ord_id))->save($data))
			{
				$this->redirect('home/person/order','',1,'发货成功！');
			}

		}
		
		//$this->display();
	}
}