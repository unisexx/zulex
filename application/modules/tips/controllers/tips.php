<?php
class Tips extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){		
		$category = new Category();
		$data['categories'] = $category->where("module = 'tips' and parents <> 0")->order_by('orderlist','asc')->get_page();
		$this->template->title('Tip & Technic - zulex.co.th');
		$this->template->build('tip_index',$data);
	}
	
	function view($id){
		$data['tip'] = new Tip($id);
		$this->template->title(lang_decode($data['tip']->title).' - Tip & Technic - zulex.co.th');
		$this->template->append_metadata( meta('description',lang_decode($data['tip']->title2)));
		$this->template->build('tip_view',$data);
	}
}
?>