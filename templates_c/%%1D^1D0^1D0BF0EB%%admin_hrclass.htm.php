<?php /* Smarty version 2.6.26, created on 2015-01-29 21:36:45
         compiled from admin/admin_hrclass.htm */ ?>
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
<script> 
function checked_name(){
	var name=$.trim($("#name").val()); 
	if(name==''){ 
		parent.layer.msg('�ĵ�������Ʋ���Ϊ�գ�', 2, 8);
		return false;
	}
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="company_job">
    <div class="company_job_list_h1">
    <span class="admin_title_span">����������б�</span>
        <span style="float:left; margin-right:5px;display: inline-block;"> 
		<a class="admin_infoboxp_tj" href="index.php?m=hrclass&c=add">������</a>
        </span> 
	</div>
</div>
<div class="clear"></div>
<div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" name="myform" method="post"  id='myform' target="supportiframe"> 
<input type="hidden" name="m" value="hrclass">
<input type="hidden" name="c" value="del">
<table width="100%">
	<thead>
			<tr class="admin_table_top">
		    <th style="width:60px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th style="width:60px;">���</th>
			<th align="center">����</th>
            <th align="center">����ͼ</th>
			<th class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <tr align="center">
	    <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
   	 	<td class="od" align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
        <td class="od" align="center"><img src="../<?php echo $this->_tpl_vars['v']['pic']; ?>
" width="60" height="60"></td>
    	<td><a href="index.php?m=hrclass&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="status admin_cz_sh" >�༭</a> |  
      <a href="javascript:void(0);" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=hrclass&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
')" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr style="background:#f1f1f1;">
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="4" >
    <label for="chkAll2">ȫѡ</label>&nbsp;
    <input class="admin_submit4" type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" /></td>
  </tr>
  </tbody>
  </table>
  <input type="hidden" name="pytoken" id="pytoken"  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>
</div>
</div>
</body>
</html>