<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="/book./Application/Home/Public/style/base.css" type="text/css">
    <link rel="stylesheet" href="/book./Application/Home/Public/style/global.css" type="text/css">
    <link rel="stylesheet" href="/book./Application/Home/Public/style/header.css" type="text/css">
    <?php foreach ($css as $k => $v): ?>
    <link rel="stylesheet" href="/book./Application/Home/Public/style/<?php echo $v; ?>.css" type="text/css">
    <?php endforeach; ?>
    <link rel="stylesheet" href="/book./Application/Home/Public/style/bottomnav.css" type="text/css">
    <link rel="stylesheet" href="/book./Application/Home/Public/style/footer.css" type="text/css">

    <script type="text/javascript" src="/book./Application/Home/Public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/book./Application/Home/Public/js/header.js"></script>
    <script type="text/javascript" src="/book./Application/Home/Public/js/login.js"></script>
    <?php foreach ($js as $k => $v): ?>
    <script type="text/javascript" src="/book./Application/Home/Public/js/<?php echo $v; ?>.js"></script>
    <?php endforeach; ?>
</head>
<body>
<!-- 顶部导航 start -->
<div class="topnav">
    <div class="topnav_bd w1210 bc">
        <div class="topnav_left">

        </div>
        <div class="topnav_right fr">
            <ul>
                <li id="logInfo"></li>
                <li class="line">|</li>
                <li><a href="/book/index.php/Home/User/order">我的订单</a></li>
                <li><a href="/book/index.php/Home/Cart/lst">购物车</a></li>
                <li><a href="/book/index.php/Home/User/user">用户信息</a></li>

            </ul>
        </div>
    </div>
</div>
<!-- 顶部导航 end -->

<div style="clear:both;"></div>

<!-- 头部 start -->
<div class="big">
<div class="header w1210 bc mt15">
    <!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
    <div class="logo w1210">
        <h1 class="fl"><a href="/book/index.php/Home/Index/"><img src="/book./Application/Home/Public/images/logo.jpg" alt="禹祥药业"></a></h1>
        <!-- 头部搜索 start -->
        <div class="search fl">
            <div class="search_form">
                <div class="form_left fl"></div>
                <form action="/book/index.php/Home/Index/search" name="serarch" method="get" class="fl">
                    <input type="text" name="key_word" class="txt" value="请输入商品关键字" /><input type="submit" class="btn1" value="搜索" />
                </form>
                <div class="form_right fl"></div>
            </div>

            <div style="clear:both;"></div>

            <div class="hot_search">
                <strong>热门搜索:</strong>
                <a href="">人参</a>
                <a href="">灵芝</a>
            </div>
        </div>
        <!-- 头部搜索 end -->


        </div>
        <!-- 购物车 end -->
    </div>
    </div>
    <!-- 头部上半部分 end -->

    <div style="clear:both;"></div>

    <!-- 导航条部分 start -->
    <div class="nav w1211 bc mt10" >
    <div class="nav w1210 bc mt10" >
        <!--  商品分类部分 start-->
        <div class="category fl <?php if($hideNav == 1) echo ' cat1'; ?>"> <!-- 非首页，需要添加cat1类 -->
            <div class="cat_hd <?php if($hideNav == 1) echo ' off'; ?>">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
            <?php if($tag == twomenu): ?><h2 onmouseover="display()" >全部商品分类</h2>
                <em></em>
            </div>
            <div id="cat_bd" onmouseleave="hide()" class="cat_bd <?php if($hideNav == 1) echo ' none'; ?>">
            <?php else: ?>
                <h2 onmouseover="" >全部商品分类</h2>
                <em></em>
            </div>
            <div id="cat_bd" onmouseleave="" class="cat_bd <?php if($hideNav == 1) echo ' none'; ?>"><?php endif; ?>
                
                    <?php  foreach ($navdata as $k => $v): ?>
                        <?php if ($v['parent_id']==0) { echo " <div class='cat'>"; echo '<h3><a href="/book/index.php/Home/Category?id='.$v['id'].'">'.$v['cat_name'].'<b></b></a></h3>'; echo "<div class='cat_detail'>"; foreach ($navdata1 as $k => $d): if ($d['parent_id']==$v['id']) { echo "<dl class='dl_1st'>"; echo '<dt><a href="/book/index.php/Home/Category/twomenu?id='.$d['id'].'">'.$d['cat_name'].'</a></dt>'; echo "<dd>"; foreach ($navdata1 as $k => $d1): if ($d1['parent_id']==$d['id']) { echo '<a href="/book/index.php/Home/Category?id='.$d1['id'].'">'.$d1['cat_name'].'</a>'; } endforeach; echo "</dd></dl>"; } endforeach; echo "</div></div>" ?>
                         <?php } ?>
                     <?php endforeach; ?>
            </div>

        </div>
        <!--  商品分类部分 end-->

        <div class="navitems fl">
            <ul class="fl">
                <li><a href="/book/index.php/Home/Index/index">首页</a></li>
                <li><a href="/book/index.php/Home/Goods/index">药膳良品</a></li>
                <li><a href="/book/index.php/Home/Goods/activity">活动特价</a></li>
                <li><a href="/book/index.php/Home/Index/news">健康资讯</a></li>
                <li><a href="/book/index.php/Home/Index/contact">联系我们</a></li>
            </ul>
            <div class="right_corner fl"></div>
        </div>
    </div>
    </div>
    <!-- 导航条部分 end -->
