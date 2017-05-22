//导航下拉开始
$(document).ready(function(){
  $('li.main_nav').mousemove(function(){
  $(this).find('ul').slideDown(280);//you can give it a speed
  });
  $('li.main_nav').mouseleave(function(){
  $(this).find('ul').slideUp(280);
  });
  //固定导航条
  $("#navigation_main").scrollFix({zIndex:1000});
});
//导航下拉结束

//漂浮客服开始
lastScrollY = 0;
function FloatScroll() {
    var diffY;
    if (document.documentElement && document.documentElement.scrollTop){
    	diffY = document.documentElement.scrollTop;
	}
    else if (document.body){
    	diffY = document.body.scrollTop;
	}
    else
    {}
    percent = .1 * (diffY - lastScrollY);
    if (percent > 0){
		percent = Math.ceil(percent);
	}
    else{
		percent = Math.floor(percent);
	}
    document.getElementById("online_support_main").style.top = parseInt(document.getElementById("online_support_main").style.top) + percent + "px";
    lastScrollY = lastScrollY + percent;
}

$(function(){
	$("#online_support_main").hover(
		function(){
			$(this).stop(true,false);
			$(this).animate({left:0},200);	
		},
		function(){
			$(this).animate({left:-163},200);	
		}
	)
})

$(function(){
	$(".iHover").hover(
		function(){
			$(this).addClass("iShow");
		},function(){
			$(this).removeClass("iShow");
		}
	);
});

//漂浮客服结束

//产品

$.fn.extend({     
   AdAdvance:function(){
	var listobj=this;
        var objs =$('dt',this);
	var view =objs.length-1;//parseInt( Math.random()*objs.length);
	objs.each(function(i){
	$(this).mouseover(function(){ $('dd',listobj).hide();$('.dropList-hover',listobj).attr("class",""); $(this).children("p").attr("class","dropList-hover");$(this).next().show()})
	if(i!=view)
	{
		$(this).next().hide();
	}
	else
	{
		$(this).next().show();
		$(this).children("p").attr("class","dropList-hover");
	}
	});
    }
}); 

//获取get参数
function getPar(par){
     //获取当前URL
     var local_url = document.location.href;
     //获取要取得的get参数位置
     var get = local_url.indexOf(par +"=");
     if(get == -1){
         return false;  
     }  
     //截取字符串
     var get_par = local_url.slice(par.length + get + 1);   
     //判断截取后的字符串是否还有其他get参数
     var nextPar = get_par.indexOf("&");
     if(nextPar != -1){
         get_par = get_par.slice(0, nextPar);
     }
     return get_par;
 }
 
function checkbrowser(){
	if($.browser.msie) { 
		alert("无法在IE浏览器中正常体验手机网站，建议使用Firefox、Chrome、Opera、搜狗、360浏览器，或直接使用手机扫描二维码浏览！"); 
		return false;
	}
	return true;
}
 
 //scrool插件
