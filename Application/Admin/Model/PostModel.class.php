<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class PostModel extends Model
{
	protected $_validate=array(
		array('name','','该配送方式已存在！',0,'unique',1),
	);
}