<?php /* Smarty version 2.6.26, created on 2015-02-03 00:24:41
         compiled from admin/admin_wxnav.htm */ ?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<script type="text/javascript">
function save_industry(){ 
	var name  =$("input[name='add_name']").val();
	var pytoken =$("#pytoken").val();
	var keyid =$("#add_keyid").val();
	var key  =$("input[name='add_key']").val();
	var type  =$("#add_type").val();
	var url  =$("input[name='add_url']").val();
	var sort  =$("input[name='add_sort']").val();
	var navid = $("#navid").val(); 
	if($.trim(name)==''){
		parent.layer.msg('菜单名称不能为空！', 2, 8);return false;
	}
	if(keyid !='0' && type=='click' && type==''){
		parent.layer.msg('点击事件，菜单关键字不得为空！', 2, 8);return false;
	}
	if(keyid !='0' && type=='view' && url==''){
		parent.layer.msg('链接事件，菜单链接不得为空！', 2, 8);return false;
	}
	
	$.post("index.php?m=wx&c=edit",{name:name,keyid:keyid,type:type,key:key,url:url,sort:sort,navid:navid,pytoken:pytoken},function(msg){
		if(msg==1){ 
			parent.layer.msg('请按要求填写信息！', 2, 8);return false;
		}else if(msg==2){
			parent.layer.msg('相同名称或关键字已存在！', 2, 8);return false;
		}else if(msg==3){
			parent.layer.msg('操作成功！', 2,9,function(){location=location ;});return false;
		}else if(msg==4){
			parent.layer.msg('操作成功！', 2,8,function(){location=location ;});return false;
		}
	}); 
}
function checksort(id){
	$("#sort"+id).hide();
	$("#input"+id).show();
	$("#input"+id).focus();
}	
function subsort(id){
	var sort=$("#input"+id).val();
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=wx&c=ajax",{id:id,sort:sort,pytoken:pytoken},function(data){
		$("#sort"+id).html(sort);
		$("#sort"+id).show();
		$("#input"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
function checkname(id){
	$("#name"+id).hide();
	$("#inputname"+id).show();
	$("#inputname"+id).focus();
}	
function subname(id){
	var pytoken=$("#pytoken").val();
	var name=$("#inputname"+id).val();
	$.post("index.php?m=wx&c=ajax",{id:id,name:name,pytoken:pytoken},function(data){
		$("#name"+id).html(name);
		$("#name"+id).show();
		$("#inputname"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}

function editnav(id,name,keyid,key,type,url,sort){	
	$("#navid").val(id);
	$("input[name='add_name']").val(name);	
	$("input[name='add_sort']").val(sort);
	if(parseInt(keyid)>0){
		$("#add_keyid").val(keyid);
		$("input[name='add_key']").val(key);
		$("#add_type").val(type);
		$("input[name='add_url']").val(url);
		$('.buttonson').show();
		add_class('修改微信菜单','300','270','#houtai_div','');
	}else{		
		$('.buttonson').hide();
		add_class('修改微信菜单','300','200','#houtai_div','');
	}		
}
function showbuton(){	
	var value = $('#add_keyid').val();	
	if(value!='0'){		
		$(".xubox_close").trigger("click");
		$('.buttonson').show();
		add_class('新增微信菜单','300','270','#houtai_div','');	
	}else{
		$(".xubox_close").trigger("click");
		$('.buttonson').hide();
		add_class('新增微信菜单','300','200','#houtai_div','');		
	}
	
}

function clearnav(){  
	$("#navid").val('');
	$("input[name='add_name']").val('');
	$("#add_keyid").val(0);
	$("input[name='add_key']").val('');
	$("#add_type").val('click');
	$("input[name='add_url']").val('');
	$("input[name='add_sort']").val(''); 
} 
function navsync(){
	parent.layer.confirm('确定要同步菜单至微信服务器？',function(){
		parent.layer.load('执行中，请稍候...',0);
		var pytoken=$("#pytoken").val();	
		$.get("index.php?m=wx&c=creat&pytoken="+pytoken,function(msg){
			if(msg==1){
				parent.layer.msg('微信菜单创建成功！', 2, 9);return false;
			}else{
				parent.layer.msg('微信菜单创建失败！', 2,8);return false;
			}
		}); 
	});
}
</script> 
<div class="infoboxp"> <div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">微信菜单管理</span>
<a  href="javascript:void(0)" onClick="add_class('新增微信菜单','300','200','#houtai_div','');" class="admin_infoboxp_tj">增加微信菜单</a>
<a  href="javascript:void(0);"  onclick="navsync();" class="admin_infoboxp_tj">同步微信菜单</a>

</div>
<div class="clear"></div>
<div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php?m=wx&c=delnav" method="post" target="supportiframe" id='myform'>  
<table width="100%">
	<thead>
	<tr class="admin_table_top">
   		<th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th>菜单标题<span class="clickup">(点击修改)</span></th>
        <th>菜单类型</th>
         <th>菜单关键字</th>
        <th>菜单链接</th>
        <th>排序</th>
		<th width="180" class="admin_table_th_bg">操作</th>
	</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['navlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
	<tr align="left">
  	    <td width="50" align='center'><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><span onClick="checkname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['name']; ?>
</span> <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['v']['id']; ?>
"value="<?php echo $this->_tpl_vars['v']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['v']['id']; ?>
');"></td>
		<td class="ud"><?php echo $this->_tpl_vars['v']['type']; ?>
</td>
        <td><?php echo $this->_tpl_vars['v']['key']; ?>
</td>
		<td><?php echo $this->_tpl_vars['v']['url']; ?>
</td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['v']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['v']['id']; ?>
');"></td>
		<td class="ud">
         <a href="javascript:editnav('<?php echo $this->_tpl_vars['v']['id']; ?>
','<?php echo $this->_tpl_vars['v']['name']; ?>
','<?php echo $this->_tpl_vars['v']['keyid']; ?>
','<?php echo $this->_tpl_vars['v']['key']; ?>
','<?php echo $this->_tpl_vars['v']['type']; ?>
','<?php echo $this->_tpl_vars['v']['url']; ?>
','<?php echo $this->_tpl_vars['v']['sort']; ?>
');" class="admin_cz_bj">修改</a>
        <A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=wx&c=delnav&delid=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a></td>
	</tr> 
    <?php if ($this->_tpl_vars['v']['list']): ?>
    <?php $_from = $this->_tpl_vars['v']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vv']):
?> 
	<tr align="left">
  	    <td width="50" align='center'><input type="checkbox" value="<?php echo $this->_tpl_vars['vv']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud">----<span onClick="checkname('<?php echo $this->_tpl_vars['vv']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['vv']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['vv']['name']; ?>
</span> <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['vv']['id']; ?>
"value="<?php echo $this->_tpl_vars['vv']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['vv']['id']; ?>
');"></td>
		<td class="ud"><?php echo $this->_tpl_vars['vv']['type']; ?>
</td>
         <td><?php echo $this->_tpl_vars['vv']['key']; ?>
</td>
		<td><?php echo $this->_tpl_vars['vv']['url']; ?>
</td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['vv']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['vv']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['vv']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['vv']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['vv']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['vv']['id']; ?>
');"></td>
		<td class="ud">
          <a href="javascript:editnav('<?php echo $this->_tpl_vars['vv']['id']; ?>
','<?php echo $this->_tpl_vars['vv']['name']; ?>
','<?php echo $this->_tpl_vars['vv']['keyid']; ?>
','<?php echo $this->_tpl_vars['vv']['key']; ?>
','<?php echo $this->_tpl_vars['vv']['type']; ?>
','<?php echo $this->_tpl_vars['vv']['url']; ?>
','<?php echo $this->_tpl_vars['vv']['sort']; ?>
');" class="admin_cz_bj">修改</a>
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=wx&c=delnav&delid=<?php echo $this->_tpl_vars['vv']['id']; ?>
');"class="admin_cz_sc">删除</a></td>
	</tr> 
	<?php endforeach; endif; unset($_from); ?> 
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
    <tr style="background: #f1f1f1;">
	<input type="hidden" name="pytoken"  id='pytoken'value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <td colspan="2"><input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
    </tr>
	</tbody>
</table>

</form>
</div>
</div>
</div>
<div id="houtai_div" style=" width:298px; border:1px solid #ccc; position:absolute; display:none;">
    <table class="table_form "style="width:100%">
		<tbody> 
        	<tr class="ui_td_11" >
				<td style="text-align: right;" class="ui_content_wrap">菜单标题：</td>
                <td><input type="text" name="add_name" value="" class="input-text" /></td>
			</tr>
        <tr class="ui_td_11" >
				<td style="text-align: right;" class="ui_content_wrap">菜单数组：</td>
                <td>
                <select name="add_keyid" id="add_keyid" onChange="showbuton();" id="keyid">
                <option value="0">一级菜单</option>
                <?php $_from = $this->_tpl_vars['navlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
			<tr class="ui_td_11 buttonson" style="display:none">
				<td style="text-align: right;" class="ui_content_wrap">菜单类型：</td>
                <td><select name="add_type" id="add_type">
                <option value="clikc">点击事件</option>
                <option value="view">链接事件</option>
                </select></td>
			</tr>
            <tr class="ui_td_11 buttonson"  style="display:none">
				<td style="text-align: right;" class="ui_content_wrap">菜单关键字：</td>
                <td><input type="text" name="add_key" class="input-text" /></td>
			</tr>

            <tr class="ui_td_11 buttonson" style="display:none" >
				<td style="text-align: right;" class="ui_content_wrap">菜单链接：</td>
                <td><input type="text" name="add_url" class="input-text" /></td>
			</tr>
			<tr class="ui_td_11" >
				<td style="text-align: right;" class="ui_content_wrap">排&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：</td>
                <td><input type="text" name="add_sort" size='5' class="input-text" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
			</tr>
			<tr class="ui_td_11 ">
				<td  class="ui_content_wrap" colspan='2'>
                <input type="hidden" name="navid" id="navid" value="">
                <input class="admin_submit4" type="button" name="add" value=" 确认 " onClick="save_industry()" /></td>
			</tr> 
		</tbody>
	</table>
</div>   
  </body>
</html>