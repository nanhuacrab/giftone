<?php /* Smarty version 2.6.26, created on 2015-01-31 22:42:49
         compiled from admin/admin_comclass_add.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="./images/reset.css" rel="stylesheet" type="text/css" />
<link href="./images/system.css" rel="stylesheet" type="text/css" />
<link href="./images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jscolor/jscolor.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<title></title>
</head>
<body class="body_ifm">

<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="infoboxp_top">
	<h6>添加企业会员等级</h6>
</div>
<div style=" background: #FFFFFF; border: 1px solid #DCE3ED;">
<div class="common-form">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" target="supportiframe" action="index.php?m=admin_company_rating&c=saveclass" method="post" id="myform" enctype="multipart/form-data" onSubmit="return checkform();">
<input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
<table width="100%" class="table_form contentWrap"> 
    <tr class="admin_table_trbg">
        <td align="right" width="200">类别名称:</td>
        <td>
        <input type="text" name="name" id="name" class="input-text tips_class" size="30" value="<?php echo $this->_tpl_vars['row']['name']; ?>
">
        <font color="gray" style="display:none">如：VIP1</font>
        </td>
        <td align="right">会员模式:</td>
        <td>        
        <input type="radio" name="type" value="1" id="Radiotype1_0" <?php if ($this->_tpl_vars['row']['type'] != 2): ?>checked<?php endif; ?>>
        <label for="Radiotype1_0">套餐模式</label>
        <input type="radio" name="type" value="2" id="Radiotype1_1" <?php if ($this->_tpl_vars['row']['type'] == 2): ?>checked<?php endif; ?>>
        <label for="Radiotype1_1">时间模式</label>
        </td>
    </tr>
    <tr>
        <td align="right">服务价格:</td>
        <td>
        <input type="text" name="service_price" id="service_price" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['service_price']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">元
        <font color="gray">如：免费请留空</font>
        </td>
        <td align="right"><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
购买:</td>
        <td>
        <input type="text" name="integral_buy" id="integral_buy" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['integral_buy']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"><?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>

        </td>
    </tr>    
    <tr class="admin_table_trbg">
        <td align="right">服务时间:</td>
        <td colspan="3">
        <input type="text" name="service_time" id="service_time" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['service_time']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">天 （提示：0代表不限）
        </td>
    </tr>
   
    <tr class="vip_type_2 admin_table_trbg" <?php if ($this->_tpl_vars['row']['type'] == 2): ?>style="display:none;"<?php endif; ?>>
        <td align="right">发布职位数:</td>
        <td>
        <input type="text" name="job_num" id="job_num" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['job_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">份
        </td>
        <td align="right">下载简历数:</td>
        <td>
        <input type="text" name="resume" id="resume" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['resume']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">份
        </td>
    </tr>
    <tr class="vip_type_2" <?php if ($this->_tpl_vars['row']['type'] == 2): ?>style="display:none;"<?php endif; ?>>
        <td align="right">邀请人才面试数:</td>
        <td>
        <input type="text" name="interview" id="interview" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['interview']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">份
        </td>
        <td align="right">修改职位:</td>
        <td>
        <input type="text" name="editjob_num" id="editjob_num" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['editjob_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">次
        </td>
    </tr>
    <tr class="vip_type_2 admin_table_trbg" <?php if ($this->_tpl_vars['row']['type'] == 2): ?>style="display:none;"<?php endif; ?>>
        <td align="right">刷新职位:</td>
        <td colspan="3">
        <input type="text" name="breakjob_num" id="breakjob_num" class="input-text" size="12" value="<?php echo $this->_tpl_vars['row']['breakjob_num']; ?>
" onKeyUp="this.value=this.value.replace(/[^0-9.]/g,'')">次
        </td>
      
    </tr>
   
    
    <tr>
        <td align="right">显示顺序:</td>
        <td>
        <input type="text" name="sort" id="sort" class="input-text tips_class" size="12" value="<?php echo $this->_tpl_vars['row']['sort']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')">
        <font color="gray" style="display:none">小前大后</font>
        </td>
        <td align="right">显示状态:</td>
        <td>          
            <input type="radio" name="display" value="1" id="RadioGroup1_0" <?php if ($this->_tpl_vars['row']['display'] == 1): ?>checked<?php endif; ?>>
            <label for="RadioGroup1_0">可见</label>
            <input type="radio" name="display" value="0" id="RadioGroup1_1" <?php if ($this->_tpl_vars['row']['display'] == 0): ?>checked<?php endif; ?>>
            <label for="RadioGroup1_1">隐藏</label>
			<font color="gray">前台是否可见</font>
        </td>
    </tr>
    <tr class="admin_table_trbg">	
		<td align="right">会员类别图标：</td>
		<td><input  type="file" size="45" name="com_pic" class="input-text">
            <?php if ($this->_tpl_vars['row']['com_pic'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['row']['com_pic']; ?>
">
        <?php endif; ?>
          </td>
		<td align="right">会员类别颜色：</td>
		<td><input type="text"  class="color" size="45" name="com_color" value="<?php echo $this->_tpl_vars['row']['com_color']; ?>
" ></td>
	</tr>
    <tr>
        <td align="right">类别说明:</td>
        <td colspan="3">
       <textarea name="explains" id="explain" rows="3" cols="50" class="text tips_class"><?php echo $this->_tpl_vars['row']['explains']; ?>
</textarea>
       <font color="gray" style='display:none'>类别备注说明或者优惠活动</font>
        </td>
    </tr>
<tr>
<td colspan="4" align="center" class="admin_table_trbg">
	<input name="id" type="hidden" value="<?php echo $this->_tpl_vars['row']['id']; ?>
">
	<input class="admin_submit4" name="useradd" type="submit" value="提交" id="dosubmit">
</td>
 </table>
 </form>
</div>
</div>
</div>
<script>
$(document).ready(function(){
	$("input[name=type]").click(function(){
		var type = $(this).val();
		if(type=="1"){
			$(".vip_type_2").show();
			$(".vip_type_1").hide();
		}else{
			$(".vip_type_2").hide();
			$(".vip_type_1").show();
		}
	});
});
function checkform(){
	if($("#name").val()==""){
		parent.layer.msg("类别名称不能为空",2,8);
		return false;
	}
}

$(".tips_class").hover(function(){ 
	var msg_id=$(this).attr('id'); 
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.tips(msg, this, {
		guide: 1, 
		style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		}); 
	} 
},function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.closeTips();
	} 
});
</script>
</body>
</html>