<?php /* Smarty version 2.6.26, created on 2015-01-29 18:23:30
         compiled from default/user/search.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/user/search.htm', 29, false),array('function', 'seacrh_url', 'default/user/search.htm', 63, false),)), $this); ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/job.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/search.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/index.js" type="text/javascript"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/public_search/index_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_body">
  <div class="yun_content">
    <div class="current_Location icon com_current_Location png">
      <div class="fl" >����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
">�˲��б�</a> > �� <span class="blod org"><?php echo $this->_tpl_vars['total']; ?>
</span> λ�˲� </div> </div>
    <div class="clear"></div>
	<form method="get" action="index.php" onsubmit="return search_keyword(this);">
	<input type="hidden" name="m" value="user" />
	<input type="hidden" name="c" value="search" />
	<?php $_from = $this->_tpl_vars['finder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
	<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['v']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
   <div class="Search_jobs_box">
 <div class="Search_jobs_form">
 <span class="Search_jobs_name">��ҵ���</span> 
 <div class="Search_jobs_bth_box"><input type="button" value="<?php if ($this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']] != ""): ?><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']]; ?>
<?php else: ?>��ѡ����ҵ���<?php endif; ?>" id="buttonhy" class="Search_jobs_bth" onclick="check_select_show('hy');"/>
 <input type="hidden" name="hy" id="hy" value="<?php echo $this->_tpl_vars['getinfo']['hy']; ?>
" />
 <div class="Search_jobs_hy_box" id="listhy"> 
 <ul class="Search_jobs_hy_box_list">  
<li><a href="javascript:check_onselect('hy','','����');" class="seach_Nature_cur">����</a></li>
<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<li><a href="javascript:check_onselect('hy','<?php echo $this->_tpl_vars['v']; ?>
','<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
 </ul>
 </div>
 </div>
 <div class="seach_industry"><span class="Search_jobs_name">ְλ���</span> <input type="button" value="<?php if ($this->_tpl_vars['jobnames'] != ""): ?><?php echo $this->_tpl_vars['jobnames']; ?>
<?php else: ?>��ѡ��ְλ���<?php endif; ?>" placeholder='��ѡ��ְλ���' id="index_job_class_val" onclick="index_job('<?php echo $_GET['jobids']; ?>
');" class="Search_jobs_bth">
  <input type="hidden" id="job_class" name="jobids" value="<?php echo $this->_tpl_vars['getinfo']['jobids']; ?>
" />
  </div>
 <div class="seach_industry">
 <span class="Search_jobs_name">���ڵ�����</span> <input type="button"  id="city" value="<?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']] != ""): ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]; ?>
<?php else: ?>��ѡ��������<?php endif; ?>" onclick="index_city();" class="Search_jobs_bth">
 <input type="hidden" name="cityid" id="cityid" value="<?php echo $this->_tpl_vars['getinfo']['cityid']; ?>
"/>
 </div>
 </div> 
<?php if ($this->_tpl_vars['getinfo']['cityid']): ?>
<div class="Search_jobs_form_list">
    <div class="Search_jobs_name">�������У�</div>
    <div class="Search_jobs_sub">
    <a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'three_cityid'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['three_cityid'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
    <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['getinfo']['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
    <a href="<?php echo seacrh_url(array('m' => 'user','three_cityid' => $this->_tpl_vars['v'],'untype' => 'three_cityid'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['three_cityid'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a>
    <?php endforeach; endif; unset($_from); ?> 
    </div>
</div> 
<?php endif; ?>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">�������ڣ�</div>
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'adtime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['adtime'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
	<?php $_from = $this->_tpl_vars['adtime']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','adtime' => $this->_tpl_vars['key'],'untype' => 'adtime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['adtime'] == $this->_tpl_vars['key']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['v']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?></div>
 </div> 
<div class="Search_jobs_form_list">
	<div class="Search_jobs_name">ѧ��Ҫ��</div>
	<div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'edu'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['edu'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
	<?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','edu' => $this->_tpl_vars['v'],'untype' => 'edu'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['edu'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
	</div>
</div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">�������飺</div>
  <div class="Search_jobs_sub">
		<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'exp'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['exp'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
	<?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','exp' => $this->_tpl_vars['v'],'untype' => 'exp'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['exp'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
	</div>
</div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">����ʱ�䣺</div>
  <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'uptime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['uptime'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
	<?php $_from = $this->_tpl_vars['uptime']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
	<a href="<?php echo seacrh_url(array('m' => 'user','uptime' => $this->_tpl_vars['key'],'untype' => 'uptime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['uptime'] == $this->_tpl_vars['key']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['v']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?> 
</div>
 </div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">��н��Χ��</div>
  <div class="Search_jobs_sub">
  <a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'salary'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['salary'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
  <?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','salary' => $this->_tpl_vars['v'],'untype' => 'salary'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['salary'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?> 
</div> </div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">����ʱ�䣺</div>
  <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'report'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['report'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
  <?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','report' => $this->_tpl_vars['v'],'untype' => 'report'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['report'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div> </div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">�������ͣ�</div>
  <div class="Search_jobs_sub"> 
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'type'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['type'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
  <?php $_from = $this->_tpl_vars['userdata']['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','type' => $this->_tpl_vars['v'],'untype' => 'type'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['type'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div> </div>
 <div class="Search_jobs_form_list">   
 <div class="Search_jobs_name">��    ��</div>
 <div class="Search_jobs_sub"> 
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'sex'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sex'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">ȫ��</a>
 <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','sex' => $this->_tpl_vars['v'],'untype' => 'sex'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sex'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div> </div>
   <div class="Search_jobs_form_list"> 
 <div class="Search_jobs_name">  �ؼ��֣�</div>
 <div class="Search_jobs_sub"><input type="text" placeholder="������Ҫ�����Ĺؼ���" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="Search_jobs_text"><input type="submit" value="���˲�" class="Search_jobs_submit"><?php if ($this->_tpl_vars['paras']): ?><a href="javascript:void(0)" onclick="addfinder('<?php echo $this->_tpl_vars['paras']; ?>
','2')" class="Search_jobs_search_box">+ ����Ϊ�˲�������</a><?php endif; ?></div>
  </div>
  <div class="clear"></div>
 <?php if ($this->_tpl_vars['paras']): ?>
 <div class="Search_jobs_form_list Search_jobs_form_list_bg"> 
 <div class="Search_jobs_name"> ��ѡ��</div>
 <div class="Search_jobs_sub">
 <div class="Search_jobs_xz"> 
 <?php if ($_GET['hy']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'hy'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['industry_name'][$_GET['hy']]; ?>
</a><?php endif; ?> 
 <?php if ($this->_tpl_vars['jobnames']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'jobids'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['jobnames']; ?>
</a><?php endif; ?> 
 <?php if ($_GET['cityid']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => "cityid,three_cityid"), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['city_name'][$_GET['cityid']]; ?>
</a><?php endif; ?> 
<?php if ($_GET['three_cityid']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'three_cityid'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['city_name'][$_GET['three_cityid']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['adtime']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'adtime'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['adtime'][$_GET['adtime']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['edu']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'edu'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['userclass_name'][$_GET['edu']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['exp']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'exp'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['userclass_name'][$_GET['exp']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['salary']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'salary'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['userclass_name'][$_GET['salary']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['uptime']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'uptime'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['uptime'][$_GET['uptime']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['report']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'report'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['userclass_name'][$_GET['report']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['type']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'type'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['userclass_name'][$_GET['type']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['sex']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'sex'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['userclass_name'][$_GET['sex']]; ?>
</a><?php endif; ?> 
 <?php if ($_GET['keyword']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'keyword'), $this);?>
" class="Search_jobs_c_a"><?php echo $_GET['keyword']; ?>
</a><?php endif; ?> 
 <?php if ($_GET['pic']): ?><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'pic'), $this);?>
" class="Search_jobs_c_a">����Ƭ</a><?php endif; ?> 
 </div>
 <div class="Search_jobs_det"><a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
" class="png">���ɸѡ��</a></div>
 </div>
  </div>
  <?php endif; ?>  <div class="clear"></div>
  </div> 
</form>
<div class="search_h1_box">
<div class="search_h1_box_title">
<ul class="search_h1_box_list">
<li <?php if ($_GET['pic'] == ''): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
">�����˲�</a></li>
<li <?php if ($_GET['pic']): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'user','url' => "pic:1"), $this);?>
">��Ƭ�˲�</a></li>   
</ul> 
<div class="jobs_tag">���ǲ������ң�<?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?><a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
" title="<?php echo $this->_tpl_vars['keylist']['key_title']; ?>
"><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </div>
</div>
<div class="search_Filter">
<span class="yun_search_tit"><i></i>����</span>
<ul class="search_Filter_list">
<li <?php if ($_GET['order'] == ''): ?>class="search_Filter_current"<?php endif; ?>><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'order'), $this);?>
">����ʱ��<i class="search_Filter_icon"></i></a></li>
<li <?php if ($_GET['order'] == 'status_time'): ?>class="search_Filter_current"<?php endif; ?>><a href="<?php echo seacrh_url(array('m' => 'user','order' => 'status_time','untype' => 'order'), $this);?>
">����ʱ��<i class="search_Filter_icon"></i></a></li> 
</ul> 
<div class="search_Filter_Authenticate "><a href="<?php if ($_GET['work']): ?><?php echo seacrh_url(array('m' => 'user','untype' => 'work'), $this);?>
<?php else: ?><?php echo seacrh_url(array('m' => 'user','work' => 1), $this);?>
<?php endif; ?>"><div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['work']): ?>iselect<?php endif; ?>"><i></i></div>����Ʒ</a></div>
<div class="search_Filter_Authenticate "><a href="<?php if ($_GET['idcard']): ?><?php echo seacrh_url(array('m' => 'user','untype' => 'idcard'), $this);?>
<?php else: ?><?php echo seacrh_url(array('m' => 'user','idcard' => 1), $this);?>
<?php endif; ?>"><div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['idcard']): ?>iselect<?php endif; ?>"><i></i></div>�������֤</a></div>
</div>
</div>
<div class="job_left_sidebar">
<div class="search_user_list_tit search_user_list_tit_bg">
<div class="search_user_list_neme search_user_list_w220">��ְ����</div>                 
<div class="search_user_list_neme search_user_list_w80">���� </div>             
<div class="search_user_list_neme search_user_list_w80">��������</div>          
<div class="search_user_list_neme search_user_list_w50">ѧ�� </div>         
<div class="search_user_list_neme search_user_list_w50">����</div>          
<div class="search_user_list_neme search_user_list_w50">�Ա� </div>           
<div class="search_user_list_neme search_user_list_w80">��ְ���� </div>          
<div class="search_user_list_neme search_user_list_w80">����ʱ�� </div>           
<div class="search_user_list_neme search_user_list_w80">��������</div>      
</div>
<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['user']):
?> 
<div class="search_user_list_tit <?php if ($this->_tpl_vars['key']%2 != '0'): ?>search_user_list_cur<?php endif; ?>">
<div class="search_user_list_neme search_user_list_w220"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['user']['id'])), $this);?>
" class="search_user_want fl" target="_blank"><?php echo $this->_tpl_vars['user']['job_post_n']; ?>
</a> 
<?php if ($this->_tpl_vars['user']['topdate'] > time ( )): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/user_zd.gif" title="�ö�"  class="user_rz_img png"><?php endif; ?>
<?php if ($this->_tpl_vars['user']['idcard_status'] == '1'): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/sf.png" title="�������֤"  class="user_rz_img png"><?php endif; ?>
<?php if ($this->_tpl_vars['user']['photo']): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/profile.png" title="��������" class="user_rz_img png"><?php endif; ?>
</div>                 
<div class="search_user_list_neme search_user_list_w80"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['user']['id'])), $this);?>
"><?php echo $this->_tpl_vars['user']['username_n']; ?>
</a> </div>             
<div class="search_user_list_neme search_user_list_w80"><?php echo $this->_tpl_vars['user']['exp_n']; ?>
</div>          
<div class="search_user_list_neme search_user_list_w50"><?php echo $this->_tpl_vars['user']['edu_n']; ?>
</div>         
<div class="search_user_list_neme search_user_list_w50"><?php if ($this->_tpl_vars['user']['age'] == 0): ?>����<?php else: ?><?php echo $this->_tpl_vars['user']['age']; ?>
��<?php endif; ?></div>          
<div class="search_user_list_neme search_user_list_w50"><?php echo $this->_tpl_vars['user']['sex_n']; ?>
</div>           
<div class="search_user_list_neme search_user_list_w80"><?php echo $this->_tpl_vars['user']['job_city_one']; ?>
 <?php echo $this->_tpl_vars['user']['job_city_two']; ?>
 </div>          
<div class="search_user_list_neme search_user_list_w80"><?php echo $this->_tpl_vars['user']['report_n']; ?>
</div>           
<div class="search_user_list_neme search_user_list_w80"><?php echo $this->_tpl_vars['user']['time']; ?>
</div>      
</div>
<?php endforeach; endif; unset($_from); ?>  
<div class="clear"></div>
<?php if ($this->_tpl_vars['total'] != 0): ?>
<div class="search_pages"><div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div></div>

<?php else: ?>	
<div class="seachno">
	<div class="seachno_left"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif" width="144" height="102"></div>
	<div class="listno-content"> <strong>�ܱ�Ǹ��û���ҵ������������˲�</strong><br>
	  <span> ��������<br>
	  1���ʵ�������ѡ�������<br>
	  2���ʵ�ɾ������������ؼ���<br>
	  </span> <span> ���Źؼ��֣�<br><?php $_from = $this->_tpl_vars['klist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['klist']):
?><a href="<?php echo $this->_tpl_vars['klist']['url']; ?>
" title="<?php echo $this->_tpl_vars['klist']['key_title']; ?>
"><?php echo $this->_tpl_vars['klist']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?></span> 
	  </div>
</div> 
<?php endif; ?>
</div>


<div class="job_right_sidebar">
	<?php $_from = $this->_tpl_vars['ad_36']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad_36']):
?>
    <div class="job_right_banner m10"><?php echo $this->_tpl_vars['ad_36']['html']; ?>
</div>
	  <?php endforeach; endif; unset($_from); ?>  
	<div class="job_right_box  m10">
        <div class="job_right_box_h1"><span class="job_right_box_span">�Ƽ��˲�</span></div>
		  <ul class="job_right_user_list">
			<?php $_from = $this->_tpl_vars['userrec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userrec']):
?> 
		   <li><a href="<?php echo $this->_tpl_vars['userrec']['user_url']; ?>
" class="job_right_user_name" target="_blank"><?php echo $this->_tpl_vars['userrec']['username_n']; ?>
</a>&nbsp;<?php echo $this->_tpl_vars['userrec']['job_post_n']; ?>
</li>
		   <?php endforeach; endif; unset($_from); ?>
        </ul>
	</div> 
</div>   
  
  </div>
 </div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>