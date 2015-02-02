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
    <div class=admin_tit><span class="admin_tit_bg">发布中的职位</span> </div>
    <div class="clear"></div>
    <div class="job_re_ts">
     <span>提示：审核中<em class="job_tips_zt">（<?php if ($this->_tpl_vars['status']['status0']): ?><?php echo $this->_tpl_vars['status']['status0']; ?>
<?php else: ?>0<?php endif; ?>）</em>
已审核<em class="job_tips_zt">（<?php if ($this->_tpl_vars['status']['status1']): ?><?php echo $this->_tpl_vars['status']['status1']; ?>
<?php else: ?>0<?php endif; ?>）</em>
未通过<em class="job_tips_zt">（<?php if ($this->_tpl_vars['status']['status3']): ?><?php echo $this->_tpl_vars['status']['status3']; ?>
<?php else: ?>0<?php endif; ?>）</em>
已过期<em class="job_tips_zt">（<?php if ($this->_tpl_vars['status']['status2']): ?><?php echo $this->_tpl_vars['status']['status2']; ?>
<?php else: ?>0<?php endif; ?>）</em>
还可发布<em class="job_tips_zt">（<?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['job_num']; ?>
<?php else: ?>无限<?php endif; ?><?php else: ?>0<?php endif; ?>）</em>
     </span>
       <input class="fb_Com_xz" onclick="location.href='index.php?c=jobadd'" type="button" value="新增职位" name="input">
   </div>
   <div class="clear"></div>
   <div class="com_Release_job">
   <div class="com_Release_job_h1">
   <span class="com_Release_job_a_c">&nbsp;</span>
   <span class="com_Release_job_a">职位名称</span>
   <span class="com_Release_job_b">推广职位</span>
   <span class="com_Release_job_c">收到简历</span>
   <span class="com_Release_job_c">浏览量  </span>
   <span class="com_Release_job_d">审核状态</span>
   <span class="com_Release_job_e">更新时间</span>
   <span class="com_Release_job_f"><em style="display:inline-block; _margin-top:6px;">自动刷新<i class="com_Release_job_help"></i></em></span>
   <span class="com_Release_job_g">操作</span>
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
<?php else: ?>0<?php endif; ?>')" class="com_Release_tg com_Release_tg_ytj">已紧急</a>
   <?php else: ?>
   <a href="javascript:void(0);" onclick="urgent('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['urgent'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['urgent_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')"class="com_Release_tg">紧急</a>
   <?php endif; ?>
    <?php if ($this->_tpl_vars['job']['rec_time'] > time ( )): ?>
   <a href="javascript:void(0);" onclick="rec('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['rec'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['rec_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')" class="com_Release_tg com_Release_tg_ytj">已推荐</a>
   <?php else: ?>
   <a href="javascript:void(0);" onclick="rec('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php if ($this->_tpl_vars['job']['rec'] == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['rec_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?>0<?php endif; ?>')"class="com_Release_tg">推荐</a>
   <?php endif; ?>
   </div>
   <div class="com_Release_job_span  com_Release_job_c"><a href="index.php?c=hr&job_id=<?php echo $this->_tpl_vars['job']['id']; ?>
">(<?php echo $this->_tpl_vars['job']['jobnum']; ?>
)份</a></div>
   <div class="com_Release_job_span  com_Release_job_c"><?php echo $this->_tpl_vars['job']['jobhits']; ?>
 </div>
   <div class="com_Release_job_span  com_Release_job_d">
        <?php if ($this->_tpl_vars['job']['state'] == '0'): ?> <span class="n_verify">等待审核</span><?php endif; ?>
        <?php if ($this->_tpl_vars['job']['state'] == '1'): ?> <span class="y_verify">已审核</span><?php endif; ?>
        <?php if ($this->_tpl_vars['job']['state'] == '2'): ?> <span class="y_verify_js">已结束</span><?php endif; ?>
        <?php if ($this->_tpl_vars['job']['state'] == '3'): ?> <span class="y_verify_wtg">未通过</span><?php endif; ?>
   </div>

   <div class="com_Release_job_span  com_Release_job_span  com_Release_job_e"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</div>
   <div class="com_Release_job_span  com_Release_job_f">
          <?php if ($this->_tpl_vars['statis']['auto'] > 0): ?>
              <?php if ($this->_tpl_vars['job']['autotype'] > 0): ?>
             <a href="javascript:void(0);" onclick="autojob('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php echo $this->_tpl_vars['job']['autotype']; ?>
