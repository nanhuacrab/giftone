<?php /* Smarty version 2.6.26, created on 2015-01-29 21:37:08
         compiled from admin/admin_description_add.htm */ ?>
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
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<script language="javascript">
KindEditor.ready(function(K){K.create('#content', {items : ['source','bold', 'italic', 'underline','removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist','insertunorderedlist','emoticons', 'image'],afterBlur:function(){this.sync();} });});
$(document).ready(function(){
	$("select[name=top_tpl]").change(function(){
		var topvalue=$(this).val();
		if(topvalue==1){
			$("#top_styletpl").show();
			$("#top_tpl_dir").hide();
		}
		if(topvalue==3){
			$("#top_styletpl").hide();
			$("#top_tpl_dir").show();
		}else{
			$("input[name=top_tpl_dir]").val('');
			$("#top_tpl_dir").hide();
		}
	})
	$("select[name=footer_tpl]").change(function(){
		var footervalue=$(this).val();
		if(footervalue==1){
			$("#footer_styletpl").show();
			$("#footer_tpl_dir").hide();
		}
		if(footervalue==3){
			$("#footer_styletpl").hide();
			$("#footer_tpl_dir").show();
		}else{
			$("input[name=footer_tpl_dir]").val('');
			$("#footer_tpl_dir").hide();
		}
	})
	$("input[name=is_type]").click(function(){
		var footervalue=$(this).val();
		if(footervalue==1){
			$(".diyweb").show();
		}else{
			$(".diyweb").hide();
		}
	})
})
<!--
function checkform(myform){
	var is_type=myform.is_type.value;
  if (myform.title.value=="" && is_type==1) { 
	  parent.layer.msg('����д���⣡', 2, 2);
      myform.title.focus();
      return (false);
  }
}

//-->
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Prompt">
        <div class="admin_Prompt_span">
           ��ʾ���Զ���ҳ���URLΪHTML��̬ҳ�棬�ⲿ����Ϊ����·��������http://www.phpyun.com/index.php
        </div>
        <div class="admin_Prompt_close"></div>
    </div>
<div class="infoboxp_top"><h6>��ӵ�ҳ��</h6>
 	<div class="infoboxp_right">
    	<a href="index.php?m=description" class="infoboxp_tj">��ҳ�����</a>
    </div>
</div>
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

<form  target="supportiframe" name="myform" action="index.php?m=description&c=save" method="post"  onSubmit="return checkform(this);">
<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	<table width="100%" class="table_form" style="background:#fff;">
		<tr>
			<th>���ƣ�</th>
			<td><input class="input-text" type="text" name="name" size="40" value="<?php echo $this->_tpl_vars['descrow']['name']; ?>
