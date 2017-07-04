<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class PublicController extends Controller
{
	function _initialize()
	{
		$cate=D('admin/cate');
		$this->assign('cate',$cate->where('p_id=0')->select());
	}
}