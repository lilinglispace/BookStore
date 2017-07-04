<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="/book/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<title>添加图书类别</title>
</head>
<body>
<div class="pd-20">
  <form action="<?php echo U('admin/cate/edit');?>" method="post" class="form form-horizontal" id="form-member-add">
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>ID：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo ($edit["id"]); ?>" readonly required placeholder="" id="id" name="id"/>
      </div>
      <div class="col-4"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>类别名：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo ($edit["name"]); ?>" required placeholder="" id="name" name="name"/>
      </div>
      <div class="col-4"> </div>
    </div>
    <div class="row cl">
      <div class="col-9 col-offset-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;添加&nbsp;&nbsp;">
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>