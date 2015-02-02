<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:32
         compiled from member/user/atn.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'curl', 'member/user/atn.htm', 14, false),array('modifier', 'date_format', 'member/user/atn.htm', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="w950"> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="mian_right fltR mt12 re"> 
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/ul_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <div class="resume_box_list">
       <div class="List_Ope List_Title ">
       <span class="List_Title_span List_Title_w500">公司名称</span>		
       <span class="List_Title_span List_Title_w120">关注时间</span>	 	
       <span class="List_Title_span List_Title_w80">操作</span>	
      </div>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
           <div class="List_Ope List_Ope_bor">
               <span class="List_Title_span List_Title_w500"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['log']['sc_uid'])), $this);?>
" target="_blank" class="List_Title_span_com"><?php echo $this->_tpl_vars['log']['com_name']; ?>
</A></span>		
			   <span class="List_Title_span List_Title_w120"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>	 	
			   <span class="List_Title_span List_Title_w80"><a href="javascript:void(0)"  onclick="layer_del('您确定要取消关注？', '<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=atn&act=del&id=<?php echo $this->_tpl_vars['log']['id']; ?>
&uid=<?php echo $this->_tpl_vars['log']['sc_uid']; ?>
');">取消关注</a></span>	
			  </div> 
            <?php endforeach; else: ?> 
          <div class="msg_no">暂未关注任何企业</div>
          <?php endif; unset($_from); ?>  
         <div class="clear"></div>
         <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>  
       </div>
      </div> 
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 