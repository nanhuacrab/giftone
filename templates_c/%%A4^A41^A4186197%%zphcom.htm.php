<?php /* Smarty version 2.6.26, created on 2015-02-01 04:19:48
         compiled from default/zph/zphcom.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/zph/zphcom.htm', 24, false),array('function', 'curl', 'default/zph/zphcom.htm', 31, false),)), $this); ?>
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
/style/yun_job_fairs.css" type="text/css">
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
  <div class="current_Location icon  png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'zph'), $this);?>
">招聘会</a> > 参会企业清单 </div>
  <div class="yun_zph_content"> 
    <div class="yun_zph_com_left fl">
      <div class="yun_zph_com_h1"><span>参会企业名单</span></div>
      <div class="job_fairs_com"> 
	  <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['zph']):
?>
        <div class="yun_job_fairs_list">
          <div class="yun_zph_com_l"> <a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['zph']['uid']).",tp:post"), $this);?>
" target="_blank" class="yun_zph_com_name"><?php echo $this->_tpl_vars['zph']['comname']; ?>
</a> <span>展位号：<?php if ($this->_tpl_vars['zph']['inadd']): ?><?php echo $this->_tpl_vars['zph']['inadd']; ?>
<?php else: ?>未知<?php endif; ?></span>
            <div class="yun_zph_com_post"><span>招聘职位：</span><?php if ($this->_tpl_vars['zph']['job']): ?><?php $_from = $this->_tpl_vars['zph']['job']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jlist']):
?><?php echo $this->_tpl_vars['jlist']['name']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?><?php endif; ?></div>
          </div>
          <div class="yun_zph_com_r"><a href="<?php echo $this->_tpl_vars['zph']['url']; ?>
" class="job_fairs_sub2" target="_blank">提前投简历 </a></div>
        </div>
        <?php endforeach; else: ?>
        <div class="job_fairs_no">暂无公司报名！</div>
        <?php endif; unset($_from); ?> 
        <div class="clear"></div>
        <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
 </div>
      
      </div>
    </div>
     <div class="yun_zph_com_right fr">
    <div class="yun_zph_name"><a href="<?php echo smarty_function_url(array('m' => 'zph','url' => "c:show,id:".($this->_tpl_vars['row']['id'])), $this);?>
"><?php echo $this->_tpl_vars['row']['title']; ?>
</a></div>
    <div class="yun_zph_img"><a href="<?php echo smarty_function_url(array('m' => 'zph','url' => "c:show,id:".($this->_tpl_vars['row']['id'])), $this);?>
"><img width="265" height="190" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['row']['pic']; ?>
"></a></div>
    <div class="yun_zph_r_list">
    <span>主办方：</span>
    <p><?php echo $this->_tpl_vars['row']['organizers']; ?>
</p>
    </div>
      <div class="yun_zph_r_list">
    <span>时间安排：</span>
        <p>开始时间：<?php echo $this->_tpl_vars['row']['starttime']; ?>
</p>
         <p>结束时间：<?php echo $this->_tpl_vars['row']['endtime']; ?>
</p>
    </div>
         <div class="yun_zph_r_list">
    <span>招聘会地点：</span>
        <p><?php echo $this->_tpl_vars['row']['address']; ?>
</p>
    </div>
             <div class="yun_zph_r_list">
    <span>交通路线：</span>
        <p><?php echo $this->_tpl_vars['row']['traffic']; ?>
</p>
    </div>
             <div class="yun_zph_r_list">
    <span>电话咨询：</span>
        <p>咨询电话：<?php echo $this->_tpl_vars['row']['phone']; ?>
</p>
    </div>
    
    
    </div>
    
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>