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
  <div class="current_Location icon"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"> ��ҳ</a> > ΢��Ƹ </div>
  <div class="fast_issuance" style="display:none;_position:absolute;" id="fabufast">
    <div class="fast_once_cont fl">
      <div class="fast-onxt_box">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="<?php echo smarty_function_url(array('m' => 'once'), $this);?>
" target="supportiframe" method="post" onSubmit="return check_once_job()">
        <div class="once_fb_list"><span class="once_fb_list_span"><font color="red">* </font>������Ƹ��</span>
          <input  class="once_input_simple once_input_simple_w290" type="text" id="title" maxlength="15" name="title">
          <span class="once_fb_list_span"><font color="red">* </font>������</span>
          <input  class="once_input_simple once_input_simple_w140" type="text" id="mans" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')"maxlength="4" name="mans">
        </div>
        <div class="once_fb_list"><span class="once_fb_list_span"><font color="red">* </font>(����)���ƣ�</span>
          <input class="once_input_simple once_input_simple_w480" type="text" id="companyname" maxlength="15" name="companyname">
        </div>
        <div class="once_fb_list"><span class="once_fb_list_span"><font color="red">* </font>��ϵ�ˣ�</span>
          <input class="once_input_simple once_input_simple_w140" type="text" id="linkman" maxlength="15" name="linkman">
          <span class="once_fb_list_span"><font color="red">* </font>��ϵ��ַ��</span>
          <input class="once_input_simple once_input_simple_w290" type="text" id="address" maxlength="50" name="address">
        </div>
        <div class="once_fb_list" style="margin-top:5px;"><span class="once_fb_list_span"><font color="red">* </font>����Ҫ��</span>
          <textarea rows='6' class="once_simplew_textarea" id="require" placeholder="����д��Ƹ�ľ���Ҫ���磺�Ա�ѧ�������䣬�������飬���ʴ����������Ϣ" onfocus="if(this.value=='����д��Ƹ�ľ���Ҫ���磺�Ա�ѧ�������䣬�������飬���ʴ����������Ϣ') this.value=''" onblur="this.value=this.value==''?'����д��Ƹ�ľ���Ҫ���磺�Ա�ѧ�������䣬�������飬���ʴ����������Ϣ':this.value" name="require"><?php echo $this->_tpl_vars['onshow']['require']; ?>
</textarea>
        </div>
        <div class="once_fb_list_bottom">
          <div class="once_fb_list_bottom_tips">���£�3������ѡ��һ��</div>
          <div class="once_fb_list_bottom_left"> ��ϵ�绰
            <input class="once_input_simple_xt" type="text" id="phone" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" maxlength="11" name="phone">
          </div>
          <div class="once_fb_list_bottom_left"> ��ϵ����
            <input class="once_input_simple_xt" type="text" id="email" maxlength="50" name="email">
          </div>
          <div class="once_fb_list_bottom_left"> ��ϵQQ
            <input class="once_input_simple_xt" type="text" id="qq" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="50" name="qq">
          </div>
        </div>
        <div class="once_fb_list"> <span class="once_fb_list_span"><font color="red">* </font>��Ч�ڣ�</span>
          <input class="once_input_simple once_input_simple_w80" type="text" id="edate" style="width:80px" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"  maxlength="3" name="edate">
          <em class="once_fb_list_em">��</em></span> <span class="once_fb_list_span once_fb_list_span_ml20"><font color="red">* </font>���룺</span>
          <input class="once_input_simple once_input_simple_w80" type="password"  id="password" name="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')">
          <span class="once_fb_list_span once_fb_list_span_ml20"><font color="red">* </font>��֤�룺</span> <?php if (strpos ( $this->_tpl_vars['config']['code_web'] , "һ�仰��Ƹ" ) !== false): ?>
          <input id="authcode" class="once_input_simple once_input_simple_w80" type="text" maxlength="4" name="authcode">
          <a href="javascript:check_code();"><img id="vcode_img" src="include/authcode.inc.php" style="margin-left:10px;"></a> <?php else: ?>
          <input id="authcode" type="hidden" value="12345" maxlength="4" name="authcode">
          <?php endif; ?> </div>
        <div class="once_fb_list_tips"><span class="once_fb_list_span once_fb_list_span_w80">��ܰ��ʾ��</span> <em class="once_fb_list_span_em">�����Ʊ������룬���������ˢ��/�޸�/ɾ����Ϣ��
          ����ǰ��IP�ǣ�<?php echo $this->_tpl_vars['ip']; ?>
��</br>
          �벻Ҫ������١�Υ����Ϣ��</em></div>
        <div class="once_fb_list">
          <input type="hidden" id="id" name="id"/>
          <input id="botton" class="once_fast_submit" type="submit" value="����" name="submit">
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
    <div class="micro_tag"><span>����������</span> <?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?> <a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
