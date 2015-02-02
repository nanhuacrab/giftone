<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:39
         compiled from admin/admin_saveresume.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/admin_saveresume.htm', 952, false),)), $this); ?>
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
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/admin/js/admin_public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/member_public.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/member/user/js/search.js" language="javascript"></script>
<script src="js/check_public.js"></script>
<script language="javascript">
function saveexpect(){
	var pytoken = $.trim($("#pytoken").val());
	var name = $.trim($("#expect_name").val());
	var hy = $.trim($("#hyid").val());
	var job_classid = $.trim($("#job_class").val());
	var provinceid = $.trim($("#provinceid").val());
	var cityid = $.trim($("#citysid").val());
	var three_cityid = $.trim($("#three_cityid").val());
	var salary = $.trim($("#salaryid").val());
	var uid = $.trim($("#uid").val());
	var report = $.trim($("#reportid").val());
	var typeid = $.trim($("#typeid").val());
	var eid = $.trim($("#eid").val());
	if(name==""){parent.layer.msg('请填写简历名称！', 2, 2);return false; }
	if(hy==""){parent.layer.msg('请选择从事行业！', 2, 2);return false;}
	if(three_cityid==""&&cityid==''){parent.layer.msg('请选择工作地点！', 2, 2);return false;}
	if(job_classid==""){parent.layer.msg('请选择从事职位！', 2, 2);return false;}
	if(salary==""){parent.layer.msg('请选择望月薪水！', 2, 2);return false;}
	if(report==""){parent.layer.msg('请选择到岗时间！', 2, 2);return false;}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=saveexpect",{name:name,hy:hy,job_classid:job_classid,provinceid:provinceid,cityid:cityid,three_cityid:three_cityid,salary:salary,report:report,eid:eid,submit:"1",uid:uid,pytoken:pytoken,type:typeid},function(data){
		parent.layer.closeAll();
		if(data==0){
			parent.layer.msg('操作失败！', 2, 8);return false;
		}else if(data==1){
			parent.layer.msg('简历数已经超过系统设置的简历数了！', 2, 8);return false;
		}else{
			data=eval('('+data+')');
			if(eid==""){
				window.location.href="index.php?m=admin_resume&c=saveresume&uid="+uid+"&e="+data.id;
			}else{
				$("#addresume").hide();
				$("#resume").show();
				$("#expect_name_html").html(data.name);
				$("#hy_html").html(data.hy);
				$("#job_class_html").html(data.job_classname);
				$("#salary_html").html(data.salary);
				$("#cityid_html").html(data.city);
				$("#report_html").html(data.report);
				$("#type_html").html(data.type);
				$("#eid").val(data.id);
			}
		}
	});
}
function checkmore(type){
	$("#add"+type).show();
	$("#"+type).hide();
}
function saveskill(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#skillid").val());
	var skill = $.trim($("#skillcid").val());
	var ing = $.trim($("#levelid").val());
	var name = $.trim($("#skill_name").val());
	var longtime = $.trim($("#skill_longtime").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2, 2);
		return false;
	}
	if(skill==""){
		parent.layer.msg('请选择技能类别！', 2, 2);
		return false;
	}
	if(ing==""){
		parent.layer.msg('请选择熟练程度！', 2, 2);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写技能名称！', 2, 2);
		return false;
	}
	if(longtime==""){
		parent.layer.msg('请填写掌握时间！', 2, 2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=skill",{skill:skill,ing:ing,name:name,longtime:longtime,eid:eid,id:id,table:"resume_skill",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#addskill").hide();
			$("#skill").show();
			if(id>0){
				var html="<tr> <th width=\"120\" style=\"border-bottom: medium none;\">技能类别：</th><td width=\"320\" id='' style=\"border-bottom: medium none;\">"+data.skillval+"</td><th width=\"120\" style=\"border-bottom: medium none;\">熟练程度：</th> <td id='' style=\"border-bottom: medium none;\">"+data.ingval+"</td> </tr><tr ><th style=\"border-bottom: medium none;\">技能名称：</th><td colspan='3' style=\"border-bottom: medium none;\">"+data.name+"</td></tr> <tr ><th>掌握时间：</th><td >"+data.longtime+"个月</td> <th width=\"120\"><a href=\"javascript:void(0)\" onclick=\"getresume('skill','"+data.id+"')\"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del('skill','"+data.id+"')\"class=\"admin_save_sub2\">【删除】</a></td> </td></tr>";
				$("#skill_"+id).html(html);
				$("#skill_add_button").show();
			}else{
				var html="<table style='width:100%' id='skill_"+data.id+"'><tr> <th width=\"120\" style=\"border-bottom: medium none;\">技能类别：</th><td width=\"320\" id='' style=\"border-bottom: medium none;\">"+data.skillval+"</td><th width=\"120\" style=\"border-bottom: medium none;\">熟练程度：</th> <td id='' style=\"border-bottom: medium none;\">"+data.ingval+"</td> </tr><tr ><th style=\"border-bottom: medium none;\">技能名称：</th><td colspan='3' id=\"\" style=\"border-bottom: medium none;\">"+data.name+"</td></tr> <tr ><th>掌握时间：</th><td>"+data.longtime+"个月</td><th width=\"120\"><a href=\"javascript:void(0)\" onclick=\"getresume('skill','"+data.id+"')\"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del('skill','"+data.id+"')\" class=\"admin_save_sub2\">【删除】</a></td> </tr></table>";
				$("#skill_list").append(html);
				$("#skill_add_button").show();
			}
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function savework(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#workid").val());
	var sdate = $.trim($("#work_sdate").val());
	var edate = $.trim($("#work_edate").val());
	var name = $.trim($("#work_name").val());
	var department = $.trim($("#work_department").val());
	var title = $.trim($("#work_title").val());
	var content = $.trim($("#work_content").val());
	var pytoken = $.trim($("#pytoken").val());
	var uid = $.trim($("#uid").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,2);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写单位名称！', 2,2);
		return false;
	}
	if(sdate==""||edate==""){
		parent.layer.msg('开始时间，结束时间不能为空！', 2,3);
		return false
	}else{
		var st=toDate(sdate);
		var ed=toDate(edate);
		if(st>ed){
			parent.layer.msg('开始时间不得大于结束时间', 2,3);
			return false
		}
	}
	if(department==""){
		parent.layer.msg('请填写所在部门！', 2,2);
		return false;
	}
	if(content==""){
		parent.layer.msg('请填写工作内容！', 2,2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=work",{sdate:sdate,edate:edate,name:name,department:department,eid:eid,title:title,content:content,id:id,table:"resume_work",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#work").show();
			$("#addwork").hide();
			if(id>0){
				var html='<tr><th  style="border-bottom: medium none;width:120px">单位名称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">工作时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">所在部门：</th><td style="border-bottom: medium none;">'+data.department+'</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;">'+data.title+'</td></tr><tr ><th >工作内容：</th><td><em>'+data.content+'</em></td><th width=\"120\"><a href=\"javascript:void(0)\" onclick="getresume(\'work\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'work\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr>';
				$("#work_"+id).html(html);
			}else{
				var html='<table style="width:100%;" id="work_'+data.id+'"><tr><th  style="border-bottom: medium none;width:120px">单位名称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">工作时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">所在部门：</th><td style="border-bottom: medium none;">'+data.department+'</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;">'+data.title+'</td></tr><tr ><th >工作内容：</th><td  ><em>'+data.content+'</em></td><th width=\"120\"><a href=\"javascript:void(0)\" onclick="getresume(\'work\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'work\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr></table>';
				$("#work_list").append(html);
			}
			$("#work_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function saveproject(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#projectid").val());
	var sdate = $.trim($("#project_sdate").val());
	var edate = $.trim($("#project_edate").val());
	var name = $.trim($("#project_name").val());
	var sys = $.trim($("#project_sys").val());
	var title = $.trim($("#project_title").val());
	var content = $.trim($("#project_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,2);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写项目名称！', 2,2);
		return false;
	}
	if(sdate==""||edate=="")
	{
		parent.layer.msg('开始时间，结束时间不能为空！', 2,3);
		return false
	}else{
		var st=toDate(sdate);
		var ed=toDate(edate);
		if(st>ed){
			parent.layer.msg('开始时间不得大于结束时间！', 2,3);
			return false
		}
	}
	if(sys==""){
		parent.layer.msg('请填写项目环境！', 2,2);
		return false;
	}
	if(content==""){
		parent.layer.msg('请填写项目内容！', 2,2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=project",{sdate:sdate,edate:edate,name:name,sys:sys,eid:eid,title:title,content:content,id:id,table:"resume_project",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#project").show();
			$("#addproject").hide();
			if(id>0){
				var html='<tr><th  style="border-bottom: medium none;width:120px">项目名称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">项目时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">项目环境：</th><td style="border-bottom: medium none;">'+data.sys+'</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;">'+data.title+'</td></tr><tr ><th >项目内容：</th><td ><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'project\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'project\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr>';
				$("#project_"+id).html(html);
			}else{
				var html='<table style="width:100%;" id="project_'+data.id+'"><tr><th  style="border-bottom: medium none;width:120px">项目名称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">项目时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">项目环境：</th><td style="border-bottom: medium none;">'+data.sys+'</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;">'+data.title+'</td></tr><tr ><th >项目内容：</th><td ><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'project\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'project\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr></table>';
				$("#project_list").append(html);
			}

			$("#project_add_button").show();

		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function saveedu(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#eduid").val());
	var sdate = $.trim($("#edu_sdate").val());
	var edate = $.trim($("#edu_edate").val());
	var name = $.trim($("#edu_name").val());
	var specialty = $.trim($("#edu_specialty").val());
	var title = $.trim($("#edu_title").val());
	var content = $.trim($("#edu_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,2);
		return false;
	}
	if(name==""){
		layer.msg('请填写学校名称！', 2,2);
		return false;
	}
	if(sdate==""||edate=="")
	{
		parent.layer.msg('开始时间，结束时间不能为空！', 2,3);
		return false
	}else{
		var st=toDate(sdate);
		var ed=toDate(edate);
		if(st>ed){
			parent.layer.msg('开始时间不得大于结束时间', 2,3);
			return false
		}
	}
	if(content==""){
		parent.layer.msg('请填写专业描述！', 2,2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=edu",{sdate:sdate,edate:edate,name:name,specialty:specialty,eid:eid,title:title,content:content,id:id,table:"resume_edu",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#edu").show();
			$("#addedu").hide();
			if(id>0){
				var html='<tr><th  style="border-bottom: medium none;width:120px">学校名称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">在校时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">所学专业：</th><td style="border-bottom: medium none;">'+data.specialty+'</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;">'+data.title+'</td></tr><tr ><th >专业描述：</th><td><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'edu\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'edu\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr>';
				$("#edu_"+id).html(html);
			}else{
				var html='<table style="width:100%;" id="edu_'+data.id+'"><tr><th  style="border-bottom: medium none;width:120px">学校名称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">在校时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">所学专业：</th><td style="border-bottom: medium none;">'+data.specialty+'</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;">'+data.title+'</td></tr><tr ><th >专业描述：</th><td><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'edu\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'edu\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr></table>';
				$("#edu_list").append(html);
			}
			$("#edu_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function savetraining(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#trainingid").val());
	var sdate = $.trim($("#training_sdate").val());
	var edate = $.trim($("#training_edate").val());
	var name = $.trim($("#training_name").val());
	var title = $.trim($("#training_title").val());
	var content = $.trim($("#training_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,3);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写培训中心！', 2,3);
		return false;
	}
	if(sdate==""||edate=="")
	{
		parent.layer.msg('开始时间，结束时间不能为空！', 2,3);
		return false
	}else{
		var st=toDate(sdate);
		var ed=toDate(edate);
		if(st>ed){
			parent.layer.msg('开始时间不得大于结束时间', 2,3);
			return false
		}
	}
	if(title==""){
		parent.layer.msg('请填写培训方向！', 2,2);
		return false;
	}
	if(content==""){
		parent.layer.msg('请填写培训描述！', 2,2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=training",{sdate:sdate,edate:edate,name:name,eid:eid,title:title,content:content,id:id,table:"resume_training",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#training").show();
			$("#addtraining").hide();
			if(id>0){
				var html='<tr><th  style="border-bottom: medium none;width:120px">培训中心：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">培训时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">培训方向：</th><td style="border-bottom: medium none;" colspan="3">'+data.title+'</td></tr><tr ><th >培训描述：</th><td ><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'training\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'training\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr>';
				$("#training_"+id).html(html);
			}else{
				var html='<table style="width:100%;" id="training_'+data.id+'"><tr><th  style="border-bottom: medium none;width:120px">培训中心：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">培训时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">培训方向：</th><td style="border-bottom: medium none;" colspan="3">'+data.title+'</td></tr><tr ><th >培训描述：</th><td><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'training\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'training\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr></table>';
				$("#training_list").append(html);
			}
			$("#training_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function savecert(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#certid").val());
	var sdate = $.trim($("#cert_sdate").val());
	var edate = $.trim($("#cert_edate").val());
	var name = $.trim($("#cert_name").val());
	var title = $.trim($("#cert_title").val());
	var content = $.trim($("#cert_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,2);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写证书名称！', 2,2);
		return false;
	}
	if(sdate==""||edate=="")
	{
		parent.layer.msg('开始时间，结束时间不能为空！', 2,3);
		return false
	}else{
		var st=toDate(sdate);
		var ed=toDate(edate);
		if(st>ed){
			parent.layer.msg('开始时间不得大于结束时间', 2,3);
			return false
		}
	}
	if(title==""){
		parent.layer.msg('请填写颁发单位！', 2,2);
		return false;
	}
	if(content==""){
		parent.layer.msg('请填写证书描述！', 2,2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=cert",{sdate:sdate,edate:edate,name:name,eid:eid,title:title,content:content,id:id,table:"resume_cert",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#cert").show();
			$("#addcert").hide();
			if(id>0){
				var html='<tr><th  style="border-bottom: medium none;width:120px">证书全称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">有效时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">颁发单位：</th><td style="border-bottom: medium none;" colspan="3">'+data.title+'</td></tr><tr ><th >证书描述：</th><td ><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'cert\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'cert\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr>';
				$("#cert_"+id).html(html);
			}else{
				var html='<table style="width:100%;" id="cert_'+data.id+'"><tr><th  style="border-bottom: medium none;width:120px">证书全称：</th><td  style="border-bottom: medium none;width:320px">'+data.name+'</td><th style="border-bottom: medium none;">有效时间：</th><td  style="border-bottom: medium none;">'+data.sdate+'至'+data.edate+'</td></tr><tr><th style="border-bottom: medium none;">颁发单位：</th><td style="border-bottom: medium none;" colspan="3">'+data.title+'</td></tr><tr ><th >证书描述：</th><td ><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'cert\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'cert\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr></table>';
				$("#cert_list").append(html);
			}

			$("#cert_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function saveother(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#otherid").val());
	var title = $.trim($("#other_title").val());
	var content = $.trim($("#other_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,2);
		return false;
	}
	if(title==""){
		parent.layer.msg('请填写其他标题！', 2,2);
		return false;
	}
	if(content==""){
		parent.layer.msg('请填写其他描述！', 2,2);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=other",{eid:eid,title:title,content:content,id:id,table:"resume_other",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		if(data!=0){
			data=eval('('+data+')');
			$("#other").show();
			$("#addother").hide();
			if(id>0){
				var html='<tr><th  style="border-bottom: medium none;width:120px">其他标题：</th><td  style="border-bottom: medium none;width:320px" colspan="3">'+data.title+'</td></tr><tr ><th >其他描述：</th><td style="width:320px"><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'other\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'other\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr>';
				$("#other_"+id).html(html);
			}else{
				var html='<table style="width:100%;" id="other_'+data.id+'"><tr><th  style="border-bottom: medium none;width:120px">其他标题：</th><td  style="border-bottom: medium none;width:320px" colspan="3">'+data.title+'</td></tr><tr ><th >其他描述：</th><td style="width:320px"><em>'+data.content+'</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume(\'other\','+data.id+')"class=\"admin_save_sub1\">【修改】</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'other\','+data.id+')\"class=\"admin_save_sub2\">【删除】</a></td></tr></table>';
				$("#other_list").append(html);
			}
			$("#other_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2, 8);
		}
	});
}
function checkClose(type){
	$("#add"+type).hide();
	$("#"+type).show();
}

function getresume(type,id){ 
	$("#add"+type+" .admin_save_sub").val("修 改");
	var pytoken = $.trim($("#pytoken").val());
	$("#add"+type).show();
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=resume_ajax",{type:type,id:id,pytoken:pytoken},function(data){
		parent.layer.closeAll();
		var data=eval('('+data+')');
		if(type=="skill"){
			$("#skillcid").val(data.skill);
			$("#levelid").val(data.ing);
			$("#skill_name").val(data.name);
			$("#skill_longtime").val(data.longtime);
			$("#skillid").val(data.id);
			$("#skillc").val(data.skillval);
			$("#level").val(data.ingval);
		}
		if(type=="work"){
			$("#work_name").val(data.name);
			$("#work_sdate").val(data.sdate);
			$("#work_edate").val(data.edate);
			$("#work_department").val(data.department);
			$("#work_title").val(data.title);
			$("#work_content").val(data.content);
			$("#workid").val(data.id);
		}
		if(type=="project"){
			$("#project_name").val(data.name);
			$("#project_sdate").val(data.sdate);
			$("#project_edate").val(data.edate);
			$("#project_sys").val(data.sys);
			$("#project_title").val(data.title);
			$("#project_content").val(data.content);
			$("#projectid").val(data.id);
		}
		if(type=="edu"){
			$("#edu_name").val(data.name);
			$("#edu_sdate").val(data.sdate);
			$("#edu_edate").val(data.edate);
			$("#edu_specialty").val(data.specialty);
			$("#edu_title").val(data.title);
			$("#edu_content").val(data.content);
			$("#eduid").val(data.id);
		}
		if(type=="training"){
			$("#training_name").val(data.name);
			$("#training_sdate").val(data.sdate);
			$("#training_edate").val(data.edate);
			$("#training_title").val(data.title);
			$("#training_content").val(data.content);
			$("#trainingid").val(data.id);
		}
		if(type=="cert"){
			$("#cert_name").val(data.name);
			$("#cert_sdate").val(data.sdate);
			$("#cert_edate").val(data.edate);
			$("#cert_title").val(data.title);
			$("#cert_content").val(data.content);
			$("#certid").val(data.id);
		}
		if(type=="other"){
			$("#other_title").val(data.title);
			$("#other_content").val(data.content);
			$("#otherid").val(data.id);
		}
	});
}
function checkmore2(type){
	var eid=$.trim($("#eid").val());
	$("#add"+type+" .admin_save_sub").val("添 加");
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2, 2);return false;
	} 
	$("#"+type+"_add_button").hide();
	$("#"+type+"_botton").attr("class","jianli_list_noadd");
	$("#"+type+"_botton").html('<em>暂不填写</em>');
	$("#"+type+"_botton").attr("onclick","checkClose2('"+type+"');");
	$("#add"+type).show();
	if(type=="skill"){
		$("#skillcid").val('');
		$("#levelid").val('');
		$("#skill_name").val('');
		$("#skill_longtime").val('');
		$("#skillid").val('');
		$("#skillc").val('请选择技能类别');
		$("#level").val('请选择熟练程度');
	}
	if(type=="work"){
		$("#work_name").val('');
		$("#work_sdate").val('');
		$("#work_edate").val('');
		$("#work_department").val('');
		$("#work_title").val('');
		$("#work_content").val('');
		$("#workid").val('');
	}
	if(type=="project"){
		$("#project_name").val('');
		$("#project_sdate").val('');
		$("#project_edate").val('');
		$("#project_sys").val('');
		$("#project_title").val('');
		$("#project_content").val('');
		$("#projectid").val('');
	}
	if(type=="edu"){
		$("#edu_name").val('');
		$("#edu_sdate").val('');
		$("#edu_edate").val('');
		$("#edu_specialty").val('');
		$("#edu_title").val('');
		$("#edu_content").val('');
		$("#eduid").val('');
	}
	if(type=="training"){
		$("#training_name").val('');
		$("#training_sdate").val('');
		$("#training_edate").val('');
		$("#training_title").val('');
		$("#training_content").val('');
		$("#trainingid").val('');
	}
	if(type=="cert"){
		$("#cert_name").val('');
		$("#cert_sdate").val('');
		$("#cert_edate").val('');
		$("#cert_title").val('');
		$("#cert_content").val('');
		$("#certid").val('');
	}
	if(type=="other"){
		$("#other_title").val('');
		$("#other_content").val('');
		$("#otherid").val('');
	}
}
function checkClose2(type){
	$("#"+type).hide();
	$("#"+type+"_botton").attr("class","jianli_list_add");
	$("#"+type+"_botton").html('<em>添加</em>');
	$("#"+type+"_botton").attr("onclick","checkmore2('"+type+"');");
	$("#Add"+type).show();
}
function toDate(str){
    var sd=str.split("-");
    return new Date(sd[0],sd[1],sd[2]);
}
function resume_del(table,id){
	var eid = $.trim($("#eid").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	parent.layer.confirm('确定要删除该项内容？', function(){
		parent.layer.load('执行中，请稍候...',0);
		$.post("index.php?m=admin_resume&c=resume_del",{table:table,id:id,eid:eid,uid:uid,pytoken:pytoken},function(data){
			parent.layer.closeAll();
			if(data!="0"){
				$("#"+table+'_'+id).remove();
				parent.layer.msg('删除成功！', 2,9);
			}else{
				parent.layer.msg('网络繁忙，请稍后！', 2,3);
			}
		});
	});
}
var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";
function index_job(){
	var html = $("#jobdiv").html().replace(" ","");
	if(html.replace(" ","")==''){
		var job_class = $('#job_class').val();
		parent.layer.load('加载中……');
		$.post(weburl+"/index.php?m=ajax&c=show_jobsearch",{job_class:job_class},function(data){
			parent.layer.closeAll();
			$("#jobdiv").html(data);
			$.layer({
				type : 1,
				title : '职位类别',
				offset : ['100px' , '50%'],
				closeBtn : [0 , true],
				fix : false,
				border : [10 , 0.3 , '#000', true],
				move :false,
				area : ['960px','auto'],
				page : {dom :'#jobdiv'}
			});
		});
	}else{
		$("#jobdiv").html(html);
		$.layer({
			type : 1,
			title : '职位类别',
			offset : ['100px' , '50%'],
			closeBtn : [0 , true],
			fix : false,
			border : [10 , 0.3 , '#000', true],
			move :false,
			area : ['960px','auto'],
			page : {dom :'#jobdiv'}
		});
	}
}
function showjob(id){
	$("#td"+id).attr("class","focusItemTop mOutItem");
	$("#span"+id).hide();
	$("#div"+id).show();
}
function guanbiselect(id){
   $("#td"+id).bind("mouseleave", function(){
	$("#td"+id).attr("class","blurItem");
	$("#span"+id).show();
	$("#div"+id).hide();
   });
}
function check_this(id){
	if($("#job_class_"+id).attr("disabled") != 'disabled'){
		if($("#job_class_"+id).attr("checked")!="checked"){
		 	var pid = $("#job_class_"+id).attr('data-pid');
			 $("#job_class_"+id).removeAttr("checked");
			 unsel(id,pid);
		}else{
			 var pid = $("#job_class_"+id).attr('data-pid');
			 $("#job_class_"+id).attr("checked","true");
			 addsel(id,pid);
		}
	}
}
function check_all(id){
	if($("#all"+id).attr("checked")!="checked"){
		$(".label"+id).removeAttr("disabled");
		$(".label"+id).removeAttr("checked");
		unsel(id);
	}else{
		$("#all"+id).attr("checked","true");
		$(".label"+id).attr("disabled","disabled");
		$(".label"+id).attr("checked","true");
		addsel(id);
	}
}
function addsel(id,pid){

	//判断数量
	var i=0;
	$(".selall").each(function(){
		i++;
	});
	if(parseInt(pid)>0){
		if(i>5){
			unsel(id,pid);
			parent.layer.msg('您最多只能选择五项！', 2,2);
			return false;
		}else{
			var name = $('#job_class_'+id).attr('data-name');
			html = '<li class="job_class_'+id+' parent_'+pid+'"><a class="clean g3 selall" href="javascript:void(0);" data-val="'+id+'+'+name+'"><span class="text">'+name+'</span><span class="delete" data-id="'+id+'" data-pid ="'+pid+'">移除</span></a></li>';
			$('.job_class_'+id).remove();
			$('.selected').append(html);
		}
	}else{
		if(i>4){
			unsel(id);
			parent.layer.msg('您最多只能选择五项！', 2,2);
			return false;
		}else{
			var name = $('#all'+id).attr('data-name');
			html = '<li class="all'+id+'"><a class="clean g3 selall" href="javascript:void(0);"  data-val="'+id+'+'+name+'"><span class="text">'+name+'</span><span class="delete" data-id="'+id+'">移除</span></a></li>';
			$('.parent_'+id).remove();
			$('.all'+id).remove();
			$('.selected').append(html);
		}
	}
}
function unsel(id,pid){
	if(parseInt(pid)>0){
		$('.job_class_'+id).remove();
		$('#job_class_'+id).removeAttr("checked","");
	}else{
		$('.all'+id).remove();
		$('#all'+id).removeAttr("checked","");
		$('.label'+id).removeAttr("disabled");
		$('.label'+id).removeAttr("checked");
	}
}
function determine(id){
	var check_val,name_val;
	$(".selall").each(function(){
		var info =$(this).attr("data-val").split("+");
		check_val+=","+info[0];
		name_val+="+"+info[1];
	});
	if(check_val){
		 check_val = check_val.replace("undefined,","");
	  $("#job_class").val(check_val);
	}
 	if(name_val){
		name_val = name_val.replace("undefined+","");
  		$("#workadds_job").val(name_val);
	}
	layer.closeAll();
} 
</script>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
.no_border{border-bottom: medium none;}
.table_form a{ color: #3d84b8;}
 
</style>
<title>后台管理</title>
</head>
<body class="body_ifm">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/public_search/index_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
  <div class="admin_table_border">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
 		<input type="hidden" name="uid" id='uid' value="<?php echo $this->_tpl_vars['uid']; ?>
">
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
		<input type="hidden" name="eid" id='eid' <?php if ($this->_tpl_vars['row']['id']): ?>value="<?php echo $this->_tpl_vars['row']['id']; ?>
"<?php endif; ?>>
 	  <div id="addresume" <?php if ($this->_tpl_vars['row']['id']): ?> style='display:none'<?php endif; ?>>
	  <table width="100%" class="table_form_resume" style="background:#fff;">
	  <tr><td colspan='4'><div class="admin_jianli_h1">求职意向</div></td></tr>
	  <tr>
		<th width='150'>简历名称：</th>
		<td colspan='3'><input type="text" name="name" id="expect_name" class="input-text" value="<?php echo $this->_tpl_vars['row']['name']; ?>
"></td>
	  </tr>
	  <tr>
		<th>期望从事行业：</th>
		<td colspan='3'>
			<select name='hy' id='hyid'>
				 <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hy']):
?>
				 <option value='<?php echo $this->_tpl_vars['hy']; ?>
' <?php if ($this->_tpl_vars['hy'] == $this->_tpl_vars['row']['hy']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['hy']]; ?>
</option>
				 <?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	  </tr>
	   <tr >
		<th>期望从事职位：</th>
		<td colspan='3'>
			<input id="job_class" type="hidden" name='job_post' value="<?php echo $this->_tpl_vars['row']['job_classid']; ?>
" name="job_class">
			<input id="workadds_job" class="expect_text"  type="button" onclick="index_job();" style=" float:left;" value="<?php if ($this->_tpl_vars['job_classname']): ?><?php echo $this->_tpl_vars['job_classname']; ?>
<?php else: ?>请选择职位<?php endif; ?>">
		</td>
	  </tr>
	   <tr>
		<th>期望月薪水：</th>
		<td colspan='3'>
			<select name='salary' id='salaryid'>
				 <?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['v'] == $this->_tpl_vars['row']['salary']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
				 <?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	  </tr>
      <tr >
        <th>工作地点：</th>
        <td colspan='3' ><div class=textbox>
            <select name="provinceid" id="provinceid" class="province" lid="citysid">
              <option value="">请选择省份</option>
                <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['provinceid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <select name="cityid" size="1" id="citysid" class="province" lid="three_cityid">
              <option value="">请选择城市</option>
			   <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['cityid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <select name="three_cityid" size="1" id="three_cityid" <?php if (! $this->_tpl_vars['show']['three_cityid']): ?> style="display:none;"<?php endif; ?>>
            <option value="">请选择城市</option>
			 <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['three_cityid'] == $this->_tpl_vars['v']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select></div>

			</td>
      </tr>
	  <tr>
		<th>到岗时间：</th>
		<td colspan='3'>
			<select name='report' id='reportid'>
				 <?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['report'] == $this->_tpl_vars['v']): ?>selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
				 <?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	  </tr>
	  <tr>
		<th>工作性质：</th>
		<td colspan='3'>
			<select name='type' id='typeid'>
				 <?php $_from = $this->_tpl_vars['userdata']['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				 <option value='<?php echo $this->_tpl_vars['v']; ?>
' <?php if ($this->_tpl_vars['row']['type'] == $this->_tpl_vars['v']): ?>selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
				 <?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	  </tr>
	  <tr ><td colspan='4' align="center">
		<img title="修改" src="images/jlbc.jpg" onclick="saveexpect()" style="cursor:pointer;" >
		<img style="cursor:pointer;" onclick="checkClose('resume');" src="images/jlsc.jpg">
	  </td></tr>
	  </table>
	  </div>
	  <div id='resume' <?php if ($this->_tpl_vars['row']['id'] == ''): ?> style='display:none'<?php endif; ?>>
		 <table width="100%" class="table_form_resume" style="background:#fff;">
	  <tr><td colspan='4'><div class="admin_jianli_h1">求职意向</div></td></tr>
			<tr>
			<th width='150'>简历名称：</th>
			<td colspan='3' id="expect_name_html"><?php echo $this->_tpl_vars['row']['name']; ?>
</td>
		  </tr>
		  <tr>
			<th>期望从事行业：</th>
			<td colspan='3' id="hy_html"><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['row']['hy']]; ?>
</td>
		  </tr>
		   <tr >
			<th>期望从事职位：</th>
			<td colspan='3' id="job_class_html"><?php echo $this->_tpl_vars['job_classname']; ?>
</td>
		  </tr>
		   <tr>
			<th>期望月薪水：</th>
			<td colspan='3' id="salary_html"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['row']['salary']]; ?>
</td>
		  </tr>
		  <tr >
			<th>工作地点：</th>
			<td colspan='3' id="cityid_html"><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['provinceid']]; ?>
 <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['cityid']]; ?>
 <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['three_cityid']]; ?>
</td>
		  </tr>
		  <tr>
			<th>到岗时间：</th>
			<td colspan='3' id="report_html"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['row']['report']]; ?>
