<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:46:"D:/wamp/www/ecshop/themes/houdunwang/goods.dwt";i:1;s:62:"D:/wamp/www/ecshop/themes/houdunwang/./library/good_header.lbi";i:2;s:64:"D:/wamp/www/ecshop/themes/houdunwang/./library/category_tree.lbi";i:3;s:64:"D:/wamp/www/ecshop/themes/houdunwang/./library/goods_gallery.lbi";i:4;s:66:"D:/wamp/www/ecshop/themes/houdunwang/library/bought_note_guide.lbi";i:5;s:63:"D:/wamp/www/ecshop/themes/houdunwang/./library/bought_goods.lbi";i:6;s:59:"D:/wamp/www/ecshop/themes/houdunwang/./library/safenote.lbi";i:7;s:61:"D:/wamp/www/ecshop/themes/houdunwang/./library/goods_help.lbi";}s:7:"expires";i:1355885960;s:8:"maketime";i:1355882360;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>飞利浦9@9v_GSM手机_手机类型_后盾商城-中国最大的在线购物商城 - Powered by ECShop</title>
<meta name="keywords" content="双模 2008年春 黑色 直板 中低档" />
<meta name="description" content="" />
<link href="themes/houdunwang/css/goods.css" rel="stylesheet" type="text/css" />
<link href="themes/houdunwang/css/jqzoom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script><script type="text/javascript" src="js/jquery.jqzoom-core-pack.js"></script><script type="text/javascript" src="js/json2.js"></script><script type="text/javascript" src="js/common_hd.js"></script><style type="text/css">
    .attr-radio label{
        width: 80px;
        height: 25px;
        line-height:25px;
        text-align:center;
        border:2px #ccc solid;
        margin: 2px;
        float: left;
        cursor:pointer;
    }
    .attr-select label{
        border:2px #c00 solid;
    }
    .fn-hide{
        display: none;
    }
    .clearfix{
        clear: both;
    }
    ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
    border:1px solid red;
}
ul#thumblist li a img{width: 60px;height: 60px;}
.jqzoom{
	text-decoration:none;
	float:left;
}
.goods-attr-list li{
    float:left;
    width: 200px;
    height: 25px;
    line-height:25px;
}
</style>
<script type="text/javascript">
    var goodsid=8;
    $(function(){
        $('.attr-radio label').click(function(){
            if($(this).children('input').attr('type')=='radio'){
                $(this).parents('.attr-radio-area').children('.attr-radio').removeClass('attr-select');
                $(this).parents('.attr-radio-area').find(':input').attr('checked',false);
            }
           if($(this).children('input').attr('type')=='checkbox' &&  $(this).parent().is('.attr-select')){
                $(this).parent().removeClass('attr-select');
                $(this).children('input').attr('checked',false);
                changePrice();
                return false;
            }
            $(this).children('input').attr('checked',true);
            $(this).parent().addClass('attr-select');
            changePrice();
            return false;
        });
        $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
        $('#CommentForm').submit(function(){
            var cmt={};
            cmt.email           = $('input[name=email]').val();
            cmt.content         = $('#content').val();;
            cmt.type            = $('input[name=cmt_type]').val();
            cmt.id              = $('input[name=id]').val();
            cmt.captcha         = $('input[name=captcha]').val();
            cmt.rank            = $('input[name=comment_rank]:checked').val();
            if(cmt.email==''){
                alert("请输入邮箱");//邮箱是不是正确的格式。
                return false;
            }
            if($('input[name=captcha]').length>0 && cmt.captcha==''){
                alert("请输入验证码");
                return false;
            }
//            Ajax.call('comment.php', 'cmt=' + cmt.toJSONString(), commentResponse, 'POST', 'JSON');
            $.post(
            'comment.php',
            {"cmt":JSON.stringify(cmt)},
            function(data){
               if (data.message)
                {
                  alert(data.message);
                }
            },'json'
            );
            return false;
        });
    });
changePrice();
//$('#buy_num').blur(function(){
//changePrice();
//});
function execTotalPrice(data){
    if (data.err_msg.length > 0)
      {
        alert(data.err_msg);
      }
      else
      {
        $('#buy_number').val(data.qty);
        $('#total_price').html(data.result);
      }
}
</script>
</head>
<body>
        <div class="headdiv">
         <div class="rightback">
         </div>
          <div class="headdiv_centerdiv">
                <div class="headdiv_centerdiv_top">
                       <div class="headdiv_centerdiv_top_xiediv">
                       </div>
                       <div class="hcdtr">
                           <a href="mobile/" class="hcdtr_a1">
                              手机版
                           </a>
                         <span class="shuspan"></span>
