<?php
class Softwares extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){		
		$category = new Category();
		$data['categories'] = $category->where("module = 'softwares' and parents <> 0")->order_by('orderlist','asc')->get_page();
		$this->template->title('Software & Firmware - zulex.co.th');
		$this->template->build('software_index',$data);
	}
	
	function view($id){
		$data['software'] = new Software($id);
		$this->template->title($data['software']->title.' - Software & Firmware - zulex.co.th');
		$this->template->build('software_view',$data);
	}
}
?>