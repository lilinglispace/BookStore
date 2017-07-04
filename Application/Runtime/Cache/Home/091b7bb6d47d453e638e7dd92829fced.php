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


<script type="text/javascript">
    $(function(){
        $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false,
            title:false,
            zoomWidth:400,
            zoomHeight:400
        });
    })
</script>
<script language="JavaScript">  
      function chooseFile(){  
            document.getElementById("doc").click();  
      }  
      function getFilePath(){  
           var path = document.getElementById("doc").value;  
           alert(path);  
      }  
      function setImagePreview() {  
    var docObj=document.getElementById("doc");  
    var imgObjPreview=document.getElementById("preview");  
    if(docObj.files && docObj.files[0]){  
        //火狐下，直接设img属性  
        imgObjPreview.style.display = 'block';  
        imgObjPreview.style.width = '150px';  
        imgObjPreview.style.height = '150px';                      
        //imgObjPreview.src = docObj.files[0].getAsDataURL();  
          
        //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式    
        imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);  
    }else{  
        //IE下，使用滤镜  
        docObj.select();  
        var imgSrc = document.selection.createRange().text;  
        var localImagId = document.getElementById("localImag");  
        //必须设置初始大小  
        localImagId.style.width = "150px";  
        localImagId.style.height = "150px";  
        //图片异常的捕捉，防止用户修改后缀来伪造图片  
        try{  
            localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";  
            localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;  
        }catch(e){  
            alert("您上传的图片格式不正确，请重新选择!");  
            return false;  
        }  
        imgObjPreview.style.display = 'none';  
        document.selection.empty();  
    }  
    return true;  
}  
 </script>  
   <script type="text/javascript" src="/book./Application/Home/Public/js/region.js"></script>
<!-- 商品页面主体 start -->
<div class="main w1210 mt10 bc">
    <!-- 面包屑导航 start -->
    <div class="breadcrumb">
        <h2>当前位置：<a href="">首页</a> > <a href="">用户界面</a></h2>
    </div>
    <!-- 面包屑导航 end -->

    <!-- 主体页面左侧内容 start -->
    <div class="goods_left fl">
        <!-- 相关分类 start -->
        <div class="AreaL">
    <div class="box"> <div class="sideNav">
  <h1><a href="#"><span style="color: white;">会员中心</span></a></h1>
  <div class="userInfo">
    <div class="myInfo clearfix"> 
      <div class="photo">
        <div class="mask"></div>
        <?php if(($userdata[0]['pic'] != null)): ?><img id="headImagePath" src="<?php echo IMG_URL1 . $userdata[0]['pic']; ?>" height="80" width="80">
        <?php else: ?><img id="headImagePath" src="/book./Application/Home/Public/images/ren1.png" height="80" width="80"><?php endif; ?>
       <!-- <img id="headImagePath" src="themes/68ecshopcom_360buy/images/shengji_ad/peopleicon_02.gif" height="80" width="80">-->
      </div>
      <div class="info_op">
        <ul>
            <li class="info_op2"><i></i><a href="/book/index.php/Home/User/user">修改资料</a></li>
            <li class="info_op3"><i></i><a href="/book/index.php/Home/Index/logout">安全退出</a></li>
        </ul>
      </div>
    </div>
    <p class="cost"><?php echo ($userdata[0]['username']); ?></p>
  </div>
</div> <div class="navList">
      <div class="func func1 clearfix">
        <p class="title"><i></i><span>会员中心</span></p>
        <a href="/book/index.php/Home/User/user" class="item "><span>用户信息</span><i></i></a>
        <!-- 
        <a href="user.php?act=account_security" class="item "><span>账户安全</span><i></i></a>    
         -->
        <a href="/book/index.php/Home/User/npass" class="item "><span>修改密码</span><i></i></a>    
        <a href="/book/index.php/Home/User/address" class="item "><span>收货地址</span><i></i></a>
        <a href="/book/index.php/Home/User/packet" class="item "><span>红包管理</span><i></i></a> 
        <a href="/book/index.php/Home/User/get_packet" class="item "><span>领取红包</span><i></i></a> 
        <a href="/book/index.php/Home/User/my_assets" class="item "><span>我的资产</span><i></i></a> 
      </div>
      <div class="func func2 clearfix">
        <p class="title"><i></i><span>交易中心</span></p>
        <a href="/book/index.php/Home/User/order" class="item curs"><span>我的订单</span><i></i></a> 
        <a href="/book/index.php/Home/User/order_back" class="item "><span>退款/退货及维修</span><i></i></a> 
      </div>
      <div class="func func3 clearfix">
        <p class="title"><i></i><span>服务中心</span></p>
        <a href="/book/index.php/Home/User/message_list" class="item "><span>我的留言</span><i></i></a> 
    </div>
