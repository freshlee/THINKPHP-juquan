function getHost() {
	return window.location.protocol + "//" + window.location.host;
}
function addFavorite() {
	var url = getHost();
	var title = "��ʻԱ����";
	if (document.all) {
		window.external.addFavorite(url,title);
	}
	else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}
	else {
		alert("��ʱ��֧����ʹ�õ�������汾");
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