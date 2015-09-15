<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Translations extends ORM {
	protected $_table_name = 'translations';
	protected $_table_columns = array(
    'id' => NULL,
    'user_id' => NULL,
    'language' => NULL,
    'language_symbol' => NULL,
    'version' => NULL,
    'create_date' => NULL,
    'date_change' => NULL,
  	);
	public function rules()
	{
		return array(
			'user_id' => array(
				array('not_empty'),
				array('digit'),
			),
			'language' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('language', ':value')),
			),
			'language_symbol' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('language_symbol', ':value')),
			),
			'version' => array(
				array('not_empty'),
			),
			'create_date' => array(
				array('not_empty'),
				array('date'),
			),
			'date_change' => array(
				array('not_empty'),
				array('date'),
			)
		);
	}
	public function get_transitional_list()
	{
		return DB::select(
			array('translations.id', 'translation_id'),
			array('translations.user_id', 'translation_uid'),
			array('translations.language', 'translation_language'),
			array('translations.language_symbol', 'translation_language_symbol'),
			array('translations.version', 'translation_version'),
			array('translations.create_date', 'translation_create_date'),
			array('translations.date_change', 'translation_date_change'),
			array('users.name', 'user_name'),
			array('users.surname', 'user_surname'))
			->from($this->_table_name)
			->join('users')
			->on('users.id', '=', 'translations.user_id')
			->execute()
			->as_array();
	}
} // End Role Model