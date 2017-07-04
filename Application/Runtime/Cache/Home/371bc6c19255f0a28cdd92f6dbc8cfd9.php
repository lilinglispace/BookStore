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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>确认订单</title>
  <link rel="stylesheet" href="/book./Application/Home/Public/style/base.css" type="text/css">
  <link rel="stylesheet" href="/book./Application/Home/Public/style/global.css" type="text/css">
  <link rel="stylesheet" href="/book./Application/Home/Public/style/header.css" type="text/css">
  <link rel="stylesheet" href="/book./Application/Home/Public/style/cart.css" type="text/css">
  <!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
  <script rel="javascript" type="text/javascript" href="_PUBLIC__/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/book./Application/Home/Public/js/region.js"></script>
  <link rel="stylesheet" href="/book./Application/Home/Public/style/order.css" type="text/css">
  



  
</head>
<script type="text/javascript">
 var cnames=document.getElementsByName("delid[]");
 function fall(){
     for(var i=0;i<cnames.length;i++){
        if(cnames[i].checked)
        cnames[i].checked="";
        else cnames[i].checked="true";
     }
 }
</script>
<body>

  <!-- 顶部导航 end -->
  
  <div style="clear:both;"></div>
  <div id="bg" class="bg"></div>
  
  <!-- 页面头部 start -->
  <div class="header w1210 bc mt15">
    <div class="logo w990">
      <div class="flow">
          <div id="A_Stepbar" class="flowstep">
              <ol class="flowstep-5">
                <li class="step-first">
                  <div class="step-done">
                    <div class="step-name">查看购物车</div>
                    <div class="step-no"></div>
                  </div>
                </li>
                <li>
                  <div class="step-done">
                    <div class="step-name">拍下商品</div>
                    <div class="step-no"></div>
                  </div>
                </li>
                <li>
                  <div class="step-name">付款</div>
                  <div class="step-no">3</div>
                </li>
                <li>
                  <div class="step-name">确认收货</div>
                  <div class="step-no">4</div>
                </li>
            </ol>
            </div>
        <!-- <ul>
          <li class="cur">1.我的购物车</li>
          <li>2.填写核对订单信息</li>
          <li>3.成功提交订单</li>
        </ul> -->
      </div>
    </div>
    
  </div>
  <!-- 页面头部 end -->
  <div class="mycart1 w1210 mt10 bc">
    <h2><span>确认订单</span></h2>
    <form method="post" action="/book/index.php/Home/Cart/addorder" id="orderform" >
      <div class="address">
          <h3>1.收货地址</h3>

          <div class="add_form">
            <?php if(($address != null)): if(is_array($address)): foreach($address as $key=>$item): if(($item['default_add'] == 1)): ?><div class="address_check" id="address<?php echo ($item['address_id']); ?>">
                          <div class="address_link">
                              <a href="#"  onclick="upAddress(<?php echo ($item['address_id']); ?>)"  >修改</a>
                              <a href="#" onclick="delAddress(<?php echo ($item['address_id']); ?>)" >删除</a>
                          </div>
                          <div class="address_info">
                              <span><?php echo ($item['consignee']); ?></span>
                              <span><?php echo ($item['address']); ?></span>
                              <span><?php echo ($item['mobile']); ?></span>
                              <input type="hidden" name="shr_address" id="shr_address" value="<?php echo ($item['address']); ?>"></input>
                              <input type="hidden" name="shr_phone" id="shr_phone" value="<?php echo ($item['mobile']); ?>"></input>
                              <input type="hidden" name="shr_name" id="shr_name" value="<?php echo ($item['consignee']); ?>"></input>
                              <input type="hidden" name="zipcode1" id="zipcode" value="<?php echo ($item['zipcode']); ?>"></input>
                              <input type="hidden" name="email1" id="email" value="<?php echo ($item['email']); ?>"></input>
                              <input type="hidden" name="tel1" id="tel" value="<?php echo ($item['tel']); ?>"></input>
                          </div>
                      </div>
                  <?php else: ?>
                      <div class="address_list"  id="address<?php echo ($item['address_id']); ?>">
                          <div class="address_link" style="z-index: 1;">
                              <a href="#"  onclick="upAddress(<?php echo ($item['address_id']); ?>)"  >修改</a>
                              <a href="#" onclick="delAddress(<?php echo ($item['address_id']); ?>)" >删除</a>
                              <a href="#" onclick="changeback(<?php echo ($item['address_id']); ?>)" >设为默认</a>


                          </div>
                          <div class="address_info">
                              <span><?php echo ($item['consignee']); ?></span>
                              <span><?php echo ($item['address']); ?></span>
                              <span><?php echo ($item['mobile']); ?></span>
                          </div>
                      </div><?php endif; endforeach; endif; endif; ?>
              <div class="new_btn">
                  <div class="address_jm_add" onclick="AddressEdit(0);">使用新地址</div>
              </div>

      </div>
      <div class="mydiv" id="mydiv">
          <div class="mydiv-l" id="PopAddressTitle">使用新地址</div>
          <div class="mydiv-r" onclick="javascript:closePopDiv()"></div>
          <div id="PopAddressCon">
          <form name="address_form" method="POST" action="">
          <table cellpadding="4" cellspacing="4" width="100%" style="clear:both;margin-top:20px;">
                <tbody>
                    <tr>
                        <td style="text-align:right;width:10%"><font color="#ff3300">*</font>收件人</td>
                        <td><input type="text" name="consignee" id="consignee" value="" class="input_addr2"></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;">所在地区</td>
                        <td>
                            <input type="hidden" id="country" name="country" value="1">
                            <select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities');" style="width:100px;height:25px;border:1px solid #ccc;">
                                <option value="0">请选择</option>
                                     <?php if(is_array($get_regions)): foreach($get_regions as $key=>$item): ?><option value="<?php echo ($item['region_id']); ?>"><?php echo ($item['region_name']); ?></option><?php endforeach; endif; ?>          
                            </select>
                            <select name="city" id="selCities" onchange="" style="width:100px;height:25px;border:1px solid #ccc;">
                                    <option value="0">请选择</option>
                            </select>
                            <!-- <select name="xiangcun" id="selDistricts" onchange="region.changed(this, 4, 'selXiangcuns');" style="display:none;width:100px;height:25px;border:1px solid #ccc;">
                              <option value="0">请选择</option>
                          </select> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><font color="#ff3300">*</font>街道地址</td><td><input type="text" name="address" id="address" class="input_addr1" value=""></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><font color="#ff3300">*</font>电子邮箱</td><td><input type="text" name="email"  id="email2" class="input_addr1" value=""></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">邮编</td><td><input type="text" name="zipcode" id="zipcode2" class="input_addr3" value=""></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><font color="#ff3300">*</font>手机号码</td>
                        <td><input type="text" name="mobile" id="mobile" class="input_addr2 input_addr2_t" value="">&nbsp;&nbsp;&nbsp;&nbsp;或固定电话 <input type="text" name="tel" id="tel2" class="input_addr2 input_addr2_t" value="">
                        </td>
                    </tr>

                    <tr><td></td><td><font color="#cccccc">两者至少填写一项</font></td></tr>
                    <tr><td></td><td style="padding-top:10px;">
                    <input  type="hidden" name="address_id" id="address_id"  value=""></input>
                    <input type="hidden" name="closediv" value="1">
                    <input type="button" class="BonusButton" value=" 确定 " onclick="submitAddress()">&nbsp;&nbsp;<input type="button" class="Button_reset" value=" 取消 " onclick="closePopDiv()"></td></tr>
                </tbody></table>
                </form>
                </div>
      </div>
      <div class="ord_goods">
          <h3>2.商品清单</h3>
          <div class="goods_tab">
              <table>
                <thead>
                  <tr>
                    <th>商品</th>
                    <th>数量</th>
                    <th>单价</th>
                    <th>小计</th>
                  </tr>
                </thead>
                <tbody>
                <?php if(is_array($goods)): foreach($goods as $key=>$item): ?><tr>
                    <td style="width:300px;"><img src="<?php echo IMG_URL . $item['mid_logo']; ?>" alt="" /><span style=" line-height:100px; "><?php echo ($item['goods_name']); ?><span></td>
                    <td><?php echo ($item['goods_number']); ?></td>
                    <td><?php echo ($item['price']); ?></td>
                    <td><?php echo ($item['xj']); ?></td>
                    <input type="hidden" name="goods_id[]" value="<?php echo ($item['goods_id']); ?>" />
                    <input type="hidden" name="price[]" value="<?php echo ($item['price']); ?>" />
                    <input type="hidden" name="goods_num[]" value="<?php echo ($item['goods_number']); ?>"></input>
                    <input type="hidden" name="goods_name[]" value="<?php echo ($item['goods_name']); ?>" />
                  </tr><?php endforeach; endif; ?>    
                </tbody>
              </table>
             <div style="width: 100%;height: 20px;"></div>
      </div>
      <div class="ord_goods">
          <h3>3.配送方式</h3>
          <div class="goods_tab">
              <div class="payment_tab">
                 <div class="post">
                 <?php if(is_array($shipdata)): foreach($shipdata as $key=>$item): ?><div class="post_list">
                          <input type="radio"  name="post_method" onclick="changemoney(<?php echo ($item['shipping_fee']); ?>)" value="<?php echo ($item['shipping_name']); ?>" >
                          <b> <?php echo ($item['shipping_name']); ?></b>
                          (配送费用：<span style="color: red;"><?php echo ($item['shipping_fee']); ?></span>元)
                        </div><?php endforeach; endif; ?>   
                  </div>
              </div>
              <div class="add_info">
                  
                </div>
          </div>
      </div>
      <div class="ord_goods">
          <h3>4.支付方式</h3>
          <div class="goods_tab">
              <div class="payment_tab">
                 <?php if(is_array($paydata)): foreach($paydata as $key=>$item): ?><div class="payment">
                          <?php if(($item['pay_name'] == '余额支付')): ?><input type="radio"  name="pay_method" id="pay_method[<?php echo ($item['pay_id']); ?>]" value="<?php echo ($item['pay_name']); ?>"  onclick="checkmoney(this.id)">
                                <b> <?php echo ($item['pay_name']); ?></b>
                                <span>余额：</span><span id="money"> <?php echo ($memdata['money']); ?></span>
                          <?php else: ?>
                               <input type="radio"  name="pay_method" value="<?php echo ($item['pay_name']); ?>" >
                              <b> <?php echo ($item['pay_name']); ?></b><?php endif; ?>
                         
                      </div><?php endforeach; endif; ?>   
              </div>
              <div class="add_info">
                  
                </div>
          </div>
      </div>
      
      <div class="ord_goods">
          <h3>5.其他信息</h3>
          <div class="goods_tab">
                <div class="best_time">
                      <div class="best_title"><span style="margin-right: 20px;font-size: 14px;">选择配送时间:</span>
                           <select name="best_time" style="height: 30px; width: 200px;">
                              <option value="">请选择配送时间</option>
                               <?php if(is_array($timedata)): foreach($timedata as $key=>$item): ?><div class="payment">
                                    <option value="<?php echo ($item['time']); ?>"><?php echo ($item['time']); ?></option>
                                </div><?php endforeach; endif; ?>   
                           </select>
                      </div>
                      <div class="best_title"><span style="margin-right: 20px;font-size: 14px;">选择店铺红包:</span>
                           <select name="packet" onchange="checkTotal(<?php echo ($totalPrice); ?>)" id="packet" style="height: 30px; width: 200px;">
                              <option value="" >请选择红包</option>
                               <?php if(is_array($packet)): foreach($packet as $key=>$item): ?><div class="payment">
                                    <option value="<?php echo ($item['packet_money']); ?>,<?php echo ($item['packet_id']); ?>,<?php echo ($item['start_money']); ?>,<?php echo ($item['packet_start']); ?>,<?php echo ($item['packet_end']); ?>,<?php echo ($now_time); ?>"><?php echo ($item['packet_name']); ?></option>
                                </div><?php endforeach; endif; ?>   
                           </select>
                      </div>
                </div>
           </div>

           <div class="add_info">
                  <span style="float: right;margin-right: 20px;">总金额：<span id="show_money" style="color:red;font-weight: bold;font-size: 16px;"><?php echo ($totalPrice); ?> </span> 元</span>
                  <input type="hidden" name="total_price" id="total_price" value="<?php echo ($totalPrice); ?>"> </input>
                  <input type="hidden" name="packet_id" id="packet_id" value=""> </input>
                </div>
          </div>
      </div>
    <div class="cart_btn w990 bc mt10">
      <a href="/book/index.php/Home/Index/index" class="continue">继续购物</a>
      <input type="button" class="checkout" onclick="checkform()" value="提交订单" />
    </div>
    </form>
  </div>
  </div>
  <!-- 底部版权 end -->
