<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:46
         compiled from admin/admin_user_cert.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_user_cert.htm', 135, false),)), $this); ?>
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
function audall(idcard_status){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		 parent.layer.msg('����δѡ���κ���Ϣ��', 2, 8);	return false;
	}else{
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=usercert&c=idcard_status",{allid:codewebarr,idcard_status:idcard_status,pytoken:pytoken},function(data){
			if(data=="1") {
				parent.layer.msg('������˳ɹ���', 2, 9,function(){window.location.reload();});

			}else{
				parent.layer.msg('����ȡ����˳ɹ���', 2, 9,function(){window.location.reload();});
			}
		});
	}
}



$(function(){
	$(".status").click(function(){
		var uid=$(this).attr("uid");
		var url=$(this).attr("url");
		var status=$(this).attr("status");
		var pytoken=$("#pytoken").val();
		$("#status"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		if(url){
			preview(url,uid,status);
		}else{
			$.post("index.php?m=usercert&c=sbody",{uid:uid,pytoken:pytoken},function(msg){
				$("#alertcontent").val(msg);
				status_div('�û���֤���','350','220');
			});
		}
	});
});
function preview(url,uid,status){
	$(".job_box_div").html("<img src='"+url+"' style='width:400px;height:200px' />");
	$("#preview_url").attr("href",url);
	var pytoken=$('#pytoken').val();
	$("#status"+status).attr("checked",true);
	$("input[name=uid]").val(uid);
	$.post("index.php?m=usercert&c=sbody",{uid:uid,pytoken:pytoken},function(msg){
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
<div class="infoboxp"> <div class="infoboxp_top_bg"></div>
    <form action="index.php" name="myform" method="get">
      <input name="m" value="usercert" type="hidden"/>
      <div class="admin_Filter">
	  <span class="complay_top_span fl">������֤���</span> 
        <input type="text" placeholder="������Ҫ�����Ĺؼ���" value="<?php echo $_GET['keyword']; ?>
" name='keyword' class="admin_Filter_search">
        <input type="submit" name='search'  value="����" class="admin_Filter_bth">
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
	<iframe  id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" id='myform' method="get" target="supportiframe">
	  <input name="m" value="usercert" type="hidden"/>
         <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
            <th style="width:20px;">                            
            <label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label>
            </th>
            <th>
			 <?php if ($_GET['t'] == 'uid' && $_GET['order'] == 'asc'): ?>
			<a href="index.php?m=usercert&order=desc&t=uid">UID<img src="images/sanj.jpg"/></a>
            <?php else: ?>
			<a href="index.php?m=usercert&order=asc&t=uid">UID<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
              <th>��֤��</th>
              <th>�鿴</th>

            <th>
			<?php if ($_GET['t'] == 'cert_time' && $_GET['order'] == 'asc'): ?>
			<a href="index.php?m=usercert&order=desc&t=cert_time">����ʱ��<img src="images/sanj.jpg"/></a>
            <?php else: ?>
			<a href="index.php?m=usercert&order=asc&t=cert_time">����ʱ��<img src="images/sanj2.jpg"/></a>
            <?php endif; ?>
			</th>
              <th>״̬</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>

          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['uid']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
"  name='del[]' class="check_all" onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['uid']; ?>
</span></td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <!--td class="gd" width="100"><a target="_blank" href="<?php echo $this->_tpl_vars['v']['idcard_pic']; ?>
">�鿴���֤</a></td-->
			<td class="gd" width="100"><a  href="javascript:void(0)" onClick="preview('<?php echo $this->_tpl_vars['v']['idcard_pic']; ?>
','<?php echo $this->_tpl_vars['v']['uid']; ?>
','<?php echo $this->_tpl_vars['v']['idcard_status']; ?>
')">�鿴���֤</a></td>
            <td class="td" width="400"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['cert_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['idcard_status'] == 1): ?><span class="admin_com_Audited">�����</span><?php elseif ($this->_tpl_vars['v']['idcard_status'] == 0): ?><span class="admin_com_noAudited">δ���</span><?php elseif ($this->_tpl_vars['v']['idcard_status'] == 2): ?><span class="admin_com_tg">δͨ��</span><?php endif; ?></td>
            <td><a href="javascript:void(0);" class="status admin_cz_sc"   uid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" url="<?php echo $this->_tpl_vars['v']['idcard_pic']; ?>
" status="<?php echo $this->_tpl_vars['v']['idcard_status']; ?>
">���</a> | <a href="javascript:void(0)"  onclick="layer_del('ȷ��Ҫɾ����', 'index.php?m=<?php echo $_GET['m']; ?>
&c=del&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">ɾ��</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">ȫѡ</label>&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
             &nbsp;&nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="�������" onClick="audall('1');" />
              &nbsp;&nbsp;
              <input class="admin_submit6" type="button" name="delsub" value="����ȡ�����" onClick="audall('0');" /></td>
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
		<div style="text-align:center;margin:10px 0px;" ><span style="font-size:12px;"><a target="_blank" href="" id='preview_url'>�鿴ԭͼ</a></span></div>
		<div id="infobox">
		  <form action="index.php?m=usercert&c=status" target="supportiframe" method="post" id="formstatus">
			 <div class="admin_Operating_sh" style=" padding:10px;">
			<div class="admin_Operating_sh_h1" style="padding:5px;">��˲�����
			<label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
			<label for="status1"><input type="radio" name="status" value="1" id="status1" >����</label>
			<label for="status2"><input type="radio" name="status" value="2" id="status2">δͨ��</label></div>
			<div class="admin_Operating_sh_sm" style="width:380px">���˵����</div>
			<div style="width:380px"><textarea id="alertcontent" name="statusbody" class="admin_Operating_text"></textarea></div>
			<div class="admin_Operating_sub"> <input type="submit"  value='ȷ��' class="submit_btn">
			  &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></div>
			</div>
			<input name="uid" value="0" type="hidden">
			<input type="hidden" name="pytoken"  id="pytoken"value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		  </form>
		</div>
	</div>
</div>

</body>
</html>