<h1>แนวโน้มการเลือกซื้อสินค้าในอนาคต</h1>

<form method="post" action="registers/admin/buyproducts/save/<?php echo $buyproduct->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr>
	<tr><td></td></tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
		<input type="text" name="title" value="<?php echo $buyproduct->title?>" class="full" />
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>