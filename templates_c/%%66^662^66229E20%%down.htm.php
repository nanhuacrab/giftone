<?php /* Smarty version 2.6.26, created on 2015-01-29 19:20:22
         compiled from admin/down.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/down.htm', 56, false),array('function', 'curl', 'admin/down.htm', 82, false),array('function', 'url', 'admin/down.htm', 85, false),array('modifier', 'date_format', 'admin/down.htm', 87, false),)), $this); ?>
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
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
  <div class="admin_Filter">
    <span class="complay_top_span fl">简历下载记录</span> 
      <form action="index.php" name="myform" method="get">
        <input name="m" value="down" type="hidden"/>
        <span class="admin_Filter_span">检索类型：</span>
		<div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type'] == '1' || $_GET['type'] == ''): ?>企业用户名<?php elseif ($_GET['type'] == '2'): ?>公司名称<?php elseif ($_GET['type'] == '3'): ?>个人用户名<?php else: ?>简历名称<?php endif; ?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','企业用户名')">企业用户名</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','公司名称')">公司名称</a></li> 
			  <li><a href="javascript:void(0)" onClick="formselect('3','type','个人用户名')">个人用户名</a></li> 
			  <li><a href="javascript:void(0)" onClick="formselect('4','type','简历名称')">简历名称</a></li> 
			  </ul>  
		  </div>
		</div> 		 
        <input class="admin_Filter_search" type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" size="25"/>
        <input class="admin_Filter_bth" type="submit" name="search" value="检索"/>
		        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">高级搜索</div>
        </div> 
        </span> 
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
      <form action="index.php" name="myform" id="myform" method="get" target="supportiframe">
        <input name="m" value="down" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th>
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'down','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'down','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th align="center">企业用户名</th>
              <th align="center">公司名称</th>
              <th align="center">个人用户名</th>
              <th align="center">简历名称</th>
              <th>
			   <?php if ($_GET['t'] == 'downtime' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'downtime','m' => 'down','untype' => "order,t"), $this);?>
">下载时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'downtime','m' => 'down','untype' => "order,t"), $this);?>
">下载时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>

            <td align="left"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['v']['comid'])), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['v']['com_username']; ?>
</a></td>
            <td align="left"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['v']['comid'])), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['v']['com_name']; ?>
</a></td>

            <td align="left"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['eid'])), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['v']['username']; ?>
</a></td>
            <td align="left"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['eid'])), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['v']['resume']; ?>
</a></td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['downtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=down&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="5" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
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