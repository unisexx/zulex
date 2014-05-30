<h1>ติดต่อเรา</h1>
<table class="list">
	<tr>
    	<th>ลำดับ</th>
		<th>หัวข้อ</th>
		<!--<th>อีเมล์</th>
		<th>เบอร์ติดต่อกลับ</th>-->
		<th>โดย</th>
        <th>เมื่อ</th>
		<th width="105"><?php //echo anchor('contacts/admin/contacts/form/',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($contacts as $contact):?>
		<tr <?php echo cycle()?>>
			<td>
				<?php echo sprintf("%05d",$contact->id)?>
			</td>
			<td>
				<?php echo $contact->title?>
			</td>
			<!--<td>
				<?php echo $contact->email?>
			</td>
			<td>
				<?php echo $contact->tel?>
			</td>-->
			<td>
				<?php echo $contact->name?>
			</td>
            <td>
				<?php echo mysql_to_th($contact->created,'S',TRUE) ?>
			</td>
			<td>
				<a class="btn view" href="contacts/admin/contacts/view/<?php echo $contact->id?>" >ดูข้อความ</a>
				<!--<a class="btn" href="contacts/admin/contacts/form/<?php echo $contact->id?>" >แก้ไข</a>--> 
				<a class="btn" href="contacts/admin/contacts/delete/<?php echo $contact->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<?php echo $contacts->pagination()?>

<script type="text/javascript"> 
$('.view').popupWindow({ 
centerBrowser:1,
scrollbars:1,
width:800,
height:600
}); 
</script>