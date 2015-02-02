<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:54
         compiled from friend/default/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'furl', 'friend/default/index.htm', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['friendstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="Personals_content">
<div class="py_cont">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['friendstyle'])."/left2.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/data/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/data/kindeditor/lang/zh_CN.js"></script>
<script language="javascript">
var editor;
KindEditor.ready(function(K) {
	editor = K.create('#source', {
		resizeType : 1,
		allowPreviewEmoticons : false,
		allowImageUpload : true,
		items : ['emoticons', 'image'],
		themeType : 'friend'//default

	});
});
</script>

<div class="Personals_cont">
  <div class="talk-box" style="position:relative">
    <div class="box-body">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>    
    <form name="myform" target="supportiframe" id='myform' action="<?php echo smarty_function_furl(array('url' => "c:addstate"), $this);?>
" method="post"  encType="multipart/form-data" onsubmit="return submitstate();">
        <textarea id="source" class="Personals-textarea" name="content" placeholder='你正在干嘛？'></textarea>
        <input type="submit" name="submit" value="发表" class="friend_input-button"/>
    </form>
    </div>
	<div class="receive_msg_img" style="display:none;" id="receive_msg_img">
	</div>
  </div>

  <div class="clear"></div>
  <div class="feed-new-title">
    <div class="fliter-box">好友新鲜事</div>
  </div>
  <div class="Personals_cont_list" id="addcontent">
  <?php if ($this->_tpl_vars['list']): ?>
  <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
    <!--循环部分-->
    <div class="Personals_cont_dy">
      <div class="Personals_cont_tx"><img src="<?php echo $this->_tpl_vars['list']['pic']; ?>
" width="50" height="50" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);"/></div>
      <div class="Personals_cont_dy_r">
        <div class="Personals_cont_dy_name">
			<a href=""><?php echo $this->_tpl_vars['list']['nickname']; ?>
</a></div>
        <div class="Personals_cont_dy_ss"><?php echo $this->_tpl_vars['list']['content']; ?>
</div>
		<?php if ($this->_tpl_vars['list']['msg_pic']): ?>
		<div class="Personals_msg_pic"><img src="<?php echo $this->_tpl_vars['list']['msg_pic']; ?>
"></div>
		<?php endif; ?>
        <div class="Personals_cont_dy_cz"><span><?php echo $this->_tpl_vars['list']['ctime']; ?>
</span></div>
        <!--评论循环部分-->
        <div id="commentlist_<?php echo $this->_tpl_vars['list']['id']; ?>
"> <?php if ($this->_tpl_vars['list']['reply']): ?>
          <div class="Personals_cont_dy_pl">
            <div class="Personals_cont_dy_pl_tx"><img onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);" src="<?php echo $this->_tpl_vars['list']['replypic']; ?>
" width="30" height="30"/></div>
            <div class="Personals_cont_dy_pl_user">
              <div class="Personals_cont_dy_pl_user_n"><a href="<?php echo $this->_tpl_vars['list']['url']; ?>
"><?php echo $this->_tpl_vars['list']['replyname']; ?>
</a>: <?php echo $this->_tpl_vars['list']['reply']; ?>
</div>
              <div class="Personals_cont_dy_pl_user_m"><?php echo $this->_tpl_vars['list']['replyctime']; ?>
</div>
            </div>
          </div>
          <?php endif; ?> </div>
        <!--评论循环部分 end-->
        <!--更多评论 start-->
        <?php if ($this->_tpl_vars['list']['commentnum'] > 0): ?>
        <div class="Personals_cont_dy_pl">
          <div class="Personals_cont_dy_pl_user_2" id="onlyreply<?php echo $this->_tpl_vars['list']['id']; ?>
"> <span class="morereply" onclick="morereply(<?php echo $this->_tpl_vars['list']['id']; ?>
,<?php echo $this->_tpl_vars['list']['commentnum']; ?>
,2);">还有<?php echo $this->_tpl_vars['list']['commentnum']; ?>
条回复</span> </div>
        </div>
        <?php endif; ?>
        <!--更多评论 end-->
        <!--评论循环部分 我也说一句-->
        <div class="Personals_cont_dy_pl" id="comment<?php echo $this->_tpl_vars['list']['id']; ?>
">
          <div class="Personals_cont_dy_pl_user_1">
            <div class="pf-bd textinput">
              <input type="text" onfocus="clicktext(<?php echo $this->_tpl_vars['list']['id']; ?>
);" class="pl_textarea_1" value="评论..."/>
            </div>
          </div>
        </div>
        <div class="Personals_cont_dy_pl" style="display:none;" id="comment_<?php echo $this->_tpl_vars['list']['id']; ?>
">
          <div class="Personals_cont_dy_pl_tx"><img src="<?php echo $this->_tpl_vars['member']['pic']; ?>
