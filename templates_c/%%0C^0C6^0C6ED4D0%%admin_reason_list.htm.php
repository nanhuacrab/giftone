<?php /* Smarty version 2.6.26, created on 2015-01-29 18:21:08
         compiled from admin/admin_reason_list.htm */ ?>
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
		parent.layer.msg('举报原因不能为空！', 2, 8);return false;
	}
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
	<div class="admin_Filter">
		<span class="complay_top_span fl">举报原因列表</span>  
		<form action="index.php" name="myform" method="get" onSubmit="return checked_name();"  target="supportiframe">
		<input name="m" value="admin_reason" type="hidden"/>
		<input name="c" value="save" type="hidden"/>
		 <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<input value="<?php echo $this->_tpl_vars['reason_show']['id']; ?>
" type="hidden" id="update_id" name='id'/>
    	<input  class="company_job_text" type="text" name="name" id='name' size="55" style="float:left" value="<?php echo $this->_tpl_vars['reason_show']['name']; ?>
"> 
        <span class="company_job_a" style="float:left; margin-top:0px;">
		<?php if ($this->_tpl_vars['reason_show']['id']): ?>
		<input type="submit"  value="保存" name="news_search" class="admin_Filter_bth"/>
		<?php else: ?>
		<input type="submit"  value="添加" name="news_search" class="admin_Filter_bth"/>
		<?php endif; ?> 
		</span>
        </form> 
	</div> 
	<div class="clear"></div>
<div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" name="myform" method="get"  id='myform' target="supportiframe" > 
<table width="100%">
	<thead>
			<tr class="admin_table_top">
		    <th style="width:60px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th style="width:60px;">编号</th>
			<th align="left">标题</th>
			<th class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['reason']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
    	<td> <a href="index.php?m=admin_reason&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="status admin_cz_sh" >修改</a> |  <a href="javascript:void(0)" onClick="layer_del('确定要删除？','index.php?m=admin_reason&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
')" class="admin_cz_sc">删除</a>
        </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr style="background:#f1f1f1;">
  <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' />
    <label for="chkAll2">全选</label>&nbsp;</td>
    <td colspan="1">
    <input class="admin_submit4"   type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
    <td colspan="2" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
  </tr>
  </tbody>
  </table>
  <input type="hidden" name="m" value="admin_reason">
  <input type="hidden" name="c" value="del">
  <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>
</div>
</div>
</body>
</html>