</div>
<!-- 头部 end-->

<div style="clear:both;"></div>

 
<!-- 综合区域 start 包括幻灯展示，商城快报 -->
<div class="blank"></div>
<div class="main w1210 mt10 bc">

<div class="w">
  <div class="breadcrumb">当前位置: <a href=".">首页</a> 
 &gt;</code> <a href="">药膳</a> <code></code>   </div>

</div>

<div class="box_attr_ecshop68" id="attr_list_ul">
          <script type="text/javascript">init_position_left(); </script> 
        </div>
        <div class="blank40"></div>
        <div class="left"> 
                 <div class="m" id="sortlist">
                      <div class="mc" id="cate"> 
                         <?php if(is_array($menu)): foreach($menu as $key=>$item): ?><div class="item  ">
                                  <h3 onclick="tab(0)"><b></b><?php echo ($item['cat_name']); ?></h3>
                                  <ul style=" display:none;">
                                            <li><a href="category.php?id=17">芒果桃李</a></li>
                                  </ul>
                                </div><?php endforeach; endif; ?>         
                    </div>
                </div>

      <div id="ad_left" reco_id="6" class="m m0 hide"></div>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<div id="weekRank" class="m rank">
  <div class="mt">
    <h2>人气排行榜</h2>
  </div>
  <div class="mc">
    <ul class="tabcon">
       <?php if(is_array($renqigoods)): foreach($renqigoods as $key=>$item): ?><li class="fore fore1" id="top2b2" >
                <div class="p-img"><a target="_blank" href="/book/index.php/Home/Index/goods?id=<?php echo ($item['id']); ?>"> <img src="<?php echo IMG_URL . $item['mid_logo']; ?>" alt="" width="50" height="50"></a></div>
                <div class="p-name"><a target="_blank" href="/book/index.php/Home/Index/goods?id=<?php echo ($item['id']); ?>"><?php echo ($item['goods_name']); ?></a></div>
                <div class="price" style=" color:#DD0000"><?php echo ($item['shop_price']); ?> </div>
              </li><?php endforeach; endif; ?>
    </ul>
  </div>
    <?php if(($_SESSION['id'])): ?><div class="mt">
    <h2>最近浏览过的商品</h2>
  </div>
  <div class="mc">
    <ul class="tabcon">
        <?php if(is_array($neardata)): foreach($neardata as $key=>$item): ?><li class="fore fore1" id="top2b2" >
                <div class="p-img"><a target="_blank" href="/book/index.php/Home/Index/goods?id=<?php echo ($item['id']); ?>"> <img src="<?php echo IMG_URL . $item['mid_logo']; ?>" alt="" width="50" height="50"></a></div>
                <div class="p-name"><a target="_blank" href="/book/index.php/Home/Index/goods?id=<?php echo ($item['id']); ?>"><?php echo ($item['goods_name']); ?></a></div>
                <div class="price" style=" color:#DD0000"><?php echo ($item['shop_price']); ?> </div>
              </li><?php endforeach; endif; ?>
      </ul>
   </div><?php endif; ?>
