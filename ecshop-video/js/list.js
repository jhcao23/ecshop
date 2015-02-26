$('#list-cate h3').click(function(){
	var _this=$(this);
	if($(this).parent().hasClass('current')){
		$(this).next().slideUp(function(){
			_this.parent().removeClass('current')
		});
	}else{
		$(this).next().slideDown(function(){
			_this.parent().addClass('current');
		});
	}
});