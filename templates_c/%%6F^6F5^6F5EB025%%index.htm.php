<?php /* Smarty version 2.6.26, created on 2015-01-29 18:34:10
         compiled from member/com/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/com/index.htm', 103, false),array('function', 'url', 'member/com/index.htm', 104, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function Close(id){
	$("#"+id).hide();
	$("#bg").hide();
}
function Next(){
	$("#one_tip").hide();
	$("#two_tip").show();
}
function break_job(num){
	if(num=='0'){ 
		layer.confirm('每个正常职位将扣除<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
，确定要刷新？',function(){
			layer.load('执行中，请稍候...',0);
			$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=ajax&c=Refresh_job",{},function(data){
				layer.closeAll();
				if(data==1){
					layer.msg("职位刷新成功！",2,9,function(){location.reload();});
				}else{
					layer.msg(data,2,8);
				}
			})
		}); 
	}else{
		layer.load('执行中，请稍候...',0);
		$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=ajax&c=Refresh_job",{},function(data){
			layer.closeAll();
			if(data==1){
				layer.msg("职位刷新成功！",2,9,function(){location.reload();});
			}else{
				layer.msg(data,2,8);
			}
		})
	}
	
}
</script>
<div class="w950"> 
<div style="position:relative; z-index:1005">
  <div class="Description_Layer"> 
    <div class="Tip_Information" id="one_tip" <?php if ($this->_tpl_vars['company']['hy'] != ""): ?>style="display:none"<?php endif; ?>>
      <div>
        <div class="Tip_Information_k"></div>
        <div class="Tip_Information_jt"></div>
      </div>
      <div class="Tip_Information_cont">
        <div class="re">
          <div class="Tip_Information_close" onclick="Close('one_tip');"></div>
        </div>
        <div class="Tip_Information_p">
          <p><span>请先完善企业资料：</span>先完善企业信息才能发布职位需求哦！</p>
        </div>
        <div class="Tip_Information_bot"><a href="javascript:Next();" class="Tip-next">下一步</a> </div>
      </div>
    </div> 
    <div class="Recruitment_Layer" id="two_tip"  style="display:none">
      <div class="Tip_Information">
        <div>
          <div class="Tip_Information_gl"></div>
          <div class="Tip_Information_jt2"></div>
          <div class="Recruitment_fb"></div>
        </div>
        <div class="Tip_Information_cont">
          <div class="re">
            <div class="Tip_Information_close" onclick="Close('two_tip');"></div>
          </div>
          <div class="Tip_Information_p">明确招聘需求，细化招聘条件，精准锁定人才！ </div>
          <div class="Tip_Information_bot"><a href="javascript:Close('two_tip');" class="Tip-next">知道了</a> </div>
        </div>
      </div>
    </div>
  </div>    </div> 
  <div class="index_admin_mainbody">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="right_box">
      <div  class="index_data_left">
     
     <div class="index_data_name"><span class="bold">您好！</span>
     	<span class="funds_cor funds_cor_name">
        <?php if ($this->_tpl_vars['company']['name']): ?><?php echo $this->_tpl_vars['company']['name']; ?>
<?php else: ?>
        <a href="index.php?c=info" style="color:red;">您还未完善企业信息，点击完善！</a><?php endif; ?>&nbsp;&nbsp;&nbsp;
		<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/company/index.php?id=<?php echo $this->_tpl_vars['uid']; ?>
" target="_blank" style="color:#1aa3ea; font-size:12px;">浏览企业</a>
        </span>
     </div>
     <div class="index_data_username"><span class="index_data_user_l">企业认证：</span>
    	<?php if ($this->_tpl_vars['company']['email_status'] == '1'): ?> 
	   <a title="已邮件验证" href="index.php?c=binding" class="index_data_rz"><span class="sjyz png fltL"></span> 邮箱已认证</a>
		<?php else: ?> 
		<a title="邮件未验证" href="index.php?c=binding" class="index_data_rz"> <span class="sjyzw png fltL"></span>邮箱未认证</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['company']['moblie_status'] == '1'): ?> 
		<a title="已手机验证" href="index.php?c=binding" class="index_data_rz"><span class="maileyz png fltL"></span>手机已认证</a>
		<?php else: ?> 
		<a title="手机未验证" href="index.php?c=binding" class="index_data_rz"><span class="maileyzw png fltL"></span>手机未认证</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['company']['yyzz_status'] == '1'): ?> 
		<a title="营业执照已验证" href="index.php?c=binding" id="biza" class="index_data_rz"><span id="bizicon" class="zzyz png fltL"></span>营业执照已验证</a> <?php else: ?> 
		<a title="营业执照未验证" href="index.php?c=binding" id="biza" class="index_data_rz"><span id="bizicon" class="zzyzw png fltL"></span>营业执照未认证</a> <?php endif; ?> </div>  
		<div class="index_data_username"><span class="index_data_username_a">用户名：
		<a title="<?php echo $this->_tpl_vars['username']; ?>
" href="index.php" target="_blank"  class="index_js_cor index_js_name"><?php echo $this->_tpl_vars['username']; ?>
</a></span>  您当前为<span class="funds_mf">[<?php echo $this->_tpl_vars['statis']['rating_name']; ?>
]</span>       <?php if ($this->_tpl_vars['company_rating']['type'] == '1'): ?><div class="index_js_kt" > <!--套餐模式 --><?php if ($this->_tpl_vars['company_rating']['rating'] == '0'): ?>&nbsp;&nbsp;<a  href="index.php?c=right" class="index_kt_sub">开通会员</a><?php endif; ?></div><?php endif; ?>
	   <?php if ($this->_tpl_vars['company_rating']['type'] == '2' && $this->_tpl_vars['days']): ?> 
			到期天数：<?php echo $this->_tpl_vars['days']; ?>
天
			到期时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['statis']['vip_etime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
 
		<?php endif; ?><a href="<?php echo smarty_function_url(array('url' => "c:integral"), $this);?>
" style="color:#f60; margin-left:10px; display:inline-block">如何获取积分?</a></div>
     <div class="my_funds"><span class="bold">我的资金：</span>账户余额：<span class="funds_cor bold"><?php echo $this->_tpl_vars['statis']['pay']; ?>
</span> 元  您的<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
：<span class="funds_cor bold"><?php echo $this->_tpl_vars['statis']['integral']; ?>
</span><?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>

     <a href='index.php?c=pay' class="my_funds_x">充值</a>
     <a href="index.php?c=paylog&consume=ok" class="my_funds_x">余额详情</a>
     <a href="index.php?c=paylog&consume=ok"  class="my_funds_x">消费明细</a>
     </div>
     
      </div>
      <div  class="index_data_right">
      <div class="index_data_logo">
      <?php if ($this->_tpl_vars['company']['logo']): ?> 
      <img src=".<?php echo $this->_tpl_vars['company']['logo']; ?>
" width="185" height="75"/> 
      <?php else: ?> 
      <a href="index.php?c=info#for_logo" class="no_for_logo">点击上传企业LOGO</a>
      <?php endif; ?> 
      </div>
     <div class="index_data_t"> 上次登录时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</div>
      <div class="index_data_t">  浏览统计：已被访问 <span class="funds_cor bold"><?php echo $this->_tpl_vars['company']['hits']; ?>
</span> 次</div>
      </div>
      <div class="index_Management">
      <div class="index_Management_box">
      <div class="index_Management_box_h1"><span class="index_Management_box_h1_span">职位管理</span><a href="index.php?c=search" class="index_Management_box_more">查看详情>></a></div>
     <div class="index_Management_c"> 公司正常的职位 <span class="funds_cor bold"><?php echo $this->_tpl_vars['normal_job_num']; ?>
</span>  条 剩余职位数 <span class="funds_cor bold"><?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['job_num']; ?>
<?php else: ?>无限<?php endif; ?><?php else: ?>0<?php endif; ?></span> 条</div>
     <div class="index_Management_c"> 贵公司还有 <span class="funds_cor bold"><?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
<?php else: ?>无限<?php endif; ?><?php else: ?>0<?php endif; ?></span>  次免费刷新</div>
      <a href="index.php?c=jobadd" class="index_Management_bth">发布新职位</a><a href="javascript:break_job('<?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
<?php else: ?>无限<?php endif; ?><?php else: ?>0<?php endif; ?>');" class="index_Management_bth2">刷新职位</a>
      </div>
         <div class="index_Management_box">
      <div class="index_Management_box_h1"><span class="index_Management_box_h1_span">简历管理</span><a href="index.php?c=hr" class="index_Management_box_more">查看详情>></a></div>
      <div class="index_Management_c"> 贵公司共收到 <span class="funds_cor bold"><?php echo $this->_tpl_vars['des_resume']; ?>
</span>  份简历</div>
      <div class="index_Management_c"> 其中未查看的简历 <span class="funds_cor bold"><?php echo $this->_tpl_vars['de_resume']; ?>
</span>  份</div>
      <div class="index_Management_c"> 共发出  <span class="funds_cor bold"><?php echo $this->_tpl_vars['invite_resume']; ?>
</span> 份面试邀请</div>
      
      </div>
         <div class="index_Management_box index_Management_box_no">
      <div class="index_Management_box_h1"><span class="index_Management_box_h1_span">下载管理</span><a href="index.php?c=down" class="index_Management_box_more">查看详情>></a></div>
     <div class="index_Management_c">  贵公司已下载简历 <span class="funds_cor bold"><?php echo $this->_tpl_vars['down_resume']; ?>
</span>  份 </div>
     <div class="index_Management_c">  贵公司还可下载简历 <span class="funds_cor bold"><?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['down_resume']; ?>
<?php else: ?>无限<?php endif; ?><?php else: ?>0<?php endif; ?></span>  份</div> 
      </div>
      
      
      </div>
       <div style="clear:both"></div>
            <div class="index_jl_box">
              <div class="xinxi-title-bg">
                <ul id="details-ul" style="float:left ">
                  <li class="hover" name="1"><span>可能感兴趣的简历</span></li>
                  <li name="2"><span>关注我公司的人才</span></li>
                </ul>
              </div>
              <div style="clear:both"></div>
              <div class="right-box-xbg">
                <div class="xinxi-guanli-box" id="details-con-1" >
                 <div class="index_box_cont">
                 <table width="100%"   border="0" cellpadding="0" cellspacing="1" class="index_table">
                    <tr class="right-box-xbg_t">
                    <td width="170"><p>意向职位</p></td>
                      <td width="80" height="20"><p>姓名</p></td>
                      <td width="100"><p>学历</p></td>
                      <td width="100"><p>工作经验</p></td>
                      <td width="150"><p>期望工作地点</p></td>
                      <td width="100"><p>更新日期</p></td>
                    </tr> 
                    <?php $_from = $this->_tpl_vars['ulist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ulist']):
?>
                    <tr style="background-color:#ffffff;">
                      <td style="text-align:left; padding-left:10px;"><?php echo $this->_tpl_vars['ulist']['job_post']; ?>
</td>
                      <td height="30"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['ulist']['id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['ulist']['username_n']; ?>
"><?php echo $this->_tpl_vars['ulist']['username_n']; ?>
</a></td>
                      <td><?php echo $this->_tpl_vars['ulist']['edu_n']; ?>
</td>
                      <td><?php echo $this->_tpl_vars['ulist']['exp_n']; ?>
</td>
                      <td><?php echo $this->_tpl_vars['ulist']['job_city_one']; ?>
 <?php echo $this->_tpl_vars['ulist']['job_city_two']; ?>
</td>
                      <td><?php echo $this->_tpl_vars['ulist']['lastupdate']; ?>
</td>
                    </tr>
 
                    <?php endforeach; endif; unset($_from); ?>
                   <?php if (empty ( $this->_tpl_vars['ulist'] )): ?>
  					 <tr style="background-color:#ffffff;height:25px;">
                      <td colspan="6">暂无可能感兴趣的简历。</td>
                    </tr>
                   <?php endif; ?>
                  </table>
                 </div>
                </div>
                <div class="xinxi-guanli-box" id="details-con-2" style="display:none;">
				<div class="index_box_cont">
                 <table width="100%"   border="0" cellpadding="0" cellspacing="1" class="index_table">
                    <tr class="right-box-xbg_t">
                    <td width="170"><p>意向职位</p></td>
                      <td width="80" height="20"><p>姓名</p></td>
                      <td width="100"><p>学历</p></td>
                      <td width="100"><p>工作经验</p></td> 
                      <td width="150"><p>期望工作地点</p></td>
                      <td width="100"><p>关注日期</p></td>
                    </tr> 
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                    <tr style="background-color:#ffffff;">
                      <td style="text-align:left; padding-left:10px;"><?php echo $this->_tpl_vars['list']['job_post']; ?>
</td>
                      <td height="30"><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['list']['id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['list']['username_n']; ?>
"><?php echo $this->_tpl_vars['list']['username_n']; ?>
</a></td>
                      <td><?php echo $this->_tpl_vars['list']['edu_n']; ?>
</td>
                      <td><?php echo $this->_tpl_vars['list']['exp_n']; ?>
</td>
                    
                      <td><?php echo $this->_tpl_vars['list']['job_city_one']; ?>
 <?php echo $this->_tpl_vars['list']['job_city_two']; ?>
</td>
                      <td><?php echo $this->_tpl_vars['list']['lastupdate']; ?>
</td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                   <?php if (empty ( $this->_tpl_vars['list'] )): ?>
  					 <tr style="background-color:#ffffff;height:25px;">
                      <td colspan="6">暂无关注我公司的人才。</td>
                    </tr>
                   <?php endif; ?>
                  </table>
                 </div>
                </div>
               </div>
              </div>
            </div>
          </div>  
         </div>   
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>