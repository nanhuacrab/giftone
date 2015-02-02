<?php /* Smarty version 2.6.26, created on 2015-02-03 00:23:47
         compiled from admin/admin_wx.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"><div class="infoboxp_top_bg"></div>
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp_top">
	<span class="admin_title_span">微信客户端设置</span>
        <a href="index.php?m=wx&c=wxnav" class="admin_infoboxp_nav admin_infoboxp_gl">菜单管理</a>
        <em class="admin-tit_line"></em>
        <a href="index.php?m=wx&c=binduser" class="admin_infoboxp_nav admin_infoboxp_lb">用户绑定列表</a>
        <em class="admin-tit_line"></em>
        <a href="index.php?m=wx&c=keyword" class="admin_infoboxp_nav admin_infoboxp_tag">搜索关键字</a>
         <em class="admin-tit_line"></em>
        <a href="index.php?m=wx&c=wxlog" class="admin_infoboxp_nav admin_infoboxp_rz">用户操作日志</a>
 
</div>
<div class="main_tag">
<div class="tag_box">
    <div>
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
	<form name="myform" target="supportiframe" action="index.php?m=wx&c=save" method="post" enctype="multipart/form-data">

         <table width="100%" class="table_form">
            <tr class="admin_table_trbg">
                <th width="140">微信服务器设置：</th>
                <td></td>
            </tr>
             <tr>
                <th width="140">URL：</th>
                <td><?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/weixin/index.php<font color="gray" style="display:none"></font></td>
            </tr>
            <tr  class="admin_table_trbg">
                <th width="140">Token：</th>
                <td><input class="input-text" type="text" name="wx_token" id="wx_token" size="30" value="<?php echo $this->_tpl_vars['config']['wx_token']; ?>
" maxlength="255" ><font color="gray" style="display:none"></font></td>
            </tr>
             <tr >
                <th width="140">开发者凭据：</th>
                <td></td>
            </tr>
            <tr  class="admin_table_trbg">
                <th width="140">AppId：</th>
                <td><input class="input-text" type="text" name="wx_appid" id="wx_appid" value="<?php echo $this->_tpl_vars['config']['wx_appid']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">如：1002478xx</font></td>
            </tr>
            <tr>
                <th width="140">AppSecret：</th>
                <td><input class="input-text" type="text" name="wx_appsecret" id="wx_appsecret" value="<?php echo $this->_tpl_vars['config']['wx_appsecret']; ?>
" size="30" maxlength="255"/><font color="gray" style="display:none">如：4dd1c30d472676914f2fbfbnjt33</font></td>
            </tr>
			
			 <tr >
                <th width="140">体验设置：</th>
                <td></td>
            </tr>

			 <tr>
                <th width="140">关注欢迎语：</th>
                <td><textarea  name="wx_welcom"  rows="10" cols='40' maxlength="255"/><?php echo $this->_tpl_vars['config']['wx_welcom']; ?>
</textarea></td>
            </tr>
			 <tr>
                <th width="140">搜索提示：</th>
                <td><textarea  name="wx_search"  rows="10" cols='40'  maxlength="255"/><?php echo $this->_tpl_vars['config']['wx_search']; ?>
</textarea></td>
            </tr>
			 <tr>	
			<th width="160">微信封面</th>
			<td><input  type="file" size="45" name="wx_logo" class="input-text">
				<?php if ($this->_tpl_vars['config']['wx_logo'] == ""): ?>
			<img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_wx_logo']; ?>
">
			<?php endif; ?>
			  </td>
			</tr>
			 <tr>
                <th width="140">公众号是否认证</th>
                <td><input type="radio" name="wx_rz" checked value='0'>未认证 <input type="radio" <?php if ($this->_tpl_vars['config']['wx_rz'] == '1'): ?>checked<?php endif; ?> name="wx_rz" value='1'>已认证</td>
            </tr>
			<tr>
                <th width="140">微信消息通知</th>
                <td><input type="radio" name="wx_xxtz" <?php if ($this->_tpl_vars['config']['wx_xxtz'] != '1'): ?>checked<?php endif; ?> value='0'>不通知 <input type="radio" <?php if ($this->_tpl_vars['config']['wx_xxtz'] == '1'): ?>checked<?php endif; ?> name="wx_xxtz" value='1'>通知</td>
            </tr>
            <tr class="admin_table_trbg">
                <td colspan="2" align="center"><input class="admin_submit4" id="wxconfig" type="submit" name="msgconfig" value="提交" />&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置" /></td>
            </tr>
			<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">	
        </table>
		</form>
		
    </div>
</div>
</div>
</div>

</body>
</html>