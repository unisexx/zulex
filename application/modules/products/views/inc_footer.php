<div id="col1">
	<h3>Car Mobile Entertainment</h3>
	<ul id="triple">
		<?php foreach ($product_categories as $key => $product_category):?>
		<?php if($product_category->id == "330"):?>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp;<a href="products/category/<?php echo $product_category->id ?>"><?php echo lang_decode($product_category->name)?></a></li>
		<?php else:?>
			<?php 
				$common_category = new Category();
				$common_category = $common_category->where("parents = $product_category->id")->order_by('id','asc')->get(1);
			?>
			<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp;<a href="products/more/<?php echo $common_category->id ?>"><?php echo lang_decode($product_category->name)?></a></li>
		<?php endif;?>
		<?php endforeach;?>
	</ul>
</div>

<div id="col3">
	<h3>Zulex</h3>
	<ul>
    	<?php echo modules::run('fmenus/inc_footer_menu'); ?>
<!--		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="znews"><?php echo lang('new&promotion')?></a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="abouts"><?php echo lang('about_us')?></a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="contacts"><?php echo lang('contact_us')?></a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="resellers"><?php echo lang('reseller')?></a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="">บริการหลังการขาย</a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="">ลงทะเบียนใบรับประกันสินค้า</a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="resellers/register"><?php echo lang('resellers_register')?></a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="users/register"><?php echo lang('register')?></a></li>
        <li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="http://tracking.zulex.co.th/trackerlogin.aspx" target="_blank">Zulex Fleet Management</a></li>-->
	</ul>
</div>

<div id="col2">
	<h3>Partner</h3>
	<ul>
		<?php foreach($partners as $partner):?>
			<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="<?php echo $partner->url?>" target="_blank"><?php echo $partner->title?></a></li>
		<?php endforeach;?>
	</ul>
	
	<h3>Download</h3>
	<ul>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="softwares">Software & Firmware</a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="brochures">Brochures</a></li>
		<li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="wallpapers">Wallpapers</a></li>
        <li><img src="themes/zulex/images/footer_bullet.png">&nbsp;&nbsp; <a href="manuals">Manuals</a></li>
	</ul>
</div>

<br class="clear">