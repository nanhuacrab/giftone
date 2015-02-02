<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:30
         compiled from member/user/favorite.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/user/favorite.htm', 18, false),array('function', 'curl', 'member/user/favorite.htm', 23, false),array('modifier', 'date_format', 'member/user/favorite.htm', 28, false),)), $this); ?>
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
<div class="mian_right fltR mt12">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/ul_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="gms_showclew"></div>
      <div  class="resume_box_list">
      
		<div class="resume_Prompt">您已收藏 <span style="color:red;"><?php echo $this->_tpl_vars['fnum']; ?>
</span> 条职位,如果没有申请，请赶快申请吧，不要错位工作的机会！</div>
            <div class="List_Ope List_Title mt12">
       <span class="List_Title_span List_Title_w260">收藏的职位</span>	 	
       <span class="List_Title_span List_Title_w110">薪资待遇</span>	
        <span class="List_Title_span List_Title_w120">工作地点</span>	
       <span class="List_Title_span List_Title_w120">收藏时间</span>	 	
       <span class="List_Title_span List_Title_w80">操作</span>	
      </div>
        <?php if (empty ( $this->_tpl_vars['rows'] )): ?>
               <div class="msg_no">你还没有收藏职位哦！<a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
" class="msg_no_sq">马上去找工作</a></div>
          <?php else: ?>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
                <div class="List_Ope List_Ope_bor">
       <span class="List_Title_span List_Title_w260"><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['job']['job_id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['job']['job_name']; ?>
"  class="List_Title_span_com"><?php echo $this->_tpl_vars['job']['job_name']; ?>
</a> 
       <div><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['job']['com_id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['job']['com_name']; ?>
"><?php echo $this->_tpl_vars['job']['com_name']; ?>
</a> </div>
       </span>	 	
       
       <span class="List_Title_span List_Title_w110"> &nbsp;<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['salary']]; ?>
</span>	
        <span class="List_Title_span List_Title_w120">&nbsp;<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['provinceid']]; ?>
-<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['cityid']]; ?>
</span>	
       <span class="List_Title_span List_Title_w120">&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span></span>	 	
       <span class="List_Title_span List_Title_w80"><a href="javascript:void(0)"   onclick="layer_del('确定要删除？', 'index.php?c=favorite&act=del&id=<?php echo $this->_tpl_vars['job']['id']; ?>
');" class="re_sc">删除</a></span>	
      </div>
          <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
      </div>
      <div class="diggg" style="float:right; margin-top:10px;"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    </div>
  </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>