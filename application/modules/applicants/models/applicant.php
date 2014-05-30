<?php
class Applicant extends ORM
{
	public $table = 'applicants';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>