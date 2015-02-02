<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:21
         compiled from ../template/default//footer.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'desc', '../template/default//footer.htm', 3, false),)), $this); ?>
<!--foot  start-->

<?php echo smarty_function_desc(array('assign_name' => 'desc'), $this);?>

<div class="clear"></div>
<div class="footer">
  <div class="foot">
    <div class="foot_conent">
      <div class="footer_left"> <?php $_from = $this->_tpl_vars['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['desclist']):
?>
        <dl class="footer_list">
          <dt><?php echo $this->_tpl_vars['desclist']['name']; ?>
</dt>
          <dd>
            <ul>
              <?php $_from = $this->_tpl_vars['desclist']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lit']):
?>
              <li><a 
              <?php if ($this->_tpl_vars['lit']['is_type'] == 1): ?>
              href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['lit']['url']; ?>
"
               <?php else: ?>
              href="<?php echo $this->_tpl_vars['lit']['url']; ?>
"
               <?php endif; ?>
               title="<?php echo $this->_tpl_vars['lit']['name']; ?>
"><?php echo $this->_tpl_vars['lit']['name']; ?>
</a></li>
              <?php endforeach; endif; unset($_from); ?>
            </ul>
          <dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?> </div>
      <div class="footer_right" style="text-align:left">
        <div class="footer_touch">服务热线</div>
        <div class="footer_tel"><?php echo $this->_tpl_vars['config']['sy_freewebtel']; ?>
</div>
        <ul class="footer_last">
        <?php $_from = $this->_tpl_vars['navlist_app']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navlist_app']):
?>          
          <li style="width:70px; float:left; margin-top:5px; text-align:left"> <a class="move_0<?php echo $this->_tpl_vars['navlist_app']['sort']; ?>
" style="color: #ff0000" <?php if ($this->_tpl_vars['navlist_app']['eject']): ?> target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['navlist_app']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['navlist_app']['name']; ?>
</a> </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
    <div class="footer_bot">
      <div class="footer_bot_p"><?php echo $this->_tpl_vars['config']['sy_webcopyright']; ?>
<?php echo $this->_tpl_vars['config']['sy_webrecord']; ?>
 </div>
      <div class="footer_bot_p">	地址:<?php echo $this->_tpl_vars['config']['sy_webadd']; ?>
  电话(Tel):<?php echo $this->_tpl_vars['config']['sy_webtel']; ?>
  EMAIL:<?php echo $this->_tpl_vars['config']['sy_webemail']; ?>
</div>
      <div class="footer_img"> 
      <a href="/"><img alt="" src="<?php echo $this->_tpl_vars['style']; ?>
/images/ftImg01.png" width="120" height="52"> </a> 
      <a href="/"><img alt="" src="<?php echo $this->_tpl_vars['style']; ?>
/images/ftImg02.png" width="120" height="52"> </a> 
      <a href="/"><img alt="" src="<?php echo $this->_tpl_vars['style']; ?>
/images/ftImg03.png" width="120" height="52"> </a> 
      </div>
    </div>
  </div>
</div>
<!--foot  end--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['imtplstyle'])."/index.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="bg" style=""></div>
<div id="uclogin" style="display:none"></div>
<script>var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
';var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"; </script>
</body></html>