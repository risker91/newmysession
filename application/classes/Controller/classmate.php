<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Classmate extends All
{
    
     
    
    
    
            public function action_profile()
	{       
                $data = array();
                  
                //  $group = new Model_Classmate();
                  $classmate_id=$this->request->param('classmate'); 
                   $group_id= $this->id_group;
                  
                  
                  
                  $mate = ORM::factory('classmate')
                          ->where("group_id","=",$group_id)
                          ->where("id","=",$classmate_id)
                          ->find_all();
                  
                                   
                  
                  foreach ($mate as $v)    {            
                  $data['name'] = $v->name;
                  $data['firstname'] = $v->firstname;
                  $data['avatar'] = $v->avatar_url;
                  $data['year'] = $v->year;}
                 
                 
                  $this->template->modul = view::factory ('vclassmate', $data);
        
        }               
        
        
        
        
             
                                      
                                      
     
                
    
    
    
    
    
    
    
}