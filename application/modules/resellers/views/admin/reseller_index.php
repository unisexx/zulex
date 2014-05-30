<h1>ตัวแทนจำหน่าย</h1>
<?php echo $resellers->pagination()?>
<form id="order" action="resellers/admin/resellers/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th><a href="resellers/admin/categories/index">ศูนย์ภูมิภาค</a> » <a href="resellers/admin/categories/sub_categories/<?php echo $sub_categories_1->id?>"><?php echo lang_decode($sub_categories_1->name)?></a> » <a href="resellers/admin/categories/sub_categories_2/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>"><?php echo lang_decode($parent_category->name)?></a> » <?php echo lang_decode($category->name)?></th>
		<th width="100"><?php echo anchor('resellers/admin/resellers/form/'.$sub_categories_1->id.'/'.$parent_category->id.'/'.$category->id,lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($resellers as $reseller):?>
		<tr <?php echo cycle()?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $reseller->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $reseller->id ?>"></td>
			<td>
				<?php echo lang_decode($reseller->title)?>
			</td>
			<td>
				<a class="btn" href="resellers/admin/resellers/form/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $category->id?>/<?php echo $reseller->id?>" >แก้ไข</a> 
				<a class="btn" href="resellers/admin/resellers/delete/<?php echo $sub_categories_1->id?>/<?php echo $parent_category->id?>/<?php echo $category->id?>/<?php echo $reseller->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $resellers->pagination()?>