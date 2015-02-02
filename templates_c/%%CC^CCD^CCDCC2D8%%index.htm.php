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
<!--加载鼠标绘制工具-->
<script type="text/javascript" src="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.js" charset="utf-8"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.css" />
<!--加载检索信息窗口-->
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/SearchInfoWindow_min.js"charset="utf-8"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/SearchInfoWindow_min.css" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--职位类别-->
<div class="sPopupDiv" id="jobdiv" style="width: 960px; display:none;"></div>
<!--职位类别end--> 
<!--工作地点-->
<div class="sPopupDiv" id="citydiv" style="width:650px; display:none"></div>
<!--工作地点end--> 
<!--content start-->
<div class="yun_body">
  <div class="yun_content">
  <div class="current_Location icon"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > <span>地图搜索</span> </div>
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
  <div class="clear"></div><!--  搜索框-->  <div class="clear"></div>
<div class="seach_box">
<div class="seach_box_zy">
<div class="seach_industry seach_industry_re">
<input type="button" id="buttonhy" title="选择行业类别" value="<?php if ($this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']] != ""): ?><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['getinfo']['hy']]; ?>
<?php else: ?>请选择行业类别<?php endif; ?>" class="seach_industry_botton" onclick="check_select_show('hy');">
<div class="seach_Nature" style="display:none;" id="listhy">
<div class="seach_Nature_list">
<input type="hidden" name="hy" id="hy" value="<?php echo $this->_tpl_vars['getinfo']['hy']; ?>
" />
<a href="javascript:check_onselect('hy','','不限');" class="seach_Nature_cur">不限</a>
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
<input type="button" id="buttonpr" title="选择公司性质" value="<?php if ($this->_tpl_vars['comclass_name'][$this->_tpl_vars['getinfo']['pr']] != ""): ?><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['getinfo']['pr']]; ?>
<?php else: ?>请选择公司性质<?php endif; ?>" class="seach_industry_botton" onclick="check_select_show('pr');">
<div class="seach_Nature" style="display:none; position:absolute; width:306px;" id="listpr">
<div class="seach_Nature_list">
<input type="hidden" name="pr" id="pr" value="<?php echo $this->_tpl_vars['getinfo']['pr']; ?>
" />
<a href="javascript:check_onselect('pr','','不限');" class="seach_Nature_cur" style="width:295px;">不限</a>
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
<div class="seach_industry"><input type="button" id="city" title="选择工作地区" value="<?php if ($this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']] != ""): ?><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['getinfo']['cityid']]; ?>
<?php else: ?>请选择工作地区<?php endif; ?>" onclick="index_city();"  class="seach_industry_botton">
<input type="hidden" name="cityid" id="cityid" value="<?php echo $this->_tpl_vars['getinfo']['cityid']; ?>
"/>
</div>
</div>

<div class="seach_ind">
<div class="seach_industry_date  seach_re10">
<input type="button" id="buttonuptime" title="选择更新日期" value="<?php if ($this->_tpl_vars['uptimename'] != ""): ?><?php echo $this->_tpl_vars['uptimename']; ?>
<?php else: ?>请选择更新日期<?php endif; ?>" class="seach_industry_botton2" onclick="check_select_show('uptime');">
<div class="seach_Nature" style="display:none" id="listuptime">
<div class="seach_Nature_list">
<input type="hidden" name="lastupdate" id="uptime" value="<?php echo $this->_tpl_vars['getinfo']['lastupdate']; ?>
" />
<a href="javascript:check_onselect('uptime','','不限');" class="seach_Nature_cur">不限</a>
<a href="javascript:check_onselect('uptime','1','今天');">今天</a>
<a href="javascript:check_onselect('uptime','3','最近3天');">最近3天</a>
<a href="javascript:check_onselect('uptime','7','最近7天');">最近7天</a>
<a href="javascript:check_onselect('uptime','30','最近一个月');">最近一个月</a>
<a href="javascript:check_onselect('uptime','90','最近三个月');">最近三个月</a>
</div>

