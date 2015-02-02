<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:35
         compiled from admin/admin_myuser.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_myuser.htm', 41, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="./images/reset.css" rel="stylesheet" type="text/css" />
<link href="./images/system.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<link href="./images/table_form.css" rel="stylesheet" type="text/css" />
<title></title>
</head>
<body class="body_ifm">
    <div class="infoboxp">
    <div class="infoboxp_top_bg"></div>
    <div class="infoboxp_top">
    <span class="infoboxp_top_span" style="float:left">我的帐户详情</span>
    </div>
<div class="common-form">
<div class="admin_table_border">
<table width="100%" class="table_form contentWrap" style="background:#fff;">
    <tr>
        <td style="width:150px; text-align:right">用户名：</td>
        <td><?php echo $this->_tpl_vars['adminuser'][2]; ?>
 
        <a href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_logout">退出登录</a></td>
    </tr>
    <tr>
        <td style="width:150px; text-align:right">真实姓名：</td>
        <td><?php echo $this->_tpl_vars['adminuser'][4]; ?>
</td>
    </tr>
   	<tr class="admin_table_trbg" >
        <td style="width:150px; text-align:right">权限：</td>
        <td>
            <?php $_from = $this->_tpl_vars['user_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <?php if ($this->_tpl_vars['v']['id'] == $this->_tpl_vars['adminuser'][1]): ?><?php echo $this->_tpl_vars['v']['group_name']; ?>
<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </td>
    </tr>
    <tr class="admin_table_trbg" >
        <td style="width:150px; text-align:right">上一次登录时间：</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['adminuser'][5])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
    </tr>
 </table>
</div>
</div></div>
</body>
</html>