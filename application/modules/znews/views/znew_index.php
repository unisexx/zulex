<div id="new">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <?php echo lang('new&promotion')?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1><?php echo lang('new&promotion')?></h1>
		</div>
	
		<?php foreach($znews as $znew):?>
			<div class="blog">
				<div class="imageheader-news">
					<img src="uploads/znews/<?php echo $znew->image?>" width="200" height="150">
				</div>
				<h2><a href="znews/detail/<?php echo $znew->id?>"><?php echo lang_decode($znew->title)?></a></h2>
                
				<p><?php echo lang_decode($znew->detail)?></p>
				
                <div class="tag"><span class="icon icon-tag-1"></span> <?php echo lang_decode($znew->category->name)?> <i style="font-size:9px; color:#666;">(<?php echo mysql_to_th($znew->created,'S',TRUE) ?>)</i></div>
				<ul>
				<?php foreach ($znew->znew_image->order_by('id','desc')->get() as $image):?>
					<li class="image-list"><a rel="lightbox[znew_<?php echo $znew->id?>]" href="uploads/znews/<?php echo $image->file?>"><img src="uploads/znews/thumbs/<?php echo $image->file?>" width="50" height="37"></a></li>
				<?php endforeach;?>
				</ul>
				<div class="clear"></div>
			</div>
		<?php endforeach;?>
		
		<?php echo $znews->pagination()?>
	</div>
</div>