<?php /* Smarty version 2.6.26, created on 2015-01-30 06:58:23
         compiled from E:%5Chtdocs%5Cgift11/template/wap/footer.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'E:\\htdocs\\gift11/template/wap/footer.htm', 6, false),)), $this); ?>
<nav class="footer_nav">
<a href="javascript:window.scrollTo(0,0);">TOP</a>
<a href="./">首页</a> 
&nbsp;-
<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
&nbsp;<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">个人登录</a>
&nbsp;&nbsp;-
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">企业登录</a>
&nbsp;&nbsp;<br/>
<?php else: ?>
欢迎,<a href="member/"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</a><strong></strong> <a href="<?php echo smarty_function_wapurl(array('url' => "c:loginout"), $this);?>
">退出</a>
<?php endif; ?>
</nav>
<footer class="footer">

<!--<a href="index.php?action=about">关于网站</a>
--->
<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">电脑版</a>
-
<a href="javascript:window.location.reload();">刷新</a>
-
<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap">返回</a>
<br>
<a href="http://www.phpyun.com/" ><small>Powered by PHPYUN</small></a>
</footer>
<div id="oncelist" class="mask selecter hide " style="display:none;">
    <div class="f_body">
    <div style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;" class="once_h1_box">
    <div class="once_h1_box_h1">请输入密码</div>
    
    <input type="password" name="password" id="once_password" value="" class="once_h1_box_ps" />
     <input id="onceid" value="" type="hidden">
     <br />
     <div class="once_h1_box_bot">
     <button class="once_h1_bth1 ok selectorOk" onclick="checkOncePassword($('#onceid').val());">确定</button>
    <button class="once_h1_bth1 once_h1_bth2  clear_sub selectorClear" onclick="layer.closeAll();">关闭</button>
    <button class="once_h1_bth1 once_h1_bth3 clear_sub selectorClear" onclick="$('input[name=password]').val('');">清除</button> 
   </div>
    </div>
    </div>
</div>
<div id="tinylist" class="mask selecter hide " style="display:none;">
    <div class="f_body">
    <div style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;"class="once_h1_box">
     <div class="once_h1_box_h1">请输入密码</div>
     <input type="password" name="password" id="tiny_password" value="" class="once_h1_box_ps" />
    <input id="tinyid" value="" type="hidden">
     <div class="once_h1_box_bot">
    <button class="once_h1_bth1  ok selectorOk" onclick="checkTinyPassword($('#tinyid').val());">确定</button>
    <button class="once_h1_bth1 once_h1_bth2 clear_sub selectorClear" onclick="layer.closeAll();">关闭</button>
    <button class="once_h1_bth1  once_h1_bth3 clear_sub selectorClear" onclick="$('input[name=password]').val('');">清除</button> 
     </div>
   
    </div>
    </div>
</div>
<?php if ($this->_tpl_vars['layer']): ?>
<input id="layermsg" value="<?php echo $this->_tpl_vars['layer']['msg']; ?>
" type="hidden">
<input id="layerurl" value="<?php echo $this->_tpl_vars['layer']['url']; ?>
" type="hidden">
<script>window.onload=islayer(); </script>
<?php endif; ?>  
<script>var weburl='<?php echo $this->_tpl_vars['config_wapdomain']; ?>
';</script>
</body>
</html>