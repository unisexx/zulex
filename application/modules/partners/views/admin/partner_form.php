<h1>พาร์ทเนอร์</h1>
<form method="post" action="partners/admin/partners/save/<?php echo $partner->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<!--<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>-->
	<tr>
	<tr><td></td></tr>
	<tr>
		<th>ชื่อ : </th>
		<td><input type="text" name="title" value="<?php echo $partner->title?>" class="full"/></td>
	</tr>
	<tr>
		<th>ลิ้งค์ : </th>
		<td><input type="text" name="url" value="<?php echo $partner->url?>" class="full"/> <i>ตัวอย่าง http://www.zulex.co.th</i></td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>