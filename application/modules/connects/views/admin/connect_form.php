<h1>Connect White Up</h1>

<form method="post" action="connects/admin/connects/save/<?php echo $connect->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<?php if($connect->image != ""):?>
    	<tr>
            <th></th>
            <td>
                <img src="uploads/connects/<?php echo $connect->image?>">
            </td>
        </tr>
    <?php endif;?>
	<tr>
		<th>อัพโหลดไอค่อน : </th>
		<td>
			<input type="file" name="image" value="" size="30"/> <i>ไฟล์ .png ขนาด 80 x 80 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>ชื่อ :</th>
		<td>
			<input type="text" name="name" value="<?php echo $connect->name?>">
		</td>
	</tr>
    <tr>
		<th>ลิ้งค์ :</th>
		<td>
			<input type="text" name="url" value="<?php echo $connect->url?>"> <i>ตัวอย่าง : http://www.zulex.co.th</i>
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