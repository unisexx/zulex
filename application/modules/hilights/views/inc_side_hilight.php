<script type="text/javascript" src="media/js/jquery.corner.js" ></script>
<style type="text/css">
#hightlight2-wrap{float:right; margin:10px 35px 0 0;}
#hightlight2-wrap .content{width:275px; height:67px; background:#96b3ce; padding:0 10px; line-height:16.5px;}
#hightlight2-wrap .content ul li{list-style-image:url("themes/zulex/images/blue_dot.jpg");}
#hightlight2-wrap .title a{color:#A60000; font-weight:bold; font-size:11px;}
#hightlight2-wrap .detail a{color:#012755;}
/*--------------Code CSS--------------*/
*.rtop *,.rbottom *{display:block;height: 1px; overflow: hidden;}
.rbottom{margin:0 0 10px 0;}
.r1,.r2,.r3,.r4,.r5,.r6,{height:1px; font-size:0;}
.r7,.r8{height:2px; font-size:0;}
.r1{margin:0 10px;}
.r2{margin:0 8px;}
.r3{margin:0 6px;}
.r4{margin:0 5px;}
.r5{margin:0 4px;}
.r6{margin:0 3px;}
.r7{margin:0 2px;}
.r8{margin:0 1px;}

.r1{background-color:#96B3CE;}
.r2,.r3{
background-color:#96B3CE;
border-left:2px solid #96B3CE;
border-right:2px solid #96B3CE;
}
.r4,.r5,.r6,.r7,.r8{
background-color:#96B3CE;
border-left:1px solid #96B3CE;
border-right:1px solid #96B3CE;
}
.content{
background:#96B3CE;
border-left:1px solid #96B3CE;
border-right:1px solid #96B3CE;
border-width:0 1px;
margin:0;
padding: 0 20px;
display:block;
overflow:hidden;
}
</style>
<script type="text/javascript">
	$(function(){
		$(".corner").corner("5px");
	});
</script>
<div id="hightlight2-wrap">
	<?php foreach($side_hilights as $side_hilight):?>
		<div class="rtop">
		<b class="r1"></b>
		<b class="r2"></b>
		<b class="r3"></b>
		<b class="r4"></b>
		<b class="r5"></b>
		<b class="r6"></b>
		<b class="r7"></b>
		<b class="r8"></b>
		</div>
		
		<div class="content">
        		<div style="float:left; margin:0 18px 0 0;">
                    <a href="<?php echo $side_hilight->url?>"><img src="uploads/side_hilights/<?php echo $side_hilight->image?>" width="96" height="53"></a>
                    <div align="center" class="title"><a href="<?php echo $side_hilight->url?>"><?php echo $side_hilight->title?></a></div>
                </div>
				<div class="detail"><a href="<?php echo $side_hilight->url?>"><?php echo lang_decode($side_hilight->detail)?></a></div>
		</div>
		
		<div class="rbottom">
		<b class="r8"></b>
		<b class="r7"></b>
		<b class="r6"></b>
		<b class="r5"></b>
		<b class="r4"></b>
		<b class="r3"></b>
		<b class="r2"></b>
		<b class="r1"></b>
		</div>
	<?php endforeach;?>
</div> 