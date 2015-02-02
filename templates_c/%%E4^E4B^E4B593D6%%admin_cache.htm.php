<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:03
         compiled from admin/admin_cache.htm */ ?>
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

<title>后台管理</title>

</head>

<body class="body_ifm">

<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Prompt">
<div class="admin_Prompt_span">
    注意事项：
    生成请确保/plus,/cache目录有可写权限，否则无法生成。生成所有的类别，时间较长，建议分批更新
</div>
<div class="admin_Prompt_close"></div>
</div>

    <div class="infoboxp_top">

        <h6>生成缓存</h6>

    </div>

<div class="main_tag" >

<div class="tag_box">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

    <form action="index.php?m=cache&c=cache" target="supportiframe" method="post">

<table width="100%" class="table_form">



    <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

      <tr>

    	<td class="ud" align="center" style="background-color: #ffffed;">

            <?php $_from = $this->_tpl_vars['type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>

                <input type="checkbox" class="checkbox" name="cache[]" value="<?php echo $this->_tpl_vars['k']; ?>
" id="cache_<?php echo $this->_tpl_vars['k']; ?>
">

            	<label for="cache_<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</label>&nbsp;&nbsp;

            <?php endforeach; endif; unset($_from); ?>

	   </td>

      </tr>

    <tr>

    	<td class="ud" align="center">

			<input class="admin_submit4" type="submit" name="madeall" value="更新"/>&nbsp;&nbsp;

        </td>

      </tr>



  </table>
 </form>
  </div></div></div>
  <div style="clear:both"></div>

 
  <script>

$(document).ready(function(){

	$("input[name=madeall]").click(function(){

		var codewebarr="";

		$(".checkbox:checked").each(function(){

			if(codewebarr==""){codewebarr=1;}else{codewebarr++;}

		});

		if(!codewebarr){

			parent.layer.alert('至少选择一项', 8);

			return false;

		}

	})

})

</script>

</body>

</html>