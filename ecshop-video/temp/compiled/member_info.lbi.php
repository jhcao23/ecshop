<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<font style="position:relative; top:10px;">
<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php">用户中心</a>|
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
</font>
<?php else: ?>
 <a href="user.php">登录</a>
 <a href="user.php?act=register">注册</a>
<?php endif; ?>