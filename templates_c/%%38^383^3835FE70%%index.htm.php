<?php /* Smarty version 2.6.26, created on 2015-02-01 04:13:40
         compiled from default/forgetpw/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/forgetpw/index.htm', 31, false),)), $this); ?>
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
    <div class="clear"></div>
<div class="pwdmain">
<div class="pwdmain_cont">
<div class="pwdmain_title_r">找回密码</div>
    <div class="getpwd">
        <div class="pwdcon">
            <div class="pwdalert"> 请输入您登录时所使用的账号。 </div>
            <div class="pwdemail" >
				<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
                <form action="<?php echo smarty_function_url(array('m' => 'forgetpw','url' => "c:editpw"), $this);?>
" method="post" onkeydown="if(event.keyCode==13){return false;}" onsubmit="return forgetpw();" target="supportiframe">
                <ul>
                <li>
                    <span>用户名：</span>
                    <input id="username" type="text" name="username" value="" class="fedcon_text">
                  </li>
				  <li>
                    <span>新密码：</span>
                    <input id="password" type="password" name="pass" value="" class="fedcon_text">
                  </li>
                        <li><span>验证码：</span>
                    <input id="txt_CheckCode"  type="text" style="width:80px;" maxlength="6" name="code" class="fedcon_text">
						<a href="javascript:void(0);" onclick="send_str();">获取验证码</a>
                      </li>
                    <li> <span>&nbsp;</span> <input class="pwdsub" type="submit" value="取回密码" name="pwd_add">    </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<script>
function forgetpw(){
	var aucode = $.trim($("#txt_CheckCode").val());
	var username =  $.trim($("#username").val());
	var pass =  $.trim($("#password").val());
	if(username==""){
		layer.msg('请填写你注册时的用户名！', 2,8);return false;    
	}
	if(pass==""){
		layer.msg('请填写您的新密码', 2,8);return false;   
	}else if(pass.length<6 || pass.length>20 ){
		layer.msg('只能输入6至20位密码！', 2,8);return false;  
	}
	if(aucode==""){
		layer.msg('验证码不能为空！', 2,8);return false; 
	}
	return true;
}
function send_str(){
	 var username = $("#username").val();
	 if($.trim(username)=="") {
		layer.msg('请填写您注册时的用户名！', 2, 8);return false;
	 }else{
		layer.load('正在发送验证码....',0);
		$.post('index.php?m=forgetpw&c=sendstr',{username:username},function(data){
			var data=eval('('+data+')');
			layer.closeAll();
			layer.msg(data.msg, 2,Number(data.type));return false;
		});
	 }
}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>