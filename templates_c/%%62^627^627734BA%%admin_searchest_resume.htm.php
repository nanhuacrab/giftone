<?php /* Smarty version 2.6.26, created on 2015-01-29 21:37:40
         compiled from admin/admin_searchest_resume.htm */ ?>
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
<title>��̨����</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <div class="infoboxp_top">
    <h6>��������</h6>
	</div>
  <div class="admin_table_border">
   <form action="" method="get">
    <table width="100%" class="table_form" style="background:#fff;">

        <input name="m" value="admin_resume" type="hidden">
        <input name="advanced" value="advanced" type="hidden">
        <tr class="admin_table_trbg" >
          <th>�����ؼ��ʣ�</th>
          <td><input type="text" name="keyword" size="30" value="" class="company_job_text"></td>
        </tr>
        <tr >
          <th>������ҵ��</th>
          <td><select name="hy">
              <option value="">--��ѡ��--</option>
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
          <th>����ְλ��</th>
          <td><div class=textbox>
              <select name="job1" id="job1" class="job1" lid="job1_son">
                <option value="">--��ѡ��--</option>
                    <?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['job1'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
              <select name="job1_son" id="job1_son" class="job1" lid="job1_son1">
                <option value="">--��ѡ��--</option>
                    <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['show']['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['va']):
?>
                <option value='<?php echo $this->_tpl_vars['va']; ?>
' <?php if ($this->_tpl_vars['show']['job1_son'] == $this->_tpl_vars['va']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['va']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
              <select name="job_post" id="job1_son1">
                <option value="">--��ѡ��--</option>
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
        <tr>
          <th>�����ص㣺</th>
          <td><div class=textbox>
              <select name="provinceid" id="provinceid" class="province" lid="cityid">
                <option value="">��ѡ��ʡ��</option>
                    <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['provinceid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
              </select>
              <select name="cityid" size="1" id="cityid" class="province" lid="three_cityid">
                <option value="">��ѡ�����</option>
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
              <option value="">��ѡ�����</option>
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
          <th width="120">нˮ������</th>
          <td><select name="salary" id="salary">
              <option value="">--��ѡ��--</option>
            <?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['salary'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr>
          <th width="120">�������ʣ�</th>
          <td><select name="type">
              <option value="">--��ѡ��--</option>
            <?php $_from = $this->_tpl_vars['userdata']['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['type'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">�������飺</th>
          <td><select name="exp">
              <option value="">--��ѡ��--</option>
            <?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['exp'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr >
          <th width="120">����ʱ�䣺</th>
          <td><select name="report">
              <option value="">--��ѡ��--</option>
            <?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['report'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr  class="admin_table_trbg">
          <th width="120">�ԡ�����</th>
          <td><select name="sex">
              <option value="">--��ѡ��--</option>
            <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['sex'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr >
          <th width="120">�����̶ȣ�</th>
          <td><select name="edu">
              <option value="">--��ѡ��--</option>
            <?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['edu'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">����״����</th>
          <td><select name="marriage">
              <option value="">--��ѡ��--</option>
        <?php $_from = $this->_tpl_vars['userdata']['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['marriage'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
            </select></td>
        </tr>
        <tr>
          <th width="120"></th>
          <td><input class="subbut" type="submit" name="update" value="&nbsp;�顡ѯ&nbsp;" /></td>
        </tr>
        <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">

    </table>
    </form>
  </div>
</div>
</body>
</html>