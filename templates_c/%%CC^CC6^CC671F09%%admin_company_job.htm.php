<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:48
         compiled from admin/admin_company_job.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_company_job.htm', 267, false),array('function', 'curl', 'admin/admin_company_job.htm', 292, false),array('modifier', 'date_format', 'admin/admin_company_job.htm', 297, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/check_public.js"></script>
<script src="js/admin_public.js"></script>
 <script>
function audall(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("����δѡ���κ���Ϣ��",2,2);return false;
	}else{
		$("input[name=pid]").val(codewebarr);
		$("#alertcontent").val('');
		$("input[name=status]").attr("checked",false);
		add_class('�������','350','220','#status_div','');
	}
}
function audall2(status)
{
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("����δѡ���κ���Ϣ��",2,2);	return false;
	}else{
		$("input[name=jobid]").val(codewebarr);
		add_class('��������','210','120','#infobox2','');
	}
}
function audall3(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("����δѡ���κ���Ϣ��",2,2);	return false;
	}else{
		$("input[name=jobid]").val(codewebarr);
		add_class('�����޸�ְλ���','300','220','#infobox4','');
	}
}
$(function(){
	$(".status").click(function(){
		var id=$(this).attr("pid");
		$("input[name=pid]").val($(this).attr("pid"));
 		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=admin_company_job&c=lockinfo",{id:id,pytoken:pytoken},function(msg){
			$("#alertcontent").val(msg);
			add_class('ְλ���','350','220','#status_div','');
		});
	});
	$(".urgent").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		$("input[name=eid]").val($(this).attr("eid"));
		if($(this).attr("tid")>0){
			$("#surplus_urgent").html($(this).attr("tid")+"��+");
			$("#surplus_urgent").show();
		}
		add_class('������Ƹ','250','150','#infobox5','');
	});
	$(".rec").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		$("input[name=eid]").val($(this).attr("eid"));
		if($(this).attr("tid")>0){
			$("#surplus_recommend").html($(this).attr("tid")+"��+");
			$("#surplus_recommend").show();
		}
		add_class('ְλ�Ƽ�','250','150','#infobox6','');
	});
});
function Refresh(){//����ˢ��
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("��ѡ��Ҫˢ�µ�ְλ��",2,8);return false;
	}else{
		$.post("index.php?m=admin_company_job&c=refresh",{ids:codewebarr,pytoken:$('#pytoken').val()},function(data){
			parent.layer.msg("ˢ�³ɹ���",2,9);
		})
	}
}
function recommend(){//�����Ƽ�
	var codearr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codearr==""){codearr=$(this).val();}else{codearr=codearr+","+$(this).val();}
	});
	if(codearr==""){
	    parent.layer.msg("��ѡ��Ҫ�Ƽ���ְλ��",2,8);return false;
	}else{
	    $("input[name=codearr]").val(codearr);
	    add_class('ְλ�����Ƽ�','250','150','#infobox6','');
	}
}
function urgent(){//��������
    var codeugent="";
	$(".check_all:checked").each(function(){
	    if(codeugent==''){codeugent=$(this).val();}else{codeugent=codeugent+","+$(this).val();}
	});
	if(codeugent==""){
	    parent.layer.msg("��ѡ��Ҫ������ְλ��",2,8);return false;
	}else{
	    $("input[name=codeugent]").val(codeugent);
		add_class('ְλ��������','250','150','#infobox5','');
	}
}

</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
 <div id="infobox5"  style="display:none; width: 250px;text-align:center;">
	<div class="" style=" margin-top:10px; "  > 
      <form action="index.php?m=admin_company_job&c=urgent" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	  <input type="hidden" name="codeugent"/>
		<table cellspacing='2' cellpadding='3' style="width:100%">
			<tr>
				<td ><div style="font-weight:bold;width:; text-align:right">ʣ��ʱ�䣺</div></td>
				 <td align="left"><span id='surplus_urgent' style="display:none">0��+</span><input class="input-text" value="" name="addday" style="width:36px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">��</td>
			 </tr>
			<tr>
				<td><div style="font-weight:bold;width:; text-align:right">&nbsp;</div></td>
				<td align="left"><div style="margin-top:5px; margin-left:10px;"><input type="checkbox" name="s" value="1"> ȡ������</div></td>
			</tr>
			<tr style="text-align:center;margin-top:15px"> 
				<td colspan='2' ><input type="submit" onclick="wait_result();" value='ȷ��' class="submit_btn">
			  &nbsp;&nbsp;<input type="button" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
		  </tr>
		</table>
		<input name="pid" value="0" type="hidden">
		<input name="eid" value="0" type="hidden">
      </form>
    </div> 
