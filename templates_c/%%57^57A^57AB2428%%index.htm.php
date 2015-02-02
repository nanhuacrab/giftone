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
     <!--初次注册弹出框-->
<div style="position:relative; z-index:1020">
   <div class="index_no_resume_box" id="yingdao" <?php if ($this->_tpl_vars['resume']['name'] != ""): ?>style="display:none;"<?php endif; ?>>
   <div class="index_no_resume_jt png"></div>
   <div class="index_no_resume_cont">
   <div class="index_no_resume_h1">请先填写个人基本信息</div>
   <div class="index_no_resume_p"> 为了更快的找到工作，需填写个人基本信息才能创建简历！</div>
    <div class="index_no_resume_p2"><a href="javascript:Close_yd();">知道了</a></div>
   </div>
   </div>
  </div>
  <!--初次注册弹出框 end-->
  <div class="member_right_box mt12 fltL">
  <div class="member_right_Information  fltL">
  <div class="User_avatar  fltL"> <a href="index.php?c=uppic"> <img src=".<?php echo $this->_tpl_vars['user_photo']; ?>
" border="0" height="100" width="80" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);"/></a>
  <div class="User_avatar_bj"><a href="index.php?c=uppic" title="更换形象照">更换形象照</a></div>
   <div class="User_avatar_bg"></div>
  </div>
  <div class="member_Information_right fltL">
  <div class="member_Information_name  fltL"><span class="member_Information_hello">你好！</span><span class="member_Information_n"><?php echo $this->_tpl_vars['username']; ?>
</span>
  <a href="index.php?c=binding">
  <?php if ($this->_tpl_vars['idcard_pic'] && $this->_tpl_vars['idcard_status'] == '1'): ?><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/sf.png"><span class="member_Information_rz">身份证已认证</span><?php else: ?><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/wsf.png"><span class="member_Information_rzno">身份证未认证</span><?php endif; ?>
  </a>
  <span class="member_Information_rz member_Information_Balance">我的余额:</span><span class="member_Information_rz member_Information_Balance_fold"><?php echo $this->_tpl_vars['statis']['pay']; ?>
</span><span class="member_Information_rz"> 元</span>
	
  </div>
  <div class="member_Information_msg fltL ">
  <a href="index.php?c=binding">
  <span class="member_Information_touch fltL"><?php if ($this->_tpl_vars['resume']['telphone'] == ""): ?>手机号未填写<?php else: ?><?php echo $this->_tpl_vars['resume']['telphone']; ?>
<?php endif; ?></span>
<span class="member_Information_email fltL"><?php if ($this->_tpl_vars['resume']['email'] == ""): ?>邮箱未填写<?php else: ?><?php echo $this->_tpl_vars['resume']['email']; ?>
<?php endif; ?></span></a>
  <span class="member_Information_xg fltL"><a href="index.php?c=info">修改基本资料</a></span><a href="<?php echo smarty_function_url(array('url' => "c:integral"), $this);?>
