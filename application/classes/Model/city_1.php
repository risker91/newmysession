<?php defined('SYSPATH') or die('No direct script access.');

class Model_City extends Kohana_ORM
{
    
    
    
    
    function show_city()
    {
         $city = ORM::factory('city')->find_all();         
         
          return $city;        
    }
    
    
    
    
}
  
    