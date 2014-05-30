<script type="text/javascript">
			$(document).ready( function() {
				// Default options
				$("#antenna, #rear_view_camera, #amplifier_subbox, #speaker, #eq, #head_rest_monitor, #roof_mount_monitor").multiSelect();
			});			
</script>
<h1><a href="whats/admin/categories/index/">What Fit in My Car</a> - <a href="whats/admin/whats/index/<?php echo $carversion->id?>"><?php echo $carversion->version?></a></h1>
<form method="post" action="whats/admin/whats/save/<?php echo $what->id?>" enctype="multipart/form-data">
	<table class="form">
		<tr>
			<th>Head Unit Model :</th>
			<td>
				<select id="headunit" name="headunit">
					<option value="">------------ กรุณาเลือก ------------</option>
					<?php foreach($headunits as $headunit):?>
						<option value="<?php echo $headunit->id?>"
                        <?php echo($what->headunit == $headunit->id)?"selected=selected":"";?>
                        ><?php echo lang_decode($headunit->title)?></option>
					<?php endforeach;?>
				</select>
			</td>
		</tr>
        <tr>
        	<th>TV Antenna :</th>
            <td>
            	<?php $select_antennas = explode(",", $what->antenna);?>
				<select id="antenna" name="antenna[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach($category_antennas->product as $antenna):?>
						<option value="<?php echo $antenna->id?>"
						<?php 
							foreach ($select_antennas as $select_antenna){
								if($select_antenna == $antenna->id){
									echo "selected=selected";
								}
							}
						?>
						><?php echo lang_decode($antenna->title)?></option>
					<?php endforeach;?>
				</select>
            </td>
        </tr>
        <tr>
        	<th>Rear View Camera :</th>
            <td>
            	<?php $select_rear_view_cameras = explode(",", $what->rear_view_camera);?>
				<select id="rear_view_camera" name="rear_view_camera[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach($category_rear_view_cameras->product as $rear_view_camera):?>
						<option value="<?php echo $rear_view_camera->id?>"
						<?php 
							foreach ($select_rear_view_cameras as $select_rear_view_camera){
								if($select_rear_view_camera == $rear_view_camera->id){
									echo "selected=selected";
								}
							}
						?>
						><?php echo lang_decode($rear_view_camera->title)?></option>
					<?php endforeach;?>
				</select>
            </td>
        </tr>
        <tr>
        	<th>Amplifier :</th>
            <td>
            	<?php $select_amplifier_subboxes = explode(",", $what->amplifier_subbox);?>
				<select id="amplifier_subbox" name="amplifier_subbox[]" multiple="multiple" size="5">
					<option value=""></option>
                    <?php foreach($category_amplifier_subboxes as $amplifier_category_id):?>
						<?php foreach($amplifier_category_id->product as $amplifier_subboxes):?>
                            <option value="<?php echo $amplifier_subboxes->id?>"
                            <?php 
                                foreach ($select_amplifier_subboxes as $select_amplifier_subbox){
                                    if($select_amplifier_subbox == $amplifier_subboxes->id){
                                        echo "selected=selected";
                                    }
                                }
                            ?>
                            ><?php echo lang_decode($amplifier_subboxes->title)?></option>
                        <?php endforeach;?>
                    <?php endforeach;?>
				</select>
            </td>
        </tr>
        <tr>
        	<th>Speaker :</th>
            <td>
            	<?php $select_speakers = explode(",", $what->speaker);?>
				<select id="speaker" name="speaker[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach($category_speakers as $speaker_category_id):?>
						<?php foreach($speaker_category_id->product as $speaker):?>
                            
                            <option value="<?php echo $speaker->id?>"
                            <?php 
                                foreach ($select_speakers as $select_speaker){
                                    if($select_speaker == $speaker->id){
                                        echo "selected=selected";
                                    }
                                }
                            ?>
                            ><?php echo lang_decode($speaker->title)?></option>
                            
                        <?php endforeach;?>
					<?php endforeach;?>
				</select>
            </td>
            </td>
        </tr>
        <tr>
        	<th>EQ (Pre-Amp) :</th>
            <td>
            	<?php $select_eqs = explode(",", $what->eq);?>
				<select id="eq" name="eq[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach($category_eqs->product as $eq):?>
						<option value="<?php echo $eq->id?>"
						<?php 
							foreach ($select_eqs as $select_eq){
								if($select_eq == $eq->id){
									echo "selected=selected";
								}
							}
						?>
						><?php echo lang_decode($eq->title)?></option>
					<?php endforeach;?>
				</select>
            </td>
        </tr>
         <tr>
        	<th>Head Rest Monitor :</th>
            <td>
            	<?php $select_head_rest_monitors = explode(",", $what->head_rest_monitor);?>
				<select id="head_rest_monitor" name="head_rest_monitor[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach($category_head_rest_monitors->product as $head_rest_monitor):?>
						<option value="<?php echo $head_rest_monitor->id?>"
						<?php 
							foreach ($select_head_rest_monitors as $select_head_rest_monitor){
								if($select_head_rest_monitor == $head_rest_monitor->id){
									echo "selected=selected";
								}
							}
						?>
						><?php echo lang_decode($head_rest_monitor->title)?></option>
					<?php endforeach;?>
				</select>
            </td>
        </tr>
         <tr>
        	<th>Roof mount Monitor :</th>
            <td>
            	<?php $select_roof_mount_monitors = explode(",", $what->roof_mount_monitor);?>
				<select id="roof_mount_monitor" name="roof_mount_monitor[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach($category_roof_mount_monitors->product as $roof_mount_monitor):?>
						<option value="<?php echo $roof_mount_monitor->id?>"
						<?php 
							foreach ($select_roof_mount_monitors as $select_roof_mount_monitor){
								if($select_roof_mount_monitor == $roof_mount_monitor->id){
									echo "selected=selected";
								}
							}
						?>
						><?php echo lang_decode($roof_mount_monitor->title)?></option>
					<?php endforeach;?>
				</select>
            </td>
        </tr>
		<tr>	
			<th></th>
			<td>
			<input type="hidden" name="carversion_id" value="<?php echo $carversion->id ?>"  />
			<input type="submit" value="บันทึก" class="submit small" />
            <?php echo form_referer() ?>
			</td>
		</tr>
	</table>
</form>