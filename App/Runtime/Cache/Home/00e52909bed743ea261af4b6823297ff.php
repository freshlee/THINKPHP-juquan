<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>世锐电器实业有限公司</title>
<meta name="keywords" content="世锐电器,世锐,电器" />
<meta name="description" content="世锐电器实业有限公司" />
<link href="/Public/Homes/css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Public/Homes/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Homes/js/common.js"></script>
<script type="text/javascript" src="/Public/Homes/js/gundo.js"></script>
</head>
<body>
<style type="text/css">
#lg {
    width: 100%;
    height: 135px;
    background: url(/Public/homes/images/index_02.jpg) top repeat-x;
}
.lg_0 {
    width: 1000px;
    height: 135px;
    margin: 0 auto;
}
.lg_logo {
    width: 200px;
    height: 135px;
    float: left;
    margin-top: -6px;
}
.lg_1 {
    width: 800px;
    height: 35px;
    float: right;
    line-height: 35px;
    text-align: right;
    color: #212121;
}
.dh {
    width: 720px;
    height: 60px;
    margin-top: 20px;
    float: right;
}
.dh ul li {
    float: left;
    display: inline;
    list-style-type: none;
    text-align: center;
    width: 144px;
    height: 50px;
    line-height: 25px;
}
.dh li a {
    color: #373737;
    width: 144px;
    height: 50px;
    display: block;
    font-size: 14px;
}
.dh ul {
    padding-left: 0;
}
.dh ul li span {
    width: 85px;
    display: block;
    float: left;
    text-align: left;
    padding-left: 65px;
	padding-top:20px;
}
</style>

<div id="lg">
<div class="lg_0">  
<div class="lg_logo"><img src="/Public/Homes/picture/logo.png" height="80px" width="240px" style="margin-top:20px;"></div>
<div class="lg_1">服务热线：0757-22173839 </div>
<div class="dh">
<ul>
<li><a href="<?php echo U('Index/index');?>"><!--<span class="e">Home</span>--><span class="c">网站首页</span></a></li>
<li><a href="<?php echo U('Index/cutform',array('id'=>1));?>"><!--<span class="e">About us</span>--><span class="c">公司简介</span></a></li>
<!--<li><a href="<?php echo U('Index/news');?>"><span class="e">News</span><span class="c">新闻资讯</span></a></li>-->
<li><a href="<?php echo U('Index/product');?>"><!--<span class="e">Products</span>--><span class="c">产品展示</span></a></li>
<li><a href="<?php echo U('Index/message');?>"><!--<span class="e">Feedback</span>--><span class="c">在线留言</span></a></li>
<li><a href="<?php echo U('Index/cutform',array('id'=>6));?>"><!--<span class="e">Contact us</span>--><span class="c">联系我们</span></a></li>
</ul>
</div>
</div>
</div>
<style type="text/css">
.sr_zst{ width:100%;}
.sr_zst li{ float:left; margin-bottom:30px; overflow:hidden; position:relative;}
.sr_zst li img{ width:100%; height:100%; display:block; position:absolute; top:0; left:0;}
</style>
<script>
$(document).ready(function(){
	var ht = $(window).width(); 
	var eht = parseInt(ht/4)-6;
	if(ht<1200){
		eht = parseInt(ht/3)-6;
	}
	if(ht<700){
		eht = parseInt(ht/2)-10;
	}
	if(ht<400){
		eht = ht;
	}
	$(".sr_zst > ul >li").each(function(){
		$(this).width(eht);
		$(this).height(eht);
	});
	
	$(".sr_zst > ul >li").hover(function(){
		var beht = eht+40;
		$(this).find('img').animate({
			width:beht,
			height:beht,
			left:"-20px",
			top:"-20px"
		},500);
	},function(){
		$(this).find('img').animate({
			width:eht,
			height:eht,
			left:"0px",
			top:"0px"
		},500);
	});
});
/*$(window).resize(function () {          //当浏览器大小变化时

    var ht = $(window).width(); 
	var eht = parseInt(ht/4)-6;
	
	if(ht<1200){
		eht = parseInt(ht/3)-6;
	}
	if(ht<700){
		eht = parseInt(ht/2)-10;
	}
	if(ht<400){
		eht = ht;
	}

	$(".sr_zst > ul >li").each(function(){
		$(this).animate({
			width:eht,
			height:eht
		},800);
		$(this).find('img').animate({
			width:eht,
			height:eht
		},800);
	});
});*/
</script>

