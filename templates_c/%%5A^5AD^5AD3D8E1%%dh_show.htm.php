<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:26
         compiled from default/redeem/dh_show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/redeem/dh_show.htm', 24, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/yun_job_fairs.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]-->
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="redeem">
  <div class="current_Location icon png"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <a href="<?php echo smarty_function_url(array('m' => 'redeem'), $this);?>
">�����̳�</a> > <?php echo $this->_tpl_vars['row']['name']; ?>
</div>
  <div class="redeem_show_left fl">
    <div class="redeem_show_ltop fl">
      <div class="redeem_show_du_img fl"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['row']['pic']; ?>
" width="280" height="190"></div>
      <ul class="redeem_show_texts fr">
        <li class="redeem_show_h"><?php echo $this->_tpl_vars['row']['name']; ?>
</li>
        <li>������֣�<?php echo $this->_tpl_vars['row']['integral']; ?>
����</li>
        <li>ʣ����������<?php echo $this->_tpl_vars['row']['stock']; ?>
�����Ѷһ� <b><?php echo $this->_tpl_vars['row']['num']; ?>
</b> ����</li>
        <?php if ($this->_tpl_vars['row']['stock'] != '0'): ?>
        <li>�޹�������<?php if ($this->_tpl_vars['row']['restriction'] == '0'): ?>����<?php else: ?><?php echo $this->_tpl_vars['row']['restriction']; ?>
��<?php endif; ?></li>
        <li>�һ�������<?php echo $_GET['num']; ?>
��</li>
        <?php else: ?> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_ydw.png"> <?php endif; ?>
      </ul>
      <div class="clear"></div>
       <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form action="" target="supportiframe" method="post" onsubmit="return redeem_dh();">
        <input name="num" value="<?php echo $_GET['num']; ?>
" type="hidden">
     <div class="redeem_show_img_text">
     <div class="redeem_show_img_text_list"><span class="redeem_show_img_text_list_s">&nbsp;</span><span class="redeem_show_img_text_span">����д��ϵ��ʽ���Ա㾡�콫��Ʒ�͸�����</span></div>
      <div class="redeem_show_img_text_list redeem_show_img_text_list_300">
          <span class="redeem_show_img_text_list_s"><span style="color:red;">*</span> ��ϵ�ˣ�</span>
          <input type="text" value="" name="linkman" class="supportiframe_text_in">
      </div>
      <div class="redeem_show_img_text_list redeem_show_img_text_list_300">
          <span class="redeem_show_img_text_list_s"><span style="color:red;">*</span> ��ϵ�绰��</span>
          <input type="text" value="" name="linktel" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="supportiframe_text_in">
      </div>      
      <div class="redeem_show_img_text_list">
          <span class="redeem_show_img_text_list_s">��ע��</span>
          <textarea class="supportiframe_textarea" name="body"></textarea>
      </div>
     <div class="redeem_show_img_text_list redeem_show_img_text_list_300">
     	<span class="redeem_show_img_text_list_s"><span style="color:red;">*</span> �ʺ����룺</span>
        <input type="password" name="password" value="" class="supportiframe_text_in">
      </div>
        <div class="redeem_show_img_text_list">
        	<span class="redeem_show_img_text_list_s">&nbsp;</span>
            <input type="submit" value="�ύ" name="submit" class="supportiframe_text_bth">
         </div>
      </div>
      </form>
    </div>
  </div>
<style>
.redeem_show_texts li {
    width: 100%;
    float: left;
    color: #666;
    line-height: 34px;
    font-size: 14px;
}

</style>
  <div class="redeem_show_right fr">
    <div class="redeem_hotgoods_h fl">�һ���¼</div>
          <div class="redeem_gift_detail fl" id="jl" style="width:220px;">
        <ul class="redeem_record_title redeem_record_h fl">
          <li class="redeem_record_name record_title" style="width:120px; margin-left:0px">��Ա</li>
          <li class="redeem_record_product record_title" style="width:100px;">����</li>
        </ul>
        <div class="redeem_record_list fl">
          <ul class="redeem_record_title fl">
            <?php $_from = $this->_tpl_vars['jilu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <li class="redeem_record_name" style="width:120px;margin-left:0px"><?php echo $this->_tpl_vars['v']['username']; ?>
</li>
            <li class="redeem_record_product" style="width:100px;"><?php echo $this->_tpl_vars['v']['num']; ?>
��</li>
            <?php endforeach; else: ?>
            ���޶һ���¼
            <?php endif; unset($_from); ?>
          </ul>
           <div class="clear"></div>
        </div>
      </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 