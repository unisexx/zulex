<script type="text/javascript">
	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<h1><a href="wallpapers/admin/categories">Wallpaper</a> >> <?php echo lang_decode($categories->name,'')?></h1>
<form action="wallpapers/admin/wallpapers/save/<?php echo $categories->id?>/<?php echo $wallpapers->id ?>" method="post" enctype="multipart/form-data" id="gallery_form">
<table class="form">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<?php if(is_file('uploads/wallpapers/'.$wallpapers->image)): ?>
		<tr>
			<th></th>
			<td><img class="ex_img" src="uploads/wallpapers/<?php echo $wallpapers->image?>" style="max-width:640px;" />
			</td>
		</tr>
	<?php endif; ?>
	<tr>
		<th>รูปภาพ :</th>
		<td><input type="file" name="image" size="72"></td>
	</tr>
	<tr>
		<th>ชื่อภาพ :</th>
		<td>
        	<?php echo form_input('title[th]',lang_decode($wallpapers->title,'th'),'class=full rel=th');?>
			<?php echo form_input('title[en]',lang_decode($wallpapers->title,'en'),'class=full rel=en');?>
        </td>
	</tr>
	<tr>
		<th>อัลบัม :</th>
		<td><input type="text" value="<?php echo lang_decode($categories->name,'')?>" disabled="true" class="full"><input type="hidden" name="category_id" value="<?php echo $categories->id?>"></td>
	</tr>
	<tr><th></th>
    <td><?php echo form_referer() ?><input type="submit" value="บันทึก"></td></tr>
</table>
</form>