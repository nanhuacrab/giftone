<?php /* Smarty version 2.6.26, created on 2015-01-29 21:34:26
         compiled from ask/my_answer.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/my_answer.htm', 14, false),array('modifier', 'date_format', 'ask/my_answer.htm', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="answers_content">
<div class="answers_cont"> 
<div class="answers_left">
<div class="answers_news_title"><span>我回答的问题</span></div>
<div class="clear"></div> 

<?php if (empty ( $this->_tpl_vars['my_answer'] )): ?>
	<div class="answers_left_list">暂无回答！</div>
<?php else: ?>
	<?php $_from = $this->_tpl_vars['my_answer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
	<div class="answers_left_list"> 
		<div class="answers_left_list_cont">
			<h2><a class="question_link" target="_blank" href="<?php echo smarty_function_aurl(array('url' => "c:content,id:".($this->_tpl_vars['list']['qid'])), $this);?>
#<?php echo $this->_tpl_vars['list']['id']; ?>
" ><?php echo $this->_tpl_vars['list']['q_title']; ?>
</a></h2>
			<div class="answers_feed-meta">我的回答：<?php echo $this->_tpl_vars['list']['content']; ?>
</div>
			<div class="answers_feed-meta"> 
			<a href="javascript:void(0);" class="answers_feed-meta_pl"
			<?php if ($this->_tpl_vars['list']['comment'] > '0'): ?>onclick="get_comment('<?php echo $this->_tpl_vars['list']['id']; ?>
','<?php echo $this->_tpl_vars['list']['qid']; ?>
','0','1');"<?php endif; ?> >该回答有(<?php echo $this->_tpl_vars['list']['comment']; ?>
)条评论</a>
			<a href="javascript:void(0);" class="answers_feed-meta_zan"> (<?php echo $this->_tpl_vars['list']['support']; ?>
)人支持我的观点</a> 
			<?php echo ((is_array($_tmp=$this->_tpl_vars['list']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>

			</div>
			<div class="answers_discuss" style="display:none" id="div_<?php echo $this->_tpl_vars['list']['id']; ?>
">
				<div class="answers_discuss_cont" id="review_<?php echo $this->_tpl_vars['list']['id']; ?>
"></div>
			</div>
		</div> 
		<div class="answers_left_list_right" onmouseover="get_user_info('my_answer_','<?php echo $this->_tpl_vars['list']['id']; ?>
','<?php echo $this->_tpl_vars['list']['uid']; ?>
');" onmouseout="hide_user_info('my_answer_','<?php echo $this->_tpl_vars['list']['id']; ?>
')"  id='my_answer_<?php echo $this->_tpl_vars['list']['id']; ?>
' style=" cursor:pointer"> 
			<img src="<?php echo $this->_tpl_vars['list']['pic']; ?>
" width="55" height="55" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);">
			 
		</div>
	</div>
	<?php endforeach; endif; unset($_from); ?> 
<?php endif; ?>
<div class="clear"></div><div class="clear"></div>
<div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
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