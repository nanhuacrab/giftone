<?php /* Smarty version 2.6.26, created on 2015-01-29 21:29:27
         compiled from ../template/member/user/ul_nav.htm */ ?>
<div class="tabmenubox01 mt9">
 <ul>
  <li <?php if ($_GET['c'] == 'job'): ?>class="cur"<?php endif; ?>><a href="index.php?c=job" title="职位管理" >申请的职位</a></li>
  <li <?php if ($_GET['c'] == 'favorite'): ?>class="cur"<?php endif; ?>><a href="index.php?c=favorite">收藏的职位</a></li>
  <li <?php if ($_GET['c'] == 'blacklist'): ?>class="cur"<?php endif; ?>> <a href="index.php?c=blacklist">企业黑名单</a> </li>
  <li <?php if ($_GET['c'] == 'atn'): ?>class="cur"<?php endif; ?>> <a href="index.php?c=atn">关注企业</a> </li>
</ul>
</div>