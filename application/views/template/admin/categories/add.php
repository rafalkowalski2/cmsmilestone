<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_CATEGORY');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('ADD_CATEGORY');?></li>
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
   		 			<label for="category_name"><?php echo __('CATEGORY_NAME');?></label>
    				<input type="text" name="category_name" class="form-control" id="category_name" value="<?php echo $_POST['category_name'];?>">
  				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
  					<label for="parent_category"><?php echo __('PARENT_CATEGORY');?></label>
  					<select class="form-control" name="parent_category" id="parent_category" hidden>
    					<option value="0">--</option>
    			<?php	
    			print_r($category_list);
    					function walkTree($nodes, $level = 0) 
				{
    				foreach($nodes as $key => $value) 
    				{
    					echo '<option value="'.$value['id'].'">'.str_repeat('--', $level).$value['name'].'</option>';
        				if($value['children']) 
        				{
            				walkTree($value['children'], $level + 1); 
        				}
						
    				}
				}
				walkTree($category_list);
				?>
  					</select>
				</div>
  				<input type="submit" name="add_category" class="btn btn-default" value="<?php echo __('SAVE');?>">
			</div>
		</form>
	</div>
</div>