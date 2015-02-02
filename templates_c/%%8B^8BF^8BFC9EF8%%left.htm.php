<?php /* Smarty version 2.6.26, created on 2015-01-29 18:34:10
         compiled from ../template/member/com/left.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', '../template/member/com/left.htm', 16, false),)), $this); ?>
<!--link href="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/user-n2012.css" rel="stylesheet" type="text/css" /-->
<div class=left_box>
  <?php if ($this->_tpl_vars['js_def'] == 1): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon"></i><span>常用操作</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'info'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=info" title="企业信息">企业信息</a></span> </li>
    <li <?php if ($_GET['c'] == 'jobadd'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=jobadd" title="发布职位">发布职位</a></span> </li>
    <li <?php if ($_GET['c'] == 'hr'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=hr" title="人才管理">人才管理</a></span> </li>
    <li <?php if ($_GET['w'] == '1'): ?> class="style01 left_nav_hover"<?php else: ?>class="style04"<?php endif; ?>><span><a href="index.php?c=job&w=1" title="现有职位">现有职位</a></span> </li>
    <li <?php if ($_GET['c'] == 'hr'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=hr" title="申请职位人才">申请职位人才</a></span> </li>
    <li <?php if ($_GET['c'] == 'finder'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=finder" title="搜索器管理">搜索器管理</a></span> </li>
    <li class=style05><span><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/" title="我的朋友圈">我的朋友圈</a></span></li>
    <li <?php if ($_GET['c'] == 'vs'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=vs" title="修改密码">修改密码</a></span> </li>
    <li class=style06><span><a href="<?php echo smarty_function_url(array('m' => 'invitereg'), $this);?>
" target='_blank'>邀请好友注册</a></span></li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 2): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon"></i><span>企业信息管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'info'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=info" title="企业信息">企业信息</a></span> </li>
    <li <?php if ($_GET['c'] == 'map'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=map" title="企业地图">企业地图</a></span> </li>
    <li <?php if ($_GET['c'] == 'news'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=news" title="企业新闻">企业新闻</a></span> </li>
    <li <?php if ($_GET['c'] == 'product'): ?> class="style01 left_nav_hover"<?php else: ?>class="style04"<?php endif; ?>><span><a href="index.php?c=product" title="企业产品">企业产品</a></span> </li>
    <li <?php if ($_GET['c'] == 'show'): ?> class="style01 left_nav_hover"<?php else: ?>class="style05"<?php endif; ?>><span><a href="index.php?c=show" title="企业环境展示">企业环境展示</a></span> </li>
    <li <?php if ($_GET['c'] == 'banner'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=banner" title="企业横幅图片">企业横幅图片</a></span> </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 5): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon9"></i><span>人才管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'hr'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=hr" title="申请职位人才">申请职位人才</a></span> </li>
    <li <?php if ($_GET['c'] == 'down'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=down" title="已下载简历人才">已下载简历人才</a></span> </li>
    <li <?php if ($_GET['c'] == 'invite'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=invite" title="已邀请面试的人才">已邀请面试的人才</a></span> </li>
    <li <?php if ($_GET['c'] == 'blacklist'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=blacklist" title="黑名单管理">黑名单管理</a></span> </li>
    <li <?php if ($_GET['c'] == 'talent_pool'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=talent_pool">人才库</a></span> </li>
     <li <?php if ($_GET['c'] == 'look_resume'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=look_resume">我浏览的简历</a></span> </li>
     <li <?php if ($_GET['c'] == 'look_job'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=look_job">被浏览的职位</a></span> </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 6): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon10"></i><span>系统设置</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'comtpl'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=comtpl" title="模板设置">模板设置</a></span></li>
    <li <?php if ($_GET['c'] == 'vs'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=vs" title="修改密码">修改密码</a></span> </li>
    <li <?php if ($_GET['c'] == 'log'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=log">操作日志</a></span> </li>
        <li <?php if ($_GET['c'] == 'finder'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=finder" title="搜索器管理">搜索器管理</a></span> </li>
  </ul>

  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 3): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon3"></i><span>职位管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'jobadd'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=jobadd" title="新增职位" style="color:red; font-weight:bold">新增职位</a></span> </li>
    <li <?php if ($_GET['c'] == 'search'): ?> class="style01 left_nav_hover"<?php else: ?>class="style07"<?php endif; ?>><span><a href="index.php?c=search"  title="全部职位">全部职位</a></span></li>
    <li <?php if ($_GET['w'] == '0'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=job&w=0" title="待审核的职位">待审核的职位</a></span> </li>
    <li <?php if ($_GET['w'] == '3'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=job&w=3" title="未通过的职位">未通过的职位</a></span></li>
    <li <?php if ($_GET['w'] == '1'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=job&w=1" title="发布中的职位">发布中的职位</a></span></li>
    <li <?php if ($_GET['w'] == '2'): ?> class="style01 left_nav_hover"<?php else: ?>class="style04"<?php endif; ?>><span><a href="index.php?c=job&w=2" title="过期的职位">过期的职位</a></span></li>

  </ul>

  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 4): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon6"></i><span>财务管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'pay'): ?> class="style01 left_nav_hover"<?php else: ?>class="style05"<?php endif; ?>><span><a href="index.php?c=pay" title="立刻充值"><font color="#FF0000">立刻充值</font></a></span></li>
	<?php if ($this->_tpl_vars['config']['bank'] == 1): ?>
    <li <?php if ($_GET['c'] == 'bank'): ?> class="style01 left_nav_hover"<?php else: ?>class="style12"<?php endif; ?>><span><a href="index.php?c=bank" title="银行转帐">银行转帐</a></span></li>
	<?php endif; ?>
    <li <?php if ($_GET['c'] == 'paylog' && $_GET['consume'] != 'ok'): ?> class="style01 left_nav_hover"<?php else: ?>class="style08"<?php endif; ?>><span><a href="index.php?c=paylog" title="充值记录">充值记录</a></span></li>
    <li <?php if ($_GET['consume'] == 'ok'): ?> class="style01 left_nav_hover"<?php else: ?>class="style09"<?php endif; ?>><span><a href="index.php?c=paylog&consume=ok" title="消费记录">消费记录</a></span></li>
    <li <?php if ($_GET['c'] == 'reward_list'): ?> class="style01 left_nav_hover"<?php else: ?>class="style12"<?php endif; ?>><span><a href="index.php?c=reward_list">兑换记录</a></span></li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 7): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon8"></i><span>站内信管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'message'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=message" title="留言反馈">留言反馈</a></span> </li>
    <li <?php if ($_GET['c'] == 'seemessage'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=seemessage" title="留言列表">留言列表</a></span> </li>
    <li <?php if ($_GET['c'] == 'sysnews'): ?> class="style01 left_nav_hover"<?php else: ?>class="style11"<?php endif; ?>><span><a href="index.php?c=sysnews" title="系统消息">系统消息</a></span> </li>
    <li <?php if ($_GET['c'] == 'msg'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=msg" title="求职咨询">求职咨询</a></span> </li>
    <li <?php if ($_GET['c'] == 'xin'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=xin">站内信</a></span> </li>
    <li <?php if ($_GET['c'] == 'pl'): ?> class="style01 left_nav_hover"<?php else: ?>class="style05"<?php endif; ?>><span><a href="index.php?c=pl" title="企业评论">企业评论</a></span> </li>

  </ul>
  <div class=subnav_box_tit_01><i class="left_nav_icon7"></i><span>问答管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['type'] == '0'): ?> class="style01 left_nav_hover"<?php else: ?>class="style09"<?php endif; ?>><span><a href="index.php?c=my_question&type=0" title="我的问答">我的问答</a></span> </li>
  </ul>
  <?php endif; ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon2"></i><span>其它管理</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
      <li <?php if ($_GET['c'] == 'binding'): ?> class="style01 left_nav_hover"<?php else: ?>class="style17"<?php endif; ?>><span><a href="index.php?c=binding">账户认证绑定</a></span> </li>
    <li <?php if ($_GET['c'] == 'right'): ?> class="style01 left_nav_hover"<?php else: ?>class="style15"<?php endif; ?>><span><a href="index.php?c=right" title="查看会员特权">查看会员特权</a></span> </li>
    <li <?php if ($_GET['c'] == 'zhaopinhui'): ?> class="style01 left_nav_hover"<?php else: ?>class="style17"<?php endif; ?>><span><a href="index.php?c=zhaopinhui" title="招聘会"><font color="#FF0000">招聘会</font></a></span> </li>
  </ul>
</div>