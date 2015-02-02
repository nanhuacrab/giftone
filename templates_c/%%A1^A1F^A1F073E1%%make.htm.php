<?php /* Smarty version 2.6.26, created on 2015-01-29 21:36:58
         compiled from ../template/default/make.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'desc', '../template/default/make.htm', 8, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<div class="clear"></div>
<div class="about_content">
<div class="about_left">
<div class="about_left_h1"><span class="about_left_h1_span">帮助中心</span></div>
<?php echo smarty_function_desc(array('assign_name' => 'descclass'), $this);?>

<?php $_from = $this->_tpl_vars['descclass']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['descclass']):
?>
<div class="about_left_list">
<div class="about_left_tit"><span class="bout_left_tit_span"><?php echo $this->_tpl_vars['descclass']['name']; ?>
</span></div>
<ul class="about_left_ul">
<?php $_from = $this->_tpl_vars['descclass']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['desclit']):
?>
<li <?php if ($_GET['id'] == $this->_tpl_vars['desclit']['id']): ?>class="about_left_ul_cur"<?php endif; ?>><a 
			<?php if ($this->_tpl_vars['desclit']['is_type'] == 1): ?>
              href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['desclit']['url']; ?>
"
               <?php else: ?>
              href="<?php echo $this->_tpl_vars['desclit']['url']; ?>
"
               <?php endif; ?>
 title="<?php echo $this->_tpl_vars['desclit']['name']; ?>
"><?php echo $this->_tpl_vars['desclit']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endforeach; endif; unset($_from); ?>


</div>
<div class="about_right">
<div class="about_right_h1"><span class="about_right_span"><?php echo $this->_tpl_vars['name']; ?>
</span>
<em class="about_right_cur">当前位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <?php echo $this->_tpl_vars['name']; ?>
</em>
</div>
<div class="about_right_p">
<?php echo $this->_tpl_vars['content']; ?>

</div>
</div>




</div>