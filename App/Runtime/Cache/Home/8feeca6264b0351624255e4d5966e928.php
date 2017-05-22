<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
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