"> <em><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</em></a> <?php endforeach; endif; unset($_from); ?> </div>
    <div class="clear"></div>
    <div class="Fast_Search_Results fl"><span class="fl">����΢Ƹ��Ϣ </span> </div>
    <div class="content_firm">
      <div class="new_fast fl "> <?php $_from = $this->_tpl_vars['once']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['once']):
?>
        <div class="new_fast_list new_fast_listbg ">
          <div class="yun_micro_list_t"> <a class="yun_micro_list_t_name"  href="<?php echo smarty_function_url(array('m' => 'once','url' => "c:show,id:".($this->_tpl_vars['once']['id'])), $this);?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['title'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 11, 'gbk') : mb_substr($_tmp, 0, 11, 'gbk')); ?>
</a> <span class="yun_micro_list_t_firm"><?php echo $this->_tpl_vars['once']['companyname']; ?>
</span> <span>��Ƹ������<?php echo $this->_tpl_vars['once']['mans']; ?>
��</span> <span> ��ϵ�ˣ�<?php echo $this->_tpl_vars['once']['linkman']; ?>
 </span> <?php if ($this->_tpl_vars['once']['phone']): ?> <span> �绰��<?php echo $this->_tpl_vars['once']['phone']; ?>
</span> <?php endif; ?> <span><em><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</em></span> </div>
          <div class="yun_micro_list_yq"><em>����Ҫ��</em><?php echo ((is_array($_tmp=$this->_tpl_vars['once']['require'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
 </div>
          <div class="yun_micro_list_touch">��ַ��<?php echo $this->_tpl_vars['once']['address']; ?>
 
            <?php if ($this->_tpl_vars['once']['qq']): ?><span>QQ:<?php echo $this->_tpl_vars['once']['qq']; ?>
</span> <?php endif; ?>
            <?php if ($this->_tpl_vars['once']['email']): ?><span> ���䣺<?php echo $this->_tpl_vars['once']['email']; ?>
</span> <?php endif; ?> <em> <a href="javascript:;" onclick="showdd('1','<?php echo $this->_tpl_vars['once']['id']; ?>
');">ˢ��</a> | <a href="<?php echo smarty_function_url(array('m' => 'once','url' => "c:show,id:".($this->_tpl_vars['once']['id'])), $this);?>
" target="_blank">�鿴</a> | <a href="javascript:;" onclick="showdd('2','<?php echo $this->_tpl_vars['once']['id']; ?>
')" >�޸�</a> | <a href="javascript:;" onclick="showdd('3','<?php echo $this->_tpl_vars['once']['id']; ?>
');">ɾ��</a></em></div>
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
          <div class="listno-content"> <strong>�ܱ�Ǹ��û���ҵ�����������ְλ</strong><br>
            <span> ��������<br>
            1���ʵ�������ѡ�������<br>
            2���ʵ�ɾ������������ؼ���<br>
            </span> <span> ���Źؼ��֣�<br>
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
            <input class="Fast_text placeholder" id="Fastkeyword" type="text" size="45" value="��������������" onclick="if(this.value=='��������������'){this.value=''}" onblur="if(this.value==''){this.value='��������������'}" name="keyword">
            <input class="Fast_submit" type="submit" value=" ">
          </form>
          <span class="why_fast">Ϊ����һЩ�չ�����ҵ(�緹��,����,���廧��)������Ƹ��Ϣ,���趨������ע��,���ɷ��������Ƹ�Ĺ���,�ڸ�����ṩ�˸������Ϣ��ͬʱҲ���ڵ�������,�����޷�����Щ����������ʵ.<br>
          ��������Ϣ����ҵ����幤�̻������ṩ������ҵ����幤�̻�������Ϣ���ݵ���ʵ�ԡ�׼ȷ�ԺͺϷ��ԡ���վ�Դ˲��е��κα�֤����������. </span> </div>
      </div>
    </div>
  </div>
</div>
<!--������-->
<div style="display:none;" id="postpw">
  <div>
    <ul class="micro_resume_release_list">
      <li><span><font color="#FF3300">*</font> ���룺</span>
        <input id="pw" type='password' class="micro_resume_release_text" style='width:100px'/>
        <em style="line-height:28px; display:inline-block; margin-left:5px;">���������ʱ�����롣</em> </li>
      <li><span><font color="#FF3300">*</font> ��֤�룺</span>
        <input type="text" id="code" class="micro_resume_release_text micro_resume_release_text2" style='width:100px'/>
        <a href="javascript:check_codes();"><img id="vcode_imgs" src="include/authcode.inc.php"></a>
        <!--a href="javascript:check_codes();">�����壬��һ��</a-->
      </li>
      <li><span>&nbsp; </span>
        <input type="hidden" id="tid"/>
        <input type="hidden" id="type"/>
        <input class="fast_submit" type="button" value="�ύ" onclick="post_pass();">
      </li>
    </ul>
  </div>
</div>
<!--������ end-->
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