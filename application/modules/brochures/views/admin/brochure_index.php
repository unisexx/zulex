<h1>โบรชัวร์</h1>
<?php echo $brochures->pagination()?>
<form id="order" action="brochures/admin/brochures/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>หัวข้อ</th>
		<th width="100"><?php echo anchor('categories/admin/categories/brochures?iframe=true&width=90%&height=90%','หมวดหมู่','class="btn" rel="lightbox"')?></th>
		<th width="100"><?php echo anchor('brochures/admin/brochures/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($brochures as $brochure):?>
		<tr <?php echo cycle();?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $brochure->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $brochure->id ?>"></td>
			<td><a rel=lightbox[brochures] href="uploads/brochures/<?php echo $brochure->image?>"><?php echo lang_decode($brochure->title)?></a></td>
			<td><?php echo lang_decode($brochure->category->name)?></td>
			<td>
				<a class="btn" href="brochures/admin/brochures/form/<?php echo $brochure->id?>" >แก้ไข</a> 
				<a class="btn" href="brochures/admin/brochures/delete/<?php echo $brochure->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>

</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $brochures->pagination()?>