<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:38
         compiled from admin/admin_member_userlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_member_userlist.htm', 140, false),)), $this); ?>
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
<script>
$(function(){
	$(".status").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		var uid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		$.get("index.php?m=user_member&c=lockinfo&uid="+uid,function(msg){
			$("#alertcontent").val(msg);
			status_div('锁定用户','350','220');
		});
	});
});
function SendMsg(){
	var codewebarr="";
	$(".check_all:checked").each(function(){
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	$("#userid").val(codewebarr);
	setTimeout(function(){$('#checkform').submit()},0);
}

</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<form action="index.php?m=admin_message&c=show" method="post" id='checkform'>
  <input type="hidden" name="userid" id="userid" value="">
  <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['adminstyle'])."/member_send_email.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="status_div"  style="display:none; width: 350px; ">
  <div class="" style=" margin-top:10px; "  >
    <form action="index.php?m=user_member&c=status" target="supportiframe" method="post" id="formstatus">
      <table cellspacing='2' cellpadding='3' style="margin:0 auto">
        <tr>
          <td><span style="font-weight:bold;">锁定操作：</span></td>
          <td><label for="status1">
              <input type="radio" name="status" value="1" id="status1" >
              正常</label>
            <label for="status2">
              <input type="radio" name="status" value="2" id="status2">
              锁定</label></td>
        </tr>
        <tr>
          <td><span style="font-weight:bold;">审核说明：</span></td>
          <td><textarea id="alertcontent" name="lock_info" cols="30" rows="5"></textarea></td>
        </tr>
        <tr style="text-align:center;margin-top:10px">
          <td colspan='2' ><input type="submit"  value='确认' class="submit_btn">
            &nbsp;&nbsp;
            <input type="button" id="zxxCancelBtn" onClick="layer.closeAll();" class="cancel_btn" value='取消'></td>
        </tr>
      </table>
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <input name="uid" value="0" type="hidden">
    </form>
  </div>
</div>
<div class="infoboxp">
  <div class="infoboxp_top_bg"></div>
  <form action="index.php" name="myform" method="get">
    <input name="m" value="user_member" type="hidden"/>
    <div class="admin_Filter">
    	<span class="complay_top_span fl">个人会员列表</span>
      <div class="admin_Filter_span">搜索类型：</div>
      <div class="admin_Filter_text formselect" did='dtype'>
        <input type="button" <?php if ($this->_tpl_vars['get_type']['type'] == '' || $this->_tpl_vars['get_type']['type'] == '1'): ?> value="用户名" <?php elseif ($this->_tpl_vars['get_type']['type'] == '2'): ?> value="姓名" <?php elseif ($this->_tpl_vars['get_type']['type'] == '3'): ?> value="EMAIL" <?php elseif ($this->_tpl_vars['get_type']['type'] == '4'): ?> value="手机号" <?php endif; ?> class="admin_Filter_but" id="btype">
        <input type="hidden" name="type" id="type"  value='1'/>
        <div class="admin_Filter_text_box" style="display:none" id="dtype">
          <ul> 
            <li><a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','type','姓名')">姓名</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('3','type','EMAIL')">EMAIL</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('4','type','手机号')">手机号</a></li>
          </ul>
        </div>
      </div>
      <input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword']; ?>
" name='keyword' class="admin_Filter_search">
      <input type="submit" name='search' value="搜索" class="admin_Filter_bth">
      <span class='admin_search_div'>
      <div class="admin_adv_search">
        <div class="admin_adv_search_bth">高级搜索</div>
      </div>
      </span> <a href="index.php?m=user_member&c=add" class="admin_infoboxp_tj" style="margin-top:0px;">添加会员</a> </div>
  </form>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="user_member" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th align="left"> <?php if ($_GET['t'] == 'uid' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=user_member&order=desc&t=uid">用户ID<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=user_member&order=asc&t=uid">用户ID<img src="images/sanj2.jpg"/></a> <?php endif; ?></th>
              <th align="left">用户名</th>
              <th align="left">姓名</th>
              <th align="left">EMAIL</th>
              <th align="left">手机号</th>
              <th> <?php if ($_GET['t'] == 'reg_date' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=user_member&order=desc&t=reg_date">注册时间<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=user_member&order=asc&t=reg_date">注册时间<img src="images/sanj2.jpg"/></a> <?php endif; ?></th>
              <th> <?php if ($_GET['t'] == 'login_date' && $_GET['order'] == 'asc'): ?> <a href="index.php?m=user_member&order=desc&t=login_date">最近登录时间<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="index.php?m=user_member&order=asc&t=login_date">最近登录时间<img src="images/sanj2.jpg"/></a> <?php endif; ?></th>
              <th>登录IP</th>
           
              <th>添加/重置</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['userrows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['uid']; ?>
">
            <td width="20"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" email="<?php echo $this->_tpl_vars['v']['email']; ?>
" moblie="<?php echo $this->_tpl_vars['v']['telphone']; ?>
"/></td>
            <td align="left" class="td1" style="text-align:center; width:60px;"><?php echo $this->_tpl_vars['v']['uid']; ?>
</td>
            <td align="left"><a href="index.php?m=user_member&c=Imitate&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['username']; ?>
</a> <?php if ($this->_tpl_vars['v']['status'] == 2): ?><img src="../data/ajax_img/suo.png" alt="已锁定"><?php endif; ?> </td>
            <td align="left"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
            <td class="od" align="left"> <?php if ($this->_tpl_vars['v']['email']): ?>
              <?php echo $this->_tpl_vars['v']['email']; ?>
<br>
              <?php if ($this->_tpl_vars['email_promiss']): ?><span onClick="send_email('<?php echo $this->_tpl_vars['v']['email']; ?>
');" style="color:green; cursor:pointer;">发邮件</span><?php endif; ?>
              <?php endif; ?> </td>
            <td class="gd" align="left"> <?php if ($this->_tpl_vars['v']['telphone']): ?>
              <?php echo $this->_tpl_vars['v']['telphone']; ?>
<br>
              <?php if ($this->_tpl_vars['moblie_promiss']): ?><span onClick="send_moblie('<?php echo $this->_tpl_vars['v']['moblie']; ?>
');" style="color:green; cursor:pointer;">发信息</span> <?php endif; ?>
              <?php endif; ?> </td>
            <td class="td" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['login_date'] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

              <?php else: ?><font color="#FF0000">从未登录</font><?php endif; ?></td>
            <td align="left"><?php echo $this->_tpl_vars['v']['login_ip']; ?>
</td>
          
            <td><div><a href="index.php?m=admin_resume&c=addresume&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" >添加简历</a></div>
              <a href="javascript:void(0);" onClick="resetpw('<?php echo $this->_tpl_vars['v']['username']; ?>
','<?php echo $this->_tpl_vars['v']['uid']; ?>
');" class="admin_com_cz">点我重置</a></td>
            <td><a href="index.php?m=user_member&c=Imitate&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" target="_blank" class="admin_cz_sc">管理</a> | <a href="javascript:;" class="admin_cz_sc status" pid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
">锁定</a><br/>
              <a href="index.php?m=user_member&c=edit&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
" class="admin_cz_sc">修改</a> | <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=user_member&c=del&del=<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="4" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
              <?php if ($this->_tpl_vars['email_promiss']): ?>
              <input class="admin_submit4" type="button"  value="发邮件"  onclick="return confirm_email('确定发邮件吗？','email_div')"/>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['moblie_promiss']): ?>
              <input class="admin_submit4" type="button" value="发信息"  onclick="return confirm_email('确定发信息吗？','moblie_div')"/>
              <?php endif; ?></td>
            <td colspan="7" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
            </tbody>
        </table>
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html>