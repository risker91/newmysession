<?php defined('SYSPATH') or die('No direct script access.');

class Model_Spec extends Kohana_ORM


{
        function get_spec($id)
    {
         $spec = ORM::factory('spec')->where("fac_id","=",$id)->find_all();         
         
          return $spec;  
       
    }
    
    
    
    
    
}