<?php
class Znew extends ORM
{
	public $table = 'znews';
	
	public $has_one = array('user','category');
	
	public $has_many = array('znew_image');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>