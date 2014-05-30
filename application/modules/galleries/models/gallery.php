<?php

class Gallery extends ORM
{
	
	public $table = 'galleries';
	
	public $has_one = array('users','categories');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}

?>