<a class="hcdtr_a2">
                              喵，欢迎来后盾！
                           </a>
                    554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca                           <span class="shuspan"></span>
                           <a href="user.php?act=collection_list" class="hcdtr_a6">
                             收藏夹
                            </a>
                             <span class="shuspan"></span>
                              <a href="flow.php" class="hcdtr_a7">
                             查看购物车
                            </a>
                                                                                       <a href="flow.php" >查看购物车</a>
                                                          <a href="pick_out.php" >选购中心</a>
                                                          <a href="tag_cloud.php" target="_blank" >标签云</a>
                                                                                 </div>
            </div>
            <div class="hcbdi">
               <a href="#" class="">
                   <img src="themes/houdunwang/images/logo.gif" alt="" />
               </a>
               <div class="hcbdi_inputdiv">
                   <form action="search.php" method="get" id="submitSearch">
                    <input type="text" name="keywords" id="keywords" class="hcbdi_input" />
                    <input type="submit" value="  " style="width: 80px;height: 30px;background: none;" />
                    </form>
               </div>
            </div>
          </div>
</div>
<script type="text/javascript">
    $('#submitSearch').submit(function(){
        if($('#keywords').val()==''){
            alert('请输入关键字！');
            return false;
        }
    });
</script>    <div class="bodydiv"><!--bodydiv
--> <div class="bodydiv_leftdiv_tmdiv">
                 <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">手机类型</a> <code>&gt;</code> <a href="category.php?id=3">GSM手机</a> <code>&gt;</code> 飞利浦9@9v               </div>
        <div class="bodydiv_leftdiv">
               <div class="bodydiv_leftdiv_pinbaodiv">
                     <a href="#" class="bodydiv_leftdiv_pinbaodiv_a">
                         正品保障
                     </a>
                      <a href="#" class="bodydiv_leftdiv_pinbaodiv_a">
                         提供发票
                     </a>
                      <div><a href="#" class="bodydiv_leftdiv_pinbaodiv_a">
                         七天退换
                     </a></div>
               </div>
               <div class="list-cate" id="list-cate">
        
    <div class="item ">
            <h3>
                                    <a href="category.php?id=2">CDMA手机</a>
            </h3>
            <ul>
                            </ul>
    </div>
        
    <div class="item ">
            <h3>
                                    <b></b>
                                    <a href="category.php?id=3">GSM手机</a>
            </h3>
            <ul>
                                <li title="联通GSM手机">
                           <a href="category.php?id=21">联通GSM手机</a>
                    </li>
                            </ul>
    </div>
        
    <div class="item ">
            <h3>
                                    <a href="category.php?id=4">3G手机</a>
            </h3>
            <ul>
                            </ul>
    </div>
        
    <div class="item ">
            <h3>
                                    <a href="category.php?id=5">双模手机</a>
            </h3>
            <ul>
                            </ul>
    </div>
        
    <div class="item ">
            <h3>
                                    <a href="category.php?id=16">智能手机</a>
            </h3>
            <ul>
                            </ul>
    </div>
    </div>               <div class="mg-title">
               相关商品
               </div>
                                             <div class="mg-title">
               相关文章
               </div>
               <div class="mg-con" style="border:1px solid #CCCCCC;">
                   <ul class="goods_article">
                                              <li><a href="article.php?id=28" title="飞利浦9@9促销">飞利浦9@9促销</a></li>
                                          </ul>
               </div>
                             <div class="mg-title">
               相关文章
               </div>
               <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                </div>
             <div class="mg-title">
               你可能感兴趣的商品
               </div>
               <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                    </div>
                <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                    </div>
                 <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                    </div>
                 <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                    </div>
                 <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                    </div>
                 <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="#"><img src="themes/houdunwang/images/about.jpg" /></a>
                     <a  href="#" class="bldjie" style="color:#999999">飞利浦旗舰店 三刀头充电式剃须刀PT720 可全身水洗 </a>
                     <a class="mgi-price"> 559.00</a>
                     <a class="bodydiv_leftdiv_dianjie_a3">月销量：<span style="color:#D6AA66;font-weight:bold;">705</span></a>
                    </div>
        </div>
        <div class="bodydiv_rightdiv">
             <div class="bodydiv_rightdiv_namediv">
               飞利浦9@9v                 <span class="jvbao"><a href="goods.php?id=10">上一个</a><a href="">下一个</a></span>
             </div>
           <div class="bodydiv_rightdiv_pormessage">
                      <div class="gallery">
                          <div class="gallery-list">
                           
                                                      <div class="clearfix">
                                <a href="images/200905/source_img/8_G_1241425513518.jpg" class="jqzoom" rel='gal1' title="飞利浦9@9v">
                                    <img src="images/200905/goods_img/8_G_1241425513055.jpg" title="飞利浦9@9v">
                                </a>
                            </div>
                                                      <div class="clearfix">
