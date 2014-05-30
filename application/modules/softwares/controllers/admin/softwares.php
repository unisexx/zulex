<?php
Class Softwares extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$software = new Software();
		$data['softwares'] = $software->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/software_index',$data);
	}
	
	function form($id=FALSE){
		$data['software'] = new Software($id);
		$this->template->build('admin/software_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$software = new Software($id);
			if($_FILES['file']['name'])
			{
				$_POST['file'] = $software->upload($_FILES['file'],'uploads/softwares/');
			}
			$_POST['detail'] = lang_encode($_POST['detail']);
			$_POST['user_id'] = $this->session->userdata('id');
			$software->from_array($_POST);
			$software->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('softwares/admin/softwares/index/');
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$software = new Software($id);
			$software->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('softwares/admin/softwares/index/');
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$software = new Software(@$_POST['orderid'][$key]);
						$software->from_array(array('orderlist' => $item));
						$software->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>