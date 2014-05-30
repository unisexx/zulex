<?php
class Tip extends ORM
{
	public $table = 'tips';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>