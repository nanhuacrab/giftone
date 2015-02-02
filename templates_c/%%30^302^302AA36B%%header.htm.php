<?php /* Smarty version 2.6.26, created on 2015-01-30 06:58:23
         compiled from E:%5Chtdocs%5Cgift11/template/wap/header.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'E:\\htdocs\\gift11/template/wap/header.htm', 36, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 -  手机人才网</title>
<meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
<meta http-equiv="description" content="人才招聘网wap网站" />
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
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/wap/css/wap.css"/>
</head> 
<body>
<div class="main_body">
<header class="header">
<div class="header_cont">
<!--<div class="nav_icon"><i></i><em></em></div>-->
<div class="logo"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_wap_logo']; ?>
" width="200" height="35"></div>
<div class="header_user"><a href="member/"></a></div>
</div>
</header>
<?php if ($_GET['point']): ?>
<div class="msg-err" style="opacity: 1;-webkit-animation:shake 0.5s linear 0s;"><?php echo $_GET['point']; ?>
</div>
<?php endif; ?>
<table class="mune_list">
<tr>
<td width="30%"><a href="<?php echo smarty_function_wapurl(array('url' => "m:com"), $this);?>
"><p class="mune_a"><i></i><em>职位搜索</em></p></a></td>
<td width="30%" rowspan="2"><a href="<?php echo smarty_function_wapurl(array('url' => "m:firm"), $this);?>
"><p class="mune_c"><i></i><em>公司搜索</em></p></a></td>
<td width="30%"><a href="<?php echo smarty_function_wapurl(array('url' => "m:once"), $this);?>
"><p class="mune_d"><i></i><em>微招聘</em></p></a></td>
</tr>
<tr>
<td width="30%"> <a href="<?php echo smarty_function_wapurl(array('url' => "m:tiny"), $this);?>
"><p class="mune_b"><i></i><em>微简历</em></p></a></td>
<td width="30%"> <a href="<?php echo smarty_function_wapurl(array('url' => "m:news"), $this);?>
"><p class="mune_e"><i></i><em>职场资讯</em></p></a></td>
</tr>
<tr>
<td colspan="3"> <a href="<?php echo smarty_function_wapurl(array('url' => "m:user"), $this);?>
"><p class="mune_f">招人才</p></a></td>
</tr>
</table> 