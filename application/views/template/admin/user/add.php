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
		<form role="form" method="post" id="pages">
    		<div class="col-sm-6">
    			<div class="form-group">
   		 			<label for="name"><?php echo __('NAME');?></label>
    				<input type="text" name="name" class="form-control" id="name" value="<?php echo $_POST['name'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="surname"><?php echo __('SURNAME');?></label>
    				<input type="text" name="surname" class="form-control" id="surname" value="<?php echo $_POST['surname'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="login"><?php echo __('LOGIN');?></label>
    				<input type="text" name="login" class="form-control" id="login" value="<?php echo $_POST['login'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="password"><?php echo __('PASSWORD');?></label>
    				<input type="text" name="password" class="form-control" id="password" value="<?php echo $_POST['password'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="confirm_password"><?php echo __('CONFIRM_PASSWORD');?></label>
    				<input type="text" name="confirm_password" class="form-control" id="confirm_password" value="<?php echo $_POST['confirm_password'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="e_mail"><?php echo __('E-MAIL');?></label>
    				<input type="text" name="e_mail" class="form-control" id="e_mail" value="<?php echo $_POST['e_mail'];?>">
  				</div>
    		</div>
   			<div class="col-sm-6">
   				<div class="form-group">
  					<label for="role"><?php echo __('ROLE');?></label>
  					<select class="form-control" name="role" id="role">
  						<?php
  						foreach($roles as $key => $value)
						{
							echo '<option value='.$value['id'].'>'.__($value['name']).'</option>';
						}
    					?>
  					</select>
				</div>	
  				<div class="form-group">
  					<label for="active"><?php echo __('ACTIVE');?></label>
  					<select class="form-control" name="active" id="active">
    					<option value="0"><?php echo __('NO');?></option>
    					<option value="1"><?php echo __('YES');?></option>
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
               			<input type='text' class="form-control" name="active_off" id="active_off" value="<?php echo $_POST['active_off'];?>"/>
                		<span class="input-group-addon">
                  	  	<span class="glyphicon glyphicon-calendar"></span>
                		</span>
           			</div>
  				</div>
  				<div class="form-group">
  					<label for="active_to"><?php echo __('ACTIVE_TO');?></label>
					<div class=' input-group date' id='active_to'>
               			<input type='text' class="form-control" name="active_to" id="active_to" value="<?php echo $_POST['active_to'];?>"/>
                		<span class="input-group-addon">
                  	  	<span class="glyphicon glyphicon-calendar"></span>
                		</span>
           			</div>
  				</div>
  				<input type="submit" name="add_user" class="btn btn-default" value="<?php echo __('SAVE');?>">
			</div>		
		</form>
    </div>
</div>
