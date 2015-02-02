<?php /* Smarty version 2.6.26, created on 2015-02-01 04:26:01
         compiled from wap/comsearch.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="get" action="index.php">
<input type="hidden" name="m" value="com" />
<div class="com_search_box">
<div class="job_search_box">
<div class="job_input_box"><input type="text" value="" placeholder="请输入关键字" name="keyword"  class="job_input_box_search " ></div>
	<div class="job_search_box_button">
		<button id="cityclassbutton" type="button" onclick="checkshowjob('city');">请选择工作地区</button>
		<div class="job_search_box_city" style="display:none; float:left;width:100%;height:auto; z-index:100; position:absolute; background-color:#FFF;">
        	<ul>
            	<?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchcity 0" cityid="<?php echo $this->_tpl_vars['v']; ?>
" parentid="0"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</li>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['v']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v1']):
?>
                <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchcity1 <?php echo $this->_tpl_vars['v']; ?>
" cityid="<?php echo $this->_tpl_vars['v1']; ?>
" parentid="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v1']]; ?>
</li>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['v1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v2']):
?>
                <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchcity2 <?php echo $this->_tpl_vars['v1']; ?>
" cityid="<?php echo $this->_tpl_vars['v2']; ?>
" parentid="<?php echo $this->_tpl_vars['v1']; ?>
"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v2']]; ?>
</li>
                <?php endforeach; endif; unset($_from); ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php endforeach; endif; unset($_from); ?> 
           	</ul>
    	</div>
        <input type="hidden" name="provinceid" id="provinceid" value="" />
        <input type="hidden" name="cityid" id="cityid" value="" />
        <input type="hidden" name="three_cityid" id="three_cityid" value="" />
        
</div>
<div class="job_search_box_button">
<button id="jobclassbutton" type="button" onclick="checkshowjob('job');">请选择职位类别</button>
		<div class="job_search_box_jobclass" style="display:none; float:left;width:100%;height:auto; z-index:100; position:absolute; background-color:#FFF;">
        	<ul>
            	<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchjobclass 0" jobclassid="<?php echo $this->_tpl_vars['v']; ?>
" parentid="0"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</li>
                <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['v']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v1']):
?>
                <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchjobclass1 <?php echo $this->_tpl_vars['v']; ?>
" jobclassid="<?php echo $this->_tpl_vars['v1']; ?>
" parentid="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v1']]; ?>
</li>
                <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['v1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v2']):
?>
                <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchjobclass2 <?php echo $this->_tpl_vars['v1']; ?>
" jobclassid="<?php echo $this->_tpl_vars['v2']; ?>
" parentid="<?php echo $this->_tpl_vars['v1']; ?>
"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v2']]; ?>
</li>
                <?php endforeach; endif; unset($_from); ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php endforeach; endif; unset($_from); ?> 
           	</ul>
    	</div>
        <input type="hidden" name="job1" id="job1" value="" />
        <input type="hidden" name="job1_son" id="job1_son" value="" />
        <input type="hidden" name="job_post" id="job_post" value="" />
        <input type="hidden" name="job_classid" id="job_classid" value="" />
</div>
</div>
</div>
<div class="com_search_box">
 <div class="com_search_box_cont">
  <div class="com_search_box_list">
    <div class="com_search_box_left"> 行业类别： </div> 
    <div class="com_search_box_right">
     <div class="selectOption" style="width: 100%">
				     <select name="hy">
				<option value="">请选择</option>        
				<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				<option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($_GET['hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>               <?php endforeach; endif; unset($_from); ?> 
			  </select>
			 </div>  
			 </div> 
		   </div> 	
  <div class="com_search_box_list">
    <div class="com_search_box_left"> 公司性质： </div> 
     <div class="com_search_box_right">
      <div class="selectOption" style="width: 100%">
				<select name="pr" id='pr'>
					<option value="">请选择</option>
					<?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pr']):
?>
					<option value="<?php echo $this->_tpl_vars['pr']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['pr']]; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			 </div>  
		   </div> 
		 </div> 
<div class="com_search_box_list">
  <div class="com_search_box_left"> 公司规模： </div> 
    <div class="com_search_box_right">
      <div class="selectOption" style="width: 100%">
			<select name="num" id='num'>
				<option value="">请选择</option>
				<?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num']):
?>
				<option value="<?php echo $this->_tpl_vars['num']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['num']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
		    </select>
			 </div>  
			 </div> 
		   </div> 	
  <div class="com_search_box_list">
    <div class="com_search_box_left"> 工作经验： </div> 
     <div class="com_search_box_right">
      <div class="selectOption" style="width: 100%">
		 <select name="exp" id='exp'>
					<option value="">请选择</option>
					<?php $_from = $this->_tpl_vars['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['exp']):
?>
					<option value="<?php echo $this->_tpl_vars['exp']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['exp']]; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
			</select>
			 </div>  
			 </div> 
             </div> 	       
   <div class="com_search_box_list">
    <div class="com_search_box_left"> 月薪范围： </div> 
	<div class="com_search_box_right">
      <div class="selectOption" style="width: 100%">
			<select name="salary" id='salary'>
				<option value="">请选择</option>
				<?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salary']):
?>
				<option value="<?php echo $this->_tpl_vars['salary']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['salary']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
		    </select>
			 </div>  
			 </div> 
		 </div> 
   <div class="com_search_box_list">
    <div class="com_search_box_left"> 学历要求： </div> 
		<div class="com_search_box_right">
        <div class="selectOption" style="width: 100%">
			<select name="edu" id='edu'>
				<option value="">请选择</option>
				<?php $_from = $this->_tpl_vars['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['edu']):
?>
				<option value="<?php echo $this->_tpl_vars['edu']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['edu']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div>  
       
        <div class="com_search_box_list">
         <div class="com_search_box_left"> 工作性质： </div> 
		 <div class="com_search_box_right">
            <div class="selectOption" style="width: 100%">
			<select name="type" id='type'>
				<option value="">请选择</option>
				<?php $_from = $this->_tpl_vars['comdata']['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
				<option value="<?php echo $this->_tpl_vars['type']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['type']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div>  
       <div class="com_search_box_list">
        <div class="com_search_box_left"> 发布日期： </div> 
		 <div class="com_search_box_right">
            <div class="selectOption" style="width: 100%">
			<select name="report" id='report'>
				<option value="">请选择</option>
				<?php $_from = $this->_tpl_vars['comdata']['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report']):
?>
				<option value="<?php echo $this->_tpl_vars['report']; ?>
"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['report']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div>   
		    </div> 
	</div>
    <div class="seach_post_submit">
      <input type="submit" value="搜索"class="seach_post_sub" />

</div>

	</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/public.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>