<?php /* Smarty version 2.6.26, created on 2015-01-29 19:20:21
         compiled from admin/admin_tiny.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_tiny.htm', 134, false),)), $this); ?>
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
		$.post("index.php?m=admin_tiny&c=status",{allid:codewebarr,status:status,pytoken:pytoken},function(data){
			if(data=="1") {
				parent.layer.msg('������˳ɹ���', 2, 9,function(){window.location.reload();});

			}else{
				parent.layer.msg('����ȡ����˳ɹ���', 2, 9,function(){window.location.reload();});
			}
		});
	}
}
function show_status(id){
	$.get("index.php?m=admin_tiny&c=ajax&id="+id,function(data){
		var data=eval('('+data+')');
		$("#username").html(data.username);
		$("#sex").html(data.sex);
		$("#exp").html(data.exp);
		$("#job").html(data.job);
		$("#mobile").html(data.mobile);
		$("#production").html(data.production);
		$("#time").html(data.time);
		$("#status_"+data.status).attr("checked","checked");
		$("#statusid").val(id);
		$.layer({
			type : 1,
			title : '��˲���',
			closeBtn : [0 , true],
			offset : ['20%' , '30%'],
			border : [10 , 0.3 , '#000', true],
			area : ['560px','auto'],
			page : {dom : '#preview'}
		});
	})
}
function check_status(){
	var id=$("#statusid").val();
	var status=$("input[name='status']:checked").val();
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=admin_tiny&c=status",{allid:id,status:status,pytoken:pytoken},function(data){
		if(data=="1"){
			parent.layer.msg('��˳ɹ���', 2, 9,function(){window.location.reload();});
		}else{
			parent.layer.msg('ȡ����˳ɹ���', 2, 9,function(){window.location.reload();});
		}
	});
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
  <div class="infoboxp_top_bg"></div>
  <form action="index.php" name="myform" method="get">
    <input name="m" value="admin_tiny" type="hidden"/>
    <div class="admin_Filter"> <span class="complay_top_span fl">΢�����б�</span>
      <div class="admin_Filter_span">�������ͣ�</div>
      <div class="admin_Filter_text formselect" did='dtype'>
        <input type="button" <?php if ($_GET['type'] == '1' || $_GET['type'] == ''): ?> value="�û�����" <?php elseif ($_GET['type'] == '2'): ?> value="����ְλ" <?php elseif ($_GET['type'] == '3'): ?> value="�ֻ�����" <?php elseif ($_GET['type'] == '4'): ?> value="Q Q����" <?php endif; ?> class="admin_Filter_but" id="btype">
        <input type="hidden" name="type" id="type" value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>"/>
        <div class="admin_Filter_text_box" style="display:none" id="dtype">
          <ul>
            <li><a href="javascript:void(0)" onClick="formselect('1','type','�û�����')">�û�����</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','type','����ְλ')">����ְλ</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('3','type','�ֻ�����')">�ֻ�����</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('4','type','Q Q����')">Q Q����</a></li>
          </ul>
        </div>
      </div>
      <input type="text" placeholder="������Ҫ�����Ĺؼ���" value="<?php echo $_GET['keyword']; ?>
" name='keyword' class="admin_Filter_search">
      <input type="submit" name='search' value="����" class="admin_Filter_bth">
      <span class='admin_search_div'>
      <div class="admin_adv_search">
        <div class="admin_adv_search_bth">�߼�����</div>
      </div>
      </span> </div>
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
        <input name="m" value="admin_tiny" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th width="20"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="80"> <?php if ($_GET['t'] == 'id' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=admin_tiny&order=desc&t=id">�������<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=admin_tiny&order=asc&t=id">�������<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left">����</th>
              <th align="left">�Ա�</th>
              <th>��������</th>
              <th>����ְλ</th>
              <th>�ֻ�</th>
              <th>QQ</th>
              <th> <?php if ($_GET['t'] == 'time' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=admin_tiny&order=desc&t=time">����ʱ��<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=admin_tiny&order=asc&t=time">����ʱ��<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th>״̬</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td><input type="checkbox" class="check_all" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk"/></td>
            <td align="center" class="td1" width="80"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left"><a href="index.php?m=admin_tiny&c=show&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['username']; ?>
</a></td>
            <td class="od" align="left"><?php echo $this->_tpl_vars['v']['sex']; ?>
</td>
            <td class="gd" align="left"><?php echo $this->_tpl_vars['v']['exp']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['job']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['mobile']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['v']['qq']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="admin_com_Audited">�����</span><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><span class="admin_com_noAudited">δ���</span><?php else: ?><span class="admin_com_Lock">�ѹ���</span><?php endif; ?></td>
            <td><a href="javascript:void(0)" class="status admin_cz_sc" onClick="show_status('<?php echo $this->_tpl_vars['v']['id']; ?>
');">���</a> | <a href="index.php?m=admin_tiny&c=show&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_sc">Ԥ��</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=admin_tiny&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">ɾ��</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="5" ><label for="chkAll2">ȫѡ</label>
              &nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="ɾ����ѡ" onClick="return really('del[]')" />
              &nbsp;&nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="�������" onClick="audall('1');" />
              &nbsp;&nbsp;
              <input class="admin_submit6" type="button" name="delsub" value="����ȡ�����" onClick="audall('0');" /></td>
            <td colspan="5" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
      </form>
    </div>
  </div>
</div>
<div id="preview"  style="display:none;width:560px ">
  <div style="height:300px;overflow:auto;width:560px;" >
    <input id="statusid" type="hidden">
    <table width="100%" class="table_form" style="background:#fff; font-size:14px;">
      <tr class="admin_table_trbg">
        <th width="120">������</th>
        <td id="username"></td>
      </tr>
      <tr>
        <th>�Ա�</th>
        <td id="sex"></td>
      </tr>
      <tr class="admin_table_trbg">
        <th>�������ޣ�</th>
        <td id="exp"></td>
      </tr>
      <tr>
        <th>����ְλ��</th>
        <td id="job"></td>
      </tr>
      <tr class="admin_table_trbg">
        <th>�ֻ���</th>
        <td id="mobile"></td>
      </tr>
      <tr>
        <th>���ҽ��ܣ�</th>
        <td id="production"></td>
      </tr>
      <tr class="admin_table_trbg">
        <th width="120">ʱ�����䣺</th>
        <td id="time"></td>
      </tr>
    </table>
    <div style="text-align:center;margin-top:10px;">״̬�� <span>
      <input name='status' type='radio' value='1' id='status_1'>
      ����� &nbsp;
      <input name='status' type='radio' value='0' id='status_0'>
      δ���</span></div>
    <div style="text-align:center;margin-top:10px;" >
      <input class="admin_submit4" type="button" onClick="check_status();" value="�ύ" >
    </div>
  </div>
</div>
</body>
</html>