</div>
</div>
<div class="seach_keyword"><input type="text" id="jobkeyword" value="请输入公司名称的关键字：例如移动"  onclick="if(this.value=='请输入公司名称的关键字：例如移动'){this.value=''}" placeholder="请输入公司名称的关键字：例如移动" onblur="if(this.value==''){this.value='请输入公司名称的关键字：例如移动'}" name="keyword" class="seach_keyword_text placeholder"></div>
<input type="submit" value="" class="seach_submit_com">
</div>
<div class="clear"></div>
</div>
</form>
<!--  搜索框 end-->
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
	 cityall+="<div class=\"Post_map_list fl\" style=\"width:230px;\"><span style=\"font-weight:normal; font-size:12px;\">城市搜索</span></div><form action=\"index.php\" method=\"get\"><input type=\"hidden\" name=\"m\" value=\"map\"><input type=\"hidden\" name=\"r\" value='<?php echo $_GET['r']; ?>
'><input type=\"hidden\" name=\"x\" value='<?php echo $_GET['x']; ?>
'><input type=\"hidden\" name=\"y\" value='<?php echo $_GET['y']; ?>
'><ul style=\"list-style:none outside none;padding:0pt;margin:0px;\"><li> 省份：<select name=\"provinceid\" id=\"provinceid\" class=\"province\" lid=\"cityid\" onchange=\"change_city(this.value,'cityid');\"><option value=\"\">--请选择--</option> ";
	<?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
