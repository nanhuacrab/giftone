<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:25
         compiled from admin/admin_navmap.htm */ ?>
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
<div class="admin_Filter">
	<span class="complay_top_span fl">��վ��ͼ</span> 
		<form action="index.php" name="myform" method="get">
		<input name="m" value="navmap" type="hidden"/>
		<input class="admin_Filter_search"  type="text" name="keyword"  size="25" style="float:left"> 
		<input  class="admin_Filter_bth" type="submit" name="news_search" value="����"/>
				<span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">�߼�����</div>
        </div> 
        </span> 
		<a href="index.php?m=navmap&c=add" class="admin_infoboxp_tj">�����վ��ͼ</a>
	</form> 
</div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
<input name="m" value="navmap" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
		    <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th>���</th>
            <th>����</th>
			<th>���</th>
			<th>���ӵ�ַ</th>
            <th>����</th>
			<th>����</th>
            <th>��������</th>
            <th>��ʾ</th>
			<th class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
    <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
	    <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
        <td class="od" align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
    	<td class="ud" align="left"><?php echo $this->_tpl_vars['v']['typename']; ?>
</td>
		<td class="gd" align="left"><?php echo $this->_tpl_vars['v']['url']; ?>
</td>
        <td class="td" align="left"><?php if ($this->_tpl_vars['v']['type'] == '1'): ?>վ������<?php else: ?>ԭ����<?php endif; ?></td>
		<td class="td"><?php echo $this->_tpl_vars['v']['sort']; ?>
</td>
        <td class="td"><?php if ($this->_tpl_vars['v']['eject'] == '1'): ?>�´���<?php else: ?>ԭ����<?php endif; ?></td>
    	<td class="td"><?php if ($this->_tpl_vars['v']['display'] == '1'): ?>��<?php else: ?>��<?php endif; ?></td>
    	<td><a href="index.php?m=navmap&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=navmap&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">ɾ��</a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr style="background:#f1f1f1;">
    <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
    <td colspan="2" ><label for="chkAll2">ȫѡ</label>
    <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
    <td colspan="7" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
  </tr>
  </tbody>
  </table>
  <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>
</div>
</div>
</body>
</html>