<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>翼田产品－<?php echo ($productinfo["sf_name"]); ?></title>
<meta name="keywords" content="石材涂层树脂,辅料,人造石树脂，水晶透明树脂,模压树脂,玻璃钢树脂" />
<meta name="description" content="【翼田】专注石材涂层树脂,辅料,人造石树脂，水晶透明树脂,模压树脂,玻璃钢树脂等优质产品，专家咨询热线 0757-28333806" />
    <link href="/Public/Homes/css/resetcommon.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Homes/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Homes/js/nsw_detailspro.js"></script>
</head>
<body>
    <!--topbar:start-->
    

      
 <div class="top">
        <div class="header">
            <div class="welcome">
                <h2>翼田欢迎您！</h2>
                <div class="bookmark"><a  onclick="return addBookmark(this);" rel="sidebar" title="加入收藏">加入收藏</a>|<a href="" target="_blank" title="网站地图">网站地图</a></div>
            </div>
            <div class="t_head clearfix">
                <h1 class="top_l fl">
                  <div class="logo fl"><a href="/index.php/Home/Index/index" title="翼田"><img src="/Public/Homes/picture/logo.png" title="翼田"/></a></div>
                  <div class="logo_slogan fl"><span><em>不饱和聚脂树脂！</em></span></div>
                </h1>
                
                <div class="top_r fr">
                    <div class="tel fr">全国服务热线<br /><span>0757—28333806<span></div>
                </div>
            </div>
            <ul class="nav">
                <li <?php if(($curr) == "1"): ?>class="cur"<?php endif; ?>><a href="/index.php/Home/Index/index"  title="翼田首页">翼田首页</a></li>
                <li <?php if(($scropsvala["ads_id"]) == "13"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/cutform',array('tid'=>13));?>" title="技术研究院">技术研究院</a></li>
                <li <?php if(($cutform["ad_id"]) == "6"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/cutform',array('id'=>6));?>" title="翼田文化">翼田文化</a></li>
                <li <?php if(($curr) == "2"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/product');?>" title="产品中心">产品中心</a></li>
                <li <?php if(($curr) == "3"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/news');?>" title="新闻中心">新闻中心</a></li>
                <li <?php if(($scropsvala["ads_id"]) == "17"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/cutform',array('tid'=>17));?>" title="案例展示">案例展示</a></li>
                <li <?php if(($scropsvala["ads_id"]) == "14"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/cutform',array('tid'=>14));?>" title="诚聘英才">诚聘英才</a></li>
                <li <?php if(($cutform["ad_id"]) == "59"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/cutform',array('id'=>59));?>" title="在线留言">在线留言</a></li>
                <li <?php if(($cutform["ad_id"]) == "40"): ?>class="cur"<?php endif; ?>><a href="<?php echo U('Index/cutform',array('id'=>40));?>" title="联系翼田">联系翼田</a></li>              
            </ul>
        </div>
	  </div>
	  
	  
	  
	  <div class="content">  
    	<div class="searchbar clearfix">
            <div class="keywords fl">
                <b>热门关键词：</b>
                
                   <?php if(is_array($keyword)): $i = 0; $__LIST__ = $keyword;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$keys): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo U('Index/productdetail',array('key'=>$keys['id']));?>" title="<?php echo ($keys["name"]); ?>">
                        <?php echo ($keys["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                

            </div>
            <div class="search fr">
			<form action="<?php echo U('Index/productdetail');?>" method="get" >
                <input name="keywords" type="text" class="in_text" id="seachkeywords" onclick="this.value=''" onfocus="this.select()"  />
                <input type="submit" class="so" />
			</form>
            </div>
        </div>
    </div>
	
	      
<div class="clear">
</div>


    <!--header:end-->



<link href="/Public/Homes/css/magiczoom.css" rel="stylesheet" type="text/css" />
<link href="/Public/Homes/css/pshow2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Homes/js/msclass.js"></script>
<script type="text/javascript" src="/Public/Homes/js/jqzoom.pack.1.0.1.js"></script>
<script type="text/javascript" src="/Public/Homes/js/mz-packed.js"></script>
<script language="javascript" type="text/javascript">
//产品标题
var OBJ_TITLE = "<?php echo ($productinfo["sf_name"]); ?>";
//视频关键词
var VIDEO_KEY = "";
//权限ID
var AUTHORITY_ID = "";
//图片路径数组
var ARR_IMG_PATH = ["/Uploads/logo/<?php echo ($productinfo["sf_logo"]); ?>"];
var ColumnID=9;
var ProductID=51;
var PColumnID="10";
var ColumnName="五金清洗剂";
var HitLayer="ProductHits";
var Hits=200;
var MARK = "product";
var ARR_AD_MARK = ["product_detail_1"];
var SID = "0001,0010,0009";
var atts="";
</script>

<!--content:start-->
<div class="content">
    <div class="topadcs">
        <a href="<?php echo U('Index/product');?>" title='产品默认广告'><img src='/Public/Homes/picture/20140507204714_88776.jpg' alt='产品默认广告' title='产品默认广告' /></a>
    </div>
    <div class="proright">
        <div class="pro_nav_side fl"><div class="pro_til"><a href="<?php echo U('Index/product');?>" title="翼田产品">翼田产品</a></div><div class='pro_nav'>
		
		<ul class='sub_list1'>
		
<?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cats): $mod = ($i % 2 );++$i;?><li class='both3' sid='0001,001<?php echo ($cats["number"]); ?>'><a href="<?php echo U('Index/product',array('id'=>$cats['gs_id']));?>" title='<?php echo ($cats["gs_name"]); ?>'><?php echo ($cats["gs_name"]); ?></a></li>
<ul class='sub_list2'>
<?php if(is_array($cats['goodslist'])): $i = 0; $__LIST__ = $cats['goodslist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li  sid='0001,001<?php echo ($cats["number"]); ?>,00<?php echo ($cats["number"]); echo ($key); ?>'><a href="<?php echo U('Index/productdetail',array('id'=>$goods['sf_id']));?>" title='<?php echo ($goods["sf_name"]); ?>'><?php echo ($goods["sf_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

</div></div>


<!--<div class="lxnr"><h4 class="t05">热销产品</h4><div class="t05_con">

 <?php if(is_array($recompro)): $i = 0; $__LIST__ = $recompro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recom): $mod = ($i % 2 );++$i;?><dl class="t05_con_dl">
<dt><a href='' target='_blank'><img src='/Uploads/logo/<?php echo ($recom["sf_bgcolor"]); ?>' alt='<?php echo ($recom["sf_name"]); ?>' title='<?php echo ($recom["sf_name"]); ?>' /></a></dt><dd><a href='' target='_blank' title='<?php echo ($recom["sf_name"]); ?>'><?php echo ($recom["sf_name"]); ?></a></dd>
</dl><?php endforeach; endif; else: echo "" ;endif; ?>

<div class="clear"></div>

</div></div>--> 

<div class="lxnr">
    <h4 class="t05">
        联系翼田</h4>
    <div class="lxnrs">
        <div class="lximgs">
            <img src="/Uploads/myad/<?php echo ($leftcontact["ad_img"]); ?>" alt="联系翼田" />
        </div>
       <?php echo ($leftcontact["ad_content"]); ?>
       </div>
</div>


    </div>
    <div class="proleft">
        <div class="pro_curmbs">
            <span>当前位置：</span><a href="<?php echo U('Index/index');?>" title="首页">首页</a> &raquo; <a href="<?php echo U('Index/product');?>" title='产品中心'>产品中心</a> &raquo; <a href="<?php echo U('Index/product',array('id'=>$producttype['gs_id']));?>" title='<?php echo ($producttype["gs_name"]); ?>'><?php echo ($producttype["gs_name"]); ?></a>&raquo;<a title="<?php echo ($productinfo["sf_name"]); ?>"><?php echo ($productinfo["sf_name"]); ?></a>
        </div>
        <div class="righttop">
        </div>
        <div class="pro_main">
            <div id="printableview">
                <div class="pleft">
                    <div class="mainbox">
                        <div class="maincont">
                            <!-- prodetailsinfo -->
                            <div class="prodetailsinfo">
                                <div class="proviewbox">
                                    <div class="probigshow">
                                        <a class="jqzoom" href="/Uploads/logo/<?php echo ($productinfo["sf_logo"]); ?>">
                                            <img src="/Uploads/logo/<?php echo ($productinfo["sf_logo"]); ?>" alt="<?php echo ($productinfo["sf_name"]); ?>" title="<?php echo ($productinfo["sf_name"]); ?>" class="js_goods_image_url" /></a>
                                    </div>
                                    <div class="div_prothumb">
                                        <div class="thumbporbox">
                                            <ul class="ul_prothumb">
                                                <div id="img_list">
                                                </div>
                                            </ul>
                                        </div>
                                        <span class="span_prev span_prevb">prev</span><span class="span_next span_nextb">next</span>
                                    </div>
                                  <!--  <div class="div_prolinks">
                                        <a id="a_enlarge" onclick="viewBigImage(51)" href="#">查看全部大图</a>
                                    </div>-->
                                </div>
                                <!-- prodbaseinfo_a -->
                                <div id="protop" class="prodbaseinfo_a">
                                    <h2 class="h2_prodtitle">
                                        <?php echo ($productinfo["sf_name"]); ?></h2>
                                    <ul class="ul_prodinfo">
                                        <li class="li_normalprice"><span class="span_title">产品分类：</span><b class="b_proprice"><a
                                            href="<?php echo U('Index/product',array('id'=>$producttype['gs_id']));?>" target="_blank" title="<?php echo ($producttype["gs_name"]); ?>"><?php echo ($producttype["gs_name"]); ?></a></b></li>
                                        <li class="li_normalprice"><span class="span_title">产品简介：</span><span class="info"><?php echo ($productinfo["sf_simple"]); ?></span></li>
                                        <li class="li_normalprice"><span class="span_title">订购热线：</span><span class="spanPhone">0757—28333806</span></li>
                                       
                                        <!--<li class="li_weight">
                                            <div class="propar">
                                                <div style="text-align: center">
                                                    <a href="#caigou">
                                                        <img style="border: 0" src="/Public/Homes/picture/buynowsmalls.gif" alt="" /></a></div>
                                            </div>
                                        </li>-->
                                    </ul>
                                </div>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="/Public/Homes/js/pshow2.js"></script>
                </div>
                <div class="clear">
                </div>
              
                <div class="fenlei">
                    <div class="tit">
                        <a  class="cur"><span>产品详情</span></a>
                        <div class="clear">
                        </div>
                    </div>
                </div>
                <div class="proinfo " id="detailvalue0">
                    <div class="nr_list"><ul></ul><div class="clear"></div></div><div id='contentvalue100' class="shouzi2" style='display:;'><h4><font face="Arial, Verdana, sans-serif" color="#00893d">产品说明</font><font face="Arial, Verdana, sans-serif" color="#00893d" style="font-family: Arial, Verdana, sans-serif">&nbsp;|</font><strong style="font-family: Arial, Verdana, sans-serif; color: rgb(0,137,61)">&nbsp;</strong><font face="Arial, Verdana, sans-serif" color="#00893d">product description</font> <strong style="font-family: Arial, Verdana, sans-serif"><font face="Arial, Verdana, sans-serif" color="#00893d">&nbsp; &nbsp;</font></strong><font face="Arial, Verdana, sans-serif" color="#00893d" style="font-weight: normal">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font><strong style="font-family: Arial, Verdana, sans-serif"><span style="color: rgb(0,137,61)">全国服务热线:0757—28333806</span></strong>&nbsp;<font face="Arial, Verdana, sans-serif" style="font-family: Arial, Verdana, sans-serif"><img width="722" height="7" src="/Public/Homes/picture/20140427l4hbx4884r.jpg" alt="" /></font></h4>
<p><strong style="font-family: Arial, Verdana, Helvetica, sans-serif, 宋体; word-spacing: 0px; color: rgb(102,102,102); line-height: 28px">
<table width="720" cellspacing="1" cellpadding="1" border="0">
    <tbody>
        <tr>
            <td>
            
			<?php echo ($productinfo["sf_detail"]); ?>
			
            </td>
            <td style="font-family: Arial, Verdana, sans-serif"><img width="300"  alt="" src="/Uploads/logo/<?php echo ($productinfo["sf_logo"]); ?>" /></td>
        </tr>
    </tbody>
</table>
</strong></p></div><p><img width="720" height="60" alt="" src="/Public/Homes/picture/20140520tzh42x44h8.jpg" /></p>

<p style="font-family: Arial, Verdana, sans-serif">
<table width="730" cellspacing="1" cellpadding="1" border="0">
    <tbody>
        <tr>
            <td>
            <h3>&nbsp;</h3>
            <h3><strong><span style="font-family: 宋体"><span style="color: rgb(0,110,48)">佛山市翼田经贸有限公司</span></span></strong></h3>
            <p><span style="font-family: Arial">FOSHAN YI TIAN TRADING CO., LTD.</span></p>
            <p><span style="font-family: 宋体"><span style="font-size: 14px">地址：佛山市翼田经贸有限公司</span></span></p>
           
            <p><span style="font-family: 宋体"><span style="font-size: 14px">电话：0757—28333806</span></span></p>
            <p><o:p></o:p><span style="font-family: 宋体"><span style="font-size: 14px">传真：0757-28333806</span></span><o:p></o:p></p>           
            <p><span style="font-family: 宋体"><span style="font-size: 14px">网址：</span></span><a href="http://www.yitian.com/"><span style="font-family: 宋体"><span style="font-size: 14px">www.yitian.com</span></span></a></p>
            
            </td>
            <td><img width="325" height="230" alt="" src="/Public/Homes/picture/20140515x86pnr8jzt.jpg" /></td>
        </tr>
    </tbody>
</table>
</p>
                </div>
                
       
            </div>
  
            
        </div>
        <div class="rightbot">
        </div>
    </div>
    <div class="clear">
    </div>
</div>
<!--content:end-->
<!--footer:start-->

     <div class="f_bottom">  
    	<div class="footer">
            
            <div class="bot_nav">
			<a href="/index.php/Home/Index/index"  title="翼田首页">翼田首页</a>|
                <a href="<?php echo U('Index/cutform',array('tid'=>13));?>" title="技术研究院">技术研究院</a>|
                <a href="<?php echo U('Index/cutform',array('id'=>6));?>" title="翼田文化">翼田文化</a>|
                <a href="<?php echo U('Index/product');?>" title="产品中心">产品中心</a>|
                <a href="<?php echo U('Index/news');?>" title="新闻中心">新闻中心</a>|
                <a href="<?php echo U('Index/cutform',array('tid'=>17));?>" title="案例展示">案例展示</a>|
                <a href="<?php echo U('Index/cutform',array('tid'=>14));?>" title="诚聘英才">诚聘英才</a>|
                <a href="<?php echo U('Index/cutform',array('id'=>59));?>" title="在线留言">在线留言</a>|
                <a href="<?php echo U('Index/cutform',array('id'=>40));?>" title="联系翼田">联系翼田</a>|
			</div>
            <dl class="copy_rt clearfix">
            	<dt class="fl"><a href="<?php echo U('Index/index');?>" title="翼田"><img src="/Public/Homes/picture/f_logo.png" title="" alt="" /></a><p>全国服务热线：<br /><b> 0757-28333806</b></p></dt>
                <dd class="fr">
                	<?php echo ($dibu["ad_content"]); ?>
        
                </dd>
            </dl>
           
        </div>
	</div>
 <div id="roll" style=""><div title="回到顶部" id="roll_top"></div></div>          

<script src="/Public/Homes/js/rollup.min.js" type="text/javascript"></script>

<script src="/Public/Homes/js/jquery.lazyload.js" type="text/javascript"></script>


<!--<div id="doyoo_panel" class="doyoo_pan_icon" style="position: fixed; top: 100px; right: 5px; width: 128px; height: 470px;">
<div class="doyoo_pan_icon_inner" id="looyu_dom_0" style="width: 128px; height:470px; float: right; background-image: url(&quot;http://img.talk99.cn/zyl/tianyuehuangong99.jpg&quot;);">
<a href="javascript:;" id="looyu_dom_1" style="display:block;width:100%;height:100%;">&nbsp;</a>
<a href="javascript:;" class="talk99_region" style="left:18px;top:217px;width:90px;height:21px;background-image: url(http://static.soperson.com/131221/../default/images/s.gif)" onclick="window.open('http://wpa.qq.com/msgrd?V=1&amp;uin=2805282770');return false;">&nbsp;</a>
<a href="javascript:;" class="talk99_region" style="left:18px;top:249px;width:90px;height:22px;background-image: url(http://static.soperson.com/131221/../default/images/s.gif)" onclick="window.open('http://wpa.qq.com/msgrd?V=1&amp;uin=2805282770');return false;">&nbsp;</a>
<a href="javascript:;" class="talk99_region" style="left:18px;top:277px;width:90px;height:22px;background-image: url(http://static.soperson.com/131221/../default/images/s.gif)" onclick="window.open('http://wpa.qq.com/msgrd?V=1&amp;uin=2805282770');return false;">&nbsp;</a>
<div class="doyoo_pan_close">
</div>
</div>
</div>-->
<!--footer:end-->



<script type="text/javascript">    productLoad();
    $(".jqzoom").jqzoom({ title: false, zoomWidth: 340, zoomHeight: 340, xOffset: 4 });
</script>

</body> </html>