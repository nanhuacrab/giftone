<?php /* Smarty version 2.6.26, created on 2015-02-01 04:23:52
         compiled from wap/register.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/register.htm', 77, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script>
function checkfrom(){
	var username=$("#username").val();
	if(username==""){
		alert("用户名不能为空！");
		return false;
	}else if(username.length<2||username.length>16){
		alert("用户名长度应在2-16位！");
		return false;
	}
	var email=$("#email").val();
    var myreg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
    if(!myreg.test(email)){
		alert("邮箱格式错误！");
		return false;
	}
	var password=$("#password").val();
	var password2=$("#password2").val();
	if(password==""){
		alert("密码不能为空！");
		return false;
	}else if(password.length<6||password.length>20){
		alert("密码长度应在6-20位！");
		return false;
	}
	if(password!=password2){
		alert("两次密码不一致！");
		return false;
	}
	<?php if ($_GET['usertype'] == 2): ?>
	var linkman=$.trim($("#linkman").val());
	var moblie=$.trim($("#moblie").val());
	if(linkman==''){
		alert("联系人不能为空！");return false;
	}
	if(moblie==''){
		alert("联系电话不能为空！");return false;
	}
	<?php endif; ?>
}
</script>
<section class="wap_login">
  <form action="" method="post" onSubmit="return checkfrom();">
  <input name="wxid" type="hidden" value="<?php echo $_GET['wxid']; ?>
"/>
    <input name="usertype" type="hidden" value="<?php echo $_GET['usertype']; ?>
"/>
    <p><label style="width:auto;">用户名：</label>
     <input  class="input-common placeholder" name="username" id="username" type="text"  placeholder="请输入用户名" />
    </p>
    <p>
    <label style="width:auto;">邮 &nbsp;&nbsp;箱：</label>
      <input name="email" id="email" type="text"class="input-common placeholder" placeholder="请输入邮箱"/>
    </p>
    <p>
    <label style="width:auto;">密 &nbsp;&nbsp;码：</label>
      <input name="password" id="password" type="password"class="input-common placeholder" placeholder="请输入密码" />
    </p>
    <p>
    <label style="width:auto;">重复密码：</label>
      <input name="password2" id="password2" type="password"class="input-common placeholder" placeholder="请重复密码" />
    </p>
	<?php if ($_GET['usertype'] == 2): ?>
	<p>
    <label style="width:auto;">联&nbsp;系&nbsp;人：</label>
      <input name="linkman" id="linkman" type="text"class="input-common placeholder" placeholder="请输入联系人" />
    </p>
    <p>
    <label style="width:auto;">联系电话：</label>
      <input name="moblie" id="moblie" type="text"class="input-common placeholder" placeholder="请输入联系电话" />
    </p>
	<?php endif; ?>
    <input type="submit" name="submit" value="注册" class="btn-large" />
  </form>
  <section class="wap_login_no">已有账号？
  <?php if ($_GET['usertype'] == 2): ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">立即登录</a>
<?php else: ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">立即登录</a>
<?php endif; ?>
  </section>
</section>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 