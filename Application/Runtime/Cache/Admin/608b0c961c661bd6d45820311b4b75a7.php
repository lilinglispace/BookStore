<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link href="/book/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/book/Public/Admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<title>新增书籍</title>
</head>
<body>
<div class="pd-20">
	<form action="<?php echo U('admin/goods/edit');?>" method="post" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>书籍名称：</label>
			<div class="formControls col-10">
				<input type="hidden" name="id" value="<?php echo ($edit["id"]); ?>" />
				<input type="text" class="input-text" value="<?php echo ($edit["name"]); ?>" required placeholder="" id="name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>书籍分类：</label>
			<div class="formControls col-2"> <span class="select-box">
				<select name="cate" class="select" required>
					<option value="0">请选择分类</option>
					<?php if(is_array($volist)): $i = 0; $__LIST__ = $volist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($edit['cate'] == $vo['id']): ?>selected<?php endif; ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">作者：</label>
			<div class="formControls col-4">
				<input type="text" name="author" required id="" placeholder="" value="<?php echo ($edit["author"]); ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">出版商：</label>
			<div class="formControls col-4">
				<input type="text" name="press" required id="" placeholder="" value="<?php echo ($edit["press"]); ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">原价：</label>
			<div class="formControls col-4">
				<input type="text" name="price" required id="" placeholder="" value="<?php echo ($edit["price"]); ?>" class="input-text" style="width:90%">
				元</div>
			<label class="form-label col-2">热销价：</label>
			<div class="formControls col-4">
				<input type="text" name="price_hot" required id="" placeholder="" value="<?php echo ($edit["price_hot"]); ?>" class="input-text" style="width:90%">
				元</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">库存：</label>
			<div class="formControls col-4">
				<input type="text" name="reserve" required id="" placeholder="" value="<?php echo ($edit["reserve"]); ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">书籍摘要：</label>
			<div class="formControls col-10">
				<textarea name="desc" cols="" required rows="" class="textarea"><?php echo ($edit["desc"]); ?></textarea>
			</div>
		</div>
		<!--
		<div class="row cl">
			<label class="form-label col-2">书籍图片：</label>
			<div class="formControls col-10">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<input type="file" name="img" required />
				</div>
			</div>
		</div>
		-->
		<div class="row cl">
			<div class="col-10 col-offset-2">
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>修改</button>
			</div>
		</div>
	</form>
</div>
</div>
</body>
</html>