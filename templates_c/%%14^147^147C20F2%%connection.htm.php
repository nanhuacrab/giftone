<?php /* Smarty version 2.6.26, created on 2015-01-31 10:19:02
         compiled from company/default/connection.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'company/default/connection.htm', 26, false),array('function', 'image', 'company/default/connection.htm', 50, false),)), $this); ?>
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
<script> var weburl = "<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"</script>
<div class="yun_content">

<div class="current_Location icon png"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">ְλ�б�</a> > ��ϵ���� </div>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/job_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="Job_Introduction_cont">
	<div class="clear"></div>
<?php if ($this->_tpl_vars['look_msg'] != ""): ?>
	<div class="about_touch">
	  <div class="clear"></div>
		<div class="about_touch_logoin" style="margin:30px 0;">
			<div class="about_touch_title">
				<div class="about_touch_red"><?php echo $this->_tpl_vars['look_msg']; ?>
</div>
				<?php if ($this->_tpl_vars['looktype'] == '1'): ?>
				<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=expect&add=<?php echo $this->_tpl_vars['uid']; ?>
" class="yun_bth_icon">��������</a>
				<?php elseif ($this->_tpl_vars['looktype'] == '2'): ?>
				<a  style="cursor:pointer" onclick="showcomlogin();"  class="yun_bth_icon">������½</a>
				<a href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="yun_bth_icon">����ע��</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php else: ?>

	<div class="Company_details">
	  <ul>
		<li><strong>��˾��ַ</strong><em><?php echo $this->_tpl_vars['com']['address']; ?>
</em></li>
		<li><strong>�̶��绰</strong><em><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['com']['uid'],'action' => 'linkphone'), $this);?>
</em></li>
		<li><strong>��ϵ�绰</strong><em><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['com']['uid'],'action' => 'linktel'), $this);?>
</em></li>
		<li><strong>��ϵ�ʼ�</strong><em><?php echo $this->_tpl_vars['com']['linkmail']; ?>
</em></li>
        <li><strong>�� ϵ QQ</strong><em><?php echo $this->_tpl_vars['com']['linkqq']; ?>
</em></li>
		<li><strong>��������</strong><em><?php echo $this->_tpl_vars['com']['zip']; ?>
</em></li>
		<li><strong>��ҵ��ַ</strong><em><?php echo $this->_tpl_vars['com']['website']; ?>
 </em></li>
	  </ul>
	</div>
	<?php endif; ?>
</div>
</div>
<div class="Pop-up_box" id="touch_lo"  style="display:none"> 
	<div class="Pop-up_logoin">
		<form action="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=login&c=loginsave" method="post">
		  <div class="Pop-up_logoin_list">
		  <span>�û�����</span>
		  <input type="text" id="username" value="" tabindex="1"  size="18" name="username" class="ajax_login_input">
		 </div>
		   <div class="Pop-up_logoin_list">
		  <span>��&nbsp;&nbsp;�룺</span>
		  <input type="password" id="password" tabindex="2"  size="18" name="password" value=""class="ajax_login_input">
		</div>
		<div class="Pop-up_logoin_list">
		 <span>��֤�룺</span>
		 <input id="authcode" type="text" tabindex="3"   maxlength="4" name="authcode" class="ajax_login_input w60">
		 <img id="vcode_img" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/include/authcode.inc.php" >&nbsp;<a href="javascript:checkcode();">������?</a>
		 </div>
			<div class="Pop-up_logoin_list">
			<span>&nbsp; </span>
		  <input id="loginsubmit" type="button" name="loginsubmit" class="login_button" onclick="checklogin()">
		  <a href="<?php echo smarty_function_url(array('m' => 'login'), $this);?>
" ></a>
		  <a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
" class="Orange"><font color="#006699">���������ˣ�</font></a>
		  </div>
		  </form>
		  <div class="Pop-up_logoin_bot"> <span>&nbsp;</span> ��û���˺ţ�<a href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="Orange">���ע��</a> </div> 
	</div>
</div></div></div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>