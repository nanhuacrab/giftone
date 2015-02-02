<?php /* Smarty version 2.6.26, created on 2015-01-30 22:24:25
         compiled from member/com/map.htm */ ?>
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
    <script src="http://api.map.baidu.com/api?v=1.4"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/map.js"></script>
    <div class=right_box>
      <div class=admincont_box>
        <div class=admin_tit><span  class="admin_tit_bg">设置公司所在位置</span><i class="com_admin_ask"></i></div>
        <div class=admin_note_map style="position:relative">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:12px;">
            <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
            <form name="myform" onSubmit="return checkpost();" target="supportiframe" action="index.php?c=map&act=save" method="post">
              <tr>
                <th height="30"></th>
                <td><div id="map_container" style="width:100%;height:350px;"></div><br>
                </td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td height="40"> X轴:
                  <input name="xvalue" id="map_x" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php echo $this->_tpl_vars['row']['x']; ?>
"  class="com_info_text" style='float:none'>
                  &nbsp;&nbsp;
                  Y轴:
                  <input name="yvalue" id="map_y" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" readonly="readonly" value="<?php echo $this->_tpl_vars['row']['y']; ?>
"  class="com_info_text" style='float:none'>
                  &nbsp;&nbsp;

                  <input type="submit" name="savemap" class="btn_01" value="保存地图" style="">
                  <span id="by_map" class="errordisplay">请先设置地图位置</span></td>
              </tr>
              <tr>
                <th height="30"></th>
                <td>操作说明:在地图区域点击公司所在的位置，点击保存地图。</td>
              </tr>
            </form>
          </table>
          <div class="map_seach"><input id="map_keyword" type="text" value="<?php echo $this->_tpl_vars['row']['address']; ?>
" class="map_seach_text" placeholder="请输入地址" onclick="if(this.value=='请输入地址'){this.value='';}" onblur="if(this.value==''){this.value='请输入地址';}"/><input type="button" value="搜索" onclick="localsearch('全国');"class="map_seach_sub"/></div>
          <div class="map_seach_bg"></div>
        </div>
      </div>
    </div>
    <script>
		var map=new BMap.Map("map_container");
		setLocation('map_container',116.404,39.915,"map_x","map_y");
		$(document).ready(function() {
			$(".com_admin_ask").hover(function(){
				layer.tips("精确定位，更直观展示企业位置！", this, {
					guide: 1,
					style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
				});
			},function(){layer.closeTips();});
			<?php if (( $this->_tpl_vars['row']['x'] == "" || $this->_tpl_vars['row']['y'] == "" ) && $this->_tpl_vars['row']['address'] != ""): ?>
				$("#map_keyword").val("<?php echo $this->_tpl_vars['row']['address']; ?>
");
				localsearch('<?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['row']['cityid']]; ?>
');
			<?php elseif ($this->_tpl_vars['row']['x'] != "" && $this->_tpl_vars['row']['y'] != ""): ?>
				setLocation('map_container',<?php echo $this->_tpl_vars['row']['x']; ?>
,<?php echo $this->_tpl_vars['row']['y']; ?>
,"map_x","map_y");
			<?php else: ?>
				//根据IP到城市开始
				function myFun(result){
					var cityName = result.name;
					map.setCenter(cityName);
				}
				var myCity = new BMap.LocalCity();
				myCity.get(myFun);
				//根据IP到城市结结束
			<?php endif; ?>
		});
		var local ;
		function getLocalResult(){
			var map_keyword=$.trim($("#map_keyword").val());
			var points=local.getResults();
				var lngLat=points.getPoi(0).point;
				setLocation('map_container',lngLat.lng,lngLat.lat,"map_x","map_y");
				document.getElementById("map_x").value=lngLat.lng;
				document.getElementById("map_y").value=lngLat.lat;
			
		}

		function localsearch(city){
			if($("#map_keyword").val()==""){
				layer.msg('请输入地址！', 2, 8);return false;
			}
			local = new BMap.LocalSearch(city, {
			renderOptions: {
				map: map,
				panel : "r-result",
				autoViewport: true,
				selectFirstResult: false
			  },onSearchComplete : getLocalResult
			});

			map.centerAndZoom(new BMap.Point(116.404, 39.915), 4);

			local.search($("#map_keyword").val());
		}
		function checkpost(){
			if($.trim($("#map_x").val())==''||$.trim($("#map_y").val())==''){
				layer.msg('请先设置地图位置！', 2, 8);return false;
			}
		}
		function setLocation(id,x,y,xid,yid){
			var data=get_map_config();
			var config=eval('('+data+')');
			var rating,map_control_type,map_control_anchor;
			if(!x && !y){x=config.map_x;y=config.map_y;}

			var point = new BMap.Point(x,y);
			var marker = new BMap.Marker(point);
			var opts = {type:BMAP_NAVIGATION_CONTROL_LARGE}

			map.enableScrollWheelZoom(true);
			map.addControl(new BMap.NavigationControl(opts));
			map.centerAndZoom(point, 15);
			map.addOverlay(marker);
			map.addEventListener("click",function(e){
			   var info = new BMap.InfoWindow('', {width: 260});
				var projection = this.getMapType().getProjection();
				var lngLat = e.point;
				document.getElementById(xid).value=lngLat.lng;
				document.getElementById(yid).value=lngLat.lat;
				map.clearOverlays();
				var point = new BMap.Point(lngLat.lng,lngLat.lat);
				var marker = new BMap.Marker(point);
				map.addOverlay(marker);
			});
		}
	</script>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['comstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>