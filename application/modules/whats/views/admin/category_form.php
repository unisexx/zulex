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
<h1><a href="whats/admin/categories/index/">What Fit in My Car</a> - <a href="whats/admin/categories/index/<?php echo $parent->id?>"><?php echo lang_decode($parent->name)?></a></h1>
<form method="post" action="whats/admin/categories/save/<?php echo $category->id?>" enctype="multipart/form-data">
	<table class="form">
		<tr class="trlang"><th></th><td class="lang"><a href="th" class="active flag th">ไทย</a><a href="en" class="flag en">อังกฤษ</a></td></tr>
		<tr>
			<th>Title</th>
			<td>
				<input type="text" name="name[th]" rel="th" value="<?php echo lang_decode($category->name,'th')?>" />
				<input type="text" name="name[en]" rel="en" value="<?php echo lang_decode($category->name,'en')?>" />
			</td>
		</tr>
		<tr>	
			<th></th>
			<td>
            <input type="hidden" name="stack" value="<?php echo $parent->stack+1 ?>"  />
			<input type="hidden" name="parents" value="<?php echo $parent->id ?>"  />
            <input type="hidden" name="module" value="<?php echo $parent->module ?>"  />
			<input type="submit" value="บันทึก" class="submit small" />
            <?php echo form_referer() ?>
			</td>
		</tr>
	</table>
</form>
