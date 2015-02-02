<?php /* Smarty version 2.6.26, created on 2015-01-29 18:40:59
         compiled from admin/admin_hr_toolbox.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_hr_toolbox.htm', 51, false),array('modifier', 'date_format', 'admin/admin_hr_toolbox.htm', 68, false),)), $this); ?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">  
<div class="infoboxp_top_bg"></div>
 <div class="admin_Filter">
   <span class="complay_top_span fl">工具箱</span> 
      <form action="index.php" name="myform" method="get">
        <input name="m" value="hr" type="hidden"/>
        <span class="admin_Filter_span">检索类型：</span> 
		<div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type'] == '1' || $_GET['type'] == ''): ?>文档名<?php else: ?>类别名<?php endif; ?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','文档名')">文档名</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','类别名')">类别名</a></li> 
			  </ul>  
		  </div>
		</div>
        <input class="admin_Filter_search" type="text" name="keyword" value="<?php echo $this->_tpl_vars['get_type']['keyword']; ?>
" size="25"/>
        <input  class="admin_Filter_bth" type="submit" name="comsearch" value="检索"/>
			  <span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>   
	  </span>			
        <a href="index.php?m=hr&c=add" class="admin_infoboxp_tj" style="margin-top:0px;"> 上传文档</a>
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
      <form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
      <input type="hidden" name="m" value="hr">
      <input type="hidden" name="c" value="del">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th align="center"> <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'hr','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'hr','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="center">文档名</th>
              <th align="center">类别名</th>
              <th align="center">前台显示</th>
              <th align="center"> <?php if ($_GET['t'] == 'add_time' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'add_time','m' => 'hr','untype' => "order,t"), $this);?>
">上传日期<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'add_time','m' => 'hr','untype' => "order,t"), $this);?>
">上传日期<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td width="20"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk"/></td>
            <td align="left" class="td1" style="text-align:center; width:60px;"><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['cname']; ?>
</td>
            <td class="od" align="center"><?php if ($this->_tpl_vars['v']['is_show'] == '1'): ?>显示<?php else: ?>不显示<?php endif; ?></td>
            <td class="gd" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 </td>
            <td><a href="index.php?m=hr&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_bj">编辑</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？','index.php?m=hr&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a> </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2"><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
            </td>
            <td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>