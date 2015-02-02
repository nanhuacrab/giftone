<?php /* Smarty version 2.6.26, created on 2015-01-30 22:02:30
         compiled from admin/admin_company_job_show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_company_job_show.htm', 212, false),)), $this); ?>
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
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<script language="javascript">

KindEditor.ready(function(K){
	editor = K.create('#content',{
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		items : ['source',
		'bold', 'italic', 'underline',
		'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
		'insertunorderedlist','emoticons', 'image'],afterBlur:function(){this.sync();}

	});
});

var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";

</script>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <div class="infoboxp_top">
    <h6>职位详情</h6>
  </div>
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="" target="supportiframe" method="post" onSubmit="return check_form_job()">
  <table width="100%" class="table_form" style="background:#fff;">

    <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<?php if ($this->_tpl_vars['show']['id']): ?>
      <tr >
        <th>招聘编号：</th>
        <td><?php echo $this->_tpl_vars['show']['id']; ?>
</td>
      </tr>
	  <?php endif; ?>
    <tr class="admin_table_trbg" >
        <th>招聘名称：</th>
        <td><input type="text" name="name" id="name" class="input-text" size="30" value="<?php echo $this->_tpl_vars['show']['name']; ?>
"></td>
      </tr>

      <tr >
        <th>从事行业：</th>
        <td><select name="hy">
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
        <th>职位类别：</th>
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
            </select></div></td>
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
            </select></div></td>
      </tr>
    <tr class="admin_table_trbg" >
        <th width="120">薪水待遇：</th>
        <td><select name="salary">
            <?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['show']['salary'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select></td>
      </tr>
      <tr >
        <th width="120">工作性质：</th>
        <td><select name="type">
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
        <th width="120">语言要求：</th>
        <td><?php $_from = $this->_tpl_vars['comdata']['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
			<div class="job_add_y_list" style="margin-top:0px;">
			  <input type="checkbox" style="margin-top:5px;" id="lang<?php echo $this->_tpl_vars['v']; ?>
" value='<?php echo $this->_tpl_vars['v']; ?>
' name="lang[]" <?php if ($this->_tpl_vars['show']['lang'] && in_array ( $this->_tpl_vars['v'] , $this->_tpl_vars['show']['lang'] )): ?>checked<?php endif; ?> class="job_add_check_box" />
			  <label for="lang<?php echo $this->_tpl_vars['v']; ?>
" ><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</label>
			</div>
			<?php endforeach; endif; unset($_from); ?>
			</td>
      </tr>
      <tr >
        <th width="120">福利待遇：</th>
        <td>
		 <?php $_from = $this->_tpl_vars['comdata']['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
		<div class="job_add_y_list" style="margin-top:0px; ">
		  <input type="checkbox" style="margin-top:5px;" value='<?php echo $this->_tpl_vars['v']; ?>
' id="welfare<?php echo $this->_tpl_vars['v']; ?>
" name="welfare[]" <?php if ($this->_tpl_vars['show']['welfare'] && in_array ( $this->_tpl_vars['v'] , $this->_tpl_vars['show']['welfare'] )): ?>checked<?php endif; ?> class="job_add_check_box">
		  <label for="welfare<?php echo $this->_tpl_vars['v']; ?>
" ><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</label>
		</div>
		<?php endforeach; endif; unset($_from); ?>
		</td>
      </tr>
  <tr class="admin_table_trbg" >
        <th width="120">描述职位：</th>
        <td><textarea  name="content" cols="70" rows="8" id="content"><?php echo $this->_tpl_vars['show']['description']; ?>
</textarea></td>
       </tr>
  <tr class="admin_table_trbg" >
        <th width="120">结束日期：</th>
        <td><link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
          <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
          <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
          <input id="edate" class="input-text" type="text" readonly size="15" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['show']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" name="edate">
          <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "edate",
        trigger : "edate",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script></td>
      </tr>
     <tr>
        <th width="120">浏览次数：</th>
        <td><input type="text" class="input-text" name="jobhits" size="10" value="<?php echo $this->_tpl_vars['show']['jobhits']; ?>
"></td>
      </tr>
	  <?php if ($this->_tpl_vars['show']['id']): ?>
      <tr class="admin_table_trbg" >
        <th width="120">状　　态：</th>
        <td><?php if ($this->_tpl_vars['show']['edate'] < time ( )): ?><font color="orange">已过期</font><?php elseif ($this->_tpl_vars['show']['state'] == 1): ?><font color="blue">已审核</font><?php elseif ($this->_tpl_vars['show']['state'] == 3): ?><font color="red">未通过</font><?php else: ?><font color="red">未审核</font><?php endif; ?></td>
      </tr>
	  <?php endif; ?>
	<tr>
        <th width="120"></th>
        <td>
			<?php if ($this->_tpl_vars['show']['id']): ?>
			<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['show']['id']; ?>
">
          <input class="admin_submit4" type="submit" name="update" value="&nbsp;修 改&nbsp;" />
		  <?php else: ?> <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['uid']; ?>
"><input class="admin_submit4" type="submit" name="update" value="&nbsp;保 存&nbsp;" /><?php endif; ?>
		  </td>
      </tr>
  </table>
   </form>
</div>
</div>
</body>
</html>