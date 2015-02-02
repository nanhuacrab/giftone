<?php /* Smarty version 2.6.26, created on 2015-01-29 18:26:08
         compiled from admin/admin_advertise_add.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="js/admin_public.js" language="javascript"></script>
<script>
function checkform(){
	if($("#ad_name").val()==""){ 
		parent.layer.msg('广告名称不能为空！', 2,2);
		return false;
	}
	if($("#ad_start").val()==""){ 
		parent.layer.msg('请填写开始时间！', 2,2);
		return false;
	}
	if($("#ad_end").val()==""){ 
		parent.layer.msg('请填写结束时间！', 2,2);
		return false;
	}
	if($("#ad_start").val()!="" && $("#ad_end").val()!="" ){
		 var time1 = $("#ad_start").val() ;
		 var time2 = $("#ad_end").val();
		 time1arr = time1.split("-");
		 time2arr = time2.split("-");
		 date1 = new Date(time1arr[0],time1arr[1],time1arr[2]);
		 date2 = new Date(time2arr[0],time2arr[1],time2arr[2]);
		 if(date1>date2){ 
			 parent.layer.msg('结束时间不得低于开始时间，请重新设定！', 2,2);
			 return false;
		}
	} 
	var item = $('input[name="ad_type"]:checked').val;
	if(!item){
		 parent.layer.msg('请选择一种广告模式！', 2,2); return false;
	}else if(item=="word"&&$("input[name=word_info]").val()==""){ 
		parent.layer.msg('请填写文字信息！', 2,2); return false;
	}
}
function replace_type(type){
	if(type=="word"){
		$("#word").attr("style","display:");
		$("#pic").attr("style","display:none");
		$("#flash").attr("style","display:none");
	}else if(type=="pic"){
		$("#word").attr("style","display:none");
		$("#pic").attr("style","display:");
		$("#flash").attr("style","display:none");
	}else if(type=="flash"){
		$("#word").attr("style","display:none");
		$("#pic").attr("style","display:none");
		$("#flash").attr("style","display:");
	}
}
function adpic_url(){
	$("#typeid").html("<input  type='file' id='pic_url' name='ad_url' value='' class=\"input-text\"><input id='upload'  type='radio' name='upload'  onclick='adpic_src();' >远程地址<input id='upload_pic' type='radio' checked name='upload' onclick='adpic_url();'>本地上传");
}
function adpic_src(){
	$("#typeid").html("<input class='input-text'  type='text' id='pic_url' name='ad_url' value='<?php echo $this->_tpl_vars['ad_info']['pic_url']; ?>
'  ><input id='upload' checked type='radio' name='upload'>远程地址<input id='upload_pic' type='radio' name='upload' onclick='adpic_url();'>本地上传");
} 
function adflash_url(){
	$("#flashid").html("<input  type='file'  name='ad_url' value='' class=\"input-text\"><input id='flash'  type='radio' name='flash'  onclick='adflash_src();' >远程地址<input id='upload_flash' type='radio' checked name='upload_flash' onclick='adflash_url();'>本地上传");
}
function adflash_src(){
	$("#flashid").html("<input class='input-text'  type='text'  name='ad_url' value='<?php echo $this->_tpl_vars['ad_info']['flash_url']; ?>
'  ><input id='upload' checked type='radio' name='upload' >远程地址<input id='upload_pic' type='radio' name='upload' onclick='adflash_url();'>本地上传");
}
</script>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="infoboxp_top_bg"></div>
<div class="admin_Prompt">
<div class="admin_Prompt_span">
    注意事项：添加广告时，请正确选择分类和类型。
</div><div class="admin_Prompt_close"></div></div>
  <div class="infoboxp_top">
      <span class="admin_title_span"><?php if (is_array ( $this->_tpl_vars['ad_info'] )): ?>更新广告<?php else: ?>添加广告<?php endif; ?></span>
      </div>
   <div class="clear"></div>
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
  <form name="myform" target="supportiframe" action="<?php if (is_array ( $this->_tpl_vars['ad_info'] )): ?>index.php?m=advertise&c=modify_save<?php else: ?>index.php?m=advertise&c=ad_saveadd<?php endif; ?>" method="post" encType="multipart/form-data">
    <table width="100%" class="table_form" style="background:#fff">
      <tr >
        <th width="200">广告名称：</th>
        <td><input class="input-text" id="ad_name" value="<?php echo $this->_tpl_vars['ad_info']['ad_name']; ?>
" name="ad_name"></td>
      </tr>
    	<tr  class="admin_table_trbg">
        <th width="200">打开窗口：</th>
        <td>
        <input class="" id="target" name="target" type="radio" value="2" <?php if ($this->_tpl_vars['ad_info']['target'] != 1): ?>checked<?php endif; ?>>原窗口
        <input class="" id="target" name="target" type="radio" value="1" <?php if ($this->_tpl_vars['ad_info']['target'] == 1): ?>checked<?php endif; ?>>新窗口
        </td>
      </tr>
	  <tr>
        <th width="200">使用范围：</th>
          <td>
      <div class="all_Domain_name">
     <input type="button" value="<?php if ($this->_tpl_vars['ad_info']['domain_name'] == ""): ?>全站<?php else: ?><?php echo $this->_tpl_vars['ad_info']['domain_name']; ?>
<?php endif; ?>" class="all_Domain_button" id="domain_name">
     <input type="hidden" id="domainid" value="<?php echo $this->_tpl_vars['ad_info']['did']; ?>
" name="did">
     <div class="all_Domain_name_box" id="domain_list" style="display:none;">
<span class="all_Domain_name_box_list"><input type="checkbox" class="domain" id="did" value="0+0" <?php if (stripos ( $this->_tpl_vars['ad_info']['did'] , '0' ) !== false): ?>checked<?php endif; ?> class="all_Domain_name_box_bth"> 全站</span> 
          <?php $_from = $this->_tpl_vars['domain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <span class="all_Domain_name_box_list"><input type="checkbox" class="domain" class="did" value="<?php echo $this->_tpl_vars['v']['id']; ?>
+<?php echo $this->_tpl_vars['v']['title']; ?>
" <?php if (stripos ( $this->_tpl_vars['ad_info']['did'] , $this->_tpl_vars['v']['id'] ) !== false): ?>checked<?php endif; ?> class="all_Domain_name_box_bth"> <?php echo $this->_tpl_vars['v']['title']; ?>
</span> 
          <?php endforeach; endif; unset($_from); ?>
          <div class="all_Domain_name_sub"><input type="button" value="确定" class="all_Domain_name_submit1" onClick="check_domain()">
          <input type="button" value="取消" class="all_Domain_name_submit2" onClick="Close('domain_list')"></div>
     </div>
      </div>
      </td>
        </tr>
        <tr>
            <th width="200">站点下使用范围：</th>
            <td>
                <select name="tem_type">
                    <option value='1' <?php if ($this->_tpl_vars['linkrow']['tem_type'] == 1): ?>selected<?php endif; ?>>全站使用</option>
                    <option value="2" <?php if ($this->_tpl_vars['linkrow']['tem_type'] == 2): ?>selected<?php endif; ?> >仅在首页使用</option> 
                </select>
            </td>
        </tr>
      </tr>

     	<tr  class="admin_table_trbg">
        <th width="200">广告所属分类：</th>
        <td><select name="class_id">
        	<?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
        	<option value="<?php echo $this->_tpl_vars['list']['id']; ?>
" <?php if ($this->_tpl_vars['list']['id'] == $this->_tpl_vars['ad_info']['class_id']): ?>selected<?php endif; ?> ><?php echo $this->_tpl_vars['list']['class_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select></td>
      </tr> 
	  <tr >
        <th width="200">是否启用：</th>
        <td>
		<input name='is_open' value='1' type='radio' checked>启用
		<input name='is_open' value='0' <?php if ('0' == $this->_tpl_vars['ad_info']['is_open']): ?>checked<?php endif; ?> type='radio'>关闭
		</td>
      </tr>
	  <tr class="admin_table_trbg">
        <th width="200">排序：</th>
        <td><input id="sort" class="input-text" value="<?php echo $this->_tpl_vars['ad_info']['sort']; ?>
" name="sort" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">越大越在前</td>
      </tr>
      <tr>
        <th width="200">开始时间：</th>
        <td>
        <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
		<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
        <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
        <input id="ad_start" class="input-text" type="text" readonly size="20" value="<?php echo $this->_tpl_vars['ad_info']['time_start']; ?>
" name="time_start">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "ad_start",
        trigger : "ad_start",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script></td>
      </tr>
       <tr class="admin_table_trbg">
        <th width="200">结束时间：</th>
        <td>
        <input id="ad_end" class="input-text" type="text" readonly size="20" value="<?php echo $this->_tpl_vars['ad_info']['time_end']; ?>
" name="time_end">
        <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "ad_end",
        trigger : "ad_end",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script>
          </td>
      </tr>
		<tr>
			<th width="200">备注：</th>
			<td><textarea class="text" cols="50" rows="3" name="remark"></textarea></td>
		</tr>
     	<tr class="admin_table_trbg">
        <th width="200">广告类型：</th>
        <td colspan="2"><input type="radio" id="word_ad" name="ad_type" value="word" onClick="replace_type('word');" <?php if ($this->_tpl_vars['ad_info']['ad_type'] == 'word'): ?>checked<?php endif; ?>>
          文字广告
          <input  value="pic" type="radio" id="pic_ad" name="ad_type" onClick="replace_type('pic');" <?php if ($this->_tpl_vars['ad_info']['ad_type'] == 'pic'): ?>checked<?php endif; ?>>
          图片广告
          <input type="radio" value="flash" id="flash_ad" name="ad_type" onClick="replace_type('flash');"<?php if ($this->_tpl_vars['ad_info']['ad_type'] == 'flash'): ?>checked<?php endif; ?>>
          FLASH广告 </td>
      </tr>
      <tr> 
      <td  colspan="2" style="padding:0; background:none">
      <table width="100%" id="word" style="display:none">
    	<tr>
           <th width="200" >文字信息：</th>
        <td ><input class='input-text' id="word_info"    name='word_info' value='<?php echo $this->_tpl_vars['ad_info']['word_info']; ?>
'></td>
      </tr>
      <tr class="admin_table_trbg">
        <th>文字链接：</th>
        <td><input class='input-text' id="word_url"    name='word_url' value='<?php echo $this->_tpl_vars['ad_info']['word_url']; ?>
'>外部链接请加上“http://”</td>
      </tr>
      </table>
	   </td>
      </tr>
	  <tr><td colspan="2">
      <table id="pic" style="display:none"width="100%">
      <tr >
        <th width="200" >图片地址：</th>
        <td  id='typeid'><input class='input-text' type='text' id='pic_url' name='pic_url' value='<?php echo $this->_tpl_vars['ad_info']['pic_url']; ?>
'  >
          <input id='upload' checked type='radio' name='upload'>
          远程地址
          <input id='upload_pic' type='radio' name='upload' onclick='adpic_url();'>
          本地上传</td>
      </tr>
      <tr class="admin_table_trbg">
        <th>图片链接：</th>
        <td><input class='input-text' id="pic_src" name='pic_src' value='<?php echo $this->_tpl_vars['ad_info']['pic_src']; ?>
'  >外部链接请加上“http://”</td>
      </tr>
      <tr>
        <th>图片宽度：</th>
        <td><input class='input-text' id="pic_width" size='5'onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" name='pic_width' value='<?php echo $this->_tpl_vars['ad_info']['pic_width']; ?>
'>px</td>
      </tr>
      <tr class="admin_table_trbg">
        <th>图片高度：</th>
        <td><input class='input-text' id="pic_height" size='5'onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" name='pic_height' value='<?php echo $this->_tpl_vars['ad_info']['pic_height']; ?>
'>px</td>
      </tr>
       </table>
	   <table id="flash" style="display:none" width="100%">
		   <tr>
			<th width="200">FLASH地址：</th>
			<td id='flashid'><input class='input-text' id="flash_url"  name='flash_url' value='<?php echo $this->_tpl_vars['ad_info']['flash_url']; ?>
'   >
			  <input type='radio' id='flash' checked name='flash'>
			  远程地址
			  <input type='radio' id='upload_flash' name='upload_flash'  onclick='adflash_url();'>
			  本地上传</td>
		  </tr>
		  <tr class="admin_table_trbg">
			  <th >FLASH宽度：</th>
			<td><input class='input-text' id="flash_width" name='flash_width' value='<?php echo $this->_tpl_vars['ad_info']['flash_width']; ?>
'></td>
		  </tr>
      <tr>
        <th>FLASH高度：</th>
        <td><input class='input-text' id="flash_height" name='flash_height' value='<?php echo $this->_tpl_vars['ad_info']['flash_height']; ?>
'></td>
      </tr>
      </table>
      </td>
      </tr>
      <?php if (is_array ( $this->_tpl_vars['ad_info'] )): ?>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ad_info']['id']; ?>
">
      <input type="hidden" name="lasturl" value="<?php echo $this->_tpl_vars['lasturl']; ?>
">
      <?php endif; ?>
      <tr>
        <td align="center" colspan="2">
        <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input class="admin_submit4" type="submit" name="submit" value="&nbsp;提  交&nbsp;"  onClick="return checkform();"/>
        <input class="admin_submit4" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
      </tr>
    </table>
  </form>
</div></div>
</div>
<script>
replace_type("<?php echo $this->_tpl_vars['ad_info']['ad_type']; ?>
");
</script>
</body>
</html>