<div class="list-cate" id="list-cate">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cateone');if (count($_from)):
    foreach ($_from AS $this->_var['cateone']):
?>
    
    <div class="item <?php if ($this->_var['cateone']['id'] == $this->_var['category']): ?>current<?php endif; ?>">
            <h3>
                <?php if ($this->_var['cateone']['cat_id']): ?>
                    <b></b>
                <?php endif; ?>
                    <a href="<?php echo $this->_var['cateone']['url']; ?>"><?php echo htmlspecialchars($this->_var['cateone']['name']); ?></a>
            </h3>
            <ul>
                <?php $_from = $this->_var['cateone']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'catetwo');if (count($_from)):
    foreach ($_from AS $this->_var['catetwo']):
?>
                <li title="<?php echo htmlspecialchars($this->_var['catetwo']['name']); ?>">
                           <a href="<?php echo $this->_var['catetwo']['url']; ?>"><?php echo htmlspecialchars($this->_var['catetwo']['name']); ?></a>
                    </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>