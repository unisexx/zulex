<div id="wallpaper">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="wallpapers">Wallpaper</a> > <?php echo lang_decode($category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Wallpaper</h1>
		</div>
		
        <ul>
        	<?php foreach($wallpapers as $wallpaper):?>
            	<li>
					<a rel="lightbox[wallpaper]" href="uploads/wallpapers/<?php echo $wallpaper->image?>">
                        <img class="imgtooltip" title="<?php echo lang_decode($wallpaper->title)?>" alt="<?php echo lang_decode($wallpaper->title)?>" src="uploads/wallpapers/thumbs/<?php echo $wallpaper->image?>">
					</a>
                    <div class="txtgallery"><?php echo lang_decode($wallpaper->title)?> <a href="wallpapers/download/<?php echo $wallpaper->id?>"><div class="icon icon-disk"></div></a></div>
				</li>
            <?php endforeach;?>
        </ul>
		<?php echo $wallpapers->pagination()?>
        <br clear="all">
	</div>
</div>