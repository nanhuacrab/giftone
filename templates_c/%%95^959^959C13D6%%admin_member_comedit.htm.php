<?php /* Smarty version 2.6.26, created on 2015-01-31 15:10:43
         compiled from admin/admin_member_comedit.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_member_comedit.htm', 74, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script src="js/check_public.js"></script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
<h6>企业会员信息</h6>
</div>
<script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script>
<script language="javascript">
var editor;
KindEditor.ready(function(K) {
	editor = K.create('#content', {
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		items : [
			'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist']
	});
});
function editrat(){
	var ratingid = $("#rating_name").val();
	var uid = $("#uid").val();
	var pytoken = $('#pytoken').val();
	$.post("index.php?m=admin_company&c=rating",{ratingid:ratingid,uid:uid,pytoken:pytoken},function(data){
		if(data==1){
			parent.layer.msg('操作成功！', 2, 9);
		}else{
			parent.layer.msg('网络繁忙，请稍后再试！', 2,8);
		}

	})
}
function cleartime(){
	$("#vip_etime").val('');
}
</script>
<div class="main_tag" >
<div class="tag_box">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form name="myform" target="supportiframe" action="index.php?m=admin_company&c=<?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>edit<?php else: ?>add<?php endif; ?>" method="post" >
<table width="100%" class="table_form" style="background:#fff;">
<tr><td colspan="4"><font style="color:#3a6ea5;">基本资料</font></td></tr>
<tr>
		<th width="150" align="left">会员级别：</th>
		<td width="200">
        <select name="ratingid" id="rating_name">
        <?php $_from = $this->_tpl_vars['rating_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ratings']):
?>
        <option value="<?php echo $this->_tpl_vars['ratings']['id']; ?>
" <?php if ($this->_tpl_vars['ratings']['id'] == $this->_tpl_vars['statis']['rating']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['ratings']['name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
        <a href="javascript:;" onClick="editrat();">修改会员级别</a>
        </td>
		<th>到期时间：</th>
		<td>
        <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
        <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
        <input id="vip_etime" class="input-text" type="text" readonly size="20" value="<?php if ($this->_tpl_vars['statis']['vip_etime'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['statis']['vip_etime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php endif; ?>" name="vip_etime">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "vip_etime",
        trigger : "vip_etime",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script>
        <a href="javascript:;" onClick="cleartime();">无限期</a>
		</td>
	</tr>
<tr class="admin_table_trbg" >
		<th>用户名：</th>
		<td width="350"><?php if (is_array ( $this->_tpl_vars['com_info'] )): ?><?php echo $this->_tpl_vars['com_info']['username']; ?>
<?php else: ?> <input type="text"  value="" name="username" class="input-text"><?php endif; ?></td>
         <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <th>注册IP：</th>
		<td><?php echo $this->_tpl_vars['com_info']['reg_ip']; ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
	<tr>
		<th>密码：</th>
		<td><input type="text" value="" name="password" class="input-text">
		<font color="gray">不修改请留空!</font>
		</td>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <th width="120">注册时间：</th>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['com_info']['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
<tr class="admin_table_trbg" >
		<th>E-mail：</th>
		<td><input type="text" value="<?php echo $this->_tpl_vars['com_info']['email']; ?>
" name="email" class="input-text">
		<font color="gray"></font>
		</td>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        	<th>登录IP：</th>
		<td><?php echo $this->_tpl_vars['com_info']['login_ip']; ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
		<tr>
		<th>联系电话：</th>
		<td><input type="text" value="<?php echo $this->_tpl_vars['com_info']['moblie']; ?>
" name="moblie" class="input-text">
		<font color="gray"></font>
        </td>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        	<th>最近登录时间：</th>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['com_info']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>

		<font color="gray"></font>

		</td>
        <?php endif; ?>
	</tr>
 <tr class="admin_table_trbg" >
		<th>联系地址：</th>
		<td><input type="text" value="<?php echo $this->_tpl_vars['row']['address']; ?>
" name="address" class="input-text">
		<font color="gray"></font>
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <th>登录次数：</th>
		<td><?php echo $this->_tpl_vars['com_info']['login_hits']; ?>

		<font color="gray"></font>
		</td>
        <?php endif; ?>
	</tr>
    <tr>
		<th>企业全称：</th>
		<td><input type="text" size="45" name="name" class="input-text" value="<?php echo $this->_tpl_vars['row']['name']; ?>
"></td>
		<th>从事行业：</th>
		<td>
        <select name="hy" id="hy">
            <option value='' selected>--请选择--</option>
                <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['hy'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
          </select></td>
	</tr>
   <tr class="admin_table_trbg" >
		<th>企业性质：</th>
		<td>
        <select name="pr" id="pr">
            <option value='' selected>--请选择--</option>
            <?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['pr'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select></td>
		<th>企业地址：</th>
		<td>
            <select name="provinceid" id="provinceid" class="province" lid="cityid">
              <option value="">请选择省份</option>
                <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['provinceid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <select name="cityid" size="1" id="cityid" class="province">
                <option value="">请选择城市</option>
                <?php if ($this->_tpl_vars['row']['provinceid']): ?>
                    <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                  <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['cityid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </select></td>
	</tr>
    <tr>
		<th>企业规模：</th>
		<td>
        <select name="mun">
                        <?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
            <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['mun'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select></td>
		<th>固定电话：</th>
		<td><input type="text" name="linkphone" class="input-text" size="15" value="<?php echo $this->_tpl_vars['row']['linkphone']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9-]/g,'')" /></td>
	</tr>
    <tr class="admin_table_trbg" >
		<th>注册资金：</th>
		<td><input type="text" name="money" size="10" class="input-text" value="<?php if ($this->_tpl_vars['row']['money'] == ''): ?>0<?php else: ?><?php echo $this->_tpl_vars['row']['money']; ?>
<?php endif; ?>" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /> 万元 </td>
		<th>邮政编码：</th>
		<td><input type="text" name="zip" size="10" class="input-text" value="<?php echo $this->_tpl_vars['row']['zip']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" /></td>
	</tr>
    <tr>
		<th>联系人：</th>
		<td><input type="text" name="linkman" size="15" class="input-text" value="<?php echo $this->_tpl_vars['row']['linkman']; ?>
" /></td>
		<th>所属职位：</th>
		<td><input type="text" name="linkjob" size="15" class="input-text" value="<?php echo $this->_tpl_vars['row']['linkjob']; ?>
" /></td>
	</tr>
	<tr class="admin_table_trbg" >
		<th>联系QQ：</th>
		<td><input type="text" name="linkqq" size="15" class="input-text" value="<?php echo $this->_tpl_vars['row']['linkqq']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<th>企业网址：</th>
		<td><input type="text" name="website" size="35" class="input-text" value="<?php echo $this->_tpl_vars['row']['website']; ?>
" /></td>
	</tr> 
 	<tr>
		<th>企业简介：</th>
		<td colspan="3"><textarea name="content" id="content" cols="70" rows="8"><?php echo $this->_tpl_vars['row']['content']; ?>
</textarea></td>
	</tr>
 	<tr class="admin_table_trbg">
		<th>管理员评价：</th>
		<td colspan="3"><input type="text" name="admin_remark" size="70" class="input-text" value="<?php echo $this->_tpl_vars['row']['admin_remark']; ?>
" /></td>
	</tr>
	<tr >
		<th>状态：</th>
		<td colspan="3"><input type="radio" checked name="status" value="0">未审核
            <input type="radio" <?php if ($this->_tpl_vars['com_info']['status'] == '1'): ?>checked<?php endif; ?> name="status" value="1">已审核
            <input type="radio"   <?php if ($this->_tpl_vars['com_info']['status'] == '2'): ?>checked<?php endif; ?> name="status" value="2">锁定
		<font color="gray"></font>
		</td>
	</tr>
	<tr id="lock_info" <?php if ($this->_tpl_vars['com_info']['status'] != '2'): ?>style="display:none"<?php endif; ?>>
	<th>锁定说明：</th>
	<td colspan="3"><textarea   name="lock_info" cols="70" rows="2"><?php echo $this->_tpl_vars['com_info']['lock_info']; ?>
</textarea></td>
    </tr>
	<tr><td colspan="4"><font style="color:#3a6ea5;">账户数据</font></td></tr>
    <tr>
		<th>剩余职位数：</th>
		<td><input type="text" name="job_num" size="15" class="input-text" value="<?php echo $this->_tpl_vars['statis']['job_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<th>剩余下载数：</th>
		<td><input type="text" name="down_resume" size="15" class="input-text" value="<?php echo $this->_tpl_vars['statis']['down_resume']; ?>
" /></td>
	</tr>
	<tr class="admin_table_trbg" >
		<th>修改职位数：</th>
		<td><input type="text" name="editjob_num" size="15" class="input-text" value="<?php echo $this->_tpl_vars['statis']['editjob_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<th>邀请人才面试数：</th>
		<td><input type="text" name="invite_resume" size="15" class="input-text" value="<?php echo $this->_tpl_vars['statis']['invite_resume']; ?>
" /></td>
	</tr>
    <tr>
		<th>刷新职位数：</th>
		<td><input type="text" name="breakjob_num" size="15" class="input-text" value="<?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<th>短信数：</th>
		<td><input type="text" name="msg_num" size="15" class="input-text" value="<?php echo $this->_tpl_vars['statis']['msg_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
	</tr>
	<tr class="admin_table_trbg" >
		<td align="center" colspan="4">
        <?php if (is_array ( $this->_tpl_vars['com_info'] )): ?>
        <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['com_info']['uid']; ?>
" id="uid"/>
        <input type="hidden" name="lasturl" value="<?php echo $this->_tpl_vars['lasturl']; ?>
">
        <input class="admin_submit4" type="submit" name="com_update" value="&nbsp;修 改&nbsp;" />
        <?php else: ?>
        <input class="admin_submit4" type="submit" name="com_add" value="&nbsp;添 加&nbsp;" />
        <?php endif; ?>
		<input class="admin_submit4" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
	</tr>
</table>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
<script language="javascript">
$(document).ready(function(){
	$("input[name=status]").click(function(){
		if($(this).val()=="2"){
			$("#lock_info").show();
		}else{
			$("#lock_info").hide();
		}
	})
});
</script>
</div></div></div></div>
</body>
</html>