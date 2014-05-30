<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
	tiny('detail');
	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<h1>ติดต่อเรา</h1>

<table class="list">
	<tr>
		<th><a href="contacts/admin/contacts/index">กล่องข้อความ</a></th>
	</tr>
</table>
<br>
<form method="post" action="contacts/admin/contacts/save/<?php echo $contact->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<!--<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>-->
	<tr>
	<tr><td></td></tr>
	<tr>
		<th>ชื่อ :</th>
		<td>
		<?php echo form_input('name',$contact->name,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>อีเมลล์ :</th>
		<td>
		<?php echo form_input('email',$contact->email,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>หัวข้อ :</th>
		<td>
		<?php echo form_input('title',$contact->title,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>ข้อความ :</th>
		<td>
		<div rel="th"><textarea name="detail" class="full tinymce"><?php echo $contact->detail ?></textarea></div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>