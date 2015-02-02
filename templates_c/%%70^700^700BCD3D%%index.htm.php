<?php /* Smarty version 2.6.26, created on 2015-01-29 18:40:08
         compiled from default/hr/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/hr/index.htm', 24, false),)), $this); ?>
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
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/news.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_body">
<div class="yun_content">
<div class="current_Location icon com_current_Location png"><div class="fl">您当前的位置：<a href="index.php">首页</a> > <a href="<?php echo smarty_function_url(array('m' => 'hr'), $this);?>
">工具箱</a></div></div>
<div class="clear"></div>
<div class="Toolbox_left">
<div class="Toolbox_h1">HR必备工具</div>
<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
<div class="Toolbox_list">
<div class="Toolbox_list_img"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['list']['pic']; ?>
" width="72" height="72"></div>
<div class="Toolbox_list_cont">
<div class="Toolbox_list_h1"><a href="<?php echo smarty_function_url(array('m' => 'hr','url' => "c:list,id:".($this->_tpl_vars['list']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['list']['name']; ?>
"><?php echo $this->_tpl_vars['list']['name']; ?>
</a></div>
<div class="Toolbox_list_p"><?php echo $this->_tpl_vars['list']['content']; ?>
</div>
</div>
<div class="Toolbox_list_r"><a href="<?php echo smarty_function_url(array('m' => 'hr','url' => "c:list,id:".($this->_tpl_vars['list']['id'])), $this);?>
" class="Toolbox_list_more">查看更多</a></div>
</div>
<?php endforeach; endif; unset($_from); ?>
</div>
<div class="Toolbox_right">
<div class="Toolbox_right_box">
<div class="Toolbox_search">
<form action="index.php" method="get" onsubmit="return checkkey();">
<input type="hidden" name="m" value="hr" />
<input type="hidden" name="c" value="list" />
<input type="text" name="key" value="请输入关键字" class="Toolbox_search_text" onblur="if(this.value==''){this.value='请输入关键字'}" onclick="if(this.value=='请输入关键字'){this.value=''}" >
<input type="submit" value="搜索" class="Toolbox_search_sub">
</form>
</div>
<div class="Toolbox_Ranking_h1">下载排行</div>
<ul class="Toolbox_Ranking_list">
<?php $_from = $this->_tpl_vars['down']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['down']):
?>
<li><span class="Ranking_no <?php if ($this->_tpl_vars['key'] < 3): ?>Ranking_no_mc<?php endif; ?>"><?php echo $this->_tpl_vars['key']+1; ?>
</span>
<em class="Ranking_name"><?php echo $this->_tpl_vars['down']['name']; ?>
</em><em class="Ranking_cs"><?php echo $this->_tpl_vars['down']['downnum']; ?>
</em><a href="javascript:downhr('<?php echo $this->_tpl_vars['down']['id']; ?>
');" class="Toolbox_down">下载</a></li>
<?php endforeach; endif; unset($_from); ?>
       <?php if (! $this->_tpl_vars['down']): ?>
	   暂无下载
	   <?php endif; ?>
</ul>
</div>
<div class="Toolbox_right_box m10">
<div class="Toolbox_Ranking_h1">最新上传</div>
<ul class="Toolbox_Ranking_list Toolbox_Ranking_list_new">
<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
<li><span class="Toolbox_down_span" ><?php echo $this->_tpl_vars['news']['name']; ?>
</span><a href="javascript:downhr('<?php echo $this->_tpl_vars['news']['id']; ?>
');" class="Toolbox_down">下载</a></li>
<?php endforeach; endif; unset($_from); ?>
       <?php if (! $this->_tpl_vars['news']): ?>
	   暂无上传文件
	   <?php endif; ?>
</ul>
</div>
</div>
</div>
</div>
<script>
function downhr(id){
	$.post("index.php?m=hr&c=ajax",{id:id},function(data){
		window.location.href=data;
	})
}
function checkkey(){
	var keyword=$("input[name=key]").val();
	if(keyword=="" || keyword=="请输入关键字"){
		layer.msg('请输入关键字！', 2, 8);return false;
	}
}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>