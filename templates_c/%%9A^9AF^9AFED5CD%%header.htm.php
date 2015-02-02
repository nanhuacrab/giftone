<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:54
         compiled from E:%5Chtdocs%5Cgift11/template/friend/default/header.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'furl', 'E:\\htdocs\\gift11/template/friend/default/header.htm', 63, false),array('function', 'aurl', 'E:\\htdocs\\gift11/template/friend/default/header.htm', 66, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
-<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['friend_style']; ?>
/style/css.css" type="text/css">
<script>
var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";
</script>
<script src="<?php echo $this->_tpl_vars['friend_style']; ?>
/js/reply.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script>
function search_keyword(){
	var keyword=$("#keyword").val();
	if(keyword=="搜索好友..."){
		layer.msg('请输入需要搜索的关键字', 2,8);
		return false;
	}
}
</script>
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.adv_cot,.friend_mune .nav-shadow i');
</script>
<![endif]-->
</head>
<body>
<div class="top icon3">
  <div class="top_cot">
    <div class="top_left fl">欢迎来到<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
！&nbsp;&nbsp;</div>
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
<div class="friend_header ">
  <div class="friend_logo"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_logo']; ?>
"  class="png"></a></div>
  <div class="friend_mune">
  <i class="tl"></i>
  <i class="tr"></i>
  <i class="bl"></i>
  <i class="br"></i>
  <i class="nav-shadow"><i></i></i>
    <div class="friend_mune_cont">
      <ul>
        <li <?php if ($this->_tpl_vars['class'] == 1): ?>class="answers_current"<?php endif; ?>><a href="<?php echo smarty_function_furl(array(), $this);?>
">首页</a></li>
        <li <?php if ($this->_tpl_vars['class'] == 2): ?>class="answers_current"<?php endif; ?>><a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['member']['uid'])), $this);?>
">个人主页</a></li>
        <li <?php if ($this->_tpl_vars['class'] == 3): ?>class="answers_current"<?php endif; ?>><a href="<?php echo smarty_function_furl(array('url' => "c:myfriend"), $this);?>
">好友</a></li>
		<li ><a href="<?php echo smarty_function_aurl(array(), $this);?>
">问答</a></li>
        <li><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">人才网首页</a></li>
      </ul>
      <div class="friend_mune_right">
        <div class="friend_seach">
        <form action="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/index.php" method="get" name="Myform" onSubmit="return search_keyword();">
        <input type="hidden" name="c" value="addfriend" />
          <input type="text" value="搜索好友..." class="friend_text placeholder" name="nm" onclick="if(this.value=='搜索好友...'){this.value=''}" onblur="if(this.value==''){this.value='搜索好友...'}" id="keyword">
          <input type="submit" value="" class="friend_submit">
        </form>
        </div>
      </div>
    </div>
  </div>
</div>