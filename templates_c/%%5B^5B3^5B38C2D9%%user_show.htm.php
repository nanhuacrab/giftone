<?php /* Smarty version 2.6.26, created on 2015-02-01 04:27:09
         compiled from wap/user_show.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'wap/user_show.htm', 27, false),array('function', 'image', 'wap/user_show.htm', 155, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="post_content">
<div class="post_title">
<h3><?php echo $this->_tpl_vars['Info']['username_n']; ?>
 / <?php echo $this->_tpl_vars['Info']['user_sex']; ?>
</h3>
<aside>意向职位：<?php echo $this->_tpl_vars['Info']['jobname']; ?>
</aside>
<i><?php echo $this->_tpl_vars['Info']['lastupdate']; ?>
</i>
</div>
<section class="com_post_title">
<header  class="index_post_h2"><span>》自我描述</span></header>
  <ul class="com_post_msg">
  <li>[简历名称] <?php echo $this->_tpl_vars['row']['username']; ?>
</li>
  <li>[工作年限] <?php echo $this->_tpl_vars['Info']['user_exp']; ?>
</li>
  <li>[意向行业] <?php echo $this->_tpl_vars['Info']['hy']; ?>
</li>
  <li>[期望薪资] <?php echo $this->_tpl_vars['Info']['salary']; ?>
元</li>
 
  <li>[自我介绍] <?php echo $this->_tpl_vars['Info']['description']; ?>
</li>
  </ul>
</section>

<?php if ($this->_tpl_vars['Info']['user_work']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》工作经历</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['worklist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['worklist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 至 <?php if ($this->_tpl_vars['worklist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['worklist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>至今<?php endif; ?></div>  
      <div class="">
      <em>在</em><?php echo $this->_tpl_vars['worklist']['name']; ?>
&nbsp;&nbsp;
      <em>担任</em><?php echo $this->_tpl_vars['worklist']['title']; ?>
 </div>
      <em>主要工作</em><?php echo $this->_tpl_vars['worklist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_edu']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》教育经历</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['edulist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['edulist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 至 <?php if ($this->_tpl_vars['edulist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['edulist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>至今<?php endif; ?></div>  
      <div class="">
      <em>在</em><?php echo $this->_tpl_vars['edulist']['name']; ?>
&nbsp;&nbsp;
      <em>担任职位</em><?php echo $this->_tpl_vars['edulist']['title']; ?>
 </div>
      <em>学习内容</em><?php echo $this->_tpl_vars['edulist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_training']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》培训经历</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_training']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['traininglist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['traininglist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 至 <?php if ($this->_tpl_vars['traininglist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['traininglist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>至今<?php endif; ?></div>  
      <div class="">
      <em>在</em><?php echo $this->_tpl_vars['traininglist']['name']; ?>

      <em>接受</em><?php echo $this->_tpl_vars['traininglist']['title']; ?>
 <em>方向的培训</em></div>
      <em>培训内容</em><?php echo $this->_tpl_vars['traininglist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_project']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》项目经历</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['projectlist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['projectlist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 至 <?php if ($this->_tpl_vars['projectlist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['projectlist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>至今<?php endif; ?></div>  
      <div class="">
      <em>项目环境</em><?php echo $this->_tpl_vars['projectlist']['sys']; ?>
&nbsp;&nbsp;
      <em>在</em><?php echo $this->_tpl_vars['projectlist']['name']; ?>

      <em>担任</em><?php echo $this->_tpl_vars['projectlist']['title']; ?>
 </div>
      <em>主要工作</em><?php echo $this->_tpl_vars['projectlist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_skill']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》专业技能</span></header>
<div class="user_jl_jy_list">
      <?php $_from = $this->_tpl_vars['Info']['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skilllist']):
?>
      <div class="job_jl_list"> 
      <div class="">
      <em>掌握</em><?php echo $this->_tpl_vars['skilllist']['skill_n']; ?>
 <em>类技能</em>&nbsp;&nbsp;<?php echo $this->_tpl_vars['skilllist']['name']; ?>

      <em></em><?php echo $this->_tpl_vars['skilllist']['longtime']; ?>
个月 </div>
      <em>熟练程度</em><?php echo $this->_tpl_vars['skilllist']['ing_n']; ?>

      </div>   
      <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_cert']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》证书</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_cert']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['certlist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['certlist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 至 <?php if ($this->_tpl_vars['certlist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['certlist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>至今<?php endif; ?></div>  
      <div class="">
      <em>获得</em><?php echo $this->_tpl_vars['certlist']['title']; ?>
&nbsp;&nbsp;
      <em>颁发的</em><?php echo $this->_tpl_vars['certlist']['name']; ?>
 </div>
      <em>证书描述</em><?php echo $this->_tpl_vars['certlist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_other']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>》其他信息</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['otherlist']):
?>
  <div class="job_jl_list"> 
      <div class="">
      <em></em><?php echo $this->_tpl_vars['otherlist']['title']; ?>
&nbsp;&nbsp;
      <em></em><?php echo $this->_tpl_vars['otherlist']['content']; ?>

      </div>  
      </div> 
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<section class="com_post_title">
<header  class="index_post_h2"><span>》联系方式</span></header>
<?php if ($this->_tpl_vars['Info']['m_status'] == '1'): ?>

 <ul class="com_post_msg">
	<li> [身份证] <?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'idcard','width' => 180), $this);?>
<?php if ($this->_tpl_vars['Info']['idcard_status'] == 1): ?>已认证<?php endif; ?></li>
	<li> [手机] <?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'telphone','width' => 200), $this);?>
</li>
    <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
    <li> [座机] <?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'telhome','width' => 200), $this);?>
</li>
    <?php endif; ?> 
	<li> [联系邮箱]<?php echo $this->_tpl_vars['Info']['email']; ?>
</li>
 </ul>
 <?php else: ?>
  <ul class="com_post_msg">
	<li> <?php echo $this->_tpl_vars['Info']['link_msg']; ?>
</li>
 </ul>
           <?php endif; ?> 
</section> 
<section class="com_post_title user_post_Application">
<input class="btn_1 user_post_talentadd" type="button" onClick="talent_pool('<?php echo $this->_tpl_vars['Info']['uid']; ?>
','<?php echo $this->_tpl_vars['Info']['id']; ?>
')" value="加入人才库">
       <input class="btn_1 sq_resume user_post_invite" type="button"  uid="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" eid="<?php echo $this->_tpl_vars['Info']['id']; ?>
" username="<?php echo $this->_tpl_vars['Info']['name']; ?>
" name="submit" value="邀请面试 ">
       <input name="uid" value="<?php echo $this->_tpl_vars['cuid']; ?>
" type="hidden"></section> 
</div>
       <div class="com_box_yq" id='job_box' style="display:none;float:left; z-index:100; position:absolute;top:10px;">
        <dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">面试职位：</span>
		  </dt>
          <dd><select id='jobname'></select></dd>
        </dl>
		<dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">联系人：</span>
             <dd> <input   id='linkman' value=''>
</dd>
        </dl>
        <dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">联系电话：</span>
              <dd>  <input id='linktel' value=''></dd>
		  </dt>
        </dl>
		<dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">面试时间：</span>
            <dd><input id='intertime' value=''></dd>
		  </dt>
        </dl>
		<dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">面试地址：</span><dd><input id='address' value=''></dd>
		  </dt>
        </dl>
		<dl class="com_box_yq_dl">
			<dt><span class="city_01">面试备注：</span><dd><textarea id="content"  class="resyme_text"></textarea></dd>
		</dl>
      <dl class="com_box_yq_dl" id="resume_job" style="height:40px;">
        <dt><span class="city_01">&nbsp;</span><input type="hidden" value="<?php echo $this->_tpl_vars['Info']['id']; ?>
" id="eid">
		<input type="hidden" value="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" id="uid">
		<input type="hidden" id="username" value="<?php echo $this->_tpl_vars['Info']['name']; ?>
"> 
		<input class="resume_sub_yq" id="click_invite" type="button" value="邀请面试"  >
    </dl>
  
 </div>
<script language="javascript" type="text/javascript">
function for_link(eid){
	$.post(weburl+"/index.php?m=ajax&c=for_link",{eid:eid},function(data){  
		var data=eval('('+data+')');
		var status=data.status;
		if(status==1){
			layermsg(data.msg);
		}else if(status==2){
				layer.open({
					content:data.msg,
					btn: ['确认', '取消'],
					shadeClose: false,
					yes: function(){
						down_integral(eid,data.uid);
					} 
				});
		}else if(status==3){
			location.reload();
		} 
	});
}
function down_integral(eid,uid){
	$.post(weburl+"/index.php?m=ajax&c=down_resume",{type:"integral",eid:eid,uid:uid},function(data){ 
		var data=eval('('+data+')');
		var status=data.status;
		var integral=data.integral;
		if(status==5){
			layermsg('您还有'+integral+integral_pricename+'！不够下载简历!');
		}else if(status==3){
			location.reload();
		}else{
			layermsg(data.msg);return false;
		}
	})
}
function talent_pool(uid,eid)
{
	$.post(weburl+"/index.php?m=ajax&c=talent_pool",{eid:eid,uid:uid},function(data){
		if(data=='0'){
			layermsg('只有企业用户，才可以操作！');
		}else if(data=='1'){
			layermsg('加入成功！');
		}else if(data=='2'){
			layermsg('该简历已加入到人才库！');
		}else{
			layermsg('对不起，操作出错！');
		}
	});
}
$(document).ready(function(){
	$(".sq_resume").click(function(){
		if($(this).attr("uid")){$("#uid").val($(this).attr("uid"));}
		if($(this).attr("username")){$("#username").val($(this).attr("username"));}
		$.post(weburl+"/index.php?m=ajax&c=index_ajaxresume",{show_job:'1'},function(data){
			var data=eval('('+data+')');
			var status=data.status;
			var integral=data.integral;
			if(data.html){
				$("#jobname").html(data.html);
			}
			if(data.linkman){
				$("#linkman").val(data.linkman);
			}
			if(data.linktel){
				$("#linktel").val(data.linktel);
			}
			if(data.address){
				$("#address").val(data.address);
			}
			if(data.intertime){
				$("#intertime").val(data.intertime);
			}
			if(data.content){
				$("#content").text(data.content);
				$("#update_yq").attr("checked",true);
			}
			if(status == 6){
			    layermsg('请先登录！');return false;
			}
			if(!status || status == 0){
				 layermsg('您不是企业用户，请先登录！');
				/*layer.alert('您不是企业用户，请先登录！', 0, '提示',function(){
					window.location.href =weburl+"/index.php?m=login&usertype=2&type=out"; window.event.returnValue = false;return false;
				});*/

			}else if(status==1){
				layer.open({
					content:"邀请面试将扣除"+integral+integral_pricename+"，是否继续？",
					btn: ['确认', '取消'],
					shadeClose: false,
					yes: function(){
						location.href=weburl+'/index.php?m=user&c=invite&jobname='+data.html+'&linkman='+data.linkman+'&linktel='+data.linktel+'&address='+data.address+'&intertime='+data.intertime+'&uid=<?php echo $this->_tpl_vars['Info']['uid']; ?>
';
				
						//$("#job_box").show();
					} 
				});
				/*layer.confirm("邀请面试将扣除"+integral+integral_pricename+"，是否继续？",function(){
					layer.closeAll();
					$.layer({
						type : 1,
						title :'邀请面试',
						offset: [($(window).height() - 280)/2 + 'px', ''],
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['380px','auto'],
						page : {dom :"#job_box"}
					});
				});*/
			}else if(status==2){
				layer.open({
					content:"你的等级特权已经用完,将扣除"+integral+integral_pricename,
					btn: ['确认', '取消'],
					shadeClose: false,
					yes: function(){
						location.href=weburl+'/index.php?m=user&c=invite&jobname='+data.html+'&linkman='+data.linkman+'&linktel='+data.linktel+'&address='+data.address+'&intertime='+data.intertime+'&uid=<?php echo $this->_tpl_vars['Info']['uid']; ?>
';
				
						//$("#job_box").show();
					} 
				});
				/*layer.confirm("你的等级特权已经用完,将扣除"+integral+integral_pricename,function(){
					layer.closeAll();
					$.layer({
						type : 1,
						title :'邀请面试',
						offset: [($(window).height() -380)/2 + 'px', ''],
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['380px','auto'],
						page : {dom :"#job_box"}
					});
				});*/
			}else if(status==3){ 
				/*$.layer({
					type : 1,
					title :'邀请面试',
					offset: [($(window).height() - 380)/2 + 'px', ''],
					closeBtn : [0 , true],
					border : [10 , 0.3 , '#000', true],
					area : ['380px','auto'],
					page : {dom :"#job_box"}
				});*/
						location.href=weburl+'/index.php?m=user&c=invite&jobname='+data.html+'&linkman='+data.linkman+'&linktel='+data.linktel+'&address='+data.address+'&intertime='+data.intertime+'&uid=<?php echo $this->_tpl_vars['Info']['uid']; ?>
';
				
						//$("#job_box").show();
			}else if(status==4){
				layermsg('会员邀请简历已用完！');return false;
			}else if(status==5){
				layermsg('您暂无发布中的职位！');return false;
			}
		});
	})
});
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>