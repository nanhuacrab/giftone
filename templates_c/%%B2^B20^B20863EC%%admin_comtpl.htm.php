<?php /* Smarty version 2.6.26, created on 2015-01-29 18:40:47
         compiled from admin/admin_comtpl.htm */ ?>
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
<div class="infoboxp_top">
<span class="admin_title_span">企业模板</span>
<a href="index.php?m=comtpl&c=add" class="admin_infoboxp_tj">添加企业模板</a>

</div>
<div class="table-list">
<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<div class="" style="float: left; width: 240px;border:1px solid #CCCCCC; text-align: center; padding: 15px; line-height: 180%; margin-top:10px; margin-right:5px; background:#fff">
	  <img width="125" height="125" border="1" alt="<?php echo $this->_tpl_vars['v']['name']; ?>
" src="../<?php echo $this->_tpl_vars['v']['pic']; ?>
">
	  <br>
	 <strong><?php echo $this->_tpl_vars['v']['name']; ?>
</strong>
	 <br>
	风格目录名称：<?php echo $this->_tpl_vars['v']['url']; ?>

      <br>
      状态：<?php if ($this->_tpl_vars['v']['status'] == 1): ?>正在使用<?php else: ?>已停止<?php endif; ?>
      <br>
      <input name="" value="修改" type="submit" class="admin_submit4" onClick="location.href='index.php?m=comtpl&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
'" style="padding:0px;">
      <input name="" value="删除" type="submit" class="admin_submit4" onclick="layer_del('确定要删除？', 'index.php?m=comtpl&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" style="padding:0px;">
	 </div>
     <?php endforeach; endif; unset($_from); ?>
</div>
</div>
   <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</body>
</html>