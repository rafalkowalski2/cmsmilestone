<?php
class Controller_Translations extends Controller_AdminTemplate
{
	public $_director = 'application/i18n/';
	public $_structure_translation = array
	(
		//menu
		'PAGES',
		'ADD_PAGE',
		'LIST_PAGE',
		'FILEMANAGER',
		'FOLDERS',
		'ADD_FOLDER',	
		'FILES',
		'ADD_FILES',
		'FILE_MANAGER',
		'USERS',
		'ADD_USER',
		'USERS_LIST',
		'SETTINGS',
		'LANGUAGES',
		'ADD_TRANSLATION',
		'EDIT_TRANSLATION',
		'LOGOUT',
		'CHANGE_PASSWORD',
		'MY_ACCOUNT'
	);
	public $_skip_key = array(
		'create_translation',
		'language',
		'language_symbol',
		'version',
		'update_translation'
	);
	public function _generate_translation_array($translation)
	{
		$trans = "<?php\ndefined('SYSPATH') or die('No direct script');\nreturn array(\n";
		foreach($translation as $key => $value)
		{
			if(!in_array($key, $this->_skip_key) AND !empty($value))
			{
				$trans .= "\t'$key' => '$value',\n";
			}
		}
		$trans .= ");";
		return $trans;
	}
	public function _generate_translation_file($name, $contents)
	{
		$dir = DOCROOT.$this->_director;
		$file = fopen($dir.$name.'.php', 'w');
		fwrite($file, $contents);
		fclose($file);
	}
	public function _compare_file_names($old, $new)
	{
		if(trim($old) == trim($new))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function action_add()
	{
		if($this->_auth->logged_in('technical'))
		{
			$this->template->content = View::factory( 'template/admin/translations/add' );
			$this->template->content->bind('structure', $this->_structure_translation);
			if(isset($_POST['create_translation']))
			{
				$this->_generate_translation_file($this->request->post('language_symbol'), $this->_generate_translation_array($this->request->post()));
				if(is_file(DOCROOT.$this->_director.$this->request->post('language_symbol').'.php'))
				{
					try
					{
						$translation					= ORM::factory('Translations');
						$translation->language 			= $this->request->post('language');
						$translation->language_symbol	= $this->request->post('language_symbol');
						$translation->version			= $this->request->post('version'); 
						$translation->create_date		= date("Y-m-d H:i:s"); 
						$translation->date_change		= date("Y-m-d H:i:s"); 
						$translation->user_id			= $this->_auth->get_user()->pk();
						$translation->save();
						$url = $this->request->param('language').'/Translations/edit/'.$translation->id;
						HTTP::redirect(URL::site($url, TRUE), 302);
					}
					catch(ORM_Validation_Exception $e)
					{
						$this->_set_message('error', $e->errors('avatar'));
					}
				}
			}
		}
	}
	public function action_edit()
	{
		if($this->_auth->logged_in('technical'))
		{
			if($this->request->param('id'))
			{
				$translation = ORM::factory('Translations', $this->request->param('id'));
				$translation_array = I18n::load($translation->language_symbol);
				$this->template->content = View::factory( 'template/admin/translations/edit' );
				$this->template->content->bind('structure', $this->_structure_translation)
										->bind('translation',$translation_array)
										->bind('translation_detail', $translation);
				if(isset($_POST['update_translation']))
				{
					try
					{
						$this->_generate_translation_file($this->request->post('language_symbol'), $this->_generate_translation_array($this->request->post()));
						sleep(3);
						if(!is_file(DOCROOT.$this->_director.$this->request->post('language_symbol').'.php'))
						{
							$this->_set_message('error', __('ERORR_GENERATE_TRANSLATION_FILE'));	
						}
						if(!empty($this->request->post('language_symbol')))
						{
							if(!$this->_compare_file_names($translation->language_symbol, $this->request->post('language_symbol')))
							{
								unlink(DOCROOT.$this->_director.$translation->language_symbol.'.php');
							}
						}
						$translation->language 			= $this->request->post('language');
						$translation->language_symbol	= $this->request->post('language_symbol');
						$translation->version			= $this->request->post('version'); 
						$translation->date_change		= date("Y-m-d H:i:s"); 
						$translation->user_id			= $this->_auth->get_user()->pk();
						$translation->save();
						$this->_set_message('success', __('NO_ERROR_TRANSLATION_SUCCESS_EDIT'));
						HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
					}
					catch(ORM_Validation_Exception $e)
					{
						$this->_set_message('error', $e->errors('avatar'));
					}
				}	
			}
		}
	}
	public function action_list()
	{
		if($this->_auth->logged_in('technical'))
		{
			$translations_list	= ORM::factory('Translations')->get_transitional_list();
			$this->template->content = View::factory( 'template/admin/translations/list' );
			$this->template->content->bind('translations_list', $translations_list);
		}
	}
	public function _delete_translation_file($name)
	{
		$filename = DOCROOT.$this->_director.$name.'.php';
		if(is_file($filename))
		{
			unlink($filename);
			if(!is_file($filename))
			{
				return TRUE;
			}
			else 
			{
				return FALSE;	
			}
		}
		else 
		{
			return FALSE;
		}
	}
	public function action_delete()
	{
		if($this->_auth->logged_in('technical'))
		{
			if($this->request->param('id'))
			{
				$this->template->content = View::factory( 'template/admin/others/confirm_delete');
				if(isset($_POST['process_delete']))
				{
					try
					{
						$translation = ORM::factory('Translations', $this->request->param('id'));
						if($this->_delete_translation_file($translation->language_symbol))
						{
							$translation->delete();
							$this->_set_message('success', __('NO_ERROR_TRANSLATION_SUCCES_DELETE'));
							HTTP::redirect(URL::site($this->request->post('return_url'), TRUE), 302);
						}
						else 
						{
							$this->_set_message('error',__('NO_SUCH_FILE'));	
						}
					}
					catch(ORM_Validation_Exception $e)
					{
						$this->_set_message('error', $e->errors('avatar'));
					}
				}
				if(isset($_POST['reject_delete']))
				{
					HTTP::redirect(URL::site($this->request->post('return_url'), TRUE), 302);
				}
			}
		}
	}
}