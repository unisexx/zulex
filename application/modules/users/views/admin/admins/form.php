<script language="javascript">
$(function(){
	$("#frm").validate({
	rules: 
	{
		username: 
		{ 
			required: true
		},
		email: 
		{ 
			required: true,
			email: true
			//remote: "users/check_email"
		},
		password: 
		{
			required: true,
			minlength: 4
		},
		password_2:
		{
			equalTo: "#password"
		}
	},
	messages:
	{
		username: 
		{ 
			required: "กรุณากรอกชื่อล็อกอิน"
		},
		email: 
		{ 
			required: "กรุณากรอกอีเมล์",
			email: "กรุณากรอกอีเมล์ให้ถูกต้อง"
			//remote: "อีเมล์นี้ไม่สามารถใช้งานได้"
		},
		password: 
		{
			required: "กรุณากรอกรหัสผ่าน",
			minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร"
		},
		password_2:
		{
			equalTo: "กรุณากรอกรหัสผ่านให้ตรงกันทั้ง 2 ช่อง"
		}
	}
	});
});
</script>
<h1>Administrator</h1>
<form method="post" action="users/admin/administrators/save/<?php echo $user->id?>" id="frm">
<table class="form">
	<tr>
		<th>Email :</th>
		<td><?php echo form_input('email',$user->email,'size="30" id="email"')?></td>
	</tr>
	<tr>
		<th>Username :</th>
		<td><?php echo form_input('username',$user->username,'size="30" id="username"')?></td>
	</tr>
	<tr>
		<th>Password :</th>
		<td><?php echo form_password('password','','size="30" id="password"')?></td>
	</tr>
	<tr>
		<th>Confirm Password :</th>
		<td><?php echo form_password('password_2','','size="30" id="password_2"')?></td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>