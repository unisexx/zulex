<?php
Class Partners extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$partner = new Partner();
		$data['partners'] = $partner->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/partner_index',$data);
	}
	
	function form($id=FALSE){
		$data['partner'] = new Partner($id);
		$this->template->build('admin/partner_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$partner = new Partner($id);
			$_POST['user_id'] = $this->session->userdata('id');
			$partner->from_array($_POST);
			$partner->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('partners/admin/partners/index/');
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$partner = new Partner($id);
			$partner->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('partners/admin/partners/index/');
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$partner = new Partner(@$_POST['orderid'][$key]);
						$partner->from_array(array('orderlist' => $item));
						$partner->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
}
?>