(function($){
	$.fn.HDslide=function(settings){
		settings=jQuery.extend({
			"auto":true,//是否自动播放
			"autoTime":2500,
			"time":200

		},settings)
		$.fn.HDslide.show($(this),settings);
	};
	$.fn.HDslide.show=function($this,settings){
		var _slide_nav=$this.children('.slide-nav'),
			t='';
			t_i='';
			if(settings.auto){
				$.fn.HDslide.autoSlide(_slide_nav,$this,settings);
			}
			$('li',_slide_nav).hover(function(){
				var _this=$(this);
				if(settings.auto){
					clearTimeout(t_i);
				}
				if(_this.is('.slide-nav-curr')==false){
					t=setTimeout(function(){
						$('.slide-list',$this).hide();
						$('.slide-list',$this).eq(_this.index()).animate({"opacity":"show"});
						$('li',_slide_nav).removeClass('slide-nav-curr');
						_this.addClass('slide-nav-curr');
					},settings.time);
				}
			},function(){
				t==''?null:clearTimeout(t);
				if(settings.auto){
					$.fn.HDslide.autoSlide(_slide_nav,$this,settings);
				}
			});
	}
	$.fn.HDslide.autoSlide=function(_slide_nav,$this,settings){
		var _slide_nums=_slide_nav.find('li').length,
			i=_slide_nav.find('.slide-nav-curr').index();
			t_i=setInterval(function(){
				i+=1;
				if(i==_slide_nums){
					i=0;
				}
				$('.slide-list',$this).hide();
				$('.slide-list',$this).eq(i).animate({"opacity":"show"});
				$('li',_slide_nav).removeClass('slide-nav-curr');
					_slide_nav.find('li:eq('+i+')').addClass('slide-nav-curr');
			},settings.autoTime);
		// alert(_slide_nums);
	}
})(jQuery)
