<?php /* Smarty version 2.6.26, created on 2015-02-01 04:20:26
         compiled from default/redeem/list.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/redeem/list.htm', 31, false),)), $this); ?>
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
  <div class="redeem_mainlists fl">
    <div class="redeem_goods fl">
      <dl class="redeem_goods_items fl">
        <dt>商品类别：</dt>
        <dd>
          <ul>
            <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <li><a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:list,id:".($this->_tpl_vars['v']['id'])), $this);?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a> 丨 </li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </dd>
      </dl>
    </div>
    <div class="redeem_goods_lists fl">
      <div class="redeem_goods_top fl"> <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        <dl class="redeem_one fl">
          <dt><a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['v']['pic']; ?>
" width="222" height="248"></a></dt>
          <dd> <a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
" class="redeem_one_h fl"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
            <div class="redeem_one_text fl"><em><font color="#f00"><?php echo $this->_tpl_vars['v']['integral']; ?>
</font> 积分</br>
              库存<?php echo $this->_tpl_vars['v']['stock']; ?>
个</em> <?php if ($this->_tpl_vars['v']['stock'] == '0'): ?> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_ydw.png"> <?php else: ?> <a href="<?php echo smarty_function_url(array('m' => 'redeem','url' => "c:show,id:".($this->_tpl_vars['v']['id'])), $this);?>
" class="redeem_bth fr"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/redeem_bth.png"></a> <?php endif; ?> </div>
          </dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?>
        <div class="clear"></div>
        <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
      </div>
    </div>
  </div>
</div>
<!--content  end--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 