<?php
class Product extends ORM
{
	public $table = 'products';
	
	public $has_one = array('user','category');
	
	public $has_many = array('product_image');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>