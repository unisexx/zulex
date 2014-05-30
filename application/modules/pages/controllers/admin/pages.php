<?php

class Pages extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index($page)
	{
		$data['page'] = new Page;
		$data['page']->get_by_slug($page);
		if(!$data['page']->id or !$page) redirect('pages/admin/pages/index/about-us');
		//media
		$this->template->append_metadata('<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>');
		$this->template->append_metadata('<script type="text/javascript" src="media/js/tinymce.js"></script>');
		$this->template->build('admin/pages/index',$data);
	}
	
	public function save($id)
	{
		if($_POST)
		{
			$page = new Page($id);
			$page->detail = lang_encode($this->input->post('detail'));
			$page->save();
			set_notify('success', lang('save_data_complete'));	
		}	
		redirect('pages/admin/pages/index/'.$page->slug);
	}
	
}

?>