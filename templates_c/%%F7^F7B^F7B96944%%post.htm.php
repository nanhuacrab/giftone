<?php /* Smarty version 2.6.26, created on 2015-01-29 19:34:03
         compiled from company/default/post.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'company/default/post.htm', 24, false),array('function', 'jobpage', 'company/default/post.htm', 27, false),array('function', 'totime', 'company/default/post.htm', 47, false),array('modifier', 'mb_substr', 'company/default/post.htm', 42, false),)), $this); ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['com_style']; ?>
/images/comapply.css" type="text/css">
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
  <div class="current_Location icon png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">职位列表</a> > 职位展示 </div>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/job_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div class="Job_Introduction_cont">
   <?php echo getComJobPage(array('limit' => 10), $this);?>

   <?php if (! empty ( $this->_tpl_vars['jobpage'] )): ?>
    <div class="Company_post_list">
      <ul>
        <li class="Company_post_list_h1">
        <span class="Company_post_list_a">职位名称</span>
        <span class="Company_post_list_b">工作地点</span>
        <span class="Company_post_list_c">月薪</span>
         <span class="Company_post_list_c">学历</span> 
        <span  class="Company_post_list_e">招聘人数</span>   
        <span class="Company_post_list_c">发布日期</span>  
        <span class="Company_post_list_c">截止日期</span>
        </li>
       
       <?php $_from = $this->_tpl_vars['jobpage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
        <li> <span class="Company_post_list_a"><a target="_blank" href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['list']['id'])), $this);?>
" style="overflow:hidden;"><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 11, 'gbk') : mb_substr($_tmp, 0, 11, 'gbk')); ?>
</a></span>
        <span class="Company_post_list_b"><?php echo $this->_tpl_vars['list']['province']; ?>
 <?php echo $this->_tpl_vars['list']['city']; ?>
 <?php echo $this->_tpl_vars['list']['job_city_three']; ?>
&nbsp;</span>        
        <span class="Company_post_list_c"> <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['list']['salary']]; ?>
&nbsp;</span> 
         <span class="Company_post_list_c"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['list']['edu']]; ?>
&nbsp;</span>
        <span class="Company_post_list_e"><?php echo $this->_tpl_vars['list']['nums']; ?>
&nbsp;</span> 
        <span class="Company_post_list_c"><?php echo smarty_function_totime(array('time' => ($this->_tpl_vars['list']['sdate'])), $this);?>
&nbsp;</span> 
        <span class="Company_post_list_d"><?php echo smarty_function_totime(array('time' => ($this->_tpl_vars['list']['edate'])), $this);?>
&nbsp;</span> 
       
        </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
         
    <div class="clear"></div>
    <div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    <?php else: ?>
<div class="comapply_no_msg"> <div class="comapply_no_msg_cont"><span></span><em>该公司还没有发布职位!</em></div></div>
    <?php endif; ?>
  </div>
</div>
</div></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>