<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:36
         compiled from admin/admin_com_config.htm */ ?>
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
<div class="infoboxp_top infoboxp_topIjf">
    <span class="infoboxp_top_span">�û�����</span>
	<span class="infoboxp_top_span_sz"><a href="index.php?m=userconfig">��������</a></span>
    <span class="infoboxp_top_span_sz infoboxp_top_span_sz_in"><a href="index.php?m=userconfig&c=com">��ҵ����</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=userconfig&c=avatar">��Աͷ��</a></span>
</div>
<div class="main_tag">
<div class="tag_box"><div>
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">����˵����</th>
          <td>����ֵ</td>
          <td width="160">����</td>
    </tr>
 <tr>
		<th width="220">������ҵ��Ա��ˣ�</th>
		<td>
		    <input type="radio" name="com_status" value="1" id="com_status_0" <?php if ($this->_tpl_vars['config']['com_status'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_status_0">�����</label>
		    <input type="radio" name="com_status" value="0" id="com_status_1" <?php if ($this->_tpl_vars['config']['com_status'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_status_1">���</label></td>
            <td width="160">com_status</td>
	</tr>
 	   <tr class="admin_table_trbg">
		<th width="220">��ҵ��Աģʽ��</th>
		<td>
		    <input type="radio" name="com_vip_type" value="1" id="com_vip_type1_0" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_0">ʱ��ģʽ</label>
		    <input type="radio" name="com_vip_type" value="2" id="com_vip_type1_1" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 2): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_1">�ײ�ģʽ</label>
            <input type="radio" name="com_vip_type" value="0" id="com_vip_type1_2" <?php if ($this->_tpl_vars['config']['com_vip_type'] == 0): ?>checked<?php endif; ?>>
		    <label for="com_vip_type1_2">ͬʱ����</label></td>
            <td width="160">com_vip_type</td>
	</tr>
    <tr>
		<th width="220">ǿ��������֤��</th>
		<td>
		    <input type="radio" name="com_enforce_emailcert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_emailcert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_emailcert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_emailcert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_emailcert</td>
	</tr>
    <tr  class="admin_table_trbg">
		<th width="220">ǿ���ֻ���֤��</th>
		<td>
		    <input type="radio" name="com_enforce_mobilecert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_mobilecert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_mobilecert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_mobilecert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_mobilecert</td>
	</tr>
    <tr>
		<th width="220">ǿ��Ӫҵִ����֤��</th>
		<td>
		    <input type="radio" name="com_enforce_licensecert" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_licensecert'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_licensecert" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_licensecert'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_licensecert</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="220">ǿ�����õ���λ�ã�</th>
		<td>
		    <input type="radio" name="com_enforce_setposition" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_enforce_setposition'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_enforce_setposition" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_enforce_setposition'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_enforce_setposition</td>
	</tr>
 	<tr>
		<th width="220">������ְ��ѯ��</th>
		<td>
		    <input type="radio" name="com_message" value="1" id="com_message_0" <?php if ($this->_tpl_vars['config']['com_message'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_message_0">����</label>
		    <input type="radio" name="com_message" value="0" id="com_message_1" <?php if ($this->_tpl_vars['config']['com_message'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_message_1">�ر�</label></td>
            <td width="160">com_message</td>
	</tr>
   <tr class="admin_table_trbg">
		<th width="220">�ٱ�����˲ţ�</th>
		<td>
		    <input type="radio" name="com_report" value="1" id="com_report_0" <?php if ($this->_tpl_vars['config']['com_report'] == 1): ?>checked<?php endif; ?>>
		    <label for="com_report_0">����</label>
		    <input type="radio" name="com_report" value="0" id="com_report_1" <?php if ($this->_tpl_vars['config']['com_report'] != 1): ?>checked<?php endif; ?>>
		    <label for="com_report_1">�ر�</label></td>
            <td width="160">com_report</td>
	</tr>
	 <tr>
		<th width="220">��ҵ������������</th>
		<td><input class="input-text tips_class" type="text" name="com_finder" id="com_finder" value="<?php echo $this->_tpl_vars['config']['com_finder']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>��</td>
        <td width="160">com_finder</td>
	</tr>
    <tr>
		<th width="220">�ϴ���˾LOGO��С��</th>
		<td><input class="input-text tips_class" type="text" name="com_pickb" id="com_pickb" value="<?php echo $this->_tpl_vars['config']['com_pickb']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/>KB <font color="gray" style="display:none">˵����1024KB=1M</font></td>
        <td width="160">com_pickb</td>
	</tr>

	   <tr class="admin_table_trbg">
		<th width="220">��ҵ�ϴ�ͼƬ��С��</th>
		<td><input class="input-text tips_class" type="text" name="com_uppic" id="com_uppic" value="<?php echo $this->_tpl_vars['config']['com_uppic']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> <font color="gray" style="display:none">KB</font></td>
        <td width="160">com_uppic</td>
	</tr>
    <tr>
		<th width="220">һ�仰��Ƹ��ˣ�</th>
		<td>
		    <input type="radio" name="com_fast_status" value="0" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_fast_status'] == 0): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_fast_status" value="1" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_fast_status'] != 0): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_fast_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="220">��ҵְλ������ˣ�</th>
		<td>
		    <input type="radio" name="com_job_status" value="0" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_job_status'] == 0): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_job_status" value="1" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_job_status'] != 0): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_job_status</td>
	</tr>
      <tr>
		<th width="220">��ҵ��֤��ˣ�</th>
		<td>
		    <input type="radio" name="com_cert_status" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_cert_status'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_cert_status" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_cert_status'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label></td>
            <td width="160">com_cert_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="220">��Ա���ں�򳬳���Χ����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
ģʽ��</th>
		<td>
		    <input type="radio" name="com_integral_online" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>checked<?php endif; ?>>
		    <label>����</label>
		    <input type="radio" name="com_integral_online" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['config']['com_integral_online'] != 1): ?>checked<?php endif; ?>>
		    <label>�ر�</label>
            <font color="gray">ע:�رյ��������Ա���ں����ܲ�����</font>
       	</td>
        <td width="160">com_integral_online</td>
	</tr>

    <tr>
		<th width="220">��ҵע��Ĭ�ϵȼ���</th>
        <?php if (is_array ( $this->_tpl_vars['qy_rows'] )): ?>
		<td>
        	<?php $_from = $this->_tpl_vars['qy_rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		    <input type="radio" name="com_rating" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" id="rating_<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['config']['com_rating'] == $this->_tpl_vars['v']['id']): ?>checked<?php endif; ?>>
		    <label for="rating_<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</label>&nbsp;&nbsp;
		    <?php endforeach; endif; unset($_from); ?>
        </td>
        <td width="160">com_rating</td>
        <?php else: ?>
          <td>
        	���޵ȼ���<a href="index.php?m=userconfig&c=comclass" style="color:red;">��ӻ�Ա�ȼ�</a>
            <input type="hidden" name="com_rating" value="0">
        	</td>
        <?php endif; ?>
	</tr>
	<tr  >
		<td colspan="3" align="center">
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" id="mconfig" type="button" name="config" value="�ύ" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="����" /></td>
	</tr>
</table>
</div>

</div>
</div>
<script>
$(function(){
	$("#mconfig").click(function(){
		$.post("index.php?m=userconfig&c=save",{
			config : $("#mconfig").val(),
			com_pickb : $("#com_pickb").val(),
			com_enforce_emailcert : $("input[name=com_enforce_emailcert]:checked").val(),
			com_enforce_mobilecert : $("input[name=com_enforce_mobilecert]:checked").val(),
			com_enforce_licensecert : $("input[name=com_enforce_licensecert]:checked").val(),
			com_enforce_setposition : $("input[name=com_enforce_setposition]:checked").val(),
			com_uppic : $("#com_uppic").val(),
			com_finder : $("#com_finder").val(),
			com_rating : $("input[name=com_rating]:checked").val(),
			com_integral_online : $("input[name=com_integral_online]:checked").val(),
			com_fast_status : $("input[name=com_fast_status]:checked").val(),
			com_job_status : $("input[name=com_job_status]:checked").val(),
			com_cert_status : $("input[name=com_cert_status]:checked").val(),
			com_vip_type : $("input[name=com_vip_type]:checked").val(),
			com_message : $("input[name=com_message]:checked").val(),
			com_report : $("input[name=com_report]:checked").val(),
			com_status : $("input[name=com_status]:checked").val(),
			pytoken:$("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script></div>
</body>
</html>