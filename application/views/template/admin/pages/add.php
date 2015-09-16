<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_USER');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('ADD_PAGE');?></li>
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
		<form role="form" action="<?php echo Request::current()->uri();?>" method="post">
    		<div class="col-sm-6">
    			<div class="form-group">
   		 			<label for="page_name"><?php echo __('PAGE_NAME');?></label>
    				<input type="text" name="page_name" class="form-control" id="page_name" value="">
  				</div>
  				<div class="form-group">
   		 			<label for="page_category"><?php echo __('PAGE_CATEGORY');?></label>
    				<input type="text" name="page_category" class="form-control" id="page_category" value="">
  				</div>
    		</div>
   			<div class="col-sm-6">
   				sfsdf
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<textarea class="page_value" name="page_value"></textarea>
				</div>
			</div>
			<input type="submit" name="add_page" class="btn btn-default" value="<?php echo __('SAVE');?>">
		</form>
    </div>
</div>