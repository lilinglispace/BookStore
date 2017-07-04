<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/book/Public/Home/js/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript" src="/book/Public/Home/js/layer.js" ></script>
	<link rel="stylesheet" type="text/css" href="layer.css">
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>遇见书城</title>
<link href="/book/Public/Home/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--导航代码开始-->
<div class="top">
   <div class="top-mid">
     <div class="top-midl"><p>书有未曾经我读，事无不可对人言。</p></div>
     <div class="top-midr">
       <ul>
      <li id="logInfo">
      <?php if(che()): ?><a href="<?php echo U('home/person/information');?>">欢迎您<?php echo (cookie('username')); ?></a>&nbsp;|&nbsp;<a href="<?php echo U('home/user/loginout');?>">退出</a><?php else: ?><a href="<?php echo U('Home/User/login');?>" >登录</a><a href="<?php echo U('Home/User/reg');?>" >注册</a><?php endif; ?>
      </li>
      <input type="hidden" name="userid" value="<?php echo (cookie('userid')); ?>" />

      <li>
      <?php if($_COOKIE['userid']!= ''): ?><a href="<?php echo U('home/person/order');?>">订单</a><?php else: ?><a href="<?php echo U('home/user/login');?>">订单</a><?php endif; ?>
      </li>
      <li class="cart">
      <?php if($_COOKIE['userid']!= ''): ?><a href="<?php echo U('home/cart/lst');?>"><img src="/book/Public/Home/images/che.png"></a><?php else: ?><a href="<?php echo U('home/user/login');?>"><img src="/book/Public/Home/images/che.png"/></a><?php endif; ?>
      </li>
      </ul>
     </div>
   </div>
</div>
<div class="nav">
    <div class="nav_content">
    <div class="logo"><a href="<?php echo U('Home/Index/index');?>"><img src="/book/Public/Home/images/1.jpg" /></a></div>
    <div class="nav_left">
    <ul>
    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
    <?php if(is_array($cate)): foreach($cate as $key=>$vo): ?><li><a href="<?php echo U('home/goods/book',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
    </ul>
    </div>
    <div class="nav_right">
   <form action="<?php echo U('home/index/search');?>" method="post">

     <li><input type="text"  name="search" class="find1" placeholder="书籍名称" /></li>
     <li class="soto"><input type="submit" class="sub" value="搜索" /></li>
   </form>
    </div>
    </div>
</div>
<!--返回顶部-->

<div class="back-top" id="btun"><img src="/book/Public/Home/images/icon.png"></div>
<!--返回顶部-->
<script src="/book/Public/Home/js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/index.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>

</body>
</html>


<!-- 主体部分 start -->
	<div class="mycart">
		<h2>我的购物车</h2>
		<table>
		<form method="post" action="<?php echo U('Home/buy/submit');?>" >
		<input type="hidden" name="userid" value="" >

			<thead>
				<tr>
					<th class="col7">选择</th>
					<th class="col1">商品名称</th>
					<th class="col2">商品信息</th>
					<th class="col3">单价</th>
					<th class="col4">数量</th>	
					<th class="col5">小计</th>
					<th class="col6">操作</th>
				</tr>
			</thead>		
				<tbody>
					<?php if(is_array($cart)): foreach($cart as $key=>$vo): ?><tr>

							<td><input type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>" onclick="getSum()" /></td>
							<td class="col1">
								<a href=""><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo['goods_img']); ?>" /></a> 
								<a href="" class="cword"><?php echo ($vo["goods_name"]); ?></a>

							</td>
							<td class="col2">
								<p>正版</p>
							</td>
							<td class="col3">￥<span><?php echo ($vo["price_hot"]); ?></span></td>
							<td class="col4"> 
								<span>
								
									<a href="<?php echo U('home/cart/desr',array('id'=>$vo['goods_id']));?>">
									 <input type="button" value="-" id="min_num" /> 
									 </a>
								   <input name="num" type="text" value="<?php echo ($vo['num']); ?>" id="show_num"  />
								    
								   
								    	<a href="<?php echo U('home/cart/add',array('id'=>$vo['goods_id']));?>">
								    	 <input type="button" value="+" id="add_num" /> 
								     </a>
						
								</span>
							</td>
							<td class="col5">￥<span><?php echo ($vo['num']*$vo['price_hot']); ?></span></td>
							<td class="col6">
								<a href="<?php echo U('home/cart/del',array('id'=>$vo['id']));?>" onclick="return del()">删除</a>
							</td>
						</tr><?php endforeach; endif; ?>
				</tbody>
			<tfoot>
				<tr>
					<td colspan="7">合计： <strong>￥<span id="total">0</span></strong></td>
					<input type="hidden" name="totalmoney" id="totalmoney" value=""></input>
				</tr>
			</tfoot>

			</table>				

		<div class="cart_btn">
			<a href="<?php echo U('Home/Index/index');?>" class="continue">继续购物</a>
			<input type="submit" class="checkout" value="结算" />
		</div>
		</form>
	</div>
