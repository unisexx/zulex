<?php
Class Contacts extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$contacts = new Contact();
		$data['contacts'] = $contacts->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/contact_index',$data);
	}
	
	function form($id=FALSE){
		$data['contact'] = new Contact($id);
		$this->template->build('admin/contact_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$contact = new Contact($id);
			$_POST['user_id'] = $this->session->userdata('id');
			$contact->from_array($_POST);
			$contact->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('contacts/admin/contacts/index/');
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$contact = new Contact($id);
			$contact->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('contacts/admin/contacts/index/');
	}
	
	function view($id=FALSE){
		$this->template->set_layout('lightbox');
		$data['contact'] = new Contact($id);
		$this->template->build('admin/contact_view',$data);
	}
}
?>