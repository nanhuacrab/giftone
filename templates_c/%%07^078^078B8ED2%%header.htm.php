<?php /* Smarty version 2.6.26, created on 2015-01-29 21:33:53
         compiled from E:%5Chtdocs%5Cgift11/template/ask/header.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'E:\\htdocs\\gift11/template/ask/header.htm', 55, false),array('function', 'furl', 'E:\\htdocs\\gift11/template/ask/header.htm', 58, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
 - Powered by PHPYun.</title>
<META name=keywords content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name=description content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ask_style']; ?>
/style/css.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.answers_feed-meta a,.answers_right_sidebar-nav li a,.topic_list_top .answer_gz,.icon2,.ask_icon3');
</script>
<![endif]-->
<script>
var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"; 
</script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['ask_style']; ?>
/js/question.js" language="javascript"></script> 
</head>
<body>
<div class="answers_top">
  <div class="answers_top_cont">
    <div class="answers_top_left">
		欢迎来到<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
！&nbsp;&nbsp;
	</div>
       <div class="top_right_re fr">
        <div class="top_right">
          <div class="yun_topNav fr"> <a class="yun_navMore" href="javascript:;">网站导航</a>
            <div class="yun_webMoredown" style="display:none">
              <div class="yun_top_nav_box"> <?php $_from = $this->_tpl_vars['navmap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['navmap']):
?>
                <div class="yun_top_nav_h1"><a href="<?php echo $this->_tpl_vars['navmap']['url']; ?>
" <?php if ($this->_tpl_vars['navmap']['eject']): ?> target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['navmap']['name']; ?>
</a></div>
                <ul>
                  <?php $_from = $this->_tpl_vars['navmap']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['maplist']):
?>
                  <li><a href="<?php echo $this->_tpl_vars['maplist']['url']; ?>
" <?php if ($this->_tpl_vars['maplist']['eject']): ?> target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['maplist']['name']; ?>
</a></li>
                  <?php endforeach; endif; unset($_from); ?>
                </ul>
                <?php endforeach; endif; unset($_from); ?> </div>
            </div>
          </div>
        
        
	<SCRIPT LANGUAGE='JavaScript' src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=includejs&c=RedLoginHead'></SCRIPT>
   </div>
      </div>
  </div>
</div>

<div class="answers_header">
	<div class="answers_logo"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" class="png"></a> </div>
	<div class="answers_mune">
		<ul>
			<li <?php if ($this->_tpl_vars['c'] == 'index'): ?>class="answers_current"<?php endif; ?>><a href="<?php echo smarty_function_aurl(array(), $this);?>
">首页</a></li>
			<li <?php if ($this->_tpl_vars['c'] == 'topic'): ?>class="answers_current"<?php endif; ?>><a href="<?php echo smarty_function_aurl(array('url' => "c:topic"), $this);?>
" >话题 </a></li>
			<li <?php if ($this->_tpl_vars['c'] == 'topic_cont'): ?>class="answers_current"<?php endif; ?>><a href="<?php echo smarty_function_aurl(array('url' => "c:hotweek"), $this);?>
">一周热点</a></li>
			<li ><a href="<?php echo smarty_function_furl(array(), $this);?>
">朋友圈</a></li>
			<li ><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">人才网首页</a></li>
		</ul>
		<div class="answers_mune_right">
			<div class="answers_seach">
				<form action="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php" method="get" >
				<input type="hidden" value="search" name='c'>
				<input type="text" value="<?php echo $this->_tpl_vars['search_title']; ?>
" class="answers_text" name='search_title'>
				<input type="submit" value="" class="answers_submit">
				</form>
			</div>
			<div class="answers_mune_right_tw">
				<?php if ($this->_tpl_vars['uid']): ?>
				<a href="<?php echo smarty_function_aurl(array('url' => "c:addquestion"), $this);?>
"><img src="<?php echo $this->_tpl_vars['ask_style']; ?>
/images/ask_tw.png"></a>
				<?php else: ?>
				<a href="javascript:void(0);" onclick="layer.msg('请先登录！', 2, 8);return false; "><img src="<?php echo $this->_tpl_vars['ask_style']; ?>
/images/ask_tw.png"></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>