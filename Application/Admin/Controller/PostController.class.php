<?php
namespace Admin\Controller;
use Think\Controller;
class PostController extends BaseController {
   //添加配送方式
	public function add()
	{
		if(IS_POST)
		{
			$post=D('post');
			if(!$post->create($_POST))
			{
				exit($post->getError());
			}
			else
			{
				if($post->add($_POST))
				{
					//echo 1;
					$this->redirect('admin/post/show','',1,'添加成功！');
				}
				else
				{
					$this->redirect('admin/post/show','',1,'添加失败！');
				}
			}
		}
		$this->display();
	}

	//配送方式列表
	public function show()
	{
		/*
		$post=D('post');
		$this->assign('show',$post->select());
		$this->assign('count',$post->count());
		$this->display();
		*/
		$count=M('post')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show =$Page->show();
        $res=M('post')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('show',$res);
		$post=D('post');
		$this->assign('page',$show);
		$this->assign('count',$post->count());
		$this->display();
	}

	//修改配送方式
	public function edit()
	{
		$post=D('post');
		$id=I('id');
		if(IS_POST)
		{
			$id=I('id');
		
			if($post->where('id='.$id)->save($_POST))
			{
				//echo 1;
				$this->redirect('admin/post/show','',1,'修改成功！');
			}
			else
			{
				$this->redirect('admin/post/show','',1,'修改失败！');
			}
			
		}
		$this->assign('edit',$post->where('id='.$id)->find());
		$this->display();
	}

	//删除
	public function del()
	{
		$id=I('id');
		$post=D('post');
		if($post->where('id='.$id)->delete())
		{
			$this->redirect('admin/post/show','',1,'删除成功！');
		}
		else
		{
			$this->redirect('admin/post/show','',1,'删除失败！');
		}
		$this->display();
	}
}