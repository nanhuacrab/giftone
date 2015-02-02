<?php /* Smarty version 2.6.26, created on 2015-01-29 21:33:53
         compiled from E:%5Chtdocs%5Cgift11/template/ask/right.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'aurl', 'E:\\htdocs\\gift11/template/ask/right.htm', 4, false),array('function', 'furl', 'E:\\htdocs\\gift11/template/ask/right.htm', 23, false),)), $this); ?>
<div class="answers_right_Status">
	<div class="answers_right_h1"><span>我的应用</span></div>
	<ul class="answers_right_sidebar-nav">
		<li><a href="<?php echo smarty_function_aurl(array('url' => "c:myquestion"), $this);?>
" class="answers_right_a" title="我的问题">我的问题</a></li>
		<li><a href="<?php echo smarty_function_aurl(array('url' => "c:attenquestion"), $this);?>
" class="answers_right_b" title="我关注的问题">我关注的问题</a></li>
		<li><a href="<?php echo smarty_function_aurl(array('url' => "c:myanswer"), $this);?>
" class="answers_right_c" title="我回答的问题">我回答的问题</a></li> 
	</ul>
</div>
<div class="answers_right_like">
<div class="answers_right_h1"><span>你可能感兴趣的人</span></div>
	<?php $_from = $this->_tpl_vars['qrecom_l']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['qrecom_l']):
?>
	<?php if (empty ( $this->_tpl_vars['qrecom_l'] ) && $this->_tpl_vars['key'] == '0'): ?>
		<div style="padding-top:10px; auto;width:100%;text-align:center;">暂无推荐</div>
	<?php else: ?>
    <?php if ($this->_tpl_vars['qrecom_l']['nickname']): ?>
        <dl class="answers_right_like_list">
            <dt onmouseover="get_user_info('user_tj_','<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
','<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
','35');" onmouseout="hide_user_info('user_tj_','<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
')"  id='user_tj_<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
' style=" cursor:pointer">
                <img src="<?php echo $this->_tpl_vars['qrecom_l']['pic']; ?>
" width="25" height="25" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);"> 
            </dt>
            <dd>
                <ul>
                    <li>
                        <a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['qrecom_l']['uid'])), $this);?>
" title="<?php echo $this->_tpl_vars['qrecom_l']['nickname']; ?>
"><?php echo $this->_tpl_vars['qrecom_l']['nickname']; ?>
</a> 
                        <?php if ($this->_tpl_vars['qrecom_l']['is_atn'] != '2'): ?>
                            <?php if ($this->_tpl_vars['qrecom_l']['is_atn'] == '1'): ?> 
                                <a href="javascript:void(0)" style="float:right" onclick="attention_user('<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
')" class="zg-btn-unfollow"  name="atn_<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
" title="取消关注">取消关注</a>
                            <?php else: ?>
                                <a href="javascript:void(0)" style="float:right" onclick="attention_user('<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
')" class='zg-btn-green'  name="atn_<?php echo $this->_tpl_vars['qrecom_l']['uid']; ?>
" title="关注">关注</a>
                            <?php endif; ?>
                        <?php endif; ?> 
                    </li>
                    <li><?php if ($this->_tpl_vars['qrecom_l']['description']): ?><?php echo $this->_tpl_vars['qrecom_l']['description']; ?>
<?php else: ?>暂无签名 <?php endif; ?></li>
                    <li>他比较关注：<?php echo $this->_tpl_vars['qrecom_l']['class_name']; ?>
</li>
                </ul>
            </dd>
        </dl>
        <?php endif; ?> 
	<?php endif; ?> 
	<?php endforeach; endif; unset($_from); ?>
</div>