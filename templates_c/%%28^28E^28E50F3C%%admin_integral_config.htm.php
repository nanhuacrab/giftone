<?php /* Smarty version 2.6.26, created on 2015-01-29 18:30:21
         compiled from admin/admin_integral_config.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="admin_h1_bg infoboxp_topIjf">
    <span class="infoboxp_top_span">��������</span>
	<span class="infoboxp_top_span_sz infoboxp_top_span_sz_in "><a href="index.php?m=integral">��������</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=integral&c=user">���˻���</a></span>
	<span class="infoboxp_top_span_sz"><a href="index.php?m=integral&c=com">��ҵ����</a></span>
</div>
<div class="main_tag">
<div class="tag_box">
<div>
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">����˵����</th>
          <td>����ֵ</td>
          <td width="280">����</td>
    </tr>
        <tr>
		<th width="220">���ִ���ʣ�</th>
		<td><input class="input-text tips_class" type="text" name="integral_pricename" id="integral_pricename" value="<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
" size="20" maxlength="255"/> <font color="gray" style="display:none">Ĭ��Ϊ���֣��������</font></td>
         <td width="280">integral_pricename</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��λ��</th>
		<td><input class="input-text tips_class" type="text" name="integral_priceunit" id="integral_priceunit" value="<?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
" size="20" maxlength="255"/> <font color="gray" style="display:none">Ĭ��Ϊ�㣬��������λ</font></td>
        <td width="280">integral_priceunit</td>
	</tr>
    <tr>
		<th width="220"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
�һ�������</th>
		<td><input class="input-text tips_class" type="text" name="integral_proportion" id="integral_proportion" value="<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
" size="20" maxlength="255"/>�� <font color="gray" style="display:none">����1Ԫ=30�����</font></td>
        <td width="280">integral_proportion</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">��Աע�᣺</th>
		<td>
        <select id="integral_reg_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_reg_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_reg_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_reg" id="integral_reg" value="<?php echo $this->_tpl_vars['config']['integral_reg']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_reg_type / integral_reg</td>
	</tr>
    <tr>
	<th width="220">ÿ���һ�ε�¼��</th>
		<td>
        <select id="integral_login_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_login_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_login_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_login" id="integral_login" value="<?php echo $this->_tpl_vars['config']['integral_login']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_login_type / integral_login</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">���ƻ������ϣ�</th>
		<td>
        <select id="integral_userinfo_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_userinfo_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_userinfo_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_userinfo" id="integral_userinfo" value="<?php echo $this->_tpl_vars['config']['integral_userinfo']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_userinfo_type / integral_userinfo</td>
	</tr>  
    <tr>
	<th width="220">������֤��</th>
		<td>
        <select id="integral_emailcert_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_emailcert_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_emailcert_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_emailcert" id="integral_emailcert" value="<?php echo $this->_tpl_vars['config']['integral_emailcert']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_emailcert_type / integral_emailcert</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">�ֻ���֤��</th>
		<td>
        <select id="integral_mobliecert_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_mobliecert_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_mobliecert_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_mobliecert" id="integral_mobliecert" value="<?php echo $this->_tpl_vars['config']['integral_mobliecert']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_mobliecert_type / integral_mobliecert</td>
	</tr>
    <tr>
	<th width="220">�ϴ�ͷ��</th>
		<td>
        <select id="integral_avatar_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_avatar_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_avatar_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_avatar" id="integral_avatar" value="<?php echo $this->_tpl_vars['config']['integral_avatar']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_avatar_type / integral_avatar</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">�������⣺</th>
		<td>
        <select id="integral_question_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_question_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_question_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_question" id="integral_question" value="<?php echo $this->_tpl_vars['config']['integral_question']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_question_type / integral_question</td>
	</tr>
    <tr>
	<th width="220">�ش����⣺</th>
		<td>
        <select id="integral_answer_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_answer_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_answer_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_answer" id="integral_answer" value="<?php echo $this->_tpl_vars['config']['integral_answer']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_answer_type / integral_answer</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">���ۻش�</th>
		<td>
        <select id="integral_answerpl_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_answerpl_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_answerpl_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_answerpl" id="integral_answerpl" value="<?php echo $this->_tpl_vars['config']['integral_answerpl']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_answerpl_type / integral_answerpl</td>
	</tr>
    <tr>
	<th width="220">����Ȧ���ԣ�</th>
		<td>
        <select id="integral_friend_msg_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_friend_msg_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_friend_msg_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_friend_msg" id="integral_friend_msg" value="<?php echo $this->_tpl_vars['config']['integral_friend_msg']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_friend_msg_type / integral_friend_msg</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">����Ȧ�ظ���</th>
		<td>
        <select id="integral_friend_reply_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_friend_reply_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_friend_reply_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_friend_reply" id="integral_friend_reply" value="<?php echo $this->_tpl_vars['config']['integral_friend_reply']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_friend_reply_type / integral_friend_reply</td>
	</tr>
    <tr>
	<th width="220">����ע�᣺</th>
		<td>
        <select id="integral_invite_reg_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_invite_reg_type'] == '1'): ?>selected<?php endif; ?>>��</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_invite_reg_type'] == '2'): ?>selected<?php endif; ?>>��</option>
        </select>
         <input class="input-text" type="text" name="integral_invite_reg" id="integral_invite_reg" value="<?php echo $this->_tpl_vars['config']['integral_invite_reg']; ?>
" size="13" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_invite_reg_type / integral_invite_reg</td>
	</tr>
    <tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="integral" type="button" name="config" value="�ύ" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
</table>
</div>

</div>
</div>
</div>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<script>
$(function(){
	$("#integral").click(function(){
		$.post("index.php?m=integral&c=save",{
			config : $("#integral").val(),
			integral_pricename : $("#integral_pricename").val(),
			integral_priceunit : $("#integral_priceunit").val(),
			integral_proportion : $("#integral_proportion").val(),
			integral_reg_type : $("#integral_reg_type").val(),
			integral_reg : $("#integral_reg").val(),
			integral_login_type : $("#integral_login_type").val(),
			integral_login : $("#integral_login").val(),
			integral_userinfo_type : $("#integral_userinfo_type").val(),
			integral_userinfo : $("#integral_userinfo").val(),
			integral_emailcert_type : $("#integral_emailcert_type").val(),
			integral_emailcert : $("#integral_emailcert").val(),
			integral_mobliecert_type : $("#integral_mobliecert_type").val(),
			integral_mobliecert : $("#integral_mobliecert").val(),
			integral_avatar_type : $("#integral_avatar_type").val(),
			integral_avatar : $("#integral_avatar").val(),
			integral_question_type : $("#integral_question_type").val(),
			integral_question : $("#integral_question").val(),
			integral_answer_type : $("#integral_answer_type").val(),
			integral_answer : $("#integral_answer").val(),
			integral_answerpl_type : $("#integral_answerpl_type").val(),
			integral_answerpl : $("#integral_answerpl").val(),
			integral_friend_msg_type : $("#integral_friend_msg_type").val(),
			integral_friend_msg : $("#integral_friend_msg").val(),
			integral_friend_reply_type : $("#integral_friend_reply_type").val(),
			integral_friend_reply : $("#integral_friend_reply").val(),
			integral_invite_reg_type : $("#integral_invite_reg_type").val(),
			integral_invite_reg : $("#integral_invite_reg").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</body>
</html>