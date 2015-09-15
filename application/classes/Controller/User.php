<?php defined('SYSPATH') or die('No direct script');
class Controller_User extends Controller_AdminTemplate
{
	/*
	 *  Klasa obsługująca użytkowników
	 */ //ec423bb9a3a185f166855d95bd2313e6ef0ddd1ce659ee6b7d3713061cc592b6
	 /*
	  * Funkcja obługująca logowania 
	  */	
	public function action_login()
	{
		/*
		 * TO DO dorobic pierwsze logowanie użytkownika! 
		 */
		$this->template->content = View::factory( 'template/admin/user/login_panel' );
		if(Auth::instance()->logged_in())
		{ //sprawdzanie czy user jest zalogowany
			HTTP::redirect( $this->request->param('language').'/admin/dashboard/index');
		}
		else 
		{
			if(isset($_POST['login_submit']))
			{
				if($this->_auth->login($this->request->post('login'), $this->request->post('password')))
				{
					//zalogowano 
					if($this->_is_active($this->_auth->get_user()->pk()))
					{
						//user aktwyny
						if($this->_is_active_off($this->_auth->get_user()->pk()))
						{
							//możę się już zalogować
							if($this->_is_active_to($this->_auth->get_user()->pk()))
							{
								//może się jeszcze zalogować
								$this->_session->set('is_login', TRUE);
								HTTP::redirect( $this->request->param('language').'/admin/dashboard/index' , 302 );
							}
							else 
							{
								$this->_auth->logout();
								echo 'nie możesz się już zalogować';	
							}
						}
						else 
						{
							$this->_auth->logout();
							echo 'jeszcze nie możesz sie zalogować';	
						}			
					}
					else 
					{
						$this->_auth->logout();
						echo 'konto nie jest aktywne';
					}
				}	
				else
				{
					$this->_auth->logout();
					echo "zły login lub hasło";
				}
			}
		}	
	}
	/*
	 * funkcja wylogowywujaca
	 */
	public function action_logout()
	{
		if($this->_auth->logged_in())
		{
			$this->_auth->logout();
			$this->_redirect_to_login('admin');
		}
		else
		{
			// nie ma czego niszczyć, przekierowanie na logowanie
			$this->_redirect_to_login('admin');
		}	
	}
	/*
	 * fukcja zmieniajaca hasło użytkownika
	 */
	
