<?php
class Znews extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){		
		$znews = new Znew();
		$data['znews'] = $znews->order_by('orderlist','asc')->get_page();
		
		$this->template->title(lang('new&promotion').' - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('znew_index',$data);
	}
	
	function detail($id=FALSE){
		$data['znew'] = new Znew($id);
		$this->template->title(lang_decode($data['znew']->title).' - '.lang('new&promotion').' - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('znew_detail',$data);
	}
	
	function download($id){
		$znew_image = new Znew_image($id);
		$this->load->helper('download');
		
		$data = file_get_contents("uploads/znews/".basename($znew_image->file));
		$name = basename($znew_image->file);
		force_download($name, $data); 
	}
}
?>