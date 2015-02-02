<?php /* Smarty version 2.6.26, created on 2015-01-29 18:25:20
         compiled from admin/admin_reward_add.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script language="javascript"> 
KindEditor.ready(function(K) {
	K.create('#intro', {
		items : ['source',
		'bold', 'italic', 'underline',
		'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
		'insertunorderedlist','emoticons', 'image'],afterBlur:function(){this.sync();} 
	});
});
function checkform(myform){
	if (myform.name.value==""){
		parent.layer.msg('请填写类别名称！', 2, 8);return (false);
	} 
}
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <div class="infoboxp_top">
    <h6>添加奖品</h6>
	  <div class="infoboxp_right"> 
	<a href=" javascript:history.back(-1);" class="infoboxp_tj">类别列表</a> 
	</div>
  </div>
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form name="myform" action="index.php?m=reward&c=add" method="post" encType="multipart/form-data"  onSubmit="return checkform(this);" target="supportiframe">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr>
          <th>奖品名称：</th>
          <td><input class="input-text" type="text" name="name" size="40" value="<?php echo $this->_tpl_vars['info']['name']; ?>
"/></td>
        </tr>
        <tr class="admin_table_trbg">
          <th>奖品类别：</th>
          <td><select name="nid">
			<?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <option value="<?php echo $this->_tpl_vars['v']['id']; ?>
" <?php if ($this->_tpl_vars['v']['id'] == $this->_tpl_vars['info']['nid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr>
          <th>奖品图片：</th>
          <td><input class="input-text" type="file" name="pic" size="45">
            <?php if ($this->_tpl_vars['info']['pic'] != ""): ?><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['info']['pic']; ?>
" width="100" height="80"><?php endif; ?></td>
        </tr>
        <tr class="admin_table_trbg">
          <th>兑换积分：</th>
          <td><input class="input-text" type="text" name="integral" size="20" value="<?php echo $this->_tpl_vars['info']['integral']; ?>
"/></td>
        </tr>        
        <tr>
          <th>限购数量：</th>
          <td><input class="input-text" type="text" name="restriction" size="20" value="<?php echo $this->_tpl_vars['info']['restriction']; ?>
"/>0为不限</td>
        </tr>
        <tr class="admin_table_trbg">
          <th>库存数量：</th>
          <td><input class="input-text" type="text" name="stock" size="20" value="<?php echo $this->_tpl_vars['info']['stock']; ?>
"/></td>
        </tr>    
        <tr>
          <th>简介内容： </th>
          <td><textarea  id="intro" name="content" style="width:700px;height:300px;"><?php echo $this->_tpl_vars['info']['content']; ?>
</textarea></td>
        </tr>
        <tr class="admin_table_trbg">
          <th>排序：</th>
          <td><input class="input-text" type="text" name="sort" size="20" value="<?php echo $this->_tpl_vars['info']['sort']; ?>
"/>
            越小越在前</td>
        </tr>
        <tr >
          <th>状态：</th>
          <td>
          <input type="radio" name="status" value="1" <?php if ($this->_tpl_vars['info']['status'] != 2): ?>checked<?php endif; ?>>上架
          <input type="radio" name="status" value="2" <?php if ($this->_tpl_vars['info']['status'] == 2): ?>checked<?php endif; ?>>下架
          </td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2"> <?php if ($this->_tpl_vars['info']['id']): ?>
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['info']['id']; ?>
"/>
            <input class="admin_submit2" type="submit" name="submit" value="&nbsp;更 新&nbsp;"  />
            <?php else: ?>
            <input class="admin_submit2" type="submit" name="submit" value="&nbsp;添 加&nbsp;"  />
            <?php endif; ?>
            <input class="admin_submit2" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
	  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
  </div>
</div>
</body>
</html>