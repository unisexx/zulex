<h1><a href="whats/admin/categories/index/">What Fit In My Car</a> - <a href="" onClick="history.go(-1); return false;"><?php echo lang_decode($category->name)?></a></h1>
<?php echo $carversions->pagination()?>
<form id="order" action="whats/admin/carversions/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>รุ่น</th>
        <th>ปี</th>
		<th>ชุดสินค้า</th>
		<th width="100"><?php echo anchor('whats/admin/carversions/form/'.$category->id,lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($carversions as $carversion):?>
	<tr <?php echo cycle()?>>
    	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $carversion->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $carversion->id ?>"></td>
		<td>
        	<a href="whats/admin/whats/index/<?php echo $carversion->id?>"><?php echo $carversion->version?></a>
        </td>
        <td>
        	<?php echo $carversion->year?>
        </td>
        <td>
        	<?php echo $carversion->what->result_count();?>
        </td>
		<td>
			<a class="btn" href="whats/admin/carversions/form/<?php echo $category->id?>/<?php echo $carversion->id?>" >แก้ไข</a>
			<a class="btn" href="whats/admin/carversions/delete/<?php echo $carversion->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
		</td>
	</tr>
	<?php endforeach;?>
	
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $carversions->pagination()?>