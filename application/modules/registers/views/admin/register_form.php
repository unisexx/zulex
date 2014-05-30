<h1>รู้จัก zulex จาก</h1>

<form method="post" action="registers/admin/registers/save/<?php echo $register->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr>
	<tr><td></td></tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
		<input type="text" name="title" value="<?php echo $register->title?>" class="full" />
		</td>
	</tr>
	<tr>
		<th>หมวด :</th>
		<td>
			<?php echo form_dropdown('category_id',$register->category->get_option(),$register->category_id,'');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>