<link href="themes/ecmoban_shishangqiyi/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>

<div class="heads" name="top" >
  <div class="block">
    <div class="user_control">
    <div class="shop_txt_out" id="ECS_CARTINFO" > <div class="shop_txt"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div></div>
      <ul>
        <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?> <font id="ECS_MEMBERZONE" style="display:block; float:left;"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
        <?php if ($this->_var['navigator_list']['top']): ?> 
        
        <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
        <li id="topNav" class="clearfix"> <a href="<?php echo $this->_var['nav']['url']; ?>" 
            <?php if ($this->_var['nav']['opennew'] == 1): ?> 
          target="_blank" 
          <?php endif; ?> 
          ><?php echo $this->_var['nav']['name']; ?></a> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        
        <?php endif; ?>
       
      </ul>
       
    </div>
  </div>
</div>
 



<div class="header ">
  <div class="headBody">
    <div class="headBox">
      <div class="ad_header">
        <div id="slideBox2" class="slideBox2">
          <div class="bd f_l">
            <ul>
              <li><img src="themes/ecmoban_shishangqiyi/images/pic1.jpg" /> </li>
              <
             
            </ul>
          </div>
          
        </div>
      </div>
      
      <div class="logo"><a href="index.php" ><img src="themes/ecmoban_shishangqiyi/images/logo.gif"  width="184" height="71"/></a></div>
      
    </div>
  </div>
</div>



<div class="block" style="height:45px;">
  <div class="headNav">
    <div class="subNav">
      <ul>
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['foo']['iteration']++;
?>
        
        <li  <?php if ($this->_var['nav']['active'] == 1): ?> class=" current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> 
          
          <?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?> 
          <img src="themes/ecmoban_shishangqiyi/images/icon_line1.gif" width="7" height="20"> 
          <?php endif; ?> 
          
        </li>
        
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  
  <div id="search"  class="headSearch">
    <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
      <Div class="headSearch_f_l"></Div>
      <div class="headSearch_input">
        <input name="keywords" type="text" id="keyword" value="" onclick="javascript:if(this.value=='')this.value=''"  />
      </div>
      <div class="headSearch_btn">
        <input name="imageField" type="submit" value=""  style="cursor:pointer;" />
      </div>
    </form>
  </div>
   
</div>
 

 
 

 


