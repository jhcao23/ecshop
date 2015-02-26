$('#shortcut li').hover(function(){
	if($(this).children('dl').length){
		$(this).addClass('li-activate');
	}
},function(){
	if($(this).children('dl').length){
		$(this).removeClass('li-activate');
	}
});
$('#keyword').focus(function(){
	$(this).val('');
});
$('#keyword').blur(function(){
	if($(this).val()==''){
		$(this).val($(this).attr('default'));
	}
});
// header-cart
$('#header-cart dl').hover(function(){
	$(this).addClass('hover');
},function(){
	$(this).removeClass('hover');
});
// nav-list
$('#nav-list li').hover(function(){
	$(this).addClass('nav-activate');
},function(){
	if($(this).attr('activate')!='true'){
	$(this).removeClass('nav-activate');
}
});
//  item-hover
$('#cate-list-show li').hover(function(){
	$(this).addClass('item-hover');
	$(this).children('.item-list').show();
	var _this_top=$(this).position().top,
		_child_height=$(this).children('.item-list').height();
	if(_this_top>_child_height){
		$(this).children('.item-list').css('top',(_this_top+45-_child_height));
	}
},function(){
	$(this).removeClass('item-hover');
});
$('#cate-list-show .item-list-close').click(function(){
	$(this).parent().hide();
	return false;
});

$('#top-slide').HDslide();
$('.module-tabs').each(function(){
	$(this).HDtabs();
});

function diffTime(etime){
	var time_sp=etime.split(' '),
		time_date=time_sp[0].split('-'),
		times=time_sp[1].split(':'),
		nowtime=new Date,
		endtime=new Date,
		arr=[];//[天,小时,分,秒]
		endtime.setFullYear(time_date[0]);
		endtime.setMonth(time_date[1]-1);
		endtime.setDate(time_date[2]);
		endtime.setHours(times[0]);
		endtime.setMinutes(times[1]);
		endtime.setSeconds(times[2]);
		var difftime=(endtime.getTime()-nowtime.getTime())/1000;
		var days=parseInt(difftime/(24*60*60));
		if(days<0){
			days=0;
		}
		arr.push(days);
		difftime%=(24*60*60);
		var hours=parseInt(difftime/(60*60));
		if(hours<0){
			hours=0;
		}
		arr.push(hours);
		difftime%=(60*60);

		var mins=parseInt(difftime/(60));
		if(mins<0){
			mins=0;
		}
		arr.push(mins);
		difftime%=60;
		if(difftime<0){
			difftime=0;
		}
		arr.push(difftime);
		return arr;
}
setInterval(function(){
	$('#limit .limit-time').each(function(){
		var _endtime=$(this).attr('endtime');
		if(_endtime != undefined){
			time=diffTime(_endtime);
			// 剩余 <span>1</span>小时<span>11</span>分<span>56</span>秒
			var day_str='';
			if(time[0]>0){
				day_str='<span>'+time[0]+'</span>天';
			}
			str='剩余 '+day_str+'<span>'+time[1]+'</span>小时<span>'+time[2]+'</span>分<span>'+time[3]+'</span>秒';
			if((time[0]+time[1]+time[2]+time[3])==0){
				str='<span>已结束</span>';
			}
			$(this).html(str);
		}
	});
},1000);


$('.specials-goods:not(.goods-list) .sg-img').hover(function(){
	$(this).css("opacity","0.7");
},function(){
	$(this).css("opacity","1");
});






$('.cate-slide').each(function(){
	$(this).HDbuslide();
});
function HDroll(id,time,speed){
	var time=time || 2500,
		speed=speed || 'slow',
		li_height=$('#'+id+' ul li:last').height();
	setInterval(function(){
		$('#'+id+' ul').prepend($('#'+id+' ul li:last').css("height","0px").animate({"height":li_height+"px"},"slow"));
	},time)
}
HDroll('hot-share');
HDroll('hot-goout');