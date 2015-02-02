<?php /* Smarty version 2.6.26, created on 2015-01-29 21:26:12
         compiled from admin/web_config.htm */ ?>
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
    <span class="infoboxp_top_span">页面设置</span>
</div>
<div class="main_tag">
<div class="clear"></div>
<div class="tag_box">
<div>
<form method="post">
<table width="100%" class="table_form">
  <tr>
          <th width="220">参数说明：</th>
          <td>参数值</td>
          <td width="210">变量</td>
    </tr>
  <tr class="admin_table_trbg">
    	<th width="220">伪静态设置：</th>
		<td>
          <input type="radio" name="sy_seo_rewrite" value="0" id="RadioGroup2_12" <?php if ($this->_tpl_vars['config']['sy_seo_rewrite'] == '0'): ?>checked<?php endif; ?>>
          <label for="RadioGroup2_12">原链接</label>&nbsp;
          <input type="radio" name="sy_seo_rewrite" value="1" id="RadioGroup2_13" <?php if ($this->_tpl_vars['config']['sy_seo_rewrite'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup2_13">伪静态</label><br>
          <font color="gray" style="display:none">修改伪静态之前要先根据服务器添加伪静态规则</font>
        </td>
        <td width="160">sy_seo_rewrite</td>
    </tr> 
	<tr>
    	<th width="220">头部浮动导航：</th>
		<td>
          <input type="radio" name="sy_header_fix" value="0" id="sy_header_fix_0" <?php if ($this->_tpl_vars['config']['sy_header_fix'] == '0'): ?>checked<?php endif; ?>>
          <label for="sy_header_fix_0">关闭</label>&nbsp;
          <input type="radio" name="sy_header_fix" value="1" id="sy_header_fix_1" <?php if ($this->_tpl_vars['config']['sy_header_fix'] == '1'): ?>checked<?php endif; ?>>
          <label for="sy_header_fix_1">开启</label><br>
          <font color="gray" style="display:none"></font>
        </td>
        <td width="160">sy_header_fix</td>
    </tr>       
	 <tr class="admin_table_trbg">
    	<th width="220">新闻显示形式：</th>
		<td>
          <input type="radio" name="sy_news_rewrite" value="1" id="sy_news_rewrite_1" <?php if ($this->_tpl_vars['config']['sy_news_rewrite'] == '1'): ?>checked<?php endif; ?>>
          <label for="sy_news_rewrite_1">动态</label>&nbsp;
          <input type="radio" name="sy_news_rewrite" value="2" id="sy_news_rewrite_2" <?php if ($this->_tpl_vars['config']['sy_news_rewrite'] == '2'): ?>checked<?php endif; ?>>
          <label for="sy_news_rewrite_2">静态</label><br>
          <font color="gray" style="display:none">修改为静态，访问时显示静态页内容，提升效率</font>
        </td>
        <td width="160">sy_news_rewrite</td>
    </tr> 	
	<tr >
    	<th width="220">友情链接申请：</th>
		<td>
          <input type="radio" name="sy_linksq" value="0" id="sy_linksq_0" <?php if ($this->_tpl_vars['config']['sy_linksq'] == '0'): ?>checked<?php endif; ?>>
          <label for="sy_linksq_0">开启</label>&nbsp;
          <input type="radio" name="sy_linksq" value="1" id="sy_linksq_1" <?php if ($this->_tpl_vars['config']['sy_linksq'] == '1'): ?>checked<?php endif; ?>>
          <label for="sy_linksq_1">关闭</label>
        </td>
        <td width="160">sy_linksq</td>
    </tr>
	<tr class="admin_table_trbg">
    	<th width="220">手机端自动跳转到wap：</th>
		<td>
          <input type="radio" name="sy_wap_jump" value="1" id="sy_wap_jump_1" <?php if ($this->_tpl_vars['config']['sy_wap_jump'] == '1'): ?>checked<?php endif; ?>>
          <label for="sy_linksq_0">开启</label>&nbsp;
          <input type="radio" name="sy_wap_jump" value="0" id="sy_wap_jump_0" <?php if ($this->_tpl_vars['config']['sy_wap_jump'] == '0'): ?>checked<?php endif; ?>>
          <label for="sy_linksq_1">关闭</label>
        </td>
        <td width="160">sy_wap_jump</td>
    </tr>
	<tr >
    	<th width="220"><font color="red">找人才页面默认显示类别</font>：</th>
		<td>
          <input type="radio" name="sy_default_userclass" value="1" id="RadioGroup10_16" <?php if ($this->_tpl_vars['config']['sy_default_userclass'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_16">是</label>&nbsp;
          <input type="radio" name="sy_default_userclass" value="2" id="RadioGroup10_17" <?php if ($this->_tpl_vars['config']['sy_default_userclass'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_17">否</label>
          <font color="gray"  >若选择"否"，则直接显示简历列表</font>
        </td>
        <td width="160">sy_default_userclass</td>
    </tr>
	<tr class="admin_table_trbg">
    	<th width="220"><font color="red">找工作页面默认显示类别</font>：</th>
		<td>
          <input type="radio" name="sy_default_comclass" value="1" id="RadioGroup10_14" <?php if ($this->_tpl_vars['config']['sy_default_comclass'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_14">是</label>&nbsp;
          <input type="radio" name="sy_default_comclass" value="2" id="RadioGroup10_15" <?php if ($this->_tpl_vars['config']['sy_default_comclass'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup10_15">否</label>
          <font color="gray"  >若选择"否"，则直接显示职位列表</font>
        </td>
        <td width="160">sy_default_comclass</td>
    </tr>
    <tr class="admin_table_trbg">
		<th width="220">前台人名显示：</th>
		<td>
		    <input type="radio" name="user_name" value="1" id="Radiouser_name_1" <?php if ($this->_tpl_vars['config']['user_name'] == '1' || $this->_tpl_vars['config']['user_name'] == ''): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_1">全名</label>
		    <input type="radio" name="user_name" value="2" id="Radiouser_name_2" <?php if ($this->_tpl_vars['config']['user_name'] == '2'): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_2">姓氏</label>
            <input type="radio" name="user_name" value="3" id="Radiouser_name_3" <?php if ($this->_tpl_vars['config']['user_name'] == '3'): ?>checked<?php endif; ?>>
		    <label for="Radiouser_name_3">简历编号</label><br/>
            <font color="gray">例：某人姓名为张三，选择全名前台直接显示张三，姓氏则显示张先生(女士)，简历编号则是直接用其代替姓名显示。</font>
            </td>
            <td width="160">user_name</td>
	</tr>
	<tr>
		<th width="220">前台微招聘发布次数：</th>
		<td><input class="input-text tips_class" type="text" name="sy_once" id="sy_once" value="<?php echo $this->_tpl_vars['config']['sy_once']; ?>
" size="10" maxlength="255" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> 次/天<font color="gray" style="display:none">提示：值为0时表示不限制次数</font></td>
         <td width="160">sy_once</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="220">同一IP点击广告记录间隔：</th>
		<td><input class="input-text tips_class" type="text" name="sy_adclick" id="sy_adclick" value="<?php echo $this->_tpl_vars['config']['sy_adclick']; ?>
" size="10" maxlength="255"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> 小时<font color="gray" style="display:none">提示：值为0时表示不限制，其他数字为期限内只记录一次</font></td>
         <td width="160">sy_adclick</td>
	</tr>
	<tr>
		<th width="220">前台微简历发布次数：</th>
		<td><input class="input-text tips_class" type="text" name="sy_tiny" id="sy_tiny" value="<?php echo $this->_tpl_vars['config']['sy_tiny']; ?>
" size="10" maxlength="255" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/> 次/天<font color="gray" style="display:none">提示：值为0时表示不限制次数</font></td>
         <td width="160">sy_tiny</td>
	</tr>
  
    <tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="config" type="button" name="config" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
	</tr>
</table>
</form>
</div>

</div>
</div>
</div>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<script>
$(function(){
	$("#config").click(function(){
		$.post("index.php?m=web_config&c=save",{
			config : $("#config").val(),
			sy_seo_rewrite : $("input[name=sy_seo_rewrite]:checked").val(), 
			sy_header_fix : $("input[name=sy_header_fix]:checked").val(), 
			sy_news_rewrite : $("input[name=sy_news_rewrite]:checked").val(), 
			sy_linksq : $("input[name=sy_linksq]:checked").val(),
			sy_wap_jump : $("input[name=sy_wap_jump]:checked").val(),
			sy_default_comclass : $("input[name=sy_default_comclass]:checked").val(),
			sy_default_userclass : $("input[name=sy_default_userclass]:checked").val(),
			user_name : $("input[name=user_name]:checked").val(),
			sy_once : $("#sy_once").val(),
			sy_tiny : $("#sy_tiny").val(),
			sy_adclick : $("#sy_adclick").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){
			config_msg(data);
		});
	});
})
</script>
</body>
</html>