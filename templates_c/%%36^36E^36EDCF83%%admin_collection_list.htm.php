<?php /* Smarty version 2.6.26, created on 2015-01-31 10:56:06
         compiled from admin/admin_collection_list.htm */ ?>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/member_public.js"></SCRIPT>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
</head>
<script>var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"; </script>
<body class="body_ifm">
<div class="infoboxp" style="position:relative;">

<div class="admin_Prompt" style="margin-top:5px;">
<div class="admin_Prompt_span">
        <b>提示：</b>采集前务必设置自己的接口密码，以免被其他人利用。<br>
          <b>注意：</b>这里所设置的参数，只作为没有值的情况下使用，若采集软件有值传输，会优先使用传输值。
</div><div class="admin_Prompt_close" style="top:18px; right:18px;"></div></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute; z-index:10000"></div>
<div class="main_tag" >
<div class="admin_h1_bg"> 
<span class="infoboxp_top_span infoboxp_top_wz">采集设置</span>
<ul>
	<li class="on">采集设置</li>
    <li>新闻设置</li>
    <li>职位设置</li>
    <li>公司设置</li>
    <li>个人设置</li>
    <li>简历设置</li>
    <li>帐号设置</li>
</ul>
</div>
<div class="clear"></div>
<div class="tag_box">
<div>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form action="index.php?m=collection&c=save" method="post" enctype= "multipart/form-data" target="supportiframe">
<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="99%" class="table_form">
<tr class="admin_table_trbg">
    <th width="160">参数说明：</th>
    <td >参数值</td>
    <td width="160">变量</td>
</tr>
<tr>
		<th width="160">采集状态：</th>
		<td>
            <input type="radio" name="locoy_online" value="1" id="online_1" <?php if ($this->_tpl_vars['locoyinfo']['locoy_online'] == '1'): ?>checked<?php endif; ?>>
            <label for="online_1">开启</label>&nbsp;
            <input type="radio" name="locoy_online" value="2" id="online_2" <?php if ($this->_tpl_vars['locoyinfo']['locoy_online'] == '2'): ?>checked<?php endif; ?>>
            <label for="online_2">关闭</label>
        </td>
        <td width="160">locoy_online</td>
	</tr>
    <tr class="admin_table_trbg">
    	<th width="160">接口密码：</th>
		<td>
          <input type="text" class="input-text" name="locoy_key" id='locoy_key' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_key']; ?>
"> <font color="gray" style="display:none">如：123qwe123</font>
        </td>
        <td width="160">locoy_key</td>
    </tr>
     <tr>
    	<th width="160">匹配精准度：</th>
		<td>
          <input type="text" class="input-text" name="locoy_rate" id='locoy_rate' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_rate']; ?>
"> <font color="gray" style="display:none">如：60</font>
        </td>
        <td width="160">locoy_rate</td>
    </tr>
	<tr class="admin_table_trbg">
		<td colspan="3" align="center">
        <input class="admin_submit4" id="config" type="submit" name="config" value="提交">&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置"/></td>
	</tr>
</table>
</form>
</div>
<div class="hiddendiv">
    <form action="index.php?m=collection&c=save" method="post" target="supportiframe">
    <table width="100%" class="table_form">
      <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
	<tr>
		<th width="160">自动提动关键字：</th>
		<td>
        	<input type="radio" name="locoy_keyword" value="1" id="key_1" <?php if ($this->_tpl_vars['locoyinfo']['locoy_keyword'] == '1'): ?>checked<?php endif; ?>>
            <label for="key_1">是</label>&nbsp;
            <input type="radio" name="locoy_keyword" value="2" id="key_2" <?php if ($this->_tpl_vars['locoyinfo']['locoy_keyword'] == '2'): ?>checked<?php endif; ?>>
            <label for="key_2">否</label> <font color="gray"  style="display:">注：只有在没有参数传输的才起作用</font>
        </td>
        <td width="160">locoy_keyword</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">浏览数随机范围：</th>
		<td>
        <input type="text" class="input-text tips_class" id='locoy_rand' name="locoy_rand"  value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_rand']; ?>
