<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends BaseController {
    //添加大的分类
	public function add()
	{
		if(IS_POST)
		{
			$cate=D('cate');
			if(!$cate->create($_POST))
			{
				exit($cate->getError());
			}
			else
			{
				if($cate->add($_POST))
				{
					//echo 1;
					$this->redirect('admin/cate/show','',1,'添加成功');
				}
				else
				{
					$this->redirect('admin/cate/show','',1,'添加失败');
				}

			}
		}
		$this->display();
	}
	//添加子类
	public function addsmall()
	{
		$cate=D('cate');
		//查询所有的父类
		if(IS_POST)
		{
			if(!$cate->create($_POST))
			{
				exit($cate->getError());
			}
			else
			{
				if($cate->add($_POST))
				{
					//echo 1;
					$this->redirect('admin/cate/show','',1,'添加成功');
				}
				else
				{
					$this->redirect('admin/cate/show','',1,'添加失败');
				}

			}
		}
		$this->assign('volist',$cate->where('p_id=0')->select());
		$this->display();
	}
	//图书分类列表
	public function show()
	{
		/*
		$cate=D('cate');
		//var_dump($cate->gettree());
		//exit;
		$this->assign('show',$cate->gettree());
		$this->assign('count',$cate->count());
		$this->display();
		*/
		$count=M('cate')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show =$Page->show();
        $res=M('cate')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('show',$res);
		$cate=D('cate');
		$this->assign('page',$show);
		//$this->assign('show',$cate->gettree());
		$this->assign('count',$cate->count());
		$this->display();
	}

	//编辑图书分类
	public function edit()
	{
		$cate=D('cate');
		$id=I('id');
		$this->assign('edit',$cate->where('id='.$id)->find());
		if(IS_POST)
		{
			$id=I('id');
			if(!$cate->create($_POST))
			{
				exit($cate->getError());
			}
			else
			{
				if($cate->where('id='.$id)->save($_POST))
				{
					$this->redirect('admin/cate/show','',1,'修改成功');
				}
				else
				{
					$this->redirect('admin/cate/show','',1,'修改失败');
				}
			}
		}
		$this->display();
	}

	//删除图书分类
	public function del()
	{
		$id=I('id');
		$cate=D('cate');
		if($cate->where('id='.$id)->delete())
		{
			$this->redirect('admin/cate/show','',1,'删除成功');
		}
		else
		{
			$this->redirect('admin/cate/show','',1,'删除失败');
		}
		$this->display();
	}
}