<?php /* Smarty version 2.6.26, created on 2015-02-02 23:17:19
         compiled from default/resume/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'default/resume/index.htm', 68, false),array('function', 'image', 'default/resume/index.htm', 73, false),array('function', 'url', 'default/resume/index.htm', 408, false),)), $this); ?>
<!DOCtYPE html PUBLIC "-//W3C//DtD XHtML 1.0 transitional//EN" "http://www.w3.org/tR/xhtml1/DtD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name=keywords content="<?php echo $this->_tpl_vars['keywords']; ?>
"> 
<META name=description content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet"  type="text/css" href="<?php echo $this->_tpl_vars['style']; ?>
/style/Resume.css">
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/resume.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jscolor/jscolor.js"></script>
</head>
<body>
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
<script>var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
'; var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";</script>
	<?php if ($this->_tpl_vars['Info']['id'] != '' && $this->_tpl_vars['Info']['diy_status'] == '1'): ?>
    <div class="fixed_left">
       <div class="rem_chlose_left">ѡ�����ģ��</div>
        <div class="resume_template resume_template_mor"><a target="_self" <?php if ($_GET['tmp'] == 'd'): ?>style="color:#fff"<?php endif; ?> href="index.php?<?php if ($_GET['m']): ?>m=<?php echo $_GET['m']; ?>
&<?php endif; ?><?php if ($_GET['c']): ?>c=<?php echo $_GET['c']; ?>
&<?php endif; ?><?php if ($_GET['act']): ?>act=<?php echo $_GET['act']; ?>
&<?php endif; ?>id=<?php echo $this->_tpl_vars['Info']['id']; ?>
&tmp=d">Ĭ��ģ��</a></div>
        <div class="resume_template"><a target="_self" <?php if ($_GET['tmp'] == '1'): ?>style="color:#993"<?php endif; ?> href="index.php?<?php if ($_GET['m']): ?>m=<?php echo $_GET['m']; ?>
&<?php endif; ?><?php if ($_GET['c']): ?>c=<?php echo $_GET['c']; ?>
&<?php endif; ?><?php if ($_GET['act']): ?>act=<?php echo $_GET['act']; ?>
&<?php endif; ?>id=<?php echo $this->_tpl_vars['Info']['id']; ?>
&tmp=1">��ɫ���</a></div>
        <div class="resume_template"><a target="_self" <?php if ($_GET['tmp'] == '2'): ?>style="color:#993"<?php endif; ?> href="index.php?<?php if ($_GET['m']): ?>m=<?php echo $_GET['m']; ?>
&<?php endif; ?><?php if ($_GET['c']): ?>c=<?php echo $_GET['c']; ?>
&<?php endif; ?><?php if ($_GET['act']): ?>act=<?php echo $_GET['act']; ?>
&<?php endif; ?>id=<?php echo $this->_tpl_vars['Info']['id']; ?>
&tmp=2">��ɫ���</a></div>
        <div class="resume_template"><a target="_self" <?php if ($_GET['tmp'] == '3'): ?>style="color:#993"<?php endif; ?> href="index.php?<?php if ($_GET['m']): ?>m=<?php echo $_GET['m']; ?>
&<?php endif; ?><?php if ($_GET['c']): ?>c=<?php echo $_GET['c']; ?>
&<?php endif; ?><?php if ($_GET['act']): ?>act=<?php echo $_GET['act']; ?>
&<?php endif; ?>id=<?php echo $this->_tpl_vars['Info']['id']; ?>
&tmp=3">��Լ���</a></div>
        <div class="resume_template resume_template_bg" onClick="settemplate('d')">ʹ�ô�ģ��</div>
    </div>
   
    <?php endif; ?>
    <div class="clear"></div>
 	<div class="container" <?php if ($this->_tpl_vars['Info']['resume_diy'] != ''): ?>style="background:<?php echo $this->_tpl_vars['Info']['resume_diy']; ?>
"<?php endif; ?>>
        <div class="head">
            <div class="logo_1">
                <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" class="png"></a>
            </div>
            <?php if ($this->_tpl_vars['Info']['uid'] != $this->_tpl_vars['uid']): ?>
            <span>&middot;<a href="javascript:;" class="sq_resume">��������</a></span>
            <span>&middot;<a onClick="window.print();" href="javascript:;">��ӡ����</a></span>
            <span>&middot;<a href="javascript:void(0);"   onclick="for_link('<?php echo $this->_tpl_vars['Info']['id']; ?>
')">���ؼ���</a></span>
            <?php endif; ?>
        </div>
<div class="menu1Content ">
  <div class="menu1_top">
    <div style="position:relative"> <span style="color:#900; font-size:20px;"><?php echo $this->_tpl_vars['Info']['username_n']; ?>
</span> ���˼��� <span>(������ţ�NO.<?php echo $this->_tpl_vars['Info']['id']; ?>
)</span> <?php if ($this->_tpl_vars['config']['sy_im_online'] == '1' && $this->_tpl_vars['uid']): ?><?php if ($this->_tpl_vars['liststatus'][$this->_tpl_vars['Info']['uid']] == 1): ?><a style=" position:absolute; right:0; top:10px;" href="javascript:;" onClick="addfriend_im('<?php echo $this->_tpl_vars['Info']['uid']; ?>
','1','1','<?php echo $this->_tpl_vars['Info']['username']; ?>
');"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/default/images/online.gif" height="26" /></a><?php else: ?><a style=" position:absolute; right:0; top:10px;" href="javascript:;" onClick="addfriend_im('<?php echo $this->_tpl_vars['Info']['uid']; ?>
','1','2','<?php echo $this->_tpl_vars['Info']['username']; ?>
');"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/default/images/offline.gif" height="26" /></a><?php endif; ?><?php endif; ?></div>
    <!--<p>Ŀǰ��ְ�������Ŀǰ������ְ״̬����δ��ҵ״̬���� </p>-->
	<p>Ŀǰ��ְ��������ҵ��������кõĻ�����Կ��ǡ�</p>
  </div>
  <div class="note "> <span>�������ƣ�<?php echo $this->_tpl_vars['Info']['r_name']; ?>
</span> <span>[�������]��<?php echo $this->_tpl_vars['Info']['hits']; ?>
</span> <span>[���ش���]��<?php echo $this->_tpl_vars['Info']['dnum']; ?>
</span><span>����ʱ�䣺<?php echo $this->_tpl_vars['Info']['lastupdate']; ?>
</span> </div>
  <div class="yun_content">
    <div class="title bor_top" style="position:relative;">
    	<div class="title dom_resume_review" id="m0">
        <?php if ($this->_tpl_vars['Info']['info_status'] == '1' || $this->_tpl_vars['usertype'] == '2'): ?>
      <div class="photo">
        <div><img src="<?php echo $this->_tpl_vars['Info']['resume_photo']; ?>
" width="120" height="150" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);"></div>
      </div>
      
      <h1 >���˻�����Ϣ</h1>
      <div class="list clear">
        <div class="list_n"><span>����</span></div>
        <div class="list_2" ><?php echo $this->_tpl_vars['Info']['username_n']; ?>
</div>
        <div class="list_n"><span>�Ա�</span></div>
        <div class="list_2"><?php echo $this->_tpl_vars['Info']['user_sex']; ?>
</div>
        <div class="list_n"><span>��������</span></div>
        <div class="list_2 w144"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['birthday'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��%d��") : smarty_modifier_date_format($_tmp, "%Y��%m��%d��")); ?>
</div>
      </div>
	  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
      <div class="list clear">
         <?php if ($this->_tpl_vars['config']['user_idcard'] == '0'): ?><div class="list_n"><span>���֤��</span></div>
        <div class="list_2 list_3" style="color:red"><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'idcard','width' => 180), $this);?>
<?php if ($this->_tpl_vars['Info']['idcard_status'] == 1 && $this->_tpl_vars['Info']['idcard']): ?>����֤<?php endif; ?></div><?php endif; ?> 
        <div class="list_n"><span>����</span></div>
        <div class="list_2 w144"><?php echo $this->_tpl_vars['Info']['domicile']; ?>
</div>
      </div>
      <div class="list clear">
        <div class="list_n"><span>���</span></div>
        <div class="list_2"><?php echo $this->_tpl_vars['Info']['height']; ?>
cm</div>
        <div class="list_n"><span>����</span></div>
        <div class="list_2"><?php echo $this->_tpl_vars['Info']['weight']; ?>
kg</div>
        <div class="list_n"><span> ����</span></div>
        <div class="list_2 w144"><?php echo $this->_tpl_vars['Info']['nationality']; ?>
</div>
      </div>
	  <?php endif; ?> 
      <div class="list clear">
		<?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
        <div class="list_n"><span>����״��</span></div>
        <div class="list_2"><?php echo $this->_tpl_vars['Info']['user_marriage']; ?>
</div>
		<?php endif; ?> 
        <div class="list_n"><span>ѧ��</span></div>
        <div class="list_2"><?php echo $this->_tpl_vars['Info']['useredu']; ?>
</div>
        <div class="list_n"><span>��������</span></div>
        <div class="list_2 w144"><?php echo $this->_tpl_vars['Info']['user_exp']; ?>
</div>
      </div>
      <div class="list clear">
        <div class="list_n"><span>�����ڵ�</span></div>
        <div class="list_ti5"><?php echo $this->_tpl_vars['Info']['living']; ?>
</div>
      </div>
	  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
      <div class="list clear">
        <div class="list_n"><span>��ϸ��ַ</span></div>
        <div class="list_ti5"><?php echo $this->_tpl_vars['Info']['address']; ?>
</div>
      </div>
      <div class="list clear">
        <div class="list_n" id="right"><span>������ҳ</span></div>
        <div class="list_4" id="left">
          <div><?php echo $this->_tpl_vars['Info']['homepage']; ?>
</div>
        </div>
      </div>
	  <?php endif; ?> 
      <div class="list clear list_bg1 list_bg_right_r">
        <div class="list_t1 list_bnone" id="right"><span class="list_bnone">��������</span></div>
        <div class="list_4 list_bg2" id="left"  <?php if ($this->_tpl_vars['Info']['basic_info'] != '1'): ?>style="width:490px;"<?php endif; ?> >
          <div  class="list_tim"><?php echo $this->_tpl_vars['Info']['description']; ?>
</div>
        </div>
      
      </div>
      </div>
      <?php endif; ?>
      <div class="clear"></div>
      <div class="title dom_resume_review" id="m1" >
        <h1 >��ְ����</h1>
        <div class="list clear">
          <div class="list_n"><span>������ҵ</span></div>
          <div class="list_2 list_3"><?php echo $this->_tpl_vars['Info']['hy']; ?>
</div>
          <div class="list_n"><span>��������</span></div>
          <div class="list_2  w270" style="border-right:none;"><?php echo $this->_tpl_vars['Info']['city_one']; ?>
 <?php echo $this->_tpl_vars['Info']['city_two']; ?>
 <?php echo $this->_tpl_vars['Info']['city_three']; ?>
 </div>
        </div>
        <div class="list clear">
        
        <div class="list_n"><span>����Ҫ��</span></div>
          <div class="list_2 list_3"><?php echo $this->_tpl_vars['Info']['salary']; ?>
 <?php if ($this->_tpl_vars['Info']['salary'] != "����"): ?>
          <font color="#888888">RMB</font><?php endif; ?></div>
          <div class="list_n"><span>��ְʱ��</span></div>
          <div class="list_2  w270" style="border-right:none;"><?php echo $this->_tpl_vars['Info']['report']; ?>
</div>

        </div>
                <div class="list clear list_bg1" style="background:none;">
<div id="right" class="list_t1 list_bnone">
<span class="list_bnone">ְλ����</span>
</div>
<div id="left" class="list_4 list_bg2 " style="text-align:left; padding-left:5px;width:624px;">
<?php echo $this->_tpl_vars['Info']['type']; ?>

</div>
</div>
        <div class="list clear list_bg1" style="border-bottom:none;">
<div id="right" class="list_t1 list_bnone">
<span class="list_bnone">����ְλ</span>
</div>
<div id="left" class="list_4 list_bg2 " style="text-align:left; padding-left:5px;width:624px;">
<?php echo $this->_tpl_vars['Info']['jobname']; ?>

</div>
</div>
</div>
<div class="title bor_top" id="dom0" style="position:relative;">
	 <?php if (is_array ( $this->_tpl_vars['Info']['user_work'] ) && ! empty ( $this->_tpl_vars['Info']['user_work'] )): ?>
     <div class="clear"></div>
         <div class="title dom_resume_review" id="m3">
	    <h1 ><b>��������</b></h1>
        <?php $_from = $this->_tpl_vars['Info']['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['all']):
?> 
        <div class="list clear">
          <div class="list_n"><span>����ʱ�䣺</span></div>
          <div class="list_2 list_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['all']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
 - <?php if ($this->_tpl_vars['all']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['all']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
<?php else: ?>����<?php endif; ?></div>
          <div class="list_n"><span>���ڲ���</span></div>
          <div class="list_2 list_8 w270" ><?php echo $this->_tpl_vars['all']['department']; ?>
</div>
        </div>
        <div class="list clear">
          <div class="list_n"><span>��λ����</span></div>
          <div class="list_2 list_3"><?php echo $this->_tpl_vars['all']['name']; ?>
</div>
          <div class="list_n"><span>����ְλ</span></div>
          <div class="list_2 list_8 w270" ><?php echo $this->_tpl_vars['all']['title']; ?>
</div>
        </div>
        <div class="list clear list_bg1"  >
          <div class="list_t1 list_bnone" id="right1" ><span>��������</span></div>
          <div class="list_4 list_bg2" id="left1">
            <div class="list_tim"><?php echo $this->_tpl_vars['all']['content']; ?>
</div>
          </div>
        </div>
        <?php endforeach; endif; unset($_from); ?>
      </div>
      <?php endif; ?>
	 <?php if (is_array ( $this->_tpl_vars['Info']['user_edu'] ) && ! empty ( $this->_tpl_vars['Info']['user_edu'] )): ?>
     <div class="clear"></div>
         <div class="title dom_resume_review" id="m0">
	    <h1 ><b>��������</b></h1>
        <?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Info']['user_edu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?> 
        <div class="list clear">
          <div class="list_n"><span>��ҵʱ�䣺</span></div>
          <div class="list_2 list_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
</div>
          <div class="list_n"><span>רҵ</span></div>
          <div class="list_2 list_8 w270" ><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['specialty']; ?>
</div>
        </div>
        <div class="list clear">
          <div class="list_n"><span>ѧУ����</span></div>
          <div class="list_2 list_3"><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['name']; ?>
</div>
          <div class="list_n"><span>����ְλ</span></div>
          <div class="list_2 list_8 w270" ><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['title']; ?>
</div>
        </div>
        <div class="list clear list_bg1"  >
          <div class="list_t1 list_bnone" id="right1" ><span>רҵ����</span></div>
          <div class="list_4 list_bg2" id="left1">
            <div class="list_tim"><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['content']; ?>
</div>
          </div>
        </div>
        <?php endfor; endif; ?>
      </div>
      <?php endif; ?>
      <?php if (is_array ( $this->_tpl_vars['Info']['user_skill'] ) && ! empty ( $this->_tpl_vars['Info']['user_skill'] )): ?>
      <div class="clear"></div>
      <div class="title dom_resume_review" id="m2">
        <h1 >רҵ����</h1>
        <div class="list clear">
          <div class="list_n"><span>����ʱ��</span></div>
          <div class="list_n list_t2"><span>�������</span></div>
          <div class="list_n list_t3"><span>�����̶�</span></div>
          <div class="list_n list_t4 w276"><span>��������</span></div>
        </div>
        <?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Info']['user_skill']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?> 
        <div class="list clear">
		  <div class="list_2 list_5"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['longtime']; ?>
��</div>
		  <div class="list_2 list_6"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['skill_n']; ?>
</div>
		  <div class="list_2 list_7"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['ing_n']; ?>
</div> 
          <div class="list_2 list_8 w270"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['name']; ?>
</div>
        </div>
           <?php endfor; endif; ?>
		</div>
        <?php endif; ?>
        <?php if (is_array ( $this->_tpl_vars['Info']['user_xm'] ) && ! empty ( $this->_tpl_vars['Info']['user_xm'] )): ?>
         <div class="title dom_resume_review" id="m4">
	    <h1 >��Ŀ����</h1>
        <?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Info']['user_xm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?> 
        <div class="list clear">
          <div class="list_n"><span>��Ŀʱ�䣺</span></div>
          <div class="list_2 list_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
</div>
          <div class="list_n"><span>��Ŀ����</span></div>
          <div class="list_2 list_8 w270"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['sys']; ?>
</div>
        </div>
        <div class="list clear">
          <div class="list_n"><span>����ְλ��</span></div>
          <div class="list_2 list_3"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['title']; ?>
</div>
          <div class="list_n"><span>��Ŀ����</span></div>
          <div class="list_2 list_8 w270"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['name']; ?>
</div>
        </div>
        <div class="list clear list_bg1">
          <div class="list_t1 list_bnone" id="right1"><span>��Ŀ���ݣ�</span></div>
          <div class="list_4 list_bg2" id="left1" >
            <div class="list_tim"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['content']; ?>
</div>
          </div>
        </div>
        <?php endfor; endif; ?>
      </div>
      <?php endif; ?>  
      <?php if (is_array ( $this->_tpl_vars['Info']['user_cert'] ) && ! empty ( $this->_tpl_vars['Info']['user_cert'] )): ?>
      <div class="clear"></div>
      <div class="title dom_resume_review" id="m5">
      <h1 ><b>֤��</b></h1>
        <?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Info']['user_cert']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?>
        <div class="list clear">
          <div class="list_n w185"><span>�䷢ʱ�䣺</span></div>
          <div class="list_n list_t2 w185"><span>�䷢��λ��</span></div>
          <div class="list_n list_t4 w325"><span>֤��ȫ�ƣ�</span></div>
        </div>
        <div class="list clear">
          <div class="list_2 list_5 w180"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��%d��") : smarty_modifier_date_format($_tmp, "%Y��%m��%d��")); ?>
</div>
          <div class="list_2 list_6 w180"><?php echo $this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['title']; ?>
</div>
          <div class="list_2 list_8 w320"><?php echo $this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['name']; ?>
</div>
        </div>
        <div class="list clear list_bg1">
          <div class="list_t1 list_bnone" id="right1" ><span>֤������</span></div>
          <div class="list_4 list_bg2" id="left1">
            <div class="list_tim"><?php echo $this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['content']; ?>
</div>
          </div>
        </div>
      <?php endfor; endif; ?>
      </div>
      <?php endif; ?>
      <?php if (is_array ( $this->_tpl_vars['Info']['user_tra'] ) && ! empty ( $this->_tpl_vars['Info']['user_tra'] )): ?>
      <div class="clear"></div>
      <div class="title dom_resume_review" id="m1">
        <h1 >��ѵ����</h1>
        <?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Info']['user_tra']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?> 
        <div class="list clear">
          <div class="list_n w185"><span>��ѵʱ�䣺</span></div>
          <div class="list_n list_t2 w185"><span>��ѵ����</span></div>
          <div class="list_n list_t4 w333" ><span>��ѵ���ģ�</span></div>
        </div>
        <div class="list clear">
          <div class="list_2 list_5 w180"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y��%m��") : smarty_modifier_date_format($_tmp, "%Y��%m��")); ?>
 </div>
          <div class="list_2 list_6 w180"><?php echo $this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['title']; ?>
</div>
          <div class="list_2 list_8 w320"><?php echo $this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['name']; ?>
</div>
        </div>
        <div class="list clear" style="background:#f8f8f8">
          <div class="list_t1 list_bnone" id="right"><span>��ѵ����:</span> </div>
          <div class="list_4 list_bg2" id="left" >
            <div class="list_tim"><?php echo $this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['content']; ?>
</div>
          </div>
        </div>
        <?php endfor; endif; ?>
      </div>
      <?php endif; ?>
      <?php if (is_array ( $this->_tpl_vars['Info']['user_other'] ) && ! empty ( $this->_tpl_vars['Info']['user_other'] )): ?>
      <div class="clear"></div>
      <div class="title dom_resume_review" id="m6">
        <h1 >������Ϣ</h1>
        <?php unset($this->_sections['all']);
$this->_sections['all']['name'] = 'all';
$this->_sections['all']['loop'] = is_array($_loop=$this->_tpl_vars['Info']['user_other']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['all']['show'] = true;
$this->_sections['all']['max'] = $this->_sections['all']['loop'];
$this->_sections['all']['step'] = 1;
$this->_sections['all']['start'] = $this->_sections['all']['step'] > 0 ? 0 : $this->_sections['all']['loop']-1;
if ($this->_sections['all']['show']) {
    $this->_sections['all']['total'] = $this->_sections['all']['loop'];
    if ($this->_sections['all']['total'] == 0)
        $this->_sections['all']['show'] = false;
} else
    $this->_sections['all']['total'] = 0;
if ($this->_sections['all']['show']):

            for ($this->_sections['all']['index'] = $this->_sections['all']['start'], $this->_sections['all']['iteration'] = 1;
                 $this->_sections['all']['iteration'] <= $this->_sections['all']['total'];
                 $this->_sections['all']['index'] += $this->_sections['all']['step'], $this->_sections['all']['iteration']++):
$this->_sections['all']['rownum'] = $this->_sections['all']['iteration'];
$this->_sections['all']['index_prev'] = $this->_sections['all']['index'] - $this->_sections['all']['step'];
$this->_sections['all']['index_next'] = $this->_sections['all']['index'] + $this->_sections['all']['step'];
$this->_sections['all']['first']      = ($this->_sections['all']['iteration'] == 1);
$this->_sections['all']['last']       = ($this->_sections['all']['iteration'] == $this->_sections['all']['total']);
?> 
        <div class="list clear">
          <div class="list_t1" id="right1"><span>�������⣺</span></div>
          <div class="list_4" id="left1">
            <div><?php echo $this->_tpl_vars['Info']['user_other'][$this->_sections['all']['index']]['title']; ?>
</div>
          </div>
        </div>
        <div class="list clear list_bg1">
          <div class="list_t1 list_bnone" id="right1 " ><span class=" list_bnone">����������</span></div>
          <div class="list_4 list_bg2" id="left1">
            <div class="list_tim"><?php echo $this->_tpl_vars['Info']['user_other'][$this->_sections['all']['index']]['content']; ?>
</div>
          </div>
        </div>
        <?php endfor; endif; ?>
      </div>
      <?php endif; ?>        
      <?php if ($this->_tpl_vars['Info']['doc']): ?>      
        <div class="list clear list_bg1"  >
          <div class="list_4 " id="left1" style="border:none;width:100%; background:#fff;">
            <div class="list_tim"><?php echo $this->_tpl_vars['Info']['user_doc']['doc']; ?>
</div>
          </div>
        </div>
        <?php endif; ?>
        <div class="clear"></div>
        </div>
        <?php if (is_array ( $this->_tpl_vars['Info']['user_show'] ) && ! empty ( $this->_tpl_vars['Info']['user_show'] )): ?>
          <div class="title dom_resume_review">
	    <h1 >�ҵ���Ʒ</h1>
        <div class="dom_resume_sp_img">
        <!--��ƷͼƬ-->
 <div class="fairs_introduction_p" >
        <ul class="fairs_introduction_img" id="rolling_img1">
        <?php $_from = $this->_tpl_vars['Info']['user_show']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <li>
                <a class="image_gall" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['picurl']; ?>
">
                    <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['picurl']; ?>
" width="215" height="153" />
                </a>
            </li>
		<?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
</div>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/popImage.css" type="text/css"> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery.popImage.mini.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/ScrollPic.js" language="javascript"></script>
 <SCRIPT language="javascript" type="text/javascript">
<!--//--><![CDATA[//><!--

var li_num=$("#rolling_img1 li").length;
if(li_num>3){//���ͼƬ�������㣬�Ͳ�ִ���л�
	var scrollPic_02 = new ScrollPic();
	scrollPic_02.scrollContId   = "rolling_img1"; //��������ID
	scrollPic_02.arrLeftId      = "LeftArr";//���ͷID
	scrollPic_02.arrRightId     = "RightArr"; //�Ҽ�ͷID
	scrollPic_02.frameWidth     = 707;//��ʾ����
	scrollPic_02.pageWidth      = 232; //��ҳ���
	scrollPic_02.speed          = 10; //�ƶ��ٶ�(��λ���룬ԽСԽ��)
	scrollPic_02.space          = 10; //ÿ���ƶ�����(��λpx��Խ��Խ��)
	scrollPic_02.autoPlay       = true; //�Զ�����
	scrollPic_02.autoPlayTime   = 2; //�Զ����ż��ʱ��(��)
	scrollPic_02.initialize(); //��ʼ��
}
//--><!]]> 
$(function(){
	$("a.image_gall").popImage();
})
</SCRIPT> 
        
</div>
<?php endif; ?>
        
        
        
        </div>
       <div class="title dom_resume_review">
	    <h1 >��ϵ��ʽ</h1>
        <?php if ($this->_tpl_vars['Info']['m_status'] == '1'): ?>
            <div class="list clear">
              <div class="list_t1" id="right1"><span>�ֻ���</span></div>
              <div class="list_4" id="left1"><div><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'number' => $this->_tpl_vars['Info']['telphone'],'action' => 'telphone','width' => 200), $this);?>
</div></div>
            </div>
			 <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
            <div class="list clear">
              <div class="list_t1" id="right1"><span>������</span></div>
              <div class="list_4" id="left1"><div><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'number' => $this->_tpl_vars['Info']['telhome'],'action' => 'telhome','width' => 200), $this);?>
</div></div>
            </div>
			<?php endif; ?> 
            <div class="list clear">
              <div class="list_t1" id="right1"><span>�����ʼ���</span></div>
              <div class="list_4" id="left1"><div><?php echo $this->_tpl_vars['Info']['email']; ?>
</div></div>
            </div>
           <?php else: ?>
           <div class="re_touch"><?php echo $this->_tpl_vars['Info']['link_msg']; ?>
</div>
          <?php endif; ?>
	</div>
    <div class="clear"></div>
    </div>
    <?php if ($this->_tpl_vars['Info']['uid'] != $this->_tpl_vars['uid']): ?>
	<div class="btn"> 
    	<input class="btn_1" type="button" onClick="talent_pool('<?php echo $this->_tpl_vars['Info']['uid']; ?>
','<?php echo $this->_tpl_vars['Info']['id']; ?>
')" value="�����˲ſ�">
       <input class="btn_1 sq_resume" type="button"  uid="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" eid="" username="<?php echo $this->_tpl_vars['Info']['name']; ?>
" name="submit" value="�������� ">
       <input class="btn_1" type="button" name="submit" value="��ӡ���� " onClick="window.print();"> 
       <input class="btn_1" type="button" name="submit" value="�������" onClick="javascript:window.location.href='<?php echo smarty_function_url(array('m' => 'resume','url' => "c:resumeshare,id:".($this->_tpl_vars['Info']['id'])), $this);?>
'">
	</div>
    <?php endif; ?>
</div>
</div>
  <div class="foot"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['config']['sy_webname']; ?>
</a> &copy; ��Ȩ���� <?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
  ������Ƹ��������Ϣ�� ,δ��������Ȩ����ת�� <br />
  </div>
</div> 
<div id='for_link' style="display:none;float:left;width:300px">
	<div class="city_1" style="padding-top:5px;"></div>
	<div class="btn" style="padding-bottom: 20px; padding-top: 10px;">  
       <input class="btn_1 down_resume" type="button" name="submit" value="���ؼ��� "> 
	</div>
</div>

</div> 
<div class=" " id='job_box' style="display:none;float:left">
    <div class="city_1">
        <dl class="city_3">
          <dt>
			<span class="city_01">����ְλ��</span><select id='jobname'></select>
		  </dt>
        </dl>
		  <dl class="city_3">
          <dt>
			<span class="city_01">��ϵ�ˣ�</span><input size='5'  id='linkman' value=''>

			<span class="city_01">��ϵ�绰��</span><input size='10'  id='linktel' value=''>
		  </dt>
        </dl>
		 <dl class="city_3">
          <dt>
			<span class="city_01">����ʱ�䣺</span><input size='34' id='intertime' value=''>
		  </dt>
        </dl>
		 <dl class="city_3">
          <dt>
			<span class="city_01">���Ե�ַ��</span><input size='34' id='address' value=''>
		  </dt>
        </dl>
		<dl class="city_3"  >  
			<dt><span class="city_01">���Ա�ע��</span><textarea id="content" cols="40" rows="5" class="resyme_text"></textarea>
		</dl>
      <dl class="city_3" id="resume_job" style="height:40px;">
        <dt><span class="city_01">&nbsp;</span><input type="hidden" value="<?php echo $this->_tpl_vars['Info']['id']; ?>
" id="eid">
		<input type="hidden" value="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" id="uid">
		<input type="hidden" id="username" value="<?php echo $this->_tpl_vars['Info']['name']; ?>
"> 
		<input class="resume_sub_yq" id="click_invite" type="button" value="��������"  >
    </dl>
  </div>
 </div>
<div id="bg"></div>
<a name="resume"></a>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['imtplstyle'])."/index.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>