</div> </div>
    </div>
    <?php if(($user_info != null)): ?><div class="user_content">
       <form method="post" action="/book/index.php/Home/User/save?id=1" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $userdata[0]['id'] ?>">
        <input type="hidden" name="oldname" value="<?php echo $userdata[0]['username'] ?>">
            <div class="user_title">
                <p>个人资料</p>
            </div>
            <div class="user_headpic">
                <div class="user_headpic_left">
                <p>个人头像:</p>
                </div>
                <div class="user_headpic_right">
                <?php if( !$userdata[0]['pic']) {?>
                    <img id="preview" style="width: 150px;height: 150px;" src="/book./Application/Home/Public/images/ren1.png" />
                    <input  class="photos_d" style="border:1px solid #ccc;" type="button" value="上传图片" onclick="chooseFile()">
                    <input type="file" style="display: none;"  name="pic" id="doc"  onchange="javascript:setImagePreview();">
                <?php } else{ ?>
                        <img id="preview"  style="width: 150px;height: 150px;" src="<?php echo IMG_URL1 . $userdata[0]['pic']; ?>" >
                        <input  class="photos_d" style="border:1px solid #ccc;" type="button" value="上传图片" onclick="chooseFile()">
                        <input type="file" style="display:none;"  name="pic" id="doc"  onchange="javascript:setImagePreview();">
                 <?php  } ?>
                </div>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>个人昵称:</p>
                </div>
                <div class="user_info_right">
                <input type="text" name="username" value="<?php echo $userdata[0]['username'] ?>"/>
                </div>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>注册邮箱:</p>
                </div>
                <div class="user_info_right">
                <p><?php echo $userdata[0]['email'] ?></p>
                </div>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>个人积分:</p>
                </div>
                <div class="user_info_right">
                <p><?php echo $userdata[0]['jifen'] ?></p>
                </div>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>注册时间:</p>
                </div>
                <div class="user_info_right">
                <p><?php echo date('Y-m-d H:i:s',$userdata[0]['email_code_time']); ?></p>
                </div>
            </div>
            <div class="user_info" >
                <input class="btn" style="width:100px;height: 30px;margin-left: 250px;" type="submit" value="保存">
            </div>
        </form>
    </div><?php endif; ?>
    <?php if(($npass != null)): ?><div class="user_content">
       <form method="post" action="/book/index.php/Home/User/npass" enctype="multipart/form-data" id="passform">
        <input type="hidden" name="id" id="user_id" value="<?php echo $userdata[0]['id'] ?>">
        <input type="hidden" name="opass" id="old_md5" value="<?php echo $userdata[0]['password'] ?>">
            <div class="user_title">
                <p>修改密码</p>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>原始密码:</p>
                </div>
                <div class="user_info_right">
                <input type="password" name="oldpassword" id="oldpassword" required="true" />
                </div>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>新密码:</p>
                </div>
                <div class="user_info_right">
                <input type="password" name="password" required="true" id="password" />
                </div>
            </div>
            <div class="user_info" >
                <div class="user_info_left">
                <p>确认密码:</p>
                </div>
                <div class="user_info_right">
                <input type="password" name="querenpass" id="npassword" required="true"/>
                </div>
            </div>
            <div class="user_info" >
                <input class="btn1" style="width:100px;height: 30px;margin-left: 250px;" type="button" onclick="subpass()"  value="保存">
            </div>
        </form>
    </div><?php endif; ?>
    <?php if(($order != null)): ?><div class="user_content">
            <div class="user_title">
                <p>我的订单</p>
            </div>
            <div id="J_Remide" class="remide-box">
            <h3 style=" width:100px;line-height:35px;float:left;background:none">我的交易提醒：</h3>
            <ul>
              <li>未确认订单<span class="num1">(<?php echo ($order_status); ?>)</span></li>
              <li>待付款<span class="num1">(<?php echo ($pay_status); ?>)</span></li>
              <li>待发货<span class="num1">(<?php echo ($post_status); ?>)</span></li>
              <li>已成交订单数<span class="num1">(<?php echo ($order_status2); ?>)</span></li>
            </ul>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bought-table">
            <thead>
              <tr class="col-name">
                <th width="32%" style="border-left: 1px solid #E6E6E6;">宝贝</th>
                <th width="9%">单价(元)</th>
                <th width="5%">数量</th>
                <th width="13%">售后</th>
                <th width="8%">订单总金额</th>
                <th width="10%">状态</th>
                <th width="13%" style="border-right: 1px solid #E6E6E6;">操作</th>
              </tr>
            </thead>
            <?php if(is_array($orderdata)): foreach($orderdata as $key=>$item): ?><tbody class="close-order">
                      <tr class="sep-row">
                        <td colspan="7"></td>
                      </tr>
                      <tr class="order-hd">
                        <td colspan="8"><span class="no">
                          <label> 订单编号：<span class="order-num"><a href="order_info?order_id=<?php echo ($item['order_id']); ?> " class="f6"><?php echo ($item['order_id']); ?></a>
                            </span> </label>
                          </span> <span class="deal-time">&nbsp;&nbsp;成交时间：<?php echo ($item['addtime']); ?></span> <span class="deal-time">&nbsp;&nbsp;商家店铺：网站自营</span></td>
                      </tr>
                      <tr class="order-bd last">
                            <td align="center" class="baobei no-border-right" style="padding:0px;">
                                  <div class="goods_desc last"> <a class="pic" href="/book/index.php/Home/Index/goods?id=<?php echo ($item['goods_id']); ?>" title="查看宝贝详情" target="_blank"> 
                                        <img src="<?php echo IMG_URL . $item['mid_logo']; ?>" alt="查看宝贝详情" width="50" height="50"> 
                                        </a>
                                        <div class="goods_name"><?php echo ($item['goods_name']); ?></div>
                                  </div>
                            </td>
                       
                            <td align="center" class="baobei no-border-right" style="padding:0px;">                  
                                    <div class="goods_desc price  last" style="padding-left:0px; line-height:60px;"> <?php echo ($item['shop_price']); ?></div>
                            </td>
                            <td align="center" class="baobei no-border-right" style="padding:0px;">                  
                                     <div class="goods_desc  last" style="padding-left:0px;line-height:60px;"> 1 </div>
                            </td>
                            <td align="center" class="after-service baobei no-border-right" valign="middle">

                                    <?php if(($item['order_status'] == 3)): ?>已申请退货<br><?php endif; ?>
                                     <?php if(($item['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
                                    <?php if(($item['order_status'] != 3 and $item['order_status'] != 4 and $item['order_status'] != 2)): ?><a href="/book/index.php/Home/User/tuihuo?order_id=<?php echo ($item['order_id']); ?>">
                                        退货</a><?php endif; ?>
                                        <a href="/book/index.php/Home/User/order_mess?order_id=<?php echo ($item['order_id']); ?>">
                                            留言
                                        </a>
                     
                            </td>
                            <td rowspan="1" align="center" class="amount no-border-right">
                                    <p class="post-type"><strong><?php echo ($item['total_price']); ?> </strong></p>
                            </td>
                            <td rowspan="1" align="center" class="trade-status no-border-right">
                                    <?php if(($item['order_status'] == 0)): ?>未确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 1)): ?>已确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 2)): ?>已完成<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 3)): ?>申请退货<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
                                    <?php if(($item['pay_status'] == 0)): ?>未付款<br><?php endif; ?>
                                    <?php if(($item['pay_status'] == 1)): ?>已支付<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 0)): ?>未发货<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 1)): ?>已发货<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 2)): ?>已收货<br><?php endif; ?>
                                    <a href="order_info?order_id=<?php echo ($item['order_id']); ?> " class="red2">查看详情</a>
                            </td>
                            <td rowspan="1" align="center" class="other">
                                     <?php if(($item['pay_status'] == 0 and $item['order_status'] != 3 and $item['order_status'] != 4 )): if(($item['pay_method'] == '余额支付')): ?><a href="/book/index.php/Home/User/topay?order_id=<?php echo ($item['order_id']); ?>&&money=<?php echo ($item['total_price']); ?>" class="on_money" onclick="if (!confirm('你确实要付款吗？')) return false;">立即付款</a><br><?php endif; ?>
                                     <?php if(($item['pay_method'] == '货到付款')): ?>货到付款<br><?php endif; endif; ?>
                                    <?php if(($item['order_status'] == 0)): ?>未确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 1)): ?>已确认<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 2)): ?>已完成<br>
                                         <a href="/book/index.php/Home/User/comment?goods_id=<?php echo ($item['goods_id']); ?>"  class="on_money">去评论</a><br><?php endif; ?>
                                    <?php if(($item['order_status'] == 3)): ?>申请退货<br><?php endif; ?>
                                    <?php if(($item['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
                                    <?php if(($item['post_status'] == 1 and $item['order_status'] != 2 and $item['order_status'] != 4 )): ?><a href="/book/index.php/Home/User/ok?order_id=<?php echo ($item['order_id']); ?>&&money=<?php echo ($item['total_price']); ?>" onclick="if (!confirm('你确实要确认收货吗？')) return false;" class="on_money">确认收货</a><br><?php endif; ?>
                            </td>
                    </tr>
                 </tbody><?php endforeach; endif; ?>

           </table>
            <div class="pagediv" ><?php echo ($page); ?></div>
    </div><?php endif; ?>
    <?php if(($orderinfo != null)): ?><div class="user_content">
            <div class="tabmenu">
              <ul class="tab pngFix">
                <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;">订单状态</li>
              </ul>
          </div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6" id="order_status">
            <tbody><tr>
              <td width="15%" align="right" bgcolor="#ffffff">订单号：</td>
              <td align="left" bgcolor="#ffffff"><?php echo ($order_data[0]['order_id']); ?>
                 
                <a href="/book/index.php/Home/User/order_mess?order_id=<?php echo ($order_data[0]['order_id']); ?>">[发送/查看商家留言]</a></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff">订单状态：</td>
              <td align="left" bgcolor="#ffffff" >
                    <?php if(($order_data[0]['order_status'] == 0)): ?>未确认<br><?php endif; ?>
                    <?php if(($order_data[0]['order_status'] == 1)): ?>已确认<br><?php endif; ?>
                    <?php if(($order_data[0]['order_status'] == 2)): ?>已完成<br><?php endif; ?>
                    <?php if(($order_data[0]['order_status'] == 3)): ?>申请退货<br><?php endif; ?>
                    <?php if(($order_data[0]['order_status'] == 4)): ?>退货成功<br><?php endif; ?>
              </td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff">付款状态：</td>
              <td align="left" bgcolor="#ffffff"> 
                        <?php if(($order_data[0]['pay_status'] == 0)): ?>未付款<br><?php endif; ?>
                        <?php if(($order_data[0]['pay_status'] == 1)): ?>已支付<br><?php endif; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff">配送状态：</td>
              <td align="left" bgcolor="#ffffff">
                  <?php if(($order_data[0]['post_status'] == 0)): ?>未发货<br><?php endif; ?>
                    <?php if(($order_data[0]['post_status'] == 1)): ?>已发货<br><?php endif; ?>
                    <?php if(($order_data[0]['post_status'] == 2)): ?>已收货<br><?php endif; ?>
              </td>
            </tr>
             
            
          </tbody></table> 
          <div class="tabmenu">
              <ul class="tab pngFix">
                <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;">商品列表                 
                </li>
              </ul>
          </div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6" class="goods_list">
            <tbody><tr>
              <th width="27%" align="center" bgcolor="#ffffff">商品名称</th>
              <th width="18%" align="center" bgcolor="#ffffff">属性</th>
              <!--<th>市场价格：</th>-->
              <th width="15%" align="center" bgcolor="#ffffff">商品价格</th>
              <th width="9%" align="center" bgcolor="#ffffff">购买数量</th>
              <th width="17%" align="center" bgcolor="#ffffff">小计</th>
            </tr>
            <?php if(is_array($orderdata)): foreach($orderdata as $key=>$item): ?><tr>
              <td bgcolor="#ffffff">
                <a href="/book/index.php/Home/Index/goods?id=<?php echo ($item['goods_id']); ?>" target="_blank" class="f6"><?php echo ($item['goods_name']); ?></a> 
                </td>
                <td align="center" bgcolor="#ffffff"></td>
              <td align="center" bgcolor="#ffffff"><?php echo ($item['shop_price']); ?></td>
              <!--<td align="right">120.00</td>-->
              <td align="center" bgcolor="#ffffff"><?php echo ($item['goods_num']); ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo ($item['goods_num']*$item['shop_price']); ?></td>
            </tr><?php endforeach; endif; ?>
           
            <tr>
              <td colspan="8" bgcolor="#ffffff" align="right">总计：<?php echo ($order_data[0]['total_price']); ?>元</td>
            </tr>
          </tbody></table>
          <div class="tabmenu">
              <ul class="tab pngFix">
                <li class="first active " style="width: 100px;border-top: none;border-left: none;border-right: none;">费用总计</li>
              </ul>
          </div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6" class="order_address">
            <tbody><tr>
              <td align="right" bgcolor="#ffffff"> 商品总价: <?php echo ($order_data[0]['total_price']); ?> 
                </td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"> 
                <?php if(($order_data[0]['pay_status'] == 0)): ?>未付款<br><?php endif; ?>
                        <?php if(($order_data[0]['pay_status'] == 1)): ?>已支付<br><?php endif; ?>
                </td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff">应付款金额: <?php echo ($order_data[0]['total_price']); ?> 
                </td>
            </tr>
                      </tbody></table>
            <div class="tabmenu">
              <ul class="tab pngFix">
                <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;">收货人信息</li>
              </ul>
          </div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6" class="order_address">
            <tbody><tr>
              <td width="15%" align="right" bgcolor="#ffffff">收货人姓名：</td>
              <td width="35%" align="left" bgcolor="#ffffff"> <?php echo ($order_data[0]['shr_name']); ?> </td>
              <td width="15%" align="right" bgcolor="#ffffff">电子邮件地址：</td>
              <td width="35%" align="left" bgcolor="#ffffff"><?php echo ($order_data[0]['email']); ?> </td>
            </tr>
                        <tr>
              <td align="right" bgcolor="#ffffff">详细地址：</td>
              <td colspan="3" align="left" bgcolor="#ffffff"><?php echo ($order_data[0]['shr_address']); ?>  </td>
            </tr>
                        <tr>
             <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
              <td align="left" bgcolor="#ffffff"><?php echo ($order_data[0]['best_time']); ?> </td>
              <td align="right" bgcolor="#ffffff">手机：</td>
              <td align="left" bgcolor="#ffffff"><?php echo ($order_data[0]['shr_phone']); ?> </td>
            </tr>
                      </tbody></table>
            <div class="tabmenu">
              <ul class="tab pngFix">
                <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;">支付方式</li>
              </ul>
          </div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6" class="order_address">
            <tbody><tr>
              <td bgcolor="#ffffff"> 所选支付方式:<?php echo ($order_data[0]['pay_method']); ?>。应付款金额: <strong><?php echo ($order_data[0]['total_price']); ?></strong><br>
                 </td>
            </tr>
          </tbody></table>
          <div class="tabmenu">
              <ul class="tab pngFix">
                <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;">其它信息</li>
              </ul>
          </div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6" class="order_address">
                        <tbody><tr>
              <td width="15%" align="right" bgcolor="#ffffff">配送方式：</td>
              <td colspan="3" width="85%" align="left" bgcolor="#ffffff" id="shipping_name"><?php echo ($order_data[0]['post_method']); ?></td>
            </tr>
                        
            <tr>
              <td width="15%" align="right" bgcolor="#ffffff">支付方式：</td>
              <td colspan="3" align="left" bgcolor="#ffffff"><?php echo ($order_data[0]['pay_method']); ?></td>
            </tr>
          </tbody></table>
    </div><?php endif; ?>
    <?php if(($address != null)): ?><div class="user_content">
            <?php if(is_array($adddata)): foreach($adddata as $key=>$item): ?><div class="mar_top"></div>
            <form action="user.php" method="post" name="theForm" id="form_<?php echo ($item['address_id']); ?>" onsubmit="return checkConsignee(this)">
            <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6"  class="address_tab">
              <tbody><tr>
                <td align="right" bgcolor="#ffffff">配送区域：</td>
                <td colspan="3" align="left" bgcolor="#ffffff"><input type="hidden" id="country_<?php echo ($item['address_id']); ?>" name="country" value="1">
                  <select name="province" id="selProvinces_<?php echo ($item['address_id']); ?>" onchange="region.changed(this, 2, 'selCities_<?php echo ($item['address_id']); ?>')">
                    <option value="0">请选择省</option>
                                         <?php if(is_array($get_regions)): foreach($get_regions as $key=>$province): if(($item['province'] == $province['region_id'])): ?><option value="<?php echo ($province['region_id']); ?>" selected="true"><?php echo ($province['region_name']); ?></option>
                                           <?php else: ?><option value="<?php echo ($province['region_id']); ?>"><?php echo ($province['region_name']); ?></option><?php endif; endforeach; endif; ?>
                                      </select>
                  <select name="city" id="selCities_<?php echo ($item['address_id']); ?>" >
                                        <option value="0">请选择市</option>
                                         <?php if(is_array($get_regions1[$item['address_id']])): foreach($get_regions1[$item['address_id']] as $key=>$city): if(($item['city'] == $city['region_id'])): ?><option value="<?php echo ($city['region_id']); ?>" selected="true"><?php echo ($city['region_name']); ?></option>
                                               <?php else: ?><option value="<?php echo ($city['region_id']); ?>"><?php echo ($city['region_name']); ?></option><?php endif; endforeach; endif; ?>
                                      </select>
                  (必填) </td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                <td align="left" bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['consignee']); ?>">
                  (必填) </td>
                <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                <td align="left" bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['email']); ?>">
                  (必填)</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">详细地址：</td>
                <td align="left" bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['address']); ?>">
                  (必填)</td>
                <td align="right" bgcolor="#ffffff">邮政编码：</td>
                <td align="left" bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg" id="zipcode_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['zipcode']); ?>"></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">联系方式：</td>
                <td align="left" bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" id="tel_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['tel']); ?>"></td>
                <td align="right" bgcolor="#ffffff">手机：</td>
                <td align="left" bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg" id="mobile_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['mobile']); ?>">
                (必填)</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">&nbsp;</td>
                <input name="address_id" type="hidden" id="address_id_<?php echo ($item['address_id']); ?>" value="<?php echo ($item['address_id']); ?>">
                <td colspan="3" align="center" bgcolor="#ffffff">                    
                    <input type="button" onclick="checkConsignee(<?php echo ($item['address_id']); ?>)" name="submit" class="bnt_blue_1" value="确认修改">
                    <input name="button" type="button" class="bnt_blue" onclick="if (confirm('你确认要删除该收货地址吗？'))location.href='/book/index.php/Home/User/delAddress?address_id=<?php echo ($item['address_id']); ?>'" value="删除">
                </td>    
                </tr>
              </tbody></table>
            </form><?php endforeach; endif; ?>
            <div class="mar_top"></div>
            <form action="user.php" method="post" name="theForm" id="form_a" onsubmit="return checkConsignee(this)">
            <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E6E6E6"  class="address_tab">
              <tbody><tr>
                <td align="right" bgcolor="#ffffff">配送区域：</td>
                <td colspan="3" align="left" bgcolor="#ffffff"><input type="hidden" id="country_a" name="country" value="1">
                  <select name="province" id="selProvinces_a" onchange="region.changed(this, 2, 'selCities_a')">
                    <option value="0">请选择省</option>
                                         <?php if(is_array($get_regions)): foreach($get_regions as $key=>$province): ?><option value="<?php echo ($province['region_id']); ?>"><?php echo ($province['region_name']); ?></option><?php endforeach; endif; ?>
                                      </select>
                  <select name="city" id="selCities_a" >
                                        <option value="0">请选择市</option>
                                      </select>
                  (必填) </td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                <td align="left" bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_a" value="">
                  (必填) </td>
                <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                <td align="left" bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email_a" value="">
                  (必填)</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">详细地址：</td>
                <td align="left" bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address_a" value="">
                  (必填)</td>
                <td align="right" bgcolor="#ffffff">邮政编码：</td>
                <td align="left" bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg" id="zipcode_a" value=""></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">联系方式：</td>
                <td align="left" bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" id="tel_a" value=""></td>
                <td align="right" bgcolor="#ffffff">手机：</td>
                <td align="left" bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg" id="mobile_a" value="">
                (必填)</td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">&nbsp;</td>
                <input name="address_id" type="hidden" id="address_id_a" value="">
                <td colspan="3" align="center" bgcolor="#ffffff">                    
                    <input type="button" onclick="checkConsignee('a')" name="submit" class="bnt_blue_1" value="确认添加">
                    <input type="hidden" name="act" value="act_edit_address">
                   </td>
                </tr>
              </tbody></table>
            </form>
        </div><?php endif; ?>
    <?php if(($order_mess != null)): ?><div class="user_content">
           <div class="tabmenu">
                <ul class="tab pngFix">
                  <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;"><a>我的留言</a></li>
                </ul>
              </div>
        </div>
        <div class="mar_top">
                <div class="box"> 
                  <?php if(is_array($mess)): foreach($mess as $key=>$item): ?><div class="f_l"> <b><?php echo ($item['user_name']); ?>:</b>&nbsp;&nbsp;<font class="f4"><?php echo ($item['msg_title']); ?></font> (<?php echo ($item['msg_time']); ?>) </div>
                      <div class="f_r"> <a href="/book/index.php/Home/User/del_mess?order_id=<?php echo ($order_id); ?>&&msg_id=<?php echo ($item['msg_id']); ?>" title="删除" onclick="if (!confirm('你确实要彻底删除这条留言吗？')) return false;" class="f6">删除</a> </div>
                      <div class="msgBottomBorder"> <?php echo ($item['msg_content']); ?>
                        <br>
                      </div><?php endforeach; endif; ?>
                  
                   
                                    <div class="f_r"> <style>
   /*翻页*/
