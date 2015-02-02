<?php /* Smarty version 2.6.26, created on 2015-01-29 18:22:55
         compiled from default/firm/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_substr', 'default/firm/index.htm', 65, false),array('modifier', 'date_format', 'default/firm/index.htm', 67, false),array('function', 'url', 'default/firm/index.htm', 80, false),array('function', 'curl', 'default/firm/index.htm', 90, false),)), $this); ?>
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
/style/yun_seach.css" type="text/css">
<link  href="<?php echo $this->_tpl_vars['style']; ?>
/style/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon,.yun_wap_m_bg,.micro_box');
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
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script> 
$(document).ready(function(){
	$(".firm_list").hover(function(){
		var aid=$(this).attr("aid");
		$("#com"+aid).show();	
		$("#company"+aid).addClass('firm_list_cur');
	},function(){
		var aid=$(this).attr("aid");
		$("#com"+aid).hide();
		$("#company"+aid).removeClass('firm_list_cur');	
	})   
})
</script>
<!--content  start-->
<div class="yun_content">
  <div class="current_Location icon png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <span>企业黄页</span> </div>
  <div class="clear"></div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/public_search/firm_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/search.js" type="text/javascript"></script>
    <div class="firm_right">
      <div class="firm_right_seach">
        <div class="firm_seach_r">
          <form method="get" name="myform" onsubmit="return search_keyword(this);" action="index.php">
            <input type="hidden" name="m" value="firm">
            <input class="tykeywords placeholder" id="ipt" type="text" value="<?php if ($this->_tpl_vars['getinfo']['keyword'] != ""): ?><?php echo $this->_tpl_vars['getinfo']['keyword']; ?>
<?php else: ?>请输入关键字<?php endif; ?>" name="keyword" onclick="if(this.value=='请输入关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入关键字'}" placeholder='请输入关键字'>
            <input class="ty_button placeholder" type="button" id="city" placeholder='请选择城市' value="请选择城市" onclick="index_city();">
            <input type="hidden" name="cityid" id="cityid" />
            <input class="tysubmit" type="submit" value="搜索 ">
          </form>
        </div>
         <div class="clear"></div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/public_search/index_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="firm_hot-tags"> 热门搜索：<?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?> <a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
"><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </div>
      </div>
      <div class="clear"></div>
      <div class='firm_list_h1'>全部公司</div>
      <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
      <div class='firm_list ' id="company<?php echo $this->_tpl_vars['list']['uid']; ?>
" aid="<?php echo $this->_tpl_vars['list']['uid']; ?>
">
        <div class='firm_list_logo'><a href='<?php echo $this->_tpl_vars['list']['com_url']; ?>
'><img src="<?php echo $this->_tpl_vars['list']['logo']; ?>
" width="158" height="65"alt="<?php echo $this->_tpl_vars['list']['name']; ?>
" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_icon']; ?>
',2);"/></a></div>
        <div class='firm_post_cont'>
          <div class="firm_qy_name"><a href='<?php echo $this->_tpl_vars['list']['com_url']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 16, 'gbk') : mb_substr($_tmp, 0, 16, 'gbk')); ?>
</a></div>
          <div class="firm_qy_list"> <span >行业：<?php echo ((is_array($_tmp=$this->_tpl_vars['list']['job_hy'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 12, 'gbk') : mb_substr($_tmp, 0, 12, 'gbk')); ?>
</span> <span >性质：<?php echo $this->_tpl_vars['list']['job_pr']; ?>
</span> <span>所在地区：<?php echo $this->_tpl_vars['list']['job_city_one']; ?>
 <?php echo $this->_tpl_vars['list']['job_city_two']; ?>
</span> </div>
          <div class="firm_qy_list"> <span >规模：<em><?php echo $this->_tpl_vars['list']['job_mun']; ?>
</em></span><span >注册资金：<em><?php echo $this->_tpl_vars['list']['money']; ?>
</em>万元</span> <span >添加时间：<em><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</em></span></div>
                    <div class="firm_qy_list" style="font-weight:bold"> <span >招聘职位数：<em><?php echo $this->_tpl_vars['list']['jobnum']; ?>
</em></span> <span >公司资讯数：<em><?php echo $this->_tpl_vars['list']['newsnum']; ?>
</em></span> <span >公司环境数：<em><?php echo $this->_tpl_vars['list']['shownum']; ?>
</em></span></div>
        </div>
        <div class='firm_list_right'> <a href="javascript:void(0);" id="atn_<?php echo $this->_tpl_vars['list']['uid']; ?>
" onclick="atn('<?php echo $this->_tpl_vars['list']['uid']; ?>
');" class="crop-add-yb"><?php echo $this->_tpl_vars['list']['atn']; ?>
</a> <span><label><font id="antnum<?php echo $this->_tpl_vars['list']['uid']; ?>
"><?php echo $this->_tpl_vars['list']['ant_num']; ?>
</font>人关注 </label></span> </div>
        <?php if ($this->_tpl_vars['list']['jobnum'] > 0 || $this->_tpl_vars['list']['shownum'] > 0): ?>
        <div class="firm_list_cur_box" id="com<?php echo $this->_tpl_vars['list']['uid']; ?>
" style="display:none;">
        <div class="firm_list_cur_cont">
   
      <div class="firm_list_cur_left">
      <div class="firm_list_post"> 
      <p class="firm_list_cur_p">招聘职位：</p>
      <?php if ($this->_tpl_vars['list']['jobnum'] > 0): ?>
      <?php $_from = $this->_tpl_vars['list']['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
      <a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['job']['id'])), $this);?>
"><?php echo $this->_tpl_vars['job']['name']; ?>
</a>
      <?php endforeach; endif; unset($_from); ?>
      <?php else: ?>
      <div class="firm_list_cur_right_l">暂无招聘职位</div>
      <?php endif; ?>
      </div>
      <div class="firm_list_cur_news">
      <p class="firm_list_cur_p">公司资讯：</p>
      <?php if ($this->_tpl_vars['list']['newsnum'] > 0): ?>
      <?php $_from = $this->_tpl_vars['list']['newslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
      <div class="firm_list_cur_news_list"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['list']['uid']).",tp:newsshow,nid:".($this->_tpl_vars['news']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['news']['title']; ?>
"><?php echo $this->_tpl_vars['news']['title']; ?>
</a></div>
      <?php endforeach; endif; unset($_from); ?>
      <?php else: ?>
      <div class="firm_list_cur_right_l">暂无公司资讯</div>
      <?php endif; ?>
      </div>
      </div>
      <div class="firm_list_cur_right">
      <p class="firm_list_cur_p">公司环境：</p>
      <?php if ($this->_tpl_vars['list']['shownum'] > 0): ?>
      <?php $_from = $this->_tpl_vars['list']['showlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['show']):
?>
      <div class="firm_list_cur_right_l">
      <div class="firm_list_cur_right_l_img"><img src="<?php echo $this->_tpl_vars['show']['picurl']; ?>
" width="60" height="60"></div>
       </div>
      <?php endforeach; endif; unset($_from); ?>
      <?php else: ?>
      <div class="firm_list_cur_right_l">暂无公司环境</div>
      <?php endif; ?>
      </div>
        </div>  </div>
        <?php endif; ?>
      </div>
      <?php endforeach; endif; unset($_from); ?>
      <div class="clear"></div>
	  <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
      <?php if ($this->_tpl_vars['total'] == 0): ?>
      <!-- 未搜索到-->
      <div class="seachno" style="background:#FFF; width:588px; margin-top:15px;border:none;">
        <div class="seachno_left"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif"></div>
        <div class="listno-content"> <strong>很抱歉，没有找到满足条件的企业</strong><br>
          <span> 建议您：<br>
          1、适当减少已选择的条件<br>
          2、适当删减或更改搜索关键字<br>
          </span> <span> 热门关键字：<br>
          <?php $_from = $this->_tpl_vars['top_key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['top_key']):
?> <a href="<?php echo $this->_tpl_vars['top_key']['url']; ?>
"><?php echo $this->_tpl_vars['top_key']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </span> </div>
      </div>
      <?php endif; ?> </div>
    <div class="clear"></div>
  </div>
   </div>
  <div class="clear"></div>
<!--content  end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>