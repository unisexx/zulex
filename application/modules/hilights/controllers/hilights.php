<?php
class Hilights extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function inc_highlight(){
		$hilight = new Hilight();
		$data['hilights'] = $hilight->order_by('orderlist','asc')->limit(20)->get();
		$this->load->view('inc_hilight',$data);
	}
	
	function inc_side_hilight(){
		$side_hilight = new Side_hilight();
		$data['side_hilights'] = $side_hilight->order_by('orderlist','asc')->limit(4)->get();
		$this->load->view('inc_side_hilight',$data);
	}
}
?>