.xm-pagenavi {
    padding: 30px 0px;
    text-align: center;
}
.xm-pagenavi .numbers {
    display: inline-block;
    height: 18px;
    padding: 8px 13px;
    margin: 0px 2px;
    border: 1px solid #ddd;
    background:#fff;
    font-size: 14px;
    line-height: 18px;
    vertical-align: middle;
    color: #333;
}
.xm-pagenavi .first,.xm-pagenavi .last {
    border:1px #DFDFDF solid;
    cursor:pointer;
    color:#A5A5A5
}
.iconfont {
    font-family: "iconfont" !important;
    font-style: normal;
    color:#A5A5A5
}
.xm-pagenavi span.current {
    color: #fff;
    background:#E4393C;
    border:1px #E4393C solid
}
</style>
 
<form name="selectPageForm" action="/xjdduocangku/user.php" method="get">


 <div id="pager">
 <div class="xm-pagenavi">

             </div>
</div>


</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> </div>
                                    <div class="blank"></div>
                  <form action="/book/index.php/Home/User/save_mess?order_id=<?php echo ($order_id); ?>" method="post"  name="formMsg" onsubmit="return checkmess(this)">
                    <table width="100%" border="0" cellpadding="3">
                                            <tbody><tr>
                        <td align="right">订单号</td>
                        <td><a href="/book/index.php/Home/User/order_info?order_id=<?php echo ($order_id); ?>"><img src="/book./Application/Home/Public/images/note.gif"><?php echo ($order_id); ?></a>
                          <input name="order_id" type="hidden" value="15" class="inputBg"></td>
                      </tr>
                                            <tr>
                        <td align="right">主题：</td>
                        <td><input name="msg_title" id="msg_title" type="text" size="30" class="inputBg"></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">留言内容：</td>
                        <td><textarea name="msg_content" id="msg_content" cols="50" rows="4" wrap="virtual" class="B_blue"></textarea></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="hidden" name="order_id" value="<?php echo ($order_id); ?>">
                        <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>">

                          <input type="submit" value="提 交" class="bnt_bonus white"></td>
                      </tr>
                    </tbody></table>
                  </form>
                </div>
              </div><?php endif; ?>
    <?php if(($message_list != null)): ?><div class="user_content">
           <div class="tabmenu">
                <ul class="tab pngFix">
                  <li class="first active" style="width: 100px;border-top: none;border-left: none;border-right: none;"><a>我的留言</a></li>
                </ul>
              </div>
        </div>
        <div class="mar_top">
                <div class="box"> 
                  <?php if(is_array($mess)): foreach($mess as $key=>$item): ?><div class="f_l"> <b><?php echo ($item['user_name']); ?>:</b>&nbsp;&nbsp;<font class="f4"><?php echo ($item['msg_title']); ?></font> (<?php echo ($item['msg_time']); ?>) </div>
                      <div class="f_r"> <a href="/book/index.php/Home/User/del_messlist?order_id=<?php echo ($order_id); ?>&&msg_id=<?php echo ($item['msg_id']); ?>" title="删除" onclick="if (!confirm('你确实要彻底删除这条留言吗？')) return false;" class="f6">删除</a> </div>
                      <div class="msgBottomBorder"> <?php echo ($item['msg_content']); ?>
                        <br>
                      </div><?php endforeach; endif; ?>
                  
                   
                                    <div class="f_r"> <style>
   /*翻页*/
