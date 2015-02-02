<?php /* Smarty version 2.6.26, created on 2015-01-29 18:30:25
         compiled from admin/admin_integral_com.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp_top infoboxp_topIjf">
    <span class="infoboxp_top_span">积分设置</span>
	<span class="infoboxp_top_span_sz"><a href="index.php?m=integral">积分设置</a></span>
    <span class="infoboxp_top_span_sz"><a href="index.php?m=integral&c=user">个人积分</a></span>
	<span class="infoboxp_top_span_sz infoboxp_top_span_sz_in "><a href="index.php?m=integral&c=com">企业积分</a></span>
</div>
<div class="main_tag">
<div class="clear"></div>
<div class="tag_box">
<div>
<table width="100%" class="table_form">
  <tr class="admin_table_trbg">
          <th width="220">参数说明：</th>
          <td>参数值</td>
          <td width="330">变量</td>
    </tr>
    <tr>
	<th width="220">发布职位：</th>
		<td>
        <select id="integral_job_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_job_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_job_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_job" id="integral_job" value="<?php echo $this->_tpl_vars['config']['integral_job']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_job_type / integral_job</td>
	</tr>
    <tr class="admin_table_trbg">
	<th width="220">刷新职位：</th>
		<td>
        <select id="integral_jobefresh_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_jobefresh_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_jobefresh_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_jobefresh" id="integral_jobefresh" value="<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_jobefresh_type / integral_jobefresh</td>
	</tr>
    <tr>
	<th width="220">修改职位：</th>
		<td>
        <select id="integral_jobedit_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_jobedit_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_jobedit_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_jobedit" id="integral_jobedit" value="<?php echo $this->_tpl_vars['config']['integral_jobedit']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
         <td width="280">integral_jobedit_type / integral_jobedit</td>
	</tr>
    <tr class="admin_table_trbg">
	<th width="220">下载人才简历：</th>
		<td>
        <select id="integral_down_resume_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_down_resume_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_down_resume_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_down_resume" id="integral_down_resume" value="<?php echo $this->_tpl_vars['config']['integral_down_resume']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_down_resume_type / integral_down_resume</td>
	</tr>
	<tr>
	<th width="220">发送面试人才：</th>
		<td>
        <select id="integral_interview_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_interview_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_interview_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_interview" id="integral_interview" value="<?php echo $this->_tpl_vars['config']['integral_interview']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_interview_type / integral_interview</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">发布紧急招聘：</th>
		<td>
        <select id="com_urgent_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['com_urgent_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['com_urgent_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text tips_class" type="text" name="com_urgent" id="com_urgent" value="<?php echo $this->_tpl_vars['config']['com_urgent']; ?>
" size="" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 / 天</td>
		<td width="280">com_urgent_type / com_urgent</td>
	</tr>
	<tr>
		<th width="220">发布推荐招聘：</th>
		<td>
        <select id="com_recjob_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['com_recjob_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['com_recjob_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text tips_class" type="text" name="com_recjob" id="com_recjob" value="<?php echo $this->_tpl_vars['config']['com_recjob']; ?>
" size="" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 / 天</td>
		<td width="280">com_recjob_type / com_recjob</td>
	</tr>


    <tr class="admin_table_trbg">
	<th width="220">企业评论管理：</th>
		<td>
        <select id="integral_com_comments_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_com_comments_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_com_comments_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text tips_class" type="text" name="integral_com_comments" id="integral_com_comments" value="<?php echo $this->_tpl_vars['config']['integral_com_comments']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 / 月</td>
        <td width="280">integral_com_comments_type / integral_com_comments</td>
	</tr>
	<tr>
	<th width="220">职位自动刷新：</th>
		<td>
        <select id="job_auto_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['job_auto_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['job_auto_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text tips_class" type="text" name="job_auto" id="job_auto" value="<?php echo $this->_tpl_vars['config']['job_auto']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 / 天</td>
        <td width="280">job_auto_type / job_auto</td>
	</tr>
	<tr class="admin_table_trbg">
	<th width="220">设置企业地图：</th>
		<td>
        <select id="integral_map_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_map_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_map_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_map" id="integral_map" value="<?php echo $this->_tpl_vars['config']['integral_map']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_map_type / integral_map</td>
	</tr>
	<tr>
	<th width="220">上传企业横幅：</th>
		<td>
        <select id="integral_banner_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_banner_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_banner_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_banner" id="integral_banner" value="<?php echo $this->_tpl_vars['config']['integral_banner']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_banner_type / integral_banner</td>
	</tr>
	<tr class="admin_table_trbg">
	<th width="220">认证营业执照：</th>
		<td>
        <select id="integral_comcert_type">
        <option value="1" <?php if ($this->_tpl_vars['config']['integral_comcert_type'] == '1'): ?>selected<?php endif; ?>>加</option>
        <option value="2" <?php if ($this->_tpl_vars['config']['integral_comcert_type'] == '2'): ?>selected<?php endif; ?>>减</option>
        </select>
        <input class="input-text" type="text" name="integral_comcert" id="integral_comcert" value="<?php echo $this->_tpl_vars['config']['integral_comcert']; ?>
" size="20" maxlength="255" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"/><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
 </td>
        <td width="280">integral_comcert_type / integral_comcert</td>
	</tr>
    <tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="integral" type="button" name="config" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
	</tr>
</table>
</div>

</div>
</div>
</div>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<script>
$(function(){
	$("#integral").click(function(){
		$.post("index.php?m=integral&c=save",{
			config : $("#integral").val(),
			integral_job : $("#integral_job").val(),
			integral_jobefresh : $("#integral_jobefresh").val(),
			integral_jobedit : $("#integral_jobedit").val(),
			integral_down_resume : $("#integral_down_resume").val(),
			integral_interview : $("#integral_interview").val(),
			com_urgent : $("#com_urgent").val(),
			com_recjob : $("#com_recjob").val(),
			integral_com_comments : $("#integral_com_comments").val(),
			job_auto : $("#job_auto").val(),
			integral_job_type : $("#integral_job_type").val(),
			integral_jobefresh_type : $("#integral_jobefresh_type").val(),
			integral_jobedit_type : $("#integral_jobedit_type").val(),
			integral_down_resume_type : $("#integral_down_resume_type").val(),
			integral_interview_type : $("#integral_interview_type").val(),
			com_urgent_type : $("#com_urgent_type").val(),
			com_recjob_type : $("#com_recjob_type").val(),
			integral_com_comments_type : $("#integral_com_comments_type").val(),
			job_auto_type : $("#job_auto_type").val(),
			integral_map_type : $("#integral_map_type").val(),
			integral_map : $("#integral_map").val(),
			integral_banner_type : $("#integral_banner_type").val(),
			integral_banner : $("#integral_banner").val(),			
			integral_comcert_type : $("#integral_comcert_type").val(),
			integral_comcert : $("#integral_comcert").val(),			
			
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</body>
</html>