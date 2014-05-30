<script type="text/javascript">
 	$(document).ready(function() {
		$('#head2.blog2 div.krob div.chooseme').click(function(){
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#head .selection, #head .chooseme").remove();
			$(this).clone().appendTo($("#head")).hide().fadeIn();
			$("#head .chooseme").removeAttr("style");
			$('#head .chooseme input').removeAttr("disabled");
			$('#head .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
	
		$('#antenna2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#antenna .selection, #antenna .chooseme").remove();
			$(this).clone().appendTo($("#antenna"));
			$("#antenna .chooseme").removeAttr("style");
			$('#antenna .chooseme input').removeAttr("disabled");
			$('#antenna .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
		
		$('#rear2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#rear .selection, #rear .chooseme").remove();
			$(this).clone().appendTo($("#rear")).hide().fadeIn();
			$("#rear .chooseme").removeAttr("style");
			$('#rear .chooseme input').removeAttr("disabled");
			$('#rear .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
		
		$('#amp2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#amp .selection, #amp .chooseme").remove();
			$(this).clone().appendTo($("#amp")).hide().fadeIn();
			$("#amp .chooseme").removeAttr("style");
			$('#amp .chooseme input').removeAttr("disabled");
			$('#amp .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
		
		$('#speak2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#speak .selection, #speak .chooseme").remove();
			$(this).clone().appendTo($("#speak")).hide().fadeIn();
			$("#speak .chooseme").removeAttr("style");
			$('#speak .chooseme input').removeAttr("disabled");
			$('#speak .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
		
		$('#eq2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#eq .selection, #eq .chooseme").remove();
			$(this).clone().appendTo($("#eq")).hide().fadeIn();
			$("#eq .chooseme").removeAttr("style");
			$('#eq .chooseme input').removeAttr("disabled");
			$('#eq .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
		
		$('#head_rest2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#head_rest .selection, #head_rest .chooseme").remove();
			$(this).clone().appendTo($("#head_rest")).hide().fadeIn();
			$("#head_rest .chooseme").removeAttr("style");
			$('#head_rest .chooseme input').removeAttr("disabled");
			$('#head_rest .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
		
		$('#roof_mount2.blog2 div.krob div.chooseme').click(function(){
			$(this).siblings('.chooseme').removeAttr("style");
			$(this).parent().siblings().children('.chooseme').removeAttr("style");
			$(this).css('background','#A0BADD');
			
			$("#roof_mount .selection, #roof_mount .chooseme").remove();
			$(this).clone().appendTo($("#roof_mount")).hide().fadeIn();
			$("#roof_mount .chooseme").removeAttr("style");
			$('#roof_mount .chooseme input').removeAttr("disabled");
			$('#roof_mount .chooseme img').attr({
				width: '115',
				height: '65'
			});
		});
	});
</script>

<div id="customize">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > แนะนำสินค้า
	</div>
	
	<div id="bodywrap-content" class="corner">
        
		<div class="header-bar">
			<h1>เลือกสินค้าตามสไตล์คุณ</h1>
		</div>
        
       <form id="chosen" method="post" action="whats/result">
			<div align="right" style="margin:0 30px 0 0;">
        	<a href="" onClick="history.go(-1); return false;"><img src="themes/zulex/images/back_btn.png"></a>
        	<input id="submit_btn" type="submit" value="submit" />
            </div>
         
		<br />
		<div class="header-bar">
			<h1>สินค้าแนะนำ</h1>
		</div>
        
			<div class="blog">
            	<div class="col">
                    <div id="head" class="box" align="center">
                            <h4>Head Unit</h4>
                            <div class="selection">
                            	<?php if(empty($headunit->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="headunit" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $headunit->image?>" width="115" height="65" />
                                    <input type="hidden" name="headunit" value="<?php echo $headunit->id ?>">
                                    <h2><?php echo lang_decode($headunit->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                 </div>
                
                <div class="col">
                    <div id="antenna" class="box" align="center">
                            <h4>TV-Antenna</h4>
							<div class="selection">
                            	<?php if(empty($antenna->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="antenna" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                <img src="uploads/products/<?php echo $antenna->image?>" width="115" height="65" />
                                <input type="hidden" name="antenna" value="<?php echo $antenna->id ?>">
                                <h2><?php echo lang_decode($antenna->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                </div>
                
                <div class="col">
                    <div id="rear" class="box" align="center">
                            <h4>Rear View Camera</h4>
                            <div class="selection">
								<?php if(empty($rear_view_camera->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="rear_view_camera" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $rear_view_camera->image?>" width="115" height="65" />
                                    <input type="hidden" name="rear_view_camera" value="<?php echo $rear_view_camera->id ?>">
                                    <h2><?php echo lang_decode($rear_view_camera->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                </div>
                
				<div class="col">
                    <div id="amp" class="box" align="center">
                            <h4>Amplifier/SUB BOX</h4>
                            <div class="selection">
								<?php if(empty($amplifier_subbox->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="amplifier_subbox" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $amplifier_subbox->image?>" width="115" height="65" />
                                    <input type="hidden" name="amplifier_subbox" value="<?php echo $amplifier_subbox->id ?>">
                                    <h2><?php echo lang_decode($amplifier_subbox->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                </div>
                
                <div class="col">
                    <div id="speak" class="box" align="center">
                            <h4>Speaker</h4>
                            <div class="selection">
								<?php if(empty($speaker->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="speaker" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $speaker->image?>" width="115" height="65" />
                                    <input type="hidden" name="speaker" value="<?php echo $speaker->id ?>">
                                    <h2><?php echo lang_decode($speaker->title)?></h2>
								<?php endif;?>
                            </div>
                    </div>
                </div>
                
                <div class="col">
                    <div id="eq" class="box" align="center">
                            <h4>EQ</h4>
                            <div class="selection">
                            	<?php if(empty($eq->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="eq" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $eq->image?>" width="115" height="65" />
                                    <input type="hidden" name="eq" value="<?php echo $eq->id ?>">
                                    <h2><?php echo lang_decode($eq->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                </div>
                
                <br clear="all" /><br />
               <!-- <hr style="color:#ABB4BD;"/>-->
                
                <div class="col">
                    <div id="head_rest" class="box" align="center">
                            <h4>Head Rest Monitor</h4>
                            <div class="selection">
								<?php if(empty($head_rest_monitor->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="head_rest_monitor" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $head_rest_monitor->image?>" width="115" height="65" />
                                    <input type="hidden" name="head_rest_monitor" value="<?php echo $head_rest_monitor->id ?>">
                                    <h2><?php echo lang_decode($head_rest_monitor->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                </div>
                
                <div class="col">
                    <div id="roof_mount" class="box" align="center">
                            <h4>Roof Mount Monitor</h4>
                            <div class="selection">
								<?php if(empty($roof_mount_monitor->id)):?>
                                    <img src="themes/zulex/images/none.png" width="115" height="65" />
									<input type="hidden" name="roof_mount_monitor" value="" disabled="disabled">
                                    <h2>Non-Selected</h2>
                                <?php else:?>
                                    <img src="uploads/products/<?php echo $roof_mount_monitor->image?>" width="115" height="65" />
                                    <input type="hidden" name="roof_mount_monitor" value="<?php echo $roof_mount_monitor->id ?>">
                                    <h2><?php echo lang_decode($roof_mount_monitor->title)?></h2>
                                <?php endif;?>
                            </div>
                    </div>
                </div>
                
                <br clear="all">
            </div>
            
            
            <div class="header-bar">
                <h1>เลือกแก้ไขสินค้า</h1>
            </div>
            
            	<h3>Head Unit Model</h3>
				<div id="head2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->headunit != ""):?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php $headunit2 = $product->where('id',$what->headunit)->get();?>
                                    <div class="chooseme" <?php echo ($headunit->id == $headunit2->id || ($key+1 == $product_set))?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $headunit2->image?>" width="85" height="50" />
                                        <input type="hidden" name="headunit" value="<?php echo $headunit2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($headunit2->title);?></h2>
                                    </div>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($headunit->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="headunit" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
                 <h3>TV-Antenna</h3>
				<div id="antenna2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->antenna != ""):?>
                            	 <?php	$antenna_ids = explode(",", $what->antenna);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($antenna_ids as $antenna_id):?>
									<?php $antenna2 = $product->where("id = $antenna_id")->get();?>
                                    <div class="chooseme" <?php echo ($antenna->id == $antenna2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $antenna2->image?>" width="85" height="50" />
                                        <input type="hidden" name="antenna" value="<?php echo $antenna2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($antenna2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($antenna->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="antenna" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
				<h3>Rear View Camera</h3>
				<div id="rear2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->rear_view_camera != ""):?>
                            	 	<?php $rear_view_camera_ids = explode(",", $what->rear_view_camera);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($rear_view_camera_ids as $rear_view_camera_id):?>
									<?php $rear_view_camera2 = $product->where("id = $rear_view_camera_id")->get();?>
                                    <div class="chooseme" <?php echo ($rear_view_camera->id == $rear_view_camera2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $rear_view_camera2->image?>" width="85" height="50" />
                                        <input type="hidden" name="rear_view_camera" value="<?php echo $rear_view_camera2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($rear_view_camera2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($rear_view_camera->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="rear_view_camera" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
                <h3>Amplifier/SUB BOX</h3>
				<div id="amp2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->amplifier_subbox != ""):?>
								<?php $amplifier_subbox_ids = explode(",", $what->amplifier_subbox);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($amplifier_subbox_ids as $amplifier_subbox_id):?>
									<?php $amplifier_subbox2 = $product->where("id = $amplifier_subbox_id")->get();?>
                                    <div class="chooseme" <?php echo ($amplifier_subbox->id == $amplifier_subbox2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $amplifier_subbox2->image?>" width="85" height="50" />
                                        <input type="hidden" name="amplifier_subbox" value="<?php echo $amplifier_subbox2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($amplifier_subbox2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($amplifier_subbox->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="amplifier_subbox" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
				<h3>Speaker</h3>
				<div id="speak2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->speaker != ""):?>
                            <?php $speaker_ids = explode(",", $what->speaker);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($speaker_ids as $speaker_id):?>
                                    <?php $speaker2 = $product->where("id = $speaker_id")->get();?>
                                    <div class="chooseme" <?php echo ($speaker->id == $speaker2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $speaker2->image?>" width="85" height="50" />
                                        <input type="hidden" name="speaker" value="<?php echo $speaker2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($speaker2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($speaker->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="speaker" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
				<h3>EQ</h3>
				<div id="eq2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->eq != ""):?>
							<?php $eq_ids = explode(",", $what->eq);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($eq_ids as $eq_id):?>
									<?php $eq2 = $product->where("id = $eq_id")->get();?>
                                    <div class="chooseme" <?php echo ($eq->id == $eq2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $speaker2->image?>" width="85" height="50" />
                                        <input type="hidden" name="eq" value="<?php echo $speaker2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($speaker2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($eq->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="eq" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
				<h3>Head Rest Monitor</h3>
				<div id="head_rest2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->head_rest_monitor != ""):?>
							<?php $head_rest_monitor_ids = explode(",", $what->head_rest_monitor);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($head_rest_monitor_ids as $head_rest_monitor_id):?>
									<?php $head_rest_monitor2 = $product->where("id = $head_rest_monitor_id")->get();?>
                                    <div class="chooseme" <?php echo ($head_rest_monitor->id == $head_rest_monitor2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $head_rest_monitor2->image?>" width="85" height="50" />
                                        <input type="hidden" name="head_rest_monitor" value="<?php echo $head_rest_monitor2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($head_rest_monitor2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($head_rest_monitor->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="head_rest_monitor" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
                 <h3>Roof Mount Monitor</h3>
				<div id="roof_mount2" class="blog2 corner">
                     <?php foreach($whats as $key=>$what):?>
                            <?php if($what->roof_mount_monitor != ""):?>
							<?php $roof_mount_monitor_ids = explode(",", $what->roof_mount_monitor);?>
                                <div class="krob" align="center">
                                	<h5>ชุดที่ <?php echo $key+1?></h5>
                                    <?php foreach ($roof_mount_monitor_ids as $roof_mount_monitor_id):?>
                                <?php $roof_mount_monitor2 = $product->where("id = $roof_mount_monitor_id")->get();?>
                                    <div class="chooseme" <?php echo ($roof_mount_monitor->id == $roof_mount_monitor2->id)?"style='background:#A0BADD;'":"";?>>
                                        <img src="uploads/products/<?php echo $roof_mount_monitor2->image?>" width="85" height="50" />
                                        <input type="hidden" name="roof_mount_monitor" value="<?php echo $roof_mount_monitor2->id ?>" disabled="disabled">
                                        <h2><?php echo lang_decode($roof_mount_monitor2->title);?></h2>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                        <div class="krob" align="center">
								<h5 style="margin:0 10px;">Non-Selected</h5>
								<div class="chooseme" align="center" <?php echo (empty($roof_mount_monitor->id))?"style='background:#A0BADD;'":"";?>>
									<img src="themes/zulex/images/none.png" width="85" height="50" />
									<input type="hidden" name="roof_mount_monitor" value="" disabled="disabled">
                                    <h2 style="margin:0 10px;">Non-Selected</h2>
								</div>
						</div>
                        <br clear="all" />
                 </div>
                 
             
       </form>
       
	</div>
</div>