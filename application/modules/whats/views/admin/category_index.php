<h1><a href="whats/admin/categories/index/">What Fit in My Car</a> - <a href="whats/admin/categories/index/<?php echo $parent_category->id?>"><?php echo lang_decode($parent_category->name)?></a></h1>
<?php echo $categories->pagination()?>
<form id="order" action="whats/admin/categories/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>หัวข้อ</th>
        <th><?php echo ($stack==1)?"จำนวนรุ่น":"";?></th>
		<th width="100"><?php echo anchor('whats/admin/categories/form/'.$parent_id,lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($categories as $category):?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $category->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $category->id ?>"></td>
		<td>
        	<?php if($category->stack < 2):?>
				<a href="whats/admin/categories/index/<?php echo $category->stack?>/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a>
            <?php else:?>
            	<a href="whats/admin/carversions/index/<?php echo $category->id?>"><?php echo lang_decode($category->name)?></a>
            <?php endif;?>
        </td>
        <td>
			<?php if($category->stack < 2):?>
				
            <?php else:?>
            	<?php echo $category->carversion->result_count();?>
            <?php endif;?>
        </td>
		<td>
			<a class="btn" href="whats/admin/categories/form/<?php echo $parent_id?>/<?php echo $category->id?>" >แก้ไข</a>
			<a class="btn" href="whats/admin/categories/delete/<?php echo $category->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach;?>
	
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $categories->pagination()?>