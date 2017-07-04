<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index()
	{
		$key=cookie('key');
		$id=cookie('adminid');
		$name=cookie('adminname');
		if($key=='')
		{
			$this->redirect('admin/index/login','',1,'请登录');
		}
		else
		{
			if($key!==md5($id.$name.C('COOK_IE')))
			{
				cookie('userid',null);
				cookie('username',null);
				cookie('key',null);
				$this->redirect('admin/index/login','',1,'请登录');
			}
		}
		$this->display();
	}
	//登录页面
	public function login()
	{
		$ad=D('ad');
		if(IS_POST)
		{
			//检测提交的数据信息
			echo $name=$_POST['name'];
			echo $pwd=$_POST['pwd'];
			echo $code=$_POST['verify'];
			//exit;
			//在数据库查找该用户名是否存在，若存在，则检查密码
			$admininfo=$ad->where(array('name'=>$name))->find();
			//var_dump($admininfo);
			//exit;
			if(!$admininfo)
			{
				$this->error('用户名错误!','',1);
			}
			else
			{
				//检查密码是否正确
				if($admininfo['pwd']==md5($pwd.$admininfo['salt']))
				{
					$verify = new \Think\Verify();
					if(!$verify->check($code))
					{
						$this->error('验证码错误！','',1);
					}
					else
					{
						cookie('adminid',$admininfo['id']);
						cookie('adminname',$admininfo['name']);
						cookie('key',jm($admininfo['id'].$admininfo['name'].C('COOK_IE')));
						$this->redirect('admin/index/index','',1,'登录成功');
					}
				}
				else
				{
					$this->error('密码错误','',1);
				}

			}
		}
		$this->display();
	}
	//注册
	
	/*public function reg()
	{
		//若有数据提交
		if(IS_POST)
		{
			$ad=D('ad');
			if(!$ad->create())
			{
				$this->error($user->getError());
				$this->redirect('admin/index/reg');
			}
			else
			{
				//$Verify = new \Think\Verify();
				$salt=$this->salt();
				//echo md5($user->pwd.$salt);
				$ad->pwd=md5($user->pwd.$salt);
				$ad->salt=$salt;
				if($ad->add())
				{
					$this->redirect('admin/index/index','',1,'注册成功！');
				}
			}
		}
		$this->display();
	}*/
	
	//加盐
	public function salt()
	{
		$str="sg728$^%^&*^^$";
		return substr(str_shuffle($str),0,8);
	}
	//验证码
	public function verify()
	{
		$config = array( 'fontSize' => 25, // 验证码字体大小 
		'length' => 4, // 验证码位数 
		'useNoise' => false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}


	//推出
	public function loginout()
	{
		cookie('userid',null);
		cookie('username',null);
		cookie('key',null);
		$this->redirect('admin/index/login','',1,'退出成功！');
		$this->display();
	}
}