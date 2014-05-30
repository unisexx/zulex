<h1>ไอค่อนสินค้า</h1>

<form method="post" action="zicons/admin/zicons/save/<?php echo $icon->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<?php if($icon->image != ""):?>
    	<tr>
            <th></th>
            <td>
                <img src="uploads/icons/<?php echo $icon->image?>">
            </td>
        </tr>
    <?php endif;?>
	<tr>
		<th>อัพโหลดไอค่อน : </th>
		<td>
			<input type="file" name="image" value="" size="30"/> <i>ไฟล์ .png ขนาด 52 x 52 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>ชื่อ :</th>
		<td>
			<input type="text" name="name" value="<?php echo $icon->name?>">
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