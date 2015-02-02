<?php /* Smarty version 2.6.26, created on 2015-01-29 18:38:00
         compiled from member/com/pay.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950">
<div class="admin_mainbody">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class=right_box>
<div class=admincont_box>
<div class=admin_tit><span class="admin_tit_bg">帐户充值</span></div>
<div class='admin_note_pay2'>
<?php if ($_POST['usertype'] == ""): ?>
<form name='alipayment' onSubmit="return CheckForm();" action="index.php?c=pay" method="post"><div class="pay_choose"><span>选择购买类型</span></div>
<ul>
<li> <input type="radio" name="usertype" value="price" id="vip" />
<label for="vip">购买会员</label></li>
<li> <input type="radio" name="usertype" value="int" id="int"/>
<label for="int">购买<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</label></li>

<li> <input type="radio" name="usertype" value="change" id="change"/>
<label for="change">兑换<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</label></li>
</ul>
<div class='admin_tit_right' style="float:left;width:100%; text-align:center; margin-top:20px;">
<input type='submit' value='下一步' name='nextstep' class="btn_01" >
</div>

<div class="" style="padding:5px; float:left;color:#999; line-height:23px;">
<div class="wxts">温馨提示：</div>
购买会员：请仔细阅读会员功能列表，再选择适合您的类型！<a href="index.php?c=right" target="_blank" style="color:#F00">[点击阅读]</a><br>
购买积分：积分可用于职位推荐、置顶、设置自动刷新、购买企业模板、评论等增值功能<br>
积分兑换：可直接用账户余额兑换您所需积分<br>
购买短信：您是企业用户，由本站支付各项短信费用，暂无需购买<br>



</div>
</form>
<?php endif; ?>
<style>
.my_table_msg th{ text-align:right}
</style>
<div class="admin_note2">
<iframe id="fdingdan"  name="fdingdan" onload="returnmessage('fdingdan');" style="display:none"></iframe> 
<?php if ($_POST['usertype'] == 'price'): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="my_table_msg"> 
	<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" onsubmit="return pay_form();">
		<tr>
			<th height="30">选择会员类型:</th>
			<td><input type="hidden" name="pay_type" value="<?php echo $_POST['usertype']; ?>
"/>
			<select name="comvip" id="comvip">
				<option value="" price=""> 请选择会员类型 </option>
				<?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pay']):
?>
				<option value="<?php echo $this->_tpl_vars['pay']['id']; ?>
" price="<?php echo $this->_tpl_vars['pay']['service_price']; ?>
"> <?php echo $this->_tpl_vars['pay']['name']; ?>
 </option>
				<?php endforeach; endif; unset($_from); ?>
			</select>    
			<a href="index.php?c=right" target="_blank">查看会员特权</a>
			</td>
		</tr>
		<tr>
			<th height="30">充值金额:</th>
			<td><span id="span_com_vip_price">0</span>元<input type="hidden" name="price" size="10"  id="com_vip_price"></td>
		</tr>
		<tr>
			<th height="30">备　　注:</th>
			<td><textarea name="remark" id='remark' rows=2 cols=40 wrap="physical" class="bank_textarea"></textarea><p style="line-height:23px;">(请备注你的姓名及其联系方式)</p></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><p  class="bank_msg">请确认会员类型.</p></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td height="40"><input type='image' src="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/next.jpg" value='确认订单' name='nextstep' style="width:100px;height:25px;border:none"></td>
		</tr>
	</form>
</table>
<?php endif; ?>
<?php if ($_POST['usertype'] == 'int'): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="my_table_msg"> 
<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" onsubmit="return pay_form('请输入充值数量！');">
<tr>
<th height="30">填写您要充值的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
:</th>    
<td>
<input type="hidden" name="pay_type" value="<?php echo $_POST['usertype']; ?>
"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
<input type="text" name="price_int" id="price_int" size="20" value="0" int="<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  style="border:1px solid #CCCCCC; line-height:22px; height:20px; padding:1px;">当前比例：1元=<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
<?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</td>
</tr>
<tr>
<th height="30">所需金额:</th>
<td><span id="span_com_vip_price">0</span>元<input type="hidden" name="price" size="10"  id="com_vip_price"></td>
</tr>
<tr>
<th height="30">备　　注:</th>
<td><textarea name="remark" id='remark' style="width:300px; height:80px;" wrap="physical"  class="bank_textarea"><?php echo $this->_tpl_vars['remark']; ?>
</textarea><p style="line-height:23px;">(请备注你的姓名及其联系方式)</p></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><p class="bank_msg">请确认您要充值的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
.</p></td>
</tr>
<tr>
<th>&nbsp;</th>
<td height="40"><input type=image src="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/next.jpg" value=确认订单 name=nextstep style="width:100px;height:25px;border:none"></td>
</tr>
</form>
</table>
<?php endif; ?>
<?php if ($_POST['usertype'] == 'msg'): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="my_table_msg"> 
<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=dingdan" method="post" onsubmit="return pay_form('请输入购买条数！');">
<tr>
<th height="30">填写您要充值的短信:</th>    
<td>
<input type="hidden" name="pay_type" value="<?php echo $_POST['usertype']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
<input type="text" name="price_msg" id="price_int" size="20" value="0" int="<?php echo $this->_tpl_vars['config']['integral_msg_proportion']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  style="border:1px solid #CCCCCC; line-height:22px; height:20px; padding:1px;">当前比例：1元=<?php echo $this->_tpl_vars['config']['integral_msg_proportion']; ?>
条</td>
</tr>
<tr>
<th height="30">充值金额:</th>
<td><span id="span_com_vip_price">0</span>元<input type="hidden" name="price" size="10"  id="com_vip_price"></td>
</tr>
<tr>
<th height="30">备　　注:</th>
<td><textarea name="remark" id='remark' rows=2 cols=40 wrap="physical" class="bank_textarea"></textarea><p style="line-height:23px;">(请备注你的姓名及其联系方式)</p></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><p class="bank_msg">请确认您要充值的短信条数.</p></td>
</tr>
<tr>
<th>&nbsp;</th>
<td height="40"><input type='image' src="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/next.jpg" value='确认订单' name='nextstep' style="width:100px;height:25px;border:none"></td
></tr>
</form>
</table>
<?php endif; ?>
<?php if ($_POST['usertype'] == 'change'): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="my_table_msg"> 
<form name="alipayment" target="fdingdan" action="index.php?c=pay&act=duihuan" method="post" onsubmit="return pay_form('请输入兑换数量');">
<tr>
<th height="30">填写您要兑换的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
:</th>    
<td>

<input type="text" name="price_int" id="price_int" size="20" value="0" int="<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  style="border:1px solid #CCCCCC; line-height:22px; height:20px; padding:1px;">当前比例：1元=<?php echo $this->_tpl_vars['config']['integral_proportion']; ?>
<?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</td>
</tr>
<tr>
<th height="30">所需金额:</th>
<td><span id="span_com_vip_price">0</span>元<input type="hidden" name="price" size="10"  id="com_vip_price"></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><p class="bank_msg">请确认您要兑换的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
，当前金额为<font color="red"><?php echo $this->_tpl_vars['statis']['pay']; ?>
</font>元.</p></td>
</tr>
<tr>
<th>&nbsp;</th>
<td height="40"><input type="image" style="width:100px;height:25px;border:none" name="nextstep" value="确认订单" src="../template/member/com/images/next.jpg"></td>
</tr>
</form>
</table> 
<?php endif; ?>
</div></div> </div>
</div>
</div> 
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>