">
        <font color="gray"  style="display:">如：0-100，默认为0</font></td>
        <td width="160">locoy_rand</td>
	</tr>
    <tr>
		<th width="160">排序随机范围：</th>
		<td>
        <input type="text" class="input-text tips_class" name="locoy_sort" id='locoy_sort' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_sort']; ?>
">
        <font color="gray"  style="display:">如：0-100，默认为0</font></td>
        <td width="160">locoy_sort</td>
	</tr>
    <tr class="admin_table_trbg">
        <td colspan="3" align="center">
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" id="otherconfig" type="submit" name="otherconfig" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
    </tr>
    </table>
    </form>
</div>
<div class="hiddendiv">
    <form action="index.php?m=collection&c=save" method="post" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    <tr>
		<th width="160">职位状态：</th>
		<td>
        	<input type="radio" name="locoy_job_status" value="1" id="key_1" <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_status'] == '1'): ?>checked<?php endif; ?>>
            <label for="key_1">已通过</label>&nbsp;
            <input type="radio" name="locoy_job_status" value="2" id="key_2" <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_status'] == '2'): ?>checked<?php endif; ?>>
            <label for="key_2">未审核</label>
        </td>
        <td width="160">locoy_job_status</td>
	</tr>
        <tr class="admin_table_trbg">
		<th width="160">职位有效期：</th>
		<td>开始：
          <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
        <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
        <input id="ad_start" class="input-text" type="text" readonly size="20" value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_job_sdate']; ?>
" name="locoy_job_sdate">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "ad_start",
        trigger : "ad_start",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script>
          结束：
        <input id="ad_end" class="input-text" type="text" readonly size="20" value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_job_edate']; ?>
