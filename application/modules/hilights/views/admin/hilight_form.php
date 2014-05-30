<h1>ไฮไลท์</h1>
<form method="post" action="hilights/admin/hilights/save/<?php echo $hilight->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<?php if(is_file('uploads/hilights/'.$hilight->image)): ?>
	<tr><th></th><td><img class="ex_img" src="uploads/hilights/<?php echo $hilight->image ?>" /></td></tr>
    <?php endif; ?>
	<tr>
		<th>อัพโหลดไฟล์ : </th>
		<td>
			<input type="file" name="image" value="" size="72"/> <i>ไฟล์ภาพขนาด 600 x 340 พิกเซล</i>
		</td>
	</tr>
    <tr>
		<th>ลิ้งค์ : </th>
		<td>
			<input type="text" name="url" value="<?php echo $hilight->url?>" class="full"/> <i>ตัวอย่าง : http://www.zulex.co.th</i>
		</td>
	</tr>
    <!-- <tr>
		<th>แอคชั่น : </th>
		<td>
			<select name="action">
            	<option value="_self">เปิดลิ้งค์ในหน้าเดิม</option>
                <option value="_blank">เปิดลิ้งค์ในหน้าใหม่</option>
            </select>
		</td>
	</tr>-->
	<tr>
		<th></th>
		<td>
        	<?php echo form_referer() ?>
			<?php echo form_submit('',lang('btn_submit'))?>
		</td>
	</tr>
</table>
</form>