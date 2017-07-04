<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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

<div class="user_content">
    <!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
<link href="/book/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
<!--必要样式-->
<link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Home/css/city-picker.css" rel="stylesheet" type="text/css" />
<script src="/book/Public/Home/js/bootstrap.js"></script>
<s
</head>
<body>
    <div class="center_title">
    <p>当前位置：</p>
    <!--
        <p>当前位置：<a href="<?php echo U('Home/Index/index');?>"> 首页</a>><span>会员中心</span></p>
        -->
    </div>
    <div class="user_left">
        <div class="l_top">
            <dl>
                <dt>个人中心</dt>
                <dd><a href="<?php echo U('Home/Person/editmine');?>"> 修改个人资料</a></dd>
                <dd><a href="<?php echo U('Home/Person/cpwd');?>">修改密码</a></dd>
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
    <div class="user-xin"><p>我的信息</p></div>
    <div class="user-tou">
        <ul>
            <li class="toul" >
            <?php if(($user["img"] == '')): ?><img src="/book/Public/Home/images/tou.jpg">
            <?php else: ?>
            <img src="/book/Public/Upload/Admin/User/<?php echo ($user["img"]); ?>"><?php endif; ?>
            </li>
            <li class="tour">
                  <h5 name="mine">
                  我的昵称：<?php echo ($user["username"]); ?></h5>
                  <h5 name="mine">真实姓名：
                  <?php if(($user["username"] == '')): ?>未设置
                  <?php else: echo ($user["username"]); endif; ?></h5>
                  <h5 name="mine">电话：
                  <?php if(($user["tel"] == '')): ?>未设置
                  <?php else: echo ($user["tel"]); endif; ?></h5>
                   <h5 name="mine">邮箱：
                   <?php if(($user["email"] == '')): ?>未设置
                   <?php else: echo ($user["email"]); endif; ?></h5>
               <input type="hidden" name="id" value="<?php echo ($mine["id"]); ?>">
               
            </li>
        </ul>
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