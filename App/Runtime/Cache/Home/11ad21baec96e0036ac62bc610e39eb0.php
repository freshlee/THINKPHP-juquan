<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言-世锐电器</title>
<meta name="keywords" content="世锐电器,世锐,电器" />
<meta name="description" content="世锐电器实业有限公司" />
<link href="/Public/Homes/css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" language="javascript" src="/Public/Homes/js/jquery.min.js" charset="utf-8"></script>
<style type="text/css">
<!--
.STYLE1 {color: #000000}
-->
.metable{ border-color:#ddd; background:#aaa;}
.metable td{ font-size:16px; height:25px; line-height:25px; border:0; background:#fff; padding:5px;}
.metable td input{ height:25px; line-height:25px;}
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


<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" style=" margin:0 auto;">
  <tr>
    <td height="261" align="center"><img src="/Uploads/myad/<?php echo ($cutform["ad_img"]); ?>" style=" width:100%;" /></td>
  </tr>
  <tr>
    <td style="padding:5px; line-height:150%; ">
	
	
	
	<table cellspacing="1" cellpadding="1" border="0" width="100%" class="metable">
          <form name="repform" id="repform" onsubmit="return checkboxs()" action="<?php echo U('Index/domessage');?>" method="post">
          <tbody>
	
          <tr>
<td align="right">姓名：</td>
<td><input name="name" id="name" size="60" value="" > </td>
</tr>
<tr><td align="right">公司名称：</td>
<td><input name="company" id="company" size="60" value="" > </td>
</tr>
<tr>
<td align="right">电话：</td>
<td><input name="tel" id="tel" size="60" value="" > </td>
</tr>
<tr>
<td align="right">邮箱：</td>
<td><input name="email" id="email" size="60" value=""> </td>
</tr>
<tr>
<td align="right">地址：</td>
<td><input name="address" id="address" size="60" value="" > </td>
</tr>
<tr>
<td align="right">详细内容：</td>
<td><textarea name="content" id="content" cols="43" rows="6" style="padding-left:10px; line-height:30px;"></textarea> </td>
</tr>
          <tr>
            <td>&nbsp;						
			 
			</td>
            <td>
            <input name="submit" value=" 提 交 " type="submit" style="width:100px; height:30px; line-height:30px;">
			<div style="clear:both;"></div></td>
          </tr>
          
        </tbody>
		</form>
		</table>
		
		
	
	</td>
  </tr>
</table>


<?php if(($act) == "1"): if(($tiy) == "1"): ?><script>
alert("留言成功");
</script><?php endif; ?>
<?php if(($tiy) == "2"): ?><script>
alert("留言不成功");
</script><?php endif; endif; ?>

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

<script>
function checkboxs(){
	var name = document.repform.name;
	var tel = document.repform.tel;

	var msg="";
	if(name.value == ""){
		msg+='请填写真实姓名';
	}
	if(tel.value == ""){
		msg+='\n请填写电话或手机号码';
	}
	if(msg){
		alert(msg);
		return false;
	}else{
		return true;
	}
}
</script>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#MESSAGE').removeClass("nav").addClass('on');	
});
</script>
</body>
</html>