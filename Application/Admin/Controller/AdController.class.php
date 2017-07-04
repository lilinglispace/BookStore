<?php
namespace Admin\Controller;
use Think\Controller;
class AdController extends BaseController {
	//添加管理员
	public function add()
	{
		if(IS_POST)
		{
			$admin=D('admin/ad');
			//自动验证
			if(!$admin->create($_POST))
			{
				//获取错误信息
				exit($admin->getError());
			}
			else
			{
				$data['salt']=$this->salt();
				$data['pwd']=md5($_POST['pwd'].$data['salt']);
				$data['email']=$_POST['email'];
				$data['name']=$_POST['name'];
				if($admin->add($data))
				{
					//echo 1;
					$this->redirect('admin/ad/show','',1,'添加成功！');
				}
				else
				{
					$this->redirect('admin/ad/show','',1,'添加失败！');
				}
			}
		}
		$this->display();
	}

	//修改管理员信息
	public function edit()
	{
		$id=I('id');
		$admin=D('ad');
		$this->assign('edit',$admin->where('id='.$id)->find());
		if(IS_POST)
		{
			if($admin->save($_POST))
			{
				$this->redirect('admin/ad/show','',1,'修改成功！');
			}
			else
			{
				$this->redirect('admin/ad/show','',1,'修改失败！');
			}
		}
		$this->display();
	}

	//显示所有的信息
	public function show()
	{
		/*
		$admin=D('ad');
		$this->assign('show',$admin->select());
		$this->assign('count',$admin->count());
		$this->display();
		*/
		$count=D('ad')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show =$Page->show();
        $res=D('ad')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('show',$res);
		$admin=D('ad');
		$this->assign('page',$show);
		$this->assign('count',$admin->count());
		$this->display();
	}

	//删除管理员信息
	public function del()
	{
		$id=I('id');
		$admin=D('ad');
		if($admin->where('id='.$id)->delete())
		{
			$this->redirect('admin/ad/show','',1,'删除成功！');
		}
		else
		{
			$this->redirect('admin/ad/show','',1,'删除成功！');
		}
		$this->display();
	}
	//加盐
	public function salt()
	{
		$str="sg728$^%^&*^^$";
		return substr(str_shuffle($str),0,8);
	}
}