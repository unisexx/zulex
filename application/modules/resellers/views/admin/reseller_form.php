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
<h1>ตัวแทนจำหน่าย</h1>

<table class="list">
	<tr>
		<th><a href="resellers/admin/categories/index">ศูนย์ภูมิภาค</a> » <a href="resellers/admin/categories/sub_categories/<?php echo $sub_categories_1->id?>"><?php echo lang_decode($sub_categories_1->name)?></a> » <a href="resellers/admin/categories/sub_categories_2/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>"><?php echo lang_decode($parent_category->name)?></a> » <a href="resellers/admin/resellers/index/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $category->id ?>"><?php echo lang_decode($category->name) ?></a></th>
	</tr>
</table>
<br>
<form method="post" action="resellers/admin/resellers/save/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $category->id?>/<?php echo $reseller->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
	<?php if(is_file('uploads/resellers/'.$reseller->image)): ?>
	<tr><th></th><td><a class="btn" href="resellers/admin/resellers/remove_image/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $category->id?>/<?php echo $reseller->id?>" />x</a><br /><img class="ex_img" src="uploads/resellers/<?php echo $reseller->image ?>" /></td></tr>
	<?php endif; ?>
	<tr>
		<th>รูปถ่ายหน้าร้าน : </th>
		<td><input type="file" name="image" size="72" /> <i>ไฟล์ภาพขนาด 165 x 125</i></td>
	</tr>
	<tr>
		<th>ชื่อร้าน :</th>
		<td>
		<?php echo form_input('title[th]',lang_decode($reseller->title,'th'),'class=full rel=th');?>
		<?php echo form_input('title[en]',lang_decode($reseller->title,'en'),'class=full rel=en');?>
		</td>
	</tr>
	<tr>
		<th>ที่อยู่ :</th>
		<td>
		<?php echo form_input('address[th]',stripslashes(lang_decode($reseller->address,'th')),'class=full rel=th');?>
		<?php echo form_input('address[en]',stripslashes(lang_decode($reseller->address,'en')),'class=full rel=en');?>
		</td>
	</tr>
	<tr>
		<th>โทร :</th>
		<td>
		<?php echo form_input('tel',$reseller->tel,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>แฟกซ์ :</th>
		<td>
		<?php echo form_input('fax',$reseller->fax,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>อีเมล์ :</th>
		<td>
		<?php echo form_input('email',$reseller->email,'class=full');?>
		</td>
	</tr>
	<tr>
		<th>เวลาทำการ :</th>
		<td>
		<?php echo form_textarea('service_time[th]',lang_decode($reseller->service_time,'th'),'class=full rel=th style="height:50px;"');?>
		<?php echo form_textarea('service_time[en]',lang_decode($reseller->service_time,'en'),'class=full rel=en style="height:50px;"');?>
		</td>
	</tr>
	<tr>
		<th>พิกัด :</th>
		<td width="100">
			<div id="map_canvas"></div>
				<div id="map_frm">
			    <label for="latitude">Latitude :</label>
			    <input name="latitude" type="text" id="lat_value" value="<?php echo $reseller->latitude?>" />  <br />
			    <label for="longitude">Longitude :</label>
			    <input name="longitude" type="text" id="lon_value" value="<?php echo $reseller->longitude?>" />  <br />
			  	<label for="zoom">Zoom :</label>
			  	<input name="zoom" type="text" id="zoom_value" value="<?php echo $reseller->zoom?>" size="5" />
				</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td><?php echo form_submit('',lang('btn_submit'))?></td>
	</tr>
</table>
</form>
<?php
	if($reseller->latitude == "" && $reseller->longitude == "" && $reseller->zoom ==""){
		$reseller->latitude = 13.761728449950002;
		$reseller->longitude = 100.6527900695800;
		$reseller->zoom = 13;
	}
?>
<style type="text/css">
		/* css กำหนดความกว้าง ความสูงของแผนที่ */
		#map_canvas { 
			width:500px;
			height:300px;
			margin:auto;
		}
		#map_frm{margin-top:5px;}
		#map_frm label{float:left; width:70px; text-align:right; margin-right:5px;}
</style>
<script type="text/javascript">
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
function initialize() { // ฟังก์ชันแสดงแผนที่
	GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
	// กำหนดจุดเริ่มต้นของแผนที่
	var my_Latlng  = new GGM.LatLng(<?php echo $reseller->latitude?>,<?php echo $reseller->longitude?>);
	var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
	// กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
	var my_DivObj=$("#map_canvas")[0]; 
	// กำหนด Option ของแผนที่
	var myOptions = {
		zoom: <?php echo $reseller->zoom?>, // กำหนดขนาดการ zoom
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