<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:46:"D:/wamp/www/ecshop/themes/houdunwang/goods.dwt";i:1;s:62:"D:/wamp/www/ecshop/themes/houdunwang/./library/good_header.lbi";i:2;s:64:"D:/wamp/www/ecshop/themes/houdunwang/./library/category_tree.lbi";i:3;s:64:"D:/wamp/www/ecshop/themes/houdunwang/./library/goods_gallery.lbi";i:4;s:66:"D:/wamp/www/ecshop/themes/houdunwang/library/bought_note_guide.lbi";i:5;s:63:"D:/wamp/www/ecshop/themes/houdunwang/./library/bought_goods.lbi";i:6;s:59:"D:/wamp/www/ecshop/themes/houdunwang/./library/safenote.lbi";i:7;s:61:"D:/wamp/www/ecshop/themes/houdunwang/./library/goods_help.lbi";}s:7:"expires";i:1355886004;s:8:"maketime";i:1355882404;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>诺基亚N85_GSM手机_手机类型_后盾商城-中国最大的在线购物商城 - Powered by ECShop</title>
<meta name="keywords" content="2008年10月 GSM,850,900,1800,1900 黑色 白色 1600万 320×240 像素" />
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
    var goodsid=32;
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
                 <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">手机类型</a> <code>&gt;</code> <a href="category.php?id=3">GSM手机</a> <code>&gt;</code> 诺基亚N85               </div>
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
                                             <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="goods.php?id=8"><img src="images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" /></a>
                     <a  href="goods.php?id=8" class="bldjie" style="color:#999999">飞利浦9@9v</a>
                                          <a class="mgi-price">￥385元</a>
                                         </div>
                                                            <div class="mg-title">
               相关文章
               </div>
               <div class="mg-con" style="border:1px solid #CCCCCC;">
                   <ul class="goods_article">
                                              <li><a href="article.php?id=30" title="促销诺基亚N96">促销诺基亚N96</a></li>
                                              <li><a href="article.php?id=8" title="诺基亚牵手移动 5款热门TD手机机型推荐">诺基亚牵手移动 5款热门TD手机...</a></li>
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
               <font color=#FE0000>诺基亚N85</font>                 <span class="jvbao"><a href="">上一个</a><a href="goods.php?id=24">下一个</a></span>
             </div>
           <div class="bodydiv_rightdiv_pormessage">
                      <div class="gallery">
                          <div class="gallery-list">
                           
                                                      <div class="clearfix">
                                <a href="images/200905/source_img/32_G_1242110760437.jpg" class="jqzoom" rel='gal1' title="诺基亚N85">
                                    <img src="images/200905/goods_img/32_G_1242110760868.jpg" title="诺基亚N85">
                                </a>
                            </div>
                                                      <div class="clearfix">
