<?php
class Zicon extends ORM
{
	public $table = 'zicons';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>