</div>
<div id="infobox6"  style="display:none;width:250px;text-align:center;">
	<div class="" style=" margin-top:10px; "  > 
		  <form action="index.php?m=admin_company_job&c=recommend" target="supportiframe" method="post" id="formstatus">
		  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		  <input type="hidden" name="codearr"> 
			<table cellspacing='2' cellpadding='3'  style="width:100%">
				<tr>
					<td ><div style="font-weight:bold;text-align:right">ʣ��ʱ�䣺</div></td> 
					<td align="left"><span id='surplus_recommend' style="display:none">0��+</span><input class="input-text" value="" name="addday" style="width:36px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">��</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td align="left"><div style="margin-top:5px; margin-left:10px;"><input type="checkbox" name="s" value="1"> ȡ���Ƽ�</div></td>
				</tr>
				<tr style="text-align:center;margin-top:10px">
					<td colspan='2' ><input type="submit" onclick="wait_result();" value='ȷ��' class="submit_btn">
				  &nbsp;&nbsp;<input type="button" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
			   </tr>
			</table>
			<input name="pid" value="0" type="hidden">
			<input name="eid" value="0" type="hidden">
		  </form> 
	  </div>
	</div> 
<div id="status_div"  style="display:none; width: 350px; "> 
  <form action="index.php?m=admin_company_job&c=status" target="supportiframe" method="post" id="formstatus">
  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
	<div class="admin_Operating_sh" style="padding:10px;">
	<div class="admin_Operating_sh_h1" style="padding:5px;">��˲�����
	<label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
	<label for="status1"><input type="radio" name="status" value="1" id="status1" > ��ͨ��</label>
	<label for="status3"><input type="radio" name="status" value="3" id="status3"> δͨ��</label></div>
		<div class="admin_Operating_sh_sm" >���˵����</div>
	<div><textarea id="alertcontent" name="statusbody"class="admin_Operating_text"></textarea></div>
   <div class="admin_Operating_sub"> <input type="submit"  value='ȷ��' class="submit_btn"> <input type="button" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></div>
	</div>
	<input name="pid" value="0" type="hidden">
  </form> 
</div>
<div id="infobox2" style="display:none;">
	<div class="" style=" margin-top:10px;text-align:center; "  > 
      <form action="index.php?m=admin_company_job&c=ctime" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<table cellspacing='2' cellpadding='3' style="width:180px;">
			<tr><td style="float:right"><span style="font-weight:bold;">�ӳ�ʱ�䣺</span></td><td><input class="input-text" value="" name="endtime" style="width:50px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"> �� </td></tr>
 			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='ȷ��' class="submit_btn">
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td></tr>
		</table>
        <input name="jobid" value="0" type="hidden">
      </form> 
  </div>
</div>
<div id="infobox4" style="display:none;">
	<div class="" style=" margin-top:10px;text-align:center;"  > 
      <form action="index.php?m=admin_company_job&c=saveclass" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<table cellspacing='2' cellpadding='3' style="width:100%">
			<tr>
            <td><div style="width:100px; text-align:right">��ҵ���</div></td>
            <td><select name="hy" style="width:150px;border:1px solid #ccc;"> <option value="">--ѡ�����--</option><?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?> <option value="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option><?php endforeach; endif; unset($_from); ?></select> </td>
            </tr>
			<tr>
            <td><div style="width:100px;text-align:right">ְλ���</div></td>
            <td><select name="job1" id="job1" class="job1" lid="job1_son" style="width:150px;border:1px solid #ccc; margin-top:10px;"><option value="">--��ѡ��--</option> <?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?><option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option><?php endforeach; endif; unset($_from); ?> </select></td>
            </tr>
			<tr>
            <td><div style="width:100px;text-align:right">&nbsp;</div></td>
            <td><select name="job1_son" id="job1_son" class="job1" lid="job1_son1" style="width:150px;border:1px solid #ccc;margin-top:10px;"><option value="">--��ѡ��--</option> </select></td></tr>
			<tr>
            <td><div style="width:100px;text-align:right">&nbsp;</div></td>
            <td><select name="job_post" id="job1_son1" style="width:150px;border:1px solid #ccc;margin-top:10px;"><option value="">--��ѡ��--</option></select></td></tr>
 			<tr><td colspan='2' ><div style="margin-top:10px;"> <input type="submit"  value='ȷ��' class="submit_btn">
          &nbsp;&nbsp;<input type="button" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></div></td></tr>
		</table>
        <input name="jobid" value="0" type="hidden">
      </form> 
  </div>
