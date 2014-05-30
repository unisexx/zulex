<script type="text/javascript" src="themes/zulex/js/jquery.jshowoff.min.js"></script>
<link rel="stylesheet" href="themes/zulex/css/jshowoff.css" type="text/css" media="screen, projection" />
<style type="text/css">
p.jshowoff-controls {display:none;}
#features, #slidingFeatures, #labelFeatures, #basicFeatures{height:385px; width:628px;}
body .jshowoff p.jshowoff-slidelinks {left:5px;}
.jshowoff-slidelinks a, .jshowoff-controls a{border:1px solid #fff;}
body .jshowoff div {height: 340px; width: 600px;}
#features{padding:16px 0 0 27px;}
#features img{
	background: transparent;
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)"; /* IE8 */   
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);   /* IE6 & 7 */      
	zoom: 1;
}
</style>

			<div id="features">
				<?php foreach($hilights as $hilight): ?>
					<div>
						<a href="<?php echo $hilight->url?>"><img src="uploads/hilights/<?php echo $hilight->image ?>" width="600" height="340"/></a>
					</div>
				<?php endforeach; ?>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){ $('#features').jshowoff(); });
			</script>