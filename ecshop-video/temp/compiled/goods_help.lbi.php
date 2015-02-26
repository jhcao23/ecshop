  <?php if ($this->_var['helps']): ?>
  <div class="tmbottomlogodiv">
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help');if (count($_from)):
    foreach ($_from AS $this->_var['help']):
?>
        <div class="tmbottomlogodiv_div1" style="margin:0;">
                  <div class="tmbottomlogodiv_div1_headdiv">
                      <h2><?php echo $this->_var['help']['cat_name']; ?></h2>
                  </div>                    
                   <ul class="tmbottomlogodiv_div1_ul">
                    <?php $_from = $this->_var['help']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
                           <li class="tmbottomlogodiv_div1_ul_li"><a href="<?php echo $this->_var['art']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['art']['title']); ?>"><?php echo $this->_var['art']['short_title']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                     </ul>
           </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
<?php endif; ?>