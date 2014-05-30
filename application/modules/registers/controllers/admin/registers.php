<?php
Class Registers extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$register = new Register();
		$data['registers'] = $register->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/register_index',$data);
	}
	
	function form($id=FALSE){
		$data['register'] = new Register($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/register_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$register = new Register($id);
			$_POST['user_id'] = $this->session->userdata('id');
			$register->from_array($_POST);
			$register->save();			
			set_notify('success', lang('save_data_complete'));
		}
		redirect('registers/admin/registers');
	}
	
	function delete($id){
		if($id){
			$register = new Register($id);
			$register->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('registers/admin/registers');
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$register = new Register(@$_POST['orderid'][$key]);
						$register->from_array(array('orderlist' => $item));
						$register->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>