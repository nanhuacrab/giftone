<?php /* Smarty version 2.6.26, created on 2015-01-29 19:24:41
         compiled from default/map/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'mb_substr', 'default/map/index.htm', 405, false),array('modifier', 'date_format', 'default/map/index.htm', 417, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png');
</script>
<![endif]--> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/yun_seach.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/tck_box.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/comapply.css" type="text/css">
<link  href="<?php echo $this->_tpl_vars['style']; ?>
/style/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/search.js" type="text/javascript"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=<?php echo $this->_tpl_vars['config']['map_key']; ?>
" charset="utf-8"></script>
<!--���������ƹ���-->
<script type="text/javascript" src="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.js" charset="utf-8"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.css" />
<!--���ؼ�����Ϣ����-->
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/SearchInfoWindow_min.js"charset="utf-8"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/SearchInfoWindow_min.css" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--ְλ���-->
<div class="sPopupDiv" id="jobdiv" style="width: 960px; display:none;"></div>
<!--ְλ���end--> 
<!--�����ص�-->
<div class="sPopupDiv" id="citydiv" style="width:650px; display:none"></div>
<!--�����ص�end--> 
<!--content start-->
<div class="yun_body">
  <div class="yun_content">
  <div class="current_Location icon"> ����ǰ��λ�ã�<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">��ҳ</a> > <span>��ͼ����</span> </div>
  <div class="clear"></div>
<div class="yun_Looking_work">    
<form method="get" action="index.php" onsubmit="return search_keyword(this)">
<input type="hidden" name="m" value="map" />
<?php if ($_GET['r']): ?>
<input type="hidden" name="r" value="<?php echo $_GET['r']; ?>
" />
<?php endif; ?>
<?php if ($_GET['x']): ?>
<input type="hidden" name="x" value="<?php echo $_GET['x']; ?>
" />
<?php endif; ?>
<?php if ($_GET['y']): ?>
<input type="hidden" name="y" value="<?php echo $_GET['y']; ?>
" />
<?php endif; ?>
  <div class="clear"></div><!--  ������-->  <div class="clear"></div>
<div class="seach_box">
<div class="seach_box_zy">
<div class="seach_industry seach_industry_re">
<input type="button" id="buttonhy" title="ѡ����ҵ���" value="<?php if ($this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']] != ""): ?><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']]; ?>
<?php else: ?>��ѡ����ҵ���<?php endif; ?>" class="seach_industry_botton" onclick="check_select_show('hy');">
<div class="seach_Nature" style="display:none;" id="listhy">
<div class="seach_Nature_list">
<input type="hidden" name="hy" id="hy" value="<?php echo $this->_tpl_vars['getinfo']['hy']; ?>
" />
<a href="javascript:check_onselect('hy','','����');" class="seach_Nature_cur">����</a>
<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<a href="javascript:check_onselect('hy','<?php echo $this->_tpl_vars['v']; ?>
','<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</a>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div>
<div class="seach_industry" style="position:relative; z-index:30;">
<input type="button" id="buttonpr" title="ѡ��˾����" value="<?php if ($this->_tpl_vars['comclass_name'][$this->_tpl_vars['getinfo']['pr']] != ""): ?><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['getinfo']['pr']]; ?>
<?php else: ?>��ѡ��˾����<?php endif; ?>" class="seach_industry_botton" onclick="check_select_show('pr');">
<div class="seach_Nature" style="display:none; position:absolute; width:306px;" id="listpr">
<div class="seach_Nature_list">
<input type="hidden" name="pr" id="pr" value="<?php echo $this->_tpl_vars['getinfo']['pr']; ?>
" />
<a href="javascript:check_onselect('pr','','����');" class="seach_Nature_cur" style="width:295px;">����</a>
<?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<a href="javascript:check_onselect('pr','<?php echo $this->_tpl_vars['v']; ?>
','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');" style="width:295px;"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div>
<div class="seach_industry"><input type="button" id="city" title="ѡ��������" value="<?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']] != ""): ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]; ?>
<?php else: ?>��ѡ��������<?php endif; ?>" onclick="index_city();"  class="seach_industry_botton">
<input type="hidden" name="cityid" id="cityid" value="<?php echo $this->_tpl_vars['getinfo']['cityid']; ?>
"/>
</div>
</div>

<div class="seach_ind">
<div class="seach_industry_date  seach_re10">
<input type="button" id="buttonuptime" title="ѡ���������" value="<?php if ($this->_tpl_vars['uptimename'] != ""): ?><?php echo $this->_tpl_vars['uptimename']; ?>
<?php else: ?>��ѡ���������<?php endif; ?>" class="seach_industry_botton2" onclick="check_select_show('uptime');">
<div class="seach_Nature" style="display:none" id="listuptime">
<div class="seach_Nature_list">
<input type="hidden" name="lastupdate" id="uptime" value="<?php echo $this->_tpl_vars['getinfo']['lastupdate']; ?>
" />
<a href="javascript:check_onselect('uptime','','����');" class="seach_Nature_cur">����</a>
<a href="javascript:check_onselect('uptime','1','����');">����</a>
<a href="javascript:check_onselect('uptime','3','���3��');">���3��</a>
<a href="javascript:check_onselect('uptime','7','���7��');">���7��</a>
<a href="javascript:check_onselect('uptime','30','���һ����');">���һ����</a>
<a href="javascript:check_onselect('uptime','90','���������');">���������</a>
</div>

</div>
</div>
<div class="seach_keyword"><input type="text" id="jobkeyword" value="�����빫˾���ƵĹؼ��֣������ƶ�"  onclick="if(this.value=='�����빫˾���ƵĹؼ��֣������ƶ�'){this.value=''}" placeholder="�����빫˾���ƵĹؼ��֣������ƶ�" onblur="if(this.value==''){this.value='�����빫˾���ƵĹؼ��֣������ƶ�'}" name="keyword" class="seach_keyword_text placeholder"></div>
<input type="submit" value="" class="seach_submit_com">
</div>
<div class="clear"></div>
</div>
</form>
<!--  ������ end-->
</div>
  <div class="content_firm" style="border:1px solid #CCC; margin-top:10px;">
    <div class="map_left" id="map" style="float:left; width:980px; height:500px;"></div>
  </div>
<script>  
$(function(){
	$('body').click(function(evt) {
		if($(evt.target).parents("#listhy").length==0 && evt.target.id != "buttonhy") {
			$('#listhy').hide();
		}
		if($(evt.target).parents("#listpr").length==0 && evt.target.id != "buttonpr") {
			$('#listpr').hide();
		}
		if($(evt.target).parents("#listuptime").length==0 && evt.target.id != "buttonuptime") {
			$('#listuptime').hide();
		}
	})  
})
function check_select_show(id){
	$("#list"+id).show();
}
function check_onselect(id,val,name){
	$("#"+id).val(val);
	$("#list"+id).hide();
	$("#button"+id).val(name);
}
function getTypeids(){
	var typeids="";
	$(".typeid:checked").each(function(){
		if(typeids==""){
			typeids=$(this).val();
		}else{
			typeids=typeids+","+$(this).val();
		}
	});
	$("#typeids").val(typeids);
}
function searchtype(){window.location.href="index.php?m=map";}
function searchtype_city(){
	$(".Post_map_atc").attr("class","");
	$("#searchtype1").attr("class","Post_map_atc");
	var cityall="";
	 cityall+="<div class=\"Post_map_list fl\" style=\"width:230px;\"><span style=\"font-weight:normal; font-size:12px;\">��������</span></div><form action=\"index.php\" method=\"get\"><input type=\"hidden\" name=\"m\" value=\"map\"><input type=\"hidden\" name=\"r\" value='<?php echo $_GET['r']; ?>
'><input type=\"hidden\" name=\"x\" value='<?php echo $_GET['x']; ?>
'><input type=\"hidden\" name=\"y\" value='<?php echo $_GET['y']; ?>
'><ul style=\"list-style:none outside none;padding:0pt;margin:0px;\"><li> ʡ�ݣ�<select name=\"provinceid\" id=\"provinceid\" class=\"province\" lid=\"cityid\" onchange=\"change_city(this.value,'cityid');\"><option value=\"\">--��ѡ��--</option> ";
	<?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
cityall+="<option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>"
	<?php endforeach; endif; unset($_from); ?>
	cityall+="</select></li><li> ���У�<select name=\"cityid\" size=\"1\" id=\"cityid\" class=\"province\" lid=\"three_cityid\" onchange=\"change_city2(this.value,'three_cityid');\"><option value=\"\">--��ѡ��--</option></select></li><li> ������<select name=\"three_cityid\" size=\"1\" id=\"three_cityid\"><option value=\"\">--��ѡ��--</option></select></li><li><input type=\"submit\" class=\"mapsearch\" value=\" ���� \" style=\"margin-left:40px;\" /></li></ul></form>";
	$("#job_list").html(cityall);
}
function searchtype_hy(){
	$(".Post_map_atc").attr("class","");
	$("#searchtype2").attr("class","Post_map_atc");
	var cityall="";
	 cityall+="<div class=\"Post_map_list fl\" style=\"width:230px;\"><span style=\"font-weight:normal; font-size:12px;\">��ҵ����</span></div><form action=\"index.php\" method=\"get\"><input type=\"hidden\" name=\"m\" value=\"map\" /><input type=\"hidden\" name=\"r\" value='<?php echo $_GET['r']; ?>
'><input type=\"hidden\" name=\"x\" value='<?php echo $_GET['x']; ?>
'><input type=\"hidden\" name=\"y\" value='<?php echo $_GET['y']; ?>
'><ul style=\"list-style:none outside none;padding:0pt;margin:0px;\"><li> ��ҵ��<select name=\"hy\"><option value=\"\">--��ѡ��--</option> ";
	<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
cityall+="<option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>"
	<?php endforeach; endif; unset($_from); ?>
	cityall+="</select></li><li><input type=\"submit\" value=\" ���� \" class=\"mapsearch\" style=\"margin-left:40px;\" /></li></ul></form>";
	$("#job_list").html(cityall);
}
function searchtype_job(){
	$(".Post_map_atc").attr("class","");
	$("#searchtype3").attr("class","Post_map_atc");
	var cityall="";
	 cityall+="<div class=\"Post_map_list fl\" style=\"width:230px;\"><span style=\"font-weight:normal; font-size:12px;\">ְλ����</span></div><form action=\"index.php\" method=\"get\"><input type=\"hidden\" name=\"m\" value=\"map\" /><input type=\"hidden\" name=\"r\" value='<?php echo $_GET['r']; ?>
'><input type=\"hidden\" name=\"x\" value='<?php echo $_GET['x']; ?>
'><input type=\"hidden\" name=\"y\" value='<?php echo $_GET['y']; ?>
'><ul style=\"list-style:none outside none;padding:0pt;margin:0px;\"><li>���ࣺ<select name=\"job1\" id=\"job1\" onchange=\"change_job(this.value,'job1_son');\"><option value=\"\">--��ѡ��--</option> ";
	<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
cityall+="<option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>"
	<?php endforeach; endif; unset($_from); ?>
	cityall+="</select></li><li>���ࣺ<select name=\"job1_son\" size=\"1\" id=\"job1_son\" lid=\"job_post\" onchange=\"change_job2(this.value,'job_post');\"><option value=\"\">--��ѡ��--</option></select></li><li>���ƣ�<select name=\"job_post\" size=\"1\" id=\"job_post\"><option value=\"\">--��ѡ��--</option></select></li><li><input type=\"submit\" class=\"mapsearch\" value=\" ���� \" style=\"margin-left:40px;\" /></li></ul></form>";
	$("#job_list").html(cityall);
}
function change_city(province,lid){
	if(province==""){$("#three_cityid").html("<option value=''>--��ѡ��--</option>");}
	$("#three_cityid").html("<option value=''>--��ѡ��--</option>");
	$.post("index.php?m=ajax&c=ajax", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
function change_city2(province,lid){
	if(province==""){$("#three_cityid").html("<option value=''>--��ѡ��--</option>");}
	$.post("index.php?m=ajax&c=ajax", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
function change_job(province,lid,type){
	if(province==""){$("#job1_son").html("<option value=''>--��ѡ��--</option>");}
	$("#job_post").html("<option value=''>--��ѡ��--</option>");
	$.post("index.php?m=ajax&c=ajax_job", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
function change_job2(province,lid,type){
	if(province==""){$("#job_post").html("<option value=''>--��ѡ��--</option>");}
	$.post("index.php?m=ajax&c=ajax_job", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
</script> 
<script type="text/javascript">
// �ٶȵ�ͼAPI����
    var map = new BMap.Map('map');
	<?php if ($_GET['x'] && $_GET['y']): ?>
		 var poi = new BMap.Point("<?php echo $_GET['x']; ?>
","<?php echo $_GET['y']; ?>
");
		 var circle = new BMap.Circle(poi,"<?php echo $_GET['r']; ?>
");
		 map.addOverlay(circle);
		 map.centerAndZoom(poi,<?php echo $this->_tpl_vars['zoom']; ?>
);
	<?php else: ?>
		var poi = new BMap.Point('<?php echo $this->_tpl_vars['config']['map_x']; ?>
','<?php echo $this->_tpl_vars['config']['map_y']; ?>
');
		map.centerAndZoom(poi, 13);
		<?php if ($this->_tpl_vars['config']['map_tocity'] == 1): ?>
			//����IP�����п�ʼ
			function myFun(result){
				var cityName = result.name;
				map.setCenter(cityName);
			}
			var myCity = new BMap.LocalCity();
			myCity.get(myFun);
			//����IP�����н����
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($_GET['z']): ?>
	map.setZoom(parseInt("<?php echo $_GET['z']; ?>
"));
	<?php endif; ?>
    map.enableScrollWheelZoom();
	map.addControl(new BMap.NavigationControl());  //���Ĭ������ƽ�ƿؼ�
	map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT}));// ���� �Ƚϳ�
    var overlays = [];
    //�ص���ø�������Ϣ
    var overlaycomplete = function(e){
		overlays.push(e.overlay);
		layer.confirm('���Ѿ�ѡ�������Ƿ�ʼ����?����ѡ������ȡ����', function(){
			var url="&r="+e.overlay.getRadius()+'&x='+e.overlay.getCenter().lng+"&y="+e.overlay.getCenter().lat;
			//window.open("index.php?m=map"+url,"_self");
			location.href="index.php?m=map&z="+map.getZoom() +url;window.event.returnValue = false;
		},'��ʾ',function(){layer.closeAll()});  
    };
    var styleOptions = {
        strokeColor:"blue",    //������ɫ��
        fillColor:"blue",      //�����ɫ��������Ϊ��ʱ��Բ�ν�û�����Ч����
        strokeWeight: 1,       //���ߵĿ�ȣ�������Ϊ��λ��
        strokeOpacity: 0.4,	   //����͸���ȣ�ȡֵ��Χ0 - 1��
        fillOpacity: 0.3,      //����͸���ȣ�ȡֵ��Χ0 - 1��
        strokeStyle: 'solid' //���ߵ���ʽ��solid��dashed��
    }
    //ʵ���������ƹ���
    var drawingManager = new BMapLib.DrawingManager(map, {
        isOpen: false, //�Ƿ�������ģʽ
        enableDrawingTool: true, //�Ƿ���ʾ������
        drawingToolOptions: {
            anchor: BMAP_ANCHOR_TOP_RIGHT, //λ��
            offset: new BMap.Size(5, 5), //ƫ��ֵ
            scale: 0.8, //���������ű���
			drawingModes : [BMAP_DRAWING_CIRCLE]
        },
        circleOptions: styleOptions, //Բ����ʽ
        polylineOptions: styleOptions, //�ߵ���ʽ
        polygonOptions: styleOptions, //����ε���ʽ
        rectangleOptions: styleOptions //���ε���ʽ
    });
    //��������ƹ��߼����¼������ڻ�ȡ���ƽ��
    drawingManager.addEventListener('overlaycomplete', overlaycomplete);
function clearAll() {
	for(var i = 0; i < overlays.length; i++){
		map.removeOverlay(overlays[i]);
	}
	overlays.length = 0
}
window.openInfoWinFuns = null;

// ��ӱ�ע
function addMarker(point, index, isPoint){
  var myIcon = new BMap.Icon("http://api.map.baidu.com/img/markers.png",new BMap.Size(23,25),{
    offset: new BMap.Size(10, 25),
    imageOffset: new BMap.Size(0,0-index*25)
  });
 // var marker = new BMap.Marker(point,{icon:myIcon});
//  map.addOverlay(marker);
  var lngLat = point;
  var point = new BMap.Point(lngLat.lng,lngLat.lat);
  var marker = new BMap.Marker(point,{icon:myIcon});  // ������ע
  map.addOverlay(marker);           // ����ע��ӵ���ͼ��
	if(isPoint){
		map.centerAndZoom(point, parseInt("<?php echo $_GET['z']; ?>
"==""?13:"<?php echo $_GET['z']; ?>
"));	
	}
  return marker;
}
// �����Ϣ����
function addInfoWindow(marker,title,content,index,comurl,tel,address,src,icon){
    var maxLen = 10;
    var infoWindowTitle='<div><a href="'+comurl+'" target="_blank" style="font-weight:bold;color:#CE5521;font-size:14px">'+title+'</a></div>';
    var infoWindowHtml=[];
    infoWindowHtml.push('<table cellspacing="0" style="table-layout:fixed;width:100%;font:12px arial,simsun,sans-serif"><tbody>');
	infoWindowHtml.push('<tr>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px;white-space:nowrap;word-break:keep-all��"width="40">�绰��</td>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px">');
	infoWindowHtml.push(tel);
	infoWindowHtml.push('</td>');
	infoWindowHtml.push('<td rowspan="3"><a href="'+comurl+'" target="_blank"><img src="'+src+'" width="100" height="60" style="border:1px solid #ccc;"/></a></td>');
    infoWindowHtml.push('</tr>');
	infoWindowHtml.push('<tr>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px;white-space:nowrap;word-break:keep-all">��ַ��</td>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px">');
	infoWindowHtml.push(address);
	infoWindowHtml.push('</td>');
    infoWindowHtml.push('</tr>');
	infoWindowHtml.push('<tr>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px;white-space:nowrap;word-break:keep-all">ְλ��</td>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px">');
	infoWindowHtml.push('<ul style="line-height:20px;">');
	infoWindowHtml.push(content);
	infoWindowHtml.push('</ul></td>');
    infoWindowHtml.push('</tr>');
    infoWindowHtml.push('</tbody></table>');
    var infoWindow = new BMap.InfoWindow(infoWindowHtml.join(""),{title:infoWindowTitle,width:320,height:150}); 
    var openInfoWinFun=function(){
        marker.openInfoWindow(infoWindow);
        for(var cnt=0;cnt<maxLen;cnt++){
            if(!document.getElementById("list"+cnt)){continue;}
            if(cnt==index){
                document.getElementById("list"+cnt).style.backgroundColor="#f0f0f0";
            }else{
                document.getElementById("list"+cnt).style.backgroundColor="#fff";
            }
        }
    }
	var setMarkerIcon_over=function(){
		var myIcon1 = new BMap.Icon("http://api.map.baidu.com/img/markers.png",new BMap.Size(23,25),{
			offset: new BMap.Size(10, 25),
			imageOffset: new BMap.Size(0,0-10*25)
	  	});
		marker.setIcon(myIcon1);
	}
	var setMarkerIcon_out=function(){
		var myIcon1 = new BMap.Icon("http://api.map.baidu.com/img/markers.png",new BMap.Size(23,25),{
			offset: new BMap.Size(10, 25),
			imageOffset: new BMap.Size(0,0-(parseInt(icon)-1)*25)
	  	});
		marker.setIcon(myIcon1);
	}
	marker.addEventListener("mouseover",setMarkerIcon_over);
	marker.addEventListener("mouseout",setMarkerIcon_out);
    marker.addEventListener("click",openInfoWinFun);	
	$("#no"+icon).live("click",function(){
		if(location.href.indexOf("#map")>0){
			location.href=location.href;
		}else{
			location.href=location.href+"#map";
		}
		marker.openInfoWindow(infoWindow);
	});
    return openInfoWinFun;
}
</script> 
<!--content  end--> 
	
  	
    <div class="yun_Looking_work_left" style="width:960px">
        <div class="Pop-up_box" id="sqjob_show" style=" display:none; ">
          <div class="Pop-up_box_h1 icon3"><span>����ְλ</span><a href="javascript:Close('sqjob_show');" class="yun_bth_icon"></a></div>
          <div class="Pop-up_logoin">
            <div class="Pop-up_logoin_sq" id="resume_job"> <span>ѡ�������</span>
              <div class="POp_up_r"></div>
            </div>
            <div style="clear:both"></div>
            <div class="Pop-up_logoin_sq"> 
              <input id="click_comindex_sqjob" class="login_button2" style="margin-left:80px;"type="button" value=" " name="Submit">
            </div>
          </div>
        </div>
        <div class="fl "> <?php if ($this->_tpl_vars['total'] != 0): ?>
          <ul class="All_post_title fl">
            <li class="yun_td6">��˾����</li>
            <li class="yun_td7" style="width:180px;">������ҵ</li>
            <li class="yun_td7">��ҵ����</li>
            <li class="yun_td7">�����ص�</li>
            <li class="yun_td7">��ҵ��ģ</li>
            <li class="yun_td7">ְλ����</li>
            <li class="yun_td2">��������</li>
          </ul>
          
          <?php endif; ?>
          <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['list']):
?>
          <script>
          	var point = new BMap.Point(<?php echo $this->_tpl_vars['list']['x']; ?>
,<?php echo $this->_tpl_vars['list']['y']; ?>
);
			var marker = addMarker(point,"<?php echo $this->_tpl_vars['list']['orderid']; ?>
","<?php echo $this->_tpl_vars['total']; ?>
"=="<?php echo $this->_tpl_vars['key']+1; ?>
");
			var cont="";
			<?php $_from = $this->_tpl_vars['list']['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
				cont+='<li><a href="<?php echo $this->_tpl_vars['job']['job_url']; ?>
" target="_blank" style="color:blue;"><?php echo $this->_tpl_vars['job']['name']; ?>
</a></li>';
			<?php endforeach; endif; unset($_from); ?>
			var openInfoWinFun = addInfoWindow(marker,"<?php echo ((is_array($_tmp=$this->_tpl_vars['list']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 15, 'gbk') : mb_substr($_tmp, 0, 15, 'gbk')); ?>
",cont,"<?php echo $this->_tpl_vars['list']['orderid']; ?>
","<?php echo $this->_tpl_vars['list']['com_url']; ?>
","<?php echo $this->_tpl_vars['list']['linkphone']; ?>
","<?php echo $this->_tpl_vars['list']['address']; ?>
","<?php echo $this->_tpl_vars['list']['logo']; ?>
","<?php echo $this->_tpl_vars['key']+1; ?>
");
			openInfoWinFuns.push(openInfoWinFun);
          </script>
          <div class="yun_Looking_work_name fl" id="i<?php echo $this->_tpl_vars['job_list']['id']; ?>
" aid="<?php echo $this->_tpl_vars['job_list']['id']; ?>
">          	
            <div class="yun_Looking_work_yun_td6 yun_Looking_work_yun_td6_re">
            <div id="no<?php echo $this->_tpl_vars['key']+1; ?>
" class="map_icon png" title="��ͼ����ʾ�õ�"></div>
            <a href="<?php echo $this->_tpl_vars['list']['com_url']; ?>
" class="yun_Looking_work_yun_gs"><?php echo $this->_tpl_vars['list']['name']; ?>
</a></div>
            <div class="yun_Looking_work_yun_td7" style="text-align:left;width:180px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['job_hy'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 12, 'gbk') : mb_substr($_tmp, 0, 12, 'gbk')); ?>
</div>
            <div class="yun_Looking_work_yun_td7" style="text-align:center;width:80px;"><?php echo $this->_tpl_vars['list']['job_pr']; ?>
</div>
            <div class="yun_Looking_work_yun_td7" style="text-align:center;"><?php echo $this->_tpl_vars['list']['job_city_one']; ?>
 <?php echo $this->_tpl_vars['list']['job_city_two']; ?>
</div>
            <div class="yun_Looking_work_yun_td7" style="text-align:center;"><?php echo $this->_tpl_vars['list']['job_mun']; ?>
</div>
            <div class="yun_Looking_work_yun_td7" style="text-align:center;"><a href="<?php echo $this->_tpl_vars['list']['com_url']; ?>
" class="yun_Looking_work_yun_gs"><?php echo $this->_tpl_vars['list']['jobnum']; ?>
</a></div>
            <div class="yun_Looking_work_yun_td2" style="text-align:center;"><?php echo ((is_array($_tmp=$this->_tpl_vars['list']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</div>
          </div>
          <div class="clear"></div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <?php if ($this->_tpl_vars['total'] != 0): ?>
      <div class="clear"></div>
      <div class="pages"> <?php echo $this->_tpl_vars['pagenav']; ?>
</div>
      <div class="clear"></div>
      <?php endif; ?>
      
      <?php if ($this->_tpl_vars['total'] == 0): ?> 
      <div class="seachno" style="width:838px;border:1px solid #eee; margin-left:0px; margin-top:10px">
        <div class="seachno_left"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/search-no.gif"></div>
        <div class="listno-content"> <strong>�ܱ�Ǹ��û���ҵ�����������ְλ</strong><br>
          <span> ��������<br>
          1���ʵ�������ѡ�������<br>
          2���ʵ�ɾ������������ؼ���<br>
          </span></div>
      </div>
      <?php endif; ?> 
	  </div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>