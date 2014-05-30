<?php
Class Categories extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$category = new Category();
		$data['categories'] = $category->where("module = 'wallpapers' and parents <> 0")->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/category_index',$data);
	}
	
	function form($id=FALSE)
	{	
			$categories = new Category();
			$categories->where("module = 'wallpapers' and parents = 0")->get();
			$data['parent'] = $categories->get_clone();
			$categories->clear();
			$data['category'] = $categories->get_by_id($id);
			$this->template->build('admin/category_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$category = new Category($id);
			$_POST['user_id'] = $this->session->userdata('id');
			$_POST['name'] = lang_encode($_POST['name']);
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
			$module = $category->module;
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