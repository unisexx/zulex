<h1>เฮดเดอร์เมนู</h1>
<?php echo $menus->pagination()?>
<form id="order" action="hmenus/admin/hmenus/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ชื่อเมนู</th>
        <th>ลิ้งค์</th>
		<th width="100"><?php echo anchor('hmenus/admin/hmenus/form',lang('btn_add'),'class="btn"')?></th>
	</tr>

	<?php foreach($menus as $menu):?>
		<tr <?php echo cycle();?>>
			<td><input type="text" name="orderlist[]" size="3" value="<?php echo $menu->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $menu->id ?>"></td>
			<td><?php echo lang_decode($menu->title)?></td>
            <td><?php echo $menu->url?></td>
			<td>
				<a class="btn" href="hmenus/admin/hmenus/form/<?php echo $menu->id?>" >แก้ไข</a> 
				<a class="btn" href="hmenus/admin/hmenus/delete/<?php echo $menu->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $menus->pagination()?>