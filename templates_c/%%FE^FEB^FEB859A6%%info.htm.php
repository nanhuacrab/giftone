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
        <div class=admin_tit> <span class="admin_tit_bg">企业基本信息</span><span class=remind  style="float:right"> ( 以下 <font color="#FF0000">*</font> 为必填项 )</span></div>
        <div class=admin_textbox_02>
        <ul> 
          <li>
            <div class=tit><font color="#FF0000">*</font> 企业全称：</div>
            <div class=textbox>
            	<?php if ($this->_tpl_vars['row']['yyzz_status'] == 1): ?>
              	<label style="font-size:13px;font-family: microsoft yahei,宋体;"><?php echo $this->_tpl_vars['row']['name']; ?>
</label>                
              	<input type="hidden" name="name" value="<?php echo $this->_tpl_vars['row']['name']; ?>
">
                <?php else: ?>
              	<input type="text" size="45" name="name" value="<?php echo $this->_tpl_vars['row']['name']; ?>
" class="com_info_text">
                <?php endif; ?>
              <span id="by_name" class="errordisplay">企业名称不能为空</span></div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 从事行业：</div>
            <div class=textbox>
              <div class="text_seclet text_seclet_cur" style="z-index:400">   
                <input id="qyhy" class="SpFormLBut text_seclet_w250 " type="button" onclick="search_show('job_qyhy');" <?php if ($this->_tpl_vars['row']['hy'] == ''): ?> value="请选择从事行业"  <?php else: ?> value="<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['row']['hy']]; ?>
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
			   <span id="by_hy" class="errordisplay">请选择从事行业</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 企业性质：</div>
            <div class=textbox>
              <div class="text_seclet text_seclet_cur2 re">
                <input id="qypr" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_qypr');" <?php if ($this->_tpl_vars['row']['pr'] == ''): ?> value="请选择企业性质" <?php else: ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['pr']]; ?>
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
			  <span id="by_pr" class="errordisplay">企业性质不能为空！</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 企业地址：</div>
            <div class=textbox>
              <div class="text_seclet text_seclet_cur3 fltL">
                <input id="qyprovince" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_qyprovince');" <?php if ($this->_tpl_vars['row']['provinceid']): ?> value="<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['provinceid']]; ?>
" <?php else: ?>value="请选择省份"<?php endif; ?>>
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
" <?php else: ?>value="请选择城市"<?php endif; ?> >
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
			  <span id="by_cityid" class="errordisplay">请选择城市</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 企业规模：</div>
            <div class=textbox>
             <div class="text_seclet text_seclet_cur4">
				<input id="mun" class="SpFormLBut text_seclet_w158" type="button" onclick="search_show('job_mun');" <?php if ($this->_tpl_vars['row']['mun'] == ''): ?> value="请选择企业规模" <?php else: ?> value="<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['row']['mun']]; ?>
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
				<span id="by_mun" class="errordisplay">请选择企业规模</span>
            </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 公司地址：</div>
            <div class=textbox>
              <input type="text" style="width:320px;" name="address" size="45" value="<?php echo $this->_tpl_vars['row']['address']; ?>
" class="com_info_text"/>
              <span id="by_address" class="errordisplay">公司地址不能为空</span> </div>
          </li>

          <li>
            <div class=tit><font color="#FF0000">*</font> 联  系  人：</div>
            <div class=textbox>
              <input type="text" name="linkman" size="15" value="<?php echo $this->_tpl_vars['row']['linkman']; ?>
" class="com_info_text"/>
              <span id="by_linkman" class="errordisplay">联系人不能为空</span> </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 联系手机：</div>
            <div class=textbox>
              <input type="text" name="linktel" size="25" value="<?php echo $this->_tpl_vars['row']['linktel']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="com_info_text" onblur="checkmoblie(this.value);"/>
              <span id="moblie_verify" style=" display:none;">修改后联系电话需<a href="index.php?c=binding" style="color:red;">重新认证</a></span>
             <span id="by_linktel" class="errordisplay">手机格式不正确</span> </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 联系邮件：</div>
            <div class=textbox>
              <input type="text" name="linkmail" size="35" value="<?php echo $this->_tpl_vars['row']['linkmail']; ?>
