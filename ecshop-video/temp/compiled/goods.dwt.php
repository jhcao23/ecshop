<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="description" content="<?php echo $this->_var['description']; ?>" />
<link href="themes/houdunwang/css/goods.css" rel="stylesheet" type="text/css" />
<link href="themes/houdunwang/css/jqzoom.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.8.3.min.js,jquery.jqzoom-core-pack.js,json2.js,common_hd.js')); ?>
<style type="text/css">
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
    var goodsid=<?php echo $this->_var['goods']['goods_id']; ?>;
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
    <?php echo $this->fetch('./library/good_header.lbi'); ?>
    <div class="bodydiv"><!--bodydiv
--> <div class="bodydiv_leftdiv_tmdiv">
                 <?php echo $this->_var['ur_here']; ?>
               </div>
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
               <?php echo $this->fetch('./library/category_tree.lbi'); ?>
               <div class="mg-title">
               相关商品
               </div>
               <?php if ($this->_var['related_goods']): ?>
               <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'related');if (count($_from)):
    foreach ($_from AS $this->_var['related']):
?>
               <div class="mg-con" style="border:1px solid #CCCCCC;">
                     <a href="<?php echo $this->_var['related']['url']; ?>"><img src="<?php echo $this->_var['related']['goods_thumb']; ?>" alt="<?php echo $this->_var['related']['goods_name']; ?>" /></a>
                     <a  href="<?php echo $this->_var['related']['url']; ?>" class="bldjie" style="color:#999999"><?php echo $this->_var['related']['goods_name']; ?></a>
                     <?php if ($this->_var['related']['promote_price'] != 0): ?>
                     <a class="mgi-price"><?php echo $this->_var['related']['formated_promote_price']; ?></a>
                     <?php else: ?>
                     <a class="mgi-price"><?php echo $this->_var['related']['shop_price']; ?></a>
                     <?php endif; ?>
                    </div>
               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
               <?php endif; ?>
               <?php if ($this->_var['goods_article_list']): ?>
               <div class="mg-title">
               相关文章
               </div>
               <div class="mg-con" style="border:1px solid #CCCCCC;">
                   <ul class="goods_article">
                       <?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
                       <li><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo htmlspecialchars($this->_var['article']['short_title']); ?></a></li>
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </ul>
               </div>
               <?php endif; ?>
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
               <?php echo $this->_var['goods']['goods_style_name']; ?>
                 <span class="jvbao"><a href="<?php echo $this->_var['prev_good']['url']; ?>">上一个</a><a href="<?php echo $this->_var['next_good']['url']; ?>">下一个</a></span>
             </div>
           <div class="bodydiv_rightdiv_pormessage">


                      <div class="gallery">
                          <div class="gallery-list">
                           
                           <?php if ($this->_var['pictures']): ?>
                           <div class="clearfix">
                                <a href="<?php echo $this->_var['goods']['original_img']; ?>" class="jqzoom" rel='gal1' title="<?php echo $this->_var['goods']['goods_name']; ?>">
                                    <img src="<?php echo $this->_var['goods']['goods_img']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>">
                                </a>
                            </div>
                           <?php endif; ?>
                           <?php echo $this->fetch('./library/goods_gallery.lbi'); ?>


                           
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
                                   <a href="#" class="sharediv_a3 collect" onclick="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);">收藏该商品</a>
                                     <a href="#" class="sharediv_a4">(人气1841)</a>
                          </div>
                      </div>

                         <div class="pormessage">
                            <div class="brdip">
                                 <a class="prisea">本店价格 </a>
                                  <a class="prisea2" id="total_price"><?php echo $this->_var['goods']['shop_price_formated']; ?> </a>
                                  <a href="">原价:<del><?php echo $this->_var['goods']['market_price']; ?></del></a>
                            </div>
                            <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                            <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
                            <div class="brdip">
                                 <a class="prisea">促销价： </a>
                                 <span><?php echo $this->_var['goods']['promote_price']; ?></span>
                                 <font class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font>
                            </div>
                            <?php endif; ?>
                            <div>
                                <table>
                                    <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
                                    <tr>
                                        <th><?php echo $this->_var['rank_price']['rank_name']; ?>：</th>
                                        <td><?php echo $this->_var['rank_price']['price']; ?></td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </table>
                            </div>
                           
                             <div class="brdip">
                                 <a class="prisea">商品点击数 </a>

                                  <span class="youhuispan" style="margin-left:0px;"><span style="color:#C31815;font-weight:bold;"><?php echo $this->_var['goods']['click_count']; ?></span>件</span>

                            </div>
                             <div class="brdip">
                                 <a class="prisea">评价 </a>
                                 <div class="leipingdiv">
                                   <img src="themes/houdunwang/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" style="vertical-align:bottom"/><a><?php echo $this->_var['goods']['comment_rank']; ?>分</a>
                                </div>
                            </div>
                            <?php if ($this->_var['specification']): ?>
                            <div class="attr-form">
                            <div class="libuydiv">

                                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                                  <div class="colorfendiv">
                                     <div class="colorfendiv_leftdiv">
                                     <?php echo $this->_var['spec']['name']; ?>
                                     </div>
                                     <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                                        <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                        <div class="attr-radio-area">
                                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                        <div class="attr-radio <?php if ($this->_var['key'] == 0): ?>attr-select<?php endif; ?>">
                                        <label for=""  title="<?php if ($this->_var['value']['price'] > 0): ?>加<?php else: ?>减<?php endif; ?><?php echo $this->_var['value']['format_price']; ?>"><?php echo $this->_var['value']['label']; ?>
                                            <input type="radio" name="" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> class="fn-hide" />
                                        </label></div>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                        <?php else: ?>
                                        <select name="" id="">
                                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                            <option value=""><?php echo $this->_var['value']['label']; ?>--<?php if ($this->_var['value']['price'] > 0): ?>加<?php else: ?>减<?php endif; ?><?php echo $this->_var['value']['format_price']; ?></option>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </select>
                                        <?php endif; ?>

                                     <?php else: ?>
                                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
