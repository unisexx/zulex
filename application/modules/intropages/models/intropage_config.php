<?php
class Intropage_config extends ORM
{
	public $table = 'intropage_configs';
	
	public $has_one = array('user');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>