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
<h1>เฮดเดอร์เมนู</h1>
<form method="post" action="hmenus/admin/hmenus/save/<?php echo $menu->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr>
		<th>ชื่อเมนู :</th>
		<td>
            <?php echo form_input('title[th]',lang_decode($menu->title,'th'),'class=full rel=th');?>
			<?php echo form_input('title[en]',lang_decode($menu->title,'en'),'class=full rel=en');?>
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