<?php /* Smarty version 2.6.26, created on 2015-01-30 22:24:19
         compiled from member/com/info.htm */ ?>
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
    <script charset="utf-8" src="../data/kindeditor/kindeditor-min.js"></script> 
    <script charset="utf-8" src="../data/kindeditor/lang/zh_CN.js"></script> 
    <script language="javascript">
var editor;
KindEditor.ready(function(K){
	editor = K.create('#content',{
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : false,
		items : ['source',
		'bold', 'italic', 'underline',
		'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
		'insertunorderedlist','emoticons']
	});
});
</script>
    <style>* {margin: 0 ;padding: 0;}body,div{margin: 0 ;padding: 0; } </style>
    <div class=right_box> 
      <div class=admincont_box>
	  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form name="myform" method="post" target="supportiframe"  action="index.php?c=info&act=save" enctype="multipart/form-data" onsubmit="return checkpost();">
        <div class=admin_tit> <span class="admin_tit_bg">��ҵ������Ϣ</span><span class=remind  style="float:right"> ( ���� <font color="#FF0000">*</font> Ϊ������ )</span></div>
        <div class=admin_textbox_02>
        <ul> 
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ҵȫ�ƣ�</div>
            <div class=textbox>
            	<?php if ($this->_tpl_vars['row']['yyzz_status'] == 1): ?>
              	<label style="font-size:13px;font-family: microsoft yahei,����;"><?php echo $this->_tpl_vars['row']['name']; ?>
</label>                
              	<input type="hidden" name="name" value="<?php echo $this->_tpl_vars['row']['name']; ?>
">
                <?php else: ?>
              	<input type="text" size="45" name="name" value="<?php echo $this->_tpl_vars['row']['name']; ?>
" class="com_info_text">
                <?php endif; ?>
              <span id="by_name" class="errordisplay">��ҵ���Ʋ���Ϊ��</span></div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ������ҵ��</div>
            <div class=textbox>
              <div class="text_seclet text_seclet_cur" style="z-index:400">   
                <input id="qyhy" class="SpFormLBut text_seclet_w250 " type="button" onclick="search_show('job_qyhy');" <?php if ($this->_tpl_vars['row']['hy'] == ''): ?> value="��ѡ�������ҵ"  <?php else: ?> value="<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['row']['hy']]; ?>
" <?php endif; ?> >
                <input id="qyhyid" type="hidden" name="hy" <?php if ($this->_tpl_vars['row']['hy']): ?> value="<?php echo $this->_tpl_vars['row']['hy']; ?>
" <?php endif; ?>  > 
                <div id="job_qyhy" class="cus-sel-opt-panel" style="display:none; z-index:301">
                 <div style="width:100%;  overflow:auto; overflow-x:hidden">
                  <ul>
				   <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    <li> <a onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','qyhy','<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
');" href="javascript:;"> <?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</a> </li>
                   <?php endforeach; endif; unset($_from); ?>
                  </ul>
                  </div>
                </div>
              </div>
			   <span id="by_hy" class="errordisplay">��ѡ�������ҵ</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ҵ���ʣ�</div>
            <div class=textbox>
              <div class="text_seclet text_seclet_cur2 re">
                <input id="qypr" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_qypr');" <?php if ($this->_tpl_vars['row']['pr'] == ''): ?> value="��ѡ����ҵ����" <?php else: ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['pr']]; ?>
" <?php endif; ?>  >
                <input id="qyprid" type="hidden" name="pr" <?php if ($this->_tpl_vars['row']['pr']): ?> value="<?php echo $this->_tpl_vars['row']['pr']; ?>
" <?php endif; ?> >
                <div id="job_qypr" class="cus-sel-opt-panel cus-sel-opt-panel-w156 cus_h70" style="display: none;">
                  <ul class="Search_Condition_box_list">
				   <?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li> <a onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','qypr','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');" href="javascript:;"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a> </li>
                   <?php endforeach; endif; unset($_from); ?>
                  </ul>
                </div>
              </div>
			  <span id="by_pr" class="errordisplay">��ҵ���ʲ���Ϊ�գ�</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ҵ��ַ��</div>
            <div class=textbox>
              <div class="text_seclet text_seclet_cur3 fltL">
                <input id="qyprovince" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_qyprovince');" <?php if ($this->_tpl_vars['row']['provinceid']): ?> value="<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['provinceid']]; ?>
" <?php else: ?>value="��ѡ��ʡ��"<?php endif; ?>>
                <input id="qyprovinceid" type="hidden" value="<?php echo $this->_tpl_vars['row']['provinceid']; ?>
" name="provinceid">
                <div id="job_qyprovince" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none">
                <div style="width:100%;  overflow:auto; overflow-x:hidden">
                  <ul class="Search_Condition_box_list">
				  <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                    <li> <a onclick="select_city('<?php echo $this->_tpl_vars['v']; ?>
