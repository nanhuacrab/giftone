<?php /* Smarty version 2.6.26, created on 2015-01-29 18:29:55
         compiled from member/user/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/user/index.htm', 41, false),array('modifier', 'date_format', 'member/user/index.htm', 108, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function Close_yd(){
	$("#yingdao").hide();
	$("#bg").hide();
}
</script>
  <div class="index_mian_right fltR">
     <!--����ע�ᵯ����-->
<div style="position:relative; z-index:1020">
   <div class="index_no_resume_box" id="yingdao" <?php if ($this->_tpl_vars['resume']['name'] != ""): ?>style="display:none;"<?php endif; ?>>
   <div class="index_no_resume_jt png"></div>
   <div class="index_no_resume_cont">
   <div class="index_no_resume_h1">������д���˻�����Ϣ</div>
   <div class="index_no_resume_p"> Ϊ�˸�����ҵ�����������д���˻�����Ϣ���ܴ���������</div>
    <div class="index_no_resume_p2"><a href="javascript:Close_yd();">֪����</a></div>
   </div>
   </div>
  </div>
  <!--����ע�ᵯ���� end-->
  <div class="member_right_box mt12 fltL">
  <div class="member_right_Information  fltL">
  <div class="User_avatar  fltL"> <a href="index.php?c=uppic"> <img src=".<?php echo $this->_tpl_vars['user_photo']; ?>
" border="0" height="100" width="80" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);"/></a>
  <div class="User_avatar_bj"><a href="index.php?c=uppic" title="����������">����������</a></div>
   <div class="User_avatar_bg"></div>
  </div>
  <div class="member_Information_right fltL">
  <div class="member_Information_name  fltL"><span class="member_Information_hello">��ã�</span><span class="member_Information_n"><?php echo $this->_tpl_vars['username']; ?>
</span>
  <a href="index.php?c=binding">
  <?php if ($this->_tpl_vars['idcard_pic'] && $this->_tpl_vars['idcard_status'] == '1'): ?><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/sf.png"><span class="member_Information_rz">���֤����֤</span><?php else: ?><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/wsf.png"><span class="member_Information_rzno">���֤δ��֤</span><?php endif; ?>
  </a>
  <span class="member_Information_rz member_Information_Balance">�ҵ����:</span><span class="member_Information_rz member_Information_Balance_fold"><?php echo $this->_tpl_vars['statis']['pay']; ?>
</span><span class="member_Information_rz"> Ԫ</span>
	
  </div>
  <div class="member_Information_msg fltL ">
  <a href="index.php?c=binding">
  <span class="member_Information_touch fltL"><?php if ($this->_tpl_vars['resume']['telphone'] == ""): ?>�ֻ���δ��д<?php else: ?><?php echo $this->_tpl_vars['resume']['telphone']; ?>
<?php endif; ?></span>
<span class="member_Information_email fltL"><?php if ($this->_tpl_vars['resume']['email'] == ""): ?>����δ��д<?php else: ?><?php echo $this->_tpl_vars['resume']['email']; ?>
<?php endif; ?></span></a>
  <span class="member_Information_xg fltL"><a href="index.php?c=info">�޸Ļ�������</a></span><a href="<?php echo smarty_function_url(array('url' => "c:integral"), $this);?>
" style="color:#f60; margin-left:10px; display:inline-block; line-height:30px; font-size:14px">��λ�ȡ����?</a> </div>
  <div class="member_Information_msg fltL mt5 ">
  <dl class="member_Information_amount"><dt><a href="index.php?c=msg">��������</a></dt><dd><span class="member_Information_amount_n"><?php if ($this->_tpl_vars['msgnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['msgnum']; ?>
<?php endif; ?></span></dd></dl>  
  <dl class="member_Information_amount"><dt> <a href="index.php?c=look">˭�����ҵļ���</a></dt><dd><span class="member_Information_amount_n"><?php echo $this->_tpl_vars['lookNum']; ?>
</span></dd></dl> 
  <dl class="member_Information_amount"><dt><a href="index.php?c=job">ְλ�����¼</a></dt><dd><span class="member_Information_amount_n"><?php if ($this->_tpl_vars['statis']['sq_jobnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['statis']['sq_jobnum']; ?>
<?php endif; ?></span></dd></dl> 
  <dl class="member_Information_amount"><dt><a href="index.php?c=favorite" title="ְλ�ղ�">ְλ�ղؼ�¼</a></dt><dd><span class="member_Information_amount_n"><?php if ($this->_tpl_vars['statis']['fav_jobnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['statis']['fav_jobnum']; ?>
<?php endif; ?></span></dd></dl> 
  <dl class="member_Information_amount member_Information_amountw80"><dt><a href="<?php echo smarty_function_url(array('m' => 'redeem'), $this);?>
">��û���</a></dt><dd><span class="member_Information_amount_n member_Information_amount_n_re"><?php echo $this->_tpl_vars['statis']['integral']; ?>
<a href="<?php echo smarty_function_url(array('m' => 'redeem'), $this);?>
" class="member_Information_dh png">�һ�</a></span></dd></dl> 
  </div>
  </div>
  </div>
  </div>
  <div class="member_right_box mt12 fltL">
  <div class="member_right_h1 fltL"><span class="member_right_span fltL">��������</span><span class="member_right_span_r_zt fltL">����״̬��<?php if ($this->_tpl_vars['resume']['status'] == 2): ?>����<?php else: ?>����<?php endif; ?>��</span><em class="member_right_em fltR"><a href="index.php?c=privacy">����״̬����</a> | <a href="index.php?c=blacklist">��ҵ����</a> </em></div>
  <div class="index_resume_cont fltL ">
  
	<?php $_from = $this->_tpl_vars['rlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rlist']):
?>
 <div class="index_resume_box <?php if ($this->_tpl_vars['rlist']['id'] == $this->_tpl_vars['resume']['def_job']): ?>index_resume_box_Set<?php endif; ?> fltL mt10 ">
  <div class="index_resume_name"><?php echo $this->_tpl_vars['rlist']['name']; ?>
</div>
  <div class="perfect"><span class="shell"><i style="width:<?php echo $this->_tpl_vars['rlist']['integrity']; ?>
%"></i></span><font class="red">
  <?php if ($this->_tpl_vars['rlist']['integrity']): ?><?php echo $this->_tpl_vars['rlist']['integrity']; ?>
<?php else: ?>0<?php endif; ?>%
  </font></div>
   <div class="index_resume_Operating"><span class="index_resume_Operating_left"><a href="javascript:void(0)" onclick="resumetop('<?php echo $this->_tpl_vars['rlist']['id']; ?>
','<?php echo $this->_tpl_vars['rlist']['topdate']; ?>
')" class="index_resume_Operating_a">�ö�</a> | <a href="index.php?c=expect<?php if ($this->_tpl_vars['rlist']['doc']): ?>q<?php endif; ?>&e=<?php echo $this->_tpl_vars['rlist']['id']; ?>
" class="index_resume_Operating_a">�޸�</a> | <a target="_blank" href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['rlist']['id']).",tmp:".($this->_tpl_vars['rlist']['tmpid'])), $this);?>
" class="index_resume_Operating_a">Ԥ��</a> | <a onclick="layer_del('ȷ��Ҫˢ�£�', 'index.php?c=resume&act=refresh&id=<?php echo $this->_tpl_vars['rlist']['id']; ?>
');" href="javascript:void(0)" class="index_resume_Operating_a">ˢ��</a></span><?php if ($this->_tpl_vars['rlist']['id'] != $this->_tpl_vars['resume']['def_job']): ?><a href="javascript:void(0)" value='<?php echo $this->_tpl_vars['rlist']['id']; ?>
' class="index_resume_Operating_mr default_resume">��ΪĬ�ϼ���</a><?php endif; ?></div>
   <?php if ($this->_tpl_vars['rlist']['id'] == $this->_tpl_vars['resume']['def_job']): ?><div class="index_resume_Set">Ĭ�ϼ���</div><?php endif; ?>
 </div>
	<?php endforeach; endif; unset($_from); ?> 
  <div class="index_resume_box resume_Not_created fltL mt10 ">
  <?php if ($this->_tpl_vars['config']['user_number'] > $this->_tpl_vars['myresumenum']): ?>
	<a href="index.php?c=expect" class="resume_Not_created_icon png">����һ���µļ���</a>
	<?php else: ?>
	<a href="javascript:void(0)" onclick="layer.msg('��ļ������Ѿ��ﵽϵͳ���õļ�������',2,8);return false;" class="resume_Not_created_icon png">����һ���µļ���</a>
	<?php endif; ?></div> 
  </div>
   </div>
  <div class="member_right_box mt12 fltL">
  <div class="member_right_h1 fltL"><span class="member_right_span fltL">ְλ������</span></div>
  <div class="index_Job_Finder_box">
	  <ul class="index_Job_Finder_ul fltL">
		<?php $_from = $this->_tpl_vars['finder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flist']):
?>
	  <li class="index_Job_Finder fltL">
	  <i class="index_Job_Finder_icon fltL png"></i>
	  <div class="index_Job_Finder_cont fltL">
	  <div class="index_Job_Finder_cont_name"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['flist']['url']; ?>
" target='_blank' class="index_Job_Finder_cont_name_a"><?php if ($this->_tpl_vars['flist']['name']): ?><?php echo $this->_tpl_vars['flist']['name']; ?>
<?php else: ?>δ����<?php endif; ?></a></div>
	 <div>����������<?php echo $this->_tpl_vars['flist']['findername']; ?>
</div>
	 <div class="index_Job_Finder_cont_search"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['flist']['url']; ?>
" class="index_Job_Finder_cont_search_a" target='_blank' >��������</a></div>
	  </div> 
	  <div class="index_Job_Finder_Operating fltL"><a href="index.php?c=finder&act=edit&id=<?php echo $this->_tpl_vars['flist']['id']; ?>
">�޸�</a> | <a onclick="layer_del('ȷ��Ҫɾ����', 'index.php?c=finder&act=del&id=<?php echo $this->_tpl_vars['flist']['id']; ?>
');" href="javascript:void(0)">ɾ��</a></div>
	  </li>
		<?php endforeach; else: ?>
		 <div style="text-align:center;">����û�и�����������</div>
		<?php endif; unset($_from); ?> 
	  </ul>
		<div class="index_Job_Finder_bot fltL"><?php if ($this->_tpl_vars['findernum'] > 0): ?><a href="index.php?c=finder&act=edit" class="index_Job_Finder_submit">����������</a><?php endif; ?>���ɴ���<?php echo $this->_tpl_vars['config']['user_finder']; ?>
�������ɴ���<?php echo $this->_tpl_vars['findernum']; ?>
��������</div>
    </div>
  </div>
  
  <div class="member_right_box mt12 fltL">
  <div class="member_right_h1 fltL">
  <!--<span class="member_right_span fltL">�������ʺϵ�ְλ</span>-->
  <span class="member_right_span member_right_span_on fltL" onclick="switchJob(1,this,'member_right_span' ,'user_joblist','joblist1');">�����ܸ���Ȥ��ְλ</span>
  <span class="member_right_span fltL" onclick="switchJob(2,this,'member_right_span' ,'user_joblist','joblist2');">�Ƽ�ְλ</span>
  <span class="member_right_span fltL" onclick="switchJob(3,this,'member_right_span' ,'user_joblist','joblist3');">����ְλ</span>
  
  </div>
  <div class="index_job_box  fltL">
<div class="joblist1 user_joblist">
<?php $_from = $this->_tpl_vars['blist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blist']):
?>  
<div class="index_job_list joblist1">
<div class="jobtit"><a title="<?php echo $this->_tpl_vars['blist']['name_n']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['blist']['job_url']; ?>
"><?php echo $this->_tpl_vars['blist']['name_n']; ?>
</a><em class="endtime"><?php echo ((is_array($_tmp=$this->_tpl_vars['blist']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��%d��") : smarty_modifier_date_format($_tmp, "%Y��%m��%d��")); ?>
</em></div>
<div class="award"><span>н�ʣ�<?php echo $this->_tpl_vars['blist']['job_salary']; ?>
</span><em> ѧ����<?php echo $this->_tpl_vars['blist']['job_edu']; ?>
</em></div>
<div class="go"><a target="_blank" href="<?php echo $this->_tpl_vars['blist']['job_url']; ?>
">�鿴ְλ>></a></div>
</div>
<?php endforeach; endif; unset($_from); ?>  
</div> 
<div class="joblist2 user_joblist" style="display:none;">
<?php $_from = $this->_tpl_vars['two']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['two']):
?>  
<div class="index_job_list joblist2">
<div class="jobtit"><a title="<?php echo $this->_tpl_vars['two']['name_n']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['two']['job_url']; ?>
"><?php echo $this->_tpl_vars['two']['name_n']; ?>
</a><em class="endtime"><?php echo ((is_array($_tmp=$this->_tpl_vars['two']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��%d��") : smarty_modifier_date_format($_tmp, "%Y��%m��%d��")); ?>
</em></div>
<div class="award"><span>н�ʣ�<?php echo $this->_tpl_vars['two']['job_salary']; ?>
</span><em> ѧ����<?php echo $this->_tpl_vars['two']['job_edu']; ?>
</em></div>
<div class="go"><a target="_blank" href="<?php echo $this->_tpl_vars['two']['job_url']; ?>
">�鿴ְλ>></a></div>
</div>
<?php endforeach; endif; unset($_from); ?>  
</div> 
<div class="joblist3 user_joblist">
<?php $_from = $this->_tpl_vars['one']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['one']):
?>  
<div class="index_job_list joblist3" style="display:none;">
<div class="jobtit"><a title="<?php echo $this->_tpl_vars['one']['name_n']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['one']['job_url']; ?>
"><?php echo $this->_tpl_vars['one']['name_n']; ?>
</a><em class="endtime"><?php echo ((is_array($_tmp=$this->_tpl_vars['one']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��%d��") : smarty_modifier_date_format($_tmp, "%Y��%m��%d��")); ?>
</em></div>
<div class="award"><span>н�ʣ�<?php echo $this->_tpl_vars['one']['job_salary']; ?>
</span><em> ѧ����<?php echo $this->_tpl_vars['one']['job_edu']; ?>
</em></div>
<div class="go"><a target="_blank" href="<?php echo $this->_tpl_vars['one']['job_url']; ?>
">�鿴ְλ>></a></div>
</div>
<?php endforeach; endif; unset($_from); ?>  
</div> 
  </div>
  </div>
  </div>
  </div>
  <div class="clear"></div>
 <div id="bg" <?php if ($this->_tpl_vars['resume']['name'] == ""): ?>style="display:block"<?php endif; ?>></div>
 <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>