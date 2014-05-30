<?php
class Contact extends ORM
{
	public $table = 'contacts';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>