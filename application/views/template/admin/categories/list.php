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
                			<th>#</th>
                			<th>'.__('NAME').'</th>
                			<th>'.__('AUTHOR').'</th>
                			<th>'.__('DATE_CREATE').'</th>
                			<th>'.__('FUNCTION').'</th>
              			</tr>
        				</thead>
        				<tbody>' ;
				function walkTree($nodes, $level = 0) 
				{
					static $i = 1;
    				foreach($nodes as $key => $value) 
    				{
    					if($value['start'] == 1)
						{
							echo '<tr>
									<td>'.$i.'</td>
									<td>'.$value['name'].'</td>
									<td>'.$value['u_name'].' '.$value['u_surname'].'</td>
									<td>'.$value['create_date'].'</td>
									<td>
										<a href="'.URL::site(Request::current()->param('language').'/admin/folders/edit/'.$value['id']).'">Edit</a> 
										| 
										<a href="'.URL::site(Request::current()->param('language').'/admin/folders/delete/'.$value['id']).'">Delete</a>
									</td>
								  </tr>'."\n";
						}
						else 
						{
    						echo '<tr>
    								<td>'.$i.'</td>
    								<td>'.str_repeat('---', $level).$value['name'].'</td>
    								<td>'.$value['u_name'].' '.$value['u_surname'].'</td>
    								<td>'.$value['create_date'].'</td>
    								<td>
										<a href="'.URL::site(Request::current()->param('language').'/admin/folders/edit/'.$value['id']).'">Edit</a> 
										| 
										<a href="'.URL::site(Request::current()->param('language').'/admin/folders/delete/'.$value['id']).'">Delete</a>
									</td>
    							  </tr>'."\n";
						}
						$i++;
        				if($value['children']) 
        				{
            				walkTree($value['children'], $level + 1); 
        				}
						
    				}
				}
				walkTree($list);	
				echo '</tbody>';
			}
			?>
    		</table>			
		</div>
	</div>
</div>