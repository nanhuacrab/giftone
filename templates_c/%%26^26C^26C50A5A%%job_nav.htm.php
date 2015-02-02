<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:21
         compiled from ../template/company/default//job_nav.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_substr', '../template/company/default//job_nav.htm', 5, false),array('function', 'curl', '../template/company/default//job_nav.htm', 33, false),)), $this); ?>
 <div class="Job_content">
   <div class="Job_content_header">
   <div class="Job_header_logo"><?php if ($this->_tpl_vars['com']['logo']): ?><img src="<?php echo $this->_tpl_vars['com']['logo']; ?>
" width="185" height="75" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_icon']; ?>
',2);"><?php else: ?><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_icon']; ?>
" width="185" height="75"><?php endif; ?></div>
    <div class="Job_header_cont">
    <div class="Job_header_name"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['com']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 20, 'gbk') : mb_substr($_tmp, 0, 20, 'gbk')); ?>
</span></div>
    <div class="Job_header_list">
    <p>
    <span>公司性质：<?php echo $this->_tpl_vars['com']['pr_info']; ?>
</span>
    <span>公司规模：<?php echo $this->_tpl_vars['com']['mun_info']; ?>
</span>
    </p>
    <p>
    <span>所在地区：<?php echo $this->_tpl_vars['com']['provinceid']; ?>
</span>
    <span>所属行业：<?php echo $this->_tpl_vars['com']['hy_info']; ?>
</span>
    </p>

    <div class="Job_guanzhu">
        <?php if ($this->_tpl_vars['usertype'] == '1'): ?>
			<?php if ($this->_tpl_vars['show']['id']): ?>
				<a href="javascript:void(0)"  onclick="atn('<?php echo $this->_tpl_vars['com']['uid']; ?>
')" class="zg-btn-unfollow" id='atn_<?php echo $this->_tpl_vars['com']['uid']; ?>
'>取消关注</a>
			<?php else: ?>
				<a href="javascript:void(0)"  onclick="atn('<?php echo $this->_tpl_vars['com']['uid']; ?>
')" class='zg-btn-green' id='atn_<?php echo $this->_tpl_vars['com']['uid']; ?>
'>关注</a>
			<?php endif; ?>
		<?php endif; ?>
    已有<font id="antnum<?php echo $this->_tpl_vars['com']['uid']; ?>
"><?php echo $this->_tpl_vars['com']['ant_num']; ?>
</font>人关注
    </div>
    </div>
    </div>
    <div class="Job_header_right"> <?php if ($this->_tpl_vars['com']['yyzz_status'] == '0'): ?><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/unaudited.png"> <?php else: ?> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/approved.png"width="95"height="35" /> <?php endif; ?></div>
   </div>
   <div class="Job_Introduction">
       <div class="Job_nav">
        <ul>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id'])), $this);?>
" <?php if ($_GET['tp'] == "" && $_GET['c'] == ""): ?>class="menus_a1"<?php endif; ?>>公司简介</a></li>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:post"), $this);?>
" <?php if ($_GET['tp'] == post): ?>class="menus_a1"<?php endif; ?>>招聘职位</a></li>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:news"), $this);?>
" <?php if ($_GET['tp'] == news || $_GET['tp'] == newsshow): ?>class="menus_a1"<?php endif; ?>>新闻中心</a></li>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:product"), $this);?>
" <?php if ($_GET['tp'] == product || $_GET['tp'] == productshow): ?>class="menus_a1"<?php endif; ?>>产品展示</a></li>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:show"), $this);?>
" <?php if ($_GET['tp'] == show): ?>class="menus_a1"<?php endif; ?>>环境展示</a></li>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:position"), $this);?>
" <?php if ($_GET['tp'] == position): ?>class="menus_a1"<?php endif; ?>>地理位置</a></li>
          <li><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:connection"), $this);?>
" <?php if ($_GET['tp'] == connection): ?>class="menus_a1"<?php endif; ?>>联系我们</a></li>
        </ul>
      </div>