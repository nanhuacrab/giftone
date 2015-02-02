<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:05
         compiled from admin/admin_pay_config.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top"><h6>支付设置</h6></div>
<div class="main_tag">
<div class="table-list">
<div class="admin_table_border">
<table width="100%">
	<thead class="admin_table_trbg">
			<tr class="admin_table_top">
			<th width="20%">支付方式</th>
			<th width="60%">描述</th>
			<th width="20%" class="admin_table_th_bg">操作</th>
		</tr>
	</thead>
	<tbody>
    <tr>
    	<td align="center" style="cursor:pointer;">支付宝</td>
    	<td  style="cursor:pointer;">
        支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br>
		
        <a href="https://b.alipay.com/index.htm" style="color:red;">立即在线申请</a>
		</td>
    	<td align="center">
            <?php if ($this->_tpl_vars['config']['alipay'] != 1): ?>
            <a href="javascript:change_pay('alipay');" id="alipay_online">安装</a> 
            <?php else: ?> 
            <a href="javascript:change_pay_un('alipay');" id="alipay_xiezai">卸载</a>  
            <a href="index.php?m=payconfig&c=alipay" id="alipay_config">设置</a>
            <?php endif; ?>
        </td>
    </tr>
        <tr class="admin_table_trbg">
    	<td align="center" style="cursor:pointer;">财付通</td>
    	<td align="" style="cursor:pointer;">财付通是腾讯公司创办的中国领先的在线支付平台，致力于为互联网用户和企业提供安全、便捷、专业的在线支付服务。</td>
    	<td align="center">
            <?php if ($this->_tpl_vars['config']['tenpay'] != 1): ?>
            <a href="javascript:change_pay('tenpay');" id="alipay_online">安装</a> 
            <?php else: ?> 
            <a href="javascript:change_pay_un('tenpay');" id="alipay_xiezai">卸载</a>  
            <a href="index.php?m=payconfig&c=tenpay" id="alipay_config">设置</a>
            <?php endif; ?>
        </td>
    </tr>
        <tr>
    	<td align="center" style="cursor:pointer;">银行转帐</td>
    	<td align="" style="cursor:pointer;">
        银行名称 收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。 <br>
        注意事项：办理电汇时，请在电汇单"汇款用途"一栏处注明您的订单号。</td>
    	<td align="center">
        	<?php if ($this->_tpl_vars['config']['bank'] != 1): ?>
            <a href="javascript:change_pay('bank');" id="alipay_online">安装</a> 
            <?php else: ?> 
            <a href="javascript:change_pay_un('bank');" id="alipay_xiezai">卸载</a>  
            <a href="index.php?m=payconfig&c=bank" id="alipay_config">设置</a>
            <?php endif; ?></td>
    </tr>
	</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

<script>
function change_pay(paytype){
	var paytype;
	var pytoken = $('#pytoken').val();
	if(paytype=="alipay"){
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			alipay : 1,
			pytoken : pytoken,
			alipaytype:1
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else if(paytype=="tenpay"){
		$.post("index.php?m=config&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			tenpay : 1
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else{
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			bank : 1
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});	
	}
}
function change_pay_un(paytype){
	var paytype;
	var pytoken = $('#pytoken').val();
	if(paytype=="alipay"){
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			alipay : 0
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else if(paytype=="tenpay"){
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			tenpay : 0
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});
	}else{
		$.post("index.php?m=payconfig&c=save",{
			config : 'ddd',
			pytoken : pytoken,
			bank : 0
		},function(data,textStatus){
			location.href="index.php?m=payconfig";
		});	
	}
}
</script>
</div>
</body>
</html>