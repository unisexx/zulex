<?php
class Fmenu extends ORM
{
	public $table = 'fmenus';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>