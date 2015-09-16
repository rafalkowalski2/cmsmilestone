<?php defined('SYSPATH') or die('No direct script');
class Controller_Pages extends Controller_AdminTemplate
{
	public function action_add()
	{
		if($this->_auth->logged_in('editor'))
		{
			$this->template->content = View::factory( 'template/admin/pages/add' );
		}
		else 
		{
			echo 'no access';	
		}
	}
	/*
	 * Funkcja dodająca kategorie stron
	 */
	public function action_add_category()
	{
		if($this->_auth->logged_in('chef_editor'))
		{
			$category_list = ORM::factory('Categories')->find_all();
			$list = $this->_prepare_list_array($category_list);
			$this->template->content = View::factory( 'template/admin/pages/add_category');
			$this->template->content->bind('category_list', $list['tree']);
			if(isset($_POST['add_category']))
			{
				try
				{
					$category				= ORM::factory('Categories');
					$category->parent_id 	= $this->request->post('parent_category');
					$category->name			= $this->request->post('category_name');
					$category->author		= $this->_auth->get_user()->pk();
					$category->date_add		= date("Y-m-d H:i:s");
					$category->change_date	= date("Y-m-d H:i:s");
					$category->save();
				}
				catch(ORM_Validation_Exception $e)
				{
					$this->_set_message('error', $e->errors('avatar'));
				}
			}
		}
		else 
		{
			echo 'no access';	
		}
	}
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
