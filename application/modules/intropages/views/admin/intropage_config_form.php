<script type="text/javascript" src="media/js/farbtastic/farbtastic.js"></script>
<link rel="stylesheet" href="media/js/farbtastic/farbtastic.css" type="text/css" />
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#picker').farbtastic('#color');
  });
 </script>
<h1>ตั้งค่าหน้าแรก</h1>
<?php include("_menu.php")?>
<form method="post" action="intropages/admin/intropage_configs/save/1" id="frm" enctype="multipart/form-data">
<table class="form tab">
     <tr>
    	<th></th>
    	<td><div id="picker"></div></td>
    </tr>
    <tr>
    	<th>เลือกสีพื้นหลัง :</th>
        <td><input type="text" id="color" name="color" value="<?php echo ($intropage_config->color == "")?'#123456':$intropage_config->color;?>" /></td>
    </tr>
	<tr>
		<th>อัพโหลดภาพแบ็คกราวน์ : </th>
		<td>
			<input type="file" name="image" value="" size="72"/>
            <?php if(is_file('uploads/intropages/backgrounds/'.$intropage_config->image)):?>
            <a rel="lightbox[image]" href="uploads/intropages/backgrounds/<?php echo $intropage_config->image?>"><span class="icon icon-picture"></span></a>
			<a href="intropages/admin/intropage_configs/remove_image/<?php echo $intropage_config->id ?>" onclick="return confirm('ลบรูปแบ็คกราวน์)"><span class="icon icon-cross"></span></a>
            <?php endif;?>
		</td>
	</tr>
    <tr>
		<th>สไตล์เพิ่มเติม :</th>
		<td>
			<input type="text" name="style" value="<?php echo $intropage_config->style?>"  class="full"/>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<?php echo form_submit('',lang('btn_submit'))?>
		</td>
	</tr>
</table>
</form>