<?php
Class Categories extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($stack=FALSE,$id=FALSE){
		if($id == ""){
			$id = 507;
			$data['parent_id'] = $id;
			$data['parent_category'] = new Category($id);
		}else{
			$data['parent_id'] = $id;
			$data['parent_category'] = new Category($id);
		}
		$category = new Category();
		$data['categories'] = $category->where("parents = $id")->order_by('orderlist','asc')->get_page();
		$data['stack'] = $stack;
		$this->template->build('admin/category_index',$data);
	}
	
	function form($parent_id,$id=FALSE){
		$category = new Category($id);
		
		$parent_category = new Category();
		$parent_category->where("id = $parent_id")->get();
		$data['parent'] = $parent_category->get_clone();
		$parent_category->clear();
		$data['category'] = $parent_category->get_by_id($id);
			
		$this->template->build('admin/category_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$category = new Category($id);
			
			$_POST['name'] = lang_encode($_POST['name']);
			$_POST['user_id'] = $this->session->userdata('id');
			$category->from_array($_POST);
			$category->save();
			
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id)
	{
		if($id)
		{
			$category = new Category($id);
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$category = new Category(@$_POST['orderid'][$key]);
						$category->from_array(array('orderlist' => $item));
						$category->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>