<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>师资团队_美迪电商学院</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script language="javascript" type="text/javascript" src="/Public/Home/js/conn.js"></script>
<link type="text/css" rel="stylesheet" href="/Public/Home/css/style_2.css" />
<link type="text/css" rel="stylesheet" href="/Public/Home/css/pages_2.css" />
<script type="text/javascript" src="/Public/Home/js/jquery-1.4.3.min.js"></script>
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

<div class="teacher_rector"></div>
<div class="teacher_box">
<a href="/teacher/624.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-150601045430u4.png" width="185" height="185" /></div>
		<h4><strong>吴老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			淘宝是一门很深的学问，我投入了巨大的时间去研究、去探讨“淘宝美工”知识，先后精通Photoshop、Dreamweaver、CorelDraw、Flash、Fireworks、Div+Css等技能，为了满足淘宝美工所需的技能，特意专研了淘宝开放组件，通过组件开发了各种各样的特效，大大加强了用户体验。
		</p>
	</a><a href="/teacher/556.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-14092600163bu.png" width="185" height="185" /></div>
		<h4><strong>陈老师</strong> 美迪阿里推广金牌讲师</h4>
		<p>
			陈老师曾经运营多家实体店铺，但从接触电子商务后便每日每夜不断研究搜索引擎算法，使之拥有丰富的操作实例。同时拥有着优秀的电子商务经验及多方面知识，曾经亦是知名企业的SEO运营主管，因此倍受学员喜爱。他在校内因材施教，使每个学生在各自不同的基础上都能得到提升。
		</p>
	</a><a href="/teacher/36.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-140z61035245q.png" width="185" height="185" /></div>
		<h4><strong>丁老师</strong> 美迪淘宝推广金牌讲师</h4>
		<p>
			毕业于国家重点大学211工程学校西南大学 电子商务专业，对电子商务的课程有系统的学习和研究。毕业之后从事过4年电子商务专业的教学工作，对电子商务行业以及淘宝网店运营有相当丰富的经验，培养了接近500多电子商务人才，很多学生都自己创业开店并且经营的非常不错。
		</p>
	</a><a href="/teacher/552.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-140920213134s4.png" width="185" height="185" /></div>
		<h4><strong>冯老师</strong> 美迪无线推广金牌讲师</h4>
		<p>
			09年毕业于华南理工大学，在校期间是电子商务领域的高材生，长达5年网店推广营销策划丰富经验，擅长店铺定位、爆款打造策划、淘宝SEO、淘宝直通车、淘宝数据分析、网店视觉营销策划、客服沟通、手机淘宝。研发的作品有《大数据挖掘法找出属于你的小而美》、《最强黄金标题打造,抢占搜索排名》、《黄金诊断法...

		</p>
	</a><a href="/teacher/40.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-14101509222sn.png" width="185" height="185" /></div>
		<h4><strong>吴老师</strong> 美迪京东推广金牌讲师</h4>
		<p>
			吴吉雄，国家二级室内设计师，高级国际商业美术设计师。曾在美之上商业公司设计部美术指导，参与开发多个品牌包装与运营。在广州市红方格广告策划有限公司[广东十大广告公司]任资深设计师；吴老师在教学过程中将理论与实践结合，言传身教，课堂气氛活跃，深受学生的一致好评。
		</p>
	</a><a href="/teacher/53.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-140z914524cc.png" width="185" height="185" /></div>
		<h4><strong>代老师</strong> 美迪运营推广金牌讲师</h4>
		<p>
			多年电商从业经验，擅长淘宝SEO，活动等推广运营策划，直通车，钻石展位等付费推广非常精通. 曾经亲手帮助多个店铺打造多款月销爆款爆店，创造三个月C店从0到100w销售额的佳绩。并对社群电商亦有一定见解和研究， 前老A电商广州分院高级讲师，现任美迪电商推广运营课程金牌讲师...
		</p>
	</a><a href="/teacher/618.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-15060104051c49.png" width="185" height="185" /></div>
		<h4><strong>甘老师</strong> 美迪淘宝推广金牌讲师</h4>
		<p>
			电子商务专业高材生。对电商行业有着很大的兴趣，大学时期就热衷于研究电商并着手自主经营网店。毕业后一直从事电子商务教学工作并担任多家淘宝知名店铺运营顾问。个人在女装、家具等行业类目具有深入的推广技巧和知识经验。培养学员超过400人，学生遍布各地。上课风格幽默风趣，激情洋溢，注重理论与实战的结合...
		</p>
	</a><a href="/teacher/156.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-140920204934403.png" width="185" height="185" /></div>
		<h4><strong>叶老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			3年专注研究淘宝，专精领域有店铺视觉营销、淘宝直通车、品牌策划、统筹运营、分销管理、设计指导、客户体验、营销推广方式；曾经历高端电器天猫店长及品牌策划，天猫中端皮草女装策划师，金冠高端男装店长、4皇冠大码女装策划师、四钻高端电器运营师。有丰富的淘宝和品牌企划的策划运营能力。
		</p>
	</a><a href="/teacher/555.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-150601034514t6.png" width="185" height="185" /></div>
		<h4><strong>陈老师</strong> 美迪淘宝推广金牌讲师</h4>
		<p>
			2008年毕业于白云学院，专修网络工程，毕业后从事互联网工作包括网页设计、网络工程，期间自运营皇冠淘宝女装店，拥有5年互联网从业经验，3年淘宝店运营经验； 精通AdobePhotoshop、Dreamweaver、擅长自然排名优化及直通车推广，曾操作直通车ROI(投入产出比)1：8的优秀战绩；
		</p>
	</a><a href="/teacher/703.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-160p31442310-l.png" width="185" height="185" /></div>
		<h4><strong>岑老师</strong> 美迪京东推广金牌讲师</h4>
		<p>
			京东商学院认证讲师，6年京东旗舰店运营推广经验，具有丰富的平台运营实操技能。曾就职于百度公司、曾任德国某公司京东旗舰店运营总监，对亚马逊中国、淘宝、苏宁易购平台运营有独到见解，专注于京东运营，负责运营过的类目：运动户外、童装、京东全球购，擅长精细化运营和各种活动促销策划...
		</p>
	</a><a href="/teacher/620.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-150601041254296.png" width="185" height="185" /></div>
		<h4><strong>刘老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			 09年毕业于广东白云学院电子商务专业，毕业后，从事过广告设计、平面设计等相关行业，精通Adobe Photoshop、Dreamweaver等设计软件，担任过2家企业规模在50人以上的企业平面设计师，2012年步入淘宝店铺设计领域，到目前为止，已经为50多家天猫和淘宝卖家设计过装修模板，积累了丰富的设计经验。
		</p>
	</a><a href="/teacher/616.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-15060103514dr.png" width="185" height="185" /></div>
		<h4><strong>郭老师</strong> 美迪淘宝开店金牌讲师</h4>
		<p>
			毕业于桂林理工大学电子商务专业，从大学读书时期就热衷研究网商。在淘宝拥有多个店铺，主营外贸大码女装、女包，熟知C店运营规范及淘宝规则、深谙各类淘宝推广技巧、并能准确掌握买家购物心理促成交易。 教学理念：在轻松的学习氛围中掌握知识点，学以致用。
		</p>
	</a><a href="/teacher/615.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-15060103413dn.png" width="185" height="185" /></div>
		<h4><strong>何老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			2015年入职美迪电子商务网店培训，从事平面设计、淘宝美工实战讲师。精通Adobe Photoshop和CorelDRAW；略通 Dreamweave等。在实战教学中，通过自己的努力和各课程老师的帮助，逐步形成了自己的教学风格，注重学生课堂上的操作与理解，不提倡死记硬背老师的操作步骤...
		</p>
	</a><a href="/teacher/617.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-150601035515461.png" width="185" height="185" /></div>
		<h4><strong>黄老师</strong> 美迪淘宝开店金牌讲师</h4>
		<p>
			2010年毕业于广东外语外贸大学 商务秘书【商务管理】专业，毕业后从事电商多年，擅长店铺定位，产品分析，无线自然搜索排名，无线直通车，店铺数据分析，客服沟通，售后处理。 曾参与淘宝皇冠店以及某品牌女装网店的运营与推广，擅长手机端的运营推广，活动选品与营销...
		</p>
	</a><a href="/teacher/619.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-15060104095c42.png" width="185" height="185" /></div>
		<h4><strong>林老师</strong> 美迪运营推广金牌讲师</h4>
		<p>
			毕业于私立华联学院！专修装饰艺术设计！在校期间已经开始经营自己网店！拥有5年的网店设计和店铺运营经验！自运营冠级大码女装类目店，担任某品牌珠宝天猫旗舰店运营总监！ 2012年加入美迪电子商务培训，担任天猫总裁班，无线淘宝班，高级运营推广班，开店创业班等课程金牌讲师！
		</p>
	</a><a href="/teacher/621.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-150601041g6316.png" width="185" height="185" /></div>
		<h4><strong>刘老师</strong> 美迪微信营销金牌讲师</h4>
		<p>
			具有微信营销与培训专长，项目管理师，华南师范大学广告美学硕士，湖南师范大学中文本科。
