<script type="text/javascript">
	$(function(){
			$("[rel=en]").hide();
			$(".lang a").click(function(){
				$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
				$(this).addClass('active').siblings().removeClass('active');
				return false;
			})
	})
</script>
<h1 style="margin:0 0 15px;">ตัวแทนจำหน่าย » ศูนย์ภูมิภาค  » <?php echo lang_decode($parent->name) ?> » <?php echo lang_decode($sub_categories_1->name)?></h1>
<form method="post" action="resellers/admin/categories/sub_categories_save_2/<?php echo $sub_categories_1->id?>/<?php echo $category->id?>" enctype="multipart/form-data">
	<table class="form">
		<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
		<tr>
			<th>เขต :</th>
			<td>
				<input type="text" name="name[th]" rel="th" value="<?php echo lang_decode($category->name,'th')?>" />
				<input type="text" name="name[en]" rel="en" value="<?php echo lang_decode($category->name,'en')?>" />
			</td>
		</tr>
		<tr>
			<th>หมวดหมู่ตามตัวอักษร</th>
			<td>
				<?php echo form_dropdown('alphabet_id',@get_option('id','letter','alphabets'),$category->alphabet_id,'rel=th','======= กรุณาเลือกหมวดหมู่ =======') ?>
                <?php echo form_dropdown('en_alphabet_id',@get_option('id','letter','en_alphabets'),$category->en_alphabet_id,'rel=en','======= กรุณาเลือกหมวดหมู่ =======') ?>
			</td>
		</tr>
		<tr>	
			<th></th>
			<td>
			<input type="hidden" name="parents" value="<?php echo $parent->id ?>"  />
			<input type="hidden" name="module" value="<?php echo $parent->module ?>"  />
            <?php echo form_referer() ?>
			<input type="submit" value="บันทึก" class="submit small" />
			</td>
		</tr>
	</table>
</form>
