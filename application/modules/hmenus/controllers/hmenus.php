<?php
class Hmenus extends Public_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function inc_header_menu(){
		$menu = new Hmenu();
		$data['menus'] = $menu->order_by('orderlist','asc')->get_page();
		$this->load->view('inc_header_menu',$data);
	}
}
?>