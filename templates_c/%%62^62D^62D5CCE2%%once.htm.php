<?php /* Smarty version 2.6.26, created on 2015-01-31 00:29:51
         compiled from wap/once.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/once.htm', 8, false),array('modifier', 'date_format', 'wap/once.htm', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="com_search_top">
		<form action="index.php" method="get">
			<input type="hidden" name="m" value="once" /> 
			<input type="hidden"  value="once" name="m"/>
			 <div class="com_post_left"><input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="seach_post_text placeholder" placeholder="������ؼ���" />
              <div class="com_post_right" >
              <input type="button" value="��Ҫ����" class="tiny_but" onclick="location.href='<?php echo smarty_function_wapurl(array('m' => 'once','url' => "c:add"), $this);?>
'" >
              <span class="com_post_bth1_line"></span>
			<input type="submit"  value="����"  class="com_post_bth1"/> 
               </div>
		</form>
	 </div>
</div>
<section>
  <div class="main"> <?php $_from = $this->_tpl_vars['once']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['once']):
?> 
  <a href="<?php echo smarty_function_wapurl(array('url' => "m:once,c:show,id:".($this->_tpl_vars['once']['id'])), $this);?>
"  class="tiny_list">
    <h3><?php echo $this->_tpl_vars['once']['title']; ?>
</h3>
    <i class="user_name_size2"><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</i> 
    <aside> <?php echo $this->_tpl_vars['once']['companyname']; ?>
</aside>
    
      <aside>[��Ƹ����] <?php echo $this->_tpl_vars['once']['mans']; ?>
</aside>
<!--  <aside>[�� ϵ ��] <?php echo $this->_tpl_vars['once']['linkman']; ?>
</aside>
  <aside>[��ϵ�绰] <?php echo $this->_tpl_vars['once']['phone']; ?>
</aside>
  <aside>[��ϵ��ַ] <?php echo $this->_tpl_vars['once']['address']; ?>
</aside>
  <aside>[����Ҫ��] <?php echo $this->_tpl_vars['once']['require']; ?>
</aside>-->
    </a> 
    <?php endforeach; endif; unset($_from); ?> </div>
</section>
<?php if ($this->_tpl_vars['total'] <= 0): ?>
  <?php if ($_GET['keyword'] != ""): ?> 
  <div class="wap_member_no">û��������΢��Ƹ</div>
  <?php else: ?>
  <div class="wap_member_no">����΢��Ƹ</div>
  <?php endif; ?>
  <?php else: ?>
  <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  <?php endif; ?>
<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 