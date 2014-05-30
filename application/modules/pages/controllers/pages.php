<?php

class Pages extends Public_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function view($slug)
	{
		$data['page'] = new Page;
		$data['page']->get_by_slug($slug);
		if(!$data['page']->id or !$slug) redirect('home');
		$this->template->build('pages/view',$data);
	}
	
	public function contact()
	{
		$data['page'] = new Page;
		$data['page']->get_by_slug('contact-us');
		$this->template->build('pages/contact',$data);
	}
	
}

?>