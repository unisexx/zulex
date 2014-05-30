<?php
class Applicants extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function save($id=FALSE){
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
			
		redirect('resellers/register/');
	}
}
?>