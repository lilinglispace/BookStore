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

 <div class="menu-submit">
        <div class="shou-address">
            <span>确认收货地址</span>
            <a href="<?php echo U('Home/Address/address');?>">管理收货地址</a>

        </div>
         <form method="post" action="<?php echo U('home/cart/addorder');?>"  id="orderform">
        <div class="user-add">
           <span>寄送至：</span>
            <span><?php echo ($addr["area"]); ?></span>
           <span><?php echo ($addr["desc_area"]); ?><span>（<?php echo ($addr["name"]); ?> 收）</span>
           <span><?php echo ($addr["tel"]); ?></span>
            <input type="hidden" name="area" value="<?php echo ($addr["area"]); ?>" />
            <input type="hidden" name="desc_area" value="<?php echo ($addr["desc_area"]); ?>" />
            <input type="hidden" name="name" value="<?php echo ($addr["name"]); ?>" />
            <input type="hidden" name="tel" value="<?php echo ($addr["tel"]); ?>" />
        </div>
        <div class="queren-dan"><p></p></div>
     <div class="mycart">
        <p>确认商品信息</p>
       
        <table>
            <thead>
                <tr>
                    <th class="col1">商品名称</th>
                    <th class="col2">商品信息</th>
                    <th class="col3">单价</th>
                    <th class="col4">数量</th>    
                    <th class="col5">小计</th>
                </tr>
            </thead>
            <tbody>
              <?php if(is_array($cart)): foreach($cart as $key=>$vo): ?><tr> 
                  <input type="hidden" name="id[]" value="<?php echo ($vo["id"]); ?>">               
                   <td class="col1">
                    <a href=""><img src="/book/Public/Upload/Admin/Goods/<?php echo ($vo["goods_img"]); ?>" alt="" /></a> 
                    <a href=""><input type="text" value="<?php echo ($vo["goods_name"]); ?>" readonly class="jiage"/></a>
                   </td>
                    <td class="col2"> 
                    <input type="text" value="包邮" disabled="disabled" class="jiage" />
                    </td>
                    <td class="col3">￥<input type="text" value="<?php echo ($vo["price_hot"]); ?>" name="price" readonly></td>
                    <td class="col4"> <input type="text" value="<?php echo ($vo["num"]); ?>" class="shu" /></td>
                    <td class="col5">￥<input type="text" value="<?php echo ($vo['num']*$vo['price_hot']); ?>" readonly></td>
                </tr><?php endforeach; endif; ?>
            </tbody>                     
    </table>
        

    </div>
        <div class="fu-way">
        <span>付款方式:&nbsp;&nbsp;</span><input type="radio" name="pay_method" value="货到付款" checked>货到付款
        </div>

      <div class="post">
          <p>配送方式</p>
           <?php if(is_array($post)): $i = 0; $__LIST__ = $post;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post_list">
                    <input type="radio"  name="post_method" value="<?php echo ($vo["name"]); ?>" required >
                    <b> <?php echo ($vo["name"]); ?></b>
                    (配送费用：<span style="color: red;">0</span>元)
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>  
       </div>
        <div class="zong-dan">
            <p>您总共需付款：<span>￥<?php echo ($totalmoney); ?></span>
           <input type="hidden" name="total_price" value="<?php echo ($totalmoney); ?>" />
            </p>
            <p>寄送至:<?php echo ($addr["area"]); echo ($addr["area"]); ?></p>
            <p>收货人：<?php echo ($addr["name"]); ?>&nbsp;&nbsp;<?php echo ($addr["tel"]); ?></p>
        </div>
        <div class="two-btn">
            <a href="<?php echo U('Home/Cart/lst');?>"><input type="button" value="返回购物车" class="two-btn1"></a>
            <input type="submit" value="提交订单" class="two-btn2">
        </div>
    </form>
     </div>
     <!--
    <!-- 判断是否设置默认地址和是否选择配送方式 -->
    <!--
     <script type="text/javascript">
        var address="<?php echo ($addrTag); ?>";
       if (!address) {
          alert('请设置默认地址');
          window.location.href='/book/index.php/Home/Address/address';
       };

        function checkform(){
     
      var post_method=document.getElementsByName('post_method');
      var flag=false;
      for(i=0;i<post_method.length;i++){
          if (post_method[i].checked) {
              flag=true;
          }
      }
      if (!flag) {
          alert('请选择配送方式！');
          return false;
      }
      var pay_method=document.getElementsByName('pay_method');
      var flag1=false;
      for(i=0;i<pay_method.length;i++){
          if (pay_method[i].checked) {
              flag1=true;
          }
      }
      var form=document.getElementById('orderform');
      form.submit();

  }
     </script>
     -->
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