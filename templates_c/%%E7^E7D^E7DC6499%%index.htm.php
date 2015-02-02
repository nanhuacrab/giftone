<?php /* Smarty version 2.6.26, created on 2015-01-29 21:33:53
         compiled from ask/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'ask/index.htm', 7, false),array('function', 'furl', 'ask/index.htm', 24, false),array('modifier', 'date_format', 'ask/index.htm', 34, false),array('modifier', 'strip_tags', 'ask/index.htm', 38, false),array('modifier', 'mb_substr', 'ask/index.htm', 38, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['askstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="answers_content">
<div class="answers_cont"> 
<div class="answers_left">
	<div class="answers_news_title"><span><?php if ($this->_tpl_vars['order'] == 'answernum'): ?>热门问题<?php else: ?>最新问题<?php endif; ?></span>
		<ul class="answers_news_title_r">
			<li <?php if ($this->_tpl_vars['order'] == 'addtime' || $this->_tpl_vars['order'] == ""): ?>class="answers_news_title_atc" <?php endif; ?> onclick="get_order('<?php echo smarty_function_aurl(array('url' => "order:addtime"), $this);?>
');" style="cursor:pointer" id='add_time'>最新的</li>
			<li onclick="get_order('<?php echo smarty_function_aurl(array('url' => "order:answernum"), $this);?>
');" <?php if ($this->_tpl_vars['order'] == 'answernum'): ?> class="answers_news_title_atc" <?php endif; ?> style="cursor:pointer" id='answer_num'>热门的</li>
		</ul>
	</div>
    <?php if ($this->_tpl_vars['total'] == 0): ?>
    <div class="comapply_no_msg_cont"><span></span><em>抓紧提问吧!</em></div>
	<?php endif; ?> 
	<div id="order_add_time"  name="order">
		<?php $_from = $this->_tpl_vars['qlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qlist']):
?>
		<div class="answers_left_list">
			<div class="answers_left_list_left">
				<div class="answers_app_left" onmouseover="get_user_info('question_','<?php echo $this->_tpl_vars['qlist']['id']; ?>
','<?php echo $this->_tpl_vars['qlist']['uid']; ?>
','50');" onmouseout="hide_user_info('question_','<?php echo $this->_tpl_vars['qlist']['id']; ?>
')"  id='question_<?php echo $this->_tpl_vars['qlist']['id']; ?>
' style=" cursor:pointer">
					<img src="<?php echo $this->_tpl_vars['qlist']['pic']; ?>
" width="40" height="40" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);">
				</div>
			</div>
			<div class="answers_left_list_cont answers_left_list_cont_w">
				<div class="answers_left_list_title">
					<a target="_blank" href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['qlist']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['qlist']['nickname']; ?>
</a>
                    <div class="answers_left_gz">
					<?php if ($this->_tpl_vars['qlist']['is_atn'] != '2'): ?>
						<?php if ($this->_tpl_vars['qlist']['is_atn'] == '1'): ?>
							<a href="javascript:void(0)" style="margin-left:10px" onclick="attention_user('<?php echo $this->_tpl_vars['qlist']['uid']; ?>
')" class="zg-btn-unfollow"  name="atn_<?php echo $this->_tpl_vars['qlist']['uid']; ?>
">取消关注</a>
						<?php else: ?>
							<a href="javascript:void(0)" style="margin-left:10px" onclick="attention_user('<?php echo $this->_tpl_vars['qlist']['uid']; ?>
')" class='zg-btn-green'  name="atn_<?php echo $this->_tpl_vars['qlist']['uid']; ?>
">关注</a>
						<?php endif; ?>
					<?php endif; ?> 
                    </div>
					<em> <?php echo ((is_array($_tmp=$this->_tpl_vars['qlist']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</em>
				</div>
                <div class="answers_cont_c">
				<h2 ><a target="_blank" class="question_link" href="<?php echo $this->_tpl_vars['qlist']['url']; ?>
" id="title_<?php echo $this->_tpl_vars['qlist']['id']; ?>
" title="<?php echo $this->_tpl_vars['qlist']['title']; ?>
"><?php echo $this->_tpl_vars['qlist']['title']; ?>
</a></h2>
				<div class="answers_discuss"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['qlist']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
</div>
				<div class="answers_feed-meta">
					<?php if ($this->_tpl_vars['qlist']['is_atn'] != '2'): ?>
						<?php if (in_array ( $this->_tpl_vars['qlist']['id'] , $this->_tpl_vars['my_atten'] )): ?>
						<a href="javascript:void(0);" class="answers_feed-meta_gz" onclick="del_attention('<?php echo $this->_tpl_vars['qlist']['id']; ?>
','1');" >取消关注</a>
						<?php else: ?>
						<a href="javascript:void(0);" class="answers_feed-meta_gz" onclick="attention('<?php echo $this->_tpl_vars['qlist']['id']; ?>
','1');" title="关注问题">关注问题</a>
						<?php endif; ?>
						
					
					<?php endif; ?>
					<a href="javascript:void(0)" class="answers_feed-meta_hd" title="（<?php echo $this->_tpl_vars['qlist']['answer_num']; ?>
）人回答">（<?php echo $this->_tpl_vars['qlist']['answer_num']; ?>
）人回答</a>
					<a href="javascript:void(0);" onclick="forward_sinaweibo('<?php echo $this->_tpl_vars['qlist']['id']; ?>
')" class="answers_feed-meta_xl" title="新浪微博">新浪微博</a>
					<a href="javascript:void(0);" onclick="forward_tencentweibo('<?php echo $this->_tpl_vars['qlist']['id']; ?>
')" class="answers_feed-meta_tx" title="腾讯微博">腾讯微博</a>
					
				</div> 
                </div>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?> 
	</div>
	<div class="clear"></div>
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