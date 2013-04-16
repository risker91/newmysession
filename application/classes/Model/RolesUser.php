<?php defined('SYSPATH') or die('No direct script access.');

class Model_Rolesuser extends ORM
{
  
    protected $_primary_key = 'user_id';
    
    protected $_table_name = 'roles_users';  
    
    
     protected $_belongs_to = array(
            'user' => array(
                   'model' => 'user',
                   'foreign_key' => 'id'
            )
         );
    
    
    
    
    
    
}