','qyprovince','<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
','citys','city');" href="javascript:;"> <?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</a> </li>
                  <?php endforeach; endif; unset($_from); ?>
                  </ul>
                </div>
                </div>
              </div>
              <div class="text_seclet text_seclet_cur fltL">
                <input id="citys" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_citys');" <?php if ($this->_tpl_vars['row']['cityid']): ?> value="<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['cityid']]; ?>
" <?php else: ?>value="��ѡ�����"<?php endif; ?> >
                <input id="citysid" type="hidden" value="<?php echo $this->_tpl_vars['row']['cityid']; ?>
" name="cityid">
                <div id="job_citys" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none">
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
                </div>
              </div>
			  <span id="by_cityid" class="errordisplay">��ѡ�����</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ҵ��ģ��</div>
            <div class=textbox>
             <div class="text_seclet text_seclet_cur4">
				<input id="mun" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_mun');" <?php if ($this->_tpl_vars['row']['mun'] == ''): ?> value="��ѡ����ҵ��ģ" <?php else: ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['mun']]; ?>
" <?php endif; ?> >
				 <input id="munid" name="mun" type="hidden" <?php if ($this->_tpl_vars['row']['mun']): ?> value="<?php echo $this->_tpl_vars['row']['mun']; ?>
" <?php endif; ?> >
                <div id="job_mun" class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none">
					<ul class="Search_Condition_box_list">
					<?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
					<li><a onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','mun','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');" href="javascript:;"> <?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
					</div>
				</div>
				<span id="by_mun" class="errordisplay">��ѡ����ҵ��ģ</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��˾��ַ��</div>
            <div class=textbox>
              <input type="text" style="width:320px;" name="address" size="45" value="<?php echo $this->_tpl_vars['row']['address']; ?>
" class="com_info_text"/>
              <span id="by_address" class="errordisplay">��˾��ַ����Ϊ��</span> </div>
          </li>

          <li>
            <div class=tit><font color="#FF0000">*</font> ��  ϵ  �ˣ�</div>
            <div class=textbox>
              <input type="text" name="linkman" size="15" value="<?php echo $this->_tpl_vars['row']['linkman']; ?>
" class="com_info_text"/>
              <span id="by_linkman" class="errordisplay">��ϵ�˲���Ϊ��</span> </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ϵ�ֻ���</div>
            <div class=textbox>
              <input type="text" name="linktel" size="25" value="<?php echo $this->_tpl_vars['row']['linktel']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="com_info_text" onblur="checkmoblie(this.value);"/>
              <span id="moblie_verify" style=" display:none;">�޸ĺ���ϵ�绰��<a href="index.php?c=binding" style="color:red;">������֤</a></span>
             <span id="by_linktel" class="errordisplay">�ֻ���ʽ����ȷ</span> </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ϵ�ʼ���</div>
            <div class=textbox>
              <input type="text" name="linkmail" size="35" value="<?php echo $this->_tpl_vars['row']['linkmail']; ?>
" class="com_info_text" onblur="checkemail(this.value);"/><span style="display:none;" id="email_verify">�޸ĺ��ʼ���<a href="index.php?c=cert&type=1" style="color:red;">������֤</a></span>
              <span id="by_linkmail" class="errordisplay">��ϵ�ʼ���ʽ����ȷ</span> </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> ��ҵ��飺</div>
            <div class=textbox>
              <textarea name="content" id="content" cols="60" rows="8"><?php echo $this->_tpl_vars['row']['content']; ?>
</textarea>
              <span id="by_content" class="errordisplay">��ҵ��鲻��Ϊ��</span> </div>
          </li>
          <style>
.ke-statusbar{
display:none;
}
</style>
          <div class="admin_tit" id='for_logo'><span class="admin_tit_bg">������Ϣ</span><i class="com_admin_ask"></i><span class=remind style="float:right">����Ϊѡ����</span></div>
          <li>
            <div class=tit>����ʱ�䣺</div>
            <div class=textbox>
              <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
              <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script> 
              <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
              <input id="sdate" type="text" readonly="" size="10" value="<?php echo $this->_tpl_vars['row']['sdate']; ?>
" name="sdate" class="com_info_text">
              <script type="text/javascript">
Calendar.setup({
weekNumbers: true,
inputField : "sdate",
trigger : "sdate",
dateFormat: "%Y-%m-%d",
showTime: false,
onSelect : function() {this.hide();}
});
</script> 
              <span id="by_sdate" class="errordisplay">����ʱ���ʽ����</span> </div>
          </li>
          <li>
            <div class=tit>ע���ʽ�</div>
            <div class=textbox>
              <input type="text" name="money" size="10" value="<?php if ($this->_tpl_vars['row']['money'] == ''): ?>0<?php else: ?><?php echo $this->_tpl_vars['row']['money']; ?>
<?php endif; ?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"class="com_info_text" />
              ��Ԫ <span id="by_money" class="errordisplay">ע���ʽ��ʽ����</span> </div>
          </li>
          <li>
            <div class=tit>�������룺</div>
            <div class=textbox>
              <input type="text" name="zip" size="10" value="<?php echo $this->_tpl_vars['row']['zip']; ?>
