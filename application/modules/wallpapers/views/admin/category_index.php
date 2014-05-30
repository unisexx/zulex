<h1>Wallpaper</h1>
<!--<div class="search">
	<form method="post">
		<table class="form">
			<tr><th>อัลบั้ม</th><td><input type="text" name="search" value="<?php echo (isset($_POST['search']))?$_POST['search']:'' ?>" /></td><td><input type="submit" value="ค้นหา" /></td></tr>
		</table>
	</form>
</div>-->
<?php echo $categories->pagination()?>
<form id="order" action="wallpapers/admin/categories/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>อัลบัม</th>
		<th>จำนวนรูป</th>
		<th width="90"><a class="btn" href="wallpapers/admin/categories/form" class="tiny">เพิ่มรายการ</a></th>
	</tr>
    
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td><a href="wallpapers/admin/wallpapers/index/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a></td>
		<td><?php echo $category->wallpaper->result_count();?></td>
		<td>
			<a class="btn" href="wallpapers/admin/categories/form/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn" href="wallpapers/admin/categories/delete/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>

</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>