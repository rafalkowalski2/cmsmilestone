<?php
class Model_Categories extends ORM {
	protected $_table_name = 'categories';
	protected $_table_columns = array(
    'id' => NULL,
    'parent_id' => NULL,
    'name' => NULL,
    'user_id' => NULL,
    'date_add' => NULL,
    'change_date' => NULL,
    );
	protected $_has_many = array( 
		'pages' => array( 'model'   => 'Pages', 'far_key' => 'category_id', 'through' => 'pages_categories',),
	);
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
			'user_id' => array(
				array('not_empty'),
				array('digit'),
			),
			'date_add' => array(
				array('date'),
			),
			'change_date' => array(
				array('date'),
			)
		);
	}
	public function _get_category_list()
	{
		return DB::select(
			array('categories.id', 'category_id'),
			array('categories.parent_id', 'category_parent_id'),
			array('categories.name', 'category_name'),
			array('categories.user_id', 'category_uid'),
			array('categories.date_add', 'category_create_date'),
			array('categories.change_date', 'category_date_change'),
			array('users.name', 'user_name'),
			array('users.surname', 'user_surname'))
			->from($this->_table_name)
			->join('users')
			->on('users.id', '=', 'categories.user_id')
			->execute()
			->as_array();
	}
}	