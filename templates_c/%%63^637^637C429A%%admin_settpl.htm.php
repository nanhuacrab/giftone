<?php /* Smarty version 2.6.26, created on 2015-02-01 14:04:25
         compiled from admin/admin_settpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script language="javascript">
KindEditor.ready(function(K) {
		editor=K.create('#content', {
		 themeType : 'default'
	 	});
});
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
	<h6>短信模板设置</h6>
  <div class="infoboxp_right"><a href="index.php?m=emailconfig" class="infoboxp_tj">模板设置</a></div>
</div>
<div class="main_tag">
<div class="tag_box" style="float:none;">
<div>
<?php $this->assign('name', $_GET['name']); ?>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="" method="post" target="supportiframe">
<table width="100%" class="table_form">
	<tr>
		<th width="150">模板页面：</th>
		<td><?php echo $this->_tpl_vars['arr_tpl'][$this->_tpl_vars['name']]['name']; ?>
</td>
	</tr>
    <input type="hidden" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
"/>
    <?php if ($this->_tpl_vars['arr_tpl'][$this->_tpl_vars['name']]['type'] == 'email'): ?>
	<tr class="email">
		<th width="150">标题：</th>
		<td>
        <input class="input-text" type="text" name="title" id="title" value="<?php echo $this->_tpl_vars['row']['title']; ?>
" size="60"/>
        </td>
	</tr>
	<tr class="email">
		<th width="150">内容：</th>
		<td>
        	<textarea name="content" id="content2" class="text" style="width:700px;height:200px;"><?php echo $this->_tpl_vars['row']['content']; ?>
</textarea>
        </td>
	</tr>
    <?php else: ?>
    	<tr class="email">
		<th width="150">内容：</th>
		<td><textarea name="content" id="content" rows="10" cols="80" class="text"><?php echo $this->_tpl_vars['row']['content']; ?>
</textarea></td>
	</tr>
    <?php endif; ?>
	<tr>
		<td colspan="2" align="center"><input class="admin_submit4" id="mconfig" type="submit" name="config" value="提交" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置" /></td>
	</tr>
</table>
<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>
</div>
</div>

<div class="infoboxp" style="background:#F7FBFC;border:1px solid #d8dce5">
<div class="infoboxp_top">
<a name="sm"></a>
<h6 style="text-indent:10px;">调用说明</h6>
</div>
<ul>
<?php $_from = $this->_tpl_vars['arr_tpl'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
<?php if ($this->_tpl_vars['k'] != 'name' && $this->_tpl_vars['k'] != 'type'): ?>
	<li style="height:25px; margin-top:5px; padding-left:10px;"><span style="width:150px;display:block; float:left;"><?php echo $this->_tpl_vars['v']; ?>
</span>   <span style="width:150px;display:block; float:left;">代码：<?php echo $this->_tpl_vars['k']; ?>
</span> </li>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<script>
(function($){                
	 $('.getname').click(function(){
		$('#title').insertAtCaret($(this).attr("name"));
	 });
	  $('.getname2').click(function(){
		$('#contentddd').insertAtCaret($(this).attr("name"));
	 });
})($); 
</script>
</div>
</body>
</html>