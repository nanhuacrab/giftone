<?php /* Smarty version 2.6.26, created on 2015-01-29 18:29:55
         compiled from ../template/member/user/left.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', '../template/member/user/left.htm', 43, false),)), $this); ?>
<div class="left_sidebar">
<div class="left_sidebar_h2 left_sidebar_h1_no"><span class="left_sidebar_h2_span"><a  href="index.php">我的求职主页</a></span></div>
<div class="left_sidebar_h1 left_sidebar_h1_no"><span class="left_sidebar_h1_span">我的简历</span></div>
<ul class="left_sidebar_nav">
<li><a href="index.php?c=resume" >我的简历  </a></li> 
<?php if ($this->_tpl_vars['config']['user_number'] > $this->_tpl_vars['myresumenum']): ?>
<li><a href="index.php?c=expect&add=<?php echo $this->_tpl_vars['uid']; ?>
">创建简历</a></li> 
<?php else: ?>
<li><a href="javascript:void(0)" onclick="layer.msg('你的简历数已经达到系统设置的简历数了',2,8);return false;">创建简历</a></li> 
<?php endif; ?>       
<li><a href="index.php?c=look">简历被浏览 </a></li>     
<li><a href="index.php?c=look_job">浏览的职位 </a></li>  
</ul>
<div class="left_sidebar_h1"><span class="left_sidebar_h1_span left_sidebar_h1_span_icon2">应聘管理</span></div>
<ul class="left_sidebar_nav">
<li><a href="index.php?c=msg">邀请面试</a></li>        
<li><a href="index.php?c=job">申请记录</a></li> 
<li><a href="index.php?c=commsg">求职咨询 </a></li>           
<li><a href="index.php?c=favorite">收藏记录</a></li>  
<li><a href="index.php?c=atn">关注企业</a></li> 
</ul>
<div class="left_sidebar_h1"><span class="left_sidebar_h1_span left_sidebar_h1_span_icon3">求职工具</span></div>
<ul class="left_sidebar_nav">
<li><a href="index.php?c=blacklist">公司黑名单</a></li>            
<li><a href="index.php?c=privacy">隐私设置</a></li>      
<li><a href="index.php?c=finder">职位搜索器</a></li>       
<li><a href="index.php?c=log">操作日志</a></li>                 
</ul>
<div class="left_sidebar_h1"><span class="left_sidebar_h1_span left_sidebar_h1_span_icon4">问答管理</span></div>
<ul class="left_sidebar_nav">
<li><a href="index.php?c=my_question&type=0">我的提问 </a></li>        
<li><a href="index.php?c=my_question&type=1">我的回答</a></li>    
<li><a href="index.php?c=my_question&type=2">我的评论</a></li>          
<li><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/">好友管理</a></li>    
</ul>
<div class="left_sidebar_h1"><span class="left_sidebar_h1_span left_sidebar_h1_span_icon5">账户信息</span></div>
<ul class="left_sidebar_nav">
<li><a href="index.php?c=info">基本信息</a></li>             
<li><a href="index.php?c=passwd">修改密码</a></li>                
<li><a href="index.php?c=binding">账户绑定</a></li>        
<li><a href="index.php?c=message">留言反馈</a></li>              
<li><a href="index.php?c=sysnews">系统消息</a></li>    
<li><a href="<?php echo smarty_function_url(array('m' => 'invitereg'), $this);?>
" target='_blank'>邀请注册</a></li>            
<li><a href="javascript:void(0)" onClick="logout('index.php?act=logout')">退出登录</a></li>            
</ul>
</div>