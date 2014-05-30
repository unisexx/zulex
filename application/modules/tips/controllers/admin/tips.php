<?php
Class Tips extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$this->load->helper('text');
		$tip = new Tip();
		$data['tips'] = $tip->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/tip_index',$data);
	}
	
	function form($id=FALSE){
		$data['tip'] = new Tip($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/tip_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$tip = new Tip($id);
			if($_FILES['image']['name'])
			{
				if($tip->id){
					$tip->delete_file($tip->id,'uploads/tips/','image');
				}
				$_POST['image'] = $tip->upload($_FILES['image'],'uploads/tips/',125,80);
			}
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['title2'] = lang_encode($_POST['title2']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			$_POST['user_id'] = $this->session->userdata('id');
			$tip->from_array($_POST);
			$tip->save();
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect('tips/admin/tips');
	}
	
	function delete($id){
		if($id){
			$tip = new Tip($id);
			$tip->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('tips/admin/tips');
	}
	
	function image_delete($id){
		$image = new Tip($id);
		$image->delete_file($image->id,'uploads/tips/','file');
		$image->delete();
		set_notify('success', lang('delete_data_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_image($id)
	{
		$tip = new Tip($id);
		$tip->delete_file($tip->id,'uploads/tips/','image');
		$tip->image = NULL;
		$tip->save();
		set_notify('success', lang('remove_image_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$tips = new Tip($id);
			$tips->approve_date = date("Y-m-d H:i:s");
			$tips->from_array($_POST);
			$tips->save();
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
						$tip = new Tip(@$_POST['orderid'][$key]);
						$tip->from_array(array('orderlist' => $item));
						$tip->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>