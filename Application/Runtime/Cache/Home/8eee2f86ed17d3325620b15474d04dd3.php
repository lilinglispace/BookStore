<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上婚纱店</title>
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
    <li><a href="<?php echo U('Home/Goods/hunsha');?>">小说</a></li>
    <li><a href="<?php echo U('Home/Goods/lifu');?>">人文社科</a></li>
    <li><a href="<?php echo U('Home/Goods/banfu');?>">教育</a></li>
    <li><a href="<?php echo U('Home/Goods/child');?>">童书</a></li>
    <li><a href="<?php echo U('Home/Goods/liter');?>">文艺</a></li>
    <li><a href="<?php echo U('Home/Goods/keji');?>">科技</a></li>
    <li><a href="<?php echo U('Home/Goods/lizhi');?>">励志</a></li>
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
<script src="/book/Public/Home/js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/login.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/index.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/public.js" type="text/javascript"></script>
</body>
</html>

<script>
$(function(){
	$('.list li:nth-child(4n)').css('margin-right','0');		
});
</script>
<!--当前位置代码-->
<div class="zi_title">
 <span><a href="<?php echo U('Home/Index/index');?>">首页</a></span>
 <span>&nbsp;>&nbsp;</span>
 <span>励志</span>
</div>
<div class="list">
 <ul>
   <?php if(is_array($lizhi)): $i = 0; $__LIST__ = $lizhi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
  <p class="list_img"><a href="<?php echo U('Home/Goods/detail',array('id'=>$vo['id'],'isbn'=>$vo['isbn']));?>"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["img"]); ?>" /></a></p>
  <p class="list_word"><?php echo ($vo["name"]); ?></p>
  <p class="price"><strike>￥<?php echo ($vo["price"]); ?></strike>&nbsp;&nbsp;&nbsp;&nbsp;<span>￥<?php echo ($vo["price_hot"]); ?></span></p>
  </li><?php endforeach; endif; else: echo "" ;endif; ?>
 </ul>
</div>
<div class="turn-page">
<?php echo ($page); ?>
</div>
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
    <h4><a href="<?php echo U('Home/Help/help');?>">新手指南</a></h4>
    <p><a href="<?php echo U('Home/Help/help#zhuce');?>">用户注册</a></p>
    <p><a href="<?php echo U('Home/Help/help#liucheng');?>">购物流程</a></p>
    </li>
     <li>
    <h4><a href="<?php echo U('Home/Help/payway');?>">安全支付</a></h4>
    <p><a href="<?php echo U('Home/Help/payway#zaixian');?>">在线支付</a></p>
    <p><a href="<?php echo U('Home/Help/payway#huodao');?>">货到付款</a></p>
    </li>
     <li>
    <h4><a href="<?php echo U('Home/Help/payway#peisong');?>">配送流程</a></h4>
    <p><a href="<?php echo U('Home/Help/payway#peisong');?>">配送说明</a></p>
    <p><a href="<?php echo U('Home/Help/payway#yanhuo');?>">验货查收</a></p>
    </li>
     <li>
    <h4><a href="<?php echo U('Home/Help/payway#zhengpin');?>">售后服务</a></h4>
    <p><a href="<?php echo U('Home/Help/payway#zhengpin');?>">100%正品</a></p>
    <p><a href="<?php echo U('Home/Help/payway#zhengce');?>">退换货政策</a></p>
    </li>
    </ul>
  </div>
  <div class="help_right1">
  <p>在线服务<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2553305465&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2553305465:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
 
  <p>服务时间：08：30-24：00</p>
  </div>
</div>
</div>

</body>
</html>