<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>翼田-新闻中心-<?php echo ($newsdet["InformationTitle"]); ?></title>
    <meta name="keywords" content="关于翼田|翼田石材涂层树脂,辅料,人造石树脂，水晶透明树脂,模压树脂,玻璃钢树脂" />
    <meta name="description" content="【翼田】专注石材涂层树脂,辅料,人造石树脂，水晶透明树脂,模压树脂,玻璃钢树脂等优质产品.全国服务热线：0757—28333806" />
    <link href="/Public/Homes/css/resetcommon.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Homes/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Homes/js/nsw_details.js"></script>
	
	 <script type="text/javascript" src="/Public/Home/js/jquery-1.4.3.min.js"></script>
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


<style type="text/css">
#cntrBody img{ margin:0 auto; display:block;}
</style>

    <!--header:end-->

<!--content:start-->
<div class="content">
    <div class="topadcs">
        <a href="<?php echo U('Index/product');?>" title='资讯默认广告'><img src='/Public/Homes/picture/20140507204626_28400.jpg' alt='资讯默认广告' title='资讯默认广告' /></a>
    </div>
    <div class="plc2">
        当前位置：<a href="<?php echo U('Index/index');?>" title="首页">首页</a> 
		&raquo; <a href="<?php echo U('Index/news');?>" title="新闻中心">新闻中心</a> 
		&raquo; <a href="<?php echo U('Index/news',array('id'=>$type['InformationTypeID']));?>" title="<?php echo ($type["InformationTypeName"]); ?>"><?php echo ($type["InformationTypeName"]); ?></a> 
		&raquo; <a href="<?php echo U('Index/newsdetail',array('id'=>$newsdet['InformationID']));?>" title="<?php echo ($newsdet["InformationTitle"]); ?>"><?php echo ($newsdet["InformationTitle"]); ?></a></div>
			
    <div class="left2">
        <div class="left2top">
        </div>
        <div class="left2_main">
            <div class="n_info_con" id="printableview">
                <h2>
                   <?php echo ($newsdet["InformationTitle"]); ?></h2>
                <div class="info_con_tit">
                    <div class="info_con_tit">
                        <div class="n_tit">
                            <!--<div class="fontSize">
                                字号：<span class="small" title="切换到小字体" id="fontSmall">T</span>|<span class="big" title="切换到大字体"
                                    id="fontBig">T</span></div>-->
                            <div class="news_info">
                                <span>文章出处：<?php echo ($newsdet["InformationAuthor"]); ?></span><span>发表时间：<?php echo ($newsdet["InformationUpdate"]); ?></span></div>
                        </div>
                    </div>
                </div>
                <div id="cntrBody" class="concss newsinfo">
				
				
                
						 <?php echo ($newsdet["InformationContent"]); ?>



                </div>
             
                <!--<div class="gduo">
                    <span>下一篇：<a  href="" title="已经是最后一篇了">已经是最后一篇了</a></span>上一篇：<a 
                        href="" title="？</a></div>-->
            </div>
            
            
            <div class="n_info_tjcp" style="margin-top:20px;">
                <h4 class="t04">
                    热销产品</h4>
					
					<?php if(is_array($recompro)): $i = 0; $__LIST__ = $recompro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recom): $mod = ($i % 2 );++$i;?><dl><dt><a title='<?php echo ($recom["sf_name"]); ?>' target="_blank" href="<?php echo U('Index/productdetail',array('id'=>$recom['sf_id']));?>"><img title='<?php echo ($recom["sf_name"]); ?>' alt='<?php echo ($recom["sf_name"]); ?>' src='/Uploads/logo/<?php echo ($recom["sf_bgcolor"]); ?>'></a></dt><dd><a title='<?php echo ($recom["sf_name"]); ?>' target="_blank" href="<?php echo U('Index/productdetail',array('id'=>$recom['sf_id']));?>"><?php echo ($recom["sf_name"]); ?></a></dd></dl><?php endforeach; endif; else: echo "" ;endif; ?>
					
               
				
            </div>
        </div>
        <div class="left2bot">
        </div>
    </div>
    
    <div class="clear">
    </div>
</div>

<!--<script>
var initTop = 0;//1初始值

$(document).scroll(function(){
    var top = $(document).scrollTop();
	
if(top > initTop){
  alert("下"); 
 } else {
  alert("上"); 
 }
 initTop = top;
	
	if(top>30){
	$('.dengji').css('position','fixed');
	$('.dengji').css('top','0');
	}
	if(top<30){
	$('.dengji').css('position','');
	}
	
	
});


</script>-->


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


</body> </html>