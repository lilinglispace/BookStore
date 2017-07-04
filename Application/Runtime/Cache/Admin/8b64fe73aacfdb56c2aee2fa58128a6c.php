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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图书管理 <span class="c-gray en">&gt;</span>图书列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="<?php echo U('admin/goods/add');?>" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加图书</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="5%">序号</th>
				<th width="15%">图书名称</th>
				<th width="7%">作者</th>
				<th width="15%">出版社</th>
				<th width="5%">所属类别</th>
				<th width="15%">简介</th>
				<th width="5%">原价</th>
				<th width="5%">热销价</th>
				<th width="5%">库存</th>
				<th width="5%">是否热销</th>
				<th width="15%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($show)): foreach($show as $k=>$goods): ?><tr class="text-c">
				<td><?php echo ($k+1+(($_GET[p]?:1)-1)*10); ?></td>
				<td><?php echo ($goods["name"]); ?></td>
				<td><?php echo ($goods["author"]); ?></td>
				<td><?php echo ($goods["press"]); ?></td>
				<td><?php echo ($goods["cate"]); ?></td>
				<td><?php echo ($goods["desc"]); ?></td>
				<td><?php echo ($goods["price"]); ?></td>
				<td><?php echo ($goods["price_hot"]); ?></td>
				<td><?php echo ($goods["reserve"]); ?></td>
				<td><?php echo ($goods["is_hot"]); ?></td>
				<td><a href="<?php echo U('admin/goods/edit',array('id'=>$goods['id']));?>">编辑</a>&nbsp|&nbsp<a href="<?php echo U('admin/goods/del',array('id'=>$goods['id']));?>" onclick="return del()">删除</a></td>
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