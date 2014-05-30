<div id="product-detail">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="introduces">Introduce Product</a> > <?php echo lang_decode($introduce->name)?>
	</div>
    
<br class="clear">
	<div id="bodywrap-content">
		<h1><?php echo lang_decode($introduce->name)?></h1>
		<div id="row1">
			<div class="col1">
				<img src="uploads/introduces/<?php echo $introduce->image?>" width="430" height="245">
			</div>
		</div>
		<div id="row2">
			<div class="col2">
				<?php echo $introduce->video?>
			</div>
		</div>
		
		<br class="clear">
        
		<div id="detail-body" class="corner">
        	<div class="content">
            	<h2>จุดเด่นสินค้า</h2>
            	<?php echo lang_decode($introduce->detail)?><br />
                
				<?php echo lang_decode($introduce->detail2)?>
            </div>
			<br class="clear">
		</div>
	</div>
</div>