<h1>ซับเมนู</h1>
<?php echo $menus->pagination()?>
<form id="order" action="submenus/admin/submenus/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
        <th>ภาพเมนู</th>
		<th>ชื่อเมนู</th>
        <th>ลิ้งค์</th>
		<th width="100"><?php echo anchor('submenus/admin/submenus/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($menus as $menu):?>
		<tr <?php echo cycle();?>>
			<td><input type="text" name="orderlist[]" size="3" value="<?php echo $menu->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $menu->id ?>"></td>
            <td><img src="uploads/submenu/<?php echo $menu->image_th?>" width="215" height="75"></td>
			<td><?php echo $menu->name?></td>
            <td><?php echo $menu->url?></td>
			<td>
				<a class="btn" href="submenus/admin/submenus/form/<?php echo $menu->id?>" >แก้ไข</a> 
				<a class="btn" href="submenus/admin/submenus/delete/<?php echo $menu->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $menus->pagination()?>