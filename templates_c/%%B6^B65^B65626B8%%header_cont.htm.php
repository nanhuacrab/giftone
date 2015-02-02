<?php /* Smarty version 2.6.26, created on 2015-01-31 00:29:51
         compiled from E:%5Chtdocs%5Cgift11/template/wap/header_cont.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'E:\\htdocs\\gift11/template/wap/header_cont.htm', 48, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 -  手机人才网</title>
<meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
<meta http-equiv="description" content="人才招聘网wap网站" />
<meta content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
<meta name="MobileOptimized" content="240" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=yes" name="format-detection" />
<meta content="email=no" name="format-detection" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['wap_style']; ?>
/css/wap.css"/>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/wap/js/layer/layer.m.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/wap/js/public.js" language="javascript"></script> 
</head> 
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">
 <div class="left-box"> <a class="hd-lbtn" href="javascript:history.back();"><span>&nbsp;</span></a></div>
<div class="header_name"><?php echo $this->_tpl_vars['title']; ?>
</div>
<nav id="nav" class="header_cont_nav">
<span onclick="showMoreNav();"> 
<div id="homeAreaSel" class="area_select">
<i></i>
<i></i>
<i></i>
</div>
</span>
</nav>
<?php if ($_GET['point']): ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']; ?>
</div>
<script language="javascript" type="text/javascript">$(document).ready(function(){setTimeout("$('.msg-err').slideUp(500)",2000);});</script>
<?php endif; ?>
<?php if ($_GET['layer']): ?>
<script language="javascript" type="text/javascript">$(document).ready(function(){layermsg('<?php echo $_GET['layer']; ?>
');});</script>
<?php endif; ?>
<div style="clear:both"></div>
<div class="subnav" style="display:none">
<ul>
<li><a href="<?php echo smarty_function_wapurl(array(), $this);?>
" <?php if ($_GET['m'] == ''): ?>class="current"<?php endif; ?>>首页</a></li>
<li><a <?php if ($_GET['m'] == 'com'): ?>class="current"<?php endif; ?> href="<?php echo smarty_function_wapurl(array('url' => "m:com"), $this);?>
"> 找工作 </a></li>
<li><a <?php if ($_GET['m'] == 'user'): ?>class="current"<?php endif; ?> href="<?php echo smarty_function_wapurl(array('url' => "m:user"), $this);?>
"> 招人才 </a></li>
<li><a <?php if ($_GET['m'] == 'firm'): ?>class="current"<?php endif; ?> href="<?php echo smarty_function_wapurl(array('url' => "m:firm"), $this);?>
">企业黄页 </a></li>
<li><a <?php if ($_GET['m'] == 'tiny'): ?>class="current"<?php endif; ?> href="<?php echo smarty_function_wapurl(array('url' => "m:tiny"), $this);?>
"> 微简历 </a></li>
<li><a <?php if ($_GET['m'] == 'once'): ?>class="current"<?php endif; ?> href="<?php echo smarty_function_wapurl(array('url' => "m:once"), $this);?>
">微招聘</a></li>
<li><a <?php if ($_GET['m'] == 'news'): ?>class="current"<?php endif; ?> href="<?php echo smarty_function_wapurl(array('url' => "m:news"), $this);?>
"> 职场资讯 </a></li>
<li><a  href="<?php echo $this->_tpl_vars['config_wapdomain']; ?>
/member/">会员中心 </a></li>
</ul>
</div>
</div>
</header>
<div style="clear:both"></div> 