</body>
</html>
<script type="text/javascript">
var addressdata='<?php echo ($address); ?>';
if (!addressdata) {
   AddressEdit()
}
  function AddressEdit(){
    document.getElementById('bg').style.display='block';
      var obj=document.getElementById('mydiv');
      obj.style.display='block';
  }
  function closePopDiv(){
      var obj=document.getElementById('mydiv');
      obj.style.display='none';
      document.getElementById('bg').style.display='none';
       location.reload();
  }
</script>
<script type="text/javascript">
    function submitAddress(){
        var country=  document.getElementById('country').value;
        var province= document.getElementById('selProvinces').value;
        var city=  document.getElementById('selCities').value;
        var address=  document.getElementById('address').value;
        var email= document.getElementById('email2').value;
        var zipcode=  document.getElementById('zipcode2').value;
        var tel= document.getElementById('tel2').value;
   
        var consignee=  document.getElementById('consignee').value;
        var address_id= document.getElementById('address_id').value;
        var mobile= document.getElementById('mobile').value;
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
            alert("不是完整的11位手机号"); 
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
    function changeback(id){
      $.ajax({
            url:"setAddress",
            type:'POST',
            dataType:'json',
            data:{'address_id':id,},
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
    function delAddress(id){
          $.ajax({
            url:"delAddress",
            type:'POST',
            dataType:'json',
            data:{'address_id':id,},
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
    function upAddress(id){
          document.getElementById('PopAddressTitle').innerHTML='修改地址';
           $.get('upAddress?address_id='+id,function(r){
                var  result=$.parseJSON(r);
                AddressEdit_Response(result,r);
            });
    }

  function AddressEdit_Response(result,r)
  {
     document.getElementById('bg').style.display='block';
     var obj=document.getElementById('mydiv');
     obj.style.display='block';
    var consignee=  document.getElementById('consignee');
    var country=  document.getElementById('country');
    var province= document.getElementById('selProvinces');
    var city=  document.getElementById('selCities');
    var address=  document.getElementById('address');
    var email= document.getElementById('email2');
    var zipcode=  document.getElementById('zipcode2');
    var tel= document.getElementById('tel2');
    var address_id= document.getElementById('address_id');
    var mobile= document.getElementById('mobile');
    target='selCities';
    region.response(r,target)
    consignee.value=result.consignee;
    country.value=result.country;
    province.value=result.province;
    city.value=result.city;
    address.value=result.address;
    email.value=result.email;
    zipcode.value=result.zipcode;
    tel.value=result.tel;
    address_id.value=result.address_id;
    mobile.value=result.mobile;
  }
  function checkform(){
      if (!document.getElementById('shr_name')) {
        alert("请选择配送地址");
        return false;
      }
      var shr_name=document.getElementById('shr_name').value;
      var shr_address=document.getElementById('shr_address').value;
      var shr_phone=document.getElementById('shr_phone').value;
      if (!shr_name) {
        alert('请输入收货人姓名！');
        return false;
      }
      if (!shr_address) {
        alert('请输入收货人地址！');
        return false;
      }
      if (!shr_phone) {
        alert('请输入收货人电话！');
        return false;
      }
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
      if (!flag1) {
          alert('请选择支付方式！');
          return false;
      }
      var form=document.getElementById('orderform');
      form.submit();

  }
  function checkmoney(id){
    var obj=document.getElementById(id);
    var total_price=document.getElementById('total_price').value;
    if (obj.checked) {
        var money=document.getElementById('money').innerHTML;

        if (parseFloat(money)<parseFloat(total_price)) {
            alert('余额不足！');
            obj.checked=false;
        }
    }
  }
  function changemoney(fee){
    var  money=<?php echo ($totalPrice); ?>;
    var show=document.getElementById('show_money');
    var total_price=document.getElementById('total_price');
    show.innerHTML=parseFloat(money)+parseFloat(fee);

    total_price.value =show.innerHTML;
  }
  function checkTotal(money){
    var packet=document.getElementById('packet').value;
    var total_price=document.getElementById('show_money');
    var total_price_input=document.getElementById('total_price');
     var packet_id=document.getElementById('packet_id');
    if(packet){
        var packet_money=packet.split(',')[0];
        var packet_id_value=packet.split(',')[1];
        var start_money=packet.split(',')[2];
        var packet_start=packet.split(',')[3].replace(/-/g,'');
        var packet_end=packet.split(',')[4].replace(/-/g,'');
        var now_time=packet.split(',')[5].replace(/-/g,'');
       
        if (packet_start>now_time || packet_end<now_time){
            alert('红包不在有效期内');
            return false;
            }
        if(start_money>money){
            alert('总金额小于红包门槛，请重试！');
            return false;
        }
        if (packet_money) {
          var money=parseFloat(money)-parseFloat(packet_money);    
          total_price.innerHTML=money;
          total_price_input.value=money;
          packet_id.value=packet_id_value;
        }else{
          packet_id.value='';
        } 
    }else{
         total_price.innerHTML=money;
         total_price_input.value=money;
         packet_id.value='';
    }
   
  }
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
            <li><a href="/book/index.php/Home/Cart/regist">注册新会员</a></li>
            <li><a href="/book/index.php/Home/Cart/login">会员登录</a></li>            
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
            <li><a href="/book/index.php/Home/Cart/contact">联系我们</a></li>
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