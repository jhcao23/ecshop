/*
 * common_hd.js Encoding:UTF-8
 * Description:
 * 2012-12-7 zhangbo1248@163.com
 * Copyright (C) 2011 zhangbo
 */
function getAttrValue(rtype){
    var attr_arr=[],
        rtype=rtype || 'string';
    $('.attr-form :input:checked').each(function(){
        attr_arr.push($(this).val());
    })
    if(rtype == 'array'){
        return attr_arr;
    }
    return attr_arr.join(',');
}
function changePrice(){
 $.get('goods.php',{"act":"price","id":goodsid,"attr":getAttrValue(),"number":$('#buy_num').val()},execTotalPrice,'json');
}
function addToCart(goods_id,parent_id,buyType){
    var goods={"number":1,"quick":0,"spec":[],"goods_id":goods_id};
        clickType=buyType || false;
    if($('.attr-form').length){
        goods.spec = getAttrValue('array');
        if($('#buy_num').val()){
            goods.number=$('#buy_num').val();
        }
        goods.quick = 1;
    }
    goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
    $.post(
        "flow.php?step=add_to_cart",
        {"goods":JSON.stringify(goods)},
        addToCartResponse,
        "json"
    );
    return false;
}
function addToCartResponse(data){
//    http://localhost/ecshop_s/flow.php?step=checkout
    if(data.error > 0){
        // 如果需要缺货登记，跳转
    if (data.error == 2)
    {
      if (confirm(data.message))
      {
        location.href = 'user.php?act=add_booking&id=' + data.goods_id + '&spec=' + data.product_spec;
      }
    }
    // 没选规格，弹出属性选择框
    else if (data.error == 6)
    {
var str='';
        $.each(data.message,function(k,v){
           str+='<div class="attr-form"><div class="colorfendiv"><div class="colorfendiv_leftdiv">'+v.name+'</div>';

            str+='<div class="attr-radio-area">';
            $.each(v.values,function(k,v_label){
                var checked='',
                    attr_select='',
                    price_d='加';
                if(k==0){
                    checked='checked';
                    attr_select='attr-select';
                }
                if(v_label.price<0){
                    price_d='减';
                }
            if(v.attr_type==1){
                           str+='<div class="attr-radio '+attr_select+'"><label for=""  title="'+price_d+Math.abs(v_label.price)+'">'+v_label.label+'<input type="radio" name="" value="'+v_label.id+'" '+checked+' /></label></div>';
                           }else{
            str+='<div class="attr-radio '+attr_select+'"><label title="'+price_d+Math.abs(v_label.price)+'"><input type="checkbox" name="" value="'+v_label.id+'" '+checked+' />'+v_label.label+'</label></div>';
            }
            });
        str+='</div>';

           str+='</div></div>';
        });
        $('#dialog').html(str);
        $('#dialog').dialog({
            "width":300,
            "title":"请选择商品属性",
            "modal":true,
            "buttons":{
                "购买":function(){
                    addToCart(data.goods_id,data.parent);
                    $('#dialog').html('');
                    $('#dialog').dialog('close');
                },
                "取消":function(){
                    $('#dialog').dialog('close');
                    $('#dialog').html('');
                }
            }
        });
    }
    else
    {
      alert(data.message);
    }
  }
  else
  {
//    var cartInfo = document.getElementById('ECS_CARTINFO');
    var cart_url = 'flow.php?step=cart';
//    if (cartInfo)
//    {
//      cartInfo.innerHTML = result.content;
//    }

    if (data.one_step_buy == '1')//如果后台开启了一步购物
    {
      location.href = cart_url;
    }
    else if(clickType=='now'){
        location.href = 'flow.php?step=checkout';
    }
    else
    {
      switch(data.confirm_type)
      {
        case '1' :
          if (confirm(data.message)) location.href = cart_url;
          break;
        case '2' :
          if (!confirm(data.message)) location.href = cart_url;
          break;
        case '3' :
          location.href = cart_url;
          break;
        default :
          break;
      }
    }
    }
}
//collect
function collect(goods_id){
$.get('user.php?act=collect',{"id":goods_id},function(data){
    if(data.error==1){
        if(confirm(data.message+'\n需要登录吗？')){
            location.href='user.php';
        }
    }else{
        alert(data.message);
    }
},'json');
}
function addPackageToCart(package_id){
  var package_info = new Object();
  var number       = 1;
  package_info.package_id = package_id;
  package_info.number     = number;
  $.post('flow.php?step=add_package_to_cart',{"package_info":JSON.stringify(package_info)},function(result){
      if (result.error > 0)
  {
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        location.href = 'user.php?act=add_booking&id=' + result.goods_id;
      }
    }
    else
    {
      alert(result.message);
    }
  }
  },'json');
    return false;
}
