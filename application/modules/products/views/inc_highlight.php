<script type="text/javascript" src="themes/zulex/js/jquery.jshowoff.min.js"></script>
<link rel="stylesheet" href="themes/zulex/css/jshowoff.css" type="text/css" media="screen, projection" />
<style type="text/css">
p.jshowoff-controls {display:none;}
#features, #slidingFeatures, #labelFeatures, #basicFeatures{height:322px; width:455px;}
body .jshowoff p.jshowoff-slidelinks {left:5px;}
.jshowoff-slidelinks a, .jshowoff-controls a{border:1px solid #fff;}
body .jshowoff div {height: 245px; width: 440px;}
#features{padding:76px 0 0 125px;}
#features img{
	background: transparent;
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)"; /* IE8 */   
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);   /* IE6 & 7 */      
	zoom: 1;
}
</style>

			<div id="features">
				<?php foreach($products as $product): ?>
					<div>
						<a href="products/product_detail/<?php echo $product->id?>"><img src="uploads/products/<?php echo $product->image ?>"/></a>
					</div>
				<?php endforeach; ?>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){ $('#features').jshowoff(); });
			</script>