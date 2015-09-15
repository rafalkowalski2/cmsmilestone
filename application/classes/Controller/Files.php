<?php defined('SYSPATH') or die('No direct script');
class Controller_Files extends Controller_AdminTemplate
{
	/*public function action_add_folder()
	{
		if($this->_auth->logged_in('admin'))
		{
			$folder = ORM::factory('Folders');
			$folder_list = clone $folder;
			$list = $folder_list->find_all()->as_array();
			$list = $this->prepare_folder_list($list);
			$this->template->content = View::factory( 'template/admin/files/add_folder' );
			$this->template->content->bind('list', $list['tree'])->bind('levels', $list['levels']);
			$dir = 'public/upload/';
			if($_POST['add_folder'])
			{
				$name = $this->prepare_name_folder($this->request->post('display_name'));
				if($this->request->post('parent_folder') != 0)
				{
					$dir = $this->get_dir_to_create_folder($this->request->post('parent_folder')).'/';
				}
				if($this->create_folder($name, $dir))
				{
					try
					{
						$file 					= ORM::factory('Folders');
						$file->parent_id 		= $this->request->post('parent_folder');
						$file->user_id			= $this->_auth->get_user()->pk();
						$file->display_name		= $this->request->post('display_name');
						$file->name				= $this->request->post('name');
						$file->dir				= $dir.$name;
						$file->date_create 		= date("Y-m-d H:i:s"); 
						$file->date_last_change	= date("Y-m-d H:i:s");
						$file->description		= $this->request->post('description');
						$file->save();	
					}
					catch(ORM_Validation_Exception $e)
					{
						if($this->delete_folder($name, $dir))	
						$this->_set_message('error', $e->errors('avatar'));
					}
				}
			}
		}
		else 
		{
			echo 'no access';	
		}
	}*/
	public function prepare_name_folder($name)
	{
		$name = strtolower($name);
		$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        					'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
		$name = strtr( $name, $unwanted_array );
		return $name;
	}
	public function get_dir_to_create_folder($id)
	{
		$folder = ORM::factory('Folders', $id);
		return $folder->dir;
	}
	public function delete_folder($name, $dir)
	{
		if(is_dir($dir.$name))
		{
			if(rmdir($dir.$name))
			{
				return TRUE;
			}
			else 
			{
				return FALSE;	
			}
		}
	}
	public function create_folder($name, $dir)
	{
		echo  $dir.$name;
		if(mkdir($dir.$name, 0777))
		{
			return TRUE;
		}
		else
		{
			return FALSE;		
		}
	}
	public function prepare_folder_list($list)
	{
		$temp = array();
		$indexed_arr = array();
		
		foreach($list as $key => $value)
		{
				$temp[$value->id]['id'] 			= $value->id;
				$temp[$value->id]['parent_id'] 		= $value->parent_id;
				$temp[$value->id]['name'] 			= $value->name;
				$temp[$value->id]['display_name'] 	= $value->display_name;	
				$temp[$value->id]['dir']			= $value->dir;	
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
	public function levels_array($arr)
	{
		/*$levels = array();
		print_r($arr);
		function calculate($arr, $keys = null)
		{
			static $i = 0;
			foreach($arr as $key =>  $value)
			{
				if(isset($value['children']))
				{
						echo $key.'-';
						print_r($value['children']);
						$id = $key;
						$i++;
						$levels[$id]++; 
						calculate($value['children']);
				}
				
			}
			return $levels;
		}
		print_r(calculate($arr));
		return $i;*/
	}
	public function action_add()
	{
		if($this->_auth->logged_in('editor'))
		{
			$folder = ORM::factory('Folders');
			$folder_list = clone $folder;
			$list = $folder_list->find_all()->as_array();
			$list = $this->prepare_folder_list($list);
			$this->template->content = View::factory( 'template/admin/files/add' );
			$this->template->content->bind('list', $list['tree'])->bind('levels', $list['levels']);
			if(isset($_POST['add_files']))
			{
				print_r($_FILES);
				for($i=0; $i<count($_FILES['file']['name']); $i++) 
				{
					$file['file'] = array('name' => $_FILES['file']['name'][$i] , 
										  'type'=> $_FILES['file']['type'][$i] , 
										  'tmp_name' => $_FILES['file']['tmp_name'][$i], 
										  'error' => $_FILES['file']['error'][$i], 
										  'size' => $_FILES['file']['size'][$i]);
					echo $i;
					$this->_upload_file($file['file'], $file['file']['name'], ORM::factory('Folders', $this->request->post('dir'))->dir);
					$this->_upload_file_to_database($file['file'], $this->_auth->get_user()->pk(), $this->request->post('dir'));
				}

			}
		}
	}
	public function _upload_file_to_database($upload, $user_id, $folder_id)
	{
		$upload['name'] = $this->_prepare_name_folder($upload['name']);	
		try
		{
			$file = ORM::factory('Files');
			$file->user_id		= $user_id;
    		$file->folder_id	= $folder_id;
    		$file->name			= $upload['name'];
    		$file->type			= $upload['type'];
    		$file->size			= $upload['size'];
    		$file->date_add		= date("Y-m-d H:i:s");
			$file->save();
			$this->_set_message('success', 'FILE_UPLOAD_SUCCESS');
			//HTTP::redirect(URL::site($this->request->uri(), TRUE), 302);
		}
		catch(ORM_Validation_Exception $e)
		{
			$this->_set_message('error', $e->errors('avatar'));
		}
	}
	public function _upload_file($file, $name, $director)
	{
		$directory = DOCROOT.$director.'/';
		if ( ! Upload::valid($file) OR ! Upload::not_empty($file))
        {
			return FALSE;	
		}
		$name = $this->_prepare_name_folder($name);
		if ($file = Upload::save($file, $name, $directory))
        {
        	return TRUE;
		}
	}
	public function _prepare_name_folder($name)
	{
		$name = strtolower($name);
		$unwanted_array = array( ' '=> '_', 'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        					'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
		$name = strtr( $name, $unwanted_array );
		return $name;
	}
	public function action_manager()
	{
		if($this->_auth->logged_in('admin'))
		{
			$folder = ORM::factory('Folders');
			$folder_list = clone $folder;
			$list = $folder_list->find_all()->as_array();
			$list = $this->prepare_folder_list($list);
			$this->template->content = View::factory( 'template/admin/files/manager' );
			$this->template->content->bind('list', $list['tree'])->bind('levels', $list['levels']);
			if($this->request->param('id'))
			{
				$files = ORM::factory('Files')->get_files_list($this->request->param('id'));
				$this->template->content->bind('files_list', $files);
			}
		}
	}
	public function action_delete()
	{
		if($this->_auth->logged_in('admin'))
		{
			if($this->request->param('id'))
			{
				$file	= ORM::factory('Files', $this->request->param('id'));
				$folder	= ORM::factory('Folders', $file->folder_id);
				if(is_file($folder->dir.'/'.$file->name))
				{
					unlink($folder->dir.'/'.$file->name);
					if(!is_file($folder->dir.'/'.$file->name))
					{
						try
						{
							$file->delete();
							$this->_set_message('success', 'FILE_SUCCESS_DELETE');
							HTTP::redirect(URL::site($this->request->referrer(), TRUE), 302);
						}
						catch(ORM_Validation_Exception $e)
						{
							$this->_set_message('error', $e->errors('avatar'));
						}
					}
				}
			}
		}
	}
	
}
