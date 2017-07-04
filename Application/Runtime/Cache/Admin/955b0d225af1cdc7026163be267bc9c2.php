<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="/book/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<title>订单管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 订单列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="<?php echo U('admin/user/add');?>" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="3%">ID</th>
				<th width="5%">用户ID</th>
				<th width="7%">添加时间</th>
				<th width="3%">订单状态</th>
				<th width="3%">支付状态</th>
				<th width="3%">发货状态</th>
				<th width="7%">总价格</th>
				<th width="7%">订单号</th>
				<th width="8%">发货单号</th>
				<th width="8%">发货地址</th>
				<th width="7%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($show)): foreach($show as $k=>$order): ?><tr class="text-c">
				<td><?php echo ($k+1+(($_GET[p]?:1)-1)*10); ?></td>
				<td><?php echo ($order["userid"]); ?></td>
				<td><?php echo ($order["time"]); ?></td>
				<td><?php echo ($order["order_status"]); ?></td>
				<td><?php echo ($order["pay_status"]); ?></td>
				<td><?php echo ($order["post_status"]); ?></td>
				<td><?php echo ($order['goods_num']*$order['shop_price']); ?></td>
				<td><?php echo ($order["ord_id"]); ?></td>
				<td><?php echo ($order["post_id"]); ?></td>
				<td><?php echo ($order["area"]); ?></td>
				<td>
					<?php if($order['post_status'] == 0 and $order['order_status'] != 3 and $order['order_status'] != 4): ?><a href="<?php echo U('admin/order/fa',array('id'=>$order['id']));?>">发货</a><?php endif; ?>
					<?php if($order['order_status'] == 3): ?><a href="<?php echo U('admin/order/tui',array('id'=>$order['id']));?>">确认退款</a><?php endif; ?>
					<?php if($order['order_status'] == 4 ): ?>已退款<?php endif; ?>
					<?php if($order['post_status'] == 1 ): ?>已发货<?php endif; ?>
				</td>
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