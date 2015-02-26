<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:46:"D:/wamp/www/ecshop/themes/houdunwang/goods.dwt";i:1;s:62:"D:/wamp/www/ecshop/themes/houdunwang/./library/good_header.lbi";i:2;s:64:"D:/wamp/www/ecshop/themes/houdunwang/./library/category_tree.lbi";i:3;s:64:"D:/wamp/www/ecshop/themes/houdunwang/./library/goods_gallery.lbi";i:4;s:66:"D:/wamp/www/ecshop/themes/houdunwang/library/bought_note_guide.lbi";i:5;s:63:"D:/wamp/www/ecshop/themes/houdunwang/./library/bought_goods.lbi";i:6;s:59:"D:/wamp/www/ecshop/themes/houdunwang/./library/safenote.lbi";i:7;s:61:"D:/wamp/www/ecshop/themes/houdunwang/./library/goods_help.lbi";}s:7:"expires";i:1355885940;s:8:"maketime";i:1355882340;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>索爱C702c_GSM手机_手机类型_后盾商城-中国最大的在线购物商城 - Powered by ECShop</title>
<meta name="keywords" content="2008年05月 GSM,850,900,1800,1900 直板" />
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
    var goodsid=10;
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
                 <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">手机类型</a> <code>&gt;</code> <a href="category.php?id=3">GSM手机</a> <code>&gt;</code> 索爱C702c               </div>
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
               索爱C702c                 <span class="jvbao"><a href="goods.php?id=12">上一个</a><a href="goods.php?id=8">下一个</a></span>
             </div>
           <div class="bodydiv_rightdiv_pormessage">
                      <div class="gallery">
                          <div class="gallery-list">
                           
                                                      <div class="clearfix">
                                <a href="images/200905/source_img/10_G_1242973436172.jpg" class="jqzoom" rel='gal1' title="索爱C702c">
                                    <img src="images/200905/goods_img/10_G_1242973436141.jpg" title="索爱C702c">
                                </a>
                            </div>
                                                      <div class="clearfix">
<ul id="thumblist" class="clearfix" >
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/no_picture.gif',largeimage: 'images/200905/goods_img/10_P_1242973436620.jpg'}" title="">
                <img src='images/200905/thumb_img/10_thumb_P_1242973436219.jpg' >
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
                                   <a href="#" class="sharediv_a3 collect" onclick="javascript:collect(10);">收藏该商品</a>
                                     <a href="#" class="sharediv_a4">(人气1841)</a>
                          </div>
                      </div>
                         <div class="pormessage">
                            <div class="brdip">
                                 <a class="prisea">本店价格 </a>
                                  <a class="prisea2" id="total_price">￥1328元 </a>
                                  <a href="">原价:<del>￥1594元</del></a>
                            </div>
                                                        <div>
                                <table>
                                                                        <tr>
                                        <th>注册用户：</th>
                                        <td>￥1328元</td>
                                    </tr>
                                                                        <tr>
                                        <th>vip：</th>
                                        <td>￥1262元</td>
                                    </tr>
                                                                        <tr>
                                        <th>超级VIP：</th>
                                        <td>￥930元</td>
                                    </tr>
                                                                    </table>
                            </div>
                           
                             <div class="brdip">
                                 <a class="prisea">商品点击数 </a>
                                  <span class="youhuispan" style="margin-left:0px;"><span style="color:#C31815;font-weight:bold;">12</span>件</span>
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
                                        <label for=""  title="减￥0.00元">黑色                                            <input type="radio" name="" value="239" checked class="fn-hide" />
                                        </label></div>
                                                                                <div class="attr-radio ">
                                        <label for=""  title="减￥0.00元">白色                                            <input type="radio" name="" value="240"  class="fn-hide" />
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
                                               <a href="#" class="ligoua" onclick="javascript:addToCart(10,0,'now');"></a>
                                                <a href="#" class="ligoua2 addToCart" onclick="javascript:addToCart(10);"></a>
                                                <a href="user.php?act=affiliate&goodsid=10">推荐好友</a>
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
                                                                                                          1328.00                                                                                                      </span><a href="#" style="text-decoration:underline">积分</a>
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
                                                                          <li><strong>上市日期：</strong>2008年05月<span></span></li>
                                                                          <li><strong>屏幕大小：</strong>2.2英寸<span></span></li>
                                                                          <li><strong>手机制式：</strong>GSM,850,900,1800,1900<span></span></li>
                                                                          <li><strong>外观样式：</strong>直板<span></span></li>
                                                                          </ul>
                                                             </div>
               </div>
                   <div class="fn-hide">
                       <script type="text/javascript" src="js/utils.js"></script><div id="ECS_BOUGHT">
    
    554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:10;}554fcae493e564ee0dc75bdf2ebf94ca</div>                   </div>
                   <div class="fn-hide">
                       554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:2:"id";i:10;s:4:"type";i:0;}554fcae493e564ee0dc75bdf2ebf94ca                   </div>
                                                      </div>
               </div>
               <script type="text/javascript">
                       $('#goods-attr-tab .nav-item').click(function(){
                           $('#goods-attr-tab .goods-attr-c').children('div').hide();
                           $('#goods-attr-tab .goods-attr-c').children('div').eq($(this).index()).show();
                       });
               </script>
               <div id="goods_desc">
                   <p>C702可以说是一种在外观上复古的产物，不仅延续T系列早期的直板造型，而且在屏幕和键盘的组合分布上都继承了前辈的精髓。C702的机身尺寸为106&times;48&times;15.5毫米，重量为105克。此外索尼爱立信为C702融入了<font size="3" color="#ff0000"><strong>三防特性，即防尘、防滑和防水溅</strong></font>，这款新的C702搭载了索尼爱立信经典A200平台，界面布局与W908c、K858c一致，典型的特征就是配备左右软键、中央确定键和通话/挂机键。</p>
<p>索尼爱立信C702配备一块<strong><font size="3" color="#ff0000">2.2英寸26万色TFT液晶显示屏</font></strong>，分辨率为240&times;320像素(QVGA)，显示效果属于目前主流水准。C702可以说是索尼爱立信首批<strong><font size="3" color="#ff0000">内置GPS模块</font></strong>的 手机产品之一，C702的搜星、定位一气呵成，十分精准，误差大约在10米之内。基本上定位后可以将有效卫星数量控制在4&mdash;6颗，可以说可以满足我们的需 要了。C702还提供了&ldquo;影像定位&rdquo;功能，配合内置的AGPS全球定位辅助系统，只须启动Geo-Tagging智能影像定位功能，便可将拍摄地点记录在 照片内，方便用户随时查询。</p>
<p>&nbsp;</p>
<p>作为一款Cyber-shot系列影像手机，索尼爱立信C702在拍照功能方面同样有不俗的表现。并且手机内置的<strong><font size="3" color="#ff0000">320万像素摄像头</font></strong>也 同样在拍照功能上也不错的表现。不仅支持自动聚焦和双LED闪光功能，而且还拥有2倍数码变焦、防红眼、Photo fix优画及场景模式等功能。索尼爱立信C702除了配备的是最大光圈为F3.2的4.2毫米镜头之外，该机也如同门中的旗舰C902一样增加了对脸部有 先自动聚焦功能的支持。</p>
<p>&nbsp;</p>               </div>
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
                              <input type="hidden" name="id" value="10" />
                          </td>
                      </tr>
                                            <tr>
                          <th>验证码:</th>
                          <td>
                              <input type="text" name="captcha" id="" />
                              <img src="captcha.php?1938468871" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha">
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
        var gmt_end_time=0;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        onload_leftTime();
    </script>
</body>
</html>