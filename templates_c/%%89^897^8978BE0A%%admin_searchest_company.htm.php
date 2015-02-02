<?php /* Smarty version 2.6.26, created on 2015-01-29 21:28:01
         compiled from admin/admin_searchest_company.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="js/check_public.js"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <div class="infoboxp_top">
    <h6>公司搜索</h6>
</div>
  <div class="admin_table_border">
   <form action="index.php" method="get">
    <table width="100%" class="table_form" style="background:#fff;">

        <input name="m" value="admin_company" type="hidden">
        <input name="advanced" value="advanced" type="hidden">
        <tr>
          <th>公司关键词：</th>
          <td><input type="text" name="keywords" size="30" value="" class="company_job_text"></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>从事行业：</th>
          <td><select name="hy">
              <option value="">--请选择--</option>
                <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr >
          <th>工作地点：</th>
          <td><div class=textbox>
              <select name="provinceid" id="provinceid" class="province" lid="cityid">
                <option value="">请选择省份</option>
                    <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['provinceid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
              <select name="cityid" size="1" id="cityid" class="province">
                <option value="">请选择城市</option>
                    <?php if ($this->_tpl_vars['show']['provinceid']): ?>
                    <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['show']['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['cityid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
              </select>
            </div></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">企业性质：</th>
          <td><select name="pr" id="pr">
              <option value='' selected>--请选择--</option>
                    <?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['pr'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr>
          <th width="120">企业规模：</th>
          <td><select name="mun">
              <option value='' selected>--请选择--</option>
                <?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['mun'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120"></th>
          <td><input class="admin_submit4" type="submit" name="update" value="查询" /></td>
        </tr>
        <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

    </table>
    </form>
  </div>
</div>
</body>
</html>