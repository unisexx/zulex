<?php
class Znew_image extends ORM {
	
	var $table = 'znew_images';
	
	var $has_one = array('znew');
	
    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}
?>