<div class="attr-radio <?php if ($this->_var['key'] == 0): ?>attr-select<?php endif; ?>">
                                            <label title="<?php if ($this->_var['value']['price'] > 0): ?>加<?php else: ?>减<?php endif; ?><?php echo $this->_var['value']['format_price']; ?>"><input type="checkbox" name="" value="<?php echo $this->_var['value']['id']; ?>" class="fn-hide" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /><?php echo $this->_var['value']['label']; ?></label>
                                            </div>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                     <?php endif; ?>
                                  </div>

                                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>



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
                                               <a href="#" class="ligoua" onclick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,'now');"></a>
                                                <a href="#" class="ligoua2 addToCart" onclick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);"></a>
                                                <a href="user.php?act=affiliate&goodsid=<?php echo $this->_var['goods']['goods_id']; ?>">推荐好友</a>
                                          </div>

                                  </div>
                            </div>

</div>
<?php endif; ?>



                            <div class="darendiv">
                                    <div class="darendiv_div1">
                                         <?php if ($this->_var['goods']['is_shipping']): ?>
                                         该商品免运费
                                         <?php endif; ?>
                                    </div>
                                    <div class="darendiv_div1">
                                          <a href="#" class="darendiv_div1_lefta">送积分</a>
                                           <span class="songjifenspan">
                                                 单件送<span style="color:#2B8C00;font-size:bold;">
                                                     <?php if ($this->_var['goods']['give_integral'] == - 1): ?>
                                                     <?php echo $this->_var['goods']['shop_price']; ?>
                                                     <?php else: ?>
                                                     <?php echo $this->_var['goods']['give_integral']; ?>
                                                     <?php endif; ?>
                                                 </span><a href="#" style="text-decoration:underline"><?php echo $this->_var['points_name']; ?></a>
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
                   <?php if ($this->_var['package_goods_list']): ?>
                      <div class="nav-item">
                     超值礼包
                     </div>
                   <?php endif; ?>
                   <?php if ($this->_var['tags']): ?>
                    <div class="nav-item">
                    商品标签
                    </div>
                   <?php endif; ?>


               </div>
               <div class="goods-attr-c">
                   <div>
                            <div class="chengnuodiv">
                                  天猫商家承诺：您付款之后，如果商家延迟发货，可以获得商品价格30%（不大于500元）的赔付金，<a href="#" style="color:#2953A6;">详见</a>。
                            </div>
                            <div class="canshudiv">
                                <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'prop_list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['prop_list']):
