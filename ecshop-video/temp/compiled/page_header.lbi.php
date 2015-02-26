<div id="public-top">
<div id="shortcut">
        <div id="shortcut-left" class="fn-left">
                <ul>
                        <li class="icon-li"><i class="icon-fav"></i><a href="">收藏京东商城</a></li>
                        <li><a href="">360TOP奢侈品</a></li>
                        <li><a href="">迷你挑</a></li>
                        <li class="no-bd"><a href="">京东好药师</a></li>
                </ul>
        </div>
        <div id="shortcut-right" class="fn-right">
                <ul>
                        <li>您好，欢迎来到京东商城！<a href="">[登录]</a></li>
                        <li><a href="">[免费注册]</a></li>
                        <li><a href="">我的订单</a></li>
                        
                        <li class="icon-li li-dropdown">
                                <dl>
                                        <dt><i class="icon-dropdown"></i><a href="">特色栏目</a></dt>
                                        <dd class="fn-hide">
                                            <p><a href="###">为我推荐</a></p>
                                            <p><a href="###">视频购物</a></p>
                                            <p><a href="###">京东社区</a></p>
                                            <p><a href="###">校园频道</a></p>
                                            <p><a href="###">在线读书</a></p>
                                            <p><a href="###">装机大师</a></p>
                                            <p><a href="###">礼品卡</a></p>
                                        </dd>
                                </dl>
                        </li>
                        <li><a href="">手机京东</a></li>
                        <li class="icon-li li-dropdown">
                                <dl>
                                        <dt><i class="icon-dropdown"></i><a href="">企业服务</a></dt>
                                        <dd class="fn-hide">
                                            <p><a href="###">为我推荐</a></p>
                                            <p><a href="###">视频购物</a></p>
                                            <p><a href="###">京东社区</a></p>
                                            <p><a href="###">校园频道</a></p>
                                            <p><a href="###">在线读书</a></p>
                                            <p><a href="###">装机大师</a></p>
                                            <p><a href="###">礼品卡</a></p>
                                        </dd>
                                </dl>
                        </li>
                        <li class="no-bd"><a href="">客户服务</a></li>
                </ul>
        </div>
</div>
</div>
<div class="hd-w">

<div id="header">
<div id="logo">
<a href="">
        <img src="themes/houdunwang/images/logo.png" alt="">
</a>
<div class="logo-ads">
        <a href="">
        <img src="themes/houdunwang/images/logo_ads.png" alt="">
</a>
</div>
</div>
<div id="search">
<form action="" method="post">
<div id="search-form">
                <div class="search-form-left"></div>
                <div class="search-form-center">
                        <input type="text" name="keyword" default="后盾网、人人做后盾" value="后盾网、人人做后盾" id="keyword">
                </div>
                <div class="search-form-right"></div>
                <div class="search-button">
                        <input type="button" value="搜索">
                </div>
</div>
</form>
<div id="hot-keyword">
        <span>热门搜索：</span>
        <a href="###" class="hot-words">新一代APU</a>
        <a href="###">跑步机</a>
        <a href="###">老板烟机</a>
        <a href="###">和田新枣</a>
        <a href="###">华为Y210</a>
        <a href="###">聚焦十八大</a>
        <a href="###">诺基亚800</a>
</div>
</div>
<div id="header-cart">
<div id="personal-cart">
        
        <dl>
                <dt>
                        <i class="icon-account"></i>
                        <a href="">我的京东</a>
                        <i class="icon-dropdown"></i>
                </dt>
                <dd>
                        <div class="cart-bar">
                                <span class="fn-left">你好，请登录</span>
                                <a href="" class="fn-right btn">登录</a>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="cart-info">
                                <ul>
                                    <li><a href="">待处理订单</a></li>
                                    <li><a href="">咨询回复</a></li>
                                    <li><a href="">降价商品</a></li>
                                    <li><a href="">优惠券</a></li>
                                </ul>
                                <ul class="cart-order">
                                        <li><a href="">待处理订单&gt;</a></li>
                                    <li><a href="">咨询回复&gt;</a></li>
                                    <li><a href="">降价商品&gt;</a></li>
                                    <li><a href="">优惠券&gt;</a></li>
                                </ul>
                        </div>
                </dd>
        </dl>
</div>
<div id="shopping-cart">
        
        <dl>
                <dt>
                        <i class="icon-account">
                                <span>2</span>
                        </i>
                        <a href="">去购物车结算</a>
                        <i class="icon-dropdown"></i>
                </dt>
                <dd>
                        后盾网人人做后盾。
                </dd>
        </dl>
</div>
</div>
</div>
<div id="nav">
<div id="nav-bg-left"></div>
<div id="cate">
<h2><a href="">全部商品分类</a></h2>
<div id="cate-list"<?php if ($this->_var['navigator_list']['config']['index'] != 1): ?> class="fn-hide"<?php endif; ?>>
<ul id="cate-list-show">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>

                <li class="item">
                <span class="item-nav">
                        <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
                        <i></i>
                </span>
                <div class="item-list">
                        <div class="item-list-l">
                            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                                <dl>
                                        <dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
                                        <dd>
                                             <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                                                <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </dd>
                                </dl>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                        <div class="item-list-r">
                                <dl>
                                        <dt><a href="">促销活动</a> </dt>
                                        <dd>
                                                <a href=""><img src="themes/houdunwang/images/cate-mg.jpg" alt=""></a>
                                                <a href=""><img src="themes/houdunwang/images/cate-mg.jpg" alt=""></a>
                                        </dd>
                                </dl>
                                <dl>
                                        <dt><a href="">推荐品牌</a> </dt>
                                        <dd>
                                                <ul>
                                <li><a href="###">飞利浦旗舰店</a></li>
                                <li><a href="###">TCL</a></li>
                                <li><a href="###">苏泊尔旗舰店</a></li>
                                <li><a href="###">西门子</a></li>
                                <li><a href="###">奔腾旗舰店</a></li>
                                <li><a href="###">夏普</a></li>
                                <li><a href="###">科沃斯旗舰店</a></li>
                                <li><a href="###">方太</a></li>
                                <li><a href="###">小熊旗舰店</a></li>
                                <li><a href="###">格力</a></li>
                                <li><a href="###">ACA旗舰店</a></li>
                               <li><a href="###"> 老板</a></li>
                                <li><a href="###">九阳旗舰店</a></li>
                                <li><a href="###">志高</a></li>
                                <li><a href="###">飞科旗舰店</a></li>
                                <li><a href="###">帅康</a></li>
                                <li><a href="###">润唐旗舰店</a></li>
                                <li><a href="###">万家乐</a></li>
                                </ul>
                                        </dd>
                                </dl>
                        </div>
                        <div class="item-list-close"></div>
                </div>
                  </li>
               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<div class="cate-all-link">
        <a href="">全部商品分类</a>
</div>
</div>
</div>
<ul id="nav-list">
    <li<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="nav-activate"<?php endif; ?>><a href="index.php">首页</a></li>
	<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
        <li <?php if ($this->_var['nav']['active'] == 1): ?> class="nav-activate"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>>
      <?php echo $this->_var['nav']['name']; ?>
      </a></li>
 	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<div id="nav-bg-right"></div>
<div id="nav-ads"><a href=""><img src="themes/houdunwang/images/nav-ads.gif" alt=""></a></div>
</div>
</div>
<script type="text/javascript">
    $('#cate').hover(function(){
        $('#cate-list').show();
    },function(){
        $('#cate-list').hide();
    });
</script>