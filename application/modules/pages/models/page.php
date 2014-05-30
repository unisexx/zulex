<?php

class Page extends ORM
{
	
	public $table = 'pages';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}

?>