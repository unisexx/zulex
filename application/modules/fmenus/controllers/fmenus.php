<?php
class Fmenus extends Public_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function inc_footer_menu(){
		$menu = new Fmenu();
		$data['menus'] = $menu->order_by('orderlist','asc')->get_page();
		$this->load->view('inc_footer_menu',$data);
	}
}
?>