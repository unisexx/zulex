<h1><a href="wallpapers/admin/categories">Wallpaper</a> >> <?php echo lang_decode($categories->name,'')?></h1>
<?php echo $wallpapers->pagination()?>
<form id="order" action="wallpapers/admin/wallpapers/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ภาพ</th>
		<th>ชื่อภาพ</th>
		<th width="90"><a class="btn" href="wallpapers/admin/wallpapers/<?php echo $categories->id?>/form">เพิ่มรายการ</a></th>
	</tr>
	
	<?php foreach($wallpapers as $wallpaper): ?>
	<tr id="gallery-list" <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $wallpaper->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $wallpaper->id ?>"></td>
		<td><a rel="lightbox[wallpapers]" href="uploads/wallpapers/<?php echo $wallpaper->image?>"><img style="max-width:90px; max-height:60px;" src="uploads/wallpapers/<?php echo $wallpaper->image?>"></a></td>
		<td><?php echo lang_decode($wallpaper->title)?></td>
		<td>
			<a class="btn" href="wallpapers/admin/wallpapers/<?php echo $wallpaper->category->id?>/form/<?php echo $wallpaper->id?>" >แก้ไข</a> 
			<a class="btn" href="wallpapers/admin/wallpapers/delete/<?php echo $wallpaper->category->id?>/<?php echo $wallpaper->id?>" onclick="return confirm('ต้องการลบรูปนี้?')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $wallpapers->pagination()?>
