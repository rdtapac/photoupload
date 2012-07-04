<?php


class Model_Image extends ORM {
	
	protected $_db = 'photodemo';
	protected $_primary_key = 'image_id';
	protected $_has_many = array( 'tags' => array ( 'model' => 'tag', 'foreign_key' => 'image_id' ) );
	//protected $_has_one = array( 'imagedetails' => array ( 'model' => 'imagedetail', 'foreign_key' => 'image_id' ) );


	protected $_filters = array(TRUE => array('trim' => NULL));


}





