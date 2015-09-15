<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('CONFIRM_DELETE');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('CONFIRM_DELETE');?></li>
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
		<div class="col-sm-offset-4 col-sm-4">
			<p><?php echo __('CONFIRM_DELETE_MESSAGE'); ?></p>
			<form role="form" action="<?php echo Request::current()->uri();?>" method="post">
				<div class="form-gruop">
					<input type="hidden" name="return_url" value="<?php echo Request::initial()->referrer();?>">
					<input type="submit" name="process_delete" class="btn btn-default" value="<?php echo __('YES');?>">
					<input type="submit" name="reject_delete" class="btn btn-default" value="<?php echo __('NO');?>">
				</div>
			</form>
		</div>
	</div>
</div>