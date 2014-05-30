<?php
class Software extends ORM
{
	public $table = 'softwares';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>