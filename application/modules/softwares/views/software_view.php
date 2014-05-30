<div id="software">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="softwares">Software & Firmware</a> > <?php echo lang_decode($software->category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Software & Firmware</h1>
		</div>
		
        <div class="view-content">
            <h2 class="corner-top"><?php echo lang_decode($software->title)?></h2>
            <div class="software-item corner-bottom">
                    <div class="inner">
                        <h3><span class="icon icon-application-view-detail"></span> รายละเอียดโปรแกรม</h3>
                        <div class="software-detail-wrap">
                            <?php echo lang_decode($software->detail)?>
                        </div>
                        
                        <h3 style="margin:15px 0 10px;"><span class="icon icon-application-view-detail"></span> ดาวน์โหลดโปรแกรม</h3>
						<div class="software-detail-wrap">
                        <?php if($software->file != ""):?>
							<span class="icon icon-disk"></span> <a href="uploads/softwares/<?php echo $software->file?>"><?php echo lang_decode($software->title)?></a>
						<?php endif;?>
                        <?php if($software->url != ""):?>
                        	<span class="icon icon-page-link"></span> <a href="<?php echo $software->url?>" target="_blank"><?php echo $software->url?></a>
                        <?php endif;?>
                        </div>
                    </div>
            </div>
		</div>
        
        <br clear="all">
	</div>
</div>