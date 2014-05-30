<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
	tiny('detail1[th],detail1[en]');
	tiny('detail2[th],detail2[en]');
	tiny('detail3[th],detail3[en]');
	tiny('highlight2_detail[th],highlight2_detail[en]');

	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<script type="text/javascript">
			$(document).ready( function() {
				// Default options
				$("#accessories, #softwares, #icons, #brochures, #wallpapers").multiSelect();
			});			
</script>
<script type="text/javascript">
	$(function(){
		$("input[type=button]").live('click',function(){
			$(this).parent().parent().after(
			'<tr>' +
			'<th></th>' +
			'<td><?php echo form_upload('file[]','','size=72')?> <input type="button" value="เพิ่ม" /> <i>ไฟล์ภาพขนาด 200 x 123 พิกเซล</i></td>' +
			'</tr>'
			);
		})
	})
</script>
<h1>สินค้า</h1>

<table class="list">
	<tr>
		<th><a href="products/admin/categories/index">หมวดหมู่</a> » <a href="products/admin/categories/sub_categories/<?php echo $sub_categories_1->id?>"><?php echo lang_decode($sub_categories_1->name)?></a> » <a href="products/admin/categories/sub_categories_2/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>"><?php echo lang_decode($parent_category->name)?></a> » <a href="products/admin/products/index/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $category->id ?>"><?php echo lang_decode($category->name) ?></a></th>
	</tr>
