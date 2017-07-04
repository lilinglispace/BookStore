<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends BaseController {
	public function show()
	{
		$count=M('ordgoods')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show =$Page->show();
        $res=M('ordgoods')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('show',$res);
		$goods=D('ordgoods');
		$this->assign('page',$show);
		$this->assign('count',$goods->count());
		$this->display();
	}
	public function edit()
	{
		
	}

	//发货
	public function fa()
	{
		$id=I('id');
		$order=D('order');
		//发货状态设置为已发货
		$data['post_status']=1;
		$data['post_id']=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
		$order->where('id='.$id)->save($data);
		$ordgoods=D('admin/ordgoods');
		$ordgoods->where('id='.$id)->save($data);
		$this->success('发货成功！');
	}
	public function tui()
	{
		$id=I('id');
		$order=D('order');
		//同意退款
		$data['order_status']=4;
		$order->where('id='.$id)->save($data);
		$ordgoods=D('ordgoods');
		$ordgoods->where('id='.$id)->save($data);
		$this->success('退款成功！');
	}
}