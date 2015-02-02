<?php /* Smarty version 2.6.26, created on 2015-01-29 18:24:49
         compiled from default/zph/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sublen', 'default/zph/index.htm', 47, false),array('function', 'url', 'default/zph/index.htm', 56, false),)), $this); ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/yun_job_fairs.css" type="text/css">
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
<div class="current_Location icon png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > 招聘会 </div>

<?php $_from = $this->_tpl_vars['zph']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zph']):
?>
    <div class="job_fairs fl">
        <div>
            <div class="job_fairs_Fillet_t job_fairs_Fillet_icon icon png"></div>
            <div class="job_fairs_Fillet_b job_fairs_Fillet_icon  icon png"></div>
            <div class="job_fairs_Fillet_rt job_fairs_Fillet_icon  icon png"></div>
            <div class="job_fairs_Fillet_rb job_fairs_Fillet_icon  icon png"></div>
        </div>
    <div class="job_fairs_box fl ">
        <div class="job_fairs_box_left fl">
            <?php if ($this->_tpl_vars['zph']['stime'] < '0' && $this->_tpl_vars['zph']['etime'] > '0'): ?>
                <div class="job_fairs_In fairs_Status png">进行中</div>
            <?php elseif ($this->_tpl_vars['zph']['etime'] < '0'): ?>
                <div class="job_fairs_end fairs_Status png">已结束</div>
            <?php else: ?>
                <div class="job_fairs_nostart fairs_Status png">未开始</div>
            <?php endif; ?>
            <div class="job_fairs_box_h1 title<?php echo $this->_tpl_vars['zph']['id']; ?>
">
            <a href="index.php?m=zph&c=show&id=<?php echo $this->_tpl_vars['zph']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['zph']['title']; ?>
</a>
            </div>
            <div class="job_fairs_box_p">
            <?php echo sublen(array('str' => $this->_tpl_vars['zph']['body'],'length' => '190'), $this);?>
...
            </div>
            <ul class="job_fairs_box_ul">
            <li><span>★ 时　　间：</span><?php echo $this->_tpl_vars['zph']['starttime']; ?>
至<?php echo $this->_tpl_vars['zph']['endtime']; ?>
</li>
            <li><span>★ 举办会场：</span><?php echo $this->_tpl_vars['zph']['address']; ?>
</li>
            <li><span>★ 主 办 方：</span><?php echo $this->_tpl_vars['zph']['organizers']; ?>
</li>
            </ul>
            <div class="job_fairs_sub">
             <a href="javascript:;" class="fairs_yd yun_bth" pid="<?php echo $this->_tpl_vars['zph']['id']; ?>
" stime="<?php echo $this->_tpl_vars['zph']['stime']; ?>
" etime="<?php echo $this->_tpl_vars['zph']['etime']; ?>
" class="zphstatus" onclick="get_zph(<?php echo $this->_tpl_vars['zph']['id']; ?>
);"><!--企业预定--></a>
             <a href="<?php echo smarty_function_url(array('m' => 'zph','url' => "c:com,id:".($this->_tpl_vars['zph']['id'])), $this);?>
" class="fairs_ch yun_bth"><!--参会企业--></a>
             <a href="<?php echo smarty_function_url(array('m' => 'zph','url' => "c:show,id:".($this->_tpl_vars['zph']['id'])), $this);?>
" class="fairs_xq yun_bth"><!--查看详情--></a>
			 <input id="zph_etime_<?php echo $this->_tpl_vars['zph']['id']; ?>
" value='<?php echo $this->_tpl_vars['zph']['etime']; ?>
' type="hidden"/>
			 <input id="zph_stime_<?php echo $this->_tpl_vars['zph']['id']; ?>
" value='<?php echo $this->_tpl_vars['zph']['stime']; ?>
' type="hidden"/>
             </div>
        </div>
        <div class="job_fairs_box_right fr">
        <a href="index.php?m=zph&c=show&id=<?php echo $this->_tpl_vars['zph']['id']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['zph']['pic']; ?>
" width="262" height="231"></a>
        </div>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['total']): ?>
<div class="seachno">
        <div class="seachno_left"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif"></div>
        <div class="listno-content"> <strong>很抱歉，没有找到满足条件的招聘会</strong><br>
	 </div>
</div>
<?php else: ?>
<div class="clear"></div>
<div class="search_pages"> 
	<div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
</div>
<?php endif; ?>

<div id="TB_window" style=" display: none;" class="Corporate_box">
	<div id="error_zph" class="error_zph"></div>
	<div id="TB_ajaxContent" class="Corporate_box_cont" style="padding:10px;">
		<input name="pid" value="0" type="hidden">
		<input name="uid" value="0" type="hidden">
		<div class="zph_tck_box_close">参与的招聘会名称：</div>
		<div class="zph_tck_box_bg" style="padding:5px; margin-top:5px; ">
		<span id="zph_name">正在获取...</span>
        </div>
		<div class="zph_tck_box_close_post">
		<div class="zph_tck_box_close">选择参与招聘会的职位：</div>
		<div id="joblist" class="zph_tck_post" style="padding-bottom:10px;"></div>
		</div>
		<div class="Corporate_box_sub" style="margin-top: 10px; padding-left: 150px;">
		<input type='button' value="提交" onclick="clickzph()" class="Corporate_box_tj"/>
		</div>
	</div>
</div>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>