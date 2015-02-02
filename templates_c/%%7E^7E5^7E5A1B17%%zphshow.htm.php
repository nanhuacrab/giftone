<?php /* Smarty version 2.6.26, created on 2015-01-29 18:54:35
         compiled from default/zph/zphshow.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/zph/zphshow.htm', 56, false),)), $this); ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/popImage.css" type="text/css"> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery.popImage.mini.js" language="javascript"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
<div class="current_Location icon  png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="">招聘会</a> </div>
<div class="job_fairs fl">
<div>
<div class="job_fairs_Fillet_t job_fairs_Fillet_icon  icon png"></div>
<div class="job_fairs_Fillet_b job_fairs_Fillet_icon  icon png"></div>
<div class="job_fairs_Fillet_rt job_fairs_Fillet_icon  icon png"></div>
<div class="job_fairs_Fillet_rb job_fairs_Fillet_icon  icon png"></div>
</div>
<div class="job_fairs_box fl ">
<div class="job_fairs_box_left fl">
<?php if ($this->_tpl_vars['Info']['stime'] < '0' && $this->_tpl_vars['Info']['etime'] > '0'): ?>
	<div class="job_fairs_In fairs_Status png" >进行中</div>
<?php elseif ($this->_tpl_vars['Info']['etime'] < '0'): ?>
	<div class="job_fairs_end fairs_Status png" >已结束</div>
<?php else: ?>
	<div class="job_fairs_nostart fairs_Status png" >未开始</div>
<?php endif; ?>
<div class="job_fairs_box_h1 title<?php echo $this->_tpl_vars['Info']['id']; ?>
" ><?php echo $this->_tpl_vars['Info']['title']; ?>
</div>
    <div class="">
        <ul class="job_fairs_box_ul">
            <li><span>★ 主 办 方：</span><?php echo $this->_tpl_vars['Info']['organizers']; ?>
</li>
            <li><span>★ 举办时间：</span><?php echo $this->_tpl_vars['Info']['starttime']; ?>
至<?php echo $this->_tpl_vars['Info']['endtime']; ?>
</li>
            <li><span>★ 举办会场：</span><?php echo $this->_tpl_vars['Info']['address']; ?>
</li>
            <li><span>★ 咨询电话：</span><?php echo $this->_tpl_vars['Info']['phone']; ?>
 </li>
            <li><span>★ 联 系 人：</span><?php echo $this->_tpl_vars['Info']['user']; ?>
</li>
            <li><span>★ 交通路线：</span><?php echo $this->_tpl_vars['Info']['traffic']; ?>
</li>
        </ul>
    </div>
    <div class="job_fairs_sub">
        <a href="javascript:;" id="zphstatus" pid="<?php echo $this->_tpl_vars['Info']['id']; ?>
" stime="<?php echo $this->_tpl_vars['Info']['stime']; ?>
" etime="<?php echo $this->_tpl_vars['Info']['etime']; ?>
" class="fairs_yd yun_bth" onclick="get_zph(<?php echo $this->_tpl_vars['Info']['id']; ?>
)"><!--企业预定--></a>
        <a href="<?php echo smarty_function_url(array('m' => 'zph','url' => "c:com,id:".($this->_tpl_vars['Info']['id'])), $this);?>
" class="fairs_ch yun_bth"><!--参会企业--></a>
		<input id="zph_etime_<?php echo $this->_tpl_vars['Info']['id']; ?>
" value='<?php echo $this->_tpl_vars['Info']['etime']; ?>
' type="hidden"/>
		<input id="zph_stime_<?php echo $this->_tpl_vars['Info']['id']; ?>
" value='<?php echo $this->_tpl_vars['Info']['stime']; ?>
' type="hidden"/>
    </div>

</div>
<div class="job_fairs_box_right fr">
<img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['Info']['pic']; ?>
" width="262" height="231">
</div>
</div>
</div>
<div class="fairs_introduction fl">
<?php if ($this->_tpl_vars['Info']['body']): ?>
<div class="fairs_introduction_h1"><span class="icon png">招聘会介绍</span></div>
<div class="fairs_introduction_p">
<?php echo $this->_tpl_vars['Info']['body']; ?>

</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['Info']['media']): ?>
<div class="fairs_introduction_h1"><span class="icon png"> 媒体宣传</span></div>
<div class="fairs_introduction_p">
<?php echo $this->_tpl_vars['Info']['media']; ?>

</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['Info']['packages']): ?>
<div class="fairs_introduction_h1"><span class="icon png" >超值服务套餐</span></div>
<div class="fairs_introduction_p">
<?php echo $this->_tpl_vars['Info']['packages']; ?>

</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['Info']['booth']): ?>
<div class="fairs_introduction_h1"><span class="icon png">展位设置方案</span></div>
<div class="fairs_introduction_p">
<?php echo $this->_tpl_vars['Info']['booth']; ?>

</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['Info']['participate']): ?>
<div class="fairs_introduction_h1"><span class="icon png">参与办法</span></div>
<div class="fairs_introduction_p">
	<?php echo $this->_tpl_vars['Info']['participate']; ?>

</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['Image_info']): ?>
<div class="fairs_introduction_h1"><span class="icon png">展会图片</span></div>
    <div class="fairs_introduction_p" >
        <ul class="fairs_introduction_img" id="rolling_img1">
            <?php unset($this->_sections['zph']);
$this->_sections['zph']['name'] = 'zph';
$this->_sections['zph']['loop'] = is_array($_loop=$this->_tpl_vars['Image_info']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['zph']['show'] = true;
$this->_sections['zph']['max'] = $this->_sections['zph']['loop'];
$this->_sections['zph']['step'] = 1;
$this->_sections['zph']['start'] = $this->_sections['zph']['step'] > 0 ? 0 : $this->_sections['zph']['loop']-1;
if ($this->_sections['zph']['show']) {
    $this->_sections['zph']['total'] = $this->_sections['zph']['loop'];
    if ($this->_sections['zph']['total'] == 0)
        $this->_sections['zph']['show'] = false;
} else
    $this->_sections['zph']['total'] = 0;
if ($this->_sections['zph']['show']):

            for ($this->_sections['zph']['index'] = $this->_sections['zph']['start'], $this->_sections['zph']['iteration'] = 1;
                 $this->_sections['zph']['iteration'] <= $this->_sections['zph']['total'];
                 $this->_sections['zph']['index'] += $this->_sections['zph']['step'], $this->_sections['zph']['iteration']++):
$this->_sections['zph']['rownum'] = $this->_sections['zph']['iteration'];
$this->_sections['zph']['index_prev'] = $this->_sections['zph']['index'] - $this->_sections['zph']['step'];
$this->_sections['zph']['index_next'] = $this->_sections['zph']['index'] + $this->_sections['zph']['step'];
$this->_sections['zph']['first']      = ($this->_sections['zph']['iteration'] == 1);
$this->_sections['zph']['last']       = ($this->_sections['zph']['iteration'] == $this->_sections['zph']['total']);
?>
            <li>
                <a class="image_gall" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['Image_info'][$this->_sections['zph']['index']]['pic']; ?>
">
                    <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['Image_info'][$this->_sections['zph']['index']]['pic']; ?>
" width="215" height="153" />
                </a>
            </li>
            <?php endfor; endif; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/ScrollPic.js" language="javascript"></script>
 <SCRIPT language="javascript" type="text/javascript">
<!--//--><![CDATA[//><!--

var li_num=$("#rolling_img1 li").length;
if(li_num>4){
	var scrollPic_02 = new ScrollPic();
	scrollPic_02.scrollContId   = "rolling_img1"; 
	scrollPic_02.arrLeftId      = "LeftArr";
	scrollPic_02.arrRightId     = "RightArr"; 
	scrollPic_02.frameWidth     = 980;
	scrollPic_02.pageWidth      = 242;
	scrollPic_02.speed          = 10;
	scrollPic_02.space          = 10;
	scrollPic_02.autoPlay       = true;
	scrollPic_02.autoPlayTime   = 2;
	scrollPic_02.initialize();
}
//--><!]]> 
$(function(){
	$("a.image_gall").popImage();
})
</SCRIPT> 
</div> 
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