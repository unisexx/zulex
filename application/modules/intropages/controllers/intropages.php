<?php
class Intropages extends Public_Controller {

	function __construct()
	{
		parent::__construct();	
	}
	
	function index()
	{
		$data['intropage_config'] = new Intropage_config(1);
		
		$intropage = new Intropage();
		$data['intropages'] = $intropage->order_by('id','desc')->get();
		$this->load->view('index',$data);
	}
	
}
?>