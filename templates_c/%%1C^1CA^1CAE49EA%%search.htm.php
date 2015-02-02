<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:51
         compiled from default/com/search.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/com/search.htm', 29, false),array('function', 'seacrh_url', 'default/com/search.htm', 58, false),array('modifier', 'strip_tags', 'default/com/search.htm', 247, false),)), $this); ?>
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
/js/com_index.js" language="javascript"></script>
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
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">职位列表</a> > 共 <span class="blod org"><?php echo $this->_tpl_vars['total']; ?>
</span> 个职位 </div> </div>
    <div class="clear"></div>
   <div class="Search_jobs_box">
   <form action="index.php" method="get" onsubmit="return search_keyword(this);">
   <input type="hidden" name="m" value="com" />
	<input type="hidden" name="c" value="search" />
	<?php $_from = $this->_tpl_vars['finder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
	<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['v']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
 <div class="Search_jobs_form">
 <span class="Search_jobs_name">行业类别：</span> 
 <div class="Search_jobs_bth_box"><input type="button" <?php if ($_GET['hy']): ?>value="<?php echo $this->_tpl_vars['industry_name'][$_GET['hy']]; ?>
"<?php else: ?>value="请选择行业类别"<?php endif; ?> class="Search_jobs_bth" id="buttonhy" onclick="check_select_show('hy');">
 <input name="hy" id='hy' type="hidden" value="<?php echo $_GET['hy']; ?>
"/>
  <div class="Search_jobs_hy_box" id="listhy">
 <ul class="Search_jobs_hy_box_list"> 
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
 <span class="Search_jobs_name">职位类别：</span> <input type="button" id="index_job_class_val" value="<?php if ($this->_tpl_vars['jobnames'] != ""): ?><?php echo $this->_tpl_vars['jobnames']; ?>
<?php else: ?>请选择职位类别<?php endif; ?>" placeholder='请选择职位类别' class="Search_jobs_bth" onclick="index_job('<?php echo $_GET['jobids']; ?>
');"><input type="hidden" id="job_class" name="jobids" value="<?php echo $this->_tpl_vars['getinfo']['jobids']; ?>
" />
 <span class="Search_jobs_name">所在地区：</span> <input type="button" id="city" value="<?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']] != ""): ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]; ?>
<?php else: ?>请选择工作地区<?php endif; ?>" onclick="index_city();" class="Search_jobs_bth">
 <input type="hidden" name="cityid" id="cityid" value="<?php echo $this->_tpl_vars['getinfo']['cityid']; ?>
"/>
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
    <a href="<?php echo seacrh_url(array('m' => 'com','three_cityid' => $this->_tpl_vars['v'],'untype' => 'three_cityid'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['three_cityid'] == $this->_tpl_vars['v']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a>
    <?php endforeach; endif; unset($_from); ?> 
    </div>
</div> 
<?php endif; ?>
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">发布日期：</div>
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'sdate'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sdate'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
	<?php $_from = $this->_tpl_vars['sdatename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sdate']):
?>
	<a href="<?php echo seacrh_url(array('m' => 'com','sdate' => $this->_tpl_vars['key'],'untype' => 'sdate'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sdate'] == $this->_tpl_vars['key']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['sdate']; ?>
</a>
	<?php endforeach; endif; unset($_from); ?> 
</div>
 </div> 
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name"> 期望月薪：</div>
  <div class="Search_jobs_sub"> 
	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'salary'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['salary'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
  <?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_salary']):
?>
  <a href="<?php echo seacrh_url(array('m' => 'com','salary' => $this->_tpl_vars['job_salary'],'untype' => 'salary'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['salary'] == $this->_tpl_vars['job_salary']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job_salary']]; ?>
</a>
  <?php endforeach; endif; unset($_from); ?></div>
 </div> 
 <div class="Search_jobs_form_list">
 <div class="Search_jobs_name">学历要求：</div> 
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'edu'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['edu'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
	<?php $_from = $this->_tpl_vars['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_edu']):
?>
  <a href="<?php echo seacrh_url(array('m' => 'com','edu' => $this->_tpl_vars['job_edu'],'untype' => 'edu'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['edu'] == $this->_tpl_vars['job_edu']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job_edu']]; ?>
</a>
  <?php endforeach; endif; unset($_from); ?>
 </div> 
 </div> 
<div class="Search_jobs_form_list">
 <div class="Search_jobs_name"> 工作经验：</div>   
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'exp'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['exp'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
 <?php $_from = $this->_tpl_vars['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_exp']):
?>
  <a href="<?php echo seacrh_url(array('m' => 'com','exp' => $this->_tpl_vars['job_exp'],'untype' => 'exp'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['exp'] == $this->_tpl_vars['job_exp']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job_exp']]; ?>
</a>
  <?php endforeach; endif; unset($_from); ?></div>
 </div> 
<div class="Search_jobs_form_list"> 
 <div class="Search_jobs_name"> 性别要求：</div>  
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'sex'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sex'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
 <?php $_from = $this->_tpl_vars['comdata']['job_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_sex']):
?>
  <a href="<?php echo seacrh_url(array('m' => 'com','sex' => $this->_tpl_vars['job_sex'],'untype' => 'sex'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['sex'] == $this->_tpl_vars['job_sex']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job_sex']]; ?>
</a>
  <?php endforeach; endif; unset($_from); ?>
 </div>
 </div> 
 <div class="Search_jobs_form_list"> 
 <div class="Search_jobs_name">  工作类型：</div>
 <div class="Search_jobs_sub">
	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'type'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['type'] == ''): ?>Search_jobs_sub_cur<?php endif; ?>">全部</a>
 <?php $_from = $this->_tpl_vars['comdata']['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_type']):
