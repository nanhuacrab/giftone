<?php /* Smarty version 2.6.26, created on 2015-01-29 18:26:05
         compiled from admin/admin_advertise.htm */ ?>
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
function check_type(id,value){
	if(value=="1"){
		var val = "0";
	}else{
		var val="1";
	}
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:$('#pytoken').val()},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
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
 		$.layer({
			type : 1,
			title :'��������',
			offset: [($(window).height() - 120)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','120px'],
			page : {dom :"#infobox2"}
		}); 		
	}
}
$(document).ready(function() {
	$(".preview").hover(function(){  
		var pic_url=$(this).attr('url');
		layer.tips("<img src="+pic_url+" style='max-width:380px'>", this, {
			guide:3,
			style: ['background-color:#F26C4F; color:#fff;top:-7px;left:-20px', '#F26C4F']
		});
	},function(){layer.closeTips();});  
});
$(document).ready(function(){
	$(".job_name").hover(function(){
		var job_name=$(this).attr('v'); 
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
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="wname"  style="display:none; width: 300px; "> 
	<div style="height: 160px;" class="job_box_div">  
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr ><td  class='ui_content_wrap'>����(CTRL+C)�����ݲ���ӵ�ģ����</td></tr> 
			<tr><td><input type="text" name="position" id='copy_url' class="input-text" size='45'/></td></tr> 
		</table> 
	   </div>
	</div>
</div> 
<div class="infoboxp"> 
<div class="infoboxp_top_bg"></div>
    <div class="admin_Filter">
		<span class="complay_top_span fl">������</span> 
		<form action="index.php" name="myform" method="get">
		<input name="m" value="advertise" type="hidden"/> 
		  <span class="admin_Filter_span"> ������</span> 
		  <div class="admin_Filter_text formselect"  did='dclass_id'>
		  <input type="button" value="<?php if ($_GET['class_id'] == '1' || $_GET['class_id'] == ''): ?>����<?php else: ?><?php echo $this->_tpl_vars['nclass'][$_GET['class_id']]; ?>
<?php endif; ?>" class="admin_Filter_but"  id="bclass_id">
		  <input type="hidden" id='class_id' value="<?php echo $_GET['class_id']; ?>
" name='class_id'>
		  <div class="admin_Filter_text_box" style="display:none;width:258px;height:230px; overflow:auto; overflow-x:hidden" id='dclass_id'>
			  <ul>
			  <?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adv']):
?>
			  <li><a href="javascript:void(0)" onClick="formselect('<?php echo $this->_tpl_vars['adv']['id']; ?>
','class_id','<?php echo $this->_tpl_vars['adv']['class_name']; ?>
')"><?php echo $this->_tpl_vars['adv']['class_name']; ?>
</a></li>
			  <?php endforeach; endif; unset($_from); ?> 
			  </ul>  
		  </div>
		</div> 
		<input class="admin_Filter_search" type="text" name="name"  size="25" style="float:left">
		<input  class="admin_Filter_bth"  type="submit" name="comquestion" value="����"/>
		</form> 
		<span class='admin_search_div'>
		  <div class="admin_adv_search"><div class="admin_adv_search_bth">�߼�����</div></div>  
		   
		</span> 
  		<a href="index.php?m=advertise&c=ad_add" class="admin_infoboxp_tj" style="margin-top:0px;"> ��ӹ��</a>        
		<a href="javascript:void(0)" onClick="layer_del('','index.php?m=advertise&c=cache_ad')" class="admin_infoboxp_nav admin_infoboxp_gl">���¹��</a>
   </div>
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
  
 
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="" name="myform" method="get" id='myform'target="supportiframe">
 <input type="hidden" id="pytoken" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%">
	<thead>
			<tr class="admin_table_top">
             <th><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
			<th align="center">���</th>
			<th align="left" width="150">���λ����</th>
             <th align="left" width="120">ʹ�÷�Χ</th>
             <th align="left" width="220">������</th>
              <th align="center">�����</th>
              <th align="center">״̬</th>
            <th align="center">����</th>
            <th align="left">���״̬</th>
            <th align="center">����ʱ��</th>
            <th align="center">����</th>
			<th align="left" width="120">���ô���</th>
			<th class="admin_table_th_bg" align="left">����</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['linkrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
    <tr align="left"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
     <td align="center"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
	 <td align="center"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
    	<td align="left" class="td1"><span><?php echo $this->_tpl_vars['v']['ad_name']; ?>
</span></td>
		<td align="left"><span class="job_name"  v="<?php echo $this->_tpl_vars['v']['d_name']; ?>
"><?php echo $this->_tpl_vars['v']['d_title']; ?>
</span></td>
        <td align="left" class="ud"><?php echo $this->_tpl_vars['v']['class_name']; ?>
</td>
        <td align="center" class="ud"><?php echo $this->_tpl_vars['v']['hits']; ?>
</td>
        <td align="center" class="ud" id="<?php echo $this->_tpl_vars['v']['id']; ?>
"><a href="javascript:void(0);" onClick="check_type(<?php echo $this->_tpl_vars['v']['id']; ?>
,<?php echo $this->_tpl_vars['v']['is_check']; ?>
);" ><?php if ($this->_tpl_vars['v']['is_check'] == '1'): ?><font color="green">�����</font><?php else: ?><font color="red">δ���</font><?php endif; ?></a></td>
        <td  align="center" class="ud"><?php echo $this->_tpl_vars['v']['ad_typename']; ?>
</td>
        <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['type']; ?>
</td>
        <td class="ud" align="center"><?php echo $this->_tpl_vars['v']['time_end']; ?>
</td>
        <td class="ud" align="center"><?php echo $this->_tpl_vars['v']['sort']; ?>
</td>
    	<td class="ud" align="left"> 
			<?php if ($this->_tpl_vars['v']['is_end'] == '1'): ?>
				�����ڣ����ɵ���
			<?php elseif ($this->_tpl_vars['v']['is_open'] == '0'): ?>
				���ͣ�ã����ɵ���
			<?php else: ?> 
        	<a href="javascript:void(0);" onClick="copy_url('�ڲ�����','{yun\:}ad cid=<?php echo $this->_tpl_vars['v']['class_id']; ?>
 id=<?php echo $this->_tpl_vars['v']['id']; ?>
{\/yun}')">�ڲ�����</a> | 
            <a href="javascript:void(0);" onClick="copy_url('�ⲿ����','&lt;script src=\'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/plus/yunimg.php?classid=<?php echo $this->_tpl_vars['v']['class_id']; ?>
&ad_id=<?php echo $this->_tpl_vars['v']['id']; ?>
\' language=\'javascript\'&gt;&lt;/script&gt;')">�ⲿ����</a>  
		<?php endif; ?>			
        </td>
        <td> <a href="index.php?m=advertise&c=ad_preview&ad_class=<?php echo $this->_tpl_vars['v']['class_id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_yl">Ԥ��</a> | 
        <a href="index.php?m=advertise&c=modify&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_bj">�޸�</a> | 
        <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=advertise&c=del_ad&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');" class="admin_cz_sc">ɾ��</a>
        </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="2" >
    <label for="chkAll2">ȫѡ</label>&nbsp;
<input class="admin_submit4" type="button" name="delsub" value="��������" onClick="audall2('0');" /></td>
  <td colspan="10" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td></tr>
  </tbody>
  </table>
</form>
</div>
</div>
</div>
<div id="infobox2" style="display:none;">
	<div class="" style=" margin-top:10px;">
    <div id="infobox"> 
      <form action="index.php?m=advertise&c=ctime" target="supportiframe" method="post" id="formstatus"> 
		<table cellspacing='2' cellpadding='3'>
			<tr><td style="float:right"><span style="font-weight:bold;">�ӳ�ʱ�䣺</span></td><td><input class="input-text" value="" name="endtime" style="width:50px;" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"> �� </td></tr>
 			<tr style="text-align:center;margin-top:10px"><td colspan='2' > <input type="submit"  value='ȷ��' class="submit_btn">
          &nbsp;&nbsp;<input type="button"   onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></td></tr>
		</table>  
		 <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="jobid" value="0" type="hidden"> 
      </form>
    </div>
  </div> 
</div>
</body>
</html>