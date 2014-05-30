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
		<a href="home"><?php echo lang('home')?></a> > <a href="products">Introduce Product</a>
	</div>
	
	<div class="header-bar corner-top">
		<h1>Introduce Product</h1>
	</div>
	
	<div id="bodywrap-content" class="corner-bottom">
		<div class="scroll-pane">
		<?php foreach($introduces as $introduce):?>
			<div class="blog <?php echo alternator('even','odd') ?>">
				<a href="introduces/view/<?php echo $introduce->id?>"><img src="uploads/introduces/<?php echo $introduce->image?>" width="195" height="110"></a>
				<h2><a href="introduces/view/<?php echo $introduce->id?>"><?php echo lang_decode($introduce->name)?></a></h2>
				<div class="detail"><?php echo lang_decode($introduce->detail)?></div>
				<br class="clear">
			</div>
		<?php endforeach;?>
		<br class="clear">
		</div>
	</div>
</div>