<script type="text/javascript" src="themes/zulex/js/jquery.validate.min.js"></script>
<script language="javascript">
$(function(){
	$("#form").validate({
	rules: 
	{
		name: 
		{ 
			required: true
		},
		email: 
		{ 
			required: true,
			email: true
		},
		address: 
		{ 
			required: true
		},
		tel: 
		{ 
			required: true
		},
		title: 
		{ 
			required: true
		},
		detail: 
		{ 
			required: true
		},
		captcha:
		{
			required: true,
			remote: "users/check_captcha"
		}
	},
	messages:
	{
		name: 
		{ 
			required: "กรุณากรอกชื่อ"
		},
		email: 
		{ 
			required: "กรุณากรอกอีเมล์",
			email: "กรุณากรอกอีเมล์ให้ถูกต้อง"
		},
		address: 
		{ 
			required: "กรุณากรอกที่อยู่"
		},
		tel: 
		{ 
			required: "กรุณากรอกเบอร์ติดต่อกลับ"
		},
		title: 
		{ 
			required: "กรุณากรอกหัวข้อ"
		},
		detail: 
		{ 
			required: "กรุณากรอกข้อความ"
		},
		captcha:
		{
			required: "กรุณากรอกตัวอักษรตัวที่เห็นในภาพ",
			remote: "กรุณากรอกตัวอักษรให้ตรงกับภาพ"
		}
	}
	});
});
</script>

<div id="contacts">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <?php echo lang('contact_us')?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		
        <div class="header-bar2">
            <h1><?php echo lang('contact')?></h1>
        </div>
        
	<div id="zulex-company">
		<h1><?php echo lang_decode($about->title,'')?></h1>
		<div id="col1" style="width: 275px!important;">
			<table>
				<tr>
					<td width="45"><img src="themes/zulex/images/icon_home.png" width="32"></td>
					<td width="230"><?php echo stripslashes(lang_decode($about->address,''))?></td>
				</tr>
				<tr>
					<td><img src="themes/zulex/images/icon_telephone.png" width="32"></td>
					<td><?php echo $about->tel?></td>
				</tr>
				<tr>
					<td><img src="themes/zulex/images/icon_fax.png" width="32"></td>
					<td><?php echo $about->fax?></td>
				</tr>
				<tr>
					<td><img src="themes/zulex/images/icon_email.png" width="32"></td>
					<td><?php echo $about->email?></td>
				</tr>
				<tr>
					<td><img src="themes/zulex/images/icon_gps.png" width="32"></td>
					<td><?php echo $about->latitude?><br><?php echo $about->longitude?></td>
				</tr>
			</table>
		</div>
		<div id="col2">
        	<div class="corner5 borderimg"><img  src="uploads/about_us/<?php echo $about->image?>"></div>
		</div>
		<div id="col3">
        	<div class="corner5">
			<a class="view" href="contacts/viewmap/<?php echo $about->id?>?iframe=true&width=75%&height=75%"><img src="http://maps.google.com/staticmap?center=<?php echo $about->latitude?>,<?php echo $about->longitude?>&zoom=<?php echo $about->zoom?>&size=260x195&maptype=roadmap&markers=<?php echo $about->latitude?>,<?php echo $about->longitude?>&key=ABQIAAAAsjlbnmTUjA-RpBZO-Jmm0xQED3NELORP5k-CX3o9HKyuxCU1UxT3miN6wBc6OFiQQ1sOhin4ZToUDA">
			</a>
            </div>
		</div>
		<div class="clear"></div>
		<div style="float:right; margin:0 45px 0 0;"><b>ดาวน์โหลดแผนที่ -></b> <a href="uploads/about_us/<?php echo $about->imagemap?>" target="_blank"><img style="vertical-align: top; background:#A3B5CB; padding:4px;" src="uploads/about_us/<?php echo $about->imagemap?>" width="260" height="195"></a></div>
		<br clear="all">
		<div class="detail1">
			<?php echo lang_decode($about->detail1,'')?>
		</div>
	</div>
	
	<div class="header-bar">
		<h1><?php echo lang('send')?></h1>
	</div>
	
	
		<form id="form" method="post" action="contacts/save" enctype="multipart/form-data">
			<p>
			<label for="name"><?php echo lang('name')?> :</label>
			<input id="name" name="name" type="text" value=""> *
			</p>
			<p>
			<label for="email"><?php echo lang('email')?> :</label>
			<input id="email" name="email" type="text" value=""> *
			</p>
            <p>
			<label for="address"><?php echo lang('address')?> :</label>
			<textarea id="address" name="address" style="height:50px;"></textarea> *
			</p>
			<p>
			<label for="tel"><?php echo lang('tel')?> :</label>
			<input id="tel" name="tel" type="text" value=""> *
			</p>
			<p>
			<label for="title"><?php echo lang('subject')?> :</label>
			<input id="title" name="title" type="text" value=""> *
			</p>
			<p>
			<label for="detail"><?php echo lang('message')?> :</label>
			<textarea id="detail" name="detail" style="height:130px;"></textarea> *
			</p>
			<p>
			<label for="captcha"></label>
			<img src="users/captcha" /><br>
			</p>
			<p>
			<label for="captcha"><?php echo lang('code')?> :</label>
			<input id="captcha" type="text" name="captcha" maxlength="4" style="width:102px;"> *
			</p>
			<p>
			<label for="submit"></label>
			<input id="submit" type="submit" value="<?php echo lang('send_message')?>">
			<!--<input type="checkbox" name="mailme" value="mailme"> <?php echo lang('copy_to_email')?>-->
			</p>
		</form>
	</div>

</div>

<script type="text/javascript"> 
$('.view').popupWindow({ 
centerBrowser:1,
width:655,
height:495
}); 
</script>