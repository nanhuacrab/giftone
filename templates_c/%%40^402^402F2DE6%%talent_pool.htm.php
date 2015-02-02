<?php /* Smarty version 2.6.26, created on 2015-02-01 14:17:35
         compiled from member/com/talent_pool.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/com/talent_pool.htm', 28, false),array('function', 'url', 'member/com/talent_pool.htm', 28, false),)), $this); ?>
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
        <div class=admin_tit><span class="admin_tit_bg">人才库</span>
          <form action="index.php" method="get" />
          
          <div class="news_search">
            <input name="c" type="hidden" value="talent_pool">
            <input name="keyword" type="text"class="news_text" value="请输入简历关键字" onblur="if(this.value==''){this.value='请输入简历关键字'}" onclick="if(this.value=='请输入简历关键字'){this.value=''}">
            <input name="" type="submit" class="news_bth" value=" ">
          </div>
          </form>
        </div>
        <div class="job_re_ts">您已收藏 <span class="re_cor blod"><?php echo $this->_tpl_vars['total']; ?>
</span> 份简历</div>
        <div class=admin_textbox_04>
          <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
          <form action="<?php echo $this->_tpl_vars['now_url']; ?>
&act=del"target="supportiframe" method="post" id='myform'>
            <div class=table>
              <div id="job_checkbokid" >
                <div class="job_news_list job_news_list_h1"> <span class="job_news_list_span job_w30">&nbsp;</span> <span class="job_news_list_span job_w160">求职意向</span> <span class="job_news_list_span job_w90">姓名</span> <span class="job_news_list_span job_w50">性别</span> <span class="job_news_list_span job_w50">学历</span> <span class="job_news_list_span job_w100">收藏时间</span> <span class="job_news_list_span job_w100">查看简历</span> <span class="job_news_list_span job_w155">操作</span> </div>
                <?php if (! empty ( $this->_tpl_vars['rows'] )): ?>
                <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <div class="job_news_list"> <span class="job_news_list_span job_w30">
                  <input type=checkbox name="delid[]" value="<?php echo $this->_tpl_vars['v']['id']; ?>
">
                  </span> <span class="job_news_list_span job_w160"><?php echo $this->_tpl_vars['v']['jobname']; ?>
</span> <span class="job_news_list_span job_w90"><?php echo $this->_tpl_vars['v']['name']; ?>
&nbsp;</span> <span class="job_news_list_span job_w50"><?php echo $this->_tpl_vars['v']['sex']; ?>
&nbsp;</span> <span class="job_news_list_span job_w50"><?php echo $this->_tpl_vars['v']['edu']; ?>
&nbsp;</span> <span class="job_news_list_span job_w100"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span> <span class="job_news_list_span job_w100"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['eid'])), $this);?>
" target=_blank>查看简历</a></span> <span class="job_news_list_span job_w155"><a href="javascript:void(0)" onclick="layer_del('确定要删除？','<?php echo $this->_tpl_vars['now_url']; ?>
&act=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
')">删除</a>&nbsp;|&nbsp;
                  <?php if ($this->_tpl_vars['v']['userid_msg'] == 1): ?> <font color="red">已邀请</font> <?php else: ?> <a href="javascript:;" uid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" username="<?php echo $this->_tpl_vars['v']['name']; ?>
" class="sq_resume" style="position:relative; "> 邀请面试</a> <?php endif; ?> 
                  |&nbsp;<a href="javascript:;" onclick="remark('<?php echo $this->_tpl_vars['v']['id']; ?>
','<?php echo $this->_tpl_vars['v']['remark']; ?>
');">备注</a></span> </div>
                <?php endforeach; endif; unset($_from); ?>
                <div>
                  <div class="fltL"> <span class="fltL job_new_de">
                    <input id='checkAll'  type="checkbox" onclick='m_checkAll(this.form)'>
                    全选</span>
                    <INPUT class="job_new_tj" type="button" name="subdel" value="批量删除" onclick="return really('delid[]');">
                  </div>
                  <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
                </div>
                <?php elseif ($_GET['keyword'] != ""): ?>
                <div class="msg_no">没有搜索收藏记录。 </div>
                <?php else: ?>
                <div class="msg_no">您还没有收藏记录。 </div>
                <?php endif; ?> </div>
            </div>
            <div> </div>
          </form>
          <div class="clear"></div>
          <div class="infoboxp22" id="infobox" style="display:none; ">
            <div>
              <form action="index.php?c=talent_pool&act=remark" method="post" id="formstatus" target="supportiframe">
                <input name="id" value="0" type="hidden">
                <div class="jb_infobox" style="width: 100%;">
                  <textarea id="remark"style="width:310px;margin:5px" name="remark" class="hr_textarea"></textarea>
                </div>
                <div class="jb_infobox" style="width: 100%;">
                  <button type="submit" name='submit' value='1' class="submit_btn" style="margin-left:80px;">确认</button>
                  &nbsp;&nbsp;
                  <button type="button" id='zxxCancelBtn'  class="cancel_btn">取消</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script> 
function remark(id,remark){
	$("input[name=id]").val(id);
	$("#remark").val(remark);
	$.layer({
		type : 1,
		title :'备注',
		offset: [($(window).height() - 160)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['320px','160px'],
		page : {dom :"#infobox"}
	});
}
$(document).ready(function(){ 
	$('#zxxCancelBtn').click(function(){
		layer.closeAll();
	}); 
}); 
</script>
<div id='job_box' style="display:none;float:left">
  <div class="city_1">
    <dl class="city_3">
      <dt> <span class="city_01">面试职位：</span>
        <select id='jobname'>
        </select>
      </dt>
    </dl>
    <dl class="city_3">
      <dt> <span class="city_01">联系人：</span>
        <input size='5'  id='linkman' value=''>
      </dt>
    </dl>
    <dl class="city_3">
      <dt> <span class="city_01">联系电话：</span>
        <input size='10'  id='linktel' value=''>
      </dt>
    </dl>
    <dl class="city_3">
      <dt> <span class="city_01">面试时间：</span>
        <input size='34' id='intertime' value=''>
      </dt>
    </dl>
    <dl class="city_3">
      <dt> <span class="city_01">面试地址：</span>
        <input size='34' id='address' value=''>
      </dt>
    </dl>
    <dl class="city_3"  >
      <dt><span class="city_01">面试备注：</span>
        <textarea id="content" cols="40" rows="5" class="resyme_text"></textarea>
    </dl>
    <dl class="city_3" id="resume_job" style="height:40px;">
      <dt><span class="city_01">&nbsp;</span>
        <input type="hidden" id="uid" value="">
        <input type="hidden" id="username" value="">
        <input class="resume_sub_yq" id="click_invite" type="button" value="邀请面试"  >
    </dl>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>