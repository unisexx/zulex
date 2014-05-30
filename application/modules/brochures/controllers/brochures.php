<?php
class Brochures extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){		
		$category = new Category();
		$data['categories'] = $category->where("module = 'brochures' and parents <> 0")->order_by('orderlist','asc')->get_page();
		$this->template->title(lang('brochures').' - zulex.co.th');
		$this->template->build('brochure_index',$data);
	}
	
	function view($id){
		$data['category'] = new Category($id);
		$data['brochures'] = $data['category']->brochure->order_by('orderlist','asc')->get_page();
		$this->template->title(lang_decode($data['category']->name).' - '.lang('brochures').' - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('brochure_view',$data);
	}
	
	function download($id){
		$brochure = new Brochure($id);
		$this->load->helper('download');
		
		$data = file_get_contents("uploads/brochures/".basename($brochure->image));
		$name = basename($brochure->image);
		force_download($name, $data); 
	}
}
?>