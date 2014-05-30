<?php
class Fmenus extends Admin_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function index(){
		$menu = new Fmenu();
		$data['menus'] = $menu->order_by('orderlist','asc')->get_page();
		$this->template->build('admin/footer_menu_index',$data);
	}
	
	function form($id=FALSE){
		$data['menu'] = new Fmenu($id);
		$this->template->build('admin/footer_menu_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$menu = new Fmenu($id);
			$_POST['title'] = lang_encode($_POST['title']);
			$menu->from_array($_POST);
			$menu->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id){
		if($id){
			$menu = new Fmenu($id);
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
						$menu = new Fmenu(@$_POST['orderid'][$key]);
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