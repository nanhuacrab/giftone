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
  <div class="current_Location icon  png"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <a href="<?php echo smarty_function_url(array('m' => 'zph'), $this);?>
">��Ƹ��</a> > �λ���ҵ�嵥 </div>
  <div class="yun_zph_content"> 
    <div class="yun_zph_com_left fl">
      <div class="yun_zph_com_h1"><span>�λ���ҵ����</span></div>
      <div class="job_fairs_com"> 
	  <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['zph']):
?>
        <div class="yun_job_fairs_list">
          <div class="yun_zph_com_l"> <a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['zph']['uid']).",tp:post"), $this);?>
" target="_blank" class="yun_zph_com_name"><?php echo $this->_tpl_vars['zph']['comname']; ?>
</a> <span>չλ�ţ�<?php if ($this->_tpl_vars['zph']['inadd']): ?><?php echo $this->_tpl_vars['zph']['inadd']; ?>
<?php else: ?>δ֪<?php endif; ?></span>
            <div class="yun_zph_com_post"><span>��Ƹְλ��</span><?php if ($this->_tpl_vars['zph']['job']): ?><?php $_from = $this->_tpl_vars['zph']['job']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jlist']):
?><?php echo $this->_tpl_vars['jlist']['name']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?><?php endif; ?></div>
          </div>
          <div class="yun_zph_com_r"><a href="<?php echo $this->_tpl_vars['zph']['url']; ?>
" class="job_fairs_sub2" target="_blank">��ǰͶ���� </a></div>
        </div>
        <?php endforeach; else: ?>
        <div class="job_fairs_no">���޹�˾������</div>
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
    <span>���췽��</span>
    <p><?php echo $this->_tpl_vars['row']['organizers']; ?>
</p>
    </div>
      <div class="yun_zph_r_list">
    <span>ʱ�䰲�ţ�</span>
        <p>��ʼʱ�䣺<?php echo $this->_tpl_vars['row']['starttime']; ?>
</p>
         <p>����ʱ�䣺<?php echo $this->_tpl_vars['row']['endtime']; ?>
</p>
    </div>
         <div class="yun_zph_r_list">
    <span>��Ƹ��ص㣺</span>
        <p><?php echo $this->_tpl_vars['row']['address']; ?>
</p>
    </div>
             <div class="yun_zph_r_list">
    <span>��ͨ·�ߣ�</span>
        <p><?php echo $this->_tpl_vars['row']['traffic']; ?>
</p>
    </div>
             <div class="yun_zph_r_list">
    <span>�绰��ѯ��</span>
        <p>��ѯ�绰��<?php echo $this->_tpl_vars['row']['phone']; ?>
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