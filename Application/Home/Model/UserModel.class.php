<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class UserModel extends Model
{
	protected $_validate=array(
		array('repwd','pwd','再次输入的密码不正确!',1,'confirm'),
		array('username','','该用户名已存在！',1,'unique',1),
		array('renewpwd','newpwd','再次输入的密码不正确!',1,'confirm'),
	);
}