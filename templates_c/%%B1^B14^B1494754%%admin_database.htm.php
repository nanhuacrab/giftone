<?php /* Smarty version 2.6.26, created on 2015-01-29 18:40:50
         compiled from admin/admin_database.htm */ ?>
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
<script>
function check_backup(){
	var chk_value =[];    
	$('input[name="table[]"]:checked').each(function(){    
		chk_value.push($(this).val());   
	});   
	if(chk_value.length==0){
		parent.layer.msg("��ѡ��Ҫ���ݵ����ݣ�",2,8);return false;
	}else{
		parent.layer.confirm("ȷ��������",function(){
			parent.layer.closeAll();
			parent.layer.load('ִ���У����Ժ�...',0);
			document.getElementById('myform').submit(); 
		});
	} 
}
</script>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">���ݿ����</span>
<div class="infoboxp_right"> 
    <a href="index.php?m=database&c=backin" class="infoboxp_tj">�ָ�</a>
</div>
</div>

<div class="clear"></div>
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php?m=database&c=backup" name="myform" method="post" target="supportiframe" id='myform'>
<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%">
	<thead>
	<tr class="admin_table_top">
		    <th width="50"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th align="left">����</th>
            <th align="left">������</th>
			<th>����</th>
		</tr>
	</thead>
	<tbody>
<?php $_from = $this->_tpl_vars['table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
    <tr <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?>>
    	<td align="center" ><input type="checkbox" name="table[]" value="<?php echo $this->_tpl_vars['v']['name']; ?>
"  onclick='unselectall()'></td>
    	<td align="left" class="td1"><span><?php echo $this->_tpl_vars['v']['name']; ?>
</span></td> 
    	<td class="ud" align="left"><span><?php echo $this->_tpl_vars['v']['num']; ?>
��</span></td>
    	<td width="150" align="center">
        <a href="javascript:void(0)"class="admin_cz_sh" onClick="layer_del('ȷ��Ҫ���ݸı�', 'index.php?m=database&c=sql&name=<?php echo $this->_tpl_vars['v']['name']; ?>
&type=1');">����</a> | 
        <a href="javascript:void(0)"class="admin_cz_bj" onclick="layer_del('',	'index.php?m=database&c=sql&name=<?php echo $this->_tpl_vars['v']['name']; ?>
&type=2');">�޸�</a> | 
        <a href="javascript:void(0)"class="admin_cz_sh" onclick="layer_del('', 'index.php?m=database&c=sql&name=<?php echo $this->_tpl_vars['v']['name']; ?>
&type=3');">�Ż�</a></td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
<tr style="background:#f1f1f1;">
	<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="3" >
    <label for="chkAll2">ȫѡ</label>&nbsp;
	<input name="button" value="����" type="button" class="admin_submit4" onClick="return check_backup()">
    </td>
  </tr>
  </tbody>
  </table>
</form>
</div>
</div>
</div>
</body>
</html>