<div class="area">
	<div id="js" class="js">
		<div class="box01">
		<?php if(is_array($bgimage)): $i = 0; $__LIST__ = $bgimage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bg): $mod = ($i % 2 );++$i;?><img onclick="location.href='<?php echo ($bg["ad_link"]); ?>'" alt="1" src="/Uploads/myad/<?php echo ($bg["ad_img"]); ?>" <?php if(($key) != "0"): ?>style="display: none;"<?php endif; ?>><?php endforeach; endif; else: echo "" ;endif; ?>			 	  
		</div>	 
	</div>    
</div>
<div id="jsNav" class="jsNav">	
	<?php if(is_array($bgimage)): $i = 0; $__LIST__ = $bgimage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bg): $mod = ($i % 2 );++$i;?><a class="trigger <?php if(($key) == "0"): ?>imgSelected<?php endif; ?>" href="javascript:void(0)"></a><?php endforeach; endif; else: echo "" ;endif; ?>								
</div>



<div class="sr_zst">
<ul>
<?php if(is_array($fview)): $i = 0; $__LIST__ = $fview;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fview): $mod = ($i % 2 );++$i;?><li><img src="/Uploads/myad/<?php echo ($fview["ad_img"]); ?>" /></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div style="clear:both;"></div>
</div>

<!--<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;">
  <tr>
    <td height="40" colspan="2"  class="index_title" style="padding-left:465px;" ><?php echo ($advert1["ad_link"]); ?></td>
  </tr>
  <tr>
    <td width="449" height="273"><img src="/Uploads/myad/<?php echo ($advert1["ad_img"]); ?>" border="0" style="width:449px; height:280px;" /></td>
	<td width="631"><table width="531" border="0" cellspacing="0" cellpadding="0" style="padding-left:60px;">
  <tr>
    <td height="57"  class="index_title" style="font-style: italic;">&nbsp;<?php echo ($advert2["ad_link"]); ?></td>
  </tr>
  <tr>
    <td height="196" valign="top" style="padding:10px 20px;" class="index_about">
<span style="font-family:KaiTi_GB2312;" class="Apple-style-span"><span style="line-height:21px;font-size:14px;" class="Apple-style-span">
<img alt="" src="/Uploads/myad/<?php echo ($advert2["ad_img"]); ?>" /><br />
</span></span>
	</td>
  </tr>
</table>
</td>
  </tr>
</table>-->


<script type='text/javascript'>
		$(document).ready(function(){
			$('.floor4').slide({
				  mainCell:'.content ul', 
				  autoPlay:true, 
				  interTime:3000,    
				  scroll:1, 
				  vis:4,    
				  effect:'leftLoop'
			});
		})
	</script>
<!--<div id="content_body">
<div class="floor4">
	<div class="left_body"><a class="prev" ></a><div class="content">
	<ul>
		<?php if(is_array($goodslist)): $i = 0; $__LIST__ = $goodslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/product',array('id'=>$goods['id']));?>" target="_blank" title="<?php echo ($goods["name"]); ?>" rel="nofollow"><img src="/Uploads/goods/<?php echo ($goods["img"]); ?>" alt="<?php echo ($goods["name"]); ?>" /><br />
			<span><?php echo ($goods["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	</div><a class="next" ></a></div></div>
</div>-->



<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;">
  <tr>
    <td height="96" style="background:url(/Public/Homes/images/foot.gif) no-repeat; padding-top:20px;  line-height:150%;">
	
	<?php echo ($adbottom["ad_content"]); ?>
	
	</td>
  </tr>
   <tr><td>技术支持:<a href="http://www.juquankeji.com">聚全科技</a></td></tr>
</table>
<!--在线客服start-->
		<link rel='stylesheet' type='text/css' href='/Public/Homes/css/green.css'/>
		<script type='text/javascript' src='/Public/Homes/js/jquery.online.js'></script>
		<script type='text/javascript'>	
			$(function(){
			$().Sonline({
				Position:'right',
				Top:200,
				Width:190,
				Style:1, 
				Effect:true, 
				DefaultsOpen:true, 
				Tel:'1',
				Title:'在线客服',
				FooterText:'<?php echo ($wx["ad_content"]); ?>',
				Website:'',
				Qqlist:'<?php echo ($qq["ad_content"]); ?>'
			});
		})	
		</script>
		<!--在线客服end-->



<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#HOME').removeClass("nav").addClass('on');	
});
</script>
</body>
</html>