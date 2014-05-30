<?php

class User extends ORM
{
	
	public $table = 'users';
	
	public $has_one = array('level');
	
	public $has_many = array('reseller','product','contact','applicant','intropage','intropage_config');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}

?>