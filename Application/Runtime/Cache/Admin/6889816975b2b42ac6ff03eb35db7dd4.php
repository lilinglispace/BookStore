<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="/book/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="<?php echo U('admin/user/add');?>" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="10%">ID</th>
				<th width="15%">用户名</th>
				<th width="20%">邮箱</th>
				<th width="15%">密码</th>
				<th width="15%">加入时间</th>
				<th width="20%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($show)): foreach($show as $k=>$user): ?><tr class="text-c">
				<td><?php echo ($k+1+(($_GET[p]?:1)-1)*10); ?></td>
				<td><?php echo ($user["username"]); ?></td>
				<td><?php echo ($user["email"]); ?></td>
				<td><?php echo ($user["pwd"]); ?></td>
				<td><?php echo ($user["time"]); ?></td>
				<td><a href="<?php echo U('admin/user/edit',array('id'=>$user['id']));?>">编辑</a>&nbsp;|&nbsp;<a href="<?php echo U('admin/user/del',array('id'=>$user['id']));?>" onclick="return del()">删除</a></td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div id="page">
			<?php echo ($page); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	function del()
	{
		if(confirm("确认要删除吗？"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
</body>
</html>