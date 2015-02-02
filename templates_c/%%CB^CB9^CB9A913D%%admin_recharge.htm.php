<?php /* Smarty version 2.6.26, created on 2015-01-29 18:31:11
         compiled from admin/admin_recharge.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<title>后台管理</title>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<script> 
$(document).ready(function(){
	$("input[name=type]").click(function(){
		var type = $(this).val();
		if(type=="integral"){
			$("#integral_tr").show();
			$("#price_tr").hide();
		}else{
			$("#integral_tr").hide();
			$("#price_tr").show();
		}
	});
});
function check(){
	if($("#userarr").val()==''){
		parent.layer.msg('请输入用户名！', 2,2);return false;
	}
	var type=$("input[name='type']").val();
	if(type=='integral'){
		if($("#price_int").val()==''){
			parent.layer.msg('请输入<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！', 2,2);return false;
		}
	}else{
		if($("#order_price").val()==''){
			parent.layer.msg('请输入金额！', 2,2);return false;
		}
	} 
}
</script>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Prompt">
<div class="admin_Prompt_span"> 注意事项： 充值时，请正确填写用户名和要充值的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
。确认用户名的正确性,充值只针对企业用户，个人用户不能充值 </div>
<div class="admin_Prompt_close"></div>
</div>

<div class="infoboxp_top">
<h6>后台充值</h6>
</div>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" action="index.php?m=recharge" method="post"  target="supportiframe" onSubmit="return check()">
	<table width="100%" class="table_form table_form_bg">
        <tr class="admin_table_trbg">
			<th width="140">充值用户名:</th>
			<td><input class="input-text" type="text" name="userarr" id='userarr'size="40" value=""/>多个用户名用,隔开</td>
		</tr>
        <tr>
			<th width="140">充值类型:</th>
			<td><input type="radio" name="type" value="integral" id="RadioGroup1_0" checked>
			     <label for="RadioGroup1_0"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</label>
			    <input type="radio" name="type" value="price" id="RadioGroup1_1">
			    <label for="RadioGroup1_1">余额</label>
			  </td>
		</tr>
        <tr class="admin_table_trbg">
			<th width="140">充值方式:</th>
			<td><input type="radio" name="fs" value="1" id="fs_0" checked>
			     <label for="fs_0">增加</label>
			    <input type="radio" name="fs" value="2" id="fs_1">
			    <label for="fs_1">扣除</label>
			  </td>
		</tr>
        <tr class="int" id="integral_tr">
            <th height="30"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
:</th>
            <td>
            <input type="text" name="price_int" id="price_int" size="20" maxlength="16" value="0" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')"  style="border:1px solid #CCCCCC; line-height:22px; height:20px; padding:1px;"><?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
</td>
        </tr>
		<tr style="display:none;" id="price_tr">
			<th>充值金额:</th>
			<td><input class="input-text" type="text" id="order_price" name="order_price" maxlength="16" size="20" value=""/>元</td>
		</tr>
          <tr class="admin_table_trbg">
            <th height="30" >备　　注:</th>
            <td><textarea name="remark" rows=2 cols=40 wrap="physical"  style="border:1px solid #CCCCCC; margin-left:0px; line-height:22px; height:45px; padding:1px;"></textarea></td>
        </tr>
		<tr>
        <th></th>
			<td>
    		<input class="admin_submit4" type="submit" name="insert" value="&nbsp;充　值&nbsp;" />
			</td>
		</tr>
	</table>
	<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
</div>

</body>
</html>