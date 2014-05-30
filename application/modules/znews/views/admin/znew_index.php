<h1>ข่าวสารและโปรโมชั่น</h1>
<?php echo $znews->pagination()?>
<form id="order" action="znews/admin/znews/save_orderlist" method="post">
<table class="list">
	<tr>
		<!--<th>ไฮไลท์</th>-->
        <th>ลำดับ</th>
		<th>หัวข้อ</th>
        <th>วันที่</th>
		<th width="100"><?php echo anchor('categories/admin/categories/znews?iframe=true&width=90%&height=90%','หมวดหมู่','class="btn" rel="lightbox"')?></th>
		<th width="100"><?php echo anchor('znews/admin/znews/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($znews as $znew):?>
		<tr <?php echo cycle();?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $znew->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $znew->id ?>"></td>
			<!--<td><input type="checkbox" name="status" value="<?php echo $znew->id ?>" <?php echo ($znew->status=="approve")?'checked="checked"':'' ?>/></td>-->
			<td><?php echo lang_decode($znew->title)?></td>
            <td><?php echo mysql_to_th($znew->created,'S',TRUE) ?></td>
			<td><?php echo lang_decode($znew->category->name)?></td>
			<td>
				<a class="btn" href="znews/admin/znews/form/<?php echo $znew->id?>" >แก้ไข</a> 
				<a class="btn" href="znews/admin/znews/delete/<?php echo $znew->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $znews->pagination()?>