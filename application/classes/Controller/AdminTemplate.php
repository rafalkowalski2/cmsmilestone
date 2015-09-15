<?php defined('SYSPATH') or die('No direct script');
class Controller_AdminTemplate extends Controller_Template
{
	public $template = 'template/admin/default';
	public $_yes_no = array('NO', 'YES');
    protected $_title = 'CMS';
    protected $__JS__;
    protected $__CSS__;    
	protected $_session;
	protected $_auth;
   	public function before()
   	{
   		parent::before();	
        View::set_global('base',URL::base(TRUE, FALSE));       
        $this->__JS__   = 'public/static/template/admin/';
        $this->__CSS__	= 'public/static/template/admin/';
	}    
    public function after()
    {
		$_script = array(   
		);
        $_style = array(    
        	$this->__CSS__.'style.css'   
		);
        $this->template->title   = $this->_title;
        $this->template->style   = $_style; 
        $this->template->script  = $_script;   
        parent::after();
		
    }
	protected function __error($err)
	{
		HTTP::redirect(Request::current()->param('language').'/admin/error/'.$err);
	}
	protected function _set_message($type, $message)
	{
		switch($type)
		{
			case 'success': $this->_session->set('status', 'success')->set('display', TRUE); break;
			case 'error': $this->_session->set('status', 'danger')->set('display', TRUE); break;
		}
		$this->_session->set('message', $message);
	}
	protected function _redirect_to_login($type)
	{
		if($type == 'admin') HTTP::redirect( $this->request->param('language').'/admin/' , 302 ); //przekirownuj na login z admina
		else HTTP::redirect( $this->request->param('language').'/page/user/login' , 302 );
	}
	public function  __construct(Request $request, Response $response) {
        parent::__construct($request, $response);
        I18n::lang($this->request->param('language'));
		$this->_session = Session::instance();
		$this->_auth = Auth::instance();
    /*
		if( !empty( $_COOKIE['cms_lang'] ) )
		{
			if( isset( $_POST['cms_lang'] ) )
			{
        		I18n::lang($_POST['cms_lang']);
				setcookie( 'cms_lang', $_POST['cms_lang'], time()+(60*60*24*30) );
				HTTP::redirect( $_SERVER['REQUEST_URI'] );
			}
		}
		else 
		{
			I18n::lang('pl-pl');
			setcookie( 'cms_lang', 'pl-pl', time()+(60*60*24*30) );
		}
		*/
	}
}
