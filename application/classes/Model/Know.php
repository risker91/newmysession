<?php defined('SYSPATH') or die('No direct script access.');

class Model_Know extends Kohana_ORM
{
    
     protected $_belongs_to = array(
                'groups'    => array(
                'model'         => 'group',
                'foreign_key' => 'id',
                )
                );
    
    
    
    function show_knows($group_id)
    {
        
        $res='';
         $know = ORM::factory('know')
                 ->where("visible","=",1)
                 ->where("group_id","=",$group_id)
                 ->find_all();      
         
         foreach ($know as $mas){
           
             $res['know']=$mas->text;  
           
         }
                return $res;        
    }
    
    
    
    
}
  
    