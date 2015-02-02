<?php /* Smarty version 2.6.26, created on 2015-01-30 22:21:23
         compiled from admin/admin_member_comadd.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<script language="javascript">
function CheckMember(){ 
	if($("input[name='email']").val() ==''){
		parent.layer.msg('E-mail不能为空！', 2, 8);return false;
	}else{
	   var obj = $("input[name='email']").val();
	   var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	   if(!myreg.test(obj)){
	     parent.layer.msg('E-mail格式错误！', 2, 8);return false;
	   }
	}
}
</script> 
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<h6>企业会员信息</h6>
  <div class="infoboxp_right"> 
	<a href="index.php?m=com_member" class="infoboxp_tj">企业用户列表</a> 
	</div>
</div>
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" <?php if ($this->_tpl_vars['get_info']['type'] == ''): ?>target="supportiframe"<?php endif; ?>  action="index.php?m=admin_company&c=add" onSubmit="return CheckMember();" method="post" >
<table width="100%" class="table_form" style="background:#fff;">
	<tr>
		<th>会员级别：</th>
		<td>
            <select name="rating_name">
            <?php $_from = $this->_tpl_vars['rating_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ratings']):
?>
            <option value="<?php echo $this->_tpl_vars['ratings']['id']; ?>
+<?php echo $this->_tpl_vars['ratings']['name']; ?>
" <?php if ($this->_tpl_vars['ratings']['id'] == $this->_tpl_vars['rating']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['ratings']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
        </td>
	</tr>
	<tr class="admin_table_trbg" >
		<th>用户名：</th>
		<td><input type="text"  value="" name="username" class="input-text" onblur="check_username();" id="username"></td>
	</tr>
	<tr>
		<th>密码：</th>
		<td><input type="password" value="" name="password" class="input-text">
		<font color="gray"></font>
		</td>
	</tr>
   	<tr class="admin_table_trbg" >		<th>E-mail：</th>
		<td><input type="text" value="" name="email" class="input-text">
		<font color="gray"></font>
		</td>
	</tr>
		<tr>
		<th>联系电话：</th>
		<td><input type="text" value="" name="moblie" class="input-text">
		<font color="gray"></font>
        </td>
	</tr>
   	<tr class="admin_table_trbg" >
		<th>公司名称：</th>
		<td><input type="text" value="" name="name" class="input-text">
		<font color="gray"></font>
		</td>
	</tr>
     <tr>
		<th>公司地址：</th>
		<td><input type="text" value="" name="address" class="input-text">
		<font color="gray"></font>
		</td>
	</tr>
   	<tr class="admin_table_trbg" >
		<th>是否审核：</th>
		<td><input type="radio" checked name="status" value="0">未审核  <input type="radio" <?php if ($this->_tpl_vars['com_info']['status'] == '1'): ?>checked<?php endif; ?> name="status" value="1">已审核
		<font color="gray"></font>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
        <input class="admin_submit4" type="submit" name="submit" value="&nbsp;添 加&nbsp;" />
		<input class="admin_submit4" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
        </td>
	</tr>
</table>
<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<input type="hidden" name="type" value="<?php echo $this->_tpl_vars['get_info']['type']; ?>
">
</form>
</div></div>
</body>
</html>