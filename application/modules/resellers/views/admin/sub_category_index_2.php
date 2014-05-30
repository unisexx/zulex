<h1>ตัวแทนจำหน่าย</h1>
<?php echo $categories->pagination()?>
<table class="list">
	<tr>
		<th><a href="resellers/admin/categories/index">ศูนย์ภูมิภาค</a> » <a href="resellers/admin/categories/sub_categories/<?php echo $sub_categories_1->id?>"><?php echo lang_decode($sub_categories_1->name)?></a> » <?php echo lang_decode($category->name)?></th>
		<th>รายการ</th>
		<th width="90"><a class="btn" href="resellers/admin/categories/sub_categories_form_2/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>" class="tiny">เพิ่มรายการ</a></th>
	</tr>
	<?php foreach($categories as $category): ?>
	<tr <?php echo cycle()?>>
		<td>
			<a href="resellers/admin/resellers/index/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a>
		</td>
		<td>
			<?php echo $category->reseller->result_count();?>
		</td>
		<td>
			<a class="btn" href="resellers/admin/categories/sub_categories_form_2/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>/<?php echo $category->id ?>" >แก้ไข</a>
			<a class="btn" href="resellers/admin/categories/sub_categories_delete_2/<?php echo $sub_categories_1->id?>/<?php echo $current_id?>/<?php echo $category->id?>" onclick="return confirm('<?php echo 'หมวดหมู่ย่อยและบทความทั้งหมดในหมวดนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ'?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $categories->pagination()?>