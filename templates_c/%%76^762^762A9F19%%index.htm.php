<?php /* Smarty version 2.6.26, created on 2015-01-29 18:22:54
         compiled from default/tiny/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/tiny/index.htm', 66, false),array('modifier', 'mb_substr', 'default/tiny/index.htm', 66, false),)), $this); ?>
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
<link href="<?php echo $this->_tpl_vars['style']; ?>
/style/Micro_resume.css" rel="stylesheet" type="text/css" />
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
<script>var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
';var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"; </script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/fast.js" language="javascript"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="micro_resume_bg">
  <div class="micro_resume">
    <div class="micro_resume_cont">
      <div class="current_Location icon png"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > ΢����</div>
      <div class="tiny_banner_img"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_tiny.jpg" width="920" height="146"></div>
      <div class="clear"></div>
      <div class="micro_resume_list" style="min-height:400px;_height:400px;">
        <form action="index.php"   method="get" onsubmit="return search_keyword(this);">
          <div class="tiny_seach_left">
            <div class="micro_resume_list_icon"></div>
            <div class="micro_resume_text1">
              <select name="add_time" id="add_time" class="micro_resume_select">
                <option value="7">һ��</option>
                <option value="15">�����</option>
                <option value="30">һ����</option>
                <option value="60">������</option>
                <option value="180">����</option>
                <option value="365">һ��</option>
                <option value="0">����</option>
              </select>
            </div>
            <div class="tSch">
              <input class="m_input" type="hidden" name="m" value="tiny">
              <div class="micro_resume_text">
                <input id="key_word" class="ac_input placeholder" type="text" value="����������ؼ��֣����磺���" name="keyword" onclick="if(this.value=='����������ؼ��֣����磺���'){this.value=''}" placeholder="����������ؼ��֣����磺���" onblur="if(this.value==''){this.value='����������ؼ��֣����磺���'}">
              </div>
              <input type="submit"  value="����" id="search_button" class="f_sub_input"/>
            </div>
          </div>
        </form>
        <ul class="micro_resume_list_ul">
          <?php $_from = $this->_tpl_vars['wres']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wres']):
?>
          <li>
            <div class="micro_resume_l_left">
              <div>
                <div class="micro_resume_l_left_t"></div>
                <div class="micro_resume_l_left_b"></div>
              </div>
              <div class="micro_resume_l_bj">�༭</div>
            </div>
            <div class="micro_resume_l_right">
              <div class="micro_resume_qz"><a href="<?php echo smarty_function_url(array('m' => 'tiny','url' => "c:show,id:".($this->_tpl_vars['wres']['id'])), $this);?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['wres']['job'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 30, 'gbk') : mb_substr($_tmp, 0, 30, 'gbk')); ?>
</a><i><?php echo $this->_tpl_vars['wres']['time']; ?>
</i></div>
              <div class="micro_resume_name"> <em>�ҽ�<?php echo $this->_tpl_vars['wres']['username']; ?>
/ <?php echo $this->_tpl_vars['wres']['sex_name']; ?>
</em> <em style="width:120px;">�������飺<?php echo $this->_tpl_vars['wres']['exp_name']; ?>
</em> <?php if ($this->_tpl_vars['config']['user_wjl_link'] == '1' && $this->_tpl_vars['cookie']['uid'] <= 0): ?> <em style="width:200px;">��¼��鿴��ϵ��ʽ</em> <?php else: ?> <em style="width:212px;">TEL:<span class="micro_blue"><?php echo $this->_tpl_vars['wres']['mobile']; ?>
<?php if ($this->_tpl_vars['wres']['qq']): ?>/QQ:<?php echo $this->_tpl_vars['wres']['qq']; ?>
<?php endif; ?></span></em> <?php endif; ?> <a href="javascript:void(0);" onclick="showdd1('1','<?php echo $this->_tpl_vars['wres']['id']; ?>
')">ˢ��</a> | <a href="<?php echo smarty_function_url(array('m' => 'tiny','url' => "c:show,id:".($this->_tpl_vars['wres']['id'])), $this);?>
" target="_blank">�鿴</a> | <a href="javascript:void(0);" onclick="showdd1('2','<?php echo $this->_tpl_vars['wres']['id']; ?>
')">�޸�</a> | <a href="javascript:void(0);" onclick="showdd1('3','<?php echo $this->_tpl_vars['wres']['id']; ?>
')">ɾ��</a> </div>
              <div class="micro_resume_p"> <?php echo ((is_array($_tmp=$this->_tpl_vars['wres']['production'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 100, 'gbk') : mb_substr($_tmp, 0, 100, 'gbk')); ?>
</div>
            </div>
          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
        <div class="clear"></div> 
        <?php if ($this->_tpl_vars['total'] != 0): ?>
        <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['total'] == 0): ?>
        <div class="seachno" style="background:#FFF; width:525px;">
          <div class="seachno_left"> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif" width="144" height="102"></div>
          <div class="listno-content" style="margin-left:30px;"> <strong>�ܱ�Ǹ��û���ҵ����������ļ���</strong><br>
            <span> ��������<br>
            1���ʵ�������ѡ�������<br>
            2���ʵ�ɾ������������ؼ���<br>
            </span> </div>
        </div>
        <?php endif; ?> </div>
      <div class="micro_right">
        <div class="tiny_seach"><a href='javascript:void(0);' onclick="showfabu1()" title="����΢����" class="micro_resume_fast" >����΢����</a></div>
        <p>�ڼ�̵���������Լ���չʾ�Լ�����˾��������ֱ�����ļ�����Ҫ����������΢����������Ȼ��ݶ��ҽ������У����Ͼ�ÿ��΢��Ϣ�����ޣ������ְ�߻���Ҫ����ʽ������Ӵ�ĥ������һ�������Լ���ϸ������ע�� </p>
      </div>
    </div>
  </div>
</div>
<div class="" style="display:none;width:460px" id="fabufast1">
  <div >
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form  method="post" action="<?php echo smarty_function_url(array('m' => 'tiny'), $this);?>
" onSubmit="return check_resume_tiny()" target="supportiframe">
      <ul class="micro_resume_release_list">
        <li><span><font color="#FF3300">*</font> ������</span>
          <input  type="text" value="<?php echo $this->_tpl_vars['onshow']['username']; ?>
" name="username" id="username" class="micro_resume_release_text">
          <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
          <input type="radio" name="sex" id="sex<?php echo $this->_tpl_vars['v']; ?>
" value="<?php echo $this->_tpl_vars['v']; ?>
" checked="checked" class="micro_resume_release_radio" style="margin-left:5px;"/>
          <em><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
<?php echo $this->_tpl_vars['onshow']['sex']; ?>
</em> <?php endforeach; endif; unset($_from); ?> </li>
        <li><span><font color="#FF3300">*</font> �������ޣ�</span>
          <div class="micro_resume_text1" style="border:1px solid #ccc; padding:2px;">
            <select id="exp" name="exp">
              
            <?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['onshow']['exp'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
              
            <?php endforeach; endif; unset($_from); ?>
            
            </select>
          </div>
        </li>
        <li><span><font color="#FF3300">*</font> ����ְλ��</span>
          <input type="text" id="job" name="job" value="<?php echo $this->_tpl_vars['onshow']['job']; ?>
" class="micro_resume_release_text"/>
        </li>
        <li><span><font color="#FF3300">*</font> �ֻ���</span>
          <input type="text" name="mobile" id="mobile" value="<?php echo $this->_tpl_vars['onshow']['mobile']; ?>
" class="micro_resume_release_text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </li>
        <li><span><font color="#FF3300">*</font> ��ϵQQ��</span>
          <input type="text" id="qq" name="qq" value="<?php echo $this->_tpl_vars['onshow']['qq']; ?>
" class="micro_resume_release_text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </li>
        <li><span><font color="#FF3300">*</font> ���ҽ��ܣ�</span>
          <textarea id="production" name="production" style="width:300px; height:70px;border:1px solid #ccc; font-size:12px;color:#666"><?php echo $this->_tpl_vars['onshow']['production']; ?>
</textarea>
        </li>
        <li class="add"><span><font color="#FF3300">*</font> ���룺</span>
          <input type="password" name="password" id="password" value="" class="micro_resume_release_text" style='width:100px' onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"/>
          <em style="line-height:28px; display:inline-block; margin-left:5px;">�����޸���Ϣʱʹ��,<font color="#FF3300">���μǣ�</font></em> </li>
        <li class="add"><span><font color="#FF3300">*</font> ��֤�룺</span>
          <input type="text" id="authcode" name="authcode" class="micro_resume_release_text micro_resume_release_text2" />
          <a href="javascript:check_code();"><img id="vcode_img" src="include/authcode.inc.php"></a>
          <!--a href="javascript:check_code();">��һ��</a-->
        </li>
        <li><span>&nbsp; </span>
          <input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['onshow']['id']; ?>
"/>
          <input class="fast_submit" type="submit" value="����" id="botton" name="submit" >
        </li>
        <li class="micro_resume_prompt">
          <p>1.����ǰ��IP�ǣ�<?php echo $this->_tpl_vars['ip']; ?>
���벻Ҫ������١�Υ����Ϣ��</br>
            2.�����Ʊ������룬���������ˢ��/�޸�/ɾ����Ϣ��</p>
        </li>
      </ul>
    </form>
  </div>
</div>
<div style="display:none;" id="postpw">
  <div>
    <ul class="micro_resume_release_list">
      <li><span><font color="#FF3300">*</font> ���룺</span>
        <input id="pw" type="password" value="" class="micro_resume_release_text" style='width:100px'/>
        <em style="line-height:28px; display:inline-block; margin-left:5px;">���������ʱ�����롣</em> </li>
      <li><span><font color="#FF3300">*</font> ��֤�룺</span>
        <input type="text" id="code" class="micro_resume_release_text micro_resume_release_text2" style='width:100px'/>
        <a href="javascript:check_codes();"><img id="vcode_imgs" src="include/authcode.inc.php"></a>
        <!--a href="javascript:check_codes();">��һ��</a-->
      </li>
      <li><span>&nbsp; </span>
        <input type="hidden" id="tid"/>
        <input type="hidden" id="type"/>
        <input class="fast_submit" type="button" value="�ύ" onclick="post_password();">
      </li>
    </ul>
  </div>
</div>
<script type="text/javascript">  
$(document).ready(function(){  
	$(window).scroll(function(){
		var scroll_Top = $(window).scrollTop();
		var width=document.body.clientWidth; 
		if(scroll_Top>373){ 
 			if(window.XMLHttpRequest){
				var top=0;
				var right=(width-924)/2+"px";
			}else{ 
				var top=parseInt(scroll_Top)-(175);
				var right=0; 
			}
			$(".micro_right").attr("style","position: fixed;top:"+top+"px;_position:absolute;right:"+right+";"); 
		}else{
			$(".micro_right").attr("style","");
		} 
	});
});  
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>