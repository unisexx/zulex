<?php
class Public_Controller extends Master_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		// check lang
		$this->template->title('zulex.co.th');
		$this->template->set_theme('zulex');
    	$this->template->set_layout('layout');
		
		// Set Keywords , Description
		$this->template->append_metadata( meta('description','Car Mobile Entertainment,Home entertainment, all in one, speaker, sub woofer, car tv, car accessory, ทีวีติดรถยนต์, เครื่องเสียงติดรถยนต์'));
		$this->template->append_metadata( meta('keywords','car mobile, all in one, speaker, sub woofer, car tv, car mobile tv, car accessory, car turner, car amplifier, rear view system, equalizer, microphone, คาร์ทีวี, ลำโพง, คาร์เอ็นเตอร์เทนเม้นท์, กล้องมองหลัง, เครื่องเสียงรถยนต์, เครื่องเล่น DVD, VCD, MP3, player,ทีวีติดรถยนต์'));
		
		// Set js
		$this->template->append_metadata(js_notify());
		
		if(!$this->session->userdata('lang')) $this->session->set_userdata('lang','th');
		if(@$this->session->userdata('lang') == "th"){
			$this->lang->load('public','thai');
		}else{
			$this->lang->load('public','english');
		}
	}
	
}
?>