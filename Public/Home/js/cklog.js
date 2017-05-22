// JavaScript Document
//检测登陆
function cklog(obj){
 	if(obj.username.value==""){
		alert('请输入用户名！');
 		obj.username.focus();
		return false;
	}
	if(obj.password.value==""){
		alert('请输入密码！');
 		obj.password.focus();
		return false;
	}
	
	if(obj.verify.value==""){
		obj.verify.focus();
		alert('请输入验证码！');
		return false;
	}
}


 
 function firstrs(){
	document.getElementById("rslink").style.display="none";
	document.getElementById("message").style.display="block";
  }	
  function editrs(){
	document.getElementById("rslink").style.display="none";
	document.getElementById("rsedit").style.display="block";
  }	
 function rsback(){
    document.getElementById("rslink").style.display="block";
	document.getElementById("message").style.display="none";
}
function rsback1(){
    document.getElementById("rslink").style.display="block";
	document.getElementById("rsedit").style.display="none";
}
function ckadd(){
if(document.getElementById("CarNumber").value=="粤A" ||document.getElementById("CarNumber").value==""){
			 alert("请输入车牌号码");
			 document.getElementById("CarNumber").focus();
			 return false;
			 }	
if(document.getElementById("CarName").value==""){
			 alert("请输入姓名");
			 document.getElementById("CarName").focus();
			 return false;
			 }	
if(document.getElementById("CarTelephone").value==""){
			 alert("请输入手机号码");
			 document.getElementById("CarTelephone").focus();
			 return false;
			 }	
//if(document.getElementById("CartypeID").value==""){
//			 alert("请选择车型");
//			 document.getElementById("CartypeID").focus();
//			 return false;
//			 }	
if(document.getElementById("verify").value==""){
			 alert("请输入验证码");
			 document.getElementById("verify").focus();
			 return false;
			 }	
			 
}	
function ckedit(){
if(document.getElementById("CarNumber1").value=="粤A" ||document.getElementById("CarNumber1").value==""){
			 alert("请输入车牌号码");
			 document.getElementById("CarNumber1").focus();
			 return false;
			 }	
if(document.getElementById("RsNumber").value==""){
			 alert("请输入预约号");
			 document.getElementById("RsNumber").focus();
			 return false;
			 }	
if(document.getElementById("verify1").value==""){
			 alert("请输入验证码");
			 document.getElementById("verify1").focus();
			 return false;
			 }	
			 
}			
 