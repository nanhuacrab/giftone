<?php /* Smarty version 2.6.26, created on 2015-01-29 19:21:59
         compiled from admin/admin_comproduct.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'seacrh_url', 'admin/admin_comproduct.htm', 118, false),array('function', 'curl', 'admin/admin_comproduct.htm', 136, false),array('modifier', 'date_format', 'admin/admin_comproduct.htm', 134, false),)), $this); ?>
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
<script type="text/javascript" src="js/admin_public.js"></script>
<script>
function audall(status){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		 parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		var pytoken=$("#pytoken").val();
		$.post("index.php?m=comproduct&c=statuss",{allid:codewebarr,status:status,pytoken:pytoken},function(data){
			if(data=="1") {
				parent.layer.msg('批量审核成功！', 2, 9,function(){window.location.reload();});

			}else{
				parent.layer.msg('批量取消审核成功！', 2, 9,function(){window.location.reload();});
			}
		});
	}
} 
$(function(){
	$(".status").click(function(){ 
 		$("input[name=pid]").val($(this).attr("pid"));
		var id=$(this).attr("pid");
		var status=$(this).attr("status"); 
		$("#status"+status).attr("checked",true);
		$("input[name=id]").val(id);  	 
		$.get("index.php?m=comproduct&c=statusbody&id="+id,function(msg){
			$("#alertcontent").val(msg);
			status_div('产品审核','350','220');
		});
	});	
});
  
</script>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none; width: 350px; ">
  <div id="infobox">
    <form action="index.php?m=comproduct&c=status" target="supportiframe" method="post" id="formstatus">
      <input type="hidden" name="pytoken" value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
      <div class="admin_Operating_sh" style="padding:10px;">
        <div class="admin_Operating_sh_h1" style="padding:5px;">锁定操作：
          <label for="status0">
          <input type="radio" name="status" value="0" id="status0" >
          未审核</label>
          <label for="status1">
          <input type="radio" name="status" value="1" id="status1" >
          正常</label>
          <label for="status2">
          <input type="radio" name="status" value="2" id="status2">
          未通过</label>
        </div>
        <div class="admin_Operating_sh_sm">审核说明：</div>
        <div>
          <textarea id="alertcontent" name="statusbody" class="admin_Operating_text"></textarea>
        </div>
        <div class="admin_Operating_sub">
          <input type="submit"  value='确认' class="submit_btn" >
          &nbsp;&nbsp;
          <input type="button"  onClick="layer.closeAll();" class="cancel_btn" value='取消'>
        </div>
      </div>
      <input name="id" value="0" type="hidden">
    </form>
  </div>
</div>
<div class="infoboxp">
  <div class="infoboxp_top_bg"></div>
  <form action="index.php" name="myform" method="get">
    <input name="m" value="comproduct" type="hidden"/>
    <input type="hidden" name="status" value="<?php echo $_GET['status']; ?>
"/>
    <div class="admin_Filter"> <span class="complay_top_span fl">公司产品管理</span>
      <div class="admin_Filter_span">搜索类型：</div>
      <div class="admin_Filter_text formselect" did='dtype'>
        <input type="button" value="<?php if ($_GET['type'] == '' || $_GET['type'] == '1'): ?>公司名称 <?php elseif ($_GET['type'] == '2'): ?>产品名称<?php endif; ?>" class="admin_Filter_but" id="btype">
        <input type="hidden" id='type' value="<?php if ($_GET['type']): ?><?php echo $_GET['type']; ?>
<?php else: ?>1<?php endif; ?>" name='type' value='1'>
        <div class="admin_Filter_text_box" style="display:none" id='dtype'>
          <ul>
            <li><a href="javascript:void(0)" onClick="formselect('1','type','公司名称')">公司名称</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','type','产品名称')">产品名称</a></li>
          </ul>
        </div>
      </div>
      <input type="text" placeholder="输入你要搜索的关键字" name='keyword' class="admin_Filter_search">
      <input type="submit" name='search' value="搜索" class="admin_Filter_bth">
      <span class='admin_search_div'>
      <div class="admin_adv_search">
        <div class="admin_adv_search_bth">高级搜索</div>
      </div>
      </span> </div>
  </form>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/admin_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php"  target="supportiframe"name="myform" id='myform'method="get">
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
        <input name="m" value="comproduct" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th> <?php if ($_GET['order'] == 'asc'): ?> <a href="<?php echo seacrh_url(array('order' => 'desc','t' => 'id','m' => 'comproduct','untype' => "order,t"), $this);?>
">编号<img src="images/sanj.jpg"/></a> <?php else: ?> <a href="<?php echo seacrh_url(array('order' => 'asc','t' => 'id','m' => 'comproduct','untype' => "order,t"), $this);?>
">编号<img src="images/sanj2.jpg"/></a> <?php endif; ?> </th>
              <th align="left">公司名称</th>
              <th align="left">产品标题</th>
			  <th>时间</th>
              <th>状态</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
          <tr align="center" <?php if (( $this->_tpl_vars['key']+1 ) % 2 == '0'): ?>class="admin_com_td_bg"<?php endif; ?> id="list<?php echo $this->_tpl_vars['v']['id']; ?>
">
            <td style="width:20px;"><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $this->_tpl_vars['v']['id']; ?>
</span></td>
            <td class="ud" align="left"><a href="index.php?m=user_member&c=Imitate&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
            <td class="ud" align="left"><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
			<td class="ud" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
            <td><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="admin_com_Audited">已审核</span><?php elseif ($this->_tpl_vars['v']['status'] == 0): ?><span class="admin_com_noAudited">未审核</span><?php elseif ($this->_tpl_vars['v']['status'] == 2): ?><span class="admin_com_tg">未通过</span><?php endif; ?></td>
            <td><a href="javascript:void(0);" class="status admin_cz_sc" status="<?php echo $this->_tpl_vars['v']['status']; ?>
" pid="<?php echo $this->_tpl_vars['v']['id']; ?>
">审核</a> | <a href="<?php echo smarty_function_curl(array('url' => "id:".($this->_tpl_vars['v']['uid']).",tp:productshow,pid:".($this->_tpl_vars['v']['id'])), $this);?>
"  target="_blank" class="admin_cz_sc">预览</a> | <a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?m=comproduct&c=del&id=<?php echo $this->_tpl_vars['v']['id']; ?>
-<?php echo $this->_tpl_vars['v']['uid']; ?>
');"class="admin_cz_sc">删除</a> </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="3" ><label for="chkAll2">全选</label>
              <input class="admin_submit4"type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
              &nbsp;&nbsp;
              <input class="admin_submit4" type="button" name="delsub" value="批量审核" onClick="audall('1');" />
              &nbsp;&nbsp;
              <input class="admin_submit6" type="button" name="delsub" value="批量取消审核" onClick="audall('0');" /></td>
            <td colspan="3" class="digg"><?php echo $this->_tpl_vars['pagenav']; ?>
</td>
          </tr>
          </tbody>
          
        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html>