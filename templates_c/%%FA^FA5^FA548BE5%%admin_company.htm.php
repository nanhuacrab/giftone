<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:36
         compiled from admin/admin_company.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_company.htm', 317, false),array('function', 'curl', 'admin/admin_company.htm', 338, false),array('modifier', 'date_format', 'admin/admin_company.htm', 343, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script src="./js/png.js"></script>
<script>
  DD_belatedPNG.fix('.png,.admin_infoboxp_tj,');
</script>
<![endif]-->
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script type="text/javascript" src="js/admin_public.js"></script>
<script type="text/javascript" src="js/show_pub.js"></script>
<script>
function changeinput(uid,order){
	$("#"+uid).html("<input type='text'  align=\"middle\" size=\"3\" value='"+order+"' id='input"+uid+"' onBlur=\"changeorder('"+uid+"','"+order+"');\">");
	$("#input"+uid).focus();
}
function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$("input[name=uid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		$.layer({
			type : 1,
			title :'企业用户审核',
			offset: [($(window).height() - 220)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','220px'],
			page : {dom :"#infobox2"}
		});
	}
}
function changeorder(uid,order){
	var norder = $("#input"+uid).val();
	var pytoken = $("#pytoken").val();
	if(order!=norder){
		$.post("index.php?m=admin_company&c=changeorder",{uid:uid,order:norder,pytoken:pytoken},function(data){});

	}
	$("#"+uid).html("<p onClick=\"changeinput('"+uid+"','"+norder+"');\">"+norder+"</p>");
}
$(function(){
	$(".status").click(function(){
  		var uid=$(this).attr("pid");
		var pytoken=$("#pytoken").val();
		var status=$(this).attr("status");
		$("#status_"+status).attr("checked",true);
		$("input[name=uid]").val(uid);
		$.post("index.php?m=admin_company&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
			$("#lock_info").val(msg);
			status_div('锁定用户','350','220');
		});
	});
	$(".user_status").click(function(){
		var uid=$(this).attr("pid");
		var status=$(this).attr("status");
		$("#status"+status).attr("checked",true);
		var pytoken=$("#pytoken").val();
		$("input[name=uid]").val(uid);
 		$.post("index.php?m=admin_company&c=lockinfo",{uid:uid,pytoken:pytoken},function(msg){
			$("#statusbody").val(msg);
			$.layer({
				type : 1,
				title :'企业用户审核',
				offset: [($(window).height() - 220)/2 + 'px', ''],
				closeBtn : [0 , true],
				border : [10 , 0.3 , '#000', true],
				area : ['350px','220px'],
				page : {dom :"#infobox2"}
			});
		});
	});

	$(".comrating").click(function(){
  		var uid=$(this).attr("data-uid");
		var pytoken=$("#pytoken").val();
		
		$.post("index.php?m=admin_company&c=getstatis",{uid:uid,pytoken:pytoken},function(data){
		
			if(data)
			{
				var dataJson = eval("(" + data + ")"); 
				$('#job_num').val(dataJson.job_num);
				$('#down_resume').val(dataJson.down_resume);
				$('#editjob_num').val(dataJson.editjob_num);
				$('#invite_resume').val(dataJson.invite_resume);
				$('#breakjob_num').val(dataJson.breakjob_num);
				$('#oldetime').val(dataJson.vip_etime);
				$('#vipetime').text(dataJson.vipetime);
				$('#pay').val(dataJson.pay);
				$('#integral').val(dataJson.integral);
				$('#ratuid').val(uid);
				$("#ratingid").val(dataJson.rating);
				var ratingname = $("#ratingid").find("option:selected").text();
				$('#rating_name').val(ratingname);
				$.layer({
					type : 1,
					title :'企业会员等级修改',
					offset: [($(window).height() - 220)/2 + 'px', ''],
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['680px','320px'],
					page : {dom :"#comrating"}
				});
			}else{
				parent.layer.msg('用户信息获取失败！', 2, 8);	return false;
			}
		});
		

	});
});
function uprating(id){
	
	var pytoken=$("#pytoken").val();

	if(id)
	{
		$.post("index.php?m=admin_company&c=getrating",{id:id,pytoken:pytoken},function(data){
			
			if(data)
			{
				var dataJson = eval("(" + data + ")"); 
				$('#job_num').val(dataJson.job_num);
				$('#down_resume').val(dataJson.resume);
				$('#editjob_num').val(dataJson.editjob_num);
				$('#invite_resume').val(dataJson.interview);
				$('#breakjob_num').val(dataJson.breakjob_num);
				$('#vipetime').text(dataJson.vipetime);
				$('#oldetime').val(dataJson.oldetime);
				var ratingname = $("#ratingid").find("option:selected").text();
				$('#rating_name').val(ratingname);
				
			}
			
		});
	}
}

