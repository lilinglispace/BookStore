
$(function(){
	// alert('11');
	$(window).scroll(function(){
		var st = $(document).scrollTop();//往下滚的高度
		var sel=$('.nav');
	if(st>30){<!--滚动条高度等于导航条-->
		sel.addClass('gu');
		$('.yin').slideDown("2000");
		}else{
		    sel.removeClass('gu');
			$('.yin').css('display','none');
			}
       })

	});
/* 解决ie不兼容nth-child*/
 $(function(){
	 $('.star li:nth-child(4n)').css('margin-right','0');
	 $('.fu_right li:nth-child(3n)').css('margin-right','0');
	 $('.pei_right li:nth-child(3n)').css('margin-right','0');
	 });

	

/*返回顶部js*/
	window.onload=function()
  {
    var obtn=document.getElementById('btun');
    obtn.onclick=function()
    {
        timer=setInterval(function()
        {
            var osTop=document.documentElement.scrollTop || document.body.scrollTop;//获得高度
            var isspeed=osTop/5;
            document.documentElement.scrollTop=document.body.scrollTop=osTop-isspeed;
            if(osTop==0)
            {
                clearInterval(timer);
            }
        },30)
    }
}
/*
/*产品数量加减效果*/
/*
$(function(){	
  var t=$("#show_num");
  $("#add_num").click(function(){
   t.val(parseInt(t.val())+1)
   if(parseInt(t.val())>=1){
     $('#min_num').attr('disabled',false);
   }
   //点击一个按钮后重新计算库存量
    ajaxGetGN();
  })
  $("#min_num").click(function(){
        t.val(parseInt(t.val())-1);
        if (parseInt(t.val())<=1){
            $('#min_num').attr('disabled',true);
        }
        //点击一个按钮后重新计算库存量
    ajaxGetGN();
    })

   });
*/
	

/*图片切换效果*/
$(function(){	
	$('.small ul li').hover(function(){
		$(this).addClass('hit').siblings().removeClass('hit');
		$('.panes>div:eq('+$(this).index()+')').show().siblings().hide();	
	})
})