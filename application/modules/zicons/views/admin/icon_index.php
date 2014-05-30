<h1>ไอค่อนสินค้า</h1>
<?php echo $icons->pagination()?>
<form id="order" action="zicons/admin/zicons/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ไอค่อน</th>
        <th>ชื่อ</th>
		<th width="100"><?php echo anchor('zicons/admin/zicons/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($icons as $icon):?>
		<tr <?php echo cycle();?>>
			<td><input type="text" name="orderlist[]" size="3" value="<?php echo $icon->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $icon->id ?>"></td>
			<td><img src="uploads/icons/<?php echo lang_decode($icon->image)?>" width="32"></td>
			<td><?php echo lang_decode($icon->name)?></td>
			<td>
				<a class="btn" href="zicons/admin/zicons/form/<?php echo $icon->id?>" >แก้ไข</a> 
				<a class="btn" href="zicons/admin/zicons/delete/<?php echo $icon->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $icons->pagination()?>