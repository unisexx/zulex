<?php
class Zicons extends Admin_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function index(){
		$icon = new Zicon();
		$data['icons'] = $icon->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/icon_index',$data);
	}
	
	function form($id=FALSE){
		$data['icon'] = new Zicon($id);
		$this->template->build('admin/icon_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$icon = new Zicon($id);
			if($_FILES['image']['name'])
			{
				if($icon->id){
					$icon->delete_file($icon->id,'uploads/icons/','image');
				}
				$_POST['image'] = $icon->upload($_FILES['image'],'uploads/icons/');
			}
			$_POST['user_id'] = $this->session->userdata('id');
			$icon->from_array($_POST);
			$icon->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$icon = new Zicon($id);
			$icon->delete();
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
						$icon = new Zicon(@$_POST['orderid'][$key]);
						$icon->from_array(array('orderlist' => $item));
						$icon->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>