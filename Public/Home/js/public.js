function getHost() {
	return window.location.protocol + "//" + window.location.host;
}
function addFavorite() {
	var url = getHost();
	var title = "驾驶员考试";
	if (document.all) {
		window.external.addFavorite(url,title);
	}
	else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}
	else {
		alert("暂时不支持您使用的浏览器版本");
	}
	return false;
}

function valRadio(nm)
{
	var rm=document.getElementsByName(nm); 
	for(rr=0;rr<rm.length;rr++) 
	{ 
		if (rm[rr].checked==true) {return rm[rr].value;break;}
	}
	return "";
}