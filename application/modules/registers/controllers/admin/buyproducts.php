<?php
Class Buyproducts extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$buyproduct = new Buyproduct();
		$data['buyproducts'] = $buyproduct->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/buyproduct_index',$data);
	}
	
	function form($id=FALSE){
		$data['buyproduct'] = new Buyproduct($id);
		$this->template->build('admin/buyproduct_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$buyproduct = new Buyproduct($id);
			$_POST['user_id'] = $this->session->userdata('id');
			$buyproduct->from_array($_POST);
			$buyproduct->save();			
			set_notify('success', lang('save_data_complete'));
		}
		redirect('registers/admin/buyproducts');
	}
	
	function delete($id){
		if($id){
			$buyproduct = new Buyproduct($id);
			$buyproduct->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('registers/admin/buyproducts');
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$buyproduct = new Buyproduct(@$_POST['orderid'][$key]);
						$buyproduct->from_array(array('orderlist' => $item));
						$buyproduct->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>