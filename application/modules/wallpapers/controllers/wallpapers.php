<?php
class Wallpapers extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){		
		$category = new Category();
		$data['categories'] = $category->where("module = 'wallpapers' and parents <> 0")->order_by('orderlist','asc')->get_page();
		$this->template->title('wallpaper - zulex.co.th');
		$this->template->build('wallpaper_index',$data);
	}
	
	function view($id){
		$data['category'] = new Category($id);
		$data['wallpapers'] = $data['category']->wallpaper->order_by('orderlist','asc')->get_page();
		$this->template->title(lang_decode($data['category']->name).' - wallpaper - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('wallpaper_view',$data);
	}
	
	function download($id){
		$wallpaper = new Wallpaper($id);
		$this->load->helper('download');
		
		$data = file_get_contents("uploads/wallpapers/".basename($wallpaper->image));
		$name = basename($wallpaper->image);
		force_download($name, $data); 
	}
}
?>