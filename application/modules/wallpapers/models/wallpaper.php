<?php
class Wallpaper extends ORM
{
	public $table = 'wallpapers';
	
	public $has_one = array('user','category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>