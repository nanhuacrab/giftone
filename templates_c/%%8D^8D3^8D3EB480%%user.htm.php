<?php /* Smarty version 2.6.26, created on 2015-02-01 04:18:57
         compiled from wap/user.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/user.htm', 8, false),array('modifier', 'date_format', 'wap/user.htm', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="com_search_top">
<form action="index.php" method="get">
<input type="hidden" name="m" value="user" />
  <div class="com_post_left">
<input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
"  class="seach_post_text placeholder"   placeholder="请输入关键字"  />
<div class="com_post_right">
  <a href="<?php echo smarty_function_wapurl(array('url' => "m:user,c:search"), $this);?>
" class="seach_post_text_a">高级搜索</a><span class="com_post_bth1_line"></span> <input type="submit" value="搜索"class="com_post_bth1" />
</div>
</div>
</form>
</div> 
<div class="main">
<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>  
    <a href="<?php echo smarty_function_wapurl(array('url' => "m:user,c:show,id:".($this->_tpl_vars['user']['id'])), $this);?>
" class="index_post_list_b index_post_list_b_com">
<h3><?php echo $this->_tpl_vars['user']['username_n']; ?>
 <span class="user_name_size">/ 男 / <?php if ($this->_tpl_vars['user']['age'] == 0): ?>保密<?php else: ?><?php echo $this->_tpl_vars['user']['age']; ?>
岁<?php endif; ?></span></h3>
<aside class="uesr_qz_size"><?php echo $this->_tpl_vars['user']['job_post_n']; ?>
 </aside>
<i ><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</i>
</a>
<?php endforeach; endif; unset($_from); ?> 
</div>
<?php if ($this->_tpl_vars['total'] <= 0): ?>
  <?php if ($_GET['keyword'] != ""): ?> 
  <div class="wap_member_no">没有搜索到人才</div>
  <?php else: ?>
  <div class="wap_member_no">暂无人才</div>
  <?php endif; ?>
  <?php else: ?>
  <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  <?php endif; ?>
<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/public.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 