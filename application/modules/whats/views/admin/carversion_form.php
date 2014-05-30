<h1><a href="whats/admin/categories/index/">What Fit in My Car</a> - <?php echo lang_decode($category->name)?></h1>
<form method="post" action="whats/admin/carversions/save/<?php echo $carversion->id?>" enctype="multipart/form-data">
	<table class="form">
		<?php if(is_file('uploads/carversion/'.$carversion->image)): ?>
		<tr><th></th><td><img class="ex_img" src="uploads/carversion/<?php echo $carversion->image ?>" /></td></tr>
		<?php endif; ?>
    	<tr>
			<th>รูป : </th>
			<td>
				<input type="file" name="image" value="" size="41"/>
			</td>
		</tr>
		<tr>
			<th>รุ่น : </th>
			<td>
				<input type="text" name="version"  value="<?php echo $carversion->version?>" />
			</td>
		</tr>
        <tr>
			<th>ปี : </th>
			<td>
				<input type="text" name="year"  value="<?php echo $carversion->year?>" />
			</td>
		</tr>
		<tr>	
			<th></th>
			<td>
            <input type="hidden" name="category_id" value="<?php echo $category->id ?>"  />
			<input type="submit" value="บันทึก" class="submit small" />
            <?php echo form_referer() ?>
			</td>
		</tr>
	</table>
</form>
