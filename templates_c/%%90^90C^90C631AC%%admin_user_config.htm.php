<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:29
         compiled from admin/admin_user_config.htm */ ?>
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
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="infoboxp_top infoboxp_topIjf">
    <span class="infoboxp_top_span">�û�����</span>
	<span class="infoboxp_top_span_sz infoboxp_top_span_sz_in "><a href="index.php?m=userconfig">��������</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=userconfig&c=com">��ҵ����</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=userconfig&c=avatar">��Աͷ��</a></span>

</div>
<div class="main_tag">
<div class="tag_box">
<div class="">
<table width="100%" class="table_form">
	<tr class="admin_table_trbg">
		<th width="220">����˵����</th>
		<td>����ֵ</td>
		<td width="160">����</td>
	</tr>
   <tr>
	<th width="220">���˻�Ա�ʼ����</th>
	<td>
		<input type="radio" name="user_status" value="1" id="user_status_0" <?php if ($this->_tpl_vars['config']['user_status'] == 1): ?>checked<?php endif; ?>>
		<label for="user_status_0">����</label>
		<input type="radio" name="user_status" value="0" id="user_status_1" <?php if ($this->_tpl_vars['config']['user_status'] != 1): ?>checked<?php endif; ?>>
		<label for="user_status_1">�ر�</label>&nbsp;&nbsp;<a href="javascript:jihuo();" class="admin_submit_jh">��ǰ�û�ȫ������</a></td>
		<td width="160">user_status</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">ǿ�������֤��</th>
		<td>
		    <input type="radio" name="user_enforce_identitycert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['user_enforce_identitycert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="user_enforce_identitycert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['user_enforce_identitycert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">user_enforce_identitycert</td>
	</tr>
    

    <tr>
		<th width="220">����΢������ˣ�</th>
		<td>
		    <input type="radio" name="user_wjl" value="0" id="user_wjl_0" <?php if ($this->_tpl_vars['config']['user_wjl'] == 0): ?>checked<?php endif; ?>>
		    <label for="user_wjl_0">����</label>
		    <input type="radio" name="user_wjl" value="1" id="user_wjl_1" <?php if ($this->_tpl_vars['config']['user_wjl'] != 0): ?>checked<?php endif; ?>>
		    <label for="user_wjl_1">�ر�</label></td>
            <td width="160">user_wjl</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">����΢������ϵ��ʽ�鿴��</th>
		<td>
		    <input type="radio" name="user_wjl_link" value="1" id="user_wjl_link_0" <?php if ($this->_tpl_vars['config']['user_wjl_link'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_wjl_link_0">��¼�鿴</label>
		    <input type="radio" name="user_wjl_link" value="0" id="user_wjl_link_1" <?php if ($this->_tpl_vars['config']['user_wjl_link'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_wjl_link_1">����</label></td>
            <td width="160">user_wjl_link</td>
	</tr>
    <tr>
		<th width="220">�ٱ������ҵ��</th>
		<td>
		    <input type="radio" name="user_report" value="1" id="user_report_0" <?php if ($this->_tpl_vars['config']['user_report'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_report_0">����</label>
		    <input type="radio" name="user_report" value="0" id="user_report_1" <?php if ($this->_tpl_vars['config']['user_report'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_report_1">�ر�</label></td>
            <td width="160">user_report</td>
	</tr>
     <tr class="admin_table_trbg">
		<th width="220">����������Ϣ���֤��֤��</th>
		<td>
		    <input type="radio" name="user_idcard" value="1" id="user_idcard_0" <?php if ($this->_tpl_vars['config']['user_idcard'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_0">����</label>
		    <input type="radio" name="user_idcard" value="0" id="user_idcard_1" <?php if ($this->_tpl_vars['config']['user_idcard'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_1">�ر�</label> <font color="gray">��֤�����������ȷ��д���֤���ر����ڲ�Ϊ��ʱ�жϣ�����д���ж�</font></td>
            <td width="160">user_idcard</td>
	</tr>
     <tr>
		<th width="220">�������֤��ˣ�</th>
		<td>
		    <input type="radio" name="user_idcard_status" value="1" id="user_idcard_status_0" <?php if ($this->_tpl_vars['config']['user_idcard_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_status_0">����</label>
		    <input type="radio" name="user_idcard_status" value="0" id="user_idcard_status_1" <?php if ($this->_tpl_vars['config']['user_idcard_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="user_idcard_status_1">�ر�</label></td>
             <td width="160">user_idcard_status</td>
	</tr>
	<tr>
		<th width="220">��Ա��¼��ſɲ鿴��ҵ��ϵ��Ϣ��</th>
		<td>
			<input type="radio" name="com_login_link" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_login_link'] == 1): ?>checked<?php endif; ?>>
			<label>����</label>
			<input type="radio" name="com_login_link" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_login_link'] != 1): ?>checked<?php endif; ?>>
			<label>�ر�</label>
		</td>
		<td width="160">com_login_link</td>
	</tr>
	   <tr class="admin_table_trbg">
		<th width="220">ӵ�м����ſɲ鿴��ҵ��ϵ��Ϣ��</th>
		<td>
			<input type="radio" name="com_resume_link" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_resume_link'] == 1): ?>checked<?php endif; ?>>
			<label>����</label>
			<input type="radio" name="com_resume_link" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_resume_link'] != 1): ?>checked<?php endif; ?>>
			<label>�ر�</label>
		</td>
		<td width="160">com_resume_link</td>
	</tr>
	<tr>
    	<th width="220">��ְ��ͷ�����ã�</th>
		<td>
          <input type="radio" name="sy_usertype_1" value="0" id="RadioGroup10_12" <?php if ($this->_tpl_vars['config']['sy_usertype_1'] == '0'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_12">Ĭ����ʾ</label>&nbsp;
          <input type="radio" name="sy_usertype_1" value="1" id="RadioGroup10_13" <?php if ($this->_tpl_vars['config']['sy_usertype_1'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_13">���غ���ʾ</label><br>
          <font color="gray" style="display:none">���غ���ʾ��ֻ�����ؼ�����Ĺ�˾�ſ��Կ����˼���ͷ��</font>
        </td>
        <td width="160">sy_usertype_1</td>
    </tr>

	<tr class="admin_table_trbg" >
		<th width="220">����������������</th>
		<td>
            <input class="input-text tips_class" type="text" name="user_finder" id="user_finder" value="<?php echo $this->_tpl_vars['config']['user_finder']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>
            �� <font color="gray" style="display:none"> ����̫�࣬���Ͷ����ʼ��������Ϊ������</font>
        </td>
        <td width="160">user_finder</td>
	</tr>
	<tr  >
		<th width="220">���˻�Ա������������</th>
		<td>
            <input class="input-text tips_class" type="text" name="user_number" id="user_number" value="<?php echo $this->_tpl_vars['config']['user_number']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>
            �� <font color="gray" style="display:none"> Ϊ������</font>
        </td>
        <td width="160">user_number</td>
	</tr>
	<tr>
		<th width="220">�ϴ�������Ƭ��С��</th>
		<td><input class="input-text tips_class" type="text" name="user_pickb" id="user_pickb" value="<?php echo $this->_tpl_vars['config']['user_pickb']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">˵����1024KB=1M</font></td>
        <td width="160">user_pickb</td>
	</tr>
	<tr class="admin_table_trbg" >
		<th width="220">����ͷ��ü�������ã�</th>
		<td><input class="input-text tips_class" type="text" name="user_imgwidth" id="user_imgwidth" value="<?php echo $this->_tpl_vars['config']['user_imgwidth']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">�����밴������վ��ʾͷ�����趨</font></td>
        <td width="160">user_imgwidth</td>
	</tr>
    <tr>
		<th width="220">����ͷ��ü��߶����ã�</th>
		<td><input class="input-text tips_class" type="text" name="user_imgheight" id="user_imgheight" value="<?php echo $this->_tpl_vars['config']['user_imgheight']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>PX <font color="gray" style="display:none">�����밴������վ��ʾͷ�����趨</font></td>
        <td width="160">user_imgheight</td>
	</tr> 
	<tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" id="config" type="button" name="config" value="�ύ">&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����"/></td>
	</tr>
</table>
</div>


</div>
</div>
<script>
$(function(){
	$("#config").click(function(){
		$.post("index.php?m=userconfig&c=save",{
			config : $("#config").val(),
			user_number : $("#user_number").val(),
			user_finder : $("#user_finder").val(),
			user_trust_number : $("#user_trust_number").val(),
			user_pickb : $("#user_pickb").val(),
			user_imgwidth : $("#user_imgwidth").val(),
			user_imgheight : $("#user_imgheight").val(), 
			user_status : $("input[name=user_status]:checked").val(),
			user_enforce_identitycert : $("input[name=user_enforce_identitycert]:checked").val(),
			user_height_resume : $("input[name=user_height_resume]:checked").val(),
			user_wjl : $("input[name=user_wjl]:checked").val(),
			user_wjl_link : $("input[name=user_wjl_link]:checked").val(),
			user_report : $("input[name=user_report]:checked").val(),
			user_idcard : $("input[name=user_idcard]:checked").val(),
			user_idcard_status : $("input[name=user_idcard_status]:checked").val(),
			sy_usertype_1 : $("input[name=sy_usertype_1]:checked").val(),
			com_login_link : $("input[name=com_login_link]:checked").val(),
			com_resume_link : $("input[name=com_resume_link]:checked").val(),
			pytoken : $("#pytoken").val(),
			user_trust_status : $("input[name=user_trust_status]:checked").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
function jihuo(){
	var pytoken=$("#pytoken").val();
	$.get('index.php?m=userconfig&c=jihuo&pytoken='+pytoken,function(data){
		if(data){
			parent.layer.msg('����ɹ���', 2, 9);
		}else{
			parent.layer.msg('����ʧ�ܣ�', 2, 8);
		}
	})
}
</script></div>
</body>
</html>