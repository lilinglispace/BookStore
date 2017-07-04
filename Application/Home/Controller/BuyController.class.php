<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class BuyController extends PublicController
{
	public function comment()
	{
		$comment=M('comment');
		if(IS_POST)
		{
			$data['comment']=$_POST['content'];
			$data['userid']=cookie('userid');
			$userid=cookie('userid');
			$info=M('user')->where('id='.$userid)->find();
			$data['username']=$info['username'];
			$data['goods_id']=$_POST['goods_id'];
			if($comment->add($data))
			{
				$this->redirect('home/person/order','',1,'发表评论成功！');
			}
		}
		$goods_id=I('goods_id');
		$goods=M('goods');
		$this->assign('goods',$goods->where('id='.$goods_id)->find());
		$this->display();
	}
	public function submit()
	{
		if(IS_POST)
		{
			$id=I('id');
			$this->assign('totalmoney',I('totalmoney'));
			if(!$id)
			{
				$this->error('请选择商品！');
			}
			else
			{
				$addr=D('address');
				$userid=cookie('userid');
				$status=1;
				$this->assign('addr',$addr->where('userid=%s and status=%d',array($userid,$status))->find());
				$post=D('post');
				$this->assign('post',$post->select());
				$cart=D('cart');
				$this->assign('cart',$cart->where(array('id'=>array('in',$id)))->select());
			}
			
		}
		$this->display();
	}
}