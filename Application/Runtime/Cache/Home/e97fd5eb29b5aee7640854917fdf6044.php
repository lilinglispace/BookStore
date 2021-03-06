<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <title>注册</title>  
    <link rel="stylesheet" href="/book/Public/Home/css/pintuer.css">
    <link rel="stylesheet" href="/book/Public/Home/css/admin.css">
    <script src="/book/Public/Home/js/jquery.js"></script>
    <script src="/book/Public/Home/js/pintuer.js"></script>  
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="<?php echo U('home/user/reg');?>" method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>遇见书店</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="username" placeholder="用户名" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="pwd" placeholder="注册密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="repwd" placeholder="再次输入密码" data-validate="required:请再次输入密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big" name="verify" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                           <img src="<?php echo U('home/user/verify');?>" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">  
                                                   
                        </div>
                    </div>
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>

</body>
</html>