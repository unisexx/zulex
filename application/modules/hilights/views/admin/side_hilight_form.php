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
<h1>ไฮไลท์</h1>
<form method="post" action="hilights/admin/side_hilights/save/<?php echo $side_hilight->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<?php if(is_file('uploads/side_hilights/'.$side_hilight->image)): ?>
	<tr><th></th><td><img class="ex_img" src="uploads/side_hilights/<?php echo $side_hilight->image ?>" /></td></tr>
    <?php endif; ?>
	<tr>
		<th>อัพโหลดไฟล์ : </th>
		<td>
			<input type="file" name="image" value="" size="72"/> <i>ไฟล์ภาพขนาด 430 x 245 พิกเซล</i>
		</td>
	</tr>
    <tr>
		<th>ลิ้งค์ : </th>
		<td>
			<input type="text" name="url" value="<?php echo $side_hilight->url?>" class="full"/> <i>ตัวอย่าง : http://www.zulex.co.th</i>
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
		<th>หัวข้อ : </th>
		<td>
			<input type="text" name="title" value="<?php echo $side_hilight->title?>" class="full"/>
		</td>
	</tr>
    <tr>
		<th>รายละเอียด : </th>
		<td>
            <div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($side_hilight->detail,'th')?></textarea></div>
			<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($side_hilight->detail,'en')?></textarea></div>
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