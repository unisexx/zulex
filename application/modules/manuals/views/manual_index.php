<div id="software">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > Manual
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Manual</h1>
		</div>
		
        <ul>
        	<?php foreach($categories as $category):?>
            	<li>
					<h2 class="corner-top"><?php echo lang_decode($category->name)?></h2>
                    <div class="software-item corner-bottom">
                    <?php foreach($category->manual->order_by('orderlist','asc')->get() as $manual):?>
                        	<ul>
                        		<li><span class="icon icon-bullet-blue"></span><a href="manuals/download/<?php echo $manual->id?>"><?php echo lang_decode($manual->title)?></a></li>
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