<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Role extends Model_Auth_Role {

	protected $_table_columns = array(
    'id' => NULL,
    'name' => NULL,
    'description' => NULL,
  	); 
	public function _get_roles()
	{
		return DB::select('id', 'name')->from('roles')->group_by('name')->order_by('id')->group_by('name')->execute()->as_array();
	}
} // End Role Model