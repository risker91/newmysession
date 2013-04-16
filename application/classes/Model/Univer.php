<?php defined('SYSPATH') or die('No direct script access.');

class Model_Univer extends Kohana_ORM
{
    
    
    
    
    function get_univer($id)
    {
         $univer = ORM::factory('univer')->where("city_id","=",$id)->find_all();         
         
          return $univer;  
       
    }
    
    
    
    
}
  
    