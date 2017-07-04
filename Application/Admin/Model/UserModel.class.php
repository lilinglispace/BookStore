<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class UserModel extends Model
{
	protected  $_validate=array(
		array('username','','该用户名已经存在！',0,'unique',1),//确保用户名的唯一性,新增数据的时候验证
		array('username','6,12','请输入6-12位的字符!',0,'length',3),//确保用户名的长度
		array('pwd','6,12','密码长度不合！',0,'length','3'),
		array('repwd','pwd','两次输入的密码不一致!',0,confirm),
	);
}