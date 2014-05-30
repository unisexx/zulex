<?php
class What extends ORM
{
	public $table = "whats";
	
	public $has_one = array("user","carversion");
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>