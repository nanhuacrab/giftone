<?php /* Smarty version 2.6.26, created on 2015-02-03 00:24:38
         compiled from admin/admin_wxkey.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_wxkey.htm', 61, false),)), $this); ?>
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
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
 <div class="company_job">
  <span class="admin_title_span">΢�������ؼ���</span>
    <div class="company_job_list_h1">
      <form action="index.php" name="myform" method="get">
        <span class="company_m6" style="float:left;margin-left:10px;">
        <input name="m" value="wx" type="hidden"/>
        <input name="c" value="keyword" type="hidden"/>
        <input class="company_job_text" type="text" name="keyword"  size="25" style="float:left"/>
        <input class="company_job_new_sub"  type="submit" name="news_search" value="�����ؼ���"/>
        &nbsp;</span> 
      </form>
       <div class="infoboxp_right"> 
        <a href="index.php?m=wx&c=wxnav" class="infoboxp_tj">�˵�����</a>
        <a href="index.php?m=wx" class="infoboxp_tj">�ͻ�������</a>
        <a href="index.php?m=wx&c=binduser" class="infoboxp_tj">�û����б�</a>
        <a href="index.php?m=wx&c=wxlog" class="infoboxp_tj">�û�������־</a>
    </div>
    </div>
  </div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=admin_keyword&c=del" target="supportiframe" name="myform" id='myform' method="post"> 
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th>���</th>
              <th align="left">�ؼ���</th>
              <th align="left">��������</th>
              <th align="left">��������û�</th>
              <th align="left">��ID��OpenId��</th>
              <th>����ʱ��</th>
            </tr>
          </thead>
          <tbody>
          <?php $_from = $this->_tpl_vars['keyList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center">
            <td><input type="checkbox" class="check_all" value="<?php echo $this->_tpl_vars['v']['id']; ?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
             <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['key_name']; ?>
</td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['num']; ?>
</td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['wxuser']; ?>
</td>
            <td class="od" align="left"><?php echo $this->_tpl_vars['v']['wxid']; ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['wxtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>          
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" ><input  class="admin_submit4" type="button" name="delsub" value="����ɾ��" onClick="return really('del[]')" />
             </td>
            <td colspan="4" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
        </table>
		<input type="hidden" name="pytoken" id="pytoken"  value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>