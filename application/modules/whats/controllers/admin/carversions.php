<?php
Class Carversions extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$data['category'] = new Category($id);
		
		$carversion = new Carversion();
		$data['carversions'] = $carversion->where("category_id = $id")->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/carversion_index',$data);
	}
	
	function form($category_id,$id=FALSE){
		$data['category'] = new Category($category_id);
		
		$data['carversion'] = new Carversion($id);
		$this->template->build('admin/carversion_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$carversion = new Carversion($id);
			if($_FILES['image']['name'])
			{
				if($carversion->id){
					$carversion->delete_file($carversion->id,'uploads/carversion/','image');
				}
				$_POST['image'] = $carversion->upload($_FILES['image'],'uploads/carversion/',180,80);
				//$Carversion->thumb('uploads/Carversion/thumbs/',170,120);
			}
			$_POST['user_id'] = $this->session->userdata('id');
			
			$carversion->from_array($_POST);
			$carversion->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$carversion = new Carversion($id);
			$carversion->delete();
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
						$carversion = new Carversion(@$_POST['orderid'][$key]);
						$carversion->from_array(array('orderlist' => $item));
						$carversion->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
}
?>