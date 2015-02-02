<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:36
         compiled from admin/admin_search.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_search.htm', 3, false),)), $this); ?>
	  <div class="search_select">
        <?php if ($_GET['keyword'] != ""): ?>
        <a class="Search_jobs_c_a" href="<?php echo seacrh_url(array('m' => $_GET['m'],'c' => $_GET['c'],'untype' => 'keyword'), $this);?>
">¹Ø¼ü×Ö£º<?php echo $_GET['keyword']; ?>
</a>
        <?php endif; ?>
      <?php $_from = $this->_tpl_vars['search_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['rows']):
?>
       <?php $this->assign('t', $this->_tpl_vars['rows']['param']); ?>
             <?php if ($_GET[$this->_tpl_vars['t']] !== false && $_GET[$this->_tpl_vars['t']] != ''): ?>
                <?php $_from = $this->_tpl_vars['rows']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['rs']):
?>
                    <?php if ($_GET[$this->_tpl_vars['t']] == $this->_tpl_vars['k']): ?>
                    <a class="Search_jobs_c_a" href="<?php echo seacrh_url(array('m' => $_GET['m'],'c' => $_GET['c'],'untype' => $this->_tpl_vars['t']), $this);?>
">
                        <?php echo $this->_tpl_vars['rows']['name']; ?>
£º<?php echo $this->_tpl_vars['rs']; ?>

                    </a>
                    <?php endif; ?>
                   
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?> 
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<div class="admin_adv_search_box">
     <?php $_from = $this->_tpl_vars['search_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['row']):
?>
     <?php $this->assign('t', $this->_tpl_vars['row']['param']); ?>
    	 <?php if ($this->_tpl_vars['key']%2 == 0): ?>
    	  	<div class="admin_adv_search_list admin_adv_search_list_bg">
          <?php else: ?>
          	<div class="admin_adv_search_list">
          <?php endif; ?>
          <div class="admin_adv_search_left"><?php echo $this->_tpl_vars['row']['name']; ?>
</div>
	  <div class="admin_adv_search_right">
		<a href="<?php echo seacrh_url(array('m' => $_GET['m'],'c' => $_GET['c'],'untype' => $this->_tpl_vars['t']), $this);?>
" <?php if ($_GET[$this->_tpl_vars['t']] !== true && $_GET[$this->_tpl_vars['t']] == ''): ?>class="admin_adv_search_cur"<?php endif; ?>>²»ÏÞ</a>
   		<?php $_from = $this->_tpl_vars['row']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['r']):
?>
                <a href="<?php echo seacrh_url(array('m' => $_GET['m'],'c' => $_GET['c'],'adv' => $this->_tpl_vars['k'],'adt' => $this->_tpl_vars['t'],'untype' => $this->_tpl_vars['t']), $this);?>
" 
                <?php if ($_GET[$this->_tpl_vars['t']] !== false && $_GET[$this->_tpl_vars['t']] != '' && $_GET[$this->_tpl_vars['t']] == $this->_tpl_vars['k']): ?>
                class="admin_adv_search_cur"
                <?php endif; ?>><?php echo $this->_tpl_vars['r']; ?>
</a> 
            <?php endforeach; endif; unset($_from); ?>        
        </div>
        </div>
        <?php endforeach; endif; unset($_from); ?>  
	  <div class="admin_adv_search_icon"><i class="admin_adv_search_icon_i">&nbsp;</i></div>
  </div> 
<div class="clear"></div>