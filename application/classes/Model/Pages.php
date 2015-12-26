<?php

class Model_Pages extends ORM {

    protected $_table_name = 'pages';
    protected $_table_columns = array(
        'id' => NULL,
        'process' => NULL,
        'title' => NULL,
        'description' => NULL,
        'keywords' => NULL,
        'available' => NULL,
        'available_off' => NULL,
        'available_to' => NULL,
        'content' => NULL,
        'date_create' => NULL,
        'date_change' => NULL,
        'views' => NULL
    );
    protected $_has_many = array(
        'categories' => array('model' => 'Categories', 'through' => 'pages_categories'),
        'user' => array('model' => 'User', 'far_key' => 'user_id', 'through' => 'page_user'),
    );

    public function rules() {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'description' => array(
                array('not_empty'),
            ),
            'keywords' => array(
                array('not_empty'),
            ),
            'available' => array(
                array('not_empty'),
                array('digit'),
            ),
            'content' => array(
                array('not_empty'),
            ),
            'date_create' => array(
                array('not_empty'),
                array('date'),
            ),
            'date_change' => array(
                array('not_empty'),
                array('date'),
            ),
            'views' => array(
                array('not_empty'),
                array('digit'),
            )
        );
    }

    public function filters() {
        return array(
            'content' => array(
                array('trim'),
        ));
    }

    public function _get_pages_list($w_cat = NULL, $w_user = NULL, $l_title = NULL, $w_available = NULL) {
        $query = DB::select(
                                //pages
                                array('pages.id', 'page_id'), array('pages.title', 'page_title'),
                                array('pages.date_create', 'page_dcreate'),
                                array('pages.date_change', 'page_dchange'),
                                array('pages.available', 'page_available'),
                                //users
                                array('users.id', 'user_id'), array('users.name', 'user_name'), array('users.surname', 'user_surname'),
                                //categories
                                array('categories.id', 'cat_id'), array('categories.name', 'cat_name')
                        )
                        ->from('pages')
                        ->join('page_user')
                        ->on('page_user.pages_id', '=', 'pages.id')
                        ->join('users')
                        ->on('page_user.user_id', '=', 'users.id')
                        ->join('pages_categories')
                        ->on('pages_categories.pages_id', '=', 'pages.id')
                        ->join('categories')
                        ->on('pages_categories.category_id', '=', 'categories.id')
                        ->where('pages.process', '=', 'user');
                        
        if($w_cat)
        {
            $query = $query->and_where('categories.id', '=', $w_cat);
        }
        if($w_user)
        {
            $query = $query->and_where('users.id', '=', $w_user);
        }
        if($l_title)
        {
           // echo $l_title;
            //$query = $query->and_where('pages.title', 'LIKE', $l_title); // narazie nie działa 
        }
        if($w_available > 0)
        {
            $query = $query->and_where('pages.available', '=', 1);
        }
        if($w_available < 0)
        {
            $query = $query->and_where('pages.available', '=', 0);
        }
        if(0)
        {
            $query = $query->and_where('pages.date_create', 'BETWEEN', array($then,$now));
        }
       // print_r($query);
        return $query->execute()->as_array();
                        
    }

}
