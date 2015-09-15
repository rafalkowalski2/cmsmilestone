<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_TRANSLATION');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('ADD_TRANSLATION');?></li>
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
	</div>
	<div class="cols-sm-12">
		<form role="form" action="<?php echo Request::current()->uri();?>" method="post">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="language"><?php echo __('LANGUAGE');?></label>
    				<input type="text" name="language" class="form-control" id="language" value="<?php echo $translation_detail->language;?>">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="language_symbol"><?php echo __('LANGUAGE_SYMBOL');?></label>
    				<input type="text" name="language_symbol" class="form-control" id="language_symbol" value="<?php echo $translation_detail->language_symbol;?>">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="version"><?php echo __('VERSION');?></label>
    				<input type="text" name="version" class="form-control" id="version" value="<?php echo $translation_detail->version;?>">
				</div>
			</div>
			<h2><?php echo __('TRANSLATION');?></h2>
			<?php echo Helpers_Translations::generate_inputs_edit($structure, $translation);?>
			<input type="submit" name="update_translation" value="<?php echo __('SAVE');?>">
		</form>
	</div>
</div>