<ul id="thumblist" class="clearfix" >
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/no_picture.gif',largeimage: 'images/200905/goods_img/8_P_1241425513388.jpg'}" title="">
                <img src='images/200905/thumb_img/8_thumb_P_1241425513834.jpg' >
            </a>
        </li>
        
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/no_picture.gif',largeimage: 'images/200905/goods_img/8_P_1241425891781.JPG'}" title="正面">
                <img src='images/200905/thumb_img/8_thumb_P_1241425891460.jpg' >
            </a>
        </li>
        
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/no_picture.gif',largeimage: 'images/200905/goods_img/8_P_1241425891193.jpg'}" title="背面">
                <img src='images/200905/thumb_img/8_thumb_P_1241425892547.jpg' >
            </a>
        </li>
        
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/no_picture.gif',largeimage: 'images/200905/goods_img/8_P_1241425892941.JPG'}" title="侧面">
                <img src='images/200905/thumb_img/8_thumb_P_1241425892356.jpg' >
            </a>
        </li>
        </ul>
 </div>
                           
                           <div style="clear:both"></div>
                           </div>
                          <div class="sharediv" style="clear:both">
                              <a href="#" class="sharediv_a"></a>
                              <span class="sharediv_shuspan"></span>
                               <a href="#" class="sharediv_a" style="background-image: url(themes/houdunwang/images/share2.png);"></a>
                                <a href="#" class="sharediv_a" style="background-image: url(themes/houdunwang/images/share3.png);"></a>
                                 <a href="#" class="sharediv_a" style="background-image: url(themes/houdunwang/images/share4.png);"></a>
                                  <a href="#" class="sharediv_a" style="background-image: url(themes/houdunwang/images/share5.png);"></a>
                                   <a href="#" class="sharediv_a2"></a>
                                   <a href="#" class="sharediv_a3 collect" onclick="javascript:collect(8);">收藏该商品</a>
                                     <a href="#" class="sharediv_a4">(人气1841)</a>
                          </div>
                      </div>
                         <div class="pormessage">
                            <div class="brdip">
                                 <a class="prisea">本店价格 </a>
                                  <a class="prisea2" id="total_price">￥399元 </a>
                                  <a href="">原价:<del>￥479元</del></a>
                            </div>
                                                        <script type="text/javascript" src="js/lefttime.js"></script>                            <div class="brdip">
                                 <a class="prisea">促销价： </a>
                                 <span>￥385元</span>
                                 <font class="f4" id="leftTime">请稍等, 正在载入中...</font>
                            </div>
                                                        <div>
                                <table>
                                                                        <tr>
                                        <th>注册用户：</th>
                                        <td>￥399元</td>
                                    </tr>
                                                                        <tr>
                                        <th>vip：</th>
                                        <td>￥379元</td>
                                    </tr>
                                                                        <tr>
                                        <th>超级VIP：</th>
                                        <td>￥279元</td>
                                    </tr>
                                                                    </table>
                            </div>
                           
                             <div class="brdip">
                                 <a class="prisea">商品点击数 </a>
                                  <span class="youhuispan" style="margin-left:0px;"><span style="color:#C31815;font-weight:bold;">72</span>件</span>
                            </div>
                             <div class="brdip">
                                 <a class="prisea">评价 </a>
                                 <div class="leipingdiv">
                                   <img src="themes/houdunwang/images/stars5.gif" style="vertical-align:bottom"/><a>5分</a>
                                </div>
                            </div>
                                                        <div class="attr-form">
                            <div class="libuydiv">
                                                                  <div class="colorfendiv">
                                     <div class="colorfendiv_leftdiv">
                                     颜色                                     </div>
                                                                                                                     <div class="attr-radio-area">
                                                                                <div class="attr-radio attr-select">
                                        <label for=""  title="减￥0.00元">黑色                                            <input type="radio" name="" value="231" checked class="fn-hide" />
                                        </label></div>
                                                                                </div>
                                        
                                                                       </div>
                                  
                                  <div class="colorfendiv">
                                     <div class="colorfendiv_leftdiv">
                                    数量
                                     </div>
                                          <div class="colorfendiv_shuliangdiv">
                                              <input type="text" value="1" onblur="changePrice();" id="buy_num" class="shulianginput"/>
                                               <div class="shuliangupdowndiv">
                                                <a class="shuliangup"></a>
                                                <a class="shuliangdown"></a>
                                          </div>
                                             <span class="jianshuspan">件(库存423)</span>
                                          </div>
                                           <div class="colorfendiv_shuliangdiv" style="margin-top:15px;height:36px;">
                                               <a href="#" class="ligoua" onclick="javascript:addToCart(8,0,'now');"></a>
                                                <a href="#" class="ligoua2 addToCart" onclick="javascript:addToCart(8);"></a>
                                                <a href="user.php?act=affiliate&goodsid=8">推荐好友</a>
                                          </div>
                                  </div>
                            </div>
