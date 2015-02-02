<?php /* Smarty version 2.6.26, created on 2015-02-01 04:27:04
         compiled from wap/com_show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'wap/com_show.htm', 5, false),array('function', 'wapurl', 'wap/com_show.htm', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="post_content">
<div class="post_title">
<h3><?php echo $this->_tpl_vars['job']['name']; ?>
</h3>
<aside>发布日期：<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</aside>
<i>点击：<?php echo $this->_tpl_vars['job']['jobhits']; ?>
次</i>
</div>

<div class="post_list">
<div class="post_Company">
<a href="<?php echo smarty_function_wapurl(array('m' => 'firm','url' => "c:show,id:".($this->_tpl_vars['job']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['company']['name']; ?>
</a>
<i>》</i>
</div>
<aside class="post_list_span">
<span>类型：<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['type']]; ?>
</span>
<span>待遇：<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['salary']]; ?>
</span>
<span>人数：<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['number']]; ?>
</span>
<span>性别：<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['sex']]; ?>
</span>
<span>学历：<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['edu']]; ?>
</span>
<span>地区：<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['provinceid']]; ?>
/<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['cityid']]; ?>
</span>
<span>经验：<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['exp']]; ?>
</span>
<span>行业：<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['job']['hy']]; ?>
</span>
</aside>
</div>
<section class="com_post_title">
<header  class="index_post_h2"><span>》职位描述</span></header>
<div class="com_post_p"><?php echo $this->_tpl_vars['job']['description']; ?>
</div>
<div class="com_post_Application">

<?php if (! $_COOKIE['uid']): ?>
  <a href='<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
'><font color=''>登录后申请职位</font></a>
  <?php else: ?>
 <a href="javascript:jobapply('<?php echo $this->_tpl_vars['job']['id']; ?>
');" target="_self">申请职位</a> <a href="javascript:jobfav('<?php echo $this->_tpl_vars['job']['id']; ?>
');" class="com_post_sc">收藏职位</a>
  
  <?php endif; ?>



</div>
<script>function jobapply(jobid){
	$.get("index.php?m=com&c=view&type=sq&id=<?php echo $this->_tpl_vars['job']['id']; ?>
",function(data){
		var data=eval('('+data+')');
		if(data.url){
			if(data.url=='1'){url=location.href;}
			layermsg(data.msg,2,function(){location.href = data.url;});	
		}else{
			//layermsg(msg,2,function(){location.href = url;});	
			layermsg(data.msg,2);	
		}
	})};
	function jobfav(jobid){
	$.get("index.php?m=com&c=view&type=fav&id=<?php echo $this->_tpl_vars['job']['id']; ?>
",function(data){
		var data=eval('('+data+')');
		if(data.url){
			if(data.url=='1'){url=location.href;}
			layermsg(data.msg,2,function(){location.href = data.url;});	
		}else{
			//layermsg(msg,2,function(){location.href = url;});	
			layermsg(data.msg,2);	
		}
	})};
</script>
</section>
<section class="com_post_title">
<header  class="index_post_h2"><span>》联系方式</span></header>
<?php if (( $this->_tpl_vars['config']['com_login_link'] == 1 && $_COOKIE['uid'] && $_COOKIE['usertype'] == 1 ) || $this->_tpl_vars['config']['com_login_link'] == 0): ?>

        <ul class="com_post_msg">
         <li>[联系人]<?php echo $this->_tpl_vars['company']['linkman']; ?>
</li>
       <li>[联系电话]<?php echo $this->_tpl_vars['company']['linkphone']; ?>
</li>
	   <li>[联系手机]<?php echo $this->_tpl_vars['company']['linktel']; ?>
</li>
         <li>[公司地址]<?php echo $this->_tpl_vars['company']['address']; ?>
</li>
		</ul>
        <?php else: ?>
		 <div class="com_post_login">
            请 <a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">[登录]</a> 后查看联系方式
            没有帐号？ <a href="<?php echo smarty_function_wapurl(array('m' => 'register'), $this);?>
">[免费注册]</a>
        </div>
     
        <?php endif; ?></section>
  </section>
<section class="com_post_title">
<header  class="index_post_h2"><span>》企业信息</span></header>
<ul class="com_post_msg">
<li>[企业性质] <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['company']['pr']]; ?>
</li>
<li>[所属行业] <?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['company']['hy']]; ?>
</li>
<li>[注册资金] <?php echo $this->_tpl_vars['company']['money']; ?>
万元</li>
<li>[公司规模] <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['company']['mun']]; ?>
</li>
<li>[所在地区] <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['company']['provinceid']]; ?>
/<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['company']['cityid']]; ?>
</li>
</ul>
</section>
<section class="com_post_title">
<header  class="index_post_h2"><span>》公司简介</span></header>
<div class="com_post_jj"><?php echo $this->_tpl_vars['company']['content']; ?>
</div>
</section>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 