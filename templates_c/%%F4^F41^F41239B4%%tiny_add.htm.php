<?php /* Smarty version 2.6.26, created on 2015-02-02 17:48:36
         compiled from wap/tiny_add.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="post_content" style="padding-top:0px;">
<div class="resume-cont" style="margin-top:0px;">
<div class="resume-cont_zk" style="padding-top:0px;">
	<form action="" method="post" onsubmit="return cktiny()">
    <div class="resume-cont_wate">
		<dl class="resume-cont_wate_list"> <dt><span class="x_cor">*</span>姓名：</dt> <dd><input type="text" name="username" value="<?php echo $this->_tpl_vars['row']['username']; ?>
" class="reinputText"></dd></dl>
		<dl class="resume-cont_wate_list"> 
		 <dt><span class="x_cor">*</span>性别：</dt>
		 <dd> 
		 <div class="mLeft12 relative" style="margin-left:-12px;">
		  <div class="selectOption_sex" style="width:100%;">
			<select name="sex" id='sex'>
				<?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user_sex']):
?>
				<option value="<?php echo $this->_tpl_vars['user_sex']; ?>
" <?php if ($this->_tpl_vars['row']['sex'] == $this->_tpl_vars['user_sex']): ?>selected="select"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['user_sex']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
			  </select>
			 </div>  
			 </div>  
		  </dd>
		 </dl>
		<dl class="resume-cont_wate_list"> <dt><span class="x_cor">*</span>工作经验：</dt> <dd>
		<div class="mLeft12 relative" style="margin-left:-12px;">
		  <div class="selectOption_sex" style="width:100%;">
			<select name="exp" id='exp'>
				<?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user_word']):
?>
				<option value="<?php echo $this->_tpl_vars['user_word']; ?>
" <?php if ($this->_tpl_vars['row']['exp'] == $this->_tpl_vars['user_word']): ?>selected="select"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['user_word']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?> 
			  </select>
			 </div>  
			 </div> 
		</dd></dl>
		<dl class="resume-cont_wate_list"> <dt><span class="x_cor">*</span>意向职位：</dt> <dd><input type="text" name="job" id="job" value="<?php echo $this->_tpl_vars['row']['job']; ?>
" class="reinputText"></dd></dl>
		<dl class="resume-cont_wate_list"> <dt><span class="x_cor">*</span>手机：</dt> <dd><input type="text" name="mobile" value="<?php echo $this->_tpl_vars['row']['mobile']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="reinputText"></dd></dl>
		<dl class="resume-cont_wate_list"> <dt><span class="x_cor">&nbsp;</span> 联系QQ：</dt> <dd><input type="text" name="qq" value="<?php echo $this->_tpl_vars['row']['qq']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="reinputText"></dd></dl>
		<dl class="resume-cont_wate_list"> <dt><span class="x_cor">*</span>自我介绍：</dt> <dd><textarea id="production" class="textAreaMsg tip" placeholder="请输入你的技能情况" name="production"><?php echo $this->_tpl_vars['row']['production']; ?>
</textarea></dd></dl>
		<dl class="resume-cont_wate_list"><dt><span class="x_cor">*</span>密码：</dt>  <dd><input type="password" name="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" class="reinputText"><div style=" margin-left:-12px;">密码修改信息时使用,请牢记！ </div></dd></dl>
		<?php if ($this->_tpl_vars['row']['id']): ?> 
		<div style="width:100%;margin:5px 0;float:left">
			<span style="float:left;margin-left:120px;"><input type="radio" name="type" value='1' class="reinputText" checked="checked"/>修改
			<input type="radio" name="type" value='2' class="reinputText"/>刷新
			<input type="radio" name="type" value='3' class="reinputText"/>删除
			</span>
			<input name="id" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" type="hidden"/>
		</div>
		<div style="clear:both"></div>
		<?php endif; ?>
		<dl class="resume-cont_wate_list"> <dt>&nbsp;</dt><dd><input type="submit" name="submit" value="提交" class="reinputText2"> </dd> </dl>
	</div>
	</form>
</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 