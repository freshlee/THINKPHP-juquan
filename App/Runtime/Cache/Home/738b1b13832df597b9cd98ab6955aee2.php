<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品中心-世锐电器</title>
<meta name="keywords" content="世锐电器,世锐,电器" />
<meta name="description" content="世锐电器实业有限公司" />
<link href="/Public/Homes/css/style.css" type="text/css" rel="stylesheet" />
<link href="/Public/Homes/css/pagination.css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="/Public/Homes/js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/Public/Homes/js/gundo.js"></script>
</head>
<body>
<style type="text/css">
.srproduct{ width:980px; margin:0 auto;}
.srproduct img{ width:100%;}
.srproductit{ width:980px; margin-top:5px; border-bottom:1px solid #aaa; height:30px; margin:0 auto; }
.srpsub{ width:200px; height:30px; line-height:30px; font-size:16px; color:#222;; font-weight:bolder; padding-left:5px;}

.guanjianci{ width:100%; height:40px; line-height:40px;}
.guanjianci span{ color:#111; font-size:16px; font-weight:bolder;}
.guanjianci a{color:#555; font-size:14px; }
#name{ width:147px;}
#model{ width:147px;}
</style>
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
<script src="/Public/Homes/js/piproducts.js"></script>



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
<!--<div class="srproduct"><img src="/Uploads/myad/<?php echo ($advert1["ad_img"]); ?>" border="0" /></div>-->
<div class="srproductit">
<div class="srpsub">产品检索</div>
</div>

<table width="980" border="0" cellspacing="0" cellpadding="0" style="background:url(/Uploads/myad/<?php echo ($advert2["ad_img"]); ?>) no-repeat top center; margin:0 auto;" >
<tr>

<td width="510"  height="25" align="right" colspan="2">
<div class="guanjianci">
<span>关键词：</span>
<?php if(is_array($keyword)): $i = 0; $__LIST__ = $keyword;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$keyword): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/product',array('kid'=>$keyword['id']));?>"><?php echo ($keyword["name"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?> 		     
</div>	  
		     		  </td>
					<!-- <td width="470"></td>-->
</tr>
  <tr>
    
    <td width="980" align="right"><div id="headersearch">
<div class="twocols">


<div class="leftcol">
<p class="whichsearch"><b>按产品名称搜</b></p>
<form method="get" action="<?php echo U('Index/product');?>" class="search" name="partno">
<label for="partno">产品名称:</label>
<input type="text" id="name" name="name" value="<?php echo ($name); ?>">
<input type="submit" value="搜索">
</form>
</div>

<div class="leftcol">
<p class="whichsearch"><b>按产品型号搜</b></p>
<form method="get" action="<?php echo U('Index/product');?>" class="search" name="partno">
<label for="partno">产品型号:</label>
<input type="text" id="model" name="model"  value="<?php echo ($model); ?>">
<input type="submit" value="搜索">
</form>
</div>

<div class="rightcol">
<p class="whichsearch"><b>按系列搜</b></p>
<form method="get" action="<?php echo U('Index/product');?>" class="search" id="searchbyclass" name="pclasssearch">
<label for="pclass"> 所有系列:</label>
<select name="sid" id="sid">
	<option value="">请选择</option>
<?php if(is_array($serieslist)): $i = 0; $__LIST__ = $serieslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ser): $mod = ($i % 2 );++$i;?><option value="<?php echo ($ser["id"]); ?>" <?php if(($ser["id"]) == "{$sid}"): ?>selected="selected"<?php endif; ?>><?php echo ($ser["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<input type="submit" class="submit" value="搜索">
</form>
</div>

<div class="rightcol">
<p class="whichsearch"><b>按类型搜</b></p>
<form method="get" action="<?php echo U('Index/product');?>" class="search" id="searchbyclass" name="pclasssearch">
<label for="pclass">所有类型:</label>
<select name="tid" id="tid">
	<option value="">请选择</option>
<?php if(is_array($typelist)): $i = 0; $__LIST__ = $typelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$typ): $mod = ($i % 2 );++$i;?><option value="<?php echo ($typ["id"]); ?>" <?php if(($typ["id"]) == "{$tid}"): ?>selected="selected"<?php endif; ?>><?php echo ($typ["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<input type="submit" class="submit" value="搜索">
</form>
</div>


</div>
</div></td>

<td width="470" valign="top"><p></p>
<!--<p><span style="font-size:14px;">使用高品质铝</span></p>
<p><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp;17 年反射罩制造经</span></p>
<p><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 来自德国的技术和管理</span></p>
<p><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;亚欧专注于技术，品质</span></p>
<p></p>-->
</td>
  </tr>
</table>
<?php if(($knamev) != ""): ?><div style="width:100%; height: 16px; padding-top:15px; font-size:16px; color:#000; text-align:center;">
搜索：
<?php echo ($knamev); ?>
</div><?php endif; ?>
<div class="srproductit" style="margin-top:15px;">
<div class="srpsub">产品列表</div>
</div>

<table width="980" border="0" cellspacing="0" cellpadding="0" style=" margin:0 auto;">
  <tr>
    <td height="5"></td>
  </tr>
  <!--<tr>
    <td><img src="/Public/Homes/picture/product.jpg" border="0" /></td>
  </tr>-->
  <tr>
    <td>
	<table width="100%" border="0" cellpadding="7" cellspacing="0" bgcolor="#CCCCCC">
          
          <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF">


<table class="productlist">
      <tbody>
	  
	  
	  
	<?php if(is_array($goods_list)): $i = 0; $__LIST__ = $goods_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><tr style="padding-top:10px;">
          <td class="pic"  style="padding-top:10px;">
		  <a href="javascript:void(-1)" onClick="popimg(this)" class="mag">
		  <img src="/Uploads/goods/<?php echo ($goods["img"]); ?>" width="369" height="369" border="0" style="display:none" class="over" alt=""> 
		  <img class="mag" src="/Public/Homes/picture/lupe.png" alt="">
		  <img src="/Uploads/goods/<?php echo ($goods["simg"]); ?>" width="120" height="120" border="0" alt="">
		  </a>
		  </td>
          <td valign="top"  style="padding:10px 0 0 0;" ><table width="100%" >
 <tr> <td  class="serclass" colspan="5"><span class="series">系列:<?php echo ($goods["sname"]); ?></span> <span class="class"><?php echo ($goods["name"]); ?></span> <span class="subclass"></span> </td></tr>
 
  <tr>
          <td colspan="5" class="dimensions">
		  <?php if(($goods["dspec"]) != ""): ?>灯珠规格:<?php echo ($goods["dspec"]); ?>&nbsp;&nbsp;<?php endif; ?> 
		  <?php if(($goods["colour"]) != ""): ?>色温:<?php echo ($goods["colour"]); ?>&nbsp;&nbsp;<?php endif; ?> 
		  <?php if(($goods["light"]) != ""): ?>光通量:<?php echo ($goods["light"]); ?>&nbsp;&nbsp;<?php endif; ?>
		  <?php if(($goods["ident"]) != ""): ?>认证:<?php echo ($goods["ident"]); ?>&nbsp;&nbsp;<?php endif; ?></td>
        </tr>
        <tr class="spacer">
          <td colspan="5" style="padding:0px;"></td>
        </tr>
        <tr class="header cells">
          <th class="partno" width="101">类型</th>
          <th class="ledtype" width="112">型号</th>
         
          <th class="treatment" width="123">尺寸</th>
		   <th class="quality" width="407">型号/规格</th>
          <th class="notice" width="114">备注</th>
        </tr>
		
        <tr class="cells odd">
          <td class="partno"><?php echo ($goods["tname"]); ?></td>
          <td class="ledtype"><?php echo ($goods["model"]); ?></td>
         
          <td class="treatment"><?php echo ($goods["size"]); ?></td>
		   <td class="quality"><?php echo ($goods["spec"]); ?></td>
          <td class="notice"><?php echo ($goods["other"]); ?></td>
        </tr>
    
  
		

</table>
 </td>
        </tr>
		<tr><td style="width:100%; height:10px;" colspan="2"></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>        
      
        
      
</tbody>
</table>

</td>
          </tr>
        </table>
		<table width=100% border=0 cellpadding=0 cellspacing=0 >
<TR >
<TD align=left  class=hui>
<div class="pagination" style="text-align:center"><?php echo ($page); ?></div>
</TD>
</TR>
</table>

	</td>
  </tr>
</table>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#PRODUCT').removeClass("nav").addClass('on');	
});
</script>
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




</body>
</html>