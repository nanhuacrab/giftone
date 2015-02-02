<?php /* Smarty version 2.6.26, created on 2015-01-29 18:40:51
         compiled from admin/admin_domain.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<script> 
function check_type(id,value){
	if(value=="1"){
		var val = "0";
	}else{
		var val="1";
	}
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:$('#pytoken').val()},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">分站管理</span>
<a href="index.php?m=admin_domain&c=AddDomain" class="admin_infoboxp_tj">添加分站</a> </div>
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
<input name="m" value="admin_domain" type="hidden"/>
<input name="c" value="allDelDomain" type="hidden"/>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%">
	<thead>
	<tr class="admin_table_top">
         <th width="60" align="center"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
       	 <th align="left" width="150">标题</th>
			<th align="left" width="200">域名</th>
             <th align="left">城市</th>
             <th align="left" width="200">行业</th>
              <th align="left">风格目录</th>
              <th align="left" width="100">是否启用</th>
			<th align="center" width="100" class="admin_table_th_bg" >操作</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['domain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['domain']):
?>
    <tr align="left"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?>>
        <td align="center"><input type="checkbox" value="<?php echo $this->_tpl_vars['domain']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span><?php echo $this->_tpl_vars['domain']['title']; ?>
</span></td> 
        <td  align="left" class="ud"><?php echo $this->_tpl_vars['domain']['domain']; ?>
</td>
        <td  align="left" class="ud"><?php if ($this->_tpl_vars['domain']['three_cityid']): ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['domain']['three_cityid']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['domain']['cityid']]; ?>
<?php endif; ?> </td>
        <td  align="left" class="ud"><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['domain']['hy']]; ?>
 </td>
         <td  align="left" class="ud"><?php echo $this->_tpl_vars['domain']['style']; ?>
 </td>
        <td class="ud" align="left"><?php if ($this->_tpl_vars['domain']['type'] == '1'): ?><img src="../data/ajax_img/doneico.gif"><?php else: ?><img src="../data/ajax_img/errorico.gif"><?php endif; ?></td>
    	<td align="center">
        <a href="index.php?m=admin_domain&c=Modify&siteid=<?php echo $this->_tpl_vars['domain']['id']; ?>
"class="admin_cz_sc">修改</a> | 
        <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?m=admin_domain&c=DelDomain&delid=<?php echo $this->_tpl_vars['domain']['id']; ?>
');" class="admin_cz_sc">删除</a>
        </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
      <td align="left" colspan="3" style="padding-left:23px;">
      <input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /><label for="chkAll2">全选</label>&nbsp;
      <input class="admin_submit4"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
      </td>
  <td colspan="5" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td></tr>
  </tbody>
  </table>
</form>
</div>
</div>
</body>
</html>