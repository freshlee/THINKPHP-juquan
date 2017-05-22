<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学员风采_美迪电商学院</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script language="javascript" type="text/javascript" src="/Public/Home/js/conn.js"></script>
<link type="text/css" rel="stylesheet" href="/Public/Home/css/style_5.css" />
<link type="text/css" rel="stylesheet" href="/Public/Home/css/pages_5.css" />
<script type="text/javascript" src="/Public/Home/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/nva.js"></script>
<script type="text/javascript" language="javascript">
$(function(){
	$.post("/getqq.php",function(txt){
	if(txt!=""){
	$("ul[attr='dqq'] li a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
	$("p[attr='aqq'] a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
	} 
	})
})

$(function(){
	$.post("/kecun.php",function(txt){
	if(txt!=""){
	$("ul[attr='kecun'] li a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
    $("p[attr='kecun'] a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
	} 
	})
})

$(function(){
	$.post("/yantang.php",function(txt){
	if(txt!=""){
	$("ul[attr='yantang'] li a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
    $("p[attr='yantang'] a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
	} 
	})
})

$(function(){
	$.post("/chebei.php",function(txt){
	if(txt!=""){
	$("ul[attr='chebei'] li a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
    $("p[attr='chebei'] a").attr("href","http://wpa.qq.com/msgrd?v=3&uin="+txt+"&site=www.mede.com.cn&menu=yes");
	} 
	})
})
</script>

</head>



<body>

<script language="javascript" type="text/javascript" src="/Public/Home/js/notcopy.js"></script><!-- 屏蔽右键和复制 -->
<div id="topbar">
	<div class="x-container">
    	<div class="x-left">你好，欢迎来到广州美迪电商学院</div>
        <div class="x-right"><a href="http://www.mede.com.cn">网站首页</a> | <a href="http://www.mede.com.cn/course/kaidian/">培训课程</a> | <a href="http://www.mede.com.cn/share/">干货分享</a> | <a style="color:#C03" href="http://www.mede.com.cn/job/">申请讲师</a> | <a href="http://www.mede.com.cn/sitemap.html">网站地图</a> | <a href=http://www.mede.com.cn title="美迪教育" rel="sidebar" onclick="javascript:window.external.AddFavorite('http://www.mede.com.cn', '美迪教育');return false;">加入收藏</a>   </div>
    </div>
</div>

<div class="Head" id="head">
	<div class="Head_box">
	<h2 class="logo"><a href="http://www.mede.com.cn"><img src="/Public/Home/picture/logo.png" alt="广州美迪电商学院-专注网店卖家培训" /></a></h2>
	<div class="Head_right">
		<div class="head_tel"></div>
	</div>
	</div>
	
</div>

<div class="head-v3">
	<div class="navigation-up">
		<div class="navigation-inner">
			<div class="navigation-v3">
				<ul>
					<li class="" _t_nav="home">
							<a href="http://www.font.com./">美迪首页</a>
					</li>
					<li class="" _t_nav="about">
							<a href="/about/">走进美迪</a>
					</li>
					<li class="" _t_nav="teacher">
							<a href="/teacher/">师资团队</a>
					</li>
                    <li class="" _t_nav="course">
							<a href="/course/kaidian/">培训课程</a>
					</li>
                     <li class="" _t_nav="share">
							<a href="/share/">干货分享</a>
					</li>
                     <li class="" _t_nav="environment">
							<a href="/environment/">教学环境</a>
					</li>
                    
                    <li class="" _t_nav="feedback">
							<a href="/style/">学员风采</a>
					</li>
                    
                     <li class="" _t_nav="EnrollProcess">
							<a href="/EnrollProcess/">报名流程</a>
					</li>
                    
                    <li class="" _t_nav="contact">
							<a href="/contact/">联系我们</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="navigation-down">
		<div id="about" class="nav-down-menu menu-1" style="display: none; " _t_nav="about" >
			<div class="navigation-down-inner" >
				<dl style="margin-left: 100px;">
					<dt>学校环境</dt>
					<dd>
						<a href="http://www.mede.com.cn/environment/">教学环境</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/environment/">食宿环境</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/environment/">周边环境</a>
					</dd>
				</dl>
				<dl>
					<dt>学校理念</dt>
					<dd>
						<a href="http://www.mede.com.cn/about/">品牌文化</a>
					</dd>
					<dd>
						<a  href="http://www.mede.com.cn/about/brand/">品牌承诺</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/about/">经营理念</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/about/">美迪故事</a>
					</dd>
				</dl>
				
					<dl>
					<dt>教学体系</dt>
					<dd>
						<a href="http://www.taodashi.cn/"  rel="nofollow" target="_blank" >售后服务中心</a>
					</dd>
					<dd>
						<a href="http://www.taocaizi.com/" rel="nofollow" target="_blank" >就业服务中心</a>
					</dd>
                    <dd>
						<a href="http://www.soohuo.com/" rel="nofollow" target="_blank" >货源服务中心</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/books/" target="_blank" >自编书籍教材</a>
					</dd>

				</dl>
                     <dl>
					<dt>加入美迪</dt>
					<dd>
						<a href="/about/guide/">报读指南</a>
					</dd>
					<dd>
						<a href="/about/teamwork/">成为合作伙伴</a>
					</dd>
					<dd>
						<a href="/job/">成为美迪讲师</a>
					</dd>
				</dl>
<div class="about_img"><img src="/Public/Home/picture/qiantai.jpg"></div>
			</div>
		</div>
		<div id="course" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="course">
			<div class="navigation-down-inner">
				<dl style="margin-left: 110px;">
					<dt>淘宝天猫课程</dt>
                    <dd>
						
					</dd>
					<dd>
						<a href="/course/kaidian/">淘宝开店创业班</a>
					</dd>
					<dd>
						<a href="/course/meigong/">淘宝美工店长班</a>
					</dd>
					<dd>
						<a href="/course/yunying/">淘宝运营推广班</a>
					</dd>
                    <dd>
						<a href="/course/meigong2/">淘宝高级美工班</a>
					</dd>
					<dd>
						<a href="/course/wuxian/">淘宝推广实战班</a>
					</dd>
					<dd>
						<a href="/course/tianmao/">天猫运营总裁班</a>
					</dd>
                    <dd>
						<a href="/course/alibaba/">阿里巴巴总裁班</a>
					</dd>
                    <dd>
						<a href="/course/gjdz/">高级店长培训班</a>
					</dd>
				</dl>
				<dl>
					<dt>微商电商课程</dt>
					<dd>
						<a href="/course/wxkd/">微信开店创业班</a>
					</dd>
					<dd>
						<a href="/course/weixin/">微信营销总裁班</a>
					</dd>
					<dd>
						<a href="/course/wenan/">微信营销推广班</a>
					</dd>
                    <dd>
						<a href="/course/wxjy/">新媒体运营就业</a>
					</dd>
				</dl>
				
					<dl>
					<dt>京东电商课程</dt>
					<dd>
						<a href="/course/jd/">京东开店创业班</a>
					</dd>
					<dd>
						<a href="/course/jdmg/">京东美工店长班</a>
					</dd>
                    <dd>
						<a href="/course/jdyy/">京东运营推广班</a>
					</dd>
                    <dd>
						<a href="/course/jdkc/">京东快车高级班</a>
					</dd>
				</dl>
                    <dl>
					<dt>跨境电商课程</dt>
					<dd>
						<a href="/course/sumaitong/">速卖通总裁班</a>
					</dd>
					<dd>
						<a href="/course/ymx/">亚马逊总裁班</a>
					</dd>
					<dd>
						<a href="/course/wish/">eBay总裁班</a>
					</dd>
					<dd>
						<a href="/course/dhgate/">wish敦煌总裁班</a>
					</dd>
				</dl>
                 <dl>
					<dt>摄影培训课程</dt>
					<dd>
						<a href="/course/ppsy/">淘宝静物摄影班</a>
					</dd>
					<dd>
						<a href="/course/mote/">淘宝模特摄影班</a>
					</dd>
                    <dd>
						<a href="/course/cpxt/">高级产品修图班</a>
					</dd>
				</dl>
                <dl>
					<dt>就业培训课程</dt>
					<dd>
						<a href="/course/kefu/">金牌客服就业班</a>
					</dd>
					<dd>
						<a href="/course/meigong3/">高级美工就业班</a>
					</dd>
					<dd>
						<a href="/course/yunying2/">运营推广就业班</a>
					</dd>
                    <dd>
						<a href="/course/wxjy/">新媒体运营就业</a>
					</dd>
				</dl>
			</div>
		</div>
        
        
        
        		<div id="contact" class="nav-down-menu menu-1" style="display: none; " _t_nav="contact" >
			<div class="navigation-down-inner" >
            <div class="about_img" style="margin-left:100px;"><img src="/Public/Home/picture/kefu_b.jpg"></div>
				<dl style="margin-left:20px;">
                               
					<dt style="color:#252525; border-bottom:1px solid #999">全国统一招生热线：400-800-4439</dt>

                    <dd class="c_qq"><li><a id="lx_syl_c_qq" href="http://wpa.qq.com/msgrd?v=3&uin=575511450&site=qq&menu=yes" target="_blank"><img border="0" src="/Public/Home/picture/c_q.png" alt="点击这里给我发消息" title="点击这里给我发消息"></a></li>
				<li><a id="lx_pmg_qq" href="http://wpa.qq.com/msgrd?v=3&uin=575511450&site=qq&menu=yes" target="_blank"><img border="0" src="/Public/Home/picture/c_q.png" alt="点击这里给我发消息" title="点击这里给我发消息"></a></li>
				<li><a id="lx_ptg_qq" href="http://wpa.qq.com/msgrd?v=3&uin=575511450&site=qq&menu=yes" target="_blank"><img border="0" src="/Public/Home/picture/c_q.png" alt="点击这里给我发消息" title="点击这里给我发消息"></a></li></dd>
     <dd style="color:#252525; font-size:14px; line-height:25px;">白云校区：020-62990848  13928892254</dd>
     <dd style="color:#252525; font-size:14px; line-height:25px;">海珠校区：020-84121425  13928892512</dd>
	 <dd style="color:#252525; font-size:14px; line-height:25px;">天河校区：020-62292684  13928897742</dd>
				</dl>
			<div class="lx_b">
						<a  href="http://www.mede.com.cn/contact/">上课地点</a>
					</div>
                    <div class="lx_b">
						<a href="http://www.mede.com.cn/contact/">合作联系</a>
					</div>
                    <div class="lx_b">
						<a href="http://www.mede.com.cn/contact/">招生联系</a>
					</div>
                    <div class="lx_b">
						<a href="http://www.mede.com.cn/contact/">媒体联系</a>
					</div>
                    </dl>
			</div>
            
		</div>
	</div>
</div>
<div class="clear"></div>


<div class="feedback_rector"></div>

<div class="content-body">
    <div class="content-mod">
        <div class="content-list" id="navlist">
            <div id="cn1" class="content-box current1" data-key="cn1" data-url="help-content-1">
                <div class="cn-inner">
                    <h3>
                        2016年学员毕业留念</h3>
                </div>
            </div>
            <div id="cn2-1" class="content-box " data-key="cn2" data-url="help-content-2">
                <div class="cn-inner">
                    <h3>
                        2015年学员毕业留念</h3>
                </div>
            </div>
            <div id="cn3-1" class="content-box" data-key="cn3" data-url="help-content-3">
                <div class="cn-inner">
                    <h3>
                        2014年学员毕业留念</h3>
                </div>
            </div>
        </div>
        <!----2015开始------>
        <div class="contact-cont c1" id="help-content-1">
            <div class="cc-mods2">
                <ul class="fengcai_ul" id="ul">
                <a href="/style/2016/752.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-1f22212150u64.jpg" alt="2016年12月份学员毕业留念"/>
                        <p>2016年12月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/740.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-161219112s70-l.jpg" alt="2016年11月份学员毕业留念"/>
                        <p>2016年11月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/735.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-16112q45p00-l.jpg" alt="2016年10月份学员毕业留念"/>
                        <p>2016年10月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/734.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-16112q44s90-l.jpg" alt="2016年9月份学员毕业留念"/>
                        <p>2016年9月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/730.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-16092g019580-l.jpg" alt="2016年8月份学员毕业留念"/>
                        <p>2016年8月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/704.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-160p41f3290-l.jpg" alt="2016年7月份学员毕业留念"/>
                        <p>2016年7月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/696.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-160gq10s80-l.jpg" alt="2016年6月份学员毕业留念"/>
                        <p>2016年6月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/677.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-1606031056480-l.jpg" alt="2016年5月份学员毕业留念"/>
                        <p>2016年5月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/676.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-160603101i00-l.jpg" alt="2016年4月份学员毕业留念"/>
                        <p>2016年4月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/675.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-16042g00p3m8.jpg" alt="2016年3月份学员毕业留念"/>
                        <p>2016年3月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/674.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-16031g032270-l.jpg" alt="2016年2月份学员毕业留念"/>
                        <p>2016年2月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2016/673.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-160221015z00-l.jpg" alt="2016年1月份学员毕业留念"/>
                        <p>2016年1月份学员毕业留念</p>
                    </div>
                </li>
                </a>

                </ul>
            </div>
        </div>
        <!----2015 end---->
        
        <!---2014开始----->
        <div class="contact-cont c1" style="display: none" id="help-content-2">
            <div class="cc-mods2">
                <ul class="fengcai_ul" id="ul">
                <a href="/style/2015/634.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gi102-lp.jpg" alt="2015年5月份学员毕业留念"/>
                        <p>2015年5月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/635.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gi138-lp.jpg" alt="2015年6月份学员毕业留念"/>
                        <p>2015年6月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/636.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gi216-lp.jpg" alt="2015年7月份学员毕业留念"/>
                        <p>2015年7月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/637.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gi454-lp.jpg" alt="2015年8月份学员毕业留念"/>
                        <p>2015年8月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/667.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-1512110123170-l.jpg" alt="2015年11月份学员毕业留念"/>
                        <p>2015年11月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/652.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-151105112146-lp.jpg" alt="2015年10月份学员毕业留念"/>
                        <p>2015年10月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/638.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gi558-lp.jpg" alt="2015年9月份学员毕业留念"/>
                        <p>2015年9月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/672.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-1601131pj60-l.jpg" alt="2015年12月份学员毕业留念"/>
                        <p>2015年12月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/633.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gi003-lp.jpg" alt="2015年4月份学员毕业留念"/>
                        <p>2015年4月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/632.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102ghz8-lp.jpg" alt="2015年3月份学员毕业留念"/>
                        <p>2015年3月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/631.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102gh152-lp.jpg" alt="2015年2月份学员毕业留念"/>
                        <p>2015年2月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2015/630.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102g22425-lp.jpg" alt="2015年1月份学员毕业留念"/>
                        <p>2015年1月份学员毕业留念</p>
                    </div>
                </li>
                </a>

                </ul>
            </div>
        </div>
        <!----2014 end---->
        
        <!---2013开始----->
        <div class="contact-cont c1" style="display: none" id="help-content-3">
            <div class="cc-mods2">
                <ul class="fengcai_ul" id="ul">
                <a href="/style/2014/650.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p94347-lp.jpg" alt="2014年12月份学员毕业留念"/>
                        <p>2014年12月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/649.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p94258-lp.jpg" alt="2014年11月份学员毕业留念"/>
                        <p>2014年11月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/648.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p94216-lp.jpg" alt="2014年10月份学员毕业留念"/>
                        <p>2014年10月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/647.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p94110-lp.jpg" alt="2014年9月份学员毕业留念"/>
                        <p>2014年9月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/646.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p94002-lp.jpg" alt="2014年8月份学员毕业留念"/>
                        <p>2014年8月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/645.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93u2-lp.jpg" alt="2014年7月份学员毕业留念"/>
                        <p>2014年7月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/644.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93q3-lp.jpg" alt="2014年6月份学员毕业留念"/>
                        <p>2014年6月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/643.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93i3-lp.jpg" alt="2014年5月份学员毕业留念"/>
                        <p>2014年5月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/642.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93642-lp.jpg" alt="2014年4月份学员毕业留念"/>
                        <p>2014年4月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/641.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93605-lp.jpg" alt="2014年3月份学员毕业留念"/>
                        <p>2014年3月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/640.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93538-lp.jpg" alt="2014年2月份学员毕业留念"/>
                        <p>2014年2月份学员毕业留念</p>
                    </div>
                </li>
                </a>
<a href="/style/2014/639.html">
                <li>
                    <div class="fengcai_img">
                        <img src="/Public/Home/picture/1-15102p93030-lp.jpg" alt="2014年1月份学员毕业留念"/>
                        <p>2014年1月份学员毕业留念</p>
                    </div>
                </li>
                </a>

                </ul>
            </div>
        </div>
        <!----2013 end---->
    </div>
</div>

<script type="text/javascript">
    $('#ul li:nth-child(3n)').css('margin-right', '0');
	$('#ul li:nth-child(6n)').css('margin-right', '0');
	$('#ul li:nth-child(9n)').css('margin-right', '0');
	$('#ul li:nth-child(12n)').css('margin-right', '0');
</script>
<!--<div class="feedback_box">
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-1f22212150u64.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-161219112s70-l.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-16112q45p00-l.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-16112q44s90-l.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-16092g019580-l.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-160p41f3290-l.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-160gq10s80-l.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-1606031056480-l.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-160603101i00-l.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-16042g00p3m8.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-16031g032270-l.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-160221015z00-l.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gi102-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gi138-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gi216-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gi454-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-1512110123170-l.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-151105112146-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gi558-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-1601131pj60-l.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gi003-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102ghz8-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102gh152-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102g22425-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p94347-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p94258-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p94216-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p94110-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p94002-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93u2-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93q3-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93i3-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93642-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93605-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_left">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93538-lp.jpg" /></div>
    <div class="say">
    <div class="blue">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>
<div class="feedback_sub_right">
    <div class="sub_pic"><img src="/Public/Home/picture/1-15102p93030-lp.jpg" /></div>
    <div class="say">
    <div class="green">
			<div style="height:20px;" ></div>
			<div style="text-align: left;padding-left:20px">
				<div class="bubble">
					<div class="content">
						
					</div>
				</div>
			</div>
		</div></div>
   
</div>



</div>-->

<div class="clear"></div>

<div class="footer">
<div class="footer_c">
<div class="footer_l">
	<LI>
    		<dd>关于美迪</dd>
            <dl><a href="#" target="_blank">新闻动态</a></dl>
            <dl><a href="http://www.mede.com.cn/environment/" target="_blank">学校环境</a></dl>
            <dl><a href="http://www.mede.com.cn/EnrollProcess/" target="_blank">报读流程</a></dl>
            <dl><a href="http://www.mede.com.cn/teacher/" target="_blank">美迪团队</a></dl>
            <dl><a href="http://www.mede.com.cn/about/" target="_blank">品牌故事</a></dl>
            <dl><a href="http://www.mede.com.cn/about/" target="_blank">经营理念</a></dl>
            <dl><a href="http://www.mede.com.cn/about/" target="_blank">品牌文化</a></dl>
			<dl><a href="http://www.mede.com.cn/books/" target="_blank">自编书籍教材</a></dl>
    </LI>

        <LI>
    		<dd>产品&服务</dd>
            <dl><a href="http://www.font.com./" target="_blank">淘宝培训</a></dl>
            <dl><a href="http://www.mede.com.cn/course/tianmao/" target="_blank">天猫培训</a></dl>
            <dl><a href="http://www.mede.com.cn/course/weixin/" target="_blank">微信培训</a></dl>
            <dl><a href="http://www.mede.com.cn/course/alibaba/" target="_blank">1688培训</a></dl>
            <dl><a href="http://www.mede.com.cn/course/sumaitong/" target="_blank">跨境电商</a></dl>
            <dl><a href="http://www.mede.com.cn/course/mote/" target="_blank">摄影培训</a></dl>

    </LI>

     <LI>
    		<dd>合作品牌</dd>
            <dl><a href="http://www.taodashi.cn/" target="_blank" rel="nofollow">淘大师电商导航</a></dl>
            <dl><a href="http://bbs.taodashi.com/" target="_blank" rel="nofollow">淘大师电商论坛</a></dl>
            <dl><a href="http://www.taocaizi.com/" target="_blank" rel="nofollow">美迪淘才子</a></dl>
            <dl><a href="http://www.soohuo.com/" target="_blank" rel="nofollow">美迪搜货网</a></dl>
            <dl><a href="http://club.mede.com.cn/" target="_blank" rel="nofollow">美迪电商俱乐部</a></dl>
            <dl><a href="http://www.gzmede.com/" target="_blank" rel="nofollow">美迪外包服务网</a></dl>
    </LI>   

    <LI>
    		<dd>联系我们</dd>
            <dl><a href="http://www.mede.com.cn/EnrollProcess/" target="_blank">网上在线报名</a></dl>
            <dl><a href="http://www.mede.com.cn/contact/" target="_blank">办公及上课地点</a></dl>
            <dl><a href="http://www.mede.com.cn/about/teamwork/" target="_blank">成为合作者</a></dl>
            <dl><a href="http://www.mede.com.cn//job/" target="_blank">成为美迪讲师</a></dl>
			<dl><a href="http://www.mede.com.cn/contact/" target="_blank">媒体合作联系</a></dl>
            <dl><a href="http://www.mede.com.cn/contact/" target="_blank">政府及产业园</a></dl>
    </LI>
</div>

<div class="footer_r">
<h3>校区分布</h3>
<p>中国 . 广州 . 白云区 . 三元里大道217号民生商业大厦三层<br>中国 . 广州 . 海珠区 . 艺苑路5号港艺商务大厦八层<br>中国 . 广州 . 天河区 . 燕岭路89号燕侨大厦4037室<br><a href="/contact/" title="点击查看更多校区" target="_blank" style="color:#2cc423;">点击查看更多校区</a><br><font style="color:#C00">全国统一服务热线：400-800-4439</font></p>
<div class="erweima">
	<div><img  src="/Public/Home/picture/qrcode.png" ></div>
</div>
</div>
<div class="copyright">Copyright © 2002-2018 版权所有：广州美迪信息科技有限公司 All Rights Reserved 网站备案/许可证号：<a href="http://www.miitbeian.gov.cn/" rel="nofollow" target="_blank">粤ICP备11069564号</a> <script src="/Public/Home/js/stat.php" language="JavaScript"></script> 

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<br/>
广州美迪电商学院是广州专业的电商培训机构，专业提供<a href="http://www.mede.com.cn" title="淘宝培训">淘宝培训</a>，<a href="http://www.mede.com.cn" title="电商培训">电商培训</a>，<a href="http://www.mede.com.cn" title="微商培训">微商培训</a>，<a href="http://www.mede.com.cn" title="阿里巴巴培训">阿里巴巴培训</a>，<a href="http://www.mede.com.cn" title="淘宝美工摄影培训">淘宝美工摄影培训</a>，<a href="http://www.mede.com.cn" title="京东运营推广培训">京东运营推广培训</a>等课程。
<br/>
<a href='http://57926789.11315.com' logo_size='size1'  logo_type='member' key='57926789' target='_blank'><script type='text/javascript'  src='js/auth.js'></script></a>
</div>

</div>
</div>

<link href="/Public/Home/css/reseller_6.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript"> 
var b_v = navigator.appVersion;
var IE6 = b_v.search(/MSIE 6/i) != -1;
function objscroll(divname){
	var objs=document.getElementById(divname),
	    divname=$("#"+divname);	    
	var o={};
	o.obj=divname;	
	o.objH=divname.height();
	o.objs=objs;

	$(function(){
	  if($("body").width()>=800){$("#right_scroll").show();}
	  $(window).resize(function(){
		if($("body").width()<=800){
			$("#right_scroll").hide();
			}else if($("body").width()>=800&&$(".right_scroll_bg").text()==1){
			$("#right_scroll").hide();
			}else{
				$("#right_scroll").show();				
				}
		});	
	});	
	$(window).scroll(function(){		
		var bodyH=$(document).scrollTop(),		     
			 headH = $("#head").height();
			 menuH = $("#menu_box").height();
		     o.objs.style.top=(headH+menuH)+"px";
		if (IE6){
				if(bodyH>=headH+menuH){
			       o.objs.style.top=bodyH+"px";				   
			       }				
		  }else if(bodyH>=headH+menuH){
			divname.css("position","fixed");
			o.objs.style.top=0;
			}else{
				divname.css("position","absolute");
				}			
		});	
	}
objscroll("right_scroll");

$(".right_scroll_contextitle_close").click(function(){
	$("#right_scroll").hide().find(".right_scroll_bg").text("1");
	});
</script>
        
        


</body>

</html>
<script>
    $(function () {
        $("#navlist .content-box").click(function () {
            $(".contact-cont").hide();
            $("#" + $(this).attr("data-url")).show();
            $.each($(this).siblings(), function() {
                $(this).attr("id", $(this).attr("data-key") + "-1");
            }) 
            $(this).attr("id", $(this).attr("data-key"));
            $(this).addClass("current1").siblings().removeClass("current1");
        })
    })
</script>