</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['adminstyle'])."/member_send_email.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="status_div"  style="display:none; width: 320px;text-align:center; ">
  <div class="" style=" margin-top:10px; "  >
    <div id="infobox">
      <form action="index.php?m=admin_company&c=lock" target="supportiframe" method="post" id="formstatus">
        <table cellspacing='2' cellpadding='3'>
          <tr>
            <td><span style="font-weight:bold;">锁定操作：</span></td>
            <td align="left"><label for="status_1">
              <input type="radio" name="status" value="1" id="status_1" >
              正常</label>
              <label for="status_2">
              <input type="radio" name="status" value="2" id="status_2">
              锁定</label></td>
          </tr>
          <tr>
            <td><span style="font-weight:bold;">锁定说明：</span></td>
            <td align="left"><textarea id="lock_info"  name="lock_info" cols="30" rows="5"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' ><input type="submit"  value='确认' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></td>
          </tr>
        </table>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="uid" value="0" type="hidden">
      </form>
    </div>
  </div>
</div>
<div id="comrating"  style="display:none; width: 680px; "> 
<div id="">
      <form action="index.php?m=admin_company&c=uprating" target="supportiframe" method="post" id="formstatus">
       <table cellspacing='1' cellpadding='1' class="admin_company_table">
          <tr>
            <td align="right"><span style="font-weight:bold;">会员等级：</span></td>
            <td align="left">
			<select name="rating" id="ratingid" onchange="uprating(this.value);">
			<?php $_from = $this->_tpl_vars['ratingarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ratlist']):
?>
			<option value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['ratlist']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
			
			</td>

			 <td align="right"><span style="font-weight:bold;">会员到期时间：</span></td>
            <td align="left">
				<p id="vipetime"></p> 延长会员有效期：<input type="text" name="addday" value="" style="width:40px;"> 天
			</td>

          </tr>
	<tr class="admin_table_trbg" >
		<td align="right">账户余额：</td>
		<td><input type="text" name="pay"  id="pay" size="15" class="admin_c_input-tex" value=""/></td>
		<td align="right">账户积分：</td>
		<td><input type="text" name="integral"  id="integral" size="15" class="admin_c_input-tex" value="" /></td>
	</tr>
    <tr>
		<td align="right">剩余职位数：</td>
		<td><input type="text" name="job_num"  id="job_num" size="15" class="admin_c_input-tex" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<td align="right">剩余下载数：</td>
		<td><input type="text" name="down_resume"  id="down_resume" size="15" class="admin_c_input-tex" value="" /></td>
	</tr>
	<tr class="admin_table_trbg" >
		<td align="right">修改职位数：</td>
		<td><input type="text" name="editjob_num"  id="editjob_num" size="15" class="admin_c_input-tex" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
		<td align="right">邀请人才面试数：</td>
		<td><input type="text" name="invite_resume"  id="invite_resume" size="15" class="admin_c_input-tex" value="" /></td>
	</tr>
    <tr>
		<td align="right">刷新职位数：</td>
		<td><input type="text" name="breakjob_num"  id="breakjob_num" size="15" class="admin_c_input-tex" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
	
	</tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='4' ><input type="submit"  value='确认' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></td>
          </tr>
        </table>
		<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<input type="hidden" name="rating_name" id="rating_name" value="">
		<input type="hidden" name="oldetime" id="oldetime" value="">
        <input name="ratuid" id="ratuid" value="0" type="hidden">
      </form>
	 </div>
</div>
<div id="infobox2"  style="display:none; width: 350px; "> 
    <div id="infobox">
      <form action="index.php?m=admin_company&c=status" target="supportiframe" method="post" id="formstatus">
       <table cellspacing='2' cellpadding='3'>
          <tr>
            <td><span style="font-weight:bold;">审核操作：</span></td>
            <td align="left"><label for="status0"><input type="radio" name="status" value="0" id="status0" >未审核</label>
        <label for="status1"><input type="radio" name="status" value="1" id="status1" >正常</label>
        <label for="status3"><input type="radio" name="status" value="3" id="status3">未通过</label></td>
          </tr>
          <tr>
            <td><span style="font-weight:bold;">审核说明：</span></td>
            <td align="left"><textarea id="statusbody"  name="statusbody" cols="30" rows="5"></textarea></td>
          </tr>
          <tr style="text-align:center;margin-top:10px">
            <td colspan='2' ><input type="submit"  value='确认' class="submit_btn">
              &nbsp;&nbsp;
              <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'></td>
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
 <form action="index.php" name="myform" method="get" >
<div class="admin_Filter"> 
<input type="hidden" name="m" value="admin_company"/>
<input type="hidden" name="status" value="<?php echo $_GET['status']; ?>
"/>
<input type="hidden" name="rec" value="<?php echo $_GET['rec']; ?>
"/>
<input type="hidden" name="time" value="<?php echo $_GET['time']; ?>
"/>
<input type="hidden" name="rating" value="<?php echo $_GET['rating']; ?>
"/>


