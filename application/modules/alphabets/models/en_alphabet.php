<?php
class En_alphabet extends ORM
{
	public $table = 'en_alphabets';
	
	public $has_many = array('category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>