<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:36
         compiled from member/user/privacy.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
  <script>
function changesta(status,type){
	$.post("index.php?m=index&c=privacy",{status:status,type:type},function(data){
		layer.msg('���óɹ�', 2, 9);
	});	
}
</script>
  <div class="mian_right fltR mt12">
    <div class="tabmenubox01 mt9">
      <ul>
        <li > <a href="index.php?c=resume">�ҵļ���</a></li>
        <li> <a href="index.php?c=look">���������</a></li>
        <li> <a href="index.php?c=look_job">�����ְλ</a></li>
        <li class="cur"> <a href="index.php?c=privacy">��˽����</a></li>
      </ul>
    </div>
    <div class="pri_h1">��˽����ֻ�Ե�ǰĬ�ϵļ�����Ч�����ü�����Զ���ڱ���״̬���޷�����ҵ�����������</div>
    <div class="pri_h2"><span>���������̶�</span></div>
    <div  class="pri_p">
      <p><span>
        <input type="radio" name="status" <?php if ($this->_tpl_vars['resume']['status'] == 1): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('1','status');">
        ����</span> ����������ҵ��ѯ������ҵļ������������ε���ҵ�޷����һ����</p>
      <p><span>
        <input type="radio" name="status" <?php if ($this->_tpl_vars['resume']['status'] == 2): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('2','status');">
        ������</span> ��������ҵ��������������ҵļ�����ֻ��������ӦƸʱ�Է����ܲ鿴</p>
    </div>
    <div class="pri_h2" style=" margin-top:20px;"><span>�������Ϲ����̶�</span></div>
    <div  class="pri_p">
      <p><span>
        <input type="radio" name="info_status" <?php if ($this->_tpl_vars['resume']['info_status'] == 1): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('1','info_status');">
        ����</span> ���������˲鿴�ҵĻ�������</p>
      <p><span>
        <input type="radio" name="info_status" <?php if ($this->_tpl_vars['resume']['info_status'] == 2): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('2','info_status');">
        ������</span> ֻ������ҵ�鿴�ҵĻ�������</p>
    </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 