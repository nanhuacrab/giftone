<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:27
         compiled from member/user/job.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/user/job.htm', 21, false),array('function', 'curl', 'member/user/job.htm', 23, false),array('modifier', 'date_format', 'member/user/job.htm', 28, false),)), $this); ?>
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
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/ul_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="resume_box_list">
  <div class="resume_Prompt">�������� <span style="color:red;"><?php echo $this->_tpl_vars['total']; ?>
</span> ��ְλ,�����ĵȴ���ҵ�ظ���</div>
    <div class="clear"></div>
    <div id="gms_showclew"></div>
           <div class="List_Ope List_Title mt12">
       <span class="List_Title_span List_Title_w260">�����ְλ</span>	 	
       <span class="List_Title_span List_Title_w110">н�ʴ���</span>	
        <span class="List_Title_span List_Title_w80">�����ص�</span>
       <span class="List_Title_span List_Title_w110"> ��ҵ���״̬</span>		
       <span class="List_Title_span List_Title_w80">����ʱ��</span>	 	
       <span class="List_Title_span List_Title_w80">����</span>	
      </div>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
            <div class="List_Ope List_Ope_bor">
			   <span class="List_Title_span List_Title_w260">
			   <div class=""><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['job']['job_id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['job']['job_name']; ?>
" class="List_Title_span_com"><?php echo $this->_tpl_vars['job']['job_name']; ?>
</a>  </div>
			  
					<a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['job']['com_id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['job']['com_name']; ?>
"class="List_Ope_a"><?php echo $this->_tpl_vars['job']['com_name']; ?>

					</a> 
			   </span>	 
			   <span class="List_Title_span  List_Title_w110 mt10"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['salary']]; ?>
</span>	  
			   <span class="List_Title_span List_Title_w80 mt10"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['provinceid']]; ?>
-<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['cityid']]; ?>
</span>			   <span class="List_Title_span List_Title_w110 mt10"> <?php if ($this->_tpl_vars['job']['is_browse'] == '1'): ?><span class="Not_browse">��ҵδ�������</span><?php else: ?><span class="yes_browse">��ҵ���������</span><?php endif; ?></span></span>	
			   <span class="List_Title_span List_Title_w80 mt10"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>	 	
			   <span class="List_Title_span List_Title_w80 mt10">
               
                <?php if ($this->_tpl_vars['job']['body'] != ''): ?>
                        <span class="List_dete" style="color:#999;">��ȡ������</span><br/>
                   <?php endif; ?>
               <?php if ($this->_tpl_vars['job']['is_browse'] == '1'): ?>
                   <?php if ($this->_tpl_vars['job']['body'] == ''): ?>
                        <a href="javascript:void(0)" onclick="quxiaoshenqin(<?php echo $this->_tpl_vars['job']['id']; ?>
);" class="List_dete" >ȡ������</a>
                   <?php endif; ?>
               <?php else: ?>
               <a href="javascript:void(0)" onclick="layer_del('ȷ��Ҫɾ����','index.php?c=job&act=del&id=<?php echo $this->_tpl_vars['job']['id']; ?>
');" class="List_dete" >ɾ��</a>
               <?php endif; ?>
               </span>
			  </div> 
              <div class="clear"></div>
           <?php endforeach; else: ?>
           <div class="msg_no">�㻹û������ְλŶ��<a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
" class="msg_no_sq">����ȥ�ҹ���</a></div>
          <?php endif; unset($_from); ?>
      </div>
      <div class="diggg" style="margin-top:10px; float:right"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    </div>
  </div>
  <div style="padding:10px;height:180px;display:none;" id='blackdiv'> 
   <div class="Blacklist_box">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
	<form action="index.php?c=job&act=qs" target="supportiframe" method="post">
    <input type="hidden" value="" name="id" id="qsid">
    		<div style="height:30px;">
                ����ѡ��
                <select name="body" style="line-height:25px; height:25px;">
                    <option value="�Ѿ��ҵ�����">�Ѿ��ҵ�����</option>
                    <option value="����Ϣһ��ʱ��">����Ϣһ��ʱ��</option>
                    <option value="������">������</option>
                    <option value="������Ϣ��">������Ϣ��</option>
                    <option value="�ܳ�ʱ��û�в鿴">�ܳ�ʱ��û�в鿴</option>
                    <option value="����ԭ��">����ԭ��</option>
            	</select>
            </div>
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