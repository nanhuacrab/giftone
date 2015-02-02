<?php /* Smarty version 2.6.26, created on 2015-01-29 18:21:13
         compiled from admin/admin_city.htm */ ?>
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
function replace_type(id){
	$.post("index.php?m=admin_city&c=ajax",{id:id,pytoken:$('#pytoken').val()},function(data){
		$("#threeid").html(data);
	});

}
function delsingle(id,type){
	layer.confirm('删除该城市会导致有关数据无法使用，确认删除？', function(){
		$.post("index.php?m=admin_city&c=del",{delid:id,type:type,pytoken:$('#pytoken').val()},function(data){
			if(data=="1"){
				parent.layer.msg("删除成功！",2, 9,function(){location.reload();});return false;
			}else{
				parent.layer.msg("删除失败！",2, 8,function(){location.reload();});return false;
			}
		});
		return true;
	});
}
function addcity(id,type,level){
	if($(".parent"+id).attr("style")=="display:none"){
		$(".parent"+id).attr("style","display:");
		$("#img"+id).html("<a href=\"javascript:;\" onClick=\"displaycity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jian.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"addson('"+id+"','"+level+"');\">添加子类</a>");
	}else{
		$.post("index.php?m=admin_city&c=AddCity",{kid:id,type:type,pytoken:$('#pytoken').val()},function(data){
			if(data!=""){
				$("#"+id).after(data);
				$("#img"+id).html("<a href=\"javascript:;\" onClick=\"displaycity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jian.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"addson('"+id+"','"+level+"');\">添加子类</a>");
			}else{
				$("#img"+id).html("<a href=\"javascript:;\" onClick=\"displaycity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jian.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"addson('"+id+"','"+level+"');\">添加子类</a>");
			}
		});
	}
}
function displaycity(id,type,level)
{
	if(level=="parent"){
		$(".parent"+id).each(function(){
			var sonid = $(this).attr("id");
			$(".parent"+sonid).attr("style","display:none");
		});
	}
	$(".parent"+id).attr("style","display:none");
	$("#img"+id).html("<a href=\"javascript:;\" onClick=\"addcity('"+id+"','"+type+"','"+level+"');\"><img src=\"images/iconv/jia.png\" /></a>");
}
function addson(id,level){
	var html="";
	var sel="";
	if(level=="top"){
		var style="";
	}else if(level=="parent")
	{
		var style="|--------";
	}else{
		var style="|----------------";
	}
	html+='<tr align="left" id="<?php echo $this->_tpl_vars['city']['id']; ?>
" style="display:" class="parent'+id+'">';
	html+='<td class="ud"> </td>';
	html+='<td class="ud"><a href="javascript:;" onclick="javascript:this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><img src="images/iconv/del_icon2.gif" alt="删除当前"></a></td>';
	html+='<td class="ud">'+style+'<input class="input-text" type="text" name="addcityname_'+id+'[]" value="" /></td>';
	<?php $_from = $this->_tpl_vars['letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter4']):
?>
	sel+='<option value="<?php echo $this->_tpl_vars['letter4']; ?>
"><?php echo $this->_tpl_vars['letter4']; ?>
</option>';
	<?php endforeach; endif; unset($_from); ?>
	html+='<td><select name="addletter_'+id+'[]">'+sel+'</select> </td>';
	html+='<td class="ud"><select name="adddisplay_'+id+'[]"><option value="1">是</option><option value="0">否</option></select></td> ';
	if(level=="parent"){
		html+='<td class="ud"><select name="addsitetype_'+id+'[]"><option value="0">否</option><option value="1">是</option></select></td> ';
	}
	html+='<td class="ud"></td>';
	html+='<td class="ud"></td></tr>';

	$("#"+id).after(html);
	$("#"+id).find("input[type='checkbox']").attr("checked", true);
	get_comindes_jobid();
}
function checkedtr(id){
	var name = $("#cityname_"+id).val();
	var c_sort = $("#citysort_"+id).val();
	var letter = $("#letter_"+id).val();
	var display = $("#display_"+id).val();
	var sitetype = $("#sitetype_"+id).val();
	if(name == "")
	{
		parent.layer.msg("城市名称不能为空！",2, 2);
		return false;
	}else{
		if(sitetype!="1")
		{
			sitetype="0";
		}
		$.post("index.php?m=admin_city&c=Single",{id:id,name:name,c_sort:c_sort,letter:letter,display:display,sitetype:sitetype,pytoken:$('#pytoken').val()},function(data){
			if(data=="2")
			{
				parent.layer.msg("城市名称不能为空！",2, 2);
			}else{
				parent.layer.msg("更新成功！",2, 9);
			}
		});
	}
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<span id="temp"></span>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <div class="infoboxp_top">
<span class="admin_title_span">地区设置</span>
    <div class="infoboxp_right" style="float:right"><em>提示：多城市显示只支持二级城市，增加子类需勾选父级城市！</em></div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=admin_city&c=upp" method="post" target="supportiframe" id='myform'>
      <input type="hidden" id="pytoken" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th width="60" align="left">选择</th>
              <th width="60" align="left">城市排序</th>
              <th align="left">城市名称</th>
              <th align="left">关联字母</th>
              <th align="left">前台显示</th>
              <th align="left">多城市显示</th>
              <th width="180" align="left" class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['city']):
