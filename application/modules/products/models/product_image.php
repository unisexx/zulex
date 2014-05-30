<?php
class Product_image extends ORM {
	
	var $table = 'product_images';
	
	var $has_one = array('product');
	
    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>