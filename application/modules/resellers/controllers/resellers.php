<?php
class Resellers extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function register(){
		$this->template->title(lang('resellers_register').' - zulex.co.th');
		$this->template->build('reseller_register');
	}
	
	function index(){		
		$data['categories'] = new Category();		
		$resellers = new Reseller();
		$this->template->title(lang('reseller').' - zulex.co.th');
		$this->template->build('reseller_index',$data);
	}
	
	function category($id){
		$data['parent_id'] = $id;
		$data['category'] = new Category($id);
		$data['categories'] = new Category();
		$this->template->title(lang_decode($data['category']->name).' - '.lang('reseller').' - zulex.co.th');
		$this->template->build('reseller_category',$data);
	}
	
	function store($id){
		$data['category'] = new Category($id);
		$parent_id = $data['category']->parents;
		$data['parent_category'] = new Category($parent_id);
		$this->template->title(lang_decode($data['category']->name).' - '.lang('reseller').' - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('reseller_store',$data);
	}
	
	function viewmap($id=FALSE){
		$data['reseller'] = new Reseller($id);
		$this->load->view('view_map',$data);
	}
}
?>