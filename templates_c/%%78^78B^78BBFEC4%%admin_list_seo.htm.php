<?php /* Smarty version 2.6.26, created on 2015-01-29 21:27:06
         compiled from admin/admin_list_seo.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_list_seo.htm', 77, false),)), $this); ?>
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
	var val = value=="1"?"0":"1";
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:pytoken},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
}
</script>
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Filter">
   <span class="complay_top_span fl">SEO����</span> 
	<form action="index.php" name="myform" method="get">
		<input name="m" value="seo" type="hidden"/>
		<span class="admin_Filter_span">�������ͣ�</span>  
		<div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type'] == 'seoname' || $_GET['type'] == ''): ?>����<?php else: ?>SEO��ʶ��<?php endif; ?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>seoname<?php endif; ?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('seoname','type','����')">����</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('ident','type','SEO��ʶ��')">SEO��ʶ��</a></li> 
			  </ul>  
		  </div>
		</div>
		<input class="admin_Filter_search"  type="text" name="keyword" value="<?php echo $this->_tpl_vars['get_type']['keyword']; ?>
" size="25" style="float:left"> 
		<input  class="admin_Filter_bth" type="submit" name="news_search" value="����"/>
		<span class='admin_search_div'>
        <div class="admin_adv_search">
          <div class="admin_adv_search_bth">�߼�����</div>
        </div> 
        </span> 
        <a href="index.php?m=seo&c=SeoAdd" class="admin_infoboxp_tj" style="margin-top:0px;"> ���SEOҳ��</a>
 	</form> 
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
<input type="hidden" name="m" value="seo">
<input type="hidden" name="c" value="del">
<input type="hidden" name="pytoken" id='pytoken'  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%">
	<thead>
		<tr class="admin_table_top">
        	<th><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
			<th align="left" width="200">����</th>
            <th align="left">SEO��ʶ��</th>
            <th align="left">��ҳ����</th>
            <th align="left">����ʱ��</th>
			<th align="center" class="admin_table_th_bg">����</th>
		</tr>
	</thead>
	<tbody>
    <?php $_from = $this->_tpl_vars['seolist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['list']):
?>
    <tr align="left" <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['list']['id']; ?>
">
    	<td align="center"><input type="checkbox" value="<?php echo $this->_tpl_vars['list']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span><?php echo $this->_tpl_vars['list']['seoname']; ?>
</span></td> 
        <td align="left" class="ud"><?php echo $this->_tpl_vars['list']['ident']; ?>
</td>
        <td width="450px" align="left" class="ud"><?php echo $this->_tpl_vars['list']['title']; ?>
</td>
        <td width="150px" class="ud" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
    	<td width="70px" align="center"> <a href="index.php?m=seo&c=Modify&id=<?php echo $this->_tpl_vars['list']['id']; ?>
" class="admin_cz_sc">�޸�</a> | 
        <a href="javascript:;" onClick="layer_del('ȷ��Ҫɾ����','index.php?m=seo&c=del&del=<?php echo $this->_tpl_vars['list']['id']; ?>
');" class="admin_cz_sc">ɾ��</a></td>
  	</tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
  <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
  <td><label for="chkAll2">ȫѡ</label>
  <input class="admin_submit4"  type="button" name="delsub" value="ɾ����ѡ"  onclick="return really('del[]')"/></td>
  <td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td></tr>
  </tbody>
  </table>
</form>
</div>
</div>
</div>
</body>
</html>