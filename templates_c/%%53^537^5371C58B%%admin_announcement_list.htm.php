<?php /* Smarty version 2.6.26, created on 2015-01-29 21:36:47
         compiled from admin/admin_announcement_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_announcement_list.htm', 45, false),array('modifier', 'date_format', 'admin/admin_announcement_list.htm', 69, false),)), $this); ?>
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
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter" style="padding-bottom:5px">   
  <span class="complay_top_span fl">公告列表</span> 
	  <form action="index.php" name="myform" method="get">  
		<input name="m" value="admin_announcement" type="hidden"/>
		<input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left">
		<input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
 	  </form>
	  <div class="admin_search_div" ><div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div></div>
	  <a href="index.php?m=admin_announcement&c=add" class="admin_infoboxp_tj">添加公告</a>
    
  </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input name="m" value="admin_announcement" type="hidden"/>
        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              
              <th width="60">
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'admin_announcement','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
			  <?php else: ?>
			  <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'admin_announcement','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
			   <?php endif; ?>
			  </th>            
              <th align="left">公告标题</th>
              
              <th>
			  <?php if ($_GET['t'] == 'datetime' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'datetime','m' => 'admin_announcement','untype' => "order,t"), $this);?>
">发布时间<img src="images/sanj.jpg"/></a>
			  <?php else: ?>
			  <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'datetime','m' => 'admin_announcement','untype' => "order,t"), $this);?>
">发布时间<img src="images/sanj2.jpg"/></a>
			  <?php endif; ?>
			  </th>              
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['announcement']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="od" align="left"><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><a href="index.php?m=admin_announcement&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="status admin_cz_sh">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_announcement&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="2" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
          
        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html>