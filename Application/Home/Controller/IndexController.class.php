<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class IndexController extends PublicController
{
	public function index()
	{
		$goods=D('admin/goods');
		//var_dump($goods->select());
		//查询热销书籍
		$this->assign('goods',$goods->where('is_hot=1')->select());
		//小说类列表
		$this->assign('fiction',$goods->where('cate=2')->select());
		//人文社科
		$this->assign('society',$goods->where('cate=4')->select());
		//教育
		$this->assign('edu',$goods->where('cate=1')->select());
		$this->display();
	}
	//查询书籍
	public function search()
	{
		$goods=D('goods');
		if(IS_POST)
		{
			$bookname=I('search');
			$search['name|cate']=array('like','%'.$bookname.'%');
			//$this->assign('book',$goods->where($search)->select());
			//$cate_id=I('id');
			$count=M('goods')->where($search)->count();
	    	$Page=new \Think\Page($count,8);
	        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
	        $book =$Page->show();
	        $res=M('goods')->where($search)->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('book',$res);
			//$goods=D('goods');
			$this->assign('page',$book);
		}
		$this->display();
	}
}