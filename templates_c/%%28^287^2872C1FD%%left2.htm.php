<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:55
         compiled from E:%5Chtdocs%5Cgift11/template/friend/default/left2.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'furl', 'E:\\htdocs\\gift11/template/friend/default/left2.htm', 4, false),array('function', 'url', 'E:\\htdocs\\gift11/template/friend/default/left2.htm', 30, false),array('modifier', 'mb_substr', 'E:\\htdocs\\gift11/template/friend/default/left2.htm', 5, false),)), $this); ?>

<div class="Personals_left">
  <dl class="Personals_hy">
    <dt><a href="<?php echo smarty_function_furl(array('url' => "c:photo"), $this);?>
"><img src="<?php echo $this->_tpl_vars['member']['pic']; ?>
" width="40" height="50"/></a></dt>
    <dd><strong><a href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['member']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['member']['nickname']; ?>
</a></strong> <?php if ($this->_tpl_vars['member']['description']): ?><a href="<?php echo smarty_function_furl(array('url' => "c:info"), $this);?>
" title="<?php echo $this->_tpl_vars['member']['description']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['member']['description'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 13, 'gbk') : mb_substr($_tmp, 0, 13, 'gbk')); ?>
</a><?php else: ?><a href="<?php echo smarty_function_furl(array('url' => "c:info"), $this);?>
">亲，还没填写个性签名?</a><?php endif; ?> </dd>
  </dl>
  <div class="clear"></div>
  <div class="Personals_left_h1"> 我的应用 </div>
  <ul class="Personals_left_list">

    <li <?php if ($this->_tpl_vars['class'] == 1): ?>class="selected"<?php endif; ?>><a class="app" href="<?php echo smarty_function_furl(array(), $this);?>
"> <img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/feed.png"> 全部动静 </a> </li>
    <li <?php if ($this->_tpl_vars['class'] == 3): ?>class="selected"<?php endif; ?>><a class="app" href="<?php echo smarty_function_furl(array('url' => "c:myfriend"), $this);?>
"> <img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/LhSrm99n018153.gif"> 我的好友 </a></li>
    <li><a class="app" href="<?php echo smarty_function_furl(array('url' => "c:profile,id:".($this->_tpl_vars['member']['uid'])), $this);?>
" title="与我相关"> <img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/matter-logo.gif"> 与我相关</a></li>
    <li <?php if ($this->_tpl_vars['class'] == 2): ?>class="selected"<?php endif; ?>><a class="app" href="<?php echo smarty_function_furl(array('url' => "c:messagelist"), $this);?>
"><img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/Lyd9m2e023172.gif"> 留言板 </a></li>
    <li <?php if ($this->_tpl_vars['class'] == 4): ?>class="selected"<?php endif; ?>><a class="app" href="<?php echo smarty_function_furl(array('url' => "c:info"), $this);?>
"> <img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/L074547241570HUA.gif"> 修改资料 </a></li>
    <li><a class="app" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask" target="_blank"> <img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/s-icon.png"> 问答 </a></li>
    <li><a class="app" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member" target="_blank"> <img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/app.png"> 会员中心 </a></li>
  </ul>
  <?php if ($this->_tpl_vars['member']['usertype'] == 1): ?>
  <div class="Personals_left_h2"> 最新职位 </div>
  <ul class="Personals_left_list">
    <?php $_from = $this->_tpl_vars['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['joblist']):
?>
    <li><a class="app" target="_blank" href="<?php echo $this->_tpl_vars['joblist']['job_url']; ?>
"> <?php echo $this->_tpl_vars['joblist']['name_n']; ?>
 </a> </li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
  <?php elseif ($this->_tpl_vars['member']['usertype'] == 2): ?>
  <div class="Personals_left_h2"> 最新人才 </div>
  <ul class="Personals_left_list">
    <?php $_from = $this->_tpl_vars['puserlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['puserlist']):
?>
    <li><a class="app" href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['puserlist']['id'])), $this);?>
"> <?php echo $this->_tpl_vars['puserlist']['username_n']; ?>
 </a> </li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
  <?php endif; ?>
  </div>