?>
  <a href="<?php echo seacrh_url(array('m' => 'com','type' => $this->_tpl_vars['job_type'],'untype' => 'type'), $this);?>
" class="Search_jobs_sub_a <?php if ($_GET['type'] == $this->_tpl_vars['job_type']): ?>Search_jobs_sub_cur<?php endif; ?>"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job_type']]; ?>
</a>
  <?php endforeach; endif; unset($_from); ?></div> 
  </div> 
   <div class="Search_jobs_form_list"> 
 <div class="Search_jobs_name">  关键字：</div>
 <div class="Search_jobs_sub"><input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" placeholder="请输入要搜索的关键字" class="Search_jobs_text"><input type="submit" value="搜职位" class="Search_jobs_submit"><?php if ($this->_tpl_vars['paras']): ?><a href="javascript:void(0)" class="Search_jobs_search_box"  onclick="addfinder('<?php echo $this->_tpl_vars['paras']; ?>
','1')">+ 保存为职位搜索器</a><?php endif; ?></div>
  </div>
  <div class="clear"></div>
  </form>
   <?php if ($this->_tpl_vars['paras']): ?>
 <div class="Search_jobs_form_list Search_jobs_form_list_bg"> 
 <div class="Search_jobs_name"> 已选择：</div>
 <div class="Search_jobs_sub">
 <div class="Search_jobs_xz"> 
    <?php if ($this->_tpl_vars['industry_name'][$_GET['hy']]): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'hy'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['industry_name'][$_GET['hy']]; ?>
</a>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['jobnames']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'jobids'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['jobnames']; ?>
</a>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => "cityid,three_cityid"), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]; ?>
</a>		 	<?php endif; ?>
    <?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['three_cityid']]): ?>
   	 	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'three_cityid'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['three_cityid']]; ?>
</a> 	
     <?php endif; ?>
    <?php if ($_GET['sdate']): ?>
   		<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'sdate'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['sdatename'][$_GET['sdate']]; ?>
