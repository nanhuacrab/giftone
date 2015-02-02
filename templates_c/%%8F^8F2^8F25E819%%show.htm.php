<?php /* Smarty version 2.6.26, created on 2015-02-01 04:17:33
         compiled from company/default/show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'showpage', 'company/default/show.htm', 22, false),array('function', 'url', 'company/default/show.htm', 26, false),)), $this); ?>
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
<?php echo getComShowPage(array('limit' => 5), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">

<div class="current_Location icon"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">职位列表</a> > 环境展示 </div>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/job_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div class="Job_Introduction_cont">
    <div class="Company_show_list">
<?php if (! empty ( $this->_tpl_vars['showpage'] )): ?>
       <?php unset($this->_sections['show']);
$this->_sections['show']['name'] = 'show';
$this->_sections['show']['loop'] = is_array($_loop=$this->_tpl_vars['showpage']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['show']['show'] = true;
$this->_sections['show']['max'] = $this->_sections['show']['loop'];
$this->_sections['show']['step'] = 1;
$this->_sections['show']['start'] = $this->_sections['show']['step'] > 0 ? 0 : $this->_sections['show']['loop']-1;
if ($this->_sections['show']['show']) {
    $this->_sections['show']['total'] = $this->_sections['show']['loop'];
    if ($this->_sections['show']['total'] == 0)
        $this->_sections['show']['show'] = false;
} else
    $this->_sections['show']['total'] = 0;
if ($this->_sections['show']['show']):

            for ($this->_sections['show']['index'] = $this->_sections['show']['start'], $this->_sections['show']['iteration'] = 1;
                 $this->_sections['show']['iteration'] <= $this->_sections['show']['total'];
                 $this->_sections['show']['index'] += $this->_sections['show']['step'], $this->_sections['show']['iteration']++):
$this->_sections['show']['rownum'] = $this->_sections['show']['iteration'];
$this->_sections['show']['index_prev'] = $this->_sections['show']['index'] - $this->_sections['show']['step'];
$this->_sections['show']['index_next'] = $this->_sections['show']['index'] + $this->_sections['show']['step'];
$this->_sections['show']['first']      = ($this->_sections['show']['iteration'] == 1);
$this->_sections['show']['last']       = ($this->_sections['show']['iteration'] == $this->_sections['show']['total']);
?>
      <dl>
      <dt><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['showpage'][$this->_sections['show']['index']]['picurl']; ?>
" width="270" height="180" /></dt> 
       <div class="job_show_bg"></div><dd><?php echo $this->_tpl_vars['showpage'][$this->_sections['show']['index']]['title']; ?>
</dd>      
      </dl>
       <?php endfor; endif; ?>
       <div class="clear"></div>
        
      <div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    	<?php else: ?>
        <div class="comapply_no_msg"> <div class="comapply_no_msg_cont"><span></span><em>该公司还没有上传环境展示!</em></div></div>
      	<?php endif; ?>
    </div>
</div>
</div></div></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>