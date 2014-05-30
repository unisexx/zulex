<?php
class Intropage extends ORM
{
	public $table = 'intropages';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>