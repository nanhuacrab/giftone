<?php /* Smarty version 2.6.26, created on 2015-02-01 14:16:10
         compiled from member/com/hr.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/com/hr.htm', 17, false),array('modifier', 'date_format', 'member/com/hr.htm', 30, false),)), $this); ?>
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
    <link href="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/index_style.css" type=text/css rel=stylesheet>
    <div class=right_box>
      <div class=admincont_box>
        <div class=admin_tit><span class="admin_tit_bg">申请职位的人才</span>
          <form action="index.php" method="get" />
          
          <div class="news_search">
            <input name="c" type="hidden" value="hr">
            <input name="keyword" type="text"class="news_text" value="请输入姓名查找" onblur="if(this.value==''){this.value='请输入姓名查找'}" onclick="if(this.value=='请输入姓名查找'){this.value=''}">
            <input type="submit"  class="news_bth" value=" ">
          </div>
          </form>
        </div>
        <div class="job_re_ts">有 <span class="re_cor blod"><?php echo $this->_tpl_vars['total']; ?>
</span> 份简历申请贵公司发布的职位，不用灰心，我们去 <a href="<?php echo smarty_function_url(array('m' => 'user'), $this);?>
" class="re_cor" target="_blank">找人才</a>!</div>
        <div class=admin_textbox_04>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="<?php echo $this->_tpl_vars['now_url']; ?>
&act=hrset" target="supportiframe" method="post" id='myform'>
            <div class=table>
              <div id="job_checkbokid" >
                <div class="job_news_list job_news_list_h1"> <span class="job_news_list_span job_w30">&nbsp;</span> <span class="job_news_list_span job_w155" style="text-align:left">申请职位</span> <span class="job_news_list_span job_w100">姓名</span> <span class="job_news_list_span job_w80">性别</span> <span class="job_news_list_span job_w100">学历</span> <span class="job_news_list_span job_w100">申请时间</span> <span class="job_news_list_span job_w100">状态</span> <span class="job_news_list_span job_w100">操作</span> </div>
                <?php if ($this->_tpl_vars['rows']): ?>
                <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <div class="job_news_list"> <span class="job_news_list_span job_w30">
                  <input type="checkbox" name="delid[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
">
                  </span> <span class="job_news_list_span job_w155" style="text-align:left"><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['v']['job_id'])), $this);?>
" target=_blank><?php echo $this->_tpl_vars['v']['job_name']; ?>
</a></span> <span class="job_news_list_span job_w100">&nbsp;<?php echo $this->_tpl_vars['v']['name']; ?>
</span> <span class="job_news_list_span job_w80">&nbsp;<?php echo $this->_tpl_vars['v']['sex']; ?>
</span> <span class="job_news_list_span job_w100">&nbsp;<?php echo $this->_tpl_vars['v']['edu']; ?>
</span> 
				  
				  <span class="job_news_list_span job_w100"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span> 
				  <span class="job_news_list_span job_w100">
				   <?php if (! $this->_tpl_vars['v']['body']): ?>
				  <?php if ($this->_tpl_vars['v']['is_browse'] == '1'): ?>
				  <a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['eid'])), $this);?>
" onclick="setTimeout(function(){location=location;},2);" target="_blank">
				  <span class="n_verify">未查看</span></a> 
				  
				  <?php elseif ($this->_tpl_vars['v']['is_browse'] == '2'): ?> 
				  
				  <a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['eid'])), $this);?>
" target=_blank class="y_verify">已查看</a> 
				  
				  <?php endif; ?> 
				  <?php else: ?> 
				  <span class="n_verify">已取消申请</span>
				  <?php endif; ?>
				  </span> 
				
				  <span class="job_news_list_span job_w100"> <?php if ($this->_tpl_vars['v']['userid_msg'] == 1): ?> <font color="red">已邀请</font> <?php else: ?> <a href="javascript:;" uid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" username="<?php echo $this->_tpl_vars['v']['name']; ?>
" class="sq_resume">邀请面试</a> <?php endif; ?>
                  &nbsp;|&nbsp;<a href="javascript:void(0)" onclick="layer_del('屏蔽该用户，并删除该条信息？', 'index.php?c=job&act=opera&p_uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
'); ">屏蔽</a> </span><?php if ($this->_tpl_vars['v']['body']): ?>
                  <div style="display:block; width:700px; color:red; margin-top:5px;float:left;">注意：用户已取消申请，原因：<?php echo $this->_tpl_vars['v']['body']; ?>
</div>
                  <?php endif; ?> </div>
                <?php endforeach; endif; unset($_from); ?>
                <div class="fltL"> <span class="fltL job_new_de">
                  <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)'>
                  全选</span>
                  <INPUT class="job_new_tj" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
                  <INPUT class='btn_02' type="button" name="subdel" value="批量阅读" onclick="return really_read('delid[]');" style="margin-left:10px;">
                </div>
                <?php else: ?>
                <div class="msg_no"><?php if ($_GET['keyword'] != ""): ?>没有搜索申请记录。<?php else: ?>您还没有申请记录。<?php endif; ?></div>
                <?php endif; ?> </div>
            </div> 
              <div class="diggg mt10 fltR"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
            
              <div class="clear"></div> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/yqms.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>