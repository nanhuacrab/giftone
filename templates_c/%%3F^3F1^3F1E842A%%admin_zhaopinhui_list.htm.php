<?php /* Smarty version 2.6.26, created on 2015-01-29 18:30:45
         compiled from admin/admin_zhaopinhui_list.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
  <div class="admin_Filter">
    <span class="complay_top_span fl">��Ƹ���б�</span> 
      <form action="index.php" name="myform" method="get">
        <input name="m" value="zhaopinhui" type="hidden"/>
		<input type="hidden" name="status" value="<?php echo $_GET['status']; ?>
"/>
        <span class="admin_Filter_span"> �������ͣ�</span>  
		<div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type'] == '1' || $_GET['type'] == ''): ?>��Ƹ�����<?php else: ?>�ٰ�᳡<?php endif; ?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','��Ƹ�����')">��Ƹ�����</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','�ٰ�᳡')">�ٰ�᳡</a></li> 
			  </ul>  
		  </div>
		</div> 
        <input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left">
        <input class="admin_Filter_bth" type="submit" name="news_search" value="����"/> 
      </form>
	  <span class='admin_search_div'>
	  <div class="admin_adv_search"><div class="admin_adv_search_bth">�߼�����</div></div>  	   
	</span>
     <a href="index.php?m=zhaopinhui&c=add"  class="admin_infoboxp_tj" style="margin-top:0px;">�����Ƹ��</a>
   </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
   
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=zhaopinhui&c=del" name="myform" method="post" target="supportiframe" id='myform'>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
                </label></th>
              <th>���</th>
              <th>��Ƹ�����</th>
              <th>��ʼʱ��</th>
              <th>����ʱ��</th>
              <th>�ٰ�᳡</th>
              <th>��ҵ��</th>
              <th class="admin_table_th_bg">����</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td style="width:20px;"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud"><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
            <td class="od"><?php echo $this->_tpl_vars['v']['starttime']; ?>
</td>
            <td><?php echo $this->_tpl_vars['v']['endtime']; ?>
</td>
            <td align="left"> <?php echo $this->_tpl_vars['v']['address']; ?>
 </td>
            <td><?php echo $this->_tpl_vars['v']['comnum']; ?>
 [<a href="index.php?m=zhaopinhui&c=com&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" style="color:blue;"><?php echo $this->_tpl_vars['v']['booking']; ?>
�������</a>]</td>
            <td><a href="index.php?m=zhaopinhui&c=upload&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" class="admin_cz_img">ͼƬ</a> | <a href="index.php?m=zhaopinhui&c=add&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">�޸�</a> | <a href="javascript:void(0)" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=zhaopinhui&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc">ɾ��</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background: #f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">ȫѡ</label>&nbsp;
            <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
            <td colspan="5" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
		<input type="hidden" name="pytoken"  id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>