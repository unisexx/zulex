<?php foreach($menus as $menu):?>
	<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="<?php echo $menu->url?>"><?php echo lang_decode($menu->title)?></a></li>
<?php endforeach;?>