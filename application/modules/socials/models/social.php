<?php
class Social extends ORM
{
	public $table = 'socials';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>