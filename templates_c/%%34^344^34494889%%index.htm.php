<?php /* Smarty version 2.6.26, created on 2015-01-29 19:16:51
         compiled from default/subscribe/index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name=keywords content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name=description content="<?php echo $this->_tpl_vars['description']; ?>
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
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]-->
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container">
<div class="post_read_left">
<h1 class="post_read_h1">�ҵĶ���</h1>
<div class="post_read_p">ɸѡ����Ķ���������ʵ�־�׼ƥ��ĸ��Ի����ƣ����ǰ��������������˲ţ�</div>

<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form name="myform" id="myform" method="post" target="supportiframe"  action="" onsubmit="return checksub();">
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">�������� </span></div>
<input  class="post_read_valid" type="text" value="�������������" name="email" onblur="if(this.value==''){this.value='�������������'}" onclick="if(this.value=='�������������'){this.value=''}">
</div>
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">��������</span></div>
<span class="post_read_chose post_read_chose_w70"><input type="radio" value="1" name="time" class="post_read_radio" checked="checked">ÿ�� </span> 
<span class="post_read_chose  post_read_chose_w70"><input type="radio" value="3" name="time" class="post_read_radio">3�� </span> 
<span class="post_read_chose  post_read_chose_w70"><input type="radio" value="7" name="time" class="post_read_radio">7��</span> 
</div>
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">��Ҫ���ĵ��ǣ�</span></div>
<span class="post_read_chose"><input type="radio" value="1" name="type" checked="checked" onclick="checktype('1')" class="post_read_radio">������ְ����Ҫ����ְλ </span> 
<span class="post_read_chose"><input type="radio" value="2" name="type" onclick="checktype('2')" class="post_read_radio">������Ƹ����Ҫ���ļ���</span> 

</div>
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">�����ص� </span></div>
<div class="post_read_text post_read_text_re10">
<input type="button" value="��ѡ��" class="post_read_button" id="button_provinceid" onclick="check_class('provinceid');">
<input type="hidden" name="provinceid" value="" />
<div class="post_read_text_box" style="display:none;" id="provinceid">
<ul class="post_read_text_box_list">
<?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
<li><a href="javascript:check_input('<?php echo $this->_tpl_vars['v']; ?>
','<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
','provinceid');"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
<div class="post_read_text post_read_text_re9" id="cityid_list">
<input type="button" value="��ѡ��" class="post_read_button" id="button_cityid" onclick="check_class('cityid');">
<input type="hidden" name="cityid" value="" />
<div class="post_read_text_box" style="display:none;" id="cityid">
<ul class="post_read_text_box_list">
</ul>
</div>
</div>
<div class="post_read_text post_read_text_re8" id="three_cityid_list">
<input type="button" value="��ѡ��" class="post_read_button" id="button_three_cityid" onclick="check_class('three_cityid');">
<input type="hidden" name="three_cityid" value="" />
<div class="post_read_text_box" style="display:none;" id="three_cityid">
<ul class="post_read_text_box_list">
</ul>
</div>
</div>
</div>
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">ְλ��� </span></div>
<div class="post_read_text post_read_text_re7">
<input type="button" value="��ѡ��" class="post_read_button" id="button_job1" onclick="check_class('job1');">
<input type="hidden" name="job1" value="" />
<div class="post_read_text_box" style="display:none;" id="job1">
<ul class="post_read_text_box_list">
<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
<li><a href="javascript:check_input('<?php echo $this->_tpl_vars['v']; ?>
','<?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
','job1');"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
<div class="post_read_text post_read_text_re6" id="job1_son_list">
<input type="button" value="��ѡ��" class="post_read_button" id="button_job1_son" onclick="check_class('job1_son');">
<input type="hidden" name="job1_son" value="" />
<div class="post_read_text_box" style="display:none;" id="job1_son">
<ul class="post_read_text_box_list">
</ul>
</div>
</div>
<div class="post_read_text post_read_text_re5" id="job_post_list">
<input type="button" value="��ѡ��" class="post_read_button" id="button_job_post" onclick="check_class('job_post');">
<input type="hidden" name="job_post" value="" />
<div class="post_read_text_box" style="display:none;" id="job_post">
<ul class="post_read_text_box_list">
</ul>
</div>
</div>
</div>
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">��н��Χ </span></div>
<div class="post_read_text post_read_text_re4">
<input type="button" value="��ѡ��" class="post_read_button" id="button_salary" onclick="check_class('salary');">
<input type="hidden" name="salary" value="" />
<div class="post_read_text_box" style="display:none;" id="salary">
<ul class="post_read_text_box_list">
<?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<li><a href="javascript:check_input('<?php echo $this->_tpl_vars['v']; ?>
','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
','salary');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>
</div>
<div class="post_read_body">
<div class="post_read_h2"><span class="post_read_h1_span png">����ʱ�� </span></div>
<div class="post_read_text post_read_text_re3">
<input type="button" value="��ѡ��" class="post_read_button" id="button_cycle_time" onclick="check_class('cycle_time');">
<input type="hidden" name="cycle_time" value="" />
<div class="post_read_text_box" style="display:none;" id="cycle_time">
<ul class="post_read_text_box_list">
<li><a href="javascript:check_input('3','3������','cycle_time');">3������</a></li>
<li><a href="javascript:check_input('7','1������','cycle_time');">1������</a></li>
<li><a href="javascript:check_input('14','2������','cycle_time');">2������</a></li>
<li><a href="javascript:check_input('21','3������','cycle_time');">3������</a></li>
<li><a href="javascript:check_input('30','1������','cycle_time');">1������</a></li>
<li><a href="javascript:check_input('90','3������','cycle_time');">3������</a></li>
</ul>
</div>
</div>
</div>
<div class="post_read_cz"><input type="submit" name="submit" value="����"  class="post_read_bth1">
<input type="button" value="����" onclick="clear_form();" class="post_read_bth2"></div>
</form>
</div>
<div class="post_read_right">
<div class="post_read_right_h1"><span class=" png">����Ϊʲôǿ���Ƽ��㶩��?</span></div>
<dl class="post_read_right_dl"><dt><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yp_time.png"></dt><dd> �������ʡ�����ɸѡʱ�䣬�����ҵ��ʺϵ�ְλ��Ϣ��</dd></dl>
<dl class="post_read_right_dl"><dt><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yp_fj.png"></dt><dd>���ǻ��ϸ����㶩�ĵ��������㷢���ʼ���������ĸ�����Ϣ���Ա��ܡ�</dd></dl>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 