<?php /* Smarty version 2.6.26, created on 2015-02-01 14:17:20
         compiled from default/resume/resume_share.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'default/resume/resume_share.htm', 99, false),array('function', 'image', 'default/resume/resume_share.htm', 121, false),)), $this); ?>
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
DD_belatedPNG.fix('.png');
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
<style>
#contentDiv ul li {list-style:none;}
.td_title1 {color: #fff;}
.td04 {COLOR: #00659c;TEXT-INDENT: 0px}
.mail{ padding-top:20px; margin-bottom:20px;}
.mail li{width:100%;height:28px; line-height:28px; float:left; margin-bottom:10px;color:#666}
.mail li span{width:130px; text-align:right; display:block; float:left;color:#666}
.zhiw1{width:680px; background:#e0f0ff;border:1px solid #aad8f0; margin-top:10px; margin-bottom:10px;font-size:12px;}
.zhiw{width:680px; background:#e0f0ff;border:1px solid #aad8f0; margin-top:10px; margin-bottom:10px;font-size:12px; float:left; list-style:none;}
.zhiw li{width:300px; line-height:26px; float:left; margin-left:20px;_margin-left:10px; list-style:none;}
.resume_text{border:1px solid #ccc;height:28px; line-height:28px;}
table{ border-collapse:collapse;background:#ffffff }
table tr{background:#ffffff}
table td{ padding:5px; line-height:23px;border:1px solid #dfdede; white-space:normal;word-break:break-all}
.send_yun_bth_jl{width:100px;height:33px; background:#f60;color:#fff; font-size:14px; font-weight:bold;border:none; cursor:pointer}
</style>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function sendjob()
{
	var femail = $("#femail").val();
	var myemail = $("#myemail").val();
	var authcode = $("#authcode").val();
	var html =  $("#html").html();
	var id = "<?php echo $this->_tpl_vars['id']; ?>
";

	if(femail=="" || myemail=="" || authcode==""){ 
		layer.msg('请完整填写信息！', 2, 2);return false; 
	}
	layer.load('执行中，请稍候...',0);
	$.post("index.php?m=resume&c=resumeshare",{femail:femail,myemail:myemail,authcode:authcode,id:id},function(data){		
		if(data==1){ 
			layer.msg('邮件发送成功！', 2, 9);return false; 
		}else if(data==""){ 
			layer.msg('未知错误，请联系管理员！', 2, 0);return false; 
		}else{ 
			layer.msg(data, 2, 8);return false; 
		}
		check_code();
	});
}
</script>
<div> 
  <div style="width:980px;  margin:0 auto; padding-bottom:10px;">
<div style="width:978px; margin:10px auto; background:#FAFAFA;border:1px solid #E0E6EA; padding:20px 0px;float:left">
   <div style="width:750px;margin:0 auto;">
<div style="width:750px;font-size:14px; margin-bottom:10px; background:#fff;">
<div style="line-height:40px; line-height:40px;color:#fff; text-indent:10px; background:#F6572F; font-size:16px; font-family:'microsoft yahei';"><font color="#FFf">★ </font><strong class="td_title1">推荐简历给好友:</strong> </div>
      <ul class="mail" style="width:748px; margin-bottom:10px; float:left;border:1px solid #F2D6BD; background:#FFFDEC; margin-top:10px;">
        <li><span><font color="red">*</font> 朋友的E-mail：</span>
          <input type="text" id="femail" value="" name="femail" class="resume_text" style="width:230px;"/>
        </li>
        <li><span><font color="red">*</font> 朋友对您的昵称：</span>
          <input type="text" id="myemail"  value="" name="myemail" class="resume_text"/>
          让朋友知道是您推荐的简历，与其他垃圾邮件推广简历区分</li>
        <li><span><font color="red">*</font> 验证码：</span>
          <input id="authcode" type="text" tabindex="3"  class="resume_text" style="width:90px; float:left; margin-right:5px;" maxlength="4" name="authcode">
          <img id="vcode_img" src="include/authcode.inc.php" >&nbsp;<a href="javascript:check_code();">看不清?</a> </li>
        <li> <span>&nbsp;</span>
          <input type="hidden"  value="<?php echo $this->_tpl_vars['id']; ?>
" name="id" />
          <input type="button" onClick="sendjob();" value="发送" class="send_yun_bth_jl"  >
        </li>
      </ul>
    </div>

  <div style="clear:both"></div>
<table width="750" border="0"   cellpadding="0" cellspacing="0" bgcolor="#fff" style="font-size:12px; margin:0 auto">
  <tr>
    <td colspan="8" align="center"bgcolor="#f8f8f8"> 
    <font size="5" color="#f60"><?php echo $this->_tpl_vars['Info']['username_n']; ?>
</font>
<font size="4" color="#666666">个人简历 (简历编号：NO.<?php echo $this->_tpl_vars['Info']['id']; ?>
)</font> 
</td>
  </tr>
  
      <tr>
    <td colspan="8" align="center" bgcolor="#53a1f1"> <font color="#ffffff">目前供职情况：我目前处于离职状态（或还未就业状态）。</font> </td>
  </tr>
    <tr>
    <td colspan="8" align="center" bgcolor="#ffffff">简历名称：<?php echo $this->_tpl_vars['Info']['r_name']; ?>
 	&nbsp;&nbsp;&nbsp; [浏览次数]:<?php echo $this->_tpl_vars['Info']['hits']; ?>
 	&nbsp;&nbsp;&nbsp;&nbsp;更新时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['Info']['info_status'] == '1' || $this->_tpl_vars['usertype'] == '2'): ?>
  <tr>
    <td colspan="8" align="center"  bgcolor="#f8f8f8"> <b> 个人基本信息</b> </td>
  </tr>
  <tr>
    <td width="71"  bgcolor="#f8f8f8"><div style="width:80px;">姓名</div></td>
    <td width="98" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['username_n']; ?>
</td>
    <td width="75"  bgcolor="#f8f8f8">性别</td>
    <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_sex']; ?>
</td>
    <td width="90"  bgcolor="#f8f8f8">出生日期</td>
    <td width="130" bgcolor="#ffffff"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['birthday'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</td>
    <td  bgcolor="#ffffff" rowspan="5" style="width:110px;_border-right:1px solid #a2c8d5">
    <div style="width:120px;height:150px; position:relative;">
	 <div style="width:120px; position:absolute;left:-4px; background:#fff;height:153px;border-left: 1px solid #A2C8D5; padding-left:3px;"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['Info']['resume_photo']; ?>
"  onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);" width="120" height="150"/></div>
     </div>
     </td>
  </tr>
  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
  <tr>
   <?php if ($this->_tpl_vars['config']['user_idcard'] == '0'): ?> <td  bgcolor="#f8f8f8">身份证号</td>
    <td colspan="4" bgcolor="#ffffff"><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'idcard','width' => 180), $this);?>
<?php if ($this->_tpl_vars['Info']['idcard_status'] == 1 && $this->_tpl_vars['Info']['idcard']): ?>已认证<?php endif; ?></td><?php endif; ?> 
   <td  bgcolor="#f8f8f8">籍贯</td>
    <td bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['domicile']; ?>
</td>
  </tr> 
  <tr>
    <td  bgcolor="#f8f8f8">身高</td>
    <td bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['height']; ?>
cm</td>
    <td  bgcolor="#f8f8f8">体重</td>
    <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['weight']; ?>
kg</td>
    <td  bgcolor="#f8f8f8">民族</td>
    <td bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['nationality']; ?>
</td>
  </tr>
   <?php endif; ?> 

  <tr>   

       <td  bgcolor="#f8f8f8">学历</td>
    <td  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['useredu']; ?>
</td>
   <td  bgcolor="#f8f8f8">工作经验</td>
    <td bgcolor="#ffffff" colspan="2"><?php echo $this->_tpl_vars['Info']['user_exp']; ?>
</td> 
      <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
    <td  bgcolor="#f8f8f8">婚姻状况</td>
    <td bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_marriage']; ?>
</td>
     <?php else: ?>  
	  <td colspan="2" ></td>
     <?php endif; ?>  
  </tr>
  <tr>
    <td   bgcolor="#f8f8f8">现所在地</td>
    <td  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>colspan="6"<?php else: ?> colspan="6"<?php endif; ?>  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['living']; ?>
</td>

  </tr>
   <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
  <tr>
    <td  bgcolor="#f8f8f8">详细地址</td>
    <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['address']; ?>
</td>
  </tr>
  <tr>
    <td bgcolor="#f8f8f8">个人主页</td>
    <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['homepage']; ?>
</td>
  </tr>
   <?php endif; ?> 
  <tr>
    <td bgcolor="#f8f8f8">自我评价</td>
    <td  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>colspan="7"<?php else: ?> colspan="6"<?php endif; ?> bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['description']; ?>
</td>
  </tr>
  <?php endif; ?> 
  <?php if ($this->_tpl_vars['Info']['doc']): ?>
   <tr>
    <td align="center" bgcolor="#f8f8f8"  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>colspan="7"<?php else: ?> colspan="6"<?php endif; ?> bgcolor="#ffffff"> <b> 求职意向</b> </td>
  </tr>
    <tr>
    <td bgcolor="#f8f8f8">期望行业</td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['hy']; ?>
</td>
    <td bgcolor="#f8f8f8">工作地区 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['city_one']; ?>
 <?php echo $this->_tpl_vars['Info']['city_tow']; ?>
 <?php echo $this->_tpl_vars['Info']['city_three']; ?>
</td>
  </tr>
     <tr>
    <td bgcolor="#f8f8f8">职位性质 </td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['type']; ?>
</td>
    <td bgcolor="#f8f8f8">待遇要求 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['salary']; ?>
 <?php if ($this->_tpl_vars['Info']['salary'] != "面议"): ?> <font color="#888888">RMB</font><?php endif; ?></td>
  </tr>
     <tr>
    <td bgcolor="#f8f8f8">期望职位 </td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['jobname']; ?>
 </td>
    <td bgcolor="#f8f8f8">到职时间 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['report']; ?>
</td>
  </tr>
    <tr>
    <td  bgcolor="#f8f8f8">个人简介</td>
    <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_doc']['doc']; ?>
</td>
  </tr>
  <?php else: ?>
     <tr>
    <td align="center" bgcolor="#f8f8f8"  <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>colspan="8"<?php else: ?> colspan="7"<?php endif; ?> bgcolor="#ffffff"> <b> 求职意向</b> </td>
  </tr>
    <tr>
    <td bgcolor="#f8f8f8">期望行业</td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['hy']; ?>
</td>
    <td bgcolor="#f8f8f8">工作地区 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['city_one']; ?>
 <?php echo $this->_tpl_vars['Info']['city_tow']; ?>
 <?php echo $this->_tpl_vars['Info']['city_three']; ?>
</td>
  </tr>
     <tr>
    <td bgcolor="#f8f8f8">职位性质 </td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['type']; ?>
</td>
    <td bgcolor="#f8f8f8">待遇要求 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['salary']; ?>
 <?php if ($this->_tpl_vars['Info']['salary'] != "面议"): ?> <font color="#888888">RMB</font><?php endif; ?></td>
  </tr>
     <tr>
    <td bgcolor="#f8f8f8">期望职位 </td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['jobname']; ?>
 </td>
    <td bgcolor="#f8f8f8">到职时间 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['report']; ?>
</td>
  </tr>
	 <?php if (is_array ( $this->_tpl_vars['Info']['user_work'] ) && ! empty ( $this->_tpl_vars['Info']['user_work'] )): ?>
     <tr>
    <td colspan="8" align="center" bgcolor="#f8f8f8"> <b> 工作经历</b> </td>
  </tr>
        <?php $_from = $this->_tpl_vars['Info']['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['all']):
?> 
    <tr>
    <td bgcolor="#f8f8f8">工作时间</td>
    <td colspan="4" bgcolor="#ffffff"><?php echo ((is_array($_tmp=$this->_tpl_vars['all']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
 - <?php if ($this->_tpl_vars['all']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['all']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
<?php else: ?>至今<?php endif; ?></td>
    <td bgcolor="#f8f8f8">所在部门 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['all']['department']; ?>
</td>
  </tr>
     <tr>
    <td bgcolor="#f8f8f8">单位名称 </td>
    <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['all']['name']; ?>
</td>
    <td bgcolor="#f8f8f8">担任职位 </td>
    <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['all']['title']; ?>
</td>
  </tr>
     <tr>
    <td bgcolor="#f8f8f8">工作内容 </td>
    <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['all']['content']; ?>
</td>
  </tr>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
  
    <?php if (is_array ( $this->_tpl_vars['Info']['user_edu'] ) && ! empty ( $this->_tpl_vars['Info']['user_edu'] )): ?>
    <tr>
    	<td colspan="8" align="center" bgcolor="#f8f8f8"> <b> 教育经历</b> </td>
    </tr>
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
    <tr>
        <td bgcolor="#f8f8f8">毕业时间</td>
        <td colspan="4" bgcolor="#ffffff"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
</td>
        <td bgcolor="#f8f8f8">专业 </td>
        <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['specialty']; ?>
</td>
    </tr>
    <tr>
    <td bgcolor="#f8f8f8">学校名称 </td>
        <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['name']; ?>
 </td>
        <td bgcolor="#f8f8f8">担任职位 </td>
        <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['title']; ?>
</td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8">专业描述 </td>
        <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_edu'][$this->_sections['all']['index']]['content']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>
    <?php if (is_array ( $this->_tpl_vars['Info']['user_skill'] ) && ! empty ( $this->_tpl_vars['Info']['user_skill'] )): ?>
    <tr>
    <td colspan="8" align="center" bgcolor="#f8f8f8"><b> 专业技能</b></td>
    </tr>    
    <tr>
        <td bgcolor="#f8f8f8">掌握时间</td>
        <td colspan="2" bgcolor="#f8f8f8">技能类别 </td>
        <td colspan="3" bgcolor="#f8f8f8">熟练程度</td>
        <td colspan="2" bgcolor="#f8f8f8">技能名称</td>
    </tr>
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
    <tr>
        <td bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['longtime']; ?>
年</td>
        <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['skill_n']; ?>
</td>
        <td colspan="3" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['ing_n']; ?>
</td>
        <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_skill'][$this->_sections['all']['index']]['name']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>
    <?php if (is_array ( $this->_tpl_vars['Info']['user_xm'] ) && ! empty ( $this->_tpl_vars['Info']['user_xm'] )): ?>
    <tr>
    <td colspan="8" align="center" bgcolor="#f8f8f8"><b> 项目经验</b></td>
    </tr>
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
    <tr>
        <td bgcolor="#f8f8f8">项目时间</td>
        <td colspan="4" bgcolor="#ffffff"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
</td>
        <td bgcolor="#f8f8f8">项目环境 </td>
        <td colspan="2"  bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['sys']; ?>
</td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8">项目名称 </td>
        <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['name']; ?>
</td>
        <td bgcolor="#f8f8f8">担任职位 </td>
        <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['title']; ?>
</td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8">项目内容 </td>
        <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_xm'][$this->_sections['all']['index']]['content']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>
    <?php if (is_array ( $this->_tpl_vars['Info']['user_cert'] ) && ! empty ( $this->_tpl_vars['Info']['user_cert'] )): ?>
    <tr>
    	<td colspan="8" align="center" bgcolor="#f8f8f8"><b> 证书</b></td>
    </tr> 
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
    <tr>
        <td colspan="2" bgcolor="#f8f8f8">  颁发时间</td>
        <td colspan="4" bgcolor="#f8f8f8">  颁发单位</td>
        <td colspan="2" bgcolor="#f8f8f8"> 证书全称</td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#ffffff"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</td>
        <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['title']; ?>
</td>
        <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['name']; ?>
</td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8">证书描述 </td>
        <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_cert'][$this->_sections['all']['index']]['content']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>
    <?php if (is_array ( $this->_tpl_vars['Info']['user_tra'] ) && ! empty ( $this->_tpl_vars['Info']['user_tra'] )): ?>
    <tr>
    	<td colspan="8" align="center" bgcolor="#f8f8f8"><b> 培训经历</b></td>
    </tr> 
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
    <tr>
        <td colspan="2" bgcolor="#f8f8f8">  有效时间</td>
        <td colspan="4" bgcolor="#f8f8f8">  颁发单位</td>
        <td colspan="2" bgcolor="#f8f8f8"> 证书全称</td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#ffffff"><?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月") : smarty_modifier_date_format($_tmp, "%Y年%m月")); ?>
</td>
        <td colspan="4" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['title']; ?>
</td>
        <td colspan="2" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['name']; ?>
</td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8">培训描述 </td>
        <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_tra'][$this->_sections['all']['index']]['content']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>

    <?php if (is_array ( $this->_tpl_vars['Info']['user_other'] ) && ! empty ( $this->_tpl_vars['Info']['user_other'] )): ?>
    <tr>
    	<td colspan="8" align="center" bgcolor="#f8f8f8"><b> 其他信息</b></td>
    </tr> 
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
    <tr>
        <td  bgcolor="#f8f8f8">其他标题</td>
        <td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_other'][$this->_sections['all']['index']]['title']; ?>
</td>
    </tr>
    <tr>
    	<td  bgcolor="#f8f8f8">其他描述</td>
    	<td colspan="7" bgcolor="#ffffff"><?php echo $this->_tpl_vars['Info']['user_other'][$this->_sections['all']['index']]['content']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>
    <tr>
	    <td colspan="8" align="center"  bgcolor="#f8f8f8"><b>联系方式</b></td>
    </tr>
    <tr>
        <td  bgcolor="#f8f8f8">手机</td>
        <td colspan="7" bgcolor="#ffffff"> 登录后可以查看</td>
    </tr>
	<?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
    <tr>
        <td  bgcolor="#f8f8f8">座机
        <td colspan="7" bgcolor="#ffffff">登录后可以查看</td>
    </tr>
	<?php endif; ?>
    <tr>
        <td  bgcolor="#f8f8f8">电子邮件
        <td colspan="7" bgcolor="#ffffff">登录后可以查看</td>
    </tr>
    <?php endif; ?>
</table>
</div></div></div>
<div style="clear:both;"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>