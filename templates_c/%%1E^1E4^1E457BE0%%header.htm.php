<?php /* Smarty version 2.6.26, created on 2015-01-29 18:29:55
         compiled from ../template/member/user/header.htm */ ?>
<!DOCTYPE HTML PUBliC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE>个人用户管理平台 - <?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 - Powered by PHPYun.</TITLE>
<meta http-equiv=Content-Type content="text/html; charset=GBK">
<SCRIPT type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/setday.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/member_public.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js"></SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js"></SCRIPT>
<link href="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/m_css.css" type="text/css" rel="stylesheet">
<link href="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/m_header.css" type="text/css" rel="stylesheet">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.#bg');
</script>
<![endif]-->
<meta content="MSHTML 6.00.6000.16939" name="Generator">
</head>
<BODY>
<script>
var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";
</script>
<div class="header">
   
  <div class="w950">
    <div class="logo mt10 fltL"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
" target="_blank" title='返回网站首页'><IMG alt="<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_logo']; ?>
" class="png"></a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
" target="_blank" title='返回网站首页'class="member_logo_fh"></a> </div>
    
    <div class="top_right_re fltR">
<div class="top_right">
    <div class="yun_topNav fr"> <a class="yun_navMore png" href="javascript:void(0)">网站导航</a>
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
        <?php if ($this->_tpl_vars['cookie']['remind_num'] > 0): ?>
 <div class="header_Remind fr header_Remind_hover" style=" margin-top:13px;"> <em class="header_Remind_em "><i class="header_Remind_msg"></i></em>  
      <div class="header_Remind_list" style="display:none;">
     <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=msg" class="fl">邀请面试</a> <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['userid_msg']; ?>
)</span></div>
     <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/index.php?c=applyfriend" class="fl">邀请好友</a> <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['friend1']; ?>
)</span></div>
      <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=xin" class="fl">站内信</a> <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['friend_message1']; ?>
)</span></div>
      <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=sysnews" class="fl">系统消息 </a><span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['sysmsg1']; ?>
)</span></div>
     <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=commsg" class="fl">企业回复咨询</a> <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['usermsg']; ?>
)</span></div>
      </div>
      </div>
       <?php endif; ?>      <div class="header_seach_State fltR">  <span class="header_seach_State_name">你好！<?php echo $this->_tpl_vars['username']; ?>
</span>| <a  href="javascript:void(0)" onClick="logout('index.php?act=logout')" class="header_seach_State_a">退出登录</a> </div>
  </div>
</div>
  </div>
</div>