<?php
class categories extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$categories = new Category();
		$data['categories'] = $categories->where("module = 'resellers' and parents = 1")->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/category_index',$data);
	}
	
	function form($id=FALSE)
	{	
			$categories = new Category();
			$categories->where("module = 'resellers' and parents = 0")->get();
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
		redirect('resellers/admin/categories');
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
		redirect('galleries/admin/categories');
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


// --------------------------------- Sub categories 1 ---------------------------------

	function sub_categories($id=FALSE){
		// parent id -----------------
		$data['category'] = new Category($id);
		// sub_categories ------------
		$categories = new Category();
		$data['parent_id'] = $id;
		$data['categories'] = $categories->where("module = 'resellers' and parents = $id")->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/sub_category_index',$data);
	}
	
	function sub_categories_form($parent_id,$id=FALSE)
	{	
			$categories = new Category($parent_id);
			$data['parent'] = $categories->get_clone();
			$categories->clear();
			
			$data['category'] = $categories->get_by_id($id);
			$this->template->build('admin/sub_category_form',$data);
	}
	
	function sub_categories_save($id=FALSE)
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
		redirect('resellers/admin/categories/sub_categories/'.$_POST['parents']);
	}
	
	function sub_categories_delete($parent_id,$id)
	{
		if($id)
		{
			$category = new Category($id);
			$module = $category->module;
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('resellers/admin/categories/sub_categories/'.$parent_id);
	}
	

// --------------------------------- Sub categories 2 ---------------------------------

	function sub_categories_2($sub_categories_1,$id=FALSE){
		// parent id -----------------
		$data['sub_categories_1'] = new Category($sub_categories_1);
		$data['category'] = new Category($id);
		// sub_categories ------------
		$categories = new Category();
		$data['current_id'] = $id;
		$data['categories'] = $categories->where("module = 'resellers' and parents = $id")->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/sub_category_index_2',$data);
	}
	
	function sub_categories_form_2($sub_categories_1,$current_id,$id=FALSE)
	{		
			$data['sub_categories_1'] = new Category($sub_categories_1);
			$categories = new Category($current_id);
			$data['parent'] = $categories->get_clone();
			$categories->clear();
			
			$data['category'] = $categories->get_by_id($id);
			$this->template->build('admin/sub_category_form_2',$data);
	}
	
	function sub_categories_save_2($sub_categories_1,$id=FALSE)
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
		//redirect('resellers/admin/categories/sub_categories_2/'.$sub_categories_1.'/'.$_POST['parents']);
	}
	
	function sub_categories_delete_2($sub_categories_1,$parent_id,$id)
	{
		$this->db->debug=true;
		if($id)
		{
			$category = new Category($id);
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		//redirect('resellers/admin/categories/sub_categories_2/'.$sub_categories_1.'/'.$parent_id);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>