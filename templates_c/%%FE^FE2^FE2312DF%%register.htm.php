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
		alert("�û�������Ϊ�գ�");
		return false;
	}else if(username.length<2||username.length>16){
		alert("�û�������Ӧ��2-16λ��");
		return false;
	}
	var email=$("#email").val();
    var myreg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
    if(!myreg.test(email)){
		alert("�����ʽ����");
		return false;
	}
	var password=$("#password").val();
	var password2=$("#password2").val();
	if(password==""){
		alert("���벻��Ϊ�գ�");
		return false;
	}else if(password.length<6||password.length>20){
		alert("���볤��Ӧ��6-20λ��");
		return false;
	}
	if(password!=password2){
		alert("�������벻һ�£�");
		return false;
	}
	<?php if ($_GET['usertype'] == 2): ?>
	var linkman=$.trim($("#linkman").val());
	var moblie=$.trim($("#moblie").val());
	if(linkman==''){
		alert("��ϵ�˲���Ϊ�գ�");return false;
	}
	if(moblie==''){
		alert("��ϵ�绰����Ϊ�գ�");return false;
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
    <p><label style="width:auto;">�û�����</label>
     <input  class="input-common placeholder" name="username" id="username" type="text"  placeholder="�������û���" />
    </p>
    <p>
    <label style="width:auto;">�� &nbsp;&nbsp;�䣺</label>
      <input name="email" id="email" type="text"class="input-common placeholder" placeholder="����������"/>
    </p>
    <p>
    <label style="width:auto;">�� &nbsp;&nbsp;�룺</label>
      <input name="password" id="password" type="password"class="input-common placeholder" placeholder="����������" />
    </p>
    <p>
    <label style="width:auto;">�ظ����룺</label>
      <input name="password2" id="password2" type="password"class="input-common placeholder" placeholder="���ظ�����" />
    </p>
	<?php if ($_GET['usertype'] == 2): ?>
	<p>
    <label style="width:auto;">��&nbsp;ϵ&nbsp;�ˣ�</label>
      <input name="linkman" id="linkman" type="text"class="input-common placeholder" placeholder="��������ϵ��" />
    </p>
    <p>
    <label style="width:auto;">��ϵ�绰��</label>
      <input name="moblie" id="moblie" type="text"class="input-common placeholder" placeholder="��������ϵ�绰" />
    </p>
	<?php endif; ?>
    <input type="submit" name="submit" value="ע��" class="btn-large" />
  </form>
  <section class="wap_login_no">�����˺ţ�
  <?php if ($_GET['usertype'] == 2): ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">������¼</a>
<?php else: ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">������¼</a>
<?php endif; ?>
  </section>
</section>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 