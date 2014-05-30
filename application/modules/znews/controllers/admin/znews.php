<?php
Class Znews extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$znew = new Znew();
		$data['znews'] = $znew->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/znew_index',$data);
	}
	
	function form($id=FALSE){
		$data['znew'] = new Znew($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/znew_form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$znew = new Znew($id);
			if($_FILES['image']['name'])
			{
				if($znew->id){
					$znew->delete_file($znew->id,'uploads/znews/','image');
				}
				$_POST['image'] = $znew->upload($_FILES['image'],'uploads/znews/',200,150);
			}
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			$_POST['user_id'] = $this->session->userdata('id');
			$znew->from_array($_POST);
			$znew->save();
			
			fix_file($_FILES['file']);
			foreach($_FILES['file'] as $key => $item)
			{
				if($item)
				{
					$znew_image = new Znew_image(@$_POST['image_id'][$key]);
					if($_FILES['file'][$key]['name'])
					{
						if(@$_POST['image_id'][$key])$znew_image->delete_file('uploads/znews','file');
						$znew_image->file = $znew_image->upload($_FILES['file'][$key],'uploads/znews');
						$znew_image->thumb('uploads/znews/thumbs/',50,37);
						$znew_image->znew_id = $znew->id;
						$znew_image->save();
					}		
				}
			}
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect('znews/admin/znews');
	}
	
	function delete($id){
		if($id){
			$znew = new Znew($id);
			$znew->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('znews/admin/znews');
	}
	
	function image_delete($id){
		$image = new Znew_image($id);
		$image->delete_file($image->id,'uploads/znews/','file');
		$image->delete();
		set_notify('success', lang('delete_data_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_image($id)
	{
		$znew = new Znew($id);
		$znew->delete_file($znew->id,'uploads/znews/','image');
		$znew->image = NULL;
		$znew->save();
		set_notify('success', lang('remove_image_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$znews = new Znew($id);
			$znews->approve_date = date("Y-m-d H:i:s");
			$znews->from_array($_POST);
			$znews->save();
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
						$znew = new Znew(@$_POST['orderid'][$key]);
						$znew->from_array(array('orderlist' => $item));
						$znew->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>