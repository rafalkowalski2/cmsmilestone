<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('MY_ACCOUNT');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('MY_ACCOUNT');?></li>
		</ol>
		<div class="col-sm-12">
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
		</div>
		<form role="form" method="post" enctype="multipart/form-data">
    		<div class="col-sm-6">
    			<label for="avatar"><?php echo __('AVATAR');?></label>
    			<div class="form-group">
    				<!--<input type="text" name="avatar" class="form-control" id="avatar" value="<?php echo Auth::instance()->get_user()->name;?>">-->
    				<div class="col-sm-6 col-sm-offset-4">
    					<?php
    					if(Auth::instance()->get_user()->avatar == 0)
    					{
    						echo '<img src="/public/upload/gfx/avatar/default.png" alt="'.Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname.'">';
    					}
    					else
    					{
    						echo '<img src="/public/upload/gfx/avatar/'.Auth::instance()->get_user()->pk().'.jpg" alt="'.Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname.'">';
    					}
						?>
  					</div>
  					<input type="file" name="avatar" class="form-control" id="avatar">
  				</div>			
  				<input type="submit" name="delete_avatar" class="btn btn-default" value="<?php echo __('DELETE_AVATAR');?>">
  				<input type="submit" name="update_avatar" class="btn btn-default" value="<?php echo __('UPDATE_AVATAR');?>">
    		</div>
   			<div class="col-sm-6">	
  				<div class="form-group">
   		 			<label for="name"><?php echo __('NAME');?></label>
    				<input type="text" name="name" class="form-control" id="name" value="<?php echo Auth::instance()->get_user()->name;?>">
  				</div>
  				<div class="form-group">
   		 			<label for="surname"><?php echo __('SURNAME');?></label>
    				<input type="text" name="surname" class="form-control" id="surname" value="<?php echo Auth::instance()->get_user()->surname;?>">
  				</div>
  				<div class="form-group">
   		 			<label for="e_mail"><?php echo __('E-MAIL');?></label>
    				<input type="text" name="e_mail" class="form-control" id="e_mail" value="<?php echo Auth::instance()->get_user()->email;?>">
  				</div>
  				<div class="form-group">
   		 			<label for="about_user"><?php echo __('ABOUT_USER');?></label>
   		 			<textarea class="form-control" rows="5" name="about_user" id="about_user"><?php echo Auth::instance()->get_user()->about;?></textarea>
  				</div>
  				<input type="submit" name="update_user" class="btn btn-default" value="<?php echo __('SAVE');?>">
			</form>
    	</div>
    </div>
</div>
