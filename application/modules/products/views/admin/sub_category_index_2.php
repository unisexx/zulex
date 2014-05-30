<h1>สินค้า</h1>
<table class="list">
	<tr>
		<td><b><a href="products/admin/categories/index">สินค้า</a> » <a href="products/admin/categories/sub_categories/<?php echo $sub_categories_1->id?>"><?php echo lang_decode($sub_categories_1->name)?></a> » <?php echo lang_decode($category->name)?></b></td>
	</tr>
</table>
<?php echo $categories->pagination()?>
<form id="order" action="products/admin/categories/save_orderlist" method="post">
<table class="list">
	<tr>
		<th>ลำดับ</th>
        <th>หัวข้อ</th>
		<th>รายการ</th>
		<th width="105">
				<a class="btn" href="products/admin/categories/sub_categories_form_2/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>" class="tiny">เพิ่มประเภทสินค้า</a>
		</th>
	</tr>
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
		<td><input type="text" name="orderlist[]" size="3" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td>
			<a href="products/admin/products/index/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a>
		</td>
		<td>
			<?php echo $category->product->result_count();?>
		</td>
		<td>
			<center>
			<a class="btn" href="products/admin/categories/sub_categories_form_2/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn" href="products/admin/categories/sub_categories_delete_2/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
			</center>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>