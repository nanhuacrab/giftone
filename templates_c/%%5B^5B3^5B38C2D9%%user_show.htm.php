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
<aside>����ְλ��<?php echo $this->_tpl_vars['Info']['jobname']; ?>
</aside>
<i><?php echo $this->_tpl_vars['Info']['lastupdate']; ?>
</i>
</div>
<section class="com_post_title">
<header  class="index_post_h2"><span>����������</span></header>
  <ul class="com_post_msg">
  <li>[��������] <?php echo $this->_tpl_vars['row']['username']; ?>
</li>
  <li>[��������] <?php echo $this->_tpl_vars['Info']['user_exp']; ?>
</li>
  <li>[������ҵ] <?php echo $this->_tpl_vars['Info']['hy']; ?>
</li>
  <li>[����н��] <?php echo $this->_tpl_vars['Info']['salary']; ?>
Ԫ</li>
 
  <li>[���ҽ���] <?php echo $this->_tpl_vars['Info']['description']; ?>
</li>
  </ul>
</section>

<?php if ($this->_tpl_vars['Info']['user_work']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>����������</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['worklist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['worklist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 �� <?php if ($this->_tpl_vars['worklist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['worklist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>����<?php endif; ?></div>  
      <div class="">
      <em>��</em><?php echo $this->_tpl_vars['worklist']['name']; ?>
&nbsp;&nbsp;
      <em>����</em><?php echo $this->_tpl_vars['worklist']['title']; ?>
 </div>
      <em>��Ҫ����</em><?php echo $this->_tpl_vars['worklist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_edu']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>����������</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['edulist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['edulist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 �� <?php if ($this->_tpl_vars['edulist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['edulist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>����<?php endif; ?></div>  
      <div class="">
      <em>��</em><?php echo $this->_tpl_vars['edulist']['name']; ?>
&nbsp;&nbsp;
      <em>����ְλ</em><?php echo $this->_tpl_vars['edulist']['title']; ?>
 </div>
      <em>ѧϰ����</em><?php echo $this->_tpl_vars['edulist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_training']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>����ѵ����</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_training']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['traininglist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['traininglist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 �� <?php if ($this->_tpl_vars['traininglist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['traininglist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>����<?php endif; ?></div>  
      <div class="">
      <em>��</em><?php echo $this->_tpl_vars['traininglist']['name']; ?>

      <em>����</em><?php echo $this->_tpl_vars['traininglist']['title']; ?>
 <em>�������ѵ</em></div>
      <em>��ѵ����</em><?php echo $this->_tpl_vars['traininglist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_project']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>����Ŀ����</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['projectlist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['projectlist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 �� <?php if ($this->_tpl_vars['projectlist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['projectlist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>����<?php endif; ?></div>  
      <div class="">
      <em>��Ŀ����</em><?php echo $this->_tpl_vars['projectlist']['sys']; ?>
&nbsp;&nbsp;
      <em>��</em><?php echo $this->_tpl_vars['projectlist']['name']; ?>

      <em>����</em><?php echo $this->_tpl_vars['projectlist']['title']; ?>
 </div>
      <em>��Ҫ����</em><?php echo $this->_tpl_vars['projectlist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_skill']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>��רҵ����</span></header>
<div class="user_jl_jy_list">
      <?php $_from = $this->_tpl_vars['Info']['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skilllist']):
?>
      <div class="job_jl_list"> 
      <div class="">
      <em>����</em><?php echo $this->_tpl_vars['skilllist']['skill_n']; ?>
 <em>�༼��</em>&nbsp;&nbsp;<?php echo $this->_tpl_vars['skilllist']['name']; ?>

      <em></em><?php echo $this->_tpl_vars['skilllist']['longtime']; ?>
���� </div>
      <em>�����̶�</em><?php echo $this->_tpl_vars['skilllist']['ing_n']; ?>

      </div>   
      <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_cert']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>��֤��</span></header>
<div class="user_jl_jy_list">
  <?php $_from = $this->_tpl_vars['Info']['user_cert']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['certlist']):
?>
  <div class="job_jl_list">
      <div> 
      <?php echo ((is_array($_tmp=$this->_tpl_vars['certlist']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 �� <?php if ($this->_tpl_vars['certlist']['edate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['certlist']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
<?php else: ?>����<?php endif; ?></div>  
      <div class="">
      <em>���</em><?php echo $this->_tpl_vars['certlist']['title']; ?>
&nbsp;&nbsp;
      <em>�䷢��</em><?php echo $this->_tpl_vars['certlist']['name']; ?>
 </div>
      <em>֤������</em><?php echo $this->_tpl_vars['certlist']['content']; ?>

      </div>   
          <?php endforeach; endif; unset($_from); ?>

</div>
</section>
<?php endif; ?>

<?php if ($this->_tpl_vars['Info']['user_other']): ?>
<section class="com_post_title">
<header  class="index_post_h2"><span>��������Ϣ</span></header>
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
<header  class="index_post_h2"><span>����ϵ��ʽ</span></header>
<?php if ($this->_tpl_vars['Info']['m_status'] == '1'): ?>

 <ul class="com_post_msg">
	<li> [���֤] <?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'idcard','width' => 180), $this);?>
<?php if ($this->_tpl_vars['Info']['idcard_status'] == 1): ?>����֤<?php endif; ?></li>
	<li> [�ֻ�] <?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'telphone','width' => 200), $this);?>
</li>
    <?php if ($this->_tpl_vars['Info']['basic_info'] == '1'): ?>
    <li> [����] <?php echo smarty_function_image(array('uid' => $this->_tpl_vars['Info']['uid'],'action' => 'telhome','width' => 200), $this);?>
</li>
    <?php endif; ?> 
	<li> [��ϵ����]<?php echo $this->_tpl_vars['Info']['email']; ?>
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
')" value="�����˲ſ�">
       <input class="btn_1 sq_resume user_post_invite" type="button"  uid="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" eid="<?php echo $this->_tpl_vars['Info']['id']; ?>
" username="<?php echo $this->_tpl_vars['Info']['name']; ?>
" name="submit" value="�������� ">
       <input name="uid" value="<?php echo $this->_tpl_vars['cuid']; ?>
" type="hidden"></section> 
</div>
       <div class="com_box_yq" id='job_box' style="display:none;float:left; z-index:100; position:absolute;top:10px;">
        <dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">����ְλ��</span>
		  </dt>
          <dd><select id='jobname'></select></dd>
        </dl>
		<dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">��ϵ�ˣ�</span>
             <dd> <input   id='linkman' value=''>
</dd>
        </dl>
        <dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">��ϵ�绰��</span>
              <dd>  <input id='linktel' value=''></dd>
		  </dt>
        </dl>
		<dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">����ʱ�䣺</span>
            <dd><input id='intertime' value=''></dd>
		  </dt>
        </dl>
		<dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">���Ե�ַ��</span><dd><input id='address' value=''></dd>
		  </dt>
        </dl>
		<dl class="com_box_yq_dl">
			<dt><span class="city_01">���Ա�ע��</span><dd><textarea id="content"  class="resyme_text"></textarea></dd>
		</dl>
      <dl class="com_box_yq_dl" id="resume_job" style="height:40px;">
        <dt><span class="city_01">&nbsp;</span><input type="hidden" value="<?php echo $this->_tpl_vars['Info']['id']; ?>
" id="eid">
		<input type="hidden" value="<?php echo $this->_tpl_vars['Info']['uid']; ?>
" id="uid">
		<input type="hidden" id="username" value="<?php echo $this->_tpl_vars['Info']['name']; ?>
"> 
		<input class="resume_sub_yq" id="click_invite" type="button" value="��������"  >
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
					btn: ['ȷ��', 'ȡ��'],
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
			layermsg('������'+integral+integral_pricename+'���������ؼ���!');
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
			layermsg('ֻ����ҵ�û����ſ��Բ�����');
		}else if(data=='1'){
			layermsg('����ɹ���');
		}else if(data=='2'){
			layermsg('�ü����Ѽ��뵽�˲ſ⣡');
		}else{
			layermsg('�Բ��𣬲�������');
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
			    layermsg('���ȵ�¼��');return false;
			}
			if(!status || status == 0){
				 layermsg('��������ҵ�û������ȵ�¼��');
				/*layer.alert('��������ҵ�û������ȵ�¼��', 0, '��ʾ',function(){
					window.location.href =weburl+"/index.php?m=login&usertype=2&type=out"; window.event.returnValue = false;return false;
				});*/

			}else if(status==1){
				layer.open({
					content:"�������Խ��۳�"+integral+integral_pricename+"���Ƿ������",
					btn: ['ȷ��', 'ȡ��'],
					shadeClose: false,
					yes: function(){
						location.href=weburl+'/index.php?m=user&c=invite&jobname='+data.html+'&linkman='+data.linkman+'&linktel='+data.linktel+'&address='+data.address+'&intertime='+data.intertime+'&uid=<?php echo $this->_tpl_vars['Info']['uid']; ?>
';
				
						//$("#job_box").show();
					} 
				});
				/*layer.confirm("�������Խ��۳�"+integral+integral_pricename+"���Ƿ������",function(){
					layer.closeAll();
					$.layer({
						type : 1,
						title :'��������',
						offset: [($(window).height() - 280)/2 + 'px', ''],
						closeBtn : [0 , true],
						border : [10 , 0.3 , '#000', true],
						area : ['380px','auto'],
						page : {dom :"#job_box"}
					});
				});*/
			}else if(status==2){
				layer.open({
					content:"��ĵȼ���Ȩ�Ѿ�����,���۳�"+integral+integral_pricename,
					btn: ['ȷ��', 'ȡ��'],
					shadeClose: false,
					yes: function(){
						location.href=weburl+'/index.php?m=user&c=invite&jobname='+data.html+'&linkman='+data.linkman+'&linktel='+data.linktel+'&address='+data.address+'&intertime='+data.intertime+'&uid=<?php echo $this->_tpl_vars['Info']['uid']; ?>
';
				
						//$("#job_box").show();
					} 
				});
				/*layer.confirm("��ĵȼ���Ȩ�Ѿ�����,���۳�"+integral+integral_pricename,function(){
					layer.closeAll();
					$.layer({
						type : 1,
						title :'��������',
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
					title :'��������',
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
				layermsg('��Ա������������꣡');return false;
			}else if(status==5){
				layermsg('�����޷����е�ְλ��');return false;
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