<span class="complay_top_span fl">公司管理</span>	
  <div class="admin_Filter_span">搜索类型：</div>
  <div class="admin_Filter_text formselect" did="dtype"> 
  <input type="button" <?php if ($_GET['type'] == '1' || $_GET['type'] == ''): ?> value="企业名称" <?php elseif ($_GET['type'] == '2'): ?> value="用户名称" <?php elseif ($_GET['type'] == '3'): ?> value="联系人" <?php elseif ($_GET['type'] == '4'): ?> value="联系电话" <?php elseif ($_GET['type'] == '5'): ?> value="用户邮箱" <?php endif; ?> class="admin_Filter_but" id="btype">
  		   <input type="hidden" name="com_type" id="type" value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>"/><div class="admin_Filter_text_box" style="display:none" id="dtype">
			  <ul>
				  <li><a href="javascript:void(0)" onClick="formselect('1','type','企业名称')">企业名称</a></li>
				  <li><a href="javascript:void(0)" onClick="formselect('2','type','用户名称')">用户名称</a></li>	
				  <li><a href="javascript:void(0)" onClick="formselect('3','type','联系人')">联系人</a></li>	
				  <li><a href="javascript:void(0)" onClick="formselect('4','type','联系电话')">联系电话</a></li>	
				  <li><a href="javascript:void(0)" onClick="formselect('5','type','用户邮箱')">用户邮箱</a></li>			  
			  </ul>  
		  </div>
    </div>	
    <input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_Filter_search">
	<input type="submit" value="搜索" class="admin_Filter_bth"/>
	  <div class="admin_search_div" ><div class="admin_adv_search"><div class="admin_adv_search_bth">高级搜索</div></div></div>
       <div class="admin_search_div_tianj" > <a href="index.php?m=admin_company&c=add" class="admin_infoboxp_tj">添加会员</a> </div>
      
  </div> 
  </form> 

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	

  <div class="table-list" style="color:#898989">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
      <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="m" value="admin_company" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/> </label></th>
              <th> <?php if ($_GET['t'] == 'uid' && $_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'uid','m' => 'admin_company','untype' => "order,t"), $this);?>
">用户ID<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'uid','m' => 'admin_company','untype' => "order,t"), $this);?>
">用户ID<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left">企业名/用户名</th>
              <th align="left">等级/到期时间</th>
              <th>联系电话</th>
              <th>联系人</th>
              <th>用户邮箱</th>
              <th>企业认证</th>
              <th>登录/注册时间</th>
              <th>状态</th>
              <th>设为名企</th>
              <th>黄页排序</th>
              <th>添加/重置</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
       <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['uid']; ?>
">
            <td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['uid']; ?>
"  name='del[]' email='<?php echo $this->_tpl_vars['v']['linkmail']; ?>
' moblie='<?php echo $this->_tpl_vars['v']['moblie']; ?>
' onclick='unselectall()' class="check_all" rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['uid']; ?>
</span></td>
            <td class="ud" align="left">
            <div class="admin_com_name_box"><a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['v']['uid'])), $this);?>
" target="_blank" class="admin_com_name"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></div>
			<div class=""><a href="index.php?m=admin_company&c=Imitate&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['username']; ?>
</a></div></td>
            <td align="left">
				<?php echo $this->_tpl_vars['v']['rating_name']; ?>
