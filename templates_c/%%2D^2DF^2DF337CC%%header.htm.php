<?php /* Smarty version 2.6.26, created on 2015-02-01 14:34:22
         compiled from E:%5Chtdocs%5Cgift11/template/old/header.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'E:\\htdocs\\gift11/template/old/header.htm', 6, false),)), $this); ?>
<div class="top icon3">
  <div class="top_cot">
    <div class="top_cot_content">
      <div class="top_left fl">
        <div class="yun_welcome fl">��ӭ����<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
��</div>
        <span class="fl"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap" class="wap_icon">�ֻ���</a> | <a href="<?php echo smarty_function_url(array('m' => 'subscribe'), $this);?>
">����</a></span> </div>
      <div class="top_right_re fr">
        <div class="top_right">
          <div class="yun_topNav fr"> 
		  <a class="yun_navMore" href="javascript:;">��վ����</a>
            <div class="yun_webMoredown" style="display:none">
              <div class="yun_top_nav_box"> 
			  <?php $_from = $this->_tpl_vars['navmap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
<div class="header">
  <div class="logo fl"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" class="png" width="296" height="46"></a></div>
  <div class="header_city fl"> 
    <SCRIPT LANGUAGE='JavaScript' src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=includejs&c=Site'></SCRIPT> 
  </div>
  <div class="header_seach fr">
    <form action="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php" method="get" onsubmit="return search_keyword(this);">
      <input type="hidden" name="m" value="com" />
      <div class="header_seach_find"> <span id='search_name'>�ҹ���</span>
        <div class="header_seach_find_list" style="display:none"> 
        <a href="javascript:void(0)" onclick="top_search('com','�ҹ���');$('#search').attr('name','c');">�ҹ���</a> 
        <a href="javascript:void(0)" onclick="top_search('user','���˲�');$('#search').attr('name','c');"> ���˲�</a> 
        <a href="javascript:void(0)" onclick="top_search('tiny','΢����');$('#search').attr('name','');">΢����</a> 
        <a href="javascript:void(0)" onclick="top_search('news','����');$('#search').attr('name','');" style="display:none">����</a> 
        <a href="javascript:void(0)" onclick="top_search('once','΢��Ƹ');$('#search').attr('name','');">΢��Ƹ</a> 
        </div>
      </div>
      <input type="hidden" name="c" value="search" id="search" />
      <input type="text" id="keyword" name="keyword" class="header_seach_txt icon2 placeholder" value='' placeholder='������Ҫ�����Ĺؼ���'>
      <input type="submit" value="" class="header_seach_sub">
    </form>
    <div class="header_seach_tag">�ؼ��֣�<?php $_from = $this->_tpl_vars['top_key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['top_key']):
?> <a href="<?php echo $this->_tpl_vars['top_key']['url']; ?>
"><?php echo $this->_tpl_vars['top_key']['key_name']; ?>
</a><?php endforeach; endif; unset($_from); ?> </div>
  </div>
</div>
<div class="nav icon3">
<div class="nav_bg2">
<div class="nav_cont_content icon3">
  <div class="nav_cont">
    <ul class="nav_list">
      <?php $_from = $this->_tpl_vars['navlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navlist']):
?>
      <li class="<?php echo $this->_tpl_vars['navlist']['navclass']; ?>
"> <a href="<?php echo $this->_tpl_vars['navlist']['url']; ?>
" <?php if ($this->_tpl_vars['navlist']['eject']): ?> target="_blank"<?php endif; ?>> <em></em><span style="<?php if ($this->_tpl_vars['navlist']['color']): ?>color:<?php echo $this->_tpl_vars['navlist']['color']; ?>
;<?php endif; ?><?php if ($this->_tpl_vars['navlist']['bold'] == 1): ?>font-weight:bolder;<?php endif; ?>"><?php echo $this->_tpl_vars['navlist']['name']; ?>
</span> </a>
      <div class="nav_icon">
      <?php if ($this->_tpl_vars['navlist']['model'] == 'new'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/new.gif">
      <?php elseif ($this->_tpl_vars['navlist']['model'] == 'hot'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/hotn.gif">
      <?php endif; ?></div>
      </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  <div class="nav_right_content">
  <div class="nav_right icon3">
    <div class="nav_right_a"> <?php $_from = $this->_tpl_vars['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?> <a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
" style=" position:relative;<?php if ($this->_tpl_vars['nav']['color']): ?>color:<?php echo $this->_tpl_vars['nav']['color']; ?>
;<?php endif; ?><?php if ($this->_tpl_vars['nav']['bold'] == 1): ?>font-weight:bolder;<?php endif; ?>"><?php echo $this->_tpl_vars['nav']['name']; ?>
      <div class="nav_icon">
      <?php if ($this->_tpl_vars['nav']['model'] == 'new'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/new.gif">
      <?php elseif ($this->_tpl_vars['nav']['model'] == 'hot'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/hotn.gif">
      <?php endif; ?></div></a>

    <?php endforeach; endif; unset($_from); ?> </div>
  </div>
  </div>
   </div>
    </div>
</div>
<!--header  end-->

<?php if ($this->_tpl_vars['config']['sy_header_fix'] == '1'): ?>
<!--����չʾ����-->
<div class="header_fixed" id="header_fix" style="display:none">
  <div class="header_fixed_cont">
    <ul class="header_fixed_list">
      <?php $_from = $this->_tpl_vars['nlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nlist']):
?>
      <li class="<?php echo $this->_tpl_vars['nlist']['navclass']; ?>
"><a href="<?php echo $this->_tpl_vars['nlist']['url']; ?>
" <?php if ($this->_tpl_vars['nlist']['eject']): ?> target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['nlist']['name']; ?>
</a></li>
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['nalist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nalist']):
?>
      <li class="<?php echo $this->_tpl_vars['nalist']['navclass']; ?>
"><a href="<?php echo $this->_tpl_vars['nalist']['url']; ?>
"><?php echo $this->_tpl_vars['nalist']['name']; ?>
</a></li>
      <?php endforeach; endif; unset($_from); ?>
    </ul>
    <div class="header_fixed_login"> <?php if (! $this->_tpl_vars['cookie']['username']): ?> 
      <div class="header_fixed_login_l" style="display:block"> <a href="<?php echo smarty_function_url(array('m' => 'login'), $this);?>
" style="color:#fff"><span class="header_fixed_login_dl"  did="login" style="background:none;"> ��¼
        <!--div class="header_fixed_login_box" id="login_t" style="display:none"> <a href="<?php echo smarty_function_url(array('url' => "m:login,usertype:1"), $this);?>
" class="header_fixed_login_a">���˵�¼</a> <a href="<?php echo smarty_function_url(array('url' => "m:login,usertype:2"), $this);?>
" class="header_fixed_login_a">��ҵ��¼</a> </div-->
        </span></a>|<span class="header_fixed_login_dl" did="register"> ע��
        <div class="header_fixed_reg_box" id="register_t" style="display:none"> <a href="<?php echo smarty_function_url(array('url' => "m:register,usertype:1"), $this);?>
" class="header_fixed_login_a">����ע��</a> <a href="<?php echo smarty_function_url(array('url' => "m:register,usertype:2"), $this);?>
" class="header_fixed_login_a">��ҵע��</a> </div>
        </span> </div>
      <?php else: ?>
      <div class="header_fixed_login_after">
        <div class="header_fixed_login_after_cont"> <span class="header_fixed_login_after_name"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</span>
          <div class="header_fixed_reg_box header_fixed_reg_box_ye"  style="display:none"> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php" class="header_fixed_login_a">�����Ա����</a> <a href="javascript:void(0)" onclick="logout('index.php?c=logout')" class="header_fixed_login_a">�˳���¼</a> </div>
        </div>
      </div>
      <?php endif; ?> </div>
       <div class="header_fixed_close"><a href="javascript:;" onclick="$('#header_fix').remove();">�ر�</a></div>
  </div>
 
</div>
<script language="javascript">
$(function() {
	var offset = 150;
    $(window).scroll(function(){
	( $(this).scrollTop() > offset ) ? $("#header_fix").show() : $("#header_fix").hide();
    });
	
	$(".header_fixed_login_dl").hover(function(){
	    var t=$(this).attr("did");
		$("#"+t+"_t").show();
	},function(){
	    var t=$(this).attr("did");
	   $("#"+t+"_t").hide();    
	});
});
</script> 
<!--����չʾ���� end--> 
<?php endif; ?>