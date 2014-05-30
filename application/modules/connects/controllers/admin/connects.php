<?php
class Connects extends Admin_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function index(){
		$connect = new Connect();
		$data['connects'] = $connect->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/connect_index',$data);
	}
	
	function form($id=FALSE){
		$data['connect'] = new Connect($id);
		$this->template->build('admin/connect_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$connect = new Connect($id);
			if($_FILES['image']['name'])
			{
				if($connect->id){
					$connect->delete_file($connect->id,'uploads/connects/','image');
				}
				$_POST['image'] = $connect->upload($_FILES['image'],'uploads/connects/');
			}
			$_POST['user_id'] = $this->session->userdata('id');
			$connect->from_array($_POST);
			$connect->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$connect = new Connect($id);
			$connect->delete();
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
						$connect = new Connect(@$_POST['orderid'][$key]);
						$connect->from_array(array('orderlist' => $item));
						$connect->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>