" width="30" height="30" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_icon']; ?>
',2);"/></div>
          <div class="Personals_cont_dy_pl_user">
            <div class="pf-bd textinput">
              <textarea class="pl_textarea" id="reply_<?php echo $this->_tpl_vars['list']['id']; ?>
" onblur="onblurtext(<?php echo $this->_tpl_vars['list']['id']; ?>
);" onKeyUp="checkLength('66',<?php echo $this->_tpl_vars['list']['id']; ?>
);" maxlength="88"></textarea>
            </div>
            <div class="Personals_fb"><span>已输入 <span id="colornum_<?php echo $this->_tpl_vars['list']['id']; ?>
">0</span>/66字.</span><a href="javascript:;" onclick="submitreply(<?php echo $this->_tpl_vars['list']['id']; ?>
,<?php echo $this->_tpl_vars['list']['uid']; ?>
);" style="color:#ffffff;" title="回复">回复</a></div>
          </div>
        </div>
        <!--评论循环部分 我也说一句 end-->
      </div>
    </div>
    <!--循环部分 end-->
    <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>
    <div style="text-align:center;">您的好友还没有任何动态！</div>
    <?php endif; ?>
    </div>
  <div id="loadover" style="text-align:center; display:none"><img src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/loading.gif"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['friendstyle'])."/right.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div></div>
<script>
	var page=1;
    $(window).scroll(function(){
        var pageNum = $('#pageNum').val();
        // 当滚动到最底部以上100像素时， 加载新内容
        if ($(document).height() - $(this).scrollTop() - $(this).height()==0) {
			$('#loadover').show();
            page=page+1;
            if(page>pageNum){
                $('#loadover').html('');
				return false;
            }else{
                loadmore(page,pageNum);
				return false;
            }
        }
    });

//发布动态
function loadmore(page){
	$.ajax({
		type: "POST",
        global: false,// 禁用全局Ajax事件.
        url :weburl+"/index.php?m=ajax&c=statelist",
		data:{page:page},
		success :function(data){
			var data=eval("("+data+")");
			var content = "";
			var reply = "";
			var comment = "";
			for (var one in data)
			{
				if(data[one].reply){
					reply = '<div class="Personals_cont_dy_pl"><div class="Personals_cont_dy_pl_tx"><img src="'+data[one].replypic+'" width="30" height="30"></div><div class="Personals_cont_dy_pl_user"><div class="Personals_cont_dy_pl_user_n"><a href="'+data[one].url+'">'+data[one].replyname+'</a>: '+data[one].reply+'</div><div class="Personals_cont_dy_pl_user_m">'+data[one].replyctime+'</div></div></div>';
				}else{
					reply = '';
				}
				if(data[one].commentnum>0){
					comment = '<div class="Personals_cont_dy_pl"><div class="Personals_cont_dy_pl_user_2" id="onlyreply'+data[one].id+'"><span class="morereply" onclick="morereply('+data[one].id+','+data[one].commentnum+',2);">还有'+data[one].commentnum+'条回复</span></div></div>';
				}else{
					comment = '';
				}

				content += '<div class="Personals_cont_dy"><div class="Personals_cont_tx"><img src="'+data[one].pic+'" width="50" height="50"/></div><div class="Personals_cont_dy_r"><div class="Personals_cont_dy_name"><a href="'+data[one].nickurl+'">'+data[one].nickname+'</a></div><div class="Personals_cont_dy_ss">'+data[one].content+'</div><div class="Personals_cont_dy_cz"><span>'+data[one].ctime+'</span></div><div id="commentlist_'+data[one].id+'">'+reply+'</div>'+comment+'<div class="Personals_cont_dy_pl" id="comment'+data[one].id+'"><div class="Personals_cont_dy_pl_user_1"><div class="pf-bd textinput"><input type="text" onfocus="clicktext('+data[one].id+');" class="pl_textarea_1" value="评论..."/></div></div></div><div class="Personals_cont_dy_pl" style="display:none;" id="comment_'+data[one].id+'"><div class="Personals_cont_dy_pl_tx"><img src="<?php echo $this->_tpl_vars['member']['pic']; ?>
" width="30" height="30"/></div><div class="Personals_cont_dy_pl_user"><div class="pf-bd textinput"><textarea class="pl_textarea" id="reply_'+data[one].id+'" onblur="onblurtext('+data[one].id+');" onKeyUp="checkLength(\'66\','+data[one].id+');" maxlength="66"></textarea></div><div class="Personals_fb"><span>已输入 <span id="colornum_'+data[one].id+'">0</span>/66字.</span><a href="javascript:;" onclick="submitreply('+data[one].id+');" style="color:#ffffff;">回复</a></div></div></div></div></div>';

			}
			$("#addcontent").append(content);
		}
	});
}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['friendstyle'])."/backtop.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" id="pageNum" value="<?php echo $this->_tpl_vars['pages']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['friendstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>