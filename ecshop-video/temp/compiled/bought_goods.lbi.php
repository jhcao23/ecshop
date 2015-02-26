<?php if ($this->_var['bought_goods']): ?>
<div class="pingjiaheaddiv">
                 买了此商品的会员通常还买了
</div>
<?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought');if (count($_from)):
    foreach ($_from AS $this->_var['bought']):
?>
 <div class="reseemaindiv">
    <div class="reseemaindiv_div1">
          <a href="<?php echo $this->_var['bought']['url']; ?>"><img src="<?php echo $this->_var['bought']['goods_thumb']; ?>" style="margin-bottom:10px;"/></a>

          <a href="#" title="<?php echo $this->_var['bought']['goods_name']; ?>"><?php echo $this->_var['bought']['short_name']; ?></a><br/>
        <?php if ($this->_var['bought']['promote_price'] != 0): ?>
        <span class="hongspan"><?php echo $this->_var['bought']['formated_promote_price']; ?></span>
        <?php else: ?>
        <span class="hongspan"><?php echo $this->_var['bought']['shop_price']; ?></span>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>