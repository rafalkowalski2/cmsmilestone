<?php
class Helpers_Translations{
	public static function generate_inputs_add($array, $category)
	{
		$string = "\n".'<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
		foreach($category as $key => $cat)
		{
			$string .= '
			 <div class="panel panel-default">
    			<div class="panel-heading" role="tab" id="heading'.$key.'">
      				<h4 class="panel-title">
       					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$cat.'" aria-expanded="true" aria-controls="'.$cat.'">
          					'.$cat.'
        				</a>
      				</h4>
    			</div>
    			<div id="'.$cat.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$key.'">
     	 		<div class="panel-body">';
					
			foreach($array[$cat] as $val)
			{
				$string .= '
				<div class="col-sm-4">
					<div class="form-group">
						<label for="'.$val.'">'.$val.'</label>
    					<input type="text" name="'.$val.'" class="form-control" id="'.$val.'">
					</div>
				</div>';
			}
			$string .= '
			</div>
			</div>
			</div>
			';
		}
			$string .= '</div>';
			return $string;
	}
	public static function generate_inputs_edit($array, $transtaltion, $category)
	{
		$string = "\n".'<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
		foreach($category as $key => $cat)
		{
			$string .= '
			 <div class="panel panel-default">
    			<div class="panel-heading" role="tab" id="heading'.$key.'">
      				<h4 class="panel-title">
       					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$cat.'" aria-expanded="true" aria-controls="'.$cat.'">
          					'.$cat.'
        				</a>
      				</h4>
    			</div>
    			<div id="'.$cat.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$key.'">
     	 		<div class="panel-body">';
			foreach($array[$cat] as $val)
			{
				$string .= '
				<div class="col-sm-4">
					<div class="form-group">
						<label for="'.$val.'">'.$val.'</label>
    					<input type="text" name="'.$val.'" class="form-control" id="'.$val.'" value="'.$transtaltion[$val].'">
					</div>
				</div>';
			}
			$string .= '
			</div>
			</div>
			</div>
			';
		}
		$string .= '</div>';
		return $string;
	}
	public static function generate_translations_list($array)
	{
		//print_r($array);
		$string = '';
		$i = 1;
		foreach($array as $key => $val)
		{
			$string .= '
			<tr>
				<td>'.$i.'</td>
				<td><a href="'.URL::site(Request::current()->param('language').'/admin/translations/edit/'.$val['translation_id']).'">'.$val['translation_language'].'</a></td>
				<td>'.$val['translation_language_symbol'].'</td>
				<td>'.$val['user_name'].' '.$val['user_surname'].'</td>
				<td>'.$val['translation_version'].'</td>
				<td>'.$val['translation_create_date'].'</td>
				<td>'.$val['translation_date_change'].'</td>
				<td><a href="'.URL::site(Request::current()->param('language').'/admin/translations/edit/'.$val['translation_id']).'">'.__('EDIT').'</a> | <a href="'.URL::site(Request::current()->param('language').'/admin/translations/delete/'.$val['translation_id']).'">'.__('DELETE').'</a></td>
			</tr>
			';
			$i++;
		}
		return $string;
	}
	public static function generate_languages_lists($arr)
	{
		$string = '';
		foreach($arr as  $value)
		{
			if(Request::current()->param('language') == $value->language_symbol)
			{
				$string .= '<option value="'.$value->language_symbol.'" selected="selected">'.$value->language.'</option>
					';
			}
			else 
			{
				$string .= '<option value="'.$value->language_symbol.'">'.$value->language.'</option>
					';
			}
			
		}
		return $string;
	}
}