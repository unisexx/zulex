<?php
class Users extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function register(){
		$register_category = new Category();
		$data['register_categories'] = $register_category->where("module = 'registers' and id in (select distinct category_id from registers)")->order_by('orderlist','asc')->get();
		
		$buyproduct = new Buyproduct();
		$data['buyproducts'] = $buyproduct->order_by('orderlist','asc')->get();
		
		//$product_category = new Category();
		//$data['product_categories'] = $product_category->where("module = 'products' and parents = 325")->order_by('id','asc')->get();
		
		$this->template->title(lang('register').' - zulex.co.th');
		$this->template->build('register',$data);
	}
	
	function signup()
	{
		if($_POST)
		{	
			$user = new User();
			$user->from_array($_POST);
			//$user->last_login = date('Y-m-d H:i:s');
			if(isset($_POST['know'])){
				$user->know = implode(',',$_POST['know']);
			}
			if(isset($_POST['buyproduct'])){
				$user->buyproduct = implode(',',$_POST['buyproduct']);
			}
			$user->save();
			set_notify('success', 'สมัครสมาชิกเรียบร้อย');
			redirect('home');
		}
	}
	
	function check_email()
	{
		$user = new User();
		$user->get_by_email($_GET['email']);
		echo ($user->email)?"false":"true";
	}
	
	function check_captcha()
	{
		if($this->session->userdata('captcha')==$_GET['captcha'])
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
	
	function login_frm()
	{
		$this->template->build('login_frm');
	}
	
	function login()
	{
		if($_POST)
		{
			if(login($_POST['username'], $_POST['password']))
			{
				set_notify('success', 'ยินดีต้อนรับเข้าสู่ระบบค่ะ');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				set_notify('error', 'ชื่อผู้ใช้หรือรหัสผ่านผิดพลาดค่ะ');
				redirect($_SERVER['HTTP_REFERER']);
			}	
		}
		else
		{
			set_notify('error', 'กรุณาทำการล็อคอินค่ะ');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	
	function inc_login()
	{
		if(is_login())
		{
			$data['user'] = new User($this->session->userdata('id'));
			$this->load->view('inc_member',$data);
		}
		else
		{
			$this->load->view('inc_loginlink');
		}
	}
	
	function logout()
	{
		logout();
		set_notify('error', 'ออกจากระบบเรียบร้อยแล้วค่ะ');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>