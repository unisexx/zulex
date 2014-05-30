<h1>Tip & Technic</h1>
<?php echo $tips->pagination()?>
<form id="order" action="tips/admin/tips/save_orderlist" method="post">
<table class="list">
	<tr>
        <th>ลำดับ</th>
		<th>หัวข้อ</th>
        <th>วันที่</th>
		<th width="100"><?php echo anchor('categories/admin/categories/tips?iframe=true&width=90%&height=90%','หมวดหมู่','class="btn" rel="lightbox"')?></th>
		<th width="100"><?php echo anchor('tips/admin/tips/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($tips as $tip):?>
		<tr <?php echo cycle();?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $tip->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $tip->id ?>"></td>
			<td><?php echo lang_decode($tip->title)?></td>
            <td><?php echo mysql_to_th($tip->created,'S',TRUE) ?></td>
			<td><?php echo lang_decode($tip->category->name)?></td>
			<td>
				<a class="btn" href="tips/admin/tips/form/<?php echo $tip->id?>" >แก้ไข</a> 
				<a class="btn" href="tips/admin/tips/delete/<?php echo $tip->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $tips->pagination()?>