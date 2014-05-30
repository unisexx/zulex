<h1>ซอฟแวร์</h1>
<?php echo $softwares->pagination()?>
<form id="order" action="softwares/admin/softwares/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ชื่อ</th>
		<th>ไฟล์/ลิ้งค์</th>
        <th width="100"><?php echo anchor('categories/admin/categories/softwares?iframe=true&width=90%&height=90%','หมวดหมู่','class="btn" rel="lightbox"')?></th>
		<th width="100"><?php echo anchor('softwares/admin/softwares/form/',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($softwares as $software):?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $software->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $software->id ?>"></td>
		<td><?php echo $software->title?></td>
		<td>
        				<?php if($software->file != ""):?>
							<a href="uploads/softwares/<?php echo $software->file?>"><span class="icon icon-disk"></span></a>
						<?php endif;?>
                        <?php if($software->url != ""):?>
                        	<a href="<?php echo $software->url?>" target="_blank"><span class="icon icon-page-link"></span></a>
                        <?php endif;?>
        </td>
        <td><?php echo lang_decode($software->category->name)?></td>
		<td>
			<a class="btn" href="softwares/admin/softwares/form/<?php echo $software->id?>" >แก้ไข</a>
			<a class="btn" href="softwares/admin/softwares/delete/<?php echo $software->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $softwares->pagination()?>