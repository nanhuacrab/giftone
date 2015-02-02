<?php /* Smarty version 2.6.26, created on 2015-02-01 04:17:23
         compiled from default/announcement/show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'default/announcement/show.htm', 29, false),array('modifier', 'mb_substr', 'default/announcement/show.htm', 36, false),)), $this); ?>
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
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon,.yun_wap_m_bg,.micro_box');
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
/style/yun_job_fairs.css" type="text/css">
<link href="<?php echo $this->_tpl_vars['style']; ?>
/style/news.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--content  start-->
<div class="yun_content">
   <div class="current_Location icon"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > 系统公告 </div>
  <div class="right_sidebar fl" style="background:#fff;width:702px; padding:10px;">
 <div class="news_cont_h1"><?php echo $this->_tpl_vars['Info']['title']; ?>
</div>
 <div class="news_cont_ms"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 </div>
  <div class="news_text">
<?php echo $this->_tpl_vars['Info']['content']; ?>

<ul style="clear:both;">
<?php if (! empty ( $this->_tpl_vars['Info']['last'] )): ?>
<li>
<span>上一篇：</span>
<a href="<?php echo $this->_tpl_vars['Info']['last']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['last']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 16, 'gbk') : mb_substr($_tmp, 0, 16, 'gbk')); ?>
</a></li>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['Info']['next'] )): ?>
<br/>
<li>
<span>下一篇：</span>
<a href="<?php echo $this->_tpl_vars['Info']['next']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['next']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 16, 'gbk') : mb_substr($_tmp, 0, 16, 'gbk')); ?>
</a>
</li>
<?php endif; ?>
</ul>

<div class="clear"></div>
</div>
</div> 
<div class="left_sidebar fr">

    <div class="news_left fl ">
    	<div class="news_h1"><span>推d荐文章</span> </div>
    <div class="news_left_cont">
            <?php $_from = $this->_tpl_vars['news_jian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_jian']):
?>
            <dl>
            <dt><a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
"><img src="/<?php echo $this->_tpl_vars['news_jian']['newsphoto']; ?>
" alt="<?php echo $this->_tpl_vars['news_jian']['title']; ?>
" style="width:106px; height:69px;" /></a></dt>
            <dd><strong><a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
"><?php echo $this->_tpl_vars['news_jian']['title']; ?>
</a></strong><?php echo ((is_array($_tmp=$this->_tpl_vars['news_jian']['description'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 22, 'gbk') : mb_substr($_tmp, 0, 22, 'gbk')); ?>
<a href="<?php echo $this->_tpl_vars['news_jian']['url']; ?>
">[详情]</a></dd>
            </dl>
           <?php endforeach; endif; unset($_from); ?>  
    </div>
    </div>
	
    <div class="clear"></div>    
  
    <div class="news_left fl m5 ">
       <div class="news_h1"><span>热点文章</span> </div>
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
</div>
<!--content  end--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>