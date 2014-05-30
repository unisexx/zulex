<?php
class Brochure extends ORM
{
	public $table = 'brochures';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>