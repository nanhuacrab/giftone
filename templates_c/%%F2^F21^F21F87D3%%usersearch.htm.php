<?php /* Smarty version 2.6.26, created on 2015-02-01 04:26:38
         compiled from wap/usersearch.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<form method="get" action="index.php">
<input type="hidden" name="m" value="user" />
<div class="com_search_box">
<div class="job_search_box">
<div class="job_input_box"><input type="text" value="" placeholder="������ؼ���" name="keyword"  class="job_input_box_search " ></div>
<div class="job_search_box_button">
		<button id="cityclassbutton" type="button" onclick="checkshowjob('city');">��ѡ��������</button>
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
<button id="jobclassbutton" type="button" onclick="checkshowjob('job');">��ѡ��ְλ���</button>
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
        <div class="com_search_box_left"> ��ҵ��� </div> 
       <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			     <select name="hy">
				<option value="">��ѡ��</option>        
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
        <div class="com_search_box_left"> �������飺 </div> 
         <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="exp" id='exp'>
				<option value="">��ѡ��</option>
				<?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['word']):
?>
				<option value="<?php echo $this->_tpl_vars['word']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['word']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div> 
    <div class="com_search_box_list">
        <div class="com_search_box_left"> ѧ��Ҫ�� </div> 
      <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="edu" id='edu'>
				<option value="">��ѡ��</option>
				<?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['edu']):
?>
				<option value="<?php echo $this->_tpl_vars['edu']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['edu']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
		    </select>
			 </div>  
			 </div> 
		 </div> 
     <div class="com_search_box_list">
      <div class="com_search_box_left"> ����ʱ�䣺 </div> 
       <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="report" id='report'>
				<option value="">��ѡ��</option>
				<?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report']):
?>
				<option value="<?php echo $this->_tpl_vars['report']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['report']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div> 
		<div class="com_search_box_list">
         <div class="com_search_box_left"> ��н��Χ�� </div> 
        <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="salary" id='salary'>
				<option value="">��ѡ��</option>
				<?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salary']):
?>
				<option value="<?php echo $this->_tpl_vars['salary']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['salary']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div> 
    
     <div class="com_search_box_list">
      <div class="com_search_box_left"> �Ա� </div> 
       <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="sex" id='sex'>
				<option value="">��ѡ��</option>
				<?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sex']):
?>
				<option value="<?php echo $this->_tpl_vars['sex']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['sex']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div> 
        <div class="com_search_box_list">
         <div class="com_search_box_left"> �������ʣ� </div> 
             <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="type" id='type'>
				<option value="">��ѡ��</option>
				<?php $_from = $this->_tpl_vars['userdata']['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
				<option value="<?php echo $this->_tpl_vars['type']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['type']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
		    </select>
			 </div>  
			 </div> 
		 </div> 
       <div class="com_search_box_list">
        <div class="com_search_box_left"> �������ڣ� </div> 
        <div class="com_search_box_right">
         <div class="selectOption" style="width: 100%">
			<select name="uptime" id='uptime'>
				<option value="">��ѡ��</option>
				<option value="1">����</option>
				<option value="3">�������</option>
				<option value="7">�������</option>
				<option value="30">���һ����</option>
				<option value="90">���������</option>
		    </select>
			 </div>  
			 </div> 
		 </div> 
		</div>
    <div class="seach_post_submit">
      <input type="submit" value="����"class="seach_post_sub" />
    </div>
  </form>
</div>
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