?>
          <tr align="left" id="<?php echo $this->_tpl_vars['city']['id']; ?>
" style="display:" <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?>>
            <td class="ud"><input type="checkbox" class="checkbox_all" name="checkbox_all" value="<?php echo $this->_tpl_vars['city']['id']; ?>
"></td>
            <td class="ud"><input type="text" name="citysort_<?php echo $this->_tpl_vars['city']['id']; ?>
" id="citysort_<?php echo $this->_tpl_vars['city']['id']; ?>
" value="<?php echo $this->_tpl_vars['city']['sort']; ?>
" class="input-text" size="3"></td>
            <td class="ud"><input class="input-text" type="text" id="cityname_<?php echo $this->_tpl_vars['city']['id']; ?>
" name="cityname_<?php echo $this->_tpl_vars['city']['id']; ?>
" value="<?php echo $this->_tpl_vars['city']['name']; ?>
" />
              <b  id="img<?php echo $this->_tpl_vars['city']['id']; ?>
"><a href="javascript:;" onClick="addcity('<?php echo $this->_tpl_vars['city']['id']; ?>
','2','parent');"><img src="images/iconv/jia.png" /></a></b></td>
            <td class="ud">
            <select id="letter_<?php echo $this->_tpl_vars['city']['id']; ?>
" name="letter_<?php echo $this->_tpl_vars['city']['id']; ?>
">
                <?php $_from = $this->_tpl_vars['letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter4']):
?>
                <option value="<?php echo $this->_tpl_vars['letter4']; ?>
"<?php if ($this->_tpl_vars['letter4'] == $this->_tpl_vars['city']['letter']): ?> selected=selected<?php endif; ?>><?php echo $this->_tpl_vars['letter4']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
            <td class="ud"><select id="display_<?php echo $this->_tpl_vars['city']['id']; ?>
" name="display_<?php echo $this->_tpl_vars['city']['id']; ?>
">
                <option value="1" <?php if ($this->_tpl_vars['city']['display'] == '1'): ?>selected=selected<?php endif; ?>>是</option>
                <option value="0" <?php if ($this->_tpl_vars['city']['display'] == '0'): ?>selected=selected<?php endif; ?>>否</option>
              </select>
            </td>
            <td class="ud"><font color="#FF0000"></font> </td>
            <td class="ud">
            <input class="admin_submit4" type="button" name="update" value="更新" onClick="checkedtr('<?php echo $this->_tpl_vars['city']['id']; ?>
');"/>
              | <a href="javascript:;" onClick="delsingle('<?php echo $this->_tpl_vars['city']['id']; ?>
','1')" class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr align="left" id="0">
            <td colspan="7"><a href="javascript:;" onClick="addson('0','top');"><img src="images/iconv/jia.png" />添加顶级分类</a></td>
          </tr>
          <thead>
            <tr>
              <td width="60" colspan="1"><input type="checkbox" id="checkbox_all" name="checkbox_all" value="">
              <label for="checkbox_all">全选</label>&nbsp;
                <input type="hidden" name="id" id="hiddid_id" value="">
              </td>
              <td width="60" colspan="1"><input class="admin_submit4"  type="button" name="delall" onClick="return really('checkbox_all')"  value="删除选中" />
              </td>
              <td width="60" colspan="5"><input class="admin_submit4"  type="submit" name="updateall"   value="保存操作" />
              </td>
            </tr>
          </thead>
        </table>
      </form>
    </div>
  </div>
</div>
<div id="trid" style="display:none">
  <select name="letter">
    <?php $_from = $this->_tpl_vars['letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter4']):
?>
    	<option value="<?php echo $this->_tpl_vars['letter4']; ?>
"><?php echo $this->_tpl_vars['letter4']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
  </select>
</div>
<script>
$(document).ready(function(){
	$(".checkbox_all").click(function(){
		get_comindes_jobid();
	})
	$("#checkbox_all").click(function(){
		var checka=$("#checkbox_all").attr("checked");
		if(checka!="checked"){
			checka=false;
		}
		$(".checkbox_all").attr("checked",checka);
		get_comindes_jobid();
	})
})
function get_comindes_jobid(){
		var codewebarr="";
		$(".checkbox_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		});
		$("#hiddid_id").val(codewebarr);
}
</script>
</body>
</html>