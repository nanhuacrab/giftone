<?php /* Smarty version 2.6.26, created on 2015-01-29 18:34:10
         compiled from ../template/member/com/footer.htm */ ?>
<div class="clear"></div>
<div class=footer>
<div class=w900>
<div class=footernav>
<?php $_from = $this->_tpl_vars['menu_name'][3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['footer']):
?>
<?php if ($this->_tpl_vars['key'] != '0'): ?>|<?php endif; ?> <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['footer']['url']; ?>
" <?php if ($this->_tpl_vars['footer']['eject']): ?> target="_blank"<?php endif; ?> style="<?php if ($this->_tpl_vars['footer']['color']): ?>color:<?php echo $this->_tpl_vars['footer']['color']; ?>
;<?php endif; ?> <?php if ($this->_tpl_vars['footer']['bold'] == 1): ?>font-weight:bolder;<?php endif; ?>"><?php echo $this->_tpl_vars['footer']['name']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div> 
<div class="clear"></div>
<div id="bg" <?php if ($this->_tpl_vars['company']['hy'] == "" && ( $_GET['c'] == 'index' || $_GET['c'] == "" )): ?>style="display:block"<?php endif; ?>></div> 
<div id="uclogin" style="display:none"></div>
</div>
<div class="clear"></div>
</body>
</html>