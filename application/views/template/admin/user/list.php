<div class="container-fluid white_container marign-borders">
	<div class="page-header">
		<h1><?php echo __('LIST_USER');?></h1>
	</div>
  	<div class="row">
  		<ol class="breadcrumb">
  			<li><a href="#"><?php echo Auth::instance()->get_user()->name.' '. Auth::instance()->get_user()->surname; ?></a></li>
  			<li class="active"><?php echo __('LIST_USER');?></li>
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
		<div class="col-sm-12"><?php echo $pagination ;?></div>
		<table class="table table-striped table-hover">
			<?php 
			if($list)
			{
				echo '<thead>
            			<tr>
                			<th>#</th>
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
				
				foreach($list as $value)
				{
					
					echo '<tr>
						<td>'.$i.'</td>
						<td><a href="'.URL::site(Request::current()->param('language').'/admin/user/edit/'.$value['u_id']).'">'.$value['u_name'].'</a></td>
						<td><a href="'.URL::site(Request::current()->param('language').'/admin/user/edit/'.$value['u_id']).'">'.$value['u_surname'].'</a></td>
						<td>';
					if(strstr($value['r_name'], ',')) echo substr($value['r_name'], 0, strpos($value['r_name'], ","));
					else echo $value['r_name'];
					echo '</td>
						<td>'.$value['u_active'].'</td>
						<td>'.$value['u_active'].'</td>
						<td>'.$value['u_active_off'].'</td>
						<td>'.$value['u_active_to'].'</td>
						<td><a href="'.URL::site(Request::current()->param('language').'/admin/user/edit/'.$value['u_id']).'">Edit</a> | <a href="'.URL::site(Request::current()->param('language').'/admin/user/delete/'.$value['u_id'].'?return='.Request::current()->uri()).'">Delete</a></td>
						</tr>';
					$i++;
				}
				echo '</tbody>';
			}
			?>
    	</table>
    	<div class="col-sm-12"><?php echo $pagination ;?></div>
	</div>
</div>