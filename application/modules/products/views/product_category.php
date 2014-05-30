<div id="product-category">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="products"><?php echo lang('product')?></a> > <?php echo lang_decode($category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div id="blog-wrap">
		<?php foreach ($categories->where("module = 'products' and parents = $parent_id")->order_by('orderlist','asc')->get() as $key => $category):?>
                <?php if(($key%3)==0 && $key!=0): ?>
                	<br clear="all" /><br />
                <?php endif; ?>
			<div class="blog">
				<div class="header"><h1><?php echo lang_decode($category->name)?></h1></div>
				<div class="body">
					<ul>
					<?php foreach ($categories->where("module = 'products' and parents = $category->id")->order_by('orderlist','asc')->get() as $sub_category):?>
						<li><span class="icon icon-resultset-next-1"></span><a href="products/more/<?php echo $sub_category->id?>"><?php echo lang_decode($sub_category->name)?></a></li>
					<?php endforeach;?>
					</ul>
				</div>
				<div class="footer"></div>
			</div>
		<?php endforeach;?>
        <br clear="all" />
		</div>
		<br class="clear">
	</div>
</div>