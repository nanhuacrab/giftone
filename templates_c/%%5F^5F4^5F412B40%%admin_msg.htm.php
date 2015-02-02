<?php /* Smarty version 2.6.26, created on 2015-01-29 19:20:22
         compiled from admin/admin_msg.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_substr', 'admin/admin_msg.htm', 78, false),array('modifier', 'date_format', 'admin/admin_msg.htm', 84, false),array('function', 'url', 'admin/admin_msg.htm', 81, false),)), $this); ?>
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
<script src="js/show_pub.js"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <form action="index.php" name="myform" method="get">
    <input name="m" value="admin_msg" type="hidden"/> 
      <div class="admin_Filter"> <span class="complay_top_span fl">求职咨询</span>
        <div class="admin_Filter_span">搜索类型：</div>
        <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" <?php if ($this->_tpl_vars['get_type']['type'] == '1' || $this->_tpl_vars['get_type']['type'] == ''): ?> value="咨询人" <?php elseif ($this->_tpl_vars['get_type']['type'] == '2'): ?> value="咨询职位" <?php elseif ($this->_tpl_vars['get_type']['type'] == '3'): ?> value="咨询公司" <?php elseif ($this->_tpl_vars['get_type']['type'] == '4'): ?> value="咨询内容" <?php elseif ($this->_tpl_vars['get_type']['type'] == '5'): ?> value="回复内容"<?php endif; ?> class="admin_Filter_but" id="btype">
          <input type="hidden" name="type" id="type" value="<?php if ($this->_tpl_vars['get_type']['type']): ?><?php echo $this->_tpl_vars['get_type']['type']; ?>
<?php else: ?>1<?php endif; ?>"/>
          <div class="admin_Filter_text_box" style="display:none" id="dtype">
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','咨询人')">咨询人</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('2','type','咨询职位')">咨询职位</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('3','type','咨询公司')">咨询公司</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('4','type','咨询内容')">咨询内容</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('5','type','回复内容')">回复内容</a></li>
            </ul>
          </div>
        </div>
        <input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword']; ?>
" name='keyword' class="admin_Filter_search">
        <input type="submit" name='search' value="搜索" class="admin_Filter_bth">
        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">高级搜索</div>
        </div> 
        </span> 
		</div> 
  </form>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
	
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
        <input name="m" value="admin_msg" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th>
			  <?php if ($_GET['order'] == 'asc'): ?>
			  <a href="index.php?m=admin_msg&order=desc">编号<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="index.php?m=admin_msg&order=asc">编号<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th align="center" style="width:240px;">咨询内容</th>
              <th align="center" style="width:240px;">回复内容</th>
              <th align="left">咨询人</th>
              <th align="left">咨询职位</th>
              <th align="left">咨询公司</th>
			  <th align="left">咨询时间</th>
			  <th align="left">回复时间</th>
               
              <th align="center" class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['mes_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <tr align="center" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td> 
            <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['content'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 20, 'gbk') : mb_substr($_tmp, 0, 20, 'gbk')); ?>
</td>  
            <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reply'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 20, 'gbk') : mb_substr($_tmp, 0, 20, 'gbk')); ?>
</td>  
            <td align="left"><?php echo $this->_tpl_vars['v']['username']; ?>
</td>
            <td align="left">  <a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['v']['jobid'])), $this);?>
" target="_blank">
              <?php echo $this->_tpl_vars['v']['job_name']; ?>
</a></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['com_name']; ?>
</td>
			 <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
			  <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reply_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
           
            <td><span onClick="showdiv4('houtai_div','<?php echo $this->_tpl_vars['v']['content']; ?>
','<?php echo $this->_tpl_vars['v']['reply']; ?>
')" class="admin_cz_sc" style="cursor:pointer;"> 预览</span> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_msg&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></td>
        
          </tr>
         
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input  class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="7" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
        </table>
		<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
<div id="houtai_div" style=" display:none;height:180px; ">
	<form id="formstatus" method="post" target="supportiframe" action="index.php?m=admin_company_job&c=status">
	  <table class="table_form "  id="infobox"> 
			<tr><td>评论内容：</td><td><textarea name="beizhu" id="beizhu" rows="3" cols="45" class="text" readonly></textarea></td></tr>
			<tr><td>回复内容：</td><td><textarea name="reply" id="reply" rows="3" cols="45" class="text" readonly></textarea></td></tr> 
	  </table>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	 </form>
</div>  
</body>
</html>