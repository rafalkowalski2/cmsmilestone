<?php

defined('SYSPATH') or die('No direct script');

class Controller_Pages extends Controller_AdminTemplate {

    public function action_add() {
        if ($this->_auth->logged_in('editor')) {
            $category_list = ORM::factory('Categories')->find_all();
            $category_list = $this->_prepare_list_array($category_list);
            print_r($category_list['tree']);
            $folder = ORM::factory('Folders');
            $folder_list = clone $folder;
            $list = $folder_list->find_all()->as_array();
            $list = $this->prepare_folder_list($list);
            $this->template->content = View::factory('template/admin/pages/add');
            $this->template->content->bind('category_list', $category_list['tree']);
            $this->template->content->bind('list', $list['tree'])->bind('levels', $list['levels']);
            if (isset($_POST['add_page'])) {
                print_r($_POST);
                try {
                    if ($this->request->post('page_id') != 0) {
                        $page = ORM::factory('Pages', $this->request->post('page_id'));
                    } else {
                        $page = ORM::factory('Pages');
                    }
                    //$page = ORM::factory('Pages');
                    $page->process = 'user';
                    $page->title = $this->request->post('page_name');
                    $page->description = $this->request->post('meta_description');
                    $page->keywords = $this->request->post('meta_keywords');
                    $page->available = $this->request->post('page_available');
                    $page->available_off = $this->request->post('page_available_off');
                    $page->available_to = $this->request->post('page_available_to');
                    $page->content = $this->request->post('page_value');
                    $page->date_create = date("Y-m-d H:i:s");
                    $page->date_change = date("Y-m-d H:i:s");
                    $page->views = 0;
                    $page->save();
                    $category = ORM::factory('Categories')->where('id', '=', $this->request->post('parent_category'))->find();
                    $page->add('categories', $category);
                    $user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
                    $page->add('user', $user);
                } catch (ORM_Validation_Exception $e) {
                    $this->_set_message('error', $e->errors('avatar'));
                }
            }
        } else {
            echo 'no access';
        }
    }

    public function action_ajax_autosave_page() {
        header('Content-type:application/json');
        header('Content-type: text/plain; charset=utf-8');
        $this->auto_render = FALSE;
        try {
            if ($this->request->post('page_id') != 0) {
                $page = ORM::factory('Pages', $this->request->post('page_id'));
            } else {
                $page = ORM::factory('Pages');
            }
            $page->process = 'system_autosave';
            $page->title = $this->request->post('page_name');
            $page->description = $this->request->post('meta_description');
            $page->keywords = $this->request->post('meta_keywords');
            $page->available = $this->request->post('page_available');
            $page->available_off = $this->request->post('page_available_off');
            $page->available_to = $this->request->post('page_available_to');
            $page->content = htmlspecialchars($this->request->post('page_value'));
            $page->date_create = date("Y-m-d H:i:s");
            $page->date_change = date("Y-m-d H:i:s");
            $page->views = 0;
            $page->save();
            sleep(2);
            print_r(json_encode(array('page_id' => $page->id)));
        } catch (ORM_Validation_Exception $e) {
            //$this->_set_message('error', $e->errors('avatar'));
        }
        //sleep(5);	
    }

