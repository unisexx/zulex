<h1>สินค้า</h1>
<?php echo $categories->pagination()?>
<form id="order" action="products/admin/categories/save" method="post">
<table class="list">
	<tr>
		<th>ลำดับ</th>
		<th>รูปภาพ</th>
		<th>หมวดหมู่</th>
		<th width="90"><a class="btn" href="products/admin/categories/form" class="tiny">เพิ่มหมวดหมู่</a></th>
	</tr>
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
		<td><input type="text" name="orderlist[]" size="3" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td><img src="uploads/categories/<?php echo $category->icon?>" width="32"></td>
		<td><a href="products/admin/categories/sub_categories/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a></td>
		<td>
			<a class="btn" href="products/admin/categories/form/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn" href="products/admin/categories/delete/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<br>
<input type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>