<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:33
         compiled from member/user/log.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/user/log.htm', 27, false),)), $this); ?>
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
      <li class="cur"><a href="javascript:void(0);">操作日志</a></li>
    </ul>
  </div>
  <div class="remindbox01 mt10">
    <div id="gms_showclew"></div>
    <div class="resumelistbox01 mt10">
      <div id="" class="resume_box_list">
        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <table border="0" cellspacing="1" cellpadding="0" class="resume" style="width:780px;">
          <tr>
            <th>ID</th>
            <th>操作内容</th>
            <th>IP</th>
            <th>时间</th>
          </tr>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
          <tr>
            <td><?php echo $this->_tpl_vars['log']['id']; ?>
</td>
            <td style="text-align:left"><?php echo $this->_tpl_vars['log']['content']; ?>
</td>
            <td><?php echo $this->_tpl_vars['log']['ip']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</td>	
			
          </tr>
          <?php endforeach; endif; unset($_from); ?>
        </table>
      </div>
    </div>
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