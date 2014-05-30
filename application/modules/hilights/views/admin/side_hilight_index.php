<h1>ไฮไลท์</h1>
<?php include("_menu.php")?>
<?php echo $side_hilights->pagination()?>
<form id="order" action="hilights/admin/side_hilights/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
    	<!--<th>แสดง</th>-->
		<th>รูปภาพ</th>
		<th>ลิ้งค์</th>
		<!--<th>แอคชั่น</th>-->
		<th width="100"><?php echo anchor('hilights/admin/side_hilights/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
    <?php foreach($side_hilights as $side_hilight):?>
    	<tr <?php echo cycle();?>>
        	 <td><input type="text" name="orderlist[]" size="3" value="<?php echo $side_hilight->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $side_hilight->id ?>"></td>
        	<!--<td><input type="checkbox" name="status" value="<?php echo $side_hilight->id ?>" <?php echo ($side_hilight->status=="approve")?'checked="checked"':'' ?>/></td>-->
        	<td><img class="ex_img" src="uploads/side_hilights/<?php echo $side_hilight->image?>" width="95"/></td>
            <td><?php echo $side_hilight->url?></td>
			<!-- <td>แอคชั่น</td>-->
            <td>
				<a class="btn" href="hilights/admin/side_hilights/form/<?php echo $side_hilight->id?>" >แก้ไข</a> 
				<a class="btn" href="hilights/admin/side_hilights/delete/<?php echo $side_hilight->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
        </tr>
    <?php endforeach;?>
    </table>
<input type="submit" value="บันทึก">
</form>
<?php echo $side_hilights->pagination()?>