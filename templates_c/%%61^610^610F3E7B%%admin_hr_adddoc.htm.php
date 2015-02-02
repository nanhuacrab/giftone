<?php /* Smarty version 2.6.26, created on 2015-01-29 18:41:01
         compiled from admin/admin_hr_adddoc.htm */ ?>
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
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<link rel="stylesheet" href="../data/kindeditor/themes/default/default.css" />
<title>后台管理</title>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
<script>
KindEditor.ready(function(K) {
	var uploadbutton = K.uploadbutton({
		button : K('#insertfile')[0],
		fieldName : 'imgFile',
		url : '../data/kindeditor/php/upload_json.php?dir=file&char=gbk',
		afterUpload : function(data) {
			if (data.error === 0) {
				K('#url').val(data.url);
				K('#span_url').html(data.url);
			} else {
				parent.layer.msg(data.message);
			}
		},
		afterError : function(str) {
			parent.layer.msg(str,2,8);
		}
	});
	uploadbutton.fileBox.change(function(e) {
		uploadbutton.submit();
	});
});
function cksubmit(){
	var name=$.trim($("#name").val());
	var url=$.trim($("#url").val());
	if(name==''){parent.layer.msg("文档名称不能为空！",2,8);return false;}
	if(url==''){parent.layer.msg("请上传文档！",2,8);return false;}
	
	
}
</script>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<h6>详细信息</h6>
       <div class="infoboxp_right">
       <a href="index.php?m=hr" class="infoboxp_tj">文档列表</a>
	   <a href="index.php?m=hr&c=addclass" class="infoboxp_send">添加类别</a>
	   </div>
</div>
<div class="main_tag" >
<div class="tag_box"> 
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" target="supportiframe" action="index.php?m=hr&c=save" method="post" encType="multipart/form-data" onSubmit="return cksubmit()">
<table width="100%" class="table_form" style="background:#fff;">
	<input class="input-text" name="yurl" type="hidden" value="<?php echo $this->_tpl_vars['row']['url']; ?>
"/> 
	<input class="input-text" name="url" type="hidden" value="<?php echo $this->_tpl_vars['row']['url']; ?>
" id='url'/> 
	<tr>
	<th>文档名称：</th>
		<td><input type="text" id="name" value="<?php echo $this->_tpl_vars['row']['name']; ?>
" name="name" class="input-text"></td>
	</tr>
	<tr>
	<th>文档类别：</th>
		<td><select name="cid" id="cid">
			<?php $_from = $this->_tpl_vars['t_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['glist']):
?> 
			<option value='<?php echo $this->_tpl_vars['glist']['id']; ?>
' <?php if ($this->_tpl_vars['row']['cid'] == $this->_tpl_vars['glist']['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['glist']['name']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>  
		</select></td>
	</tr>
	<tr>
	<th>是否显示：</th>
		<td><select name="is_show"><option value='1' <?php if ($this->_tpl_vars['row']['is_show'] == '1'): ?>selected<?php endif; ?>>显示</option><option value='0' <?php if ($this->_tpl_vars['row']['is_show'] == '0'): ?>selected<?php endif; ?>>不显示</option></select></td>
	</tr>
	<tr>
		<th>上传文档：</th>
		<td><span id="span_url" style="color:#444"><?php echo $this->_tpl_vars['row']['url']; ?>
</span><input type="button" id="insertfile" value="选择文档" /></td>
	</tr>
	<tr>
    
		<td align="center" colspan="4">
        <?php if (is_array ( $this->_tpl_vars['row'] )): ?> 
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['row']['id']; ?>
">	
        <input class="admin_submit4" type="submit" name="submit" value="&nbsp;修 改&nbsp;" />
        <?php else: ?>
        <input class="admin_submit4" type="submit" name="submit" value="&nbsp;添 加&nbsp;" />
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