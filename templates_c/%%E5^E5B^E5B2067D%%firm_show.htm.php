<?php /* Smarty version 2.6.26, created on 2015-02-01 04:32:04
         compiled from wap/firm_show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/firm_show.htm', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="post_content">
<div class="post_title">
<h3><?php echo $this->_tpl_vars['row']['name']; ?>
</h3>
<aside  class="post_title_data">�������ڣ� <?php echo $this->_tpl_vars['row']['lastupdate']; ?>
</aside>
<i><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['provinceid']]; ?>
/<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['cityid']]; ?>
</i>
</div>
<section class="com_post_title">
<header  class="index_post_h2"><span>��������Ϣ</span></header>
<aside class="post_list_span">
<ul class="com_post_msg">
<li>[��ҵ����] <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['pr']]; ?>
</li>
<li>[������ҵ] <?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['row']['hy']]; ?>
</li>
<li>[ע���ʽ�] <?php echo $this->_tpl_vars['row']['money']; ?>
��Ԫ</li>
<li>[��˾��ģ] <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['mun']]; ?>
</li>
</ul>

</aside>
</section>
<section class="com_post_title">
<header  class="index_post_h2"><span>����˾���</span></header>
<div class="com_post_jj"><?php echo $this->_tpl_vars['row']['content']; ?>
</div>

</section>

<section class="com_post_title">
<header  class="index_post_h2"><span>����ϵ��ʽ</span></header>
<?php if (( $this->_tpl_vars['config']['com_login_link'] == 1 && $this->_tpl_vars['cookie']['uid'] && $this->_tpl_vars['cookie']['usertype'] == 1 ) || $this->_tpl_vars['config']['com_login_link'] == 0): ?>
 <ul class="com_post_msg">
    <li>[��ϵ��]  <?php echo $this->_tpl_vars['row']['linkman']; ?>
</li>
    <li>[��ϵ�绰] <?php echo $this->_tpl_vars['row']['linkphone']; ?>
</li>
   <li>[��˾��ַ] <?php echo $this->_tpl_vars['row']['address']; ?>
</li>
  </ul>
<?php else: ?>
       <div class="com_post_login"> �� <a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">[��¼]</a> ��鿴��ϵ��ʽ 
    û���ʺţ�<a href="<?php echo smarty_function_wapurl(array('m' => 'register'), $this);?>
">[���ע��]</a></div>
<?php endif; ?>
</section>
<section class="com_post_title">
<header  class="index_post_h2"><span>������ְλ</span></header>
<div class="index_post_list"> 
  <?php $_from = $this->_tpl_vars['job_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job_list']):
?>
  	<a href="<?php echo smarty_function_wapurl(array('url' => "m:com,c:view,id:".($this->_tpl_vars['job_list']['id'])), $this);?>
" class="index_post_list_b index_post_list_b_com">
    <h3><?php echo $this->_tpl_vars['job_list']['name_n']; ?>
</h3>
    <aside><?php echo $this->_tpl_vars['job_list']['job_city_one']; ?>
-<?php echo $this->_tpl_vars['job_list']['job_city_two']; ?>
</aside> <em><?php echo $this->_tpl_vars['job_list']['time']; ?>
</em> </a> 
    <?php endforeach; endif; unset($_from); ?>
     </div>
</section>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 