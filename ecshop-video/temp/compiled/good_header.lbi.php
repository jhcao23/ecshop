    <div class="headdiv">
         <div class="rightback">
         </div>
          <div class="headdiv_centerdiv">
                <div class="headdiv_centerdiv_top">
                       <div class="headdiv_centerdiv_top_xiediv">
                       </div>
                       <div class="hcdtr">
                           <a href="mobile/" class="hcdtr_a1">
                              手机版
                           </a>
                         <span class="shuspan"></span>
<a class="hcdtr_a2">
                              喵，欢迎来后盾！
                           </a>
                    <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                           <span class="shuspan"></span>
                           <a href="user.php?act=collection_list" class="hcdtr_a6">
                             收藏夹
                            </a>
                             <span class="shuspan"></span>
                              <a href="flow.php" class="hcdtr_a7">
                             查看购物车
                            </a>
                             <?php if ($this->_var['navigator_list']['top']): ?>
                             <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'topnav');if (count($_from)):
    foreach ($_from AS $this->_var['topnav']):
?>
                             <a href="<?php echo $this->_var['topnav']['url']; ?>" <?php if ($this->_var['topnav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['topnav']['name']; ?></a>
                             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                             <?php endif; ?>
                       </div>
            </div>
            <div class="hcbdi">
               <a href="#" class="">
                   <img src="themes/houdunwang/images/logo.gif" alt="" />
               </a>
               <div class="hcbdi_inputdiv">
                   <form action="search.php" method="get" id="submitSearch">
                    <input type="text" name="keywords" id="keywords" class="hcbdi_input" />
                    <input type="submit" value="  " style="width: 80px;height: 30px;background: none;" />
                    </form>
               </div>
            </div>
          </div>
</div>
<script type="text/javascript">
    $('#submitSearch').submit(function(){
        if($('#keywords').val()==''){
            alert('请输入关键字！');
            return false;
        }
    });
</script>