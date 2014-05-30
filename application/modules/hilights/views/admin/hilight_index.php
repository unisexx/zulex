<h1>ไฮไลท์</h1>
<?php include("_menu.php")?>
<?php echo $hilights->pagination()?>
<form id="order" action="hilights/admin/hilights/save_orderlist" method="post">
<table class="list">
	<tr>
    	<!--<th>แสดง</th>-->
		<th>ลำดับ</th>
		<th>รูปภาพ</th>
		<th>ลิ้งค์</th>
		<!--<th>แอคชั่น</th>-->
		<th width="100"><?php echo anchor('hilights/admin/hilights/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
    <?php foreach($hilights as $hilight):?>
    	<tr <?php echo cycle();?>>
        	<!--<td><input type="checkbox" name="status" value="<?php echo $hilight->id ?>" <?php echo ($hilight->status=="approve")?'checked="checked"':'' ?>/></td>-->
            <td><input type="text" name="orderlist[]" size="3" value="<?php echo $hilight->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $hilight->id ?>"></td>
        	<td><img class="ex_img" src="uploads/hilights/<?php echo $hilight->image?>" width="95"/></td>
            <td><?php echo $hilight->url?></td>
           <!-- <td><?php echo ($hilight->action=="_self")?"เปิดลิ้งค์ในหน้าต่างเดิม":"เปิดลิ้งค์ในหน้าต่างใหม่";?></td>-->
            <td>
				<a class="btn" href="hilights/admin/hilights/form/<?php echo $hilight->id?>" >แก้ไข</a> 
				<a class="btn" href="hilights/admin/hilights/delete/<?php echo $hilight->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
        </tr>
    <?php endforeach;?>
    </table>
<input type="submit" value="บันทึก">
</form>
<?php echo $hilights->pagination()?>