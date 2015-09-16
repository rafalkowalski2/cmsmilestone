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
    		</div>
   			<div class="col-sm-6">
   				<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<textarea class="page_value" id="page_value" name="page_value"></textarea>
				</div>
			</div>
			<input type="submit" name="add_page" class="btn btn-default" value="<?php echo __('SAVE');?>">
		</form>
    </div>
</div>



<!-- Modal -->


<div class="modal fade bs-example-modal-lg" style="z-index:9999999999999" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 95% ">
    <<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-sm-4" style="max-height:60%; overflow: scroll; overflow-x: hidden">
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
									$string .= '<td><a class="folder-id" name="'.$value['id'].'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								else 
								{
									$string .= '"><td><a class="folder-id" name="'.$value['id'].'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								echo $string;
								show((array)$value['children'], $str);
							}
							else 
							{
								if(key_exists('parent_id', $value) AND $value['parent_id'] != 0)
								{
									$string .= ' treegrid-parent-'.$value['parent_id'].'">';
									$string .= '<td><a class="folder-id" name="'.$value['id'].'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								else
								{
									$string .= '"><td><a class="folder-id" name="'.$value['id'].'">'.$value['display_name'].'</a></td></tr>'."\n";
								}
								echo $string;
							}										
						}
					}
					show($list);
					?>
				</table>
      		</div> 
      		<div class="cols-sm-8" style="max-height: 60%; overflow: scroll;overflow-x: hidden">
      			<div id="results"></div>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>