<ul id="thumblist" class="clearfix" >
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/201212/1355150101531812578.jpg',largeimage: 'images/201212/goods_img/32_P_1355150101991.jpg'}" title="正面">
                <img src='images/201212/thumb_img/32_thumb_P_1355150101490.jpg' >
            </a>
        </li>
        
        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'images/201212/1355150102599991309.jpg',largeimage: 'images/201212/goods_img/32_P_1355150102592.jpg'}" title="侧面">
                <img src='images/201212/thumb_img/32_thumb_P_1355150102428.jpg' >
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
                                   <a href="#" class="sharediv_a3 collect" onclick="javascript:collect(32);">收藏该商品</a>
                                     <a href="#" class="sharediv_a4">(人气1841)</a>
                          </div>
                      </div>
                         <div class="pormessage">
                            <div class="brdip">
                                 <a class="prisea">本店价格 </a>
                                  <a class="prisea2" id="total_price">￥3010元 </a>
                                  <a href="">原价:<del>￥3612元</del></a>
                            </div>
                                                        <script type="text/javascript" src="js/lefttime.js"></script>                            <div class="brdip">
                                 <a class="prisea">促销价： </a>
                                 <span>￥2750元</span>
                                 <font class="f4" id="leftTime">请稍等, 正在载入中...</font>
                            </div>
                                                        <div>
                                <table>
                                                                        <tr>
                                        <th>注册用户：</th>
                                        <td>￥3010元</td>
                                    </tr>
                                                                        <tr>
                                        <th>vip：</th>
                                        <td>￥2860元</td>
                                    </tr>
                                                                        <tr>
                                        <th>超级VIP：</th>
                                        <td>￥2107元</td>
                                    </tr>
                                                                    </table>
                            </div>
                           
                             <div class="brdip">
                                 <a class="prisea">商品点击数 </a>
                                  <span class="youhuispan" style="margin-left:0px;"><span style="color:#C31815;font-weight:bold;">1411</span>件</span>
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
                                        <label for=""  title="减￥10.00元">白色                                            <input type="radio" name="" value="264" checked class="fn-hide" />
                                        </label></div>
                                                                                <div class="attr-radio ">
                                        <label for=""  title="加￥80.00元">黑色                                            <input type="radio" name="" value="163"  class="fn-hide" />
                                        </label></div>
                                                                                </div>
                                        
                                                                       </div>
                                                                    <div class="colorfendiv">
                                     <div class="colorfendiv_leftdiv">
                                     配件                                     </div>
                                                                           <div class="attr-radio attr-select">
                                            <label title="减￥12.00元"><input type="checkbox" name="" value="159" class="fn-hide" checked />数据线</label>
                                            </div>
                                        <div class="attr-radio ">
                                            <label title="加￥100.00元"><input type="checkbox" name="" value="158" class="fn-hide"  />蓝牙耳机</label>
                                            </div>
                                        <div class="attr-radio ">
                                            <label title="加￥50.00元"><input type="checkbox" name="" value="157" class="fn-hide"  />线控耳机</label>
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
                                               <a href="#" class="ligoua" onclick="javascript:addToCart(32,0,'now');"></a>
                                                <a href="#" class="ligoua2 addToCart" onclick="javascript:addToCart(32);"></a>
                                                <a href="user.php?act=affiliate&goodsid=32">推荐好友</a>
                                          </div>
                                  </div>
                            </div>
</div>
                            <div class="darendiv">
                                    <div class="darendiv_div1">
                                                                                  该商品免运费
                                                                             </div>
                                    <div class="darendiv_div1">
                                          <a href="#" class="darendiv_div1_lefta">送积分</a>
                                           <span class="songjifenspan">
                                                 单件送<span style="color:#2B8C00;font-size:bold;">
                                                                                                          3010.00                                                                                                      </span><a href="#" style="text-decoration:underline">积分</a>
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
                                         <div class="nav-item">
                     超值礼包
                     </div>
                                                          <div class="nav-item">
                    商品标签
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
                                                                          <li><strong>上市日期：</strong>2008年10月<span></span></li>
                                                                          <li><strong>操作系统：</strong>Symbian OS v9.3<span></span></li>
                                                                          <li><strong>屏幕大小：</strong>2.6英寸<span></span></li>
                                                                          <li><strong>尺寸体积：</strong>3.5<span></span></li>
                                                                          <li><strong>屏幕颜色：</strong>1600万<span></span></li>
                                                                          <li><strong>屏幕材质：</strong>TFT<span></span></li>
                                                                          <li><strong>屏幕分辨率：</strong>320×240 像素<span></span></li>
                                                                          <li><strong>内存容量：</strong>78MB<span></span></li>
                                                                          <li><strong>存储卡格式：</strong><span style="color:#f00">MicroSD</span><span></span></li>
                                                                          <li><strong>手机制式：</strong>GSM,850,900,1800,1900<span></span></li>
                                                                          <li><strong>理论通话时间：</strong>6.9 小时<span></span></li>
                                                                          <li><strong>理论待机时间：</strong>363 小时<span></span></li>
                                                                          </ul>
                                                             </div>
               </div>
                   <div class="fn-hide">
                       <script type="text/javascript" src="js/utils.js"></script><div id="ECS_BOUGHT">
    
    554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:32;}554fcae493e564ee0dc75bdf2ebf94ca</div>                   </div>
                   <div class="fn-hide">
                       554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:2:"id";i:32;s:4:"type";i:0;}554fcae493e564ee0dc75bdf2ebf94ca                   </div>
                                        <div class="fn-hide">
                        <table>
                                                <tr>
                            <th colspan="2">诺基亚N85大礼包</th>
                        </tr>
                                                        <tr>
                            <th>诺基亚N85原装充电器</th>
                            <td>数量：1</td>
                            </tr>
                                                        <tr>
                            <th>诺基亚N85原装立体声耳机HS-82</th>
                            <td>数量：1</td>
                            </tr>
                                                        <tr>
                            <th>诺基亚N85</th>
                            <td>数量：1</td>
                            </tr>
                                                        <tr>
                                <td colspan="2">
                                    原价：<del>￥3168元</del>
                                    礼包价：￥3150元                                    节 省：￥18元                                </td>
                                <td>
                                    <a href="" onclick="return addPackageToCart(6)">立即购买</a>
                                </td>
                            </tr>
                                                </table>
                    </div>
                                                                              <a href="search.php?keywords=%E6%99%BA%E8%83%BD%E6%89%8B%E6%9C%BA">智能手机[1]</a>
                                                      </div>
               </div>
               <script type="text/javascript">
                       $('#goods-attr-tab .nav-item').click(function(){
                           $('#goods-attr-tab .goods-attr-c').children('div').hide();
                           $('#goods-attr-tab .goods-attr-c').children('div').eq($(this).index()).show();
                       });
               </script>
               <div id="goods_desc">
                   <p>诺基亚N85参数</p>
