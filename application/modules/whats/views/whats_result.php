<div id="product-more">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="whats">What Fit In My Car</a> > <a href="whats"><?php echo lang_decode($brand->name);?></a> > <a href="whats/form/<?php echo $model->id?>"><?php echo lang_decode($model->name)?></a>
	</div>

	<div align="right" style="margin:5px 30px 5px;"><a href="" onClick="window.print(); return false;"><span class="icon icon-printer"></span> </a><a href="" onClick="window.print(); return false;">พิมพ์หน้านี้</a></div>
    
	<div class="header-bar corner-top">
		<h1>Model : <?php echo $headmodel->title?></h1>
	</div>
	
	<div id="bodywrap-content" class="corner-bottom">
		<div class="scroll-pane">
		
        	<?php if(isset($antenna->id)):?>
			<div class="blog <?php echo alternator('even','odd') ?>">
            	<div style="float:left;">
                	<a href="products/product_detail/<?php echo $antenna->id?>"><img src="uploads/products/<?php echo $antenna->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">Antenna</div>
                </div>
				<h2><a href="products/product_detail/<?php echo $antenna->id?>"><?php echo lang_decode($antenna->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($antenna->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
            
            <?php if(isset($rearview->id)):?>
            <div class="blog <?php echo alternator('even','odd') ?>">
				<div style="float:left;">
                	<a href="products/product_detail/<?php echo $rearview->id?>"><img src="uploads/products/<?php echo $rearview->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">Rear View Camera</div>
                </div>
				<h2><a href="products/product_detail/<?php echo $rearview->id?>"><?php echo lang_decode($rearview->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($rearview->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
            
            <?php if(isset($amplifier->id)):?>
            <div class="blog <?php echo alternator('even','odd') ?>">
				<div style="float:left;">
                	<a href="products/product_detail/<?php echo $amplifier->id?>"><img src="uploads/products/<?php echo $amplifier->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">Amplifier</div>
                </div>
				<h2><a href="products/product_detail/<?php echo $amplifier->id?>"><?php echo lang_decode($amplifier->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($amplifier->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
            
            <?php if(isset($speaker->id)):?>
             <div class="blog <?php echo alternator('even','odd') ?>">
				<div style="float:left;">
                	<a href="products/product_detail/<?php echo $speaker->id?>"><img src="uploads/products/<?php echo $speaker->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">Speaker</div>
                </div> 
				<h2><a href="products/product_detail/<?php echo $speaker->id?>"><?php echo lang_decode($speaker->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($speaker->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
            
            <?php if(isset($eq->id)):?>
            <div class="blog <?php echo alternator('even','odd') ?>">
				<div style="float:left;">
                	<a href="products/product_detail/<?php echo $eq->id?>"><img src="uploads/products/<?php echo $eq->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">EQ (Pre-Amp)</div>
                </div>
				<h2><a href="products/product_detail/<?php echo $eq->id?>"><?php echo lang_decode($eq->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($eq->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
            
            <?php if(isset($headrest->id)):?>
            <div class="blog <?php echo alternator('even','odd') ?>">
				<div style="float:left;">
                	<a href="products/product_detail/<?php echo $headrest->id?>"><img src="uploads/products/<?php echo $headrest->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">Head Rest Monitor</div>
                </div>
				<h2><a href="products/product_detail/<?php echo $headrest->id?>"><?php echo lang_decode($headrest->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($headrest->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
            
			<?php if(isset($roofmount->id)):?>
            <div class="blog <?php echo alternator('even','odd') ?>">
				<div style="float:left;">
                	<a href="products/product_detail/<?php echo $roofmount->id?>"><img src="uploads/products/<?php echo $roofmount->image?>" width="195" height="110" style="float:none;"></a>
                    <div style="text-align:center; color:#fff; font-weight:bold; margin: 0 20px 0 0;">Roof Mount Monitor</div>
                </div>
				<h2><a href="products/product_detail/<?php echo $roofmount->id?>"><?php echo lang_decode($roofmount->title)?></a></h2>
				<div class="detail"><?php echo lang_decode($roofmount->detail1)?></div>
				<br class="clear">
			</div>
            <?php endif;?>
        
		<br class="clear">
		</div>
	</div>
</div>