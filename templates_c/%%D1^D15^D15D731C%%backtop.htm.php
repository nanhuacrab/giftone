<?php /* Smarty version 2.6.26, created on 2015-01-29 21:32:55
         compiled from E:%5Chtdocs%5Cgift11/template/friend/default/backtop.htm */ ?>
<script>
	function goTopEx(){
        var obj=document.getElementById("goTopBtn");
        function getScrollTop(){
                return document.documentElement.scrollTop;
            }
        function setScrollTop(value){
                document.documentElement.scrollTop=value;
            }    
        window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";}
        obj.onclick=function(){
            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.1);
                    if(getScrollTop()<1)clearInterval(goTop);
                }
        }
    }
</script>
<div class="clear"></div>
<div style="display:none;" id=goTopBtn><img border=0 src="<?php echo $this->_tpl_vars['friend_style']; ?>
/images/lanren_top.png"></div>
<SCRIPT type=text/javascript>goTopEx();</SCRIPT>
<style>
#goTopBtn {
	POSITION: fixed; 
	TEXT-ALIGN: center; 
	LINE-HEIGHT: 71px; 
	WIDTH: 47px; 
	BOTTOM:5px; 
	HEIGHT: 71px; 
	FONT-SIZE: 12px; 
	CURSOR: pointer; 
	RIGHT:  40px; 
	_position: absolute; 
	_right: 40;
	_position:absolute;
	_bottom:auto;
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||15)-(parseInt(this.currentStyle.marginBottom,10)||15)));
}
*html{
background-image:url(about:blank);
background-attachment:fixed;
}
</style>