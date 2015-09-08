<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('ADD_USER');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('FOLDERS');?></li>
		</ol>
		<div class="col-sm-12 table-responsive">
		</div>
		<div class="table-responsive">
        	<table class="table table-striped table-hover test-tree">
			<?php 
			if($list)
			{
				echo '<thead>
            			<tr>
                			<th>Name</th>
                			<th>First Name</th>
                			<th>Last Name</th>
                			<th>Role</th>
                			<th>Active</th>
                			<th>First_logon</th>
                			<th>Active off</th>
                			<th>Active to</th>
                			<th>Function</th>
              			</tr>
        				</thead>
        				<tbody>' ;
				//$i = 1;
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
					
				echo '</tbody>';
			}
			?>
    		</table>			
		</div>
	</div>
</div>