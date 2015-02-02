<?php /* Smarty version 2.6.26, created on 2015-02-01 14:18:55
         compiled from admin/admin_zhaopinhui_add.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<script> 
function checkform(myform)
{
  if (myform.title.value=="") 
  { 
      parent.layer.msg('请填写招聘会标题！', 2, 2);
      return (false);
  }	
	var start = $("#starttime").val();	
	var end = $("#endtime").val();
	if(start==""||end=="")
	{
		parent.layer.msg('开始时间、结束时间不能为空！', 2, 2);
		return false
	}else{
		var st=toDate(start);
		var ed=toDate(end);
		if(st>ed){
			parent.layer.msg('开始时间不得大于结束时间', 2, 2); 
			return false
		}
	}
}
</script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<script language="javascript">
<!--
KindEditor.ready(function(K) {
	K.create('#content', {
		themeType : 'default',
		items:['source', '|', 'fullscreen', 'undo', 'redo',  'cut', 'copy', 'paste','plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright','justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript','superscript', '|', 'selectall', '-','title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold','italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',  'multiimage','advtable', 'hr', 'emoticons', 'link', 'unlink']
	});
	K.create('#booth', {
		themeType : 'default',
		items:['source', '|', 'fullscreen', 'undo', 'redo',  'cut', 'copy', 'paste','plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright','justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript','superscript', '|', 'selectall', '-','title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold','italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',  'multiimage','advtable', 'hr', 'emoticons', 'link', 'unlink']
	});
	K.create('#media', {
		themeType : 'default',
		items:['source', '|', 'fullscreen', 'undo', 'redo',  'cut', 'copy', 'paste','plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright','justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript','superscript', '|', 'selectall', '-','title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold','italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',  'multiimage','advtable', 'hr', 'emoticons', 'link', 'unlink']
	});
	K.create('#packages', {
		themeType : 'default',
		items:['source', '|', 'fullscreen', 'undo', 'redo',  'cut', 'copy', 'paste','plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright','justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript','superscript', '|', 'selectall', '-','title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold','italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',  'multiimage','advtable', 'hr', 'emoticons', 'link', 'unlink']
	});
	K.create('#participate', {
		themeType : 'default',
		items:['source', '|', 'fullscreen', 'undo', 'redo',  'cut', 'copy', 'paste','plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright','justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript','superscript', '|', 'selectall', '-','title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold','italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',  'multiimage','advtable', 'hr', 'emoticons', 'link', 'unlink']
	});
});
//-->
</script>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">添加招聘会</span>
</div>
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" target="supportiframe" action="index.php?m=zhaopinhui&c=save" method="post"  encType="multipart/form-data"  onSubmit="return checkform(this);">
<table width="100%" class="table_form" style="background:#fff;">
	<tr>
		<th width="120">招聘会标题：</th>
		<td><input class="input-text" type="text" name="title" size="40" value="<?php echo $this->_tpl_vars['linkrow']['title']; ?>
" /></td>
	</tr>
	<tr  class="admin_table_trbg">
		<th width="120">举办时间：</th>
		<td>开始：
        <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
        <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
        <input id="starttime" class="input-text" type="text" readonly size="20" value="<?php echo $this->_tpl_vars['linkrow']['starttime']; ?>
" name="starttime">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "starttime",
        trigger : "starttime",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script>
          结束：
        <input id="endtime" class="input-text" type="text" readonly size="20" value="<?php echo $this->_tpl_vars['linkrow']['endtime']; ?>
" name="endtime">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "endtime",
        trigger : "endtime",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script></td>
	</tr>
    <tr>
		<th width="120">举办会场：</th>
		<td><input class="input-text" type="text" name="address" size="60" value="<?php echo $this->_tpl_vars['linkrow']['address']; ?>
" /></td>
	</tr>
 	<tr  class="admin_table_trbg">
		<th width="120">交通路线：</th>
		<td><textarea  type="text" name="traffic" cols="55" rows="5"><?php echo $this->_tpl_vars['linkrow']['traffic']; ?>
</textarea></td>
	</tr>
    <tr>
		<th width="120">电话：</th>
		<td><input class="input-text" type="text" name="phone" size="30" value="<?php echo $this->_tpl_vars['linkrow']['phone']; ?>
" /></td>
	</tr>
   	<tr  class="admin_table_trbg">
		<th width="120">主办方：</th>
		<td><input class="input-text" type="text" name="organizers" size="30" value="<?php echo $this->_tpl_vars['linkrow']['organizers']; ?>
" /></td>
	</tr>
    <tr>
		<th width="120">联系人：</th>
		<td><input class="input-text" type="text" name="user" size="30" value="<?php echo $this->_tpl_vars['linkrow']['user']; ?>
" /></td>
	</tr>
   	<tr  class="admin_table_trbg">
		<th width="120">网址：</th>
		<td><input class="input-text" type="text" name="weburl" size="30" value="<?php echo $this->_tpl_vars['linkrow']['weburl']; ?>
" /></td>
	</tr>
    <tr>
		<th width="120">招聘会介绍：</th>
		<td><textarea  id="content" name="body" cols="100" rows="8" style="width:800px;height:300px;"><?php echo $this->_tpl_vars['linkrow']['body']; ?>
</textarea></td>
	</tr>
	<tr  class="admin_table_trbg">
		<th width="120">媒体宣传：</th>
		<td><textarea  id="media" name="media" cols="100" rows="8" style="width:800px;height:200px;"><?php echo $this->_tpl_vars['linkrow']['media']; ?>
</textarea></td>
	</tr>
    <tr>
		<th width="120">服务套餐：</th>
		<td><textarea  id="packages" name="packages" cols="100" rows="8" style="width:800px;height:200px;"><?php echo $this->_tpl_vars['linkrow']['packages']; ?>
</textarea></td>
	</tr>
 	<tr  class="admin_table_trbg">
		<th width="120">展位设置方案：</th>
		<td><textarea  id="booth" name="booth" cols="100" rows="8" style="width:800px;height:200px;"><?php echo $this->_tpl_vars['linkrow']['booth']; ?>
</textarea></td>
	</tr>
    <tr>
		<th width="120">参与办法：</th>
		<td><textarea  id="participate" name="participate" cols="100" rows="8" style="width:800px;height:200px;"><?php echo $this->_tpl_vars['linkrow']['participate']; ?>
</textarea></td>
	</tr>

		<tr  class="admin_table_trbg">
		<td align="center" colspan="2">
        <?php if (is_array ( $this->_tpl_vars['linkrow'] )): ?>
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['linkrow']['id']; ?>
" />
        <input type="hidden" name="lasturl" value="<?php echo $this->_tpl_vars['lasturl']; ?>
">
        <input class="admin_submit4" type="submit" name="update" value="&nbsp;修 改&nbsp;" />
        <?php else: ?>
        <input class="admin_submit4" type="submit" name="add" value="&nbsp;添 加&nbsp;" />
        <?php endif; ?>
		<input class="admin_submit4" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
	</tr>
</table>
<input type="hidden" name="pytoken"  id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div></div>
<div class="infoboxp">
<div class="infoboxp_top">
<h6>事项</h6>
</div>
<ul><li style="height:25px; margin-top:5px;">注意：添加链接时，请正确选择链接类型。</li></ul>
</div>
</body>
</html>