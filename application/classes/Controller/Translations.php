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
		'FOLDERS',
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
		'language_name',
		'language_symbol',
	);
	public function _generate_translation_array($translation)
	{
		$trans = "<?php\nreturn array(\n";
		foreach($translation as $key => $value)
		{
			if(!in_array($key, $this->_skip_key))
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
	public function action_add()
	{
		if($this->_auth->logged_in('technical'))
		{
			$this->template->content = View::factory( 'template/admin/translations/add' );
			$this->template->content->bind('structure', $this->_structure_translation);
			if(isset($_POST['create_translation']))
			{
				$this->_generate_translation_file('pl', $this->_generate_translation_array($this->request->post()));
			}
		}
	}
	public function action_edit()
	{
		if($this->_auth->logged_in('technical'))
		{
			$this->template->content = View::factory( 'template/admin/translations/edit' );
			$this->template->content->bind('structure', $this->_structure_translation);
			if(isset($_POST['create_translation']))
			{
				$this->_generate_translation_file('pl', $this->_generate_translation_array($this->request->post()));
			}
		}
	}
}