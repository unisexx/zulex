<?php
class Alphabet extends ORM
{
	public $table = 'alphabets';
	
	public $has_many = array('category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>