	public function action_change_password()
	{
		if($this->_auth->logged_in('editor'))
		{
			$this->_title="CMS::CHANGE_PASSWORD";
			$this->template->content = View::factory( 'template/admin/user/change_password' );
			if(isset($_POST['update_password']))
			{
				$validation = Validation::factory($this->request->post())
				->rule('old_password', array(Auth::instance(), 'check_password'))
				->rule('old_password', 'not_empty')
				->rule('new_password', 'not_empty')
				->rule('new_password', 'min_length', array(':value', 7))
				->rule('conf_new_password', 'not_empty')
				->rule('conf_new_password', 'min_length', array(':value', 7))
				->rule('new_password', 'matches', array(':validation', 'new_password', 'conf_new_password'));
				try
				{
					if(!$validation->check())
					{
						throw new ORM_Validation_Exception('old_password', $validation); 
					}
					else 
					{
						$user 			= $this->_auth->get_user('auth_user');
						$user->password = $this->request->post('new_password');
						$user->save();
						$this->_set_message('success', __('NO_ERROR'));
						HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
					}
				}
				catch(ORM_Validation_Exception $e)
				{
					$this->_set_message('error', $e->errors('old_password'));
				}  
			}
		}
		else 
		{
			$this->_redirect_to_login('admin');
		}
	}
	/*
	 * fukcja pozwalajaca edytować osobiste konto użytkownika
	 */
	public function action_my_account()
	{
		if($this->_auth->logged_in('editor'))
		{
			$this->_title='CMS::MY_ACCOUNT';
			$this->template->content = View::factory( 'template/admin/user/my_account' );
			if(isset($_POST['update_user']))
			{
				$validation = Validation::factory($this->request->post())
				->rule('name', 'not_empty')
				->rule('surname', 'not_empty')
				->rule('e_mail', 'not_empty')
				->rule('e_mail', 'email');
				try
				{
					if(!$validation->check())
					{
						throw new ORM_Validation_Exception('e_mail', $validation); 
					}
					else 
					{
						$user			= $this->_auth->get_user('auth_user');
						$user->name 	= $this->request->post('name');
						$user->surname 	= $this->request->post('surname');
						$user->email 	= $this->request->post('e_mail');
						$user->about 	= $this->request->post('about_user');
						$user->save();
						$this->_set_message('success', __('NO_ERROR'));
						HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
					}
				}
				catch(ORM_Validation_Exception $e)
				{
					$this->_set_message('error', $e->errors('e_mail'));
				}  
			}
			else if(isset($_POST['update_avatar']))
			{
				if($_FILES['avatar']['error'] == 0)
				{
					$this->user_update_avatar($_FILES, $this->_auth->get_user()->pk());
				}
				else 
				{
					$this->_set_message('error', 'ERROR_NO_FILE_TO_UPLOAD');
				}
			}
			else if(isset($_POST['delete_avatar']))
			{
				$this->user_delete_avatar($this->_auth->get_user()->pk());
			}
		}
		else 
		{
			
		}
	}
	/*
	 * funkcja dodajacą użytkownika
	 */
	public function action_add()
	{
		if($this->_auth->logged_in('admin'))
		{
			$this->_title='CMS::ADD_USER';
			$this->template->content = View::factory( 'template/admin/user/add' );
			$roles = ORM::factory('Role')->_get_roles();
			print_r($roles);
			$this->template->content->bind('roles', $roles);
			if(isset($_POST['add_user']))
			{
				try
				{
					
					$newuser 			= ORM::factory('User');
					$newuser->username 	= $this->request->post('login');
					$newuser->name 		= $this->request->post('name');
					$newuser->surname 	= $this->request->post('surname');
					$newuser->password 	= $this->request->post('password');
					$newuser->email 	= $this->request->post('e_mail');
					$newuser->active 	= $this->request->post('active');
					$newuser->active_off= $this->request->post('active_off');
					$newuser->active_to	= $this->request->post('active_to');
					$extra_rules = Validation::factory($this->request->post())
                	->rule('confirm_password', 'matches', array(
                   		':validation', ':field', 'password'
                	));
					$newuser->save($extra_rules); 
					foreach($roles as $key => $value)
					{
						if($value['id'] <= $this->request->post('role'))
						{
							$u_role = ORM::factory('Role')->where('name', '=', $value['name'])->find();
							$newuser->add('roles', $u_role);
						}
					}
					$this->_set_message('success', 'AVATAR_SUCCESS_DELETE');
					HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
				}
				catch(ORM_Validation_Exception $e)
				{
					$this->_set_message('error', $e->errors('avatar'));
				}
			} 
		}
		else 
		{
			
		}	
	}
	/*
	 * funkcja listująca użytkowników
	 */
	public function action_list()
	{
		$this->_title='CMS::LIST_USER';
		if($this->_auth->logged_in('super_admin'))
		{
			$user_list = ORM::factory('User')->get_super_admin_user_list($this->_auth->get_user()->pk());
			$count = clone $user_list;
			$pagination = Pagination::factory(array(
                        'total_items'    => $count->execute()->count(),
                        ));
			$list = $user_list->limit($pagination->items_per_page)
                    ->offset($pagination->offset)
					->execute();
			if(Request::current()->param('page')) $i = ($this->request->param('page')-1)*$pagination->items_per_page+1;
			else $i=1;	
			$this->template->content = View::factory( 'template/admin/user/list' );
			$this->template->content->bind('list', $list )->bind('i', $i)->bind('pagination', $pagination);
		}
		else if($this->_auth->logged_in('admin'))
		{
			$user_list = ORM::factory('User')->get_admin_user_list($this->_auth->get_user()->pk());
			$count = clone $user_list;
			$pagination = Pagination::factory(array(
                        'total_items'    => $count->execute()->count(),
                        ));
			$list = $user_list->limit($pagination->items_per_page)
                    ->offset($pagination->offset)
					->execute();
			if(Request::current()->param('page')) $i = ($this->request->param('page')-1)*$pagination->items_per_page+1;
			else $i=1;	
			$this->template->content = View::factory( 'template/admin/user/list' );
			$this->template->content->bind('list', $list )->bind('i', $i)->bind('pagination', $pagination);
		}
	}
	/*
	 * funckja edytująca użytkowników
	 */
	public function action_edit()
	{
		$this->_title='CMS::EDIT_USER';
		if($this->_auth->logged_in('super_admin'))
		{
			$this->template->content = View::factory( 'template/admin/user/edit' );
			$roles = ORM::factory('Role')->_get_roles();
			$user_detail = ORM::factory('User')->get_super_admin_user_detail($this->request->param('id'));
			$this->template->content->bind('roles', $roles)
			->bind('user_detail', $user_detail)
			->bind('yes_no', $this->_yes_no);
			if(isset($_POST['edit_user']))
			{
				$this->user_edit_info($this->request->param('id'), $this->request->post(), $roles, $user_detail);
			}
			else if($_POST['update_avatar'])
			{
				if($_FILES['avatar']['error'] == 0)
				{
					$this->user_update_avatar($_FILES, $this->request->param('id'));
				}
			}
			else if(isset($_POST['delete_avatar']))
			{
				$this->user_delete_avatar($this->request->param('id'));
			}
		}
		else if($this->_auth->logged_in('admin'))
		{
			$user = ORM::factory('User');
			$allow_edit_user = $user->admin_can_edit($this->_auth->get_user()->pk());
			$user_to_edit = array();
			foreach($allow_edit_user as $key => $value)
			{
				$user_to_edit[$key] = $value['u_id'];
			}
			if(in_array($this->request->param('id'), $user_to_edit))
			{
				$this->template->content = View::factory( 'template/admin/user/edit' );
				$roles = ORM::factory('Role')->_get_roles();
				$user_detail = $user->get_user_detail($this->request->param('id'));
				$roles = array_splice($roles, 0, 5);
				$this->template->content->bind('roles', $roles);
				$this->template->content->bind('user_detail', $user_detail);
				$this->template->content->bind('yes_no', $this->_yes_no);
				if(isset($_POST['edit_user']))
				{
					$this->user_edit_info($this->request->param('id'), $this->request->post(), $roles, $user_detail);
				}
				else if($_POST['update_avatar'])
				{
					if($_FILES['avatar']['error'] == 0)
					{
						$this->user_update_avatar($_FILES, $this->request->param('id'));
					}
				}
				else if(isset($_POST['delete_avatar']))
				{
					$this->user_delete_avatar($this->request->param('id'));
				}
			}
			else 
			{
				echo 'To edit this user your privileges are too low';	
			}
		}
		else
		{
			echo 'No access';		
		}
	}
	public function action_delete()
	{
		if($this->_auth->logged_in('super_admin'))
		{
			// może zrobie zaciemnanie usera
			try
			{
				$user = ORM::factory('User', $this->request->param('id'));
				$user->delete();
				$this->_set_message('success', 'USER_SUCCESS_DELETE');
				HTTP::redirect($_GET['return'], 302);
			}
			catch(ORM_Validation_Exception $e)
			{
				$this->_set_message('error', $e->errors('avatar'));
			} 
		}
		else if($this->_auth->logged_in('admin'))
		{
			$user = ORM::factory('User');
			$allow_edit_user = $user->admin_can_edit($this->_auth->get_user()->pk());
			$user_to_delete = array();
			foreach($allow_edit_user as $key => $value)
			{
				$user_to_delete[$key] = $value['u_id'];
			}
			if(in_array($this->request->param('id'), $user_to_delete))
			{
				try
				{
					$user = ORM::factory('User', $this->request->param('id'));
					$user->delete();
					$this->_set_message('success', 'USER_SUCCESS_DELETE');
					HTTP::redirect($_GET['return'], 302);
				}
				catch(ORM_Validation_Exception $e)
				{
					$this->_set_message('error', $e->errors('avatar'));
				} 
			}
		}
	}
	public function _update_avatar($user_id, $avatar)
	{
		if ( ! Upload::valid($avatar) OR ! Upload::not_empty($avatar) OR ! Upload::type($avatar, array('jpg', 'jpeg', 'png', 'gif')))
        {
			return FALSE;	
		}
		else 
		{
			$dir = DOCROOT.'public/upload/gfx/avatar/';
			if($file = Upload::save($avatar, NULL, $dir))
			{
				$filename = $user_id.'.jpg';
				Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($dir.$filename);
				unlink($file);
				if(is_file($dir.$filename))
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
		}
	}
	public function _delete_avatar($user_id)
	{
		if(ORM::factory('User', $user_id)->avatar)
		{
			$dir = DOCROOT.'public/upload/gfx/avatar/';
			if(is_file($dir.$user_id.'.jpg'))
			{
				unlink($dir.$user_id.'.jpg');
				if(!is_file($dir.$user_id.'.jpg'))
				{
					return TRUE;
				}
				else 
				{
					return FALSE;	
				}
			}
		}
		else 
		{
			return FALSE;
		}
	}
	public function user_update_avatar($file, $user_id)
	{
		if($this->_update_avatar($user_id, $file['avatar']))
		{	
			try
			{
				$user			= ORM::factory('User', $user_id);
				$user->avatar 	= 1;
				$user->save();
				$this->_set_message('success', 'AVATAR_UPLOAD_SUCCESS');
				HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
			}
			catch(ORM_Validation_Exception $e)
			{
				$this->_set_message('error', $e->errors('avatar'));
			} 
		}
		else
		{
			$this->_set_message('error', 'ERROR_WRONG_TYPE_FILE');
		}
	}
	public function user_delete_avatar($user_id)
	{
		if($this->_delete_avatar($user_id))
		{
			try
			{
				$user			= ORM::factory('User', $user_id);
				$user->avatar 	= 0;
				$user->save();
				$this->_set_message('success', 'AVATAR_SUCCESS_DELETE');
				HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
			}
			catch(ORM_Validation_Exception $e)
			{
				$this->_set_message('error', $e->errors('avatar'));
			} 
		}
		else 
		{
			$this->_set_message('error', 'ERROR_AVATAR_TO_DELETE');
		}
	}
	public function user_edit_info($user_id, $post_info, $roles, $user_detail)
	{
		try
		{
			$newuser 			= ORM::factory('User', $user_id);
			$newuser->name 		= $post_info['name'];
			$newuser->surname 	= $post_info['surname'];
			$newuser->email 	= $post_info['e_mail'];
			$newuser->active 	= $post_info['active'];
			$newuser->active_off= $post_info['active_off'];
			$newuser->active_to	= $post_info['active_to'];
			$newuser->about		= $post_info['about_user'];
			$newuser->save();
			foreach($roles as $key => $value)
			{
				for ($i=0; $i <=$user_detail[0]['r_id']  ; $i++) 
				{ 
					$newuser->remove('roles', $value['r_id']);
				}
			}
			foreach($roles as $key => $value)
			{
				if($value['id'] <= $this->request->post('role'))
				{
					$u_role = ORM::factory('Role')->where('name', '=', $value['name'])->find();
					$newuser->add('roles', $u_role);
				}
			}
			$this->_set_message('success', 'USER_SUCCESS_EDIT');
			HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
		}
		catch(ORM_Validation_Exception $e)
		{
			$this->_set_message('error', $e->errors('avatar'));
		}
	}	
	/*
	 * Sprawdza czy user jest aktywny
	 */
	private function _is_active($id_user)
	{
		return ORM::factory('User')->user_active($id_user)[0]['active'];
	}
	/*
	 * sprawdcza czy user może się już zalogwać
	 * jeśli null to zrwaca true
	 */
	 private function _is_active_off($id_user)
	 {
	 	$active_off = ORM::factory('User')->user_active_off($id_user)[0]['active_off'];
		if($active_off == '0000-00-00 00:00:00') //nie zdefiniowano od kiedy
		{
			return TRUE;
		}
		else 
		{	//zdefiniowania od kiedy
			$off = new DateTime($active_off); //data z bazy
			$nowadays = new DateTime(); // czas obecny
			if($nowadays >= $off)
			{
				return TRUE;
			}
			else 
			{
				return FALSE;	
			}
			
		}
	 }
	 /*
	  * sprawdza czy user może się jeszcze zalogować
	  * jeśli null to zwraca true
	  */
	 private function _is_active_to($id_user)
	 {
	 	$active_to = ORM::factory('User')->user_active_to($id_user)[0]['active_to'];
		if($active_to == '0000-00-00 00:00:00') //nie zdefiniowano do kiedy
		{
			return TRUE;
		}
		else 
		{
			$to = new DateTime($active_to); //data z bazy
			$nowadays = new DateTime(); // czas obecny
			if($to > $nowadays)
			{
				return TRUE;
			}
			else 
			{
				return FALSE;	
			}
		}
	 }
}