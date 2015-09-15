<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_FOLDER');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('ADD_FOLDER');?></li>
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
		<form role="form" action="<?php echo Request::current()->uri();?>" id="form_add_folder" method="post">
			<div class="col-sm-6">
				<div class="form-group">
   		 			<label for="display_name"><?php echo __('DISPLAY_NAME');?></label>
    				<input type="text" name="display_name" class="form-control" id="display_name" value="<?php echo $folder->display_name;?>">
  				</div>
  				<div class="form-group">
   		 			<label for="name"><?php echo __('NAME');?></label>
    				<input type="text" name="name" disabled class="form-control" id="name" value="<?php echo $folder->name.' - '.$folder->parent_id;?>">
  				</div>
  				<div class="form-group">
   		 			<label for="director"><?php echo __('DIRECTOR');?></label>
    				<input type="text" name="director" disabled class="form-control" id="director" value="<?php echo $folder->dir;?>">
  				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
  					<label for="parent_folder"><?php echo __('PARENT_FOLDER');?></label>
  					<select class="form-control" name="parent_folder" id="parent_folder" hidden>
    					<option value="0">--</option>
    					<?php
    						function walkTree($nodes, $level = 0, $current_parent_id = 0) {
    							foreach($nodes as $key => $value) {		
    								if($value['start'] == 1)
									{
										if($value['id'] == $current_parent_id)
										{
											echo '<option value="'.$value['id'].'" data-value="'.$value['dir'].'" selected="selected">'.$value['display_name'].'</option>'."\n";
										}
										else
										{
											echo '<option value="'.$value['id'].'" data-value="'.$value['dir'].'">'.$value['display_name'].'</option>'."\n";
									
										}
									}
									else 
									{
										if($value['id'] == $current_parent_id)
										{
											echo '<option value="'.$value['id'].'" data-value="'.$value['dir'].'" selected="selected">'.$value['display_name'].'</option>'."\n";
										}
										else
										{
    										echo '<option value="'.$value['id'].'" data-value="'.$value['dir'].'">|'.str_repeat('---', $level).$value['display_name'].'</option>'."\n";
									
										}
									}
        							if($value['children']) {
            							walkTree($value['children'], $level + 1, $current_parent_id); 
        							}
    							}
							}
							walkTree($list, $level, $folder->parent_id);
    					?>
  					</select>
				</div>
				<div style="display: none">
					<select class="form-control" name="dir" id="dir" hidden>
    					<option value="0"><?php echo __('NO');?></option>
    					<option value="1"><?php echo __('YES');?></option>
  					</select>
				</div>
				<div class="form-group">
   		 			<label for="description"><?php echo __('DESCRIPTION');?></label>
   		 			<textarea class="form-control" rows="5" name="description" id="description"></textarea>
  				</div>
  				<input type="submit" name="add_folder" class="btn btn-default" value="<?php echo __('SAVE');?>">
			</div>
		</form
	</div>
</div>