</div> 
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter"> 
	<span class="complay_top_span fl">ְλ����</span> 
	<form action="index.php" name="myform" method="get" >
	<input type="hidden" name="m" value="admin_company_job"/>
	<input type="hidden" name="state" value="<?php echo $_GET['state']; ?>
"/>
	<input type="hidden" name="job_type" value="<?php echo $_GET['job_type']; ?>
"/>
	<input type="hidden" name="jtype" value="<?php echo $_GET['jtype']; ?>
"/>
	<input type="hidden" name="salary" value="<?php echo $_GET['salary']; ?>
"/>
   <div class="admin_Filter_span">�������ͣ�</div>  
	  <div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type'] == '1'): ?>��˾����<?php else: ?>ְλ����<?php endif; ?>" class="admin_Filter_but"  id="btype"> 
		  <input type="hidden" id='type' value="<?php echo $_GET['type']; ?>
" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','��˾����')">��˾����</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','ְλ����')">ְλ����</a></li> 
			  </ul>  
		  </div>
	  </div>
	<input type="text" placeholder="������Ҫ�����Ĺؼ���" name="keyword" class="admin_Filter_search"><input type="submit" name='news_search' value="����" class="admin_Filter_bth"> 
	</form> 
	<span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">�߼�����</div></div>  
 	  </span>
  </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  

  <div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
      <input name="m" value="admin_company_job" type="hidden"/>
      <input name="c" value="del" type="hidden"/>
      <table width="100%">
        <thead>
        		<tr class="admin_table_top">
             <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
            <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?>
            <th><a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'admin_company_job','untype' => "order,t"), $this);?>
">���<img src="images/sanj.jpg"/></a></th>
            <?php else: ?>
			<th><a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'admin_company_job','untype' => "order,t"), $this);?>
">���<img src="images/sanj2.jpg"/></a></th>
            <?php endif; ?>
            <th width="210">ְλ/��˾</th>
            <th>��������</th>
            <th >������</th>
            
			<th>����ʱ��</th>
			<th>����ʱ��</th>
			<th>����ʱ��</th>
			<th>�����</th>
            <th>���״̬</th>
            <th>��Ƹ״̬</th>
            <th>�Ƽ�</th>
            <th>����</th>
     <th class="admin_table_th_bg">����</th>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
        <tr align="center"  <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
          <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td class="td1" style="text-align:center;width:50px;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
          <td class="ud" align="left" width="210">
          <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=com&c=comapply&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a><br/>
          <a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['v']['uid'])), $this);?>
" target="_blank" class="admin_cz_sc"><?php echo $this->_tpl_vars['v']['com_name']; ?>
</a>
          </td>
         
		  <td><?php echo $this->_tpl_vars['v']['type']; ?>
</td>
		  <td class="td" align="center"><?php echo $this->_tpl_vars['v']['snum']; ?>
</td>
		  <td class="td" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
		  <td class="td" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
		   <td class="td" align="center"><?php echo $this->_tpl_vars['v']['edatetxt']; ?>
</td>
	      <td class="td" align="center"><?php echo $this->_tpl_vars['v']['jobhits']; ?>
