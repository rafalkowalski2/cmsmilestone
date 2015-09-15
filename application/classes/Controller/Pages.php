<?php defined('SYSPATH') or die('No direct script');
class Controller_Pages extends Controller_AdminTemplate
{
	public function action_add()
	{
		if($this->_auth->logged_in('editor'))
		{
			$this->template->content = View::factory( 'template/admin/pages/add' );
		}
		else 
		{
			echo 'no access';	
		}
	}
}