</div>
                            <div class="darendiv">
                                    <div class="darendiv_div1">
                                                                             </div>
                                    <div class="darendiv_div1">
                                          <a href="#" class="darendiv_div1_lefta">送积分</a>
                                           <span class="songjifenspan">
                                                 单件送<span style="color:#2B8C00;font-size:bold;">
                                                                                                          399.00                                                                                                      </span><a href="#" style="text-decoration:underline">积分</a>
                                           </span>
                                    </div>
                                    <div class="darendiv_div1">
                                          <a href="#" class="darendiv_div1_lefta">付款方式</a>
                                           <a href="#" class="darendiv_div1_tuihuoa" style="background-image:url(themes/houdunwang/images/xinyong.png)">信用卡(支持分期)</a>
                                    </div>
                            </div>
                      </div>
               </div>
               <div id="goods-attr-tab">
               <div class="goods-attr">
                     <div class="nav-item">
                     商品详情
                     </div>
                    <div class="nav-item">
                     成交记录
                      </div>
                      <div class="nav-item">
                    商品评价
                     </div>
                                      
               </div>
               <div class="goods-attr-c">
                   <div>
                            <div class="chengnuodiv">
                                  天猫商家承诺：您付款之后，如果商家延迟发货，可以获得商品价格30%（不大于500元）的赔付金，<a href="#" style="color:#2953A6;">详见</a>。
                            </div>
                            <div class="canshudiv">
                                                                     <div class="canshudiv_head">
                                        商品属性                                     </div>
                                     <ul class="goods-attr-list">
                                                                          <li><strong>屏幕大小：</strong>1.75英寸<span></span></li>
                                                                          <li><strong>中文输入法：</strong>支持<span></span></li>
                                                                          <li><strong>外观样式：</strong>直板<span></span></li>
                                                                          </ul>
                                                             </div>
               </div>
                   <div class="fn-hide">
                       <script type="text/javascript" src="js/utils.js"></script><div id="ECS_BOUGHT">
    
    554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:8;}554fcae493e564ee0dc75bdf2ebf94ca</div>                   </div>
                   <div class="fn-hide">
                       554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:2:"id";i:8;s:4:"type";i:0;}554fcae493e564ee0dc75bdf2ebf94ca                   </div>
                                                      </div>
               </div>
               <script type="text/javascript">
                       $('#goods-attr-tab .nav-item').click(function(){
                           $('#goods-attr-tab .goods-attr-c').children('div').hide();
                           $('#goods-attr-tab .goods-attr-c').children('div').eq($(this).index()).show();
                       });
               </script>
               <div id="goods_desc">
                   <p align="left">作为一款性价比极高的入门级<font size="3" color="#ff0000"><strong>商务手机</strong></font>，飞利浦<a href="mailto:9@9v">Xenium&nbsp; 9@9v</a>三围大小为105&times;44&times;15.8mm，机身重量仅为<strong><font size="3" color="#ff0000">75g</font></strong>，装配了一块低规格1.75英寸128&times;160像素65000色CSTN显示屏。身正面采用月银色功能键区与屏幕数字键区相分隔，键盘设计较为<font size="3"><strong><font color="#ff0000">别</font><font color="#ff0000">致</font></strong></font>，中部导航键区采用钛金色的&ldquo;腰带&rdquo;彰显出浓郁的商务气息。</p>
