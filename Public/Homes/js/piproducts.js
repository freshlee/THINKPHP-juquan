var popimg;
var bookmarkchanged;

if (typeof XMLHttpRequest == "undefined")
	XMLHttpRequest = function () {
		try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); }
			catch (e) {}
		try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); }
			catch (e) {}
		try { return new ActiveXObject("Microsoft.XMLHTTP"); }
			catch (e) {}
		//Microsoft.XMLHTTP points to Msxml2.XMLHTTP and is redundant
		throw new Error("This browser does not support XMLHttpRequest.");
	};

(function(){

var lastimg;
popimg = function (a) {
	var imgs = a.getElementsByTagName('IMG');
	if (imgs.length < 2)
		return;
	var img = imgs[0];
	if (lastimg && lastimg != img)
		lastimg.style.display = 'none';
	img.style.position = 'absolute';
	img.style.marginTop = '-50px';
	img.style.marginLeft = '-50px';
	if (img.style.display != 'none') {
		img.style.display = 'none';
		lastimg = null;
	} else {
		lastimg = img;
		img.style.display = 'inline-block';
		img.onmouseout = function () {
			img.style.display = 'none';
			img.onmouseout = null;
		};
	}
}

function esc(s) {
	if (typeof encodeURIComponent == "undefined")
		return escape(s);
	return encodeURIComponent(s);
}

var numbookmarkschecked = 0;

bookmarkchanged = function(e) {
	var cart = document.getElementById('cart');
	if (!isloggedin) {
		if (notloggedin)
			alert(notloggedin);
		e.checked = false;
		return;
	}
	if (e.checked)
		numbookmarkschecked++;
	else
		numbookmarkschecked--;
	if (cart)
		cart.style.display = numbookmarkschecked ? "inline" : "none";
	var bmbox = document.getElementById("bmbox");
	if (bmbox)
		bmbox.style.display = numbookmarkschecked ? "block" : "none";
	var xhr = new XMLHttpRequest();
	/*
	if (typeof console.log != "undefined")
		console.log(e.checked ? "checked" : "not checked");
	*/
	var xhrurl = ajaxurl +
		(/\?/.test(ajaxurl) ? "&" : "?") +
		"type=1&v=1&" +
		(e.checked ? "add" : "del") + "=" +
		esc(e.value);
	/* if (typeof console.log != "undefined")
		console.log(xhrurl); */
	xhr.open("GET", xhrurl, true);
	xhr.send();
};

function resetbookmarks() {
	numbookmarks = 0;
	var cart = document.getElementById('cart');
	if (cart)
		cart.style.display = "none";
	var bmbox = document.getElementById("bmbox");
	if (bmbox)
		bmbox.style.display = "none";
	var xhrurl = ajaxurl +
		(/\?/.test(ajaxurl) ? "&" : "?") +
		"type=1&v=1&resetbm=1";
	var xhr = new XMLHttpRequest();
	xhr.open("GET", xhrurl, true);
	xhr.send();
	var tbls = document.getElementsByTagName('TABLE');
	for (var i = 0; i < tbls.length; i++) {
		if (/(^| )productlist( |$)/.test(tbls[i].className)) {
			var inputs = tbls[i].getElementsByTagName('INPUT');
			for (var j = 0; j < inputs.length; j++) {
				inputs[j].checked = false;
			}
		}
	}
}

function bmboxfunc(oldfunc, bmbox) {
	var content = document.getElementById("content");
	if (!content || typeof document.body.scrollTop == "undefined")
		return function(e) { if (oldfunc) oldfunc(e); };
	return function (evt) {
		var t;
		if (typeof window.pageYOffset == "number")
			t = window.pageYOffset;
		else if (document.body && document.body.scrollTop)
			t = document.body.scrollTop;
		else if (document.documentElement &&
			document.documentElement.scrollTop)
			t = document.documentElement.scrollTop;
		t += 10;
		if (t < content.offsetTop)
			t = content.offsetTop;
		bmbox.style.top = t + "px";
		if (oldfunc)
			oldfunc(evt);
	};
}

(function(oldonload){
window.onload = function(evt) {
	var tbls = document.getElementsByTagName('TABLE');
	for (var i = 0; i < tbls.length; i++) {
		if (/(^| )productlist( |$)/.test(tbls[i].className)) {
			var inputs = tbls[i].getElementsByTagName('INPUT');
			for (var j = 0; j < inputs.length; j++) {
				inputs[j].disabled = false;
				if (inputs[j].checked)
					numbookmarkschecked++;
			}
		}
	}
	if (typeof cartnum != "undefined" &&
		cartnum > numbookmarkschecked) {
		/* some bookmarks outside of this page -
		 * just increase number of bookmarks to
		 * disable the hiding of the bookmarks button */
		numbookmarkschecked++;
	}
	var bmbox = document.getElementById("bmbox");
	if (numbookmarkschecked) {
		var cart = document.getElementById('cart');
		if (cart)
			cart.style.display = "inline";
		if (bmbox)
			bmbox.style.display = "block";
	}
	if (bmbox) {
		// window.onresize = bmboxfunc(window.onresize, bmbox);
		window.onscroll = bmboxfunc(window.onresize, bmbox);
		var a = bmbox.getElementsByTagName("A");
		if (a.length == 2) {
			a[1].onclick = resetbookmarks;
		}
	}
	if (oldonload)
		oldonload(evt);
};
})(window.onload);



/* product search */
(function(oldonload){
window.onload = function(evt) {

var f = document.getElementById('searchbyclass');
if (!f)
	return;

var pclass = f.elements.pclass;
var size = f.elements.size;
var lamp = f.elements.lamp;
var watts = f.elements.watts;

if (!pclass || !size || !lamp || !watts)
	return;

var pn = size.parentNode;
while (pn && pn.tagName != 'DIV')
	pn = pn.parentNode;
if (pn)
	pn.style.display = "block";
pn = watts.parentNode;
while (pn && pn.tagName != 'DIV')
	pn = pn.parentNode;
if (pn)
	pn.style.display = "none";

var cursels = (function (h) {
	var ret = {};
	if (typeof h == "undefined")
		return ret;
	if (h.substr(0, 1) == "#")
		h = h.substr(1);
	if (h == "")
		return ret;
	var a = unescape(h).split("&");
	for (var i = 0; i < a.length; i++) {
		var c = unescape(a[i]);
		var b = c.split("=", 2);
		b[1] = unescape(b[1]);
		ret[b[0]] = b[1];
	}
	return ret;
})(location.hash);

if (typeof cursels["pclass"] == "undefined") {
	var sels = [
		[ "/produkte/led/", 18 ],
		[ "/produkte/hithstqt/", 4 ],
		[ "/produkte/cfl/", 7 ],
		[ "/produkte/cfl-ringmaster/", 20 ],
		[ "/produkte/circolo/", 11 ],
		[ "/produkte/highbay/", 1 ],
		[ "/produkte/square/", 6 ],
		[ "/produkte/t5-high-performance/", 23 ],
		[ "/produkte/t5-vario-system/", 2 ],
		[ "/produkte/t5-mini/", 22 ],

		[ "/products/led/", 18 ],
		[ "/products/hithstqt/", 4 ],
		[ "/products/cfl/", 7 ],
		[ "/products/cfl-ringmaster/", 20 ],
		[ "/products/circolo/", 11 ],
		[ "/products/highbay/", 1 ],
		[ "/products/square/", 6 ],
		[ "/products/t5-high-performance/", 23 ],
		[ "/products/t5-vario-system/", 2 ],
		[ "/products/t5-mini/", 22 ] ];
	var loc = location.pathname;
	if (loc.substr(0, 4) == "/en/" ||
		loc.substr(0, 4) == "/de/")
		loc = loc.substr(3);
	for (var i = 0; i < sels.length; i++) {
		if (loc.substr(0, sels[i][0].length) == sels[i][0]) {
			cursels.pclass = sels[i][1];
			break;
		}
	}
}

if (typeof cursels["pclass"] == "undefined") {
	var s = location.search;
	if (s.substr(0, 1) == "?")
		s = s.substr(1);
	var a = s.split("&");
	for (var i = 0; i < a.length; i++) {
		var b = a[i].split("=", 2);
		cursels[unescape(b[0])] = unescape(b[1]);
	}
}

var onchange = function() {
	var selects = [ 'pclass', 'lamp', 'size' ];
	var so = sopts;

	var sels = [];

	for (var csel = 0; csel < selects.length; csel++) {
		var e = f.elements[selects[csel]];
		if (!e || typeof e.selectedIndex == "undefined")
			return;
		var csi = e.selectedIndex;
		var val = (csi > 0) ? e.options[csi].value : '';
		if (val == '' && typeof cursels[selects[csel]] != "undefined")
			val = cursels[selects[csel]];
		if (val != '')
			sels[sels.length] = esc(selects[csel] + '=' + esc(val));
		if (selects[csel] == 'pclass' && val == '49') {
			selects = [ 'pclass', 'sub', 'lamp1', 'lamp2',
				'lamp3', 'size' ];
			f.elements.lamp.selectedIndex = 0;
			f.elements.lamp.parentNode.style.display = "none";
			f.elements.sub.parentNode.style.display = "block";
			f.elements.lamp1.parentNode.style.display = "block";
			f.elements.lamp2.parentNode.style.display = "block";
			f.elements.lamp3.parentNode.style.display = "block";
			f.elements.size.parentNode.style.display =
				"inline-block";
		} else if (selects[csel] == 'pclass') {
			f.elements.lamp.parentNode.style.display =
				"block";
			f.elements.sub.selectedIndex = 0;
			f.elements.sub.parentNode.style.display = "none";
			f.elements.lamp1.selectedIndex = 0;
			f.elements.lamp1.parentNode.style.display = "none";
			f.elements.lamp2.selectedIndex = 0;
			f.elements.lamp2.parentNode.style.display = "none";
			f.elements.lamp3.selectedIndex = 0;
			f.elements.lamp3.parentNode.style.display = "none";
			f.elements.size.parentNode.style.display = "inline-block";
		}
		while (e.options.length > 1)
			e.options[e.options.length-1] = null;
		var nso = null;
		if (so == null)
			e.disabled = true;
		else {
			e.disabled = false;
			for (var i = 0; i < so.length; i++) {
				e.options[e.options.length] =
					new Option(so[i][1], so[i][0]);
				if (so[i][0] == val ||
					(selects[csel] == 'lamp3' &&
					so.length == 1 &&
					so[i][0] == -1)) {
					e.selectedIndex = e.options.length-1;
					nso = so[i][2];
				}
			}
		}
		so = nso;
	}

	cursels = {};
	location.replace(location.pathname + location.search + "#" + esc(sels.join("&")));
};

pclass.onchange = onchange;
size.onchange = onchange;
lamp.onchange = onchange;

for (var i in {'sub':0, 'lamp1':0, 'lamp2':0, 'lamp3':0}) {
	var e = document.getElementById(i);
	if (!e)
		continue;
	e.onchange = onchange;
}

onchange();

if (oldonload)
	oldonload(evt);

};
})(window.onload);

})();
