<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>zulex.co.th</title>
<link href="media/css/intropage_slide.css" type="text/css" rel="stylesheet" />
<SCRIPT src="media/js/intropage_slide/yui-base.js" type=text/javascript></SCRIPT>
<SCRIPT src="media/js/intropage_slide/tbra.js" type=text/javascript></SCRIPT>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background:url("uploads/intropages/backgrounds/<?php echo $intropage_config->image;?>") <?php echo $intropage_config->style;?> <?php echo $intropage_config->color?>;
}
#MainPromotionBanner{
	width:584px;
	margin:100px auto 0;
	position:relative;
	box-shadow:0 0 10px #00C6FF, 0 0 10px #00C6FF;
}
.entersite{margin:15px 0 0 0; text-align:center; font-size:20px;}
.entersite a{color:#000;}
-->
</style></head>

<body  oncontextmenu="return false">

	  <DIV id=MainPromotionBanner>
	    <DIV id=SlidePlayer>
	      <ul class="Slides">
			  <?php foreach($intropages as $intropage):?>
                <li><a href="<?php echo $intropage->url?>" target="_self"><img src="uploads/intropages/<?php echo $intropage->image?>" alt="" width="584" height="397" border="0" /></a></li>
              <?php endforeach;?>
		  </ul>
	    </DIV>
    </DIV>
    
    <div class="entersite"><a href="home">เข้าสู่เว็บไซต์ คลิกที่นี่</a></div>

<SCRIPT type="text/javascript"> TB.widget.SimpleSlide.decorate('SlidePlayer', {eventType:'mouse', effect:'scroll'});</SCRIPT>
</body>
</html>