<p align="left">&nbsp;</p>
<p align="left">此款手机采用<strong><font size="3" color="#ff0000">触摸屏</font></strong>设计，搭配精致的手写笔，可支持手写中文和英文两个版本。增强的内置系统还能识别潦草字迹，确保在移动中和匆忙时输入文字的识别率。手写指令功能还支持特定图案的瞬间调用，独特的手写记事本功能，可以在触摸屏上随意绘制个性化的图案并进行<strong><font size="3" color="#ff0000">记事提醒</font></strong>，让商务应用更加随意。</p>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;作为入门级为数不多支持<strong><font size="3" color="#ff0000">双卡功能</font></strong>的手机，可以同时插入两张SIM卡，通过菜单随意切换，只需开启漫游自动切换模式，<a href="mailto:9@9V">9@9V</a>在该模式下能够判断网络情况，自动切换适合的手机号。</p>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>               </div>
              <div class="subComment">
                  <form action="" id="CommentForm" method="post">
                  <table>
                      <tr>
                          <th>用户名:</th>
                          <td>
                                                            匿名用户
                                                        </td>
                      </tr>
                      <tr>
                          <th>邮箱：</th>
                          <td>
                              <input type="text" name="email" id="" />
                          </td>
                      </tr>
                      <tr>
                          <th>等级:</th>
                          <td>
                               <input name="comment_rank" type="radio" value="1" id="comment_rank1" /> <img src="themes/houdunwang/images/stars1.gif" />
          <input name="comment_rank" type="radio" value="2" id="comment_rank2" /> <img src="themes/houdunwang/images/stars2.gif" />
          <input name="comment_rank" type="radio" value="3" id="comment_rank3" /> <img src="themes/houdunwang/images/stars3.gif" />
          <input name="comment_rank" type="radio" value="4" id="comment_rank4" /> <img src="themes/houdunwang/images/stars4.gif" />
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" /> <img src="themes/houdunwang/images/stars5.gif" />
                          </td>
                      </tr>
                      <tr>
                          <th>内容：</th>
                          <td>
                              <textarea name="content" id="content" cols="30" rows="10"></textarea>
                              <input type="hidden" name="cmt_type" value="" />
                              <input type="hidden" name="id" value="8" />
                          </td>
                      </tr>
                                            <tr>
                          <th>验证码:</th>
                          <td>
                              <input type="text" name="captcha" id="" />
                              <img src="captcha.php?410303836" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha">
                          </td>
                      </tr>
                                            <tr>
                          <th></th>
                          <td>
                              <input type="submit" value="提交评论" />
                          </td>
                      </tr>
                  </table>
                      </form>
              </div>
               <div class="pingjiaheaddiv">
                  服务质量
               </div>
               <div class="zhiliangdiv">
                    <div class="zhiliangdiv_leftdiv">
                           <span class="zhiliangdiv_leftdiv_span1">服务质量记录</span>
                           <span class="zhiliangdiv_leftdiv_span2">
                                 <a href="#" class="tuisua">退款速度：</a><span style="color:#FD6648;">2.6天</span> （比行业平均水平慢<span style="color:#FD6648;">0.9天）</span>
                           </span>
                           <span class="zhiliangdiv_leftdiv_span2">
                                 <a href="#" class="tuisua">投诉纠纷：</a>无 超过360天无投诉
                           </span>
                           <span class="zhiliangdiv_leftdiv_span2">
                                 <a href="#" class="tuisua">违规行为：</a>无 超过360天无违规行为
                           </span>
                    </div>
                     <div class="zhiliangdiv_rightdiv">
                          <span class="zhiliangdiv_leftdiv_span2">
                                 <a href="#" class="tuisua">纠纷退款：</a>无 超过330天无纠纷退款
                           </span>
                           <span class="zhiliangdiv_leftdiv_span2">
                                 <a href="#" class="tuisua">处罚情况：</a>该会员遵守淘宝用户行为管理规则良好
                           </span>
                    </div>
               </div>
                              <div style="height:30px;margin-left:310px;margin-bottom:20px;"><a href="#" class="othersamea" style="width:130px;background-position: 109px 0px;">进入店铺查看更多 </a></div>
               
               <div class="savediv">
                    <div class="savediv_updiv">
                         <div class="savediv_updiv_leftdiv">安全提示：
                         </div>
                         交易过程中请勿随意接收卖家发送的可疑文件，请勿点击不明来源的链接，付款前请务必详细核对支付信息。<br/>
                         推荐安全软件：
                         <img src="themes/houdunwang/images/sougou.png" style="vertical-align:middle;"/>
                               <a href="#" style="color:#2953A6;">搜狗浏览器 </a>
                              &nbsp;&nbsp;
                          <img src="themes/houdunwang/images/jinshan.png" style="vertical-align:middle;"/>
                               <a href="#" style="color:#2953A6;">金山卫士  </a>
                                &nbsp;&nbsp;
                          <img src="themes/houdunwang/images/360.png" style="vertical-align:middle;"/>
                               <a href="#" style="color:#2953A6;">360网盾  </a>
                                &nbsp;&nbsp;
                          <img src="themes/houdunwang/images/jinsha.png" style="vertical-align:middle;"/>
                               <a href="#" style="color:#2953A6;">金山杀毒软件  </a>
                               &nbsp;&nbsp;
                               <a href="#" style="color:#2953A6;">安全软件中心>> </a>
                    </div>
                    <div class="savediv_updiv" style="border:0;">
                         <div class="savediv_updiv_leftdiv">免责声明：
                         </div>
                         淘宝网所展示的宝贝供求信息由买卖双方自行提供，其真实性、准确性和合法性由信息发布人负责。淘宝网不提供任何保证，并不承担任何法律责任。淘宝网友情提醒：为保障您的利益，请网上成交，贵重宝贝，请使用支付宝交易。
                    </div>
               </div>        </div>
 </div><!--bodydiv
