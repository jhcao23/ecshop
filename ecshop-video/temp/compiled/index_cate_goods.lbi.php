<div class="category" id="pc-digit">
<div class="category-item">
    <div class="ci-nav">
            <b></b>
            <h2>电脑数码</h2>
    </div>
<div class="ci-content">
    <ul>
        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cateone');if (count($_from)):
    foreach ($_from AS $this->_var['cateone']):
?>
        <li><a href="<?php echo $this->_var['cateone']['url']; ?>"><b>·</b><?php echo htmlspecialchars($this->_var['cateone']['name']); ?></a></li>
                    <?php $_from = $this->_var['cateone']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'catetwo');if (count($_from)):
    foreach ($_from AS $this->_var['catetwo']):
?>
                    <li title="<?php echo htmlspecialchars($this->_var['catetwo']['name']); ?>">
                               <a href="<?php echo $this->_var['catetwo']['url']; ?>"><b>·</b><?php echo htmlspecialchars($this->_var['catetwo']['name']); ?></a>
                        </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="ci-ads">
            <a href=""><img src="themes/houdunwang/images/ci-ads.jpg" alt=""></a>
    </div>
</div>
</div>

<div class="module module-tabs  module-square">
    <ul class="md-tabs">
            <li class="hover"><a href="">特价商品</a></li>
            <li><a href="">猜您喜欢</a></li>
            <li><a href="">热卖商品</a></li>
            <li><a href="">热评商品</a></li>
            <li><a href="">新品上架</a></li>
    </ul>
    <div class="md-content">
            <div class="fn-hide">
                    
                    <div class="slide cate-slide">
    <ul class="slide-ul">
            <li class="slide-list">
                    <a href=""><img src="themes/houdunwang/images/cs1.jpg" alt=""></a>
            </li>
            <li class="slide-list">
                    <a href=""><img src="themes/houdunwang/images/cs2.jpg" alt=""></a>
            </li>
            <li class="slide-list">
                    <a href=""><img src="themes/houdunwang/images/cs3.jpg" alt=""></a>
            </li>
            <li class="slide-list">
                    <a href=""><img src="themes/houdunwang/images/cs4.jpg" alt=""></a>
            </li>
    </ul>
    <div class="slide-nav">
            <div class="slide-nav-opacity"></div>
            <ul>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
            </ul>
    </div>
</div>
                    
                    <ul class="specials-goods">
                            <li class="sg-li-1">
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                            <li>
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                            <li class="sg-li-1">
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                            <li>
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                            <li>
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                            <li>
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                            <li>
                                    <div class="sg-info">
                                            <p><a href="">下单立减，特价到High！</a></p>
                                            <p class="price">&#165;4199.00</p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="themes/houdunwang/images/sp-ads.jpg" alt=""></a>
                                    </div>
                            </li>
                    </ul>
            </div>
            
            <div>
                    <ul class="specials-goods goods-list">
                        <?php $_from = $this->_var['goodslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                            <li>
                                    <div class="sg-info">
                                            <p><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></p>
                                            <p class="price">
                                                <?php if ($this->_var['goods']['promote_price'] != ''): ?>
                                                <?php echo $this->_var['goods']['promote_price']; ?>
                                                <?php else: ?>
                                                <?php echo $this->_var['goods']['shop_price']; ?>
                                                <?php endif; ?>
                                            </p>
                                    </div>
                                    <div class="sg-img">
                                            <a href=""><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt=""></a>
                                    </div>
                            </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
            </div>
            
    </div>
</div>


</div>