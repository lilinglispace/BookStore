<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	//构造方法
	public function __construct(){
		parent::__construct(); //一定要调用父类的构造方法
		$this->checklogin();
	}
	//验证是否登录
	public function checklogin(){
		//通过session来验证
		if(!cookie('adminid')) {
			//没有登录
			$this->redirect("admin/index/login",'',1,'请登录！');
		}
	}
}