<?php
class Submenus extends Admin_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function index(){
		$menu = new Submenu();
		$data['menus'] = $menu->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/submenu_index',$data);
	}
	
	function form($id=FALSE){
		$data['menu'] = new Submenu($id);
		$this->template->build('admin/submenu_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$menu = new Submenu($id);
			
			if($_FILES['image_th']['name'])
			{
				if($menu->id){
					$menu->delete_file($menu->id,'uploads/submenu/','image');
				}
				$_POST['image_th'] = $menu->upload($_FILES['image_th'],'uploads/submenu/',215,75);
			}
			
			if($_FILES['image_en']['name'])
			{
				if($menu->id){
					$menu->delete_file($menu->id,'uploads/submenu/','image');
				}
				$_POST['image_en'] = $menu->upload($_FILES['image_en'],'uploads/submenu/',215,75);
			}
			$menu->from_array($_POST);
			$menu->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$menu = new Submenu($id);
			$menu->delete();
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
						$menu = new Submenu(@$_POST['orderid'][$key]);
						$menu->from_array(array('orderlist' => $item));
						$menu->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>