</table>
<br>
<form method="post" action="products/admin/products/save/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $product->id?>" id="frm" enctype="multipart/form-data">
<table class="form tab">
	<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
	<tr>
	<tr><td></td></tr>
	<?php if(is_file('uploads/products/'.$product->image)): ?>
	<tr><th></th><td><a class="btn" href="products/admin/products/remove_image/<?php echo $product->id?>" />x</a><br /><img class="ex_img" src="uploads/products/<?php echo $product->image ?>" width="430" height="245" /></td></tr>
	<?php endif; ?>
	<tr>
		<th>รูปถ่าย : </th>
		<td><input type="file" name="image" size="72" /> <i>ไฟล์ภาพขนาด 430 x 245 พิกเซล</i></td>
	</tr>
	<tr>
		<th>Before : </th>
		<td>
			<input type="file" name="before" size="72" />
			<?php if($product->before):?>
				<a rel="lightbox[image]" href="uploads/products/<?php echo $product->before?>" title="Before"><span class="icon icon-picture"></span></a>
				<a href="products/admin/products/remove_before/<?php echo $product->id?>" onclick="return confirm('ต้องการลบรูปนี้')" /><span class="icon icon-cross"></span></a>
			<?php endif;?>
            <i>ไฟล์ภาพขนาด 185 x 95 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>After : </th>
		<td>
			<input type="file" name="after" size="72" />
			<?php if($product->after):?>
				<a rel="lightbox[image]" href="uploads/products/<?php echo $product->after?>"  title="After"><span class="icon icon-picture"></span></a>
				<a  href="products/admin/products/remove_after/<?php echo $product->id?>" onclick="return confirm('ต้องการลบรูปนี้')" /><span class="icon icon-cross"></span></a>
			<?php endif;?>
            <i>ไฟล์ภาพขนาด 185 x 95 พิกเซล</i>
		</td>
	</tr>
	<tr>
		<th>ชื่อสินค้า :</th>
		<td>
		<?php echo form_input('title[th]',lang_decode($product->title,'th'),'class=full rel=th');?>
		<?php echo form_input('title[en]',lang_decode($product->title,'en'),'class=full rel=en');?>
		</td>
	</tr>
    <tr>
		<th>หมวด :</th>
		<td>
			<?php echo form_dropdown('category_id',$product->category->get_option('parents = '.$category->parents),$this->uri->segment(7, 0),'');?>
        </td>
	</tr>
	<tr>
		<th>โค้ดวิดีโอ :</th>
		<td>
		<?php echo form_textarea('video',$product->video,'class=full rel=th style="height:50px;"');?>
		</td>
	</tr>
	<tr>
		<th>ไอค่อน :</th>
		<td width="800">
        	<?php $product_icons = explode(",", $product->icons);?>
			<?php foreach($icons as $key => $icon):?>
				<input id="icon<?php echo $key?>" type="checkbox" name="icons[]" value="<?php echo $icon->id?>" 
                <?php 
						foreach ($product_icons as $value){
							if($value == $icon->id){
								echo "checked='checked'";
							}
						}
					
					//if(ereg("^$icon->id", "$product->icons")){
						//echo "checked=checked";
					//}
				?>
                > <label for="icon<?php echo $key?>"><img src="uploads/icons/<?php echo $icon->image ?>" width="52" height="52"></label>
			<?php endforeach;?>
		</td>
	</tr>
	<tr>
		<th>อุปกรณ์เสริม :</th>
		<td>
        <?php $product_accs = explode(",", $product->accessories);?>
				<select id="accessories" name="accessories[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach ($categories as $category):?>
						<optgroup label="<?php echo lang_decode($category->name)?>">
							<?php foreach ($category->product->order_by('id','desc')->get() as $product_accessories):?>
								<option value="<?php echo $product_accessories->id?>" 
								<?php 
									foreach ($product_accs as $product_acc){
										if($product_acc == $product_accessories->id){
											echo "selected=selected";
										}
									}
                                ?>
								><?php echo lang_decode($product_accessories->title)?></option>
							<?php endforeach;?>
						</optgroup>
					<?php endforeach;?>
				</select>
		</td>
	</tr>
	<tr>
		<th>ดาวน์โหลดซอร์ฟแวร์ :</th>
		<td>
        <?php $software_downloads = explode(",", $product->softwares);?>
				<select id="softwares" name="softwares[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach ($software_categories as $software_category):?>
						<optgroup label="<?php echo lang_decode($software_category->name)?>">
							<?php foreach ($software_category->software->order_by('id','desc')->get() as $software):?>
								<option value="<?php echo $software->id?>" 
								<?php 
									foreach ($software_downloads as $software_download){
										if($software_download == $software->id){
											echo "selected=selected";
										}
									}
                                ?>
								><?php echo lang_decode($software->title)?></option>
							<?php endforeach;?>
						</optgroup>
					<?php endforeach;?>
				</select>
		</td>
	</tr>
    <tr>
		<th>โบรชัวร์ :</th>
		<td>
        <?php $brochure_downloads = explode(",", $product->brochures);?>
				<select id="brochures" name="brochures[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach ($brochure_categories as $brochure_category):?>
						<optgroup label="<?php echo lang_decode($brochure_category->name)?>">
							<?php foreach ($brochure_category->brochure->order_by('id','desc')->get() as $brochure):?>
								<option value="<?php echo $brochure->id?>" 
								<?php 
									foreach ($brochure_downloads as $brochure_download){
										if($brochure_download == $brochure->id){
											echo "selected=selected";
										}
									}
                                ?>
								><?php echo lang_decode($brochure->title)?></option>
							<?php endforeach;?>
						</optgroup>
					<?php endforeach;?>
				</select>
		</td>
	</tr>
    <tr>
		<th>วอลเปเปอร์ :</th>
		<td>
        <?php $wallpaper_downloads = explode(",", $product->wallpapers);?>
				<select id="wallpapers" name="wallpapers[]" multiple="multiple" size="5">
					<option value=""></option>
					<?php foreach ($wallpaper_categories as $wallpaper_category):?>
						<optgroup label="<?php echo lang_decode($wallpaper_category->name)?>">
							<?php foreach ($wallpaper_category->wallpaper->order_by('id','desc')->get() as $wallpaper):?>
								<option value="<?php echo $wallpaper->id?>" 
								<?php 
									foreach ($wallpaper_downloads as $wallpaper_download){
										if($wallpaper_download == $wallpaper->id){
											echo "selected=selected";
										}
									}
                                ?>
								><?php echo lang_decode($wallpaper->title)?></option>
							<?php endforeach;?>
						</optgroup>
					<?php endforeach;?>
				</select>
		</td>
	</tr>
	<?php foreach($product->product_image->order_by('id','asc')->get() as $image_mornitor): ?>
	<tr>
		<th>ภาพหน้าจอ :</th>
		<td>	
			<?php echo form_upload('file[]','','size=72')?>
			<a rel="lightbox[image]" href="uploads/products/product_mornitor/<?php echo $image_mornitor->file?>"><span class="icon icon-picture"></span></a>
			<a href="products/admin/products/image_delete/<?php echo $image_mornitor->id ?>" onclick="return confirm('ลบรูปนี้')"><span class="icon icon-cross"></span></a>
			<?php echo form_hidden('image_id[]',$image_mornitor->id)?>
			</ul>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<th>ภาพหน้าจอ :</th>
		<td><?php echo form_upload('file[]','','size=72')?> <input type="button" value="เพิ่ม" /> <i>ไฟล์ภาพขนาด 200 x 123 พิกเซล</i></td>
	</tr>
	<tr>
		<th>จุดเด่น :</th>
		<td>
		<div rel="th"><textarea name="detail1[th]" class="full tinymce"><?php echo lang_decode($product->detail1,'th')?></textarea></div>
		<div rel="en"><textarea name="detail1[en]" class="full tinymce"><?php echo lang_decode($product->detail1,'en')?></textarea></div>
		</td>
	</tr>
	<tr>
		<th>ข้อมูลจำเพาะ :</th>
		<td>
		<div rel="th"><textarea name="detail2[th]" class="full tinymce"><?php echo lang_decode($product->detail2,'th')?></textarea></div>
		<div rel="en"><textarea name="detail2[en]" class="full tinymce"><?php echo lang_decode($product->detail2,'en')?></textarea></div>
		</td>
	</tr>
	<tr>
		<th>อื่นๆ :</th>
		<td>
		<div rel="th"><textarea name="detail3[th]" class="full tinymce"><?php echo lang_decode($product->detail3,'th')?></textarea></div>
		<div rel="en"><textarea name="detail3[en]" class="full tinymce"><?php echo lang_decode($product->detail3,'en')?></textarea></div>
		</td>
	</tr>
   <!-- <tr>
		<th>สำหรับไฮไลท์ :</th>
		<td>
		<div rel="th"><textarea name="highlight2_detail[th]" class="full tinymce"><?php echo lang_decode($product->highlight2_detail,'th')?></textarea></div>
		<div rel="en"><textarea name="highlight2_detail[en]" class="full tinymce"><?php echo lang_decode($product->highlight2_detail,'en')?></textarea></div>
		</td>
	</tr>-->
	<tr>
		<th></th>
		<td>
        	<?php echo form_referer() ?>
			<?php echo form_submit('',lang('btn_submit'))?>
        </td>
	</tr>
</table>
</form>