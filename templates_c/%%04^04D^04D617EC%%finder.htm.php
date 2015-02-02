<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:32
         compiled from member/user/finder.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/user/finder.htm', 20, false),)), $this); ?>
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
      <li class="cur"><a href="javascript:void(0);">职位搜索器</a></li>
    </ul>
  </div>
      <div class="resumelistbox01 mt10" style="flaot:left"> 
        <div class="index_Job_Finder_box" style="padding-left:10px;"> 
		<?php $_from = $this->_tpl_vars['finder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flist']):
?> 
		 <ul class="index_Job_Finder_ul fltL">
		  <li class="index_Job_Finder fltL">
		  <i class="index_Job_Finder_icon fltL png"></i>
		  <div class="index_Job_Finder_cont fltL">
		  <div class="index_Job_Finder_cont_name"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['flist']['url']; ?>
" class="index_Job_Finder_cont_name_a"><?php if ($this->_tpl_vars['flist']['name']): ?><?php echo $this->_tpl_vars['flist']['name']; ?>
<?php else: ?>未命名<?php endif; ?></a></div>
		 <div class="index_Job_Finder_cont_name_condition">搜索条件：<?php echo $this->_tpl_vars['flist']['findername']; ?>
</div>
		 <div class="index_Job_Finder_cont_search"><a class="index_Job_Finder_cont_search_a" title="搜索" target="_blank" href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['flist']['url']; ?>
">立即搜索</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['flist']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</div>
		  </div> 
		  <div class="index_Job_Finder_Operating fltL"><a href="index.php?c=finder&act=edit&id=<?php echo $this->_tpl_vars['flist']['id']; ?>
" title="修改">修改</a> | <a class="re_sc" onclick="layer_del('确定要删除？', 'index.php?c=finder&act=del&id=<?php echo $this->_tpl_vars['flist']['id']; ?>
');" href="javascript:void(0)">删除</a></div>
		  </li>
		  </ul> 

	  <?php endforeach; else: ?> 
	   <div class="msg_no">您还没有个人搜索器。</div> 
	  <?php endif; unset($_from); ?> 
	  <div class="index_Job_Finder_bot fltL"><?php if ($this->_tpl_vars['syfinder'] > 0): ?><a href="index.php?c=finder&act=edit" class="index_Job_Finder_submit">新增搜索器</a><?php endif; ?>共可创建<?php echo $this->_tpl_vars['config']['user_finder']; ?>
个，还可创建<?php echo $this->_tpl_vars['syfinder']; ?>
个搜索器</div> 
        </div>
	</div> 
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>