cityall+="<option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>"
	<?php endforeach; endif; unset($_from); ?>
	cityall+="</select></li><li> 城市：<select name=\"cityid\" size=\"1\" id=\"cityid\" class=\"province\" lid=\"three_cityid\" onchange=\"change_city2(this.value,'three_cityid');\"><option value=\"\">--请选择--</option></select></li><li> 县区：<select name=\"three_cityid\" size=\"1\" id=\"three_cityid\"><option value=\"\">--请选择--</option></select></li><li><input type=\"submit\" class=\"mapsearch\" value=\" 搜索 \" style=\"margin-left:40px;\" /></li></ul></form>";
	$("#job_list").html(cityall);
}
function searchtype_hy(){
	$(".Post_map_atc").attr("class","");
	$("#searchtype2").attr("class","Post_map_atc");
	var cityall="";
	 cityall+="<div class=\"Post_map_list fl\" style=\"width:230px;\"><span style=\"font-weight:normal; font-size:12px;\">行业搜索</span></div><form action=\"index.php\" method=\"get\"><input type=\"hidden\" name=\"m\" value=\"map\" /><input type=\"hidden\" name=\"r\" value='<?php echo $_GET['r']; ?>
'><input type=\"hidden\" name=\"x\" value='<?php echo $_GET['x']; ?>
'><input type=\"hidden\" name=\"y\" value='<?php echo $_GET['y']; ?>
'><ul style=\"list-style:none outside none;padding:0pt;margin:0px;\"><li> 行业：<select name=\"hy\"><option value=\"\">--请选择--</option> ";
	<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
cityall+="<option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>"
	<?php endforeach; endif; unset($_from); ?>
	cityall+="</select></li><li><input type=\"submit\" value=\" 搜索 \" class=\"mapsearch\" style=\"margin-left:40px;\" /></li></ul></form>";
	$("#job_list").html(cityall);
}
function searchtype_job(){
	$(".Post_map_atc").attr("class","");
	$("#searchtype3").attr("class","Post_map_atc");
	var cityall="";
	 cityall+="<div class=\"Post_map_list fl\" style=\"width:230px;\"><span style=\"font-weight:normal; font-size:12px;\">职位搜索</span></div><form action=\"index.php\" method=\"get\"><input type=\"hidden\" name=\"m\" value=\"map\" /><input type=\"hidden\" name=\"r\" value='<?php echo $_GET['r']; ?>
'><input type=\"hidden\" name=\"x\" value='<?php echo $_GET['x']; ?>
'><input type=\"hidden\" name=\"y\" value='<?php echo $_GET['y']; ?>
'><ul style=\"list-style:none outside none;padding:0pt;margin:0px;\"><li>大类：<select name=\"job1\" id=\"job1\" onchange=\"change_job(this.value,'job1_son');\"><option value=\"\">--请选择--</option> ";
	<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
cityall+="<option value='<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</option>"
	<?php endforeach; endif; unset($_from); ?>
	cityall+="</select></li><li>子类：<select name=\"job1_son\" size=\"1\" id=\"job1_son\" lid=\"job_post\" onchange=\"change_job2(this.value,'job_post');\"><option value=\"\">--请选择--</option></select></li><li>名称：<select name=\"job_post\" size=\"1\" id=\"job_post\"><option value=\"\">--请选择--</option></select></li><li><input type=\"submit\" class=\"mapsearch\" value=\" 搜索 \" style=\"margin-left:40px;\" /></li></ul></form>";
	$("#job_list").html(cityall);
}
function change_city(province,lid){
	if(province==""){$("#three_cityid").html("<option value=''>--请选择--</option>");}
	$("#three_cityid").html("<option value=''>--请选择--</option>");
	$.post("index.php?m=ajax&c=ajax", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
function change_city2(province,lid){
	if(province==""){$("#three_cityid").html("<option value=''>--请选择--</option>");}
	$.post("index.php?m=ajax&c=ajax", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
function change_job(province,lid,type){
	if(province==""){$("#job1_son").html("<option value=''>--请选择--</option>");}
	$("#job_post").html("<option value=''>--请选择--</option>");
	$.post("index.php?m=ajax&c=ajax_job", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
function change_job2(province,lid,type){
	if(province==""){$("#job_post").html("<option value=''>--请选择--</option>");}
	$.post("index.php?m=ajax&c=ajax_job", {"str[]":[province]},function(data) {
		$('#'+lid+' option').remove();
		$(data).appendTo("#"+lid);
	})
}
</script> 
<script type="text/javascript">
// 百度地图API功能
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
			//根据IP到城市开始
			function myFun(result){
				var cityName = result.name;
				map.setCenter(cityName);
			}
			var myCity = new BMap.LocalCity();
			myCity.get(myFun);
			//根据IP到城市结结束
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($_GET['z']): ?>
	map.setZoom(parseInt("<?php echo $_GET['z']; ?>
"));
	<?php endif; ?>
    map.enableScrollWheelZoom();
	map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
	map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT}));// 右下 比较尺
    var overlays = [];
    //回调获得覆盖物信息
    var overlaycomplete = function(e){
		overlays.push(e.overlay);
		layer.confirm('您已经选择区域，是否开始查找?重新选择请点击取消。', function(){
			var url="&r="+e.overlay.getRadius()+'&x='+e.overlay.getCenter().lng+"&y="+e.overlay.getCenter().lat;
			//window.open("index.php?m=map"+url,"_self");
			location.href="index.php?m=map&z="+map.getZoom() +url;window.event.returnValue = false;
		},'提示',function(){layer.closeAll()});  
    };
    var styleOptions = {
        strokeColor:"blue",    //边线颜色。
        fillColor:"blue",      //填充颜色。当参数为空时，圆形将没有填充效果。
        strokeWeight: 1,       //边线的宽度，以像素为单位。
        strokeOpacity: 0.4,	   //边线透明度，取值范围0 - 1。
        fillOpacity: 0.3,      //填充的透明度，取值范围0 - 1。
        strokeStyle: 'solid' //边线的样式，solid或dashed。
    }
    //实例化鼠标绘制工具
    var drawingManager = new BMapLib.DrawingManager(map, {
        isOpen: false, //是否开启绘制模式
        enableDrawingTool: true, //是否显示工具栏
        drawingToolOptions: {
            anchor: BMAP_ANCHOR_TOP_RIGHT, //位置
            offset: new BMap.Size(5, 5), //偏离值
            scale: 0.8, //工具栏缩放比例
			drawingModes : [BMAP_DRAWING_CIRCLE]
        },
        circleOptions: styleOptions, //圆的样式
        polylineOptions: styleOptions, //线的样式
        polygonOptions: styleOptions, //多边形的样式
        rectangleOptions: styleOptions //矩形的样式
    });
    //添加鼠标绘制工具监听事件，用于获取绘制结果
    drawingManager.addEventListener('overlaycomplete', overlaycomplete);
function clearAll() {
	for(var i = 0; i < overlays.length; i++){
		map.removeOverlay(overlays[i]);
	}
	overlays.length = 0
}
window.openInfoWinFuns = null;

// 添加标注
function addMarker(point, index, isPoint){
  var myIcon = new BMap.Icon("http://api.map.baidu.com/img/markers.png",new BMap.Size(23,25),{
    offset: new BMap.Size(10, 25),
    imageOffset: new BMap.Size(0,0-index*25)
  });
 // var marker = new BMap.Marker(point,{icon:myIcon});
//  map.addOverlay(marker);
  var lngLat = point;
  var point = new BMap.Point(lngLat.lng,lngLat.lat);
  var marker = new BMap.Marker(point,{icon:myIcon});  // 创建标注
  map.addOverlay(marker);           // 将标注添加到地图中
	if(isPoint){
		map.centerAndZoom(point, parseInt("<?php echo $_GET['z']; ?>
"==""?13:"<?php echo $_GET['z']; ?>
"));	
	}
  return marker;
}
// 添加信息窗口
function addInfoWindow(marker,title,content,index,comurl,tel,address,src,icon){
    var maxLen = 10;
    var infoWindowTitle='<div><a href="'+comurl+'" target="_blank" style="font-weight:bold;color:#CE5521;font-size:14px">'+title+'</a></div>';
    var infoWindowHtml=[];
    infoWindowHtml.push('<table cellspacing="0" style="table-layout:fixed;width:100%;font:12px arial,simsun,sans-serif"><tbody>');
	infoWindowHtml.push('<tr>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px;white-space:nowrap;word-break:keep-all；"width="40">电话：</td>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px">');
	infoWindowHtml.push(tel);
	infoWindowHtml.push('</td>');
	infoWindowHtml.push('<td rowspan="3"><a href="'+comurl+'" target="_blank"><img src="'+src+'" width="100" height="60" style="border:1px solid #ccc;"/></a></td>');
    infoWindowHtml.push('</tr>');
	infoWindowHtml.push('<tr>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px;white-space:nowrap;word-break:keep-all">地址：</td>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px">');
	infoWindowHtml.push(address);
	infoWindowHtml.push('</td>');
    infoWindowHtml.push('</tr>');
	infoWindowHtml.push('<tr>');
    infoWindowHtml.push('<td style="vertical-align:top;line-height:20px;white-space:nowrap;word-break:keep-all">职位：</td>');
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
          <div class="Pop-up_box_h1 icon3"><span>申请职位</span><a href="javascript:Close('sqjob_show');" class="yun_bth_icon"></a></div>
          <div class="Pop-up_logoin">
            <div class="Pop-up_logoin_sq" id="resume_job"> <span>选择简历：</span>
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
            <li class="yun_td6">公司名称</li>
            <li class="yun_td7" style="width:180px;">所属行业</li>
            <li class="yun_td7">企业性质</li>
            <li class="yun_td7">工作地点</li>
            <li class="yun_td7">企业规模</li>
            <li class="yun_td7">职位总数</li>
            <li class="yun_td2">更新日期</li>
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
" class="map_icon png" title="在图上显示该点"></div>
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
        <div class="listno-content"> <strong>很抱歉，没有找到满足条件的职位</strong><br>
          <span> 建议您：<br>
          1、适当减少已选择的条件<br>
          2、适当删减或更改搜索关键字<br>
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