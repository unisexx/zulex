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
<h1>ดาวน์โหลด > คู่มือ</h1>
<form method="post" action="manuals/admin/manuals/save/<?php echo $manual->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>	<tr>
	<tr><td></td></tr>
	<tr>
		<th>ชื่อ : </th>
		<td>
        	<input type="text" rel="th" name="title[th]" value="<?php echo lang_decode($manual->title,'th')?>" class="full"/>
            <input type="text" rel="en" name="title[en]" value="<?php echo lang_decode($manual->title,'en')?>" class="full"/>
        </td>
	</tr>
	<tr>
		<th>อัพโหลดไฟล์คู่มือ : </th>
		<td>
			<input type="file" name="file" value="" size="72"/>
			<?php if($manual->file):?>
				<a href="uploads/manuals/<?php echo $manual->file?>"><span class="icon icon-disk"></span></a>
			<?php endif;?>
		</td>
	</tr>
    <tr>
		<th>หมวด :</th>
		<td>
			<?php echo @form_dropdown('category_id',$manual->category->get_option(),$manual->category_id,'');?>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>