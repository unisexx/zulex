<?php
class Reseller extends ORM
{
	public $table = 'resellers';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>