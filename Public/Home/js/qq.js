 
var tips; 
var theTop = 100;
var old = theTop;
var pos;
function initFloatTips() 
{ 
    tips = document.getElementById('divQQbox');
    moveTips();
}
function moveTips()
{
           var tt=50; 
          if (window.innerHeight) 
          {
             pos = window.pageYOffset  
          }else if (document.documentElement && document.documentElement.scrollTop) {
             pos = document.documentElement.scrollTop  
          }else if (document.body) {
            pos = document.body.scrollTop;  
          }
          
          pos=pos-tips.offsetTop+theTop; 
          pos=tips.offsetTop+pos/10; 
          if (pos < theTop){
             pos = theTop;
          }
          if (pos != old) { 
             tips.style.top = pos+"px";
             tt=10;//alert(tips.style.top);  
          }
          old = pos;
          setTimeout(moveTips,tt);
}
initFloatTips();
    //if(typeof(HTMLElement)!="undefined")//��firefox����contains()������ie�²�������
//        {  
//          HTMLElement.prototype.contains=function (obj) 
//          {  
//              while(obj!=null&&typeof(obj.tagName)!="undefind"){//ͨ��ѭ���Ա����ж��ǲ���obj�ĸ�Ԫ��
//       ���� ��if(obj==this) return true;  
//       ������    ��obj=obj.parentNode;
//       ����      }  
//              return false;  
//          }
//    }
function hideMsgBox(theEvent){
      if (theEvent){
        var browser=navigator.userAgent;
        if (browser.indexOf("Firefox")>0){//�����Firefox
            if (document.getElementById("contentid").contains(theEvent.relatedTarget)) {//�������Ԫ��
                return
            }
        }
        if (browser.indexOf("MSIE")>0 || browser.indexOf("Presto")>=0){//�����IE
            if (document.getElementById('contentid').contains(event.toElement)) {//�������Ԫ��
                return;//������ʽ
            }
        }
      }
      document.getElementById("K1").style.display = "none";
	  document.getElementById("K2").style.display = "none";
      document.getElementById("contentid1").style.display = "none";
     }