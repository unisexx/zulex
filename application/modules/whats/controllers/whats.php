<?php
class Whats extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$category = new Category();
		$category = $category->where("module = 'whats' and parents = 0")->get();
		
		$category_carbrand = new Category();
		$data['category_carbrands'] = $category_carbrand->where("module = 'whats' and parents = $category->id")->order_by('orderlist','asc')->get();
		
		$data['carmodel'] = new Category();
		
		$this->template->title('What Fit In My Car - zulex.co.th');
		$this->template->build('whats_index',$data);
	}
	
	function carversion($category_id=FALSE){
		$data['category'] = new Category($category_id);
		
		$carversion = new Carversion();
		$data['carversions'] = $carversion->where('category_id',$category_id)->order_by('orderlist','asc')->get();
		$this->template->build('carversion_index',$data);
	}
	
	function recommend($id=FALSE){
		$what = new What();
		$data['whats'] = $what->where('carversion_id',$id)->order_by('orderlist','asc')->get();
		$this->template->build('recommend_set',$data);
	}
	
	function customize($id){
		$what = new What($id);
		
		$select_antenna = explode(",", $what->antenna);
		$select_rear_view_camera = explode(",", $what->rear_view_camera);
		$select_amplifier_subbox = explode(",", $what->amplifier_subbox);
		$select_speaker = explode(",", $what->speaker);
		$select_eq = explode(",", $what->eq);
		$select_head_rest_monitor = explode(",", $what->head_rest_monitor);
		$select_roof_mount_monitor = explode(",", $what->roof_mount_monitor);
				
		$data['headunit'] = new product($what->headunit);
		$data['antenna'] = new product($select_antenna[0]);
		$data['rear_view_camera'] = new product($select_rear_view_camera[0]);
		$data['amplifier_subbox'] = new product($select_amplifier_subbox[0]);
		$data['speaker'] = new product($select_speaker[0]);
		$data['eq'] = new product($select_eq[0]);
		$data['head_rest_monitor'] = new product($select_head_rest_monitor[0]);
		$data['roof_mount_monitor'] = new product($select_roof_mount_monitor[0]);
		
		$whatloop = new What();
		$data['whats'] = $whatloop->where('carversion_id',$what->carversion_id)->get();
		
		$data['product'] = new Product();
		
		$data['product_set'] = $id;
		$this->template->build('customize',$data);
	}
	
	function result(){
		
		$headunit_id = @$_POST['headunit'];
		$antenna_id = @$_POST['antenna'];
		$rearview_id = @$_POST['rear_view_camera'];
		$amplifier_id = @$_POST['amplifier_subbox'];
		$speaker_id = @$_POST['speaker'];
		$eq_id = @$_POST['eq'];
		$headrest_id = @$_POST['head_rest_monitor'];
		$roofmount_id = @$_POST['roof_mount_monitor'];
		
		$data['headunit'] = new Product($headunit_id);
		$data['antenna'] = new Product($antenna_id);
		$data['rearview'] = new Product($rearview_id);
		$data['amplifier'] = new Product($amplifier_id);
		$data['speaker'] = new Product($speaker_id);
		$data['eq'] = new Product($eq_id);
		$data['headrest'] = new Product($headrest_id);
		$data['roofmount'] = new Product($roofmount_id);
		
		$this->template->title('What Fit In My Car - zulex.co.th');
		$this->template->build('whats_result2',$data);
	}
	
	/*
	function form($id=FALSE){
		$data['model'] = new Category($id);
		$data['brand'] = new Category($data['model']->parents);
		
		$what = new What();
		$data['whats'] = $what->where('category_id',$id)->order_by('id','asc')->get();
		
		$this->template->title('What Fit In My Car - zulex.co.th');
		$this->template->build('whats_form',$data);
	}
	
	function ajax_form($id){
		$data['what'] = new What($id);
		$data['product'] = new Product();
		$this->load->view('antenna',$data);
	}
	
	function result($id){
		$data['model'] = new Category($id);
		$data['brand'] = new Category($data['model']->parents);
		
		$headmodel_id = @$_POST['headmodel'];
		$antenna_id = @$_POST['antenna'];
		$rearview_id = @$_POST['rearview'];
		$amplifier_id = @$_POST['amplifier'];
		$speaker_id = @$_POST['speaker'];
		$eq_id = @$_POST['eq'];
		$headrest_id = @$_POST['headrest'];
		$roofmount_id = @$_POST['roofmount'];
		
		$data['headmodel'] = new What($headmodel_id);
		$data['antenna'] = new Product($antenna_id);
		$data['rearview'] = new Product($rearview_id);
		$data['amplifier'] = new Product($amplifier_id);
		$data['speaker'] = new Product($speaker_id);
		$data['eq'] = new Product($eq_id);
		$data['headrest'] = new Product($headrest_id);
		$data['roofmount'] = new Product($roofmount_id);
		
		$this->template->title('What Fit In My Car - zulex.co.th');
		$this->template->build('whats_result',$data);
	}
	*/
	
	/*
	function index(){
		$category = new Category();
		$category = $category->where("module = 'whats' and parents = 0")->get();
		
		$category_carbrand = new Category();
		$data['category_carbrands'] = $category_carbrand->where("module = 'whats' and parents = $category->id")->order_by('id','asc')->get();
		
		$this->template->build('what_index',$data);
	}
	
	function carbrand($id){
		$category = new Category();
		$data['carmodel_categories'] = $category->where("module = 'whats' and parents = $id")->order_by('id','asc')->get();
		$this->load->view('carmodel',$data);
	}
	
	function carmodel($id){
		$what = new What();
		$data['headmodel_categories'] = $what->where("category_id = $id")->order_by('id','asc')->get();
		$this->load->view('headmodel',$data);
	}
	
	function headmodel($id){
		$data['what'] = new What($id);
		$data['product'] = new Product();
		$this->load->view('antenna',$data);
	}
	
	function print_it(){
		$headmodel_id = $_POST['headmodel'];
		$antenna_id = $_POST['antenna'];
		$rearview_id = $_POST['rearview'];
		$amplifier_id = $_POST['amplifier'];
		$speaker_id = $_POST['speaker'];
		$eq_id = $_POST['eq'];
		$headrest_id = $_POST['headrest'];
		$roofmount_id = $_POST['roofmount'];
		
		$data['headmodel'] = new What($headmodel_id);
		$data['antenna'] = new Product($antenna_id);
		$data['rearview'] = new Product($rearview_id);
		$data['amplifier'] = new Product($amplifier_id);
		$data['speaker'] = new Product($speaker_id);
		$data['eq'] = new Product($eq_id);
		$data['headrest'] = new Product($headrest_id);
		$data['roofmount'] = new Product($roofmount_id);
		
		
		$this->load->view('result',$data);
	}
	*/
}
?>