.xm-pagenavi {
    padding: 30px 0px;
    text-align: center;
}
.xm-pagenavi .numbers {
    display: inline-block;
    height: 18px;
    padding: 8px 13px;
    margin: 0px 2px;
    border: 1px solid #ddd;
    background:#fff;
    font-size: 14px;
    line-height: 18px;
    vertical-align: middle;
    color: #333;
}
.xm-pagenavi .first,.xm-pagenavi .last {
    border:1px #DFDFDF solid;
    cursor:pointer;
    color:#A5A5A5
}
.iconfont {
    font-family: "iconfont" !important;
    font-style: normal;
    color:#A5A5A5
}
.xm-pagenavi span.current {
    color: #fff;
    background:#E4393C;
    border:1px #E4393C solid
}
</style>
 
<form name="selectPageForm" action="/xjdduocangku/user.php" method="get">


 <div id="pager">
 <div class="xm-pagenavi">

             </div>
</div>


</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> </div>
                                    <div class="blank"></div>
                  <form action="/book/index.php/Home/User/save_messlist" method="post"  name="formMsg" onsubmit="return checkmess(this)">
                    <table width="100%" border="0" cellpadding="3">
                                            <tbody>
                                            <tr>
                        <td align="right">主题：</td>
                        <td><input name="msg_title" id="msg_title" type="text" size="30" class="inputBg"></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">留言内容：</td>
                        <td><textarea name="msg_content" id="msg_content" cols="50" rows="4" wrap="virtual" class="B_blue"></textarea></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="hidden" name="order_id" value="<?php echo ($order_id); ?>">
                        <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>">

                          <input type="submit" value="提 交" class="bnt_bonus white"></td>
                      </tr>
                    </tbody></table>
                  </form>
                </div>
              </div><?php endif; ?>
    <?php if(($packet != null)): ?><div class="user_content">
            <div class="user_title">
                <p>我的红包</p>
            </div>
          <table width="100%" style="text-align: center; " border="0" cellspacing="0" cellpadding="0" class="bought-table">
            <thead>
              <tr class="col-name">
                <th width="9%" style="border-left: 1px solid #E6E6E6;">名称</th>
                <th width="32%">有效期</th>
                <th width="5%">使用门槛</th>
                <th width="13%">面值</th>
                <th width="13%" style="border-right: 1px solid #E6E6E6;">操作</th>
              </tr>
            </thead>
            <?php if(is_array($packetdata)): foreach($packetdata as $key=>$item): ?><tbody >
                      <tr style="border-right: 1px solid #E6E6E6; line-height: 50px;">
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['packet_name']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['packet_start']); ?>~<?php echo ($item['packet_end']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['start_money']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['packet_money']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;border-right: #F3F3F3 solid 1px;"><a href="/book/index.php/Home/User/del_packet?id=<?php echo ($item['packet_id']); ?>">删除</a></td>
                      </tr>
                 </tbody><?php endforeach; endif; ?>

           </table>
            <div class="pagediv" ><?php echo ($page); ?></div>
    </div><?php endif; ?>
    <?php if(($getpacket != null)): ?><div class="user_content">
            <div class="user_title">
                <p>领取红包</p>
            </div>
          <table width="100%" style="text-align: center; " border="0" cellspacing="0" cellpadding="0" class="bought-table">
            <thead>
              <tr class="col-name">
                <th width="9%" style="border-left: 1px solid #E6E6E6;">名称</th>
                <th width="32%">有效期</th>
                <th width="5%">使用门槛</th>
                <th width="13%">面值</th>
                <th width="13%" style="border-right: 1px solid #E6E6E6;">操作</th>
              </tr>
            </thead>
            <?php if(is_array($packetdata)): foreach($packetdata as $key=>$item): ?><tbody >
                      <tr style="border-right: 1px solid #E6E6E6; line-height: 50px;">
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['packet_name']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['packet_start']); ?>~<?php echo ($item['packet_end']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['start_money']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($item['packet_money']); ?></td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;border-right: #F3F3F3 solid 1px;"><a href="/book/index.php/Home/User/toget_packet?id=<?php echo ($item['packet_id']); ?>">领取</a></td>
                      </tr>
                 </tbody><?php endforeach; endif; ?>

           </table>
            <div class="pagediv" ><?php echo ($page); ?></div>
    </div><?php endif; ?>


<?php if(($comment != null)): ?><div class="user_content">
                    <div id="remark_container"></div>
                    
                    <!--  评论表单 start-->
                    <div class="comment_form mt20">
                        <form action="" name="remark_form">
                            <input type="hidden" name="goods_id" value="<?php echo I('get.goods_id'); ?>" />
                            <ul>
                                <li>
                                    <label for=""> 商品评分：</label>
                                    <input type="radio" name="stars" value="5" checked="checked" /> <strong class="star star5"></strong>
                                    <input type="radio" name="stars" value="4" /> <strong class="star star4"></strong>
                                    <input type="radio" name="stars" value="3" /> <strong class="star star3"></strong>
                                    <input type="radio" name="stars" value="2" /> <strong class="star star2"></strong>
                                    <input type="radio" name="stars" value="1" /> <strong class="star star1"></strong>
                                </li>
                                <li>
                                    <label for="">评价内容：</label>
                                    <textarea name="content" id="" cols="" rows=""></textarea>
                                </li>
                                <li>
                                    <label for="">商品印象：</label>
                                    <input type="text" name="yx_name" style="height: 30px;" />
                                </li>
                                <li>
                                    <label for="">&nbsp;</label>
                                    <input type="button" value="提交评论"   class="comment_btn"/>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--  评论表单 end-->

                </div>
            </div>
                <!-- 商品评论 end --><?php endif; ?>
<?php if(($my_assets != null)): ?><div class="user_content">
            <div class="user_title">
                <p>我的资产</p>
            </div>
          <table width="100%" style="text-align: center; " border="0" cellspacing="0" cellpadding="0" class="bought-table">
            <thead>
              <tr class="col-name">
                <th width="9%" style="border-left: 1px solid #E6E6E6;">名称</th>
                <th width="32%">资产</th>
              </tr>
            </thead>
                <tbody >
                      <tr style="border-right: 1px solid #E6E6E6; line-height: 50px;">
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;">我的积分</td>
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;border-right:#F3F3F3 solid 1px;"><?php echo ($userdata[0]['jifen']); ?> 分</td>
                      </tr>
                       <tr style="border-right: 1px solid #E6E6E6; line-height: 50px;">
                          <td style="border-left: #F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;">我的余额</td>
                          <td style="border-left: #F3F3F3 solid 1px;border-right:#F3F3F3 solid 1px;border-bottom: #F3F3F3 solid 1px;"><?php echo ($userdata[0]['money']); ?> 元</td>
                      </tr>
                 </tbody>

           </table>
            <div class="pagediv" ><?php echo ($page); ?></div>
    </div><?php endif; ?>
<!-- 商品页面主体 end -->
</div>
<script>
    // 点击评论时AJAX提交表单
    $(".btn").click(function(){
        // 判断有没有评分
        var starsOk = false;
        if($.trim($("input[name=username]").val()) == "")
        {
            alert("用户名不能为空！");
            return false;
        }
       
    });

    function upAddress(id){
           $.get('upAddress?address_id='+id,function(r){
                var  result=$.parseJSON(r);
                region.response(r,target);
            });
    }
    function checkConsignee(i){
        var country_id='country_'+i;
        var province_id='selProvinces_'+i;
        var city_id='selCities_'+i;
        var address_id='address_'+i;
        var email_id='email_'+i;
        var zipcode_id='zipcode_'+i;
        var tel_id='tel_'+i;
        var consignee_id='consignee_'+i;
        var address_id_id='address_id_'+i;
        var mobile_id='mobile_'+i;
        var country=  document.getElementById(country_id).value;
        var province= document.getElementById(province_id).value;
        var city=  document.getElementById(city_id).value;
        var address=  document.getElementById(address_id).value;
        var email= document.getElementById(email_id).value;
        var zipcode=  document.getElementById(zipcode_id).value;
        var tel= document.getElementById(tel_id).value;
        var consignee=  document.getElementById(consignee_id).value;
        var address_id= document.getElementById(address_id_id).value;
        var mobile= document.getElementById(mobile_id).value;
        if (!consignee) {
            alert('收货人不能为空！');
            document.getElementById('consignee').value='';
            document.getElementById('consignee').focus();
            return false;
        }
        if (!address) {
            alert('详细地址不能为空！');
            document.getElementById('address').value='';
            document.getElementById('address').focus();
            return false;
        }
        if (!email) {
            alert('收货人邮箱不能为空！');
            document.getElementById('email').value='';
            document.getElementById('email').focus();
            return false;
        }
         var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
          if(!myreg.test(email))
          {
               alert('请输入有效的E_mail！');
              document.getElementById('email').value='';
              document.getElementById('email').focus();               
               return false;
          }
        if (!mobile) {
            alert('收货人手机不能为空！');
            document.getElementById('mobile').value='';
            document.getElementById('mobile').focus();
            return false;
        }
        if(!(/^1[3|4|5|8][0-9]\d{8}$/.test(mobile))){ 
            alert("不是完整的11位手机号或者正确的手机号前七位"); 
            document.getElementById('mobile').value='';
            document.getElementById('mobile').focus();
            return false;
          } 
         $.ajax({
            url:"submitAddress",
            type:'POST',
            dataType:'json',
            data:{'country':country,'province':province,'city':city,'address':address,'email':email,'zipcode':zipcode,'tel':tel,'consignee':consignee,'address_id':address_id,'mobile':mobile,},
            success: function(data){
                if(data.code!='10000'){
                    alert(data.msg);
                    $("#save").show();                  
                }
                else{
                    alert(data.msg);
                    location.reload();
                }
            }
        });
    }
    function checkmess(){
        var title=document.getElementById('msg_title').value;
        var content=document.getElementById('msg_content').value;
        if (!title) {
            alert('请输入留言标题！');
            return false;
        }
        if (!content) {
            alert('请输入留言内容！');
            return false;
        }
    }
    function subpass(){
        var pass=document.getElementById('password').value;
        var rpass=document.getElementById('npassword').value;
        var opass=document.getElementById('oldpassword').value;
        var old_md5=document.getElementById('old_md5').value;
        var id=document.getElementById('user_id').value;
        if (!opass) {
            alert('原始密码不能为空');
            return false;
        }
        if (!pass) {
            alert('新密码不能为空');
            return false;
        }
        if (!rpass) {
            alert('重复密码不能为空');
            return false;
        }
        if (pass!=rpass) {
            alert('两次密码不一样，请重试！');
            return false;
        }
         $.ajax({
            url:"npass",
            type:'POST',
            dataType:'json',
            data:{'oldpassword':opass,'password':pass,'old_md5':old_md5,'id':id,},
            success: function(data){
                if(data.code!='10000'){
                    alert(data.msg);
                    $("#save").show();                  
                }
                else{
                    alert(data.msg);
                    location.reload();
                }
            }
        });
    }
</script>

<script>
    _updateHis();
    var id="<?php echo $_SESSION['id'];?>";
    function _updateHis()
    {
        // 如果AJAX没有执行完再推迟0.5秒
        if(_chk_login_done_ == 0)
            setTimeout(_updateHis, 500);
        else
        {
            // 下面的代码只有在AJAX判断完登录之后才会被执行
            if(id > 0)
            {
                $.ajax({
                    type : "GET",
                    url : "/book/index.php/Home/User/ajaxIncHistory/gid/<?php echo I('get.id'); ?>"
                });
            }
        }
    }

    // 点击评论时AJAX提交表单
    $(".comment_btn").click(function(){
        // 判断有没有评分
        var starsOk = false;
        // 循环五个单选框(在客户端进行验证)
        $("input[name=stars]").each(function(){
            // 只要有一个是选中的就不用再循环后面的了
            if($(this).attr("checked"))
            {
                starsOk = true;
                return false;   // 退出循环
            }
        });
        // 如果循环完之后还是false说明一个也没选
        if(!starsOk)
        {
            alert("必须打分！");
            return false;
        }
        if($.trim($("textarea[name=content]").val()) == "")
        {
            alert("评论内容不能为空！");
            return false;
        }
        if($.trim($("input[name=goods_id]").val()) == "")
        {
            alert("参数无效！");
            return false;
        }
        //收集表单中的数据,serialize是jquery自带的
        var d = $("form[name=remark_form]").serialize();
        if(id){
            $.ajax({
                type : "POST",
                url : "/book/index.php/Home/Index/ajaxRemark",
                data : d,
                dataType : "json",
                success : function(data)
                {
                    if(data.error == 0)
                    {
                        alert('评论成功');
                        window.location.href="/book/index.php/Home/User/order";
                    }
                    else
                    {
                        alert(data.message);
                    }
                }
            });
        }
        else if(!id){
            alert("请先登录！");
        }
    });
    
    function numPK(v1,v2)
    {
        if(parseInt(v1)<parseInt(v2))
            return -1;
        else if(parseInt(v1)>parseInt(v2))
            return 1;
        else
            return 0;
    }
    // 获取当前商品的库存量
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
            <li><a href="/book/index.php/Home/User/regist">注册新会员</a></li>
            <li><a href="/book/index.php/Home/User/login">会员登录</a></li>            
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
            <li><a href="/book/index.php/Home/User/contact">联系我们</a></li>
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