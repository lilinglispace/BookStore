<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends BaseController {
	//添加图书
	public function add()
	{
		$cate=D('Admin/Cate');
		$this->assign('volist',$cate->select());
		$goods=D('goods');
		if(IS_POST)
		{
			$data['isbn']=$pic_data['isbn']=$desc_data['isbn']= date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
			//上传图书图片
			if($_FILES['img']['name']!=null)
			{
				$upload=new \Think\Upload();
				$upload->maxSize=183723231133;
				$upload->exts=array('jpeg','jpg','png','gif');
				$upload->rootPath="Public/Upload/Admin/Goods/";
				$upload->savePath="";
				//上传多张照片
				$info=$upload->upload(array($_FILES['img']));
				if(!$info)
				{
					$this->error($upload->getError());
					$this->redirect('admin/gooods/add','',1,'上传图片失败!');
				}
				else
				{
					//将第一张照片传入goods表
					$data['img']=$info[0]['savepath'].$info[0]['savename'];
					$data['name']=$_POST['name'];
					$data['author']=$_POST['author'];
					$data['press']=$_POST['press'];
					$data['cate']=$_POST['cate'];
					$cate=D('cate');
					$in=$cate->where('id='.$data['cate'])->find();
					$data['p_id']=$in['p_id'];
					$data['price']=$_POST['price'];
					$data['price_hot']=$_POST['price_hot'];
					$data['desc']=$_POST['desc'];
					$data['reserve']=$_POST['reserve'];
					$goods->add($data);
					//将上传的每张照片的地址保存至pic模块中并生成缩略图
					$pic=D('pic');
					foreach($info as $v)
					{
						$pic_data['name']=$_POST['name'];
						$pic_data['img']=$v['savepath'].$v['savename'];
						$pic->add($pic_data);
					}
				}
			}
			if($_FILES['img_desc']['name']!=null)
			{
				$upload=new \Think\Upload();
				$upload->maxSize=183723231133;
				$upload->exts=array('jpeg','jpg','png','gif');
				$upload->rootPath="Public/Upload/Admin/Desc/";
				$upload->savePath="";
				//上传多张照片
				$inf=$upload->upload(array($_FILES['img_desc']));
				if(!$inf)
				{
					$this->error($upload->getError());
					$this->redirect('admin/gooods/add','',1,'上传图片失败!');
				}
				else
				{
					//将上传的每张照片的地址保存至pic模块中并生成缩略图
					$desc=D('desc');
					foreach($inf as $v)
					{
						$desc_data['name']=$_POST['name'];
						$desc_data['img']=$v['savepath'].$v['savename'];
						$desc->add($desc_data);
					}
				}
			}
		}
		$this->display();
	}
	//图书列表
	//图书列表
	public function show()
	{
	    $count=M('goods')->count();
	    $Page=new \Think\Page($count,10);
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show =$Page->show();
        $res=M('goods')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('show',$res);
		$goods=D('goods');
		$this->assign('page',$show);
		$this->assign('count',$goods->count());
		$this->display();
	}


	//修改图书信息
	public function edit()
	{
		$id=I('id');
		$goods=D('goods');
		$cate=D('Admin/Cate');
		$this->assign('volist',$cate->select());
		$this->assign('edit',$goods->where('id='.$id)->find());
		if(IS_POST)
		{
			$id=I('id');
			if($goods->where('id='.$id)->save($_POST))
			{
				$this->redirect('admin/goods/show','',1,'修改成功！');
			}
			else
			{
				$this->redirect('admin/goods/show','',1,'修改失败！');
			}
		}
		$this->display();
	}

	//删除图书
	public function del()
	{
		$id=I('id');
		$goods=D('goods');
		if($goods->where('id='.$id)->delete())
		{
			$this->redirect('admin/goods/show','',1,'删除成功！');
		}
		else
		{
			$this->redirect('admin/goods/show','',1,'删除失败！');
		}
		$this->display();
	}
}