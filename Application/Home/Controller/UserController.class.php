<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class UserController extends PublicController
{
	//登录页面
	public function login()
	{
		if(IS_POST)
		{
			$username=I('username');
			$pwd=I('pwd');
			$user=D('user');
			$verify=I('verify');
			//exit;
			$userinfo=$user->where(array('username'=>$username))->find();
			if(!$userinfo)
			{
				$this->error('用户名错误','',1);
			}
			else
			{
				//echo md5($pwd.$userinfo['salt']);
				//exit;
				if($userinfo['pwd']!==md5($pwd.$userinfo['salt']))
				{
					$this->error('密码错误！','',1);
				}
				else
				{
					$verif = new \Think\Verify();
					if(!$verif->check($verify))
					{
						$this->error('验证码错误！','',1);
					}
					else
					{
						cookie('userid',$userinfo['id']);
						cookie('username',$userinfo['username']);
						cookie('key',jm($userinfo['id'].$userinfo['username'].C('COOK_IE')));
						$this->redirect('home/index/index','',1,'登录成功');
					}
				}
			}
		}
		$this->display();
	}
	//用户注册
	public function reg()
	{
		if(IS_POST)
		{
			$user=D('user');
			if(!$user->create())
			{
				$this->error($user->getError());
				$this->redirect('home/user/reg');
			}
			else
			{
				//$Verify = new \Think\Verify();
				$salt=$this->salt();
				//cho md5($user->pwd.$salt);
				$user->pwd=md5($user->pwd.$salt);
				$user->salt=$salt;
				if($user->add())
				{
					cookie('userid',$userinfo['id']);
					cookie('username',$userinfo['username']);
					cookie('key',jm($userinfo['id'].$userinfo['username'].C('COOK_IE')));
					$this->redirect('home/index/index','',1,'注册成功！');
				}
			}
		}
		$this->display();
	}


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
		$this->redirect('home/index/index','',1,'退出成功！');
		$this->display();
	}
}
