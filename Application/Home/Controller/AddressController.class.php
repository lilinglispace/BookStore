<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class AddressController extends PublicController
{
	//添加收货地址
	public function address()
	{
		$address=D('address');
		$userid=cookie('userid');
		$addrinfo=$address->where('userid='.$userid)->select();
		if(IS_POST)
		{
			$data['area']=$_POST['area'];
			$data['desc_area']=$_POST['desc_area'];
			$data['name']=$_POST['name'];
			$data['tel']=$_POST['tel'];
			$data['userid']=cookie('userid');
			//只有一个地址时，自动默认为默认地址
			if(!$addrinfo)
			{
				$data['status']=1;
			}
			if($address->add($data))
			{
				$this->redirect('home/address/address','',1,'添加地址成功!');
			}
			else
			{
				$this->error('添加地址失败！');
			}
		}
		//$userid=cookie('userid');
		$this->assign('add',$address->where('userid='.$userid)->select());
		$this->display();
	}

	//修改收货地址
	public function edit()
	{
		$id=I('id');
		$address=D('address');
		//$this->assign('addr',$address->where('id='.$id)->find());
		//var_dump($address->where('id='.$id)->select());
		//exit;
		if(IS_POST)
		{
			if($address->where('id='.$id)->save($_POST))
			{
				$this->redirect('home/address/address','',1,'修改成功！');
			}
			else
			{
				$this->redirect('home/address/address','',1,'修改失败！');
			}
		}
		$this->assign('addr',$address->where('id='.$id)->find());
		$this->display();
	}


	//删除收货地址
	public function del()
	{
		$id=I('id');
		$address=D('address');
		if($address->where('id='.$id)->delete())
		{
			$this->redirect('home/address/address','',1,'删除成功！');
		}
		else
		{
			$this->redirect('home/address/address','',1,'删除失败！');
		}
		$this->display();
	}

	//设置为默认地址
	public function mo()
	{
		$id=I('id');
		$address=D('address');
		$data['status']=0;
		$userid=cookie('userid');
		$addrinfo=$address->where('userid='.$userid)->select();
		foreach($addrinfo as $v)
		{
			$address->where('id='.$v['id'])->save($data);
		}
		$data['status']=1;
		$address->where('id='.$id)->save($data);
		$this->redirect('home/address/address');
		$this->display();
	}
}