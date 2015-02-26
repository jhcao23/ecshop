<?php if ($this->_var['notes']): ?>
<table>
    <tr>
        <th>用户名</th>
        <th><?php echo $this->_var['lang']['number']; ?></th>
        <th>购买时间</th>
        <th>订单状态</th>
    </tr>
    <?php $_from = $this->_var['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'note');if (count($_from)):
    foreach ($_from AS $this->_var['note']):
?>
    <tr>
        <td>
            <?php if ($this->_var['note']['user_name']): ?>
            <?php echo $this->_var['note']['user_name']; ?>
            <?php else: ?>
            匿名用户
            <?php endif; ?>
        </td>
        <td>
            <?php echo $this->_var['note']['goods_number']; ?>
        </td>
        <td>
            <?php echo $this->_var['note']['add_time']; ?>
        </td>
        <td>
            <?php if ($this->_var['note']['order_status']): ?>
            <?php echo $this->_var['lang']['turnover']; ?>
            <?php else: ?>
            <?php echo $this->_var['lang']['is_cancel']; ?>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<?php endif; ?>