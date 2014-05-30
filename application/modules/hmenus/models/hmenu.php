<?php
class Hmenu extends ORM
{
	public $table = 'hmenus';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>