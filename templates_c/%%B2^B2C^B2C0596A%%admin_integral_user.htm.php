<?php /* Smarty version 2.6.26, created on 2015-01-29 18:30:22
         compiled from admin/admin_integral_user.htm */ ?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp_top infoboxp_topIjf">
    <span class="infoboxp_top_span">积分设置</span>
	<span class="infoboxp_top_span_sz"><a href="index.php?m=integral">积分设置</a></span>
    <span class="infoboxp_top_span_sz infoboxp_top_span_sz_in"><a href="index.php?m=integral&c=user">个人积分</a></span>
	<span class="infoboxp_top_span_sz"><a href="index.php?m=integral&c=com">企业积分</a></span>
</div>
<div class="main_tag">
<div class="clear"></div>
<div class="tag_box">
<div>
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">参数说明：</th>
          <td>参数值</td>
          <td width="330">变量</td>
    </tr>
    <tr>
	<th width="220">发布简历：</th>
		<td>
        <select id="integral_add_resume_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_add_resume_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_add_resume_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
         <input class="input-text" type="text" name="integral_add_resume" id="integral_add_resume" value="<?php echo $this->_tpl_vars['config']['integral_add_resume']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_add_resume_type / integral_add_resume</td>
	</tr>
    <tr class="admin_com_td_bg">
	<th width="220">上传身份验证：</th>
		<td>
        <select id="integral_identity_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_identity_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_identity_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
         <input class="input-text" type="text" name="integral_identity" id="integral_identity" value="<?php echo $this->_tpl_vars['config']['integral_identity']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_identity_type / integral_identity</td>
	</tr>
	<tr>
		<th width="220">简历置顶：</th>
		<td>
        <select id="integral_resume_top_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_resume_top_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_resume_top_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
         <input class="input-text" type="text" name="integral_resume_top" id="integral_resume_top" value="<?php echo $this->_tpl_vars['config']['integral_resume_top']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
/天 </td>
        <td width="280">integral_resume_top_type / integral_resume_top</td>
	</tr>
    <tr>
		<td colspan="3" align="center">
        <input class="admin_submit4" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
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
			integral_add_resume : $("#integral_add_resume").val(),
			integral_add_resume_type : $("#integral_add_resume_type").val(),
			integral_identity : $("#integral_identity").val(),
			integral_identity_type : $("#integral_identity_type").val(),
			integral_resume_top_type : $("#integral_resume_top_type").val(),
			integral_resume_top : $("#integral_resume_top").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</body>
</html>