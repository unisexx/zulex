<script type="text/javascript" src="themes/zulex/js/jquery.validate.min.js"></script>
<script language="javascript">
$(function(){
	$("#form").validate({
	rules: 
	{
		store_name: 
		{ 
			required: true
		},
		dealer_name: 
		{ 
			required: true
		},
		dealer_position: 
		{ 
			required: true
		},
		address: 
		{ 
			required: true
		},
		tel: 
		{ 
			required: true
		},
		mobile: 
		{ 
			required: true
		},
		email: 
		{ 
			required: true,
			email: true
		},
		image: 
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
		store_name: 
		{ 
			required: "กรุณากรอกชื่อร้าน"
		},
		dealer_name: 
		{ 
			required: "กรุณากรอกชื่อผู้ติดต่อ"
		},
		dealer_position: 
		{ 
			required: "กรุณากรอกตำแหน่ง"
		},
		address: 
		{ 
			required: "กรุณากรอกที่อยู่"
		},
		tel: 
		{ 
			required: "กรุณากรอกเบอร์โทรศัพท์"
		},
		mobile: 
		{ 
			required: "กรุณากรอกมือถือ"
		},
		email: 
		{ 
			required: "กรุณากรอกอีเมล์",
			email: "กรุณากรอกอีเมล์ให้ถูกต้อง"
		},
		image: 
		{ 
			required: "กรุณาอัพโหลดภาพถ่ายหน้าร้าน"
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
<div id="resellers-register">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <?php echo lang('resellers_register')?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1><?php echo lang('resellers_register')?></h1>
		</div>
	
		<h2><?php echo lang('require')?></h2>
		<form id="form" method="post" action="applicants/save" enctype="multipart/form-data">
			<p>
			<label for="store_name"><?php echo lang('trade_name')?> :</label>
			<input id="store_name" name="store_name" type="text" value=""> *
			</p>
			<p>
			<label for="dealer_name"><?php echo lang('contact_name')?> :</label>
			<input id="dealer_name" name="dealer_name" type="text" value=""> *
			</p>
			<p>
			<label for="dealer_position"><?php echo lang('position')?> :</label>
			<input id="dealer_position" name="dealer_position" type="text" value=""> *
			</p>
			<!--
			<p>
			<label for="username">ชื่อในการล็อกอิน :</label>
			<input id="username" name="username" type="text" value=""> *
			</p>
			<p>
			<label for="password">รหัสผ่าน :</label>
			<input id="password" name="password" type="text" value=""> *
			</p>
			<p>
			<label for="repassword">ยืนยันรหัสผ่าน :</label>
			<input id="repassword" name="repassword" type="password" value=""> *
			</p>
			-->
			<p>
			<label for="address"><?php echo lang('address')?> :</label>
			<textarea id="address" name="address"></textarea> *
			</p>
			<p>
			<label for="tel"><?php echo lang('tel')?> :</label>
			<input id="tel" name="tel" type="text" value=""> *
			</p>
			<p>
			<label for="mobile"><?php echo lang('mobile')?> :</label>
			<input id="mobile" name="mobile" type="text" value=""> *
			</p>
			<p>
			<label for="fax"><?php echo lang('fax')?> :</label>
			<input id="fax" name="fax" type="text" value="">
			</p>
			<p>
			<label for="email"><?php echo lang('email')?> :</label>
			<input id="email" name="email" type="text" value=""> *
			</p>
			<p>
			<label for="image"><?php echo lang('photo_shop')?> :</label>
			<input id="image" name="image" type="file" value="" size="37"> *
			</p>
			<p>
			<label for="gps"><?php echo lang('coordinates')?> :</label>
				<div id="map_canvas"></div>
			</p>
			<p>
			<label for="latitude"><?php echo lang('latitude')?> :</label>
			<input name="latitude" type="text" id="lat_value" value="" />
			</p>
			<p>
			<label for="longitude"><?php echo lang('longitude')?> :</label>
			<input name="longitude" type="text" id="lon_value" value="" />
			</p>
			<p>
			<label for="zoom"><?php echo lang('zoom')?> :</label>
			<input name="zoom" type="text" id="zoom_value" value="" size="5" />
			</p>
			<p>
			<label for="dealer_brand"><?php echo lang('brand')?> :</label>
			<input id="dealer_brand" name="dealer_brand" type="text" value="">
			</p>
			<p>
			<label for="sell"><?php echo lang('seles')?> :</label>
			<input id="sell" name="sell" type="text" value="">
			</p>
			<p>
			<label for="employee"><?php echo lang('employees')?> :</label>
			<input id="employee" name="employee" type="text" value="">
			</p>
			<p>
			<label for="zulexproduct"><?php echo lang('zulex_product')?> :</label>
			<INPUT type="radio" name="zulex_product" value="มี"> <?php echo lang('yes')?>
    		<INPUT type="radio" name="zulex_product" value="ไม่มี"> <?php echo lang('no')?><br>
			<?php echo lang('agency')?> : <input type="text" name="zulex_dealer" value="" style="width:212px;">
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

<style type="text/css">
				/* css กำหนดความกว้าง ความสูงของแผนที่ */
				#map_canvas { 
					width:450px;
					height:300px;
					margin:-12px 0 0 205px;
				}
				</style>
<script type="text/javascript">
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
function initialize() { // ฟังก์ชันแสดงแผนที่
	GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
	// กำหนดจุดเริ่มต้นของแผนที่
	var my_Latlng  = new GGM.LatLng(13.761728449950002,100.6527900695800);
	var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
	// กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
	var my_DivObj=$("#map_canvas")[0]; 
	// กำหนด Option ของแผนที่
	var myOptions = {
		zoom: 13, // กำหนดขนาดการ zoom
		center: my_Latlng , // กำหนดจุดกึ่งกลาง
		mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
	};
	map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
	
	var my_Marker = new GGM.Marker({ // สร้างตัว marker
		position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
		map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
		draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้
		title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
	});
	
	// กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
	GGM.event.addListener(my_Marker, 'dragend', function() {
		var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
        map.panTo(my_Point);  // ให้แผนที่แสดงไปที่ตัว marker		
        $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
        $("#lon_value").val(my_Point.lng()); // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value 
        $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
	});		

	// กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
	GGM.event.addListener(map, 'zoom_changed', function() {
		$("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value 	
	});

}
$(function(){
	// โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
	// ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
	// v=3.2&sensor=false&language=th&callback=initialize
	//	v เวอร์ชัน่ 3.2
	//	sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
	//	language ภาษา th ,en เป็นต้น
	//	callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
	$("<script/>", {
	  "type": "text/javascript",
	  src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
	}).appendTo("body");	
});
</script>