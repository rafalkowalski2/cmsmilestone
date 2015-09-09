<?php
class Helpers_Translations{
	public static function generate_inputs_add($array)
	{
		$string = '';
		foreach($array as $val)
		{
			$string .= '
			<div class="col-sm-4">
				<div class="form-group">
					<label for="'.$val.'">'.$val.'</label>
    				<input type="text" name="'.$val.'" class="form-control" id="'.$val.'">
				</div>
			</div>';
		}
		return $string;
	}
	public static function generate_inputs_edit($array)
	{
		$string = '';
		foreach($array as $val)
		{
			$string .= '
			<div class="col-sm-4">
				<div class="form-group">
					<label for="'.$val.'">'.$val.'</label>
    				<input type="text" name="'.$val.'" class="form-control" id="'.$val.'" value="'.__($val).'">
				</div>
			</div>';
		}
		return $string;
	}
}
