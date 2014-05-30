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
<h1>เกี่ยวกับเรา</h1>

<table class="list">
	<tr>
		<th><a href="abouts/admin/abouts/index">เกี่ยวกับเรา</a>
	</tr>
</table>
<br>
<form method="post" action="abouts/admin/abouts/save/1" id="frm">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
	<tr>
		<th>รายละเอียด :</th>
		<td>
		<div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($about->detail,'th')?></textarea></div>
		<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($about->detail,'en')?></textarea></div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>