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
<h1>ซับเมนู</h1>
<form method="post" action="submenus/admin/submenus/save/<?php echo $menu->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
        <tr><th></th><td>
			<div rel="th">
				<?php if(is_file('uploads/submenu/'.$menu->image_th)): ?>
                <img class="ex_img" src="uploads/submenu/<?php echo $menu->image_th ?>" />
				<?php endif; ?>
			</div>
			<div rel="en">
				<?php if(is_file('uploads/submenu/'.$menu->image_en)): ?>
                <img class="ex_img" src="uploads/submenu/<?php echo $menu->image_en ?>" />
                <?php endif; ?>
			</div>
        </td></tr>
     <tr>
		<th>อัพโหลดภาพเมนู : </th>
		<td>
        		<div rel="th"><input type="file" name="image_th" size="72"/> <i>ไฟล์ภาพขนาด 215 x 75 พิกเซล</i></div>
				<div rel="en"><input type="file" name="image_en" size="72"/> <i>ไฟล์ภาพขนาด 215 x 75 พิกเซล</i></div>
		</td>
	</tr>
	<tr>
		<th>ชื่อเมนู :</th>
		<td>
            <input type="text" name="name" value="<?php echo $menu->name?>" class="full">
		</td>
	</tr>
    <tr>
		<th>ลิ้งค์ :</th>
		<td>
			<input class="full" type="text" name="url" value="<?php echo $menu->url?>"> <i>ตัวอย่าง : http://www.zulex.co.th</i>
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