<div class="breadcrumb">
	<?php echo $page->page_name?>
</div>
<div class="grid_12 product_view">
	<?php echo lang_decode($page->detail)?>
	<div style="margin-top:20px;border-top:2px solid #eee;">
	<!--<h1 style="margin:0;padding:0;font-size:16px;border-bottom:2px solid #ccc;">Contact Us Form</h1>-->
	<form>
		<table class="form">
			<tr>
				<th>Your name</th>
				<td><?php echo form_input('subject','','size="50"')?></td>
			</tr>
			<tr>
				<th>Email address</th>
				<td><?php echo form_input('subject','','size="50"')?></td>
			</tr>
			<tr>
				<th>Subject</th>
				<td><?php echo form_input('subject','','size="90"')?></td>
			</tr>
			<tr>
				<th>Message</th>
				<td><?php echo form_textarea('message')?></td>
			</tr>
			<tr>
				<th></th>
				<td><?php echo form_submit('','Submit')?></td>
			</tr>
		</table>
	</form>
	</div>
</div>
<div class="clear"></div>