<?php /* Smarty version 2.6.26, created on 2015-01-29 19:18:41
         compiled from admin/admin_email_tpl.htm */ ?>
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
<div class="main_tag">
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">邮件设置</span>
<ul>
	<li><a href="index.php?m=emailconfig">邮件设置</a></li>
    <li class="on"><a href="index.php?m=emailconfig&c=tpl" style="color:#FFF">模板设置</a></li> 
</ul>
</div>
<div class="tag_box">
<div> 
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
"> 

    <table width="100%" class="table_form">
    <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
        <tr>
            <th width="160">注册会员：</th>
            <td>
              <input type="radio" name="sy_email_reg" value="1" id="sy_email_reg_0" <?php if ($this->_tpl_vars['config']['sy_email_reg'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_reg_0">通知</label>
              <input type="radio" name="sy_email_reg" value="2" id="sy_email_reg_1" <?php if ($this->_tpl_vars['config']['sy_email_reg'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_reg_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailreg" style="color:blue;">设置模板</a> 
             </td>
              <td width="160">sy_email_reg</td>
        </tr>
         <tr class="admin_table_trbg">
            <th width="160">找回密码：</th>
            <td>
              <input type="radio" name="sy_email_getpass" value="1" id="sy_email_getpass_0" <?php if ($this->_tpl_vars['config']['sy_email_getpass'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_getpass_0">通知</label>
              <input type="radio" name="sy_email_getpass" value="2" id="sy_email_getpass_1" <?php if ($this->_tpl_vars['config']['sy_email_getpass'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_getpass_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailgetpass" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_getpass</td>
        </tr>
        <tr>
            <th width="160">邀请面试：</th>
            <td>
              <input type="radio" name="sy_email_yqms" value="1" id="sy_email_yqms_0" <?php if ($this->_tpl_vars['config']['sy_email_yqms'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_yqms_0">通知</label>
              <input type="radio" name="sy_email_yqms" value="2" id="sy_email_yqms_1" <?php if ($this->_tpl_vars['config']['sy_email_yqms'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_yqms_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailyqms" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_yqms</td>
        </tr>
      <tr class="admin_table_trbg">
            <th width="160">付款成功：</th>
            <td>
              <input type="radio" name="sy_email_fkcg" value="1" id="sy_email_fkcg_0" <?php if ($this->_tpl_vars['config']['sy_email_fkcg'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_fkcg_0">通知</label>
              <input type="radio" name="sy_email_fkcg" value="2" id="sy_email_fkcg_1" <?php if ($this->_tpl_vars['config']['sy_email_fkcg'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_fkcg_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailfkcg" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_fkcg</td>
        </tr>
        <tr>
            <th width="160">职位审核通过：</th>
            <td>
              <input type="radio" name="sy_email_zzshtg" value="1" id="sy_email_zzshtg_0" <?php if ($this->_tpl_vars['config']['sy_email_zzshtg'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_zzshtg_0">通知</label>
              <input type="radio" name="sy_email_zzshtg" value="2" id="sy_email_zzshtg_1" <?php if ($this->_tpl_vars['config']['sy_email_zzshtg'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_zzshtg_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailzzshtg" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_zzshtg</td>
        </tr>
       <tr class="admin_table_trbg">
            <th width="160">职位审核未通过：</th>
            <td>
              <input type="radio" name="sy_email_zzshwtg" value="1" id="sy_email_zzshwtg_0" <?php if ($this->_tpl_vars['config']['sy_email_zzshwtg'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_zzshwtg_0">通知</label>
              <input type="radio" name="sy_email_zzshwtg" value="2" id="sy_email_zzshwtg_1" <?php if ($this->_tpl_vars['config']['sy_email_zzshwtg'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_zzshwtg_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailzzshwtg" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_zzshwtg</td>
        </tr>
        <tr>
            <th width="160">申请职位：</th>
            <td>
              <input type="radio" name="sy_email_sqzw" value="1" id="sy_email_sqzw_0" <?php if ($this->_tpl_vars['config']['sy_email_sqzw'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_sqzw_0">通知</label>
              <input type="radio" name="sy_email_sqzw" value="2" id="sy_email_sqzw_1" <?php if ($this->_tpl_vars['config']['sy_email_sqzw'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_sqzw_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailsqzw" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_sqzw</td>
        </tr>
     <tr class="admin_table_trbg">
            <th width="160">职位过期提醒：</th>
            <td>
              <input type="radio" name="sy_email_jobed" value="1" id="sy_email_jobed_0" <?php if ($this->_tpl_vars['config']['sy_email_jobed'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_jobed_0">通知</label>
              <input type="radio" name="sy_email_jobed" value="2" id="sy_email_jobed_1" <?php if ($this->_tpl_vars['config']['sy_email_jobed'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_jobed_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailjobed" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_jobed</td>
        </tr>
        <tr>
            <th width="160">邮箱认证：</th>
            <td>
              <input type="radio" name="sy_email_cert" value="1" id="sy_email_cert_0" <?php if ($this->_tpl_vars['config']['sy_email_cert'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_cert_0">通知</label>
              <input type="radio" name="sy_email_cert" value="2" id="sy_email_cert_1" <?php if ($this->_tpl_vars['config']['sy_email_cert'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_cert_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailcert" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_cert</td>
        </tr>
    <tr class="admin_table_trbg">
            <th width="160">会员锁定：</th>
            <td>
              <input type="radio" name="sy_email_lock" value="1" id="sy_email_lock_0" <?php if ($this->_tpl_vars['config']['sy_email_lock'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_lock_0">通知</label>
              <input type="radio" name="sy_email_lock" value="2" id="sy_email_lock_1" <?php if ($this->_tpl_vars['config']['sy_email_lock'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_lock_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emaillock" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_lock</td>
        </tr>
    <tr>
            <th width="160">会员审核：</th>
            <td>
              <input type="radio" name="sy_email_userstatus" value="1" id="sy_email_userstatus_0" <?php if ($this->_tpl_vars['config']['sy_email_userstatus'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_userstatus_0">通知</label>
              <input type="radio" name="sy_email_userstatus" value="2" id="sy_email_userstatus_1" <?php if ($this->_tpl_vars['config']['sy_email_userstatus'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_userstatus_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailuserstatus" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_userstatus</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">企业营业执照审核：</th>
            <td>
              <input type="radio" name="sy_email_comcert" value="1" id="sy_email_comcert_0" <?php if ($this->_tpl_vars['config']['sy_email_comcert'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_comcert_0">通知</label>
              <input type="radio" name="sy_email_comcert" value="2" id="sy_email_comcert_1" <?php if ($this->_tpl_vars['config']['sy_email_comcert'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_comcert_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailcomcert" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_comcert</td>
        </tr>
     	<tr >
            <th width="160">个人身份认证审核：</th>
            <td>
              <input type="radio" name="sy_email_usercert" value="1" id="sy_email_usercert_0" <?php if ($this->_tpl_vars['config']['sy_email_usercert'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_usercert_0">通知</label>
              <input type="radio" name="sy_email_usercert" value="2" id="sy_email_usercert_1" <?php if ($this->_tpl_vars['config']['sy_email_usercert'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_usercert_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailusercert" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_usercert</td>
        </tr>
     	<tr class="admin_table_trbg">
            <th width="160">会员提醒：</th>
            <td>
              <input type="radio" name="sy_email_remind" value="1" id="sy_email_remind_0" <?php if ($this->_tpl_vars['config']['sy_email_remind'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_remind_0">通知</label>
              <input type="radio" name="sy_email_remind" value="2" id="sy_email_remind_1" <?php if ($this->_tpl_vars['config']['sy_email_remind'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_remind_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailremind" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_remind</td>
        </tr>
     	<tr>
            <th width="160">个人订阅：</th>
            <td>
              <input type="radio" name="sy_email_userdy" value="1" id="sy_email_userdy_0" <?php if ($this->_tpl_vars['config']['sy_email_userdy'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_userdy_0">通知</label>
              <input type="radio" name="sy_email_userdy" value="2" id="sy_email_userdy_1" <?php if ($this->_tpl_vars['config']['sy_email_userdy'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_userdy_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailuserdy" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_userdy</td>
        </tr>
     	<tr class="admin_table_trbg">
            <th width="160">企业订阅：</th>
            <td>
              <input type="radio" name="sy_email_comdy" value="1" id="sy_email_comdy_0" <?php if ($this->_tpl_vars['config']['sy_email_comdy'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_comdy_0">通知</label>
              <input type="radio" name="sy_email_comdy" value="2" id="sy_email_comdy_1" <?php if ($this->_tpl_vars['config']['sy_email_comdy'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_comdy_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailcomdy" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_comdy</td>
        </tr>
     	<tr>
            <th width="160">自动发送职位通知：</th>
            <td>
              <input type="radio" name="sy_email_notice" value="1" id="sy_email_notice_0" <?php if ($this->_tpl_vars['config']['sy_email_notice'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_notice_0">通知</label>
              <input type="radio" name="sy_email_notice" value="2" id="sy_email_notice_1" <?php if ($this->_tpl_vars['config']['sy_email_notice'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_notice_1">不通知</label>&nbsp;&nbsp;
              <a href="?m=emailconfig&c=settpl&name=emailnotice" style="color:blue;">设置模板</a> 
             </td>
             <td width="160">sy_email_notice</td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center"><input class="admin_submit4" id="msgconfig" type="button" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table> 

</div>
</div>
<input type="hidden" id="emailconfig" value="<?php echo $this->_tpl_vars['emailconfig']; ?>
">
<script>
$(function(){
	$("#msgconfig").click(function(){
		$.post("index.php?m=emailconfig&c=save",{
			config : $("#msgconfig").val(),
			sy_email_yqms : $("input[name=sy_email_yqms]:checked").val(),
			sy_email_getpass : $("input[name=sy_email_getpass]:checked").val(),
			sy_email_reg : $("input[name=sy_email_reg]:checked").val(),
			sy_email_fkcg : $("input[name=sy_email_fkcg]:checked").val(),
			sy_email_zzshtg : $("input[name=sy_email_zzshtg]:checked").val(),
			sy_email_zzshwtg : $("input[name=sy_email_zzshwtg]:checked").val(),
			sy_email_cert : $("input[name=sy_email_cert]:checked").val(),
			sy_email_lock : $("input[name=sy_email_lock]:checked").val(),
			sy_email_userstatus : $("input[name=sy_email_userstatus]:checked").val(),
			sy_email_sqzw : $("input[name=sy_email_sqzw]:checked").val(),
			sy_email_jobed : $("input[name=sy_email_jobed]:checked").val(),
			sy_email_comcert : $("input[name=sy_email_comcert]:checked").val(),
			sy_email_remind : $("input[name=sy_email_remind]:checked").val(),
			sy_email_userdy : $("input[name=sy_email_userdy]:checked").val(),
			sy_email_comdy : $("input[name=sy_email_comdy]:checked").val(),
			sy_email_notice : $("input[name=sy_email_notice]:checked").val(),
			pytoken : $("#pytoken").val(),  
			sy_email_usercert : $("input[name=sy_email_usercert]:checked").val() 
		},function(data,textStatus){  
			config_msg(data); 
		});
	});
})

</script>
</div>
</body>
</html>