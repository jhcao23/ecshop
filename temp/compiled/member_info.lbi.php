<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>

 <li><?php echo $this->_var['lang']['hello']; ?>,<font><?php echo $this->_var['user_info']['username']; ?></font>,<?php echo $this->_var['lang']['welcome_return']; ?>！</li>
<li><a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a></li>
<li> <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>

<?php else: ?>
 
 <li><a href="user.php">登录</a></li>
<?php endif; ?>