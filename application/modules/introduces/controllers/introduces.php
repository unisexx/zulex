<?php
Class Introduces extends Public_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$introduce = new Introduce();
		$data['introduces'] = $introduce->order_by('orderlist','asc')->get_page();
		$this->template->title('Introduce Product - zulex.co.th');
		$this->template->build('introduce_index',$data);
	}
	
	function view($id){
		$data['introduce'] = new Introduce($id);
		$this->template->title(lang_decode($data['introduce']->name).' - Introduce Product - zulex.co.th');
		$this->template->build('introduce_view',$data);
	}
	
}
?>