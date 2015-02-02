<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:04
         compiled from admin/admin_xml.htm */ ?>
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
<title></title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div class="admin_Prompt">
<div class="admin_Prompt_span">
    注意事项：
    1. 生成请确保目录有可写权限，否则无法生成。
    2. 添加数量时，请勿填写太大数值
</div><div class="admin_Prompt_close"></div></div>
<div class="infoboxp_top"><h6>生成XML</h6></div>
	<table width="100%" class="table_form table_form_bg">
		<tr>
			<th width="40%">数据类型：</th>
			<td>
			<select name="datetype" id='datetype' onchange="dchange();">
			<option value="all">全部</option>
			<option value="company">企业</option>
			<option value="job">职位</option>
			<option value="resume">简历</option>
			<option value="ask">问答</option>
			<option value="news">新闻</option>
			</select>
			</td>
		</tr>
		<tr>
			<th width="40%">数据顺序：</th>
			<td>
			<select name="order" id='order'>
			<option value="addtime">添加时间</option>
			<option value="uptime">更新时间</option>
			</select>
			</td>
		</tr>
		<tr>
			<th width="40%">更新频率：</th>
			<td>
			<select name="frequency" id='frequency'>
			<option value="always">总是</option>
			<option value="hourly">每小时</option>
			<option value="daily">每天</option>
			<option value="weekly">每周</option>
			<option value="monthly">每月</option>
			<option value="yearly">每年</option>
			<option value="never">从不</option>
			</select>
			</td>
		</tr>
		<tr class="admin_table_trbg">
			<th width="40%">获取数量：</th>
			<td><input class="input-text" type="text" id="limit" size="20" name="limit" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>请谨慎填写数量</td>
		</tr>
		<tr>
			<th width="40%">文件名称：</th>
			<td><input class="input-text" type="text" id="filename" size="20" name="filename"/>如：job，请勿带后缀</td>
		</tr>
		<tr>
		<td class="ud" align="center" colspan="2">
		  <input class="admin_submit4" type="button" id="archive" value="更新内容"/>&nbsp;&nbsp;
		</td>
		</tr>
	</table>
</div>
<input type="hidden" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

<script>
$(document).ready(function(){
	dchange();
	$("#archive").click(function(){
		var pytoken=$("#pytoken").val();
		var datetype=$("#datetype").val();
		var order=$("#order").val();
		var limit=$.trim($("#limit").val());
		var filename=$("#filename").val();
		var frequency=$("#frequency").val();
		if(limit<1||limit==''){
			parent.layer.msg('请输入获取数量', 2,8);return false;
		}
		parent.layer.load('正在生成文件……',0);
		$.post("index.php?m=admin_xml&c=archive",{type:datetype,order:order,limit:limit,name:filename,frequency:frequency,pytoken:pytoken},function(data){
			var data=eval('('+data+')');
			parent.layer.msg(data.msg, Number(data.tm), Number(data.st),function(){location.reload();});return false;
		})
	})
})
function dchange(){
	var datetype=$("#datetype").val();
	$("#filename").val(datetype);
}
</script>
</body>
</html>