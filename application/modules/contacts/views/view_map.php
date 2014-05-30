<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Google Maps JavaScript API Example</title>

<!-- โหลดโปรแกรมสนับสนุนหลักในการทำงาน (Loading the Google Maps API) โดยใช้ script element -->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAsjlbnmTUjA-RpBZO-Jmm0xQED3NELORP5k-CX3o9HKyuxCU1UxT3miN6wBc6OFiQQ1sOhin4ZToUDA" type="text/javascript"></script>

<script type="text/javascript">
function initialize() {
    if (GBrowserIsCompatible()) {	
		var map = new GMap2(document.getElementById("map_canvas"));
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
		map.setCenter(new GLatLng(<?php echo $about->latitude?>,<?php echo $about->longitude?>), <?php echo $about->zoom?>);
		
		/* สร้างหมุดปักโดยมีสัญกรแบบปริยาย */
		map.addOverlay(new GMarker(new GLatLng(<?php echo $about->latitude?>,<?php echo $about->longitude?>), <?php echo $about->zoom?>));
    }
	
 }
</script>
</head>

<!-- กำหนด script ที่ทำงานเมื่อเกิดอุบัติการณ์ onload และ onunload โดยใช้ attribute ชื่อเดียวกันกับอุบัติการณ์ -->
<body onload="initialize()" onunload="GUnload()">

<!-- จัดที่สำหรับเป็นขอบเขตแผนที่ โดยใช้ div element ตั้งค่า id="map_canvas" ให้เรียกใช้ได้สะดวก ใช้ style กำหนดความกว้างและสูง -->
<div id="map_canvas" style="width:635px; height:475px;"></div>
</body>
</html>