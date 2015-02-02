<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:26
         compiled from member/user/msg.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/user/msg.htm', 24, false),array('function', 'curl', 'member/user/msg.htm', 25, false),array('modifier', 'date_format', 'member/user/msg.htm', 26, false),)), $this); ?>
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
      <li class="cur"><a href="javascript:void(0);">面试邀请</a></li>
    </ul>
  </div>
  <div class="remindbox01 mt10">
    <div id="gms_showclew"></div>
    <div class="resumelistbox01 mt10">
      <div id="" class="resume_box_list">
        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <div class="List_Ope List_Title ">
           <span class="List_Title_span List_Title_w170">面试职位</span>
           <span class="List_Title_span List_Title_w170">公司名称</span>			
           <span class="List_Title_span List_Title_w110">邀请时间</span>	
           <span class="List_Title_span List_Title_w110">状态</span>
           <span class="List_Title_span List_Title_w150">操作</span>	
         </div>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
           <div class="List_Ope List_Ope_Advisory">
           <span class="List_Title_span List_Title_w170"><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['log']['jobid'])), $this);?>
" class="List_Title_span_com"><?php echo $this->_tpl_vars['log']['jobname']; ?>
</a></span>
           <span class="List_Title_span List_Title_w170"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['log']['fid'])), $this);?>
"><?php echo $this->_tpl_vars['log']['fname']; ?>
</a></span>			
           <span class="List_Title_span List_Title_w110"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</span>
           <span class="List_Title_span List_Title_w110"><?php if ($this->_tpl_vars['log']['is_browse'] == '1'): ?><font color="#f60">未查看</font><?php elseif ($this->_tpl_vars['log']['is_browse'] == '2'): ?>已查看<?php endif; ?></span>
           <span class="List_Title_span List_Title_w150"> <a href="javascript:getcont('<?php echo $this->_tpl_vars['log']['id']; ?>
');">查看</a> | <a href="javascript:void(0)"  onclick="layer_del('您确定要删除？', 'index.php?c=msg&act=del&id=<?php echo $this->_tpl_vars['log']['id']; ?>
'); ">删除</a> | 
			<a href="javascript:void(0);"  onclick="layer_del('您确定要屏蔽该公司并删除该邀请？','index.php?c=msg&act=shield&id=<?php echo $this->_tpl_vars['log']['id']; ?>
');">屏蔽</a></span></div>
          <?php endforeach; else: ?><div class="msg_no">您还没有邀请信息。</div> <?php endif; unset($_from); ?>
        
    </div>
    <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    
    
  </div>
</div>
</div>
</div>
<div id="getcont" style="width:350px;height:250px; display:none;">
<div style=" padding:10px;">
<div class="audition_list"><span class="audition_list_span">面试职位：</span><em class="audition_list_em" id="jobname"></em></div>
<div class="audition_list"><span class="audition_list_span">联系人： </span><em class="audition_list_em" id="linkman"></em></div>
<div class="audition_list"><span class="audition_list_span">联系电话：</span><em class="audition_list_em" id="linktel"></em></div>
<div class="audition_list"><span class="audition_list_span">面试时间：</span><em class="audition_list_em" id="intertime"></em></div>
<div class="audition_list"><span class="audition_list_span">面试地址：</span><em class="audition_list_em" id="address"></em></div>
<div class="audition_list"><span class="audition_list_span">面试备注：</span><em class="audition_list_em" id="content"></em></div>
</div>
</div>
<script>
function getcont(id){
	$.post("index.php?c=msg&act=ajax",{id:id},function(data){
		var data=eval('('+data+')');
		$("#jobname").html(data.jobname);
		$("#linkman").html(data.linkman);
		$("#linktel").html(data.linktel);
		$("#intertime").html(data.intertime);
		$("#address").html(data.address);
		$("#content").html(data.content);
		$.layer({
			type : 1,
			title :'邀请信息',
			offset: [($(window).height() - 235)/2 + 'px', ''],
			shade: [0],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','auto'],
			page : {dom :"#getcont"}
		});
	})
}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>