<?php /* Smarty version 2.6.26, created on 2015-01-29 18:30:45
         compiled from admin/admin_zhaopinhui_list.htm */ ?>
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
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
  <div class="admin_Filter">
    <span class="complay_top_span fl">招聘会列表</span> 
      <form action="index.php" name="myform" method="get">
        <input name="m" value="zhaopinhui" type="hidden"/>
		<input type="hidden" name="status" value="<?php echo $_GET['status']; ?>
"/>
        <span class="admin_Filter_span"> 检索类型：</span>  
		<div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type'] == '1' || $_GET['type'] == ''): ?>招聘会标题<?php else: ?>举办会场<?php endif; ?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','招聘会标题')">招聘会标题</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','举办会场')">举办会场</a></li> 
			  </ul>  
		  </div>
		</div> 
        <input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left">
        <input class="admin_Filter_bth" type="submit" name="news_search" value="检索"/> 
      </form>
	  <span class='admin_search_div'>
	  <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div>  	   
	</span>
     <a href="index.php?m=zhaopinhui&c=add"  class="admin_infoboxp_tj" style="margin-top:0px;">添加招聘会</a>
   </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
   
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=zhaopinhui&c=del" name="myform" method="post" target="supportiframe" id='myform'>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
                </label></th>
              <th>编号</th>
              <th>招聘会标题</th>
              <th>开始时间</th>
              <th>结束时间</th>
              <th>举办会场</th>
              <th>企业数</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td style="width:20px;"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
            <td class="od"><?php echo $this->_tpl_vars['v']['starttime']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['endtime']; ?>
</td>
            <td align="left"> <?php echo $this->_tpl_vars['v']['address']; ?>
 </td>
            <td><?php echo $this->_tpl_vars['v']['comnum']; ?>
 [<a href="index.php?m=zhaopinhui&c=com&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" style="color:blue;"><?php echo $this->_tpl_vars['v']['booking']; ?>
个待审核</a>]</td>
            <td><a href="index.php?m=zhaopinhui&c=upload&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_img">图片</a> | <a href="index.php?m=zhaopinhui&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？','index.php?m=zhaopinhui&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background: #f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
            <td colspan="5" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
		<input type="hidden" name="pytoken"  id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>