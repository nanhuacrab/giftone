<?php /* Smarty version 2.6.26, created on 2015-01-29 18:22:53
         compiled from default/once/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/once/index.htm', 34, false),array('modifier', 'mb_substr', 'default/once/index.htm', 92, false),array('modifier', 'date_format', 'default/once/index.htm', 92, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]-->
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<link href="<?php echo $this->_tpl_vars['style']; ?>
/style/Micro_resume.css" rel="stylesheet" type="text/css" />
<style>
* {margin:0;padding:0;}
body,div{margin:0;padding:0;}
.content_firm{float:left;width:100%;margin: 0 auto;position: relative;}
</style>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
  <div class="current_Location icon"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"> 首页</a> > 微招聘 </div>
  <div class="fast_issuance" style="display:none;_position:absolute;" id="fabufast">
    <div class="fast_once_cont fl">
      <div class="fast-onxt_box">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="<?php echo smarty_function_url(array('m' => 'once'), $this);?>
" target="supportiframe" method="post" onSubmit="return check_once_job()">
        <div class="once_fb_list"><span class="once_fb_list_span"><font color="red">* </font>我想招聘：</span>
          <input  class="once_input_simple once_input_simple_w290" type="text" id="title" maxlength="15" name="title">
          <span class="once_fb_list_span"><font color="red">* </font>人数：</span>
          <input  class="once_input_simple once_input_simple_w140" type="text" id="mans" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"maxlength="4" name="mans">
        </div>
        <div class="once_fb_list"><span class="once_fb_list_span"><font color="red">* </font>(店面)名称：</span>
          <input class="once_input_simple once_input_simple_w480" type="text" id="companyname" maxlength="15" name="companyname">
        </div>
        <div class="once_fb_list"><span class="once_fb_list_span"><font color="red">* </font>联系人：</span>
          <input class="once_input_simple once_input_simple_w140" type="text" id="linkman" maxlength="15" name="linkman">
          <span class="once_fb_list_span"><font color="red">* </font>联系地址：</span>
          <input class="once_input_simple once_input_simple_w290" type="text" id="address" maxlength="50" name="address">
        </div>
        <div class="once_fb_list" style="margin-top:5px;"><span class="once_fb_list_span"><font color="red">* </font>具体要求：</span>
          <textarea rows='6' class="once_simplew_textarea" id="require" placeholder="请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息" onfocus="if(this.value=='请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息') this.value=''" onblur="this.value=this.value==''?'请填写招聘的具体要求，如：性别，学历，年龄，工作经验，工资待遇等相关信息':this.value" name="require"><?php echo $this->_tpl_vars['onshow']['require']; ?>
</textarea>
        </div>
        <div class="once_fb_list_bottom">
          <div class="once_fb_list_bottom_tips">以下（3）项需选填一项</div>
          <div class="once_fb_list_bottom_left"> 联系电话
            <input class="once_input_simple_xt" type="text" id="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" maxlength="11" name="phone">
          </div>
          <div class="once_fb_list_bottom_left"> 联系邮箱
            <input class="once_input_simple_xt" type="text" id="email" maxlength="50" name="email">
          </div>
          <div class="once_fb_list_bottom_left"> 联系QQ
            <input class="once_input_simple_xt" type="text" id="qq" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="50" name="qq">
          </div>
        </div>
        <div class="once_fb_list"> <span class="once_fb_list_span"><font color="red">* </font>有效期：</span>
          <input class="once_input_simple once_input_simple_w80" type="text" id="edate" style="width:80px" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  maxlength="3" name="edate">
          <em class="once_fb_list_em">天</em></span> <span class="once_fb_list_span once_fb_list_span_ml20"><font color="red">* </font>密码：</span>
          <input class="once_input_simple once_input_simple_w80" type="password"  id="password" name="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')">
          <span class="once_fb_list_span once_fb_list_span_ml20"><font color="red">* </font>验证码：</span> <?php if (strpos ( $this->_tpl_vars['config']['code_web'] , "一句话招聘" ) !== false): ?>
          <input id="authcode" class="once_input_simple once_input_simple_w80" type="text" maxlength="4" name="authcode">
          <a href="javascript:check_code();"><img id="vcode_img" src="include/authcode.inc.php" style="margin-left:10px;"></a> <?php else: ?>
          <input id="authcode" type="hidden" value="12345" maxlength="4" name="authcode">
          <?php endif; ?> </div>
        <div class="once_fb_list_tips"><span class="once_fb_list_span once_fb_list_span_w80">温馨提示：</span> <em class="once_fb_list_span_em">请妥善保存密码，密码可用于刷新/修改/删除信息！
          您当前的IP是：<?php echo $this->_tpl_vars['ip']; ?>
，</br>
          请不要发布虚假、违法信息！</em></div>
        <div class="once_fb_list">
          <input type="hidden" id="id" name="id"/>
          <input id="botton" class="once_fast_submit" type="submit" value="发布" name="submit">
        </div>
        </div>
      </form>
    </div>
  </div>
  <script src="<?php echo $this->_tpl_vars['style']; ?>
/js/fast.js" language="javascript"></script>
  <div class="yun_micro_body">
    <div class="yun_micro_ban"> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/8.jpg" width="970"> </div>
    <div class="micro_tag"><span>热门搜索：</span> <?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?> <a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
"> <em><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</em></a> <?php endforeach; endif; unset($_from); ?> </div>
    <div class="clear"></div>
    <div class="Fast_Search_Results fl"><span class="fl">最新微聘信息 </span> </div>
    <div class="content_firm">
      <div class="new_fast fl "> <?php $_from = $this->_tpl_vars['once']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['once']):
?>
        <div class="new_fast_list new_fast_listbg ">
          <div class="yun_micro_list_t"> <a class="yun_micro_list_t_name"  href="<?php echo smarty_function_url(array('m' => 'once','url' => "c:show,id:".($this->_tpl_vars['once']['id'])), $this);?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 11, 'gbk') : mb_substr($_tmp, 0, 11, 'gbk')); ?>
</a> <span class="yun_micro_list_t_firm"><?php echo $this->_tpl_vars['once']['companyname']; ?>
</span> <span>招聘人数：<?php echo $this->_tpl_vars['once']['mans']; ?>
人</span> <span> 联系人：<?php echo $this->_tpl_vars['once']['linkman']; ?>
 </span> <?php if ($this->_tpl_vars['once']['phone']): ?> <span> 电话：<?php echo $this->_tpl_vars['once']['phone']; ?>
</span> <?php endif; ?> <span><em><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</em></span> </div>
          <div class="yun_micro_list_yq"><em>具体要求：</em><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['require'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
 </div>
          <div class="yun_micro_list_touch">地址：<?php echo $this->_tpl_vars['once']['address']; ?>
 
            <?php if ($this->_tpl_vars['once']['qq']): ?><span>QQ:<?php echo $this->_tpl_vars['once']['qq']; ?>
</span> <?php endif; ?>
            <?php if ($this->_tpl_vars['once']['email']): ?><span> 邮箱：<?php echo $this->_tpl_vars['once']['email']; ?>
</span> <?php endif; ?> <em> <a href="javascript:;" onclick="showdd('1','<?php echo $this->_tpl_vars['once']['id']; ?>
');">刷新</a> | <a href="<?php echo smarty_function_url(array('m' => 'once','url' => "c:show,id:".($this->_tpl_vars['once']['id'])), $this);?>
" target="_blank">查看</a> | <a href="javascript:;" onclick="showdd('2','<?php echo $this->_tpl_vars['once']['id']; ?>
')" >修改</a> | <a href="javascript:;" onclick="showdd('3','<?php echo $this->_tpl_vars['once']['id']; ?>
');">删除</a></em></div>
        </div>
        <?php endforeach; endif; unset($_from); ?>
        <div class="clear"></div> 
        <?php if ($this->_tpl_vars['total'] != 0): ?>
        <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['total'] == 0): ?>
        <div class="seachno" style="background:#FFF; width:614px;">
          <div class="seachno_left"> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif"></div>
          <div class="listno-content"> <strong>很抱歉，没有找到满足条件的职位</strong><br>
            <span> 建议您：<br>
            1、适当减少已选择的条件<br>
            2、适当删减或更改搜索关键字<br>
            </span> <span> 热门关键字：<br>
            <?php $_from = $this->_tpl_vars['top_key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['top_key']):
?> <a href="<?php echo $this->_tpl_vars['top_key']['url']; ?>
"><?php echo $this->_tpl_vars['top_key']['key_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </span> </div>
        </div>
        <?php endif; ?> </div>
      <style> 
.Fast_left{z-index:9999;}
</style>
      <div class="Fast_left fr">
        <div class="Fast_left_fixed"> <span class="why_fast_fb" style="margin-top:10px;"><a href='javascript:;' onclick="showfabu()"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_fast_fb.jpg" style='auto'/></a></span>
          <form method="get" name="myform" onsubmit="return check_once_keyword();" action="index.php">
            <input type="hidden" name="m" value="once">
            <input class="Fast_text placeholder" id="Fastkeyword" type="text" size="45" value="请输入搜索内容" onclick="if(this.value=='请输入搜索内容'){this.value=''}" onblur="if(this.value==''){this.value='请输入搜索内容'}" name="keyword">
            <input class="Fast_submit" type="submit" value=" ">
          </form>
          <span class="why_fast">为方便一些普工类企业(如饭店,店面,个体户等)发布招聘信息,特设定了无需注册,即可发布简短招聘的功能,在给大家提供了更多的信息的同时也存在的问题是,我们无法对这些发布者做核实.<br>
          ★以下信息由企业或个体工商户自行提供，该企业或个体工商户负责信息内容的真实性、准确性和合法性。网站对此不承担任何保证或连带责任. </span> </div>
      </div>
    </div>
  </div>
</div>
<!--弹出框-->
<div style="display:none;" id="postpw">
  <div>
    <ul class="micro_resume_release_list">
      <li><span><font color="#FF3300">*</font> 密码：</span>
        <input id="pw" type='password' class="micro_resume_release_text" style='width:100px'/>
        <em style="line-height:28px; display:inline-block; margin-left:5px;">请输入添加时的密码。</em> </li>
      <li><span><font color="#FF3300">*</font> 验证码：</span>
        <input type="text" id="code" class="micro_resume_release_text micro_resume_release_text2" style='width:100px'/>
        <a href="javascript:check_codes();"><img id="vcode_imgs" src="include/authcode.inc.php"></a>
        <!--a href="javascript:check_codes();">看不清，换一张</a-->
      </li>
      <li><span>&nbsp; </span>
        <input type="hidden" id="tid"/>
        <input type="hidden" id="type"/>
        <input class="fast_submit" type="button" value="提交" onclick="post_pass();">
      </li>
    </ul>
  </div>
</div>
<!--弹出框 end-->
<script type="text/javascript"> 
$(document).ready(function(){
	$(window).scroll(function(){
		var scroll_Top = $(window).scrollTop();
		var width=document.body.clientWidth;
		if(scroll_Top>520){
			if(window.XMLHttpRequest){
				var top=0;
				var right=(width-970)/2+"px";
			}else{
				var top=parseInt(scroll_Top)-(520);
				var right=0;
			}
			$(".Fast_left").attr("style","position:fixed;top:"+top+"px;_position:absolute;right:"+right+";");
		}else{
			$(".Fast_left").attr("style","");
		}
	});
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>