<?php defined('SYSPATH') or die('No direct script');
class Controller_Categories extends Controller_AdminTemplate
{	
	/*
	 * Funkcja dodająca kategorie stron
	 */
	public function action_add()
	{
		if($this->_auth->logged_in('chef_editor'))
		{
			$category_list = ORM::factory('Categories')->find_all();
			$list = $this->_prepare_list_array($category_list);
			$this->template->content = View::factory( 'template/admin/categories/add');
			$this->template->content->bind('category_list', $list['tree']);
			if(isset($_POST['add_category']))
			{
				try
				{
					$category				= ORM::factory('Categories');
					$category->parent_id 	= $this->request->post('parent_category');
					$category->name			= $this->request->post('category_name');
					$category->user_id		= $this->_auth->get_user()->pk();
					$category->date_add		= date("Y-m-d H:i:s");
					$category->change_date	= date("Y-m-d H:i:s");
					$category->save();
					$this->_set_message('success', __('NO_ERROR_SUCCES_ADD_CATEGORY'));
					HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
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
	public function action_list()
	{
		if($this->_auth->logged_in('chef_editor'))
		{
			
			$category_list = ORM::factory('Categories')->_get_category_list();
			$list = 	$this->_prepare_database_array($category_list);
			$this->template->content = View::factory('template/admin/categories/list');
			$this->template->content->bind('list', $list['tree']);
		}
	}
	public function action_edit()
	{
		if($this->_auth->logged_in('chef_editor'))
		{
			if($this->request->param('id'))
			{
				$category_list = ORM::factory('Categories')->find_all();
				$list = $this->_prepare_list_array($category_list);
				$category_detail = ORM::factory('Categories', $this->request->param('id'))->as_array();
				$this->template->content = View::factory('template/admin/categories/edit');
				$this->template->content->bind('category_list', $list['tree'])->bind('category_detail', $category_detail);
				if(isset($_POST['update_category']))
				{
					try
					{
						if($this->request->post('parent_category') != $category_detail['id'])
						{
							$category				= ORM::factory('Categories', $this->request->param('id'));
							$category->parent_id 	= $this->request->post('parent_category');
							$category->name			= $this->request->post('category_name');
							$category->user_id		= $this->_auth->get_user()->pk();
							$category->change_date	= date("Y-m-d H:i:s");
							$category->save();
							$this->_set_message('success', __('NO_ERROR_SUCCES_UPDATE_CATEGORY'));
							HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
						}
						else 
						{
							$this->_set_message('error', 'ERROR_PARENT_ID_IS_IDENTICAL_AS_OWN');
						}
					}
					catch(ORM_Validation_Exception $e)
					{
						$this->_set_message('error', $e->errors('avatar'));
					}
				}
			}
		}
	}
	public function action_delete()
	{
		if($this->_auth->logged_in('chef_editor'))
		{
			if($this->request->param('id'))
			{
				$this->template->content = View::factory( 'template/admin/others/confirm_delete');
				if(isset($_POST['process_delete']))
				{
					try
					{
						if($this->_is_child_category($this->request->param('id')))
						{
							$this->_delete_multi_category($this->request->param('id'));
						}
						else 
						{
							$this->_delete_category($this->request->param('id'));
						}
					}
					catch(ORM_Validation_Exception $e)
					{
						$this->_set_message('error', $e->errors('avatar'));
					}
				}
				if(isset($_POST['reject_delete']))
				{
					HTTP::redirect(URL::site($this->request->post('return_url'), TRUE), 302);
				}
			}
		}
	}
	public function _delete_multi_category($id)
	{
		$categ = ORM::factory('Categories')->where('parent_id', '=', $id)->find();
		$current_id = $id;
		$child_id = $categ->id;
		echo $child_id.'-';
		$this->_delete_category($current_id);
		if($this->_is_child_category($child_id))
		{
			$this->_delete_multi_category($child_id);
		}
		else 
		{
			$this->_delete_category($child_id);
		}
	}
	public function _delete_category($id)
	{
		try
		{
			$cat = ORM::factory('Categories', $id);
			$cat->delete();
			return TRUE;
		}
		catch(ORM_Validation_Exception $e)
		{
			return FALSE;
		}
	}
	public function _is_child_category($id)
	{
		$category = ORM::factory('Categories')->where('parent_id', '=', $id)->count_all();
		if($category > 0)
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}
	public function _prepare_database_array($list)
	{
		$temp = array();
		$indexed_arr = array();
		foreach($list as $key => $value)
		{
				$temp[$value['category_id']]['id'] 			= $value['category_id'];
				$temp[$value['category_id']]['parent_id'] 	= $value['category_parent_id'];
				$temp[$value['category_id']]['name'] 		= $value['category_name'];
				$temp[$value['category_id']]['create_date'] = $value['category_create_date'];
				$temp[$value['category_id']]['date_change'] = $value['category_date_change'];
				$temp[$value['category_id']]['u_name'] 		= $value['user_name'];
				$temp[$value['category_id']]['u_surname'] 	= $value['user_surname'];
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
		print_r($tmp['tree']);
		return $tmp;
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
