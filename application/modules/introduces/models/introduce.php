<?php
class Introduce extends ORM
{
	public $table = 'introduces';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>