<h1>ตัวแทนจำหน่าย</h1>
<?php echo $categories->pagination()?>
<form id="order" action="resellers/admin/categories/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th><a href="resellers/admin/categories/index">ศูนย์ภูมิภาค</a> » <?php echo lang_decode($category->name)?></th>
		<th width="90"><a class="btn" href="resellers/admin/categories/sub_categories_form/<?php echo $parent_id?>" class="tiny">เพิ่มรายการ</a></th>
	</tr>
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td><a href="resellers/admin/categories/sub_categories_2/<?php echo $parent_id?>/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a></td>
		<td>
			<a class="btn" href="resellers/admin/categories/sub_categories_form/<?php echo $parent_id?>/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn" href="resellers/admin/categories/sub_categories_delete/<?php echo $parent_id?>/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>