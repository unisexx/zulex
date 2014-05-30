<div id="wallpaper">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="brochures">Brochure</a> > <?php echo lang_decode($category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Brochure</h1>
		</div>
		
        <ul>
        	<?php foreach($brochures as $brochure):?>
            	<li class="view">
					<a rel="lightbox[brochure]" href="uploads/brochures/<?php echo $brochure->image?>">
                        <img class="imgtooltip" title="<?php echo lang_decode($brochure->title)?>" alt="<?php echo lang_decode($brochure->title)?>" src="uploads/brochures/thumbs/<?php echo $brochure->image?>">
					</a>
                    <div class="txtgallery"><?php echo lang_decode($brochure->title)?> <a href="brochures/download/<?php echo $brochure->id?>"><div class="icon icon-disk"></div></a></div>
				</li>
            <?php endforeach;?>
        </ul>
		<?php echo $brochures->pagination()?>
        <br clear="all">
	</div>
</div>