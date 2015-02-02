<?php /* Smarty version 2.6.26, created on 2015-02-01 14:03:20
         compiled from default/news/list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_substr', 'default/news/list.htm', 46, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/news.css" type="text/css">
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
  <div class="current_Location icon png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > 职场资讯</div>
  <div class="left_sidebar fr">

    <div class="news_left fl" style="margin-bottom:10px;"><div class="left_sidebar_new"> 资讯分类</div>
      <div class="news_left_tlists">
        <ul>
   

		  <?php $_from = $this->_tpl_vars['arcgroupright']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['arcgroupright']):
?>
			<li><a href="<?php echo $this->_tpl_vars['arcgroupright']['url']; ?>
" class="icon2"><?php echo $this->_tpl_vars['arcgroupright']['name']; ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>

        </ul>
      </div>
    </div>
  
 
    <div class="news_left fl m5">
   <div class="left_sidebar_new">  推荐文章</div>
      <div class="news_left_cont"> <?php $_from = $this->_tpl_vars['news_jian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_jian']):
?>
        <dl>
          <dt><a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['news_jian']['newsphoto']; ?>
" alt="<?php echo $this->_tpl_vars['news_jian']['title']; ?>
" style="width:106px; height:69px;" /></a></dt>
          <dd><strong><a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
" title="<?php echo $this->_tpl_vars['news_jian']['title']; ?>
"><?php echo $this->_tpl_vars['news_jian']['title']; ?>
</a></strong><?php echo ((is_array($_tmp=$this->_tpl_vars['news_jian']['description'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 22, 'gbk') : mb_substr($_tmp, 0, 22, 'gbk')); ?>
<a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
">[详情]</a></dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?> </div>
    </div>
	

    <div class="news_left fl m5">
    <div class="left_sidebar_new"> 热点文章</div>
      <div class="news_left_cont">
        <ul>
          <?php $_from = $this->_tpl_vars['news_hits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_hits']):
?>
          <li><a href="<?php echo $this->_tpl_vars['news_hits']['url']; ?>
" class="icon2"><?php echo $this->_tpl_vars['news_hits']['title']; ?>
</a></li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
    </div>
	
  </div>
  <div class="news_right_sidebar fl"> <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
    <div class="news_right_list fl">
      <div class="news_right_list_h1"><a href="<?php echo $this->_tpl_vars['news']['url']; ?>
"><?php echo $this->_tpl_vars['news']['title']; ?>
</a> <em><?php echo $this->_tpl_vars['news']['time']; ?>
</em></div>
      <div class="news_right_list_p"> <?php echo ((is_array($_tmp=$this->_tpl_vars['news']['description'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
 </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
 </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 