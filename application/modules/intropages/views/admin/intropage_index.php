<h1>Intro Page</h1>
<?php include("_menu.php")?>
<table class="list">
	<tr>
		<th>รูปภาพ</th>
		<th width="100"><?php echo anchor('intropages/admin/intropages/form',lang('btn_add'),'class="btn"')?></th>
	</tr>
    <?php foreach($intropages as $intropage):?>
    	<tr <?php echo cycle();?>>
        	<td><img src="uploads/intropages/<?php echo $intropage->image?>" width="350"/></td>
            <td>
				<a class="btn" href="intropages/admin/intropages/form/<?php echo $intropage->id?>" >แก้ไข</a> 
				<a class="btn" href="intropages/admin/intropages/delete/<?php echo $intropage->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
        </tr>
    <?php endforeach;?>
    </table>
<?php echo $intropages->pagination()?>