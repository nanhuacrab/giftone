<?php /* Smarty version 2.6.26, created on 2015-01-29 19:34:08
         compiled from default/com/comapply.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/com/comapply.htm', 25, false),array('function', 'image', 'default/com/comapply.htm', 140, false),array('function', 'curl', 'default/com/comapply.htm', 147, false),array('modifier', 'date_format', 'default/com/comapply.htm', 38, false),)), $this); ?>
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
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/comapply.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]-->
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<div class="current_Location icon png"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">ְλ�б�</a> > ְλ���� </div>
<div class="clear"></div>
<div class="comappiy_left_sidebar fl">
  <div class="Company_left_cont">
   <div class="Company_post_top fl">
    <div class="Company_post_name fl">
    <span class="Company_post_name_h1"><?php echo $this->_tpl_vars['Info']['jobname']; ?>
</span>
    <?php if ($this->_tpl_vars['Info']['urgent_time'] > time ( )): ?><span class="Company_post_span_i Company_post_tj">��Ƹ</span><?php endif; ?>
    <?php if ($this->_tpl_vars['Info']['rec_time'] > time ( )): ?><span class="Company_post_span_i Company_post_jinj">�Ƽ�</span><?php endif; ?>
    <div class="complay_h1_share"><span class="Company_post_s_fl">������</span><span ><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="����QQ�ռ�" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="��������΢��" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="������Ѷ΢��" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="����������" href="#" class="bds_renren" data-cmd="renren"></a><a title="����΢��" href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></span></div>
    </div>
   <div class="Company_post_h1_msg">
    <em class="Company_post_h1_msg_left">���������<?php echo $this->_tpl_vars['Info']['jobhits']; ?>
��</em> | <em>����Ͷ������<?php echo $this->_tpl_vars['Info']['snum']; ?>
</em> | <em>  ����ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</em> | <em>��˾��������<?php echo $this->_tpl_vars['n_com']; ?>
</em> | <em>��˾��ע����<?php echo $this->_tpl_vars['g_com']['ant_num']; ?>
</em> | <em>��˾ְλ��������<?php echo $this->_tpl_vars['s_com']; ?>
</em> </div>
   </div>
    <div class="Company_content fl">
      <ul class="Company_Claim">
       <?php if ($this->_tpl_vars['Info']['job_class_two'] || $this->_tpl_vars['Info']['job_class_three']): ?>
        <li>ְλ���ͣ�<span class="Company_Claim_r"><?php echo $this->_tpl_vars['Info']['job_class_two']; ?>
 <?php echo $this->_tpl_vars['Info']['job_class_three']; ?>
</span></li>
        <?php endif; ?>
      	 <?php if ($this->_tpl_vars['Info']['job_salary']): ?>
        <li>�ṩ��н��<?php echo $this->_tpl_vars['Info']['job_salary']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_number']): ?>
        <li>��Ƹ������<?php echo $this->_tpl_vars['Info']['job_number']; ?>
</li>
        <?php endif; ?>
       
        <?php if ($this->_tpl_vars['Info']['job_hy']): ?>
        <li>��ҵ���<?php echo $this->_tpl_vars['Info']['job_hy']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_edu']): ?>
        <li>ѧ��Ҫ��<?php echo $this->_tpl_vars['Info']['job_edu']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_age']): ?>
        <li>����Ҫ��<?php echo $this->_tpl_vars['Info']['job_age']; ?>
</li>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Info']['job_type']): ?>
        <li>�������ʣ�<?php echo $this->_tpl_vars['Info']['job_type']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_sex']): ?>
        <li>�Ա�Ҫ��<?php echo $this->_tpl_vars['Info']['job_sex']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_marriage']): ?>
        <li>����״����<?php echo $this->_tpl_vars['Info']['job_marriage']; ?>
</li>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Info']['job_report']): ?>
        <li>����ʱ�䣺<?php echo $this->_tpl_vars['Info']['job_report']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_exp']): ?>
        <li>�������飺<?php echo $this->_tpl_vars['Info']['job_exp']; ?>
</li>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['Info']['edate']): ?>
        <li>��Ч���ڣ�<?php echo $this->_tpl_vars['Info']['edate']; ?>
</li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['job_city_one'] || $this->_tpl_vars['Info']['job_city_two'] || $this->_tpl_vars['Info']['job_city_three']): ?>
        <li>�����ص㣺<span class="Company_Claim_r"><?php echo $this->_tpl_vars['Info']['job_city_one']; ?>
&nbsp;<?php echo $this->_tpl_vars['Info']['job_city_two']; ?>
&nbsp;<?php echo $this->_tpl_vars['Info']['job_city_three']; ?>
</span> </li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['lang_info']): ?>
        <li class="Company_Claim_end"><span style="width:70px; float:left">����Ҫ��</span>
        <em style=" display:block;width:580px; float:left">
		<?php $_from = $this->_tpl_vars['Info']['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['langlist']):
?>
        <span class="yun_com_fl_dy "><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['langlist']]; ?>
</span>
		<?php endforeach; endif; unset($_from); ?>
        </em></li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['welfare_info']): ?>
        <li  class="Company_Claim_end"><span style="width:70px; float:left">����������</span>
        <em style=" display:block;width:580px; float:left">
        <?php $_from = $this->_tpl_vars['Info']['welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wlist']):
?>
        <span class="yun_com_fl_dy yun_com_fl_dy_cor"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['wlist']]; ?>
</span>
        <?php endforeach; endif; unset($_from); ?></em></li>
        <?php endif; ?>
      </ul>
	   <div class="stamp_exceed">
	 <?php if ($this->_tpl_vars['stop'] == '1'): ?>
	 <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/stamp.png" title="����ͣ">
	 <?php endif; ?>
	  <?php if ($this->_tpl_vars['entype'] == '1'): ?>
	 <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/stamp_gq.png" title="�ѹ���">
	 <?php endif; ?>
	 </div>
    </div>
    <div class="clear"></div>
    <div class="Company_post_ms m10"><span class="Company_post_cur" name='info'>ְλ����</span><span name='record' onclick="forrecord('<?php echo $_GET['id']; ?>
','1')">�����¼</span></div>
    <div class="Company_content fl Company_toggle" id="Company_job_info" >
      <div class="Job_Description"> <?php echo $this->_tpl_vars['Info']['description']; ?>
 </div>
    </div>
    <div class="Company_Record Company_toggle" id="Company_job_record" style="display:none">
		<div class="Company_Record_list Company_Record_h1">
			<span class="Company_Record_span Company_Record_spanzhe">������</span>   
			<span class="Company_Record_span Company_Record_spantime">����ʱ��</span>   
			<span class="Company_Record_span  Company_Record_spanzt">����״̬</span>
		</div>
		<div class="Company_job_record_div"></div>
    </div>
    
    
    <div class="Company_post_msg"><span class="Company_co">��ϵ��ʽ</span></div>
    <div class="Company_content fl">
    
    <?php if ($this->_tpl_vars['look_msg'] == ""): ?>
    <div class="Company_Contact">
        <ul class="Company_Contact_show">
         <?php if ($this->_tpl_vars['Info']['is_link'] == '1'): ?><li>�� ϵ �ˣ�<?php echo $this->_tpl_vars['Info']['linkman']; ?>
</li><?php endif; ?>  
		
		  <?php if ($this->_tpl_vars['Info']['linkqq']): ?>
          <li>�� �� QQ��<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_tpl_vars['Info']['linkqq']; ?>
&site=qq&menu=yes" target="_blank"><img border="0" alt="�������" src="http://wpa.qq.com/pa?p=2:<?php echo $this->_tpl_vars['Info']['linkqq']; ?>
:45 &r=0.22914223582483828"></a><?php echo $this->_tpl_vars['Info']['linkqq']; ?>
</li>
          <?php endif; ?>
		  <?php if ($this->_tpl_vars['Info']['website']): ?>
          <li>��˾��վ��<?php echo $this->_tpl_vars['Info']['website']; ?>
 </li>
		   <?php endif; ?>
		 <?php if ($this->_tpl_vars['Info']['is_link'] == '1'): ?>
         <?php if ($this->_tpl_vars['Info']['linkphone']): ?> <li>�硡������<?php echo smarty_function_image(array('number' => $this->_tpl_vars['Info']['linkphone'],'jobid' => $this->_tpl_vars['Info']['id'],'uid' => $this->_tpl_vars['Info']['uid'],'action' => 'linkphone'), $this);?>

		</li><?php endif; ?>
		 <li style="width:100%">�֡�������<?php echo smarty_function_image(array('number' => $this->_tpl_vars['Info']['linktel'],'jobid' => $this->_tpl_vars['Info']['id'],'uid' => $this->_tpl_vars['Info']['uid'],'action' => 'linktel'), $this);?>
</li>
         <?php endif; ?>
          
          
          <?php if ($this->_tpl_vars['Info']['address']): ?>
          <li style="width:530px">��˾��ַ��<?php echo $this->_tpl_vars['Info']['address']; ?>
<a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['Info']['uid']).",tp:position"), $this);?>
" class="complay_post_map" target="_blank">�鿴��ͼ</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <?php else: ?>
      <div class="about_touch">
        <div class="about_touch_logoin">
          <div class="about_touch_red"><?php echo $this->_tpl_vars['look_msg']; ?>
</div>
          <?php if ($this->_tpl_vars['looktype'] == ""): ?> 
          <a class="about_touch_logoin_bth" onclick="showcomlogin();" style="cursor:pointer">��¼</a>
          <div class="about_touch_reg">��û��ע�᣿�� <a class="about_touch_reg_bth" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
">���ע��</a> Ϊ���˻�Ա��</div>
          
          <?php endif; ?> </div>
       </div>
      <?php endif; ?>
      </div>  
       <?php if ($this->_tpl_vars['stop'] != '1' && $this->_tpl_vars['entype'] != '1'): ?>
	      <div class="about_touch">
	      <?php if ($this->_tpl_vars['look_msg1'] != ""): ?>
		  <div class="comapply_sq"><a onclick="showcomlogin();" href="javascript:;" class="comapply_sq_submit">�����ְλ</a></div>
	      <?php else: ?>
				<div id="sqjob_show"  class="Pop-up_logoin" style="display:none;background:none;  padding:10px 20px 20px 20px;">
					<div class="Pop-up_logoin_sq"> <span>����ְλ���ƣ�</span><em><?php echo $this->_tpl_vars['Info']['jobname']; ?>
</em> </div>
					<div class="Pop-up_logoin_sq"> <span>��˾���ƣ� </span><em><?php echo $this->_tpl_vars['Info']['name']; ?>
</em> </div>
					<div class="Pop-up_logoin_sq" id="resume_job"> <span>ѡ�������</span>
					  <div class="POp_up_r"></div>
					</div>
					<div class="Pop-up_logoin_sq" style="clear:both"> <span>&nbsp;</span>
					  <input id="companyname" type="hidden" value="<?php echo $this->_tpl_vars['Info']['name']; ?>
"/>
					  <input id="jobname" type="hidden" value="<?php echo $this->_tpl_vars['Info']['jobname']; ?>
"/>
					  <input id="companyuid" type="hidden" value="<?php echo $this->_tpl_vars['Info']['uid']; ?>
"/>
					  <input id="jobid" type="hidden" value="<?php echo $this->_tpl_vars['Info']['id']; ?>
"/>
					  <input id="click_sq" class="login_button2" type="button" value=" " name="Submit">
					</div>
				  </div>
	        <?php if ($this->_tpl_vars['usertype'] == '1'): ?>
	        <div class="comapply_sq">
	        <?php if ($this->_tpl_vars['userid_job']): ?>
			<a  class="comapply_ysq">������</a>
			<?php else: ?>
			<a id="sq_job" href="javascript:;" class="comapply_sq_submit">�����ְλ</a>
			<?php endif; ?>
	         <div class="comapply_sq_r">
	          <a href="javascript:fav_job('<?php echo $this->_tpl_vars['Info']['id']; ?>
','2');" class="comapply_sq_sc">�ղش�ְλ</a>
	          <a id="tj_job" href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:recommend,id:".($this->_tpl_vars['Info']['id'])), $this);?>
" target="_blank"  class="comapply_sq_tj">�Ƽ�������</a>
			  <?php if ($this->_tpl_vars['config']['user_report'] == 1): ?>
			  <a style="cursor:pointer" onclick="report_com();" class="comapply_sq_jb">�ٱ�����ҵ</a>
			  <?php endif; ?>
	         </div>
	        </div>
	        <?php endif; ?>
	     <?php endif; ?>
	      </div>
      <?php endif; ?>
      </div>
	  <?php if ($this->_tpl_vars['config']['user_report'] == 1): ?>
      <div class="" id="report" style="display:none; ">
         <div class="Pop-up_logoin  Pop-up_logoin_pad" style="background:none;padding: 10px 20px 20px;">
          <div class="Pop-up_logoin_jb" style="margin-bottom:15px;">�ٱ�ԭ��</div>
            <input id="r_uid" value="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" type="hidden">
            <input id="id" value="<?php echo $this->_tpl_vars['Info']['id']; ?>
" type="hidden">
            <input id="r_name" value="<?php echo $this->_tpl_vars['Info']['name']; ?>
" type="hidden">
            <div class="Pop-up_logoin_sq" style="margin-bottom:10px;"> <em>
              <textarea class="Pop-cottextarea" rows="2" cols="38" id="r_reason" style="width:338px;height:60px;"></textarea>
              </em> </div>
            <div class="Pop-up_logoin_sq" style="margin-bottom:10px;"> <span class=" Pop-up_logoin_jb_span" style="width:80px;">�� ֤ �룺 </span>
              <input type="text" class="Pop-cottextarea_text" id="report_authcode" style="float:left; margin-right:5px;">
              <img id="vcode_imgs" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/include/authcode.inc.php" > <a href="javascript:check_codes();">������?</a></div>
            <div class="Pop-up_logoin_sq"> <span>&nbsp;</span>
              <input class="login_button_jb" type="button"  onclick="reportSub();">
            </div>
        </div>
      </div>
	  <?php endif; ?>
	<?php if ($this->_tpl_vars['look_msg'] == "" && $this->_tpl_vars['config']['com_message'] == 1 && $this->_tpl_vars['usertype'] == '1' && $this->_tpl_vars['stop'] != '1' && $this->_tpl_vars['entype'] != '1'): ?>
 <div class="Company_post_msg"><span class="Company_co">��ְ��ѯ</span></div>
	  <div class="Company_content fl">
	  <div class="Company_post_more">���˽����ְλ��Ϣ�����Ը���</div>
	  <form action="" method="post" target="supportiframe" onsubmit="return com_msg();">
		<div>
		  <textarea  class="comapply_Leave_fb_text" name="content" id='msg_content' placeholder='���������Ը�ְλ�����ʡ��������ڵء���н�������ȵȣ��һἰʱ�����ظ����ڴ�����������'></textarea>
		  <input type="hidden" name="jobid" value="<?php echo $this->_tpl_vars['Info']['id']; ?>
" />
		  <input type="hidden" name="job_uid" value="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" />
		  <input type="hidden" name="com_name" value="<?php echo $this->_tpl_vars['Info']['com_name']; ?>
" />
		  <input type="hidden" name="job_name" value="<?php echo $this->_tpl_vars['Info']['jobname']; ?>
" />
		</div>
		<div class="comapply_Leave_fb_s">
		  <input type="submit" value="�ύ��ѯ" name="submit" class="comapply_Leave_fb_sub">
		</div>
	  </form>
	  </div>
	   <div class="clear"></div>
	  <?php endif; ?>
    <div class="Company_post_msg m10"><span class="Company_co">��˾���</span></div>
    <div class="Company_content fl">
      <div class="Company_Profile"> <?php echo $this->_tpl_vars['Info']['content']; ?>
 </div>
	
      <div class="clear"></div>
     
   </div>
   </div>
  <div class="Compply_right_sidebar">
    <div class="Compply_right_qy">
      <div class="Compply_logo"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['Info']['logo']; ?>
" width="185" height="75" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_icon']; ?>
',2);"/></div>
      <div class="Compply_right_name">
      <a href="<?php echo $this->_tpl_vars['Info']['com_url']; ?>
"><?php echo $this->_tpl_vars['Info']['name']; ?>
</a> 
       </div>

      <div class="Compply_right_js">
        <ul>
          <li>��֤��ʽ��    <?php if ($this->_tpl_vars['Info']['email_status'] == 1): ?>
        <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/rz_yx2.png" alt="��������֤" title="��������֤" class="png">
        <?php else: ?>
        <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/rz_yx.png" alt="����δ��֤" title="����δ��֤" class="png">
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Info']['moblie_status'] == 1): ?>
        <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/rz_sj2.png" alt="�ֻ�����֤" title="�ֻ�����֤" class="png">
        <?php else: ?>
        <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/rz_sj.png" alt="�ֻ�δ��֤" title="�ֻ�δ��֤" class="png">
        <?php endif; ?>
       <?php if ($this->_tpl_vars['Info']['yyzz_status'] == 1): ?>
        <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/rz_zz2.png" alt="ִ������֤" title="ִ������֤" class="png">
        <?php else: ?>
        <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/rz_zz.png" alt="ִ��δ��֤" title="ִ��δ��֤" class="png">
        <?php endif; ?></li>
          <li>��˾���ͣ�<span class="Compply_right_span_c"><?php echo $this->_tpl_vars['Info']['job_hy']; ?>
</span></li>
          <li>��˾���ʣ�<span class="Compply_right_span_c"><?php echo $this->_tpl_vars['Info']['job_pr']; ?>
</span> </li>
          <li>���ڵ�����<span class="Compply_right_span_c"><?php echo $this->_tpl_vars['Info']['job_city_one']; ?>
</span></li>
          <li>��˾��ģ��<span class="Compply_right_span_c"><?php echo $this->_tpl_vars['Info']['job_mun']; ?>
</span></li>
          <li>ע���ʽ�<span class="Compply_right_span_c"><?php echo $this->_tpl_vars['Info']['money']; ?>
��</span></li>
        </ul>
      </div>
    </div>
     <div class="Compply_right_post">
     <div class="Company_post_xs Company_post_7a"><span>�ù�˾����ְλ </span></div>
      <ul class="Compply_right_post_other">
      <?php $_from = $this->_tpl_vars['job']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
      <li>
      <a href="<?php echo $this->_tpl_vars['job']['job_url']; ?>
" class="Compply_right_post_other_name"><?php echo $this->_tpl_vars['job']['name']; ?>
</a>
      ����������<?php echo $this->_tpl_vars['job']['job_city_one']; ?>
&nbsp;<?php echo $this->_tpl_vars['job']['job_city_two']; ?>
 <br>
      ÿ��нˮ��<span class="Company_other_fd8"><?php echo $this->_tpl_vars['job']['job_salary']; ?>
</span></li>
     <?php endforeach; endif; unset($_from); ?>
       <?php if (! $this->_tpl_vars['job']): ?>
	   <div class="Company_other_no_msg">��������ְλ</div>
	   <?php endif; ?>
      </ul>
     </div>
    <div class="Compply_right_banner m10 fl">
    <?php $_from = $this->_tpl_vars['adlist_27']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_27']):
?><?php echo $this->_tpl_vars['adlist_27']['html']; ?>
<?php endforeach; endif; unset($_from); ?></div>
    <div class="Compply_right_post">
    <div class="Company_post_xs Company_post_7a"><span>����ְλ </span></div>
      <?php $_from = $this->_tpl_vars['job_jia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_jia']):
?>
      <div class="Company_post_other_list Company_post_right_list">
      <ul>
      <li><a href="<?php echo $this->_tpl_vars['job_jia']['job_url']; ?>
" class="Company_other_name"><?php echo $this->_tpl_vars['job_jia']['name']; ?>
</a></li>
      <li>�������У�<?php echo $this->_tpl_vars['job_jia']['job_city_one']; ?>
&nbsp;<?php echo $this->_tpl_vars['job_jia']['job_city_two']; ?>
 <br> нˮ��<span class="Company_other_fd8"><?php echo $this->_tpl_vars['job_jia']['job_salary']; ?>
</span></li>
      </ul>
      </div>
      <?php endforeach; endif; unset($_from); ?>
       <?php if (! $this->_tpl_vars['job_jia']): ?>
	   <div class="Company_other_no_msg">��������ְλ</div>
	   <?php endif; ?>
</div>
</div>
</div>
 <div style="display:none" id="touch_lo" >
  <div class="Pop-up_logoin" style="background:none"> 
	  <div class="Pop-up_logoin_list"> <span>�û�����</span>
		<input type="text" id="username" value="" tabindex="1" name="username" class="ajax_login_input">
	  </div>
	  <div class="Pop-up_logoin_list"> <span>�ܡ��룺</span>
		<input type="password" id="password" tabindex="2" name="password" value=""class="ajax_login_input">
	  </div>
	  <div class="Pop-up_logoin_list"> <span>��֤�룺</span>
		<input id="authcode" type="text" tabindex="3" style="width:60px;" maxlength="4" name="authcode" class="ajax_login_input w60">
		<img id="vcode_img" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/include/authcode.inc.php"  style="margin-right:5px; margin-left:5px;">&nbsp;<a href="javascript:check_code();">������?</a> </div>
	  <div class="Pop-up_logoin_list">
		<div id="msg"></div>
	  </div>
	  <div class="Pop-up_logoin_list"> <span>&nbsp;</span>
		<input id="loginsubmit" class="login_button" type="button" name="loginsubmit" onclick="checkcomlogin()">
		<a href="<?php echo smarty_function_url(array('m' => 'forgetpw','url' => "usertype:1"), $this);?>
"  class="Orange">�������룿</a> </div>
 
	<div class="Pop-up_logoin_bot"> <span>&nbsp;</span> ��û���˺ţ�<a href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="Orange">���ע��</a> </div>
  </div>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 