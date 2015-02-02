<?php /* Smarty version 2.6.26, created on 2015-02-01 04:18:49
         compiled from wap/com.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/com.htm', 6, false),array('modifier', 'mb_substr', 'wap/com.htm', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="com_search_top">
  <form action="index.php" method="get">
   <input type="hidden" name="m" value="com" />
    <div class="com_post_left">
    <input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
" class="seach_post_text placeholder"  placeholder="请输入关键字" /> <div class="com_post_right"><a href="<?php echo smarty_function_wapurl(array('url' => "m:com,c:search"), $this);?>
" class="seach_post_text_a">高级搜索</a><span class="com_post_bth1_line"></span><input type="submit" value="搜索"class="com_post_bth1" /></div>
    </div>
 </form>
</div>
<div class="main">
<section> 
  <div class="index_post_list"> 
  <?php $_from = $this->_tpl_vars['job_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job_list']):
?>
  	<a href="<?php echo smarty_function_wapurl(array('url' => "m:com,c:view,id:".($this->_tpl_vars['job_list']['id'])), $this);?>
" class="index_post_list_b index_post_list_b_com">
    <h3><?php echo $this->_tpl_vars['job_list']['name_n']; ?>
</h3>
    <aside><?php echo ((is_array($_tmp=$this->_tpl_vars['job_list']['com_name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 12, 'gbk') : mb_substr($_tmp, 0, 12, 'gbk')); ?>
</aside>
    <i><?php echo $this->_tpl_vars['job_list']['job_city_one']; ?>
-<?php echo $this->_tpl_vars['job_list']['job_city_two']; ?>
</i> <em><?php echo $this->_tpl_vars['job_list']['time']; ?>
</em> </a> 
    <?php endforeach; endif; unset($_from); ?>
     </div>
  <div>
  <?php if ($this->_tpl_vars['total'] <= 0): ?>
  <?php if ($_GET['keyword'] != ""): ?> 
  <div class="wap_member_no">没有搜索到职位</div>
  <?php else: ?>
  <div class="wap_member_no">暂无职位</div>
  <?php endif; ?>
  <?php else: ?>
  <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  <?php endif; ?>
  
  </div>
  </section>
</div>  
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