" name="locoy_job_edate">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "ad_end",
        trigger : "ad_end",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script>
            </td>
             <td width="200">locoy_job_sdate/locoy_job_edate</td>
		</tr>
		<tr>
		<th width="160">从事行业无法匹配为：</th>
		<td><select name="locoy_job_hy" id="hy">
                 <option value='0' selected>--请选择--</option>
                <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                     <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
             <td width="160">locoy_job_hy</td>
		</tr>
        <tr class="admin_table_trbg">
		<th width="160">职位类别无法匹配为：</th>
		<td><select name="locoy_job_job1" id="job1" class="job1" lid="job1_son">
                  <option value="">--请选择--</option>
                 <?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_job1'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
                <select name="locoy_job1_son" id="job1_son" class="job1" lid="job1_son1">
                  <option value="">--请选择--</option>
                  <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['locoyinfo']['locoy_job_job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['va']):
?>
               <option value='<?php echo $this->_tpl_vars['va']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job1_son'] == $this->_tpl_vars['va']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['va']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
               </select>
                <select name="locoy_job_post" id="job1_son1">
                  <option value="">--请选择--</option>
                  <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['locoyinfo']['locoy_job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['val']):
?>
                   <option value='<?php echo $this->_tpl_vars['val']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_post'] == $this->_tpl_vars['val']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['val']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
               </select>
            </td>
             <td width="280">locoy_job_job1/locoy_job1_son/locoy_job_post</td>
		</tr>
        <tr>
		<th width="160">地区无法匹配为：</th>
		<td>
            <select name="locoy_job_province" id="provinceid" class="province" lid="cityid">
              <option value="">请选择省份</option>
              <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_province'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
             <?php endforeach; endif; unset($_from); ?>
            </select>
            <select name="locoy_job_city" size="1" id="cityid" class="province" lid="three_cityid">
              <option value="">请选择城市</option>
               <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_province']): ?>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['locoyinfo']['locoy_job_province']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_city'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
               <?php endif; ?>
            </select>
            <select name="locoy_job_three" size="1" id="three_cityid" <?php if (! $this->_tpl_vars['locoyinfo']['locoy_job_three']): ?> style="display:none;"<?php endif; ?>>
                <option value="">请选择城市</option>
                <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_province']): ?>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['locoyinfo']['locoy_job_city']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_three'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </select>
            </td>
             <td width="300">locoy_job_province/locoy_job_city/locoy_job_three</td>
		</tr>
        <tr class="admin_table_trbg">
		<th width="160">招聘人数无法匹配为：</th>
		<td><select name="locoy_com_number">
                <?php $_from = $this->_tpl_vars['comdata']['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_number'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                 </select>
            </td>
             <td width="160">locoy_job_number</td>
		</tr>
        <tr>
		<th width="160">薪水待遇无法匹配为：</th>
		<td><select name="locoy_com_salary">
				<?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                  <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_salary'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
              	<?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_salary</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">工作经验无法匹配为：</th>
		<td> <select name="locoy_job_exp">
                <?php $_from = $this->_tpl_vars['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_exp'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_exp</td>
		</tr>
         <tr>
		<th width="160">到岗时间无法匹配为：</th>
		<td><select name="locoy_job_report">
                <?php $_from = $this->_tpl_vars['comdata']['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_report'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_report</td>
		</tr>
        <tr class="admin_table_trbg">
		<th width="160">年龄要求无法匹配为：</th>
		<td> <select name="locoy_job_age">
                <?php $_from = $this->_tpl_vars['comdata']['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_age'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_age</td>
		</tr>
         <tr>
		<th width="160">工作性质无法匹配为：</th>
		<td><select name="locoy_job_type">
                <?php $_from = $this->_tpl_vars['comdata']['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                     <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_type'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_type</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">性别无法匹配为：</th>
		<td><select name="locoy_job_sex" id="sexbyid">
                <?php $_from = $this->_tpl_vars['comdata']['job_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_sex'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
				</select>
            </td>
             <td width="160">locoy_job_sex</td>
		</tr>
         <tr>
		<th width="160">教育程度无法匹配为：</th>
		<td><select name="locoy_job_edu">
                <?php $_from = $this->_tpl_vars['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_edu'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_edu</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">婚姻状况无法匹配为：</th>
		<td><select name="locoy_job_marriage">
                    <?php $_from = $this->_tpl_vars['comdata']['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_marriage'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
             <td width="160">locoy_job_marriage</td>
		</tr>
        <tr>
            <td colspan="3" align="center">
			<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
            <input class="admin_submit4" id="codeconfig" type="submit" name="codeconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>
    </form>
</div>
<div class="hiddendiv">
    <form action="index.php?m=collection&c=save" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>

        <tr>
		<th width="160">从事行业无法匹配为：</th>
		<td><select name="locoy_com_hy" id="hy">
                 <option value='0' selected>--请选择--</option>
                <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                     <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_com_hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
             <td width="160">locoy_com_hy</td>
		</tr>
        <tr class="admin_table_trbg">
		<th width="160">企业性质无法匹配为：</th>
		<td><select name="locoy_com_pr" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_com_pr'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
            </td>
             <td width="160">locoy_com_pr</td>
		</tr>
         <tr>
		<th width="160">企业地址无法匹配为：</th>
		<td><select name="locoy_com_province" id="provinceid" class="province" lid="city1id">
            <option value="">请选择省份</option>
            <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_com_province'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
          <select name="locoy_com_city" size="1" id="city1id" class="province" lid="three_cityid">
            <option value="">请选择城市</option>
            <?php if ($this->_tpl_vars['locoyinfo']['locoy_com_province']): ?>
			<?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['locoyinfo']['locoy_com_province']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_com_city'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
          </select>
            </td>
             <td width="250">locoy_com_province/locoy_com_city</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">企业规模无法匹配为：</th>
		<td> <select name="locoy_com_mun">
			<?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['mun'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
            </td>
             <td width="160">locoy_com_mun</td>
		</tr>
		<tr>
		<th width="160">注册资金无值为：</th>
		<td>
        <input type="text" class="input-text" name="locoy_com_money"  value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_com_money']; ?>
">
        <font color="gray">万元 如：0-10000，默认为0</font></td>
        <td width="160">locoy_com_money</td>
		</tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
			<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
            <input class="admin_submit4"  type="submit" name="waterconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>
    </form>
</div>

<div class="hiddendiv">
    <form action="index.php?m=collection&c=save" method="post" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th>参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    <tr>
		<th width="160">性别无法匹配为：</th>
		<td>
        <select name="locoy_user_sex" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_sex'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </td>
        <td width="160">locoy_user_sex</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">婚姻无法匹配为：</th>
		<td>
        <select name="locoy_user_marriage" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_marriage'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </td>
        <td width="160">locoy_user_marriage</td>
	</tr>
    <tr>
		<th width="160">教育程度无法匹配为：</th>
		<td>
        <select name="locoy_user_edu" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_edu'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </td>
        <td width="160">locoy_user_edu</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">工作经验无法匹配为：</th>
		<td>
        	<select name="locoy_user_exp" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_exp'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </td>
        <td width="160">locoy_user_exp</td>
	</tr>
    <tr>
		<th width="160">民族无法匹配为：</th>
		<td>
        	<input type="text" class="input-text" name="locoy_user_nationality" id='locoy_user_nationality' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_user_nationality']; ?>
">
        <font color="gray"  style="display:none">如：汉族</font>
        </td>
        <td width="160">locoy_user_nationality</td>
	</tr>
    <tr class="admin_table_trbg">
        <td colspan="3" align="center">
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" id="mapconfig" type="submit" name="userconfig" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
    </tr>
    </table>
    </form>
</div>
<div class="hiddendiv">
    <form action="index.php?m=collection&c=save" method="post" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th>参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
		<tr>
		<th>期望从事行业无法匹配为：</th>
		<td><select name="locoy_resume_hy" id="hy">
                 <option value='0' selected>--请选择--</option>
                <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                     <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            </td>
             <td width="160">locoy_resume_hy</td>
		</tr>



       <tr class="admin_table_trbg">
		<th width="180">期望从事职位无法匹配为：</th>
		<td><select name="locoy_resume_job1" id="job1" class="job1" lid="resume_job1_son">
                  <option value="">--请选择--</option>
                 <?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_job1'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
                <select name="locoy_resume_son" id="resume_job1_son" class="job1" lid="resume_job1_son1">
                  <option value="">--请选择--</option>
                  <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['locoyinfo']['locoy_job_job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['va']):
?>
               <option value='<?php echo $this->_tpl_vars['va']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_son'] == $this->_tpl_vars['va']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['va']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
               </select>
                <select name="locoy_resume_post" id="resume_job1_son1">
                  <option value="">--请选择--</option>
                  <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['locoyinfo']['locoy_job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['val']):
?>
                   <option value='<?php echo $this->_tpl_vars['val']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_post'] == $this->_tpl_vars['val']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['val']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
               </select>
            </td>
             <td width="280">locoy_resume_job1/locoy_resume_son/locoy_resume_post</td>
		</tr>
        <tr>
		<th width="180">期望工作地点无法匹配为：</th>
		<td>
            <select name="locoy_resume_province" id="provinceid" class="province" lid="resume_cityid">
              <option value="">请选择省份</option>
              <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_province'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
             <?php endforeach; endif; unset($_from); ?>
            </select>
            <select name="locoy_resume_city" size="1" id="resume_cityid" class="province" lid="resume_three_cityid">
              <option value="">请选择城市</option>
               <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_province']): ?>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['locoyinfo']['locoy_resume_province']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_city'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
               <?php endif; ?>
            </select>
            <select name="locoy_resume_three" size="1" id="resume_three_cityid" <?php if (! $this->_tpl_vars['locoyinfo']['locoy_job_three']): ?> style="display:none;"<?php endif; ?>>
                <option value="">请选择城市</option>
                <?php if ($this->_tpl_vars['locoyinfo']['locoy_job_province']): ?>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['locoyinfo']['locoy_resume_city']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_resume_three'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </select>
            </td>
             <td width="300">locoy_resume_province/locoy_resume_city/locoy_resume_three</td>
		</tr>


    <tr class="admin_table_trbg">
		<th>期望月薪水无法匹配为：</th>
		<td>
        <select name="locoy_user_salary" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_salary'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </td>
        <td width="160">locoy_user_salary</td>
	</tr>
    <tr>
		<th>到岗时间无法匹配为：</th>
		<td>
        <select name="locoy_user_report" id="pr">
            <option value='0' selected>--请选择--</option>
			<?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_report'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </td>
        <td width="160">locoy_user_report</td>
	</tr>
	 <tr class="admin_table_trbg">
		<th width="160">浏览数随机范围：</th>
		<td>
        <input type="text" class="input-text tips_class" id='locoy_resume_rand' name="locoy_resume_rand"  value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_resume_rand']; ?>
">
        <font color="gray"  style="display:">如：0-100，默认为0</font></td>
        <td width="160">locoy_resume_rand</td>
	</tr>
    <tr>
        <td colspan="3" align="center">
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" id="mapconfig" type="submit" name="resumeconfig" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
    </tr>
    </table>
    </form>
</div>


<div class="hiddendiv">
    <form action="index.php?m=collection&c=save" method="post" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th>参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    <tr>
		<th>生成用户名长度：</th>
		<td>
        <input type="text" class="input-text" name="locoy_length" id='locoy_length' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_length']; ?>
">
        <font color="gray"  style="display:none">如：8</font>
        </td>
        <td width="160">locoy_length</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>生成用户名前缀：</th>
		<td>
        <input type="text" class="input-text" name="locoy_name" id='locoy_name' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_name']; ?>
">
        <font color="gray"  style="display:none">如：user  加随机字符</font>
        </td>
        <td width="160">locoy_name</td>
	</tr>
    <tr>
		<th>生成指定密码：</th>
		<td>
        <input type="text" class="input-text"  name="locoy_pwd" id='locoy_pwd' value="<?php echo $this->_tpl_vars['locoyinfo']['locoy_pwd']; ?>
">
        <font color="gray"  style="display:none">如：123456</font>
        </td>
        <td width="160">locoy_pwd</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>用户状态：</th>
		<td>
        	<input type="radio" name="locoy_user_status" value="1" id="user_1" <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_status'] == '1'): ?>checked<?php endif; ?>>
            <label for="user_1">已审核</label>&nbsp;
            <input type="radio" name="locoy_user_status" value="2" id="user_2" <?php if ($this->_tpl_vars['locoyinfo']['locoy_user_status'] == '2'): ?>checked<?php endif; ?>>
            <label for="user_2">未审核</label>
        </td>
        <td width="160">locoy_user_status</td>
	</tr>
    <tr>
		<th>企业会员等级：</th>
         <?php if (is_array ( $this->_tpl_vars['qy_rows'] )): ?>
		<td>
        	<?php $_from = $this->_tpl_vars['qy_rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		    <input type="radio" name="locoy_rating" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" id="rating_<?php echo $this->_tpl_vars['row']['id']; ?>
" <?php if ($this->_tpl_vars['locoyinfo']['locoy_rating'] == $this->_tpl_vars['row']['id']): ?>checked<?php endif; ?>>
		    <label for="rating_<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['row']['name']; ?>
</label>&nbsp;&nbsp;
		    <?php endforeach; endif; unset($_from); ?>
        </td>
        <?php else: ?>
          <td>
        	暂无等级，<a href="index.php?m=userconfig&c=comclass" style="color:red;">添加会员等级</a>
            <input type="hidden" name="locoy_rating" value="0">
        	</td>
        <?php endif; ?>
        <td width="160">locoy_rating</td>
	</tr>
    <tr class="admin_table_trbg">
        <td colspan="3" align="center">
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" id="mapconfig" type="submit" name="mapconfig" value="提交" />&nbsp;&nbsp;
        <input class="admin_submit4" type="reset" value="重置" /></td>
    </tr>
    </table>
    </form>
</div>
</div>
</div>

	<script>
        var $switchtag = $("div.main_tag ul li");
        $switchtag.click(function(){
            $(this).addClass("on").siblings().removeClass("on");
            var index = $switchtag.index(this);
            $("div.tag_box > div").eq(index).show().siblings().hide();
        });
    </script>
</div>
</body>
</html>