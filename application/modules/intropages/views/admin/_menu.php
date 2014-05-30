<style type="text/css">
#horri_menu{border-bottom:2px solid #0080C0;}
#horri_menu ul li{float:left; padding:5px; background:#f4f4f4; border-right:1px solid #ddd;}
#horri_menu ul li.active{background:#0080C0;}
#horri_menu ul li.active a{color:#fff;}
</style>
<div id="horri_menu">
    <ul>
    	<li <?php echo menu_active('intropages','intropages')?>><a href="intropages/admin/intropages">รูปภาพประชาสัมพันธ์</a></li>
    	<li <?php echo menu_active('intropages','intropage_configs')?>><a href="intropages/admin/intropage_configs">ตั้งค่าหน้าแรก</a></li>
    </ul>
	<br class="clear">
</div>