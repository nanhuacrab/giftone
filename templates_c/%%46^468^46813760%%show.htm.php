<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:25
         compiled from default/redeem/show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/redeem/show.htm', 24, false),array('modifier', 'date_format', 'default/redeem/show.htm', 65, false),)), $this); ?>
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
  <div class="current_Location icon png"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'redeem'), $this);?>
">积分商城</a> > <?php echo $this->_tpl_vars['row']['name']; ?>
</div>
  <div class="redeem_show_left fl">
    <div class="redeem_show_ltop fl">
      <div class="redeem_show_single fl"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['row']['pic']; ?>
" width="278" height="278"></div>
      <ul class="redeem_show_texts fr">
        <li class="redeem_show_h"><?php echo $this->_tpl_vars['row']['name']; ?>
</li>
        <li>所需积分：<?php echo $this->_tpl_vars['row']['integral']; ?>
积分</li>
        <li>剩余库存数量：<?php echo $this->_tpl_vars['row']['stock']; ?>
件（已兑换 <b><?php echo $this->_tpl_vars['row']['num']; ?>
</b> 件）</li>
        <?php if ($this->_tpl_vars['row']['stock'] != '0'): ?>
        <li>限购数量：<?php if ($this->_tpl_vars['row']['restriction'] == '0'): ?>不限<?php else: ?><?php echo $this->_tpl_vars['row']['restriction']; ?>
件<?php endif; ?></li>
        <form action="index.php" method="get" onsubmit="return checkform_redeem_show();">
        	<input type="hidden" name="m" value="redeem"/>
        	<input type="hidden" name="c" value="dh"/>
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['row']['id']; ?>
"/>
            <input type="hidden" id="uid" value="<?php echo $this->_tpl_vars['uid']; ?>
"/>
            <input type="hidden" id="stock" value="<?php echo $this->_tpl_vars['row']['stock']; ?>
"/>
            <input type="hidden" id="restriction" value="<?php echo $this->_tpl_vars['row']['restriction']; ?>
"/>
          	<li>兑换数量：<input name="num" id="num" value="1" type="text" class="redeem_show_input" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">件</li>
          <li><input class="redeem_show_bth fl" type="submit" value=""></li>
        </form>
        <?php else: ?> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_ydw.png"> <?php endif; ?>
      </ul>
    </div>
    <div class="redeem_detail fl">
      <ul class="redeem_detail_h fl">
        <li tab_name="xq" class="redeem_detail_content">礼品详情</li>
        <li tab_name="jl">兑换记录</li>
      </ul>
      <div class="redeem_gift_detail fl" id="xq" style="display:block;"> <?php echo $this->_tpl_vars['row']['content']; ?>
 </div>
      <div class="redeem_gift_detail fl" id="jl" style="display:none;">
        <ul class="redeem_record_title redeem_record_h fl">
          <li class="redeem_record_name record_title" style="width:200px;">会员名称</li>
          <li class="redeem_record_product record_title" style="width:180px;">商品数量（件）</li>
          <li class="redeem_record_time record_title" style="width:130px;">兑换时间</li>
          <li class="redeem_record_time record_title" style="width:130px;">兑换状态</li>
        </ul>
        <div class="redeem_record_list fl">
          <ul class="redeem_record_title fl">
            <?php $_from = $this->_tpl_vars['jilu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <li class="redeem_record_name" style="width:200px;"><?php echo $this->_tpl_vars['v']['username']; ?>
</li>
            <li class="redeem_record_product" style="width:180px; font-size:20px;"><?php echo $this->_tpl_vars['v']['num']; ?>
件</li>
            <li class="redeem_record_time" style="width:130px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</li>
            <li class="redeem_record_time" style="width:130px;"><?php if ($this->_tpl_vars['v']['status'] == '1'): ?>已兑换<?php else: ?>未审核<?php endif; ?></li>
            <?php endforeach; else: ?>
            暂无兑换记录
            <?php endif; unset($_from); ?>
          </ul>
           <div class="clear"></div>
        <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
        </div>
      </div>
    </div>
  </div>
  <script>
$(document).ready(function(){
	$(".redeem_detail_h").find("li").bind("click",function(){var id=$(this).attr("tab_name");$(".redeem_gift_detail").hide();$(".redeem_detail_content").removeClass("redeem_detail_content");$(this).addClass("redeem_detail_content");$("#"+id).show();});	
	});
</script>
  <div class="redeem_show_right fr">
    <div class="redeem_hotgoods_h fl">热门兑换</div>
    <div class="redeem_hotgoods_lists fl"> <?php $_from = $this->_tpl_vars['remen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
      <dl>
        <dt><a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['pic']; ?>
"></a></dt>
        <dd><a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
 </a><em><b><?php echo $this->_tpl_vars['v']['integral']; ?>
</b> 积分</em></dd>
      </dl>
      <?php endforeach; endif; unset($_from); ?> </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 