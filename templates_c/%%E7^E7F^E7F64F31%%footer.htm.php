<?php /* Smarty version 2.6.26, created on 2015-01-29 18:29:56
         compiled from ../template/member/user/footer.htm */ ?>
<div id="resumetop"  style="display:none; width: 400px;">  
	<div class="admin_Operating_sh" style="padding:10px; ">
		<div class="admin_Operating_sh_h1"><div class="user_Audit_box" style="margin-top:0;line-height:20px;padding:5px 10px 5px 10px;color:#000;">����ҵ��һ�۾ͷ�����������ѡ���ö�������<?php echo $this->_tpl_vars['config']['integral_resume_top']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
/�졣<br/>����ǰ����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��<font color="#FF6600"><?php echo $this->_tpl_vars['statis']['integral']; ?>
</font>��<br/>�˼����ö�����ʱ�䣺<span id='topdate'></span>��</div></div>
			
		<div class="admin_Operating_sub" style="margin-top:10px;">  
			<form action="index.php?c=resume&act=rtop" target="supportiframe" name="myform" method="post">
			<table cellspacing="2" cellpadding="3" style="width:100%">
				<tr><td>�ö�������</td><td><input name="days" class="message_box_text" type='text' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"></td><td><input type="submit" class="com_pop_bth" value='ȷ��' onclick="wait_result();"></td></tr>
			</table> 
			<input name="eid" type="hidden" />
			</form>			
		</div>
	</div> 
</div>
<div class="clear"></div>
<DIV class=foot><DIV class=copyright><?php echo $this->_tpl_vars['config']['sy_webcopyright']; ?>
 �绰(Tel):<?php echo $this->_tpl_vars['config']['sy_webtel']; ?>
</DIV></DIV>
<div id="uclogin" style="display:none"></div>
</BODY>
</HTML>