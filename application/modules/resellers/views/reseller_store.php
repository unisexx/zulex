<div id="resellers-store">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="resellers"><?php echo lang('reseller')?></a> > <a href="resellers/category/<?php echo $parent_category->id?>"><?php echo lang_decode($parent_category->name)?></a> > <?php echo lang_decode($category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1><?php echo lang_decode($category->name)?></h1>
		</div>
	
		<div id="blog-wrap">
		<?php foreach($category->reseller->order_by('orderlist','asc')->get_page(6) as $reseller):?>
			<div class="blog">
				<h3><?php echo lang_decode($reseller->title)?></h3>
				<div class="image corner5">
					<img src="uploads/resellers/<?php echo $reseller->image?>">
				</div>
				<div class="image corner5" style="margin:0 0 0 15px;">
					<a class="view" href="resellers/viewmap/<?php echo $reseller->id?>?iframe=true&width=655&height=500"><img src="http://maps.google.com/staticmap?center=<?php echo $reseller->latitude?>,<?php echo $reseller->longitude?>&zoom=<?php echo $reseller->zoom?>&size=190x125&maptype=roadmap&markers=<?php echo $reseller->latitude?>,<?php echo $reseller->longitude?>&key=ABQIAAAAsjlbnmTUjA-RpBZO-Jmm0xQED3NELORP5k-CX3o9HKyuxCU1UxT3miN6wBc6OFiQQ1sOhin4ZToUDA"></a>
				</div>
				<table>
					<tr>
						<th style="width:65px;">สำนักงาน</th>
						<th style="width:10px;">:</th>
						<td>
							<?php echo stripslashes(lang_decode($reseller->address))?>
						</td>
					</tr>
					<tr>
						<th>พิกัด</th>
						<th>:</th>
						<td>
							<?php echo $reseller->latitude?>, 
							<?php echo $reseller->longitude?>
						</td>
					</tr>
					<tr>
						<th>โทร</th>
						<th>:</th>
						<td>
							<?php echo $reseller->tel?>
						</td>
					</tr>
					<tr>
						<th>แฟกซ์</th>
						<th>:</th>
						<td>
							<?php echo $reseller->fax?>
						</td>
					</tr>
					<tr>
						<th>อีเมล์</th>
						<th>:</th>
						<td>
							<?php echo $reseller->email?>
						</td>
					</tr>
					<tr>
						<th>เวลาทำการ</th>
						<th>:</th>
						<td>
							<?php echo lang_decode($reseller->service_time)?>
						</td>
					</tr>
				</table>
			</div>
		<?php endforeach;?>
		</div>
		
		<div class="clear"></div>
	</div>
</div>

<script type="text/javascript"> 
$('.view').popupWindow({ 
centerBrowser:1,
width:655,
height:495
}); 
</script>