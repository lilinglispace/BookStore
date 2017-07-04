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
        <p>当前位置：<a href="<?php echo U('Home/Index/index');?>"> 首页</a>><span>会员中心</span></p>
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
           <div class="shi-head">
                <p>修改收货地址</p>
            </div>
               <form action="<?php echo U('home/address/edit');?>" method="post"  id="addressFrom">
                  <div class="guan-adr">
                      <ul>
                        <li class="guan-zuo"><i>*</i><span>所在地区:</span></li>
                        <li class="guan-you"> <input type="text" name="area" value="<?php echo ($addr["area"]); ?>" class="form-control" required id="city" />
                        <style type="text/css">
                            * { -ms-word-wrap: break-word; word-wrap: break-word; }
                            html { -webkit-text-size-adjust: none; text-size-adjust: none; }
                            html, body {height:100%;width:100%; }
                            html, body, h1, h2, h3, h4, h5, h6, div, ul, ol, li, dl, dt, dd, iframe, textarea, input, button, p, strong, b, i, a, span, del, pre, table, tr, th, td, form, fieldset, .pr, .pc { margin: 0; padding: 0; word-wrap: break-word; font-family: verdana,Microsoft YaHei,Tahoma,sans-serif; *font-family: Microsoft YaHei,verdana,Tahoma,sans-serif; }
                            body, ul, ol, li, dl, dd, p, h1, h2, h3, h4, h5, h6, form, fieldset, .pr, .pc, em, del { font-style: normal; font-size: 100%; }
                            ul, ol, dl { list-style: none; }
                            ._citys { width: 680px; display: inline-block; border: 2px solid #ccc; background: #ccc; padding: 5px; position: relative; }
                            ._citys span { color: #56b4f8; height: 15px; width: 15px; line-height: 15px; text-align: center; border-radius: 3px; position: absolute; right: 10px; top: 10px; border: 1px solid #56b4f8; cursor: pointer; }
                            ._citys0 { width: 100%; height: 34px; display: inline-block; border-bottom: 2px solid #56b4f8; padding: 0; margin: 0; }
                            ._citys0 li { display: inline-block; line-height: 34px; font-size: 15px; color: #888; width: 80px; text-align: center; cursor: pointer; }
                            .citySel { background-color: #56b4f8; color: #fff !important; }
                            ._citys1 { width: 100%; display: inline-block; padding: 10px 0; }
                            ._citys1 a { width: 83px; height: 35px; display: inline-block; background-color: #f5f5f5; color: #666; margin-left: 6px; margin-top: 3px; line-height: 35px; text-align: center; cursor: pointer; font-size: 13px; overflow: hidden; }
                            ._citys1 a:hover { color: #fff; background-color: #56b4f8; }
                            .AreaS { background-color: #56b4f8 !important; color: #fff !important; }
                            </style>
                  </li>
                  </ul>
                  </div>
                    <div class="guan-adr">
                    <ul>
                    <li class="guan-zuo1"><i>*</i>详细地址:</li>
                        <li class="guan-you1"><textarea class="wenziyu" placeholder="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息"  required value="<?php echo ($addr["desc_area"]); ?>" name="desc_area" id="xiang"></textarea></li>
                    </ul>
                    </div>
                    <div class="guan-adr">
                    <ul>
                      <li class="guan-zuo"><i>*</i>邮政编码:</li>
                        <li class="guan-you">
                            <input type="text" class="bianma" name="post_code" required value="<?php echo ($addr["post_code"]); ?>" placeholder="如您不清楚邮递区号，请填写000000" id="youbian">
                            <input type="hidden" name="id" value="<?php echo ($addr["id"]); ?>" />
                        </li>
                        </ul>
                    </div>
                     <div class="guan-adr">
                     <ul>
                      <li class="guan-zuo"><i>*</i>收货人姓名:</li>
                        <li class="guan-you">
                            <input type="text" class="bianma" placeholder="长度不超过25个字符" required name="name" value="<?php echo ($addr["name"]); ?>" id="sname">
                            <input  type="hidden" name="userid" value="<?php echo (cookie('userid')); ?>" />
                        </li>
                     </ul>
                     </div>
                      <div class="guan-adr">
                      <ul>
                       <li class="guan-zuo"><i>*</i>收货人手机/电话:</li>
                        <li class="guan-you">
                            <input type="text" class="bianma"placeholder="长度不超过25个字符" required name="tel" value="<?php echo ($addr["tel"]); ?>" id="scall">
                        </li>
                      </ul>
                      </div>
                          <div class="addr"><input type="submit" value="修改" class="add-baocun"/></div>
                          <input type="hidden" name="id" value="<?php echo ($addr["id"]); ?>">
               </form>

             </div>
    </div>
   </div>
   <script>
$("#city").click(function (e) {
  SelCity(this,e);
});
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
<script src="/book/Public/Home/js/jquery-1.11.3.min.js"></script>
<script src="/book/Public/Home/js/Popt.js"></script>
<script src="/book/Public/Home/js/cityJson.js"></script>
<script src="/book/Public/Home/js/citySet.js"></script>
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
  <div class="help_right1">
  <p>在线服务<a target="_blank" href="javascript:;"><img border="0" src="http://wpa.qq.com/pa?p=2:2553305465:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
 
  <p>服务时间：08：30-24：00</p>
  </div>
</div>
</div>

</body>
</html>