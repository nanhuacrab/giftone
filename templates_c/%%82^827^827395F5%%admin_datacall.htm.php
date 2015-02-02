<?php /* Smarty version 2.6.26, created on 2015-02-03 00:23:47
         compiled from admin/admin_datacall.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_datacall.htm', 33, false),)), $this); ?>
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
function fortype(){
	$.layer({
		type : 1,
		title : '选择类型',
		offset: [($(window).height() - 150)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['350px','150px'],
		page : {dom:"#fortype"}
	});
} 
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="fortype"  style="display:none; width: 350px; ">
  <div class="">
    <div id="infobox"> 
		<div class="admin_Operating_sh" style="float:left">
			<ul class="datacall">
				<?php $_from = $this->_tpl_vars['datacall']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['data']):
?>
				<li><a href="<?php echo seacrh_url(array('type' => $this->_tpl_vars['k'],'m' => 'datacall','c' => 'add'), $this);?>
" class="admin_cz_yl"><?php echo $this->_tpl_vars['data']['0']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul> 
		</div> 
    </div>
  </div>
</div>
<div id="wname"  style="display:none; width: 300px; "> 
	<div style="height: 160px;" class="job_box_div">  
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td  class='ui_content_wrap'>复制(CTRL+C)以下內容并添加到模板中</td></tr> 
			<tr><td><input type="text" name="position" id='copy_url' class="input-text" size='45'/></td></tr> 
		</table> 
	   </div>
	</div>
</div> 
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<span class="admin_title_span">数据调用管理</span>
   <a href="javascript:void(0);" class="admin_infoboxp_nav admin_infoboxp_tj" onclick="fortype()">添加调用</a>
</div>
<div class="table-list">
    <div class="admin_table_border">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
        <form action="" name="myform" method="get"target="supportiframe">
        <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <table width="100%">
            <thead>
                <tr class="admin_table_top">
                    <th align="left" width="400">调用名称</th>
                    <th align="left">调用类别</th>
                    <th align="left">调用条数</th>
                    <th align="left">代码调用</th>
                    <th class="admin_table_th_bg">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
            <?php $this->assign('type', $this->_tpl_vars['v']['type']); ?>
                <tr align="left">
                    <td align="left" class="td1"><span><?php echo $this->_tpl_vars['v']['name']; ?>
</span></td> 
                    <td align="left" class="ud"><?php echo $this->_tpl_vars['datacall'][$this->_tpl_vars['type']]['0']; ?>
</td>
                    <td align="left" class="ud"><?php echo $this->_tpl_vars['v']['num']; ?>
</td>
                    <td class="ud" align="left">
                    <a href="javascript:void(0);" onClick="copy_url('内部调用', '{yun\:}call id=<?php echo $this->_tpl_vars['v']['id']; ?>
{\/yun}')">内部调用</a> | <a href="javascript:void(0);" onClick="copy_url('外部调用', '&lt;script src=\'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=call&id=<?php echo $this->_tpl_vars['v']['id']; ?>
\' language=\'javascript\'&gt;&lt;/script&gt;')">外部调用</a>
                    </td>
                    <td align="center"> 
                    <a href="index.php?m=datacall&c=preview&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_yl">预览</a>&nbsp;&nbsp;
                     <a href="javascript:void(0)" onClick="layer_del('确定要更新数据？','index.php?m=datacall&c=make&id=<?php echo $this->_tpl_vars['v']['id']; ?>
')"class="admin_cz_gx">更新</a>
                     <a href="index.php?m=datacall&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
&type=<?php echo $this->_tpl_vars['v']['type']; ?>
" class="admin_cz_bj">修改</a>
                     <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=datacall&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></div></div></td> 
              </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr><td colspan="7" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td></tr>
          </tbody>
          </table>
        </form>
    </div>
</div>
</div>
</body>
</html>