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
<h1>ข่าวสารและโปรโมชั่น</h1>

<form method="post" action="znews/admin/znews/save/<?php echo $znew->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
    <?php if(is_file('uploads/znews/'.$znew->image)): ?>
	<tr><th></th><td><a class="btn" href="znews/admin/znews/remove_image/<?php echo $znew->id?>" />x</a><br /><img class="ex_img" src="uploads/znews/<?php echo $znew->image ?>" /></td></tr>
	<?php endif; ?>
    <tr>
		<th>ภาพข่าวหน้าแรก :</th>
		<td>
			<input type="file" name="image" value="" size="41"/> <i>ไฟล์ภาพขนาด 200 x 150 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
		<?php echo form_input('title[th]',lang_decode($znew->title,'th'),'class=full rel=th');?>
		<?php echo form_input('title[en]',lang_decode($znew->title,'en'),'class=full rel=en');?>
		</td>
	</tr>
	<tr>
		<th>เนื้อหา :</th>
		<td>
		<div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($znew->detail,'th')?></textarea></div>
		<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($znew->detail,'en')?></textarea></div>
		</td>
	</tr>
	<?php foreach($znew->znew_image->order_by('id','asc')->get() as $image): ?>
	<tr>
		<th>ภาพประกอบข่าว :</th>
		<td>	
			<?php echo form_upload('file[]')?>
			<a rel="lightbox[image]" href="uploads/znews/<?php echo $image->file?>"><span class="icon icon-picture"></span></a>
			<a href="znews/admin/znews/image_delete/<?php echo $image->id ?>" onclick="return confirm('ลบรูปนี้')"><span class="icon icon-cross"></span></a>
			<?php echo form_hidden('image_id[]',$image->id)?>
			</ul>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<th>อัพโหลดภาพ :</th>
		<td><?php echo form_upload('file[]')?> <input type="button" value="เพิ่ม" /></td>
	</tr>
	<tr>
		<th>หมวด :</th>
		<td>
			<?php echo form_dropdown('category_id',$znew->category->get_option(),$znew->category_id,'rel=th');?>
			<?php echo form_dropdown('category_id',$znew->category->get_option('','en'),$znew->category_id,'rel=en');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>