<div id="carversion">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > แนะนำสินค้า
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1><?php echo lang_decode($category->name)?></h1>
		</div>
		
        <div id="wrap" class="corner">
        	<?php foreach ($carversions as $key=>$carversion):?>
            	<?php if($key==0): ?>
					<div style="border-bottom:1px dotted #D3D5D0;">
                <?php elseif(($key%3)==0): ?>
                	<br clear="all" /></div><div>
                <?php endif; ?>
            	<div class="blog" <?php echo ($key%3 == 0)?'style="border:none;"':'';?>>
                	<img class="imgleft" src="uploads/carversion/<?php echo $carversion->image?>">
                    <div>
                        <h2>รุ่น : <?php echo $carversion->version?></h2>
                        <h2>ปี : <?php echo $carversion->year?></h2>
                        <a href="whats/recommend/<?php echo $carversion->id?>"><img src="themes/zulex/images/carversion_btn.png"></a>
                    </div>
                </div>
            <?php endforeach;?>
            <br clear="all">
        </div>
	</div>
</div>