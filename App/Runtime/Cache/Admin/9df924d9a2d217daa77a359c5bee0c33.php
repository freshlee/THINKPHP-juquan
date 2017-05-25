<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
body{
	background-color: #333333;
}
	.mainbox{
		position: relative;
		width: 200px;
		height: 200px;
		background-color: #333333;
		left: 50%;
		margin-left:-100px; 
		top:400px;
		border-radius: 100px;
		overflow: hidden;
		    transform:scale(2);
        -ms-transform:scale(2); 	
       -moz-transform:scale(2); 	
    -webkit-transform:scale(2); 


	}
	.cell:nth-of-type(1){

		   transform:  rotate(0deg) skewX(18deg) translate(-2px,-1.46px);
	}
	.cell:nth-of-type(2){
		   transform:  rotate(72deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.cell:nth-of-type(3){
		   transform:  rotate(144deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.cell:nth-of-type(4){
		   transform:  rotate(216deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.cell:nth-of-type(5){
		   transform:  rotate(288deg) skewX(18deg) translate(-2px,-1.46px);
	}
	.cell_common{
		background-color:#FF6600;
		position: absolute;
		width: 50%;
		height: 50%;
		transform-origin: 100% 100%;
		-ms-transform-origin: 100% 100%;
        -moz-transform-origin: 100% 100%;
        -webkit-transform-origin: 100% 100%;
	}
	.shelter{
		position: absolute;
		width: 100px;
		height: 100px;
		background-color: #333333;
		left:50%;
		top:50%;
		margin-left: -50px;
		margin-top: -50px; 
		border-radius: 100px;

	}
	.submenu{
		position: relative;
		width: 200px;
		height: 200px;
		background-color: #333333;
		top: 200px;
		left: 50%;
		margin-left:-100px; 
		border-radius: 100px;
		overflow: hidden;
		display: none;

}
	.submenu:hover{
		display: block!important;
}

		.subcell:nth-of-type(1){

		   transform:  rotate(0deg) skewX(18deg) translate(-2px,-1.46px);
	}
	   .subcell:nth-of-type(2){
		   transform:  rotate(72deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.subcell:nth-of-type(3){
		   transform:  rotate(144deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.subcell:nth-of-type(4){
		   transform:  rotate(216deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.subcell:nth-of-type(5){
		   transform:  rotate(288deg) skewX(18deg) translate(-2px,-1.46px);
	}
		.subcell_common{
		background-color:#FF6600;
		position: absolute;
		width: 50%;
		height: 50%;
		transform-origin: 100% 100%; 
	}
	.mainbox a{
		position: absolute;
		transform: rotate(-40deg) skewX(0deg) translate(-5px,57px);
	}
	.submenu a{
		position: absolute;
		transform: rotate(-46deg) skewX(5deg) translate(-17px,47px);
		text-decoration: none;
	}
	.win{
		width: 200%;
		position: relative;
	}
	.win_content{
		width: 50%;
		height: 100%;
		float: left;
	}
	.win_menu{
		height: 100%;
		width: 50%;
		float: left;
	}
	.main_win{
		width: 100%;
		overflow: hidden;
		height: window.clientheight;
	}

	}

</style>
</head>
   
<body>
<div class="main_win">
<div class="win">
<div class="win_menu">
<div class="mainbox" style="z-index: 3">
	<div class="cell cell_common"><a>文章管理</a></div>
	<div class="cell cell_common"><a>课程管理</a></div>
	<div class="cell cell_common"><a>分页管理</a></div>
	<div class="cell cell_common"><a>用户管理</a></div>
	<div class="cell cell_common"><a>报名信息</a></div>
    <div class="shelter">
</div>
</div>
<div class="submenu" style="transform: scale(1)">

	<div class="subcell cell_common "><a href="/Admin/News/NewsList" target="mainFrame" class="n">列表</a></div>
	<div class="subcell cell_common "><a href="/Admin/News/NewsAdd" target="mainFrame" class="n">添加</a></div>
	<div class="subcell cell_common "><a href="/Admin/News/NewsSort" target="mainFrame" class="n">分类</a></div>






	<div class="shelter" style="transform: scale(1.5);">
</div>
</div>
</div>
<div class="win_content">
<div class="left" style="display:inline-block;height:1005px ;width: 19%">
</div>
<div class="right" style="display:inline-block;height:100%;width: 80%">
<iframe  name="mainFrame"  width="100%" height=1000PX frameborder="0" scrolling="yes"></iframe>
</div>
</div>
</div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script>

$(".cell").hover(function(index){
	var index=$(this).index();
	var angel=(index-1)*72+"deg";
	console.log(angel);
      $(".submenu").css({
      	"display":"block",
      	"transition-property":"transform",
		"transition-duration":"1s" ,
      	"transform":"scale(3) rotate("+angel+")",
        "-moz-transition-property":"transform",
		"-moz-transition-duration":"1s" ,
      })
},function(index){
		var index=$(this).index();
	var angel=(index-1)*72+"deg";
	      $(".submenu").css({
      	"display":"none",
      	"transform":"scale(3) rotate("+angel+")",
      })
})
$('.submenu').mouseout(function(){
	$(this).css("display","none");
})

$(".submenu .subcell").click(function(){
	$(".win").animate({
		left:"-100%",
	})
});
$(".left").click(function(){
	$(".win").animate({
		left:"0%",
	})
});
$(".cell:eq(0)").mouseover(function(){  
 $(".subcell:eq(0) a").attr("href","/Admin/News/NewsList");
 $(".subcell:eq(0) a").text("列表");
  $(".subcell:eq(1) a").attr("href","/Admin/News/NewsAdd");
 $(".subcell:eq(1) a").text("添加");
  $(".subcell:eq(2) a").attr("href","/Admin/News/NewsSort");
 $(".subcell:eq(2) a").text("分类");
})



$(".cell:eq(1)").mouseover(function(){
 $(".subcell:eq(0) a").attr("href","/Admin/Series/index");
 $(".subcell:eq(0) a").text("系列");
  $(".subcell:eq(1) a").attr("href","/Admin/Goods/courselist");
 $(".subcell:eq(1) a").text("课程");
  $(".subcell:eq(2) a").attr("href","/Admin/Goods/add");
 $(".subcell:eq(2) a").text("课表");
})
$(".cell:eq(2)").mouseover(function(){
 $(".subcell:eq(0) a").attr("href","/Admin/pagination/teacher");
 $(".subcell:eq(0) a").text("师资");
  $(".subcell:eq(1) a").attr("href","/Admin/pagination/environment");
 $(".subcell:eq(1) a").text("环境");
  $(".subcell:eq(2) a").attr("href","/Admin/pagination/style");
 $(".subcell:eq(2) a").text("风采");
})



$(".cell:eq(3)").mouseover(function(){
 $(".subcell:eq(0) a").attr("href","/Admin/Member/MemberPaw");
 $(".subcell:eq(0) a").text("密码");
  $(".subcell:eq(1) a").attr("href","/Admin/Member/MemberAdd");
 $(".subcell:eq(1) a").text("添加");
  $(".subcell:eq(2) a").attr("href","/Admin/Member/MemberFastList");
 $(".subcell:eq(2) a").text("管理");
})
$(".cell:eq(4)").mouseover(function(){
 $(".subcell:eq(0) a").attr("href","/Admin/message/message");
 $(".subcell:eq(0) a").text("报名信息");
  $(".subcell:eq(1) a").attr("href","");
 $(".subcell:eq(1) a").text("");
  $(".subcell:eq(2) a").attr("href","");
 $(".subcell:eq(2) a").text("");
})
        		
</script>
</body>
</html>