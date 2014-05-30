<h1>Connect White Up</h1>
<?php echo $connects->pagination()?>
<form id="order" action="connects/admin/connects/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ไอค่อน</th>
        <th>ลิ้งค์</th>
		<th width="100"><?php echo anchor('connects/admin/connects/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($connects as $connect):?>
		<tr <?php echo cycle();?>>
			<td><input type="text" name="orderlist[]" size="3" value="<?php echo $connect->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $connect->id ?>"></td>
			<td><img src="uploads/connects/<?php echo lang_decode($connect->image)?>" width="16"></td>
			<td><?php echo lang_decode($connect->url)?></td>
			<td>
				<a class="btn" href="connects/admin/connects/form/<?php echo $connect->id?>" >แก้ไข</a> 
				<a class="btn" href="connects/admin/connects/delete/<?php echo $connect->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $connects->pagination()?>