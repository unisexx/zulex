<?php foreach($menus as $menu):?>
	<li><a href="<?php echo $menu->url?>"><span><?php echo lang_decode($menu->title)?></span></a></li>
<?php endforeach;?>