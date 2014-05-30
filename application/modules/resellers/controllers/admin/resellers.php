<?php
Class Resellers extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($sub_categories_1,$current_id,$id=FALSE){
		$data['category'] = new Category($id);
		$data['sub_categories_1'] = new Category($sub_categories_1);
		$data['parent_category'] = new Category($current_id);
		$resellers = new Reseller();
		$data['resellers'] = $resellers->where('category_id',$id)->order_by('id','desc')->get_page();
		$this->template->build('admin/reseller_index',$data);
	}
	
	function form($sub_categories_1,$current_id,$category_id,$id=FALSE){
		$data['sub_categories_1'] = new Category($sub_categories_1);
		$data['parent_category'] = new Category($current_id);
		$data['category'] = new Category($category_id);
		$data['reseller'] = new Reseller($id);
		$this->template->build('admin/reseller_form',$data);
	}
	
	function save($sub_categories_1,$parent_id,$category_id,$id=FALSE)
	{
		if($_POST){
			$reseller = new Reseller($id);
			if($_FILES['image']['name'])
			{
				if($reseller->id){
					$reseller->delete_file($reseller->id,'uploads/resellers/','image');
				}
				$_POST['image'] = $reseller->upload($_FILES['image'],'uploads/resellers/',166,125);
			}
			$_POST['category_id'] = $category_id;
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['address'] = lang_encode($_POST['address']);
			$_POST['service_time'] = lang_encode($_POST['service_time']);
			$_POST['user_id'] = $this->session->userdata('id');
			$reseller->from_array($_POST);
			$reseller->save();
			set_notify('success', lang('save_data_complete'));
		}
		
		redirect('resellers/admin/resellers/index/'.$sub_categories_1.'/'.$parent_id.'/'.$category_id);
	}
	
	function delete($sub_categories_1,$parent_id,$category_id,$id=FALSE){
		if($id)
		{
			$reseller = new Reseller($id);
			$reseller->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('resellers/admin/resellers/index/'.$sub_categories_1.'/'.$parent_id.'/'.$category_id);
	}
	
	function remove_image($sub_categories_1,$current_id,$category_id,$id)
	{
		$reseller = new Reseller($id);
		$reseller->delete_file($reseller->id,'uploads/resellers/','image');
		$reseller->image = NULL;
		$reseller->save();
		set_notify('success', lang('remove_image_complete'));
		redirect('resellers/admin/resellers/form/'.$sub_categories_1.'/'.$current_id.'/'.$category_id.'/'.$id);
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$reseller = new Reseller(@$_POST['orderid'][$key]);
						$reseller->from_array(array('orderlist' => $item));
						$reseller->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
}
?>