<?php
//加密函数
function jm($a)
{
	return md5($a);
}

//检验传入的cookie是否正确判断是否登录
function che()
{
	return md5(cookie('userid').cookie('username').C('COOK_IE'))==cookie('key');
}