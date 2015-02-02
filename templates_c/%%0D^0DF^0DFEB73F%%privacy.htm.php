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
		layer.msg('设置成功', 2, 9);
	});	
}
</script>
  <div class="mian_right fltR mt12">
    <div class="tabmenubox01 mt9">
      <ul>
        <li > <a href="index.php?c=resume">我的简历</a></li>
        <li> <a href="index.php?c=look">简历被浏览</a></li>
        <li> <a href="index.php?c=look_job">浏览的职位</a></li>
        <li class="cur"> <a href="index.php?c=privacy">隐私设置</a></li>
      </ul>
    </div>
    <div class="pri_h1">隐私设置只对当前默认的简历有效；备用简历永远处于保密状态，无法被企业搜索或浏览。</div>
    <div class="pri_h2"><span>简历公开程度</span></div>
    <div  class="pri_p">
      <p><span>
        <input type="radio" name="status" <?php if ($this->_tpl_vars['resume']['status'] == 1): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('1','status');">
        公开</span> 允许所有企业查询、浏览我的简历；但被屏蔽的企业无法查找或浏览</p>
      <p><span>
        <input type="radio" name="status" <?php if ($this->_tpl_vars['resume']['status'] == 2): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('2','status');">
        不公开</span> 不允许企业主动搜索、浏览我的简历，只有我主动应聘时对方才能查看</p>
    </div>
    <div class="pri_h2" style=" margin-top:20px;"><span>基本资料公开程度</span></div>
    <div  class="pri_p">
      <p><span>
        <input type="radio" name="info_status" <?php if ($this->_tpl_vars['resume']['info_status'] == 1): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('1','info_status');">
        公开</span> 允许所有人查看我的基本资料</p>
      <p><span>
        <input type="radio" name="info_status" <?php if ($this->_tpl_vars['resume']['info_status'] == 2): ?>checked="checked"<?php endif; ?> class="pri_rad" onclick="changesta('2','info_status');">
        不公开</span> 只允许企业查看我的基本资料</p>
    </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 