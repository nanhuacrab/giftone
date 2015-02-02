<?php /* Smarty version 2.6.26, created on 2015-01-29 21:34:55
         compiled from ask/add_question.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/add_question.htm', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/data/kindeditor/lang/zh_CN.js"></script> 
<script language="javascript">
KindEditor.ready(function(K) {
	K.create('#content', {
		themeType : 'default',
		items : ['bold', 'italic', 'underline','removeformat',   'link'] 
		//items : ['bold', 'italic', 'underline','removeformat',  'image', 'link'] 
	});
});  
function get_s_class(){
	var pid=$("#pid").val();
	$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=q_class",{pid:pid},function(data){
		$("#s_class").html(data); 
	});
}
$(document).ready(function(){
	//$('#myform').form('clear');
	//clearForm();
	$("#pid").change(function(){
		var pid=$("#pid").val();
		$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=q_class",{pid:pid},function(data){
			$("#s_class").html(data); 
		});
	});
	get_s_class();
});
</script>

<style>

* {
    margin: 0 ;
    padding: 0;
}
</style>
<div class="answers_content">
	<div class="answers_cont"> 
		<div class="answers_left">
			<div class="answers_news_title"><span>我要提问</span></div>
			<div class="clear"></div>
			<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
			<form id='myform' name="myform" target="supportiframe" action="<?php echo smarty_function_aurl(array('url' => "c:save"), $this);?>
" method="post" encType="multipart/form-data"  onSubmit="return checkform('1');">
				<ul class="add_question_text">
					<li><span class="add_question_text_span">问答标题：</span>
					<input class="question-text" type="text" name="title" id="title" size="70" value=""/></li> 
					<li>
						<span class="add_question_text_span">选择话题：</span>
						<select name='pid' id='pid' class="select-province">
							<?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class_l']):
?>
								<option value="<?php echo $this->_tpl_vars['class_l']['id']; ?>
"><?php echo $this->_tpl_vars['class_l']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
							</select>
						<span id='s_class'></span>
					</li> 
					<li>
						<span class="add_question_text_span">问答内容：</span>
						<textarea  id="content" name="content" cols="100" rows="8" style="width:500px;height:150px;"> </textarea>
					</li>
					<li>
						<span class="add_question_text_span">&nbsp;</span>
						<?php if ($this->_tpl_vars['uid']): ?>
						<input class="add_question_submit" type="submit" name="add" value="&nbsp;添 加&nbsp;"  />
						<input class="add_question_submit"  type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
						<?php else: ?>
						<a target="_blank" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=login&usertype=1"><input class="add_question_submit"  type="button" readonly="readonly" value="&nbsp;个人登录&nbsp;"/></a>
						<a target="_blank"  href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=login&usertype=2"><input class="add_question_submit"  type="button" readonly="readonly" value="&nbsp;公司登录&nbsp;" /></a>
						<?php endif; ?>
						
						
					</li>
				</ul>
			</form>
		</div>
		<div class="answers_right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/right.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
	</div>
</div>
<div class="clear"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>