<?php /* Smarty version 2.6.26, created on 2015-02-01 14:17:39
         compiled from member/com/invite.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/com/invite.htm', 43, false),array('function', 'url', 'member/com/invite.htm', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950">
  <div class="admin_mainbody"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class=right_box>
      <div class=admincont_box>
        <div class=admin_tit><span class="admin_tit_bg">���������Եļ���</span> 
        <form action="index.php" method="get" />
           <div class="news_search">
          <input name="c" type="hidden" value="down">
           <input name="keyword" type="text"class="news_text" value="����������ؼ���">
              <input name="" type="submit"class="news_bth" value=" ">
          </div> 
          </form>
        
        </div>
       <div class="job_re_ts"> �������� <span class="re_cor blod"><?php echo $this->_tpl_vars['total']; ?>
</span> �ݼ������� </div>

        <div class=admin_textbox_04>
       <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="<?php echo $this->_tpl_vars['now_url']; ?>
&act=del" method="post" target="supportiframe" id='myform'>
           <div class=table>
          <div id="job_checkbokid" >
              <div class="job_news_list job_news_list_h1">
                  <span class="job_news_list_span job_w30">&nbsp;</span>
                  <span class="job_news_list_span job_w160">��ְ����</span>
                  <span class="job_news_list_span job_w90">����</span>
                  <span class="job_news_list_span job_w50">�Ա�</span>
                  <span class="job_news_list_span job_w50">ѧ��</span>
                  <span class="job_news_list_span job_w100">����ʱ��</span>
                  <span class="job_news_list_span job_w100">�鿴����</span>
                  <span class="job_news_list_span job_w155">����</span>
                 </div>
                <?php if (! empty ( $this->_tpl_vars['rows'] )): ?>
                <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
                <?php $this->assign('uid', $this->_tpl_vars['job']['uid']); ?>
                
                <div class="job_news_list">
                  <span class="job_news_list_span job_w30"><input type=checkbox name="delid[]" value="<?php echo $this->_tpl_vars['job']['id']; ?>
"></span>
                  <span class="job_news_list_span job_w160"><?php echo $this->_tpl_vars['user'][$this->_tpl_vars['uid']]['jobname']; ?>
</span>
                  <span class="job_news_list_span job_w90"><?php echo $this->_tpl_vars['user'][$this->_tpl_vars['uid']]['name']; ?>
</span>
                  <span class="job_news_list_span job_w50"><?php echo $this->_tpl_vars['user'][$this->_tpl_vars['uid']]['sex']; ?>
</span>
                  <span class="job_news_list_span job_w50"><?php echo $this->_tpl_vars['user'][$this->_tpl_vars['uid']]['edu']; ?>
</span>
                  <span class="job_news_list_span job_w100"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>
                  <span class="job_news_list_span job_w100"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "uid:".($this->_tpl_vars['uid'])), $this);?>
" target="_blank">�鿴����</a></span>
                  <span class="job_news_list_span job_w155"><a href="javascript:void(0)" onclick="layer_del('ȷ��Ҫɾ����', '<?php echo $this->_tpl_vars['now_url']; ?>
&act=del&id=<?php echo $this->_tpl_vars['job']['id']; ?>
')">ɾ��</a></span>
                 </div> 
                <?php endforeach; endif; unset($_from); ?>
				<div>  
				<div class="fltL">
				  <span class="fltL job_new_de">  <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)'> ȫѡ</span>
					 <INPUT  class="job_new_tj" type="button" name="subdel" value="����ɾ��" onclick="return really('delid[]');">
					 <input class=btn_02 onclick="location.href='index.php?c=hr'" type="button" value="�鿴����ְλ�˲�" style="width:140px; margin-left:10px; float:left;">
					 <input class=btn_02 onclick="location.href='index.php?c=down'" type="button" value="�鿴�����ؼ���" style="width:140px; margin-left:10px;">
				 </div> 
				<div class="diggg" style="width:100%; text-align:center; margin-top:20px; float:left;"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
				</div>
                <?php elseif ($_GET['keyword'] != ""): ?>
                 <div class="msg_no">û�����������¼��</div>
                <?php else: ?>
                 <div class="msg_no">����û�������¼��</div>
                <?php endif; ?> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 