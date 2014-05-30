<h1>คู่มือการใช้งาน</h1>
<?php echo $manuals->pagination()?>
<form id="order" action="manuals/admin/manuals/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ชื่อ</th>
		<th>ไฟล์</th>
        <th width="100"><?php echo anchor('categories/admin/categories/manuals?iframe=true&width=90%&height=90%','หมวดหมู่','class="btn" rel="lightbox"')?></th>
		<th width="100"><?php echo anchor('manuals/admin/manuals/form/',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($manuals as $manual):?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $manual->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $manual->id ?>"></td>
		<td><?php echo lang_decode($manual->title)?></td>
		<td>
			<a href="uploads/manuals/<?php echo $manual->file?>"><span class="icon icon-disk"></span></a>
        </td>
        <td><?php echo lang_decode($manual->category->name)?></td>
		<td>
			<a class="btn" href="manuals/admin/manuals/form/<?php echo $manual->id?>" >แก้ไข</a>
			<a class="btn" href="manuals/admin/manuals/delete/<?php echo $manual->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $manuals->pagination()?>