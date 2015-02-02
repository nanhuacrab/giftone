<?php /* Smarty version 2.6.26, created on 2015-01-30 22:24:46
         compiled from member/com/jobadd.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/com/jobadd.htm', 251, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950">
  <div class="admin_mainbody"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script> 
    <script language="javascript">
	var editor;
	KindEditor.ready(function(K){
		editor = K.create('#description',{
			resizeType : 1, width:'513px',
			allowPreviewEmoticons : false,
			allowImageUpload : false,
			items : [
			'bold','italic','underline',
			'removeformat','|','justifyleft','justifycenter','justifyright','insertorderedlist',
			'insertunorderedlist']
		});
	});
	function change_days_type(){
		$(".days").toggle();
		$(".edate").toggle();
	} 
	function toDate(str){
		var sd=str.split("-");
		return new Date(sd[0],sd[1],sd[2]);
	}
$(document).ready(function() {
	$("#days_type").attr("checked",false);
	$(".com_admin_ask").hover(function(){  
		layer.tips("填写详细信息，求职者更青睐，招工更快捷！", this, {
			guide: 1,
			style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		});
	},function(){layer.closeTips();}); 
}); 
function CheckPost(){
	var days = $.trim($("#days").val()); 
	var end = $("#edate").val();
	var name = $.trim($("#name").val());
	var is_link=$("input[name='is_link']:checked").val();
	var link_type=$("input[name='link_type']:checked").val();
	var is_email=$("input[name='is_email']:checked").val();
	var email_type=$("input[name='email_type']:checked").val();
	var days_type=$("input[name='days_type']:checked").val();
	if(name==''){layer.msg('职位名称不能为空！',2,2);return false;}
	if($("#job_post").val()==''){layer.msg('职位类别不能为空！', 2, 2);return false;}
	if($("#citysid").val()==''){layer.msg('工作地点不能为空！', 2, 2);return false;}
	var description = editor.text();
	if($.trim(description)==''){layer.msg('职位描述不能为空！', 2, 2);return false;}
	if(end==''&&days){layer.msg('招聘天数、结束时间必须填一项！', 2, 2);return false;}
	if($("#days_type").attr("checked")!='checked'&&days>'999'){
		layer.msg('最多只能输入999！', 2, 2);return false;
	}
	if(end && days_type){
		var st=toDate('<?php echo $this->_tpl_vars['today']; ?>
').getTime()/1000;
		var ed=toDate(end).getTime()/1000;
		if(ed<=st){ 
			layer.msg('结束日期必须大于今天日期！',2,2);return false
		}
	} 
	if(link_type==2&&is_link==1){
		var link_man=$.trim($("input[name='link_man']").val());
		var link_moblie=$.trim($("input[name='link_moblie']").val()); 
		if(link_man==''||link_moblie==''||link_man=='联系人'||link_moblie=='联系电话'){
			layer.msg('联系人及联系电话均不能为空！', 2, 2);return false;
		}
	} 
	if(is_email=='1' &&email_type==2){
		var email=$.trim($("input[name='email']").val());
		var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		if(email==''){
			layer.msg('请输入邮箱！', 2, 2);return false;
		}else if(!myreg.test(email)){
			layer.msg('邮箱格式错误！', 2, 8);return false;
		} 
	}
	layer.load('执行中，请稍候...',0);
}
function invoice_link(type){
	if(type==1){
		$("#linktype").hide();
	}else{
		$("#linktype").show();
	}
}
function checklinktype(type){
	if(type==1){
		$("#newlink").hide();
	}else{
		$("#newlink").show();
	}
}

$(document).ready(function(){
	$(".job_sex_box_li").hover(function(){
		var aid=$(this).attr("aid");
		$(this).addClass("selected");
		$("#jobtype"+aid).show();	
	},function(){
		var aid=$(this).attr("aid");
		$(this).removeClass("selected");
		$("#jobtype"+aid).hide();	
	})   
	$("#job_button").click(function(){
		$("#joblist").show();
		$("#bg").show();
	})
	$(".Description_icon").hover(function(){
		$(".Description_box").show();	
	},function(){
		$(".Description_box").hide();	
	})
	$("#name").blur(function(){
		var name=$("#name").val();
		get_jobclass(name);
	})
})
function check_job(id,name){
	$("#job_post").val(id);
	$("#job_button").val(name);
	$("#joblist").hide();
	$("#bg").hide();
	if($.trim($("#name").val())==""){
		$("#name").val(name);
	}
	get_jobclass(name);
}
function get_jobclass(name){
	$.post(weburl+"/index.php?m=ajax&c=get_jobclass",{name:name},function(data){
		if(data){
			data=data.split("##");
			$("#JobRequInfoTemplate").html(data[0]);
			$("#job_button").val(data[1]);
			$(".Description").show();
		}else{
			$(".Description").hide();
		}
	})
}
function select_job(id){
	$.post(weburl+"/index.php?m=ajax&c=job_content",{id:id},function(data){
		editor.html(data);
	})
} 
</script>
<style>
* {margin: 0 ;padding: 0;}
body,div{margin: 0 ;padding: 0;}
</style>
    <div class=right_box>
      <div class=admincont_box>
        <div class=admin_tit><span class="admin_tit_bg">新增职位</span> <font color="#FF0000">*</font>为必填项</div>
        
        <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form name="MyForm" target="supportiframe" method="post" action="index.php?c=jobadd&act=save" onsubmit="return CheckPost();">
          <div class=admin_textbox_02>
		  <ul>
            <li>
              <div class=tit><font color="#FF0000">*</font> 职位名称：</div>
              <div class=textbox>
                <INPUT type="text" size="45" name="name" id='name' value="<?php echo $this->_tpl_vars['row']['name']; ?>
" style="float:left" class="com_info_text">
                <span id="by_name" class="errordisplay">职位名不能为空</span> </div>
            </li>

            <li>
              <div class=tit><font color="#FF0000">*</font> 职位类别：</div>
            <div class="textbox" >
		<div class="text_seclet text_seclet_cur" style="z-index:10000">
		<input type="hidden" name="job_post" id="job_post" value="<?php echo $this->_tpl_vars['row']['job_post']; ?>
" />
		<input class="SpFormLBut text_seclet_w250 " id="job_button" type="button"  value="<?php if ($this->_tpl_vars['row']['job_post'] != ""): ?><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['row']['job_post']]; ?>
<?php else: ?>请选择<?php endif; ?>">

		<div class="setbox" id="joblist" style="display:none;">
		<table class="jobcatebox">
		<tbody>
		<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
		<tr <?php if ($this->_tpl_vars['key']%2 == '0'): ?>class="grayline"<?php endif; ?>>
    <th>
    <strong><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</strong>
    </th>
    <td>
        <ul class="jobcatelist">
            <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['v']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
            <li class="job_sex_box_li selected1" aid="<?php echo $this->_tpl_vars['val']; ?>
">
            <p><span><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['val']]; ?>
</span></p>
                <div class="subcate <?php if ($this->_tpl_vars['k']%4 == '3' || $this->_tpl_vars['k']%4 == '2'): ?>scr<?php endif; ?>" id="jobtype<?php echo $this->_tpl_vars['val']; ?>
" style="display:none">
                <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['val']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                <a href="javascript:check_job('<?php echo $this->_tpl_vars['value']; ?>
','<?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['value']]; ?>
');"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['value']]; ?>
</a>
                <?php endforeach; endif; unset($_from); ?>
                </div>
            </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</tbody>
</table>
</div>

</div>
</div>
</li>


<li>
              <div class=tit><font color="#FF0000">*</font> 工作地点：</div>
              <div class=textbox>
                <div class="text_seclet text_seclet_cur3 fltL">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['provinceid']): ?> value="<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['provinceid']]; ?>
" <?php else: ?>value="请选择省份"<?php endif; ?> id="province" onclick="search_show('job_province');">
                  <input type="hidden" id="provinceid" name="provinceid" value="<?php echo $this->_tpl_vars['row']['provinceid']; ?>
" />
                  <div id="job_province" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none">
                  <div style="width:100%;  overflow:auto; overflow-x:hidden">
                    <ul class="Search_Condition_box_list">
                     <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                      <li><a href="javascript:;" onclick="select_city('<?php echo $this->_tpl_vars['v']; ?>
','province','<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
','citys','city');"> <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                      <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>    </div>
                </div>
                <div class="text_seclet text_seclet_cur3 fltL">
                   <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['cityid']): ?> value="<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['cityid']]; ?>
" <?php else: ?>value="请选择城市"<?php endif; ?> id="citys" onclick="search_show('job_citys');">
                  <input type="hidden" id="citysid" name="cityid" value="<?php echo $this->_tpl_vars['row']['cityid']; ?>
" />
                  <div id="job_citys" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none">
                     <div style="width:100%;  overflow:auto; overflow-x:hidden">
                    <ul class="Search_Condition_box_list">
                    <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                      <li><a href="javascript:;" onclick="select_city('<?php echo $this->_tpl_vars['v']; ?>
','citys','<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
','three_city','city');"> <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                      <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>  </div>
                </div>
                <div class="text_seclet text_seclet_cur3 fltL" <?php if ($this->_tpl_vars['row']['three_cityid'] == ''): ?>style="display:none"<?php endif; ?> id="cityshowth">
                 <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['three_cityid']): ?> value="<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['three_cityid']]; ?>
" <?php else: ?>value="请选择区县"<?php endif; ?> id="three_city" onclick="search_show('job_three_city');">
                  <input type="hidden" id="three_cityid" name="three_cityid" value="<?php echo $this->_tpl_vars['row']['three_cityid']; ?>
" />
                  <div id="job_three_city" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none">
                    <ul class="Search_Condition_box_list">
                    <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                      <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','three_city','<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                      <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
			<li>
              <div class="tit days"><font color="#FF0000">*</font> 招聘天数：</div>
			  <div class="tit edate" style="display:none"><font color="#FF0000">*</font> 结束日期：</div>
              <div class="textbox">
                <input type="text" name="days" id='days' <?php if ($this->_tpl_vars['row']['days']): ?>value="<?php echo $this->_tpl_vars['row']['days']; ?>
"<?php else: ?>value='30'<?php endif; ?> style="float:left" class="com_info_text days" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"> 
                <input id="edate" class="input-text com_info_text edate" type="text" readonly="" size="15" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['row']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" name="edate" style="display:none"><span id="by_days" style="color:#666"><input value='1' type='checkbox' id='days_type' name='days_type' onclick="change_days_type()">自定义结束日期。</span>
               <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
                <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
                <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
                <script type="text/javascript">
				var edate=Calendar.setup({
				weekNumbers: true,
				inputField : "edate",
				trigger : "edate",
				dateFormat: "%Y-%m-%d",
				showTime: false,
				onSelect : function() {this.hide();}
				});
				</script>
                 </div>
            </li>
            <li>
              <div class=tit><font color="#FF0000">*</font> 职位描述：</div>
              <div class=textbox style="width:513px;">
              
<div class="Description" style="display:none;">
<div class="Description_icon">
<i class="Description_icon_i"></i>
<div class="Description_box" style="display:none;">
<i class="Description_icon_i_j"></i>
点击职位链接，为你推荐的职位要求模板复制到编辑区域内！<br>您也可以编辑，直至完美！
</div>
</div>
<div class="Description_box_mb">模板：<span id="JobRequInfoTemplate"></span></div>
</div>
<div class="clear"></div>
 <textarea name="description" id="description" style="height:180px; width:200px;"><?php echo $this->_tpl_vars['row']['description']; ?>
</textarea>
                <span id="by_description" class="errordisplay">不能为空</span></div>
            </li>
            <div class="admin_tit"> <span class="admin_tit_bg">补充信息</span><i class="com_admin_ask"></i><span class="remind" style="float:right">以下为选填项</span> </div>
            <li>
              <div class=tit>  从事行业：</div>
              <div class=textbox>
                <div class="text_seclet text_seclet_cur" style="z-index:400">

                  <input class="SpFormLBut text_seclet_w250 " type="button" <?php if ($this->_tpl_vars['row']['hy']): ?> value="<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['row']['hy']]; ?>
" <?php else: ?> value="请选择行业" <?php endif; ?> id="hy" onclick="search_show('job_hy');">
                 <input type="hidden" id="hyid" name="hy"  <?php if ($this->_tpl_vars['row']['hy']): ?> value="<?php echo $this->_tpl_vars['row']['hy']; ?>
"<?php endif; ?>/>
                  <div id="job_hy" class="cus-sel-opt-panel" style="display:none; z-index:301">
                   <div style="width:100%;  overflow:auto; overflow-x:hidden">
                    <ul>
                   <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','hy','<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>招聘人数：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur0">
                  <input id="number" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_number');"  <?php if ($this->_tpl_vars['row']['number']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['number']]; ?>
" <?php else: ?> value="招聘人数" <?php endif; ?>>
                  <input id="numberid" type="hidden" name="number">
                  <div id="job_number" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                     <?php $_from = $this->_tpl_vars['comdata']['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','number','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>薪水待遇：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur0">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['salary']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['salary']]; ?>
" <?php else: ?> value="请选择薪水" <?php endif; ?>  id="salary" onclick="search_show('job_salary');">
                <input type="hidden" id="salaryid" name="salary" <?php if ($this->_tpl_vars['row']['salary']): ?> value="<?php echo $this->_tpl_vars['row']['salary']; ?>
"<?php endif; ?> />
                  <div id="job_salary" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                     <?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','salary','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>工作性质：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['type']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['type']]; ?>
" <?php else: ?> value="请选择工作性质" <?php endif; ?>  id="type" onclick="search_show('job_type');">
                <input type="hidden" id="typeid" name="type" <?php if ($this->_tpl_vars['row']['type']): ?> value="<?php echo $this->_tpl_vars['row']['type']; ?>
"<?php endif; ?> />
                  <div id="job_type" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                       <?php $_from = $this->_tpl_vars['comdata']['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','type','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>工作经验：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur">
                  <input id="exp" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_exp');" <?php if ($this->_tpl_vars['row']['exp']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['exp']]; ?>
" <?php else: ?> value="请选择工作经验" <?php endif; ?>>
                  <input id="expid" type="hidden" name="exp" <?php if ($this->_tpl_vars['row']['exp']): ?> value="<?php echo $this->_tpl_vars['row']['exp']; ?>
"<?php endif; ?>>
                  <div id="job_exp" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                    <?php $_from = $this->_tpl_vars['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','exp','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>到岗时间：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur2">
                   <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['report']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['report']]; ?>
" <?php else: ?> value="请选择到岗时间" <?php endif; ?>  id="report" onclick="search_show('job_report');">
                <input type="hidden" id="reportid" name="report" <?php if ($this->_tpl_vars['row']['report']): ?> value="<?php echo $this->_tpl_vars['row']['report']; ?>
"<?php endif; ?> />
                  <div id="job_report" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                    <?php $_from = $this->_tpl_vars['comdata']['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','report','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>年龄要求：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur2">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['age']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['age']]; ?>
" <?php else: ?> value="请选择年龄要求" <?php endif; ?>  id="age" onclick="search_show('job_age');">
                <input type="hidden" id="ageid" name="age" <?php if ($this->_tpl_vars['row']['age']): ?> value="<?php echo $this->_tpl_vars['row']['age']; ?>
"<?php endif; ?> />
                  <div id="job_age" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                     <?php $_from = $this->_tpl_vars['comdata']['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','age','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>性别要求：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur3">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['sex']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['sex']]; ?>
" <?php else: ?> value="请选择性别要求" <?php endif; ?>  id="sex" onclick="search_show('job_sex');">
                <input type="hidden" id="sexid" name="sex" <?php if ($this->_tpl_vars['row']['sex']): ?> value="<?php echo $this->_tpl_vars['row']['sex']; ?>
"<?php endif; ?> />
                  <div id="job_sex" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                      <?php $_from = $this->_tpl_vars['comdata']['job_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','sex','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>教育程度：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur3">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['edu']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['edu']]; ?>
" <?php else: ?> value="请选择教育程度" <?php endif; ?>  id="edu" onclick="search_show('job_edu');">
                <input type="hidden" id="eduid" name="edu" <?php if ($this->_tpl_vars['row']['edu']): ?> value="<?php echo $this->_tpl_vars['row']['edu']; ?>
"<?php endif; ?> />
                  <div id="job_edu" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                    <?php $_from = $this->_tpl_vars['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','edu','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="job_add_bc">
              <div class=tit>婚姻状况：</div>
              <div class="textbox textbox2">
                <div class="text_seclet text_seclet_cur4">
                  <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['marriage']): ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['marriage']]; ?>
" <?php else: ?> value="请选择婚姻状况" <?php endif; ?>  id="marriage" onclick="search_show('job_marriage');">
                <input type="hidden" id="marriageid" name="marriage" <?php if ($this->_tpl_vars['row']['marriage']): ?> value="<?php echo $this->_tpl_vars['row']['marriage']; ?>
"<?php endif; ?> />
                  <div id="job_marriage" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display: none;">
                    <ul class="Search_Condition_box_list">
                      <?php $_from = $this->_tpl_vars['comdata']['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','marriage','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="tit">语言要求：</div>
              <div class="textbox" ><div class="toggle" onclick="zhankaiShouqi(this);"><?php if (! $this->_tpl_vars['row']['id']): ?>更多<?php else: ?>收起<?php endif; ?></div>
			  <?php $_from = $this->_tpl_vars['comdata']['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <div class="job_add_y_list" style="margin-top:0px; <?php if ($this->_tpl_vars['j'] > 3 && ! $this->_tpl_vars['row']['id']): ?>display:none<?php endif; ?>">
                  <input type="checkbox" style="margin-top:8px;" id="lang<?php echo $this->_tpl_vars['v']; ?>
" value='<?php echo $this->_tpl_vars['v']; ?>
' name="lang[]" <?php if ($this->_tpl_vars['row']['lang'] && in_array ( $this->_tpl_vars['v'] , $this->_tpl_vars['row']['lang'] )): ?>checked<?php endif; ?> class="job_add_check_box" />
                  <label for="lang<?php echo $this->_tpl_vars['v']; ?>
" ><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</label>
                </div>
                <?php endforeach; endif; unset($_from); ?> </div>
            </li>
            <li>
              <div class=tit>福利待遇：</div>
              <div class=textbox><div class="toggle" onclick="zhankaiShouqi(this);"><?php if (! $this->_tpl_vars['row']['id']): ?>更多<?php else: ?>收起<?php endif; ?></div>
			  <?php $_from = $this->_tpl_vars['comdata']['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <div class="job_add_y_list" style="margin-top:0px; <?php if ($this->_tpl_vars['j'] > 3 && ! $this->_tpl_vars['row']['id']): ?>display:none<?php endif; ?>">
                  <input type="checkbox" style="margin-top:8px;" value='<?php echo $this->_tpl_vars['v']; ?>
' id="welfare<?php echo $this->_tpl_vars['v']; ?>
" name="welfare[]" <?php if ($this->_tpl_vars['row']['welfare'] && in_array ( $this->_tpl_vars['v'] , $this->_tpl_vars['row']['welfare'] )): ?>checked<?php endif; ?> class="job_add_check_box">
                  <label for="welfare<?php echo $this->_tpl_vars['v']; ?>
" ><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</label>
                </div>
                <?php endforeach; endif; unset($_from); ?> </div>
            </li>
          </ul>
          </div>
           <div class="admin_tit"><span class="admin_tit_bg">联系方式</span></div>

				<div class="admin_job_js"><input type="radio" onclick="invoice_link('2')" value="1" name="is_link" <?php if ($this->_tpl_vars['row']['is_link'] != '0'): ?>checked="checked"<?php endif; ?> class="admin_job_radio"><span>展示联系方式（愿意接受求职者咨询）</span></div>
			  <div class="admin_job_js_box payment_fp_touch_in" id="linktype" <?php if ($this->_tpl_vars['row']['is_link'] == '0'): ?>style="display:none;"<?php endif; ?>>
				  <div class="admin_job_js_box_c">
						<?php if ($this->_tpl_vars['company']['linktel']): ?>
					  <div class="admin_job_js_box_list"> <input type="radio" onclick="checklinktype('1')" value="1" <?php if ($this->_tpl_vars['row']['link_type'] != '2'): ?>checked="checked"<?php endif; ?> name="link_type" class="admin_job_radio">使用企业联系方式（<?php echo $this->_tpl_vars['company']['linkman']; ?>
&nbsp;<?php echo $this->_tpl_vars['company']['linktel']; ?>
）</div>
					  <?php endif; ?>
					  <div class="admin_job_js_box_list"> <input type="radio" onclick="checklinktype('2')" value="2" <?php if ($this->_tpl_vars['row']['link_type'] == '2' || $this->_tpl_vars['company']['linktel'] == ''): ?>checked="checked"<?php endif; ?> name="link_type" class="admin_job_radio">使用新联系方式 </div>
					   <div class="admin_job_js_box_touch" id="newlink" <?php if ($this->_tpl_vars['row']['link_type'] != '2' && $this->_tpl_vars['company']['linktel']): ?>style="display:none;"<?php endif; ?>><input type="text" <?php if ($this->_tpl_vars['job_link']['link_type'] != '1'): ?>value="<?php echo $this->_tpl_vars['job_link']['link_man']; ?>
"<?php endif; ?> placeholder="联系人" name="link_man" class="payment_fp_touch_text payment_fp_touch_text_p"> <input type="text" <?php if ($this->_tpl_vars['job_link']['link_type'] != '1'): ?>value="<?php echo $this->_tpl_vars['job_link']['link_moblie']; ?>
"<?php endif; ?> name="link_moblie" placeholder="联系电话" class="payment_fp_touch_text"></div>
				  </div> 
			  </div>    
			<div class="admin_job_js"><input type="radio" value="0" name="is_link" onclick="invoice_link('1')" class="admin_job_radio" <?php if ($this->_tpl_vars['row']['is_link'] == '0'): ?>checked="checked"<?php endif; ?>><span>不向求职者展示联系方式（不想受到骚扰）</span></div>
              
          <div class="admin_tit"><span class="admin_tit_bg">邮件接收简历</span></div>

           <div class="admin_job_js">
           	<input type="radio" value="1" name='is_email' <?php if ($this->_tpl_vars['job_link']['is_email'] != '0'): ?>checked="checked"<?php endif; ?> class="admin_job_radio" onclick="$('.jobadd_email_c').show();"><span>需要发送到邮箱</span>
            </div>
           
            <div class="admin_job_js_box jobadd_email_c" <?php if ($this->_tpl_vars['job_link']['is_email'] == '0'): ?>style="display:none;"<?php endif; ?>>
            <div class="admin_job_js_box_c">
            	<div class="admin_job_js_box_list"> <input type="radio" value="1" <?php if ($this->_tpl_vars['job_link']['email_type'] != '2' && $this->_tpl_vars['company']['linkmail']): ?>checked="checked"<?php endif; ?> name="email_type" class="admin_job_radio" onclick="$('#jobadd_email').hide();">使用企业邮箱（<?php echo $this->_tpl_vars['company']['linkmail']; ?>
）</div>
					  <div class="admin_job_js_box_list"> <input type="radio" value="2" <?php if ($this->_tpl_vars['job_link']['email_type'] == '2' || $this->_tpl_vars['company']['linkmail'] == ''): ?>checked="checked"<?php endif; ?> name="email_type" class="admin_job_radio" onclick="$('#jobadd_email').show();">使用新邮箱</div>
                <div class="admin_job_js_box_touch" id="jobadd_email" <?php if ($this->_tpl_vars['job_link']['email_type'] != '2' && $this->_tpl_vars['company']['linkmail']): ?>style="display:none;"<?php endif; ?>>
                    <input type="text" value="<?php echo $this->_tpl_vars['job_link']['email']; ?>
" placeholder="填写邮箱" class="payment_fp_touch_text" name="email">
                </div>
            </div>
         </div>
          <div class="admin_job_js"><input type="radio" value="0" name='is_email' <?php if ($this->_tpl_vars['job_link']['is_email'] == '0'): ?>checked="checked"<?php endif; ?> class="admin_job_radio" onclick="$('.jobadd_email_c').hide();"><span>不需要将收到的简历发送到邮箱</span></div>

          <div class=admin_submit>
          <div class=condition>&nbsp;</div>
          <div class=sub_btn> <span>
          <input name="jobcopy" value="<?php echo $_GET['jobcopy']; ?>
" type="hidden"/>
            <input name="id" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" type="hidden"/>
            <input name="state" value="<?php echo $this->_tpl_vars['row']['state']; ?>
" type="hidden"/>
            <input class="btn_01" type="submit" name="submitBtn" value=" 提 交 操 作 ">
            </span></div>
			</div>
        </form>
      
    </div>
  </div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>