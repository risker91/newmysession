<?php defined('SYSPATH') or die('No direct script access.');

class Model_Facultet extends Kohana_ORM


{
        function get_fac($id)
    {
         $fac = ORM::factory('facultet')->where("univer_id","=",$id)->find_all();         
         
          return $fac;  
       
    }
    
    
    
    
    
}