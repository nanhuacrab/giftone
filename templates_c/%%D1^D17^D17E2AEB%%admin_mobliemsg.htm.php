<?php /* Smarty version 2.6.26, created on 2015-02-01 14:37:28
         compiled from admin/admin_mobliemsg.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_mobliemsg.htm', 56, false),array('modifier', 'date_format', 'admin/admin_mobliemsg.htm', 76, false),)), $this); ?>
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
	<span class="complay_top_span fl">短信记录</span>	
      <form action="index.php" name="myform" method="get" style="float:left">
        <span class="company_m6" style="float:left; margin-left:10px;">
        <input name="m" value="mobliemsg" type="hidden"/>
		<input type="hidden" name="state" value="<?php echo $_GET['state']; ?>
"/>
        <span class="admin_Filter_span"> 检索类型：</span> 
		  <div class="admin_Filter_text formselect" did="dtype"> 
			<input type="button" <?php if ($_GET['type'] == '' || $_GET['type'] == '1'): ?> value="手机号" <?php elseif ($_GET['type'] == '2'): ?> value="发送人" <?php elseif ($_GET['type'] == '3'): ?> value="接收人"<?php endif; ?> class="admin_Filter_but" id="btype">
				<input type="hidden" name="type" id="type" <?php if ($_GET['type'] == ''): ?> value="手机号"<?php else: ?>value="<?php echo $_GET['type']; ?>
"<?php endif; ?>/>
				 <div class="admin_Filter_text_box" style="display:none" id="dtype">
					  <ul> 
					  <li><a href="javascript:void(0)" onClick="formselect('1','type','手机号')">手机号</a></li>
					  <li><a href="javascript:void(0)" onClick="formselect('2','type','发送人')">发送人</a></li>	
					  <li><a href="javascript:void(0)" onClick="formselect('3','type','接收人')">接收人</a></li>	 			  
					  </ul>  
				  </div>
			</div>	 
        <input class="company_job_text" type="text" name="keyword"  size="25" style="float:left">
        <input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/>
		<span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级选项</div></div>   
		</span>
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
      <form action="index.php?m=mobliemsg&c=del" target="supportiframe" name="myform" method="post" id='myform'>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/>
                </label></th>
              <th align="left"> <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'mobliemsg','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'mobliemsg','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left">手机号</th>
              <th align="left">发送人</th>
              <th align="left">接收人</th>
              <th align="left" width="400">内容</th>
              <th> <?php if ($_GET['t'] == 'ctime' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'ctime','m' => 'mobliemsg','untype' => "order,t"), $this);?>
">时间<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'ctime','m' => 'mobliemsg','untype' => "order,t"), $this);?>
">时间<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th>状态</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['moblie']; ?>
</td>
            <td align="left"><?php if ($this->_tpl_vars['v']['cname']): ?><?php echo $this->_tpl_vars['v']['cname']; ?>
<?php else: ?>系统<?php endif; ?></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td align="left" width="400"><?php echo $this->_tpl_vars['v']['content']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['state'] == 1): ?><font color="green">成功</font><?php else: ?><font color="red">失败</font><?php endif; ?></td>
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=mobliemsg&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2" >
          <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="6" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>