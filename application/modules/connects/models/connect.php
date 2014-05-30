<?php
class Connect extends ORM
{
	public $table = 'connects';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>