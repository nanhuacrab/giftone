<?php /* Smarty version 2.6.26, created on 2015-02-01 04:18:54
         compiled from wap/tiny.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/tiny.htm', 8, false),array('modifier', 'date_format', 'wap/tiny.htm', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="com_search_top">
		<form action="index.php" method="get">
			<input type="hidden" name="m" value="tiny" />
			<input type="hidden"  value="tiny" name="m"/>
  <div class="com_post_left"><input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="seach_post_text placeholder" placeholder="请输入关键字" />
  <div class="com_post_right" >
		 <input type="button" value="我要发布" class="tiny_but" onclick="location.href='<?php echo smarty_function_wapurl(array('m' => 'tiny','url' => "c:add"), $this);?>
'" >  <span class="com_post_bth1_line"></span>	<input type="submit" value="搜索" class="com_post_bth1"/></div> 
		</form>
  </div>		
</div>
<section>
  <div class="main"> 
  <?php $_from = $this->_tpl_vars['wres']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wres']):
?> <a href="<?php echo smarty_function_wapurl(array('url' => "m:tiny,c:show,id:".($this->_tpl_vars['wres']['id'])), $this);?>
" class="tiny_list">
    <h3><?php echo $this->_tpl_vars['wres']['job']; ?>
</h3>
    <aside class="uesr_qz_size"><?php echo $this->_tpl_vars['wres']['username']; ?>
 /<?php echo $this->_tpl_vars['wres']['sex_name']; ?>
</aside>
    <i class="user_name_size2"><?php echo ((is_array($_tmp=$this->_tpl_vars['wres']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</i> 
    <em><?php echo $this->_tpl_vars['wres']['exp_name']; ?>
</em>
    <?php endforeach; endif; unset($_from); ?> 
    </a> 
    </div>
</section>

<?php if ($this->_tpl_vars['total'] <= 0): ?>
  <?php if ($_GET['keyword'] != ""): ?> 
  <div class="wap_member_no">没有搜索到微简历</div>
  <?php else: ?>
  <div class="wap_member_no">暂无微简历</div>
  <?php endif; ?>
  <?php else: ?>
<div class="pages" style="padding-bottom:10px;"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  <?php endif; ?>
<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 