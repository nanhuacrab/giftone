<?php /* Smarty version 2.6.26, created on 2015-01-29 18:31:07
         compiled from admin/admin_company_order.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_company_order.htm', 58, false),array('modifier', 'date_format', 'admin/admin_company_order.htm', 96, false),)), $this); ?>
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
		<span class="complay_top_span fl">充值记录</span>
            <form action="index.php" name="myform" method="get">
            <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
"> 
            <input name="m" value="company_order" type="hidden"/>   
            <input name="typezf" value="<?php echo $_GET['typezf']; ?>
" type="hidden"/>   
            <input name="typedd" value="<?php echo $_GET['typedd']; ?>
" type="hidden"/>   
            <input name="order_state" value="<?php echo $_GET['order_state']; ?>
" type="hidden"/>
            <input name="fb" value="<?php echo $_GET['fb']; ?>
" type="hidden"/>  
			<div class="admin_Filter_text formselect"  did='dtypeca'>
			  <input type="button" value="<?php if ($_GET['typeca'] == ''): ?>充值单号<?php else: ?>备注<?php endif; ?>" class="admin_Filter_but"  id="btypeca">
			  <input type="hidden" id='typeca' value="<?php if ($_GET['typeca'] == ''): ?>1<?php else: ?><?php echo $_GET['typeca']; ?>
<?php endif; ?>" name='typeca'>
			  <div class="admin_Filter_text_box" style="display:none" id='dtypeca'>
				  <ul>
				  <li><a href="javascript:void(0)" onClick="formselect('1','typeca','充值单号')">充值单号</a></li>
				  <li><a href="javascript:void(0)" onClick="formselect('2','typeca','备注')">备注</a></li> 
				  </ul>  
			  </div>
			</div>
            <input class="company_job_text"  type="text" name="keyword"  size="25" style="float:left"> 
            <input class="admin_Filter_bth"  type="submit" name="news_search" value="检索"/>
			 <span class='admin_search_div'>
			  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>   
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
<form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
<input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<input name="m" value="company_order" type="hidden"/>
<input name="c" value="del" type="hidden"/>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
		   <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            
            <th>
			<?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'company_order','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'company_order','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
			<th>公司名称</th>
            <th>充值单号</th>
			<th>支付类型</th>
            <th>订单类型</th> 
            <th>
			<?php if ($_GET['t'] == 'order_price' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'order_price','m' => 'company_order','untype' => "order,t"), $this);?>
">订单金额<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'order_price','m' => 'company_order','untype' => "order,t"), $this);?>
">订单金额<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            
            <th>
			<?php if ($_GET['t'] == 'order_time' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'order_time','m' => 'company_order','untype' => "order,t"), $this);?>
">时间<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'order_time','m' => 'company_order','untype' => "order,t"), $this);?>
">时间<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
			<th>状态</th>
			<th class="admin_table_th_bg" width="100">操作</th>
		</tr>
	</thead>
	<tbody>
   <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job']):
?>
    <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['job']['id']; ?>
">
	    <td><input type="checkbox" value="<?php echo $this->_tpl_vars['job']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span><?php echo $this->_tpl_vars['job']['id']; ?>
</span></td> 
		<td align="left"><?php echo $this->_tpl_vars['job']['comname']; ?>
</td>
   	 	<td align="left"><?php echo $this->_tpl_vars['job']['order_id']; ?>
</td>
		<td align="left"><?php echo $this->_tpl_vars['job']['order_type_n']; ?>
</td>
        <td align="left"><?php if ($this->_tpl_vars['job']['type'] == 1): ?>购买会员<?php elseif ($this->_tpl_vars['job']['type'] == '2'): ?><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
充值<?php elseif ($this->_tpl_vars['job']['type'] == '3'): ?>银行转帐<?php elseif ($this->_tpl_vars['job']['type'] == '4'): ?>金额充值<?php elseif ($this->_tpl_vars['job']['type'] == '5'): ?>购买短信<?php endif; ?></td>
    	<td align="left"><?php echo $this->_tpl_vars['job']['order_price']; ?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['order_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
   	 	<td><?php echo $this->_tpl_vars['job']['order_state_n']; ?>
</td>
    	<td align="left" width="100">
			<a href="index.php?m=company_order&c=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"  class="admin_cz_sc">查看</a> | 
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=company_order&c=del&id=<?php echo $this->_tpl_vars['job']['id']; ?>
');"class="admin_cz_sc">删除</a><?php if ($this->_tpl_vars['job']['order_state'] == 1 || $this->_tpl_vars['job']['order_state'] == 3): ?>
				<br /><a href="javascript:void(0)" onClick="layer_del('确认该订单将充值到用户帐户，是否确定？', 'index.php?m=company_order&c=setpay&id=<?php echo $this->_tpl_vars['job']['id']; ?>
');" class="admin_cz_sc" style="color:red;">确认</a> | 
				<a href="index.php?m=company_order&c=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"  class="admin_cz_sc"style="color:red;">修改金额</a> 
			<?php endif; ?>
        </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr style="background:#f1f1f1;">
  <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
  <td colspan="3" >
  <label for="chkAll2">全选</label>&nbsp;
    <input class="admin_submit4"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
    <td colspan="6" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
  </tr>
  </tbody>
  </table>
</form>
</div></div>
</div>
</body>
</html>