</td>

          <td><?php if ($this->_tpl_vars['v']['edate'] <= time ( )): ?><span class="admin_com_Lock">�ѹ���</span><?php elseif ($this->_tpl_vars['v']['state'] == 1): ?><span class="admin_com_Audited">�����</span><?php elseif ($this->_tpl_vars['v']['state'] == 0): ?><span class="admin_com_noAudited">δ���</span><?php elseif ($this->_tpl_vars['v']['state'] == 3): ?><span class="admin_com_tg">δͨ��</span><?php endif; ?></td>
          <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="admin_com_noAudited">����ͣ</span><?php else: ?><span class="admin_com_Audited">������</span><?php endif; ?></td>
          <td id="rec<?php echo $this->_tpl_vars['v']['id']; ?>
">
          <?php if ($this->_tpl_vars['v']['rec_time'] > $this->_tpl_vars['time']): ?>
          <a href="javascript:void(0);" class="rec" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" tid="<?php echo $this->_tpl_vars['v']['rec_day']; ?>
" eid="<?php echo $this->_tpl_vars['v']['rec_time']; ?>
">
          <img src="../data/ajax_img/doneico.gif" alt="ְλ�Ƽ�ʣ��<?php echo $this->_tpl_vars['v']['rec_day']; ?>
��" title="ְλ�Ƽ�ʣ��<?php echo $this->_tpl_vars['v']['rec_day']; ?>
��"></a><?php else: ?>
		  <a href="javascript:void(0);" class="rec" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" tid="<?php echo $this->_tpl_vars['v']['rec_day']; ?>
" eid="<?php echo $this->_tpl_vars['v']['rec_time']; ?>
">
          <img src="../data/ajax_img/errorico.gif" alt="ְλ�Ƽ�ʣ��<?php echo $this->_tpl_vars['v']['rec_day']; ?>
��" title="ְλ�Ƽ�ʣ��<?php echo $this->_tpl_vars['v']['rec_day']; ?>
��"></a><?php endif; ?>
          </td>
          <td id="urgent<?php echo $this->_tpl_vars['v']['id']; ?>
">
          <?php if ($this->_tpl_vars['v']['urgent_time'] > $this->_tpl_vars['time']): ?>
          <a href="javascript:void(0);" class="urgent" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" tid="<?php echo $this->_tpl_vars['v']['urgent_day']; ?>
" eid="<?php echo $this->_tpl_vars['v']['urgent_time']; ?>
"><img src="../data/ajax_img/doneico.gif" alt="������Ƹʣ��<?php echo $this->_tpl_vars['v']['urgent_day']; ?>
��" title="������Ƹʣ��<?php echo $this->_tpl_vars['v']['urgent_day']; ?>
��"></a>
          <?php else: ?>
          <a href="javascript:void(0);" class="urgent" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" tid="<?php echo $this->_tpl_vars['v']['urgent_day']; ?>
" eid="<?php echo $this->_tpl_vars['v']['urgent_time']; ?>
"><img src="../data/ajax_img/errorico.gif" alt="������Ƹʣ��<?php echo $this->_tpl_vars['v']['urgent_day']; ?>
��" title="������Ƹʣ��<?php echo $this->_tpl_vars['v']['urgent_day']; ?>
��"></a>
          <?php endif; ?>
          </td>
          <td><a href="javascript:;" class="status admin_cz_sc" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" status='<?php echo $this->_tpl_vars['v']['state']; ?>
'>���</a> | <br/><a href="index.php?m=admin_company_job&c=show&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_sc">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_company_job&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">ɾ��</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
        <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
        <td colspan="4" >
        <label for="chkAll2">ȫѡ</label>
            <input class="admin_submit2" type="button" name="delsub" value="���" onClick="audall('1');" />
            <input class="admin_submit2" type="button" name="delsub" value="����" onClick="audall2('0');" />
            <input class="admin_submit2" type="button" name="delsub" value="ˢ��" onClick="Refresh();" />
			<input class="admin_submit2" type="button" name="delsub" value="�Ƽ�" onClick="recommend();" />
			<input class="admin_submit2" type="button" name="delsub" value="����" onClick="urgent();" />
            <input class="admin_submit4" type="button" name="delsub" value="ת�����" onClick="audall3('0');" />
            <input class="admin_submit2" type="button" name="delsub" value="ɾ��" onClick="return really('del[]')" /></td>
          <td colspan="10" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
        </tr>
          </tbody>
      </table>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
  </div>
</div>
</body>
</html>