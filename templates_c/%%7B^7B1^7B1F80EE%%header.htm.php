<?php /* Smarty version 2.6.26, created on 2015-01-29 18:34:10
         compiled from ../template/member/com/header.htm */ ?>
<!DOCTYPE span PUBLIC "-//W3C//DTD span 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>��ҵ�û���̨����ϵͳ - <?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 - Powered by PHPYun.</title>
<meta http-equiv=Content-Type content="text/span; charset=gb2312"> 
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png,.flow_step_no1 .step_1 span, .flow_step_no2 .step_2 span, .flow_step_no2 .step_v2 span, .flow_step_no3 .step_3 span, .flow_step_no4 .step_4 span,.flow_step li,.flow_step_no1 .step_v2 span,.Tip_Information_k,.Tip_Information_jt,.Tip_Information_close,.Tip_Information_gl,.Tip_Information_jt2,.Recruitment_fb');
</script>
<![endif]-->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script> 
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js"></script>  
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/member_public.js"></script> 
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js"></script>
<link href="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/m_style.css" type="text/css" rel="stylesheet">
<meta content="MSHTML 6.00.6000.16939" name=GENERATOR> 
<script>
var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
'; 
var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";  
</script>
</head>
<body>
<div class="header_top_main">
<div class="w950">
<div class="header_top_main_left" style="float:left; line-height:30px;">��ӭ����<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
��</div>

<div class="top_right_re fr">
<div class="top_right">

<div class="yun_topNav fr"><a class="yun_navMore" href="javascript:;">��վ����</a>
<div class="yun_webMoredown" style="display: none;">
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
  </div><?php if ($this->_tpl_vars['cookie']['remind_num'] > 0): ?>
<div class="header_Remind fr header_Remind_hover"> <em class="header_Remind_em "><i class="header_Remind_msg"></i></em>
      <div class="header_Remind_list" style="display:none;">
      <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=hr" class="fl">ְλ����</a>  
      <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['userid_job']; ?>
)</span></div>
      <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/index.php?c=applyfriend"class="fl">��������</a>  <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['friend2']; ?>
)</span></div>
      <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=xin"class="fl"> վ����</a><span class="header_Remind_list_r fr">  (<?php echo $this->_tpl_vars['cookie']['friend_message2']; ?>
)</span></div>
      <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=sysnews"class="fl"> ϵͳ��Ϣ</a>  <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['sysmsg2']; ?>
)</span></div>
     <div class="header_Remind_list_a"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=msg"class="fl">��ְ��ѯ</a> <span class="header_Remind_list_r fr">(<?php echo $this->_tpl_vars['cookie']['commsg']; ?>
)</span> </div>
   </div>
</div> 
 <?php endif; ?>
<div class=" fr" style="margin-top:8px;">���ã�<font color="#FF0000"><?php echo $this->_tpl_vars['username']; ?>
</font><a  href="javascript:void(0)" onclick="logout('index.php?act=logout')">[��ȫ�˳�]</a>&nbsp;&nbsp;

</div>
</div>
</div>
</div>
</div>
<div class="header">
  <div class="w950">
    <div class="header-logo mt10 fltL"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_logo']; ?>
" class="png" ></a></div>
    <div class="header_seach fltR">
      <form method="get" action="../index.php" onSubmit="return search_keyword(this);">
        <input name="m" type="hidden" value="user">
        <input name="c" type="hidden" value="search">
        <input type="text" id="keyword" name="keyword" value="������ؼ���" onclick="if(this.value=='������ؼ���'){this.value=''}" onblur="if(this.value==''){this.value='������ؼ���'}" class="he_input placeholder" placeholder="������ؼ���">
        <input type="submit" value=" " class="he_submit">
      </form>
    </div>
  </div>
  <div class="header_nav w950">
    <div class="header_nav_cont">
      <ul>
        <li	<?php if ($this->_tpl_vars['js_def'] == 1): ?> class=cur<?php endif; ?>><a href="index.php?c=index">������ҳ</a> </li>
        <li	<?php if ($this->_tpl_vars['js_def'] == 2): ?> class=cur<?php endif; ?>><a href="index.php?c=info">��ҵ����</a> </li>
        <li	<?php if ($this->_tpl_vars['js_def'] == 3): ?> class=cur<?php endif; ?>><a href="index.php?c=job&w=1">��Ƹ����</a> </li>
        <li	<?php if ($this->_tpl_vars['js_def'] == 5): ?> class=cur<?php endif; ?>><a href="index.php?c=hr">�˲Ź���</a> </li>
        <li	<?php if ($this->_tpl_vars['js_def'] == 4): ?> class=cur<?php endif; ?>><a href="index.php?c=com">�������</a> </li>
        <li	<?php if ($this->_tpl_vars['js_def'] == 6): ?> class=cur<?php endif; ?>><a href="index.php?c=vs">ϵͳ����</a> </li>
        <li	<?php if ($this->_tpl_vars['js_def'] == 7): ?> class=cur<?php endif; ?>><a href="index.php?c=seemessage">��������</a> </li>
      </ul>
      <div class="header_nav_r">
      <a href="index.php?c=jobadd" title="����ְλ"  class="header_nav_fb">����ְλ</a> 
      <i class="fltL">&nbsp;| &nbsp; </i>
      <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
" class="fltL" target="_blank">��վ��ҳ</a>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div> 