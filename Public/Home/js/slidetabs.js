// JavaScript Document
// 首页通栏幻灯片
var slidetabshow;
$('.slidetabs a').click(function(){
    var o = $(this);
    if (!o.hasClass('a_hover')) {
        var id0 = o.parent().find('.a_hover').attr('id');
        var id1 = o.attr('id')
        $('.'+id0).fadeOut(600);
        $('.'+id1).fadeIn(800);
        o.addClass('a_hover').siblings().removeClass('a_hover');
    }
    return false;
});
function slidetabs(){
    var a0 = $('.slidetabs .a_hover');
    var a1 = a0.next();
    if (a1.length == 0) {
        a1 = a0.siblings().first();
    }
    a1.click();
}
$('.slides_img').hover(function(){ clearInterval(slidetabshow); }, function(){ slidetabshow = setInterval(slidetabs, 3500); });
slidetabshow = setInterval(slidetabs, 3500);