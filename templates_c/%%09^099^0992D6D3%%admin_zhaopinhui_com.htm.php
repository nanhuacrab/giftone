<?php /* Smarty version 2.6.26, created on 2015-02-01 14:18:56
         compiled from admin/admin_zhaopinhui_com.htm */ ?>
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
$(function(){
	$(".status").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		var id=$(this).attr("pid");
		var status=$(this).attr("status");
		var pytoken=$("#pytoken").val();
		$("#status"+status).attr("checked",true); 	
		$.post("index.php?m=zhaopinhui&c=sbody",{id:id,pytoken:pytoken},function(msg){
			$("#statusbody").val(msg);
			status_div('参展企业审核','350','220');
		});			
	});
}); 
function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$("input[name=pid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		status_div('参展企业审核','350','220');
	}
} 
</script> 
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none; width: 350px; ">
  <div class=""> 
      <form action="index.php?m=zhaopinhui&c=status" target="supportiframe" method="post" id="formstatus">
      <div class="admin_Operating_sh" style="padding:10px;">
		<div class="admin_Operating_sh_h1" style="padding:5px;">审核操作：
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >未审核</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >正常</label>
        <label for="status2"><input type="radio" name="status" value="2" id="status2">未通过</label></div>
		<div class="admin_Operating_sh_sm">审核说明：</div>
        <div><textarea id="statusbody" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub"> <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></div>
		</div>  
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<input name="pid" value="0" type="hidden">
      </form> 
  </div>
</div> 
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="admin_Filter">
  <span class="complay_top_span fl">参与企业列表</span>
  <span class='admin_search_div'>
  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>  
</span> 
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
 
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php?m=zhaopinhui&c=delcom" name="myform" method="post" target="supportiframe" id='myform'>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
			<th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
            <th>招聘会名称</th>
			<th>企业名称</th>
			<th width="300">参与职位</th>
			<th>状态</th>
			<th width="100" class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
			<td ><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' class="check_all" rel="del_chk" /></td>
			<td align="left" ><?php echo $this->_tpl_vars['v']['zphname']; ?>
</td>
            <td align="left" ><?php echo $this->_tpl_vars['v']['comname']; ?>
</td>
			<td align="left" ><?php echo $this->_tpl_vars['v']['jobname']; ?>
</td>
			<td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="admin_com_Audited">已审核</span><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><span class="admin_com_noAudited">未审核</span><?php elseif ($this->_tpl_vars['v']['status'] == 2): ?><span class="admin_com_tg">未通过</span><?php endif; ?></td>
			<td>
			<a href="javascript:;" class="status admin_cz_sh" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
">审核</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=zhaopinhui&c=delcom&delid=<?php echo $this->_tpl_vars['v']['id']; ?>
');">删除</a></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr style="background: #f1f1f1;">
       		<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
			<td><label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="批量审核" onClick="audall();" />
            <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
			<td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
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