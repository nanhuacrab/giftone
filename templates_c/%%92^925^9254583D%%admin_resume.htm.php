<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:38
         compiled from admin/admin_resume.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/admin_resume.htm', 148, false),array('modifier', 'date_format', 'admin/admin_resume.htm', 155, false),)), $this); ?>
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
<script src="js/admin_public.js" language="javascript"></script>
<script>
function Refreshs(){//����ˢ��
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("��ѡ��Ҫˢ�µļ�����",2,8);return false;
	}else{
		$.post("index.php?m=admin_resume&c=refreshs",{ids:codewebarr,pytoken:$('#pytoken').val()},function(data){
			parent.layer.msg("����ˢ�³ɹ���",2,9,function(){window.location.reload();}); 
		})
	}
}

function checkdel(type,status){//����ˢ��
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg("��ѡ�������",2,8);return false;
	}else if(type=='top'){
		if(status!='1'){
			$('input[name=s]').attr('checked','true');
		} 
		resumttop(codewebarr,0);
	}else{ 
		$.post("index.php?m=admin_resume&c=rec",{ids:codewebarr,pytoken:$('#pytoken').val(),type:type,status:status},function(data){
			if(data==0){
				parent.layer.msg("�����������Ժ����ԣ�",2,8);
			}else{
				parent.layer.msg("���óɹ���",2,9,function(){window.location.reload();});
			}
		})
	}
}
$(document).ready(function(){
	$(".job_name_all").hover(function(){
		var job_name=$(this).attr('v');;
		if($.trim(job_name)!=''){
			layer.tips(job_name, this, {guide: 1, style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']}); 
		} 
	},function(){
		var job_name=$(this).attr('v'); 
		if($.trim(job_name)!=''){
			layer.closeTips();
		} 
	}); 
})

function resumttop(id,tid){
	if(tid>0){
		$("#surplus_top").html(tid+"��+");
		$("#surplus_top").show();
	}
	$("input[name='eid']").val(id);
	add_class('�����ö�','250','150','#resumttop','');
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
 <div id="resumttop"  style="display:none; width: 250px;text-align:center;margin-top:10px; "> 
      <form action="index.php?m=admin_resume&c=recommend" target="supportiframe" method="post" id="formstatus"> 
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<table cellspacing='2' cellpadding='3' style="width:100%">
			<tr>
				<td ><div style="font-weight:bold;width:; text-align:right">ʣ��ʱ�䣺</div></td>
				 <td align="left"><span id='surplus_top' style="display:none">0��+</span><input class="input-text" value="" name="addday" style="width:36px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')">��</td>
			 </tr>
			<tr>
				<td><div style="font-weight:bold;width:; text-align:right">&nbsp;</div></td>
				<td align="left"><div style="margin-top:5px; margin-left:10px;"><input type="checkbox" name="s" value="1"> ȡ���ö�</div></td>
			</tr>
			<tr style="text-align:center;margin-top:15px"> 
				<td colspan='2' ><input type="submit" onclick="wait_result();" value='ȷ��' id='topsubmit' class="submit_btn">
			  &nbsp;&nbsp;<input type="button" onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td>
		  </tr>
		</table> 
		<input name="eid" type="hidden">
      </form> 
</div>
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
	<form action="index.php" name="myform" method="get"> 
    <div class="admin_Filter"> 
	<input name="m" value="admin_resume" type="hidden"/>
	<input type="hidden" name="salary" value="<?php echo $_GET['salary']; ?>
"/>
	<input type="hidden" name="type" value="<?php echo $_GET['type']; ?>
"/>
	<input type="hidden" name="report" value="<?php echo $_GET['report']; ?>
"/>
	
		<span class="complay_top_span fl">��������</span>
		  <input type="text" placeholder="������Ҫ�����Ĺؼ���" value="<?php echo $_GET['keyword']; ?>
" name="keyword" class="admin_Filter_search">
		  <input type="submit" name="search" value="����" class="admin_Filter_bth"> 
		  <span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">�߼�����</div></div>  
 		  </span>
		  <a href="index.php?m=admin_resume&c=addresume" class="admin_infoboxp_tj" style="margin-top:0px;margin-right:5px;"> ��Ӽ���</a>  
	  </div> 
	 </form>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  


  <div class="table-list">
    <div class="admin_table_border">
    
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_resume" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;">
              <label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
              </th>
              <th width="60"> <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=admin_resume&order=desc&t=id">����ID<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=admin_resume&order=asc&t=id">����ID<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left" width="150">��������</th>
              <th align="left" width="200">����ְλ</th>
              <th>�����ص�</th>
              <th>����Ҫ��</th>
              <th>��������</th>
              <th>����ʱ��</th>
              <th> <?php if ($_GET['t'] == 'time' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=admin_resume&order=desc&t=time">����ʱ��<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=admin_resume&order=asc&t=time">����ʱ��<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
           
              <th>�Ƽ�</th>
              <th>�ö�</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
-<?php echo $this->_tpl_vars['v']['uid']; ?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left" ><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['id']).",look:admin"), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
            <td class="od" align="left"><?php echo $this->_tpl_vars['v']['job_post_n']; ?>
(<a href="javascript:void(0)" class="job_name_all"  v="<?php echo $this->_tpl_vars['v']['job_class_name']; ?>
"><font color="red">��<?php echo $this->_tpl_vars['v']['jobnum']; ?>
��</font></a>)</td>
           
            <td class="gd"><?php echo $this->_tpl_vars['v']['cityid_n']; ?>
</td>
            <td class="td"><?php echo $this->_tpl_vars['v']['salary_n']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['type_n']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['report_n']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            
            <td id="rec_resume<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['rec_resume'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_resume&c=recommend','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','rec_resume');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=admin_resume&c=recommend','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','rec_resume');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
			
			
            <td id="top<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['top'] == '1'): ?><a href="javascript:void(0);" onClick="resumttop('<?php echo $this->_tpl_vars['v']['id']; ?>
','<?php echo $this->_tpl_vars['v']['top_day']; ?>
')"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="resumttop('<?php echo $this->_tpl_vars['v']['id']; ?>
','<?php echo $this->_tpl_vars['v']['top_day']; ?>
')"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>
			
			
            <td><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['v']['id']).",look:admin"), $this);?>
" target="_blank" class="admin_cz_sc">Ԥ��</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��ˢ�£�', 'index.php?m=admin_resume&c=refresh&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" title="ˢ��" class="admin_cz_sc">ˢ��</a><br/><a href="index.php?m=admin_resume&c=saveresume&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
&e=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_sc">�޸�</a> | <a href="javascript:void(0)"  onclick="layer_del('ȷ��Ҫɾ����', 'index.php?m=admin_resume&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
-<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">ɾ��</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="4" >
            <label for="chkAll2">ȫѡ</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
              <input class="admin_submit4" type="button" name="delsub" value="����ˢ��" onClick="Refreshs();"/>
              <input class="admin_submit2" type="button" name="delsub" value="�Ƽ�" onClick="checkdel('rec_resume','1');"/>
              <input class="admin_submit4" type="button" name="delsub" value="ȡ���Ƽ�" onClick="checkdel('rec_resume','0');"/>
              <input class="admin_submit2" type="button" name="delsub" value="�ö�" onClick="checkdel('top','1');"/>
              <input class="admin_submit4" type="button" name="delsub" value="ȡ���ö�" onClick="checkdel('top','0');"/>
              </td>
            <td colspan="8" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div> 
</body>
</html>