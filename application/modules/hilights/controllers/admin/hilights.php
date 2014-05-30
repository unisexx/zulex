<?php
Class Hilights extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$highlight = new Hilight();
		$data['hilights'] = $highlight->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/hilight_index',$data);
	}
	
	function form($id=FALSE){
		$data['hilight'] = new Hilight($id);
		$this->template->build('admin/hilight_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$hilight = new Hilight($id);
			if($_FILES['image']['name'])
			{
				if($hilight->id){
					$hilight->delete_file($hilight->id,'uploads/hilights/','image');
				}
				$_POST['image'] = $hilight->upload($_FILES['image'],'uploads/hilights/',600,340);
			}
			$hilight->from_array($_POST);
			$hilight->save();
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$hilight = new Hilight($id);
			$hilight->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$hilight = new Hilight($id);
			$hilight->approve_date = date("Y-m-d H:i:s");
			$hilight->from_array($_POST);
			$hilight->save();
		}
		echo $_POST['status'];
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$hilight = new Hilight(@$_POST['orderid'][$key]);
						$hilight->from_array(array('orderlist' => $item));
						$hilight->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>