<div class="block">
  <p class="home">
    <span><a href="index.php">HOME</a></span>
    <span style="width:10px;"><img src="themes/ecmoban_shishangqiyi/images/bottom_line1.gif" width="3" height="19"></span>
    <span><a href="#top">TOP</a> </span>
  </p>
  <div class="blank"></div>
</div>
<div class="bottom_line"></div>
<div class="bottom_img">
  <div class="bottom_log">
    <img src="themes/ecmoban_shishangqiyi/images/bottom_logo.gif" width="239" height="45">
  </div>
  <div class="bottom_tel">
    <img src="themes/ecmoban_shishangqiyi/images/bottom_400.gif" width="419" height="105">
  </div>



</div>
<div class=" bottom_line2"></div>


<div class="footer_txt "> 


  <div class="block">


    <div class="bNavList ">
      <p > 
        <?php if ($this->_var['navigator_list']['bottom']): ?> 
        <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_44979300_1399940986');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_44979300_1399940986']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
        <a href="<?php echo $this->_var['nav_0_44979300_1399940986']['url']; ?>" <?php if ($this->_var['nav_0_44979300_1399940986']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_44979300_1399940986']['name']; ?></a> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?> 
      </p>
    </div>

    <div style=" line-height:22px;">

      <?php if ($this->_var['icp_number']): ?>
      <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
      <?php endif; ?>
      <?php echo $this->_var['copyright']; ?>
      <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> <a href=" http://www.ecmoban.com" target="_blank" style=" vertical-align:middle;"><img src="themes/ecmoban_shishangqiyi/images/ecmoban.gif" alt="ECShop模板"></a>
      <?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php echo $this->_var['licensed']; ?><br />
      <?php if ($this->_var['stats_code']): ?>
      <div align="center"><?php echo $this->_var['stats_code']; ?></div>
      <?php endif; ?>


    </div>

    <div class="blank"></div>  
  </div>
</div>
</div>



<link href="themes/ecmoban_shishangqiyi/qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
  <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
      <ul>

       <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
       <?php if ($this->_var['im']): ?>
       <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> </li>
       <?php endif; ?>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
       <?php if ($this->_var['im']): ?>
       <li><a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a></li>
       <?php endif; ?>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
       <?php if ($this->_var['im']): ?>
       <li><img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a></li>
       <?php endif; ?> 
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       <?php if ($this->_var['service_phone']): ?>
       <li> 服务热线: <?php echo $this->_var['service_phone']; ?></li>
       <?php endif; ?>
     </ul>
   </div>
   <div class="b"></div>
 </div>
 <div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="themes/ecmoban_shishangqiyi/qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
  //<![CDATA[
  var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
  function initFloatTips() {
    tips = document.getElementById('divQQbox');
    moveTips();
  };
  function moveTips() {
    var tt=50;
    if (window.innerHeight) {
      pos = window.pageYOffset
    }
    else if (document.documentElement && document.documentElement.scrollTop) {
      pos = document.documentElement.scrollTop
    }
    else if (document.body) {
      pos = document.body.scrollTop;
    }
    pos=pos-tips.offsetTop+theTop;
    pos=tips.offsetTop+pos/10;
    if (pos < theTop) pos = theTop;
    if (pos != old) {
      tips.style.top = pos+"px";
      tt=10;
  //alert(tips.style.top);
  }
  old = pos;
  setTimeout(moveTips,tt);
  }
  //!]]>
  initFloatTips();
  function OnlineOver(){
    document.getElementById("divMenu").style.display = "none";
    document.getElementById("divOnline").style.display = "block";
    document.getElementById("divQQbox").style.width = "170px";
  }
  function OnlineOut(){
    document.getElementById("divMenu").style.display = "block";
    document.getElementById("divOnline").style.display = "none";
  }
  if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
  {   
    HTMLElement.prototype.contains=function(obj)   
    {   
            while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
             　　　　if(obj==this) return true;   
             　　　　obj=obj.parentNode;
           　　}   
           return false;   
         };   
       }  
  function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
    　 if (theEvent){
  　 var browser=navigator.userAgent; //取得浏览器属性
  　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
  　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
  　　 return; //结束函式
  } 
  } 
  if (browser.indexOf("MSIE")>0){ //如果是IE
  if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
  return; //结束函式
  }
  }
  }
  /*要执行的操作*/
  document.getElementById("divMenu").style.display = "block";
  document.getElementById("divOnline").style.display = "none";
  }
</script>

