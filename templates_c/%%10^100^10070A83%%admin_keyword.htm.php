<?php /* Smarty version 2.6.26, created on 2015-01-29 18:31:04
         compiled from admin/admin_keyword.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_keyword.htm', 107, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
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
<script src="js/show_pub.js"></script>
<script>
function keywords(key_name,type,color,size,bold,tuijian,num,id){
	$("#id").val(id);
	$("#key_name").val(key_name);
	$("#size").val(size);
	$("#type").val(type);
	if(color!=""){
		$("#color").val(color);
		$("#color").attr("style","background-color:#"+color);
	}else{
		$("#color").attr("style","");
		$("#color").val('');
	}
	$("#num").val(num);
	$("#bold_"+bold).attr("checked",true);
	$("#tuijian_"+tuijian).attr("checked",true);
	add_class('关键字管理','355','300','#status_div','');
}

</script>
<title>后台管理</title>
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.header_bg,.header .logo, .left_menu h3 span,.shortcut_menu,.header .nav li a,.header .nav li,.admin_cz_bj,.admin_bg');
</script>
<![endif]-->
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none;">
    <div id="infobox" style=" width:355px" >
      <form action="index.php?m=admin_keyword&c=save" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<table cellspacing='2' cellpadding='3'>
			<tr><td style="width:90px">关键字名称：</td><td><input id="key_name" class="input-text" type="text" value=""   name="key_name"><font color="gray">例：phpyun</font></td></tr>
			<tr><td>关键字类型：</td><td><select id="type" name="type">
				<?php $_from = $this->_tpl_vars['keywordarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
				<option value="<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			  </select></td></tr>
			<tr><td>字体大小：</td><td><input class="input-text" type="text" id="size" name="size" size="20" value="" /><font color="gray">例：12px</font></td></tr>
			<tr><td>字体颜色：</td><td>
            <input class="input-text color" readonly type="text" id="color" name="color" size="20" value="" /></td></tr>
			<tr><td>是否加粗：</td><td><input type="radio" name="bold" value="0" id="bold_0">&nbsp;否<input  id="bold_1" type="radio" name="bold" value="1">&nbsp;是 </td></tr>
			<tr><td>是否推荐：</td><td><input type="radio" name="tuijian" value="0"  id="tuijian_0">&nbsp;否<input type="radio" id="tuijian_1" name="tuijian" value="1" >&nbsp;是 </td></tr>
			<tr><td>搜索次数：</td><td><input class="input-text" type="text" id="num" name="num" size="10" value="" /><font color="gray">例：大前小后</font></td></tr>
			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='确认' class="submit_btn">
          &nbsp;&nbsp;<input type="button" onClick="layer.closeAll();" class="cancel_btn" value='取消'></td></tr>
		</table>
        <input type="hidden" name="id" id="id" value="" />
      </form>
    </div>
</div>
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter">
	<span class="complay_top_span fl">关键字管理</span>	
    <form action="index.php" name="myform" method="get">
      <input name="m" value="admin_keyword" type="hidden"/>
	  <input type="hidden" name="check" value="<?php echo $_GET['check']; ?>
"/>
	  <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>
"/>
      <span class="admin_Filter_span"> 检索类型：</span> 
	  <div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type']): ?><?php echo $this->_tpl_vars['keywordarr'][$_GET['type']]; ?>
<?php else: ?>全部<?php endif; ?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php echo $_GET['type']; ?>
" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <?php $_from = $this->_tpl_vars['keywordarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['kv']):
?>
			  <li><a href="javascript:void(0)" onClick="formselect('<?php echo $this->_tpl_vars['k']; ?>
','type','<?php echo $this->_tpl_vars['kv']; ?>
')"><?php echo $this->_tpl_vars['kv']; ?>
</a></li>
			  <?php endforeach; endif; unset($_from); ?> 
			  </ul>  
		  </div>
		</div> 
      <input class="company_job_text"  type="text" name="keyword"  size="25" style="float:left">
      <input class="admin_Filter_bth" type="submit" name="news_search" style="cursor:pointer;" value="检索"/>
	  <span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>   
	  </span>
       <a href="javascript:void(0)" onClick="keywords('','','','','','','','')" class="admin_infoboxp_tj">添加关键字</a>
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
    <form action="index.php?m=admin_keyword&c=del" name="myform" method="post"  target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th width="50"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <th align="left">
			<?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left" width="30%">热门关键字</th>
            <th align="left">关键字类型</th>
            <th align="left">
			<?php if ($_GET['t'] == 'num' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'num','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">搜索次数<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'num','m' => 'admin_keyword','untype' => "order,t"), $this);?>
">搜索次数<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left">加粗</th>
            <th align="left">推荐</th>
            <th align="left">审核</th>
            <th align="left" class="admin_table_th_bg" width="80">操作</th>
          </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        <?php $this->assign('type', $this->_tpl_vars['v']['type']); ?>
        <tr id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
          <td align="center"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
          <td align="left" class="td1"><font color="#<?php echo $this->_tpl_vars['v']['color']; ?>
"><?php echo $this->_tpl_vars['v']['key_name']; ?>
</font></td>
          <td  align="left"><?php echo $this->_tpl_vars['keywordarr'][$this->_tpl_vars['v']['type']]; ?>
</td>
          <td  align="left"><?php echo $this->_tpl_vars['v']['num']; ?>
</td>
          <td id="bold<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['bold'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','bold');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','bold');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
          <td id="tuijian<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['tuijian'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','tuijian');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','tuijian');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
          <td id="check<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['check'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','check');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_keyword&c=recup','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','check');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
          <td><span style="cursor:pointer;" onClick="keywords('<?php echo $this->_tpl_vars['v']['key_name']; ?>
','<?php echo $this->_tpl_vars['v']['type']; ?>
','<?php echo $this->_tpl_vars['v']['color']; ?>
','<?php echo $this->_tpl_vars['v']['size']; ?>
','<?php echo $this->_tpl_vars['v']['bold']; ?>
','<?php echo $this->_tpl_vars['v']['tuijian']; ?>
','<?php echo $this->_tpl_vars['v']['num']; ?>
','<?php echo $this->_tpl_vars['v']['id']; ?>
')" class="admin_cz_bj">修改</span> | 
<a href="javascript:void(0)"  class="admin_cz_sc" onClick="layer_del('确定要删除？', 'index.php?m=admin_keyword&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');">删除</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2" >
          <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
          <td colspan="6" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
        </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<div id="bg" class="admin_bg"></div>
</body>
</html>