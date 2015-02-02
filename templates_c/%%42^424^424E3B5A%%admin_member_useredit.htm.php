<?php /* Smarty version 2.6.26, created on 2015-01-29 18:30:35
         compiled from admin/admin_member_useredit.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_member_useredit.htm', 44, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="js/check_public.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<h6>会员信息</h6>
</div>
<div class="main_tag" >
<div class="tag_box">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form name="myform" target="supportiframe" action="index.php?m=user_member&c=edit" method="post" >
<table width="100%" class="table_form" style="background:#fff;">
	<tr>
		<th>用户名：</th>
		<td width="350"> <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?><?php echo $this->_tpl_vars['com_info']['username']; ?>
<?php else: ?> <input type="text" value="<?php echo $this->_tpl_vars['com_info']['username']; ?>
" name="username" class="input-text"><?php endif; ?></td>
         <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <th>注册IP：</th>
		<td><?php echo $this->_tpl_vars['com_info']['reg_ip']; ?>
<font color="gray"></font></td>
        <?php endif; ?>
	</tr>
    <tr  class="admin_table_trbg">
		<th>密码：</th>
		<td><input type="text" value="" name="password" class="input-text">
		<font color="gray">不修改请留空!</font>
		</td>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <th>注册时间：</th>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['com_info']['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
	<tr>
		<th>E-mail：</th>
		<td><input type="text" value="<?php echo $this->_tpl_vars['com_info']['email']; ?>
" name="email" class="input-text">
		<font color="gray"></font>
		</td>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        	<th>登录IP：</th>
		<td><?php echo $this->_tpl_vars['com_info']['login_ip']; ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
		<tr  class="admin_table_trbg">
		<th>联系电话：</th>
		<td><input type="text" value="<?php echo $this->_tpl_vars['com_info']['moblie']; ?>
" name="moblie" class="input-text">
		<font color="gray"></font>
        </td>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        	<th>最近登录时间：</th>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['com_info']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
    <tr>
		<th>姓名：</th>
		<td><input name="name" type="text" maxlength="50" class="input-text" value="<?php echo $this->_tpl_vars['row']['name']; ?>
"/></td>
		<font color="gray"></font>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <th>登录次数：</th>
		<td><?php echo $this->_tpl_vars['com_info']['login_hits']; ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>

	</tr>
    <tr  class="admin_table_trbg">
		<th>性别：</th>
		<td>
         <select name="sex" id="sexbyid">
        <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
        <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['sex'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
          </select></td>
		<th>出生年月：</th>
		<td>
        <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
        <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
         <input id="birthday" type="text" readonly size="20" class="input-text" value="<?php echo $this->_tpl_vars['row']['birthday']; ?>
" name="birthday">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "birthday",
        trigger : "birthday",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script></td>
	</tr>
    <tr>
		<th>婚姻状况：</th>
		<td>
         <select name="marriage" id="marriage">
        <?php $_from = $this->_tpl_vars['userdata']['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
        <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['marriage'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
          </select>
		</td>
		<th>身高：</th>
		<td><input type="text" name="height" class="input-text" value="<?php echo $this->_tpl_vars['row']['height']; ?>
" size="10" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> CM
		</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>民族：</th>
		<td><input type="text" name="nationality" class="input-text"  value="<?php echo $this->_tpl_vars['row']['nationality']; ?>
" size="15"/></td>
		<th>体重：</th>
		<td><input type="text" name="weight" class="input-text" value="<?php echo $this->_tpl_vars['row']['weight']; ?>
" size="12" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/> kg
		</td>
	</tr>
     <tr>
		<th>户籍所在地：</th>
		<td><input name="domicile" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $this->_tpl_vars['row']['domicile']; ?>
"  /></td>
		<th>身份证号码：</th>
		<td><input name="idcard" type="text" size="30" class="input-text" maxlength="20" value="<?php echo $this->_tpl_vars['row']['idcard']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9Xx.]/g,'')"/>
		</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>工作经验：</th>
		<td>
        <select name="exp" id="exp">
            <?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['exp'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select></td>
          <th>座机：</th>
		<td><input name="telhome" type="text" size="30" class="input-text" value="<?php echo $this->_tpl_vars['row']['telhome']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9-.]/g,'')"/></td>
	</tr>
    <tr>
		<th>教育程度：</th>
		<td>
        <select name="edu" id="edu">
            <?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['edu'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select></td>
		<th>现居住地：</th>
		<td><input name="living" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $this->_tpl_vars['row']['living']; ?>
"  /></td>
	</tr>
    <tr class="admin_table_trbg">
		<th>状态：</th>
		<td>
            <input type="radio" <?php if ($this->_tpl_vars['com_info']['status'] == '1'): ?>checked<?php endif; ?> name="status" value="1">正常
            <input type="radio" readonly <?php if ($this->_tpl_vars['com_info']['status'] == '2'): ?>checked<?php endif; ?> name="status" value="2">锁定
		<font color="gray"></font>
		</td>
		<th>个人主页/博客：</th>
		<td><input name="homepage" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $this->_tpl_vars['row']['homepage']; ?>
"  /></td>
	</tr>
    <tr>
		<th width="150">详细地址：</th>
		<td width="200" colspan="3"><input name="address" type="text" class="input-text" maxlength="255" size="40" value="<?php echo $this->_tpl_vars['row']['address']; ?>
"  /></td>
	</tr>
	<tr>
    <tr class="admin_table_trbg">
		<th>一句简介：</th>
		<td colspan="3"><textarea name="description" id="description" style="height:80px;width:400px;"><?php echo $this->_tpl_vars['row']['description']; ?>
</textarea></td>
	</tr>
	<tr>

		<td align="center" colspan="4">
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['com_info']['uid']; ?>
" />
        <input type="hidden" name="lasturl" value="<?php echo $this->_tpl_vars['lasturl']; ?>
">
        <input class="admin_submit4" type="submit" name="com_update" value="&nbsp;修 改&nbsp;" />
        <?php else: ?>
        <input class="admin_submit4" type="submit" name="com_add" value="&nbsp;添 加&nbsp;" />
        <?php endif; ?>
		<input class="admin_submit4" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
	</tr>
</table>
<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div></div></div>
</body>
</html>