;(function($) {
	$.fn.scrollFix = function(options) {
		return this.each(function() {
			var opts = $.extend({}, $.fn.scrollFix.defaultOptions, options);
			var obj = $(this),
				base = this,
				selfTop = 0,
				selfLeft = 0,
				toTop = 0,
				parentOffsetLeft = 0,
				parentOffsetTop = 0,
				outerHeight,
				outerWidth,
				objWidth = 0,
				placeholder = jQuery('<div>'), //创建一个jquery对象
				optsTop = opts.distanceTop, //定义到顶部的高度
				endfix = 0; //开始停止固定的位置

			var originalPosition;
			var originalOffsetTop;
			var originalZIndex;
			var lastOffsetLeft = -1;
			var isUnfixed = true;
			//如果没有找到节点，不进行处理
			if (obj.length <= 0) {
				return;
			}
			if (lastOffsetLeft == -1) {
				originalZIndex = obj.css('z-index');
				position = obj.css('position');
				originalPosition = obj.css('position');

				originalOffsetTop = obj.css('top');
			}

			var zIndex = obj.css('zIndex');
			if (opts.zIndex != 0) {
				zIndex = opts.zIndex;
			}
			//获取相对定位或者绝对定位的父类
			var parents = obj.parent();
			var Position = parents.css('position');
			while (!/^relative|absolute$/i.test(Position)) { //检测浮动元素的父类元素定位为'relative'或者'absolute',是的话退出，否则的话，执行循环，继续寻找它的父类
				parents = parents.parent();
				Position = parents.css('position');
				if (/^body|html$/i.test(parents[0].tagName)) break; //假如父类元素的标签为body或者HTML，说明没有找到父类为以上的定位，退出循环
			}

			var ie6 = !-[1, ] && !window.XMLHttpRequest; //兼容IE6
			var resizeWindow = false;

			function resetScroll() {
				setUnfixed();
				selfTop = obj.offset().top; //对象距离顶部高度
				selfLeft = obj.offset().left; //对象距离左边宽度
				outerHeight = obj.outerHeight(); //对象高度
				outerHeight = parseFloat(outerHeight) + parseFloat(obj.css('marginBottom').replace(/auto/, 0));
				outerWidth = obj.outerWidth(); //对象外宽度
				objWidth = obj.width();
				var documentHeight = $(document).height(); //文档高度
				var startTop = $(opts.startTop), //开始浮动固定对象
					startBottom = $(opts.startBottom),
					toBottom, //停止滚动位置距离底部的高度
					ScrollHeight; //对象滚动的高度

				//计算父类偏移值
				if (/^body|html$/i.test(parents[0].tagName)) { //当父类元素非body或者HTML时，说明找到了一个父类为'relative'或者'absolute'的元素，得出它的偏移高度
					parentOffsetTop = 0, parentOffsetLeft = 0;
				} else {
					parentOffsetLeft = parents.offset().left, parentOffsetTop = parents.offset().top;
				}

				// 计算父节点的上边到顶部距离
				// 如果 body 有 top 属性, 消除这些位移
				var bodyToTop = parseInt(jQuery('body').css('top'), 10);
				if (!isNaN(bodyToTop)) {
					optsTop += bodyToTop;
				}
				//计算停在底部的距离
				if (!isNaN(opts.endPos)) {
					toBottom = opts.endPos;
				} else {
					toBottom = parseFloat(documentHeight - $(opts.endPos).offset().top);
				}
				//计算需要滚动的高度以及停止滚动的高度
				ScrollHeight = parseFloat(documentHeight - toBottom - optsTop), endfix = parseFloat(ScrollHeight - outerHeight);
				//计算顶部的距离值
				if (startTop[0]) {
					var startTopOffset = startTop.offset(),
						startTopPos = startTopOffset.top;
					selfTop = startTopPos;
				}
				if (startBottom[0]) {
					var startBottomOffset = startBottom.offset(),
						startBottomPos = startBottomOffset.top,
						startBottomHeight = startBottom.outerHeight();
					selfTop = parseFloat(startBottomPos + startBottomHeight);
				}

				toTop = selfTop - optsTop;
				toTop = (toTop > 0) ? toTop : 0;

				var selfBottom = documentHeight - selfTop - outerHeight;
				//如果滚动停在底部的值不为0，并且自身到底部的高度小于上面这个值，不执行浮动固定
				if ((toBottom != 0) && (selfBottom <= toBottom)) {
					return;
				}

			}
			function setUnfixed() {
				if (!isUnfixed) {
					lastOffsetLeft = -1;
					placeholder.css("display", "none");
					obj.css({
						'z-index': originalZIndex,
						'width': '',
						'position': originalPosition,
						'left': '',
						'top': originalOffsetTop,
						'margin-left': ''
					});
					obj.removeClass('scrollfixed');
					isUnfixed = true;
				}
			}

			function onScroll() {
				lastOffsetLeft = 1;
				var ScrollTop = $(window).scrollTop();
				if (opts.bottom != -1) {
					ScrollTop = ScrollTop + $(window).height() - outerHeight - opts.bottom;
				}
				if (ScrollTop > toTop && (ScrollTop < endfix)) {
					if (ie6) { //IE6则使用这个样式
						obj.addClass(opts.baseClassName).css({
							"z-index": zIndex,
							"position": "absolute",
							"top": opts.bottom == -1 ? ScrollTop + optsTop - parentOffsetTop : ScrollTop - parentOffsetTop,
							"bottom": 'auto',
							"left": selfLeft - parentOffsetLeft,
							'width': objWidth
						})
					} else {
						obj.addClass(opts.baseClassName).css({
							"z-index": zIndex,
							"position": "fixed",
							"top": opts.bottom == -1 ? optsTop : '',
							"bottom": opts.bottom == -1 ? '' : opts.bottom,
							"left": selfLeft,
							"width": objWidth
						});
					}
					placeholder.css({
						'height': outerHeight,
						'width': outerWidth,
						'display': 'block'
					}).insertBefore(obj);
				} else if (ScrollTop >= endfix) {
					obj.addClass(opts.baseClassName).css({
						"z-index": zIndex,
						"position": "absolute",
						"top": endfix - parentOffsetTop + optsTop,
						'bottom': '',
						"left": selfLeft - parentOffsetLeft,
						"width": objWidth
					});
					placeholder.css({
						'height': outerHeight,
						'width': outerWidth,
						'display': 'block'
					}).insertBefore(obj)
				} else {
					obj.removeClass(opts.baseClassName).css({
						"z-index": originalZIndex,
						"position": "static",
						"top": "",
						"bottom": "",
						"left": ""
					});
					placeholder.remove()
				}
			}
			var Timer = 0;
			// if (isUnfixed) {
			resetScroll();
			// }
			$(window).on("scroll", function() {
				if (Timer) {
					clearTimeout(Timer);
				}
				Timer = setTimeout(onScroll, 0);
			});
			// 当发现调整屏幕大小时，重新执行代码
			$(window).on("resize", function() {
				if (Timer) {
					clearTimeout(Timer);
				}
				Timer = setTimeout(function() {
					isUnfixed = false;
					resetScroll();
					onScroll();
				}, 0);
			});
		})
	}
	$.fn.scrollFix.defaultOptions = {
		startTop: null, //滑到这个位置顶部时开始浮动，默认为空
		startBottom: null, //滑到这个位置末端开始浮动，默认为空
		distanceTop: 0, //固定在顶部的高度
		endPos: 0, //停靠在底部的位置，可以为jquery对象
		bottom: -1, //底部位置
		zIndex: 0, //z-index值
		baseClassName: 'scrollfixed' //开始固定时添加的类
	};
})(jQuery);

