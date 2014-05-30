<?php
class Submenu extends ORM
{
	public $table = 'submenus';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>