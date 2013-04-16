<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Updates extends All
{
    
     
    
    
      public function action_index()
              {      
            $up = new Model_Update();
            $cm    = new Model_Classmate(); 
            
        
            $data['update']= $up->getAction($this->id_group);
            $data['count'] = count($data['update']);
            
            
            $data['name_modul'] = 'Updates';
          
         
            $this->template->modul = View::factory('update-index',$data);
 
                
                
              }
 }
            
            