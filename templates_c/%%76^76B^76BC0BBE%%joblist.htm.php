<?php /* Smarty version 2.6.26, created on 2015-01-30 22:28:04
         compiled from member/com/joblist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/com/joblist.htm', 36, false),array('modifier', 'date_format', 'member/com/joblist.htm', 39, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950">
<div class="admin_mainbody">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class=right_box>
  <div class=admincont_box>
    <div class=admin_tit><span class="admin_tit_bg">�����е�ְλ</span> </div>
    <div class="clear"></div>
    <div class="job_re_ts">
     <span>��ʾ�������<em class="job_tips_zt">��<?php if ($this->_tpl_vars['status']['status0']): ?><?php echo $this->_tpl_vars['status']['status0']; ?>
<?php else: ?>0<?php endif; ?>��</em>
�����<em class="job_tips_zt">��<?php if ($this->_tpl_vars['status']['status1']): ?><?php echo $this->_tpl_vars['status']['status1']; ?>
<?php else: ?>0<?php endif; ?>��</em>
δͨ��<em class="job_tips_zt">��<?php if ($this->_tpl_vars['status']['status3']): ?><?php echo $this->_tpl_vars['status']['status3']; ?>
<?php else: ?>0<?php endif; ?>��</em>
�ѹ���<em class="job_tips_zt">��<?php if ($this->_tpl_vars['status']['status2']): ?><?php echo $this->_tpl_vars['status']['status2']; ?>
<?php else: ?>0<?php endif; ?>��</em>
���ɷ���<em class="job_tips_zt">��<?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['job_num']; ?>
<?php else: ?>����<?php endif; ?><?php else: ?>0<?php endif; ?>��</em>
     </span>
       <input class="fb_Com_xz" onclick="location.href='index.php?c=jobadd'" type="button" value="����ְλ" name="input">
   </div>
   <div class="clear"></div>
   <div class="com_Release_job">
   <div class="com_Release_job_h1">
   <span class="com_Release_job_a_c">&nbsp;</span>
   <span class="com_Release_job_a">ְλ����</span>
   <span class="com_Release_job_b">�ƹ�ְλ</span>
   <span class="com_Release_job_c">�յ�����</span>
   <span class="com_Release_job_c">�����  </span>
   <span class="com_Release_job_d">���״̬</span>
   <span class="com_Release_job_e">����ʱ��</span>
   <span class="com_Release_job_f"><em style="display:inline-block; _margin-top:6px;">�Զ�ˢ��<i class="com_Release_job_help"></i></em></span>
   <span class="com_Release_job_g">����</span>
   </div>
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?c=job&act=opera" target="supportiframe" method="post" id='myform'>
   <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
       <div class="com_Release_job_span  com_Release_job_list">
   <div class="com_Release_job_span  com_Release_job_a_c"><input type="checkbox" name="checkboxid[]" value="<?php echo $this->_tpl_vars['job']['id']; ?>
" class="com_Release_job_check"></div>
   <div class="com_Release_job_span  com_Release_job_a"><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['job']['id'])), $this);?>
" class="com_Release_name"><?php echo $this->_tpl_vars['job']['name']; ?>
</a></div>
   <div class="com_Release_job_span  com_Release_job_b">
   <?php if ($this->_tpl_vars['job']['urgent_time'] > time ( )): ?>
   <a href="javascript:void(0);" onclick="urgent('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['urgent'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['urgent_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')" class="com_Release_tg com_Release_tg_ytj">�ѽ���</a>
   <?php else: ?>
   <a href="javascript:void(0);" onclick="urgent('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['urgent'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['urgent_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')"class="com_Release_tg">����</a>
   <?php endif; ?>
    <?php if ($this->_tpl_vars['job']['rec_time'] > time ( )): ?>
   <a href="javascript:void(0);" onclick="rec('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['rec'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['rec_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')" class="com_Release_tg com_Release_tg_ytj">���Ƽ�</a>
   <?php else: ?>
   <a href="javascript:void(0);" onclick="rec('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['rec'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['rec_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')"class="com_Release_tg">�Ƽ�</a>
   <?php endif; ?>
   </div>
   <div class="com_Release_job_span  com_Release_job_c"><a href="index.php?c=hr&job_id=<?php echo $this->_tpl_vars['job']['id']; ?>
">(<?php echo $this->_tpl_vars['job']['jobnum']; ?>
)��</a></div>
   <div class="com_Release_job_span  com_Release_job_c"><?php echo $this->_tpl_vars['job']['jobhits']; ?>
 </div>
   <div class="com_Release_job_span  com_Release_job_d">
        <?php if ($this->_tpl_vars['job']['state'] == '0'): ?> <span class="n_verify">�ȴ����</span><?php endif; ?>
        <?php if ($this->_tpl_vars['job']['state'] == '1'): ?> <span class="y_verify">�����</span><?php endif; ?>
        <?php if ($this->_tpl_vars['job']['state'] == '2'): ?> <span class="y_verify_js">�ѽ���</span><?php endif; ?>
        <?php if ($this->_tpl_vars['job']['state'] == '3'): ?> <span class="y_verify_wtg">δͨ��</span><?php endif; ?>
   </div>

   <div class="com_Release_job_span  com_Release_job_span  com_Release_job_e"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</div>
   <div class="com_Release_job_span  com_Release_job_f">
          <?php if ($this->_tpl_vars['statis']['auto'] > 0): ?>
              <?php if ($this->_tpl_vars['job']['autotype'] > 0): ?>
             <a href="javascript:void(0);" onclick="autojob('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php echo $this->_tpl_vars['job']['autotype']; ?>
');" class="com_Release_jobsx">������</a>
             <?php else: ?>
             <a href="javascript:void(0);" onclick="autojob('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php echo $this->_tpl_vars['job']['autotype']; ?>
');" class="com_Release_jobsx">δ����</a>
             <?php endif; ?>
          <?php else: ?>
             <a href="javascript:void(0);"onclick="buyautojob();" class="com_Release_jobsx">δ����</a>
          <?php endif; ?>

   </div>
   <div class="com_Release_job_span  com_Release_job_g"><div class="job_cz " aid="<?php echo $this->_tpl_vars['job']['id']; ?>
">
                  <div class="job_cz_hover" id="czlist_<?php echo $this->_tpl_vars['job']['id']; ?>
">
                  <span>����</span>
                  <div class="job_cz_box job_cz_box_job" id="czlist<?php echo $this->_tpl_vars['job']['id']; ?>
" style="display:none;">
                  <div><div class="job_cz_box_line"></div></div>
                   <a <?php if (( $this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0' ) && $_GET['w'] == '1'): ?>
				  <?php if ($this->_tpl_vars['statis']['editjob_num'] || $this->_tpl_vars['config']['integral_jobedit']): ?>
				  href="javascript:void(0)" onclick="return layer.confirm('<?php if ($this->_tpl_vars['statis']['editjob_num'] > 0): ?>�޸�ְλ����ʣ��<b><?php echo $this->_tpl_vars['statis']['editjob_num']; ?>
</b>����ȷ���޸ģ�<?php elseif ($this->_tpl_vars['config']['integral_jobedit'] > 0): ?>�޸�ְλҪ�۳�<?php echo $this->_tpl_vars['config']['integral_jobedit']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��<?php endif; ?>', function(){window.location.href='index.php?c=jobadd&act=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
';window.event.returnValue = false;return false;}); "<?php else: ?>href="index.php?c=jobadd&act=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"<?php endif; ?>
				  <?php else: ?>href="index.php?c=jobadd&act=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"<?php endif; ?>>�޸�</a>
                    <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=com&c=comapply&id=<?php echo $this->_tpl_vars['job']['id']; ?>
" target="_blank" title="Ԥ��">Ԥ��</a>
                    <a href="javascript:void(0);" onclick="gotime('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
')" title="����">����</a>
                <?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?>
                    <?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?>
                        <?php if ($this->_tpl_vars['statis']['breakjob_num'] > 0): ?>
                        <a href="javascript:void(0)" onclick="layer_del('ˢ��ְλ����ʣ��<?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
����ȷ��ˢ�£�', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">ˢ��</a>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>
                            <a href="javascript:void(0)" onclick="layer_del('����ˢ����۳�<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��ȷ��ˢ�£�', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">ˢ��</a>
                            <?php else: ?>
                            <a  href="javascript:void(0)" onclick="job_refresh();"  title="ˢ��">ˢ��</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php else: ?>
                    <a  href="javascript:void(0)" onclick="layer_del('ȷ��ˢ�¸�ְλô��', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">ˢ��</a>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>
                    <a href="javascript:void(0)" onclick="layer_del('����ˢ����۳�<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��ȷ��ˢ�£�', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">ˢ��</a>
                    <?php else: ?>
                    <a  href="javascript:void(0)" onclick="job_refresh();"  title="ˢ��">ˢ��</a>
                    <?php endif; ?>
                <?php endif; ?>
                    <a href="index.php?c=jobadd&act=edit&jobcopy=<?php echo $this->_tpl_vars['job']['id']; ?>
">����</a>
                    <a href="javascript:void(0)" onclick="layer_del('ȷ��Ҫɾ����ְλ��', 'index.php?c=job&act=opera&del=<?php echo $this->_tpl_vars['job']['id']; ?>
'); " title="ɾ��">ɾ��</a>
                    </div></div></div></div>
   <div class="com_Release_job_span  com_Release_job_bot">

   <em class="com_Release_job_span  com_Release_job_em" style="_margin-left:15px;">ְλ����ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
    </em>
     <em class="com_Release_job_span  com_Release_job_em">ϵͳ�Զ�ƥ�����Ƽ�����<a href="index.php?c=likeresume&job_id=<?php echo $this->_tpl_vars['job']['id']; ?>
" class="com_Release_job_lok">�鿴����</a>  </em>  <em class="com_Release_job_span  com_Release_job_em">��Ƹ״̬��<?php if ($this->_tpl_vars['job']['status'] == '1'): ?> <a href="javascript:onstatus('<?php echo $this->_tpl_vars['job']['id']; ?>
','2');"  class="com_Release_job_lok">����ͣ</a>
	  <?php else: ?> <a href="javascript:onstatus('<?php echo $this->_tpl_vars['job']['id']; ?>
','1');"  class="com_Release_job_lok">������</a> <?php endif; ?></em> </div>
   </div>
    <?php endforeach; else: ?>
  <div class="msg_no">���������Ϣ</div>
  <?php endif; unset($_from); ?>
  <?php if (! empty ( $this->_tpl_vars['rows'] )): ?>
  <div class="com_Release_job_bot">
   <span class="com_Release_job_qx"><input id='checkAll' type="checkbox" onclick='m_checkAll(this.form)'class="com_Release_job_qx_check">ȫѡ</span>
    <INPUT class="c_btn_02 c_btn_02_w110" type="button" value="�����ӳ���Ч��" onclick="allgotime();">
        <INPUT class="c_btn_02 c_btn_02_w110" type="button" value="����ˢ��ְλ" onclick="return Refresh('checkboxid[]');">
		<INPUT class="c_btn_02 c_btn_02_w110" type="button" value="����ɾ��ְλ" onclick="return really('checkboxid[]');">
   </div>
   <?php endif; ?>
    </form>
   </div>
   <div  class="clear"></div>
   <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    <div class="wxts_box wxts_box_mt30">
<div class="wxts">��ܰ��ʾ��</div>
1�����˾�п�����Ƹ�˲ţ����������������ȡ�����չʾ���ᣬ�԰����������ҵ�������˲š�
<br>
2��<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��ȡ��ע���Ա<?php echo $this->_tpl_vars['config']['integral_reg']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��������ҵ��Ϣ<?php echo $this->_tpl_vars['config']['integral_userinfo']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��Ӫҵִ����֤<?php echo $this->_tpl_vars['config']['integral_comcert']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��<br>
3�����˾��ְ֤λ��Ϣ����ʵ�ԡ��Ϸ��ԣ�����ʱ����ְλ��Ϣ���类�ٱ���Ͷ�ߣ�ȷ�Ϸ�������ϢΥ����ع涨�󣬱�վ����رչ�˾����Ƹ���񣬾����½⣡

</div>
  </div>
</div>
</div>
</div>
<script>
function rec(id,rectime){
	$("#recid").val(id);
	if(rectime!='0'){
		$('#rectime').html('��ǰְλ�Ƽ�����ʱ�䣺<font color="red">'+rectime+'</font>');
	}
	$.layer({
		type : 1,
		title : '�Ƽ�ְλ',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','220px'],
		page : {dom : '#recom'}
	});
}
function urgent(id,urgenttime){
	$("#urgentid").val(id);
	if(urgenttime!='0'){
		$('#urgenttime').html('��ǰְλ����״̬����ʱ�䣺<font color="red">'+urgenttime+'</font>');
	}
	$.layer({
		type : 1,
		title : '������Ƹ',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','220px'],
		page : {dom : '#urgent'}
	});
}
function gotime(id,edate,i){
	$("#gotimeid").val(id);
	if(i)
	{
		$("#gotime_edate").html("���ι�����<font color='red'>"+i+"</font>��ְλ��");

	}else{
		$("#gotime_edate").html('��ǰְλ����ʱ�䣺<font color="red">'+edate+'</font>');
	}
	$.layer({
		type : 1,
		title : '��������',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','180px'],
		page : {dom : '#gotime'}
	});
}
function allgotime(){//��������
	var allid =[];
	var i=0;
	$('input[name="checkboxid[]"]:checked').each(function(){
		allid.push($(this).val());
		i++;
	});
	if(allid.length==0){
		layer.msg("��ѡ��Ҫ���ڵ�ְλ��",2,8);return false;
	}else{
		gotime(allid,'',i);
	}
}
$(document).ready(function(){
	$(".job_cz").hover(function(){
		var aid=$(this).attr("aid");
		$("#czlist"+aid).show();
		$(".job_cz_hover").attr("class","");
		$("#czlist_"+aid).attr("class","job_cz_hover");
	},function(){
		var aid=$(this).attr("aid");
		$("#czlist"+aid).hide();
	})
})
function onstatus(id,status){//�޸���Ƹ״̬
	$.post("index.php?c=job&act=opera",{id:id,status:status},function(data){
		if(data==1){
			layer.msg('���óɹ���', 2, 9,function(){window.location.reload();});return false;
		}else{
			layer.msg('����ʧ�ܣ�', 2, 8);
		}
	})
}
function Refresh(name){
	var chk_value =[];
	var i=0;
	$('input[name="'+name+'"]:checked').each(function(){
		chk_value.push($(this).val());
		i++;
	});
	if(chk_value.length==0){
		layer.msg("��ѡ��Ҫˢ�µ�ְλ��",2,8);return false;
	}else{
		var num="<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
";
		var breakmsg = '���ι�ˢ��'+i+'��ְλ,��۳�'+i+'��ˢ������,������'+(num*i)+'<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��';
		layer.confirm(breakmsg,function(){
			$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=ajax&c=Refresh_job",{ids:chk_value},function(data){
				if(data==1){
					layer.msg("ˢ�³ɹ���",2,9,function(){window.location.reload();});
				}else{
					layer.msg(data,2,8);
				}
			})
		});
	}
}

function autojob(id,type){
 	$('#autojobid').val(id);
	$('#autotype').val(type);
 	if(type==1){
		$('#job_box_now').html('ÿ��ˢ��');
	}else if(type==2){
		$('#job_box_now').html('��¼ˢ��');
 	}else if(type==5){
		$('#job_box_now').html('ÿ��5��ˢ��');
 	}else if(type==10){
		$('#job_box_now').html('ÿ��10��ˢ��');
 	}else{
		$('#job_box_now').html('�ֶ�ˢ��');
 	}
	$.layer({
		type : 1,
		title : 'ְλ�Զ�ˢ��',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','220px'],
		page : {dom : '#auto_job'}
	})
}
$(document).ready(function(){
	$(".com_Release_job_help").hover(function(){
		layer.tips("�Զ�ˢ�£����ȹ���Ȼ������ˢ�����ͣ�", this, {
			guide: 1,
			style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		});
	},function(){layer.closeTips();});

	$(".job_tck_list").click(function(){
		var cron = $(this).attr('data-cron');
		var name = $(this).attr('data-name');
		$("#autotype").val(cron);
		$(".job_box_in").html(name);
		$(".job_tck_box_pot").hide();
	});
	$(".job_box_in").click(function(e){
		$(".job_tck_box_pot").toggle();
	});
	$(document).bind("click",function(e){
		if(e.target.className != 'job_box_in'){
			$(".job_tck_box_pot").hide();
		}
	});

});

function buyautojob(){
	$.layer({
		type : 1,
		title : '����ְλ�Զ�ˢ��',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','220px'],
		page : {dom : '#job_auto_buy'}
	});
}

function checkbuy(){
	layer.closeAll();
	buyautojob();
}
</script>
<!--������Ƹ������-->
<div id="urgent"  style="display:none; width: 300px; ">
	<div class="job_box_div">
		<div class="job_box_msg" style="margin-left:10px;_margin-left:5px;  margin-top:10px; padding:5px;">
        <p>��ʾ���μӽ�������Ƹְλ;���ǽ�����ҳ������Ƹ ģ����ʾ�����н���ͼ����ʾ��</p>
        <p>�μӽ�����Ƹ��һ����Ҫ<font color="red"><?php echo $this->_tpl_vars['urgent']; ?>
</font><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</p>
		<p id="urgenttime"></p>
		</div>
 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='urgentf'>
		   <input type="hidden" name="urgentid" id="urgentid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 5px 20px">
		  <span class="fltL">  ����������</span><input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
		   <span class="fltL box_infobox_span" style="margin-left:3px;">��</span>
           </div>
		   <span class="job_box_botton" style="width:100%;">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#urgentf').submit()},0);">ȷ��</a>
			</span>
		</form>
	</div>
</div>
<!--������Ƹ������end-->
<!--�Ƽ�ְλ������-->
<div id="recom"  style="display:none; width:300px; ">
	<div class="job_box_div">
		<div class="job_box_msg" style="margin-left:10px; _margin-left:5px;margin-top:10px; padding:5px;">
        <p>��ʾ���μ��Ƽ�����Ƹְλ;���ǽ�����ҳ�Ƽ���Ƹ ģ����ʾ�����ұ����ú�ɫͻ����ʾ��</p>
        <p>�μ��Ƽ�ְλ��һ����Ҫ <font color="red"><?php echo $this->_tpl_vars['config']['com_recjob']; ?>
</font> <?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</p>
		<p id="rectime"></p>
		</div>
 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='recomf'>
		   <input type="hidden" name="recid" id="recid" value=""/>
           <div class="job_box_inp" style="padding:10px 5px 5px 20px">
		   <span class="fltL">�Ƽ�������</span><input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:130px;"/>
		   <span class="fltL box_infobox_span">��</span>
           </div>
		   <span class="job_box_botton" style="width:100%; position:relative">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#recomf').submit()},0);" style="top:30px">ȷ��</a>
			</span>
		</form>
	</div>
</div>
<!--�Ƽ�ְλ������end-->
<!--���۵�����-->
<div id="wname"  style="display:none; width: 300px; ">
	<div style="height: 160px;" class="job_box_div">
			<div class="job_box_msg" style="margin-left:10px;_margin-left:5px;margin-top:10px; padding:5px;"><p>��ʾ���μӾ�����Ƹ����Ƹְλ�����ǽ�����ҳ������Ƹģ����ʾ����ȡ����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
���5����Ϣ����ҵ ��Ƹҳ��--������Ƹ ģ����ʾ ��</p>
            ��ǰ��߾���Ϊ��<font color="#FF0000"><?php echo $this->_tpl_vars['max_fen']['xuanshang']; ?>
</font>�����ľ���Ϊ��<font color="#FF0000" id="xuanshang"></font><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
/��
			<p><font color="#FF0000">ע�⣺���ְλ���о��ۣ����˻�ԭ����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</font></p>
			</div>
 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='wnameidf'>
		   <input type="hidden" name="wnameid" id="wnameid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 0px 20px">
		    <span style="float:left; margin-right:10px;">����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��</span> <input name="xuanshang" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
           </div>
		    <div class="job_box_inp"  style="padding:10px 5px 10px 20px">
		    <span style="float:left; margin-right:10px;">����������</span> <input name="xsdays" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
           </div>
		   <span class="job_box_botton" style="width:71px; margin-top:0px;width:100%; position:relative">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#wnameidf').submit()},0);" style="margin-top:0px;">ȷ��</a>
			</span>
		</form>
	</div>
</div>
<!--���۵�����end-->
<!--��������������-->
<div id="gotime"  style="display:none; width:230px; ">
	<div class="job_box_div">
	<div class="job_box_msg" style="margin-left:10px;_margin-left:5px;margin-top:10px; padding:5px;">
	<p id="gotime_edate"></p>
	</div>

 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='gotimef'>
		   <input type="hidden" name="gotimeid" id="gotimeid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 5px 20px">
           <span style="float:left; margin-right:0px;">����������</span>
		   <input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
		   <span class="fltL box_infobox_span" style="padding-left:10px;">��</span>
           </div>
		   <span class="job_box_botton" style="width:100%;">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#gotimef').submit()},0);">ȷ��</a>
			</span>
		</form>
	</div>
</div>
<!--��������������end-->


<div class="job_tck_box" id="auto_job" style="display:none;">
       <form action='index.php?c=job&act=autojob' target="supportiframe" method="post" id='autojobform'>
        <input type="hidden" value="" name="jobid" id="autojobid" >
        <div class="job_tck_box_cot" style="margin:10px;">
        <div class="job_tck_box_p">
         <span>ˢ�¼��</span>
             <div class="job_box_set">
                <div class="job_box_in" id="job_box_now"></div>
                <div class="job_tck_box_pot" style="display: none;">
                	<div class="job_tck_list" data-cron="0" data-name="�ֶ�ˢ��">�ֶ�ˢ��</div>
                 	<div class="job_tck_list" data-cron="2" data-name="��¼ˢ��">��¼ˢ��</div>
                    <div class="job_tck_list" data-cron="1" data-name="ÿ��ˢ��">ÿ��ˢ��</div>
                    <div class="job_tck_list" data-cron="5" data-name="��5��ˢ��">��5��ˢ��</div>
                    <div class="job_tck_list" data-cron="10" data-name="��10��ˢ��">��10��ˢ��</div>
                </div>
                <input type="hidden" name="autotype" id="autotype" value="" />
             </div>
           </div>
            <div class="job_tck_box_p"><span>��Ч��</span>���ķ�����Ч������<font color="#FF9900"><?php echo ((is_array($_tmp=$this->_tpl_vars['statis']['autotime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 <a href="javascript:void(0);" onclick="checkbuy();">��������</a></font></div>
         <div class="job_tck_box_p"><span>&nbsp;</span><input type="checkbox" value="1" id="checkbox" name="alljob" class=""> ͬ��������ְλ</div>
            <div class="job_tck_box_p"><span>&nbsp;</span>  <span class="job_box_botton" style="width:71px; margin-top:0px;;">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#autojobform').submit()},0);" style="margin-top:0px;">ȷ��</a>
			</span></div>
		</div>
        </form>
  </div>
  <div class="job_tck_box" id="job_auto_buy" style="display:none;">
<div style="height: 130px;" class="job_box_div">
			<div class="job_box_msg" style="margin-left:10px; _margin-left:5px;margin-top:10px; padding:5px;">
            <p>��ʾ���μ��Զ�ˢ�µ���Ƹְλ;ʹ��Ƹְλ��Ϣ�����б�ǰ�ˣ��������������ͻ���ע�⡣</p>
            <p>����ù����軨�� <?php echo $this->_tpl_vars['config']['job_auto']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
/�죡</p>
          </div>
 		 <form action='index.php?c=job&act=buyautojob' target="supportiframe" method="post" id='buyautojob'>
		   <input type="hidden" name="wnameid" id="wnameid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 5px 20px">
		    <span style="float:left; margin-right:10px;">����</span> <input name="autocount" value="1" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/> ��
            <div style="width:100%; float:left">
		    <span class="job_box_botton" style="width:71px; margin-top:10px; margin-left:33px;_margin-left:16px; display:block">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#buyautojob').submit()},0);" style="margin-top:0px;">ȷ��</a>
			</span></div>
           </div>
		</form>
	</div>
  </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>