<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公司简介-世锐电器</title>
<meta name="keywords" content="世锐电器,世锐,电器" />
<meta name="description" content="世锐电器实业有限公司" />
<link href="/Public/Homes/css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" language="javascript" src="/Public/Homes/js/jquery.min.js" charset="utf-8"></script>
<style type="text/css">
<!--
.STYLE1 {color: #000000}
-->
.zizhi{ padding:0;}
.zizhi li{ list-style:none; float:left; margin:10px;}
.zizhi img{ width:221px;}
</style>
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

<?php if(($cutform["ad_id"]) == "1"): ?><div class="area">
	<div id="js" class="js">
		<div class="box01">
		<?php if(is_array($bgimage)): $i = 0; $__LIST__ = $bgimage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bg): $mod = ($i % 2 );++$i;?><img onclick="location.href='<?php echo ($bg["ad_link"]); ?>'" alt="1" src="/Uploads/myad/<?php echo ($bg["ad_img"]); ?>" <?php if(($key) != "0"): ?>style="display: none;"<?php endif; ?>><?php endforeach; endif; else: echo "" ;endif; ?>			 	  
		</div>	 
	</div>    
</div><?php endif; ?>

<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" style=" margin:0 auto;">
<?php if(($cutform["ad_id"]) != "1"): ?><tr>
    <td height="261" align="center"><img src="/Uploads/myad/<?php echo ($cutform["ad_img"]); ?>" style=" width:100%;" /></td>
  </tr><?php endif; ?>
  <tr>
    <td style="padding:5px; line-height:150%;"><?php echo ($cutform["ad_content"]); ?></td>
  </tr>
  <?php if(($act) != ""): ?><tr>
    <td style="padding:5px; line-height:150%;">	
	<ul class="zizhi">
		<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cont): $mod = ($i % 2 );++$i;?><li><img src="/Uploads/myad/<?php echo ($cont["ad_img"]); ?>"  /></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>	
	</td>
  </tr><?php endif; ?>
</table>


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
    jQuery('#COMPANY<?php echo ($cutform["ad_id"]); ?>').removeClass("nav").addClass('on');	
});
</script>
</body>
</html>