//ͨ��ѡ��ɾ����Ŀ����ѡ-ȫѡ��--------------
function CheckAll(form)
{
for (var i=0;i<form.elements.length;i++)
{
var e = form.elements[i];
if (e.name != 'chkall')
e.checked = form.chkall.checked;
}
}
//���ѡ�����------------------------------
function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=auto,menubar=no,status=no' );
}
//�����Ŀɾ����ʾ---------------------------
function ConfirmDel(message)
{
   if (confirm(message))
   {
      document.formDel.submit()
   }
}
//���������ַ�����Ч�ԣ�0-9��a-z,-,_��--------------
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
//������Ա��¼---------------------------
function CheckAdminLogin()
{
   var check; 
   if (document.AdminLogin.LoginID.value.length<1 || document.AdminLogin.LoginID.value.length>10)
   {
	  alert("����ȷ�����¼ID");
      document.AdminLogin.LoginID.focus();
	  return false;
	  exit;
   }    
   if (!voidNum(document.AdminLogin.LoginPassword.value))
   {
	  alert("�������¼���롣");
	  document.AdminLogin.LoginPassword.focus();
	  return false;
	  exit;
   }
   if (!voidNum(document.AdminLogin.CheckCode.value))
   {
      alert("����ȷ������֤�롣");
      document.AdminLogin.CheckCode.focus();
	  return false;
	  exit;
   }
   return true;
}
//��ת���ڼ�ҳ----------------------------
function GoPage(PageSelf)
{
   window.location.href=PageSelf+"Page="+document.ListForm.SkipPage.value;
}
function dsMove(obj)  //ʵ�ֲ������
{
  if(event.button==1)
  {
    var X=obj.clientLeft;
    var Y=obj.clientTop;
    obj.style.pixelLeft=X+(event.x-DS_x);
    obj.style.pixelTop=Y+(event.y-DS_y);
  }
}
//��ҳ��--------------------------------
function openwindow(url,name,iWidth,iHeight)
 {
  var url;                            //ת����ҳ�ĵ�ַ;
  var name;                           //��ҳ���ƣ���Ϊ��;
  var iWidth;                         //�������ڵĿ��;
  var iHeight;                        //�������ڵĸ߶�;
  var iTop = (window.screen.availHeight-30-iHeight)/2;       //��ô��ڵĴ�ֱλ��;
  var iLeft = (window.screen.availWidth-10-iWidth)/2;           //��ô��ڵ�ˮƽλ��;
  window.open(url,name,'height='+iHeight+',innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=yes,resizeable=no,location=no,status=no');
 }