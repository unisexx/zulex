<div id="resellers">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <?php echo lang('reseller')?>
	</div>
	
	<div id="bodywrap-content" class="corner">
    
    <div class="header-bar">
		<h1><?php echo lang('reseller')?></h1>
	</div>
    
		<div id="col1">
			<ul>
			<?php foreach($categories->where("module = 'resellers' and parents = 1")->order_by('orderlist','asc')->get() as $category):?>
				<li class="clear">
					<div class="provincial"><?php echo lang_decode($category->name)?></div>
					
					<div class="navcentre">
					<ul>
					<?php foreach($categories->where("module = 'resellers' and parents = $category->id")->order_by('orderlist','asc')->get() as $sub_category):?>
						<li>
							<!--<?php if(lang_decode($sub_category->name) == "กรุงเทพมหานคร" or lang_decode($sub_category->name) == "Bangkok"):?>
								<a href="resellers/category/<?php echo $sub_category->id?>"><?php echo lang_decode($sub_category->name)?></a> |
							<?php else:?>
								<?php $reseller_category = $categories->where("parents = $sub_category->id")->get();?>
								<a href="resellers/store/<?php echo $reseller_category->id?>"><?php echo lang_decode($sub_category->name)?></a> |
							<?php endif;?>-->
                            
                            <a href="resellers/category/<?php echo $sub_category->id?>"><?php echo lang_decode($sub_category->name)?></a> |
						</li>
					<?php endforeach;?>
					</ul>
					</div>
				
				</li>
			<?php endforeach;?>
			</ul>
		</div>
		<div id="col2">
        	<?php if(@$this->session->userdata('lang') == "th"):?>
				<img src="themes/zulex/images/thai_map_th.png">
            <?php else:?>
            	<img src="themes/zulex/images/thai_map_en.png">
            <?php endif;?>
		</div>	
		<div class="clear"></div>	
	</div>
</div>