?>
                                     <div class="canshudiv_head">
                                        <?php echo htmlspecialchars($this->_var['key']); ?>
                                     </div>
                                     <ul class="goods-attr-list">
                                     <?php $_from = $this->_var['prop_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                                     <li><strong><?php echo $this->_var['attr']['name']; ?>：</strong><?php echo $this->_var['attr']['value']; ?><span></span></li>
                                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                     </ul>
                                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
               </div>
                   <div class="fn-hide">
                       <?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
                   </div>
                   <div class="fn-hide">
                       <?php 
$k = array (
  'name' => 'comments',
  'id' => $this->_var['id'],
  'type' => $this->_var['type'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                   </div>
                    <?php if ($this->_var['package_goods_list']): ?>
                    <div class="fn-hide">
                        <table>
                        <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
                        <tr>
                            <th colspan="2"><?php echo $this->_var['goods_list']['act_name']; ?></th>
                        </tr>

                            <?php $_from = $this->_var['goods_list']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package');if (count($_from)):
    foreach ($_from AS $this->_var['package']):
?>
                            <tr>
                            <th><?php echo $this->_var['package']['goods_name']; ?></th>
                            <td>数量：<?php echo $this->_var['package']['goods_number']; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <tr>
                                <td colspan="2">
                                    原价：<del><?php echo $this->_var['goods_list']['subtotal']; ?></del>
                                    礼包价：<?php echo $this->_var['goods_list']['package_price']; ?>
                                    节 省：<?php echo $this->_var['goods_list']['saving']; ?>
                                </td>
                                <td>
                                    <a href="" onclick="return addPackageToCart(<?php echo $this->_var['goods_list']['act_id']; ?>)">立即购买</a>
                                </td>
                            </tr>

                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </table>
                    </div>
                   <?php endif; ?>
                   <?php if ($this->_var['tags']): ?>
                    <?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
                    <a href="search.php?keywords=<?php echo urlencode($this->_var['tag']['tag_words']); ?>"><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?>[<?php echo $this->_var['tag']['tag_count']; ?>]</a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   <?php endif; ?>
               </div>
               </div>
               <script type="text/javascript">
                       $('#goods-attr-tab .nav-item').click(function(){
                           $('#goods-attr-tab .goods-attr-c').children('div').hide();
                           $('#goods-attr-tab .goods-attr-c').children('div').eq($(this).index()).show();
                       });
               </script>
               <div id="goods_desc">
                   <?php echo $this->_var['goods']['goods_desc']; ?>
               </div>
              <div class="subComment">
                  <form action="" id="CommentForm" method="post">
                  <table>
                      <tr>
                          <th>用户名:</th>
                          <td>
                              <?php if ($_SESSION['user_name']): ?>
                              <?php echo $_SESSION['user_name']; ?>
                              <?php else: ?>
                              匿名用户
                              <?php endif; ?>
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
                              <input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
                              <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
                          </td>
                      </tr>
                      <?php if ($this->_var['enabled_captcha']): ?>
                      <tr>
                          <th>验证码:</th>
                          <td>
                              <input type="text" name="captcha" id="" />
                              <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha">
                          </td>
                      </tr>
                      <?php endif; ?>
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

               <?php echo $this->fetch('./library/bought_goods.lbi'); ?>
               <div style="height:30px;margin-left:310px;margin-bottom:20px;"><a href="#" class="othersamea" style="width:130px;background-position: 109px 0px;">进入店铺查看更多 </a></div>
               <?php echo $this->fetch('./library/safenote.lbi'); ?>
        </div>
 </div><!--bodydiv
-->
    <div class="bottomborderdiv"></div>

  <?php echo $this->fetch('./library/goods_help.lbi'); ?>
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
        var gmt_end_time=<?php echo $this->_var['goods']['gmt_end_time']; ?>;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        onload_leftTime();
    </script>
</body>
</html>