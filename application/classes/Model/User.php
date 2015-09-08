<?php

class Model_User extends Model_Auth_User {
	protected $_table_columns = array(
    'id' => NULL,
    'avatar' => NULL,
    'email' => NULL,
    'username' => NULL,
    'name' => NULL,
    'surname' => NULL,
    'about' => NULL,
    'password' => NULL,
    'active' => NULL,
    'active_off' => NULL,
    'active_to' => NULL,
    'logins' => NULL,
    'last_login' => NULL,
    );
	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
			),
			'surname' => array(
				array('not_empty'),
			),
			'username' => array(
				array('not_empty'),
				array('max_length', array(':value', 32)),
				array(array($this, 'unique'), array('username', ':value')),
			),
			'password' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'unique'), array('email', ':value')),
			),
			'active' => array(
				array('not_empty'),
				array('digit'),
			),
			'active_off' => array(
				array('date'),
			),
			'active_to' => array(
				array('date'),
			)
		);
	}
	public function get_super_admin_user_list($id)
	{
		return DB::select(
			array('users.id', 'u_id'),
			array('users.name', 'u_name'),
			array('users.surname', 'u_surname'),
			array('users.active', 'u_active'),
			array('users.active_off', 'u_active_off'),
			array('users.active_to', 'u_active_to'),
			array(DB::expr('GROUP_CONCAT( roles.name ORDER BY roles.id DESC)'), 'r_name'))
			->from('users')
			->join('roles_users')
			->on('roles_users.user_id', '=', 'users.id')
			->join('roles')
			->on('roles_users.role_id', '=', 'roles.id')
			->where('users.id','!=', $id)
			->group_by('users.id')
			->order_by('users.id');
			//->order_by('roles.id')
			//->execute();
			//->as_array();
		//SELECT `users`.`id` AS `u_id`, `users`.`name` AS `u_name`, `users`.`surname` AS `u_surname`, `roles`.`name` FROM `users`JOIN `roles_users` ON `roles_users`.`user_id` = `users`.`id` JOIN `roles` ON `roles_users`.`role_id` = `roles`.`id` WHERE `users`.`id` != 6 GROUP BY `users`.`id`
	}
	public function get_admin_user_list($id)
	{
		return DB::select(
			array('users.id', 'u_id'),
			array('users.name', 'u_name'),
			array('users.surname', 'u_surname'),
			array('users.active', 'u_active'),
			array('users.active_off', 'u_active_off'),
			array('users.active_to', 'u_active_to'),
			array(DB::expr('GROUP_CONCAT( roles.name ORDER BY roles.id DESC)'), 'r_name'))
			->from('users')
			->join('roles_users')
			->on('roles_users.user_id', '=', 'users.id')
			->join('roles')
			->on('roles_users.role_id', '=', 'roles.id')
			->where('users.id','!=', $id)
			->having(DB::expr('MAX(roles.id)'), '<', 6)
			->group_by('users.id');
			//->execute()
			//->as_array();
		//SELECT `users`.`id` AS `u_id`, `users`.`name` AS `u_name`, `users`.`surname` AS `u_surname`, `roles`.`name` FROM `users`JOIN `roles_users` ON `roles_users`.`user_id` = `users`.`id` JOIN `roles` ON `roles_users`.`role_id` = `roles`.`id` WHERE `users`.`id` != 6 GROUP BY `users`.`id`
	}
	public function get_super_admin_user_detail($id)
	{
		return DB::select(
			array('users.id', 'u_id'),
			array('users.avatar', 'u_avatar'),
			array('users.name', 'u_name'),
			array('users.surname', 'u_surname'),
			array('users.email', 'u_email'),
			array('users.active', 'u_active'),
			array('users.active_off', 'u_active_off'),
			array('users.active_to', 'u_active_to'),
			array('users.about', 'u_about'),
			array('roles.id', 'r_id'))
			->from('users')
			->join('roles_users')
			->on('roles_users.user_id', '=', 'users.id')
			->join('roles')
			->on('roles_users.role_id', '=', 'roles.id')
			->where('users.id','=', $id)
			->order_by('roles.id', 'DESC')
			->limit(1)
			->execute()
			->as_array();
	}
	public function get_user_detail($id)
	{
		return DB::select(
			array('users.id', 'u_id'),
			array('users.avatar', 'u_avatar'),
			array('users.name', 'u_name'),
			array('users.surname', 'u_surname'),
			array('users.email', 'u_email'),
			array('users.active', 'u_active'),
			array('users.active_off', 'u_active_off'),
			array('users.active_to', 'u_active_to'),
			array('users.about', 'u_about'),
			array('roles.id', 'r_id'))
			->from('users')
			->join('roles_users')
			->on('roles_users.user_id', '=', 'users.id')
			->join('roles')
			->on('roles_users.role_id', '=', 'roles.id')
			->where('users.id','=', $id)
			->having(DB::expr('MAX(roles.id)'), '<', 6)
			->order_by('roles.id', 'DESC')
			->limit(1)
			->execute()
			->as_array();
	}
	public function admin_can_edit($id)
	{
		return DB::select(
			array('users.id', 'u_id'))
			->from('users')
			->join('roles_users')
			->on('roles_users.user_id', '=', 'users.id')
			->join('roles')
			->on('roles_users.role_id', '=', 'roles.id')
			->where('users.id','!=', $id)
			->having(DB::expr('MAX(roles.id)'), '<', 6)
			->group_by('users.id')
			->execute()
			->as_array();
	}
	public function user_active($id)
	{
		return DB::select('active')->from('users')->where('id', '=', $id)->execute()->as_array();
	}
	public function user_active_off($id)
	{
		return DB::select('active_off')->from('users')->where('id', '=', $id)->execute()->as_array();
	}
	public function user_active_to($id)
	{
		return DB::select('active_to')->from('users')->where('id', '=', $id)->execute()->as_array();
	}
	
}

?> 
