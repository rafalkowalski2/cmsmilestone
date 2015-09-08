<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_USER');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('ADD_PAGE');?></li>
		</ol>
		<div class="col-sm-3">
			<table class="table borderless test-tree">
				<?php
					function show($arr)
					{
						foreach($arr as $key => $value)
						{
							$string = '<tr class="treegrid-'.$value['id'];
							if(key_exists('children', $value))
							{
								if(key_exists('parent_id', $value) AND $value['parent_id'] != 0)
								{
									$string .= ' treegrid-parent-'.$value['parent_id'].'">';
									$string .= '<td><a href="'.URL::site(Request::current()->param('language').'/admin/files/manager/'.$value['id']).'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								else 
								{
									$string .= '"><td><a href="'.URL::site(Request::current()->param('language').'/admin/files/manager/'.$value['id']).'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								echo $string;
								show((array)$value['children'], $str);
							}
							else 
							{
								if(key_exists('parent_id', $value) AND $value['parent_id'] != 0)
								{
									$string .= ' treegrid-parent-'.$value['parent_id'].'">';
									$string .= '<td><a href="'.URL::site(Request::current()->param('language').'/admin/files/manager/'.$value['id']).'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								else
								{
									$string .= '"><td><a href="'.URL::site(Request::current()->param('language').'/admin/files/manager/'.$value['id']).'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								echo $string;
							}										
						}
					}
					show($list);
					?>
			</table>
		</div>
		<div class="cols-sm-4 table-responsive	">
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
        				<?php
							echo ini_get('post_max_size');
							if(Request::current()->param('id'))
							{
								if(count($files_list) > 0 )
								{
									echo '<table class="table table-striped table-hover">
											<thead>
            									<tr>
                									<th>#</th>
                									<th>'.__('TYPE').'</th>
                									<th>'.__('NAME').'</th>
                									<th>'.__('SIZE').'</th>
                									<th>'.__('DATE_ADD').'</th>
              										<th>'.__('FUNCTION').'</th>
           										</tr>
        									</thead>
        									<tbody>'."\n";
									$i = 1;
									foreach($files_list as $key => $value)
									{
										echo '<tr>'."\n";
										echo '<td>'.$i.'</td>'."\n";
										echo '<td>'.Helpers_File::file_icon($value['file_type']).'</td>'."\n";
										echo '<td>'.Helpers_File::preview_file($value['folder_director'], $value['file_name'], $value['file_type']).'</td>'."\n";
										echo '<td>'.Helpers_File::size($value['file_size']).'</td>'."\n";
										echo '<td>'.$value['file_date_add'].'</td>'."\n";
										echo '<td><a href="'.URL::site(Request::current()->param('language').'/admin/files/delete/'.$value['file_id']).'">'.__('DELETE').'</td>'."\n";
										echo '</tr>'."\n";
										$i++;
									}
									echo '	</tbody>
        								</table>'."\n";			
								}
								else 
								{
									echo __('NO_DATA_TO_DISPLAY');	
								}
							}
						?>
        				
		
		</div>
	</div>
</div>