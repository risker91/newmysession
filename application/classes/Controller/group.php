<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends All
{
    public function action_index()
	{
                $group = new Model_Classmate();                
                
                $group_id=$this->id_group;                  
                
                $data['groupid'] = $group_id;
                $data['group'] = $group->ShowClassmates($group_id);  
                
                $this->template->modul = view::factory ('vgroup', $data);           
             }
                        
                         
                        
                        
                        
                        
                       

                
                
                






                     
        
        
        
        
        
                        
       
}
         