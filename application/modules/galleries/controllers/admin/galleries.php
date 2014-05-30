<?php
Class Galleries extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index($id=FALSE){
		$this->template->build('admin/gallery_index');
	}
}
?>