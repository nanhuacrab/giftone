<?php /* Smarty version 2.6.26, created on 2015-01-29 18:22:55
         compiled from E:%5Chtdocs%5Cgift11/template/default/public_search/firm_search.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'E:\\htdocs\\gift11/template/default/public_search/firm_search.htm', 3, false),array('function', 'seacrh_url', 'E:\\htdocs\\gift11/template/default/public_search/firm_search.htm', 9, false),)), $this); ?>
<div class="content_firm">
<div class="firm_left">
<div class="firm_left_h1"><span>精细筛选</span> <a href="<?php echo smarty_function_url(array('m' => 'firm'), $this);?>
">清空</a><br></div>
<div class="firm_left_close">
<?php if ($_GET['hy'] || $_GET['pr'] || $_GET['mun']): ?>
<div class="firm_left_close_p">已选择：</div>
<?php endif; ?>
<?php if ($_GET['hy']): ?>
<span class="firm_left_close_span">从事行业：<?php echo $this->_tpl_vars['industry_name'][$_GET['hy']]; ?>
<a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "hy,page"), $this);?>
"><em></em></a></span>
<?php endif; ?>
<?php if ($_GET['pr']): ?>
<span class="firm_left_close_span">企业性质：<?php echo $this->_tpl_vars['comclass_name'][$_GET['pr']]; ?>
<a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "pr,page"), $this);?>
"><em></em></a></span>
<?php endif; ?>
<?php if ($_GET['mun']): ?>
<span class="firm_left_close_span">企业规模：<?php echo $this->_tpl_vars['comclass_name'][$_GET['mun']]; ?>
<a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "mun,page"), $this);?>
"><em></em></a></span>
<?php endif; ?>
</div>
  <div class="firm_left_cont">
    <div class="firm_seach_top_list">
      <div class="firm_seach_top_l" onclick="check_type('job_hy');">从事行业</div>
      <div class="firm_seach_top_r" id="job_hy" <?php if ($_GET['hy']): ?>style="display:none;"<?php endif; ?>>
       <a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "hy,page"), $this);?>
" <?php if ($_GET['hy'] == ''): ?> class="firm_a_atc"<?php endif; ?>>不限</a> 
       <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
       <a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "hy,page",'hy' => $this->_tpl_vars['v']), $this);?>
" <?php if ($_GET['hy'] == $this->_tpl_vars['v']): ?> class="firm_a_atc"<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</a>
       <?php endforeach; endif; unset($_from); ?>
      </div>
    </div>
    <div class="firm_seach_top_list">
      <div class="firm_seach_top_l" id="pr" onclick="check_type('job_pr');">企业性质</div>
      <div class="firm_seach_top_r" id="job_pr" <?php if ($_GET['pr']): ?>style="display:none;"<?php endif; ?>> 
      <a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "pr,page"), $this);?>
" <?php if ($_GET['pr'] == ''): ?> class="firm_a_atc"<?php endif; ?>>不限</a> 
      <?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
      <a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "pr,page",'pr' => $this->_tpl_vars['v']), $this);?>
" <?php if ($_GET['pr'] == $this->_tpl_vars['v']): ?> class="firm_a_atc"<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a>
      <?php endforeach; endif; unset($_from); ?> 
      </div>
    </div>
    <div class="firm_seach_top_list">
      <div class="firm_seach_top_l" id="mun" onclick="check_type('job_mun');">企业规模</div>
      <div class="firm_seach_top_r" id="job_mun" <?php if ($_GET['mun']): ?>style="display:none;"<?php endif; ?>> 
      <a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "mun,page"), $this);?>
"<?php if ($_GET['mun'] == ''): ?> class="firm_a_atc"<?php endif; ?>>不限</a> 
      <?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
      <a href="<?php echo seacrh_url(array('m' => 'firm','untype' => "mun,page",'mun' => $this->_tpl_vars['v']), $this);?>
"<?php if ($_GET['mun'] == $this->_tpl_vars['v']): ?> class="firm_a_atc"<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a> 
      <?php endforeach; endif; unset($_from); ?>
      </div>
    </div>
  </div>
</div>
<script>
function check_type(id){
	$("#"+id).toggle(); 
}
</script>