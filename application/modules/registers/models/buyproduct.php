<?php
class Buyproduct extends ORM
{
	public $table = 'buyproducts';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>