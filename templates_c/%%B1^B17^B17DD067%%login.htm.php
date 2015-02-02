<?php /* Smarty version 2.6.26, created on 2015-02-01 04:18:46
         compiled from wap/login.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/login.htm', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<section class="wap_login"> 
	<form action="" method="post" onsubmit="return mlogin();">
		<input name="usertype" type="hidden" value="<?php echo $_GET['usertype']; ?>
"/>
		<input name="wxid" type="hidden" value="<?php echo $_GET['wxid']; ?>
"/>
		<p><input name="username" type="text" id="username" value="<?php echo $_GET['username']; ?>
" class="input-common placeholder" placeholder="请输入您的用户名" /></p>
		<p><input name="password" type="password" id="password" class="input-common placeholder" placeholder="请输入您的密码" /></p>
		<input type="submit" name="submit" value="登 录"  class="btn-large" />
	</form>
 </section>
<section class="wap_login_no">没有账号？ 
<?php if ($_GET['usertype'] == 2): ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'register','url' => "usertype:2"), $this);?>
" class="wap_member_mrecord_list wap_member_mrecord_list_no" style="color:#f60">立即注册</a>
<?php else: ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'register'), $this);?>
" class="wap_member_mrecord_list wap_member_mrecord_list_no" style="color:#f60">立即注册</a>
<?php endif; ?>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 