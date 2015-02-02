<?php /* Smarty version 2.6.26, created on 2015-01-29 21:33:56
         compiled from ask/topic.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/topic.htm', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="answers_content">
<div class="answers_cont">
<div class="answers_left">
<div class="answers_news_title"><span>热点话题</span></div>
<div class="answers_tags answers_tags">
<div class="tag-list "> 
<?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class_l']):
?>
<a <?php if ($this->_tpl_vars['pid'] == $this->_tpl_vars['class_l']['id']): ?>class="tag-item  tag-active"<?php else: ?>class="tag-item"<?php endif; ?> href="<?php echo smarty_function_aurl(array('url' => "c:topic,pid:".($this->_tpl_vars['class_l']['id'])), $this);?>
"><span></span><em><?php echo $this->_tpl_vars['class_l']['name']; ?>
</em></a> 
<?php endforeach; endif; unset($_from); ?> 
</div>
</div>

<div class="clear"></div> 
<?php $_from = $this->_tpl_vars['q_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class_s']):
?>
<dl class="topic_list">
	<dt> 
		<img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['class_s']['pic']; ?>
" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);" width="50" height="50"> 
	</dt>
	<dd>
		<div class="topic_list_top">
			<a href="<?php echo smarty_function_aurl(array('url' => "c:getclass,cid:".($this->_tpl_vars['class_s']['id'])), $this);?>
"><?php echo $this->_tpl_vars['class_s']['name']; ?>
</a>  
			<?php if ($this->_tpl_vars['class_s']['is_atn'] == '1'): ?>				
				<a href="javascript:void(0)" onclick="attention('<?php echo $this->_tpl_vars['class_s']['id']; ?>
','2');" class="answer_ygz"  name="atn_<?php echo $this->_tpl_vars['class_s']['id']; ?>
" title="取消关注">取消关注</a>
			<?php else: ?> 
				<a href="javascript:void(0)" class="answer_gz" onclick="attention('<?php echo $this->_tpl_vars['class_s']['id']; ?>
','2');" name="atn_<?php echo $this->_tpl_vars['class_s']['id']; ?>
" title="关注"> 关注</a>
			<?php endif; ?>  
		</div>
		<div class="topic_list_p"><?php echo $this->_tpl_vars['class_s']['intro']; ?>
</div>
	</dd>
</dl> 
<?php endforeach; endif; unset($_from); ?>  
<div class="clear"></div> 
<div class="pages" ><?php echo $this->_tpl_vars['pagenav']; ?>
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