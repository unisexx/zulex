<?php
class Products extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		$category = new Category();
		$data['categories'] = $category->where("module = 'products' and parents = 325")->order_by('orderlist','asc')->get();
		$this->template->title(lang('product').' - zulex.co.th');
		$this->template->build('product_index',$data);
	}
	
	function category($id){
		$data['parent_id'] = $id;
		$data['category'] = new Category($id);
		$data['categories'] = new Category();
		$this->template->title(lang_decode($data['category']->name).' - zulex.co.th');
		$this->template->build('product_category',$data);
	}
	
	function more($id){
		$data['category'] = new Category($id);
		$parent_id = $data['category']->parents;
		$data['parent_category'] = new Category($parent_id);
		
		$category = new Category();
		$data['parent_category_menus'] = $category->where("parents = $parent_id")->order_by('orderlist','asc')->get();
		$this->template->title(lang_decode($data['parent_category']->name).' - zulex.co.th');
		$this->template->build('product_more',$data);
	}
	
	function product_detail($id){
		$data['product'] = new Product($id);
		$data['category'] = new Category($data['product']->category->parents);
		$data['parent_category'] = new Category($data['category']->parents);
		$this->template->title(lang_decode($data['product']->title).' - '.lang_decode($data['category']->name).' - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('product_detail',$data);
		$this->template->append_metadata(meta('description',strip_tags(lang_decode($data['product']->detail1))));
	}
	
	function inc_footer(){
		$category = new Category();
		$data['product_categories'] = $category->where("module = 'products' and parents = 325")->order_by('orderlist','asc')->get();
		
		$partner = new Partner();
		$data['partners'] = $partner->order_by('orderlist','asc')->get();
		
		$this->load->view('inc_footer',$data);
	}
	
	function inc_home(){		
		$category = new Category();
		$data['categories'] = $category->where("module = 'products' and parents = 325")->order_by('orderlist','asc')->get();
		
		$this->load->view('inc_home',$data);
	}
	
	function inc_highlight(){
		$product = new Product();
		$data['products'] = $product->where("highlight1 = 'approve'")->order_by('approve_date','desc')->limit(8)->get();
		$this->load->view('inc_highlight',$data);
	}
	
	function inc_highlight2(){
		$product = new Product();
		$data['products'] = $product->where("status = 'approve'")->order_by('approve_date','desc')->limit(4)->get();
		$this->load->view('inc_highlight2',$data);
	}
}
?>