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
<!--������ʼ-->

<div class="container">

<div class="container_cont">
    <div class="post_read_left container_cont_fr">
      <h1 class="post_read_h1">����������֤</h1>
      <div class="post_read_p">��֤���䣬��ɶ���</div>
      <div class="post_read_body post_read_body_pp "> ��������
        �����ѽ���֤�ʼ����������䣺<?php echo $this->_tpl_vars['email']; ?>
</br>
        ����ʼ��ڵ����Ӽ�����ɶ��ģ����ǽ����ڷ����׼����Ϣ��������䡣 </div>
      <div class="post_read_body_c">
        <p>û���յ���֤�ʼ�����ô�죿</p>
        <p>�����Ƿ�������������ʼ�������ʼ�Ŀ¼��</p>
        <p>�Եȼ����ӣ�����δ�յ���֤�ʼ��� <a href="javascript:send_email();">���·�����֤�ʼ�</a></p>
      </div>
    </div>
</div>
</div>
<!--��������--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>