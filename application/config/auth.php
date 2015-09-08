<?php defined('SYSPATH') or die('No direct access allowed.');
 
return array(
 
    'driver'       => 'ORM',
    'hash_method'  => 'sha256',
    'hash_key'     => hash_hmac('sha256', 'i tak nie zalamiesz haszla', 'sdfsdf46s5f465s4f6sd1f'),
    'lifetime'     => 1209600,
    'session_key'  => 'auth_user',
 
    // Username/password combinations for the Auth File driver
    'users' => array(
        // 'admin' => '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918',
    ),
 
); 
