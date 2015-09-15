<?php 
	defined('SYSPATH') OR die('No direct access allowed.');
?>
<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('CHANGE_PASSWORD');?></h1>
	</div>
  <div class="row">
  	<ol class="breadcrumb">
  <li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  <li class="active"><?php echo __('CHANGE_PASSWORD');?></li>
</ol>
    <div class="col-sm-6">
    	<?php echo __('DESC_CHANGE_PASSWORD_AREA');?>
    </div>
    <div class="col-sm-6 left_separator">
    	<?php
    	if(Session::instance()->get('display') == TRUE)
		{
			echo '<div class="alert alert-'.Session::instance()->get('status').'" role="alert">';
			if(is_array(Session::instance()->get('message'))) 
			{
				echo '<ul>';
				foreach(Session::instance()->get('message') as $key => $value)
				{
					echo '<li>'.$value.'</li>';
				}
				echo '<ul>';
			}
			else 
			{
				echo Session::instance()->get('message');
			}
			echo '</div>';
			Session::instance()->set('display', FALSE);
		}
		?>
		<form role="form" method="post" >
  			<div class="form-group">
   		 		<label for="old_passwword"><?php echo __('OLD_PASSWORD');?></label>
    			<input type="password" name="old_password" class="form-control" id="old_passwword">
  			</div>
  			<div class="form-group">
   		 		<label for="new_password"><?php echo __('NEW_PASSWORD');?></label>
    			<input type="password" name="new_password" class="form-control" id="new_password">
  			</div>
  			<div class="form-group">
   		 		<label for="conf_new_password"><?php echo __('CONF_NEW_PASSWORD');?></label>
    			<input type="password" name="conf_new_password" class="form-control" id="conf_new_password">
  			</div>
  			<input type="submit" name="update_password" class="btn btn-default" value="<?php echo __('SAVE');?>">
		</form>
	</div>
  </div>
</div>