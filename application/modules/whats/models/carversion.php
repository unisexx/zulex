<?php
class Carversion extends ORM
{
	public $table = "carversions";
	
	public $has_one = array("user","category");
	
	public $has_many = array("what");
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>