<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
	tiny('address');
	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<h1>สมัครตัวแทนจำหน่าย</h1>

<table class="list">
	<tr>
		<th><a href="applicants/admin/applicants/index">ใบสมัคร</a></th>
	</tr>
</table>
<br>
<form method="post" action="applicants/admin/applicants/save/<?php echo $applicant->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<!--<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>-->
	<tr>
	<tr><td></td></tr>
	<?php if(is_file('uploads/resellers/'.$applicant->image)): ?>
	<tr><th></th><td><a class="btn" href="applicants/admin/applicants/remove_image/<?php echo $applicant->id?>" />x</a><br /><img class="ex_img" src="uploads/resellers/<?php echo $applicant->image ?>" /></td></tr>
	<?php endif; ?>
	<tr>
		<th>รูปถ่าย : </th>
		<td><input type="file" name="image" size="72" /></td>
	</tr>
	<tr>
		<th>ชื่อ :</th>
		<td>
		<?php echo form_input('name',$applicant->name,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>อีเมล์ :</th>
		<td>
		<?php echo form_input('email',$applicant->email,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>ที่อยู่ :</th>
		<td>
		<div rel="th"><textarea name="address" class="full tinymce"><?php echo $applicant->address?></textarea></div>
		</td>
	</tr>
	<tr>
		<th>โทรศัพท์ :</th>
		<td>
		<?php echo form_input('tel',$applicant->tel,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>มือถือ :</th>
		<td>
		<?php echo form_input('mobile',$applicant->mobile,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>แฟกซ์ :</th>
		<td>
		<?php echo form_input('fax',$applicant->fax,'class=full');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>