    public function action_list() {
        if ($this->_auth->logged_in('chef_editor')) {
            $where_cat = !empty($_GET['category_filter']) ? (int)$_GET['category_filter']: null;
            $where_user = !empty($_GET['author_filter']) ? (int)$_GET['author_filter']: null;
            $title_like = !empty($_GET['title_filter']) ? strip_tags(htmlspecialchars(trim(stripcslashes($_GET['title_filter'])))): null;
            $where_available = !empty($_GET['p_available_filter']) ? (int)$_GET['p_available_filter'] : NULL;
            $this->template->content = View::factory('template/admin/pages/list');
            $category_list = ORM::factory('Categories')->find_all();
            $user_list_to_filter = ORM::factory('User')->find_all();
            $pages_list = ORM::factory('Pages')->_get_pages_list($where_cat, $where_user, $title_like, $where_available);
            $category_list_to_filter = $category_list;
            $this->template->content->bind('category_list_to_filter', $category_list_to_filter);
            $this->template->content->bind('user_list_to_filter', $user_list_to_filter);
            $this->template->content->bind('pages_lists', $pages_list);
            var_dump($pages_list);
           echo $where_cat;
           echo $where_user;
           echo $title_like;
            //$category_list = $this->_prepare_list_array($category_list);
        }
        else
        {
            $this->_to_low_permissions('PAGES LIST');
        }
    }
    public function action_edit()
    {
        if($this->_auth->logged_in('chef_editor'))
        {
            $id_page = (int)$this->request->param('id');
            if(!empty($id_page))
            {
                //jest trona
            }
            else
            {
                //nie ma id wiec redirect na blad;
            }
            //może wszystko
        }
        else if($this->_auth->logged_in('editor'))
        {
            //tylko swoje
            $id_page = (int)$this->request->param('id');
            if(!empty($id_page))
            {
                //jest trona
            }
            else
            {
                //nie ma id wiec redirect na blad;
            }
        }
        else
        {
            $this->_to_low_permissions("PAGE_ANY_EDIT");
        }
    }
    public function _prepare_pages_list($categories,$pages)
    {
        $temp = array();
        foreach($categories as $cat_key => $cat_val)
        {
            $temp[$cat_val->name] = false;
            foreach($pages as $page_key => $page_val)
            {
                
                if($cat_val->id == $page_val['cat_id'])
                {
                    $temp[$cat_val->name][$page_key] = $pages[$page_key];
                }
            }
           
        }
        return $temp;
    }
    public function prepare_folder_list($list) {
        $temp = array();
        $indexed_arr = array();

        foreach ($list as $key => $value) {
            $temp[$value->id]['id'] = $value->id;
            $temp[$value->id]['parent_id'] = $value->parent_id;
            $temp[$value->id]['name'] = $value->name;
            $temp[$value->id]['display_name'] = $value->display_name;
            $temp[$value->id]['dir'] = $value->dir;
        }
        foreach ($temp as $item) {
            $indexed_arr[$item['id']] = $item;
        }
        $levels = array();
        $tree = array();
        $level = 0;
        foreach ($indexed_arr as $id => $v) {
            $item = &$indexed_arr[$id];
            if ($item['parent_id'] == 0) {
                $tree[$id] = &$item;
                $tree[$id]['start'] = true;
                $levels[$id] ++;
            } elseif (isset($indexed_arr[$item['parent_id']])) {
                $indexed_arr[$item['parent_id']]['children'][$id] = &$item;
                $levels[$item['parent_id']] ++;
            } else {
                $tree['_orphans_'][$id] = &$item;
            }
        }
        //print_r( $levels);
        $tmp['tree'] = $tree;
        $tmp['levels'] = $levels;
        //print_r($tmp['tree']);
        return $tmp;
    }

    /*
     * Funkcja dodająca kategorie stron
     */

    public function _prepare_list_array($list) {
        $temp = array();
        $indexed_arr = array();

        foreach ($list as $key => $value) {
            $temp[$value->id]['id'] = $value->id;
            $temp[$value->id]['parent_id'] = $value->parent_id;
            $temp[$value->id]['name'] = $value->name;
        }
        foreach ($temp as $item) {
            $indexed_arr[$item['id']] = $item;
        }
        $levels = array();
        $tree = array();
        $level = 0;
        foreach ($indexed_arr as $id => $v) {
            $item = &$indexed_arr[$id];
            if ($item['parent_id'] == 0) {
                $tree[$id] = &$item;
                $tree[$id]['start'] = true;
                $levels[$id] ++;
            } elseif (isset($indexed_arr[$item['parent_id']])) {
                $indexed_arr[$item['parent_id']]['children'][$id] = &$item;
                $levels[$item['parent_id']] ++;
            } else {
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
