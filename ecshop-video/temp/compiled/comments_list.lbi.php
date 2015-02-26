<?php if ($this->_var['comments']): ?>
<table>
<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['comment']):
?>
<tr>
    <td><?php if ($this->_var['comment']['username']): ?><?php echo $this->_var['comment']['username']; ?><?php else: ?>匿名用户<?php endif; ?></td>
    <td>
        <?php echo $this->_var['comment']['add_time']; ?>
    </td>
    <td>
        <img src="themes/houdunwang/images/stars<?php echo $this->_var['comment']['rank']; ?>.gif" alt="<?php echo $this->_var['comment']['comment_rank']; ?>" />
    </td>
</tr>
<tr>
    <td></td>
    <td colspan="2">
        <?php echo $this->_var['comment']['content']; ?>
    </td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td>
        	 <?php if ($this->_var['comment']['re_content']): ?>
        <p><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><?php echo $this->_var['comment']['re_content']; ?></p>
                 <?php endif; ?>
    </td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<?php else: ?>

<span>该商品暂时没有评论，你可以添加评论！</span>
<?php endif; ?>