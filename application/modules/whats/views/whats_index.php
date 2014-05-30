<div id="what">
	<div class="breadcrumb">
		<a href="#"><?php echo lang('home')?></a> > What Fit In My Car
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div id="blog-wrap">
		<?php foreach ($category_carbrands as $key => $category_carbrand):?>
                <?php if(($key%3)==0 && $key!=0): ?>
                	<br clear="all" /><br />
                <?php endif; ?>
			<div class="blog">
				<div class="header"><h1><?php echo lang_decode($category_carbrand->name)?></h1></div>
				<div class="body">
					<ul>
					<?php foreach ($carmodel->where("module = 'whats' and parents = $category_carbrand->id")->order_by('orderlist','asc')->get() as $sub_category):?>
						<li><span class="icon icon-car"></span>&nbsp;&nbsp;<a href="whats/carversion/<?php echo $sub_category->id?>"><?php echo lang_decode($sub_category->name)?></a></li>
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