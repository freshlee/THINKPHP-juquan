//通用选择删除条目（反选-全选）--------------
function CheckAll(form)
{
for (var i=0;i<form.elements.length;i++)
{
var e = form.elements[i];
if (e.name != 'chkall')
e.checked = form.chkall.checked;
}
}
//类别选择分类------------------------------
function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=auto,menubar=no,status=no' );
}
//相关条目删除提示---------------------------
function ConfirmDel(message)
{
   if (confirm(message))
   {
      document.formDel.submit()
   }
}
//检验输入字符的有效性（0-9，a-z,-,_）--------------
function voidNum(argValue) 
{
   var flag1=false;
   var compStr="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-!@#$%^&*";
   var length2=argValue.length;
   for (var iIndex=0;iIndex<length2;iIndex++)
   {
	   var temp1=compStr.indexOf(argValue.charAt(iIndex));
	   if(temp1==-1) 
	   {
	      flag1=false;
			break;							
	   }
	   else
	   { flag1=true; }
   }
   return flag1;
} 
//检查管理员登录---------------------------
function CheckAdminLogin()
{
   var check; 
   if (document.AdminLogin.LoginID.value.length<1 || document.AdminLogin.LoginID.value.length>10)
   {
	  alert("请正确输入登录ID");
      document.AdminLogin.LoginID.focus();
	  return false;
	  exit;
   }    
   if (!voidNum(document.AdminLogin.LoginPassword.value))
   {
	  alert("请输入登录密码。");
	  document.AdminLogin.LoginPassword.focus();
	  return false;
	  exit;
   }
   if (!voidNum(document.AdminLogin.CheckCode.value))
   {
      alert("请正确输入验证码。");
      document.AdminLogin.CheckCode.focus();
	  return false;
	  exit;
   }
   return true;
}
//跳转到第几页----------------------------
function GoPage(PageSelf)
{
   window.location.href=PageSelf+"Page="+document.ListForm.SkipPage.value;
}
function dsMove(obj)  //实现层的拖移
{
  if(event.button==1)
  {
    var X=obj.clientLeft;
    var Y=obj.clientTop;
    obj.style.pixelLeft=X+(event.x-DS_x);
    obj.style.pixelTop=Y+(event.y-DS_y);
  }
}
//打开页面--------------------------------
function openwindow(url,name,iWidth,iHeight)
 {
  var url;                            //转向网页的地址;
  var name;                           //网页名称，可为空;
  var iWidth;                         //弹出窗口的宽度;
  var iHeight;                        //弹出窗口的高度;
  var iTop = (window.screen.availHeight-30-iHeight)/2;       //获得窗口的垂直位置;
  var iLeft = (window.screen.availWidth-10-iWidth)/2;           //获得窗口的水平位置;
  window.open(url,name,'height='+iHeight+',innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=yes,resizeable=no,location=no,status=no');
 }