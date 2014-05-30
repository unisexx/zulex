<h1>Social Icon</h1>
<?php echo $icons->pagination()?>
<form id="order" action="socials/admin/socials/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ไอค่อน</th>
        <th>ลิ้งค์</th>
		<th width="100"><?php echo anchor('socials/admin/socials/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($icons as $icon):?>
		<tr <?php echo cycle();?>>
			<td><input type="text" name="orderlist[]" size="3" value="<?php echo $icon->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $icon->id ?>"></td>
			<td><img src="uploads/socials/<?php echo lang_decode($icon->image)?>" width="16"></td>
			<td><?php echo lang_decode($icon->url)?></td>
			<td>
				<a class="btn" href="socials/admin/socials/form/<?php echo $icon->id?>" >แก้ไข</a> 
				<a class="btn" href="socials/admin/socials/delete/<?php echo $icon->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $icons->pagination()?>