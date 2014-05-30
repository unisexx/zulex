<?php
class Intropage_configs extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['intropage_config'] = new Intropage_config(1);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/intropage_config_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$intropage_config = new Intropage_config($id);
			if($_FILES['image']['name']){
				$_POST['image'] = $intropage_config->upload($_FILES['image'],'uploads/intropages/backgrounds/');
			}
			$_POST['user_id'] = $this->session->userdata('id');
			$intropage_config->from_array($_POST);
			$intropage_config->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_image($id)
	{
		$intropage_config = new Intropage_config($id);
		$intropage_config->delete_file($intropage_config->id,'uploads/intropages/backgrounds/','image');
		$intropage_config->image = NULL;
		$intropage_config->save();
		set_notify('success', lang('remove_image_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>