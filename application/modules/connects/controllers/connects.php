<?php
class Connects extends Public_Controller{
	
	function __construct()
	{
		parent::__construct();	
	}
	
	function index(){
		$connect = new Connect();
		$data['connects'] = $connect->order_by('orderlist','asc')->get_page();
		$this->template->title('Connect White Up - zulex.co.th');
		$this->template->build('connect_index',$data);
	}
	
}
?>