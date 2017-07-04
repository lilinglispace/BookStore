<?php if (!defined('THINK_PATH')) exit();?>
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


<!--banner代码开始-->
<div class="banner">
    <ul class="51buypic">
        <li><a href="javascript:;"><img src="/book/Public/Home/images/banner.jpg" width="1100" /></a></li>
        <li><a href="javascript:;"><img src="/book/Public/Home/images/banner5.jpg" width="1100" /></a></li>
        <li><a href="javascript:;"><img src="/book/Public/Home/images/banner6.jpg" width="1100" /></a></li>
       
    </ul>
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>
    <div class="num">
      <ul></ul>
    </div>
</div>
<script>
/*鼠标移过，左右按钮显示*/
$(".banner").hover(function(){
  $(this).find(".prev,.next").fadeTo("show",0.1);
},function(){
  $(this).find(".prev,.next").hide();
})
/*鼠标移过某个按钮 高亮显示*/
$(".prev,.next").hover(function(){
  $(this).fadeTo("show",0.7);
},function(){
  $(this).fadeTo("show",0.1);
})
$(".banner").slide({ titCell:".num ul" , mainCell:".51buypic" , effect:"fold", autoPlay:true, delayTime:700 , autoPage:"<li><a></a></li>" });
</script>
<!--banner代码结束-->

<!--最新推荐代码开始-->

<div class="home_ad">
    <div class="picScroll-left">
        <div class="ad_title">
            <span>最新上市</span>
            <div class="hd">
                <a class="next"></a>
                <ul></ul>
                <a class="prev"></a>
            </div>
        </div>
        <div class="bd">
            <ul class="picList da-thumbs" id="da-thumbs">
            <?php if(is_array($goods)): $i = 0; $__LIST__ = array_slice($goods,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Goods/detail',array('id'=>$vo['id'],'isbn'=>$vo['isbn']));?>"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["img"]); ?>"><div class="bd_desc"><?php echo ($vo["name"]); ?></div><div class="bd_money">￥<?php echo ($vo["price"]); ?></div></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
$(".home_ad .picScroll-left").slide({
  titCell:".hd ul",
  mainCell:".bd ul",
  autoPage:true,
  effect:"left",
  autoPlay:true,
  scroll:4,
  vis:4,
  delayTime:1000
});
</script>
<!--小说开始-->
<div class="title">
<h2><a href="<?php echo U('home/goods/book',array('id'=>2));?>">小说</a></h2>
<a href="<?php echo U('home/goods/book',array('id'=>2));?>"><div class="more">MORE>></div></a>
</div>
<div class="star">
<ul>
<?php if(is_array($fiction)): $i = 0; $__LIST__ = array_slice($fiction,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
<div class="star_up"><a href="<?php echo U('Home/Goods/detail',array('id'=>$vo['id'],'isbn'=>$vo['isbn']));?>"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["img"]); ?>" /></a></div>
<h4><a href="<?php echo U('Home/Goods/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></h4>
<p>￥<?php echo ($vo["price"]); ?></p>
</li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
</div>
<!--小说结束-->
<!--人文社科开始-->
<div class="title">
<h2><a href="<?php echo U('home/goods/book',array('id'=>4));?>">人文社科</a></h2>
<a href="<?php echo U('home/goods/book',array('id'=>4));?>"><div class="more">MORE>></div></a>
</div>

<div class="fu">
 <ul>
    <?php if(is_array($society)): $i = 0; $__LIST__ = array_slice($society,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
       <a href="<?php echo U('Home/Goods/detail',array('id'=>$vo['id'],'isbn'=>$vo['isbn']));?>"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["img"]); ?>" /></a>
       <div class="jieshao"><?php echo ($vo["name"]); ?></div>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
 </ul>
</div>
<!--教育开始-->
<div class="title">
<h2><a href="<?php echo U('home/goods/book',array('id'=>1));?>">教育</a></h2>
<a href="<?php echo U('home/goods/book',array('id'=>1));?>"><div class="more">MORE>></div></a>
</div>

<div class="ban">
    <ul>
    <?php if(is_array($edu)): $i = 0; $__LIST__ = array_slice($edu,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
     <a href="<?php echo U('Home/Goods/detail',array('id'=>$vo['id'],'isbn'=>$vo['isbn']));?>"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["img"]); ?>" /></a>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

 <script type="text/javascript">
 $(function(){
   $('.fu li:nth-child(4n)').css('margin-right','0');
 $('.ban li:nth-child(4n)').css('margin-right','0');
});
  </script>
<!--教育结束-->

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