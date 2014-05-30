<?php
class Intropages extends Admin_Controller {

	function __construct()
	{
		parent::__construct();	
	}
	
	function index()
	{
		$intropage = new Intropage();
		$data['intropages'] = $intropage->order_by('id','desc')->get_page();
		$this->template->build('admin/intropage_index',$data);
	}
	
	function form($id=FALSE){
		$data['intropage'] = new Intropage($id);
		$this->template->build('admin/intropage_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$intropage = new Intropage($id);
			if($_FILES['image']['name'])
			{
				if($intropage->id){
					$intropage->delete_file($intropage->id,'uploads/intropages/','image');
				}
				$_POST['image'] = $intropage->upload($_FILES['image'],'uploads/intropages/',584,397);
			}
			$_POST['user_id'] = $this->session->userdata('id');
			$intropage->from_array($_POST);
			$intropage->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$intropage = new Intropage($id);
			$intropage->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>