-->
    <div class="bottomborderdiv"></div>
      <div class="tmbottomlogodiv">
            <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2>新手上路 </h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=9" title="售后流程">售后流程</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=10" title="购物流程">购物流程</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=11" title="订购方式">订购方式</a></li>
                                         </ul>
           </div>
            <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2>手机常识 </h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></li>
                                         </ul>
           </div>
            <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2>配送与支付 </h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></li>
                                         </ul>
           </div>
            <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2>会员中心</h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=18" title="资金管理">资金管理</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=19" title="我的收藏">我的收藏</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=20" title="我的订单">我的订单</a></li>
                                         </ul>
           </div>
            <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2>服务保证 </h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=21" title="退换货原则">退换货原则</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></li>
                                         </ul>
           </div>
            <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2>联系我们 </h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></li>
                                               <li class="tmbottomlogodiv_div1_ul_li"><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></li>
                                         </ul>
           </div>
        </div>
    <br/>
    <center style="font-size:12px;color:#000;line-height:18px;">
    <a href="#" class="colorblue">关于天猫</a>&nbsp;
    <a href="#" class="colorblue"> 帮助中心 </a>&nbsp;
    <a href="#" class="colorblue"> 网站地图 </a>&nbsp;
     <a href="#" class="colorblue">诚聘英才</a>&nbsp;
      <a href="#" class="colorblue">联系我们</a>&nbsp;
       <a href="#" class="colorblue">网站合作</a>&nbsp;
        <a href="#" class="colorblue">版权说明 </a>&nbsp;
        <br/><br />
         <a href="#" class="colorblue">阿里巴巴集团</a>&nbsp;
         ： 阿里巴巴网络 -
    <a href="#" class="colorblue"> 中国站</a>&nbsp;
    <a href="#" class="colorblue"> 国际站</a>&nbsp;
     <a href="#" class="colorblue">日文站</a>&nbsp;|&nbsp;
      <a href="#" class="colorblue">淘宝网</a>&nbsp;
       <a href="#" class="colorblue">一淘网</a>&nbsp;
        <a href="#" class="colorblue">聚划算</a>&nbsp;
        <a href="#" class="colorblue">支付宝</a>&nbsp;
        <a href="#" class="colorblue">中国雅虎</a>&nbsp;
        <a href="#" class="colorblue">淘宝联盟</a>&nbsp;
        <a href="#" class="colorblue">集团研究中心</a>&nbsp;
        <a href="#" class="colorblue">淘宝天下</a>&nbsp;
        <a href="#" class="colorblue">嗨淘网</a>&nbsp;
        <br /><br />
        Copyright 2003-2012, 版权所有TMALL.COM
        <br />
        增值电信业务经营许可证：浙B2-20110446
        <br />
        网络文化经营许可证：<a href="#" class="colorblue">浙网文[2012]0234-028号</a>
         <br />
         互联网医疗保健信息服务 审核同意书 浙 卫网审【2012】6号
         <br />
          互联网药品信息服务资质证书编号：浙-（经营性）-2012-0005
malldetail135012.cm6
<br />
    </center>
    <script type="text/javascript">
        var gmt_end_time=1417276800;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        onload_leftTime();
    </script>
</body>
</html>