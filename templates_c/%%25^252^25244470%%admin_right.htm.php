<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:33
         compiled from admin/admin_right.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_right.htm', 48, false),array('function', 'seacrh_url', 'admin/admin_right.htm', 63, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="images/reset.css" rel="stylesheet" type="text/css" /> 
<script src="../js/jquery-1.8.0.min.js"></script>
<script src="js/admin_public.js" language="javascript"></script> 
<title>��̨����</title>
<style>
<!--
.mainright a,.maincontent a:visited{color:#F00; text-decoration:none;}
.mainright a:hover{color:#900; text-decoration:underline;}
.mainleft a,.mainleft a:visited{color:#06C; text-decoration:none;}
.mainleft a:hover{color:#00F; text-decoration:underline;}
-->
</style>
<script> 
/*�������е�js����*/
function killerrors() {return true;}
window.onerror = killerrors;
function logout(){
	if (confirm("��ȷ��Ҫ�˳����������"))
	top.location = 'index.php?c=logout';
	return false;
}
var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
';  
</script>
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.header .logo,.header .nav li a,.header .nav li.on,.left_menu h3 span.on');
</script>
<![endif]-->
</head>
<body style="font-size:12px; padding-bottom:0; " onLoad="version_msg();">
<div id="sysinfobox" class="sysinfobox" style="display:none;">
	<script>
    	setTimeout("document.getElementById('sysinfobox').style.display='none'",10000);
    </script>
	<div class="sysinfoboxtop" id="sysinfoboxtop"><strong style="float:left;margin-left:10px;">��������</strong><span style="float:left;">(10����Զ��˳�)</span><span style="float:right;margin-right:10px;"><a href="#" onclick="javascript:document.getElementById('sysinfobox').style.display='none';">[�ر�]</a></span></div> 
</div>
<div style="height:455px;">
<div class="admin_index_center">
<div class="admin_message_left">
<div class="admin_message_left_cont">
<div class="admin_message_name"><span class="admin_message_up">��ã�</span><span class="admin_message_yun"><?php echo $this->_tpl_vars['nav_user']['name']; ?>
</span><a  href="javascript:void(0)" onclick="layer_logout('index.php?m=index&c=logout');" class="admin_message_zh">[�����ʻ�]</a></div>
<div class="admin_message_login">���ĵ�½�ʻ���<strong><?php echo $this->_tpl_vars['nav_user']['username']; ?>
</strong>
������ɫ��<strong><?php echo $this->_tpl_vars['nav_user']['group_name']; ?>
</strong> �ϴε�¼ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['nav_user']['lasttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</div>
<div class="admin_message_jy"><?php if ($this->_tpl_vars['dirname'] || $this->_tpl_vars['mruser'] == 1): ?><div>
        <?php if ($this->_tpl_vars['dirname']): ?>
     <p>ǿ�ҽ��齫 <?php echo $this->_tpl_vars['dirname']; ?>
 �ļ�������Ϊ�������ƣ�
        <?php endif; ?>
        <?php if ($this->_tpl_vars['mruser'] == 1): ?>
       û�и���Ĭ�ϵĹ���Ա���ƺ�����!<a href="index.php?m=admin_user&c=pass">�������޸ġ�</a></p><?php endif; ?>
        </div>
 	<?php endif; ?>
</div></div>
</div>
<div class="admin_message_right">
<div class="admin_message_left_cont">
<div class="admin_message_h1">��վ��Ϣ</div>
<div class="admin_message_list">
<a href="<?php echo seacrh_url(array('state' => 4,'m' => 'admin_company_job','untype' => 'state'), $this);?>
" class="">�����ְλ��<?php echo $this->_tpl_vars['company_job']; ?>
</a>               
<a href="<?php echo seacrh_url(array('status' => 3,'m' => 'admin_company','untype' => 'status'), $this);?>
" class="admin_message_bg2">�������ҵ��<?php echo $this->_tpl_vars['company']; ?>
</a>                
<a href="index.php?m=comcert" class="admin_message_bg3">�������ҵ��֤��<?php echo $this->_tpl_vars['comcert']; ?>
</a>
<a href="<?php echo seacrh_url(array('status' => 3,'m' => 'admin_once','untype' => 'status'), $this);?>
" class="admin_message_bg4">�����΢��Ƹ��<?php echo $this->_tpl_vars['once_job']; ?>
</a>               
<a href="<?php echo seacrh_url(array('state' => 2,'m' => 'link','untype' => 'state'), $this);?>
" class="admin_message_bg5">��������ӣ�<?php echo $this->_tpl_vars['admin_link']; ?>
</a>    
<a href="<?php echo seacrh_url(array('order_state' => 3,'m' => 'company_order','untype' => 'order_state'), $this);?>
" class="admin_message_bg6">����������<?php echo $this->_tpl_vars['company_order']; ?>
</a>
</div>
</div>
</div>
</div>
<div class="admin_index_center">
<div class="admin_index_Data">
<div class="admin_index_Data_bor">
<div class="admin_message_h1">һ������ͳ��</div>
<div class="admin_index_Data_cont" style=" position:relative">
<div class="admin_index_Data_cont_left" style="width:850px; float:left;height:300px;">
<div class="admin_index_fw" id="main22" style="width:800px;height:300px;">
<iframe name="right" id="tbrightMain" src="index.php?m=admin_right&c=getweb" frameborder="false" scrolling="auto" style="border:none;" width="850" height="300" allowtransparency="true"></iframe>
</div>
</div>
<div class="admin_index_date_list">
<ul>
<li><a href="javascript:clicktb('resumetj');" class="admin_index_date_a png">����ͳ��</a></li>
<li><a href="javascript:clicktb('jobtj');" class="admin_index_date_b png">ְλͳ��</a></li>
<li><a href="javascript:clicktb('comtj');" class="admin_index_date_c png">��ҵע��ͳ��</a></li>
<li><a href="javascript:clicktb('getweb');" class="admin_index_date_d png">����ע��ͳ��</a></li>
<li><a href="javascript:clicktb('newstj');" class="admin_index_date_e png">����ͳ��</a></li>
<li><a href="javascript:clicktb('adtj');" class="admin_index_date_f png">�����ͳ��</a></li>
<li><a href="javascript:clicktb('wzptj');" class="admin_index_date_g png">΢��Ƹͳ��</a></li>
<li><a href="javascript:clicktb('wjltj');" class="admin_index_date_h png">΢����ͳ��</a></li>
<li><a href="javascript:clicktb('payordertj');" class="admin_index_date_i png">��ֵͳ��</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="mainleft">
<div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>�����Ŷ�</h6></div>
        <div class="maincontent">
        <p>�����Ŷӣ�haowubai , ���� , Kstar , Marine , Mylgl , Neo , ��ǰ ��</p>
        <p>�ر��л������ , ������ , Фǿ , ���� , ��ң , ��Ȫ</p>
        <p>��ϵ�绰��400-880-5523</p>
		<p>�ٷ���վ��<a href="http://www.phpyun.com/" target="_blank">http://www.phpyun.com/</a> �ٷ���̳��<a href="http://bbs.phpyun.com/" target="_blank">http://bbs.phpyun.com/</a></p>
<p>PHPYun����汾�� <?php echo $this->_tpl_vars['db_config']['version']; ?>
 [<a href="http://www.phpyun.com">����֧�������</a>] ��ѯQQ�� 3367562</p>
        </div>
    </div>
</div>
<div class="mainright">
    <div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>ϵͳ��Ϣ</h6></div>
        <div class="maincontent">
        <p style="float:left;">PHPYun����汾�� <?php echo $this->_tpl_vars['db_config']['version']; ?>
 [ <div id="version_msg" style="float:left;">�������!</div>]</p>
		<p style="clear:both;">�����������<?php echo $this->_tpl_vars['soft']; ?>
</p>
        <p>���ÿռ�(������)��<?php echo $this->_tpl_vars['kongjian']; ?>
&nbsp;M</p>
		<p>MySQL �汾��<?php echo $this->_tpl_vars['banben']; ?>
</p>
		<p>�û� - ��������<?php echo $this->_tpl_vars['yonghu']; ?>
 - <?php echo $this->_tpl_vars['server']; ?>
</p>
        </div>
    </div>
  </div>
</div>
<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<script>
function clicktb(name){$("#tbrightMain").attr("src","index.php?m=admin_right&c="+name);}
</script>
<script src="http://init.phpyun.com/site.php?site=<?php echo $this->_tpl_vars['base']; ?>
">//�˴���ΪԶ�̻�ȡ������֪ͨ���벻Ҫɾ��</script>
</body>
</html>