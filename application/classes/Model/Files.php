<?php
class Model_Files extends ORM {
	protected $_table_name = 'files';
	protected $_table_columns = array(
    'id' => NULL,
    'user_id' => NULL,
    'folder_id' => NULL,
    'name' => NULL,
    'type' => NULL,
    'size' => NULL,
    'date_add' => NULL,
    );
	
	protected $_has_one = array( 'folders' => array( 'model' => 'Folders', 'foreign_key' => 'folder_id'),
								 'users' => array('model' => 'Users', 'foreign_key' => 'user_id'));
	public function rules()
	{
		return array(
			'user_id' => array(
				array('not_empty'),
				array('digit'),
			),
			'folder_id' => array(
				array('not_empty'),
				array('digit'),
			),
			'name' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('name', ':value')),
			),
			'type' => array(
				array('not_empty'),
			),
			'size' => array(
				array('not_empty'),
				array('digit'),
			),
			'date_add' => array(
				array('date'),
			)
		);
	}
	public function get_files_list($id)
	{
		return DB::select(
			array('files.id', 'file_id'),
			array('files.name', 'file_name'),
			array('files.type', 'file_type'),
			array('files.size', 'file_size'),
			array('files.date_add', 'file_date_add'),
			array('folders.dir', 'folder_director'))
			->from($this->_table_name)
			->join('folders')
			->on('folders.id', '=', 'files.folder_id')
			->where('files.folder_id', '=', $id)
			->execute()
			->as_array();
	}
}	