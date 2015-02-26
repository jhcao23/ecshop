<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php echo $this->_var['page_title']; ?></title>
        <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
        <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
        <link href="themes/houdunwang/css/base.css" rel="stylesheet" type="text/css" />
        <link href="themes/houdunwang/css/public.css" rel="stylesheet" type="text/css" />
        <link href="themes/houdunwang/css/list.css" rel="stylesheet" type="text/css" />
        <link href="themes/houdunwang/css/jqueryui.css" rel="stylesheet" type="text/css" />

        <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.8.3.min.js,jqueryui-min.js')); ?>
</head>
<body>
    <?php echo $this->fetch('./library/page_header.lbi'); ?>
	<div class="hd-w">

		<div class="here-ur">
                    <span>当前位置：</span>
                        <?php echo $this->_var['ur_here']; ?>
		</div>
	</div>
	<div class="hd-w">
		<div class="hd-wl">
                    <?php echo $this->fetch('./library/category_tree.lbi'); ?>
			
                        <?php if ($this->_var['hot_goods']): ?>
                        <div class="m">
				<div class="mt">
					<h2><font color="red">精品</font>商品</h2>
				</div>
				<div class="mc">
					<ul class="goods">
                                            <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'good');if (count($_from)):
    foreach ($_from AS $this->_var['good']):
?>
						<li>
							<div class="g-img">
								<a href="<?php echo $this->_var['good']['url']; ?>"><img src="<?php echo $this->_var['good']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['good']['name']); ?>" /></a>
								<b></b>
							</div>
							<div class="g-info">
								<a href="<?php echo $this->_var['good']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['good']['name']); ?>" target="_blank"><?php echo $this->_var['good']['short_style_name']; ?></a>
							</div>
							<div class="g-price">
								<?php if ($this->_var['good']['promote_price'] > 0): ?>
                                                                <?php echo $this->_var['good']['promote_price']; ?>
                                                                <?php else: ?>
                                                                <?php echo $this->_var['good']['shop_price']; ?>
                                                                <?php endif; ?>
							</div>
						</li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                </div>
                        </div>
                        <?php endif; ?>
			
                        <?php echo $this->fetch('./library/history.lbi'); ?>
			
			
			<div class="m">
				<div class="mt">
					<h2>一周销量排行榜</h2>
				</div>
			</div>
			
		</div>
		<div class="hd-wr">
                    <?php if ($this->_var['best_goods']): ?>
			<div class="goods-tads">
				<div class="mt">
					<h2>热卖推荐</h2>
				</div>
				<div class="mc list">
                                    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best');if (count($_from)):
    foreach ($_from AS $this->_var['best']):
?>
					<dl>
						<dt>
							<a target="_blank" href="<?php echo $this->_var['best']['url']; ?>"><img src="<?php echo $this->_var['best']['thumb']; ?>" width="100" height="100" alt="<?php echo htmlspecialchars($this->_var['best']['name']); ?>"></a>
						</dt>
						<dd>
							<div class="p-name">
								<a target="_blank" href="<?php echo $this->_var['best']['url']; ?>">
                                                                    <?php echo $this->_var['best']['short_style_name']; ?>
								</a>
							</div>
							<div class="p-price"><span>特价：</span>
                                                            <?php if ($this->_var['best']['promote_price'] > 0): ?>
                                                            <?php echo $this->_var['best']['promote_price']; ?>
                                                            <?php else: ?>
                                                            <?php echo $this->_var['best']['shop_price']; ?>
                                                            <?php endif; ?>
                                                        </div>
							<div class="btns">
								<a target="_blank" href="<?php echo $this->_var['best']['url']; ?>">立即抢购</a>
							</div>
						</dd>
					</dl>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
			</div>
                    <?php endif; ?>
			<div class="goods-cond">
                            <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
				<div class="mt">
					<h2><!--<strong></strong>&nbsp;-&nbsp;-->商品筛选</h2>
					<span>
						<a href="category.php?id=<?php echo $this->_var['category']; ?>">重置筛选条件</a>
					</span>
				</div>
                            <div class="gc-l">
                            <?php if ($this->_var['brands']['1']): ?>
<dl>
						<dt>品牌：</dt>
						<dd>
                                                    <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                                                    <?php if ($this->_var['brand']['selected']): ?>
                                                        <span><a href="<?php echo $this->_var['brand']['url']; ?>" class="current"><?php echo $this->_var['brand']['brand_name']; ?></a></span>
                                                        <?php else: ?>
							<span><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></span>
                                                       <?php endif; ?>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</dd>
					</dl>
                            <?php endif; ?>
                            <?php if ($this->_var['price_grade']['1']): ?>
<dl>
						<dt>价格：</dt>
						<dd>
                                                    <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
                                                    <?php if ($this->_var['grade']['selected']): ?>
                                                        <span><a href="<?php echo $this->_var['grade']['url']; ?>" class="current"><?php echo $this->_var['grade']['price_range']; ?></a></span>
                                                        <?php else: ?>
							<span><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></span>
                                                       <?php endif; ?>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</dd>
					</dl>
                            <?php endif; ?>

                            <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_63628600_1355882355');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_63628600_1355882355']):
?>
<dl>
                            <dt><?php echo htmlspecialchars($this->_var['filter_attr_0_63628600_1355882355']['filter_attr_name']); ?>：</dt>
                            <dd>
                                <?php $_from = $this->_var['filter_attr_0_63628600_1355882355']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                                         <?php if ($this->_var['attr']['selected']): ?>
                                        <span><a href="###" class="current"><?php echo $this->_var['attr']['attr_value']; ?></a></span>
                                         <?php else: ?>
                                        <span><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></span>
                                         <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </dd>
			</dl>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				<div id="advanced"><div><a href="search.php?act=advanced_search">高级搜索</a><b></b></div></div>
                            <?php endif; ?>
			</div>
			
			<?php echo $this->fetch('./library/goods_list.lbi'); ?>
		</div>
	</div>
    <?php echo $this->fetch('./library/page_footer.lbi'); ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'list.js,common_hd.js')); ?>
</body>
</html>