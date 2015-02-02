<?php /* Smarty version 2.6.26, created on 2015-01-29 18:29:43
         compiled from default/login/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/login/index.htm', 29, false),)), $this); ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/login.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png,.login_fast,.login_box_tit .login_cur');
</script>
<![endif]--> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/reg_ajax.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/slides.jquery.js" type="text/javascript"></script>

</head>
<body>  
<div class="top">
  <div class="top_cot">
    <div class="top_cot_content">
      <div class="top_left fl">
        <div class="yun_welcome fl">欢迎来到<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
！</div>
        <span class="fl"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap" class="wap_icon">手机版</a> | <a href="<?php echo smarty_function_url(array('m' => 'subscribe'), $this);?>
">订阅</a></span> </div>
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
</div>
<div class="login_cont">
<div class="login_w960">
<div class="login_header ">
  <div class="logo fl" style="position:relative"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" class="png"></a><span class="logo_index png">回首页</span></div>
</div>
</div>
<div class="clear"></div>
<div class="logoin_banner"> 
	<div id="slides" class="s_lb">
		 <div class="slides_container"> 
		  <?php $_from = $this->_tpl_vars['ad_37']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ad_37']):
?>
            <div class="slide"><?php echo $this->_tpl_vars['ad_37']['html']; ?>
</div>
            <?php endforeach; endif; unset($_from); ?> 
		</div> 
	</div>
</div>
<div class="logoin_cont_box">
<div class="logoin_bg"></div>
<div class="login_left ">
  <div class="login_box_cont">
      <div class="login_box_h1_d"  id='usertype1'>会员登录</div>
     <div class="clear"></div>
    <div class="lgoin_box_cot"  id='login_cur'>
    <input type="hidden" id="usertype" name="usertype" value="<?php echo $this->_tpl_vars['usertype']; ?>
" />
    <div class="login_box_list logoin_re">
      <input type="text" class="login_box_bth placeholder loginname" value="<?php if ($this->_tpl_vars['loginname']): ?><?php echo $this->_tpl_vars['loginname']; ?>
<?php else: ?>用户名<?php endif; ?>" name="username" id="username">

      <div class="logoin_msg" style="display:none" id="show_name">
      <div class="logoin_msg_tx" >请填写用户名</div>
      <div class="logoin_msg_icon"></div>
      </div>

    </div>
    <div class="login_box_list logoin_re_m">
      <input type="text" id="password2" class="login_box_bth placeholder loginname loginpwd" value="密码">
	  <input type="password" id="password" name="password" class="login_box_bth placeholder loginname   loginpwd" value="" style="display:none;">
      <div class="logoin_msg" style="display:none" id="show_pass">
      <div class="logoin_msg_tx" >请填写密码</div>
      <div class="logoin_msg_icon"></div>
      </div>
    </div>
    <?php if (strpos ( $this->_tpl_vars['config']['code_web'] , "前台登陆" ) !== false): ?>
    <div class="clear"></div>
    <div class="login_box_list logoin_re_m">
    <input id="txt_CheckCode" type="text" class="login_box_bth_yz loginname  loginpyz" value="验证码" maxlength="4" name="authcode"  >
    </div>
    <div class="login_box_list_yzm"> <img id="vcode_imgs" src="include/authcode.inc.php" onclick="check_codes();"></div>
    <?php endif; ?>
    <div class="clear"></div>
    
    <div class="login_box_cz"> <span class="login_box_cz_l">
      <input type="checkbox" name="loginname" value="1" class="index_logoin_check">
      <em class="fl">记住登录状态</em></span> <a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
">忘记密码？</a> </div>
    <div class="clear"></div>
    <div class="login_box_cz">
      <input type="submit" value="登录" class="login_box_bth2" onclick="check_login();"> </div>
       <?php if ($this->_tpl_vars['config']['sy_qqlogin'] == 1 || $this->_tpl_vars['config']['sy_sinalogin'] == 1 || $this->_tpl_vars['config']['sy_wxlogin'] == 1): ?>
    <div class="login_other">
      <div class="login_other_left">其他方式登录：</div>
      <div class="login_qq">
      <?php if ($this->_tpl_vars['config']['sy_qqlogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'qqconnect','url' => "c:qqlogin"), $this);?>
"class="png">QQ登录</a>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['config']['sy_sinalogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'sinaconnect'), $this);?>
" class="log_sina png">新浪微博</a>
      <?php endif; ?>
	   <?php if ($this->_tpl_vars['config']['sy_wxlogin'] == 1): ?>
      <a href="<?php echo smarty_function_url(array('m' => 'wxconnect'), $this);?>
" class="log_wx png">微信扫一扫</a>
      <?php endif; ?>
	  </div>
    </div>
    <?php endif; ?>
  </div>
 </div>
</div>
<dl class="login_list">
<dt><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img1.png" class="png"></dt>
<dd>
<div class="login_list_h1">强大的招聘平台</div>
<div class="login_list_p">提供快捷、高效、可靠地网上招聘</div>
</dd>
</dl>
<dl class="login_list">
<dt><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img2.png" class="png"></dt>
<dd>
<div class="login_list_h1">收获职业机会</div>
<div class="login_list_p">好机会主动找上你，成就职业成功
</div>
</dd>
</dl>
<dl class="login_list">
<dt><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/log_img3.png" class="png"></dt>
<dd>
<div class="login_list_h1">打造职业形象</div>
<div class="login_list_p">创建职业档案，持续展示自己的优势
</div>
</dd>
</dl>
</div>
</div>

<script>

$(document).ready(function(){
	$("#slides").slides({
		preload: true,
		preloadImage: '<?php echo $this->_tpl_vars['style']; ?>
/images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	}); 
	
	$("#username").focus(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue){$(this).val("");}
	}).blur(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue||$(this).val()==""){$(this).val(this.defaultValue);}
	});
	$("#txt_CheckCode").focus(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue){$(this).val("");}
	}).blur(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue||$(this).val()==""){$(this).val(this.defaultValue);}
	});
	$("#password2").focus(function(){
		$("#password").show();
		$("#password").focus();
		$("#password2").hide();
	})
	$("#password").blur(function(){
		if($("#password").val()==""){
			$("#password2").show();
			$("#password").hide();
		}
	})
});
        
</script>
<style> 
.icon2 {
    background-image:none;
    background-repeat: no-repeat;
}
.foot{ margin-top:0px;}
#slides { 
    height: 410px;
    position: relative;
}
.slides_container { 
    height: 410px;
    overflow: hidden;
    position: relative;
} 
.slides_container div.slide {
    display: block;
    height: 410px;
}
.slides_container img {
    display: block;
    height: 410px;
}
#slides .prev {
    float: left;
    margin-right: 5px;
}
#slides .next {
    float: left;
    margin-right: 5px;
}
.pagination {
    bottom: 15px;
    list-style: outside none none;
    margin: 6px 0 0;
    position: absolute;
    left: 48%;
    z-index: 9999;
}
.pagination li {
    float: left;
    margin: 0 1px;
}
.pagination li a {
    background-image: url("<?php echo $this->_tpl_vars['style']; ?>
/images/circle.png");
    background-position: 0 0;
    display: block;
    float: left;
    height: 0;
    overflow: hidden;
    padding-top: 13px;
    width: 13px;
}
.pagination li.current a, .pagination li.current a:hover {
    background-position: -16px 0;
}
.pagination li a:hover {
    background-position: 0 0;
}
#slides a:link, #slides a:visited {
    color: #333;
}
#slides a:hover, #slides a:active {
    color: #9e2020;
}
.index_banner_cont {
    width: 990px;
} 
</style>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>