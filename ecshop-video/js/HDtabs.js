(function($){
	$.fn.HDtabs=function(settings){
		settings=jQuery.extend({
			"time":300
		},settings)
		$.fn.HDtabs.show($(this),settings);
	};
	$.fn.HDtabs.show=function($this,settings){
		var t='';
		$this.children('.md-tabs').children('li').mouseover(function(){
			var _this=$(this);
			t=setTimeout(function(){
				$this.children('.md-tabs').children('li').removeClass('hover');
				_this.addClass('hover');
				$this.children('.md-content').children('div').hide();
				$this.children('.md-content').children('div').eq(_this.index()).show();
			},settings.time);
		});
		$this.children('.md-tabs').children('li').mouseout(function(){

			clearTimeout(t);
		});
	}
})(jQuery)