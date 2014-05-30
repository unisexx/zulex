<style type="text/css">
#horri_menu{
	border-bottom:2px solid #0080C0;
}
#horri_menu ul li{
	float:left;
	padding:5px;
	background:#f4f4f4;
	border-right:1px solid #ddd;
}
#horri_menu ul li.active{
	background:#0080C0;
}
#horri_menu ul li.active a{
	color:#fff;
}
</style>
<div id="horri_menu">
    <ul>
    	<li <?php echo menu_active('webboards','webboard_status_configs')?>><a href="webboards/admin/webboard_status_configs">ที่อยู่บริษัท</a></li>
		<li <?php echo menu_active('webboards','webboard_post_levels')?>><a href="webboards/admin/webboard_post_levels">ส่งข้อความหาเราที่นี่</a></li>
    </ul>
	<br class="clear">
</div>
