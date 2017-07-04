<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="/book/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<title>管理员管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员中心 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="10%">编号</th>
				<th width="15%">用户名</th>
				<th width="20%">商品货号</th>
				<th width="30%">评论详情</th>
				<th width="20%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($comment)): foreach($comment as $k=>$admin): ?><tr class="text-c">
				<td><?php echo ($k+1+(($_GET[p]?:1)-1)*10); ?></td>
				<td><?php echo ($admin["username"]); ?></td>
				<td><?php echo ($admin["goods_id"]); ?></td>
				<td><?php echo ($admin["comment"]); ?></td>
				<td><a href="<?php echo U('admin/comment/del',array('id'=>$admin['id']));?>" onclick="return del()">删除</a></td>
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