<div>&nbsp;11111111</div>
<div>
<table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
    <tbody>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>基本参数</b></p>
            </td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">手机昵称</td>
            <td width="450" bgcolor="#ffffff">N85</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">上市日期</td>
            <td width="450" bgcolor="#ffffff">2008年10月</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">手机类型</td>
            <td width="450" bgcolor="#ffffff">3G手机；拍照手机；智能手机</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">手机制式</td>
            <td width="450" bgcolor="#ffffff">GSM</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">支持频段</td>
            <td width="450" bgcolor="#ffffff">GSM850/900/1800/1900MHz</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">数据传输</td>
            <td width="450" bgcolor="#ffffff">GPRS、EDGE</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">屏幕材质</td>
            <td width="450" bgcolor="#ffffff">AMOLED</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">屏幕色彩</td>
            <td width="450" bgcolor="#ffffff">1600万色</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">主屏尺寸</td>
            <td width="450" bgcolor="#ffffff">2.6英寸</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">主屏参数</td>
            <td width="450" bgcolor="#ffffff">QVGA 320&times;240像素</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">铃音描述</td>
            <td width="450" bgcolor="#ffffff">可选MP3、WAV、AAC或和弦Midi铃声等格式</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">操作系统</td>
            <td width="450" bgcolor="#ffffff">Symbian OS v9.3操作系统与S60 v3.2平台的组合</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">机身内存</td>
            <td width="450" bgcolor="#ffffff">74MB 内部动态存储空间<br />
            78MB 内置NAND闪存</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">存储卡</td>
            <td width="450" bgcolor="#ffffff">支持MicroSD(T-Flash)卡扩展最大至8GB</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">电池规格</td>
            <td width="450" bgcolor="#ffffff">1200毫安时锂电池</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">标配</td>
            <td width="450" bgcolor="#ffffff">诺基亚 N85<br />
            诺基亚电池（BL-5K）<br />
            诺基亚旅行充电器（AC-10）<br />
            诺基亚视频数据线（CA-75U）<br />
            诺基亚数据线（CA-101）<br />
            诺基亚音乐耳机（HS-45、AD-54）<br />
            诺基亚 8 GB microSD 卡（MU-43）<br />
            《用户手册》<br />
            《快速入门》</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">理论通话时间</td>
            <td width="450" bgcolor="#ffffff">6.9 小时</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">理论待机时间</td>
            <td width="450" bgcolor="#ffffff">363 小时</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>产品外形</b></p>
            </td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">外观设计</td>
            <td width="450" bgcolor="#ffffff">双向滑盖</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">产品尺寸</td>
            <td width="450" bgcolor="#ffffff">103&times;50&times;16mm<br />
            体积：76 立方厘米</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">手机重量</td>
            <td width="450" bgcolor="#ffffff">128克</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">产品天线</td>
            <td width="450" bgcolor="#ffffff">内置</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>拍照功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">定时器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">摄像头</td>
            <td width="450" bgcolor="#ffffff">内置</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">摄像头像素</td>
            <td width="450" bgcolor="#ffffff">500万像素</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">连拍功能</td>
            <td width="450" bgcolor="#ffffff">支持</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">LED闪光灯</td>
            <td width="450" bgcolor="#ffffff">双LED 闪光灯</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">数码变焦</td>
            <td width="450" bgcolor="#ffffff">20 倍数码变焦</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">拍摄模式</td>
            <td width="450" bgcolor="#ffffff">静止、连拍、自动定时器、摄像</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">照片特效</td>
            <td width="450" bgcolor="#ffffff">正常、怀旧、黑白、负片、逼真</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">拍照描述</td>
            <td width="450" bgcolor="#ffffff">支持最大2592&times;1944分辨率照片拍摄<br />
            支持JPEG、Exif格式<br />
            白平衡模式：自动、阳光、阴天、白炽灯、荧光灯<br />
            感光度模式：高、中、低、自动</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">视频拍摄</td>
            <td width="450" bgcolor="#ffffff">最高支持640 x 480 像素（VGA）、30 帧/秒</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>娱乐功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">收音机</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">TV-OUT</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">录音功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">电子书</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">视频播放</td>
            <td width="450" bgcolor="#ffffff">内置RealPlayer播放器, 支持MPEG4、H.264/AVC、H.263/3GP、RealVideo等视频格式全屏播放</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">音乐播放</td>
            <td width="450" bgcolor="#ffffff">内置播放器, 支持mp3、.wma、.aac、eAAC、eAAC+格式</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">游戏</td>
            <td width="450" bgcolor="#ffffff">内置</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">Java功能</td>
            <td width="450" bgcolor="#ffffff">支持Java MIDP 2.0 CLDC 1.1</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">Flash功能</td>
            <td width="450" bgcolor="#ffffff">第3.0版Flash lite播放器</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>数据功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">蓝牙功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">数据线接口</td>
            <td width="450" bgcolor="#ffffff">USB数据线 3.5mm立体声耳机插孔</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>基本功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">短信(SMS)</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">彩信(MMS)</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">免提通话</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">情景模式</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">闹钟功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">日历功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">输入方式</td>
            <td width="450" bgcolor="#ffffff">键盘</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">通话记录</td>
            <td width="450" bgcolor="#ffffff">未接来电+已接来电+已拨电话记录</td>
        </tr>
        <tr>
            <td width="100" valign="center" bgcolor="#ffffff" align="left">通讯录</td>
            <td width="450" bgcolor="#ffffff">S60标准化名片式通讯录</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>网络功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">电子邮件</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">WWW浏览器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">WAP浏览器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>商务功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">飞行模式</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">语音拨号</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">备忘录</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">日程表</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">世界时间</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>其他功能</b></p>
            </td>
        </tr>
        <tr>
            <td width="550" valign="center" bgcolor="#ffffff" align="left" style="padding: 8px 0px;" colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">GPS功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">电子词典</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">待机图片</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">计算器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">来电铃声识别</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">来电图片识别</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">来电防火墙</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">动画屏保</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">图形菜单</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">秒表</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td width="100%" bgcolor="#f1f7fc" align="middle" style="padding: 2px; font-weight: bold;">单位换算</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding: 5px 0px 5px 10px;">
                        <table width="100%" cellspacing="1" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="100%" align="middle" style="padding: 2px; float: none;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
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
                              <input type="hidden" name="id" value="32" />
                          </td>
                      </tr>
                                            <tr>
                          <th>验证码:</th>
                          <td>
                              <input type="text" name="captcha" id="" />
                              <img src="captcha.php?856496663" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha">
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
               <div class="pingjiaheaddiv">
                 买了此商品的会员通常还买了
</div>
 <div class="reseemaindiv">
    <div class="reseemaindiv_div1">
          <a href="goods.php?id=33"><img src="images/201211/thumb_img/33_thumb_G_1354001261183.jpg" style="margin-bottom:10px;"/></a>
          <a href="#" title="中兴（ZTE）N880F 3G手机（黑色）CDMA2000/GSM 双模双待">中兴（ZTE）...</a><br/>
                <span class="hongspan">￥700元</span>
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