"/></td>
		</tr>
		<tr class="admin_table_trbg">
			<th>���</th>
			<td><select name="nid">
            <?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['v']['id'] == $this->_tpl_vars['descrow']['nid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
		</tr>
        <tr class="admin_table_trbg">
			<th>���ͣ�</th>
			<td><input type="radio" name="is_type" value="1" id="is_type_0" <?php if ($this->_tpl_vars['descrow']['is_type'] != '0'): ?>checked='checked'<?php endif; ?>>
              <label for="is_type_0">�Զ���ҳ��</label>
              <input type="radio" name="is_type" value="0" id="is_type_1" <?php if ($this->_tpl_vars['descrow']['is_type'] == '0'): ?>checked='checked'<?php endif; ?>>
              <label for="is_type_1">�ⲿ����</label>
             </td>
		</tr>
      	<tr>
			<th>URL���ӣ�</th>
			<td><input class="input-text" type="text" name="url" size="40" value="<?php echo $this->_tpl_vars['descrow']['url']; ?>
"/>(����Ϊ�༶Ŀ¼)������/about/index.html</td>
		</tr>
        <tr class="admin_table_trbg diyweb" <?php if ($this->_tpl_vars['descrow']['is_type'] == '0'): ?>style="display:none;"<?php endif; ?>>
			<th>���⣺</th>
			<td><input class="input-text" type="text" name="title" size="40" value="<?php echo $this->_tpl_vars['descrow']['title']; ?>
"/></td>
		</tr>
		<tr class="diyweb" <?php if ($this->_tpl_vars['descrow']['is_type'] == '0'): ?>style="display:none;"<?php endif; ?>>
			<th>�ؼ��ʣ�</th>
			<td>
			 <input class="input-text" type="text" name="keyword" size="50" value="<?php echo $this->_tpl_vars['descrow']['keyword']; ?>
"/>(��ؼ��֣����ã��������벻ҪΪ��)
			</td>
		</tr>
    	<tr class="admin_table_trbg diyweb" <?php if ($this->_tpl_vars['descrow']['is_type'] == '0'): ?>style="display:none;"<?php endif; ?>>
			<th>������</th>
			<td><textarea name="description" cols="55" rows="3"><?php echo $this->_tpl_vars['descrow']['descs']; ?>
</textarea></td>
		</tr>
      	<tr class="diyweb" <?php if ($this->_tpl_vars['descrow']['is_type'] == '0'): ?>style="display:none;"<?php endif; ?>>
			<th>ͷ��ģ�壺<div style="height:10px;"></div>�ײ�ģ�壺<div style="height:10px;"></div> <div style="height:10px;"></div></th>
			<td>
            <select name="top_tpl">
            	<option value="1" <?php if ($this->_tpl_vars['descrow']['top_tpl'] == 1): ?>selected<?php endif; ?>>Ĭ��ģ��</option>
                <option value="2" <?php if ($this->_tpl_vars['descrow']['top_tpl'] == 2): ?>selected<?php endif; ?>>�հ�ģ��</option>
                <option value="3" <?php if ($this->_tpl_vars['descrow']['top_tpl'] == 3): ?>selected<?php endif; ?>>�Զ���ģ��</option>
            </select>
            <span id="top_tpl_dir" <?php if ($this->_tpl_vars['descrow']['top_tpl_dir'] == ""): ?>style="display:none;"<?php endif; ?>>
            	<input class="input-text" type="text" name="top_tpl_dir" size="40" value="<?php echo $this->_tpl_vars['descrow']['top_tpl_dir']; ?>
"/>
                ����/tempates/default/header ע��ģ������htm��β
            </span>
            <span id="top_styletpl" <?php if ($this->_tpl_vars['descrow']['top_tpl'] != 1): ?>style="display:none;"<?php endif; ?>>
            	ͷ��Ĭ��ģ��Ϊ��ǰģ�����µ�header.htm
            </span>
            <div style="height:10px;"></div>
            <select name="footer_tpl">
            	<option value="1" <?php if ($this->_tpl_vars['descrow']['footer_tpl'] == 1): ?>selected<?php endif; ?>>Ĭ��ģ��</option>
                <option value="2" <?php if ($this->_tpl_vars['descrow']['footer_tpl'] == 2): ?>selected<?php endif; ?>>�հ�ģ��</option>
                <option value="3" <?php if ($this->_tpl_vars['descrow']['footer_tpl'] == 3): ?>selected<?php endif; ?>>�Զ���ģ��</option>
            </select>
            <span id="footer_tpl_dir" <?php if ($this->_tpl_vars['descrow']['footer_tpl_dir'] == ""): ?>style="display:none;"<?php endif; ?>>
            	<input class="input-text" type="text" name="footer_tpl_dir" size="40" value="<?php echo $this->_tpl_vars['descrow']['footer_tpl_dir']; ?>
"/>			   ����/tempates/default/header ע��ģ������htm��β
            </span>
            <span id="footer_styletpl" <?php if ($this->_tpl_vars['descrow']['footer_tpl'] != 1): ?>style="display:none;"<?php endif; ?>>
            	�ײ�Ĭ��ģ��Ϊ��ǰģ�����µ�footer.htm
            </span>
            <div style="height:10px;"></div>
            </td>
		</tr>
    	<tr class="admin_table_trbg diyweb" <?php if ($this->_tpl_vars['descrow']['is_type'] == '0'): ?>style="display:none;"<?php endif; ?>>
			<th>ҳ�����ݣ� </th>
			<td>
			<textarea  id="content" name="content" cols="100" rows="8" style="width:700px;height:300px;"><?php echo $this->_tpl_vars['descrow']['content']; ?>
</textarea>
			</td>
		</tr>
        <tr>
			<th>����</th>
			<td><input class="input-text" type="text" name="sort" size="20" value="<?php echo $this->_tpl_vars['descrow']['sort']; ?>
"/></td>
		</tr>
         <tr class="admin_table_trbg">
			<th>��ҳ�����򵼺���</th>
			<td><input type="radio" name="is_nav" value="1" id="is_nav_0" <?php if ($this->_tpl_vars['descrow']['is_nav'] != '0'): ?>checked='checked'<?php endif; ?>>
              <label for="is_nav_0">��ʾ</label>
              <input type="radio" name="is_nav" value="0" id="is_nav_1" <?php if ($this->_tpl_vars['descrow']['is_nav'] == '0'): ?>checked='checked'<?php endif; ?>>
              <label for="is_nav_1">����ʾ</label></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
			<?php if (is_array ( $this->_tpl_vars['descrow'] )): ?>
        	<input type="hidden" name="id" size="40" value="<?php echo $this->_tpl_vars['descrow']['id']; ?>
"/>
        	<input class="admin_submit4" type="submit" name="update_desc" value="&nbsp;�� ��&nbsp;"  />
        	<?php else: ?>
    		<input class="admin_submit4" type="submit" name="add_desc" value="&nbsp;�� ��&nbsp;"  />
     		<?php endif; ?>
     		<input class="admin_submit4" type="reset" name="reset" value="&nbsp;�� �� &nbsp;" />
			</td>
		</tr>
	</table>
</form>
</div></div>
</body>
</html>