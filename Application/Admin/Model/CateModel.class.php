<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class CateModel extends Model
{
	protected $_validate=array(
		array('name','','该类别已经存在！',0,'unique',3),//添加时进行验证,确保分类是唯一的
	);
	public function gettree($p=0,$level=0)
	{
		$t=array();
		foreach($this->select() as $k=>$v)
		{
			if($v['p_id']==$p)
			{
				$v['level']=$level;
				$t[]=$v;
				$t=array_merge($t,$this->gettree($v['id'],$level+1));
			}
		}
		return $t;
	}
}