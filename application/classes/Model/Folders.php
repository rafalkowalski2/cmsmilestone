<?php
class Model_Folders extends ORM {
	protected $_table_name = 'folders';
	protected $_table_columns = array(
    'id' => NULL,
    'parent_id' => NULL,
    'user_id' => NULL,
    'display_name' => NULL,
    'name' => NULL,
    'dir' => NULL,
    'date_create' => NULL,
    'date_last_change' => NULL,
    'description' => NULL,
    );
	
	protected $_has_one = array( 'users' => array( 'model' => 'User', 'foreign_key' => 'user_id',));
	public function rules()
	{
		return array(
			'parent_id' => array(
				array('not_empty'),
				array('digit'),
			),
			'name' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('name', ':value')),
			),
			'display_name' => array(
				array('not_empty'),
			),
			'dir' => array(
				array('not_empty'),
			),
			'date_create' => array(
				array('date'),
			),
			'date_last_change' => array(
				array('date'),
			)
		);
	}
}	