</td>
		  </tr>
		  <tr>
			<th>工作性质：</th>
			<td colspan='3' id="type_html"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['row']['type']]; ?>
</td>
		  </tr>
		  <tr ><td colspan='4' align="center">

		  <input class="admin_save_sub" type="button" value="修 改" name="submit" onclick="checkmore('resume')" >
		  </td></tr>
		  </table>
	  </div>

	  <div id='skill' >
		<table width="100%" class="table_form_resume" style="background:#fff;">
			<tr><td colspan='4'><div class="admin_jianli_h1">专业技能</div></td></tr>
			<tr><td id="skill_list">
			<?php if ($this->_tpl_vars['skill']): ?>
				<?php $_from = $this->_tpl_vars['skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skill_l']):
?>
					<table style='width:100%' id="skill_<?php echo $this->_tpl_vars['skill_l']['id']; ?>
">
					<tr id="skill_<?php echo $this->_tpl_vars['skill_l']['id']; ?>
">
                    <th width="120" style="border-bottom: medium none;">技能类别：</th>
                    <td width="320" style="border-bottom: medium none;"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['skill_l']['skill']]; ?>
</td>
                    <th width="120" style="border-bottom: medium none;">熟练程度：</th> <td  style="border-bottom: medium none;"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['skill_l']['ing']]; ?>
