<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:58
         compiled from admin/admin_com_cert.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_com_cert.htm', 104, false),array('modifier', 'date_format', 'admin/admin_com_cert.htm', 120, false),)), $this); ?>
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
<script src="js/admin_public.js"></script>
<script> 
function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('����δѡ���κ���Ϣ��', 2, 8);	return false;
	}else{
		$("input[name=uid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		$.layer({
			type : 1,
			title :'�������',
			offset: [($(window).height() - 220)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','220px'],
			page : {dom :"#infobox2"}
		});
	}
}
$(function(){
	$(".status").click(function(){ 
		var uid=$(this).attr("uid");
		var url=$(this).attr("url");
		var status=$(this).attr("status");
		preview(url,uid,status); 
	});
}); 
function preview(url,uid,status){  
	$(".job_box_div").html("<img src='"+url+"' style='width:400px;height:200px' />");
	$("#preview_url").attr("href",url);
	var pytoken=$('#pytoken').val();
	$("#status"+status).attr("checked",true);
	$("input[name=uid]").val(uid); 
	$.post("index.php?m=comcert&c=sbody",{uid:uid,pytoken:pytoken},function(msg){
		$("#alertcontent").val(msg); 
	});
 	$.layer({
		type : 1,
		title : '�鿴ͼƬ',
		closeBtn : [0 , true], 
		offset : ['20%' , '30%'],
		border : [10 , 0.3 , '#000', true],
		area : ['420px','auto'],
		page : {dom : '#preview'}
	});  
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter">
<span class="complay_top_span fl">��ҵ��֤���</span>
<form action="index.php" method="get" name="myform">
<input type="hidden" name="m" value="comcert"/>
<div class="admin_Filter_span">���״̬��</div>
  <div class="admin_Filter_text formselect" did="dstatus">
  
  <input type="button" <?php if ($_GET['status'] == ''): ?> value="ȫ��" <?php elseif ($_GET['status'] == '1'): ?> value="�����" <?php elseif ($_GET['status'] == '2'): ?> value="δͨ��" <?php elseif ($_GET['status'] == '3'): ?> value="δ���" <?php endif; ?> class="admin_Filter_but" id="bstatus">
  <input type="hidden" name="status" id="status"/>
  
    <div class="admin_Filter_text_box" style="display:none" id="dstatus">
          <ul>
		      <li><a href="javascript:void(0)" onClick="formselect('','status','ȫ��')">ȫ��</a></li>
		  	  <li><a href="javascript:void(0)" onClick="formselect('1','status','�����')">�����</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('3','status','δ���')">δ���</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','status','δͨ��')">δͨ��</a></li>
          </ul>  
      </div>
  </div>
  <input type="text" placeholder="������Ҫ�����Ĺؼ���" name="keyword" class="admin_Filter_search">
  <input type="submit" value="����" class="admin_Filter_bth">
		<span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">�߼�����</div>
        </div> 
        </span>   
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
      <form action="index.php?m=<?php echo $_GET['m']; ?>
&c=del" name="myform" method="post" target="supportiframe" id='myform'>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th> <?php if ($_GET['t'] == 'uid' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'uid','m' => 'comcert','untype' => "order,t"), $this);?>
">�û�ID<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'uid','m' => 'comcert','untype' => "order,t"), $this);?>
">�û�ID<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left">��֤��˾</th>
              <th>�鿴</th>
              <th> <?php if ($_GET['t'] == 'ctime' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'ctime','m' => 'comcert','untype' => "order,t"), $this);?>
">����ʱ��<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'ctime','m' => 'comcert','untype' => "order,t"), $this);?>
">����ʱ��<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th>״̬</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center"  <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['uid']; ?>
">
            <td><input type="checkbox" class="check_all" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['uid']; ?>
</span></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td class="gd" width="100"><a href="javascript:;" onClick="preview('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['v']['check']; ?>
','<?php echo $this->_tpl_vars['v']['uid']; ?>
','<?php echo $this->_tpl_vars['v']['status']; ?>
')">�鿴Ӫҵִ��</a>
            </td>
            <td class="td" width="400"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="admin_com_Audited">�����</span><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><span class="admin_com_noAudited">δ���</span><?php elseif ($this->_tpl_vars['v']['status'] == 2): ?><span class="admin_com_tg">δͨ��</span><?php endif; ?></td>
            <td>
            <a href="javascript:;" uid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" url="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php echo $this->_tpl_vars['v']['check']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
" class="status admin_cz_sh">���</a> | 
            <a href="javascript:;" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=comcert&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
');" class="admin_cz_sc">ɾ��</a>
            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">ȫѡ</label>
            <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
            &nbsp;&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="�������" onClick="audall();" /></td>
            <td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
        </table>
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
<div id="preview"  style="display:none;width:420px ">
  <div style="height:300px; overflow:auto;width:420px;" >
    <div class="job_box_div" style="text-align:center;margin-top:10px;"></div> 
	<div style="text-align:center;margin:10px 0px;" > <span style="font-size:12px;"><a target="_blank" href="" id='preview_url'>�鿴ԭͼ</a></span></div> 
	  <div id="infobox">
      <form action="index.php?m=comcert&c=status" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <div class="admin_Operating_sh" style="padding:10px;">
		<div class="admin_Operating_sh_h1" style="padding:5px;">��˲�����
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >����</label>
        <label for="status2"><input type="radio" name="status" value="2" id="status2">δͨ��</label></div>
		<div class="admin_Operating_sh_sm" style="width:380px">���˵����</div>
        <div style="width:380px"><textarea id="alertcontent" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub" style="width:160px; margin:0 auto;height:40px;;">
        	<input type="submit"  value='ȷ��' class="submit_btn" style="float:left; margin-right:10px;"><input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��' style="float:left"></div>
		</div>  
        <input name="uid" value="0" type="hidden">
      </form>
    </div>
  </div>
</div>
<div id="infobox2"  style="display:none; width: 350px; "> 
    <div id="infobox">
      <form action="index.php?m=comcert&c=status" target="supportiframe" method="post" id="formstatus">
      <div class="admin_Operating_sh">
		<div class="admin_Operating_sh_h1" style="padding:5px;">��˲�����
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >����</label>
        <label for="status2"><input type="radio" name="status" value="3" id="status2">δͨ��</label></div>
		<div class="admin_Operating_sh_sm">���˵����</div>
        <div><textarea id="statusbody" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub"> <input type="submit"  value='ȷ��' class="submit_btn">
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></div>
		</div>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="uid" value="0" type="hidden">
      </form>
    </div> 
</div>
</body>
</html>