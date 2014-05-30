<div id="recommend">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > แนะนำสินค้า
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>ชุดแนะนำสินค้า</h1>
		</div>
		
        <?php foreach($whats as $key=>$what):?>	
        	
        	<?php 
				//------------------------- control center -------------------------
				$select_antenna = explode(",", $what->antenna);
				$select_rear_view_camera = explode(",", $what->rear_view_camera);
				$select_amplifier_subbox = explode(",", $what->amplifier_subbox);
				$select_speaker = explode(",", $what->speaker);
				$select_eq = explode(",", $what->eq);
				$select_head_rest_monitor = explode(",", $what->head_rest_monitor);
				$select_roof_mount_monitor = explode(",", $what->roof_mount_monitor);
				
				$headunit = new product($what->headunit);
				$antenna = new product($select_antenna[0]);
				$rear_view_camera = new product($select_rear_view_camera[0]);
				$amplifier_subbox = new product($select_amplifier_subbox[0]);
				$speaker = new product($select_speaker[0]);
				$eq = new product($select_eq[0]);
				$head_rest_monitor = new product($select_head_rest_monitor[0]);
				$roof_mount_monitor = new product($select_roof_mount_monitor[0]);
				//---------------------- end control center ----------------------
			 ?>
        	<div class="blog">
            	<h3>ชุดที่ <?php echo $key+1?></h3>
                <a class="set-select" href="whats/customize/<?php echo $what->id?>"><img src="themes/zulex/images/select_btn.png" /></a>
                <div class="product-set corner">
					<?php if(isset($headunit->title)):?>
                	<div class="box" align="center">
                    	<h4>Head Unit</h4>
                        <img src="uploads/products/<?php echo $headunit->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($headunit->title)?></h2>
                    </div>
                    <?php endif;?>
                    
                    <?php if(isset($antenna->title)):?>
                    <div class="box" align="center">
						<h4>TV-Antenna</h4>
                        <img src="uploads/products/<?php echo $antenna->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($antenna->title)?></h2>
                    </div>
                    <?php endif;?>
                    
                    <?php if(isset($rear_view_camera->title)):?>
                    <div class="box" align="center">
						<h4>Rear View Camera</h4>
                        <img src="uploads/products/<?php echo $rear_view_camera->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($rear_view_camera->title)?></h2>
                    </div>
                    <?php endif;?>
                    
                    <?php if(isset($amplifier_subbox->title)):?>
                    <div class="box" align="center">
						<h4>Amplifier/SUB BOX</h4>
                        <img src="uploads/products/<?php echo $amplifier_subbox->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($amplifier_subbox->title)?></h2>
                    </div>
                    <?php endif;?>
                    
                    <?php if(isset($speaker->title)):?>
					<div class="box" align="center">
						<h4>Speaker</h4>
                        <img src="uploads/products/<?php echo $speaker->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($speaker->title)?></h2>
                    </div>
                    <?php endif;?>
                    
					<?php if(isset($eq->title)):?>
					<div class="box" align="center">
						<h4>EQ</h4>
                        <img src="uploads/products/<?php echo $eq->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($eq->title)?></h2>
                    </div>
                    <?php endif;?>
                    
                    <?php if(isset($head_rest_monitor->title)):?>
					<div class="box" align="center">
						<h4>Head Rest Monitor</h4>
                        <img src="uploads/products/<?php echo $head_rest_monitor->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($head_rest_monitor->title)?></h2>
                    </div>
                    <?php endif;?>
                    
                    <?php if(isset($roof_mount_monitor->title)):?>
					<div class="box" align="center">
						<h4>Roof mount Monitor</h4>
                        <img src="uploads/products/<?php echo $roof_mount_monitor->image?>" width="85" height="50" />
                    	<h2><?php echo lang_decode($roof_mount_monitor->title)?></h2>
                    </div>
                    <?php endif;?>
                    <br clear="all" />
                </div>
            </div>
        <?php endforeach;?>
	</div>
</div>