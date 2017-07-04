<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class PersonModel extends Model
{
	protected $_validate=array(
		array('renewpwd','newpwd','再次输入的密码不正确',1,'confirm'),
	);
}