<?php /* Smarty version 2.6.26, created on 2015-02-01 04:18:49
         compiled from E:%5Chtdocs%5Cgift11/template/wap/public.htm */ ?>
<div id="joblist" class="mask selecter hide " style="display:none;height:100%; width:auto;right: 0;top:0;">
<div class="mask_wap_bg" style=" background-color: rgba(51, 51, 51, 0.8); height:100%;width:100%; position:fixed;left:0px;top:0px;bottom:0px;right:0px;"></div>
<div class="f_body" style="float: right; background: none repeat scroll 0% 0% transparent; width: 280px;">
<h2 style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">职位类别<button class="ok selectorOk" onclick="realy();">确定</button>
<button class="clear_sub selectorClear" onclick="Close('job');">关闭</button>
<button class="clear_sub selectorClear" onclick="removes();">清除</button> 
</h2>

<div class="contentbody position" style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">
<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<dl class="lookshow onelist" id="job<?php echo $this->_tpl_vars['v']; ?>
" style="position:relative">
<dt class="current position" onclick="checkjob1('<?php echo $this->_tpl_vars['v']; ?>
','job');"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</dt>
<dd id="joblist<?php echo $this->_tpl_vars['v']; ?>
" class="lookhide" style="display: none;">
    <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['v']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
    <ul id="u2000" style="position:relative;" data-c="show">
    <li onclick="checkjob2('<?php echo $this->_tpl_vars['val']; ?>
','job');"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['val']]; ?>
</li>
    <div class="post_show_three" id="jobpost<?php echo $this->_tpl_vars['val']; ?>
" style="display: none;">
        <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['val']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
        <li>
        <input id="r<?php echo $this->_tpl_vars['value']; ?>
" data="<?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['value']]; ?>
" type="checkbox" value="<?php echo $this->_tpl_vars['value']; ?>
" name="jobclass" onclick="checked_input('<?php echo $this->_tpl_vars['value']; ?>
');">
        <label for="r<?php echo $this->_tpl_vars['value']; ?>
" style="margin-left:5px;"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['value']]; ?>
</label>
        </li>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    </ul>
    <?php endforeach; endif; unset($_from); ?>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div>


<div id="citylist" class="mask selecter hide " style="display:none;  height:100%; width:auto;right: 0;top:0;">
<div class="mask_wap_bg" style=" background-color: rgba(51, 51, 51, 0.8); height:100%;width:100%; position:fixed;left:0px;top:0px;bottom:0px;right:0px;"></div>
<div class="f_body" style="float: right; background: none repeat scroll 0% 0% transparent; width: 280px;">
<h2 style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">城市类别
<button class="clear_sub selectorClear" onclick="Close('city');">关闭</button>
</h2>

<div class="contentbody position" style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">
<?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<dl class="lookshow onelist" id="city<?php echo $this->_tpl_vars['v']; ?>
" style="position:relative">
<dt class="current position" onclick="checkjob1('<?php echo $this->_tpl_vars['v']; ?>
','city');"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</dt>
<dd id="citylist<?php echo $this->_tpl_vars['v']; ?>
" class="lookhide" style="display: none;">
    <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['v']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
    <ul id="u2000" style="position:relative;" data-c="show">
    <li onclick="checkjob2('<?php echo $this->_tpl_vars['val']; ?>
','city');"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['val']]; ?>
</li>
    <div class="post_show_three" id="citypost<?php echo $this->_tpl_vars['val']; ?>
" style="display: none;">
        <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['val']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
        <li onclick="checkedcity('<?php echo $this->_tpl_vars['value']; ?>
','<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['value']]; ?>
');"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['value']]; ?>
</li>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    </ul>
    <?php endforeach; endif; unset($_from); ?>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div>