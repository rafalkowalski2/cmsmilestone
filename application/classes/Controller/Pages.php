<?php defined('SYSPATH') or die('No direct script');
class Controller_Pages extends Controller_AdminTemplate
{
	public function action_add()
	{
		if($this->_auth->logged_in('editor'))
		{
			$category_list = ORM::factory('Categories')->find_all();
			$category_list = $this->_prepare_list_array($category_list);
			print_r($category_list['tree']);
			$this->template->content = View::factory( 'template/admin/pages/add' );
			$this->template->content->bind('category_list', $category_list['tree']);
		}
		else 
		{
			echo 'no access';	
		}
	}
	/*
	 * Funkcja dodająca kategorie stron
	 */
	public function _prepare_list_array($list)
	{
		$temp = array();
		$indexed_arr = array();
		
		foreach($list as $key => $value)
		{
				$temp[$value->id]['id'] 			= $value->id;
				$temp[$value->id]['parent_id'] 		= $value->parent_id;
				$temp[$value->id]['name'] 			= $value->name;
		}
		foreach($temp as $item)
		{
       		 $indexed_arr[$item['id']] = $item;
		}
		$levels = array();
		$tree = array();
		$level = 0;
		foreach($indexed_arr as $id => $v)
		{
        	$item = &$indexed_arr[$id];
       		if($item['parent_id'] == 0)
        	{
                $tree[$id] = &$item;
				$tree[$id]['start'] = true;
				$levels[$id]++;
        	}
       		elseif(isset($indexed_arr[$item['parent_id']]))
        	{
        		$indexed_arr[$item['parent_id']]['children'][$id] = &$item;
				$levels[$item['parent_id']]++;
        	}
       	 	else
        	{
                $tree['_orphans_'][$id] = &$item;
        	}
		}
		//print_r( $levels);
		$tmp['tree'] = $tree;
		$tmp['levels'] = $levels;
		//print_r($tmp['tree']);
		return $tmp;
	}
}
