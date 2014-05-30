<?php
Class Manuals extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$manual = new Manual();
		$data['manuals'] = $manual->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/manual_index',$data);
	}
	
	function form($id=FALSE){
		$data['manual'] = new manual($id);
		$this->template->build('admin/manual_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$manual = new manual($id);
			if($_FILES['file']['name'])
			{
				$_POST['file'] = $manual->upload($_FILES['file'],'uploads/manuals/');
			}
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['user_id'] = $this->session->userdata('id');
			$manual->from_array($_POST);
			$manual->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('manuals/admin/manuals/index/');
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$manual = new manual($id);
			$manual->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('manuals/admin/manuals/index/');
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$manual = new manual(@$_POST['orderid'][$key]);
						$manual->from_array(array('orderlist' => $item));
						$manual->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>