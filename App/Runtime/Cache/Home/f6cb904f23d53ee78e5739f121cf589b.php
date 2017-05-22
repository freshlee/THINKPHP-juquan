<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报名流程_美迪电商学院</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script language="javascript" type="text/javascript" src="/Public/Home/js/conn.js"></script>
<script type="text/javascript" src="http://m.mede.com.cn/js/jquery.1.7.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="/Public/Home/css/style_6.css" />
<link type="text/css" rel="stylesheet" href="/Public/Home/css/pages_6.css" />
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
<style type="text/css">
.intxt{border: 1px solid #dddddd; border-radius: 4px; color: #666; height: 20px; line-height: 20px; padding: 10px 5px; width: 60%;}
.div_form{margin-bottom:15px; float:left; text-align:right; height:46px; line-height:56px; width:100%; font-weight:bold;}
.coolbg{width:62%; height:60px; text-align:center; font:bold 16px/60px '宋体'; border:0 none; border-radius:4px; color:#fff; cursor:pointer; background:#009fe3;letter-spacing:6px;}
.span{padding-right:2%;}
</style>
</head>



<body>
<!--<script language="javascript" type="text/javascript" src="/Public/Home/js/notcopy.js"></script>-->
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
							<a href="http://www.mede.com.cn/">美迪首页</a>
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
                     <li class="" _t_nav="shizhan">
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
						<a href="http://www.mede.com.cn/shizhan/">教学环境</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/shizhan/">食宿环境</a>
					</dd>
					<dd>
						<a href="http://www.mede.com.cn/shizhan/">周边环境</a>
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

<div class="about_box">
	<div class="about_left">
		<div class="about_type">
		<div class="about_type_title"><h3>关于美迪</h3></div>
		<ul>
		
      <li class="about_left_list"><a href='/about/route/'>交通路线</a></li>
      
      <li class="about_left_list"><a href='/contact/privacy/'>网站隐私</a></li>
      
      <li class="about_left_list"><a href='/contact/PropertyRight/'>知识产权</a></li>
      
      <li class="about_left_list"><a href='/contact/'>联系我们</a></li>
      
		</ul>
		</div>
		<div class="about_ad"><a href="/course/kaidian/"><img src="/Public/Home/picture/about_ad1.jpg" alt="淘宝开店基础班" /></a></div>
	</div>
	<div class="about_right">
		<div class="position">您现在的位置是：<a href='http://www.mede.com.cn'>美迪首页</a> > <a href='/EnrollProcess/'>报名流程</a> > </div>
		<div class="about_body">
        <h2>网上报名</h2>
<form class="f1" action="/EnrollProcess/baoming.php?act=baoming" method="post" id="baoming_form">
<table width=100% >
<tbody>
<tr ><td width=15% align="right" class="div_form">姓 名：</td>
<td width="86%" class="right"><input type="text" id="t1" name="Name" class="intxt"></td>
</tr>
<tr><td width=15% align="right" class="div_form">报读课程：</td>
<br />
<td>
<style type="text/css">
.k_c{ width:95%; float:left; }
.k_c h1{ font-size:16px; font-weight:700}
.k_c_x{ width:28%; float:left; margin-left:15px;}
</style>
<div class="k_c">
	<h1>淘宝天猫课程</h1>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="7" />淘宝开店创业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="8" />淘宝美工店长班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="9" />淘宝运营推广班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="10" />淘宝高级美工班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="11" />淘宝推广实战班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="12" />天猫运营总裁班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="13" />阿里巴巴总裁班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="14" />淘宝全能班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="15" />高级店长培训班</div>
</div>
<div class="k_c">
	<h1>微商电商课程</h1>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="16" />微信开店创业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="17" />微信营销总裁班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="18" />高级微信运营推广班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="19" />微商导师班</div>
</div>
<div class="k_c">
	<h1>京东培训课程</h1>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="20" />京东开店创业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="21" />京东美工店长班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="22" />京东运营推广班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="23" />京东快车高级班</div>
</div>
<div class="k_c">
	<h1>跨境电商课程</h1>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="24" />速卖通总裁班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="25" />亚马逊开店创业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="26" />亚马逊运营推广班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="27" />wish运营总裁班</div>
</div>
<div class="k_c">
	<h1>摄影培训课程</h1>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="28" />淘宝静物摄影班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="29" />淘宝模特摄影班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="30" />高级产品修图班</div>
</div>
<div class="k_c">
	<h1>就业培训课程</h1>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="31" />网店美工就业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="32" />网店运营推广就业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="33" />微信运营推广就业班</div>
    <div class="k_c_x"><input type="checkbox" name="kecheng[]" value="34" />跨境电商就业班</div>
</div>
</td>
</tr>
<tr ><td width=15% align="right" class="div_form">上课时间：</td>
<td class="right">
<!--<input type="text" id="t2" name="sk_time" class="intxt">-->
<input type="text" name="ConsultationDate" data-date-format="yyyy-mm-dd" class="w-2 date-picker intxt" />
</td>
</tr>
<tr>
	<td width=15% align="right" class="div_form">上课时间段：</td>
    <td class="right">
    	<select name="shijianduan">
        	<option value="1">上午</option>
            <option value="2">下午</option>
            <option value="3">晚上</option>
        </select>
    </td>
</tr>
<tr ><td width=15% align="right" class="div_form">电 话：</td>
<td class="right"><input type="text" id="t3" name="tel" class="intxt"></td>
</tr>
<tr ><td width=15% align="right" class="div_form">Q Q：</td>
<td class="right"><input type="text" id="t4" name="qq" class="intxt"></td>
</tr>
<tr ><td width=15% align="right" class="div_form">微 信：</td>
<td class="right"><input type="text" id="t5" name="weixin" class="intxt"></td>
</tr>
<tr><td width=15% align="right" class="div_form">备 注：</td> 
<td><textarea id="txtarea" name="beizhu" style="width:100%; height:300px; margin-bottom:15px; border: 1px solid #dddddd; border-radius: 4px; color: #666;"></textarea></td> 
</tr> 
<tr><td width=15% align="right" class="div_form"></td>
<td><input id="Submit1" type="button" class="coolbg" value="立即报名" onclick="check_form();" /> </td>
</tr> 
</tr> 
</tbody> 
</table> 
</form>
<br />
		<h2>
	&nbsp;报名流程：</h2>
<br />
<div>
	<strong>1、报名方式</strong></div>
<div>
	&nbsp; &nbsp;1.1、在网站咨询老师处报名(右侧在线咨询列表)</div>
<div>
	&nbsp; &nbsp;1.2、在线提交报名信息报名(右侧在线咨询列表)</div>
<div>
	&nbsp; &nbsp;1.3、拨打全国招生热线报名：4008004439 &nbsp; 13928893215<br />
	&nbsp;</div>
<div>
	<br />
	<div>
		<strong>2、缴费报名</strong></div>
	<div>
		2.1、预约学位定金300-500元，剩余学费可上课当天前过来补齐。</div>
	<div>
		2.2、现金缴费:可以到我们的培训中心所在地亲自缴纳，&nbsp;<a href="http://www.mede.com.cn/about/route/" target="_blank">查看乘车路线</a>。</div>
	<div>
		2.3、您可以通过银行汇款的方式缴纳您的学费(右侧在线咨询索取银行卡号)</div>
	<div>
		2.4、POS机刷卡缴费(支持信用卡 储蓄卡）<br />
		&nbsp;</div>
</div>
<div>
	<strong>3、报到入学&nbsp;</strong></div>
<div>
	学员于开课前一周内到培训中心报到并交培训费（特别是外地学员需要安排住宿的）。<br />
	&nbsp;</div>
<div>
	<strong>4、开课(开课当天要求学员必须到校)</strong></div>
<div>
	&nbsp; &nbsp;4.1、确定机位</div>
<div>
	&nbsp; &nbsp;4.2、领取课程资料</div>
<div>
	&nbsp; &nbsp;4.3、正式上课</div>
<div>
	&nbsp;</div>
<div>
	<span style="color: #0000ff">全国统一招生热线：400-800-4439 QQ:&nbsp;</span><span style="color: #0000ff">&nbsp;575511450 358639993</span></div>

		</div>
		<div class="about_news">
			<h3>网友们都在看</h3>
			<ul>
            <li><a href="/share/clipart/760.html">PS快速把照片处理成素描的效果</a></li>
<li><a href="/share/taobaobase/746.html">淘宝网店加盟，网店加盟的骗人手段揭秘</a></li>
<li><a href="/share/clipart/759.html">Photoshop利用通道进行简单磨皮教程</a></li>
<li><a href="/share/operations/758.html">开淘宝网店应该如何定位自己的店铺？</a></li>
<li><a href="/share/operations/757.html">思路决定出路 — 2.5包邮的丝袜如何月纯赚上十万的？</a></li>
<li><a href="/share/marketing/756.html">阿里卖家不为人知的运营小技巧揭秘</a></li>
<li><a href="/share/clipart/755.html">美工面试应聘技巧</a></li>
<li><a href="/share/taobaobase/754.html">淘宝图片尺寸大全，淘宝详情/主图/手机端图片尺寸</a></li>
<li><a href="/share/operations/745.html">淘宝爆款新玩法—淘宝客打造爆款</a></li>
<li><a href="/share/taobaobase/748.html">开网店怎么找货源？淘宝开店货源怎么找？</a></li>
 
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>

<div class="footer">
<div class="footer_c">
<div class="footer_l">
	<LI>
    		<dd>关于美迪</dd>
            <dl><a href="#" target="_blank">新闻动态</a></dl>
            <dl><a href="http://www.mede.com.cn/shizhan/" target="_blank">学校环境</a></dl>
            <dl><a href="http://www.mede.com.cn/EnrollProcess/" target="_blank">报读流程</a></dl>
            <dl><a href="http://www.mede.com.cn/teacher/" target="_blank">美迪团队</a></dl>
            <dl><a href="http://www.mede.com.cn/about/" target="_blank">品牌故事</a></dl>
            <dl><a href="http://www.mede.com.cn/about/" target="_blank">经营理念</a></dl>
            <dl><a href="http://www.mede.com.cn/about/" target="_blank">品牌文化</a></dl>
			<dl><a href="http://www.mede.com.cn/books/" target="_blank">自编书籍教材</a></dl>
    </LI>

        <LI>
    		<dd>产品&服务</dd>
            <dl><a href="http://www.mede.com.cn/" target="_blank">淘宝培训</a></dl>
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

<link href="/Public/Home/css/reseller_7.css" rel="stylesheet" type="text/css" media="screen" />

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
        
        
<script type="text/javascript">
	function check_form(){
		var name = $("input[name=Name]").val();
		if(name == ''){
			alert("姓名不有为空，请填写姓名");
			return false;
		}
		var tel = $("input[name=tel]").val();
		if(tel == ''){
			alert("电话不能为空，请输入电话号码");return false;
		}
		if(!tel.match(/^1[3|4|5|7|8]\d{9}$/)){
			alert("手机号码格式不正确！请重新输入");return false;
		}
		var qq = $("input[name=qq]").val();
		if(qq == ''){
			alert("QQ不能为空，请输入QQ号码");return false;
		}
		var sk_time = $("input[name=ConsultationDate]").val();
		if(sk_time == ''){
			alert("上课时间不能为空");return false;
		}
		$("#baoming_form").submit();
	}
</script>
	
 <link href="http://oa.taodashi.com/public/plugin/date-time/datepicker.css" type="text/css" rel="stylesheet" />
 <script type="text/javascript" src="http://oa.taodashi.com/public/plugin/date-time/bootstrap-datepicker.min.js"></script>
 <script type="text/javascript">
$('.date-picker').datepicker({autoclose:true,'language':'zh'});
</script>
</body>

</html>