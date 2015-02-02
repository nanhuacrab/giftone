<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:22
         compiled from member/user/look.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'curl', 'member/user/look.htm', 34, false),array('modifier', 'date_format', 'member/user/look.htm', 36, false),)), $this); ?>
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
  <div class="tabmenubox01 mt9">
    <ul>
      <li > <a href="index.php?c=resume">我的简历</a></li>
      <li class="cur"> <a href="index.php?c=look">简历被浏览</a></li>
      <li> <a href="index.php?c=look_job">浏览的职位</a></li>
      <li> <a href="index.php?c=privacy">隐私设置</a></li>
    </ul>
  </div>
  <div class="remindbox01 mt10" >
    <div id="gms_showclew"></div>
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php" method="get" target="supportiframe" id='myform'>
    <input type="hidden" name="c" value="look" />
    <input type="hidden" name="act" value="del" />
    <div class="resumelistbox01 mt10">
      <div class="resume_box_list">
      <div class="resume_Prompt">提示：简历被浏览(指企业主动搜索并查看的记录 )</div>
       <div class="List_Ope List_Title mt12">
       <span class="List_Title_span List_Title_span_n">&nbsp;</span>
       <span class="List_Title_span List_Title_w60">ID </span>	
       <span class="List_Title_span List_Title_w260">公司名称</span>	 	
       <span class="List_Title_span List_Title_w200">简历名称</span>	 	
       <span class="List_Title_span List_Title_w80">浏览时间</span>	 	
       <span class="List_Title_span List_Title_w100">操作</span>	
      </div>
       <?php $_from = $this->_tpl_vars['look']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
        <div class="List_Ope List_Ope_bor">
       <span class="List_Title_span List_Title_span_n"> <input type="checkbox" name="del[]" value="<?php echo $this->_tpl_vars['log']['id']; ?>
" class="List_Title_span_check_b"></span>
       <span class="List_Title_span List_Title_w60"><?php echo $this->_tpl_vars['log']['id']; ?>
&nbsp;</span>	
       <span class="List_Title_span List_Title_w260"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['log']['com_id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['log']['com']; ?>
" class="List_Title_span_com"><?php echo $this->_tpl_vars['log']['com']; ?>
</A>&nbsp;</span>	 	
       <span class="List_Title_span List_Title_w200"><?php echo $this->_tpl_vars['log']['resume']; ?>
&nbsp;</span>	 	
       <span class="List_Title_span List_Title_w80"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>	 	
       <span class="List_Title_span List_Title_w100"><a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?c=look&act=del&id=<?php echo $this->_tpl_vars['log']['id']; ?>
');" class="List_dete">删除</a></span>	
      </div>

         <?php endforeach; else: ?>  
          <div class="msg_no">
           还没有公司浏览我的简历。
          </div>
          <?php endif; unset($_from); ?> 
		  <?php if ($this->_tpl_vars['look']): ?> 
           <div class="List_Ope List_Ope_bg">
		   <span class="List_Title_span List_Title_span_n">
           <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)' class="List_Title_span_check_n mt5"></span>	 
           <INPUT type="button" name="subdel" value="批量删除" onclick="return really('del[]');" class="Bulk_Delete">
		  </div>
		  <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
		  <?php endif; ?> 
      </div>
    </div>
    
    </form>
  </div>
</div>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 