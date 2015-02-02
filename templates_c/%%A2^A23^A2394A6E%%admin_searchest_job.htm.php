<?php /* Smarty version 2.6.26, created on 2015-01-29 21:28:01
         compiled from admin/admin_searchest_job.htm */ ?>
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
    <h6>职位搜索</h6>
  </div>
  <div class="admin_table_border">
   <form action="index.php" method="get">
    <table width="100%" class="table_form" style="background:#fff;">
        <input name="m" value="admin_company_job" type="hidden">
        <input name="advanced" value="advanced" type="hidden">
        <tr class="admin_table_trbg" >
          <th>职位关键词：</th>
          <td><input type="text" name="keyword" size="30" value=""  class="company_job_text"></td>
        </tr>
        <tr >
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
        <tr class="admin_table_trbg" >
          <th>职位名称：</th>
          <td><div class=textbox>
              <select name="job1" id="job1" class="job1" lid="job1_son">
                <option value="">--请选择--</option>
                    <?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['job1'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
              <select name="job1_son" id="job1_son" class="job1" lid="job1_son1">
                <option value="">--请选择--</option>
                    <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['show']['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['va']):
?>
                <option value='<?php echo $this->_tpl_vars['va']; ?>
' <?php if ($this->_tpl_vars['show']['job1_son'] == $this->_tpl_vars['va']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['va']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
              <select name="job_post" id="job1_son1">
                <option value="">--请选择--</option>
                    <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['show']['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['val']):
?>
                <option value='<?php echo $this->_tpl_vars['val']; ?>
' <?php if ($this->_tpl_vars['show']['job_post'] == $this->_tpl_vars['val']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['val']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
            </div></td>
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
              <select name="cityid" size="1" id="cityid" class="province" lid="three_cityid">
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
              <select name="three_cityid" size="1" id="three_cityid" <?php if (! $this->_tpl_vars['show']['three_cityid']): ?> style="display:none;"<?php endif; ?>>
              <option value="">请选择城市</option>
              <?php if ($this->_tpl_vars['show']['cityid']): ?>
              <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['show']['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['three_cityid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
              </select>
            </div></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">薪水待遇：</th>
          <td><select name="salary">
              <option value="">--请选择--</option>
                <?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['salary'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr>
          <th width="120">工作性质：</th>
          <td><select name="type">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['type'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">招聘人数：</th>
          <td><select name="number">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['number'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr >
          <th width="120">工作经验：</th>
          <td><select name="exp">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['exp'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">到岗时间：</th>
          <td><select name="report">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['report'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr >
          <th width="120">性　　别：</th>
          <td><select name="sex">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['sex'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">教育程度：</th>
          <td><select name="edu">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['edu'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr >
          <th width="120">婚姻状况：</th>
          <td><select name="marriage">
              <option value="">--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['marriage'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120"></th>
          <td><input class="admin_submit2" type="submit" name="update" value="&nbsp;查　询&nbsp;" /></td>
        </tr>
        <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

    </table>
    </form>
  </div>
</div>
</body>
</html>