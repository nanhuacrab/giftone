<?php /* Smarty version 2.6.26, created on 2015-01-29 21:36:39
         compiled from admin/admin_news_group.htm */ ?>
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
<script src="js/show_pub.js"></script>
<script src="js/admin_public.js"></script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script> 
function check_form(){
	if($.trim($("#classname").val())==""){ 
		parent.layer.msg("������Ʋ���Ϊ�գ�",2,2);return false; 
	}
}	
function checksort(id){
	$("#sort"+id).hide();
	$("#input"+id).show();
	$("#input"+id).focus();
}	
function subsort(id){
	var sort=$("#input"+id).val();
	var pytoken=$("#pytoken").val(); 
	$.post("index.php?m=admin_news&c=ajax",{id:id,sort:sort,pytoken:pytoken},function(data){
		$("#sort"+id).html(sort);
		$("#sort"+id).show();
		$("#input"+id).hide();
		if(data!=1){config_msg(data);}else{location.reload();}
	})
}
function make_cache(){
	$.get("index.php?m=admin_news&c=make_cache",function(msg){
		if(msg==1){parent.layer.msg("���³ɹ���",2,9);}else{parent.layer.msg("����ʧ�ܣ�",2,8);}return false; 
	});
}
function checkname(id){
	$("#name"+id).hide();
	$("#inputname"+id).show();
	$("#inputname"+id).focus();
}	
function subname(id){
	var name=$("#inputname"+id).val();
	if($.trim(name)==""){
		parent.layer.msg("������Ʋ���Ϊ�գ�",2,8,function(){location.reload();});return false; 
	}
	var pytoken=$("#pytoken").val(); 
	$.post("index.php?m=admin_news&c=ajax",{id:id,name:name,pytoken:pytoken},function(data){
		$("#name"+id).html(name);
		$("#name"+id).show();
		$("#inputname"+id).hide();
		if(data!=1){config_msg(data);}else{location.reload();}
	})
}
function change_f(){
	var f_id=$("#f_id").val();
	if(f_id=='0'){
		$("#is_rec").show();
	}else{$("#is_rec").hide();} 
}
</script>
<script>
KindEditor.ready(function(K) {
	K.create('#content', {
		items : ['source',
		'bold', 'italic', 'underline',
		'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
		'insertunorderedlist','emoticons', 'image']
	});
	var colorpicker;
	K('#colorpicker').bind('click', function(e) {
		e.stopPropagation();
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
			return;
		}
		var colorpickerPos = K('#colorpicker').pos();
		colorpicker = K.colorpicker({
			x : colorpickerPos.x,
			y : colorpickerPos.y + K('#colorpicker').height(),
			z : 1981121422,
			selectedColor : 'default',
			noColor : '����ɫ',
			click : function(color) {
				K('#color').val(color);
				$('#color + font').css('color', color);
				colorpicker.remove();
				colorpicker = null;
			}
		});
	});
	K(document).click(function() {
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
		}
	});
});
function set_menu(id){
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=admin_news&c=ajax_menu",{id:id,pytoken:pytoken},function(data){
		var data=eval('('+data+')');
		$("input[name=name]").val(data.name);
		$("input[name=url]").val(data.url);
		$("input[name=furl]").val(data.furl);
		$("input[name=did]").val(id);
		if(data.id>0){
			$("input[name=id]").val(data.id);
			$("#nid"+data.nid).attr("selected","selected");
			$("#type"+data.type).attr("selected","selected");
			$("input[name=sort]").val(data.sort);
			$("#eject"+data.eject).attr("checked","checked");
			$("#model"+data.model).attr("checked","checked");
			$("#bold"+data.bold).attr("checked","checked");
			$("#display"+data.display).attr("checked","checked");
			$("#color").val(data.color);
			$("#colorid").attr("style","color:"+data.color);
		}else{
			$("input[name=id]").val('');
			$("#type0").attr("selected","type");
			$("input[name=sort]").val('');
			$("#eject0").attr("checked","checked");
			$("#model").attr("checked","checked");
			$("#bold0").attr("checked","checked");
			$("#display0").attr("checked","checked");
			$("#color").val('');
			$("#colorid").attr("style","");
		}
	})
	$.layer({
		type : 1,
		title : '���õ���',
		closeBtn : [0 , true], 
		offset : ['5%' , '20%'],
		border : [10 , 0.3 , '#000', true],
		area : ['600px','auto'],
		page : {dom : '#menu'}
	});  
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<div id="menu" style="display:none;">
    <form name="myform" target="supportiframe" action="index.php?m=admin_news&c=set_menu" method="post">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr >
          <th width="120">�������</th>
          <td><select name="nid" id="nid">
			<?php $_from = $this->_tpl_vars['type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
           <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
" id="nid<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['typename']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�������ƣ�</th>
          <td><input class="input-text" type="text" name="name" size="40"/>
          <input type="hidden" name='color' id="color" value="" /><font id="colorid">������ɫ</font>
          <input type="button" id="colorpicker" value="��ȡɫ��" class="admin_submit6" style="background:#F60; margin-left:5px;"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>���ӵ�ַ��</th>
          <td><input class="input-text" type="text" name="url" size="50"/></td>
        </tr>
        <tr >
          <th>α��̬��ַ��</th>
          <td><input class="input-text" type="text" name="furl" size="50"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�������ͣ�</th>
          <td><select name="type">
              <option value="1" id="type1">վ������</option>
              <option value="2" id="type2">ԭ����</option>
            </select>
            վ�������磺http://www.phpyun.com  ԭ�����磺index.php?m=com </td>
        </tr>
        <tr >
          <th>�š�����</th>
          <td><input class="input-text" type="text" name="sort" size="5"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>�������ڣ�</th>
          <td><input type="radio" name="eject" value="1" id="eject1">
            �´���
            <input type="radio" name="eject" value="0" id="eject0">
            ԭ���� </td>
        </tr>
        <tr >
          <th>״����̬��</th>
          <td><input type="radio" name="model" value="hot" id="modelhot"> ��
            <input type="radio" name="model" value="new" id="modelnew"> ��
            <input type="radio" name="model" value="" id="model" checked=checked> ��</td>
        </tr>
        <tr >
          <th>�ӡ����֣�</th>
          <td><input type="radio" name="bold" value="1" id="bold1">
            ��
            <input type="radio" name="bold" value="0" id="bold0">
            �� </td>
        </tr>
        <tr >
          <th>�ԡ���ʾ��</th>
          <td><input type="radio" name="display" value="1" id="display1">
            ��
            <input type="radio" name="display" value="0" id="display0">
            �� </td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2">
            <input type="hidden" name="id" size="40"/>
            <input class="admin_submit4" type="submit" name="submit" value="&nbsp;�� ��&nbsp;"  />
            <input class="admin_submit4" type="reset" name="reset" value="&nbsp;�� �� &nbsp;" /></td>
        </tr>
      </table>
      <input type="hidden" name="did">
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
</div>
<div id="houtai_div" style=" width:298px; display:none;">
	<form name="myform" target="supportiframe" action="index.php?m=admin_news&c=addgroup" method="post" onSubmit="return check_form();">
		<table class="table_form "style="width:100%">
			<tbody>

				<tr class="ui_td_11">
					<td style="text-align: right;" class="ui_content_wrap">������ƣ�</td>
					<td><input type="text" name="classname" value=""  class="input-text" id="classname"/></td>
				</tr>
				<tr class="ui_td_11" id='is_rec'>
					<td style="text-align: right;" class="ui_content_wrap">��ҳ�Ƽ���</td>
					<td><select name='rec'>
						<option value='1'>�Ƽ�</option>
						<option value='0'>���Ƽ�</option>
					</select></td>
				</tr>
				<tr class="ui_td_11">
					<td  class="ui_content_wrap" colspan='2' style="border-bottom:none"><input class="admin_submit4" type="submit" name="sub" value=" ��� "  /></td>
				</tr> 
			</tbody>
		</table>
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	</form>
</div>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
 <div class="admin_Prompt">
<div class="admin_Prompt_span">  ע�⣺��Ӵ���ʱ������ѡ����𡣡���Ӷ�������ʱ��Ҫѡ����� </div>
<div class="admin_Prompt_close"></div>
</div>
<div class="infoboxp_top">
<span class="admin_title_span">���ŷ���</span>
     <a href="javascript:void(0)" onClick="make_cache()" class="admin_infoboxp_nav admin_infoboxp_gl">���»���</a>
       <em class="admin-tit_line"></em>
		<a href="javascript:void(0);" onClick="add_class('������','300','170','#houtai_div','')" class="admin_infoboxp_nav admin_infoboxp_tj">������</a>
          <em class="admin-tit_line"></em>
    	<a href="index.php?m=admin_news" class="admin_infoboxp_nav admin_infoboxp_gl">�����б�</a>
          <em class="admin-tit_line"></em>
        <a href="index.php?m=admin_news&c=news" class="admin_infoboxp_nav admin_infoboxp_tj">�������</a>

</div>
<div class="clear"></div>
<div class="table-list" style="min-height:300px;">
<div class="admin_table_border">

<form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
<input name="m" value="admin_news" type="hidden"/>
<input name="c" value="delgroup" type="hidden"/>
<table width="100%">
<thead>
	<tr class="admin_table_top">
		<th>���</th>
		<th width="200">�������<span class="clickup">(����޸�)</span></th>
		<th>��¼��</th>
        <th>����</th>
        <th>��ҳ�Ƽ�</th>
		<th>������ҳ</th>
        <th>��Ϊ����</th>
		<th class="admin_table_th_bg">����</th>
	</tr>
</thead>
<tbody>
	<?php $_from = $this->_tpl_vars['news_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
    <?php if ($this->_tpl_vars['v']['keyid'] == 0): ?>
	<tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?>>
		<td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
		<td class="ud"><span onClick="checkname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="name<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['name']; ?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $this->_tpl_vars['v']['id']; ?>
" value="<?php echo $this->_tpl_vars['v']['name']; ?>
" onBlur="subname('<?php echo $this->_tpl_vars['v']['id']; ?>
');" ></td>
		<td class="od">
		 �������� <font color="#0033FF"><?php if ($this->_tpl_vars['v']['count'] != 0): ?><?php echo $this->_tpl_vars['v']['count']; ?>
<?php else: ?>0<?php endif; ?></font> ƪ</td>
        <td><span onClick="checksort('<?php echo $this->_tpl_vars['v']['id']; ?>
');" id="sort<?php echo $this->_tpl_vars['v']['id']; ?>
" style="cursor:pointer;"><?php echo $this->_tpl_vars['v']['sort']; ?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $this->_tpl_vars['v']['id']; ?>
" size="10" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" onBlur="subsort('<?php echo $this->_tpl_vars['v']['id']; ?>
');" ></td>
		<td id="rec<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['rec'] == 0): ?><a onClick="rec_up('index.php?m=admin_news&c=recommend','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','rec');" href="javascript:void(0);"><img src="../data/ajax_img/errorico.gif"></a><?php else: ?><a onClick="rec_up('index.php?m=admin_news&c=recommend','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','rec');" href="javascript:void(0);"><img src="../data/ajax_img/doneico.gif"></a><?php endif; ?></td>
		
				<td id="rec_news<?php echo $this->_tpl_vars['v']['id']; ?>
">
					<?php if ($this->_tpl_vars['v']['rec_news'] == 0): ?>
					<a onClick="rec_news('index.php?m=admin_news&c=recnews','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','rec_news');" href="javascript:void(0);"><img src="../data/ajax_img/errorico.gif"></a>
					<?php else: ?>
					<a onClick="rec_news('index.php?m=admin_news&c=recnews','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','rec_news');" href="javascript:void(0);"><img src="../data/ajax_img/doneico.gif"></a>
					<?php endif; ?>
				</td>
				
        <td><?php if ($this->_tpl_vars['v']['is_menu'] == 0): ?><a href="javascript:set_menu('<?php echo $this->_tpl_vars['v']['id']; ?>
');">��Ϊ����</a><?php else: ?>
            <a href="javascript:set_menu('<?php echo $this->_tpl_vars['v']['id']; ?>
');">�޸ĵ���</a>
            <a href="javascript:void(0)" onClick="layer_del('ȷ��ȡ���õ�����','index.php?m=admin_news&c=delmenu&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');">ȡ������</a><?php endif; ?></td>
		<td>
         <a href="javascript:void(0)" class="admin_cz_sc" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_news&c=delgroup&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');">ɾ��</a></td>
	</tr>
    <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
    <tr>
    	<td colspan="8" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
    </tr>
</table> 
</form>
</div>

</div> 

</body>
</html>