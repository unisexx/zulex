<h1>ใบสมัครตัวแทนจำหน่าย</h1>
<?php echo $applicants->pagination()?>
<form id="order" action="applicants/admin/applicants/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>ชื่อร้าน</th>
		<th>ชื่อผู้ติดต่อ</th>
		<!--<th>โทรศัพท์</th>-->
        <th>สมัครเมื่อ</th>
		<th width="105"><?php //echo anchor('applicants/admin/applicants/form/',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($applicants as $applicant):?>
		<tr <?php echo cycle()?>>
        	<td><input type="text" name="orderlist[]" size="3" value="<?php echo $applicant->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $applicant->id ?>"></td>
			<td>
				<?php echo $applicant->store_name?>
			</td>
			<td>
				<?php echo $applicant->dealer_name?>
			</td>
			<!--<td>
				<?php echo $applicant->tel?>
			</td>-->
            <td>
				<?php echo mysql_to_th($applicant->created,'S',TRUE) ?>
			</td>
			<td>
				<!--<a class="btn" href="applicants/admin/applicants/form/<?php echo $applicant->id?>" >แก้ไข</a>-->
				<a class="btn view" href="applicants/admin/applicants/view/<?php echo $applicant->id?>" target="_blank">ดูใบสมัคร</a>
				<a class="btn" href="applicants/admin/applicants/delete/<?php echo $applicant->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $applicants->pagination()?>

<script type="text/javascript"> 
$('.view').popupWindow({ 
centerBrowser:1,
scrollbars:1,
width:800,
height:600
}); 
</script>