" class="com_info_text" onblur="checkemail(this.value);"/><span style="display:none;" id="email_verify">修改后邮件需<a href="index.php?c=cert&type=1" style="color:red;">重新认证</a></span>
              <span id="by_linkmail" class="errordisplay">联系邮件格式不正确</span> </div>
          </li>
          <li>
            <div class=tit><font color="#FF0000">*</font> 企业简介：</div>
            <div class=textbox>
              <textarea name="content" id="content" cols="60" rows="8"><?php echo $this->_tpl_vars['row']['content']; ?>
</textarea>
              <span id="by_content" class="errordisplay">企业简介不能为空</span> </div>
          </li>
          <style>
.ke-statusbar{
display:none;
}
</style>
          <div class="admin_tit" id='for_logo'><span class="admin_tit_bg">补充信息</span><i class="com_admin_ask"></i><span class=remind style="float:right">以下为选填项</span></div>
          <li>
            <div class=tit>创办时间：</div>
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
              <span id="by_sdate" class="errordisplay">创办时间格式错误</span> </div>
          </li>
          <li>
            <div class=tit>注册资金：</div>
            <div class=textbox>
              <input type="text" name="money" size="10" value="<?php if ($this->_tpl_vars['row']['money'] == ''): ?>0<?php else: ?><?php echo $this->_tpl_vars['row']['money']; ?>
<?php endif; ?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"class="com_info_text" />
              万元 <span id="by_money" class="errordisplay">注册资金格式错误</span> </div>
          </li>
          <li>
            <div class=tit>邮政编码：</div>
            <div class=textbox>
              <input type="text" name="zip" size="10" value="<?php echo $this->_tpl_vars['row']['zip']; ?>
" id='zip' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="com_info_text"/>
              <span id="by_zip" class="errordisplay">邮政编码格式错误</span> </div>
          </li>
          <li>
            <div class=tit>固定电话：</div>
            <div class=textbox>
              <input type="text" name="linkphone" size="15" value="<?php echo $this->_tpl_vars['row']['linkphone']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')" class="com_info_text"/> </div>
          </li>
          <li>
            <div class=tit>联系人职位：</div>
            <div class=textbox>
              <input type="text" name="linkjob" size="15" value="<?php echo $this->_tpl_vars['row']['linkjob']; ?>
" class="com_info_text"/>
              <span id="by_linkjob" class="errordisplay">所属职位格式错误</span> </div>
          </li>
          <li>
            <div class=tit>联 系 QQ：</div>
            <div class=textbox>
              <input type="text" name="linkqq" size="15" value="<?php echo $this->_tpl_vars['row']['linkqq']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"class="com_info_text"/>
              <span id="by_linkqq" class="errordisplay">联系QQ格式错误</span> </div>
          </li>

          <li>
            <div class=tit>企业网址：</div>
            <div class=textbox>
              <input type="text" name="website" size="35" value="<?php echo $this->_tpl_vars['row']['website']; ?>
" class="com_info_text"/>
              如：http://www.phpyun.com </div>
          </li>
          <li>
            <div class=tit>企业logo：</div>
            <div class=textbox>
              <input name="uplocadpic" type="file"  size="50" class="inputbtn011" style="float:left;" />
              <em style="float:left; margin-left:10px;">最佳尺寸：宽/高=185像素/75像素</em> </div>
          </li>
          <?php if ($this->_tpl_vars['row']['logo'] != ""): ?>
          <li>
            <div class=tit>logo预览：</div>
            <div class=textbox> <img src=".<?php echo $this->_tpl_vars['row']['logo']; ?>
" width="185" height="75"> </div>
          </li>
          <?php endif; ?>
          <li>
            <div class=tit>企业黄页展示：</div>
            <div class=textbox>
              <input name="firmpic" type="file"  size="50" class="inputbtn011" style="float:left;"  />
              <em style="float:left; margin-left:10px;">最佳尺寸：宽/高=158像素/65像素</em>
            </div>
          </li>
          <?php if ($this->_tpl_vars['row']['firmpic'] != ""): ?>
          <li>
            <div class=tit>企业黄页展示图：</div>
            <div class=textbox> <img src=".<?php echo $this->_tpl_vars['row']['firmpic']; ?>
" width="150" height="80"> </div>
          </li>
          <?php endif; ?>
          </ul>
          </div>
          <div class=admin_submit>
          <div class=condition>&nbsp;</div>
          <div class=sub_btn><input class="btn_01"  type="submit" name="submitbtn" value="更新信息"></div> 
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
		layer.tips("填写详细信息，求职者更青睐，招工更快捷！", this, {
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
layer.load('执行中，请稍候...',0);
}
</script> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>