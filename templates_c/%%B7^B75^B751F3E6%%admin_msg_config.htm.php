<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:04
         compiled from admin/admin_msg_config.htm */ ?>
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

<div class="admin_Prompt">
<div class="admin_Prompt_span"> ��ʾ������ע���ʻ� ��������֧�ֳ����ţ����500���֣�65���ְ�һ�����żƷѡ� </div>
<div class="admin_Prompt_close"></div>
</div>


<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="main_tag">
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">��������</span>
    <ul>
        <li class="on"><a href="index.php?m=msgconfig" style="color:#FFF">��������</a></li>
        <li><a href="index.php?m=msgconfig&c=tpl">ģ������</a></li>
    </ul>
 </div>
<div class="tag_box">
 <div>
    <form action="" method="post">
    <table width="100%" class="table_form">
         <tr class="admin_table_trbg">
            <th width="160">����˵����</th>
            <td>����ֵ</td>
            <td width="160">����</td>
         </tr>
        <tr class="admin_table_trbg">
            <th width="160">�ʻ���</th>
            <td><input class="input-text tips_class" type="text" name="sy_msguser" id="sy_msguser" value="<?php echo $this->_tpl_vars['config']['sy_msguser']; ?>
" size="30" maxlength="255" /><font color="gray" style="display:none">�磺shyflc</font></td>
            <td width="160">sy_msguser</td>
        </tr>
 		<tr>
            <th width="160">���룺</th>
            <td><input class="input-text tips_class" type="text" name="sy_msgpw" id="sy_msgpw" value="<?php echo $this->_tpl_vars['config']['sy_msgpw']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">�磺123456</font></td>
            <td width="160">sy_msgpw</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">KEY��</th>
            <td><input class="input-text tips_class" type="text" name="sy_msgkey" id="sy_msgkey" value="<?php echo $this->_tpl_vars['config']['sy_msgkey']; ?>
" size="50" maxlength="255"/><font color="gray" style="display:none">�磺c9ed1cc682defeef35537330adc9ad85</font></td>
             <td width="160">sy_msgkey</td>
        </tr>
 		<tr>
            <th width="160">���Ŷһ�������</th>
            <td><input class="input-text " type="text" name="integral_msg_proportion" id="integral_msg_proportion" value="<?php echo $this->_tpl_vars['config']['integral_msg_proportion']; ?>
" size="30" maxlength="255"/>��/Ԫ</td>
            <td width="160">integral_msg_proportion</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">������ţ�</th>
            <td><a href="http://msg.phpyun.com/" target="_blank" style=" color:#CC3300; text-decoration:underline; "> ������ŵ�ַ</a></td>
            <td width="160">&nbsp;</td>
         </tr>
  		 <tr>
            <td colspan="3" align="center"><input class="admin_submit4" id="config" type="button" name="msgconfig" value="�ύ" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="����" /></td>
        </tr>
    </table>
    <input type="hidden" id="pytoken" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>

</div>

</div>
</div>
<script>
$(function(){
	$("#config").click(function(){
		$.post("index.php?m=msgconfig&c=save",{
			config : $("#config").val(),
			sy_msguser : $("#sy_msguser").val(),
			sy_msgkey :$("#sy_msgkey").val(),
			pytoken : $("#pytoken").val(),
			sy_msgpw : $("#sy_msgpw").val(),
			integral_msg_proportion : $("#integral_msg_proportion").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</div>
</body>
</html>