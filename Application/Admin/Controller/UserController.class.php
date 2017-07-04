<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {
   //添加用户
	public function add()
	{
		if(IS_POST)
		{
			$user=D('user');
			if (!$user->create($_POST))
			{ 
				//对传入的数据进行验证
				exit($user->getError());
			}
			else
			{ // 验证通过 可以进行其他数据操作
				$data['salt']=$this->salt();
				$data['pwd']=md5($_POST['pwd'].$data['salt']);
				$data['email']=$_POST['email'];
				$data['username']=$_POST['username'];
				if($user->add($data))
				{
					$this->redirect('admin/user/show','',1,'添加成功');
				}
			}
		}
		$this->display();
	}
	//用户列表
	public function show()
	{
		/*
		$user=D('user');
		$this->assign('show',$user->select());
		$this->assign('count',$user->count());
		$this->display();
		*/
		$count=M('user')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show =$Page->show();
        $res=M('user')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('show',$res);
		$user=D('user');
		$this->assign('page',$show);
		$this->assign('count',$user->count());
		$this->display();
	}

	//修改用户信息
	public function edit()
	{
		$id=I('id');
		$user=D('user');
		$this->assign('user',$user->where('id='.$id)->find());
		if(IS_POST)
		{
			if(!$user->create($_POST))
			{
				exit($user->getError());
			}
			else
			{
				$id=I('id');
				if($user->save($_POST))
				{
					$this->redirect('admin/user/show','',1,'修改成功');
				}
				else
				{
					$this->redirect('admin/user/show','',1,'修改失败');
				}
			}
		}
		$this->display();
	}
	//删除用户
	public function del()
	{
		$id=I('id');
		$user=D('user');
		if($user->where('id='.$id)->delete())
		{
			$this->redirect('admin/user/show','',1,'删除成功');
		}
		else
		{
			$this->redirect('admin/user/show','',1,'删除失败');
		}
	}
	//加盐
	public function salt()
	{
		$str="sg728$^%^&*^^$";
		return substr(str_shuffle($str),0,8);
	}
}