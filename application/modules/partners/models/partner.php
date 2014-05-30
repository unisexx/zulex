<?php
Class Partner extends ORM
{
	public $table = 'partners';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>