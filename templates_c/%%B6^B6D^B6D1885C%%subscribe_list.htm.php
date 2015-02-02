<?php /* Smarty version 2.6.26, created on 2015-01-29 18:38:32
         compiled from admin/subscribe_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/subscribe_list.htm', 65, false),array('modifier', 'mb_substr', 'admin/subscribe_list.htm', 174, false),array('function', 'seacrh_url', 'admin/subscribe_list.htm', 120, false),)), $this); ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['adminstyle'])."/member_send_email.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
   <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<?php if ($this->_tpl_vars['type'] != '1'): ?>
  <div class="admin_Filter"> 
  <span class="complay_top_span fl">订阅管理</span>
      <form action="index.php" name="myform" method="get">
        <input name="m" value="subscribe" type="hidden"/>	
		<span class="admin_Filter_span"> 检索类型：</span>	
        <input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left">
        <input  class="admin_Filter_bth"  type="submit" name="qysearch" value="检索"/>
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

      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input name="m" value="report" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th> 
              <th>ID</th>                                           
              <th>邮箱名称</th>
              <th>发送周期</th>
              <th>订阅类别</th>              
              <th>工作地点</th>              
              <th>职位类别</th>             
              <th>月薪范围</th>
              <th>申请时间</th>
              <th>状态</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <tr align="center" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['email']; ?>
</td>
			<td><?php echo $this->_tpl_vars['v']['time']; ?>
天</td>
            <td><?php if ($this->_tpl_vars['v']['type'] == '1'): ?>订阅职位<?php else: ?>订阅简历<?php endif; ?></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['provinceid']; ?>
&nbsp;<?php echo $this->_tpl_vars['v']['cityid']; ?>
&nbsp;<?php echo $this->_tpl_vars['v']['three_cityid']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['job1']; ?>
&nbsp;<?php echo $this->_tpl_vars['v']['job1_son']; ?>
&nbsp;<?php echo $this->_tpl_vars['v']['job_post']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['salary']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td> 
            <td><?php if ($this->_tpl_vars['v']['status'] != '1'): ?><span class="admin_com_Lock">未认证</span><?php else: ?><span class="admin_com_Audited">已认证</span><?php endif; ?></td>           
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=subscribe&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="3" >
          <label for="chkAll2">全选</label>
            <input class="admin_submit4" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
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
<?php else: ?>
  <div class="admin_Filter">  
      <form action="index.php" name="myform" method="get"  id='myform'> 
        <input name="m" value="report" type="hidden"/>
        <input name="type" value="1" type="hidden"/>
		  <span class="admin_Filter_span"> 检索类型：</span>  
		  <div class="admin_Filter_text formselect"  did='dr_type'>
		  <input type="button" value="<?php if ($_GET['r_type'] == '1' || $_GET['r_type'] == ''): ?>问题<?php elseif ($_GET['r_type'] == '2'): ?>回答<?php else: ?>举报者<?php endif; ?>" class="admin_Filter_but"  id="br_type">
		  <input type="hidden" id='r_type' value="<?php if ($_GET['r_type']): ?><?php echo $_GET['r_type']; ?>
<?php else: ?>1<?php endif; ?>" name='r_type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dr_type'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','r_type','问题')">问题</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','r_type','回答')">回答</a></li> 
			  <li><a href="javascript:void(0)" onClick="formselect('3','r_type','评价')">评价</a></li> 
			  </ul>  
		  </div>
		</div>  
		<div class="admin_Filter_text formselect"  did='dp_type' style="margin-left:10px;">
		  <input type="button" value="<?php if ($_GET['p_type'] == '1' || $_GET['p_type'] == ''): ?>被举报者<?php else: ?>举报者<?php endif; ?>" class="admin_Filter_but"  id="bp_type">
		  <input type="hidden" id='p_type' value="<?php if ($_GET['p_type']): ?><?php echo $_GET['p_type']; ?>
<?php else: ?>1<?php endif; ?>" name='p_type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dp_type'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','p_type','被举报者')">被举报者</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','p_type','举报者')">举报者</a></li> 
			  </ul>  
		  </div>
		</div> 
        <input class="admin_Filter_search" type="text" name="question"  size="25" style="float:left">
        <input  class="admin_Filter_bth"  type="submit" name="comquestion" value="检索"/>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
     
	  <span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>  
		</span> 
	 </form>
    </div> 
  <div class="search_select">
	<?php if ($_GET['status'] != ''): ?><a class="Search_jobs_c_a" href="<?php echo seacrh_url(array('m' => 'report','type' => 1,'untype' => 'status'), $this);?>
">审核状态：<?php if ($_GET['status'] == '0'): ?>未处理<?php elseif ($_GET['status'] == '1'): ?>已处理<?php endif; ?></a><?php endif; ?>  
</div>
<div class="admin_adv_search_box">
  <div class="admin_adv_search_list admin_adv_search_list_bg">
	<div class="admin_adv_search_left">审核状态</div>
  <div class="admin_adv_search_right">
	<a href="<?php echo seacrh_url(array('m' => 'report','type' => 1,'untype' => 'status'), $this);?>
" <?php if ($_GET['status'] == ''): ?>class="admin_adv_search_cur"<?php endif; ?>>不限</a>
	<a href="<?php echo seacrh_url(array('m' => 'report','status' => 0,'type' => 1,'untype' => 'status'), $this);?>
" <?php if ($_GET['status'] == '0'): ?>class="admin_adv_search_cur"<?php endif; ?>>未处理</a> 
	<a href="<?php echo seacrh_url(array('m' => 'report','status' => 1,'type' => 1,'untype' => 'status'), $this);?>
" <?php if ($_GET['status'] == '1'): ?>class="admin_adv_search_cur"<?php endif; ?>>已处理</a>  </div></div> 
  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
</div>
<div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" id='myform'  target="supportiframe" >
        <input name="m" value="report" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th>
			  <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('type' => 1,'order' => 'desc','t' => 'id','m' => 'report','untype' => "order,t,type"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('type' => 1,'order' => 'asc','t' => 'id','m' => 'report','untype' => "order,t,type"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th >被举报者</th>
              <th >举报者</th>
              <th >举报类型</th>
              <th >举报来源</th>
              <th >是否处理</th>
              <th >举报原因</th>
              <th>
			  <?php if ($_GET['t'] == 'inputtime' && $_GET['order'] == 'asc'): ?>
			  <a href="<?php echo seacrh_url(array('type' => 1,'order' => 'desc','t' => 'inputtime','m' => 'report','untype' => "order,t,type"), $this);?>
">举报时间<img src="images/sanj.jpg"/></a>
              <?php else: ?>
              <a href="<?php echo seacrh_url(array('type' => 1,'order' => 'asc','t' => 'inputtime','m' => 'report','untype' => "order,t,type"), $this);?>
">举报时间<img src="images/sanj2.jpg"/></a>
              <?php endif; ?>
			  </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['q_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
          <tr align="center" id="list<?php echo $this->_tpl_vars['r']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['r']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1"><span><?php echo $this->_tpl_vars['r']['id']; ?>
</span></td>
            <td align="left"><?php echo $this->_tpl_vars['r']['r_name']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['r']['username']; ?>
</td>
            <td><?php if ($this->_tpl_vars['r']['r_type'] == '1'): ?>问题<?php elseif ($this->_tpl_vars['r']['r_type'] == '2'): ?>回答<?php elseif ($this->_tpl_vars['r']['r_type'] == '3'): ?>评论<?php endif; ?></td>
            <td align="left"><?php if ($this->_tpl_vars['r']['is_del']): ?><font color="red"><?php echo $this->_tpl_vars['r']['is_del']; ?>
</font><?php elseif ($this->_tpl_vars['r']['status'] != '1'): ?>
            <a href="<?php echo $this->_tpl_vars['r']['url']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['r']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 20, 'gbk') : mb_substr($_tmp, 0, 20, 'gbk')); ?>
</a>
            <?php else: ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['r']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 20, 'gbk') : mb_substr($_tmp, 0, 20, 'gbk')); ?>

            <?php endif; ?></td>
            <td id="status<?php echo $this->_tpl_vars['r']['id']; ?>
"><?php if ($this->_tpl_vars['r']['is_del']): ?><font color="red"><?php echo $this->_tpl_vars['r']['is_del']; ?>
</font><?php elseif ($this->_tpl_vars['r']['status'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=report&c=recommend','<?php echo $this->_tpl_vars['r']['id']; ?>
','0','status');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=report&c=recommend','<?php echo $this->_tpl_vars['r']['id']; ?>
','1','status');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
            <td align="left"><?php echo $this->_tpl_vars['r']['reason']; ?>
</td>
            <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['r']['inputtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
            <td><?php if ($this->_tpl_vars['r']['is_del'] == ''): ?><a href="index.php?m=admin_question&c=<?php echo $this->_tpl_vars['r']['c']; ?>
&id=<?php echo $this->_tpl_vars['r']['eid']; ?>
&back_url=<?php echo $this->_tpl_vars['back_url']; ?>
">
            <img src="images/iconv/button_edit.png" alt="修改" title="修改"/></a><?php endif; ?><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=report&c=del&del=<?php echo $this->_tpl_vars['r']['id']; ?>
');"><img src="images/iconv/del_icon2.gif" alt="删除" title="删除"/></a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2" >
          <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4"   type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
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
<?php endif; ?>
  </div>
</body>
</html>