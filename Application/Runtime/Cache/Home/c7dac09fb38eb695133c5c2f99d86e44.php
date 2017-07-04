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

    <div class="user-xin"><p>我的订单</p></div>
            <div class="jiao-ti">
            <ul>
            <li>我的交易提醒：</li>
              <li>未确认订单<span class="num1">(<?php echo ($order_status); ?>)</span></li>
              <li>待付款<span class="num1">(<?php echo ($pay_status); ?>)</span></li>
              <li>待发货<span class="num1">(<?php echo ($post_status); ?>)</span></li>
              <li>已成交订单数<span class="num1">(<?php echo ($order_status2); ?>)</span></li>
            </ul>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="order-table">
            <thead>
              <tr class="col-name">
                <th width="32%" style="border-left: 1px solid #E6E6E6;">订单号</th>
                <th width="9%">单价(元)</th>
                <th width="5%">数量</th>
                <th width="13%">售后</th>
                <th width="8%">订单总金额</th>
                <th width="10%">状态</th>
                <th width="13%" style="border-right: 1px solid #E6E6E6;">操作</th>
              </tr>
            </thead>
            <?php if(is_array($order)): foreach($order as $key=>$item): ?><tbody class="close-order">
                      <tr class="order-num">
                        <td colspan="8"><span class="no">
                          <label> 订单编号：<span class="order-num"><?php echo ($item["ord_id"]); ?>
                            </span> </label>
                          
                          </span> <span class="deal-time">&nbsp;&nbsp;成交时间：<?php echo ($item["time"]); ?></span> </td>
                      </tr>
                      <tr class="order-bd last">
                            <td align="center" class="baobei no-border-right" style="padding:0px;">
                                  <div class="goods_desc last"> <a class="pic" href="/book/index.php/Home/Index/goods?id=<?php echo ($item['goods_id']); ?>" > 
                                        <img src="/book/Public/Upload/Admin/Goods/<?php echo ($item["goods_img"]); ?>" style="width:50px;height:60px;" /> 
                                        </a>
                                        <div class="goods_name"><?php echo ($item['goods_name']); ?></div>
                                  </div>
                            </td>
                            <td align="center" class="gxin">                  
                                    <span><?php echo ($item['shop_price']); ?></span>
                            </td>
                            <td align="center">                  
                                   <span><?php echo ($item['goods_num']); ?></span> 
                            </td>
                            <td align="center" class="after-service baobei no-border-right" valign="middle">

                                    <?php if(($item['order_status'] == 3)): ?>已申请退款<br><?php endif; ?>
                                     <?php if(($item['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
                                    <?php if(($item['order_status'] != 3 and $item['order_status'] != 4 and $item['order_status'] != 2)): ?><a href="<?php echo U('home/person/tuihuo',array('ord_id'=>$item['ord_id'],'goods_id'=>$item['goods_id']));?>" onclick="return del()">
                                        退货</a>
                                          <?php else: ?>已完成<?php endif; ?>
                                  
                     
                            </td>
                            <td rowspan="1" align="center" class="amount no-border-right">
                                    <span><?php echo ($item['shop_price']*$item['goods_num']); ?></span>
                            </td>
                            <td rowspan="1" align="center" class="trade-status no-border-right">
                                    <?php if(($item['order_status'] == 0)): ?>未确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 1)): ?>已确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 2)): ?>已完成<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 3)): ?>申请退款中<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
                                    <?php if(($item['pay_status'] == 0)): ?>未付款<br><?php endif; ?>
                                    <?php if(($item['pay_status'] == 1)): ?>已支付<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 0)): ?>未发货<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 1)): ?>已发货<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 2)): ?>已收货<br><?php endif; ?>
                                    
                            </td>
                            <td rowspan="1" align="center" class="other">
                                     <?php if(($item['pay_status'] == 0)): if(($item['pay_method'] == '货到付款')): ?>货到付款<br><?php endif; endif; ?>
                                    <?php if(($item['order_status'] == 0)): ?>未确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 1)): ?>已确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 2)): ?>已完成<br>
                                         <a href="<?php echo U('home/buy/comment',array('goods_id'=>$item['goods_id']));?>"  class="on_money">去评论</a><br><?php endif; ?>
                                    <?php if(($item['order_status'] == 3)): ?>申请退款<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
                                    <?php if($item['post_status'] == 1 and $item['order_status'] != 2): ?><a href="<?php echo U('home/person/acc',array('ord_id'=>$item['ord_id'],'goods_id'=>$item['goods_id']));?>"  onclick="if (!confirm('你确实要确认收货吗？')) return false;" >确认收货</a><?php endif; ?>


                                   
                            </td>
                    </tr>
                 </tbody><?php endforeach; endif; ?>

           </table>
            <div class="page" ><?php echo ($page); ?></div>
    </div>

   <script type="text/javascript">
  function del()
  {
    if(confirm("确认要退货吗？"))
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
  <div><p>版权</p></div>

</div>
</div>

</body>
</html>