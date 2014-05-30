<h1>Introduces Product</h1>
<?php echo $introduces->pagination()?>
<form id="order" action="introduces/admin/introduces/save_orderlist" method="post">
<table class="list">
	<tr>
		<!--<th>ไฮไลท์</th>-->
        <th>ลำดับ</th>
		<th>สินค้า</th>
		<th width="100"><?php echo anchor('introduces/admin/introduces/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($introduces as $introduce):?>
		<tr <?php echo cycle();?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $introduce->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $introduce->id ?>"></td>
			<td><?php echo lang_decode($introduce->name)?></td>
			<td>
				<a class="btn" href="introduces/admin/introduces/form/<?php echo $introduce->id?>" >แก้ไข</a> 
				<a class="btn" href="introduces/admin/introduces/delete/<?php echo $introduce->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $introduces->pagination()?>