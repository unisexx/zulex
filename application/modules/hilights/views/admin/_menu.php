<style type="text/css">
#horri_menu{border-bottom:2px solid #0080C0;}
#horri_menu ul li{float:left; padding:5px; background:#f4f4f4; border-right:1px solid #ddd;}
#horri_menu ul li.active{background:#0080C0;}
#horri_menu ul li.active a{color:#fff;}
</style>
<div id="horri_menu">
    <ul>
    	<li <?php echo menu_active('hilights','hilights')?>><a href="hilights/admin/hilights">ไฮไลท์ตรงกลาง</a></li>
    	<li <?php echo menu_active('hilights','side_hilights')?>><a href="hilights/admin/side_hilights">ไฮไลท์แถบข้าง</a></li>
    </ul>
	<br class="clear">
</div>