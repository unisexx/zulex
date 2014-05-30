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
<h1>โบรชัวร์</h1>

<form method="post" action="brochures/admin/brochures/save/<?php echo $brochure->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
    <?php if(is_file('uploads/brochures/'.$brochure->image)): ?>
	<tr><th></th><td><img class="ex_img" src="uploads/brochures/<?php echo $brochure->image ?>" style="max-width:640px;"/></td></tr>
	<?php endif; ?>
	<tr>
		<th>หัวข้อ :</th>
		<td>
		<?php echo form_input('title[th]',lang_decode($brochure->title,'th'),'class=full rel=th');?>
		<?php echo form_input('title[en]',lang_decode($brochure->title,'en'),'class=full rel=en');?>
		</td>
	</tr>
     <tr>
		<th>อัพโหลดภาพ :</th>
		<td>
			<input type="file" name="image" value="" size="72"/>
		</td>
	</tr>
	<tr>
		<th>หมวด :</th>
		<td>
			<?php echo form_dropdown('category_id',$brochure->category->get_option(),$brochure->category_id,'');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>