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
      <div class="fl" >您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
">人才列表</a> > 共 <span class="blod org"><?php echo $this->_tpl_vars['total']; ?>
</span> 位人才 </div> </div>
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
 <span class="Search_jobs_name">行业类别：</span> 
 <div class="Search_jobs_bth_box"><input type="button" value="<?php if ($this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']] != ""): ?><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']]; ?>
<?php else: ?>请选择行业类别<?php endif; ?>" id="buttonhy" class="Search_jobs_bth" onclick="check_select_show('hy');"/>
 <input type="hidden" name="hy" id="hy" value="<?php echo $this->_tpl_vars['getinfo']['hy']; ?>
" />
 <div class="Search_jobs_hy_box" id="listhy"> 
 <ul class="Search_jobs_hy_box_list">  
<li><a href="javascript:check_onselect('hy','','不限');" class="seach_Nature_cur">不限</a></li>
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
 <div class="seach_industry"><span class="Search_jobs_name">职位类别：</span> <input type="button" value="<?php if ($this->_tpl_vars['jobnames'] != ""): ?><?php echo $this->_tpl_vars['jobnames']; ?>
<?php else: ?>请选择职位类别<?php endif; ?>" placeholder='请选择职位类别' id="index_job_class_val" onclick="index_job('<?php echo $_GET['jobids']; ?>
');" class="Search_jobs_bth">
  <input type="hidden" id="job_class" name="jobids" value="<?php echo $this->_tpl_vars['getinfo']['jobids']; ?>
" />
  </div>
 <div class="seach_industry">
 <span class="Search_jobs_name">所在地区：</span> <input type="button"  id="city" value="<?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']] != ""): ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]; ?>
<?php else: ?>请选择工作地区<?php endif; ?>" onclick="index_city();" class="Search_jobs_bth">
 <input type="hidden" name="cityid" id="cityid" value="<?php echo $this->_tpl_vars['getinfo']['cityid']; ?>
"/>
 </div>
 </div> 
<?php if ($this->_tpl_vars['getinfo']['cityid']): ?>
<div class="Search_jobs_form_list">
    <div class="Search_jobs_name">所属城市：</div>
    <div class="Search_jobs_sub">
    <a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'three_cityid'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['three_cityid'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
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
 <div class="Search_jobs_name">发布日期：</div>
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'adtime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['adtime'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
	<?php $_from = $this->_tpl_vars['adtime']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','adtime' => $this->_tpl_vars['key'],'untype' => 'adtime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['adtime'] == $this->_tpl_vars['key']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['v']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?></div>
 </div> 
<div class="Search_jobs_form_list">
	<div class="Search_jobs_name">学历要求：</div>
	<div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'edu'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['edu'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
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
 <div class="Search_jobs_name">工作经验：</div>
  <div class="Search_jobs_sub">
		<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'exp'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['exp'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
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
 <div class="Search_jobs_name">更新时间：</div>
  <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'uptime'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['uptime'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
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
 <div class="Search_jobs_name">月薪范围：</div>
  <div class="Search_jobs_sub">
  <a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'salary'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['salary'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
  <?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','salary' => $this->_tpl_vars['v'],'untype' => 'salary'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['salary'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?> 
</div> </div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">到岗时间：</div>
  <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'report'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['report'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
  <?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','report' => $this->_tpl_vars['v'],'untype' => 'report'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['report'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div> </div>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">工作类型：</div>
  <div class="Search_jobs_sub"> 
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'type'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['type'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
  <?php $_from = $this->_tpl_vars['userdata']['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','type' => $this->_tpl_vars['v'],'untype' => 'type'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['type'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div> </div>
 <div class="Search_jobs_form_list">   
 <div class="Search_jobs_name">性    别：</div>
 <div class="Search_jobs_sub"> 
	<a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'sex'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sex'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
 <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<a href="<?php echo seacrh_url(array('m' => 'user','sex' => $this->_tpl_vars['v'],'untype' => 'sex'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sex'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div> </div>
   <div class="Search_jobs_form_list"> 
 <div class="Search_jobs_name">  关键字：</div>
 <div class="Search_jobs_sub"><input type="text" placeholder="请输入要搜索的关键字" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="Search_jobs_text"><input type="submit" value="搜人才" class="Search_jobs_submit"><?php if ($this->_tpl_vars['paras']): ?><a href="javascript:void(0)" onclick="addfinder('<?php echo $this->_tpl_vars['paras']; ?>
','2')" class="Search_jobs_search_box">+ 保存为人才搜索器</a><?php endif; ?></div>
  </div>
  <div class="clear"></div>
 <?php if ($this->_tpl_vars['paras']): ?>
 <div class="Search_jobs_form_list Search_jobs_form_list_bg"> 
 <div class="Search_jobs_name"> 已选择：</div>
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
" class="Search_jobs_c_a">有照片</a><?php endif; ?> 
 </div>
 <div class="Search_jobs_det"><a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
" class="png">清空筛选项</a></div>
 </div>
  </div>
  <?php endif; ?>  <div class="clear"></div>
  </div> 
</form>
<div class="search_h1_box">
<div class="search_h1_box_title">
<ul class="search_h1_box_list">
<li <?php if ($_GET['pic'] == ''): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
">所有人才</a></li>
<li <?php if ($_GET['pic']): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'user','url' => "pic:1"), $this);?>
">照片人才</a></li>   
</ul> 
<div class="jobs_tag">你是不是想找：<?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?><a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
" title="<?php echo $this->_tpl_vars['keylist']['key_title']; ?>
"><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </div>
</div>
<div class="search_Filter">
<span class="yun_search_tit"><i></i>排序</span>
<ul class="search_Filter_list">
<li <?php if ($_GET['order'] == ''): ?>class="search_Filter_current"<?php endif; ?>><a href="<?php echo seacrh_url(array('m' => 'user','untype' => 'order'), $this);?>
">更新时间<i class="search_Filter_icon"></i></a></li>
<li <?php if ($_GET['order'] == 'status_time'): ?>class="search_Filter_current"<?php endif; ?>><a href="<?php echo seacrh_url(array('m' => 'user','order' => 'status_time','untype' => 'order'), $this);?>
">发布时间<i class="search_Filter_icon"></i></a></li> 
</ul> 
<div class="search_Filter_Authenticate "><a href="<?php if ($_GET['work']): ?><?php echo seacrh_url(array('m' => 'user','untype' => 'work'), $this);?>
<?php else: ?><?php echo seacrh_url(array('m' => 'user','work' => 1), $this);?>
<?php endif; ?>"><div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['work']): ?>iselect<?php endif; ?>"><i></i></div>有作品</a></div>
<div class="search_Filter_Authenticate "><a href="<?php if ($_GET['idcard']): ?><?php echo seacrh_url(array('m' => 'user','untype' => 'idcard'), $this);?>
<?php else: ?><?php echo seacrh_url(array('m' => 'user','idcard' => 1), $this);?>
<?php endif; ?>"><div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['idcard']): ?>iselect<?php endif; ?>"><i></i></div>有身份认证</a></div>
</div>
</div>
<div class="job_left_sidebar">
<div class="search_user_list_tit search_user_list_tit_bg">
<div class="search_user_list_neme search_user_list_w220">求职意向</div>                 
<div class="search_user_list_neme search_user_list_w80">姓名 </div>             
<div class="search_user_list_neme search_user_list_w80">工作经验</div>          
<div class="search_user_list_neme search_user_list_w50">学历 </div>         
<div class="search_user_list_neme search_user_list_w50">年龄</div>          
<div class="search_user_list_neme search_user_list_w50">性别 </div>           
<div class="search_user_list_neme search_user_list_w80">求职地区 </div>          
<div class="search_user_list_neme search_user_list_w80">到岗时间 </div>           
<div class="search_user_list_neme search_user_list_w80">更新日期</div>      
</div>
<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['user']):
?> 
<div class="search_user_list_tit <?php if ($this->_tpl_vars['key']%2 != '0'): ?>search_user_list_cur<?php endif; ?>">
<div class="search_user_list_neme search_user_list_w220"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['user']['id'])), $this);?>
" class="search_user_want fl" target="_blank"><?php echo $this->_tpl_vars['user']['job_post_n']; ?>
</a> 
<?php if ($this->_tpl_vars['user']['topdate'] > time ( )): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/user_zd.gif" title="置顶"  class="user_rz_img png"><?php endif; ?>
<?php if ($this->_tpl_vars['user']['idcard_status'] == '1'): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/sf.png" title="身份已认证"  class="user_rz_img png"><?php endif; ?>
<?php if ($this->_tpl_vars['user']['photo']): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/profile.png" title="有形象照" class="user_rz_img png"><?php endif; ?>
</div>                 
<div class="search_user_list_neme search_user_list_w80"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['user']['id'])), $this);?>
"><?php echo $this->_tpl_vars['user']['username_n']; ?>
</a> </div>             
<div class="search_user_list_neme search_user_list_w80"><?php echo $this->_tpl_vars['user']['exp_n']; ?>
</div>          
<div class="search_user_list_neme search_user_list_w50"><?php echo $this->_tpl_vars['user']['edu_n']; ?>
</div>         
<div class="search_user_list_neme search_user_list_w50"><?php if ($this->_tpl_vars['user']['age'] == 0): ?>保密<?php else: ?><?php echo $this->_tpl_vars['user']['age']; ?>
岁<?php endif; ?></div>          
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
	<div class="listno-content"> <strong>很抱歉，没有找到满足条件的人才</strong><br>
	  <span> 建议您：<br>
	  1、适当减少已选择的条件<br>
	  2、适当删减或更改搜索关键字<br>
	  </span> <span> 热门关键字：<br><?php $_from = $this->_tpl_vars['klist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
        <div class="job_right_box_h1"><span class="job_right_box_span">推荐人才</span></div>
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