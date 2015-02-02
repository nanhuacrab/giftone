<?php /* Smarty version 2.6.26, created on 2015-01-29 21:28:09
         compiled from admin/admin_company_rating.htm */ ?>
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
<div class="infoboxp_top">
<span class="admin_title_span">企业会员等级</span>
    <a href="index.php?m=admin_company_rating&c=rating" class="admin_infoboxp_tj"> 添加会员等级</a>
</div>

<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=admin_company_rating&c=del" name="myform" method="post" id='myform' target="supportiframe">
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
              </label></th>
            
            <th>编号</th>
            <th>会员名称</th>
            <th>会员模式</th>
            <th>费用</th>
            <th>购买<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
</th>
            <th>服务时间</th>
            <th>状态</th>
            <th class="admin_table_th_bg">操作</th>
          </tr>
        </thead>
        <tbody>
        
        <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
        <tr align="center"<?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?>>
          <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
          <td><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
          <td><?php if ($this->_tpl_vars['v']['type'] == 1): ?>套餐模式<?php else: ?>时间模式<?php endif; ?></td>
          <td><?php echo $this->_tpl_vars['v']['service_price']; ?>
元</td>
          <td><?php echo $this->_tpl_vars['v']['integral_buy']; ?>
</td>
          <td><?php if ($this->_tpl_vars['v']['service_time'] != ""): ?><?php echo $this->_tpl_vars['v']['service_time']; ?>
天<?php else: ?>不限<?php endif; ?></td>
          <td>
            <?php if ($this->_tpl_vars['v']['display'] == 1): ?><font color="red">可见</font><?php else: ?><font color="blue">隐藏</font><?php endif; ?>
            </td>
        <td>
        <a href="index.php?m=admin_company_rating&c=rating&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"class="admin_cz_bj">编辑</a> |
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_company_rating&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');"class="admin_cz_sc"> 删除</a></td>
         
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="8" >
            <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_submit4"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
        </tr>
          </tbody>
        
      </table>
    </form>
  </div>
</div>
</body>
</html>