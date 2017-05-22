// JavaScript Document
/*
	¿ØÖÆ×ó²àÄ¿Â¼
*/
function m(i) { try { Dd(i).className = 'tab_on'; } catch(e) {} }
function s(i) { try { Dd(i).className = 'side_b'; } catch(e) {} }
function v(i) { if(Dd(i).className == 'side_a') Dd(i).className = 'side_c'; }
function t(i) { if(Dd(i).className == 'side_c') Dd(i).className = 'side_a'; }

function c(i,s) {
	var s = s ? '_'+s : '';
	if(Dd('I_'+i).src.indexOf('arrow_c') == -1) {
		Dd('I_'+i).src = '/Public/Admin/images/arrow_c'+s+'.gif'; Ds('D_'+i);
	} else {
		Dd('I_'+i).src = '/Public/Admin/images/arrow_o'+s+'.gif'; Dh('D_'+i);
	}
	for(var j = 0; j < 16; j++) {
		if(j != i) {
			try {Dd('I_'+j).src = '/Public/Admin/images/arrow_o'+s+'.gif'; Dh('D_'+j);} catch(e) {}
		}
	}
}
