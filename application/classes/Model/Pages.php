<?php
class Model_Pages extends ORM {
	protected $_table_name = 'pages';
	protected $_table_columns = array(
	 	'id' => NULL,
 		'process' => NULL, 
 		'title' => NULL,
 		'description' => NULL,
 		'keywords' => NULL,
 		'available' => NULL,
 		'available_off' => NULL,
 		'available_to' => NULL,
 		'content' => NULL,
 		'date_create' => NULL,
 		'date_change' => NULL,
 		'views' => NULL
 	);
	protected $_has_many = array( 
		'categories' => array( 'model'   => 'Categories', 'through' => 'pages_categories'),
		'user' => array('model' => 'User', 'far_key' => 'user_id', 'through' => 'page_user'),
	);
	public function rules()
	{
		return array(
			'title' => array(
				array('not_empty'),
			),
			'description' => array(
				array('not_empty'),
			),
 			'keywords' => array(
				array('not_empty'),
			),
 			'available' => array(
				array('not_empty'),
				array('digit'),
			),
			'content' => array(
				array('not_empty'),
			),
			'date_create' => array(
				array('not_empty'),
				array('date'),
			),
			'date_change' => array(
				array('not_empty'),
				array('date'),
			),
			'views' => array(
				array('not_empty'),
				array('digit'),
			)
		);
	}
	public function filters()
	{
		return array(
		 'content' => array(
		 	array('trim'),
		 ));
	}
	public function _get_pages_list()
	{
		
	}
}	