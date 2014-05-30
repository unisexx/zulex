<h1>ตัวแทนจำหน่าย</h1>
<?php echo $categories->pagination()?>
<form id="order" action="resellers/admin/categories/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ศูนย์ภูมิภาค</th>
		<th>จังหวัด</th>
		<th width="90"><a class="btn" href="resellers/admin/categories/form" class="tiny">เพิ่มรายการ</a></th>
	</tr>
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td><a href="resellers/admin/categories/sub_categories/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a></td>
		<td><?php echo $categories->where("module = 'resellers' and parents = $category->id")->get()->result_count()?></td>
		<td>
			<a class="btn" href="resellers/admin/categories/form/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn" href="resellers/admin/categories/delete/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>