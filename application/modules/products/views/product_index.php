<script type="text/javascript">
$(function(){
	$(".blog li a img").hover(function(){
		$(this).stop().addClass('active').animate({
					width: 200,
					left: '-20px',
					top: '-10px'
				}, 200 );
	},function(){
		$(this).stop().animate({
					width: 160,
					left: '0px',
					top: '0px'
				}, 200 ).removeClass('active');
	})
});
</script>
<div id="product">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <?php echo lang('product')?>
	</div>
	
	<div id="bodywrap-content" class="corner">
    
    <div class="header-bar">
		<h1><?php echo lang('product')?></h1>
	</div>
    
    	<div id="menu"> 
        <div class="rambobar"> 
         <ul> 
      		
            <table>
			<?php foreach ($categories as $key => $category):?>
                <?php if($key==0): ?>
				</tr><td>
                <?php elseif(($key%6)==0): ?>
                </td></tr><tr><td>
                <?php endif; ?>
                <div class="blog">
                    <?php if($category->id == "330"):?>
                    	<li>
                        <a class="ramboico" href="products/category/<?php echo $category->id?>">
                        <img src="uploads/categories/<?php echo $category->icon?>" >
                        </a>
                        <a href="products/category/<?php echo $category->id?>"><h3 align="center"><?php echo lang_decode($category->name,'')?></h3></a>
                        </li> 
                    <?php else:?>
                        <?php 
                            $product_category = new Category();
                            $product_category = $product_category->where("parents = $category->id")->order_by('id','asc')->get(1);
                        ?>
                        <li>
                        <a class="ramboico" href="products/more/<?php echo $product_category->id?>">
                        <img src="uploads/categories/<?php echo $category->icon?>" >
                        </a>
                        <a href="products/more/<?php echo $product_category->id?>"><h3 align="center"><?php echo lang_decode($category->name,'')?></h3></a>
                        </li> 
                    <?php endif;?>
                </div>
            <?php endforeach;?>
                 </td></tr>
        </table>

        </ul>
        </div>
		</div>
        
        <br class="clear" />
	</div>
</div>