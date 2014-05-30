<h1>Intro Page</h1>
<form method="post" action="intropages/admin/intropages/save/<?php echo $intropage->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<?php if(is_file('uploads/intropages/'.$intropage->image)): ?>
	<tr><th></th><td><img class="ex_img" src="uploads/intropages/<?php echo $intropage->image ?>" /></td></tr>
    <?php endif; ?>
	<tr>
		<th>อัพโหลดไฟล์ : </th>
		<td>
			<input type="file" name="image" value="" size="72"/> <i>ไฟล์ภาพขนาด 584 x 397 พิกเซล</i>
		</td>
	</tr>
    <tr>
		<th>ลิ้งค์ : </th>
		<td>
			<input type="text" name="url" value="<?php echo $intropage->url?>" class="full"/> <i>ตัวอย่าง : http://www.zulex.co.th</i>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
        	<?php echo form_referer() ?>
			<?php echo form_submit('',lang('btn_submit'))?>
		</td>
	</tr>
</table>
</form>