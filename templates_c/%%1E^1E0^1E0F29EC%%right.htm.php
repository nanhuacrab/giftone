<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:55
         compiled from E:%5Chtdocs%5Cgift11/template/friend/default/right.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'furl', 'E:\\htdocs\\gift11/template/friend/default/right.htm', 4, false),array('function', 'aurl', 'E:\\htdocs\\gift11/template/friend/default/right.htm', 11, false),)), $this); ?>

<div class="Personals_right">
  <div class="clear"></div>
  <div class="Personals_may"><strong>可能感兴趣的人</strong> <a href="<?php echo smarty_function_furl(array('url' => "c:addfriend"), $this);?>
">更多>></a></div>
  <?php $_from = $this->_tpl_vars['addlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['addlist']):
?>
  <div class="Personals_may_firend">
    <div class="Personals_may_firend_img"><img src="<?php echo $this->_tpl_vars['addlist']['pic']; ?>
" width="30" height="30" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);"/></div>
    <a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['addlist']['uid'])), $this);?>
" class="Personals_may_fangk" title="<?php echo $this->_tpl_vars['addlist']['nickname']; ?>
"><?php echo $this->_tpl_vars['addlist']['nickname']; ?>
</a> <a href="javascript:;" onclick="addfriend('<?php echo $this->_tpl_vars['addlist']['uid']; ?>
','<?php echo $this->_tpl_vars['addlist']['usertype']; ?>
');" class="Personals_may_submit" title="好友">好友</a> 
	</div>
  <?php endforeach; endif; unset($_from); ?>
  <div class="Personals_may"><strong>热门问答</strong> <a  href="<?php echo smarty_function_aurl(array(), $this);?>
">更多>></a></div>
	<ul class="Personals_py_wd">
	<?php $_from = $this->_tpl_vars['qlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qlist']):
?>
	<li><a href="<?php echo $this->_tpl_vars['qlist']['url']; ?>
" title="<?php echo $this->_tpl_vars['qlist']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['qlist']['title']; ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
  <div class="Personals_may"><strong>最近访客</strong> </div>
  <div class="Personals_may_list"> 
  <?php $_from = $this->_tpl_vars['myfoot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['myfoot']):
?>
    <dl>
      <dt><img src="<?php echo $this->_tpl_vars['myfoot']['pic']; ?>
" width="50" height="50" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);"/></dt>
      <dd><a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['myfoot']['uid'])), $this);?>
" class="my_fangk" title="<?php echo $this->_tpl_vars['myfoot']['nickname']; ?>
"><?php echo $this->_tpl_vars['myfoot']['nickname']; ?>
</a></dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?> 
	</div>
</div>