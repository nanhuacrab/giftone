<?php /* Smarty version 2.6.26, created on 2015-02-01 14:34:29
         compiled from old/includejs/login.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'old/includejs/login.htm', 101, false),)), $this); ?>
<script>
$(document).ready(function(){
	$("#usertype1").click(function(){
		$("#reg_url_1").show();
		$("#reg_url_2").hide();
		$("#usertype").val("1");
		$("#usertype1").attr("class","");
		$("#usertype2").attr("class","index_logoin_current1");
	});
	$("#usertype2").click(function(){
		$("#reg_url_2").show();
		$("#reg_url_1").hide();
		$("#usertype").val("2");
		$("#usertype2").attr("class","");
		$("#usertype1").attr("class","index_logoin_current2");
	});
});
$(document).ready(function(){
	$("#username").focus(function(){
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
<?php if ($this->_tpl_vars['cookie']['usertype'] == '1'): ?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $this->_tpl_vars['member']['photo']; ?>
" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);"></dt>
      <dd>
        <div>���ã�<font color="red"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</font></div>
        <br>�����û�</dd>
    </dl>
    <div class="logoin_after_cj">���Ѵ����� (<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=resume"><u><?php echo $this->_tpl_vars['member']['resume_num']; ?>
</u></a>) �ݼ�����</div>
    <div class="hunter_logoin_list"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=expect&add=<?php echo $this->_tpl_vars['cookie']['uid']; ?>
" class="logoin_after_su1">��������</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=resume" class="logoin_after_su2">�������</a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job"> �������ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job"><em><?php echo $this->_tpl_vars['member']['sq_jobnum']; ?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=favorite"> �ղص�ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=favorite"><em><?php echo $this->_tpl_vars['member']['fav_jobnum']; ?>
</em></a></div>
    <div class="logoin_after_cz"><a href="javascript:void(0);" onclick="logout('index.php?c=logout');"> ��ȫ�˳�</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php" class="in_l_cor">�����������</a></div>
  </div>
</div>
<?php elseif ($this->_tpl_vars['cookie']['usertype'] == '2'): ?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $this->_tpl_vars['company']['logo']; ?>
"  onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_icon']; ?>
',2);"></dt>
      <dd>
        <div>���ã�<font color="red"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</font></div>
        <br>��ҵ�û�</dd>
    </dl>
    <div class="logoin_after_cj">���ѷ����� (<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=1"><u><?php echo $this->_tpl_vars['company']['job']; ?>
</u></a>)��ְλ��</div>
    <div class="hunter_logoin_list"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=jobadd" class="logoin_after_su1">����ְλ</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=1" class="logoin_after_su2">ְλ����</a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=hr"> ���յ�������</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=hr"><em><?php echo $this->_tpl_vars['company']['sq_job']; ?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=2"> �ѹ���ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=2"><em><?php echo $this->_tpl_vars['company']['status2']; ?>
</em></a></div>
    <div class="logoin_after_cz"><a href="javascript:void(0);" onclick="logout('index.php?c=logout');"> ��ȫ�˳�</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php" class="in_l_cor">�����������</a></div>
  </div>
</div>

<?php else: ?>
<div class="index_logoin">
  <input type="hidden" value="index" name="path" id="path">
  <input type="hidden" value="1" name="usertype" id="usertype">
 <div class="index_logoin_h1">�û���¼ </div>
  <div class="index_logoin_t">
    <div  class="index_logoin_re_m">
      <input type="text" id="username" name="username" value="<?php if ($this->_tpl_vars['cookie']['loginname']): ?><?php echo $this->_tpl_vars['cookie']['loginname']; ?>
<?php else: ?>�������û���<?php endif; ?>" class="index_logoin_inp placeholder">
      <div class="index_logoin_msg" id="show_name" style="display:none">
	  <div class="index_logoin_msg_tx">����д�û���</div>
	  <div class="index_logoin_msg_icon"></div>
	  </div>
    </div>
    <div  class="index_logoin_re_m">
      <input type="text" id="password2" class="index_logoin_inp placeholder" value="��������������">
	  <input type="password" id="password" name="password" class="index_logoin_inp placeholder" value="" style="display:none;">
       <div class="index_logoin_msg" style="display:none" id="show_pass">
	   <div class="index_logoin_msg_tx">����д����</div>
	   <div class="index_logoin_msg_icon"></div>
	   </div>
    </div>

        </div>
              <div class="index_logoin_r">
      <input type="submit" value="" class="index_logoin_bth2" onclick="check_login();" >
      </div>
<ul class="index_logoin_cont">
    <li>
      <input type="checkbox" class="index_logoin_check" value="1" name="loginname">
    <em class="index_l_jz">��ס��¼״̬</em><a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
">��������?</a></li>
    <li class="">
      <a id="reg_url_2" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:2"), $this);?>
" class="index_logoin_submit">��Ƹ��ע��</a>
      <a id="reg_url_1" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="index_logoin_submit2">��ְ��ע��</a>
     </li>
	  <li class="index_logoin_Coop" style="margin-top:12px;">
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1' || $this->_tpl_vars['config']['sy_sinalogin'] == '1' || $this->_tpl_vars['config']['sy_wxlogin'] == '1'): ?><em style="float:left">��ݵ�¼��</em><?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_qq.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'qqconnect','url' => "c:qqlogin"), $this);?>
">QQ��¼</a>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_sinalogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_sina.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'sinaconnect'), $this);?>
">����</a>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_wxlogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_wx.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'wxconnect'), $this);?>
">΢��</a>
	<?php endif; ?>
	</li>
 
  </ul>
</div>
<?php endif; ?>