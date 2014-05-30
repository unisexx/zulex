<div id="product-detail">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > 
        <a href="products"><?php echo lang('product')?></a> > 
        <?php if($parent_category->parents == 330):?>
        	<a href="products/category/<?php echo $parent_category->id?>"><?php echo lang_decode($parent_category->name)?></a> >
            <a href="products/category/<?php echo $parent_category->id?>"><?php echo lang_decode($category->name)?></a> > 
        <?php else:?>
        	 <a href="products/more/<?php echo $product->category->id?>"><?php echo lang_decode($category->name)?></a> > 
        <?php endif;?> 
        <a href="products/more/<?php echo $product->category->id?>"><?php echo lang_decode($product->category->name)?></a> > 
		<?php echo lang_decode($product->title)?>
	</div>

<div class="addthis">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4d81b22910c1b128" class="addthis_button_compact">Share</a>
<!--<span class="addthis_separator">|</span>
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>-->
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4d81b22910c1b128"></script>
<!-- AddThis Button END -->
</div>
<br class="clear">
	<div id="bodywrap-content">
		<h1><?php echo lang_decode($product->title)?></h1>
		<div id="row1">
			<div class="col1">
				<img src="uploads/products/<?php echo $product->image?>" width="430" height="245">
			</div>
			<?php if($product->icons != ""):?>
			<div class="col2">
				<?php 
					if($product->icons){
						$icons = explode(",",$product->icons);
						foreach($icons as $icon){
							$icon = new Zicon($icon);
					?>
							<img src="uploads/icons/<?php echo $icon->image ?>" width="52">
					<?
						}
					}
				?>
			</div>
			<?php endif;?>
		</div>
		<div id="row2">
			<?php if($product->before != "" or $product->after != ""):?>
			<div class="col1">
				<table>
					<tr>
						<td><div class="corner img"><img  src="uploads/products/<?php echo $product->before?>" width="185"></div></td>
						<td width="25"></td>
						<td><div class="corner img"><img  src="uploads/products/<?php echo $product->after?>" width="185"></div></td>
					</tr>
					<tr>
						<td align="center">Before</td>
						<td></td>
						<td align="center">After</td>
					</tr>
				</table>
			</div>
			<?php endif;?>
			<div class="col2">
				<?php echo $product->video?>
			</div>
		</div>
		
		<br class="clear">
		
		<div id="detail-header">
        	<h2>
        	<?php if(lang_decode($product->detail1) != ""):?><a href="products/product_detail/<?php echo $product->id?>#detail1">[<?php echo lang('product_highlight')?>]</a> <?php endif;?>
            <?php if(lang_decode($product->detail2) != ""):?><a href="products/product_detail/<?php echo $product->id?>#detail2">[<?php echo lang('specification')?>]</a>  <?php endif;?>
            <?php if(lang_decode($product->accessories) != ""):?><a href="products/product_detail/<?php echo $product->id?>#detail3">[<?php echo lang('accessories')?>]</a>  <?php endif;?>
            <?php if(lang_decode($product->softwares) != "" or lang_decode($product->brochures) != "" or lang_decode($product->wallpapers) != ""):?><a href="products/product_detail/<?php echo $product->id?>#detail4">[<?php echo lang('download')?>]</a> <?php endif;?>
            <?php if(lang_decode($product->detail3) != ""):?><a href="products/product_detail/<?php echo $product->id?>#detail5">[<?php echo lang('other')?>]</a> <?php endif;?>
            </h2>
		</div>
		
		<div id="detail-body" class="corner">
			<?php if(lang_decode($product->detail1) != ""):?>
				<div class="header_bg"><a name="detail1"></a><h3><?php echo lang('product_highlight')?></h3></div>
				<div class="content"><?php echo lang_decode($product->detail1)?></div>
			<?php endif;?>
			<?php if(lang_decode($product->detail2) != ""):?>
				<div class="header_bg margintop20"><h3><a name="detail2"></a><?php echo lang('specification')?></h3></div>
				<div class="content"><?php echo lang_decode($product->detail2)?></div>
			<?php endif;?>
			<?php if(lang_decode($product->accessories) != ""):?>
				<div class="header_bg margintop20"><h3><a name="detail3"></a><?php echo lang('accessories')?></h3></div>
				<div class="content">
					<?php 
					if($product->accessories){
						$accessories = explode(",",$product->accessories);
						foreach($accessories as $accessory){
							$accessory = new Product($accessory);
					?>
						<div class="blog">
							<a href="products/product_detail/<?php echo $accessory->id?>"><img src="uploads/products/<?php echo $accessory->image?>" width="180" height="100"></a>
							<div class="title"><a href="products/product_detail/<?php echo $accessory->id?>"><?php echo lang_decode($accessory->title)?></a></div>
						</div>
					<?
						}
					}
					?>
					<br class="clear">
				</div>
			<?php endif;?>
			<?php if(lang_decode($product->softwares) != "" or lang_decode($product->brochures) != "" or lang_decode($product->wallpapers) != ""):?>
				<div class="header_bg margintop20"><h3><a name="detail4"></a><?php echo lang('download')?></h3></div>
					<?php if($product->softwares):?>
                    <div class="content">
                        <h4><?php echo lang('software')?></h4>
                        <ul>
                            <?php $downloads = explode(",",$product->softwares);?>
                            <?php foreach($downloads as $download):?>
                            <?php $software = new Software($download);?>
                            <li><a href="softwares/view/<?php echo $software->id?>" target="_blank"><?php echo $software->title?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
					<?php endif;?>
					<?php if($product->brochures):?>
                    <div class="content">
                        <h4><?php echo lang('brochures')?></h4>
                        <ul>
                            <?php $downloads = explode(",",$product->brochures);?>
                            <?php foreach($downloads as $download):?>
                            <?php $brochure = new Brochure($download);?>
                            <li><a href="uploads/brochures/<?php echo $brochure->image?>" target="_blank"><?php echo lang_decode($brochure->title)?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
					<?php endif;?>
					<?php if($product->wallpapers):?>
                    <div class="content">
                        <h4><?php echo lang('wallpaper')?></h4>
                        <ul>
                            <?php $downloads = explode(",",$product->wallpapers);?>
                            <?php foreach($downloads as $download):?>
                            <?php $wallpaper = new Wallpaper($download);?>
                            <li><a href="uploads/wallpapers/<?php echo $wallpaper->image?>" target="_blank"><?php echo lang_decode($wallpaper->title)?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
					<?php endif;?>
			<?php endif;?>
			<?php if(lang_decode($product->detail3) != ""):?>
				<div class="header_bg margintop20"><h3><a name="detail5"></a><?php echo lang('other')?></h3></div>
				<div class="content"><?php echo lang_decode($product->detail3)?></div>
			<?php endif;?>
		</div>
		<div class="product_mornitor">
			<?php foreach($product->product_image->order_by('id','asc')->get() as $image_mornitor):?>
				<img src="uploads/products/product_mornitor/<?php echo $image_mornitor->file?>" width="199">
			<?php endforeach;?>
			<br class="clear">
		</div>
	</div>
</div>