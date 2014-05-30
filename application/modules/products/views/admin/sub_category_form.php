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
<h1 style="margin:0 0 15px;">สินค้า » หมวดหมู่สินค้า  » <?php echo lang_decode($parent->name) ?></h1>
<form method="post" action="products/admin/categories/sub_categories_save/<?php echo $category->id?>" enctype="multipart/form-data">
	<table class="form">
		<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
		<tr>
			<th>หมวดหมู่ย่อย :</th>
			<td>
				<input type="text" name="name[th]" rel="th" value="<?php echo lang_decode($category->name,'th')?>" />
				<input type="text" name="name[en]" rel="en" value="<?php echo lang_decode($category->name,'en')?>" />
			</td>
		</tr>
		<tr>	
			<th></th>
			<td>
			<input type="hidden" name="parents" value="<?php echo $parent->id ?>"  />
			<input type="hidden" name="module" value="<?php echo $parent->module ?>"  />
			<input type="submit" value="บันทึก" class="submit small" />
			</td>
		</tr>
	</table>
</form>
