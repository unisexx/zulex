<h1>จัดการหน้าสมัครสมาชิก</h1>
<?php include("_menu.php")?>
<?php echo $buyproducts->pagination()?>
<form id="order" action="registers/admin/buyproducts/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>หัวข้อ</th>
		<th width="100"><?php echo anchor('registers/admin/buyproducts/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($buyproducts as $buyproduct):?>
		<tr <?php echo cycle();?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $buyproduct->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $buyproduct->id ?>"></td>
			<td><?php echo $buyproduct->title?></td>
			<td>
				<a class="btn" href="registers/admin/buyproducts/form/<?php echo $buyproduct->id?>" >แก้ไข</a> 
				<a class="btn" href="registers/admin/buyproducts/delete/<?php echo $buyproduct->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>

</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $buyproducts->pagination()?>