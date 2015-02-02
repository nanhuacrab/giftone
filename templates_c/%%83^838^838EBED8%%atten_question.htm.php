<?php /* Smarty version 2.6.26, created on 2015-01-29 21:34:26
         compiled from ask/atten_question.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/atten_question.htm', 14, false),array('modifier', 'strip_tags', 'ask/atten_question.htm', 15, false),array('modifier', 'mb_substr', 'ask/atten_question.htm', 15, false),array('modifier', 'date_format', 'ask/atten_question.htm', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="answers_content">
<div class="answers_cont">
<div class="answers_left">
	<div class="answers_news_title"><span>个人关注问题</span></div>
	<div id="order_add_time"  name="order">
		
		<?php if (empty ( $this->_tpl_vars['question'] )): ?>
			<div class="answers_left_list">暂无关注！</div>
		<?php else: ?>
			<?php $_from = $this->_tpl_vars['question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qlist']):
?>
			<div class="answers_left_list">
				<div class="answers_left_list_cont">
					<h2 ><a class="question_link" target="_blank" href="<?php echo smarty_function_aurl(array('url' => "c:content,id:".($this->_tpl_vars['qlist']['id'])), $this);?>
"  id="title_<?php echo $this->_tpl_vars['qlist']['id']; ?>
"><?php echo $this->_tpl_vars['qlist']['title']; ?>
</a></h2>
					<div class="answers_discuss"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['qlist']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
</div>
					<div class="answers_feed-meta">
						<a href="javascript:void(0);" class="answers_feed-meta_gz" onclick="del_attention('<?php echo $this->_tpl_vars['qlist']['id']; ?>
','1');">取消关注</a>
						<a href="javascript:void(0)" class="answers_feed-meta_ll"> （<?php echo $this->_tpl_vars['qlist']['visit']; ?>
）浏览</a>
						<a class="answers_feed-meta_hd" href="javascript:void(0)"> （<?php echo $this->_tpl_vars['qlist']['answer_num']; ?>
）回答 </a>
						<a href="javascript:void(0);" onclick="forward_sinaweibo('<?php echo $this->_tpl_vars['qlist']['id']; ?>
')" class="answers_feed-meta_xl">新浪微博</a>
						<a href="javascript:void(0);" onclick="forward_tencentweibo('<?php echo $this->_tpl_vars['qlist']['id']; ?>
')" class="answers_feed-meta_tx">腾讯微博</a>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['qlist']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>

					</div> 
				</div>
				<div class="answers_left_list_right"> 
					<img src="<?php echo $this->_tpl_vars['qlist']['pic']; ?>
" width="40" height="40" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);">
 				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?> 
		<?php endif; ?>
		<div class="clear"></div>
		<div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
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