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
		username: 
		{ 
			required: true
		},
		email: 
		{ 
			required: true,
			email: true,
			remote: "users/check_email"
		},
		password: 
		{
			required: true,
			minlength: 8
		},
		_password:
		{
			equalTo: "#password"
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
		username: 
		{ 
			required: "กรุณากรอกชื่อล็อกอิน"
		},
		email: 
		{ 
			required: "กรุณากรอกอีเมล์",
			email: "กรุณากรอกอีเมล์ให้ถูกต้อง",
			remote: "อีเมล์นี้ไม่สามารถใช้งานได้"
		},
		password: 
		{
			required: "กรุณากรอกรหัสผ่าน",
			minlength: "กรุณากรอกรหัสผ่านอย่างน้อย 8 ตัวอักษร"
		},
		_password:
		{
			equalTo: "กรุณากรอกรหัสผ่านให้ตรงกันทั้ง 2 ช่อง"
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
<div id="register">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <?php echo lang('register')?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		
		<div class="header-bar">
			<h1><?php echo lang('register')?></h1>
		</div>
	
		<h2><?php echo lang('require')?></h2>
		<form id="form" method="post" action="users/signup" enctype="multipart/form-data">
			<p>
			<label for="name"><?php echo lang('name')?> :</label>
			<input id="name" name="name" type="text" value=""> *
			</p>
			<p>
			<label for="username"><?php echo lang('username')?> :</label>
			<input id="username" name="username" type="text" value=""> *
			</p>
			<p>
			<label for="email"><?php echo lang('email')?> :</label>
			<input id="email" name="email" type="text" value=""> *
			</p>
			<p>
			<label for="password"><?php echo lang('password')?> :</label>
			<input id="password" name="password" type="password" value=""> *
			</p>
			<p>
			<label for="_password"><?php echo lang('re_password')?> :</label>
			<input id="_password" name="_password" type="password" value=""> *
			</p>
			<p>
			<label for="car"><?php echo lang('car_model')?> :</label>
			<input id="car" name="car" type="text" value="">
			</p>
            <p>
			<label for="carvertion"><?php echo lang('car_brand')?> :</label>
			<input id="carvertion" name="carvertion" type="text" value="">
			</p>
			<p>
			<label for="zulex"><?php echo lang('buy_zulex')?> :</label>
			<textarea id="zulex" name="zulex"></textarea>
			</p>
			<p>
			<label for="count"><?php echo lang('family_car')?> :</label>
			<input id="count" name="count" type="text" value="">
			</p>
			<p>
			<label for="carchange"><?php echo lang('car_tend')?> :</label>
			<INPUT type="radio" name="carchange" value="ไม่มี"> <?php echo lang('no')?>
    		<INPUT type="radio" name="carchange" value="มี"> <?php echo lang('yes')?>
			<BR>
			<?php echo lang('year')?> <input type="text" name="car_year" value="" style="width:40px;">
			<?php echo lang('carbrand')?> <input type="text" name="car_brand" value="" style="width:87px;">
			<?php echo lang('model')?> <input type="text" name="car_version" value="" style="width:88px;">
			</p>
			<p>
			<label for="income"><?php echo lang('income')?> :</label>
			<INPUT type="radio" name="income" value="ต่ำกว่า 5,000"> <?php echo lang('under')?> 5,000
    		<INPUT type="radio" name="income" value="5001 - 10000"> 5001 - 10000
			<INPUT type="radio" name="income" value="10001 - 15000"> 10001 - 15000<br>
			<INPUT type="radio" name="income" value="15001 - 20000"> 15001 - 20000
			<INPUT type="radio" name="income" value="20001 - 25000"> 20001 - 25000
			<INPUT type="radio" name="income" value="25000 ขึ้นไป"> 25000 <?php echo lang('up')?>
			</p>
			<p>
			<label for="incomefamily"><?php echo lang('income_family')?> :</label>
			<input id="incomefamily" name="incomefamily" type="text" value="">
			</p>
			<p>
			<label for="know"><?php echo lang('about_from')?> :</label>
                <?php foreach ($register_categories as $register_category):?>
                	<?php echo lang_decode($register_category->name)?><br style="margin:8px 0;" />
                    		<?php foreach ($register_category->register->order_by('orderlist','asc')->get() as $register):?>
								&nbsp;&nbsp;&nbsp;<input type="checkbox" name="know[]" value="<?php echo $register->id?>" /> <?php echo $register->title?><br />
							<?php endforeach;?>
                <?php endforeach;?>
			</p>
			<p>
			<label for="buyproduct"><?php echo lang('shopping_trend')?> :</label>
            	<?php foreach ($buyproducts as $buyproduct):?>
                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="buyproduct[]" value="<?php echo $buyproduct->id?>" /> <?php echo $buyproduct->title?><br />
                <?php endforeach;?>
			</p>
			<p>
			<label for="activity"><?php echo lang('activity')?> :</label>
			<input id="activity" name="activity" type="text" value="">
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
			<input id="submit" type="submit" value="<?php echo lang('submit')?>">
			</p>
		</form>
	</div>
</div>