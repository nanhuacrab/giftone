<?php /* Smarty version 2.6.26, created on 2015-01-29 19:17:35
         compiled from default/subscribe/cert.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css"> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/subscribe.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!--简历开始-->

<div class="container">

<div class="container_cont">
    <div class="post_read_left container_cont_fr">
      <h1 class="post_read_h1">订阅邮箱验证</h1>
      <div class="post_read_p">验证邮箱，完成订阅</div>
      <div class="post_read_body post_read_body_pp "> 接收邮箱
        我们已将验证邮件发送至邮箱：<?php echo $this->_tpl_vars['email']; ?>
</br>
        点击邮件内的链接即可完成订阅，我们将定期发送最精准的信息至你的邮箱。 </div>
      <div class="post_read_body_c">
        <p>没有收到验证邮件，怎么办？</p>
        <p>看看是否在邮箱的垃圾邮件、广告邮件目录里</p>
        <p>稍等几分钟，若还未收到验证邮件， <a href="javascript:send_email();">重新发送验证邮件</a></p>
      </div>
    </div>
</div>
</div>
<!--简历结束--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>