<script>
/*
function fn(e){
	var button = $(e);
	var number = button.siblings("input[name=num]");
	var num_val = parseInt(number.val());
	if(button.val()=='-'){
		num_val = num_val-1;
	}
	if(button.val()=='+'){
		num_val = num_val+1
	}
	//做是否删除的判断
	if(num_val==0){
		
		del(e);

	}
	number.val(num_val);
	var tr = number.parent().parent();
	var goodsid = tr.find("input[type=checkbox]").val();
	var price = tr.find(".col3>span").text();
	var totle = num_val*Number(price);
	tr.find(".col5").find("span").text(totle);
	getSum();

}
*/
function getSum(){
	var sum = 0;
	//循环计算得出结算的

	$.each($("tbody>tr"),function(i,n){
		var checkbox = $(n).find("input[type=checkbox]");
		console.log(checkbox.is(":checked"));
		if(checkbox.is(":checked")){
			//var price = $(n).find(".col3>span").text();
			//var num = $(n).find(".col4 input[name=num]").val();
			sum = sum +Number($(n).find(".col5>span").text());
		}
	})
	$("#total").text(sum);
	$("#totalmoney").val(sum);
}

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

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>底部</title>
<link href="/book/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--底部代码开始-->
<div class="footer">
<div class="tubiao">
   <div class="tubiao1">
   <div class="img"><img src="/book/Public/Home/images/b1.png" /></div>
   <div class="shuoming">
   <h5>正品承诺</h5>
   <p>100%正品保证</p>
   </div>
   </div>
<div class="tubiao1">
  <div class="img"><img src="/book/Public/Home/images/b2.png" /></div>
  <div class="shuoming">
   <h5>精心服务</h5>
   <p>细致贴心服务</p>
  </div>
</div>
<div class="tubiao1">
 <div class="img"><img src="/book/Public/Home/images/b3.png" /></div>
  <div class="shuoming">
   <h5>闪电发货</h5>
   <p>18小时内闪电发货</p>
  </div>
</div>
 <div class="tubiao2">
 <div class="img"><img src="/book/Public/Home/images/b5.png" /></div>
  <div class="shuoming">
   <h5>金牌客服</h5>
   <p>7*24小时优质售后服务</p>
  </div>
</div>
</div>
<div class="help">
  <div class="help_left">
    <ul>
    <li><a href="<?php echo U('Home/Index/index');?>"><img src="/book/Public/Home/images/1.jpg" /></a></li>
    <li>
    <h4><a href="javascript:;">新手指南</a></h4>
    <p><a href="javascript:;">用户注册</a></p>
    <p><a href="javascript:;">购物流程</a></p>
    </li>
     <li>
    <h4><a href="javascript:;">安全支付</a></h4>
    <p><a href="javascript:;">在线支付</a></p>
    <p><a href="javascript:;">货到付款</a></p>
    </li>
     <li>
    <h4><a href="javascript:;">配送流程</a></h4>
    <p><a href="javascript:;">配送说明</a></p>
    <p><a href="javascript:;">验货查收</a></p>
    </li>
     <li>
    <h4><a href="javascript:;">售后服务</a></h4>
    <p><a href="javascript:;">100%正品</a></p>
    <p><a href="javascript:;">退换货政策</a></p>
    </li>
    </ul>
  </div>

</div>
</div>

</body>
</html>