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
		<form role="form" action="<?php echo Request::current()->uri();?>" id="form_add_files" method="post" enctype="multipart/form-data">
			<div class="col-sm-6">
				<div class="form-group">
   		 			<label for="display_name"><?php echo __('FILE');?></label>
    				<input type="file" name="file[]" class="form-control" multiple="multiple" id="file">
  				</div>
  				<div class="form-group field-files-container">
  				</div>
  				<div class="form-group">
  					<input type="button" id="add_field" class="btn btn-default" value="<?php echo __('ADD_FIELD');?>">
  					<input type="button" id="delete_field" class="btn btn-default" value="<?php echo __('DELETE_FIELD');?>">
  				</div>
				<div class="form-group">
   		 			<label for="display_name"><?php echo __('DISPLAY_NAME');?></label>
    				<input type="text" name="display_name" class="form-control" id="display_name" value="<?php echo $_POST['display_name'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="name"><?php echo __('NAME');?></label>
    				<input type="text" name="name" disabled class="form-control" id="name" value="<?php echo $_POST['name'];?>">
  				</div>
  				<div class="form-group">
   		 			<label for="director"><?php echo __('DIRECTOR');?></label>
    				<input type="text" name="director" disabled class="form-control" id="director" value="<?php echo 'public/upload/';?>">
  				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
  					<label for="parent_folder"><?php echo __('PARENT_FOLDER');?></label>
  					<select class="form-control" name="dir" id="parent_folder" hidden>
    					<option value="0">--</option>
    					<?php
    						
    						function show($arr, $addon = '')
							{
								static $i = 0;
								static $parent_id = array();
								static $str = '|--';
								foreach($arr as $key => $value)
								{
									echo 'i - '.$i;
									$parent_id[$value['id']] = 0;
									echo' <option value="'.$value['id'].'" data-value="'.$value['dir'].'">'.$addon.$value['display_name'].'</option>'."\n";
									if(key_exists('children', $value))
									{
										if(key_exists('start', $value))
										{
											$i = 0;
										}
										else 
										{
											$i++;
										}
										
										$str = '|--';
										for ($j=0; $j < $i; $j++) { 
											$str .= '--';
										}
										show((array)$value['children'], $str);
										
									}
									else 
									{
										if(key_exists('parent_id', $value) AND $value['parent_id'] != 0 ) ;
										//else $i=0;
									}										
								}
							}
							show($list);
    					?>
  					</select>
				</div>
				<div style="display: none">
					<!--<select class="form-control" name="dir" id="dir" hidden>
    					<option value="0"><?php echo __('NO');?></option>
    					<option value="1"><?php echo __('YES');?></option>
  			</select>-->
				</div>
				<div class="form-group">
   		 			<label for="description"><?php echo __('DESCRIPTION');?></label>
   		 			<textarea class="form-control" rows="5" name="description" id="description"></textarea>
  				</div>
  				<input type="submit" name="add_files" class="btn btn-default" value="<?php echo __('SAVE');?>">
			</div>
		</form
	</div>
</div>