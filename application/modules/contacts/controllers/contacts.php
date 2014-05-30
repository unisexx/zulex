<?php
class Contacts extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$data['about'] = new About(1);
		$this->template->title(lang('contact').' - zulex.co.th');
		$this->template->append_metadata(js_lightbox());
		$this->template->build('contact_index.php',$data);
	}
	
	function save()
	{
		if($_POST){
			$this->load->library('email');
			
			if(isset($_POST['mailme'])){

				$this->email->from('admin@zulex.com', 'Zulex');
				$this->email->to($_POST['email']);
				//$this->email->cc('another@another-example.com');
				//$this->email->bcc('them@their-example.com');

				$this->email->subject($_POST['title']);
				$this->email->message($_POST['detail']."\n\nโดย ".$_POST['name']."\nเบอร์ติดต่อกลับ ".$_POST['tel']);
				
				$this->email->send();
			}
			
			$about = new About(1);
			
			$contact = new Contact();
			$_POST['user_id'] = $this->session->userdata('id');
			$contact->from_array($_POST);
			
			$this->email->from($_POST['email'], $_POST['name']);
			$this->email->to($about->email);
			$this->email->subject($_POST['title']);
			$this->email->message($_POST['detail']."\n\nโดย ".$_POST['name']."\nเบอร์ติดต่อกลับ ".$_POST['tel']);
				
			$this->email->send();
				
			$contact->save();
			
			set_notify('success', 'ส่งข้อความสำเร็จ');
		}
		redirect('contacts');
	}
	
	function viewmap($id=FALSE){
		$data['about'] = new About($id);
		$this->load->view('view_map',$data);
	}
	
	function map_direction(){
		$this->load->view('map_direction');
	}
}
?>