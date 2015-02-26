<div class="clearfix">
<?php if ($this->_var['pictures']): ?>
<ul id="thumblist" class="clearfix" >
<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic');if (count($_from)):
    foreach ($_from AS $this->_var['pic']):
?>

        <li>
            <a class="" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo $this->_var['pic']['thumb_middle_url']; ?>',largeimage: '<?php echo $this->_var['pic']['img_url']; ?>'}" title="<?php echo $this->_var['pic']['img_desc']; ?>">
                <img src='<?php echo $this->_var['pic']['thumb_url']; ?>' >
            </a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<?php endif; ?>
 </div>