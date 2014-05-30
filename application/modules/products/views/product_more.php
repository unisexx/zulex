<style type="text/css">
	/* Styles specific to this particular page */

/* Force the scroll bar to the left hand side of the screen
.jspVerticalBar
{
	left: 0;
}
*/
.scroll-pane
{
	width: 100%;
	height: 700px;
	overflow: auto;
}
</style>
<script type="text/javascript">
	/*
	$(function()
			{
				$('.scroll-pane').jScrollPane(
					{
						//showArrows: true,
						horizontalGutter: 10
					}
				);
			});
	*/
	
	$(document).ready(function() {
		$('.scroll-pane').bind('jsp-arrow-change').jScrollPane();
    });
</script>
<div id="product-more">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="products"><?php echo lang('product')?></a> > 
		<?php if($parent_category->parents == 330):?>
			<a href="products/category/<?php echo $parent_category->parents?>"><?php echo lang_decode($parent_category->name)?></a>
		<?php else:?>
			<?php echo lang_decode($parent_category->name)?>
		<?php endif;?>
		 > <?php echo lang_decode($category->name)?>
	</div>

<style type="text/css">
#horri_menu{padding:20px;}
#horri_menu ul li{float:left; padding:5px 8px; background:#354253; margin:5px 5px 0 0;}
#horri_menu ul li.active{background:#354253;}
#horri_menu ul li.active a{color:#FFCC00;}
</style>
	<div id="horri_menu">
		<ul>
			<?php foreach($parent_category_menus as $parent_category_menu):?>
				<li class="corner
				<?php
					if($parent_category_menu->id == $category->id){
						echo" active";
					}
				?>
				"><a href="products/more/<?php echo $parent_category_menu->id?>"><?php echo lang_decode($parent_category_menu->name)?></a></li>
			<?php endforeach;?>
		</ul>
		<br class="clear">
	</div>
	
	<div class="header-bar corner-top">
		<h1><?php echo lang_decode($category->name)?></h1>
	</div>
	
	<div id="bodywrap-content" class="corner-bottom">
		<div class="scroll-pane">
		<?php foreach($category->product->order_by('orderlist','asc')->get() as $product):?>
			<div class="blog <?php echo alternator('even','odd') ?>">
				<a href="products/product_detail/<?php echo $product->id?>"><img src="uploads/products/<?php echo $product->image?>" width="195" height="110"></a>
				<h2><a href="products/product_detail/<?php echo $product->id?>"><?php echo lang_decode($product->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($product->detail1)?></div>
				<br class="clear">
			</div>
		<?php endforeach;?>
		<br class="clear">
		</div>
	</div>
</div>