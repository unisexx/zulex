<?php
class Manual extends ORM
{
	public $table = 'manuals';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>