</div>
      
      <div id="alsobuy" class="hide m m0"></div>
    </div>
    <div class="right-extra"> 
        <div class="box">
              <div id="filter" class="">
              <form method="GET" name="listform" action="category.php">
                          <div class="fore1" style="border:none;">
                            <dl class="order">
                              <dt>排序：</dt>
                              <dd class="<?php echo ($curr); ?>"><a href="/book/index.php/Home/Goods/index?id=<?php echo ($_GET['id']); ?>">时间↑</a></dd>
                              <dd class="<?php echo ($curr1); ?>"><a href="/book/index.php/Home/Goods/index_down?id=<?php echo ($_GET['id']); ?>">时间↓</a></dd>
                              <dd class="<?php echo ($curr2); ?>"><a href="/book/index.php/Home/Goods/price_up?id=<?php echo ($_GET['id']); ?>">价格↑</a></dd>
                              <dd class="<?php echo ($curr3); ?>"><a href="/book/index.php/Home/Goods/price_down?id=<?php echo ($_GET['id']); ?>">价格↓</a></dd>
                      </dl>
                          
                      </div>
                        </form>
               <div style="height:0px; line-height:0px; clear:both;"></div>
                <form name="compareForm" action="compare.php" method="post" onsubmit="return compareGoods(this);">
                    <div class="squares clearfix">
                       <ul class="list_pic">
                            <?php if(is_array($fooddata)): foreach($fooddata as $key=>$item): ?><li class="item" style="margin-left:20px;margin-bottom: 40px;" id="li_32115">
                                      <div class="goods-content" style="position:relative">
                                            <div class="goods-pic"><a href="/book/index.php/Home/Index/goods?id=<?php echo ($item['id']); ?>" target="_blank" title="<?php echo ($item['goods_name']); ?>"><img style="width:200px;height: 200px;" data-original="/images/no_picture.gif" src="<?php echo IMG_URL . $item['big_logo']; ?>" title="<?php echo ($item['goods_name']); ?>" class="pic_img_<?php echo ($item['id']); ?>"></a> </div>
                                            <div class="goods-info"> 
                                             <div class="goods-name"><a href="/book/index.php/Home/Index/goods?id=<?php echo ($item['id']); ?>" target="_blank" title="<?php echo ($item['goods_name']); ?>"><?php echo ($item['goods_name']); ?><em></em></a></div>
                                            <div class="goods-price"> <em class="sale-price" title="本店价：<?php echo ($item['shop_price']); ?>"><?php echo ($item['shop_price']); ?></em> <em class="market-price" title=""><?php echo ($item['market_price']); ?></em>
                                                 <em>
                                                        <?php if(($item['goods_number'] != 0)): ?>&nbsp;&nbsp;有货 
                                                        <?php else: ?>&nbsp;&nbsp;无货<?php endif; ?>
                                                 </em>
                                            </div>
                                           <!--  <div class="sell-stat">
                                                <ul>
                                                    <li><a href="goods.php?id=32115" target="_blank" class="status">3</a>
                                                          <p>商品销量</p>
                                                    </li>
                                                    <li><a href="goods.php?id=32115#product-detail" target="_blank">0</a>
                                                         <p>用户评论</p>
                                                    </li>
                                                    <li><em member_id="46"><a class="chat chat_offline" href="javascript:;">36</a>&nbsp;</em>
                                                         <p>关注人气</p>
                                                    </li>
                                                 </ul>
                                             </div> -->
                                     </div>
                                 </li><?php endforeach; endif; ?>
                         </ul>
                          <div class="pagediv" ><?php echo ($page); ?></div>
                    </div>
                </form>

            </div>
<div class="blank5"></div>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
      </div>
</div>
<script type="text/javascript">
    var obj= document.getElementById('cat_bd');
    obj.style.display='none'
</script>
  

<div style="clear:both;"></div>
</div>
<!-- 底部导航 start -->
<div style="width:100%;background-color: #fafafa;padding-top: 20px;margin-top: 20px;float: left;">
<div class="bottomnav w1210 bc mt10"  >
<div class="footer-service" >
      <ul class="list-service clearfix">
        <li> <a class="ic1" rel="nofollow" href="" > <strong>24小时快速发货</strong> </a> </li>
        <li> <a class="ic2" rel="nofollow" href="" ><strong>7天无理由退货</strong> </a> </li>
        <li> <a class="ic3" rel="nofollow" href="" > <strong>15天免费换货</strong> </a> </li>
        <li> <a class="ic4" rel="nofollow" href="" > <strong>全场包邮</strong> </a> </li>
        <li> <a class="ic5" rel="nofollow" href="" > <strong>100余家售后网点</strong> </a> </li>
      </ul>
</div>
    <div class="bnav1">
        <h3><b></b> <em>新手上路</em></h3>
        <ul>
            <li>加入购物车</li>
            <li>提交订单</li>
            <li>支付订单</li>
            <li>余额支付</li>
        </ul>
    </div>

    <div class="bnav2">
        <h3><b></b> <em>配送方式</em></h3>
        <ul>
            <li>货到付款</li>
            <li>在线支付</li>
        </ul>
    </div>


    <div class="bnav3">
        <h3><b></b> <em>购物指南</em></h3>
        <ul>
            <li><a href="/book/index.php/Home/Goods/regist">注册新会员</a></li>
            <li><a href="/book/index.php/Home/Goods/login">会员登录</a></li>            
        </ul>
    </div>

    <div class="bnav4">
        <h3><b></b> <em>售后服务</em></h3>
        <ul>
            <li><a href="/book/index.php/Home/User/message_list">留言板</a></li>
        </ul>
    </div>

    <div class="bnav5">
        <h3><b></b> <em>关于我们</em></h3>
        <ul>
            <li><a href="/book/index.php/Home/Goods/contact">联系我们</a></li>
        </ul>
    </div>
</div>
<!-- 底部导航 end -->

<div style="clear:both;"></div>
<!-- 底部版权 start -->
<div class="footer w1210 bc mt10">
   
    <p class="copyright">
        © 2016 河南中医学院牛兰兰版权所有。
    </p>
    <p class="auth">
   <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=369613305&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:369613305:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>369613305</a>
    </p>
</div>
</div>
<!-- 底部版权 end -->

</body>
</html>
<script type="text/javascript">
    function display(){
        var obj= document.getElementById('cat_bd');
        obj.style.display='block';
    }
    function hide(){
        var obj= document.getElementById('cat_bd');
        obj.style.display='none';
    }
</script>