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
       <span class="List_Title_span List_Title_w500">��˾����</span>		
       <span class="List_Title_span List_Title_w120">�������ʱ��</span>	 	
       <span class="List_Title_span List_Title_w80">����</span>	
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
       <span class="List_Title_span List_Title_w80"><a href="javascript:void(0)"  onclick="layer_del('��ȷ��Ҫȡ�����Σ�', '<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=blacklist&act=del&id=<?php echo $this->_tpl_vars['log']['id']; ?>
');">ȡ������</a></span>	
      </div>
            <?php endforeach; else: ?> 
          <div class="msg_no">û����Ҫ���ε���ҵ</div>
          <?php endif; unset($_from); ?>  
            <div class="com_Blacklist"><a class="index_Job_Finder_submit index_Job_Finder_submitw150"  href="javascript:void(0)" onclick="addblack()">������ε���ҵ</a></div>
         <div class="clear"></div>
         <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>   
       </div>  
       <div class="" style="padding:5px; float:left;color:#999; line-height:23px;">
			<div class="wxts">��ܰ��ʾ��</div> 
			1�������Ϸ����빫˾���ƣ�����������Ҫ���ε���ҵ��<br>
			2����ѡ����ӵ�����������ҵ�����޷���������鿴���ļ�����<br>
			3�����������������Ĺ�˾���ƻ�Ʒ�����ƣ��Ա��׼ȷ���ҵ���Ҫ���ε���ҵ��
			</div>
      </div> 
</div>  
<div style="padding:10px;height:260px; display:none;" id='blackdiv'> 
   <input id="name" class="black_text" type="text" style="width:300px" placeholder="������Ҫ���εĹ�˾����">
   <input type="button" value="����" class="black_sumit" onclick="searchcom()"> 
   <div class="Blacklist_box">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
	<form action="index.php?c=blacklist&act=save" target="supportiframe" method="post" onsubmit="return ckaddblack()">
	   <div class="alert-compt-list_h1"><label id="select" class="fltR"><input id="checkAll" type="checkbox" onclick="m_checkAll(this.form)"> ȫѡ</label>�����·�ѡ����Ҫ���εĹ�˾</div>
		<ul></ul>
		<div class="black_submit_cont">
			<input type="submit" value="ȷ��" class="black_submit">
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