" id='zip' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text"/>
              <span id="by_zip" class="errordisplay">���������ʽ����</span> </div>
          </li>
          <li>
            <div class=tit>�̶��绰��</div>
            <div class=textbox>
              <input type="text" name="linkphone" size="15" value="<?php echo $this->_tpl_vars['row']['linkphone']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="com_info_text"/> </div>
          </li>
          <li>
            <div class=tit>��ϵ��ְλ��</div>
            <div class=textbox>
              <input type="text" name="linkjob" size="15" value="<?php echo $this->_tpl_vars['row']['linkjob']; ?>
" class="com_info_text"/>
              <span id="by_linkjob" class="errordisplay">����ְλ��ʽ����</span> </div>
          </li>
          <li>
            <div class=tit>�� ϵ QQ��</div>
            <div class=textbox>
              <input type="text" name="linkqq" size="15" value="<?php echo $this->_tpl_vars['row']['linkqq']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"class="com_info_text"/>
              <span id="by_linkqq" class="errordisplay">��ϵQQ��ʽ����</span> </div>
          </li>

          <li>
            <div class=tit>��ҵ��ַ��</div>
            <div class=textbox>
              <input type="text" name="website" size="35" value="<?php echo $this->_tpl_vars['row']['website']; ?>
" class="com_info_text"/>
              �磺http://www.phpyun.com </div>
          </li>
          <li>
            <div class=tit>��ҵlogo��</div>
            <div class=textbox>
              <input name="uplocadpic" type="file"  size="50" class="inputbtn011" style="float:left;" />
              <em style="float:left; margin-left:10px;">��ѳߴ磺��/��=185����/75����</em> </div>
          </li>
          <?php if ($this->_tpl_vars['row']['logo'] != ""): ?>
          <li>
            <div class=tit>logoԤ����</div>
            <div class=textbox> <img src=".<?php echo $this->_tpl_vars['row']['logo']; ?>
" width="185" height="75"> </div>
          </li>
          <?php endif; ?>
          <li>
            <div class=tit>��ҵ��ҳչʾ��</div>
            <div class=textbox>
              <input name="firmpic" type="file"  size="50" class="inputbtn011" style="float:left;"  />
              <em style="float:left; margin-left:10px;">��ѳߴ磺��/��=158����/65����</em>
            </div>
          </li>
          <?php if ($this->_tpl_vars['row']['firmpic'] != ""): ?>
          <li>
            <div class=tit>��ҵ��ҳչʾͼ��</div>
            <div class=textbox> <img src=".<?php echo $this->_tpl_vars['row']['firmpic']; ?>
" width="150" height="80"> </div>
          </li>
          <?php endif; ?>
          </ul>
          </div>
          <div class=admin_submit>
          <div class=condition>&nbsp;</div>
          <div class=sub_btn><input class="btn_01"  type="submit" name="submitbtn" value="������Ϣ"></div> 
		</div>
	  </form>
    </div>
  </div>
</div>
</div>
<script language=javascript>
function checkemail(email){
	$.post("index.php?c=info&act=verify",{email:email},function(data){
		if(data==1){
			$("#email_verify").show();
		}else{
			$("#email_verify").hide();
		}
	})
}
function checkmoblie(moblie){
	$.post("index.php?c=info&act=verify",{moblie:moblie},function(data){
		if(data==1){
			$("#moblie_verify").show();
		}else{
			$("#moblie_verify").hide();
		}
	})
}
$(document).ready(function() {
	$(".com_admin_ask").hover(function(){  
		layer.tips("��д��ϸ��Ϣ����ְ�߸��������й�����ݣ�", this, {
			guide: 1,
			style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		});
	},function(){layer.closeTips();});  
}); 
function checkpost(){
ifemail = check_email(document.myform.linkmail.value); 
ifmoblie = isjsMobile(document.myform.linktel.value);
var html = editor.text();
var mun = $('#munid').val();
var zip = $.trim($('#zip').val());
if(zip){
	var re= /^[1-9][0-9]{5}$/;
	if(re.test(zip)){var ifzip=true;}else{var ifzip=false;} 
}
var ifcheck=check_form(myform.name.value=="",'by_name')&check_form(myform.hy.value=="",'by_hy')&check_form(myform.pr.value=="",'by_pr')&check_form(myform.cityid.value=="",'by_cityid')&check_form(mun=="",'by_mun')&check_form(myform.address.value=="",'by_address')&check_form(myform.linkman.value=="",'by_linkman')&check_form(ifemail==false,'by_linkmail')&check_form(ifmoblie==false,'by_linktel')&check_form(ifzip==false,'by_zip')&check_form(html=="",'by_content');
if(ifcheck==0) return false; 
layer.load('ִ���У����Ժ�...',0);
}
</script> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>