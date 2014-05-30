<div id="software">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > Software & Firmware
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Software & Firmware</h1>
		</div>
		
        <ul>
        	<?php foreach($categories as $category):?>
            	<li>
					<h2 class="corner-top"><?php echo lang_decode($category->name)?></h2>
                    <div class="software-item corner-bottom">
                    <?php foreach($category->software as $software):?>
                        	<ul>
                        		<li><span class="icon icon-bullet-blue"></span><a href="softwares/view/<?php echo $software->id?>"><?php echo lang_decode($software->title)?></a></li>
                            </ul>
                    <?php endforeach;?>
                    </div>
				</li>
            <?php endforeach;?>
        </ul>
		<?php echo $categories->pagination()?>
        <br clear="all">
	</div>
</div>