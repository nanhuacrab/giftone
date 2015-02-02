<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:38
         compiled from member/user/blacklist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'curl', 'member/user/blacklist.htm', 15, false),array('modifier', 'date_format', 'member/user/blacklist.htm', 16, false),)), $this); ?>
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
<div class="mian_right fltR mt12 re">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/ul_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="gms_showclew"></div>
      <div class="resume_box_list">
       <div class="List_Ope List_Title ">
       <span class="List_Title_span List_Title_w500">公司名称</span>		
       <span class="List_Title_span List_Title_w120">添加屏蔽时间</span>	 	
       <span class="List_Title_span List_Title_w80">操作</span>	
      </div>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
           <div class="List_Ope List_Ope_bor">
               <span class="List_Title_span List_Title_w500"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['log']['p_uid'])), $this);?>
"  class="List_Title_span_com"><?php echo $this->_tpl_vars['log']['com_name']; ?>
</a></span>		
       <span class="List_Title_span List_Title_w120"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['inputtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>	 	
       <span class="List_Title_span List_Title_w80"><a href="javascript:void(0)"  onclick="layer_del('您确定要取消屏蔽？', '<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=blacklist&act=del&id=<?php echo $this->_tpl_vars['log']['id']; ?>
');">取消屏蔽</a></span>	
      </div>
            <?php endforeach; else: ?> 
          <div class="msg_no">没有想要屏蔽的企业</div>
          <?php endif; unset($_from); ?>  
            <div class="com_Blacklist"><a class="index_Job_Finder_submit index_Job_Finder_submitw150"  href="javascript:void(0)" onclick="addblack()">添加屏蔽的企业</a></div>
         <div class="clear"></div>
         <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>   
       </div>  
       <div class="" style="padding:5px; float:left;color:#999; line-height:23px;">
			<div class="wxts">温馨提示：</div> 
			1、请在上方输入公司名称，搜索出您想要屏蔽的企业；<br>
			2、您选择并添加到黑名单的企业，将无法搜索到或查看您的简历；<br>
			3、建议您搜索完整的公司名称或品牌名称，以便更准确的找到您要屏蔽的企业；
			</div>
      </div> 
</div>  
<div style="padding:10px;height:260px; display:none;" id='blackdiv'> 
   <input id="name" class="black_text" type="text" style="width:300px" placeholder="请输入要屏蔽的公司名称">
   <input type="button" value="搜索" class="black_sumit" onclick="searchcom()"> 
   <div class="Blacklist_box">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
	<form action="index.php?c=blacklist&act=save" target="supportiframe" method="post" onsubmit="return ckaddblack()">
	   <div class="alert-compt-list_h1"><label id="select" class="fltR"><input id="checkAll" type="checkbox" onclick="m_checkAll(this.form)"> 全选</label>请在下方选择您要屏蔽的公司</div>
		<ul></ul>
		<div class="black_submit_cont">
			<input type="submit" value="确定" class="black_submit">
		</div>
	 </form>
	 </div>
	 <div class="clear"></div> 
 </div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 