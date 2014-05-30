<?php
class Register extends ORM
{
	public $table = 'registers';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>