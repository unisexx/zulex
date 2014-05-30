<h1>Administrator</h1>
<table class="list">
	<tr>
    	<th>หมายเลขสมาชิก</th>
		<th>ยูสเซอร์เนม</th>
		<th>อีเมล์</th>
		<th>ลงทะเบียนเมื่อ</th>
		<th width="100"><?php echo anchor('users/admin/administrators/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($users->order_by('id','desc')->get_page() as $user):?>
	<tr <?php echo cycle()?>>
    	<td><?php echo sprintf("%05d",$user->id)?></td>
		<td><?php echo $user->username?></td>
		<td><?php echo $user->email?></td>
		<!--<td><?php echo $user->level->level?></td>-->
        <td><?php echo mysql_to_th($user->created,'S',TRUE) ?></td>
		<td>
			<?php echo anchor('users/admin/administrators/form/'.$user->id,lang('btn_edit'),'class="btn"')?>
			<?php echo anchor('users/admin/administrators/delete/'.$user->id,lang('btn_delete'),'class="btn" onclick="return confirm(\''.lang('confirm_delete').'\')"')?>
		</td>
	</tr>
	<?php endforeach?>
</table>
<?php echo $users->pagination()?>