5年网络营销与培训、投融资、渠道招商、公关宣传、品牌策划和企业文化工作经验。能做一手精彩的PPT、软文、商业计划书和策划案。
		</p>
	</a><a href="/teacher/622.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-150601043r5964.png" width="185" height="185" /></div>
		<h4><strong>罗老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			曾在电子商务公司任职产品开发，淘宝美工，网站设计师等职位；了解电子商务的整个运作流程，从网店装修，整店模板的设计，logo，自定义模块的设计，首页，宝贝详情页，宝贝列表页等各个页面的设计。宝贝描述的制作与策划，爆款的打造与运作流程，高级图片处理。
		</p>
	</a><a href="/teacher/623.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1506010444324i.png" width="185" height="185" /></div>
		<h4><strong>王老师</strong> 美迪淘宝开店金牌讲师</h4>
		<p>
			2011年毕业于昆明理工大学，专业计算机网络技术专业，对电商行业有着极大的兴趣，通过自学对电商行业有极深的了解。12年开始从业电商行业，擅长淘宝店铺后台各项操作及管理，有着丰富的实战经验。
		</p>
	</a><a href="/teacher/553.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-140912122254345.png" width="185" height="185" /></div>
		<h4><strong>梁老师</strong> 美迪电商摄影金牌讲师</h4>
		<p>
			梁老师06年毕业于广东广州岭南职业技术学院，摄影与平面设计专业。精通各种摄影器材，并掌握各种摄影技术，先后在广告公司、天猫公司当任摄影师等职务。 熟悉平面摄影全套操作流程，现担任美迪教育摄影讲师，培训学员超百人，学员遍布全国各地，讲课条理清析，生动有趣，注重实战...
		</p>
	</a><a href="/teacher/39.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-13062q121570-l.png" width="185" height="185" /></div>
		<h4><strong>冉老师</strong> 淘宝运营推广讲师</h4>
		<p>
			担任过天猫店铺客服主管、店长、CRM主管的职务。2012年任淘宝大学黑龙江机构客服培训讲师，开始客服培训服务；至2015年10月，授课学员超千人，学员分布在各大品牌，如裂帛、小米等。擅长客服新人培训以及客服团队的KPI考核，店铺DSR评分把控，售后服务质量跟踪，有效提升客服工作效率...
		</p>
	</a><a href="/teacher/678.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061620560-l.png" width="185" height="185" /></div>
		<h4><strong>陈老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			陈老师具有五年美工设计经验，主修艺术设计，先后在广告设计公司、电子商务公司担任平面设计师设计和淘宝美工设计等职务。精通photoshop，dreamweaver、CorelDraw等软件，独立制作C店整店装修，店铺规划，布局管理等。
		</p>
	</a><a href="/teacher/679.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061642380-l.png" width="185" height="185" /></div>
		<h4><strong>黄老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			曾参与多个原创服饰网店的服装设计、摄影和网站设计，一手把商品从有到无打造出来。曾在MO&CO服饰公司和广新信息技术公司担任设计师。善于发掘商品的卖点和营销，对直通车创意图有多年的经验。5年电商运营工作经验，擅长服装类目，玩具等大小类目...
		</p>
	</a><a href="/teacher/680.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-160606164p40-l.png" width="185" height="185" /></div>
		<h4><strong>李老师</strong> 美迪淘宝推广金牌讲师</h4>
		<p>
			6年电商运营工作经验；擅长女装，电器等大小类目；在研究运营SEO淘宝排名优化上、直通车推广引流省钱策略、如何打造多个爆款、市场营销定位、数据分析挖掘有丰富的经验；针对新老客户维护与营销上有着不同于普通CRM的独特模式，让淘宝店家的客户复购率增长20%以上，以差异化服务制胜。 
		</p>
	</a><a href="/teacher/681.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061a2370-l.png" width="185" height="185" /></div>
		<h4><strong>梁老师</strong> 美迪电商摄影金牌讲师</h4>
		<p>
			梁老师毕业于广东省建设职业技术学院，计算机多媒体技术专业，在校期间，组织了校园摄影社团 ，积集了专业的摄影技术和摄影服务理念，对摄影艺术有着执着的追求，擅长于人像摄影，风光摄影，曾在广州摄视度摄影公司担任摄影师一职，有较强的Photoshop修图和设计能力。
		</p>
	</a><a href="/teacher/682.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061f4000-l.png" width="185" height="185" /></div>
		<h4><strong>廖老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			擅长：淘宝整店装修，页面设计，LOGO设计和网页源代码编写，长期从事网页设计和淘宝页面设计，设计制作了大量的作品，精通Dreamweaver、PhotoShop、Flash、Firework等设计软件，并有丰富的教学经验。
		</p>
	</a><a href="/teacher/683.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061fz30-l.png" width="185" height="185" /></div>
		<h4><strong>吴老师</strong> 美迪淘宝美工金牌讲师</h4>
		<p>
			多年的设计行业和电商行业使他先后掌握了Dreamweaver，AdobePhotoshop， sai，Coreldraw，等设计相关软件。对首页设计，视觉营销，详情页设计，卖点挖掘，文案制作，HTML语言有着丰富的实战经验。
		</p>
	</a><a href="/teacher/684.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061g3050-l.png" width="185" height="185" /></div>
		<h4><strong>谢老师</strong> 美迪淘宝开店金牌讲师</h4>
		<p>
			
毕业于潮汕职业技术学院电子商务专业，校内电子商务创业比赛优秀获得者，出来社会期间不断积累电商经验，有比较丰富的淘宝店铺的运营推广经验。3年多的淘宝团队创业，2年的天猫活动推广策划，2年多的淘宝培训经验，精通直通车推广，活动选品与营销，标题优化，其他付费推广和爆款打造。
		</p>
	</a><a href="/teacher/685.html" class="teacher_sub">
		<div class="teacher_picture"><img src="/Public/Home/picture/1-1606061g6260-l.png" width="185" height="185" /></div>
		<h4><strong>朱老师</strong> 美迪淘宝推广金牌讲师</h4>
		<p>
			毕业于计算机应用专业，毕业后进入电商行业，从小店铺做到大店铺，从推广到运营，从直通车到钻展再到整个店铺的推广运营和电商平台有很丰富的经验。很多人会问什么是运营？“运营”就是刘备身边的诸葛亮。
		</p>
	</a>
</div>
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

<link href="/Public/Home/css/reseller_3.css" rel="stylesheet" type="text/css" media="screen" />

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