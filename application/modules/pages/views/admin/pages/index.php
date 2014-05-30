<h1><?php echo $page->page_name?></h1>
<form method="post" action="pages/admin/pages/save/<?php echo $page->id?>">
<?php echo $this->load->view('admin/lang_tab')?>
<?php foreach($this->config->item('short_lang') as $lang):?>
<table id="<?php echo $lang?>" class="form tab">
	<tr>
		<th>Detail</th>
		<td><?php echo form_textarea("detail[$lang]",lang_decode($page->detail,$lang),'class="editor"')?></td>
	</tr>
</table>
<?php endforeach;?>
<?php echo form_submit('',lang('btn_submit'))?>
</form>