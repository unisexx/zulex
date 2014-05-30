<div id="tips">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="tips">Tip & Technic</a> > <?php echo lang_decode($tip->category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1>Tip & Technic</h1>
		</div>
		
        <div class="view-content">
            <h2 class="corner-top"><?php echo lang_decode($tip->title)?></h2>
            <div class="software-item corner-bottom">
                    <div class="inner">
                        <div class="software-detail-wrap">
                            <?php echo lang_decode($tip->detail)?>
                            <div align="right" style="color:#888; margin:10px 0 0 0;">เขียนเมื่อ : <?php echo mysql_to_th($tip->created,'S',TRUE) ?> น.</div>
                        </div>
                    </div>
            </div>
		</div>
        
        <br clear="all">
	</div>
</div>