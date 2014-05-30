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
<h1>ดาวน์โหลด > ซอฟแวร์ & เฟิร์มแวร์</h1>
<form method="post" action="softwares/admin/softwares/save/<?php echo $software->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>	<tr>
	<tr><td></td></tr>
	<tr>
		<th>ชื่อ : </th>
		<td><input type="text" name="title" value="<?php echo $software->title?>" class="full"/></td>
	</tr>
	<tr>
		<th>อัพโหลดไฟล์ : </th>
		<td>
			<input type="file" name="file" value="" size="72"/>
			<?php if($software->file):?>
				<a href="uploads/softwares/<?php echo $software->file?>"><span class="icon icon-disk"></span></a>
			<?php endif;?>
		</td>
	</tr>
    <tr>
		<th>ลิ้งค์ดาวน์โหลด : </th>
		<td>
			<input class="full" type="text" name="url" value="<?php echo $software->url?>" /> <i>ตัวอย่าง : http://www.zulex.co.th</i>
		</td>
	</tr>
	<tr>
		<th>รายละเอียด : </th>
		<td>
			<div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($software->detail,'th')?></textarea></div>
			<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($software->detail,'en')?></textarea></div>
		</td>
	</tr>
    <tr>
		<th>หมวด :</th>
		<td>
			<?php echo form_dropdown('category_id',$software->category->get_option(),$software->category_id,'');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>