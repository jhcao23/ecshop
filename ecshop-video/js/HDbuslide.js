(function($){
	$.fn.HDbuslide=function(settings){
		settings=jQuery.extend({
			"time":300,
			"speed":200
		},settings)
		$.fn.HDbuslide.show($(this),settings);
	};
	$.fn.HDbuslide.show=function($this,settings){
		var _list_w=$this.width();
		t='',
		_slide_nav=$this.find('.slide-nav li');
		_slide_nav.hover(function(){
			var _left=$(this).index()*(-1)*_list_w,
				_this=$(this);
		t=setTimeout(function(){
				$this.children('.slide-ul').animate({
					"left":_left
				},settings.speed);
				_this.siblings().removeClass('slide-nav-curr');
				_this.addClass('slide-nav-curr');
			},settings.time);
		},function(){
			clearTimeout(t);
		});

	}
})(jQuery)
