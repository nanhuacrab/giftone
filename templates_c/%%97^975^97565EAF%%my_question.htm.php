<?php /* Smarty version 2.6.26, created on 2015-01-29 21:34:24
         compiled from ask/my_question.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/my_question.htm', 16, false),array('modifier', 'date_format', 'ask/my_question.htm', 48, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="answers_content">
<div class="answers_cont">


<div class="answers_left">
<div class="answers_news_title"><span>我的问题</span></div>
<div class="topic_cont_top">
<div class="topic_cont_top_r">
<div class="topic_cont_top-nav">
<ul class="topic_cont_top-nav-list">
<!--li class="topic_cont_top-nav-list-item">
<?php if ($this->_tpl_vars['dynamic']): ?>
<span>动态</span>
<?php else: ?>
<a class="topic_cont_top-nav-normal" href="<?php echo smarty_function_aurl(array('url' => "c:dynamic"), $this);?>
">动态</a>
<?php endif; ?> 
</li-->
<li class="topic_cont_top-nav-list-item">
<?php if ($this->_tpl_vars['recom']): ?>
<span>精华</span>
<?php else: ?>
<a class="topic_cont_top-nav-normal" href="<?php echo smarty_function_aurl(array('url' => "c:myquestion,recom:1"), $this);?>
">精华</a>
<?php endif; ?> 
</li>
<li class="topic_cont_top-nav-list-item">
<?php if ($this->_tpl_vars['recom'] == "" && $this->_tpl_vars['dynamic'] == ""): ?>
<span>全部问题</span>
<?php else: ?>
<a class="topic_cont_top-nav-normal" href="<?php echo smarty_function_aurl(array('url' => "c:myquestion"), $this);?>
">全部问题</a>
<?php endif; ?> 
</li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
<!--就这块循环 start-->
<?php $_from = $this->_tpl_vars['qlist_a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qlist_a']):
?> 
	<div class="answers_left_list">
		<div class="answers_left_list_cont">
		<h2><a class="question_link" target="_blank" href="<?php echo $this->_tpl_vars['qlist_a']['url']; ?>
" id="title_<?php echo $this->_tpl_vars['qlist_a']['id']; ?>
"><?php echo $this->_tpl_vars['qlist_a']['title']; ?>
</a></h2>
		<div class="answers_feed-meta"> 
		<a href="javascript:void(0);" class="answers_feed-meta_ll">(<?php echo $this->_tpl_vars['qlist_a']['visit']; ?>
)次浏览</a>
		<a href="javascript:void(0);" class="answers_feed-meta_pl">(<?php echo $this->_tpl_vars['qlist_a']['answer_num']; ?>
)人回答</a>
		<a href="javascript:void(0);" onclick="forward_sinaweibo('<?php echo $this->_tpl_vars['qlist_a']['id']; ?>
')" class="answers_feed-meta_xl">新浪微博</a>
		<a href="javascript:void(0);" onclick="forward_tencentweibo('<?php echo $this->_tpl_vars['qlist_a']['id']; ?>
')" class="answers_feed-meta_tx">腾讯微博</a>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['qlist_a']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>

		</div>
		</div>
		<div class="answers_left_list_right">
			<img src="<?php echo $this->_tpl_vars['qlist_a']['pic']; ?>
" width="40" height="40" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);">
		</div>
	</div> 
	
<?php endforeach; endif; unset($_from); ?> 
<?php if ($this->_tpl_vars['total'] == 0): ?>
<div class="answers_left_list">	暂无信息</div> 
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