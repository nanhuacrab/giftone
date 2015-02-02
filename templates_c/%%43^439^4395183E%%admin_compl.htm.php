<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:57
         compiled from admin/admin_compl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_compl.htm', 69, false),array('modifier', 'mb_substr', 'admin/admin_compl.htm', 94, false),array('modifier', 'date_format', 'admin/admin_compl.htm', 110, false),)), $this); ?>
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
<script>
function showbox(title,msg){

	$('#showboxmsg').html(msg);
	$.layer({
			type : 1,
			title :title,
			offset: [($(window).height() - 220)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['360px','auto'],
			page : {dom :"#showbox"}
		});
}
</script>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>

<div class="admin_Filter">
<span class="complay_top_span fl">企业评论</span>
  <div class="admin_Filter_span">搜索类型：</div>
  <form action="index.php" name="myform" method="get">
  <input type="hidden" name="m" value="com_pl"/>
  <div class="admin_Filter_text formselect" did="dtype">
  
  <input type="button" <?php if ($_GET['type'] == '' || $_GET['type'] == '1'): ?> value="评论人"  <?php elseif ($_GET['type'] == '2'): ?> value="公司名称" <?php elseif ($_GET['type'] == '3'): ?> value="评论内容" <?php else: ?> value="回复内容" <?php endif; ?> class="admin_Filter_but" id="btype">
  <input type="hidden" name="type" id="type" value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>"/>
  
     <div class="admin_Filter_text_box" style="display:none" id="dtype">
          <ul>
			  <li><a href="javascript:void(0);" onClick="formselect('1','type','评论人')">评论人</a></li>
			  <li><a href="javascript:void(0);" onClick="formselect('2','type','公司名称')">公司名称</a></li>
			  <li><a href="javascript:void(0);" onClick="formselect('3','type','评论名称')">评论内容</a></li>
			  <li><a href="javascript:void(0);" onClick="formselect('4','type','评论内容')">回复内容</a></li>
          </ul>  
      </div>
  </div>
  <input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_Filter_search">
  <input type="submit" value="搜索" class="admin_Filter_bth">
	<span class='admin_search_div'> <div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div> </span>   
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
      <form action="index.php?m=com_pl&c=del" name="myform" target="supportiframe" id='myform' method="post">
       <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
                <th width="60" >
                <?php if ($_GET['order'] == 'asc'): ?>
                <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'com_pl','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
                <?php else: ?>
                <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'com_pl','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
                <?php endif; ?>
                </th>
              <th align="left" width="100">评论人</th>
              <th align="left">公司名称</th>
              <th align="left">评论内容</th>
              <th align="left">回复内容</th>
			   <th align="left" width="130" >发送时间</th>
			   <th align="left" width="130" >回复时间</th>
              <th align="center" width="100" class="admin_table_th_bg">操作</th>
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
            <td align="left" width="60" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td align="left" width="100"><?php echo $this->_tpl_vars['v']['username']; ?>
</td>
            <td align="left" width="250"><?php echo $this->_tpl_vars['v']['com_name']; ?>
</td>
            <td align="left" width="300">

			<?php if ($this->_tpl_vars['v']['content']): ?> 
			
			<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['content'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 50, 'GBK') : mb_substr($_tmp, 0, 50, 'GBK')); ?>

			<?php if (strlen ( $this->_tpl_vars['v']['content'] ) > 50): ?> 
			<a href="javascript:void(0);" onclick="showbox('评论内容','<?php echo $this->_tpl_vars['v']['content']; ?>
')" class="admin_cz_sc">[更多]</a>
			<?php endif; ?>
			<?php endif; ?>

			</td>
            <td align="left" width="300">
			<?php if ($this->_tpl_vars['v']['reply']): ?> 

			<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reply'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 50, 'GBK') : mb_substr($_tmp, 0, 50, 'GBK')); ?>
 
			<?php if (strlen ( $this->_tpl_vars['v']['reply'] ) > 50): ?> 
			<a href="javascript:void(0);" onclick="showbox('回复内容','<?php echo $this->_tpl_vars['v']['reply']; ?>
')" class="admin_cz_sc">[更多]</a>
			<?php endif; ?> 
			<?php endif; ?> 
			</td>
			 <td align="left" width="120"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
			  <td align="left" width="120"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reply_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
            <td width="100"><span onClick="showdiv4('houtai_div','<?php echo $this->_tpl_vars['v']['content']; ?>
','<?php echo $this->_tpl_vars['v']['reply']; ?>
')" class="admin_cz_yl" style="cursor:pointer;">预览</span> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=com_pl&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="7" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
<div id="houtai_div" style=" width:408px; border:1px solid #ccc; display:none;margin: 0 auto;  padding: 0;">
	<form id="formstatus" method="post" target="supportiframe" action="index.php?m=admin_company_job&c=status">
    <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	  <table class="table_form "  id="infobox"> 
			<tr><td>评论内容：</td><td><textarea name="beizhu" id="beizhu" rows="3" cols="45" class="text" readonly></textarea></td></tr>
			<tr><td>回复内容：</td><td><textarea name="reply" id="reply" rows="3" cols="45" class="text" readonly></textarea></td></tr> 
	  </table>
	 </form>
</div> 
<div id="showbox"  style="display:none; width: 350px; "> 
    <div id="infobox">
       <table cellspacing='2' cellpadding='3'>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' id="showboxmsg">
				
          </tr>
        </table>
      </div>
</div>
</body>
</html>