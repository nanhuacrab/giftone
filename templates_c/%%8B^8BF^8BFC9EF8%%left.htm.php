<?php /* Smarty version 2.6.26, created on 2015-01-29 18:34:10
         compiled from ../template/member/com/left.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', '../template/member/com/left.htm', 16, false),)), $this); ?>
<!--link href="<?php echo $this->_tpl_vars['comstyle']; ?>
/images/user-n2012.css" rel="stylesheet" type="text/css" /-->
<div class=left_box>
  <?php if ($this->_tpl_vars['js_def'] == 1): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon"></i><span>���ò���</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'info'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=info" title="��ҵ��Ϣ">��ҵ��Ϣ</a></span> </li>
    <li <?php if ($_GET['c'] == 'jobadd'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=jobadd" title="����ְλ">����ְλ</a></span> </li>
    <li <?php if ($_GET['c'] == 'hr'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=hr" title="�˲Ź���">�˲Ź���</a></span> </li>
    <li <?php if ($_GET['w'] == '1'): ?> class="style01 left_nav_hover"<?php else: ?>class="style04"<?php endif; ?>><span><a href="index.php?c=job&w=1" title="����ְλ">����ְλ</a></span> </li>
    <li <?php if ($_GET['c'] == 'hr'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=hr" title="����ְλ�˲�">����ְλ�˲�</a></span> </li>
    <li <?php if ($_GET['c'] == 'finder'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=finder" title="����������">����������</a></span> </li>
    <li class=style05><span><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/" title="�ҵ�����Ȧ">�ҵ�����Ȧ</a></span></li>
    <li <?php if ($_GET['c'] == 'vs'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=vs" title="�޸�����">�޸�����</a></span> </li>
    <li class=style06><span><a href="<?php echo smarty_function_url(array('m' => 'invitereg'), $this);?>
" target='_blank'>�������ע��</a></span></li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 2): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon"></i><span>��ҵ��Ϣ����</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'info'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=info" title="��ҵ��Ϣ">��ҵ��Ϣ</a></span> </li>
    <li <?php if ($_GET['c'] == 'map'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=map" title="��ҵ��ͼ">��ҵ��ͼ</a></span> </li>
    <li <?php if ($_GET['c'] == 'news'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=news" title="��ҵ����">��ҵ����</a></span> </li>
    <li <?php if ($_GET['c'] == 'product'): ?> class="style01 left_nav_hover"<?php else: ?>class="style04"<?php endif; ?>><span><a href="index.php?c=product" title="��ҵ��Ʒ">��ҵ��Ʒ</a></span> </li>
    <li <?php if ($_GET['c'] == 'show'): ?> class="style01 left_nav_hover"<?php else: ?>class="style05"<?php endif; ?>><span><a href="index.php?c=show" title="��ҵ����չʾ">��ҵ����չʾ</a></span> </li>
    <li <?php if ($_GET['c'] == 'banner'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=banner" title="��ҵ���ͼƬ">��ҵ���ͼƬ</a></span> </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 5): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon9"></i><span>�˲Ź���</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'hr'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=hr" title="����ְλ�˲�">����ְλ�˲�</a></span> </li>
    <li <?php if ($_GET['c'] == 'down'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=down" title="�����ؼ����˲�">�����ؼ����˲�</a></span> </li>
    <li <?php if ($_GET['c'] == 'invite'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=invite" title="���������Ե��˲�">���������Ե��˲�</a></span> </li>
    <li <?php if ($_GET['c'] == 'blacklist'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=blacklist" title="����������">����������</a></span> </li>
    <li <?php if ($_GET['c'] == 'talent_pool'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=talent_pool">�˲ſ�</a></span> </li>
     <li <?php if ($_GET['c'] == 'look_resume'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=look_resume">������ļ���</a></span> </li>
     <li <?php if ($_GET['c'] == 'look_job'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=look_job">�������ְλ</a></span> </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 6): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon10"></i><span>ϵͳ����</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'comtpl'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=comtpl" title="ģ������">ģ������</a></span></li>
    <li <?php if ($_GET['c'] == 'vs'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=vs" title="�޸�����">�޸�����</a></span> </li>
    <li <?php if ($_GET['c'] == 'log'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=log">������־</a></span> </li>
        <li <?php if ($_GET['c'] == 'finder'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=finder" title="����������">����������</a></span> </li>
  </ul>

  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 3): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon3"></i><span>ְλ����</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'jobadd'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=jobadd" title="����ְλ" style="color:red; font-weight:bold">����ְλ</a></span> </li>
    <li <?php if ($_GET['c'] == 'search'): ?> class="style01 left_nav_hover"<?php else: ?>class="style07"<?php endif; ?>><span><a href="index.php?c=search"  title="ȫ��ְλ">ȫ��ְλ</a></span></li>
    <li <?php if ($_GET['w'] == '0'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=job&w=0" title="����˵�ְλ">����˵�ְλ</a></span> </li>
    <li <?php if ($_GET['w'] == '3'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=job&w=3" title="δͨ����ְλ">δͨ����ְλ</a></span></li>
    <li <?php if ($_GET['w'] == '1'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=job&w=1" title="�����е�ְλ">�����е�ְλ</a></span></li>
    <li <?php if ($_GET['w'] == '2'): ?> class="style01 left_nav_hover"<?php else: ?>class="style04"<?php endif; ?>><span><a href="index.php?c=job&w=2" title="���ڵ�ְλ">���ڵ�ְλ</a></span></li>

  </ul>

  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 4): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon6"></i><span>�������</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'pay'): ?> class="style01 left_nav_hover"<?php else: ?>class="style05"<?php endif; ?>><span><a href="index.php?c=pay" title="���̳�ֵ"><font color="#FF0000">���̳�ֵ</font></a></span></li>
	<?php if ($this->_tpl_vars['config']['bank'] == 1): ?>
    <li <?php if ($_GET['c'] == 'bank'): ?> class="style01 left_nav_hover"<?php else: ?>class="style12"<?php endif; ?>><span><a href="index.php?c=bank" title="����ת��">����ת��</a></span></li>
	<?php endif; ?>
    <li <?php if ($_GET['c'] == 'paylog' && $_GET['consume'] != 'ok'): ?> class="style01 left_nav_hover"<?php else: ?>class="style08"<?php endif; ?>><span><a href="index.php?c=paylog" title="��ֵ��¼">��ֵ��¼</a></span></li>
    <li <?php if ($_GET['consume'] == 'ok'): ?> class="style01 left_nav_hover"<?php else: ?>class="style09"<?php endif; ?>><span><a href="index.php?c=paylog&consume=ok" title="���Ѽ�¼">���Ѽ�¼</a></span></li>
    <li <?php if ($_GET['c'] == 'reward_list'): ?> class="style01 left_nav_hover"<?php else: ?>class="style12"<?php endif; ?>><span><a href="index.php?c=reward_list">�һ���¼</a></span></li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['js_def'] == 7): ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon8"></i><span>վ���Ź���</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['c'] == 'message'): ?> class="style01 left_nav_hover"<?php else: ?>class="style01"<?php endif; ?>><span><a href="index.php?c=message" title="���Է���">���Է���</a></span> </li>
    <li <?php if ($_GET['c'] == 'seemessage'): ?> class="style01 left_nav_hover"<?php else: ?>class="style02"<?php endif; ?>><span><a href="index.php?c=seemessage" title="�����б�">�����б�</a></span> </li>
    <li <?php if ($_GET['c'] == 'sysnews'): ?> class="style01 left_nav_hover"<?php else: ?>class="style11"<?php endif; ?>><span><a href="index.php?c=sysnews" title="ϵͳ��Ϣ">ϵͳ��Ϣ</a></span> </li>
    <li <?php if ($_GET['c'] == 'msg'): ?> class="style01 left_nav_hover"<?php else: ?>class="style03"<?php endif; ?>><span><a href="index.php?c=msg" title="��ְ��ѯ">��ְ��ѯ</a></span> </li>
    <li <?php if ($_GET['c'] == 'xin'): ?> class="style01 left_nav_hover"<?php else: ?>class="style06"<?php endif; ?>><span><a href="index.php?c=xin">վ����</a></span> </li>
    <li <?php if ($_GET['c'] == 'pl'): ?> class="style01 left_nav_hover"<?php else: ?>class="style05"<?php endif; ?>><span><a href="index.php?c=pl" title="��ҵ����">��ҵ����</a></span> </li>

  </ul>
  <div class=subnav_box_tit_01><i class="left_nav_icon7"></i><span>�ʴ����</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
    <li <?php if ($_GET['type'] == '0'): ?> class="style01 left_nav_hover"<?php else: ?>class="style09"<?php endif; ?>><span><a href="index.php?c=my_question&type=0" title="�ҵ��ʴ�">�ҵ��ʴ�</a></span> </li>
  </ul>
  <?php endif; ?>
  <div class=subnav_box_tit_01><i class="left_nav_icon2"></i><span>��������</span>
    <div class="left_nav_l"></div>
  </div>
  <ul>
      <li <?php if ($_GET['c'] == 'binding'): ?> class="style01 left_nav_hover"<?php else: ?>class="style17"<?php endif; ?>><span><a href="index.php?c=binding">�˻���֤��</a></span> </li>
    <li <?php if ($_GET['c'] == 'right'): ?> class="style01 left_nav_hover"<?php else: ?>class="style15"<?php endif; ?>><span><a href="index.php?c=right" title="�鿴��Ա��Ȩ">�鿴��Ա��Ȩ</a></span> </li>
    <li <?php if ($_GET['c'] == 'zhaopinhui'): ?> class="style01 left_nav_hover"<?php else: ?>class="style17"<?php endif; ?>><span><a href="index.php?c=zhaopinhui" title="��Ƹ��"><font color="#FF0000">��Ƹ��</font></a></span> </li>
  </ul>
</div>