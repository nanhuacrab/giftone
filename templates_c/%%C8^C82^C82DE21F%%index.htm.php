<?php /* Smarty version 2.6.26, created on 2015-02-01 04:13:37
         compiled from default/friend/index.htm */ ?>
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
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon,.yun_wap_m_bg,.micro_box');
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
/style/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function check_link(id){
	if(id==2){
		$(".photo").toggle();
	}
}
function photo_change(id){
	$(".photo div").hide();
	$("#image"+id).show();
}
function checkform(myform)
{
  if($.trim(myform.title.value)==""){		
	layer.msg('请填写链接标题！', 2, 3);return false; 
      myform.title.focus();
      return (false);
  }	
  if($.trim(myform.url.value)=="") 
  {
      layer.msg('请填写链接地址！', 2, 3);return false; 
      myform.url.focus();
      return (false);
  }	
  if (myform.authcode.value=="") 
  { 
	  layer.msg('请填写验证码！', 2, 3);return false; 
      myform.authcode.focus();
      return (false);
  }	
  return true;
}	
</script>
<div class="yun_content">
  <div class="clear"></div>
  <div class="fri_left">
    <h1>链接合作要求</h1>
    <p> <strong>说明:</strong> <br>
      1、贵网站为人才相关网站； <br>
      2、贵网站要在百度google都有记录收录，且网站访问速度不能太慢； <br>
      3、申请之前，请确认贵站已经加入我们的链接，我们会在1-2工作日审核。 <br>
      网址: <span style="color:#006697;display: inline-block; *display:inline; zoom:1;font-family: Tahoma, Geneva, sans-serif;height: 25px;line-height: 25px;"><?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
</span> <br>
      名称:<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
 <br>
      全国业务咨询电话： <br>
      <span style="color:#ff5003;display: block;font-family: Tahoma, Geneva, sans-serif;font-size: 18px;font-weight: bold;"><?php echo $this->_tpl_vars['config']['sy_freewebtel']; ?>
</span> 联系电话： <span style="color:#006697;display: inline-block; *display:inline; zoom:1;font-family: Tahoma, Geneva, sans-serif;height: 25px;line-height: 25px;"><?php echo $this->_tpl_vars['config']['sy_webtel']; ?>
</span> <br>
      邮箱： <span style="color:#006697;display: inline-block; *display:inline; zoom:1;font-family: Tahoma, Geneva, sans-serif;height: 25px;line-height: 25px;"><?php echo $this->_tpl_vars['config']['sy_webemail']; ?>
</span> </p>
  </div>
  <div class="fri_right">
    <h1>申请链接</h1>
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form onsubmit="return checkform(this);"  target="supportiframe" enctype="multipart/form-data" method="post" action="index.php?m=friend" name="myform">
      <ul>
        <li> <strong>链接类型：</strong> <span class="keyword">
          <select onchange="check_link(this.value);" name="type">
            <option value="1">文字链接</option>
            <option value="2">图片链接</option>
          </select>
          </span> </li>
        <li> <strong>链接标题：</strong>
          <input class="bot" type="text" name="title" size="40" value="">
          例：PHP人才网 </li>
        <li> <strong>链接地址：</strong>
          <input class="bot" type="text" name="url" size="30" value="">
          例：http://www.phpyun.com </li>
        <li  style="display:none;" class='photo'> <strong>缩 略 图：</strong>
          <input type="radio" onclick="photo_change(this.value)" value="1" name="phototype" checked='checked'>
          上传图片 &nbsp;
          <input type="radio" onclick="photo_change(this.value)" value="2" name="phototype">
          远程图片 </li>
        <li  style="display:none;" class='photo'> <strong>&nbsp;</strong>
          <div id="image1">
            <input class="bot" type="file" size="40" name="uplocadpic">
          </div>
          <div id="image2" style="display: none;">
            <input class="bot" type="text" size="40" name="uplocadpic">
            例：http://www.phpyun.com/yun.jpg </div>
        </li>
        <li> <strong>验 证 码：</strong>
          <input id="txt_CheckCode" type="text" style="width:110px;" maxlength="4" name="authcode" class="bot" >
          <img id="vcode_img" src="include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;"><a href="javascript:check_code();">看不清</a> </li>
        <li> <strong>&nbsp;</strong>
          <input class="login_button2" type="submit" name="submit" value=" ">
        </li>
      </ul>
    </form>
 <div class="clear"></div>
     <h1>友情链接</h1>
        <div class="friend_link"> <?php $_from = $this->_tpl_vars['linklist2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist2']):
?> <a href="<?php echo $this->_tpl_vars['linklist2']['link_url']; ?>
"><?php echo $this->_tpl_vars['linklist2']['link_name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> </div>
      <div class="friend_link_img"> <?php $_from = $this->_tpl_vars['linklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist']):
?> <a href="<?php echo $this->_tpl_vars['linklist']['link_url']; ?>
"><img src="<?php echo $this->_tpl_vars['linklist']['pic']; ?>
" width="130" height="35"/></a> <?php endforeach; endif; unset($_from); ?> </div>
</div>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>