');" class="com_Release_jobsx">已设置</a>
             <?php else: ?>
             <a href="javascript:void(0);" onclick="autojob('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php echo $this->_tpl_vars['job']['autotype']; ?>
');" class="com_Release_jobsx">未设置</a>
             <?php endif; ?>
          <?php else: ?>
             <a href="javascript:void(0);"onclick="buyautojob();" class="com_Release_jobsx">未购买</a>
          <?php endif; ?>

   </div>
   <div class="com_Release_job_span  com_Release_job_g"><div class="job_cz " aid="<?php echo $this->_tpl_vars['job']['id']; ?>
">
                  <div class="job_cz_hover" id="czlist_<?php echo $this->_tpl_vars['job']['id']; ?>
">
                  <span>操作</span>
                  <div class="job_cz_box job_cz_box_job" id="czlist<?php echo $this->_tpl_vars['job']['id']; ?>
" style="display:none;">
                  <div><div class="job_cz_box_line"></div></div>
                   <a <?php if (( $this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0' ) && $_GET['w'] == '1'): ?>
				  <?php if ($this->_tpl_vars['statis']['editjob_num'] || $this->_tpl_vars['config']['integral_jobedit']): ?>
				  href="javascript:void(0)" onclick="return layer.confirm('<?php if ($this->_tpl_vars['statis']['editjob_num'] > 0): ?>修改职位数还剩余<b><?php echo $this->_tpl_vars['statis']['editjob_num']; ?>
</b>个！确认修改？<?php elseif ($this->_tpl_vars['config']['integral_jobedit'] > 0): ?>修改职位要扣除<?php echo $this->_tpl_vars['config']['integral_jobedit']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！<?php endif; ?>', function(){window.location.href='index.php?c=jobadd&act=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
';window.event.returnValue = false;return false;}); "<?php else: ?>href="index.php?c=jobadd&act=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"<?php endif; ?>
				  <?php else: ?>href="index.php?c=jobadd&act=edit&id=<?php echo $this->_tpl_vars['job']['id']; ?>
"<?php endif; ?>>修改</a>
                    <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=com&c=comapply&id=<?php echo $this->_tpl_vars['job']['id']; ?>
" target="_blank" title="预览">预览</a>
                    <a href="javascript:void(0);" onclick="gotime('<?php echo $this->_tpl_vars['job']['id']; ?>
','<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
')" title="延期">延期</a>
                <?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?>
                    <?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?>
                        <?php if ($this->_tpl_vars['statis']['breakjob_num'] > 0): ?>
                        <a href="javascript:void(0)" onclick="layer_del('刷新职位数还剩余<?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
个！确认刷新？', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">刷新</a>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>
                            <a href="javascript:void(0)" onclick="layer_del('本次刷新需扣除<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！确认刷新？', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">刷新</a>
                            <?php else: ?>
                            <a  href="javascript:void(0)" onclick="job_refresh();"  title="刷新">刷新</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php else: ?>
                    <a  href="javascript:void(0)" onclick="layer_del('确定刷新该职位么？', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">刷新</a>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['config']['com_integral_online'] == 1): ?>
                    <a href="javascript:void(0)" onclick="layer_del('本次刷新需扣除<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！确认刷新？', 'index.php?c=job&act=opera&up=<?php echo $this->_tpl_vars['job']['id']; ?>
');">刷新</a>
                    <?php else: ?>
                    <a  href="javascript:void(0)" onclick="job_refresh();"  title="刷新">刷新</a>
                    <?php endif; ?>
                <?php endif; ?>
                    <a href="index.php?c=jobadd&act=edit&jobcopy=<?php echo $this->_tpl_vars['job']['id']; ?>
">复制</a>
                    <a href="javascript:void(0)" onclick="layer_del('确定要删除该职位？', 'index.php?c=job&act=opera&del=<?php echo $this->_tpl_vars['job']['id']; ?>
'); " title="删除">删除</a>
                    </div></div></div></div>
   <div class="com_Release_job_span  com_Release_job_bot">

   <em class="com_Release_job_span  com_Release_job_em" style="_margin-left:15px;">职位到期时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['job']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
    </em>
     <em class="com_Release_job_span  com_Release_job_em">系统自动匹配相似简历：<a href="index.php?c=likeresume&job_id=<?php echo $this->_tpl_vars['job']['id']; ?>
" class="com_Release_job_lok">查看详情</a>  </em>  <em class="com_Release_job_span  com_Release_job_em">招聘状态：<?php if ($this->_tpl_vars['job']['status'] == '1'): ?> <a href="javascript:onstatus('<?php echo $this->_tpl_vars['job']['id']; ?>
','2');"  class="com_Release_job_lok">已暂停</a>
	  <?php else: ?> <a href="javascript:onstatus('<?php echo $this->_tpl_vars['job']['id']; ?>
','1');"  class="com_Release_job_lok">发布中</a> <?php endif; ?></em> </div>
   </div>
    <?php endforeach; else: ?>
  <div class="msg_no">暂无相关信息</div>
  <?php endif; unset($_from); ?>
  <?php if (! empty ( $this->_tpl_vars['rows'] )): ?>
  <div class="com_Release_job_bot">
   <span class="com_Release_job_qx"><input id='checkAll' type="checkbox" onclick='m_checkAll(this.form)'class="com_Release_job_qx_check">全选</span>
    <INPUT class="c_btn_02 c_btn_02_w110" type="button" value="批量延长有效期" onclick="allgotime();">
        <INPUT class="c_btn_02 c_btn_02_w110" type="button" value="批量刷新职位" onclick="return Refresh('checkboxid[]');">
		<INPUT class="c_btn_02 c_btn_02_w110" type="button" value="批量删除职位" onclick="return really('checkboxid[]');">
   </div>
   <?php endif; ?>
    </form>
   </div>
   <div  class="clear"></div>
   <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
    <div class="wxts_box wxts_box_mt30">
<div class="wxts">温馨提示：</div>
1、如贵公司有快速招聘人才，建议升级贵宾，获取更多的展示机会，以帮助您快速找到满意的人才。
<br>
2、<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
获取：注册会员<?php echo $this->_tpl_vars['config']['integral_reg']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
，完善企业信息<?php echo $this->_tpl_vars['config']['integral_userinfo']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
，营业执照认证<?php echo $this->_tpl_vars['config']['integral_comcert']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
。<br>
3、请贵公司保证职位信息的真实性、合法性，并及时更新职位信息，如被举报或投诉，确认发布的信息违反相关规定后，本站将会关闭贵公司的招聘服务，敬请谅解！

</div>
  </div>
</div>
</div>
</div>
<script>
function rec(id,rectime){
	$("#recid").val(id);
	if(rectime!='0'){
		$('#rectime').html('当前职位推荐到期时间：<font color="red">'+rectime+'</font>');
	}
	$.layer({
		type : 1,
		title : '推荐职位',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','220px'],
		page : {dom : '#recom'}
	});
}
function urgent(id,urgenttime){
	$("#urgentid").val(id);
	if(urgenttime!='0'){
		$('#urgenttime').html('当前职位紧急状态到期时间：<font color="red">'+urgenttime+'</font>');
	}
	$.layer({
		type : 1,
		title : '紧急招聘',
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
		$("#gotime_edate").html("本次共延期<font color='red'>"+i+"</font>个职位！");

	}else{
		$("#gotime_edate").html('当前职位到期时间：<font color="red">'+edate+'</font>');
	}
	$.layer({
		type : 1,
		title : '延期天数',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['300px','180px'],
		page : {dom : '#gotime'}
	});
}
function allgotime(){//批量延期
	var allid =[];
	var i=0;
	$('input[name="checkboxid[]"]:checked').each(function(){
		allid.push($(this).val());
		i++;
	});
	if(allid.length==0){
		layer.msg("请选择要延期的职位！",2,8);return false;
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
function onstatus(id,status){//修改招聘状态
	$.post("index.php?c=job&act=opera",{id:id,status:status},function(data){
		if(data==1){
			layer.msg('设置成功！', 2, 9,function(){window.location.reload();});return false;
		}else{
			layer.msg('设置失败！', 2, 8);
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
		layer.msg("请选择要刷新的职位！",2,8);return false;
	}else{
		var num="<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
";
		var breakmsg = '本次共刷新'+i+'个职位,需扣除'+i+'个刷新数量,或消耗'+(num*i)+'<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！';
		layer.confirm(breakmsg,function(){
			$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=ajax&c=Refresh_job",{ids:chk_value},function(data){
				if(data==1){
					layer.msg("刷新成功！",2,9,function(){window.location.reload();});
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
		$('#job_box_now').html('每天刷新');
	}else if(type==2){
		$('#job_box_now').html('登录刷新');
 	}else if(type==5){
		$('#job_box_now').html('每隔5天刷新');
 	}else if(type==10){
		$('#job_box_now').html('每隔10天刷新');
 	}else{
		$('#job_box_now').html('手动刷新');
 	}
	$.layer({
		type : 1,
		title : '职位自动刷新',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','220px'],
		page : {dom : '#auto_job'}
	})
}
$(document).ready(function(){
	$(".com_Release_job_help").hover(function(){
		layer.tips("自动刷新，需先购买，然后设置刷新类型！", this, {
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
		title : '购买职位自动刷新',
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
<!--紧急招聘弹出框-->
<div id="urgent"  style="display:none; width: 300px; ">
	<div class="job_box_div">
		<div class="job_box_msg" style="margin-left:10px;_margin-left:5px;  margin-top:10px; padding:5px;">
        <p>提示：参加紧急的招聘职位;我们将在首页紧急招聘 模块显示，并有紧急图标显示。</p>
        <p>参加紧急招聘，一天需要<font color="red"><?php echo $this->_tpl_vars['urgent']; ?>
</font><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！</p>
		<p id="urgenttime"></p>
		</div>
 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='urgentf'>
		   <input type="hidden" name="urgentid" id="urgentid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 5px 20px">
		  <span class="fltL">  紧急天数：</span><input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
		   <span class="fltL box_infobox_span" style="margin-left:3px;">天</span>
           </div>
		   <span class="job_box_botton" style="width:100%;">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#urgentf').submit()},0);">确定</a>
			</span>
		</form>
	</div>
</div>
<!--紧急招聘弹出框end-->
<!--推荐职位弹出框-->
<div id="recom"  style="display:none; width:300px; ">
	<div class="job_box_div">
		<div class="job_box_msg" style="margin-left:10px; _margin-left:5px;margin-top:10px; padding:5px;">
        <p>提示：参加推荐的招聘职位;我们将在首页推荐招聘 模块显示，并且标题用红色突出显示。</p>
        <p>参加推荐职位，一天需要 <font color="red"><?php echo $this->_tpl_vars['config']['com_recjob']; ?>
</font> <?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
！</p>
		<p id="rectime"></p>
		</div>
 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='recomf'>
		   <input type="hidden" name="recid" id="recid" value=""/>
           <div class="job_box_inp" style="padding:10px 5px 5px 20px">
		   <span class="fltL">推荐天数：</span><input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:130px;"/>
		   <span class="fltL box_infobox_span">天</span>
           </div>
		   <span class="job_box_botton" style="width:100%; position:relative">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#recomf').submit()},0);" style="top:30px">确定</a>
			</span>
		</form>
	</div>
</div>
<!--推荐职位弹出框end-->
<!--竞价弹出框-->
<div id="wname"  style="display:none; width: 300px; ">
	<div style="height: 160px;" class="job_box_div">
			<div class="job_box_msg" style="margin-left:10px;_margin-left:5px;margin-top:10px; padding:5px;"><p>提示：参加竞价招聘的招聘职位；我们将在首页竞价招聘模块显示，并取竞价<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
最高5条信息在企业 招聘页面--竞价招聘 模块显示 ！</p>
            当前最高竞价为：<font color="#FF0000"><?php echo $this->_tpl_vars['max_fen']['xuanshang']; ?>
</font>，您的竞价为：<font color="#FF0000" id="xuanshang"></font><?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
/天
			<p><font color="#FF0000">注意：如该职位已有竞价，不退还原竞价<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
。</font></p>
			</div>
 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='wnameidf'>
		   <input type="hidden" name="wnameid" id="wnameid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 0px 20px">
		    <span style="float:left; margin-right:10px;">竞价<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
：</span> <input name="xuanshang" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
           </div>
		    <div class="job_box_inp"  style="padding:10px 5px 10px 20px">
		    <span style="float:left; margin-right:10px;">竞价天数：</span> <input name="xsdays" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
           </div>
		   <span class="job_box_botton" style="width:71px; margin-top:0px;width:100%; position:relative">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#wnameidf').submit()},0);" style="margin-top:0px;">确定</a>
			</span>
		</form>
	</div>
</div>
<!--竞价弹出框end-->
<!--延期天数弹出框-->
<div id="gotime"  style="display:none; width:230px; ">
	<div class="job_box_div">
	<div class="job_box_msg" style="margin-left:10px;_margin-left:5px;margin-top:10px; padding:5px;">
	<p id="gotime_edate"></p>
	</div>

 		 <form action='index.php?c=job&act=opera' target="supportiframe" method="post" id='gotimef'>
		   <input type="hidden" name="gotimeid" id="gotimeid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 5px 20px">
           <span style="float:left; margin-right:0px;">延期天数：</span>
		   <input name="day" value="" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/>
		   <span class="fltL box_infobox_span" style="padding-left:10px;">天</span>
           </div>
		   <span class="job_box_botton" style="width:100%;">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#gotimef').submit()},0);">确定</a>
			</span>
		</form>
	</div>
</div>
<!--延期天数弹出框end-->


<div class="job_tck_box" id="auto_job" style="display:none;">
       <form action='index.php?c=job&act=autojob' target="supportiframe" method="post" id='autojobform'>
        <input type="hidden" value="" name="jobid" id="autojobid" >
        <div class="job_tck_box_cot" style="margin:10px;">
        <div class="job_tck_box_p">
         <span>刷新间隔</span>
             <div class="job_box_set">
                <div class="job_box_in" id="job_box_now"></div>
                <div class="job_tck_box_pot" style="display: none;">
                	<div class="job_tck_list" data-cron="0" data-name="手动刷新">手动刷新</div>
                 	<div class="job_tck_list" data-cron="2" data-name="登录刷新">登录刷新</div>
                    <div class="job_tck_list" data-cron="1" data-name="每天刷新">每天刷新</div>
                    <div class="job_tck_list" data-cron="5" data-name="隔5天刷新">隔5天刷新</div>
                    <div class="job_tck_list" data-cron="10" data-name="隔10天刷新">隔10天刷新</div>
                </div>
                <input type="hidden" name="autotype" id="autotype" value="" />
             </div>
           </div>
            <div class="job_tck_box_p"><span>有效期</span>您的服务有效期至：<font color="#FF9900"><?php echo ((is_array($_tmp=$this->_tpl_vars['statis']['autotime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
 <a href="javascript:void(0);" onclick="checkbuy();">继续购买</a></font></div>
         <div class="job_tck_box_p"><span>&nbsp;</span><input type="checkbox" value="1" id="checkbox" name="alljob" class=""> 同步至其他职位</div>
            <div class="job_tck_box_p"><span>&nbsp;</span>  <span class="job_box_botton" style="width:71px; margin-top:0px;;">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#autojobform').submit()},0);" style="margin-top:0px;">确定</a>
			</span></div>
		</div>
        </form>
  </div>
  <div class="job_tck_box" id="job_auto_buy" style="display:none;">
<div style="height: 130px;" class="job_box_div">
			<div class="job_box_msg" style="margin-left:10px; _margin-left:5px;margin-top:10px; padding:5px;">
            <p>提示：参加自动刷新的招聘职位;使招聘职位信息置于列表前端，更有利于吸引客户的注意。</p>
            <p>购买该功能需花费 <?php echo $this->_tpl_vars['config']['job_auto']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
/天！</p>
          </div>
 		 <form action='index.php?c=job&act=buyautojob' target="supportiframe" method="post" id='buyautojob'>
		   <input type="hidden" name="wnameid" id="wnameid" value=""/>
           <div class="job_box_inp"  style="padding:10px 5px 5px 20px">
		    <span style="float:left; margin-right:10px;">购买</span> <input name="autocount" value="1" class="com_info_text placeholder" type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="width:100px;"/> 天
            <div style="width:100%; float:left">
		    <span class="job_box_botton" style="width:71px; margin-top:10px; margin-left:33px;_margin-left:16px; display:block">
				<a class="job_box_yes job_box_botton2" href="javascript:void(0);" onclick="setTimeout(function(){$('#buyautojob').submit()},0);" style="margin-top:0px;">确定</a>
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