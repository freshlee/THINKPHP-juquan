<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<link rel="stylesheet" href="/Public/Home/css/User_Login.css">
<script src="/Public/Home/js/cklog.js" type="text/javascript" ></script>
<script>
function freshVerify() {
 document.getElementById('verifyImg').src='/Index/VerifyImg/'+Math.random();
} 
</script>
<title>世锐－后台登录</title>
<meta name="keywords" content="世锐" />
<meta name="description" content="世锐电器" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<BODY id=userlogin_body style="text-align:center;">
<form method="post" name="mlogin" action="/Index/ck_adlogin" onSubmit="return cklog(this);" target="_top">
<DIV id=user_login>
<DL>
  <DD id=user_top>
  <UL>
    <LI class=user_top_l></LI>
    <LI class=user_top_c></LI>
    <LI class=user_top_r></LI></UL>
  <DD id=user_main>
  <UL>
    <LI class=user_main_l></LI>
    <LI class=user_main_c>
    <DIV class=user_main_box>
    <UL>
      <LI class=user_main_text>用户名： </LI>
      <LI class=user_main_input><INPUT class=TxtUserNameCssClass id='username' 
      maxLength=20 name='username'> </LI></UL>
    <UL>
      <LI class=user_main_text>密&nbsp;&nbsp;&nbsp;&nbsp;码： </LI>
      <LI class=user_main_input><INPUT class=TxtPasswordCssClass id='password' 
      type=password name='password'> </LI></UL>
    <UL>
      <LI class=user_main_text>验证码： </LI>
      <LI class=user_main_input><input type="text"  name="verify" id="verify" maxlength="4" size="4"  ><span style="margin-left:40px;"><img style='cursor:pointer' title='刷新验证码' src='/Index/VerifyImg' id='verifyImg' onClick='freshVerify()'/></span> </LI></UL></DIV></LI>
    <LI class=user_main_r><INPUT class=IbtnEnterCssClass id=IbtnEnter 
    style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" 
    onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("IbtnEnter", "", true, "", "", false, false))' 
    type=image src="/Public/Home/images/user_botton.gif" name=IbtnEnter> </LI></UL>
  <DD id=user_bottom>
  <UL>
    <LI class=user_bottom_l></LI>
    <LI class=user_bottom_c><SPAN style="MARGIN-TOP: 40px"><font color="#FF0000">非管理员请勿尝试登陆，否则追究法律责任！</font></SPAN> </LI>
    <LI class=user_bottom_r></LI></UL></DD></DL></DIV><SPAN id=ValrUserName 
style="DISPLAY: none; COLOR: red"></SPAN><SPAN id=ValrPassword 
style="DISPLAY: none; COLOR: red"></SPAN><SPAN id=ValrValidateCode 
style="DISPLAY: none; COLOR: red"></SPAN>
<DIV id=ValidationSummary1 style="DISPLAY: none; COLOR: red"></DIV>
<DIV></DIV>
</FORM></BODY></HTML>