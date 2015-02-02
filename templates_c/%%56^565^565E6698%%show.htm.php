<?php /* Smarty version 2.6.26, created on 2015-01-31 22:05:13
         compiled from default/news/show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/news/show.htm', 25, false),array('modifier', 'date_format', 'default/news/show.htm', 28, false),array('modifier', 'mb_substr', 'default/news/show.htm', 50, false),)), $this); ?>
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
<!--content  start-->
<div class="yun_content">
  <div class="current_Location icon png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'news'), $this);?>
">职场资讯</a> > <a href="<?php echo smarty_function_url(array('m' => 'news','url' => "c:list,nid:".($this->_tpl_vars['Info']['nid'])), $this);?>
"><?php echo $this->_tpl_vars['Info']['news_class']; ?>
</a></div>
  <div class="right_sidebar fl" style="background:#fff;width:700px; padding:10px;border:1px solid #ddd;">
 <div class="news_cont_h1"><?php if ($this->_tpl_vars['Info']['color']): ?><font color="<?php echo $this->_tpl_vars['Info']['color']; ?>
"><?php echo $this->_tpl_vars['Info']['title']; ?>
</font><?php else: ?><?php echo $this->_tpl_vars['Info']['title']; ?>
<?php endif; ?></div>
 <div class="news_cont_ms"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 来源：<?php echo $this->_tpl_vars['Info']['source']; ?>
 点击：<span id="click"><script language="javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=index&c=GetHits&id=<?php echo $this->_tpl_vars['Info']['id']; ?>
"></script></span> 次 </div>
  <div class="news_text">
<?php echo $this->_tpl_vars['Info']['content']; ?>
</div>
<div class="clear"></div>
<ul class="news_show_pages">
<?php if (! empty ( $this->_tpl_vars['Info']['last'] )): ?>
<li>
<span>上一篇：</span>
<a title="<?php echo $this->_tpl_vars['Info']['last']['title']; ?>
" href="<?php echo $this->_tpl_vars['Info']['last']['url']; ?>
"><?php echo $this->_tpl_vars['Info']['last']['title']; ?>
</a></li>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['Info']['next'] )): ?>
<li>
<span>下一篇：</span>
<a title="<?php echo $this->_tpl_vars['Info']['next']['title']; ?>
" href="<?php echo $this->_tpl_vars['Info']['next']['url']; ?>
"><?php echo $this->_tpl_vars['Info']['next']['title']; ?>
</a>
</li>
<?php endif; ?>
</ul>

<div class="clear"></div>

<ul class="news_ul_news" style="text-align:left"><div class="news_show_wz">相关文章：</div>
<?php $_from = $this->_tpl_vars['Info']['like']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['about']):
?>
<li><font color="#077AC7">·</font><a title="<?php echo $this->_tpl_vars['about']['title']; ?>
" href="<?php echo $this->_tpl_vars['about']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['about']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 16, 'gbk') : mb_substr($_tmp, 0, 16, 'gbk')); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="clear"></div>
</div>

  <div class="left_sidebar fr">

    <div class="news_left fl ">    <div class="news_h1"><span>推荐文章</span> </div>
    <div class="news_left_cont">
		<?php $_from = $this->_tpl_vars['news_jian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['news_jian']):
?> 
		<?php if ($this->_tpl_vars['key'] == '0' && empty ( $this->_tpl_vars['news_jian'] )): ?>
		<div>暂无推荐</div>
		<?php else: ?>
			<dl>
			<dt><a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['news_jian']['newsphoto']; ?>
" alt="<?php echo $this->_tpl_vars['news_jian']['title']; ?>
" style="width:106px; height:69px;" /></a></dt>
			<dd><strong><a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
"><?php echo $this->_tpl_vars['news_jian']['title']; ?>
</a></strong><?php echo ((is_array($_tmp=$this->_tpl_vars['news_jian']['description'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 22, 'gbk') : mb_substr($_tmp, 0, 22, 'gbk')); ?>
<a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
">[详情]</a></dd>
			</dl>
		<?php endif; ?>
	   <?php endforeach; endif; unset($_from); ?>  
    </div>
    </div>
   
    <div class="news_left fl m5 ">    <div class="news_h1"><span>热点文章</span> </div>
     <div class="news_left_cont">
      <ul>
        <?php $_from = $this->_tpl_vars['news_hits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['news_hits']):
?>
			<?php if ($this->_tpl_vars['key'] == '0' && empty ( $this->_tpl_vars['news_hits'] )): ?>
			<div>暂无文章</div>
			<?php else: ?>
			<li><a href="<?php echo $this->_tpl_vars['news_hits']['url']; ?>
" class="icon2"><?php echo $this->_tpl_vars['news_hits']['title']; ?>
</a></li>
			<?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
    </div>
  </div>
</div></div>
<!--content  end--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>