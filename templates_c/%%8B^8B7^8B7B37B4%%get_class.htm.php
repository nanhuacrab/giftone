<?php /* Smarty version 2.6.26, created on 2015-02-01 04:26:48
         compiled from ask/get_class.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/get_class.htm', 15, false),array('modifier', 'date_format', 'ask/get_class.htm', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="answers_content">
<div class="answers_cont">
<div class="answers_left">
<div class="topic_cont_top">
<div class="topic_cont_top_r">
<strong><?php echo $this->_tpl_vars['q_class']['name']; ?>
</strong>
<div class="topic_cont_top-nav">
<ul class="topic_cont_top-nav-list">
<li class="topic_cont_top-nav-list-item">
<li class="topic_cont_top-nav-list-item">
<?php if ($this->_tpl_vars['recom']): ?>
<span>精华</span>
<?php else: ?>
<a class="topic_cont_top-nav-normal" href="<?php echo smarty_function_aurl(array('url' => "c:getclass,cid:".($this->_tpl_vars['cid']).",recom:1"), $this);?>
">精华</a>
<?php endif; ?>
</li>
<li class="topic_cont_top-nav-list-item">
<?php if ($this->_tpl_vars['recom'] == "" && $this->_tpl_vars['dyna'] == ""): ?>
<span>全部问题</span>
<?php else: ?>
<a class="topic_cont_top-nav-normal" href="<?php echo smarty_function_aurl(array('url' => "c:getclass,cid:".($this->_tpl_vars['cid'])), $this);?>
">全部问题</a>
<?php endif; ?>
</li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
<?php $_from = $this->_tpl_vars['qlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qlist']):
?>
<div class="answers_left_list">
	<div class="answers_left_list_cont">
		<h2><a class="question_link" href="<?php echo $this->_tpl_vars['qlist']['url']; ?>
" id="title_<?php echo $this->_tpl_vars['qlist']['id']; ?>
"><?php echo $this->_tpl_vars['qlist']['title']; ?>
</a></h2>
		<div class="answers_feed-meta">
			<a href="javascript:void(0)" class="answers_feed-meta_gz" onclick="attention('<?php echo $this->_tpl_vars['qlist']['id']; ?>
','1');">关注问题</a>
			<a href="javascript:void(0)" class="answers_feed-meta_ll">（<?php echo $this->_tpl_vars['qlist']['visit']; ?>
）浏览</a>
            <a href="javascript:void(0)" class="answers_feed-meta_pl">（<?php echo $this->_tpl_vars['qlist']['answer_num']; ?>
）回答</a>
			<a href="javascript:void(0);" onclick="forward_sinaweibo('<?php echo $this->_tpl_vars['qlist']['id']; ?>
')" class="answers_feed-meta_xl">新浪微博</a>
			<a href="javascript:void(0);" onclick="forward_tencentweibo('<?php echo $this->_tpl_vars['qlist']['id']; ?>
')" class="answers_feed-meta_tx">腾讯微博</a>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['qlist']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>

		</div>
	</div>
	<div class="answers_left_list_right" id='answer_<?php echo $this->_tpl_vars['qlist']['id']; ?>
' style="cursor:pointer">
 		<img src="<?php echo $this->_tpl_vars['qlist']['pic']; ?>
" width="55" height="55" style=" cursor:pointer" onmouseover="get_user_info('answer_','<?php echo $this->_tpl_vars['qlist']['id']; ?>
','<?php echo $this->_tpl_vars['qlist']['uid']; ?>
');" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);" onmouseout="hide_user_info('answer_','<?php echo $this->_tpl_vars['qlist']['id']; ?>
')">
	 
		<?php if ($this->_tpl_vars['qlist']['is_atn'] != '2'): ?>
			<?php if ($this->_tpl_vars['qlist']['is_atn'] == '1'): ?>
				<a href="javascript:void(0)" onclick="attention_user('<?php echo $this->_tpl_vars['qlist']['uid']; ?>
')" class="zg-btn-unfollow" name="atn_<?php echo $this->_tpl_vars['qlist']['uid']; ?>
">取消关注</a>
			<?php else: ?>
				<a href="javascript:void(0)" onclick="attention_user('<?php echo $this->_tpl_vars['qlist']['uid']; ?>
')" class='zg-btn-green' name="atn_<?php echo $this->_tpl_vars['qlist']['uid']; ?>
">关注</a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?>
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