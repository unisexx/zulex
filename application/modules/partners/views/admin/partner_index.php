<h1>พาร์ทเนอร์</h1>
<?php echo $partners->pagination()?>
<form id="order" action="partners/admin/partners/save_orderlist" method="post">
<table class="list">
	<tr>
		<th>ลำดับ</th>
		<th>ชื่อ</th>
		<th>ลิ้งค์</th>
		<th width="100"><?php echo anchor('partners/admin/partners/form/',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($partners as $partner):?>
	<tr <?php echo cycle()?>>
    	 <td><input type="text" name="orderlist[]" size="3" value="<?php echo $partner->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $partner->id ?>"></td>
		<td><?php echo $partner->title?></td>
		<td><?php echo $partner->url?></td>
		<td>
			<a class="btn" href="partners/admin/partners/form/<?php echo $partner->id?>" >แก้ไข</a>
			<a class="btn" href="partners/admin/partners/delete/<?php echo $partner->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $partners->pagination()?>