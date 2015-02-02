<?php /* Smarty version 2.6.26, created on 2015-01-29 19:18:41
         compiled from admin/admin_email_config.htm */ ?>
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
	<li class="on"><a href="index.php?m=emailconfig" style="color:#FFF">邮件设置</a></li>
    <li><a href="index.php?m=emailconfig&c=tpl">模板设置</a></li> 
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
		<th width="160" style="width:160px;">邮件发送方式：</th>
		<td>
              <input type="radio" name="sy_email_online" value="1" id="sy_email_online_0" <?php if ($this->_tpl_vars['config']['sy_email_online'] == '1'): ?>checked<?php endif; ?>>
              <label for="sy_email_online_0">SMTP服务器发送邮件</label>
              <input type="radio" name="sy_email_online" value="2" id="sy_email_online_1" <?php if ($this->_tpl_vars['config']['sy_email_online'] == '2'): ?>checked<?php endif; ?>>
              <label for="sy_email_online_1">PHP函数SMTP发送邮件</label>
            </td>
            <td width="160">sy_email_online</td>
	</tr>
	<tr class="email admin_table_trbg">
		<th width="160">SMTP服务器：</th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpserver" id="sy_smtpserver" value="<?php echo $this->_tpl_vars['config']['sy_smtpserver']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">如：smtp.163.com</font></td>
        <td width="160">sy_smtpserver</td>
	</tr>
	<tr class="email">
		<th width="160">SMTP服务器的用户邮箱：</th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpemail" id="sy_smtpemail" value="<?php echo $this->_tpl_vars['config']['sy_smtpemail']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">如：phpyun@163.com</font></td>
        <td width="160">sy_smtpemail</td>
	</tr>
	<tr class="email admin_table_trbg">
		<th width="160">用户帐号：</th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpuser" id="sy_smtpuser" value="<?php echo $this->_tpl_vars['config']['sy_smtpuser']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">如：phpyun</font></td>
        <td width="160">sy_smtpuser</td>
	</tr>
	<tr class="email">
		<th width="160">用户密码：</th>
		<td><input class="input-text tips_class" type="password" name="sy_smtppass" id="sy_smtppass" value="<?php echo $this->_tpl_vars['config']['sy_smtppass']; ?>
" size="30" maxlength="255"/></td>
        <td width="160">sy_smtppass</td>
	</tr>
	<tr class="email admin_table_trbg">
		<th width="160">SMTP服务器端口: </th>
		<td><input class="input-text tips_class" type="text" name="sy_smtpserverport" id="sy_smtpserverport" value="<?php echo $this->_tpl_vars['config']['sy_smtpserverport']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">如：25</font></td>
        <td width="160">sy_smtpserverport</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input class="admin_submit4" id="mconfig" type="button" name="config" value="提交" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置" />&nbsp;&nbsp;<input class="admin_submit4"   type="button" onclick="prompt()"  value="测试" /></td>
	</tr>
</table> 
</div>
</div>
</div>
<input type="hidden" id="emailconfig" value="<?php echo $this->_tpl_vars['emailconfig']; ?>
">
<script>
layer.use('extend/layer.ext.js')
function prompt(){
	var emailconfig=$("#emailconfig").val();
	if(emailconfig==1){
		parent.layer.msg('请先保存邮箱设置！', 2, 8);return false;
	}
	layer.prompt({height:'20px',title: '填写测试邮箱',top:'50px'}, function(value){ 
		if(value){
			var myreg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
			var pytoken=$("#pytoken").val();
			if(!myreg.test(value)){
				parent.layer.msg('邮箱格式不正确，请重新输入！', 2, 8);return false;
			}else{ 
				parent.layer.load('发送中…',0);
				$.post("index.php?m=emailconfig&c=ceshi",{ceshi_email:value,pytoken:pytoken},function(data){
					parent.layer.closeAll();
					var data=eval('('+data+')');   
					parent.layer.msg(data.msg, 2, Number(data.type),function(){location.reload();});return false; 
				}); 
			}
		}else{
			parent.layer.msg('请输入邮箱！',2,8);return false; 
		} 
	})
}
$(function(){  
	if("<?php echo $this->_tpl_vars['config']['sy_email_online']; ?>
"=="2"){
		$(".email").hide();
	}
	$("input[name=sy_email_online]").click(function(){
		var value=$(this).val();
		if(value==2){
			$(".email").hide();
		}else{
			$(".email").show();
		}
	})
	$("#mconfig").click(function(){
		$.post("index.php?m=emailconfig&c=save",{
			config : $("#mconfig").val(),
			sy_email_online : $("input[name=sy_email_online]:checked").val(),
			sy_smtpemail : $("#sy_smtpemail").val(),
			sy_smtpuser : $("#sy_smtpuser").val(),
			sy_smtpserver : $("#sy_smtpserver").val(),
			sy_smtppass : $("#sy_smtppass").val(),
			pytoken : $("#pytoken").val(),
			sy_smtpserverport : $("#sy_smtpserverport").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
})

</script>
</div>
</body>
</html>