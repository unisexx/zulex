<div id="wallpaper">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > Wallpaper
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Wallpaper</h1>
		</div>
		
        <ul>
        	<?php foreach($categories as $category):?>
            	<li>
					<a href="wallpapers/view/<?php echo $category->id?>/">
                    	<span></span>
                        <img class="imgtooltip" title="<?php echo lang_decode($category->name)?>" alt="image" src="uploads/wallpapers/thumbs/<?php echo $category->wallpaper->order_by("id", "desc")->get()->image?>">
					</a>
                    <div class="txtgallery"><?php echo lang_decode($category->name)?><div class="qtyphoto"><?php echo ($category->wallpaper->result_count() == "1")?"(1 image)":$category->wallpaper->result_count()." (images)";?></div></div>
				</li>
            <?php endforeach;?>
        </ul>
		<?php echo $categories->pagination()?>
        <br clear="all">
	</div>
</div>