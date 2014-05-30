<?php if($what->antenna != ""):?>
<p>
     <label for="antenna">Antenna :</label>
		<?php $antenna_ids = explode(",", $what->antenna);?>
		<select name="antenna" id="antenna" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($antenna_ids as $antenna_id):?>
				<?php $antenna = $product->where("id = $antenna_id")->get();?>
				<option value="<?php echo $antenna->id?>"><?php echo lang_decode($antenna->title);?></option>
				<?php endforeach;?>
		</select>
</p>
<?php endif;?>
                        
<?php if($what->rear_view_camera != ""):?>
<p>
	<label for="rearview">Rear View Camera :</label>
    <?php $rearview_ids = explode(",", $what->rear_view_camera);?>
		<select name="rearview" id="rearview" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($rearview_ids as $rearview_id):?>
                <?php $rearview = $product->where("id = $rearview_id")->get();?>
				<option value="<?php echo $rearview->id?>"><?php echo lang_decode($rearview->title);?></option>
				 <?php endforeach;?>
			</select>
</p>
<?php endif;?>

<?php if($what->amplifier_subbox != ""):?>
<p>
	<label for="amplifier">Amplifier :</label>
    <?php $amplifier_ids = explode(",", $what->amplifier_subbox);?>
		<select name="amplifier" id="amplifier" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($amplifier_ids as $amplifier_id):?>
                <?php $amplifier = $product->where("id = $amplifier_id")->get();?>
				<option value="<?php echo $amplifier->id?>"><?php echo lang_decode($amplifier->title);?></option>
				 <?php endforeach;?>
			</select>
</p>
<?php endif;?>

<?php if($what->speaker != ""):?>
<p>
	<label for="speaker">Speaker :</label>
    <?php $speaker_ids = explode(",", $what->speaker);?>
		<select name="speaker" id="speaker" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($speaker_ids as $speaker_id):?>
                <?php $speaker = $product->where("id = $speaker_id")->get();?>
				<option value="<?php echo $speaker->id?>"><?php echo lang_decode($speaker->title);?></option>
				 <?php endforeach;?>
			</select>
</p>
<?php endif;?>

<?php if($what->eq != ""):?>
<p>
	<label for="eq">EQ (Pre-Amp) :</label>
    <?php $eq_ids = explode(",", $what->eq);?>
		<select name="eq" id="eq" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($eq_ids as $eq_id):?>
                <?php $eq = $product->where("id = $eq_id")->get();?>
				<option value="<?php echo $eq->id?>"><?php echo lang_decode($eq->title);?></option>
				 <?php endforeach;?>
			</select>
</p>
<?php endif;?>

<?php if($what->head_rest_monitor != ""):?>
<p>
	<label for="headrest">Head Rest Monitor :</label>
    <?php $headrest_ids = explode(",", $what->head_rest_monitor);?>
		<select name="headrest" id="headrest" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($headrest_ids as $headrest_id):?>
                <?php $headrest = $product->where("id = $headrest_id")->get();?>
				<option value="<?php echo $headrest->id?>"><?php echo lang_decode($headrest->title);?></option>
				 <?php endforeach;?>
			</select>
</p>
<?php endif;?>

<?php if($what->roof_mount_monitor != ""):?>
<p>
	<label for="roofmount">Roof Mount Monitor :</label>
    <?php $roofmount_ids = explode(",", $what->roof_mount_monitor);?>
		<select name="roofmount" id="roofmount" class="whatfitselect">
			<option value="0">------------------ กรุณาเลือก ------------------</option>
				<?php foreach ($roofmount_ids as $roofmount_id):?>
                <?php $roofmount = $product->where("id = $roofmount_id")->get();?>
				<option value="<?php echo $roofmount->id?>"><?php echo lang_decode($roofmount->title);?></option>
				 <?php endforeach;?>
			</select>
</p>
<?php endif;?>

<p>
	<label for="submit"></label>
    <!--<input id="print" name="print" type="button" value="Submit" onclick="print_It()">-->
    <input id="print" name="print" type="submit" value="Submit">
</p>

<div id="result"></div>