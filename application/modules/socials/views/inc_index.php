<?php foreach($socials as $social):?>
	<a target="_blank" href="<?php echo $social->url?>"><img src="uploads/socials/<?php echo $social->image?>" width="16"></a>
<?php endforeach;?>