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
		layer.confirm('ÿ������ְλ���۳�<?php echo $this->_tpl_vars['config']['integral_jobefresh']; ?>
<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��ȷ��Ҫˢ�£�',function(){
			layer.load('ִ���У����Ժ�...',0);
			$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=ajax&c=Refresh_job",{},function(data){
				layer.closeAll();
				if(data==1){
					layer.msg("ְλˢ�³ɹ���",2,9,function(){location.reload();});
				}else{
					layer.msg(data,2,8);
				}
			})
		}); 
	}else{
		layer.load('ִ���У����Ժ�...',0);
		$.post("<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=ajax&c=Refresh_job",{},function(data){
			layer.closeAll();
			if(data==1){
				layer.msg("ְλˢ�³ɹ���",2,9,function(){location.reload();});
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
          <p><span>����������ҵ���ϣ�</span>��������ҵ��Ϣ���ܷ���ְλ����Ŷ��</p>
        </div>
        <div class="Tip_Information_bot"><a href="javascript:Next();" class="Tip-next">��һ��</a> </div>
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
          <div class="Tip_Information_p">��ȷ��Ƹ����ϸ����Ƹ��������׼�����˲ţ� </div>
          <div class="Tip_Information_bot"><a href="javascript:Close('two_tip');" class="Tip-next">֪����</a> </div>
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
     
     <div class="index_data_name"><span class="bold">���ã�</span>
     	<span class="funds_cor funds_cor_name">
        <?php if ($this->_tpl_vars['company']['name']): ?><?php echo $this->_tpl_vars['company']['name']; ?>
<?php else: ?>
        <a href="index.php?c=info" style="color:red;">����δ������ҵ��Ϣ��������ƣ�</a><?php endif; ?>&nbsp;&nbsp;&nbsp;
		<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/company/index.php?id=<?php echo $this->_tpl_vars['uid']; ?>
" target="_blank" style="color:#1aa3ea; font-size:12px;">�����ҵ</a>
        </span>
     </div>
     <div class="index_data_username"><span class="index_data_user_l">��ҵ��֤��</span>
    	<?php if ($this->_tpl_vars['company']['email_status'] == '1'): ?> 
	   <a title="���ʼ���֤" href="index.php?c=binding" class="index_data_rz"><span class="sjyz png fltL"></span> ��������֤</a>
		<?php else: ?> 
		<a title="�ʼ�δ��֤" href="index.php?c=binding" class="index_data_rz"> <span class="sjyzw png fltL"></span>����δ��֤</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['company']['moblie_status'] == '1'): ?> 
		<a title="���ֻ���֤" href="index.php?c=binding" class="index_data_rz"><span class="maileyz png fltL"></span>�ֻ�����֤</a>
		<?php else: ?> 
		<a title="�ֻ�δ��֤" href="index.php?c=binding" class="index_data_rz"><span class="maileyzw png fltL"></span>�ֻ�δ��֤</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['company']['yyzz_status'] == '1'): ?> 
		<a title="Ӫҵִ������֤" href="index.php?c=binding" id="biza" class="index_data_rz"><span id="bizicon" class="zzyz png fltL"></span>Ӫҵִ������֤</a> <?php else: ?> 
		<a title="Ӫҵִ��δ��֤" href="index.php?c=binding" id="biza" class="index_data_rz"><span id="bizicon" class="zzyzw png fltL"></span>Ӫҵִ��δ��֤</a> <?php endif; ?> </div>  
		<div class="index_data_username"><span class="index_data_username_a">�û�����
		<a title="<?php echo $this->_tpl_vars['username']; ?>
" href="index.php" target="_blank"  class="index_js_cor index_js_name"><?php echo $this->_tpl_vars['username']; ?>
</a></span>  ����ǰΪ<span class="funds_mf">[<?php echo $this->_tpl_vars['statis']['rating_name']; ?>
]</span>       <?php if ($this->_tpl_vars['company_rating']['type'] == '1'): ?><div class="index_js_kt" > <!--�ײ�ģʽ --><?php if ($this->_tpl_vars['company_rating']['rating'] == '0'): ?>&nbsp;&nbsp;<a  href="index.php?c=right" class="index_kt_sub">��ͨ��Ա</a><?php endif; ?></div><?php endif; ?>
	   <?php if ($this->_tpl_vars['company_rating']['type'] == '2' && $this->_tpl_vars['days']): ?> 
			����������<?php echo $this->_tpl_vars['days']; ?>
��
			����ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['statis']['vip_etime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
 
		<?php endif; ?><a href="<?php echo smarty_function_url(array('url' => "c:integral"), $this);?>
" style="color:#f60; margin-left:10px; display:inline-block">��λ�ȡ����?</a></div>
     <div class="my_funds"><span class="bold">�ҵ��ʽ�</span>�˻���<span class="funds_cor bold"><?php echo $this->_tpl_vars['statis']['pay']; ?>
</span> Ԫ  ����<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
��<span class="funds_cor bold"><?php echo $this->_tpl_vars['statis']['integral']; ?>
</span><?php echo $this->_tpl_vars['config']['integral_priceunit']; ?>

     <a href='index.php?c=pay' class="my_funds_x">��ֵ</a>
     <a href="index.php?c=paylog&consume=ok" class="my_funds_x">�������</a>
     <a href="index.php?c=paylog&consume=ok"  class="my_funds_x">������ϸ</a>
     </div>
     
      </div>
      <div  class="index_data_right">
      <div class="index_data_logo">
      <?php if ($this->_tpl_vars['company']['logo']): ?> 
      <img src=".<?php echo $this->_tpl_vars['company']['logo']; ?>
" width="185" height="75"/> 
      <?php else: ?> 
      <a href="index.php?c=info#for_logo" class="no_for_logo">����ϴ���ҵLOGO</a>
      <?php endif; ?> 
      </div>
     <div class="index_data_t"> �ϴε�¼ʱ�䣺<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M')); ?>
</div>
      <div class="index_data_t">  ���ͳ�ƣ��ѱ����� <span class="funds_cor bold"><?php echo $this->_tpl_vars['company']['hits']; ?>
</span> ��</div>
      </div>
      <div class="index_Management">
      <div class="index_Management_box">
      <div class="index_Management_box_h1"><span class="index_Management_box_h1_span">ְλ����</span><a href="index.php?c=search" class="index_Management_box_more">�鿴����>></a></div>
     <div class="index_Management_c"> ��˾������ְλ <span class="funds_cor bold"><?php echo $this->_tpl_vars['normal_job_num']; ?>
</span>  �� ʣ��ְλ�� <span class="funds_cor bold"><?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['job_num']; ?>
<?php else: ?>����<?php endif; ?><?php else: ?>0<?php endif; ?></span> ��</div>
     <div class="index_Management_c"> ��˾���� <span class="funds_cor bold"><?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
<?php else: ?>����<?php endif; ?><?php else: ?>0<?php endif; ?></span>  �����ˢ��</div>
      <a href="index.php?c=jobadd" class="index_Management_bth">������ְλ</a><a href="javascript:break_job('<?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['breakjob_num']; ?>
<?php else: ?>����<?php endif; ?><?php else: ?>0<?php endif; ?>');" class="index_Management_bth2">ˢ��ְλ</a>
      </div>
         <div class="index_Management_box">
      <div class="index_Management_box_h1"><span class="index_Management_box_h1_span">��������</span><a href="index.php?c=hr" class="index_Management_box_more">�鿴����>></a></div>
      <div class="index_Management_c"> ��˾���յ� <span class="funds_cor bold"><?php echo $this->_tpl_vars['des_resume']; ?>
</span>  �ݼ���</div>
      <div class="index_Management_c"> ����δ�鿴�ļ��� <span class="funds_cor bold"><?php echo $this->_tpl_vars['de_resume']; ?>
</span>  ��</div>
      <div class="index_Management_c"> ������  <span class="funds_cor bold"><?php echo $this->_tpl_vars['invite_resume']; ?>
</span> ����������</div>
      
      </div>
         <div class="index_Management_box index_Management_box_no">
      <div class="index_Management_box_h1"><span class="index_Management_box_h1_span">���ع���</span><a href="index.php?c=down" class="index_Management_box_more">�鿴����>></a></div>
     <div class="index_Management_c">  ��˾�����ؼ��� <span class="funds_cor bold"><?php echo $this->_tpl_vars['down_resume']; ?>
</span>  �� </div>
     <div class="index_Management_c">  ��˾�������ؼ��� <span class="funds_cor bold"><?php if ($this->_tpl_vars['statis']['vip_etime'] > time ( ) || $this->_tpl_vars['statis']['vip_etime'] == '0'): ?><?php if ($this->_tpl_vars['statis']['rating_type'] == 1): ?><?php echo $this->_tpl_vars['statis']['down_resume']; ?>
<?php else: ?>����<?php endif; ?><?php else: ?>0<?php endif; ?></span>  ��</div> 
      </div>
      
      
      </div>
       <div style="clear:both"></div>
            <div class="index_jl_box">
              <div class="xinxi-title-bg">
                <ul id="details-ul" style="float:left ">
                  <li class="hover" name="1"><span>���ܸ���Ȥ�ļ���</span></li>
                  <li name="2"><span>��ע�ҹ�˾���˲�</span></li>
                </ul>
              </div>
              <div style="clear:both"></div>
              <div class="right-box-xbg">
                <div class="xinxi-guanli-box" id="details-con-1" >
                 <div class="index_box_cont">
                 <table width="100%"   border="0" cellpadding="0" cellspacing="1" class="index_table">
                    <tr class="right-box-xbg_t">
                    <td width="170"><p>����ְλ</p></td>
                      <td width="80" height="20"><p>����</p></td>
                      <td width="100"><p>ѧ��</p></td>
                      <td width="100"><p>��������</p></td>
                      <td width="150"><p>���������ص�</p></td>
                      <td width="100"><p>��������</p></td>
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
                      <td colspan="6">���޿��ܸ���Ȥ�ļ�����</td>
                    </tr>
                   <?php endif; ?>
                  </table>
                 </div>
                </div>
                <div class="xinxi-guanli-box" id="details-con-2" style="display:none;">
				<div class="index_box_cont">
                 <table width="100%"   border="0" cellpadding="0" cellspacing="1" class="index_table">
                    <tr class="right-box-xbg_t">
                    <td width="170"><p>����ְλ</p></td>
                      <td width="80" height="20"><p>����</p></td>
                      <td width="100"><p>ѧ��</p></td>
                      <td width="100"><p>��������</p></td> 
                      <td width="150"><p>���������ص�</p></td>
                      <td width="100"><p>��ע����</p></td>
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
                      <td colspan="6">���޹�ע�ҹ�˾���˲š�</td>
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