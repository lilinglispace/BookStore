<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部</title>
<link href="/book/Public/Home/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--导航代码开始-->
<div class="top">
   <div class="top-mid">
     <div class="top-midl"><p>书有未曾经我读，事无不可对人言。</p></div>
     <div class="top-midr">
       <ul>
      <li id="logInfo"><a href="<?php echo U('Home/User/login');?>" ></a></li>

      
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
    
    </div>
</div>
<script src="/book/Public/Home/js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="/book/Public/Home/js/login.js" type="text/javascript"></script>

</body>
</html>

<div class="user_content">

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (HOME_PUBLIC); ?>/css/style.css" rel="stylesheet" type="text/css" />
<!--必要样式-->
<link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (HOME_PUBLIC); ?>/css/city-picker.css" rel="stylesheet" type="text/css" />
<script src="<?php echo (HOME_PUBLIC); ?>/js/jquery.js"></script>
<script src="<?php echo (HOME_PUBLIC); ?>/js/bootstrap.js"></script>
<script src="<?php echo (HOME_PUBLIC); ?>/js/city-picker.data.js"></script>
<script src="<?php echo (HOME_PUBLIC); ?>/js/city-picker.js"></script>
<script src="<?php echo (HOME_PUBLIC); ?>/js/main.js"></script>
</head>
<body>
    <div class="center_title">
        <p>当前位置：<a href="<?php echo U('Home/Index/index');?>"> 首页</a>><span>会员中心</span></p>
    </div>
    <div class="user_left">
        <div class="l_top">
            <dl>
                <dt>个人中心</dt>
                <dd><a href="<?php echo U('Home/Person/editmine');?>"> 修改个人资料</a></dd>
                <dd><a href="<?php echo U('Home/Person/changepassword');?>">修改密码</a></dd>
                 <dd><a href="<?php echo U('Home/Address/address');?>">管理收货地址</a></dd>
            </dl>
            <dl>
                <dt>订单管理</dt>
                <dd><a href="<?php echo U('Home/Cart/lst');?>">我的购物车</a></dd>
                <dd><a href="<?php echo U('Home/Person/order');?>">我的订单</a></dd>

            </dl>
           
        </div>
    </div>

</body>
</html>
   <div class="user_right">
       <div class="youbu">
    <h4>修改登录密码</h4>
        <div class="yan-tab">
            <form action="{U('home/person/changepassword')}" method="post">
                <p>已验证用户名：<?php echo (cookie('username')); ?></p>
                <p>请输入原密码 : <input type="text" class="jiaoyan" placeholder="请输入原密码" name="pwd" value=""></p>
                <p>请输入新密码 : <input type="text" class="jiaoyan" placeholder="请输入新密码" name="newpwd" value=""></p>
                <p>请确认新密码 : <input type="text" class="jiaoyan" placeholder="请确认新密码" name="renewpwd" value=""></p>
                <p><input type="submit" class="sure-pass" value="确认修改"></p>
                <input type="hidden" name="id" value="<?php echo (cookie('userid')); ?>">
            </form>
        </div>
    </div>
    </div>
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