<?php
Class Wallpapers extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE)
	{
		$data['categories'] = new Category($id);
		$wallpaper = new Wallpaper();
		if(@$_POST['category_id'])$id=$_POST['category_id'];
		$data['wallpapers'] = $wallpaper->where('category_id',$id)->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/wallpaper_index',$data);
	}
	
	function form($cat_id,$id=FALSE)
	{
		$data['categories'] = new Category($cat_id);
		$data['wallpapers'] = new Wallpaper($id);
		$this->template->build('admin/wallpaper_form',$data);
	}
	
	function save($cat_id,$id=FALSE)
	{
		if($_POST)
		{
			$wallpaper = new Wallpaper($id);
			if($_FILES['image']['name'])
			{
				if($wallpaper->id){
					$wallpaper->delete_file($wallpaper->id,'uploads/wallpapers/','image');
				}
				$_POST['image'] = $wallpaper->upload($_FILES['image'],'uploads/wallpapers/');
				$wallpaper->thumb('uploads/wallpapers/thumbs/',170,120);
			}
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['user_id'] = $this->session->userdata('id');
			$wallpaper->from_array($_POST);
			$wallpaper->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($cat_id,$id=FALSE)
	{
		if($id)
		{
			$wallpaper = new Wallpaper($id);
			$wallpaper->delete_file($wallpaper->id,'uploads/wallpapers/','image');
			$wallpaper->delete();
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
						$wallpaper = new Wallpaper(@$_POST['orderid'][$key]);
						$wallpaper->from_array(array('orderlist' => $item));
						$wallpaper->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>