<?php /* Smarty version 2.6.26, created on 2015-01-29 18:17:33
         compiled from admin/admin_right_web.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>

<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="admin_atatic_chart fl" id="main2" style="height:300px;"></div>
    <!-- ECharts单文件引入 -->
    <script src="js/echarts_plain.js"></script>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('main2')); 
        var option = {tooltip : {trigger: 'axis'},legend: {data:['<?php echo $this->_tpl_vars['name']; ?>
']},
    calculable : false,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : [<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['daylist']):
        $this->_foreach['foo']['iteration']++;
?><?php if (($this->_foreach['foo']['iteration']-1) > 0): ?>,<?php endif; ?>'<?php echo $this->_tpl_vars['daylist']['td']; ?>
'<?php endforeach; endif; unset($_from); ?>]
        }
    ],
    yAxis : [{type : 'value'}],
    series : [
        {
            name:'<?php echo $this->_tpl_vars['name']; ?>
',
            type:'line',
            symbol:'emptyCircle',
            smooth:false,
            itemStyle: {
                normal: {
                    areaStyle: {
                        width: 2,
						color:'rgb(191,227,249)'
					}
                }
            },
            data:[<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['daylist']):
        $this->_foreach['foo']['iteration']++;
?><?php if (($this->_foreach['foo']['iteration']-1) > 0): ?>,<?php endif; ?><?php echo $this->_tpl_vars['daylist']['cnt']; ?>
<?php endforeach; endif; unset($_from); ?>]
        }
    ]
};
        // 为echarts对象加载数据 
        myChart.setOption(option); 
    </script>
</body>
</html>