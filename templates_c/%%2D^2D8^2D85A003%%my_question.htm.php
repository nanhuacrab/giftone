<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:40
         compiled from member/user/my_question.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'member/user/my_question.htm', 27, false),array('modifier', 'mb_substr', 'member/user/my_question.htm', 27, false),array('modifier', 'date_format', 'member/user/my_question.htm', 27, false),)), $this); ?>
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
      <li <?php if ($this->_tpl_vars['gettype'] == '0'): ?>class="cur"<?php endif; ?>><a href="index.php?c=my_question&type=0">我的提问</a></li>
      <li <?php if ($this->_tpl_vars['gettype'] == '1'): ?>class="cur"<?php endif; ?>><a href="index.php?c=my_question&type=1">我的回答</a></li>
      <li <?php if ($this->_tpl_vars['gettype'] == '2'): ?>class="cur"<?php endif; ?>><a href="index.php?c=my_question&type=2">我的评论</a></li>
    </ul>
  </div>
  <div style="clear:both"></div>
  <div  class="question"> 
  <?php if ($this->_tpl_vars['gettype'] == '0'): ?>
    <div class="resumelistbox01 mt10">
      <div id="" class="my_question_list">
        <div class="my_que_end"></div>
        
        <?php $_from = $this->_tpl_vars['q_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['q_list']):
?>
        <div class="my_que_list">
          <div style="_height:1px;">
            <div class="my_que_list_icon"></div>
            <div class="my_que_list_icon2"></div>
            <div class="my_que_list_L"></div>
            <div class="my_que_list_R"></div>
          </div>
          <div class="my_que_list_top"> <a target="_blank" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=content&id=<?php echo $this->_tpl_vars['q_list']['id']; ?>
" title="<?php echo $this->_tpl_vars['q_list']['title']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['q_list']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 40, 'gbk') : mb_substr($_tmp, 0, 40, 'gbk')); ?>
</a> <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['q_list']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d  %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d  %H:%M:%S")); ?>
</span> </div>
          <div class="my_que_list_bot"> <span class="fltL"><font color="#CC6600"><?php echo $this->_tpl_vars['q_list']['answer_num']; ?>
</font> 人回答 / <font color="#CC6600"><?php echo $this->_tpl_vars['q_list']['visit']; ?>
</font> 人访问</span><span style="float:right;"><a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=my_question&act=del&id=<?php echo $this->_tpl_vars['q_list']['id']; ?>
');" class="my_sc">删除</a></span></div>
        </div>
       
        <?php endforeach; else: ?>
        <div class="my_que_list">
          <div style="_height:1px;">
            <div class="my_que_list_icon"></div>
            <div class="my_que_list_icon2"></div>
            <div class="my_que_list_L"></div>
            <div class="my_que_list_R"></div>
          </div>
          暂无提问！</div> 
       <?php endif; unset($_from); ?> 
	   </div>
    <div class="diggg" style="margin-top:10px; float:right;  "><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['gettype'] == '1'): ?>
  <div class="resumelistbox01 mt10">
    <div id="" class="my_question_list">
      <div class="my_que_end"></div>
      <?php $_from = $this->_tpl_vars['q_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['q_list']):
?>
      <div class="my_que_list">
        <div style="_height:1px;">
          <div class="my_que_list_da"></div>
          <div class="my_que_list_icon2"></div>
          <div class="my_que_list_L"></div>
          <div class="my_que_list_R"></div>
        </div>
        <div class="my_que_list_top"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=content&id=<?php echo $this->_tpl_vars['q_list']['id']; ?>
" target="_blank" >问题：<?php echo ((is_array($_tmp=$this->_tpl_vars['q_list']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 40, 'gbk') : mb_substr($_tmp, 0, 40, 'gbk')); ?>
</a> <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['q_list']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d  %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d  %H:%M:%S")); ?>
</span> </div>
        <div class="my_que_list_bot"><font color="#CC6600">我的回答：</font><a target="_blank" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=content&id=<?php echo $this->_tpl_vars['q_list']['id']; ?>
#<?php echo $this->_tpl_vars['q_list']['aid']; ?>
" title="<?php echo $this->_tpl_vars['q_list']['a_content']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['q_list']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 60, 'gbk') : mb_substr($_tmp, 0, 60, 'gbk')); ?>
</a></div>
      </div>
      <?php endforeach; else: ?>
      <div class="my_que_list">
        <div style="_height:1px;">
          <div class="my_que_list_da"></div>
          <div class="my_que_list_icon2"></div>
          <div class="my_que_list_L"></div>
          <div class="my_que_list_R"></div>
        </div>
        暂无回答！</div> 
    <?php endif; unset($_from); ?>
	</div>
  <div class="diggg" style="margin-top:10px; float:right"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
</div>
<?php endif; ?>
	<?php if ($this->_tpl_vars['gettype'] == '2'): ?>
	<div class="resumelistbox01 mt10">
	<div id="" class="my_question_list">
		<div class="my_que_end"></div> 
		<?php $_from = $this->_tpl_vars['q_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['q_list']):
?>
				<div class="my_que_list">
				  <div style="_height:1px;">
					<div class="my_que_list_p"></div>
					<div class="my_que_list_icon2"></div>
					<div class="my_que_list_L"></div>
					<div class="my_que_list_R"></div>
				  </div>
				  <div class="my_que_list_top"> <a target="_blank" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=content&id=<?php echo $this->_tpl_vars['q_list']['id']; ?>
" title="<?php echo $this->_tpl_vars['q_list']['a_content']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['q_list']['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 40, 'gbk') : mb_substr($_tmp, 0, 40, 'gbk')); ?>
</a> <span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['q_list']['add_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d  %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d  %H:%M:%S")); ?>
</span> </div>
				  <div class="my_que_list_bot">问题：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask/index.php?c=content&id=<?php echo $this->_tpl_vars['q_list']['id']; ?>
" target="_blank" ><?php echo ((is_array($_tmp=$this->_tpl_vars['q_list']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 40, 'gbk') : mb_substr($_tmp, 0, 40, 'gbk')); ?>
</a></div>
				</div>
		<?php endforeach; else: ?>
		<div class="my_que_list">
			<div style="_height:1px;">
			<div class="my_que_list_p"></div>
			<div class="my_que_list_icon2"></div>
			<div class="my_que_list_L"></div>
			<div class="my_que_list_R"></div>
		  </div>
		暂无评论！
		</div> 
 <?php endif; unset($_from); ?> 
	</div>
	<div class="diggg" style="margin-top:10px; float:right"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
	</div>
<?php endif; ?>
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>