<?php /* Smarty version 2.6.26, created on 2015-01-29 21:36:46
         compiled from admin/admin_description.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_description.htm', 148, false),array('function', 'seacrh_url', 'admin/admin_description.htm', 152, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jscolor/jscolor.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
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
			noColor : '无颜色',
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
	$.post("index.php?m=description&c=ajax_menu",{id:id,pytoken:pytoken},function(data){
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
		title : '设置导航',
		closeBtn : [0 , true], 
		offset : ['5%' , '20%'],
		border : [10 , 0.3 , '#000', true],
		area : ['600px','auto'],
		page : {dom : '#menu'}
	});  
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter" style="padding-bottom:5px">   
  <span class="complay_top_span fl">单页面管理</span> 
	  <a href="index.php?m=description&c=add" class="admin_infoboxp_nav admin_infoboxp_tj">添加单页面</a>
    <a href="javascript:void(0)" onclick="layer_del('', 'index.php?m=description&c=make');" class="admin_infoboxp_nav admin_infoboxp_gl">生成所有</a>
  </div>
<div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=description&c=del" name="myform" method="post" target="supportiframe" id='myform'>
      <input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              
              <th>
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=description&order=desc&t=id">序号<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=description&order=asc&t=id">序号<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th>独立页名称</th>
              <th>排序</th>
              <th>左则导航</th>
              <th>类型</th>
              <th>
			  <?php if ($_GET['t'] == 'ctime' && $_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=description&order=desc&t=ctime">添加时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=description&order=asc&t=ctime">添加时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th>设为导航</th>
              <th class="admin_table_th_bg"  style="width:100px;">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['descrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
            <td class="od"><?php echo $this->_tpl_vars['v']['sort']; ?>
</td>
            <td class="od"><?php if ($this->_tpl_vars['v']['is_nav'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
            <td class="od"><?php if ($this->_tpl_vars['v']['is_type'] == 1): ?>自定义页面<?php else: ?>外部链接<?php endif; ?></td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td align="left"><?php if ($this->_tpl_vars['v']['is_menu'] == 0): ?><a href="javascript:set_menu('<?php echo $this->_tpl_vars['v']['id']; ?>
');"  class="admin_cz_sc">设为导航</a><?php else: ?>
            <a href="javascript:set_menu('<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">修改导航</a> |
            <a href="javascript:void(0)" onClick="layer_del('确定取消该导航？','index.php?m=description&c=delmenu&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">取消导航</a><?php endif; ?></td>
            <td align="left" style="width:150px;"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo seacrh_url(array('m' => 'index','c' => 'get','id' => $this->_tpl_vars['v']['id']), $this);?>
" target="_blank"  class="admin_cz_sc">预览</a> | 
            <?php if ($this->_tpl_vars['v']['is_type'] == 1): ?>
                <a href="javascript:void(0)" onClick="layer_del('', 'index.php?m=description&c=make&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">更新</a> | 
                <?php endif; ?>
                <a href="index.php?m=description&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_sc">修改</a> | 
                <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=description&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2">
          <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="6" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
          
        </table>
      </form>
    </div>
  </div>
</div>
<div id="menu" style="display:none;">
    <form name="myform" target="supportiframe" action="index.php?m=description&c=set_menu" method="post">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr >
          <th width="120">导航类别：</th>
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
          <th>导航名称：</th>
          <td><input class="input-text" type="text" name="name" size="40"/>
          <input type="hidden" name='color' id="color" value="" /><font id="colorid">字体颜色</font>
          <input type="button" id="colorpicker" value="打开取色器" class="admin_submit6" style="background:#F60; margin-left:5px;"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>链接地址：</th>
          <td><input class="input-text" type="text" name="url" size="50"/></td>
        </tr>
        <tr >
          <th>伪静态地址：</th>
          <td><input class="input-text" type="text" name="furl" size="50"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>导航类型：</th>
          <td><select name="type">
              <option value="1" id="type1">站内链接</option>
              <option value="2" id="type2">原链接</option>
            </select>
            站内链接如：http://www.phpyun.com  原链接如：index.php?m=com </td>
        </tr>
        <tr >
          <th>排　　序：</th>
          <td><input class="input-text" type="text" name="sort" size="5"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>弹出窗口：</th>
          <td><input type="radio" name="eject" value="1" id="eject1">
            新窗口
            <input type="radio" name="eject" value="0" id="eject0">
            原窗口 </td>
        </tr>
        <tr >
          <th>状　　态：</th>
          <td><input type="radio" name="model" value="hot" id="modelhot"> 热
            <input type="radio" name="model" value="new" id="modelnew"> 新
            <input type="radio" name="model" value="" id="model" checked=checked> 无</td>
        </tr>
        <tr >
          <th>加　　粗：</th>
          <td><input type="radio" name="bold" value="1" id="bold1">
            是
            <input type="radio" name="bold" value="0" id="bold0">
            否 </td>
        </tr>
        <tr >
          <th>显　　示：</th>
          <td><input type="radio" name="display" value="1" id="display1">
            是
            <input type="radio" name="display" value="0" id="display0">
            否 </td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2">
            <input type="hidden" name="id" size="40"/>
            <input class="admin_submit4" type="submit" name="submit" value="&nbsp;保 存&nbsp;"  />
            <input class="admin_submit4" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
      <input type="hidden" name="did">
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
</div>
</body>
</html>