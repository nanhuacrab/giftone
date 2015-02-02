<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:28
         compiled from member/user/commsg.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/user/commsg.htm', 25, false),array('function', 'curl', 'member/user/commsg.htm', 27, false),array('modifier', 'date_format', 'member/user/commsg.htm', 28, false),)), $this); ?>
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
      <li><a href="index.php?c=sysnews">系统消息</a></li>
      <li class="cur"><a href="index.php?c=commsg">求职咨询</a> </li>
      <li><a href="index.php?c=message">留言反馈</a></li>
      <li><a href="index.php?c=seemessage">留言列表</a></li>
      <li><a href="index.php?c=xin">站内信</a> </li>
    </ul>
  </div>
    <div id="gms_showclew"></div>
      <div id="" class="resume_box_list">
         <div class="List_Ope List_Title ">
           <span class="List_Title_span List_Title_w170">职位名称</span>
           <span class="List_Title_span List_Title_w360">公司名称</span>			
           <span class="List_Title_span List_Title_w110">咨询时间</span>	
           <span class="List_Title_span List_Title_w100">操作</span>	
         </div>
         <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
          <div class="List_Ope List_Ope_Advisory ">
       <span class="List_Title_span List_Title_w170">
<a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['log']['jobid'])), $this);?>
" class="List_Title_span_com"><?php echo $this->_tpl_vars['log']['job_name']; ?>
</a> 
        </span>
        <span class="List_Title_span List_Title_w360"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['log']['job_uid'])), $this);?>
"><?php echo $this->_tpl_vars['log']['com_name']; ?>
</A></span>			
       <span class="List_Title_span List_Title_w110"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>	 	
        <span class="List_Title_span List_Title_w100"><a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?c=commsg&act=del&id=<?php echo $this->_tpl_vars['log']['id']; ?>
');" class="List_dete" >删除</a></span>	
<div class="List_Title_content_Advisory"><i class="List_Title_content_Advisory_i"></i><span class="List_Title_content_Advisory_r"><?php if ($this->_tpl_vars['log']['reply'] != ""): ?><a href="javascript:;" class="" id="<?php echo $this->_tpl_vars['log']['id']; ?>
"> </a><?php else: ?>该企业还未回复<?php endif; ?></span><span class="List_Title_conten_tit">我的咨询内容：</span><?php echo $this->_tpl_vars['log']['content']; ?>
</span>
         <?php if ($this->_tpl_vars['log']['reply'] != ""): ?>
           <div class="List_Title_content List_Title_content_Advisory_bor"  id="msg<?php echo $this->_tpl_vars['log']['id']; ?>
">
         <em class="List_Title_content_Advisory_r2"> <span class="List_Title_conten_tit">回复时间：</span><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</em>
          <span class="List_Title_conten_tit List_Title_conten_tit_cor">企业回复：</span><span class="List_Title_conten_b"><?php echo $this->_tpl_vars['log']['reply']; ?>
</span>
         </div>
         <?php endif; ?>
          
        </div>
         </div>
           
         <?php endforeach; else: ?>
          
         <div class="msg_no"> 您还没有咨询信息。</div>
         
          <?php endif; unset($_from); ?>
         
      
      </div>
          <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    </div>

  </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 