<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
	tiny('detail[th],detail[en]');
	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<h1>Tip & Technic</h1>

<form method="post" action="tips/admin/tips/save/<?php echo $tip->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
    <?php if(is_file('uploads/tips/'.$tip->image)): ?>
	<tr><th></th><td><img class="ex_img" src="uploads/tips/<?php echo $tip->image ?>" /></td></tr>
	<?php endif; ?>
    <tr>
		<th>ภาพประกอบ :</th>
		<td>
			<input type="file" name="image" value="" size="41"/> <i>ไฟล์ภาพขนาด 125 x 80 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
		<?php echo form_input('title[th]',lang_decode($tip->title,'th'),'class=full rel=th');?>
		<?php echo form_input('title[en]',lang_decode($tip->title,'en'),'class=full rel=en');?>
		</td>
	</tr>
    <tr>
		<th>หัวข้อรอง :</th>
		<td>
		<?php echo form_input('title2[th]',lang_decode($tip->title2,'th'),'class=full rel=th');?>
		<?php echo form_input('title2[en]',lang_decode($tip->title2,'en'),'class=full rel=en');?>
		</td>
	</tr>
	<tr>
		<th>เนื้อหา :</th>
		<td>
		<div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($tip->detail,'th')?></textarea></div>
		<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($tip->detail,'en')?></textarea></div>
		</td>
	</tr>
	<tr>
		<th>หมวด :</th>
		<td>
			<?php echo form_dropdown('category_id',$tip->category->get_option(),$tip->category_id,'');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>