</a>
    <?php endif; ?>
    <?php if ($_GET['salary']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'salary'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['comclass_name'][$_GET['salary']]; ?>
</a>
    <?php endif; ?>
    <?php if ($_GET['edu']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'edu'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['comclass_name'][$_GET['edu']]; ?>
</a>
    <?php endif; ?> 
    <?php if ($_GET['exp']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'exp'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['comclass_name'][$_GET['exp']]; ?>
</a>
    <?php endif; ?> 
    <?php if ($_GET['sex']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'sex'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['comclass_name'][$_GET['sex']]; ?>
</a>
    <?php endif; ?> 
    <?php if ($_GET['type']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'type'), $this);?>
" class="Search_jobs_c_a"><?php echo $this->_tpl_vars['comclass_name'][$_GET['type']]; ?>
</a>
    <?php endif; ?> 
    <?php if ($_GET['keyword']): ?>
    	<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'keyword'), $this);?>
" class="Search_jobs_c_a"><?php echo $_GET['keyword']; ?>
</a>
    <?php endif; ?> 
 </div>
 <div class="Search_jobs_det">
 	<a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
" class="png">清空筛选项</a>
  </div>
 </div>
  </div>
 <?php endif; ?>
    </div> 
<div class="search_h1_box">
<div class="search_h1_box_title">
<ul class="search_h1_box_list">
<li <?php if ($_GET['urgent'] == '' && $_GET['rec'] == ''): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">所有职位</a></li>
<li <?php if ($_GET['urgent']): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "urgent:1"), $this);?>
">紧急职位</a></li>     
<li <?php if ($_GET['rec']): ?>class="search_h1_box_cur"<?php endif; ?>><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "rec:1"), $this);?>
">推荐职位</a></li>  
</ul> 
<div class="jobs_tag">
你是不是想找：<?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?> <a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
" class="jos_tag_a" title="<?php echo $this->_tpl_vars['keylist']['key_title']; ?>
"><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </div>
</div>
<div class="search_Filter">
<span class="yun_search_tit"><i></i>排序</span>
<ul class="search_Filter_list">
<li <?php if ($this->_tpl_vars['getinfo']['order'] == 'lastdate'): ?>class="search_Filter_current"<?php endif; ?>><a href="<?php echo seacrh_url(array('m' => 'com','order' => 'lastdate','untype' => 'order'), $this);?>
">更新时间<i class="search_Filter_icon"></i></a></li>
<li <?php if ($_GET['order'] == 'sdate'): ?>class="search_Filter_current"<?php endif; ?>><a href="<?php echo seacrh_url(array('m' => 'com','order' => 'sdate','untype' => 'order'), $this);?>
">发布时间<i class="search_Filter_icon"></i></a></li>
</ul>
<div class="search_Filter_Authenticate">
<a href="<?php if ($_GET['cert']): ?><?php echo seacrh_url(array('m' => 'com','untype' => 'cert'), $this);?>
<?php else: ?><?php echo seacrh_url(array('m' => 'com','cert' => 3), $this);?>
<?php endif; ?>"><div class="checkbox_job search_Filter_Authenticate_mt8 <?php if ($_GET['cert']): ?>iselect_cert<?php endif; ?>"><b></b></div><em>有执照认证</em></a></div>
<div class="JobListStyle">
<?php if ($_GET['ltype']): ?>
<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'ltype'), $this);?>
">
<img align="absmiddle" alt="按列表查看" src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_job_look_list_h.png" class="png">
<span>列表</span>
</a>
<a href="<?php echo seacrh_url(array('m' => 'com','ltype' => 1,'untype' => 'ltype'), $this);?>
">
<img align="absmiddle" alt="按明细查看" src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_job_look_h.png" class="png">
<span>明细</span>
</a>
<?php else: ?>
<a href="<?php echo seacrh_url(array('m' => 'com','untype' => 'ltype'), $this);?>
">
<img align="absmiddle" alt="按列表查看" src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_job_look_list.png" class="png">
<span>列表</span>
</a>
<a href="<?php echo seacrh_url(array('m' => 'com','ltype' => 1,'untype' => 'ltype'), $this);?>
">
<img align="absmiddle" alt="按明细查看" src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_job_look.png" class="png">
<span>明细</span>
</a>
<?php endif; ?>
</div>
</div>
</div>
<div class="left_job_all fl">
<div class="job_left_sidebar">
<div class="search_user_list_tit search_user_list_tit_bg">
<div class="search_user_list_neme search_user_list_w240">职位名称 </div>                                         
<div class="search_user_list_neme search_user_list_w230">公司名称 </div>                      
<div class="search_user_list_neme search_user_list_w100">工作地点 </div>                 
<div class="search_user_list_neme search_user_list_w100">薪资待遇 </div>        
<div class="search_user_list_neme search_user_list_w100">更新日期 </div>        
</div>
<?php $_from = $this->_tpl_vars['job_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_list']):
?>
<div class="search_job_list <?php if ($this->_tpl_vars['key']%2 != '0'): ?>search_job_list_cur<?php endif; ?>">
<div class="search_user_list_neme search_user_list_w240">
    <div class="checkbox_job" pid="<?php echo $this->_tpl_vars['job_list']['id']; ?>
