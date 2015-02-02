<?php /* Smarty version 2.6.26, created on 2015-02-01 04:18:58
         compiled from wap/firm.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/firm.htm', 44, false),array('modifier', 'mb_substr', 'wap/firm.htm', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="fm">
  <form action="index.php" method="get">
    <input type="hidden" name="m" value="firm" />
    <div class="seach_post" style="padding-bottom:10px;">
      <input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>
"  class="seach_post_text placeholder" placeholder="请输入关键字/职位/地点搜索" />
      <div class="selectOption_sex" style="width:100%;">
      <select name="hy" class="seach_post_select" style="margin-top:2px;">
        <option value="">选择行业</option> 
		<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($_GET['hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
		 <?php endforeach; endif; unset($_from); ?> 
      </select>
     </div>  

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
        <input type="hidden" name="citylevel" id="citylevel" value="2" />
	</div>

    
	<input type="submit" value="搜索"class="seach_post_sub" />
	</div>  
   
  </form>
</div>
<section>
  <div class="main"> <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?> <a href="<?php echo smarty_function_wapurl(array('url' => "m:firm,c:show,id:".($this->_tpl_vars['list']['uid'])), $this);?>
"class="index_post_list_b index_post_list_b_com">
    <h3><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 12, 'gbk') : mb_substr($_tmp, 0, 12, 'gbk')); ?>
 </h3>
    <i><?php echo $this->_tpl_vars['list']['job_city_one']; ?>
-<?php echo $this->_tpl_vars['list']['job_city_two']; ?>
</i> </a> <?php endforeach; endif; unset($_from); ?> </div>
</section>
<?php if ($this->_tpl_vars['total'] <= 0): ?>
  <?php if ($_GET['keyword'] != ""): ?> 
  <div class="wap_member_no">没有搜索到企业</div>
  <?php else: ?>
  <div class="wap_member_no">暂无企业</div>
  <?php endif; ?>
  <?php else: ?>
  <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  <?php endif; ?>
<div>
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