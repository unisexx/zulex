<?php
Class Applicants extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$applicants = new Applicant();
		$data['applicants'] = $applicants->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/applicant_index',$data);
	}
	
	function form($id=FALSE){
		$data['applicant'] = new Applicant($id);
		$this->template->build('admin/applicant_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$applicant = new Applicant($id);
			if($_FILES['image']['name'])
			{
				if($applicant->id){
					$applicant->delete_file($applicant->id,'uploads/resellers/applicants/','image');	
				}
				$_POST['image'] = $applicant->upload($_FILES['image'],'uploads/resellers/applicants/');
			}
			$_POST['user_id'] = $this->session->userdata('id');
			$applicant->from_array($_POST);
			$applicant->save();
			set_notify('success', lang('save_data_complete'));
		}
			
		redirect('applicants/admin/applicants/index/');
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$applicant = new Applicant($id);
			$applicant->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('applicants/admin/applicants/index/');
	}
	
	function remove_image($id)
	{
		$applicant = new Applicant($id);
		$applicant->delete_file($applicant->id,'uploads/resellers/','image');
		$applicant->image = NULL;
		$applicant->save();
		set_notify('success', lang('remove_image_complete'));
		redirect('applicants/admin/applicants/form/'.$id);
	}
	
	function view($id=FALSE){
		$this->template->set_layout('lightbox');
		$data['applicant'] = new Applicant($id);
		$this->template->build('admin/applicant_view',$data);
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$applicant = new Applicant(@$_POST['orderid'][$key]);
						$applicant->from_array(array('orderlist' => $item));
						$applicant->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
}
?>