"><i></i>
        <input type="checkbox" name="checkbox_job" style="display:none;" id="checkbox<?php echo $this->_tpl_vars['job_list']['id']; ?>
" value="<?php echo $this->_tpl_vars['job_list']['id']; ?>
"/>
    </div>
<a href="<?php echo $this->_tpl_vars['job_list']['job_url']; ?>
" class="search_job_jobs_name" target="_blank"><?php echo $this->_tpl_vars['job_list']['name_n']; ?>
</a>

<?php if ($this->_tpl_vars['job_list']['rec_time'] > time ( )): ?><img width="15" height="15" src="<?php echo $this->_tpl_vars['style']; ?>
/images/tui.png" title="站长推荐"/><?php endif; ?>
<?php if ($this->_tpl_vars['job_list']['urgent_time'] > time ( )): ?><img width="34" height="14" src="<?php echo $this->_tpl_vars['style']; ?>
/images/hot.gif" title="紧急招聘"/><?php endif; ?>
</div>
<div class="search_user_list_neme search_user_list_w230">
    <a href="<?php echo $this->_tpl_vars['job_list']['com_url']; ?>
" class="search_job_com_name"><?php echo $this->_tpl_vars['job_list']['com_n']; ?>
</a>
    <?php if ($this->_tpl_vars['job_list']['yyzz_status'] == '1'): ?>
    	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/cert.png" title="营业执照已审核" class="png">
    <?php endif; ?>
</div>
<div class="search_user_list_neme search_user_list_w100"><?php echo $this->_tpl_vars['job_list']['job_city_one']; ?>
-<?php echo $this->_tpl_vars['job_list']['job_city_two']; ?>
</div>        
<div class="search_user_list_neme search_user_list_w100">&nbsp;<?php echo $this->_tpl_vars['job_list']['job_salary']; ?>
 </div>        
<div class="search_user_list_neme search_user_list_w100"><span class="search_job_data"><?php echo $this->_tpl_vars['job_list']['time']; ?>
</span> </div>    
<div class="search_job_list_box" <?php if ($_GET['ltype'] == ''): ?>style="display:none"<?php endif; ?>>
	<div class="search_job_list_box_cont">
		<span class="search_job_list_box_s">公司性质：<em class="com_search_job_em"><?php echo $this->_tpl_vars['job_list']['job_pr']; ?>
</em></span> |
		<span class="search_job_list_box_s">学历要求：<em class="com_search_job_em"><?php echo $this->_tpl_vars['job_list']['job_edu']; ?>
 </em></span> |
		<span class="search_job_list_box_s">工作经验：<em class="com_search_job_em"><?php echo $this->_tpl_vars['job_list']['job_exp']; ?>
</em> </span> |
		<span class="search_job_list_box_s">公司规模：<em class="com_search_job_em"><?php echo $this->_tpl_vars['job_list']['job_mun']; ?>
</em></span> |  
		<span class="search_job_list_box_s">招聘人数：<em class="com_search_job_em"><?php echo $this->_tpl_vars['job_list']['job_number']; ?>
</em></span>
	</div>
	<div class="search_job_list_box_yq">
        <span class="search_job_list_box_s search_job_list_box_s_p ">
            任职要求：<em class="search_job_list_box_e"><?php echo ((is_array($_tmp=$this->_tpl_vars['job_list']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</em>
        </span>
    </div>    
	<?php if (is_array ( $this->_tpl_vars['job_list']['welfarename'] )): ?>
   	<div class="search_job_list_box_yq">
		<?php $_from = $this->_tpl_vars['job_list']['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wlist']):
?>
		<span class="search_job_list_box_span"><?php echo $this->_tpl_vars['wlist']; ?>
</span>
		<?php endforeach; endif; unset($_from); ?> 
	</div>
	<?php endif; ?>
    <div>   
    <div class="search_job_Apply_a">
    <a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['job_list']['id'])), $this);?>
