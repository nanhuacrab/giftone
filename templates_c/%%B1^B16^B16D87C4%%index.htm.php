<?php /* Smarty version 2.6.26, created on 2015-01-29 18:32:21
         compiled from company/default/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'company/default/index.htm', 24, false),array('function', 'image', 'company/default/index.htm', 41, false),array('function', 'curl', 'company/default/index.htm', 49, false),array('modifier', 'date_format', 'company/default/index.htm', 84, false),)), $this); ?>
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
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['com_style']; ?>
/images/comapply.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
  <div class="current_Location icon png"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">ְλ�б�</a> > ��ҵ���� </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/job_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="Job_Introduction_cont">
    <div class="Job_Brief"><?php echo $this->_tpl_vars['com']['content']; ?>
</div>
    <div class="Job_Introduction_h1"><span>��������</span></div>
    <div class="clear"></div>
    <div class="JoB_material">
      <ul>
        <li><span class="JoB_material_left">��˾����</span> <em class="JoB_material_right"><?php echo $this->_tpl_vars['com']['pr_info']; ?>
 &nbsp;</em> <span class="JoB_material_left"> ����ʱ��</span> <em class="JoB_material_right JoB_material_line"><?php echo $this->_tpl_vars['com']['sdate']; ?>
 &nbsp;</em> </li>
        <li><span class="JoB_material_left">��˾��ҵ</span> <em class="JoB_material_right"><?php echo $this->_tpl_vars['com']['hy_info']; ?>
 &nbsp;</em> <span class="JoB_material_left"> ��˾��ģ</span> <em class="JoB_material_right JoB_material_line"><?php echo $this->_tpl_vars['com']['mun_info']; ?>
&nbsp; </em> </li>
        <?php if ($this->_tpl_vars['look_msg'] == ""): ?>
        <li>
		<span class="JoB_material_left">�� ϵ ��</span> 
		<?php if ($this->_tpl_vars['com']['linkman']): ?>
		<em class="JoB_material_right"><?php echo $this->_tpl_vars['com']['linkman']; ?>
 &nbsp;</em>
		<?php else: ?><em class="JoB_material_right">���� &nbsp;</em><?php endif; ?>
		 <span class="JoB_material_left"> ��ϵ�绰</span> 
		 <?php if ($this->_tpl_vars['com']['linktel']): ?><em class="JoB_material_right JoB_material_line" style="height:34px;"><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['com']['uid'],'number' => $this->_tpl_vars['com']['linktel'],'action' => 'linktel'), $this);?>
</em>
		 <?php else: ?><em class="JoB_material_right JoB_material_line">����</em><?php endif; ?>
		</li>
        <li><span class="JoB_material_left">��ϵ����</span> <em class="JoB_material_right"><?php echo $this->_tpl_vars['com']['linkmail']; ?>
&nbsp;</em>  <span class="JoB_material_left"> �̶��绰</span> 
		 <?php if ($this->_tpl_vars['com']['linkphone']): ?><em class="JoB_material_right JoB_material_line" style="height:34px;"><?php echo smarty_function_image(array('uid' => $this->_tpl_vars['com']['uid'],'number' => $this->_tpl_vars['com']['linkphone'],'action' => 'linkphone'), $this);?>
</em>
		 <?php else: ?><em class="JoB_material_right JoB_material_line">����</em><?php endif; ?></li>
       
       
        <li class="JoB_material_left"><span class="JoB_material_left">��˾��ַ</span> <em class="JoB_material_right  "><?php echo $this->_tpl_vars['com']['address']; ?>
 <a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",tp:position"), $this);?>
">�鿴��ͼ</a></em> 
		 <span class="JoB_material_left"> ��ҵ��ַ</span> 
		<em class="JoB_material_right JoB_material_line" style="height:34px;"><?php echo $this->_tpl_vars['com']['website']; ?>
</em>
		</li>
        <?php endif; ?>
        
        
        
        
      </ul>    <?php if ($this->_tpl_vars['looktype'] == '1' || $this->_tpl_vars['look_msg'] != ""): ?>
    <div class="about_touch_logoin" style="border:none; background:none;width:500px; margin:0 auto;">
        <div class="about_touch_title">
            <div class="about_touch_red"><?php echo $this->_tpl_vars['look_msg']; ?>
</div>       

            <?php if ($this->_tpl_vars['looktype'] == '1'): ?>
            <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=expect&add=<?php echo $this->_tpl_vars['uid']; ?>
" class="yun_bth_icon">��������</a>
            <?php elseif ($this->_tpl_vars['looktype'] == '2'): ?>
            <a class="yun_bth_icon" href="<?php echo smarty_function_url(array('m' => 'login','url' => "usertype:1"), $this);?>
">������½</a> 
            <a class="yun_bth_icon" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
">����ע��</a>
            <?php else: ?>
            <a class="yun_bth_icon" href="<?php echo smarty_function_url(array('m' => 'login','url' => "c:rest"), $this);?>
">������½</a> 
            <?php endif; ?>
        </div>
  	</div>
    <?php endif; ?>
    </div>

    <div class="clear"></div>
    <div class="Job_Introduction_h1"><span>��˾����</span></div>
    <div class="Job_comment">
      <div class="Job_comment_left"> 
		<?php if ($this->_tpl_vars['msglist']): ?>
			<div class="Job_comment_left_c"> 
			<?php $_from = $this->_tpl_vars['msglist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
			  <div class="Comment_list" <?php if (empty ( $this->_tpl_vars['msglist'] )): ?>style="display:none;"<?php endif; ?>>
				<div class="Comment_time"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</div>
				<div class="Comment_dd"></div>
				<div class="Comment_icon2"></div> 
				<div class="Comment_list_right">
				  <div class="Comment_w608"><span class="fl"> <a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "uid:".($this->_tpl_vars['v']['uid'])), $this);?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>��<?php echo $this->_tpl_vars['v']['content']; ?>
</span> </div>
	 
				  <?php if ($this->_tpl_vars['v']['reply'] != ""): ?> 
				  <div class="Comment_w608">
					<div class="tips_reply">��ҵ�ظ���<span><?php echo $this->_tpl_vars['v']['reply']; ?>
</span></div>
				  </div>
				  <?php endif; ?> </div>
			  </div>  
			  <?php endforeach; endif; unset($_from); ?>
			  
			</div> 
			<?php if ($this->_tpl_vars['msg_num']): ?>
			  <div style="float:right">
				����ҵ����<?php echo $this->_tpl_vars['msg_num']; ?>
�����ۣ�<a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['id']).",c:msg"), $this);?>
">����鿴ȫ��>></a>
			  </div>
			  <?php endif; ?>
		<?php else: ?>
			<div class="com_index_pl">��δ�������۹�����ҵ���Ͽ�������һ�°ɣ���</div>
		<?php endif; ?> 
      </div>
      <div class="Job_comment_right">
      <?php if ($this->_tpl_vars['usertype'] != 1): ?>
      <div class="Job_user_no">
    <div class="Job_ask_bg"></div>
     <div class="Job_ask_bg_login">����û�е�¼���������Ǹ����û����� ��<a href="<?php echo smarty_function_url(array('m' => 'login','url' => "c:rest"), $this);?>
">��½</a>��</div>
     </div>
       <?php else: ?>
        <div class="Job_Company_h1 fl"><span>��Ҫ����</span></div>
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

        <form action="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['com']['uid'])), $this);?>
" target="supportiframe" method="post" onSubmit="return check_pl();">
          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
"/>
          <div class="commpay_textarea">
            <div class="Comment_list_top"></div>
            <textarea  class="program_tooltip placeholder" id="content" name="content" data-rid="949"></textarea>
          </div>
          <div class="commpay_Comment_input">
            <input class="program_reply_pl" type="submit" name="submit" value="�ύ����">
            <span>���������˾��ʲô������</span></div>
        </form>
        <?php endif; ?></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="commpay_Comment">
<div id="huifu<?php echo $this->_tpl_vars['v']['id']; ?>
" style="display:none;">
  <form action="index.php" method="post" onSubmit="return check_huifu('<?php echo $this->_tpl_vars['v']['id']; ?>
');">
    <div class="Comment_w608">
      <textarea class="Comment_textarea_hf" tip-text="˵�����```" id="reply<?php echo $this->_tpl_vars['v']['id']; ?>
" name="content"></textarea>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" />
    </div>
    <div class="Comment_w608">
      <input class="program_reply" type="submit" name="submit2" value="�ظ�">
    </div>
  </form>
</div>
<div class="clear"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['defaultstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>