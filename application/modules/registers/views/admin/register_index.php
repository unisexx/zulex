<h1>จัดการหน้าสมัครสมาชิก</h1>
<?php include("_menu.php")?>
<?php echo $registers->pagination()?>
<form id="order" action="registers/admin/registers/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>หัวข้อ</th>
		<th width="100"><?php echo anchor('categories/admin/categories/registers?iframe=true&width=90%&height=90%','หมวดหมู่','class="btn" rel="lightbox"')?></th>
		<th width="100"><?php echo anchor('registers/admin/registers/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($registers as $register):?>
		<tr <?php echo cycle();?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $register->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $register->id ?>"></td>	
			<td><?php echo $register->title?></td>
			<td><?php echo lang_decode($register->category->name)?></td>
			<td>
				<a class="btn" href="registers/admin/registers/form/<?php echo $register->id?>" >แก้ไข</a> 
				<a class="btn" href="registers/admin/registers/delete/<?php echo $register->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>

</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $registers->pagination()?>