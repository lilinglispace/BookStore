<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class CommentController extends BaseController
{

	public function show()
	{
		$count=M('comment')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $comment =$Page->show();
       
        $res=M('comment')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('comment',$res);
		//$goods=D('goods');
		$this->assign('page',$comment);

		$this->display();
	}
	public function del()
	{
		$id=I('id');
		$comment=D('comment');
		if($comment->where('id='.$id)->delete())
		{
			$this->success('删除成功！');
		}
		else
		{
			$this->error('删除失败');
		}
	}
}