" target="_blank" class="search_job_Apply_fast">立即申请</a>
	<a href="javascript:fav_job('<?php echo $this->_tpl_vars['job_list']['id']; ?>
','1');" class="search_job_Apply_sc">收藏</a></div> 
  <div>    </div>   
</div>
</div> 
</div>
<?php endforeach; endif; unset($_from); ?>  
<?php if ($this->_tpl_vars['total'] != 0): ?>
<div class="All_post_list fl">
<div class="checkbox_all" onclick="checkAll();"><i></i>全选（当前列表）</div>
<a id="comindex_sqjob" class="sq_post" title="申请选中职位" href="javascript:;">申请选中职位</a>
<a id="comindex_favjob" class="sq_post sq_post_sc" title="收藏选中职位" href="javascript:">收藏选中职位</a>
</div>
<div class="clear"></div>
<div class="search_pages"> 
	<div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
</div>
<input value='<?php echo $_GET['ltype']; ?>
' type='hidden' id='ltype'/>
<?php else: ?>
<!--没搜索到-->
<div class="seachno">
	<div class="seachno_left"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif" width="144" height="102"></div>
	<div class="listno-content"> <strong>很抱歉，没有找到满足条件的职位</strong><br>
	  <span> 建议您：<br>
	  1、适当减少已选择的条件<br>
	  2、适当删减或更改搜索关键字<br>
	  </span> <span> 热门关键字：<br><?php $_from = $this->_tpl_vars['klist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['klist']):
?> <a href="<?php echo $this->_tpl_vars['klist']['url']; ?>
" class="jos_tag_a" title="<?php echo $this->_tpl_vars['klist']['key_title']; ?>
"><?php echo $this->_tpl_vars['klist']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?></span> 
	 </div>
</div>
<?php endif; ?>   
</div>

</div>
    <div class="job_right_sidebar">
        <div class="job_right_box m10">
        <div class="job_right_box_h1"><span class="job_right_box_span">紧急招聘</span><a href="javascript:void(0)" onclick="exchange();" class="job_right_box_more png">换一组</a></div>
        <ul class="job_right_box_list">
		<input type="hidden" value='2' id='exchangep'/>
		<?php $_from = $this->_tpl_vars['blist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blist']):
?>
        <li>
        <a href="<?php echo $this->_tpl_vars['blist']['job_url']; ?>
" class="job_right_box_list_job"><?php echo $this->_tpl_vars['blist']['name_n']; ?>
</a>
        <a href="<?php echo $this->_tpl_vars['blist']['com_url']; ?>
" class="job_right_box_list_com"><?php echo $this->_tpl_vars['blist']['com_n']; ?>
</a>
        <span class="">薪资：<em class="job_right_box_list_c"><?php echo $this->_tpl_vars['blist']['job_salary']; ?>
 </em></span>
        </li>
		<?php endforeach; endif; unset($_from); ?>    
        </ul>
        </div>
        <div class="job_Subscribe m10">
		<div class="job_Subscribe_h1">订阅职位</div>
		  <div class="job_Subscribe_p"> 根据你的筛选条件，定期将符合你要求的职位信息发送给你</div>
	 <div class="job_Subscribe_dy"><a href="<?php echo smarty_function_url(array('m' => 'subscribe'), $this);?>
" class="job_Subscribe_a">我要订阅职位</a></div>
    </div> 
    </div>    
  </div>
 </div>
<div id="sqjob_show" style=" display:none; float:left">
  <div class="Pop-up_logoin"  style="padding:10px 20px 20px 20px;">
	<div class="Pop-up_logoin_sq" id="resume_job"> <span style="width:90px;">选择简历：</span>
	  <div class="POp_up_r"></div>
	</div>
	<div style="clear:both"></div>
	<div class="Pop-up_logoin_sq" style="margin-top:10px;"> 
	  <input id="click_comindex_sqjob" class="login_button2" style="margin-left:80px;"type="button" value=" " name="Submit">
	</div>
  </div>
</div> 

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 