<a data-uid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" href="javascript:void(0);" class="comrating"><span class="admin_company_xg_icon">[修改]</span></a>
				<?php if ($this->_tpl_vars['v']['vip_etime']): ?>
					<div><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['vip_etime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</div>
				<?php endif; ?>
			</td>
            <td align="left"><div style="width:80px;"><?php if ($this->_tpl_vars['v']['linktel'] && $this->_tpl_vars['moblie_promiss']): ?><?php echo $this->_tpl_vars['v']['linktel']; ?>
<div><a href="javascript:void(0);" class="admin_com_send" onClick="send_moblie('<?php echo $this->_tpl_vars['v']['moblie']; ?>
');">发信息</a></div><?php endif; ?></div></td>
            <td><div style="width:60px;"><?php echo $this->_tpl_vars['v']['linkman']; ?>
</div></td>
            <td align="left"><div style="width:130px;"><?php if ($this->_tpl_vars['v']['linkmail'] && $this->_tpl_vars['email_promiss']): ?><?php echo $this->_tpl_vars['v']['linkmail']; ?>
<div><a href="javascript:void(0);" class="admin_com_send" onClick="send_email('<?php echo $this->_tpl_vars['v']['linkmail']; ?>
');">发邮件</a></div><?php endif; ?></div></td>
            <td>
			   <?php if ($this->_tpl_vars['v']['email_status'] == 1): ?>
			   <img src="../data/ajax_img/1-1.png" alt="邮箱已认证" class="png">
			   <?php else: ?>
			   <img src="../data/ajax_img/1-2.png" alt="邮箱未认证"class="png"> 
			   <?php endif; ?>

               <?php if ($this->_tpl_vars['v']['moblie_status'] == 1): ?>
			   <img src="../data/ajax_img/2-1.png" alt="手机已认证"class="png">
			   <?php else: ?>
			   <img src="../data/ajax_img/2-2.png" title="手机未认证"class="png">
			   <?php endif; ?>

              <?php if ($this->_tpl_vars['v']['yyzz_status'] == 1): ?>
			  <img src="../data/ajax_img/3-1.png" alt="营业执照已认证"class="png">
			  <?php else: ?>
			  <img src="../data/ajax_img/3-2.png" alt="营业执照未认证"class="png">
			  <?php endif; ?>
			 </td>
             <td>
			 <?php if ($this->_tpl_vars['v']['login_date']): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

			 <?php else: ?>
				尚未登录
			 <?php endif; ?>
			 
			 <div class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</div>
			 </td>
            
             <td>
				<?php if ($this->_tpl_vars['v']['status'] == '1'): ?>
					<span class="admin_com_Audited">已审核</span>
				<?php elseif ($this->_tpl_vars['v']['status'] == '2'): ?>
					<span class="admin_com_Lock">已锁定</span>
				<?php elseif ($this->_tpl_vars['v']['status'] == '3'): ?>
					<span class="admin_com_tg">未通过</span>
				<?php else: ?>
					<span class="admin_com_noAudited">未审核</span>
				<?php endif; ?>
			</td> 
			 
             <td>
             <div  class="admin_table_w84">
			 <?php if ($this->_tpl_vars['v']['hottime']): ?> 
				<a href="javascript:void(0);" onClick="showdiv3('<?php echo $this->_tpl_vars['v']['uid']; ?>
');" class="admin_cz_sc">修改</a>/<a href="javascript:void(0);" onClick="layer_del('确定要取消该名企？','index.php?m=admin_company&c=delhot&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
');" class="admin_cz_sc">取消</a>
				<div class=""><?php if ($this->_tpl_vars['v']['hottime'] >= time ( )): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['v']['hottime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?> 
				<font color='red'><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['hottime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</font>
				<?php endif; ?> </div> 
			 <?php else: ?>
			  <a href="javascript:void(0);" onClick="showdiv2('<?php echo $this->_tpl_vars['v']['uid']; ?>
');" class="admin_cz_sc">设为名企</a>
			 <?php endif; ?>
             </div>
			 </td>
            <td id="<?php echo $this->_tpl_vars['v']['uid']; ?>
"><p onClick="changeinput('<?php echo $this->_tpl_vars['v']['uid']; ?>
','<?php echo $this->_tpl_vars['v']['order']; ?>
');"><?php echo $this->_tpl_vars['v']['order']; ?>
</p></td>
            <td><a href="index.php?m=admin_company_job&c=show&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
">添加职位</a><div class=""><a href="javascript:void(0)" class="admin_com_cz" onClick="resetpw('<?php echo $this->_tpl_vars['v']['username']; ?>
','<?php echo $this->_tpl_vars['v']['uid']; ?>
');">重置密码</a></div></td>
            <td>
            <a href="javascript:void(0);" class="user_status admin_cz_sc" pid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
">审核</a> | 
            <a href="javascript:void(0);" class="status admin_cz_sc" pid="<?php echo $this->_tpl_vars['v']['uid']; ?>
" status="<?php echo $this->_tpl_vars['v']['status']; ?>
">锁定</a>
            <div class="">
            <a href="index.php?m=admin_company&c=edit&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
&rating=<?php echo $this->_tpl_vars['v']['rating']; ?>
" class="admin_cz_sc">修改</a> | 
            <a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?m=admin_company&c=del&del=<?php echo $this->_tpl_vars['v']['uid']; ?>
');" class="admin_cz_sc">删除</a>
            </div>
            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><label for="chkall2"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></label></td>
         <td colspan="5" >
         <label for="chkAll2">全选</label>
          <input class="admin_submit4" type="button" name="delsub" value="批量审核" onClick="audall();" />
          <?php if ($this->_tpl_vars['email_promiss']): ?> <input class="admin_submit4" type="button" value="发邮件"  onclick="return confirm_email('确定发邮件吗？','email_div')"/><?php endif; ?>
		   <?php if ($this->_tpl_vars['moblie_promiss']): ?><input class="admin_submit4" type="button" value="发信息"  onclick="return confirm_email('确定发信息吗？','moblie_div')"/><?php endif; ?>
         <input class="admin_submit4" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
         </td>
            <td colspan="11" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>

        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html>