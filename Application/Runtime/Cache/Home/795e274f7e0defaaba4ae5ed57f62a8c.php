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

<link href="/book/Public/Home/css/style.css" rel="stylesheet" type="text/css" />

<!--当前位置代码-->

<div class="chanpin">
   <div class="tabPanel">
  <div id="preview">
  <div class="jqzoom" id="spec-n1"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($desc["img"]); ?>" height=400  jqimg="/book/Uploads/<?php echo ($picb["pic"]); ?>" width=400 id="spec_img">
  </div>
  <div id="spec-n5">
    <div class="control" id="spec-left">
      <img src="/book/Public/Home/images/left.gif" />
    </div>
    <div id="spec-list">
      <ul class="list-h">
      <?php if(is_array($pic)): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li height="48" width="48"><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["img"]); ?>" height="48" width="48" class="list-li"> </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="control" id="spec-right">
      <img src="/book/Public/Home/images/right.gif" />
    </div>
    
    </div>
</div>

</div>
<form method="post" action="<?php echo U('home/goods/addcart',array('id'=>$desc['id']));?>">
  <div class="chanpin_right">
  <div class="chanpinr_ti">
  <h3><input type="text" name="name" value="<?php echo ($desc["name"]); ?>" class="jian" readonly></h3>
  <input type="hidden" name="img" value="<?php echo ($desc["img"]); ?>"/>

  </div>
  <div class="chanpinr_price">
  <p><span>原价</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥<strike class="del-jia" name="ori_price"><?php echo ($desc["price"]); ?></strike></p>
  <p><span>会员价</span><span class="price_fuhao">￥</span><input type="text" value="<?php echo ($desc["price_hot"]); ?>" class="money" name="price" readonly></span></p>
  </div>
<input type="hidden" name="userid" value="<?php echo (cookie('userid')); ?>">
  <div class="pin_num">
    <a class="number" id="goodsNum">数量</a>
    <input type="button" value="-" id="min_num" onclick="desr()" />
    <input name="num" type="text" value="1" id="show_num"  />
    <input type="button" value="+" id="add_num" onclick="add()" />
    <span></span>
    <span><?php echo ($desc["reserve"]); ?>本</span>
  </div>
  <div class="do_buy">
    <ul>
    <li>
     <a href="" onclick="return cart()"><input type="submit" id="submit" class="cart1" id="addToCart" value="加入购物车"></li></a>
    </ul>
  </div>
  </form>
  <div class="service">
   <span class="ensure">服务承诺</span>
   <span>正品保证</span>
   <span>按时发货</span>
   <span>七天无理由退换</span>
  </div>
 
</div>
  </div>
</li></ul></div></div>
<!-- 产品参数介绍-->
<div class="canshu">



<div class="pin_top">
  <ul>
   <li class="self"><a href="javascript:;" onclick="toshow()">书本详情</a></li>
   <li><a href="javascript:;" onclick="show()">累计评价</a></li>
  </ul>
</div>
<div class="huan">
<div class="pin_data" id="desc" style="display:block;" >
简介： <?php echo ($desc["desc"]); ?><br/>出版社：<?php echo ($desc["press"]); ?><br/>
<?php if(is_array($des)): foreach($des as $key=>$vo): ?><img src="/book/Public/Upload/Admin/Desc/<?php echo ($vo["img"]); ?>"><?php endforeach; endif; ?>
</div>


<div class="pin_data" id="comm" style="display: none;">
<?php if(is_array($comment)): foreach($comment as $key=>$show): ?><div class="user-ping">
    <div class="user-pingl"><p><?php echo ($show["username"]); ?>&nbsp;&nbsp;:</p></div>
    <div class="user-pingr">
   <div class="pingr-xuan"><p></p> <p><span>书籍评价：</span><?php echo ($show["comment"]); ?></p>

   <p style="text-align:right"><?php echo ($show["time"]); ?></p>
    </div>
    </div>
    </div><?php endforeach; endif; ?>
</div>




</div>
<script type="text/javascript">
function toshow()
{
  document.getElementById('desc').style.display='block';
  document.getElementById('comm').style.display='none';
}
function show()
{
  document.getElementById('desc').style.display='none';
  document.getElementById('comm').style.display='block';
}
//确认是够可以加入购物车
function cart()
{
  if("<?php echo (cookie('username')); ?>"!=="")
  {
    if("<?php echo ($desc["reserve"]); ?>">0)
    {
      return true;
    }
    else
    {
      alert('当前库存不足,暂时不可以购买！');
      return false;
    }
  }
  else
  {
    alert('请登录！');
    return false;
  }
}
//减少订购数目
function desr()
{
  var a=parseInt(document.getElementById('show_num').value);
  if(a<=1)
  {
     document.getElementById('show_num').value=1;
  }
  else
  {
     document.getElementById('show_num').value=a-1;
  }
}
//增加订购数目
function add()
{
  var a=parseInt(document.getElementById('show_num').value);
  //若数值等于库存量则不能增加
  if(a<"<?php echo ($desc["reserve"]); ?>")
  {
     document.getElementById('show_num').value=a+1;
  }
  else
  {
     document.getElementById('show_num').value=a;
  } 
}
$(document).ready(function () {
    $('.list-li').click(function () {
        $('#spec_img').attr('src','');
        src=$(this).attr('src');
        $('#spec_img').attr('src',src);

    })
});
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