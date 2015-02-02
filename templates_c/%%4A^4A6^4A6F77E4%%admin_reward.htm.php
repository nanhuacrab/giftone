<?php /* Smarty version 2.6.26, created on 2015-01-29 18:25:07
         compiled from admin/admin_reward.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_reward.htm', 47, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jscolor/jscolor.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div  class="infoboxp">
<div class="infoboxp_top_bg"></div>
    <form action="index.php" name="myform" method="get">
      <input name="m" value="reward" type="hidden"/>
      <div class="admin_Filter">
	  <span class="complay_top_span fl">奖品管理</span>
        <input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword']; ?>
" name='keyword' class="admin_Filter_search">
        <input type="submit" name='search'  value="搜索" class="admin_Filter_bth">
        <span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">高级搜索</div>
        </div> 
        </span> 
    </form> 
 <a href="index.php?m=reward&c=add" class="admin_infoboxp_tj">添加奖品</a> 
  <a href="index.php?m=reward&c=group" class="admin_infoboxp_nav admin_infoboxp_gl">分类管理</a>
  </div>
  
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
 
 
<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=reward&c=del" name="myform" method="post"  target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th width="5%"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <th>
			<?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
			<a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'reward','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a>
            <?php else: ?>
            <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'reward','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
            <th align="left">奖品名称</th>
            <th>类别</th>
            <th>兑换积分</th>
            <th>限购数量</th>
            <th>库存</th>
            <th>排序</th>
            <th>审核状态</th>
            <th>热门推荐</th>
            <th class="admin_table_th_bg" width="80">操作</th>
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
          <td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
          <td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['classname']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['integral']; ?>
</td>
          <td><?php if ($this->_tpl_vars['v']['restriction'] == '0'): ?>不限<?php else: ?><?php echo $this->_tpl_vars['v']['restriction']; ?>
<?php endif; ?></td>
          <td><?php echo $this->_tpl_vars['v']['stock']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['sort']; ?>
</td>
          <td id="status<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['status'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=reward&c=status','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','status');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=reward&c=status','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','status');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
           <td id="rec<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['rec'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=reward&c=rec','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','rec');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=reward&c=rec','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','rec');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
          <td><a href="index.php?m=reward&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_sc">修改</a> | 
<a href="javascript:void(0)"  class="admin_cz_sc" onClick="layer_del('确定要删除？', 'index.php?m=reward&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');">删除</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
        <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
        <td colspan="2" >
        <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
          <td colspan="8" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
        </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<div id="bg" class="admin_bg"></div>
</body>
</html>