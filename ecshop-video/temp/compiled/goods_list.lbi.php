
<div id="filter">
        <div class="ft-order">
                <dl>
                        <dt>排序：</dt>
                        <dd <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>class="current"<?php endif; ?>>
                                <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">上架时间<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>↓<?php else: ?>↑<?php endif; ?></a>
                        </dd>
                        <dd <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>class="current"<?php endif; ?>>
                                <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>↓<?php else: ?>↑<?php endif; ?></a>
                        </dd>
                        <dd <?php if ($this->_var['pager']['sort'] == 'last_update'): ?>class="current"<?php endif; ?>>
                                <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">更新时间<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>↓<?php else: ?>↑<?php endif; ?></a>
                        </dd>
                </dl>
        </div>
        <?php echo $this->fetch('./library/pages.lbi'); ?>
</div>

<div id="goods-list">
        <ul class="goods goods-list">
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <li>
                        <div class="g-img">
                                <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a>
                        </div>
                        <div class="g-info">
                            <?php echo $this->_var['goods']['goods_style_name']; ?>
                        </div>
                        <div class="g-price">
                                <?php if ($this->_var['goods']['promote_price'] > 0): ?>
                                    <?php echo $this->_var['goods']['promote_price']; ?>
                                <?php else: ?>
                                    <?php echo $this->_var['goods']['shop_price']; ?>
                                <?php endif; ?>
                        </div>
                        <div class="g-btn">
                                <a href="##" onclick="collect(<?php echo $this->_var['goods']['goods_id']; ?>);">收藏</a>
                                <a href="##" onclick="return addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">购买</a>
                                <a href="##" onclick="return Compare(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>')">比较</a>
                        </div>
                </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
</div>
<div id="dialog" class="fn-hide">

</div>
<div id="compare" class="fn-hide">
    <form action="compare.php" method="get" id="compare-form">
        <br />
        <button>开始比较</button>
    </form>
</div>
<script type="text/javascript">
    function Compare(id,name){
        if($('#compare').is(':hidden')){
            $('#compare').show();
        }
        if($('#compare_goods_'+id).length==0){
        $('#compare-form').prepend('<p><label id="compare_goods_'+id+'">'+name+'<input type="hidden" name="goods[]" value="'+id+'" /></label></p>');
        }else{
            alert('该商品已在比较列表中');
        }
        return false;
    }
</script>