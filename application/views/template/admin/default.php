<?php 
	defined('SYSPATH') OR die('No direct access allowed.');
?>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" href="/public/static/template/admin/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
		<link type="text/css" href="/public/static/template/admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"/>
		<link type="text/css" href="/public/static/template/admin/css/style.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="/public/static/template/admin/css/navbar.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="/public/static/template/admin/css/jquery.treegrid.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="/public/static/template/admin/css/lightbox.css" rel="stylesheet" media="screen" />
		<base href="<?php echo URL::site(NULL, TRUE); ?>">
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<?php if(Auth::instance()->logged_in() AND Session::instance()->get('is_login'))
	{
	?>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid marign-borders">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo URL::site(Request::current()->param('language').'/admin/dashboard/index', TRUE); ?> ">Home</a></li>
           	<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('PAGES');?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/pages/add'); ?>"><?php echo __('ADD_PAGE');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/pages/list'); ?>"><?php echo __('LIST_PAGE');?></a></li>
              </ul></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('FILEMANAGER');?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header"><?php echo __('FOLDERS'); ?></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/folders/add'); ?>"><?php echo __('ADD_FOLDER');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/folders/list'); ?>"><?php echo __('FOLDERS');?></a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header"><?php echo __('FILES'); ?></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/files/add'); ?>"><?php echo __('ADD_FILES');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/files/manager'); ?>"><?php echo __('FILE_MANAGER');?></a></li>
              </ul></li>
           	<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('USERS');?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/user/add'); ?>"><?php echo __('ADD_USER');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/user/list'); ?>"><?php echo __('USERS_LIST');?></a></li>
              </ul></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('SETTINGS');?><span class="caret"></span></a>
              <ul class="dropdown-menu">
              	<li class="dropdown-header"><?php echo __('LANGUAGES'); ?></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/translations/add'); ?>"><?php echo __('ADD_TRANSLATION');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/translations/list'); ?>"><?php echo __('EDIT_TRANSLATION');?></a></li>
                <li class="dropdown-header"><?php echo __('PAGES'); ?></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/categories/add'); ?>"><?php echo __('ADD_CATEGORY');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/categories/list'); ?>"><?php echo __('CATEGORIES');?></a></li>
              </ul></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/user/logout'); ?>"><?php echo __('LOGOUT');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/user/change_password'); ?>"><?php echo __('CHANGE_PASSWORD');?></a></li>
                <li><a href="<?php echo URL::site(Request::current()->param('language').'/admin/user/my_account');?>"><?php echo __('MY_ACCOUNT');?></a></li>
              </ul></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<?php
	}
	else
	{
	}
	?>
	<?php echo $content."\n"; ?>
	<?php if(Auth::instance()->logged_in() AND Session::instance()->get('is_login'))
	{
	?>
	<footer class="footer">
    	<div class="container-fluid marign-borders">
      		<div class="row">
      			<div class="col-sm-10">
      				<div class="autosave">
      				</div>
      			</div>
      			<div class="col-sm-2">
      				<form role="form" action="<?php echo Request::current()->uri();?>" method="POST">
      					<div class="form-group">
      						<select class="form-control" name="language_website" onchange="this.form.submit()">
      							<?php echo Helpers_Translations::generate_languages_lists($languages); ?>
      						</select>
      					</div>
      				</form>
      			</div>
        	</div>
     	</div>
    </footer>
   	<?php
	}
	?>
	</body>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/moment.min.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/bootstrap.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/tinymce/tinymce.jquery.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/jquery.treegrid.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/jquery.treegrid.bootstrap3.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/lightbox.js"></script>
	<script type="text/javascript" src="/public/static/template/admin/js/cmsmilestone.js"></script>
</html>
