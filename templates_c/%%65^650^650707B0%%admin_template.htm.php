<?php /* Smarty version 2.6.26, created on 2015-02-01 14:34:07
         compiled from admin/admin_template.htm */ ?>
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
<div class="infoboxp_top">
<span class="admin_title_span">ģ���б�</span>
  <a href="javascript:location.reload()" class="admin_infoboxp_tj">[ˢ�µ�ǰҳ]</a>

</div>

<div class="table-list">
<div class="admin_table_border">  
<table width="100%" style="background:#fff">
	<thead>
	<tr class="admin_table_top">
			<th align="left">�ļ���</th>
            <th align="left">�ļ�·��</th>
             <th align="left">�ļ���С</th>
		
			<th align="left">������ʱ��</th>
			<th class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['floder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
 	
    <tr align="left"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?>>
    	<td align="left" class="td1"><span><a href="index.php?m=admin_template&dir=<?php echo $this->_tpl_vars['v']['url']; ?>
"><img src="images/folder.gif"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></span></td> 
        <td  align="left" class="ud"><?php echo $this->_tpl_vars['v']['url']; ?>
</td>
    	<td class="ud" align="left"></td>
   	 	<td class="od" align="left"></td>
    	<td> <a href="index.php?m=admin_template&dir=<?php echo $this->_tpl_vars['v']['url']; ?>
"class="admin_cz_bj">�鿴Ŀ¼</a></td>
  </tr>
 
  <?php endforeach; endif; unset($_from); ?>
   <?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
 	
    <tr align="left">
    	<td align="left" class="td1"><span><a href="index.php?m=admin_template&c=modify&path=<?php echo $this->_tpl_vars['v']['url']; ?>
&name=<?php echo $this->_tpl_vars['v']['name']; ?>
"><img src="images/file.gif"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></span></td> 
        <td  align="left" class="ud"><?php echo $this->_tpl_vars['v']['url']; ?>
</td>
    	<td class="ud" align="left"><?php echo $this->_tpl_vars['v']['size']; ?>
</td>
   	 	<td class="od" align="left"><?php echo $this->_tpl_vars['v']['time']; ?>
</td>
    	<td> <a href="index.php?m=admin_template&c=modify&path=<?php echo $this->_tpl_vars['v']['url']; ?>
&name=<?php echo $this->_tpl_vars['v']['name']; ?>
"class="admin_cz_bj">�޸��ļ�</a></td>
  </tr>
 
  <?php endforeach; endif; unset($_from); ?>
  </tbody>
  </table> 
</div>
</div>
</div>
</body>
</html>