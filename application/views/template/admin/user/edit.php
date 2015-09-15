<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_USER');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('ADD_USER');?></li>
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
						if(is_array($value))
						{
							foreach($value as $extra_value)
							{
								echo '<li>'.$extra_value.'</li>';
							}
						}
						else 
						{
							echo '<li>'.$value.'</li>';	
						}
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
			<?php
			foreach($user_detail as $key => $info_value)
			{
			?>
    		<div class="col-sm-6">
    			<label for="avatar"><?php echo __('AVATAR');?></label>
    			<div class="form-group">
    				<!--<input type="text" name="avatar" class="form-control" id="avatar" value="<?php echo Auth::instance()->get_user()->name;?>">-->
    				<div class="col-sm-6 col-sm-offset-4">
    					<?php
    					if($info_value['u_avatar'] == 0)
    					{
    						echo '<img src="/public/upload/gfx/avatar/default.png" alt="'.Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname.'">';
    					}
    					else
    					{
    						echo '<img src="/public/upload/gfx/avatar/'.$info_value['u_id'].'.jpg" alt="'.Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname.'">';
    					}
						?>
  					</div>
  					<input type="file" name="avatar" class="form-control" id="avatar">
  				</div>
  				<input type="submit" name="delete_avatar" class="btn btn-default" value="<?php echo __('DELETE_AVATAR');?>">
  				<input type="submit" name="update_avatar" class="btn btn-default" value="<?php echo __('UPDATE_AVATAR');?>">
    			<div class="form-group">
   		 			<label for="name"><?php echo __('NAME');?></label>
    				<input type="text" name="name" class="form-control" id="name" value="<?php echo $info_value['u_name'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="surname"><?php echo __('SURNAME');?></label>
    				<input type="text" name="surname" class="form-control" id="surname" value="<?php echo $info_value['u_surname'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="e_mail"><?php echo __('E-MAIL');?></label>
    				<input type="text" name="e_mail" class="form-control" id="e_mail" value="<?php echo $info_value['u_email'];?>">
  				</div>
    		</div>
   			<div class="col-sm-6">
   				<div class="form-group">
  					<label for="role"><?php echo __('ROLE');?></label>
  					<select class="form-control" name="role" id="role">
  						<?php
  						foreach($roles as $key => $value)
						{
							if($info_value['r_id'] == $value['id'])
							{
								echo '<option value='.$value['id'].' selected>'.__($value['name']).'</option>';
							}
							else 
							{
								echo '<option value='.$value['id'].'>'.__($value['name']).'</option>';	
							}
						}
    					?>
  					</select>
				</div>	
  				<div class="form-group">
  					<label for="active"><?php echo __('ACTIVE');?></label>
  					<select class="form-control" name="active" id="active">
  						<?php
  						foreach($yes_no as $key => $value)
						{
							if($info_value['u_active'] == $key)
							{
								echo '<option value='.$key.' selected>'.__($value).'</option>';
							}
							else 
							{
								echo '<option value='.$key.'>'.__($value).'</option>';	
							}
						}
    					?>
  					</select>
				</div>
				<div class="form-group">
  					<label for="first_login"><?php echo __('FIRST_LOGIN');?></label>
  					<select class="form-control" name="first_login" id="first_login">
    					<option value="0"><?php echo __('NO');?></option>
    					<option value="1"><?php echo __('YES');?></option>
  					</select>
				</div>
				<div class="form-group">
  					<label for="active_off"><?php echo __('ACTIVE_OFF');?></label>
					<div class=' input-group date' id='active_off'>
               			<input type='text' class="form-control" name="active_off" id="active_off" value="<?php echo $info_value['u_active_off'];?>"/>
                		<span class="input-group-addon">
                  	  	<span class="glyphicon glyphicon-calendar"></span>
                		</span>
           			</div>
  				</div>
  				<div class="form-group">
  					<label for="active_to"><?php echo __('ACTIVE_TO');?></label>
					<div class=' input-group date' id='active_to'>
               			<input type='text' class="form-control" name="active_to" id="active_to" value="<?php echo $info_value['u_active_to'];?>"/>
                		<span class="input-group-addon">
                  	  	<span class="glyphicon glyphicon-calendar"></span>
                		</span>
           			</div>
  				</div>
  				<div class="form-group">
   		 			<label for="about_user"><?php echo __('ABOUT_USER');?></label>
   		 			<textarea class="form-control" rows="5" name="about_user" id="about_user"><?php echo $info_value['u_about'];?></textarea>
  				</div>
  				<input type="submit" name="edit_user" class="btn btn-default" value="<?php echo __('SAVE');?>">
			</div>
			<?php
			}
			?>		
		</form>
    </div>
</div>
