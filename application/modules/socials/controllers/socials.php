<?php
class Socials extends Public_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function inc_index(){
		$social = new Social();
		$data['socials'] = $social->order_by('orderlist','asc')->get_page();
		$this->load->view('inc_index',$data);
	}
	
}
?>