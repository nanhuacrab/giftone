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
<aside>�������ڣ�<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</aside>
<i>�����<?php echo $this->_tpl_vars['job']['jobhits']; ?>
��</i>
</div>

<div class="post_list">
<div class="post_Company">
<a href="<?php echo smarty_function_wapurl(array('m' => 'firm','url' => "c:show,id:".($this->_tpl_vars['job']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['company']['name']; ?>
</a>
<i>��</i>
</div>
<aside class="post_list_span">
<span>���ͣ�<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['type']]; ?>
</span>
<span>������<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['salary']]; ?>
</span>
<span>������<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['number']]; ?>
</span>
<span>�Ա�<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['sex']]; ?>
</span>
<span>ѧ����<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['edu']]; ?>
</span>
<span>������<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['provinceid']]; ?>
/<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['job']['cityid']]; ?>
</span>
<span>���飺<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['job']['exp']]; ?>
</span>
<span>��ҵ��<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['job']['hy']]; ?>
</span>
</aside>
</div>
<section class="com_post_title">
<header  class="index_post_h2"><span>��ְλ����</span></header>
<div class="com_post_p"><?php echo $this->_tpl_vars['job']['description']; ?>
</div>
<div class="com_post_Application">

<?php if (! $_COOKIE['uid']): ?>
  <a href='<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
'><font color=''>��¼������ְλ</font></a>
  <?php else: ?>
 <a href="javascript:jobapply('<?php echo $this->_tpl_vars['job']['id']; ?>
');" target="_self">����ְλ</a> <a href="javascript:jobfav('<?php echo $this->_tpl_vars['job']['id']; ?>
');" class="com_post_sc">�ղ�ְλ</a>
  
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
<header  class="index_post_h2"><span>����ϵ��ʽ</span></header>
<?php if (( $this->_tpl_vars['config']['com_login_link'] == 1 && $_COOKIE['uid'] && $_COOKIE['usertype'] == 1 ) || $this->_tpl_vars['config']['com_login_link'] == 0): ?>

        <ul class="com_post_msg">
         <li>[��ϵ��]<?php echo $this->_tpl_vars['company']['linkman']; ?>
</li>
       <li>[��ϵ�绰]<?php echo $this->_tpl_vars['company']['linkphone']; ?>
</li>
	   <li>[��ϵ�ֻ�]<?php echo $this->_tpl_vars['company']['linktel']; ?>
</li>
         <li>[��˾��ַ]<?php echo $this->_tpl_vars['company']['address']; ?>
</li>
		</ul>
        <?php else: ?>
		 <div class="com_post_login">
            �� <a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">[��¼]</a> ��鿴��ϵ��ʽ
            û���ʺţ� <a href="<?php echo smarty_function_wapurl(array('m' => 'register'), $this);?>
">[���ע��]</a>
        </div>
     
        <?php endif; ?></section>
  </section>
<section class="com_post_title">
<header  class="index_post_h2"><span>����ҵ��Ϣ</span></header>
<ul class="com_post_msg">
<li>[��ҵ����] <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['company']['pr']]; ?>
</li>
<li>[������ҵ] <?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['company']['hy']]; ?>
</li>
<li>[ע���ʽ�] <?php echo $this->_tpl_vars['company']['money']; ?>
��Ԫ</li>
<li>[��˾��ģ] <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['company']['mun']]; ?>
</li>
<li>[���ڵ���] <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['company']['provinceid']]; ?>
/<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['company']['cityid']]; ?>
</li>
</ul>
</section>
<section class="com_post_title">
<header  class="index_post_h2"><span>����˾���</span></header>
<div class="com_post_jj"><?php echo $this->_tpl_vars['company']['content']; ?>
</div>
</section>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 