<?php /* Smarty version 2.6.26, created on 2015-01-29 18:22:06
         compiled from default/index/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/index/index.htm', 69, false),)), $this); ?>
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
DD_belatedPNG.fix('.png,.pagination li a');
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
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/reg_ajax.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/yun_index.css" type="text/css">
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/index.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/search.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/slides.jquery.js" type="text/javascript"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script> 
$(document).ready(function(){
	$("#slides").slides({
		preload: true,
		preloadImage: '<?php echo $this->_tpl_vars['style']; ?>
/images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});
}); 
</script> 
<!--content  start-->
<div class="yun_content">
  <div class="index_logoin_box">
    <div id="index_logoin">
      <div class="index_logoin">
        <input type="hidden" value="index" name="path" id="path">
        <input type="hidden" value="1" name="usertype" id="usertype">
        <div class="index_logoin_h1">用户登录 </div>
       <div class="index_logoin_t">
          <div class="index_logoin_re">
            <input type="text" id="username" name="username" placeholder="请输入用户名" class="index_logoin_inp" value="<?php echo $this->_tpl_vars['cookie']['loginname']; ?>
">
            <div class="index_logoin_msg" id="show_name" style="display:none">
              <div class="index_logoin_msg_tx">请填写用户名</div>
              <div class="index_logoin_msg_icon"></div>
            </div>
          </div>
          <div class="index_logoin_re_m">
            <input type="password" placeholder="请输入您的密码" class="index_logoin_inp" name="password" value="" id="password">
            <div class="index_logoin_msg" style="display:none" id="show_pass">
              <div class="index_logoin_msg_tx">请填写密码</div>
              <div class="index_logoin_msg_icon"></div>
            </div>
          </div>
          
        </div>
       <div class="index_logoin_r">
      <input type="submit" value="" class="index_logoin_bth2" onclick="check_login();" >
      </div>
       <ul class="index_logoin_cont">
          <li>
            <input type="checkbox" class="index_logoin_check" value="1" name="loginname">
            <em class="index_l_jz">记住登录状态</em><a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
">忘记密码?</a></li>
          <li class="">
            <a id="reg_url_2" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:2"), $this);?>
" class="index_logoin_submit2">招聘者注册</a>
            <a id="reg_url_1" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="index_logoin_submit2">求职者注册</a>
           </li>
        
        </ul>
      </div>
    </div>
  </div>
  <div class="cont_Projector">
    <div class="Projector">
      <div class="Projector_img">
        <div id="slides" class="s_lb">
          <div class="slides_container"> 
		    <?php $_from = $this->_tpl_vars['lunbo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['lunbo']):
?>
            <div class="slide"><?php echo $this->_tpl_vars['lunbo']['html']; ?>
</div>
            <?php endforeach; endif; unset($_from); ?> 
		</div>
        </div>
      </div>
      <div class="yun_Announcement">
        <ul>
			<?php $_from = $this->_tpl_vars['dlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dlist']):
?> 
			<li><a href="<?php echo $this->_tpl_vars['dlist']['curl']; ?>
"  target="_blank"><?php echo $this->_tpl_vars['dlist']['comname']; ?>
</a> 下载了 <a href="<?php echo $this->_tpl_vars['dlist']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['dlist']['username']; ?>
</a> 的简历   <em class="yun_new_dt_em"><?php echo $this->_tpl_vars['dlist']['time']; ?>
</em></li>
			<?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
      <script>marquee("2000",".yun_Announcement ul");</script> 
    </div>
 
  </div>
  <div class="yuin_index_r">
      <div class="yuin_index_r_h1">
		<ul class="yun_index_h1_list">
			<li class="yun_index_h1_cur"><span>最新资讯</span>&nbsp;</li> 
			<li><span>网站公告</span>&nbsp;</li>   
			<li style="border:none;" ><span>招聘会</span>&nbsp;</li> 
		</ul>
	</div>
     <div class="yun_index_cont" style="display:block">
		 <ul class="yun_in_news">
			<?php $_from = $this->_tpl_vars['alist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['alist']):
?> 
			<li><span class="yun_in_news_span <?php if ($this->_tpl_vars['key'] < 3): ?>yun_in_news_span_cur<?php endif; ?>"><?php echo $this->_tpl_vars['key']+1; ?>
</span><a href="<?php echo $this->_tpl_vars['alist']['url']; ?>
" class="yun_in_news_a"><?php echo $this->_tpl_vars['alist']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?> 
		 </ul>
     </div> 
	<div class="yun_index_cont" style="display:none">
		<ul class="index_latest_news">
			<?php $_from = $this->_tpl_vars['gonggao']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gonggao']):
?>
			<li><a href="<?php echo $this->_tpl_vars['gonggao']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['gonggao']['title_n']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
	<div class="yun_index_cont" style="display:none">
		<ul class="index_latest_news">
			<?php $_from = $this->_tpl_vars['flist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flist']):
?>
			<li><a href="<?php echo $this->_tpl_vars['flist']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['flist']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?> 
		</ul> 
	</div> 
	</div>
    <div class="clear"></div>
  <div class="index_banner_top"><?php $_from = $this->_tpl_vars['adlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlists']):
?><?php echo $this->_tpl_vars['adlists']['html']; ?>
<?php endforeach; endif; unset($_from); ?></div>
  <div class="clear"></div>
<div class="index_Emergency_job"> 
 <div class="Emergency_index_cont">
     <div class="Latest_talent_h1 "><b >紧急招聘<span class="index_Emergency_span">Urgent Jobs</span></b><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search,urgent:1"), $this);?>
"class="index_more">更多>></a></div>
          <ul>
          <?php $_from = $this->_tpl_vars['jingji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['jingji']):
?>
          <li class="Emergency_list">
           
             <a href="<?php echo $this->_tpl_vars['jingji']['com_url']; ?>
" class="index_Emergency_com_name"><?php echo $this->_tpl_vars['jingji']['com_n']; ?>
</a><a href="<?php echo $this->_tpl_vars['jingji']['job_url']; ?>
" class="index_Emergency_post_name"><?php echo $this->_tpl_vars['jingji']['name_n']; ?>
</a>
          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
      <div class="index_buildPic">
		<div class="index_buildPic_cont">
		<ul>
		   <?php $_from = $this->_tpl_vars['ad39']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad39']):
?>
			<li><?php echo $this->_tpl_vars['ad39']['html']; ?>
</li>
			<?php endforeach; endif; unset($_from); ?>  
		</ul>
       </div>     
      </div>
</div>

  <div class="w980">
    <div class="Famous_recruitment">
      <div class="Latest_talent_h1 "><b >名企招聘<span class="index_Emergency_span">Famous Enterprise 
</span></b></div>
      <div class="Famous_recruitment_cont">
        <div class="index_left15560">
          <div id="mainids"> <?php $_from = $this->_tpl_vars['hotjoblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hotjoblist']):
?>
            <div class="tlogo">
              <ul>
                <li onmouseover="showDiv2(this)" onmouseout="showDiv2(this)"><a href="<?php echo $this->_tpl_vars['hotjoblist']['url']; ?>
" target="_blank"><img width="185" height="75" border="1" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['hotjoblist']['hot_pic']; ?>
" class="on"/></a>
                  <div class="show">
                    <div class="area"><?php echo $this->_tpl_vars['hotjoblist']['job']; ?>
</div>
                  </div>
                </li>
              </ul>
            </div>
            <?php endforeach; endif; unset($_from); ?> </div>
        </div>
      </div>
    </div>

  </div> 
    <div class="index_Emergency_job">
      <div class="Latest_talent_h1 "><b >推荐职位<span class="index_Emergency_span">Recommend Jobs</span></b><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search,rec:1"), $this);?>
" class="index_more">更多>></a></div>
 
        <div class="Recommended_jobs_cont">
          <ul>
           <?php $_from = $this->_tpl_vars['job_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_list']):
?>
            <li> 
           <em class="Recommended_jobs_cont_li">
           <span class="Recommended_jobs_pin">聘：</span><?php $_from = $this->_tpl_vars['job_list']['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jlist']):
?> 
		   <a href="<?php echo $this->_tpl_vars['jlist']['url']; ?>
" class="Recommended_jobs_name_cor"><?php echo $this->_tpl_vars['jlist']['name_n']; ?>
</a>
        
		  <?php endforeach; endif; unset($_from); ?>   </em>
           <em class="Recommended_jobs_name">[<?php echo $this->_tpl_vars['job_list']['one_city']; ?>
] <a href="<?php echo $this->_tpl_vars['job_list']['curl']; ?>
"><?php echo $this->_tpl_vars['job_list']['name_n']; ?>
</a> </em></li>
           

		 <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      
      
  
  <div class="w980">
    <div class="index_banner_cont ">  
	  <?php $_from = $this->_tpl_vars['adlist_13']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_13']):
?>
      <?php echo $this->_tpl_vars['adlist_13']['html']; ?>
 
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['adlist_14']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_14']):
?>
      <?php echo $this->_tpl_vars['adlist_14']['html']; ?>
 
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['adlist_15']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_15']):
?>
      <?php echo $this->_tpl_vars['adlist_15']['html']; ?>
 
      <?php endforeach; endif; unset($_from); ?> </div>
  </div>
  <div class="index_Emergency_job">
  <div class="Featured_Jobs_bg1">
    <div class="Latest_talent_h1"><b>最新职位<span class="index_Emergency_span">New Jobs</span></b><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search"), $this);?>
" class="index_more">更多>></a></div>
    <div class="Featured_Jobs"> 
   
      <div class="Featured_Jobs_list"> 
      	<?php $_from = $this->_tpl_vars['hot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hot']):
?>
        <dl>
          <dd>
          <div class="Featured_Jobs_t1"><a href="<?php echo $this->_tpl_vars['hot']['curl']; ?>
" class="Featured_Jobs_name fl"><?php echo $this->_tpl_vars['hot']['name_n']; ?>
</a> <em class="fr Featured_Jobs_date"><?php echo $this->_tpl_vars['hot']['lasttime']; ?>
</em>
          </div>
          <div class="Featured_Jobs_t2"> 
          <?php $_from = $this->_tpl_vars['hot']['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jlist']):
?> 
          	<a href="<?php echo $this->_tpl_vars['jlist']['url']; ?>
" class="Featured_Jobs_name_c"><?php echo $this->_tpl_vars['jlist']['name_n']; ?>
</a> <?php endforeach; endif; unset($_from); ?> 
            </div>
             </dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?> </div>
        
      
    </div>
  </div>
  </div>
  <div class="clear"></div>
   <div class="index_Emergency_job">
  <div class="Latest_talent_h1 "><b>最新人才<span class="index_Emergency_span">New talent</span></b><a href="<?php echo smarty_function_url(array('m' => 'user','url' => "c:search"), $this);?>
" class="index_more" >更多>></a></div>
  <div class="Latest_talent_cont">
    <ul class="Latest_talent_list">
      <li class="Latest_talent_list_a">姓名</li>
      <li class="Latest_talent_list_b">年龄</li>
      <li class="Latest_talent_list_c">学历</li>
      <li class="Latest_talent_list_d">求职意向</li>
    </ul>
    <ul class="Latest_talent_list">
      <li class="Latest_talent_list_a">姓名</li>
      <li class="Latest_talent_list_b">年龄</li>
      <li class="Latest_talent_list_c">学历</li>
      <li class="Latest_talent_list_d">求职意向</li>
    </ul>
    <?php $_from = $this->_tpl_vars['ulist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ulist']):
?>
    <ul class="Latest_talent_list Latest_talent_list2">
      <li class="Latest_talent_list_a"><img width="14" height="14" class="png" src="<?php echo $this->_tpl_vars['style']; ?>
/images/<?php if ($this->_tpl_vars['userclass_name'][$this->_tpl_vars['ulist']['sex']] == '女'): ?>yun_girl.png<?php else: ?>yun_boy.png<?php endif; ?>"/><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['ulist']['id'])), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['ulist']['username_n']; ?>
</a></li>
      <li class="Latest_talent_list_b"><?php if ($this->_tpl_vars['ulist']['age'] == 0): ?>保密<?php else: ?><?php echo $this->_tpl_vars['ulist']['age']; ?>
<?php endif; ?></li>
      <li class="Latest_talent_list_c"><?php echo $this->_tpl_vars['ulist']['edu_n']; ?>
</li>
      <li class="Latest_talent_list_d"><?php echo $this->_tpl_vars['ulist']['job_post_n']; ?>
</li>
    </ul>
    <?php endforeach; endif; unset($_from); ?></div>
  <div class="right_banner"> <?php $_from = $this->_tpl_vars['adlist_user_r']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_user_r']):
?>
    <?php echo $this->_tpl_vars['adlist_user_r']['html']; ?>
 
    <?php endforeach; endif; unset($_from); ?> </div></div>
  <div class="clear"></div>
  <div class="w980">
    <div class="index_news">
      <div class="index_News_h1"> <b>职场资讯<span class="index_Emergency_span">Workplace information</span></b> <u> <?php $_from = $this->_tpl_vars['arcgroupright']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['arcgroupright']):
?>
        <?php if ($this->_tpl_vars['key'] > 0): ?>|<?php endif; ?> <a  href="<?php echo $this->_tpl_vars['arcgroupright']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arcgroupright']['name']; ?>
</a> <?php endforeach; endif; unset($_from); ?> <a <?php if ($this->_tpl_vars['config']['sy_news_rewrite'] == '2'): ?>href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/news.html"<?php else: ?>href="<?php echo smarty_function_url(array('m' => 'news'), $this);?>
"<?php endif; ?>target="_blank">更多>></a> </u> </div>
     
      <?php $_from = $this->_tpl_vars['indexnews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['indexnews']):
?>
      <div class="index_news_content"> <?php if ($this->_tpl_vars['indexnews']['pic']): ?>
        <dl class="index_news_top">
          <dt> <a href="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['url']; ?>
"> <img width="100" height="50" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['indexnews']['pic']['0']['newsphoto']; ?>
"> </a> </dt>
          <dd> <strong><a href="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['url']; ?>
"><?php echo $this->_tpl_vars['indexnews']['pic']['0']['title']; ?>
</a></strong> <span><?php echo $this->_tpl_vars['indexnews']['pic']['0']['description']; ?>
...</span> <a href="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['url']; ?>
" target="_blank">[详细]</a> </dd>
        </dl>
        <?php endif; ?>
        <div class="index_news_right">
          <ul>
            <?php $_from = $this->_tpl_vars['indexnews']['arclist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arcitem']):
?>
            <li>[<?php echo $this->_tpl_vars['arcitem']['name']; ?>
]<a href="<?php echo $this->_tpl_vars['arcitem']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arcitem']['title']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?> </div>
    <div class="index_link">
    <div class="index_Emergency_job">
      <div class="Latest_talent_h1 "><b >友情链接<span class="index_Emergency_span">Links</span></b><?php if ($this->_tpl_vars['config']['sy_linksq'] == 0): ?> <a href="<?php echo smarty_function_url(array('m' => 'friend'), $this);?>
" class="index_more">申请链接</a><?php endif; ?></div>
 
      <div class="index_link_cont">
       
        <div class="index_link_list">
          <div class="index_link_list_img"> <?php $_from = $this->_tpl_vars['linklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist']):
?> <a href="<?php echo $this->_tpl_vars['linklist']['link_url']; ?>
"><img src="<?php echo $this->_tpl_vars['linklist']['pic']; ?>
" width="130" height="35" alt="<?php echo $this->_tpl_vars['linklist']['link_name']; ?>
"/></a> <?php endforeach; endif; unset($_from); ?> </div>
          <div class="index_link_list_name"> <?php $_from = $this->_tpl_vars['linklist2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist2']):
?> <a href="<?php echo $this->_tpl_vars['linklist2']['link_url']; ?>
"> <?php echo $this->_tpl_vars['linklist2']['link_name']; ?>
</a><?php endforeach; endif; unset($_from); ?> </div>
        </div>
      </div>
    </div>    </div>
    <div id="bg"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/backtop.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id='footer_ad'> 
	<?php $_from = $this->_tpl_vars['footer_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['footer_ad']):
?>
      <div class="footer_ban" id="">
        <div class="baner_footer" id='bottom_ad_fl'> <span class="ban_close" onclick="colse_bottom()">关闭</span> 
			<?php echo $this->_tpl_vars['footer_ad']['html']; ?>
 
        </div>
        <input type="hidden" value='1' id='bottom_ad_is_show'/>
      </div>
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['left_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['left_ad']):
?>
      <div class="duilian <?php if ($this->_tpl_vars['key'] == '0'): ?>duilian_left<?php else: ?>duilian_right<?php endif; ?>">
        <div class="duilian_con"><?php echo $this->_tpl_vars['left_ad']['html']; ?>
</div>
        <div class="close_container">
          <div class="btn_close"></div>
        </div>
      </div> 
      <?php endforeach; endif; unset($_from); ?> 
	  </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/public_search/index_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>