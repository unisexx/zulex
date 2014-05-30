<?php
class Manuals extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){		
		$category = new Category();
		$data['categories'] = $category->where("module = 'manuals' and parents <> 0")->order_by('orderlist','asc')->get_page();
		$this->template->title('Manual - zulex.co.th');
		$this->template->build('manual_index',$data);
	}
	
	function download($id){
		$manual = new Manual($id);
		$this->load->helper('download');
		
		$data = file_get_contents("uploads/manuals/".basename($manual->file));
		$name = basename($manual->file);
		force_download($name, $data); 
	}
}
?>