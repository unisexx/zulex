<?php
Class Brochures extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$brochure = new Brochure();
		$data['brochures'] = $brochure->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/brochure_index',$data);
	}
	
	function form($id=FALSE){
		$data['brochure'] = new Brochure($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/brochure_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$brochure = new Brochure($id);
			if($_FILES['image']['name'])
			{
				if($brochure->id){
					$brochure->delete_file($brochure->id,'uploads/brochures/','image');
				}
				$_POST['image'] = $brochure->upload($_FILES['image'],'uploads/brochures/');
				$brochure->thumb('uploads/brochures/thumbs/',170,120);
			}
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['user_id'] = $this->session->userdata('id');
			$brochure->from_array($_POST);
			$brochure->save();			
			set_notify('success', lang('save_data_complete'));
		}
		redirect('brochures/admin/brochures');
	}
	
	function delete($id){
		if($id){
			$brochure = new Brochure($id);
			$brochure->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('brochures/admin/brochures');
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$brochure = new Brochure(@$_POST['orderid'][$key]);
						$brochure->from_array(array('orderlist' => $item));
						$brochure->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>