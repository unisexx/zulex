<?php
Class Whats extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$what = new What();
		$data['carversion'] = new Carversion($id);
		$data['whats'] = $what->where("carversion_id = $id")->order_by('orderlist','asc')->get_page();
		$data['product'] = new Product();
		
		$this->template->build('admin/what_index',$data);
	}
	
	function form($carversion_id,$id=FALSE){
		$data['carversion'] = new Carversion($carversion_id);
		$data['what'] = new What($id);
		
		$headunit = new Product();	
		$data['headunits'] = $headunit->where("category_id BETWEEN '355' AND '363'")->order_by('category_id asc')->get();
		
		$category_antennas = new Category();	
		$data['category_antennas'] = $category_antennas->where("id = 428")->get();
		
		$category_rear_view_cameras = new Category();	
		$data['category_rear_view_cameras'] = $category_rear_view_cameras->where("id = 415")->get();
		
		$category_amplifier_subboxes = new Category();	
		$data['category_amplifier_subboxes'] = $category_amplifier_subboxes->where("parents between 337 and 338")->get();
		
		$category_speakers = new Category();	
		$data['category_speakers'] = $category_speakers->where("parents between 341 and 345")->get();
		
		$category_eqs = new Category();	
		$data['category_eqs'] = $category_eqs->where("id = 411")->get();
		
		$category_head_rest_monitors = new Category();	
		$data['category_head_rest_monitors'] = $category_head_rest_monitors->where("id = 450")->get();
		
		$roof_mount_monitors = new Category();	
		$data['category_roof_mount_monitors'] = $roof_mount_monitors->where("id = 454")->get();
		
		$this->template->build('admin/what_form',$data);
		//$this->db->close(); 
	}
	
	function save($id=FALSE)
	{
		if($_POST){
			$what = new What($id);
			
			$_POST['user_id'] = $this->session->userdata('id');
			$what->from_array($_POST);
			
			if(isset($_POST['antenna'])){
				$what->antenna = implode(',',$_POST['antenna']);
			}else{
				$what->antenna = "";
			}
			if(isset($_POST['rear_view_camera'])){
				$what->rear_view_camera = implode(',',$_POST['rear_view_camera']);
			}else{
				$what->rear_view_camera = "";
			}
			if(isset($_POST['amplifier_subbox'])){
				$what->amplifier_subbox = implode(',',$_POST['amplifier_subbox']);
			}else{
				$what->amplifier_subbox = "";
			}
			if(isset($_POST['speaker'])){
				$what->speaker = implode(',',$_POST['speaker']);
			}else{
				$what->speaker = "";
			}
			if(isset($_POST['eq'])){
				$what->eq = implode(',',$_POST['eq']);
			}else{
				$what->eq = "";
			}
			if(isset($_POST['head_rest_monitor'])){
				$what->head_rest_monitor = implode(',',$_POST['head_rest_monitor']);
			}else{
				$what->head_rest_monitor = "";
			}
			if(isset($_POST['roof_mount_monitor'])){
				$what->roof_mount_monitor = implode(',',$_POST['roof_mount_monitor']);
			}else{
				$what->roof_mount_monitor = "";
			}
			$what->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_POST['referer']);
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$what = new What($id);
			$what->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$what = new What(@$_POST['orderid'][$key]);
						$what->from_array(array('orderlist' => $item));
						$what->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>