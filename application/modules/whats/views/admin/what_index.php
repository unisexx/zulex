<style type="text/css">
h2, h3, h4, h5, h6{font-size: 100%; font-weight: normal;}
div.product-set div.box{float:left; border-right:1px dashed #0080C0; padding:1px;}
</style>
<h1><a href="whats/admin/categories/index/">What Fit in My Car</a> - <a href="whats/admin/carversions/index/<?php echo $carversion->category_id?>"><?php echo $carversion->version?></a></h1>
<?php echo $whats->pagination()?>
<form id="order" action="whats/admin/whats/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ชุดสินค้า</th>
		<th width="85"><?php echo anchor('whats/admin/whats/form/'.$carversion->id,lang('btn_add'),'class="btn"')?></th>
	</tr>
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
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $what->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $what->id ?>"></td>
		<td>
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
        </td>
		<td>
			<a class="btn" href="whats/admin/whats/form/<?php echo $carversion->id?>/<?php echo $what->id?>" >แก้ไข</a>
			<a class="btn" href="whats/admin/whats/delete/<?php echo $what->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach;?>
	
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $whats->pagination()?>