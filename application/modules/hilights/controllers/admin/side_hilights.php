<?php
class Side_hilights extends Admin_Controller {

	function __construct()
	{
		parent::__construct();	
	}
	
	function index()
	{
		$side_hilight = new Side_hilight();
		$data['side_hilights'] = $side_hilight->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/side_hilight_index',$data);
	}
	
	function form($id=FALSE){
		$data['side_hilight'] = new Side_hilight($id);
		$this->template->build('admin/side_hilight_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$side_hilight = new Side_hilight($id);
			if($_FILES['image']['name'])
			{
				if($side_hilight->id){
					$side_hilight->delete_file($side_hilight->id,'uploads/side_hilights/','image');
				}
				$_POST['image'] = $side_hilight->upload($_FILES['image'],'uploads/side_hilights/',430,245);
			}
			$_POST['detail'] = lang_encode($_POST['detail']);
			$side_hilight->from_array($_POST);
			$side_hilight->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$side_hilight = new Side_hilight($id);
			$side_hilight->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$side_hilight = new Side_hilight($id);
			$side_hilight->approve_date = date("Y-m-d H:i:s");
			$side_hilight->from_array($_POST);
			$side_hilight->save();
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
						$side_hilight = new Side_hilight(@$_POST['orderid'][$key]);
						$side_hilight->from_array(array('orderlist' => $item));
						$side_hilight->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>