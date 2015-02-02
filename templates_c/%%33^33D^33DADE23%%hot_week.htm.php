<?php /* Smarty version 2.6.26, created on 2015-01-29 21:33:57
         compiled from ask/hot_week.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/hot_week.htm', 10, false),array('modifier', 'strip_tags', 'ask/hot_week.htm', 11, false),array('modifier', 'mb_substr', 'ask/hot_week.htm', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="answers_content">
<div class="answers_cont">
<div class="answers_left">
<div class="answers_news_title"><span>热门问题</span></div>
<!--就这块循环 start-->
<?php $_from = $this->_tpl_vars['hot_week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['h_list']):
?>
<div class="answers_left_list">
<div class="answers_left_list_cont">
	<h2><a class="question_link" href="<?php echo smarty_function_aurl(array('url' => "c:content,id:".($this->_tpl_vars['h_list']['id'])), $this);?>
" id="title_<?php echo $this->_tpl_vars['h_list']['id']; ?>
"><?php echo $this->_tpl_vars['h_list']['title']; ?>
</a></h2>
	<div class="answers_discuss"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['h_list']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
</div>
	<div class="answers_feed-meta">
		<a href="javascript:void(0)" class="answers_feed-meta_gz" onclick="attention('<?php echo $this->_tpl_vars['h_list']['id']; ?>
','1');">关注问题</a>
		<a href="javascript:void(0)"  class="answers_feed-meta_ll" > （<?php echo $this->_tpl_vars['h_list']['visit']; ?>
）次浏览</a>
        <a href="javascript:void(0)"  class="answers_feed-meta_hd">（<?php echo $this->_tpl_vars['h_list']['answer_num']; ?>
）回答</a>
		<a href="javascript:void(0);" onclick="forward_sinaweibo('<?php echo $this->_tpl_vars['h_list']['id']; ?>
')" class="answers_feed-meta_xl">新浪微博</a>
		<a href="javascript:void(0);" onclick="forward_tencentweibo('<?php echo $this->_tpl_vars['h_list']['id']; ?>
')" class="answers_feed-meta_tx">腾讯微博</a>
	</div>
</div>
<div class="answers_left_list_right" id='answer_<?php echo $this->_tpl_vars['h_list']['id']; ?>
' >
	<?php if ($this->_tpl_vars['h_list']['pic']): ?>
	<img src="<?php echo $this->_tpl_vars['h_list']['pic']; ?>
" width="55" height="55" style=" cursor:pointer" onmouseover="get_user_info('answer_','<?php echo $this->_tpl_vars['h_list']['id']; ?>
','<?php echo $this->_tpl_vars['h_list']['uid']; ?>
');" onmouseout="hide_user_info('answer_','<?php echo $this->_tpl_vars['h_list']['id']; ?>
')" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);" >
	<?php else: ?>
	<img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
" width="55" height="55" style=" cursor:pointer" onmouseover="get_user_info('answer_','<?php echo $this->_tpl_vars['h_list']['id']; ?>
','<?php echo $this->_tpl_vars['h_list']['uid']; ?>
');" onmouseout="hide_user_info('answer_','<?php echo $this->_tpl_vars['h_list']['id']; ?>
')" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);">
	<?php endif; ?>
	<?php if ($this->_tpl_vars['h_list']['is_atn'] != '2'): ?>
		<?php if ($this->_tpl_vars['h_list']['is_atn'] == '1'): ?>
			<a href="javascript:void(0)" style="float:right" onclick="attention_user('<?php echo $this->_tpl_vars['h_list']['uid']; ?>
')" class="zg-btn-unfollow"  name="atn_<?php echo $this->_tpl_vars['h_list']['uid']; ?>
">取消关注</a>
		<?php else: ?>
			<a href="javascript:void(0)" style="float:right" onclick="attention_user('<?php echo $this->_tpl_vars['h_list']['uid']; ?>
')" class='zg-btn-green'  name="atn_<?php echo $this->_tpl_vars['h_list']['uid']; ?>
">关注</a>
		<?php endif; ?>
	<?php endif; ?>
</div>
</div>
<?php endforeach; endif; unset($_from); ?>
<div class="clear"></div>
<div class="pages"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
</div>
<div class="answers_right">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/right.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
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