/*! 2012-01-28 v1.6.1	target参数支持funtion类型，以实现类似动态Ajax地址功能*/
(function($) {
	$.fn.powerFloat = function(options) {
		return $(this).each(function() {
			var s = $.extend({}, defaults, options || {});
			var init = function(pms, trigger) {
				if (o.target && o.target.css("display") !== "none") {
					o.targetHide();
				}		
				o.s = pms;
				o.trigger = trigger;				
			}, hoverTimer;

			switch (s.eventType) {
				case "hover": {
					$(this).hover(function() {					
						if (o.timerHold) {
							o.flagDisplay = true;
						}
												
						var numShowDelay = parseInt(s.showDelay, 10);
						
						init(s, $(this));
						//鼠标hover延时
						if (numShowDelay) {
							if (hoverTimer) {
								clearTimeout(hoverTimer);
							}
							hoverTimer = setTimeout(function() {
								o.targetGet.call(o);
							}, numShowDelay);	
						} else {
							o.targetGet();	
						}
					}, function() {
						if (hoverTimer) {
							clearTimeout(hoverTimer);
						}
						if (o.timerHold) {
							clearTimeout(o.timerHold);	
						}

						o.flagDisplay = false;

						o.targetHold();
					});
					if (s.hoverFollow) {
						//鼠标跟随	
						$(this).mousemove(function(e) {
							o.cacheData.left = e.pageX;
							o.cacheData.top = e.pageY;
							o.targetGet.call(o);
							return false;
						});
					}
					break;	
				}
				case "click": {
					$(this).click(function(e) {
						if (o.display && o.trigger && e.target === o.trigger.get(0)) {
							o.flagDisplay = false;	
							o.displayDetect();
						} else {
							init(s, $(this));		
							o.targetGet();
								
							if (!$(document).data("mouseupBind")) {
								$(document).bind("mouseup", function(e) {
									var flag = false;
									if (o.trigger) {
										var idTarget = o.target.attr("id");
										if (!idTarget) {
											idTarget = "R_" + Math.random();
											o.target.attr("id", idTarget);
										}
										$(e.target).parents().each(function() {
											if ($(this).attr("id") === idTarget) {
												flag = true;
											}
										});
										if (s.eventType === "click" && o.display && e.target != o.trigger.get(0) && !flag) {
											o.flagDisplay = false;	
											o.displayDetect();
										}
									}
									return false;
								}).data("mouseupBind", true);
							}
						}						
					});

					break;
				}
				case "focus": {
					$(this).focus(function() {
						var self = $(this);
						setTimeout(function() {
							init(s, self);
							o.targetGet();	
						}, 200);
					}).blur(function() {
						o.flagDisplay = false;
						setTimeout(function() {
							o.displayDetect();
						}, 190);
					});	
					break;
				}
				default: {
					init(s, $(this));
					o.targetGet();
					// 放置页面点击后显示的浮动内容隐掉
					$(document).unbind("mouseup").data("mouseupBind", false);
				}
			}
		});
	};
	
	var o = {
		targetGet: function() {
			//一切显示的触发来源
			if (!this.trigger) { return this; }
			var attr = this.trigger.attr(this.s.targetAttr), target = typeof this.s.target == "function"? this.s.target.call(this.trigger): this.s.target;

			switch (this.s.targetMode) {
				case "common": {
					if (target) {
						var type = typeof(target);
						if (type === "object") {
							if (target.size()) {
								o.target = target.eq(0);
							}
						} else if (type === "string") {
							if ($(target).size()) {
								o.target = $(target).eq(0);
							}	
						}
					} else {
						if (attr && $("#" + attr).size()) {
							o.target = $("#" + attr);
						}
					}
					if (o.target) {
						o.targetShow();
					} else {
						return this;	
					}
					
					break;
				}
				case "ajax": {
					//ajax元素，如图片，页面地址
					var url = target || attr;
					this.targetProtect = false;
					
					if (!url) { return; }
					//by wang 不是图片，不预览
					if (!/(\.jpg|\.png|\.gif|\.bmp|\.jpeg|\.tiff|\.tif)$/i.test(url)) {
						return;
					}
					
					if (!o.cacheData[url]) {
						o.loading();
					}
					
					//优先认定为图片加载
					var tempImage = new Image();
						
					tempImage.onload = function() {
						var w = tempImage.width, h = tempImage.height;
						var winw = $(window).width(), winh = $(window).height();
						var imgScale = w / h, winScale = winw / winh;
						if (imgScale > winScale) {
							//图片的宽高比大于显示屏幕
							if (w > winw / 2) {
								w = winw / 2;
								h = w / imgScale;	
							}
						} else {
							//图片高度较高
							if (h > winh / 2) {
								h = winh / 2;
								w = h * imgScale;
							}
						}
						var imgHtml = '<img class="float_ajax_image" src="' + url + '" width="' + w + '" height = "' + h + '" />';
						o.cacheData[url] = true;
						o.target = $(imgHtml);
						o.targetShow();
					};
					tempImage.onerror = function() {
						//如果图片加载失败，两种可能，一是100%图片，则提示；否则作为页面加载
						if (/(\.jpg|\.png|\.gif|\.bmp|\.jpeg)$/i.test(url)) {
							o.target = $('<div class="float_ajax_error">图片加载失败。</div>');
							o.targetShow();
						} else {
							$.ajax({
								url: url,
								success: function(data) {
									if (typeof(data) === "string") {
										o.cacheData[url] = true;
										o.target = $('<div class="float_ajax_data">' + data + '</div>');
										o.targetShow();
									}
								},
								error: function() {
									o.target = $('<div class="float_ajax_error">数据没有加载成功。</div>');
									o.targetShow();
								}
							});
						}
					};
					tempImage.src = url;
					
					break;
				}
				case "list": {
					//下拉列表
					var targetHtml = '<ul class="float_list_ul">',  arrLength;
					if ($.isArray(target) && (arrLength = target.length)) {
						$.each(target, function(i, obj) {
							var list = "", strClass = "", text, href;
							if (i === 0) {
								strClass = ' class="float_list_li_first"';
							}
							if (i === arrLength - 1) {
								strClass = ' class="float_list_li_last"';	
							}
							if (typeof(obj) === "object" && (text = obj.text.toString())) {
								if (href = (obj.href || "javascript:")) {
									list = '<a href="' + href + '" class="float_list_a">' + text + '</a>';	
								} else {
									list = text;	
								}
							} else if (typeof(obj) === "string" && obj) {
								list = obj;
							}
							if (list) {
								targetHtml += '<li' + strClass + '>' + list + '</li>';	
							}
						});
					} else {
						targetHtml += '<li class="float_list_null">列表无数据。</li>';	
					}
					targetHtml += '</ul>';
					o.target = $(targetHtml);
					this.targetProtect = false;	
					o.targetShow();	
					break;	
				}
				case "remind": {
					//内容均是字符串
					var strRemind = target || attr;
					this.targetProtect = false;	
					if (typeof(strRemind) === "string") {
						o.target = $('<span>' + strRemind + '</span>');
						o.targetShow();	
					}
					break;
				}
				default: {
					var objOther = target || attr, type = typeof(objOther);
					if (objOther) {
						if (type === "string") {
							//选择器
							if (/^.[^:#\[\.,]*$/.test(objOther)) {
								if ($(objOther).size()) {
									o.target = $(objOther).eq(0);
									this.targetProtect = true;	
								} else if ($("#" + objOther).size()) {
									o.target = $("#" + objOther).eq(0);
									this.targetProtect = true;
								} else {
									o.target = $('<div>' + objOther + '</div>');
									this.targetProtect = false;		
								}
							} else {
								o.target = $('<div>' + objOther + '</div>');
								this.targetProtect = false;
							}
							
							o.targetShow();	
						} else if (type === "object") {
							if (!$.isArray(objOther) && objOther.size()) {
								o.target = objOther.eq(0);
								this.targetProtect = true;
								o.targetShow();	
							}
						}
					}
				}
			}
			return this;
		},
		container: function() {
			//容器(如果有)重装target
			var cont = this.s.container, mode = this.s.targetMode || "mode";
			if (mode === "ajax" || mode === "remind") {
				//显示三角
				this.s.sharpAngle = true;	
			} else {
				this.s.sharpAngle = false;
			}
			//是否反向
			if (this.s.reverseSharp) {
				this.s.sharpAngle = !this.s.sharpAngle;	
			}
			
			if (mode !== "common") {
				//common模式无新容器装载
				if (cont === null) {
					cont = "plugin";	
				} 
				if ( cont === "plugin" ) {
					if (!$("#floatBox_" + mode).size()) {
						$('<div id="floatBox_' + mode + '" class="float_' + mode + '_box"></div>').appendTo($("body")).hide();
					}
					cont = $("#floatBox_" + mode);	
				} 
				
				if (cont && typeof(cont) !== "string" && cont.size()) {
					if (this.targetProtect) {
						o.target.show().css("position", "static");
					}
					o.target = cont.empty().append(o.target);
				}
			}
			return this;
		},
		setWidth: function() {
			var w = this.s.width;
			if (w === "auto") {
				if (this.target.get(0).style.width) {
					this.target.css("width", "auto");	
				}
			} else if (w === "inherit") {
				this.target.width(this.trigger.width());
			} else {
				this.target.css("width", w);	
			}
			return this;
		},
		position: function() {
			if (!this.trigger || !this.target) {
				return this;
			}
			var pos, tri_h = 0, tri_w = 0, cor_w = 0, cor_h = 0, tri_l, tri_t, tar_l, tar_t, cor_l, cor_t,
				tar_h = this.target.data("height"), tar_w = this.target.data("width"),
				st = $(window).scrollTop(),
				
				off_x = parseInt(this.s.offsets.x, 10) || 0, off_y = parseInt(this.s.offsets.y, 10) || 0,
				mousePos = this.cacheData;

			//缓存目标对象高度，宽度，提高鼠标跟随时显示性能，元素隐藏时缓存清除
			if (!tar_h) {
				tar_h = this.target.outerHeight();
				if (this.s.hoverFollow) {
					this.target.data("height", tar_h);
				}
			}
			if (!tar_w) {
				tar_w = this.target.outerWidth();
				if (this.s.hoverFollow) {
					this.target.data("width", tar_w);
				}
			}
			
			pos = this.trigger.offset();
			tri_h = this.trigger.outerHeight();
			tri_w = this.trigger.outerWidth();
			tri_l = pos.left;
			tri_t = pos.top;
			
			var funMouseL = function() {
				if (tri_l < 0) {
					tri_l = 0;
				} else if (tri_l + tri_h > $(window).width()) {
					tri_l = $(window).width() - tri_w;	
				}
			}, funMouseT = function() {
				if (tri_t < 0) {
					tri_t = 0;
				} else if (tri_t + tri_h > $(document).height()) {
					tri_t = $(document).height() - tri_h;
				}
			};
			//如果是鼠标跟随
			if (this.s.hoverFollow && mousePos.left && mousePos.top) {
				if (this.s.hoverFollow === "x") {
					//水平方向移动，说明纵坐标固定
					tri_l = mousePos.left
					funMouseL();
				} else if (this.s.hoverFollow === "y") {
					//垂直方向移动，说明横坐标固定，纵坐标跟随鼠标移动
					tri_t = mousePos.top;
					funMouseT();
				} else {
					tri_l = mousePos.left;
					tri_t = mousePos.top;
					funMouseL();
					funMouseT();
				}	
			}	
			
			
			var arrLegalPos = ["4-1", "1-4", "5-7", "2-3", "2-1", "6-8", "3-4", "4-3", "8-6", "1-2", "7-5", "3-2"],
				align = this.s.position, alignMatch = false, strDirect;
			$.each(arrLegalPos, function(i, n) {
				if (n === align) {
					alignMatch = true;	
					return;
				}
			});
			if (!alignMatch) {
				align = "4-1";
			}
			
			var funDirect = function(a) {
				var dir = "bottom";
				//确定方向
				switch (a) {
					case "1-4": case "5-7": case "2-3": {
						dir = "top";
						break;
					}
					case "2-1": case "6-8": case "3-4": {
						dir = "right";
						break;
					}
					case "1-2": case "8-6": case "4-3": {
						dir = "left";
						break;
					}
					case "4-1": case "7-5": case "3-2": {
						dir = "bottom";
						break;
					}
				}
				return dir;
			};
			
			//居中判断
			var funCenterJudge = function(a) {
				if (a === "5-7" || a === "6-8" || a === "8-6" || a === "7-5") {
					return true;
				}
				return false;
			};
			
			var funJudge = function(dir) {
				var totalHeight = 0, totalWidth = 0, flagCorner = (o.s.sharpAngle && o.corner) ? true: false;
				if (dir === "right") {
					totalWidth = tri_l + tri_w + tar_w + off_x;
					if (flagCorner) {
						totalWidth += o.corner.width();
					}	
					if (totalWidth > $(window).width()) {
						return false;	
					}
				} else if (dir === "bottom") {
					totalHeight = tri_t + tri_h + tar_h + off_y;
					if (flagCorner) {
						totalHeight += 	o.corner.height();
					}
					if (totalHeight > st + $(window).height()) {
						return false;	
					}
				} else if (dir === "top") {
					totalHeight = tar_h + off_y;
					if (flagCorner) {
						totalHeight += 	o.corner.height();
					}
					if (totalHeight > tri_t - st) {
						return false;	
					} 
				} else if (dir === "left") {
					totalWidth = tar_w + off_x;
					if (flagCorner) {
						totalWidth += o.corner.width();
					}
					if (totalWidth > tri_l) {
						return false;	
					}
				}
				return true;
			};
			//此时的方向
			strDirect = funDirect(align);

			if (this.s.sharpAngle) {
				//创建尖角
				this.createSharp(strDirect);
			}
			
			//边缘过界判断
			if (this.s.edgeAdjust) {
				//根据位置是否溢出显示界面重新判定定位
				if (funJudge(strDirect)) {
					//该方向不溢出
					(function() {
						if (funCenterJudge(align)) { return; }
						var obj = {
							top: {
								right: "2-3",
								left: "1-4"	
							},
							right: {
								top: "2-1",
								bottom: "3-4"
							},
							bottom: {
								right: "3-2",
								left: "4-1"	
							},
							left: {
								top: "1-2",
								bottom: "4-3"	
							}
						};
						var o = obj[strDirect], name;
						if (o) {
							for (name in o) {
								if (!funJudge(name)) {
									align = o[name];
								}
							}
						}
					})();
				} else {
					//该方向溢出
					(function() {
						if (funCenterJudge(align)) { 
							var center = {
								"5-7": "7-5",
								"7-5": "5-7",
								"6-8": "8-6",
								"8-6": "6-8"
							};
							align = center[align];
						} else {
							var obj = {
								top: {
									left: "3-2",
									right: "4-1"	
								},
								right: {
									bottom: "1-2",
									top: "4-3"
								},
								bottom: {
									left: "2-3",
									right: "1-4"
								},
								left: {
									bottom: "2-1",
									top: "3-4"
								}
							};
							var o = obj[strDirect], arr = [];
							for (name in o) {
								arr.push(name);
							}
							if (funJudge(arr[0]) || !funJudge(arr[1])) {
								align = o[arr[0]];
							} else {
								align = o[arr[1]];	
							}
						}
					})();
				}
			}
			
			//已确定的尖角
			var strNewDirect = funDirect(align), strFirst = align.split("-")[0];
			if (this.s.sharpAngle) {
				//创建尖角
				this.createSharp(strNewDirect);
				cor_w = this.corner.width(), cor_h = this.corner.height();
			}

			//确定left, top值
			if (this.s.hoverFollow) {
				//如果鼠标跟随
				if (this.s.hoverFollow === "x") {
					//仅水平方向跟随
					tar_l = tri_l + off_x;
					if (strFirst === "1" || strFirst === "8" || strFirst === "4" ) {
						//最左
						tar_l = tri_l - (tar_w - tri_w) / 2 + off_x;
					} else {
						//右侧
						tar_l = tri_l - (tar_w - tri_w) + off_x;
					}
					
					//这是垂直位置，固定不动
					if (strFirst === "1" || strFirst === "5" || strFirst === "2" ) {
						tar_t = tri_t - off_y - tar_h - cor_h;
						//尖角
						cor_t = tri_t - cor_h - off_y - 1;
						
					} else {
						//下方
						tar_t = tri_t + tri_h + off_y + cor_h;
						cor_t = tri_t + tri_h + off_y + 1;
					}
					cor_l = pos.left - (cor_w - tri_w) / 2;
				} else if (this.s.hoverFollow === "y") {
					//仅垂直方向跟随
					if (strFirst === "1" || strFirst === "5" || strFirst === "2" ) {
						//顶部
						tar_t = tri_t - (tar_h - tri_h) / 2 + off_y;
					} else {
						//底部
						tar_t = tri_t - (tar_h - tri_h) + off_y;
					}
							
					if (strFirst === "1" || strFirst === "8" || strFirst === "4" ) {
						//左侧
						tar_l = tri_l - tar_w - off_x - cor_w;
						cor_l = tri_l - cor_w - off_x - 1;
					} else {
						//右侧
						tar_l = tri_l + tri_w - off_x + cor_w;
						cor_l = tri_l + tri_w + off_x + 1;
					}
					cor_t = pos.top - (cor_h - tri_h) / 2;
				} else {
					tar_l = tri_l + off_x;
					tar_t = tri_t + off_y;	
				}
				
			} else {
				switch (strNewDirect) {
					case "top": {
						tar_t = tri_t - off_y - tar_h - cor_h;
						if (strFirst == "1") {
							tar_l = tri_l - off_x;	
						} else if (strFirst === "5") {
							tar_l = tri_l - (tar_w - tri_w) / 2 - off_x;
						} else {
							tar_l = tri_l - (tar_w - tri_w) - off_x;
						}
						cor_t = tri_t - cor_h - off_y - 1;
						cor_l = tri_l - (cor_w - tri_w) / 2;
						break;
					}
					case "right": {
						tar_l = tri_l + tri_w + off_x + cor_w;
						if (strFirst == "2") {
							tar_t = tri_t + off_y;	
						} else if (strFirst === "6") {
							tar_t = tri_t - (tar_h - tri_h) / 2 + off_y;
						} else {
							tar_t = tri_t - (tar_h - tri_h) + off_y;
						}
						cor_l = tri_l + tri_w + off_x + 1;
						cor_t = tri_t - (cor_h - tri_h) / 2;
						break;
					}
					case "bottom": {
						tar_t = tri_t + tri_h + off_y + cor_h;
						if (strFirst == "4") {
							tar_l = tri_l + off_x;	
						} else if (strFirst === "7") {
							tar_l = tri_l - (tar_w - tri_w) / 2 + off_x;
						} else {
							tar_l = tri_l - (tar_w - tri_w) + off_x;
						}
						cor_t = tri_t + tri_h + off_y + 1;
						cor_l = tri_l - (cor_w - tri_w) / 2;
						break;
					}
					case "left": {
						tar_l = tri_l - tar_w - off_x - cor_w;
						if (strFirst == "2") {
							tar_t = tri_t - off_y;	
						} else if (strFirst === "6") {
							tar_t = tri_t - (tar_w - tri_w) / 2 - off_y;
						} else {
							tar_t = tri_t - (tar_h - tri_h) - off_y;
						}
						cor_l = tar_l + cor_w;
						cor_t = tri_t - (tar_w - cor_w) / 2;
						break;
					}
				}
			}
			//尖角的显示
			if (cor_h && cor_w && this.corner) {
				this.corner.css({
					left: cor_l,
					top: cor_t,
					zIndex: this.s.zIndex + 1	
				});
			}
			//浮动框显示
			this.target.css({
				position: "absolute",
				left: tar_l,
				top: tar_t,
				zIndex: this.s.zIndex
			});
			return this;
		},
		createSharp: function(dir) {
			var bgColor, bdColor, color1 = "", color2 = "";
			var objReverse = {
				left: "right",
				right: "left",
				bottom: "top",
				top: "bottom"	
			}, dirReverse = objReverse[dir] || "top";
			
			if (this.target) {
				bgColor = this.target.css("background-color");
				if (parseInt(this.target.css("border-" + dirReverse + "-width")) > 0) {
					bdColor = this.target.css("border-" + dirReverse + "-color");
				} 
				
				if (bdColor &&  bdColor !== "transparent") {
					color1 = 'style="color:' + bdColor + ';"';
				} else {
					color1 = 'style="display:none;"';
				}
				if (bgColor && bgColor !== "transparent") {
					color2 = 'style="color:' + bgColor + ';"';
				}else {
					color2 = 'style="display:none;"';
				}
			}
			
			var html = '<div id="floatCorner_' + dir + '" class="float_corner float_corner_' + dir + '">' +
					'<span class="corner corner_1" ' + color1 + '>◆</span>' +
					'<span class="corner corner_2" ' + color2 + '>◆</span>' +
				'</div>';
			if (!$("#floatCorner_" + dir).size()) {
				$("body").append($(html));	
			}
			this.corner = $("#floatCorner_" + dir);
			return this;
		},
		targetHold: function() {
			if (this.s.hoverHold) {	
				var delay = parseInt(this.s.hideDelay, 10) || 200;
				if (this.target) {
					this.target.hover(function() {
						o.flagDisplay = true;
					}, function() {
						if (o.timerHold) {
							clearTimeout(o.timerHold);	
						}
						o.flagDisplay = false;
						o.targetHold();	
					});
				}
				
				o.timerHold = setTimeout(function() {
					o.displayDetect.call(o);	
				}, delay);
			} else {
				this.displayDetect();	
			}
			return this;
		},
		loading: function() {
			this.target = $('<div class="float_loading"></div>');
			this.targetShow();
			this.target.removeData("width").removeData("height");
			return this;
		},
		displayDetect: function() {
			//显示与否检测与触发
			if (!this.flagDisplay && this.display) {
				this.targetHide();
				this.timerHold = null;
			}
			return this;
		},
		targetShow: function() {
			o.cornerClear();
			this.display = true;
			this.container().setWidth().position();
			this.target.show();
			if ($.isFunction(this.s.showCall)) {
				this.s.showCall.call(this.trigger, this.target);	
			}
			return this;
		},
		targetHide: function() {
			this.display = false;
			this.targetClear();
			this.cornerClear();
			if ($.isFunction(this.s.hideCall)) {
				this.s.hideCall.call(this.trigger);	
			}
			this.target = null;
			this.trigger = null;
			this.s = {};
			this.targetProtect = false;
			return this;
		},
		targetClear: function() {
			if (this.target) {
				if (this.target.data("width")) {
					this.target.removeData("width").removeData("height");	
				}
				if (this.targetProtect) {
					//保护孩子
					this.target.children().hide().appendTo($("body"));
				} 
				this.target.unbind().hide();
			}
		},
		cornerClear: function() {
			if (this.corner) {
				//使用remove避免潜在的尖角颜色冲突问题
				this.corner.remove();
			}
		},
		target: null,
		trigger: null,
		s: {},
		cacheData: {},
		targetProtect: false
	};
	
	$.powerFloat = {};
	$.powerFloat.hide = function() {
		o.targetHide();	
	};
	
	var defaults  = {
		width: "auto", //可选参数：inherit，数值(px)
		offsets: {x: 0,y: 0	},
		zIndex: 999,
		
		eventType: "hover", //事件类型，其他可选参数有：click, focus
		
		showDelay: 0, //鼠标hover显示延迟
		hideDelay: 0, //鼠标移出隐藏延时
		
		hoverHold: true,
		hoverFollow: false, //true或是关键字x, y
		
		targetMode: "common", //浮动层的类型，其他可选参数有：ajax, list, remind
		target: null, //target对象获取来源，优先获取，如果为null，则从targetAttr中获取。
		targetAttr: "rel", //target对象获取来源，当targetMode为list时无效
		
		container: null, //转载target的容器，可以使用"plugin"关键字，则表示使用插件自带容器类型
		reverseSharp: false, //是否反向小三角的显示，默认ajax, remind是显示三角的，其他如list和自定义形式是不显示的
		
		position: "4-1", //trigger-target
		edgeAdjust: true, //边缘位置自动调整
		
		showCall: $.noop,
		hideCall: $.noop

	};
})(jQuery);


/*!SuperSlide v2.1.1 开始*/
!function(a){a.fn.slide=function(b){return a.fn.slide.defaults={type:"slide",effect:"fade",autoPlay:!1,delayTime:500,interTime:2500,triggerTime:150,defaultIndex:0,titCell:".hd li",mainCell:".bd",targetCell:null,trigger:"mouseover",scroll:1,vis:1,titOnClassName:"on",autoPage:!1,prevCell:".prev",nextCell:".next",pageStateCell:".pageState",opp:!1,pnLoop:!0,easing:"swing",startFun:null,endFun:null,switchLoad:null,playStateCell:".playState",mouseOverStop:!0,defaultPlay:!0,returnDefault:!1},this.each(function(){var c=a.extend({},a.fn.slide.defaults,b),d=a(this),e=c.effect,f=a(c.prevCell,d),g=a(c.nextCell,d),h=a(c.pageStateCell,d),i=a(c.playStateCell,d),j=a(c.titCell,d),k=j.size(),l=a(c.mainCell,d),m=l.children().size(),n=c.switchLoad,o=a(c.targetCell,d),p=parseInt(c.defaultIndex),q=parseInt(c.delayTime),r=parseInt(c.interTime);parseInt(c.triggerTime);var Q,t=parseInt(c.scroll),u=parseInt(c.vis),v="false"==c.autoPlay||0==c.autoPlay?!1:!0,w="false"==c.opp||0==c.opp?!1:!0,x="false"==c.autoPage||0==c.autoPage?!1:!0,y="false"==c.pnLoop||0==c.pnLoop?!1:!0,z="false"==c.mouseOverStop||0==c.mouseOverStop?!1:!0,A="false"==c.defaultPlay||0==c.defaultPlay?!1:!0,B="false"==c.returnDefault||0==c.returnDefault?!1:!0,C=0,D=0,E=0,F=0,G=c.easing,H=null,I=null,J=null,K=c.titOnClassName,L=j.index(d.find("."+K)),M=p=-1==L?p:L,N=p,O=p,P=m>=u?0!=m%t?m%t:t:0,R="leftMarquee"==e||"topMarquee"==e?!0:!1,S=function(){a.isFunction(c.startFun)&&c.startFun(p,k,d,a(c.titCell,d),l,o,f,g)},T=function(){a.isFunction(c.endFun)&&c.endFun(p,k,d,a(c.titCell,d),l,o,f,g)},U=function(){j.removeClass(K),A&&j.eq(N).addClass(K)};if("menu"==c.type)return A&&j.removeClass(K).eq(p).addClass(K),j.hover(function(){Q=a(this).find(c.targetCell);var b=j.index(a(this));I=setTimeout(function(){switch(p=b,j.removeClass(K).eq(p).addClass(K),S(),e){case"fade":Q.stop(!0,!0).animate({opacity:"show"},q,G,T);break;case"slideDown":Q.stop(!0,!0).animate({height:"show"},q,G,T)}},c.triggerTime)},function(){switch(clearTimeout(I),e){case"fade":Q.animate({opacity:"hide"},q,G);break;case"slideDown":Q.animate({height:"hide"},q,G)}}),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(U,q)}),void 0;if(0==k&&(k=m),R&&(k=2),x){if(m>=u)if("leftLoop"==e||"topLoop"==e)k=0!=m%t?(0^m/t)+1:m/t;else{var V=m-u;k=1+parseInt(0!=V%t?V/t+1:V/t),0>=k&&(k=1)}else k=1;j.html("");var W="";if(1==c.autoPage||"true"==c.autoPage)for(var X=0;k>X;X++)W+="<li>"+(X+1)+"</li>";else for(var X=0;k>X;X++)W+=c.autoPage.replace("$",X+1);j.html(W);var j=j.children()}if(m>=u){l.children().each(function(){a(this).width()>E&&(E=a(this).width(),D=a(this).outerWidth(!0)),a(this).height()>F&&(F=a(this).height(),C=a(this).outerHeight(!0))});var Y=l.children(),Z=function(){for(var a=0;u>a;a++)Y.eq(a).clone().addClass("clone").appendTo(l);for(var a=0;P>a;a++)Y.eq(m-a-1).clone().addClass("clone").prependTo(l)};switch(e){case"fold":l.css({position:"relative",width:D,height:C}).children().css({position:"absolute",width:E,left:0,top:0,display:"none"});break;case"top":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({top:-(p*t)*C,position:"relative",padding:"0",margin:"0"}).children().css({height:F});break;case"left":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:m*D,left:-(p*t)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0"}).children().css({"float":"left",width:E});break;case"leftLoop":case"leftMarquee":Z(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:(m+u+P)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0",left:-(P+p*t)*D}).children().css({"float":"left",width:E});break;case"topLoop":case"topMarquee":Z(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({height:(m+u+P)*C,position:"relative",padding:"0",margin:"0",top:-(P+p*t)*C}).children().css({height:F})}}var $=function(a){var b=a*t;return a==k?b=m:-1==a&&0!=m%t&&(b=-m%t),b},_=function(b){var c=function(c){for(var d=c;u+c>d;d++)b.eq(d).find("img["+n+"]").each(function(){var b=a(this);if(b.attr("src",b.attr(n)).removeAttr(n),l.find(".clone")[0])for(var c=l.children(),d=0;d<c.size();d++)c.eq(d).find("img["+n+"]").each(function(){a(this).attr(n)==b.attr("src")&&a(this).attr("src",a(this).attr(n)).removeAttr(n)})})};switch(e){case"fade":case"fold":case"top":case"left":case"slideDown":c(p*t);break;case"leftLoop":case"topLoop":c(P+$(O));break;case"leftMarquee":case"topMarquee":var d="leftMarquee"==e?l.css("left").replace("px",""):l.css("top").replace("px",""),f="leftMarquee"==e?D:C,g=P;if(0!=d%f){var h=Math.abs(0^d/f);g=1==p?P+h:P+h-1}c(g)}},ab=function(a){if(!A||M!=p||a||R){if(R?p>=1?p=1:0>=p&&(p=0):(O=p,p>=k?p=0:0>p&&(p=k-1)),S(),null!=n&&_(l.children()),o[0]&&(Q=o.eq(p),null!=n&&_(o),"slideDown"==e?(o.not(Q).stop(!0,!0).slideUp(q),Q.slideDown(q,G,function(){l[0]||T()})):(o.not(Q).stop(!0,!0).hide(),Q.animate({opacity:"show"},q,function(){l[0]||T()}))),m>=u)switch(e){case"fade":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){T()}).siblings().hide();break;case"fold":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){T()}).siblings().animate({opacity:"hide"},q,G);break;case"top":l.stop(!0,!1).animate({top:-p*t*C},q,G,function(){T()});break;case"left":l.stop(!0,!1).animate({left:-p*t*D},q,G,function(){T()});break;case"leftLoop":var b=O;l.stop(!0,!0).animate({left:-($(O)+P)*D},q,G,function(){-1>=b?l.css("left",-(P+(k-1)*t)*D):b>=k&&l.css("left",-P*D),T()});break;case"topLoop":var b=O;l.stop(!0,!0).animate({top:-($(O)+P)*C},q,G,function(){-1>=b?l.css("top",-(P+(k-1)*t)*C):b>=k&&l.css("top",-P*C),T()});break;case"leftMarquee":var c=l.css("left").replace("px","");0==p?l.animate({left:++c},0,function(){l.css("left").replace("px","")>=0&&l.css("left",-m*D)}):l.animate({left:--c},0,function(){l.css("left").replace("px","")<=-(m+P)*D&&l.css("left",-P*D)});break;case"topMarquee":var d=l.css("top").replace("px","");0==p?l.animate({top:++d},0,function(){l.css("top").replace("px","")>=0&&l.css("top",-m*C)}):l.animate({top:--d},0,function(){l.css("top").replace("px","")<=-(m+P)*C&&l.css("top",-P*C)})}j.removeClass(K).eq(p).addClass(K),M=p,y||(g.removeClass("nextStop"),f.removeClass("prevStop"),0==p&&f.addClass("prevStop"),p==k-1&&g.addClass("nextStop")),h.html("<span>"+(p+1)+"</span>/"+k)}};A&&ab(!0),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(function(){p=N,A?ab():"slideDown"==e?Q.slideUp(q,U):Q.animate({opacity:"hide"},q,U),M=p},300)});var bb=function(a){H=setInterval(function(){w?p--:p++,ab()},a?a:r)},cb=function(a){H=setInterval(ab,a?a:r)},db=function(){z||(clearInterval(H),bb())},eb=function(){(y||p!=k-1)&&(p++,ab(),R||db())},fb=function(){(y||0!=p)&&(p--,ab(),R||db())},gb=function(){clearInterval(H),R?cb():bb(),i.removeClass("pauseState")},hb=function(){clearInterval(H),i.addClass("pauseState")};if(v?R?(w?p--:p++,cb(),z&&l.hover(hb,gb)):(bb(),z&&d.hover(hb,gb)):(R&&(w?p--:p++),i.addClass("pauseState")),i.click(function(){i.hasClass("pauseState")?gb():hb()}),"mouseover"==c.trigger?j.hover(function(){var a=j.index(this);I=setTimeout(function(){p=a,ab(),db()},c.triggerTime)},function(){clearTimeout(I)}):j.click(function(){p=j.index(this),ab(),db()}),R){if(g.mousedown(eb),f.mousedown(fb),y){var ib,jb=function(){ib=setTimeout(function(){clearInterval(H),cb(0^r/10)},150)},kb=function(){clearTimeout(ib),clearInterval(H),cb()};g.mousedown(jb),g.mouseup(kb),f.mousedown(jb),f.mouseup(kb)}"mouseover"==c.trigger&&(g.hover(eb,function(){}),f.hover(fb,function(){}))}else g.click(eb),f.click(fb)})}}(jQuery),jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(a,b,c,d,e){return jQuery.easing[jQuery.easing.def](a,b,c,d,e)},easeInQuad:function(a,b,c,d,e){return d*(b/=e)*b+c},easeOutQuad:function(a,b,c,d,e){return-d*(b/=e)*(b-2)+c},easeInOutQuad:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b+c:-d/2*(--b*(b-2)-1)+c},easeInCubic:function(a,b,c,d,e){return d*(b/=e)*b*b+c},easeOutCubic:function(a,b,c,d,e){return d*((b=b/e-1)*b*b+1)+c},easeInOutCubic:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b+c:d/2*((b-=2)*b*b+2)+c},easeInQuart:function(a,b,c,d,e){return d*(b/=e)*b*b*b+c},easeOutQuart:function(a,b,c,d,e){return-d*((b=b/e-1)*b*b*b-1)+c},easeInOutQuart:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b*b+c:-d/2*((b-=2)*b*b*b-2)+c},easeInQuint:function(a,b,c,d,e){return d*(b/=e)*b*b*b*b+c},easeOutQuint:function(a,b,c,d,e){return d*((b=b/e-1)*b*b*b*b+1)+c},easeInOutQuint:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b*b*b+c:d/2*((b-=2)*b*b*b*b+2)+c},easeInSine:function(a,b,c,d,e){return-d*Math.cos(b/e*(Math.PI/2))+d+c},easeOutSine:function(a,b,c,d,e){return d*Math.sin(b/e*(Math.PI/2))+c},easeInOutSine:function(a,b,c,d,e){return-d/2*(Math.cos(Math.PI*b/e)-1)+c},easeInExpo:function(a,b,c,d,e){return 0==b?c:d*Math.pow(2,10*(b/e-1))+c},easeOutExpo:function(a,b,c,d,e){return b==e?c+d:d*(-Math.pow(2,-10*b/e)+1)+c},easeInOutExpo:function(a,b,c,d,e){return 0==b?c:b==e?c+d:(b/=e/2)<1?d/2*Math.pow(2,10*(b-1))+c:d/2*(-Math.pow(2,-10*--b)+2)+c},easeInCirc:function(a,b,c,d,e){return-d*(Math.sqrt(1-(b/=e)*b)-1)+c},easeOutCirc:function(a,b,c,d,e){return d*Math.sqrt(1-(b=b/e-1)*b)+c},easeInOutCirc:function(a,b,c,d,e){return(b/=e/2)<1?-d/2*(Math.sqrt(1-b*b)-1)+c:d/2*(Math.sqrt(1-(b-=2)*b)+1)+c},easeInElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return-(h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g))+c},easeOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*b)*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(2==(b/=e/2))return c+d;if(g||(g=e*.3*1.5),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return 1>b?-.5*h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+c:.5*h*Math.pow(2,-10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*(b/=e)*b*((f+1)*b-f)+c},easeOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*((b=b/e-1)*b*((f+1)*b+f)+1)+c},easeInOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),(b/=e/2)<1?d/2*b*b*(((f*=1.525)+1)*b-f)+c:d/2*((b-=2)*b*(((f*=1.525)+1)*b+f)+2)+c},easeInBounce:function(a,b,c,d,e){return d-jQuery.easing.easeOutBounce(a,e-b,0,d,e)+c},easeOutBounce:function(a,b,c,d,e){return(b/=e)<1/2.75?d*7.5625*b*b+c:2/2.75>b?d*(7.5625*(b-=1.5/2.75)*b+.75)+c:2.5/2.75>b?d*(7.5625*(b-=2.25/2.75)*b+.9375)+c:d*(7.5625*(b-=2.625/2.75)*b+.984375)+c},easeInOutBounce:function(a,b,c,d,e){return e/2>b?.5*jQuery.easing.easeInBounce(a,2*b,0,d,e)+c:.5*jQuery.easing.easeOutBounce(a,2*b-e,0,d,e)+.5*d+c}});
/*!SuperSlide v2.1.1 结束*/


/*! Lazy Load 1.9.1 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);