<div id="rs">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > แนะนำสินค้า
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>ชุดแนะนำสินค้า</h1>
		</div>
        
		<div align="right" style="margin:0 31px 10px 0;">
        	<a href="" onClick="history.go(-1); return false;"><img src="themes/zulex/images/back_btn.png"></a>
        	<a href="" onClick="window.print(); return false;"><img src="themes/zulex/images/print_btn.png"></a>
        </div>
        
        <?php if(isset($headunit->id)):?>
       <div class="blog">
			<div class="header"><h1>Head Unit</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $headunit->id?>"><img src="uploads/products/<?php echo $headunit->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $headunit->id?>"><?php echo lang_decode($headunit->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($headunit->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($antenna->id)):?>
       <div class="blog">
			<div class="header"><h1>TV-Antenna</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $antenna->id?>"><img src="uploads/products/<?php echo $antenna->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $headunit->id?>"><?php echo lang_decode($antenna->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($antenna->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($rearview->id)):?>
       <div class="blog">
			<div class="header"><h1>Rear View Camera</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $rearview->id?>"><img src="uploads/products/<?php echo $rearview->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $rearview->id?>"><?php echo lang_decode($rearview->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($rearview->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($amplifier->id)):?>
       <div class="blog">
			<div class="header"><h1>Amplifier/SUB BOX</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $amplifier->id?>"><img src="uploads/products/<?php echo $amplifier->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $amplifier->id?>"><?php echo lang_decode($amplifier->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($amplifier->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($speaker->id)):?>
       <div class="blog">
			<div class="header"><h1>Speaker</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $speaker->id?>"><img src="uploads/products/<?php echo $speaker->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $speaker->id?>"><?php echo lang_decode($speaker->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($speaker->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($eq->id)):?>
       <div class="blog">
			<div class="header"><h1>EQ</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $eq->id?>"><img src="uploads/products/<?php echo $eq->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $eq->id?>"><?php echo lang_decode($eq->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($eq->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($headrest->id)):?>
       <div class="blog">
			<div class="header"><h1>Head Rest Monitor</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $headrest->id?>"><img src="uploads/products/<?php echo $headrest->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $headrest->id?>"><?php echo lang_decode($headrest->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($headrest->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
       <?php if(isset($roofmount->id)):?>
       <div class="blog">
			<div class="header"><h1>Roof Mount Monitor</h1></div>
            <div class="body">
                <a href="products/product_detail/<?php echo $roofmount->id?>"><img src="uploads/products/<?php echo $roofmount->image?>" width="195" height="110"></a>
                <h2><a href="products/product_detail/<?php echo $roofmount->id?>"><?php echo lang_decode($roofmount->title)?></a></h2>
                <div class="detail"><?php echo lang_decode($roofmount->detail1)?></div>
                <br clear="all">
			</div>
       </div>
       <?php endif;?>
       
	</div>
</div>