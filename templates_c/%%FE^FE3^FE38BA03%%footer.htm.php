<?php /* Smarty version 2.6.26, created on 2015-01-29 21:33:53
         compiled from E:%5Chtdocs%5Cgift11/template/ask/footer.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="TB_window" style=" display: none;" class="ask_report"> 
	<div id="TB_ajaxContent" class="ask_report_cont">
		<div class="ask_report_top">
			<select name="reason" id='reason'>
				<?php $_from = $this->_tpl_vars['reason']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reason']):
?>
				<option value='<?php echo $this->_tpl_vars['reason']['id']; ?>
'><?php echo $this->_tpl_vars['reason']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</div>
        <div class="clear"></div>
		<div class="ask_report_top_sub">
			<input type='button' value="提交" onclick="reason()" class="ask_report_top_bth"/> 
			<input type='hidden' value="" id='eid' name='eid'>
			<input type='hidden' value="" id='type' name='type'>
		</div>
	</div>
</div>
<script type="text/javascript"> 
function get_show(eid,type){//eid=举报的问答id/回答id/评论id,type 类型 1问题/2回答/3评论 
	$("#eid").val(eid);
	$("#type").val(type); 
	$.layer({
		type : 1,
		title :'举报问答',
		offset: [($(window).height() - 220)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['350px','170px'],
		page : {dom :"#TB_window"}
	}); 
} 
</script> 
<div id="uclogin" style="display:none"></div>