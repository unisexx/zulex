<div id="wallpaper">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > Brochure
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Brochure</h1>
		</div>
		
        <ul>
        	<?php foreach($categories as $category):?>
            	<li>
					<a href="brochures/view/<?php echo $category->id?>/">
                    	<span></span>
                        <img class="imgtooltip" title="<?php echo lang_decode($category->name)?>" alt="image" src="uploads/brochures/thumbs/<?php echo $category->brochure->order_by("id", "desc")->get()->image?>" style="width:170px; height:120px;">
					</a>
                    <div class="txtgallery"><?php echo lang_decode($category->name)?><div class="qtyphoto"><?php echo ($category->brochure->result_count() == "1")?"(1 image)":$category->brochure->result_count()." (images)";?></div></div>
				</li>
            <?php endforeach;?>
        </ul>
		<?php echo $categories->pagination()?>
        <br clear="all">
	</div>
</div>