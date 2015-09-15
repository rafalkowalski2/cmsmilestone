<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('LIST_TRANSLATIONS');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('FOLDERS');?></li>
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
	<div  class="row">
		<div class="table-responsive">
        	<table class="table table-striped table-hover test-tree">
			<?php 
			if($translations_list)
			{
				echo '<thead>
            			<tr>
                			<th>#</th>
                			<th>'.__('LANGUAGE').'</th>
                			<th>'.__('LANGUAGE_SYMBOL').'</th>
                			<th>'.__('AUTHOR').'</th>
                			<th>'.__('VERSION').'</th>
                			<th>'.__('CREATE_DATE').'</th>
                			<th>'.__('CHANGE_DATE').'</th>
                			<th>'.__('FUNCTIONS').'</th>
              			</tr>
        				</thead>
        				<tbody>' ;
				echo Helpers_Translations::generate_translations_list($translations_list);
				echo '</tbody>';
			}
			?>
    		</table>			
		</div>
	</div>
</div>