</td> 
                    </tr>
					 <tr>
                     <th style="border-bottom: medium none;">技能名称：</th>
                     <td colspan='3'  style="border-bottom: medium none;"><?php echo $this->_tpl_vars['skill_l']['name']; ?>
</td></tr> 
                     <tr><th>掌握时间：</th>
                     <td><?php echo $this->_tpl_vars['skill_l']['longtime']; ?>
个月</td>
                     <th width="120">
                     <a href="javascript:void(0)" onclick="getresume('skill','<?php echo $this->_tpl_vars['skill_l']['id']; ?>
')" class="admin_save_sub1">【修改】</a>
                     </th>
                     <td>
                     <a href="javascript:void(0)" onclick="resume_del('skill','<?php echo $this->_tpl_vars['skill_l']['id']; ?>
')"class="admin_save_sub2">【删除】</a>
                     </td>
                     </tr>
					</table>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			</td></tr>
			<tr id='skill_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加技能" onclick="checkmore2('skill');"name="com_update" ></td></tr>
	    </table>
	  </div>
	<div id='addskill' style="display:none">
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">技能类别：</th>
		<td width="320"><select name="skill" id='skillcid'>
			<?php $_from = $this->_tpl_vars['userdata']['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
			<option value='<?php echo $this->_tpl_vars['v']; ?>
' ><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		  </select></td>
		  <th width="120">熟练程度：</th>
		<td><select name="level" id="levelid">
			<?php $_from = $this->_tpl_vars['userdata']['user_ing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
			<option value='<?php echo $this->_tpl_vars['v']; ?>
' ><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		  </select></td>
		</tr>
		  <tr>
		<th>技能名称：</th>
		<td colspan='3'><input type="text" name="skill_name" id="skill_name" class="input-text" value=""> 例：英语、C语言、速记 </td>
		</tr>
		<tr  >
		<th>掌握时间：</th>
		<td colspan='3'><input type="text" name="longtime" id="skill_longtime" class="input-text" value="" size='5'>个月</td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="skillid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="saveskill();" ></td></tr>
		</table>
	</div>
	<div id='work' >
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr><td colspan='4'><div class="admin_jianli_h1">工作经历</div></td></tr>
		<tr><td id='work_list'>
		<?php if ($this->_tpl_vars['work']): ?>
			<?php $_from = $this->_tpl_vars['work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['work_l']):
?>
				<table style='width:100%' id="work_<?php echo $this->_tpl_vars['work_l']['id']; ?>
">
				<tr><th  style="border-bottom: medium none;width:120px">单位名称：</th><td  style="border-bottom: medium none;width:320px"><?php echo $this->_tpl_vars['work_l']['name']; ?>
</td><th style="border-bottom: medium none;">工作时间：</th><td  style="border-bottom: medium none;"><?php echo ((is_array($_tmp=$this->_tpl_vars['work_l']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
至<?php echo ((is_array($_tmp=$this->_tpl_vars['work_l']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>时间格式：2014-07-13</tr><tr><th style="border-bottom: medium none;">所在部门：</th><td style="border-bottom: medium none;"><?php echo $this->_tpl_vars['work_l']['department']; ?>
</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;"><?php echo $this->_tpl_vars['work_l']['title']; ?>
</td></tr><tr ><th >工作内容：</th><td><em><?php echo $this->_tpl_vars['work_l']['content']; ?>
</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume('work','<?php echo $this->_tpl_vars['work_l']['id']; ?>
')" class="admin_save_sub1">【修改】</a></th><td><a href="javascript:void(0)" onclick="resume_del('work','<?php echo $this->_tpl_vars['work_l']['id']; ?>
')" class="admin_save_sub2">【删除】</a></td></tr>
				</table>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</td></tr>
		<tr id='work_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加工作经历" onclick="checkmore2('work');"name="com_update" ></td></tr>
		</table>
	</div>
	<div id='addwork' style="display:none">
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">单位名称：</th>
		<td   colspan="4" ><input type="text" name="work_name" id="work_name" class="input-text"   size='40'> </td>
		</tr>
		<tr  >
		<th>工作时间：</th>
		<td colspan='3'>
		<link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
          <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
          <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
		<input class="text_seclet text_seclet_w130 " type="text" name="sdate" value="" size="15"  id="work_sdate"/>
			<em>到</em>

		<input class="text_seclet text_seclet_w130 " type="text" name="edate" value="" size="15"  id="work_edate"> 时间格式：2014-07-13
               <script type="text/javascript">
        Calendar.setup({
			weekNumbers: true,
			inputField : "work_sdate",
			trigger : "work_sdate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
		Calendar.setup({
			weekNumbers: true,
			inputField : "work_edate",
			trigger : "work_edate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
        </script></td>
		</tr>
		<tr >
		<th>所在部门：</th>
		<td colspan='3'><input type="text" name="department" id="work_department" class="input-text"  > </td>
		</tr>
		<tr >
		<th>担任职位：</th>
		<td colspan='3'><input type="text" name="title" id="work_title" class="input-text"  > </td>
		</tr>
		<tr >
		<th>工作内容：</th>
		<td colspan='3'><textarea id="work_content" class="infor_textarea " style="width: 339px; height: 64px;"></textarea></td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="workid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="savework();" ></td></tr>
		</table>
	</div>

	<div id='project' >
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr><td colspan='4'><div class="admin_jianli_h1">项目经历</div></td></tr>
		<tr><td id="project_list">
		<?php if ($this->_tpl_vars['project']): ?>
			<?php $_from = $this->_tpl_vars['project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['project_l']):
?>
			<table style='width:100%' id="project_<?php echo $this->_tpl_vars['project_l']['id']; ?>
">
			<tr><th  style="border-bottom: medium none;width:120px">项目名称：</th><td  style="border-bottom: medium none;width:320px"><?php echo $this->_tpl_vars['project_l']['name']; ?>
</td><th style="border-bottom: medium none;">项目时间：</th><td  style="border-bottom: medium none;"><?php echo ((is_array($_tmp=$this->_tpl_vars['project_l']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
至<?php echo ((is_array($_tmp=$this->_tpl_vars['project_l']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td></tr><tr><th style="border-bottom: medium none;">项目环境：</th><td style="border-bottom: medium none;"><?php echo $this->_tpl_vars['project_l']['sys']; ?>
</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;"><?php echo $this->_tpl_vars['project_l']['title']; ?>
</td></tr><tr ><th >项目内容：</th><td><em><?php echo $this->_tpl_vars['project_l']['content']; ?>
</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume('project','<?php echo $this->_tpl_vars['project_l']['id']; ?>
')" class="admin_save_sub1">【修改】</a></th><td><a href="javascript:void(0)" onclick="resume_del('project','<?php echo $this->_tpl_vars['project_l']['id']; ?>
')" class="admin_save_sub2">【删除】</a></td></tr>
			</table>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</td></tr>
		<tr id='project_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加项目经历" onclick="checkmore2('project');"name="com_update"></td></tr>
		</table>
	</div>
	<div id='addproject' style="display:none">
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">项目名称：</th>
		<td   colspan="4" ><input type="text" name="project_name" id="project_name" class="input-text"   size='40'> </td>
		</tr>
		<tr  >
		<th>项目时间：</th>
		<td colspan='3'>

		<input class="text_seclet text_seclet_w130 " type="text" name="sdate" value="" size="15"  id="project_sdate"/>
			<em>到</em>
		<input class="text_seclet text_seclet_w130 " type="text" name="edate" value="" size="15"  id="project_edate"> 时间格式：2014-07-13
			<script type="text/javascript">
        Calendar.setup({
			weekNumbers: true,
			inputField : "project_sdate",
			trigger : "project_sdate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
		Calendar.setup({
			weekNumbers: true,
			inputField : "project_edate",
			trigger : "project_edate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
        </script></td>
		</tr>
		<tr >
		<th>项目环境：</th>
		<td colspan='3'><input type="text" name="sys" id="project_sys" class="input-text"  > </td>
		</tr>
		<tr >
		<th>担任职位：</th>
		<td colspan='3'><input type="text" name="title" id="project_title" class="input-text"  > </td>
		</tr>
		<tr >
		<th>项目内容：</th>
		<td colspan='3'><textarea id="project_content" class="infor_textarea " style="width: 339px; height: 64px;"></textarea></td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="projectid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="saveproject();" ></td></tr>
		</table>
	</div>


	<div id='edu' >
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr><td colspan='4'><div class="admin_jianli_h1">教育经历</div></td></tr>
		<tr><td id="edu_list">
		<?php if ($this->_tpl_vars['edu']): ?>
			<?php $_from = $this->_tpl_vars['edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['edu_l']):
?>
			<table style='width:100%' id="edu_<?php echo $this->_tpl_vars['edu_l']['id']; ?>
">
			<tr><th  style="border-bottom: medium none;width:120px">学校名称：</th><td  style="border-bottom: medium none;width:320px"><?php echo $this->_tpl_vars['edu_l']['name']; ?>
</td><th style="border-bottom: medium none;">在校时间：</th><td  style="border-bottom: medium none;"><?php echo ((is_array($_tmp=$this->_tpl_vars['edu_l']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
至<?php echo ((is_array($_tmp=$this->_tpl_vars['edu_l']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td></tr><tr><th style="border-bottom: medium none;">所学专业：</th><td style="border-bottom: medium none;"><?php echo $this->_tpl_vars['edu_l']['specialty']; ?>
</td><th style="border-bottom: medium none;">担任职位：</th><td style="border-bottom: medium none;"><?php echo $this->_tpl_vars['edu_l']['title']; ?>
</td></tr><tr ><th >专业描述：</th><td><em><?php echo $this->_tpl_vars['edu_l']['content']; ?>
</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume('edu','<?php echo $this->_tpl_vars['edu_l']['id']; ?>
')"class="admin_save_sub1">【修改】</a></th><td><a href="javascript:void(0)" onclick="resume_del('edu','<?php echo $this->_tpl_vars['edu_l']['id']; ?>
')" class="admin_save_sub2">【删除】</a></td></tr></table>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</td></tr>
		<tr id='edu_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加教育经历" onclick="checkmore2('edu');"name="com_update" ></td></tr>
		</table>
	</div>
	<div id='addedu' style="display:none">
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">学校名称：</th>
		<td   colspan="4" ><input type="text" name="name" id="edu_name" class="input-text"   size='40'> </td>
		</tr>
		<tr  >
		<th>在校时间：</th>
		<td colspan='3'>

		<input class="text_seclet text_seclet_w130 " type="text" name="sdate" value="" size="15"  id="edu_sdate"/>
			<em>到</em>
		<input class="text_seclet text_seclet_w130 " type="text" name="edate" value="" size="15"  id="edu_edate"> 时间格式：2014-07-13
			<script type="text/javascript">
        Calendar.setup({
			weekNumbers: true,
			inputField : "edu_sdate",
			trigger : "edu_sdate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
		Calendar.setup({
			weekNumbers: true,
			inputField : "edu_edate",
			trigger : "edu_edate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
        </script>
			</td>
		</tr>
		<tr >
		<th>所学专业：</th>
		<td colspan='3'><input type="text" name="specialty" id="edu_specialty" class="input-text"  > </td>
		</tr>
		<tr >
		<th>担任职位：</th>
		<td colspan='3'><input type="text" name="title" id="edu_title" class="input-text"  > </td>
		</tr>
		<tr >
		<th>专业描述：</th>
		<td colspan='3'><textarea id="edu_content" class="infor_textarea " style="width: 339px; height: 64px;"></textarea></td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="eduid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="saveedu();" ></td></tr>
		</table>
	</div>
	<div id='training' >
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr><td colspan='4'><div class="admin_jianli_h1">培训经历</div></td></tr>
		<tr><td id="training_list">
		<?php if ($this->_tpl_vars['training']): ?>
			<?php $_from = $this->_tpl_vars['training']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['training_l']):
?>
			<table style='width:100%' id="training_<?php echo $this->_tpl_vars['training_l']['id']; ?>
">
			<tr><th  style="border-bottom: medium none;width:120px">培训中心：</th><td  style="border-bottom: medium none;width:320px"><?php echo $this->_tpl_vars['training_l']['name']; ?>
</td><th style="border-bottom: medium none;">培训时间：</th><td  style="border-bottom: medium none;"><?php echo ((is_array($_tmp=$this->_tpl_vars['training_l']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
至<?php echo ((is_array($_tmp=$this->_tpl_vars['training_l']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td></tr><tr><th style="border-bottom: medium none;">培训方向：</th><td style="border-bottom: medium none;" colspan="3"><?php echo $this->_tpl_vars['training_l']['title']; ?>
</td></tr><tr ><th >培训描述：</th><td ><em><?php echo $this->_tpl_vars['training_l']['content']; ?>
</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume('training','<?php echo $this->_tpl_vars['training_l']['id']; ?>
')"class="admin_save_sub1">【修改】</a></th><td><a href="javascript:void(0)" onclick="resume_del('training','<?php echo $this->_tpl_vars['training_l']['id']; ?>
')" class="admin_save_sub2">【删除】</a></td></tr></table>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</td></tr>
		<tr id='training_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加培训经历" onclick="checkmore2('training');"name="com_update" ></td></tr>
		</table>
	</div>
	<div id='addtraining' style="display:none">
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">培训中心：</th>
		<td   colspan="4" ><input type="text" name="name" id="training_name" class="input-text"   size='40'> </td>
		</tr>
		<tr  >
		<th>培训时间：</th>
		<td colspan='3'>

		<input class="text_seclet text_seclet_w130 " type="text" name="sdate" value="" size="15"  id="training_sdate"/>
			<em>到</em>
		<input class="text_seclet text_seclet_w130 " type="text" name="edate" value="" size="15"  id="training_edate"> 时间格式：2014-07-13
			<script type="text/javascript">
        Calendar.setup({
			weekNumbers: true,
			inputField : "training_sdate",
			trigger : "training_sdate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
		Calendar.setup({
			weekNumbers: true,
			inputField : "training_edate",
			trigger : "training_edate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
        </script>
			</td>
		</tr>
		<tr >
		<th>培训方向：</th>
		<td colspan='3'><input type="text" name="title" id="training_title" class="input-text"  > </td>
		</tr>
		<tr >
		<th>培训描述：</th>
		<td colspan='3'><textarea id="training_content" class="infor_textarea " style="width: 339px; height: 64px;"></textarea></td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="trainingid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="savetraining();" ></td></tr>
		</table>
	</div>
	<div id='cert' >
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr><td colspan='4'><div class="admin_jianli_h1">证书</div></td></tr>
		<tr><td id="cert_list">
		<?php if ($this->_tpl_vars['cert']): ?>
			<?php $_from = $this->_tpl_vars['cert']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cert_l']):
?>
			<table style='width:100%' id="cert_<?php echo $this->_tpl_vars['cert_l']['id']; ?>
">
			<tr><th  style="border-bottom: medium none;width:120px">证书全称：</th><td  style="border-bottom: medium none;width:320px"><?php echo $this->_tpl_vars['cert_l']['name']; ?>
</td><th style="border-bottom: medium none;">有效时间：</th><td  style="border-bottom: medium none;"><?php echo ((is_array($_tmp=$this->_tpl_vars['cert_l']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
至<?php echo ((is_array($_tmp=$this->_tpl_vars['cert_l']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td></tr><tr><th style="border-bottom: medium none;">颁发单位：</th><td style="border-bottom: medium none;" colspan="3"><?php echo $this->_tpl_vars['cert_l']['title']; ?>
</td></tr><tr ><th >证书描述：</th><td ><em><?php echo $this->_tpl_vars['cert_l']['content']; ?>
</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume('cert','<?php echo $this->_tpl_vars['cert_l']['id']; ?>
')" class="admin_save_sub1">【修改】</a></th><td><a href="javascript:void(0)" onclick="resume_del('cert','<?php echo $this->_tpl_vars['cert_l']['id']; ?>
')" class="admin_save_sub2">【删除】</a></td></tr></table>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</td></tr>
		<tr id='cert_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加证书" onclick="checkmore2('cert');"name="com_update" ></td></tr>

		</table>
	</div>
	<div id='addcert' style="display:none">
		<table width="100%" class="table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">证书全称：</th>
		<td   colspan="4" ><input type="text" name="name" id="cert_name" class="input-text"   size='40'> </td>
		</tr>
		<tr  >
		<th>有效时间：</th>
		<td colspan='3'>
		<input class="text_seclet text_seclet_w130 " type="text" name="sdate" value="" size="15"  id="cert_sdate"/>
			<em>到</em>
		<input class="text_seclet text_seclet_w130 " type="text" name="edate" value="" size="15"  id="cert_edate"> 时间格式：2014-07-13
			<script type="text/javascript">
        Calendar.setup({
			weekNumbers: true,
			inputField : "cert_sdate",
			trigger : "cert_sdate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
		Calendar.setup({
			weekNumbers: true,
			inputField : "cert_edate",
			trigger : "cert_edate",
			dateFormat: "%Y-%m-%d",
			showTime: false,
			onSelect : function() {this.hide();}
        });
        </script>
			</td>
		</tr>
		<tr >
		<th>颁发单位：</th>
		<td colspan='3'><input type="text" name="title" id="cert_title" class="input-text"  > </td>
		</tr>
		<tr >
		<th>证书描述：</th>
		<td colspan='3'><textarea id="cert_content" class="infor_textarea " style="width: 339px; height: 64px;"></textarea></td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="certid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="savecert();"></td></tr>
		</table>
	</div>
	<div id='other' >
		<table width="100%" class=" table_form_resume" style="background:#fff;">
		<tr><td colspan='4'><div class="admin_jianli_h1">其他</div></td></tr>
		<tr><td id="other_list">
		<?php if ($this->_tpl_vars['other']): ?>
			<?php $_from = $this->_tpl_vars['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['other_l']):
?>
			<table style='width:100%' id="other_<?php echo $this->_tpl_vars['other_l']['id']; ?>
">
			<tr><th  style="border-bottom: medium none;width:120px">其他标题：</th><td  style="border-bottom: medium none;" colspan="3"><?php echo $this->_tpl_vars['other_l']['title']; ?>
</td></tr><tr ><th >其他描述：</th><td style="width:320px"><em><?php echo $this->_tpl_vars['other_l']['content']; ?>
</em></td><th width="120"><a href="javascript:void(0)" onclick="getresume('other','<?php echo $this->_tpl_vars['other_l']['id']; ?>
')" class="admin_save_sub1">【修改】</a></th><td><a href="javascript:void(0)" onclick="resume_del('other','<?php echo $this->_tpl_vars['other_l']['id']; ?>
')"class="admin_save_sub2">【删除】</a></td></tr></table>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</td></tr>
		<tr id='other_add_button'><td colspan="4" align="center"><input class="admin_save_sub" type="button" value="添加其他" onclick="checkmore2('other');"name="com_update" ></td></tr>

		</table>
	</div>
	<div id='addother' style="display:none">
		<table width="100%" class=" table_form_resume" style="background:#fff;">
		<tr  >
		<th width="120">其他标题：</th>
		<td   colspan="4" ><input type="text" name="name" id="other_title" class="input-text"   size='40'> </td>
		</tr>
		<tr >
		<th>其他描述：</th>
		<td colspan='3'><textarea id="other_content" class="infor_textarea " style="width: 339px; height: 64px;"></textarea></td>
		</tr>
		<tr><td colspan="4" align="center"><input type="hidden" id="otherid" /><input class="admin_save_sub" type="button" value=" 添 加 " name="submit" onclick="saveother();" ></td></tr>
		</table>
	</div>

</div>
</div>
<div style="margin-top:30px"></div>
</body>
</html>