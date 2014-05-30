<?php
class Submenus extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function inc_home(){		
		$menu = new Submenu();
		$data['menus'] = $menu->order_by('orderlist','asc')->get_page();
		$this->load->view('submenu_index',$data);
	}
}
?>