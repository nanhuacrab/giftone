<?php /* Smarty version 2.6.26, created on 2015-01-29 18:25:05
         compiled from admin/reward_list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/reward_list.htm', 117, false),array('modifier', 'date_format', 'admin/reward_list.htm', 139, false),)), $this); ?>
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
function audall(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //���ڸ�ѡ��һ��ѡ�е��Ƕ��,���Կ���ѭ�����
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		 parent.layer.msg('����δѡ���κ���Ϣ��', 2, 8);	return false;
	}else{
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=reward_list&c=statuss",{allid:codewebarr,status:status,pytoken:pytoken},function(data){
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
 		$("input[name=pid]").val($(this).attr("pid"));
		var id=$(this).attr("pid");
		var status=$(this).attr("status"); 						
		var linktel=$(this).attr("linktel"); 
		var linkman=$(this).attr("linkman"); 
		var body=$(this).attr("body"); 		
		$("#linktel").val(linktel);
		$("#linkman").val(linkman);
		$("#body").val(body);
		$("#status"+status).attr("checked",true);
		$("input[name=id]").val(id);  	 
		$.get("index.php?m=reward_list&c=statusbody&id="+id,function(msg){
			$("#alertcontent").val(msg);
			status_div('�һ���¼���','450','360');
		});
	});	
});
  
</script>

<title>��̨����</title>
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none; width: 450px; "> 
     <div id="infobox"> 
      <form action="index.php?m=reward_list&c=status" target="supportiframe" method="post" id="formstatus"> 
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<div class="admin_Operating_sh" style="padding:10px;">
        <div style="margin-bottom:10px;"> ��ϵ�绰��<input class="input-text" type="text" id="linktel" name="linktel" size="30" value="" /> </div>
         <div>�� ϵ �ˣ�<input class="input-text" type="text" id="linkman" name="linkman" size="30" value="" /> </div>
         <div>��ע��<textarea id="body" name="body" class="admin_Operating_text"></textarea> </div>
      
		<div style="margin-top:5px;">����������
        <label for="status0"><input type="radio" name="status" value="0" id="status0" >δ���</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >����</label>
        <label for="status2"><input type="radio" name="status" value="2" id="status2">δͨ��</label></div>
		<div class="admin_Operating_sh_sm">���˵����</div>
        <div><textarea id="alertcontent" name="statusbody" class="admin_Operating_text"></textarea></div>
		<div class="admin_Operating_sub"> <input type="submit"  value='ȷ��' class="submit_btn" >
          &nbsp;&nbsp;<input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='ȡ��'></div>
		</div>  
        <input name="id" value="0" type="hidden"> 
      </form>
    </div> 
</div>  
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
    <form action="index.php" name="myform" method="get">
      <input name="m" value="reward_list" type="hidden"/>
      <div class="admin_Filter">
	   <span class="complay_top_span fl">�һ���Ʒ��¼</span>
	    <div class="admin_Filter_span">�������ͣ�</div>
        <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" value="<?php if ($_GET['type'] == '2'): ?>��Ա����<?php else: ?>��Ʒ����<?php endif; ?>" class="admin_Filter_but" id="btype">
         <input type="hidden" name="type" id="type" value="<?php if ($_GET['type'] == '2'): ?>2<?php else: ?>1<?php endif; ?>"/>
          <div class="admin_Filter_text_box" style="display:none" id='dtype'>
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','��Ʒ����')">��Ʒ����</a></li>
              <li><a href="javascript:void(0)" onClick="formselect('2','type','��Ա����')">��Ա����</a></li>
            </ul>
          </div>
        </div>
        <input type="text" placeholder="������Ҫ�����Ĺؼ���" value="<?php echo $_GET['keyword']; ?>
" name='keyword' class="admin_Filter_search">
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
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
      <input type="hidden" name="m" value="reward_list">
      <input type="hidden" name="c" value="del">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/>
                </label></th>
              <th align="left"> <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'reward_list','untype' => "order,t"), $this);?>
">ID<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'reward_list','untype' => "order,t"), $this);?>
">ID<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left">��Ʒ����</th>
              <th>��Ա����</th>
              <th>�һ�����</th>
              <th>�һ�����</th>             
              <th>�һ�ʱ��</th>              
              <th>��ϵ��</th>  
              <th>��ϵ�绰</th>                             
              <th>���״̬</th>
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
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['username']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['num']; ?>
��</td>
            <td><?php echo $this->_tpl_vars['v']['integral']; ?>
</td>           
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</td>                 
            <td align="left" ><?php echo $this->_tpl_vars['v']['linkman']; ?>
</td>                    
            <td><?php echo $this->_tpl_vars['v']['linktel']; ?>
</td>                  
                    
           <!-- <td id="status<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php if ($this->_tpl_vars['v']['status'] == '1'): ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=reward_list&c=status','<?php echo $this->_tpl_vars['v']['id']; ?>
','0','status');"><img src="../data/ajax_img/doneico.gif"></a><?php else: ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=reward_list&c=status','<?php echo $this->_tpl_vars['v']['id']; ?>
','1','status');"><img src="../data/ajax_img/errorico.gif"></a><?php endif; ?></td>-->
           
           <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="admin_com_Audited">�����</span><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><span class="admin_com_noAudited">δ���</span><?php elseif ($this->_tpl_vars['v']['status'] == 2): ?><span class="admin_com_tg">δͨ��</span><?php endif; ?></td>
           
            <td><a href="javascript:void(0);" class="status admin_cz_sh" status="<?php echo $this->_tpl_vars['v']['status']; ?>
" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
" linktel="<?php echo $this->_tpl_vars['v']['linktel']; ?>
" linkman="<?php echo $this->_tpl_vars['v']['linkman']; ?>
" body="<?php echo $this->_tpl_vars['v']['body']; ?>
">���</a> |<a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����', 'index.php?m=reward_list&c=del&del=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">ɾ��</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">ȫѡ</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
            &nbsp;&nbsp;
            <input class="admin_submit4" type="button" name="delsub" value="�������" onClick="audall('1');" />
            &nbsp;&nbsp;
            <input class="admin_submit6" type="button" name="delsub" value="����ȡ�����" onClick="audall('0');" /></td>
            <td colspan="9" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>