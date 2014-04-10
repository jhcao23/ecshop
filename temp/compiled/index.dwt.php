<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page">
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <div class="blank" style="height:20px;"></div>
  <div class="block ">
    <div class="AreaL" style="width:230px;"></div>
    <div style="float:right; width:820px;"> </div>
    <div class="blank5"></div> 
    
    <?php echo $this->fetch('library/recommend_promotion.lbi'); ?>

  
  <div class="goodsBox_1">
  
<?php echo $this->fetch('library/recommend_new.lbi'); ?>

  
  
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

<?php echo $this->fetch('library/recommend_best.lbi'); ?>

  </div> 
  
    </div>
  

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
