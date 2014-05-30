<div id="new">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="znews"><?php echo lang('new&promotion')?></a> > <?php echo lang_decode($znew->title)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1><?php echo lang_decode($znew->title)?></h1>
		</div>
		
		<div class="wrap">
			<div class="detail">
				<?php echo lang_decode($znew->detail)?>
                <div class="tag"><span class="icon icon-tag-1"></span> <?php echo lang_decode($znew->category->name)?> <i style="font-size:9px; color:#666;">(<?php echo mysql_to_th($znew->created,'S',TRUE) ?>)</i></div>
			</div>
			
			<div class="image corner5">
				<h3><?php echo lang('image_attacth')?></h3>
				<ul>
					<?php foreach ($znew->znew_image->order_by('id','desc')->get() as $image):?>
						<li class="image-list2">
                        	<div style="float:left; margin:0 5px 0 0;">
                                <img src="uploads/znews/thumbs/<?php echo $image->file?>" width="50" height="37">
                                <div style="padding:0 0 0 5px;">
                                <a rel="lightbox[znew_<?php echo $znew->id?>]" href="uploads/znews/<?php echo $image->file?>"><span class="icon icon-magnifier"></span></a>
                                <a href="znews/download/<?php echo $image->id?>"><span class="icon icon-disk"></span></a>
                                </div>
                            </div>
						</li>
					<?php endforeach;?>
				</ul>
                <br clear="all" />
			</div>
		</div>
	</div>
</div>