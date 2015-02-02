<?php /* Smarty version 2.6.26, created on 2015-01-29 18:24:56
         compiled from default/redeem/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/redeem/index.htm', 43, false),)), $this); ?>
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
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/slides.jquery.js" type="text/javascript"></script>
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
<script language="javascript">
$(function(){
	$("#slides").slides({
		preload: true,
		preloadImage: '<?php echo $this->_tpl_vars['style']; ?>
/images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});
});

</script> 
<div class="redeem">
<div class="redeem_top fl">
  <div class="redeem_top_left fl">
    <div class="redeem_top_left_h fl">兑换排行榜</div>
    <div class="redeem_top_left_lists fl"> <?php $_from = $this->_tpl_vars['paihang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
      <div class="redeem_lone_items fl">
        <div class="redeem_rank fl"> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/0<?php echo $this->_tpl_vars['j']+1; ?>
.png"> </div>
        <div class="redeem_lbanner fl"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['pic']; ?>
" width="60" height="52"> <a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a> </div>
      </div>
      <?php endforeach; endif; unset($_from); ?> </div>
  </div>
  <div class="redeem_top_center fl">
    <div class="redeem_raff fl"><em>积分兑换奖品，上千礼品任你挑选啦！</em></div>
    <div class="redeem_cbanner fl">
      <div class="Projector">
        <div class="Projector_img">
          <div id="slides" class="s_lb">
            <div class="slides_container"> <?php $_from = $this->_tpl_vars['lunbo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['lunbo']):
?>
              <div class="slide"><?php echo $this->_tpl_vars['lunbo']['html']; ?>
</div>
              <?php endforeach; endif; unset($_from); ?> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="redeem_top_right fr">
    <div class="redeem_top_left_h fl">TA们正在换好礼…</div>
    <ul class="redeem_rlists fl">
      <?php $_from = $this->_tpl_vars['lipin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
      <li>
        <dl class="redeem_ritems fl">
          <dt><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['pic']; ?>
"width="60" height="60"></dt>
          <dd><em><?php echo $this->_tpl_vars['v']['provinceid']; ?>
&nbsp;<?php echo $this->_tpl_vars['v']['cityid']; ?>
&nbsp;<?php echo $this->_tpl_vars['v']['username']; ?>
</em><em>兑换了<a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></em><em>花了<?php echo $this->_tpl_vars['v']['integral']; ?>
积分</em><em><?php echo $this->_tpl_vars['v']['time']; ?>
</em></dd>
        </dl>
      </li>
      <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  <script>marquee("2000",".redeem_top_right ul");</script> 
</div>
<div class="redeem_mainlists fl"> <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
  <div class="redeem_itemize redeem_blue fl"><em><?php echo $this->_tpl_vars['v']['name']; ?>
</em><a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:list,id:".($this->_tpl_vars['v']['id'])), $this);?>
">更多>></a></div>
  <div class="redeem_goods_lists fl">
    <div class="redeem_goods_top fl"> 
    <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jj'] => $this->_tpl_vars['val']):
?>
      <?php if ($this->_tpl_vars['v']['id'] == $this->_tpl_vars['val']['nid']): ?>      
      <dl class="redeem_one fl">
        <dt><a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['val']['id'])), $this);?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['val']['pic']; ?>
" width="222" 

height="248"></a></dt>
        <dd> <a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['val']['id'])), $this);?>
" class="redeem_one_h fl"><?php echo $this->_tpl_vars['val']['name']; ?>
</a>
          <div class="redeem_one_text fl"><em><font color="#f00"><?php echo $this->_tpl_vars['val']['integral']; ?>
</font> 积分</br>
            库存<?php echo $this->_tpl_vars['val']['stock']; ?>
个</em> <?php if ($this->_tpl_vars['val']['stock'] == '0'): ?> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_ydw.png"> <?php else: ?> <a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['val']['id'])), $this);?>
" class="redeem_bth fr"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/redeem_bth.png"></a> <?php endif; ?> </div>
        </dd>
      </dl>     
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?> </div>
  </div>
  <?php endforeach; endif; unset($_from); ?> </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 