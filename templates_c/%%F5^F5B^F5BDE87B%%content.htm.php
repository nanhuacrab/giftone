<?php /* Smarty version 2.6.26, created on 2015-02-01 04:20:17
         compiled from ask/content.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'furl', 'ask/content.htm', 46, false),array('function', 'aurl', 'ask/content.htm', 121, false),array('modifier', 'date_format', 'ask/content.htm', 47, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
 <script language="javascript">
<?php if ($this->_tpl_vars['no_login'] == ""): ?>
KindEditor.ready(function(K) {
	K.create('#content', {
		themeType : 'default',
		items : ['bold', 'italic', 'underline','removeformat', 'link']
	});
});
<?php endif; ?>
function keyup(){
	var name=$("#q_class").val();
	$.post("index.php?m=question&c=get_q_class",{name:name},function(data){
		$("#result_class").html(data);
	});
}
function get_class(id){
	var name=$("#"+id).html();
	$("#q_class").val(name);
	$("#class").val(id);
	$("#result_class").html("");
} 
</script>

<style>

* {
    margin: 0 ; ;
    padding: 0;
}
</style>

<div class="answers_content">
<div class="answers_cont">


<div class="answers_left">
<div class="answers_subject" id="title_<?php echo $this->_tpl_vars['show']['id']; ?>
"><?php echo $this->_tpl_vars['show']['title']; ?>
</div>

<div id="46" class="answers_left_list">

	<div class="answers_subject_cont w590">
		<div class="answers_left_list_name">
			<b class="fl"><a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['show']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['show']['nickname']; ?>
</a> <em><?php echo $this->_tpl_vars['show']['description']; ?>
</em></b>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['show']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</span>
		</div>
		<div class="clear"></div>
		<div class="answers_subject_pp"><?php echo $this->_tpl_vars['show']['content']; ?>
	</div>
	</div>

	<div class="answers_left_list_right"   id='question_<?php echo $this->_tpl_vars['show']['id']; ?>
' > 
		<img src="<?php echo $this->_tpl_vars['show']['pic']; ?>
" width="55" height="55" onmouseover="get_user_info('question_','<?php echo $this->_tpl_vars['show']['id']; ?>
','<?php echo $this->_tpl_vars['show']['uid']; ?>
');" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);" onmouseout="hide_user_info('question_','<?php echo $this->_tpl_vars['show']['id']; ?>
')" style=" cursor:pointer"> 
		<?php if ($this->_tpl_vars['show']['is_atn'] != '2'): ?>
			<?php if ($this->_tpl_vars['show']['is_atn'] == '1'): ?>
				<a href="javascript:void(0)"  onclick="attention_user('<?php echo $this->_tpl_vars['show']['uid']; ?>
')" class="zg-btn-unfollow"  name="atn_<?php echo $this->_tpl_vars['show']['uid']; ?>
">取消关注</a>
			<?php else: ?>
				<a href="javascript:void(0)"  onclick="attention_user('<?php echo $this->_tpl_vars['show']['uid']; ?>
')" class='zg-btn-green'  name="atn_<?php echo $this->_tpl_vars['show']['uid']; ?>
">关注</a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>
	<div class="answers_subject_cont_cz">
		<div class="answers_feed-meta">
			<?php if ($this->_tpl_vars['show']['is_atn'] != '2'): ?>
				<?php if ($this->_tpl_vars['show']['ask_is_atn'] == '1'): ?>
					已关注
				<?php else: ?>
					<a href="javascript:void(0)" class="answers_feed-meta_gz" onclick="attention('<?php echo $this->_tpl_vars['show']['id']; ?>
','1');">关注问题</a>
				<?php endif; ?> 
			<?php endif; ?>
			<a href="javascript:void(0);" class="answers_feed-meta_ll"> (<?php echo $this->_tpl_vars['show']['visit']; ?>
)次浏览 </a>
			<a href="javascript:void(0);" onclick="forward_sinaweibo('<?php echo $this->_tpl_vars['show']['id']; ?>
')" class="answers_feed-meta_xl">新浪微博</a>
			<a href="javascript:void(0);" onclick="forward_tencentweibo('<?php echo $this->_tpl_vars['show']['id']; ?>
')" class="answers_feed-meta_tx">腾讯微博</a>
			<?php if ($this->_tpl_vars['show']['is_atn'] != '2'): ?>
			<a href="javascript:void(0)" class="answers_feed-meta_jb"  onclick="get_show('<?php echo $this->_tpl_vars['show']['id']; ?>
','1');">举报</a>
			<?php endif; ?>
		</div>

	</div>
<div class="answers_subject_cont_question"><strong><?php echo $this->_tpl_vars['show']['answer_num']; ?>
个回答 </strong></div>
<div class="clear"></div>
<?php $_from = $this->_tpl_vars['answer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['a_list']):
?>
<div class="answers_left_list" id="<?php echo $this->_tpl_vars['a_list']['id']; ?>
">

	<div class="answers_left_list_cont" style="width:530px;">
		<div class="answers_left_list_name"><b class="fl"><a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['a_list']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['a_list']['nickname']; ?>
</a> <em><?php echo $this->_tpl_vars['a_list']['description']; ?>
</em></b><span><?php echo ((is_array($_tmp=$this->_tpl_vars['a_list']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</span> </div>
        <div class="clear"></div>
		<div class="answers_left_list_answer"><?php echo $this->_tpl_vars['a_list']['content']; ?>
</div>
		<div class="answers_feed-meta"> 
			<a href="javascript:void(0)" class="answers_feed-meta_pl" onclick="get_comment('<?php echo $this->_tpl_vars['a_list']['id']; ?>
','<?php echo $this->_tpl_vars['show']['id']; ?>
','0','<?php echo $this->_tpl_vars['a_list']['comment']; ?>
');">（<span id="com_num_<?php echo $this->_tpl_vars['a_list']['id']; ?>
"><?php echo $this->_tpl_vars['a_list']['comment']; ?>
</span>）条评论</a> 
			<?php if ($this->_tpl_vars['a_list']['is_atn'] != '2'): ?>
			<a href="javascript:void(0)" class="answers_feed-meta_jb" onclick="get_show('<?php echo $this->_tpl_vars['a_list']['id']; ?>
','2');">举报</a>
            <a href="javascript:void(0);" class="answers_feed-meta_zan" onclick="support('<?php echo $this->_tpl_vars['a_list']['id']; ?>
')" >（<span id="support_num_<?php echo $this->_tpl_vars['a_list']['id']; ?>
"><?php echo $this->_tpl_vars['a_list']['support']; ?>
</span>）赞</a>
			<?php endif; ?>
		</div>
		<div class="answers_discuss" style="display:none" id="div_<?php echo $this->_tpl_vars['a_list']['id']; ?>
">
			<div class="answers_discuss_cont" id="review_<?php echo $this->_tpl_vars['a_list']['id']; ?>
">
			</div>
		</div>
	</div>
	<div class="answers_left_list_right"   id='answer_<?php echo $this->_tpl_vars['a_list']['id']; ?>
' > 
		<img src="<?php echo $this->_tpl_vars['a_list']['pic']; ?>
" width="55" height="55" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);" onmouseover="get_user_info('answer_','<?php echo $this->_tpl_vars['a_list']['id']; ?>
','<?php echo $this->_tpl_vars['a_list']['uid']; ?>
');" onmouseout="hide_user_info('answer_','<?php echo $this->_tpl_vars['a_list']['id']; ?>
')" style="cursor:pointer"> 
		<?php if ($this->_tpl_vars['a_list']['is_atn'] != '2'): ?>
			<?php if ($this->_tpl_vars['a_list']['is_atn'] == '1'): ?>
				<a href="javascript:void(0)"  onclick="attention_user('<?php echo $this->_tpl_vars['a_list']['uid']; ?>
')" class="zg-btn-unfollow"  name="atn_<?php echo $this->_tpl_vars['a_list']['uid']; ?>
">取消关注</a>
			<?php else: ?>
				<a href="javascript:void(0)"  onclick="attention_user('<?php echo $this->_tpl_vars['a_list']['uid']; ?>
')" class='zg-btn-green'  name="atn_<?php echo $this->_tpl_vars['a_list']['uid']; ?>
">关注</a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['no_login'] == ''): ?>
		<div class="answers_subject_cont_question"><?php if ($this->_tpl_vars['show']['uid'] == $this->_tpl_vars['uid']): ?>追加问题<?php else: ?>我要回答<?php endif; ?></div>
		<div class="answers_Comment">
			<div class="answers_Comment_cont">
				<div class="my_discuss">
					<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
					<form name="myform"  target="supportiframe"  action="<?php echo smarty_function_aurl(array('url' => "c:answer,id:".($this->_tpl_vars['show']['id'])), $this);?>
" method="post"    onSubmit="return checkform('2');">
						<textarea  id="content" name="content" cols="100" rows="8" class="goog-textarea" ></textarea>
                        <div class="clear"></div>
						<input class="my_discuss_aubmit"  type="submit" name="add" value="&nbsp;回答&nbsp;"  />
					</form>
				</div>
			</div>
		</div>
		<?php endif; ?>
    </div>
<div class="answers_right">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/right.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

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