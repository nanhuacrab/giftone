<?php /* Smarty version 2.6.26, created on 2015-02-01 14:18:08
         compiled from member/com/zhaopinhui.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/com/zhaopinhui.htm', 43, false),array('modifier', 'date_format', 'member/com/zhaopinhui.htm', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
$(function(){
	$(".statusbody").click(function(){
		var id=$(this).attr("pid");
		var bodys=$("#statusbody"+id).val();
		$("#showbody").html(bodys);
		$.layer({
			type : 1,
			title :'���˵��',
			offset: [($(window).height() - 380)/2 + 'px', ''],
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['380px','auto'],
			page : {dom :"#infobox2"}
		});
	});

});
</script>
<div class="w950">
  <div class="admin_mainbody"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class=right_box>
      <div class=admincont_box>
        <div class=admin_tit><span class="admin_tit_bg">�Ҳμӵ���Ƹ��</span>
          <div class=admin_tit_right> </div>
        </div>
        <div class=admin_textbox_04> 
            <div class=table>
              <div>
                <div>
                  <table id="job_checkbokid" cellspacing=1 align=center border=0 class="com_table">
                    <tbody>
                      <tr align=middle style="height:30px">
                        <th >��Ƹ������</th>
                        <th>��չ����</th>
                        <th>����ʱ��</th>
                        <th>״̬</th>
                        <th >����</th>
                      </tr>
                    <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <tr style="height:30px">
                      <td style="width:230px;"><a href="<?php echo smarty_function_url(array('m' => 'zph','url' => "c:show,id:".($this->_tpl_vars['v']['zid'])), $this);?>
" target=_blank><?php echo $this->_tpl_vars['v']['title']; ?>
</a></td>
                      <td style="width:180px;"><?php echo $this->_tpl_vars['v']['address']; ?>
</td>
                      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                      <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><font color="green">�����</font><?php elseif ($this->_tpl_vars['v']['status'] == 2): ?><font color="#FF0000">δͨ��</font><?php else: ?><font color="blue">δ���</font><?php endif; ?></td>
                      <input type="hidden" id="statusbody<?php echo $this->_tpl_vars['v']['id']; ?>
" value="<?php echo $this->_tpl_vars['v']['statusbody']; ?>
" />
                      <td><?php if ($this->_tpl_vars['v']['status'] == 2): ?><a href="javascript:;" class="statusbody" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
">�鿴ԭ��</a> <?php endif; ?><a href="javascript:;" class="zphstatus" pid="<?php echo $this->_tpl_vars['v']['jobid']; ?>
" zid="<?php echo $this->_tpl_vars['v']['zid']; ?>
">�鿴ְλ</a> <a href="javascript:void(0)" onclick="layer_del('ȷ��Ҫ�˳���', '<?php echo $this->_tpl_vars['now_url']; ?>
&act=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');">�˳�</a></td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr style="height:30px">
                      <td colspan="5">����û�вμӵ���Ƹ�ᡣ</td>
                    </tr>
                    <?php endif; unset($_from); ?>
                      </tbody>

                  </table>
                </div>
              </div>
            </div>
            <div class="diggg"><?php echo $this->_tpl_vars['pagenav']; ?>
</div> 
          <div class="clear"></div>
          <!--Ƹ����˵�����-->
          <div class="admin_Operating_sh" id="infobox2" style="padding:10px;width:350px; display:none;">

            <div class="admin_Operating_text" style="padding:5px; height:auto;color:#C30; font-size:14px; line-height:23px;white-space: normal; word-break: break-all;" id="showbody"> </div>
          </div>
        </div>
        <!--Ƹ����˵�����-->

      </div>
    </div>
  </div>
</div>
<div id="infobox" style="display:none;margin: 0 auto; padding: 0;">
  <table class="table_form " style="width:380px;">
    <tr>
      <td style="width:75px">��Ƹ�����ƣ�</td>
      <td id="title"></td>
    </tr>
    <tr>
      <td>�ٰ�ʱ�䣺</td>
      <td><span id='stime'></span>��<span id='etime'></span></td>
    </tr>
    <tr>
      <td>�ٰ�ص㣺</td>
      <td id='address'></td>
    </tr>
    <tr>
      <td>�ҵ�ְλ��</td>
      <td id='cname'></td>
    </tr>
  </table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>