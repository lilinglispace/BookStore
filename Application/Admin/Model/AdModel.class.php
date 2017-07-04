<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class AdModel extends Model
{
	public $_validate=array(
		array('name','','该管理员已存在!',0,'unique',1),//确保用户名的唯一性
		array('repwd','pwd','确认密码不正确！',0,'confirm'),//确保再次输入的密码的正确性
		array('pwd','6,12','密码长度不合规则！',0,'length',3),
	);
}