" style="color:#f60; margin-left:10px; display:inline-block; line-height:30px; font-size:14px">如何获取积分?</a> </div>
  <div class="member_Information_msg fltL mt5 ">
  <dl class="member_Information_amount"><dt><a href="index.php?c=msg">邀请面试</a></dt><dd><span class="member_Information_amount_n"><?php if ($this->_tpl_vars['msgnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['msgnum']; ?>
<?php endif; ?></span></dd></dl>  
  <dl class="member_Information_amount"><dt> <a href="index.php?c=look">谁看了我的简历</a></dt><dd><span class="member_Information_amount_n"><?php echo $this->_tpl_vars['lookNum']; ?>
</span></dd></dl> 
  <dl class="member_Information_amount"><dt><a href="index.php?c=job">职位申请记录</a></dt><dd><span class="member_Information_amount_n"><?php if ($this->_tpl_vars['statis']['sq_jobnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['statis']['sq_jobnum']; ?>
<?php endif; ?></span></dd></dl> 
  <dl class="member_Information_amount"><dt><a href="index.php?c=favorite" title="职位收藏">职位收藏记录</a></dt><dd><span class="member_Information_amount_n"><?php if ($this->_tpl_vars['statis']['fav_jobnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['statis']['fav_jobnum']; ?>
<?php endif; ?></span></dd></dl> 
  <dl class="member_Information_amount member_Information_amountw80"><dt><a href="<?php echo smarty_function_url(array('m' => 'redeem'), $this);?>
">获得积分</a></dt><dd><span class="member_Information_amount_n member_Information_amount_n_re"><?php echo $this->_tpl_vars['statis']['integral']; ?>
<a href="<?php echo smarty_function_url(array('m' => 'redeem'), $this);?>
" class="member_Information_dh png">兑换</a></span></dd></dl> 
  </div>
  </div>
  </div>
  </div>
  <div class="member_right_box mt12 fltL">
  <div class="member_right_h1 fltL"><span class="member_right_span fltL">简历管理</span><span class="member_right_span_r_zt fltL">简历状态：<?php if ($this->_tpl_vars['resume']['status'] == 2): ?>隐藏<?php else: ?>公开<?php endif; ?>　</span><em class="member_right_em fltR"><a href="index.php?c=privacy">简历状态设置</a> | <a href="index.php?c=blacklist">企业屏蔽</a> </em></div>
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
')" class="index_resume_Operating_a">置顶</a> | <a href="index.php?c=expect<?php if ($this->_tpl_vars['rlist']['doc']): ?>q<?php endif; ?>&e=<?php echo $this->_tpl_vars['rlist']['id']; ?>
" class="index_resume_Operating_a">修改</a> | <a target="_blank" href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['rlist']['id']).",tmp:".($this->_tpl_vars['rlist']['tmpid'])), $this);?>
" class="index_resume_Operating_a">预览</a> | <a onclick="layer_del('确定要刷新？', 'index.php?c=resume&act=refresh&id=<?php echo $this->_tpl_vars['rlist']['id']; ?>
');" href="javascript:void(0)" class="index_resume_Operating_a">刷新</a></span><?php if ($this->_tpl_vars['rlist']['id'] != $this->_tpl_vars['resume']['def_job']): ?><a href="javascript:void(0)" value='<?php echo $this->_tpl_vars['rlist']['id']; ?>
' class="index_resume_Operating_mr default_resume">设为默认简历</a><?php endif; ?></div>
   <?php if ($this->_tpl_vars['rlist']['id'] == $this->_tpl_vars['resume']['def_job']): ?><div class="index_resume_Set">默认简历</div><?php endif; ?>
 </div>
	<?php endforeach; endif; unset($_from); ?> 
  <div class="index_resume_box resume_Not_created fltL mt10 ">
  <?php if ($this->_tpl_vars['config']['user_number'] > $this->_tpl_vars['myresumenum']): ?>
	<a href="index.php?c=expect" class="resume_Not_created_icon png">创建一份新的简历</a>
	<?php else: ?>
	<a href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;" class="resume_Not_created_icon png">创建一份新的简历</a>
	<?php endif; ?></div> 
  </div>
   </div>
  <div class="member_right_box mt12 fltL">
  <div class="member_right_h1 fltL"><span class="member_right_span fltL">职位搜索器</span></div>
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
<?php else: ?>未命名<?php endif; ?></a></div>
	 <div>搜索条件：<?php echo $this->_tpl_vars['flist']['findername']; ?>
</div>
	 <div class="index_Job_Finder_cont_search"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['flist']['url']; ?>
" class="index_Job_Finder_cont_search_a" target='_blank' >立即搜索</a></div>
	  </div> 
	  <div class="index_Job_Finder_Operating fltL"><a href="index.php?c=finder&act=edit&id=<?php echo $this->_tpl_vars['flist']['id']; ?>
">修改</a> | <a onclick="layer_del('确定要删除？', 'index.php?c=finder&act=del&id=<?php echo $this->_tpl_vars['flist']['id']; ?>
');" href="javascript:void(0)">删除</a></div>
	  </li>
		<?php endforeach; else: ?>
		 <div style="text-align:center;">您还没有个人搜索器。</div>
		<?php endif; unset($_from); ?> 
	  </ul>
		<div class="index_Job_Finder_bot fltL"><?php if ($this->_tpl_vars['findernum'] > 0): ?><a href="index.php?c=finder&act=edit" class="index_Job_Finder_submit">新增搜索器</a><?php endif; ?>共可创建<?php echo $this->_tpl_vars['config']['user_finder']; ?>
个，还可创建<?php echo $this->_tpl_vars['findernum']; ?>
个搜索器</div>
    </div>
  </div>
  
  <div class="member_right_box mt12 fltL">
  <div class="member_right_h1 fltL">
  <!--<span class="member_right_span fltL">您可能适合的职位</span>-->
  <span class="member_right_span member_right_span_on fltL" onclick="switchJob(1,this,'member_right_span' ,'user_joblist','joblist1');">您可能感兴趣的职位</span>
  <span class="member_right_span fltL" onclick="switchJob(2,this,'member_right_span' ,'user_joblist','joblist2');">推荐职位</span>
  <span class="member_right_span fltL" onclick="switchJob(3,this,'member_right_span' ,'user_joblist','joblist3');">紧急职位</span>
  
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
</a><em class="endtime"><?php echo ((is_array($_tmp=$this->_tpl_vars['blist']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</em></div>
<div class="award"><span>薪资：<?php echo $this->_tpl_vars['blist']['job_salary']; ?>
</span><em> 学历：<?php echo $this->_tpl_vars['blist']['job_edu']; ?>
</em></div>
<div class="go"><a target="_blank" href="<?php echo $this->_tpl_vars['blist']['job_url']; ?>
">查看职位>></a></div>
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
</a><em class="endtime"><?php echo ((is_array($_tmp=$this->_tpl_vars['two']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</em></div>
<div class="award"><span>薪资：<?php echo $this->_tpl_vars['two']['job_salary']; ?>
</span><em> 学历：<?php echo $this->_tpl_vars['two']['job_edu']; ?>
</em></div>
<div class="go"><a target="_blank" href="<?php echo $this->_tpl_vars['two']['job_url']; ?>
">查看职位>></a></div>
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
</a><em class="endtime"><?php echo ((is_array($_tmp=$this->_tpl_vars['one']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</em></div>
<div class="award"><span>薪资：<?php echo $this->_tpl_vars['one']['job_salary']; ?>
</span><em> 学历：<?php echo $this->_tpl_vars['one']['job_edu']; ?>
</em></div>
<div class="go"><a target="_blank" href="<?php echo $this->_tpl_vars['one']['job_url']; ?>
">查看职位>></a></div>
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