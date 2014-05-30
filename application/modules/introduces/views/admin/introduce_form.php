<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
	tiny('detail[th],detail[en]');
	tiny('detail2[th],detail2[en]');
	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<script type="text/javascript">
	$(function(){
		$("input[type=button]").live('click',function(){
			$(this).parent().parent().after(
			'<tr>' +
			'<th></th>' +
			'<td><?php echo form_upload('file[]')?> <input type="button" value="เพิ่ม" /></td>' +
			'</tr>'
			);
		})
	})
</script>
<h1>Introduce Product</h1>

<form method="post" action="introduces/admin/introduces/save/<?php echo $introduce->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
    <?php if(is_file('uploads/introduces/'.$introduce->image)): ?>
	<tr><th></th><td><img class="ex_img" src="uploads/introduces/<?php echo $introduce->image ?>" /></td></tr>
	<?php endif; ?>
    <tr>
		<th>รูปถ่าย :</th>
		<td>
			<input type="file" name="image" value="" size="41"/> <i>ไฟล์ภาพขนาด 430 x 245 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>ชื่อสินค้า :</th>
		<td>
		<?php echo form_input('name[th]',lang_decode($introduce->name,'th'),'class=full rel=th');?>
		<?php echo form_input('name[en]',lang_decode($introduce->name,'en'),'class=full rel=en');?>
		</td>
	</tr>
    <tr>
		<th>โค้ดวิดีโอ :</th>
		<td>
			<textarea style="height:50px;" class="full" rows="12" cols="90" name="video"><?php echo $introduce->video?></textarea>
		</td>
	</tr>
    <tr>
		<th>จุดเด่น :</th>
		<td>
		<div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($introduce->detail,'th')?></textarea></div>
		<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($introduce->detail,'en')?></textarea></div>
		</td>
	</tr>
	<tr>
		<th>รายละเอียด :</th>
		<td>
		<div rel="th"><textarea name="detail2[th]" class="full tinymce"><?php echo lang_decode($introduce->detail2,'th')?></textarea></div>
		<div rel="en"><textarea name="detail2[en]" class="full tinymce"><?php echo lang_decode($introduce->detail2,'en')?></textarea></div>
		</td>
	</tr>
    <tr>
		<th></th>
		<td><?php echo form_referer() ?><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>