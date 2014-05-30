<?php
Class Introduces extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$introduce = new Introduce();
		$data['introduces'] = $introduce->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/introduce_index',$data);
	}
	
	function form($id=FALSE){
		$data['introduce'] = new Introduce($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/introduce_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$introduce = new Introduce($id);
			if($_FILES['image']['name'])
			{
				if($introduce->id){
					$introduce->delete_file($introduce->id,'uploads/introduces/','image');
				}
				$_POST['image'] = $introduce->upload($_FILES['image'],'uploads/introduces/',430,245);
			}
			$_POST['name'] = lang_encode($_POST['name']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			$_POST['detail2'] = lang_encode($_POST['detail2']);
			$_POST['user_id'] = $this->session->userdata('id');
			$introduce->from_array($_POST);
			$introduce->save();
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$introduce = new Introduce($id);
			$introduce->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$introduce = new Introduce(@$_POST['orderid'][$key]);
						$introduce->from_array(array('orderlist' => $item));
						$introduce->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>