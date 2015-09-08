<?php
class Controller_Dashboard extends Controller_AdminTemplate
{
	public function action_index()
	{
		if(Auth::instance()->logged_in('editor'))
		{
			$this->_title = 'CMS::Dashboard';
			$this->template->content = View::factory( 'template/admin/dashboard/index' );
			echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname;
		}
		else 
		{
			$this->_redirect_to_login('admin');
		}
	}
}
