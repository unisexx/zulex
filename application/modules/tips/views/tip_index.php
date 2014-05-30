<div id="tips">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > Tip & Technic
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Tip & Technic</h1>
		</div>
		
        <ul>
        	<?php foreach($categories as $category):?>
            	<li>
					<h2 class="corner-top"><?php echo lang_decode($category->name)?></h2>
                    <div class="software-item corner-bottom">
                    <?php foreach($category->tips->order_by('orderlist','asc')->get() as $tip):?>
                        	<div class="blog <?php echo alternator('even','odd') ?>">
                            	<a href="tips/view/<?php echo $tip->id?>"><img src="uploads/tips/<?php echo $tip->image?>" width="125" height="80"/></a>
                                <h3><a href="tips/view/<?php echo $tip->id?>"><?php echo lang_decode($tip->title)?></a></h3>
                                <p><?php echo lang_decode($tip->title2);?></p>
                                <div>เขียนเมื่อ : <?php echo mysql_to_th($tip->created,'S',TRUE) ?> น.</div>
                                <br clear="all">
							</div>
                    <?php endforeach;?>
                    <br clear="all">
                    </div>
				</li>
            <?php endforeach;?>
        </ul>
		<?php echo $categories->pagination()?>
        <br clear="all">
	</div>
</div>